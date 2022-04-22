<?php

namespace AppBundle\Controller;

use AppBundle\Traits\Referer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class InstanceController extends Controller{
    use Referer;

    /**
     * @Route("/private/instance/liaisonInstanceGandi", name="liaison_instance_gandi")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function liaisonInstanceGandiAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser = $userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Lier un utilisateur à une instance','param'=>array());
        $h1="Lier une instance Gandi avec un utilisateur";
        // Récuperation de la liste des utilisateur

        $allUsers = $client->listAllUsers($email,$pwd);


        //Choix utilisateur
        $choicesUser = array();
        foreach($allUsers as $u){
            $choicesUser[$u->id]=$u->email.' ('.$u->name.' '.$u->firstname.' - Agence : '.$u->agency->name.')';
        }
        // Choix de l'instance
        // On récupère la liste des instances gandi
        $listInstances = $client->listAllGInstances($email,$pwd);

        $choicesInstances=array();
//dump($listInstances);

        foreach($listInstances as $i){

            // Ajout de l'instance à la liste
            $choicesInstances[$i->id_g]=$i->name;
        }

        $typeProduits =
            array(
                'instance'=>'Instance classique',
                'immoe'=>' Serveur dédié Escalimmo',
                'immo'=>' Serveur immobilier',
                '15s'=>' Web Extensive Sr',
                'cloud'=>' Serveur cloud',
            );
        $form = $this->createFormBuilder()
            ->add('usr',ChoiceType::class,array('choices'=>array_flip($choicesUser),'label'=>'Client ou agence : ','attr'=>array('class'=>'combobox')))
            ->add('instance',ChoiceType::class,array('choices'=>array_flip($choicesInstances),'label'=>'Instance  : ','attr'=>array('class'=>'combobox')))
            ->add('typeProduit',ChoiceType::class,array('choices'=>array_flip($typeProduits),'label'=>'Type de produit :','expanded'=>true))
            ->add('valid',SubmitType::class,array('label'=>'Lier','attr'=>array('class'=>'btn btn-success')))
            ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // save
            $data = $form->getData();
            try {

                $client->createInstanceAndSetUser($email, $pwd,$data['usr'],$data['instance'],$data['typeProduit']);
                //   return $this->redirectToRoute('homepage');
                return $this->redirectToRoute('liaison_instance_gandi');

            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }
        }

        return $this->render('Instance/Form/liaisonInstanceGandi.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'iduser' => $iduser,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }



    /**
     * @Route("/private/all-servers", name="all_instances_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function listAllInstancesAction(Request $request){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        try {
            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);

            // Liste des instances pour l'utilisateur :
            $iduser = $userConnected->getUser()->id;
            $idagency = $userConnected->getUser()->agency->id;
            $typeUser = 'admin';
            $h1 = 'Tous les serveurs que je gère';
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb = array();
            $breadcrumb[] = array('url' => '#', 'label' => 'Liste des serveurs que je gère', 'param' => array());

            $list = $client->listAllInstances($email, $pwd, $iduser);

            $today = new \DateTime();


        }catch (\SoapFault $e){
            throw new \Exception($e->getMessage());
        }
        return $this->render('Instance/List/listallinstances.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'instances'=> $list,
                'countInstances'=>count($list),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'typeUser'=>$typeUser,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'today'=> $today->getTimestamp(),
                'in2months'=>$today->modify('+2 months')->getTimestamp(),
                'afficheProduits'=>$afficheProduits,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server", name="instances_super_admin")
     * @Route("/private/customer/{iduser}/server", name="instances_admin",defaults={"idagency"=0})
     * @Route("/private/server", name="instances_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function listInstancesAction(Request $request,$idagency,$iduser){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        try {
            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);

            // Liste des instances pour l'utilisateur :
            if ($routeName == 'instances_admin') {
                $idagency = $userConnected->getUser()->agency->id;

                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $typeUser = 'admin';
                $h1 = 'Liste des serveurs de ' . $customerInfo->name;
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => '', 'label' => 'Liste des serveurs', 'param' => array());
            } elseif ($routeName == 'instances_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $typeUser = 'user';
                $h1 = 'Mes serveurs';
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => '#', 'label' => 'Liste des serveurs ', 'param' => array());

            } else {
                //ndds_super_admin
                $typeUser = 'super_admin';
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);

                //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => '#', 'label' => 'Liste des serveurs', 'param' => array());
                $h1 = "Liste des serveurs pour : " . $customerInfo->name . " client de l'agence : " . $customerInfo->agency->name;


            }

            $list = $client->listInstances($email, $pwd, $iduser);

            $today = new \DateTime();


        }catch (\SoapFault $e){
            throw new \Exception($e->getMessage());
        }
        return $this->render('Instance/List/listinstances.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'instances'=> $list,
                'countInstances'=>count($list),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'typeUser'=>$typeUser,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'today'=> $today->getTimestamp(),
                'in2months'=>$today->modify('+2 months')->getTimestamp(),
                'afficheProduits'=>$afficheProduits,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server/{idinstance}", name="instance_super_admin")
     * @Route("/private/customer/{iduser}/server/{idinstance}", name="instance_admin",defaults={"idagency"=0})
     * @Route("/private/server/{idinstance}", name="instance_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function instanceAction(Request $request,$idagency,$iduser,$idinstance){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        try {


            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);

            $instance = $client->getInstance($email, $pwd, $idinstance);
//dump($instance);
            /*
                        $tmp = (array) $instance->vhosts;
                        if(empty($tmp)){
                            $instance->vhosts= new \stdClass();
                            $instance->vhosts->item=array();
                        }
                        if(!is_array($instance->vhosts->item))$instance->vhosts->item=array($instance->vhosts->item);
                        */
            if(!is_array($instance->vhosts))$instance->vhosts=array($instance->vhosts);
//dump($instance);

            //dump($instance);
            // Liste des instances pour l'utilisateur :
            if ($routeName == 'instance_admin') {
                $idagency = $userConnected->getUser()->agency->id;

                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $typeUser = 'admin';
                $h1 = 'Serveur '.$instance->name.' de ' . $customerInfo->name;
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'instances_admin', 'label' => 'Liste des serveurs', 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => '', 'label' => $instance->name, 'param' => array());
            } elseif ($routeName == 'instance_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $typeUser = 'user';
                $h1 = 'Serveur '.$instance->name;
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'instances_user', 'label' => 'Mes serveurs ', 'param' => array());
                $breadcrumb[] = array('url' => '#', 'label' => $instance->name, 'param' => array());

            } else {
                //ndds_super_admin
                $typeUser = 'super_admin';
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);

                //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'instances_super_admin', 'label' => 'Liste des serveurs', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => '#', 'label' => $instance->name, 'param' => array());
                $h1 = 'Serveur '.$instance->name.' de ' . $customerInfo->name ." client de l'agence : " . $customerInfo->agency->name;


            }


            // Récupération de la liste des sauvegardes.
            $snapshots = $client->listInstanceSnapshots($email,$pwd,$idinstance);



