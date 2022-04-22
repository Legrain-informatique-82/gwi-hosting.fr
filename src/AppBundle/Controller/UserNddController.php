<?php


namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\EmailApi;
use AppBundle\Api\UserApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Url;

class UserNddController extends Controller {


    /**
     * @Route("/private/userndd/add", name="adm_gest_ndd")
     * @Security("has_role('ROLE_LEGRAIN')")

     */
    public function indexAction(Request $request){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Lier un utilisateur à un domaine','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $usr = $userConnected->getUser();

        // Récuperation de la liste des utilisateur
        $allUsers = $client->listAllUsers($email,$pwd);
        //var_dump($allUsers);
        $choices = array();
        foreach($allUsers as $u){
            $choices[$u->id]=$u->email.' ('.$u->name.' '.$u->firstname.' - Agence : '.$u->agency->name.')';
        }
        $form = $this->createFormBuilder()
            ->add('usr',ChoiceType::class,array('choices'=>array_flip($choices),'label'=>'Client ou agence : ','attr'=>array('class'=>'combobox')))
            ->add('ndd',TextType::class,array('label'=>'Nom de domaine :'))
            ->add('valid',SubmitType::class,array('label'=>'Lier','attr'=>array('class'=>'btn btn-success')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // save
                $data = $form->getData();
            try {
               $client->createDomainAndSetUser($email, $pwd,$data['usr'],$data['ndd']);
                return $this->redirectToRoute('homepage');



            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }
        }
        return $this->render('UserNdd/Form/liaison.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'name'=>$email,
                'h1'=>"Lier un nom de domaine à un utilisateur",
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }


}