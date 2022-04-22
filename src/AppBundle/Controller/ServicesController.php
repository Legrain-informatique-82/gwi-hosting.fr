<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 17/06/15
 * Time: 14:30
 */

namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\EmailApi;
use AppBundle\Api\UserApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use AppBundle\Traits\Referer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Url;

class ServicesController extends Controller {

use Referer;

    /**
     * @Route("/private/mes-renouvellements", name="list_all_my_renew")
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function indexAction(Request $request){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $iduser = $userConnected->getUser()->id;
        $idagency = $userConnected->getUser()->agency->id;

        // Liste des ndds pour ce tiers
        $ndds = $client->listNdd($email,$pwd,$iduser);
        // Liste des serveurs pour ce tiers
        $instances = $client->listInstances($email, $pwd, $iduser);
        // On groupe les listes
        $form = $this->createFormBuilder();
        $services = array();
        $arrayNdd=array();
        $arrayHeberMutu=array();
//        $nbNdd = 0;

        // liste des hebers mutu
        $listHeberMutu = $client->listMyHebergementsMutualises($email, $pwd);
        foreach ($listHeberMutu as $he){
            if($he->productHosting->renewByCustomer) {
                $form = $form->add('hebermutu_'.$he->id.'_'.$he->productHosting->product->id,CheckboxType::class,array('label'=>$he->productHosting->name.'('.($he->vhost==null?'NC':$he->vhost).')','required'=>false));
                $item = new \stdClass();
                $item->id = $he->id;
                $item->date = strtotime($he->dateEnding->date);
                $item->name = $he->productHosting->name.'('.($he->vhost==null?'NC':$he->vhost).')';
                $item->type = 'hebermutu';
                $item->idproduct = $he->productHosting->product->id;
                $item->idproductHeber = $he->productHosting->id;
                $arrayHeberMutu[$he->id]=$he->productHosting->id;
                $services[]=$item;
            }
        }


        foreach($ndds as $ndd){
            $form = $form->add('ndd_'.$ndd->id.'_'.$ndd->product->id,CheckboxType::class,array('label'=>$ndd->name,'required'=>false));
            $item = new \stdClass();
            $item->id = $ndd->id;
            $item->date = $ndd->date_registry_end;
            $item->name = $ndd->name;
            $item->type = 'ndd';
            $item->idproduct = $ndd->product->id;
            $item->services=$ndd->services;
            $arrayNdd[$ndd->id]=$ndd->name;
            $services[]=$item;
//            $nbNdd++;
        }
        $arrayInstances=array();
//        $nbInstances=0;
        foreach($instances as $instance){
            $form = $form->add('server_'.$instance->id.'_'.$instance->productRenew->id,CheckboxType::class,array('label'=>$instance->name,'required'=>false));

            $item = new \stdClass();
            $dateEnd= new \DateTime($instance->dateEnd->date);
            $item->id = $instance->id;
            $item->date = $dateEnd->getTimestamp();
            $item->name = $instance->name;
            $item->type = 'instance';
            $item->idproduct = $instance->productRenew->id;
            $item->services=null;
            $arrayInstances[$instance->id]=$instance->name;
            $services[]=$item;
//            $nbInstances++;
        }

        $h1='Mes renouvellements';
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>$h1,'param'=>array());

        $today = new \DateTime();
        $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);


        $form = $form->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')));
        $form = $form->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            $elemsAddToCart = array();
            foreach($data as $key => $value){
                if($value){
                    $exploded = explode('_',$key);
                    list($type,$idelement,$idproduct)=$exploded;
                    $options=array();
                    switch($type){
                        case 'ndd':
                            $options=array('ndd'=>$arrayNdd[$idelement],'period'=>12);
                            break;
                        case 'server':
                            $options=array('instance'=>$arrayInstances[$idelement],'period'=>12);
                            break;
                        case 'hebermutu':
                            $options=array('idProduitHeber'=>$arrayHeberMutu[$idelement],'idHosting'=>$idelement,'period'=>12);
                            break;
                    }
                    $elemsAddToCart[]=array('idProduct'=>$idproduct,'iduser'=>$iduser,'options'=>json_encode($options));
                }
            }

           $client->addListProductsToCart($email, $pwd,json_encode($elemsAddToCart));
            $this->get('session')->getFlashBag()->add(
                'notice',
                'le(s) produit(s) a/ont été ajouté(s) au panier'
            );
            // Redirection vers la page accueil
    //        return $this->redirectToRoute('homepage');

            $params = $this->getRefererParams($request);
            $options = array();
            foreach ($params as $key => $value){
                if(substr($key,0,1)!='_')
                    $options[$key]=$value;
            }
            return $this->redirect($this->generateUrl(
                $params['_route'],
                $options
            ));

          //  return $this->redirectToRoute('pay_cart');


        }

        return $this->render('Services/Form/form.html.twig',array(
            'form'=>$form->createView(),
            'breadcrumb'=>$breadcrumb,
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'h1'=>$h1,

            'iduser'=> $iduser,

            'bugzilla'=>($this->isGranted('ROLE_LEGRAIN')?true:false),
            'services'=>$services,
            'today'=> $today->getTimestamp(),
            'in2months'=>$today->modify('+2 months')->getTimestamp(),
            'afficheProduits'=>$afficheProduits,
            'idagency'=>$idagency,
//            'nbInstances'=>$nbInstances,
//            'nbNdd'=>$nbNdd,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
}