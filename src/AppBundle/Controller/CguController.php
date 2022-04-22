<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 30/12/15
 * Time: 14:29
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CguController extends Controller
{

    /**
     * @Route("/private/cgu/list", name="gestion-cgv")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function indexAction(Request $request){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Liste des cgu','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
           $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $usr = $userConnected->getUser();

        $listCgu = $client->listAllCgu($email,$pwd);


        return $this->render('Cgu/List/cgus.html.twig',
            array(
                'listCgus'=>$listCgu,
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'h1'=>"Liste des cgu",
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }



    /**
     * @Route("/private/cgu/add", name="add-cgv")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function addCguAction(Request $request){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'gestion-cgv','label'=>'Liste des cgu','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
           $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $usr = $userConnected->getUser();


        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=>'Nom : '))
            ->add('url',TextType::class,array('label'=>'Url : '))
            ->add('content',TextareaType::class,array('label'=>'Contenu : '))
            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            $data  = $form->getData();
            try{
                $client->addCgu($email, $pwd,$data['name'],$data['content'],$data['url']);
                return $this->redirectToRoute('gestion-cgv');
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }


        return $this->render('Cgu/Form/cgu.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'h1'=>"Ajouter une feuille de CGV",
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }

    /**
     * @Route("/private/cgu/update/{idcgu}", name="update-cgv")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function updateCguAction(Request $request,$idcgu){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'gestion-cgv','label'=>'Liste des cgu','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
           $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        //  $usr = $userConnected->getUser();

        $cgu =$client-> getCgu($email, $pwd,$idcgu);

        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=>'Nom : ','data'=>$cgu->name))
            ->add('url',TextType::class,array('label'=>'Url : ','data'=>$cgu->url))
            ->add('content',TextareaType::class,array('label'=>'Contenu : ','data'=>$cgu->content))
            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            $data  = $form->getData();
            try {
                $client->updateCgu($email, $pwd, $idcgu, $data['name'], $data['content'], $data['url']);
                return $this->redirectToRoute('gestion-cgv');
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }


        return $this->render('Cgu/Form/cgu.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'h1'=>"Ajouter une feuille de CGV",
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }


    /**
     * @Route("/private/cgu/remove/{idcgu}", name="remove-cgv")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function removeCguAction(Request $request,$idcgu){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'gestion-cgv','label'=>'Liste des cgu','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Supprimer','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
           $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        //  $usr = $userConnected->getUser();

        $cgu =$client-> getCgu($email, $pwd,$idcgu);

        $form = $this->createFormBuilder()

            ->add('submit',SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            $data  = $form->getData();
            try {
                $client->removeCgu($email, $pwd, $idcgu);
                return $this->redirectToRoute('gestion-cgv');
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }


        return $this->render('Cgu/Form/removeCgu.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'h1'=>"Supprimer la feuille de CGV",
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }


    /**
     * @Route("/private/cgu/a/{url}", name="lecture-cgv")

     */
    public function readCguAction(Request $request,$url){



        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
           $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        //  $usr = $userConnected->getUser();




        $cgu =$client-> getCguByUrl($email, $pwd,$url);


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>$cgu->name,'param'=>array());

        return $this->render('Cgu/readCgu.html.twig',
            array(

                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'cgu'=>$cgu,
                'iduser'=>$idUser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }
    
}