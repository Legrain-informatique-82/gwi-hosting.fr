<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 26/10/15
 * Time: 15:17
 */
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 15/06/15
 * Time: 09:17
 */
namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use BeSimple\SoapCommon\Type\KeyValue\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Acl\Exception\Exception;


class InterventionController extends Controller
{

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/del-tag-bugzilla/{tag}",name="del_tag_intervention")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function delTagBugzillaAction(Request $request,$idagency,$iduser,$tag)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email = $userConnected->getEmail();
        $pwd = $session->get('pwd');
        $h1 = "Gestion des tags interventions";

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $client->delTagMaintenance($email,$pwd,$iduser,$tag);

        return $this->redirectToRoute('gestTagBugzilla',array('idagency'=>$idagency,'iduser'=>$iduser));
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/gest-tags-bugzilla",name="gestTagBugzilla")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function gestTagBugzillaAction($idagency,$iduser,Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1= "Gestion des tags interventions";

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $customerInfo=$client->getCustomer($email,$pwd,$iduser);
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
        $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
        $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
        $breadcrumb[]=array('url'=>'#','label'=>"Gérer les tags de maintenances",'param'=>array());



        $form = $this->createFormBuilder()
            ->add('tag',TextType::class,array('label'=>'Nouveau tag : '))
            ->add('Ajouter',SubmitType::class,array('label'=>'Ajouter le tag ','attr'=>array('class'=>"btn btn-primary")))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isValid()) {
            // save
            $data = $form->getData();
            try {

               $client->addTagMaintenance($email, $pwd,$iduser,$data['tag']);
                //   return $this->redirectToRoute('homepage');
                return $this->redirectToRoute('gestTagBugzilla',array('idagency'=>$idagency,'iduser'=>$iduser));

            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }
        }



        // Liste des tags pour cet utilisateur
        $tags = $client->listTagsMaintenance($email,$pwd,$iduser);


        // form ajouter un tag

        // return template
        return $this->render('Interventions/List/tags.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'tags'=>$tags,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            )
        );
    }

    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/intervention/{idbug}", name="intervention_d_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/intervention/{idbug}", name="intervention_d_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/intervention/{idbug}", name="intervention_d_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function interventionAction(Request $request,$ndd,$iduser,$idagency,$idbug){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='intervention_d_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'intervention_user','label'=>'Mes interventions','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Détails','param'=>array());
            $type='user';
            $h1 = 'Détails';

        }elseif($routeName=='intervention_d_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('ndd'=>$ndd,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'intervention_admin','label'=>'Interventions','param'=>array('ndd'=>$ndd,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'#','label'=>'Détails','param'=>array());
            $h1 = 'Détails';

            $type='admin';
        }else{
            // intervention_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'intervention_super_admin','label'=>'Interventions','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Détails','param'=>array());
            $type='super_admin';
            $h1 = 'Détails';
        }

      //  $interventions = $client->listInterventions($email,$pwd,$ndd);
        $details = $client->detailIntervention($email,$pwd,$idbug);
        //  dump(json_decode( $client->listInterventions($email,$pwd,'davril-formation-securite.com')));
        //   dump( $client->detailIntervention($email,$pwd,2));

       // dump(json_decode($details));
        return $this->render('Interventions/List/listComments.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndd'=> $ndd,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'h1'=>$h1,
                'details'=>json_decode($details),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            )
        );
    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/intervention", name="intervention_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/intervention", name="intervention_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/intervention", name="intervention_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function listInterventionAction(Request $request,$ndd,$iduser,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='intervention_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Mes interventions','param'=>array());
            $type='user';
            $h1 = 'Mes interventions';

        }elseif($routeName=='intervention_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('ndd'=>$ndd,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('ndd'=>$ndd,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'#','label'=>'Interventions','param'=>array());
            $h1 = 'Interventions';

            $type='admin';
        }else{
            // intervention_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Interventions','param'=>array());
            $type='super_admin';
            $h1 = 'Interventions';
        }

        try {
            $interventions = json_decode($client->listInterventions($email, $pwd, $ndd));

        }catch (\SoapFault $e){

                $interventions=null;
        }
        //dump($interventions);
    //  dump(json_decode( $client->listInterventions($email,$pwd,'davril-formation-securite.com')));
    //   dump( $client->detailIntervention($email,$pwd,2));

        return $this->render('Interventions/List/list.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndd'=> $ndd,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'h1'=>$h1,
                'interventions'=>$interventions,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }
}