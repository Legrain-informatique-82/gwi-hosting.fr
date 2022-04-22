<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 27/10/15
 * Time: 14:06
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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Acl\Exception\Exception;

class HebergementController extends Controller{


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement/add", name="add_heber_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement/add", name="add_heber_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/hebergement/add", name="add_heber_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function addHebergementAction(Request $request,$idagency,$iduser,$ndd){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        if($routeName=='add_heber_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_user','label'=>'Hébergement','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter','param'=>array());
            $type='user';

        }elseif($routeName=='add_heber_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_admin','label'=>'Hébergement','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter','param'=>array());


            $type='admin';
        }else{
            // hebergement_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_super_admin','label'=>'Hébergement','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter','param'=>array());
            $type='super_admin';
        }
        // On récupère le NDD
        $domain = $client->getNdd($email,$pwd,$ndd);

        // Liste des instances qui ont de la place ce cet utilisateur et de l'agence ( + celle de legrain si le mec est un gestionnaire (et que l'utilisateur est legrain))
        $instances = $client->listInstancesAvailableForHosting($email,$pwd,$iduser);
        //  dump($instances);

        // On récupère le vhost www pour le domaine, s'il existe.
        try {
            $racineVhost = $client->getVhostsPerNddAndVhost($email, $pwd, $ndd, 'www.' . $ndd);
            $idServeurWww=$racineVhost->serverId;
        }catch (\SoapFault $e){
            $racineVhost=null;
            $idServeurWww=null;
        }



        $choice =array();
        foreach($instances as $ins){
            $choice[$ins->id]=$ins->name.($racineVhost?($idServeurWww==$ins->id?' (www.'.$ndd.' sur ce serveur)':''):'');
        }
        // création du frm 1 champ txt optionnel et un radio par instance (obligatoire).

        $form = $this->createFormBuilder()
            ->add('subdomain',TextType::class,array('label'=>'Sous domaine : ','required'=>false))
            ->add('instance',ChoiceType::class,array('label'=>'Serveurs disponibles :','choices' =>array_flip($choice),'data'=>$idServeurWww,'attr'=>array('class'=>'combobox')))
            ->add('add',SubmitType::class,array('label'=>'Creer l\'hébergement','attr'=>array('class'=>'btn btn-success')))
            ->getForm();



        $form->handleRequest($request);
        if ($form->isValid()) {
            $error = false;
            $data = $form->getData();
            $subdomain = $data['subdomain']==''?'www':$data['subdomain'];
            $instance = $data['instance'];
            // On récupère la liste des vhosts pour le domaine.
            $vhostsExistants = $client->getVhostsPerNdd($email,$pwd,$ndd);

            foreach($vhostsExistants as $v){
                if($v->name == $subdomain.'.'.$ndd){
                    $form->addError( new FormError('Site déjà enregistré'));
                    $error = true;
                }
            }
            if(!$error) {
                try {
                    $client->addHebergement($email, $pwd, $iduser, $subdomain, $ndd, $instance);
                    // Retour vers la liste des vhosts
                    $this->get('session')->getFlashBag()->add(
                        'notice',
                        'Votre vhost sera créé sous 20 minutes maximum'
                    );
                    if($type=='super_admin'){
                        return $this->redirectToRoute('hebergement_super_admin',array('ndd'=>$ndd,'iduser'=>$iduser,'idagency'=>$idagency));
                    }elseif($type=='admin'){
                        return $this->redirectToRoute('hebergement_admin',array('ndd'=>$ndd,'iduser'=>$iduser));
                    }else{
                        return $this->redirectToRoute('hebergement_user',array('ndd'=>$ndd));
                    }

                } catch (\SoapFault $e) {
                    $form->addError(new FormError($e->getMessage()));
                }
            }




        }


        return $this->render('Hebergement/Form/add.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndd'=> $domain,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,

                'h1'=>'Ajouter un hébergement pour le domaine '.$ndd,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement/addn", name="add_heber_ndd_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement/addn", name="add_heber_ndd_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/hebergement/addn", name="add_heber_ndd_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function addHebergementNddAction(Request $request,$idagency,$iduser,$ndd){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        if($routeName=='add_heber_ndd_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_user','label'=>'Hébergement','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur','param'=>array());
            $type='user';

        }elseif($routeName=='add_heber_ndd_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
//            var_dump($customerInfo);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_admin','label'=>'Hébergement','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur','param'=>array());


            $type='admin';
        }else{
            // hebergement_ndd_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_super_admin','label'=>'Hébergement','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur','param'=>array());
            $type='super_admin';
        }
        // On récupère le NDD
        $domain = $client->getNdd($email,$pwd,$ndd);

        // Liste des instances qui ont de la place ce cet utilisateur et de l'agence ( + celle de legrain si le mec est un gestionnaire)
       // echo $iduser;
        $instances = $client->listInstancesAvailableForHosting($email,$pwd,$iduser);
         // dump($instances);

        $choice =array();
        foreach($instances as $ins){
            $choice[$ins->id]=$ins->name;
        }
        // création du frm 1 champ txt optionnel et un radio par instance (obligatoire).

        $form = $this->createFormBuilder()
          //  ->add('subdomain',TextType::class,array('label'=>'Sous domaine : ','required'=>false))
            ->add('instance',ChoiceType::class,array('label'=>'Serveurs disponibles :','choices' =>array_flip($choice),'attr'=>array('class'=>'combobox')))
            ->add('add',SubmitType::class,array('label'=>'Creer l\'hébergement','attr'=>array('class'=>'btn btn-success')))
            ->getForm();



        $form->handleRequest($request);
        if ($form->isValid()) {
            $error = false;
            $data = $form->getData();
            $subdomain = 'www';
            $instance = $data['instance'];
            // On récupère la liste des vhosts pour le domaine.
            $vhostsExistants = $client->getVhostsPerNdd($email,$pwd,$ndd);

            foreach($vhostsExistants as $v){
                if($v->name == $subdomain.'.'.$ndd){
                    $form->addError( new FormError('Site déjà enregistré'));
                    $error = true;
                }
            }
            if(!$error) {
                try {
                    $client->addHebergement($email, $pwd, $iduser, $subdomain, $ndd, $instance);
                    // Retour vers la liste des vhosts
                    $this->get('session')->getFlashBag()->add(
                        'notice',
                        'Votre vhost sera créé sous 20 minutes maximum'
                    );
                    if($type=='super_admin'){
                        return $this->redirectToRoute('hebergement_super_admin',array('ndd'=>$ndd,'iduser'=>$iduser,'idagency'=>$idagency));
                    }elseif($type=='admin'){
                        return $this->redirectToRoute('hebergement_admin',array('ndd'=>$ndd,'iduser'=>$iduser));
                    }else{
                        return $this->redirectToRoute('hebergement_user',array('ndd'=>$ndd));
                    }

                } catch (\SoapFault $e) {
                    $form->addError(new FormError($e->getMessage()));
                }
            }




        }


        return $this->render('Hebergement/Form/addndd.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndd'=> $domain,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,

                'h1'=>'Ajouter un hébergement pour le domaine '.$ndd,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement/delete/{vhost}", name="delete_vhost_super_admin",defaults={"idinstance"=0})
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement/delete/{vhost}", name="delete_vhost_admin",defaults={"idagency"=0,"idinstance"=0})
     * @Route("/private/ndd/{ndd}/hebergement/delete/{vhost}", name="delete_vhost_user",defaults={"iduser"=0,"idagency"=0,"idinstance"=0})
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server/{idinstance}/delete/{vhost}", name="delete_vhost_2_super_admin",defaults={"ndd"=0})
     * @Route("/private/customer/{iduser}/server/{idinstance}/delete/{vhost}", name="delete_vhost_2_admin",defaults={"idagency"=0,"ndd"=0})
     * @Route("/private/server/{idinstance}/delete/{vhost}", name="delete_vhost_2_user",defaults={"iduser"=0,"idagency"=0,"ndd"=0})

     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function deleteHebergementAction(Request $request,$idagency,$iduser,$ndd,$vhost,$idinstance){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser = $userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='delete_vhost_2_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $instance = $client->getInstance($email, $pwd, $idinstance);

            $breadcrumb=array();

            $breadcrumb[] = array('url' => 'instances_user', 'label' => 'Liste des serveurs', 'param' => array('idagency'=>$idagency,'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_user', 'label' => $instance->name, 'param' => array('idagency'=>$idagency,'iduser' => $iduser,'idinstance'=>$idinstance));
            $type='user2';

        }elseif($routeName=='delete_vhost_2_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $instance = $client->getInstance($email, $pwd, $idinstance);

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[] = array('url' => 'instances_super_admin', 'label' => 'Liste des serveurs', 'param' => array('idagency'=>$idagency,'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_super_admin', 'label' => $instance->name, 'param' => array('idagency'=>$idagency,'iduser' => $iduser,'idinstance'=>$idinstance));


            $type='admin2';
        }elseif($routeName=='delete_vhost_2_super_admin'){
            // hebergement_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $instance = $client->getInstance($email, $pwd, $idinstance);

            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[] = array('url' => 'instances_super_admin', 'label' => 'Liste des serveurs', 'param' => array('idagency'=>$idagency,'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_super_admin', 'label' => $instance->name, 'param' => array('idagency'=>$idagency,'iduser' => $iduser,'idinstance'=>$idinstance));
            $type='super_admin2';
        }
        elseif($routeName=='delete_vhost_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_user','label'=>'Hébergement','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Supprimer','param'=>array());
            $type='user';

        }elseif($routeName=='delete_vhost_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_admin','label'=>'Hébergement','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Supprimer','param'=>array());


            $type='admin';
        }else{
            // hebergement_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_super_admin','label'=>'Hébergement','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Supprimer','param'=>array());
            $type='super_admin';
        }
// FOrm
        $form = $this->createFormBuilder()
            ->add('aus',CheckboxType::class,array('label'=>"Cocher cette case pour supprimer ".$vhost))
            ->add('submit',SubmitType::class,array('label'=>'Supprimer le Vhost','attr'=>array('class'=>'btn btn-danger')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            // Suppression VHOST depuis hébergement
            try{
                $client->delHebergement($email,$pwd,$vhost);

                $this->get('session')->getFlashBag()->add(
                    'notice',
                    $vhost.' sera supprimé dans 20 minutes maximum'
                );
                // Redirect
                if($type=='super_admin2'){
                    return $this->redirectToRoute('instance_super_admin',array('idagency'=>$idagency,'iduser'=>$iduser,'idinstance'=>$idinstance));
                }elseif($type=="admin2"){
                    return $this->redirectToRoute('instance_admin',array('iduser'=>$iduser,'idinstance'=>$idinstance));

                }elseif($type=='user2'){
                    return $this->redirectToRoute('instance_user',array('idinstance'=>$idinstance));
                }
                elseif($type=='super_admin'){
                    return $this->redirectToRoute('hebergement_super_admin',array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
                }elseif($type=="admin"){
                    return $this->redirectToRoute('hebergement_admin',array('iduser'=>$iduser,'ndd'=>$ndd));

                }else{
                    return $this->redirectToRoute('hebergement_user',array('ndd'=>$ndd));
                }

            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
                            }

        }




        return $this->render('Hebergement/Form/delheber.html.twig',
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
                'type'=>$type,
                'h1'=>'Supprimer '.$vhost,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement", name="hebergement_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement", name="hebergement_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/hebergement", name="hebergement_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function hebergementAction(Request $request,$idagency,$iduser,$ndd){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        if($routeName=='hebergement_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Hébergement','param'=>array());
            $type='user';

        }elseif($routeName=='hebergement_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));

            $breadcrumb[]=array('url'=>'#','label'=>'Hébergement','param'=>array());

            $type='admin';
        }else{
            // hebergement_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Hébergement','param'=>array());

            $type='super_admin';
        }

        // On récupère le NDD
        $domain = $client->getNdd($email,$pwd,$ndd);
        // Si dns autre que gandi : Option non gérée
        if($domain->nameservers[0]!='a.dns.gandi.net'){
            return $this->render('Hebergement/nongere.html.twig',
                array(
                    'result'=>'test',
                    'classBody'=>'skin-blue sidebar-mini',
                    'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                    'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                    'name'=>$email,
                    'ndd'=> $domain,
                    'iduser'=>$iduser,
                    'idagency'=>$idagency,
                    'breadcrumb'=>$breadcrumb,
                    'type'=>$type,
                    'h1'=>'Hébergement du domaine '.$ndd,
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


                )
            );
        }


        // LIste des vhosts pour le domaine
        $vhosts = $client->getVhostsPerNdd($email,$pwd,$ndd);



        // On regarde si www est dans $vhosts->item
        $wwwExist=false;
        foreach($vhosts as $i){
            if($i->name == 'www.'.$ndd){
                $wwwExist=true;
            }
        }



        return $this->render('Hebergement/heber.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndd'=> $domain,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'vhosts'=>$vhosts,
                'h1'=>'Hébergement du domaine '.$ndd,
                'wwwExist'=>$wwwExist,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }
}