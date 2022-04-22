<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 15/06/15
 * Time: 09:17
 */
namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\EmailApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Acl\Exception\Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class EmailController extends Controller{


    /**
     * @Route("/private/myMailbox/", name="my_email_account")
     * @Security("has_role('ROLE_COMPTE_EMAIL')")
     */
    public function myemailAccount(Request $request){
        // Page présentant le quota de l'adresse.
        // Les alias de l'adresse + possibilité ajout/update/remove
        // Modifier son mdp
        // Activer le répondeur ( si packmail actif)
        // Lien page parametrer logiciels
        // Lien vers webmail

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Gestion de ma boite e-mail','param'=>array());

        $idagency = $userConnected->getUser()->agency->id;
        $iduser = $userConnected->getUser()->id;
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        // Récupèration des infos de la boite ( alias, quota...)

        $mailbox = $client->getMailbox($email,$pwd,$email);


        $aliases=$mailbox->aliases;


        $tmp = explode('@',$email);
        $loginEmail = $tmp[0];
        $ndd = $tmp[1];

        $responder=$mailbox->responder;
        $quotaUsed = round($mailbox->quota->used/1024,2);
        $quotaGranted = round($mailbox->quota->granted/1024,2);
        $pasDeQuota=false;
        if($quotaGranted==0){
            $percentQuotaUsed=0;
            $pasDeQuota=true;
        }else{
            $percentQuotaUsed=ceil((100*$quotaUsed)/$quotaGranted);
        }


        $infosMailbox = $client->mailboxInfos($email,$pwd,$ndd);



        return $this->render('Email/gestmailboxcompteemail.html.twig',
            array(
                'status'=>$infosMailbox->status,
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'aliases'=>$aliases,
                'responder'=>$responder,
                'add'=>false,
                'emailAddress'=>$email,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'h1'=>"Gestion de ma boite e-mail",
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'pasDeQuota'=>$pasDeQuota,
                // Affichage en Mo
                'quotaUsed'=>$quotaUsed,
                'quotaGranted'=>$quotaGranted,
                'percentQuotaUsed'=>$percentQuotaUsed,
                //'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
//                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','adminLTE/js/loadplugins.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));


    }
    /**
     * @Route("/private/user/{iduser}/ndd/{ndd}/emaild/{emailAddress}", name="email")
     * @Route("/private/ndd/{ndd}/emaild/{emailAddress}", name="myemail",defaults={"iduser"=0})
     */
    public function email($iduser,$ndd,$emailAddress)
    {
        // Redirige vers la liste des domaines
        return $this->redirectToRoute("list_emails_for_domain",array('iduser'=>$iduser,'ndd'=>$ndd));
    }

    /**
     * @Route("/private/user/{iduser}/ndd/{ndd}/create-email-first", name="empty_list_emails_for_domain")
     * @Route("/private/ndd/{ndd}/create-email-first", name="emptylistemail", defaults={"iduser"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function emptyListAction(Request $request,$iduser,$ndd)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        if($routeName=='empty_list_emails_for_domain'){
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Aucune boite e-mail','param'=>array());
            $btnAddAction=array('url'=>'create_mailbox_admin','param'=>array('iduser'=>$iduser,'ndd'=>$ndd),'label'=>'Ajouter une boite e-mail');
            $type="admin";
        }else{
            $iduser=$userConnected->getUser()->id;

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>'Liste des domaines','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Aucune boite e-mail','param'=>array());
            $btnAddAction=array('url'=>'create_mailbox_user','param'=>array('iduser'=>$iduser,'ndd'=>$ndd),'label'=>'Ajouter une boite e-mail');
            $type="user";
        }




        return $this->render('Email/create_email_first.html.twig',
            array(
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,

                'ndd'=> $ndd,
                'iduser'=> $iduser,
                'breadcrumb'=>$breadcrumb,
                'btnAddAction'=>$btnAddAction,
                'type'=>$type,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email", name="list_emails_for_domain_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email", name="list_emails_for_domain_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email", name="list_emails_for_domain_user",defaults={"iduser"=0,"idagency"=0})
     */
    public function indexAction(Request $request,$iduser,$ndd,$idagency){

//        $requestRoute = $this->container->get('request');
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='list_emails_for_domain_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Liste des boites e-mail','param'=>array());

        }elseif($routeName=='list_emails_for_domain_admin'){
            $type='admin';
            $breadcrumb=array();
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Liste des boites e-mail','param'=>array());
        }else{

            $iduser=$userConnected->getUser()->id;
            $type='user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));

            $breadcrumb[]=array('url'=>'','label'=>'Liste des boites e-mail','param'=>array());
            // client

        }
        try{
            $list = $client->listMailbox($email,$pwd,$ndd);

            //   $tmp = (array) $list;
            //   if(empty($tmp))return $this->redirectToRoute('empty_list_emails_for_domain',array('iduser'=>$iduser,'ndd'=>$ndd));
            // Si list vide, rediriger vers une page disant que pas de mail, vous devez en creer un : puis btn vers creer.
            $infosMailbox = $client->mailboxInfos($email,$pwd,$ndd);

            $countQuota=0;
            foreach($list as $i){
                $countQuota+=$i->quota->used;
            }
            //     var_dump($infosMailbox);

            // Si packMailPro actif, on propose d'augmenter la taille maxi allouée à l'ensemble des boites e-mails.
            // Si pack mail inactif, on propose de l'acheter ( ajout panier) et en même temps, proposer la taille.
            //Le prix sera calculé et affiché dans le panier.
            // Période proposée : jusqu'à la fin d'abo du ndd, ou, si + d'un an, on propose jusqu'à la 1ere date anniversaire du domaine.

//            Si agence legrain ou gestionnaire autres agences. Si non on n'affiche rien. en gros si le compte possède un compte.
            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);
            $product=null;
            if($afficheProduits) {
                // Récupèration du produit PackMailPro ou du taille boite e-mail
                if($infosMailbox->packMailPro) {
                    $product = $client->getProduct($email, $pwd, 2, $iduser);
                    $choice=array();
                   // for($i=$infosMailbox->sizePackMailPro+1;$i<51;$i++)$choice[$i]=$i;
                    for($i=0;$i<51;$i++)$choice[$i]=($i==0?'Supprimer le packMail':$i);
                    $form = $this->createFormBuilder()
                        ->add('nbGo',ChoiceType::class,array( 'choices'   =>array_flip( $choice),'label'=>'Nombre de Go en options à associer : ','data'=>$infosMailbox->sizePackMailPro,'attr'=>array('class'=>'selectgo','data-default'=>$infosMailbox->sizePackMailPro) ))
                        ->add('addToCart',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')))
                        ->getForm();
                }else{
                    $product = $client->getProduct($email,$pwd,1,$iduser);
                    $form = $this->createFormBuilder()
                        ->add('nbGo',HiddenType::class,array( 'data'=>1 ))
                        ->add('addToCart',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')))
                        ->getForm();

                }


                $form->handleRequest($request);

                if ($form->isValid()) {
                    $data = $form->getData();
                    // Appel du serveur pour ajouter le produit au panier ( + autres infos comme NDD sur lequel il porte,
                    // Ou le nombre de Go.
                    if ($data['nbGo'] == $infosMailbox->sizePackMailPro) {
                            $form->addError(new FormError($data['nbGo'].'Go sont déjà affectés à votre pack mail. Veuillez choisir une valeur differente'));
                    } else {
                        $options = array('ndd' => $ndd, 'size' => $data['nbGo']);
                        // Si le nbre de Go est = à la valeur par défaut. Message, 9Go sont déjà affectés à votre pack mail.
                        $client->addToCart($email, $pwd, $product->id, $iduser, json_encode($options));
                        $this->get('session')->getFlashBag()->add(
                            'notice',
                            'Votre produit a été ajouté au panier'
                        );
                    }
                }


            }else{
                $form = $this->createFormBuilder()->getForm();
            }
            // liste des redirections
            $listForward = $client->listMailForward($email,$pwd,$ndd);


            $countMailbox=count($list);

        } catch (\SoapFault $e) {
           // $result = $e->getMessage();
           // var_dump($result);
            throw new \SoapFault('error',$e->getMessage());

        }


        $countForward = $client->countMailForward($email,$pwd,$ndd);
        return $this->render('Email/List/listemail.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'product'=>$product,
                'afficheProduits'=>$afficheProduits,
                'emails'=> $list,
                'listForward'=> $listForward,
                'packMailPro'=>$infosMailbox->packMailPro,
                'countMailbox'=>$countMailbox,
                'status'=>$infosMailbox->status,
                'percentMailbox'=>($countMailbox*100)/$infosMailbox->mailbox_quota,
                'maxMailbox'=>$infosMailbox->mailbox_quota,
                'countForward'=>$countForward,
                'maxForward'=>$infosMailbox->forward_quota,
                'percentForward'=>($countForward*100)/$infosMailbox->forward_quota,
                'countQuota'=>$countQuota/1048576,
                'maxQuota'=>$infosMailbox->storage_quota,
                'percentQuota'=>(($countQuota/1048576)*100)/$infosMailbox->storage_quota,
                'ndd'=> $ndd,
                'iduser'=> $iduser,
                'idagency'=> $idagency,
                'type'=>$type,
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/activateresponder/{emailAddress}", name="activate_responder_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/activateresponder/{emailAddress}", name="activate_responder_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/activateresponder/{emailAddress}", name="activate_responder_user",defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/activateresponder/", name="activate_responder_compte_email",defaults={"iduser"=0,"idagency"=0,"emailAddress"=0,"ndd"=0})
     */
    public function activateResponder(Request $request,$idagency,$iduser,$ndd,$emailAddress){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='activate_responder_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Activer le répondeur pour la boite : '.$emailAddress,'param'=>array());
        }elseif($routeName=='activate_responder_admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $type = 'admin';
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Activer le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }elseif($routeName=="activate_responder_user"){
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $type = 'user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Activer le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }else{
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $emailAddress=$email;
            $tmp = explode('@',$email);
            $ndd=$tmp[1];
            $type = 'compteemail';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'my_email_account','label'=>'Gestion de ma boite e-mail','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>'Activer le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }

        $mailGandi = $client->getMailbox($email,$pwd,$emailAddress);

        //$mailGandi->responder
        $initDate=$mailGandi->responder->initDate==null? new \DateTime():new \DateTime($mailGandi->responder->initDate->date);
        $endDate=$mailGandi->responder->endDate==null? new \DateTime('+7 days'):new \DateTime($mailGandi->responder->endDate->date);
        $disabled = $mailGandi->responder->active;
        $form = $this->createFormBuilder()
            ->add('dateInit',DateType::class,array('label'=>"Date à partir de laquelle le répondeur sera activé : ",'data' =>$initDate,'format' => 'dd/MM/yyyy',"disabled"=>$disabled))
            ->add('dateEnd',DateType::class,array('label'=>"Date à partir de laquelle le répondeur sera désactivé : ",'data' =>$endDate,'format' => 'dd/MM/yyyy',))
            ->add('message',TextareaType::class,array('label'=>'Message : ','data'=>$mailGandi->responder->text))
            ->add('save', SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{


                $data = $form->getData();

                $dateInit =  isset($data['dateInit'])?$data['dateInit']:$initDate;
                $dateEnd = $data['dateEnd'];
                $message = $data['message'];
                $client->activateResponder($email, $pwd, $emailAddress,$dateInit->format('Y-m-d'),$dateEnd->format('Y-m-d'),$message);


                if ($type == 'super_admin') {

                    return $this->redirect($this->generateUrl("list_emails_for_domain_super_admin", array("idagency" => $idagency, "iduser" => $iduser, 'ndd' => $ndd)) );
                } elseif ($type == 'admin') {
                    return $this->redirect($this->generateUrl("list_emails_for_domain_admin", array("iduser" => $iduser, 'ndd' => $ndd)) );
                } elseif($type=="user") {
                    return $this->redirect($this->generateUrl("list_emails_for_domain_user", array('ndd' => $ndd)) );
                }
                elseif($type=="compteemail") {
                    return $this->redirect($this->generateUrl("my_email_account") );
                }


            } catch (\SoapFault $e) {

                $form->addError(new FormError($e->getMessage()));

            }
        }

        return $this->render('Email/Form/activeResponder.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'form'=>$form->createView(),
                'add'=>false,
                'emailAddress'=>$emailAddress,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'h1'=>"Activer le répondeur pour : ".$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/disableresponder/{emailAddress}", name="disable_responder_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/disableresponder/{emailAddress}", name="disable_responder_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/disableresponder/{emailAddress}", name="disable_responder_user",defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/disableresponder/", name="disable_responder_compte_email",defaults={"iduser"=0,"idagency"=0,"ndd"=0,"emailAddress"=0})
     */
    public function disableresponder(Request $request,$idagency,$iduser,$ndd,$emailAddress){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='disable_responder_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Désactiver le répondeur pour la boite : '.$emailAddress,'param'=>array());
        }elseif($routeName=='disable_responder_admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $type = 'admin';
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Désactiver le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }elseif($routeName=='disable_responder_user'){
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $type = 'user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Désactiver le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }else{
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $emailAddress=$email;
            $tmp = explode('@',$email);
            $ndd=$tmp[1];
            $type = 'compteemail';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'my_email_account','label'=>'Gestion de ma boite e-mail','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>'Désactiver le répondeur pour la boite :  : '.$emailAddress,'param'=>array());
        }


        $form = $this->createFormBuilder()
            ->add('dateEnd',DateType::class,array('label'=>"date à partir de laquelle le répondeur sera désactivé : ",'data' => new \DateTime(),'format' => 'dd/MM/yyyy',))
            ->add('disable', SubmitType::class,array('label'=>'Désactiver','attr'=>array('class'=>'btn btn-danger')))
            ->add('cancel', SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{

                if ($form->get('disable')->isClicked()) {
                    $dateEnd = $form->getData()['dateEnd'];
                    $client->disableResponder($email, $pwd, $emailAddress,$dateEnd->format('Y-m-d'));

                }
                if ($form->get('disable')->isClicked()||$form->get('cancel')->isClicked()) {
                    if ($type == 'super_admin') {

                        return $this->redirect($this->generateUrl("list_emails_for_domain_super_admin", array("idagency" => $idagency, "iduser" => $iduser, 'ndd' => $ndd)) );
                    } elseif ($type == 'admin') {
                        return $this->redirect($this->generateUrl("list_emails_for_domain_admin", array("iduser" => $iduser, 'ndd' => $ndd)) );
                    } elseif($type=='user') {
                        return $this->redirect($this->generateUrl("list_emails_for_domain_user", array('ndd' => $ndd)) );
                    } elseif($type=='compteemail') {
                        return $this->redirect($this->generateUrl("my_email_account") );
                    }
                }

            } catch (\SoapFault $e) {

                $form->addError(new FormError($e->getMessage()));

            }
        }

        return $this->render('Email/Form/disableResponder.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'form'=>$form->createView(),
                'add'=>false,
                'emailAddress'=>$emailAddress,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'h1'=>"Désactiver le répondeur pour : ".$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/update/{emailAddress}", name="update_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/update/{emailAddress}", name="update_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/update/{emailAddress}", name="update_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/updateMyMailbox/", name="update_role_compte_email",defaults={"iduser"=0,"idagency"=0,"emailAddress"=0,"ndd"=0})
     *
     */
    public function updateMailbox(Request $request,$idagency,$iduser,$ndd,$emailAddress){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='update_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Modifier : '.$emailAddress,'param'=>array());
        }elseif($routeName=='update_mailbox_admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $type = 'admin';
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Modifier : '.$emailAddress,'param'=>array());
        }elseif($routeName=='update_mailbox_user'){
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $type = 'user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Modifier : '.$emailAddress,'param'=>array());
        }else{
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $emailAddress=$email;
            $tmp=explode('@',$emailAddress);
            $ndd = $tmp[1];

            $type = 'compteemail';
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'my_email_account','label'=>'gestion de ma boite e-mail','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>'Modifier mon adresse','param'=>array());
        }

        // getEmail
        try{
            $mailGandi = $client->getMailbox($email,$pwd,$emailAddress);
            //   var_dump($mailGandi);

        }catch (\SoapFault $e){
            // Afficher erreur rééssayer plus tard
            //   var_dump($e->getMessage());
        }

        // Affichage des infos en MO
        $emailApi=new EmailApi($mailGandi->login,'',(int)$mailGandi->quota->granted/1024,$mailGandi->fallback_email);

        if($this->isGranted('ROLE_COMPTE_EMAIL')) {
            $form = $this->createFormBuilder($emailApi)
                ->add('password', RepeatedType::class, array('type' => PasswordType::class, 'label' => 'Mot de passe (laissez vide si inchangé ): ', 'required' => false, 'invalid_message' => 'Les mots de passe doivent correspondre', 'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Mot de passe (validation)'),))
                // ->add('quota', IntegerType::class,array('label'=>'Quota (en Mo) laissez 0 si illimité : ','required'=>false))
                ->add('fallback_email', EmailType::class, array('required' => false, 'label' => 'Email de secours (utilisé pour ne pas perdre ses e-mails en cas de quota atteint ) : '))
                ->add('update', SubmitType::class, array('label' => 'Modifier', 'attr' => array('class' => 'btn btn-warning')))
                ->getForm();
        }else{
            $form = $this->createFormBuilder($emailApi)
                ->add('password', RepeatedType::class, array('type' => PasswordType::class, 'label' => 'Mot de passe (laissez vide si inchangé ): ', 'required' => false, 'invalid_message' => 'Les mots de passe doivent correspondre', 'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Mot de passe (validation)'),))
                ->add('quota', IntegerType::class,array('label'=>'Quota (en Mo) laissez 0 si illimité : ','required'=>false))
                ->add('fallback_email', EmailType::class, array('required' => false, 'label' => 'Email de secours (utilisé pour ne pas perdre ses e-mails en cas de quota atteint ) : '))
                // Ajout de la checkbox ( mappage à off ): creer le compte. Si creation possible est à false, désactiver.
                // Value par défaut en fct de l'existance ou non du compte
                ->add('create_account',CheckboxType::class,array('mapped'=>false,'label'=>'Creer un compte de gestion pour l\'e-mail, ( décocher la case le supprime)','disabled'=>($mailGandi->createAccountApiIsPossible?false:true),"data"=>($mailGandi->accountApiExist),"required"=>false))
                ->add('update', SubmitType::class, array('label' => 'Modifier', 'attr' => array('class' => 'btn btn-warning')))
                ->getForm();
        }
        $form->handleRequest($request);

        if ($form->isValid()) {
            try{
                $data = $form->getData();
                $password=$data->getPassword()==''?null:$data->getPassword();
                $quota=$data->getQuota()==0?0:$data->getQuota()*1024;
                $fallback_email=$data->getFallbackEmail()==null?'':$data->getFallbackEmail();
                if( $client->updateMailbox($email,$pwd,$emailAddress,$password,$quota,$fallback_email)){
                    // creation du compte si besoin est.
                    if($mailGandi->createAccountApiIsPossible&&!$this->isGranted('ROLE_COMPTE_EMAIL')){
                        $newValue=$form->get("create_account")->getData();
                        $oldValue=$mailGandi->accountApiExist;
                        if($oldValue && $newValue==false){
                            // Si ancienne valeur = 1 et nouvelle valeur = 0, on supprime le compte
                            $client->deleteClientCompteEmail($email,$pwd,$emailAddress);
                        }elseif($oldValue==false && $newValue){
                            // Si ancienne valeur =0 et nouvelle valeur =1, on ajoute un nouveau compte
                            $client->createClientCompteEmail($email,$pwd,$emailAddress);
                        }

                    }

                    // redirect
                    if($type=='super_admin'){
                        return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));
                    }elseif($type=='admin'){
                        return $this->redirectToRoute("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd));
                    }elseif($type=="user"){
                        return $this->redirectToRoute("list_emails_for_domain_user", array('ndd'=>$ndd));
                    }else{
                        return $this->redirectToRoute("my_email_account", array());

                    }


                }else{
                    // Afficher erreur

                    $form->addError(new FormError('Erreur lors de la mise à jour des données'));

                }


            } catch (\SoapFault $e) {
                $form->addError(new FormError($e->getMessage()));


            }
        }
        return $this->render('Email/Form/mailbox.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'add'=>false,
                'emailAddress'=>$emailAddress,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'h1'=>"Modification de la boite e-mail : ".$mailGandi->login.'@'.$ndd,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/create", name="create_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/create", name="create_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/create", name="create_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     *
     */
    public function createMailbox(Request $request,$iduser,$ndd,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='create_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());

        }elseif($routeName=='create_mailbox_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $type='admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());
        }else{
            // user
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $type='user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());
        }


        // Affichage des infos en MO
        $emailApi=new EmailApi();

        $form = $this->createFormBuilder($emailApi)
            ->add('username',EmailType::class,array('label'=>'Adresse e-mail à créér : '))
            ->add('password', RepeatedType::class,array('type'=>PasswordType::class,'label'=>'Mot de passe : ','invalid_message' => 'Les mots de passe doivent correspondre','first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Mot de passe (validation)'),))
            ->add('quota', IntegerType::class,array('label'=>'Quota (en Mo) laissez vide si illimité : ','required'=>false))
            ->add('fallback_email', EmailType::class,array('required'=>false,'label'=>'Email de secours (utilisé pour ne pas perdre ses e-mails en cas de quota atteint ) : '))
            ->add('create_account',CheckboxType::class,array('mapped'=>false,'label'=>'Creer un compte de gestion pour l\'e-mail, ( décocher la case le supprime)',"required"=>false))

            ->add('update', SubmitType::class,array('label'=>'Enregistrer','attr'=>array('class'=>'btn btn-success')))
            //  ->add('cancel', SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{
                $data = $form->getData();
                $password=$data->getPassword()==''?null:$data->getPassword();
                $quota=$data->getQuota()==0?0:$data->getQuota()*1024;
                $fallback_email=$data->getFallbackEmail();
                $addressEmail=$data->getUsername();


                if( $client->createMailbox($email,$pwd,$addressEmail,$password,$quota,$fallback_email)) {

                    if ($form->get("create_account")->getData()) $client->createClientCompteEmail($email, $pwd, $addressEmail);


                    // redirect
                    if($type=='super_admin'){
                        return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));
                    }elseif($type=='admin'){
                        return $this->redirectToRoute("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd));
                    }else{
                        return $this->redirectToRoute("list_emails_for_domain_user", array('ndd'=>$ndd));
                    }



                }else{
                    // Afficher erreur
                    //  echo 'erreur';
                    $form->addError(new FormError('Erreur lors de l\'ajout des données'));

                }


            } catch (\SoapFault $e) {

                $form->addError(new FormError($e->getMessage()));

            }
        }
        return $this->render('Email/Form/mailbox.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'add'=>true,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>"Création d'une boite e-mail",
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/updateforward/{emailAddress}", name="update_mail_forward_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/updateforward/{emailAddress}", name="update_mail_forward_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/updateforward/{emailAddress}", name="update_mail_forward_user",defaults={"iduser"=0,"idagency"=0})
     *
     */
    public function updateForward(Request $request,$iduser,$ndd,$idagency,$emailAddress){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');


         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='create_forward_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());

        }elseif($routeName=='create_forward_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $type='admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());
        }else{
            // user
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $type='user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());
        }

        // récupération des indfos par défaut
        $defaultData = $client->getMailForward($email,$pwd,$emailAddress);

        // Affichage des infos en MO



        if (is_array($defaultData->destinations)) {
            $destinationsDefault='';
            foreach($defaultData->destinations as $e){
                $destinationsDefault.=trim($e).';';
            }
        }else{
            $destinationsDefault=$defaultData->destinations;
        }
        if(substr($destinationsDefault,-1)==';') {
            $destinationsDefault = substr($destinationsDefault, 0, -1);
        }
        $form = $this->createFormBuilder()
            ->add('source',TextType::class,array('label'=>'Adresse à rediriger : ', 'data' => $defaultData->source,"disabled"=>"disabled"))

            ->add('destinations', TextareaType::class,array('label'=>'Rediriger vers (Les adresses  doivent être séparées par un point-virgule) :', 'data' => $destinationsDefault))

            ->add('update', SubmitType::class,array('label'=>'Enregistrer','attr'=>array('class'=>'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{
                $data = $form->getData();

                // $source= $data['source'].'@'.$ndd;
                if(substr($data['destinations'],-1)==';') {
                    $d = substr($data['destinations'], 0, -1);
                }else{
                    $d = $data['destinations'];
                }
                $destinations = explode(";",$d);


                $client->updateMailForward($email,$pwd,$defaultData->source.'@'.$ndd,$destinations);
                if($type=='super_admin'){
                    // return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));

                    return $this->redirect($this->generateUrl("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd)).'#redirections');
                }elseif($type=='admin'){
                    return $this->redirect($this->generateUrl("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd)).'#redirections');
                }else {
                    return $this->redirect($this->generateUrl("list_emails_for_domain_user", array('ndd' => $ndd)) . '#redirections');
                }


            } catch (\SoapFault $e) {

                $form->addError(new FormError('Une erreur est survenue, vérifiez que les adresses emails sont correctes et bien séparées par un point-virgule.'));

            }
        }
        return $this->render('Email/Form/forwardemail.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'add'=>true,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>"Modification de la redirection e-mail : ".$defaultData->source.'@'.$ndd,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/deleteforward/{emailAddress}", name="delete_mail_forward_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/deleteforward/{emailAddress}", name="delete_mail_forward_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/deleteforward/{emailAddress}", name="delete_mail_forward_user",defaults={"iduser"=0,"idagency"=0})
     *
     */
    public function deleteForward(Request $request,$iduser,$ndd,$idagency,$emailAddress){


        //deleteMailForward

//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='delete_mail_forward_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer la redirection','param'=>array());

        }elseif($routeName=='delete_mail_forward_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $type='admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer la redirection','param'=>array());
        }else{
            // user
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $type='user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer la redirection','param'=>array());
        }


        // Affichage des infos en MO

        $form = $this->createFormBuilder()


            ->add('delete', SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->add('cancel', SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{

                if ($form->get('delete')->isClicked()) {

                    $client->deleteMailForward($email, $pwd, $emailAddress);

                }
                if ($form->get('delete')->isClicked()||$form->get('cancel')->isClicked()) {
                    if ($type == 'super_admin') {

                        return $this->redirect($this->generateUrl("list_emails_for_domain_super_admin", array("idagency" => $idagency, "iduser" => $iduser, 'ndd' => $ndd)) . '#redirections');
                    } elseif ($type == 'admin') {
                        return $this->redirect($this->generateUrl("list_emails_for_domain_admin", array("iduser" => $iduser, 'ndd' => $ndd)) . '#redirections');
                    } else {
                        return $this->redirect($this->generateUrl("list_emails_for_domain_user", array('ndd' => $ndd)) . '#redirections');
                    }
                }

            } catch (\SoapFault $e) {

                $form->addError(new FormError($e->getMessage()));

            }
        }

        return $this->render('Email/Form/deleteMailForward.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'add'=>true,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>"Supprimer la redirection e-mail : ".$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));


    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/createforward", name="create_forward_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/createforward", name="create_forward_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/createforward", name="create_forward_user",defaults={"iduser"=0,"idagency"=0})
     *
     */
    public function createForward(Request $request,$iduser,$ndd,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='create_forward_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());

        }elseif($routeName=='create_forward_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $type='admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('iduser'=>$iduser,'ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());
        }else{
            // user
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $type='user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('ndd'=>$ndd),'anchor'=> '#redirections');
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter une redirection','param'=>array());
        }


        // Affichage des infos en MO

        $form = $this->createFormBuilder()
            ->add('source',TextType::class,array('label'=>'Adresse à rediriger : '))

            ->add('destinations', TextareaType::class,array('label'=>'Rediriger vers ( une seule adresse par ligne ) :'))

            ->add('update', SubmitType::class,array('label'=>'Enregistrer','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try{
                $data = $form->getData();

                $source= $data['source'].'@'.$ndd;
                $destinations = explode("\n",$data['destinations']);

                $client->createMailForward($email,$pwd,$source,$destinations);
                if($type=='super_admin'){
                    // return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));
                    return $this->redirect($this->generateUrl("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd)).'#redirections');
                }elseif($type=='admin'){
                    return $this->redirect($this->generateUrl("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd)).'#redirections');
                }else {
                    return $this->redirect($this->generateUrl("list_emails_for_domain_user", array('ndd' => $ndd)) . '#redirections');
                }

            } catch (\SoapFault $e) {
                $form->addError(new FormError($e->getMessage()));
            }
        }
        return $this->render('Email/Form/forwardemail.html.twig',
            array(
                'iduser'=>$iduser,
                'ndd'=>$ndd,
                'add'=>true,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>"Création d'une redirection e-mail",
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/", name="list_alias_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/", name="list_alias_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/{emailAddress}/alias/", name="list_alias_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     */
    public function listAlias(Request $request,$idagency,$iduser,$ndd,$emailAddress){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //$userConnected = $this->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        if($routeName=='list_alias_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>$emailAddress.' : Liste des alias','param'=>array());

        }elseif($routeName=='list_alias_mailbox_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $type='admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients'.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>$emailAddress.' : Liste des alias','param'=>array());
        }else{
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $type='user';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>$emailAddress.' : Liste des alias','param'=>array());
        }

        try {
            $mailbox = $client->getMailbox($email,$pwd,$emailAddress);
            // var_dump('aa');


        }catch (Exception $e){
            $error = "Impossible de charger la boite e-mail. Merci de réiterer ultérieurement";
            //  var_dump($e->getMessage());
        }
        $aliases=$mailbox->aliases==null?array():$mailbox->aliases;


        return $this->render('Email/List/listealiases.html.twig',
            array(
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'aliases'=>$aliases,
                'emailAddress'=> $emailAddress,
                'ndd'=> $ndd,
                'iduser'=> $iduser,
                'idagency'=> $idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }
    /**
     * @Route("/private/user/{iduser}/ndd/{ndd}/email/{addressEmail}", name="mailbox")
     */
    public function mailbox( $iduser,$ndd,$addressEmail)
    {

    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/delete/{alias}/", name="delete_alias_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/delete/{alias}/", name="delete_alias_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/{emailAddress}/alias/delete/{alias}/", name="delete_alias_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/supprimerAlias/{alias}/", name="delete_alias_compte_email",defaults={"iduser"=0,"idagency"=0,"emailAddress"=0,"ndd"=0})
     */
    public function deleteAlias(Request $request,$iduser,$ndd,$emailAddress,$alias,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //$userConnected = $this->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        if($routeName=='delete_alias_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_super_admin','label'=>'Liste des alias','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$alias,'param'=>array());

        }elseif($routeName=='delete_alias_mailbox_admin'){
            $type='admin';
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_admin','label'=>'Liste des alias','param'=>array('iduser'=>$iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$alias,'param'=>array());
        }elseif($routeName=="delete_alias_mailbox_user"){
            $type='user';
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;

            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_user','label'=>'Liste des alias','param'=>array('iduser'=>$iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$alias,'param'=>array());
        }else{
            $type='compteemail';
            $idagency=$userConnected->getUser()->agency->id;
            $iduser=$userConnected->getUser()->id;
            $emailAddress=$email;
            $tmp=explode('@',$email);
            $ndd = $tmp[1];

            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'my_email_account','label'=>'Gestion de compte mon e-mail','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$alias,'param'=>array());
        }

        $form = $this->createFormBuilder()
            ->add('delete',SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->add('cancel',SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                if ($form->get('delete')->isClicked()) {


                    $client->mailboxDeleteAliases($email, $pwd, $emailAddress, array($alias));

                }
                if ($form->get('cancel')->isClicked()||$form->get('delete')->isClicked()) {

                    if($type=='super_admin'){
                        return $this->redirectToRoute("list_alias_mailbox_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
                    }elseif($type=='admin'){
                        return $this->redirectToRoute("list_alias_mailbox_admin", array("iduser" => $iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
                    }elseif($type=="user"){
                        return $this->redirectToRoute("list_alias_mailbox_user", array('ndd'=>$ndd,'emailAddress'=>$emailAddress));
                    }else{
                        return $this->redirectToRoute("my_email_account", array());

                    }

                }
            } catch (\SoapFault $e) {
                //    throw new \SoapFault("ADD_ALIAS", $e->getMessage());
                //  throw new \SoapFault("ADD_ALIAS", "Erreur lors de la suppression d'un alias");
                $form->addError(new FormError($e->getMessage()));
            }





        }

        return $this->render('Email/Form/deleteAlias.html.twig',
            array(
                'h1'=> 'Supprimer l\'alias : '.$alias,
                'form'=>$form->createView(),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'ndd'=>$ndd,
                'alias'=>$alias,
                'emailAddress'=>$emailAddress,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,

                'email'=>$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));


    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/create/", name="add_alias_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/{emailAddress}/alias/create/", name="add_alias_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/{emailAddress}/alias/create/", name="add_alias_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/addAlias/", name="add_alias_mailbox_compte_email",defaults={"iduser"=0,"idagency"=0,"emailAddress"=0,"ndd"=0})
     *
     */
    public function createAlias(Request $request,$iduser,$ndd,$emailAddress,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //$userConnected = $this->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='add_alias_mailbox_compte_email'){
            $type = 'compteemail';
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $tmp = explode('@',$email);
            $ndd = $tmp[1];
            $emailAddress=$email;

            $breadcrumb = array();
            $breadcrumb[]=array('url'=>'my_email_account','label'=>'Gestion de ma boite e-mail','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter un alias','param'=>array());
        }
        elseif($routeName=='add_alias_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_super_admin','label'=>$emailAddress.' : Liste des alias','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());

        }elseif($routeName=='add_alias_mailbox_admin') {
            $type = 'admin';
            $idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb = array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients : '.$customerInfo->agency->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_admin','label'=>$emailAddress.' : Liste des alias','param'=>array('iduser'=>$iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());
        }else{
            // user
            $type = 'user';
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $breadcrumb = array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_alias_mailbox_user','label'=>$emailAddress.' : Liste des alias','param'=>array('ndd'=>$ndd,'emailAddress'=>$emailAddress));
            $breadcrumb[]=array('url'=>'','label'=>'Ajouter','param'=>array());
        }
        $form = $this->createFormBuilder()
            ->add('alias',TextType::class,array('label'=> 'Alias : '))
            ->add('save',SubmitType::class,array('label'=>'Ajouter','attr'=>array('class'=>'btn btn-success')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $alias = $form->getData()['alias'];
            try {
                $client->mailboxAddAliases($email,$pwd,$emailAddress,array($alias));

                if($type=='super_admin'){
                    return $this->redirectToRoute("list_alias_mailbox_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
                }elseif($type=='admin'){
                    return $this->redirectToRoute("list_alias_mailbox_admin", array("iduser" => $iduser,'ndd'=>$ndd,'emailAddress'=>$emailAddress));
                }elseif($type=="user"){
                    return $this->redirectToRoute("list_alias_mailbox_user", array('ndd'=>$ndd,'emailAddress'=>$emailAddress));
                }else{
                    return $this->redirectToRoute("my_email_account");


                }
            } catch (\SoapFault $e) {
                // throw new \SoapFault("ADD_ALIAS", "Erreur lors de l'ajout d'un alias");
                $form->addError(new FormError("Cet alias existe déjà, ou, une erreur est survenue"));
            }



        }

        return $this->render('Email/Form/addAlias.html.twig',
            array(
                'form'=>$form->createView(),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'ndd'=>$ndd,
                'emailAddress'=>$emailAddress,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,

                'email'=>$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'type'=>$type,
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));


    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/email/delete/{emailAddress}", name="delete_mailbox_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/email/delete/{emailAddress}", name="delete_mailbox_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/email/delete/{emailAddress}", name="delete_mailbox_user",defaults={"iduser"=0,"idagency"=0})
     *
     */
    public function deleteMailbox(Request $request,$iduser,$ndd,$emailAddress,$idagency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $defaultData = array();
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if($routeName=='delete_mailbox_super_admin'){
            $type='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_super_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$emailAddress,'param'=>array());

        }elseif($routeName=='delete_mailbox_admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $type = 'admin';
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Clients','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_admin','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$emailAddress,'param'=>array());

        }else{
            $idagency = $userConnected->getUser()->agency->id;
            $iduser = $userConnected->getUser()->id;
            $type = 'user';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Mes domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'list_emails_for_domain_user','label'=>'Liste des boites e-mail','param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Supprimer : '.$emailAddress,'param'=>array());
        }
        $form = $this->createFormBuilder($defaultData)
            ->add('delete', SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->add('cancel', SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            if ($form->get('delete')->isClicked()) {

                try {
                     $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                    if ($client->deleteMailbox($email, $pwd, $emailAddress)) {
                        // redirect
                        if($type=='super_admin'){
                            return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));
                        }elseif($type=='admin'){
                            return $this->redirectToRoute("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd));
                        }else{
                            return $this->redirectToRoute("list_emails_for_domain_user", array('ndd'=>$ndd));
                        }
                    } else {
                        // Afficher erreur
                        echo 'erreur';
                    }


                } catch (\SoapFault $e) {
                    $result = $e->getMessage();
                    //  var_dump($result);

                }
            }
            if ($form->get('cancel')->isClicked()) {
                if($type=='super_admin'){
                    return $this->redirectToRoute("list_emails_for_domain_super_admin", array("idagency"=>$idagency,"iduser" => $iduser,'ndd'=>$ndd));
                }elseif($type=='admin'){
                    return $this->redirectToRoute("list_emails_for_domain_admin", array("iduser" => $iduser,'ndd'=>$ndd));
                }else{
                    return $this->redirectToRoute("list_emails_for_domain_user", array('ndd'=>$ndd));
                }
            }


        }
        return $this->render('Email/Form/deleteMailbox.html.twig',
            array(
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'ndd'=>$ndd,
                'emailAddress'=>$emailAddress,
                'form'=>$form->createView(),
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'email'=>$emailAddress,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


            ));
    }
}