//dump($userConnected,$instance);

            $formRebbotPaas = $this->createFormBuilder()
                ->add('reboot',SubmitType::class,array('label'=>'Redémarrer le serveur','attr'=>array('class'=>'btn btn-block btn-default btn-lgr-reboot')));


            if($this->isGranted('ROLE_LEGRAIN')||($this->isGranted('ROLE_AGENCE')&&$userConnected->user->agency->id==$instance->user->agency->id)){
                $formRebbotPaas->add('autorisation',SubmitType::class,array('label'=>($instance->gestionConsole==false?'Activer':'Désactiver').' la gestion de la console pour l\'utilisateur','attr'=>array('class'=>'btn btn-block btn-default btn-lgr-reboot')));
            }


            if($this->isGranted('ROLE_LEGRAIN')||($this->isGranted('ROLE_AGENCE')&&$userConnected->user->agency->id==$instance->user->agency->id)||($instance->gestionConsole==true)){
                $formRebbotPaas->add('console',SubmitType::class,array('label'=>($instance->etatConsole==false?'Activer':'Désactiver').' la console ssh','attr'=>array('class'=>'btn btn-block btn-default btn-lgr-reboot')));
            }
            $formRebbotPaas= $formRebbotPaas->getForm();
            $formRebbotPaas->handleRequest($request);


            if($formRebbotPaas->isValid()){
                if ($formRebbotPaas->has('autorisation')&&$formRebbotPaas->has('autorisation')&&$formRebbotPaas->get('autorisation')->isClicked()) {
                    if ($client->toggleGestionConsole($email, $pwd, $instance->id,!$instance->gestionConsole)) {
                        $this->get('session')->getFlashBag()->add(
                            'notice',
                            'le changement d\'etat de la gestion de la console va être effectif dans quelques instants'
                        );
                    }
                }

                if ($formRebbotPaas->has('reboot')&&$formRebbotPaas->get('reboot')->isClicked()) {
                    if ($client->instanceRestart($email, $pwd, $instance->id)) {
                        $this->get('session')->getFlashBag()->add(
                            'notice',
                            'Le serveur va redémarrer dans quelques instants.'
                        );
                    }
                }
                if ($formRebbotPaas->has('console')&&$formRebbotPaas->get('console')->isClicked()) {
                    if ($client->toggleConsole($email, $pwd, $instance->id,!$instance->etatConsole)) {
                        if($instance->etatConsole){
                            $this->get('session')->getFlashBag()->add(
                                'notice',
                                'la console ssh est maintenant désactivée'
                            );
                        }else {
                            $this->get('session')->getFlashBag()->add(
                                'notice',
                                'Votre console est active pour une durée de 2h'
                            );
                        }
                    }
                }
              //  return $this->redirectToRoute()
                if ($typeUser == 'super_admin') {
                    return $this->redirectToRoute('instance_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'idinstance' => $idinstance));
                } elseif ($typeUser == 'admin') {
                    return $this->redirectToRoute('instance_admin', array('iduser' => $iduser, 'idinstance' => $idinstance));
                } else {
                    return $this->redirectToRoute('instance_user', array('idinstance' => $idinstance));
                }
            }

        }catch (\SoapFault $e){
            throw new \Exception($e->getMessage());
        }
        $today = new \DateTime();
        return $this->render('Instance/instance.html.twig',
            array(
                'snapshots'=>$snapshots,
                'form'=>$formRebbotPaas->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'instance'=> $instance,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'typeUser'=>$typeUser,
                'type'=>$typeUser,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'afficheProduits'=>$afficheProduits,
                'today'=> $today->getTimestamp(),
                'in2months'=>$today->modify('+2 months')->getTimestamp(),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server/{idinstance}/options", name="update_options_instance_super_admin")
     * @Route("/private/customer/{iduser}/server/{idinstance}/options", name="update_options_instance_admin",defaults={"idagency"=0})
     * @Route("/private/server/{idinstance}/options", name="update_options_instance_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function updateOptionsInstanceAction(Request $request,$idagency,$iduser,$idinstance){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $objInstance = $client->getInstance($email,$pwd,$idinstance);

        $h1 = "Modifier les options du serveur ".$objInstance->name;


        if($routeName=='update_options_instance_admin'){
            $idagency=$userConnected->getUser()->agency->id;

            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $typeUser='admin';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();

            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
            $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instances_admin', 'label' => 'Liste des serveurs', 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_admin', 'label' => $objInstance->name, 'param' => array('iduser' => $iduser,'idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Modifier les options', 'param' => array());
        }
        elseif($routeName=='update_options_instance_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $typeUser='user';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();


            $breadcrumb[] = array('url' => 'instances_user', 'label' => 'Liste des serveurs', 'param' => array());
            $breadcrumb[] = array('url' => 'instance_user', 'label' => $objInstance->name, 'param' => array('idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Modifier les options', 'param' => array());

        }else{
            //ndds_super_admin
            $typeUser='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[] = array('url' => 'instances_super_admin', 'label' => 'Liste des serveurs', 'param' => array('idagency'=>$idagency,'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_super_admin', 'label' => $objInstance->name, 'param' => array('idagency'=>$idagency,'iduser' => $iduser,'idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Modifier les options', 'param' => array());
        }

        // Liste des tailles (puissancers) du serveur :
        $sizes = $client->listSizesInstances($email,$pwd,$iduser);

        $arraySizes = array();
        $actualSizeInstance=0;
        $correspondanceIdSizeAvecIdProduit = array();


        $maxNumberPartAvaillable = $client->nombrePartHddAvaillableForInstance($email, $pwd, $idinstance);


        foreach($sizes as $size){
            //  dump($size);
            $correspondanceIdSizeAvecIdProduit[$size->id]=$size->idProduct;
            if($size->name==$objInstance->sizeInstance)$actualSizeInstance=$size->id;
            $arraySizes[$size->id] = $size->name.' (Prix de l\'option : '.$size->priceHtPerMonth.'€ HT/mois)'.($actualSizeInstance==$size->id?' - Option actuellement sélectionnée':'');
        }
        $arrayHdd=array();

        for($i=$objInstance->quantityPartDataDiskAdditionalSize;$i<=$maxNumberPartAvaillable;$i++){
            $arrayHdd[$i]=$i.' Soit '.($i*5).'Go (Prix de l\'option : '.($i*$objInstance->productPartHdd->priceHT).' € HT/mois )'.($i==$objInstance->quantityPartDataDiskAdditionalSize?' - Option actuellement sélectionnée':'');
        }



        $nbresVhostsInstance =   $client->listNbreVhostsInstance($email,$pwd,$iduser);
        $arrayNbres = array();
        $arrayNbresValues = array();
        $actualIdNbreInstance=0;
        $correspondanceIdNbreAvecIdProduit = array();
        foreach($nbresVhostsInstance as $nbre){
            $correspondanceIdNbreAvecIdProduit[$nbre->id]=$nbre->idProduct;
            if((int)$nbre->value==(int)$objInstance->nbreVhostsMax)$actualIdNbreInstance=$nbre->id;
            $arrayNbres[$nbre->id] = $nbre->name.' (Prix de l\'option : '.$nbre->priceHtPerMonth.'€ HT/mois)'.($actualIdNbreInstance==$nbre->id?' - Option actuellement sélectionnée':'');
            $arrayNbresValues[$nbre->id] = $nbre->value;
        }

        $arraySaveAuto=array();
        $actualIdSaveAuto=$objInstance->snapshotProfileInstance->id;
        $listProfiles = $client->listProfilSauvegardeInstance($email,$pwd,$iduser);
//        $arraySaveAuto[0]='Non (0 euro) '.($objInstance->snapshotProfileInstance==null?' - Option actuellement sélectionnée':'');;


        foreach($listProfiles as $profil){
            //   dump($actualIdSaveAuto.'='.$profil->id);
            $correspondanceIdProfilAvecIdProduit[$profil->id]=$profil->idProduct;
            if((int)$profil->id==(int)$objInstance->snapshotProfileInstance->id)$actualIdSaveAuto=$profil->id;
            $arraySaveAuto[$profil->id] = $profil->name.' (Prix de l\'option : '.($objInstance->dataDiskTotalSize*.3*$profil->priceHtPerMonth).'€ HT/mois)'.($actualIdSaveAuto==$profil->id?' - Option actuellement sélectionnée':'');
        }
        // dump($objInstance);

//

        $form = $this->createFormBuilder()
            ->add('size',ChoiceType::class,array('label'=>'Choisir la puissance de votre serveur : ','choices'=>array_flip($arraySizes),'data'=>$actualSizeInstance))
            ->add('hdd',ChoiceType::class,array('label'=>'Choisir le nombre de part d\'hébergements pour votre serveur : ','choices'=>array_flip($arrayHdd),'data'=>$objInstance->quantityPartDataDiskAdditionalSize))
            ->add('nbreVhosts',ChoiceType::class,array('label'=>'Choisir le nombre de vhosts que pourra contenir votre serveur : ','choices'=>array_flip($arrayNbres),'data'=>$actualIdNbreInstance))
            ->add('saveAuto',ChoiceType::class,array('label'=>'Sauvegarde automatique : ','choices'=>array_flip($arraySaveAuto),'data'=>$actualIdSaveAuto))
            ->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')))
            ->getForm();



        $form->handleRequest($request);
//dump($objInstance);
        if($form->isValid()){
            $error=false;
            $data = $form->getData();


            if($data['saveAuto']!=$objInstance->snapshotProfileInstance->id){
                $client->addToCart($email, $pwd, $correspondanceIdProfilAvecIdProduit[$data['saveAuto']], $iduser, json_encode(array('idInstance' => $objInstance->id,'quantity'=>$data['hdd'])));
            }

            if($data['hdd']!=$objInstance->quantityPartDataDiskAdditionalSize){
                // Ajout de l'option au panier.
                //dump($data['hdd']);
                $client->addToCart($email, $pwd, $objInstance->productPartHdd->id, $iduser, json_encode(array('idInstance' => $objInstance->id,'quantity'=>$data['hdd'])));
            }
            if($data['size']!=$actualSizeInstance){
                // Ajout de l'option au panier.
                //  dump($data['size']);
                $client->addToCart($email, $pwd, $correspondanceIdSizeAvecIdProduit[$data['size']], $iduser, json_encode(array('idInstance' => $objInstance->id)));
            }

            if($data['nbreVhosts']!=$actualIdNbreInstance){

                // Affiche une erreur si on sélectionne un total plus petit que le nbre de vhosts déjà present sur le serveur
                if(count($objInstance->vhosts) > (int)$arrayNbresValues[$data['nbreVhosts']] ){
                    $form->addError(new FormError('impossible d\'ajouter cette option dans le panier car votre serveur possède plus de '.$arrayNbresValues[$data['nbreVhosts']].' vhosts'));
                    $error=true;

                }else{
                    $client->addToCart($email, $pwd, $correspondanceIdNbreAvecIdProduit[$data['nbreVhosts']], $iduser, json_encode(array('idInstance' => $objInstance->id)));
                }
            }

            if(!$error) {

                if ($typeUser == 'super_admin') {
                    return $this->redirectToRoute('instance_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'idinstance' => $idinstance));
                } elseif ($typeUser == 'admin') {
                    return $this->redirectToRoute('instance_admin', array('iduser' => $iduser, 'idinstance' => $idinstance));
                } else {
                    return $this->redirectToRoute('instance_user', array('idinstance' => $idinstance));
                }
            }
        }

        //dump($objInstance);
        return $this->render('Instance/Form/options.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'instance'=> $objInstance,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'typeUser'=>$typeUser,
                'type'=>$typeUser,
                'breadcrumb'=>$breadcrumb,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server/{idinstance}/toggle/{vhost}", name="toggle_option_maintenance_simple_hosting_super_admin")
     * @Route("/private/customer/{iduser}/server/{idinstance}/toggle/{vhost}", name="toggle_option_maintenance_simple_hosting_admin",defaults={"idagency"=0})
     * @Route("/private/server/{idinstance}/toggle/{vhost}", name="toggle_option_maintenance_simple_hosting_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function toggleOptionMaintenanceAction(Request $request,$idagency,$iduser,$idinstance,$vhost){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='toggle_option_maintenance_simple_hosting_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $typeUser='admin';
            $breadcrumb=array();
        }
        elseif($routeName=='toggle_option_maintenance_simple_hosting_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $typeUser='user';
            $breadcrumb=array();
        }else{
            //ndds_super_admin
            $typeUser='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
        }

        $client->toggleOptionMaintenance($email,$pwd,$idinstance,$vhost);
        if($typeUser=='super_admin'){
            return $this->redirectToRoute('instance_super_admin',array('idagency'=>$idagency,'iduser'=>$iduser,'idinstance'=>$idinstance,'vhost'=>$vhost));
        }elseif($typeUser=='admin'){
            return $this->redirectToRoute('instance_admin',array('iduser'=>$iduser,'idinstance'=>$idinstance,'vhost'=>$vhost));
        }else{
            return $this->redirectToRoute('instance_user',array('idinstance'=>$idinstance,'vhost'=>$vhost));
        }
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/server/{idinstance}/renew", name="renew_instance_super_admin")
     * @Route("/private/customer/{iduser}/server/{idinstance}/renew", name="renew_instance_admin",defaults={"idagency"=0})
     * @Route("/private/server/{idinstance}/renew", name="renew_instance_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function renewInstanceAction(Request $request,$idagency,$iduser,$idinstance){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $objInstance = $client->getInstance($email,$pwd,$idinstance);
        //dump($objInstance);



        if($routeName=='renew_instance_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $typeUser='admin';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();

            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
            $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instances_admin', 'label' => 'Liste des serveurs', 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_admin', 'label' => $objInstance->name, 'param' => array('iduser' => $iduser,'idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Renouveler', 'param' => array());

        }
        elseif($routeName=='renew_instance_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $typeUser='user';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();


            $breadcrumb[] = array('url' => 'instances_user', 'label' => 'Liste des serveurs', 'param' => array());
            $breadcrumb[] = array('url' => 'instance_user', 'label' => $objInstance->name, 'param' => array('idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Renouveler', 'param' => array());

        }else{
            //ndds_super_admin
            $typeUser='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[] = array('url' => 'instances_super_admin', 'label' => 'Liste des serveurs', 'param' => array('idagency'=>$idagency,'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'instance_super_admin', 'label' => $objInstance->name, 'param' => array('idagency'=>$idagency,'iduser' => $iduser,'idinstance'=>$idinstance));
            $breadcrumb[] = array('url' => '', 'label' =>'Renouveler', 'param' => array());

        }



        $dataPerDefault=array();
        $arrayInstances=array();


        $product = $objInstance->productRenew;
        $priceHT = $product->minPriceHT?$product->minPriceHT:$product->priceHT;
        $arrayInstances[]=array('idProduct'=>$product->id,'name'=>$objInstance->name,'date'=>$objInstance->dateEnd,
            'priceHt'=>$priceHT,'options'=>$objInstance->options
            //'priceTTC'=>($priceHT*$objNdd->product->percentTax)+$priceHT
        );
        $dataPerDefault[]=$objInstance->product->minPeriod;





        $form= $this->createFormBuilder()->add('instances', CollectionType::class, array(
            'data'=>$dataPerDefault,

            // each item in the array will be an "email" field
            'entry_type'   => ChoiceType::class,
            // these options are passed to each "email" type
            'entry_options'  => array(
                'choices'  => array_flip(array(


//                    '1' => '1  mois',
//                    '3' => '3 mois',
//                    '6' => '6 mois',
                    '12' => '1 an',
                    // '24'     => '2 ans',
                    // '36'    => '3 ans',
                    // '48'    => '4 ans',
                    // '60'    => '5 ans',
                    // '72'    => '6 ans',
                    // '84'    => '7 ans',
                    //  '96'    => '8 ans',
                    //   '108'    => '9 ans',
                    '0' => 'Ne pas renouveler',
                )),
            ),
        ))->add('valid',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')));
        $form = $form->getForm();


        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();

            //$arrayInstance : infos sur les instances
            $i=0;
            foreach($data['instances'] as $inst){
                // var_dump($ndd,$arrayNdd[$i]);
                $options=array('instance'=>$arrayInstances[$i]['name'],'period'=>$inst);
                $client->addToCart($email,$pwd,$arrayInstances[$i]['idProduct'],$iduser,json_encode($options));
                $i++;
            }
            $this->get('session')->getFlashBag()->add(
                'notice',
                'le(s) produit(s) a/ont été ajouté(s) au panier'
            );
            // Ajout au panier.


            // Redirection vers le panier
            //  return $this->redirectToRoute('homepage');

            $params = $this->getRefererParams($request);
            $options = array();
            foreach ($params as $key => $value){
                if($key!='_route')
                    $options[$key]=$value;
            }
            return $this->redirect($this->generateUrl(
                $params['_route'],
                $options
            ));

            // return $this->redirectToRoute('pay_cart');

        }


        // Frm de renouvelement ( + modification addToCart pour ajouter le produit, upd aussi de payCart, pour ajouter les produits de types renouvelement NDD)
        return $this->render('Instance/renewInstance.html.twig',
            array(
                'arrayInstances'=>$arrayInstances,
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js','js/calcPrice.js'),
                'name'=>$email,
                'iduser'=>$iduser,
                'breadcrumb'=>$breadcrumb,
                'type'=>$typeUser,
                'idagency'=>$idagency,
                'h1'=>'Renouvelement des instances',
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );


    }
}