<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 24/11/15
 * Time: 16:22
 */



namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class PriceListController extends Controller{


    /**
     * @Route("/private/priceList/{idPriceList}/gestion", name="price-list-update-prices")
     * @Security("has_role('ROLE_AGENCE') || has_role('ROLE_LEGRAIN')")
     */
    public function priceListUpdatePricesAction(Request $request,$idPriceList){

        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $iduser = $userConnected->getUser()->id;
        $idagency = $userConnected->getUser()->agency->id;



        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list-pricelists', 'label' => 'Listes de tarifs', 'param' => array());
        $breadcrumb[] = array('url' => '', 'label' => 'Modifier les tarifs de la grille', 'param' => array());
        $h1 = "Modifier les tarifs de la grille";



        try {

            $list = $client->listPriceListLines($email,$pwd,$idPriceList);



            $form = $this->createFormBuilder();
            // Un produit par itération
            //dump($list->item);
            foreach($list as $l) {
                $form = $form->add('price_'.$l->idProduct, TextType::class,array('required'=>false,'label'=>'Prix HT','data'=>$l->price));
                $form = $form->add('idProduct_'.$l->idProduct, HiddenType::class,array('required'=>false,'label'=>'Prix HT','data'=>$l->idProduct));
                $form = $form->add('minPrice_'.$l->idProduct, TextType::class,array('required'=>false,'label'=>'Prix temporaire HT','data'=>$l->minPrice));
            }
            $form = $form->add('valid',SubmitType::class,array('label'=>'Mettre à jour la grille','attr'=>array('class'=>'btn btn-warning')));
            $form= $form->getForm();


            $form->handleRequest($request);

            if($form->isValid()){
                $data = $form->getData();

                $options = array();
                // Replace les elements dans un tableau qui sera envoyé au webService afin de mettre à jours les infos pour la liste
                foreach($data as $key => $value){
                    $tmp = explode('_',$key);
                    $options[$tmp[1]][$tmp[0]]=$value;
                }
                //dump($options);
                $client->updateListPriceListLines($email,$pwd,$idPriceList,json_encode($options));
                return $this->redirectToRoute('list-pricelists');

            }
        }catch (\SoapFault $e){
            throw new \SoapFault('error',$e->getMessage());
        }

        return $this->render('PriceList/Form/priceListLines.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'list'=> $list,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }

    /**
     * @Route("/private/priceList", name="list-pricelists")
     * @Security("has_role('ROLE_AGENCE') || has_role('ROLE_LEGRAIN')")
     */
    public function listPriceListAction(Request $request){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        // $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $iduser = $userConnected->getUser()->id;
        $idagency = $userConnected->getUser()->agency->id;

        $breadcrumb = array();
        $breadcrumb[] = array('url' => '', 'label' => 'Listes de tarifs', 'param' => array());
        $h1 = "Listes de tarifs";

        try {
// Appeler méthode de liste des listes de tafifs (pas encore créée).
            $list = $client->listPriceList($email,$pwd);


        }catch (\SoapFault $e){
            throw new \SoapFault('error',$e->getMessage());
        }

        return $this->render('PriceList/List/priceList.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'list'=> $list,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            )
        );


    }

    /**
     * @Route("/private/priceList/update/{idPriceList}", name="price-list-update-liste")
     * @Security("has_role('ROLE_AGENCE') || has_role('ROLE_LEGRAIN')")
     */
    public function updatePriceListAction(Request $request,$idPriceList){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $iduser = $userConnected->getUser()->id;
        $idagency = $userConnected->getUser()->agency->id;

        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list-pricelists', 'label' => 'Listes de tarifs', 'param' => array());
        $breadcrumb[] = array('url' => '', 'label' => 'Modifier la grille', 'param' => array());
        $h1 = "Modifier la grille de tarifs";

        try {
            $priceList = $client->getPriceList($email,$pwd,$idPriceList);

            $form = $this->createFormBuilder()
                ->add('name',TextType::class,array('label'=>'Nom de la grille','data'=>$priceList->name))
                ->add('default',ChoiceType::class,array('choices'=>array('Oui'=>1,'Non'=>0),'label'=>'Grille par défaut (remplacera celle par défaut si elle existe)','expanded'=>true,'data'=>$priceList->isDefault?1:0))
                ->add('submit',SubmitType::class,array('label'=>'Modifier','attr'=>array('class'=>'btn btn-warning')))
                ->getForm();
            $form->handleRequest($request);
            if($form->isValid()){
                $data = $form->getData();
                $priceList = $client->updatePriceList($email,$pwd,$idPriceList,$data['name'],$data['default']==0?false:true);
                return $this->redirectToRoute("price-list-update-prices",array('idPriceList'=>$priceList->id));
            }
        }catch (\SoapFault $e){
            throw new \SoapFault('error',$e->getMessage());
        }

        return $this->render('PriceList/Form/addPriceList.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                //'list'=> $list->item,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            )
        );

    }

    /**
     * @Route("/private/priceList/create", name="create-list-pricelists")
     * @Security("has_role('ROLE_AGENCE') || has_role('ROLE_LEGRAIN')")
     */
    public function createPriceListAction(Request $request){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $iduser = $userConnected->getUser()->id;
        $idagency = $userConnected->getUser()->agency->id;

        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list-pricelists', 'label' => 'Listes de tarifs', 'param' => array());
        $breadcrumb[] = array('url' => '', 'label' => 'Ajouter une grille', 'param' => array());
        $h1 = "Ajouter une grille de tarifs";

        try {

            $form = $this->createFormBuilder()
                ->add('name',TextType::class,array('label'=>'Nom de la grille'))
                ->add('default',ChoiceType::class,array('choices'=>array_flip(array(1=>'Oui',0=>'Non')),'label'=>'Grille par défaut (remplacera celle par défaut si elle existe)','expanded'=>true,'data'=>0))
                ->add('submit',SubmitType::class,array('label'=>'Ajouter','attr'=>array('class'=>'btn btn-success')))
                ->getForm();
            $form->handleRequest($request);
            if($form->isValid()){
                $data = $form->getData();
                $priceList = $client->createPriceList($email,$pwd,$data['name'],$data['default']==0?false:true);
                return $this->redirectToRoute("price-list-update-prices",array('idPriceList'=>$priceList->id));
            }
        }catch (\SoapFault $e){
            throw new \SoapFault('error',$e->getMessage());
        }

        return $this->render('PriceList/Form/addPriceList.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                //'list'=> $list->item,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            )
        );

    }

}
