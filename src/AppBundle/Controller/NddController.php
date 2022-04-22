<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 15/06/15
 * Time: 09:17
 */
namespace AppBundle\Controller;

use AppBundle\Traits\Referer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class NddController extends Controller{
    use Referer;
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/renew/{ndd}", name="renew_ndd_super_admin")
     * @Route("/private/customer/{iduser}/ndd/renew/{ndd}", name="renew_ndd_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/renew/{ndd}", name="renew_ndd_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function renewNddAction($ndd,$idagency,$iduser,Request $request){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='renew_ndd_admin'){
            $idagency=$userConnected->getUser()->agency->id;

            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $typeUser='admin';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Renouveler le domaine','param'=>array('ndd'=>$ndd));

        }
        elseif($routeName=='renew_ndd_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $typeUser='user';

            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();


            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines ','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Renouveler le domaine','param'=>array());

        }else{
            //ndds_super_admin
            $typeUser='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
            $breadcrumb=array();

            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Renouveler le domaine','param'=>array());




        }
        $objNdd = $client->getNdd($email,$pwd,$ndd);




        // dump($objNdd);
        // print_r($objNdd->product);
        // On fabrique le formulaire.

        // data par défaut :
        $dataPerDefault=array();
        $arrayNdd=array();

        $priceHT = $objNdd->product->minPriceHT?$objNdd->product->minPriceHT:$objNdd->product->priceHT;
        $arrayNdd[]=array('idProduct'=>$objNdd->product->id,'name'=>$objNdd->name,'date'=>$objNdd->date_registry_end,
            'priceHt'=>$priceHT,'options'=>$objNdd->options
            //'priceTTC'=>($priceHT*$objNdd->product->percentTax)+$priceHT
        );
        $dataPerDefault[]=$objNdd->product->minPeriod;







        $form= $this->createFormBuilder()->
        add('ndds', CollectionType::class, array('data'=>$dataPerDefault,
            // each item in the array will be an "email" field
            'entry_type'   => ChoiceType::class,
            // these options are passed to each "email" type
            'entry_options'  => array(
                'choices'  => array_flip(array(
                    '0' => 'Ne pas renouveler',
                    '12' => '1 an',
                    '24'     => '2 ans',
                    '36'    => '3 ans',
                    '48'    => '4 ans',
                    '60'    => '5 ans',
                    '72'    => '6 ans',
                    '84'    => '7 ans',
                    '96'    => '8 ans',
                    '108'    => '9 ans',
                )),
            ),
        ))->add('valid',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')));
        $form = $form->getForm();


        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();

            //$arrayNdd : infos sur les ndd
            $i=0;
            foreach($data['ndds'] as $ndd){
                // var_dump($ndd,$arrayNdd[$i]);
                $options=array('ndd'=>$arrayNdd[$i]['name'],'period'=>$ndd);
                $client->addToCart($email,$pwd,$arrayNdd[$i]['idProduct'],$iduser,json_encode($options));
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
                $options));

            // return $this->redirectToRoute('pay_cart');
        }


        // Frm de renouvelement ( + modification addToCart pour ajouter le produit, upd aussi de payCart, pour ajouter les produits de types renouvelement NDD)
        return $this->render('Ndd/renewNdd.html.twig',
            array(
                'arrayNdd'=>$arrayNdd,
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
                'h1'=>'Renouvelement de domaines',
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }
    /**
     * @Route("/private/user/{iduser}/empty-ndd", name="emptyndd")
     * @Route("/private/empty-ndd", name="emptyndduser",defaults={"iduser"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function emptyListAction($iduser){
        //$session = $request->getSession();
        $userConnected = $this->get('security.context')->getToken()->getUser();
        $email =  $userConnected->getEmail();

        if($iduser==0){
            $iduser=$userConnected->getUser()->id;
        }
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Aucun nom de domaine','param'=>array());

        //  $pwd =  $session->get('pwd');
        return $this->render('Ndd/emptyndd.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),

                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'iduser'=>$iduser,
                'breadcrumb'=>$breadcrumb
            )
        );

    }
    /**
     * @Route("/private/all-ndds", name="all_ndds_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function allDomainsAction(Request $request){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $iduser=$userConnected->getUser()->id;
        $idagency=$userConnected->getUser()->agency->id;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Tous les domaines que je gère','param'=>array());

        $afficheProduits = $client->accountBalanceExist($email,$pwd,$iduser);

        $h1='Liste de tous les noms de domaines que je gère';


        $list = $client->listAllNdds($email,$pwd,$iduser);

        $today = new \DateTime();
        return $this->render('Ndd/List/listallndd.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndds'=> $list,
                'countNdds'=>count($list),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
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
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd", name="ndds_super_admin")
     * @Route("/private/customer/{iduser}/ndd", name="ndds_admin",defaults={"idagency"=0})
     * @Route("/private/ndd", name="ndds_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function indexAction(Request $request,$iduser,$idagency)
    {
//        $requestRoute = $this->container->get('router.request_context');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        if($routeName=='ndds_admin'){
            $idagency=$userConnected->getUser()->agency->id;

            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $typeUser='admin';
            $h1='Liste des domaines de '.$customerInfo->name;
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'','label'=>'Liste des domaines','param'=>array());
        }
        elseif($routeName=='ndds_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $typeUser='user';
            $h1='Mes domaines';
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'#','label'=>'Liste des domaines ','param'=>array());

        }else{
            //ndds_super_admin
            $typeUser='super_admin';
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);

            //    $retidrectEmpty = array('url'=>'emptyndd','param'=>array('iduser',$iduser));
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'#','label'=>'Liste des domaines','param'=>array());
            $h1="Liste des domaines pour : ".$customerInfo->name." client de l'agence : ".$customerInfo->agency->name;


        }
        try{
            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);

            $list = $client->listNdd($email,$pwd,$iduser);




            // var_dump($list->item);
            //echo '<hr>';
        } catch (\SoapFault $e) {
            $result = $e->getMessage();
            // var_dump($e->getMessage());

        }

        $today = new \DateTime();
        return $this->render('Ndd/List/listndd.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'ndds'=> $list,
                'countNdds'=>count($list),
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'typeUser'=>$typeUser,
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
     * @Route("/private/administrator/{idagency}/customer/{iduser}", name="customer_super_admin")
     * @Route("/private/customer/{iduser}", name="customer_admin",defaults={"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function customerAction(Request $request,$idagency,$iduser){
        // $requestRoute = $this->container->get('request');
        // $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        if($routeName=="customer_super_admin"){
            return $this->redirectToRoute('list_customer_super_admin',array('idagency'=>$idagency));
        }else{
            return $this->redirectToRoute('list_customer_admin',array());
        }

    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/list-zones", name="ndd_list_zone_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/list-zones", name="ndd_list_zone_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/list-zones", name="ndd_list_zone_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function listZonesAction(Request $request,$iduser,$idagency,$ndd)
    {
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        // On doit regarder si le dns est bien celui de gandi.
        $domain = $client->getNdd($email,$pwd,$ndd);

        if($domain->nameservers[0]=='a.dns.gandi.net') {

            if ($routeName == 'ndd_list_zone_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
                $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());
                $type = 'user';

            } elseif ($routeName == 'ndd_list_zone_admin') {
                $idagency = $userConnected->getUser()->agency->id;
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());

                $type = 'admin';
            } else {
                // ndd_super_admin
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());
                $type = 'super_admin';
            }

            $infos = $client->listZoneVersionDNS($email, $pwd, $ndd);


            $headers = array();
            $form = $this->createFormBuilder();
            foreach ($infos->versions as $v) {
                $headers[] = array('id' => $v->idVersion, 'current' => ($infos->idVersionActive == $v->idVersion ? true : false));
                $data = '';
                foreach ($v->versions as $v2) {
                    /**
                     * +"name": "@"
                     * +"ttl": 10800
                     * +"type": "A"
                     * +"value": "217.70.184.38"
                     */
                    $data .= $v2->name . ' ' . $v2->ttl . ' IN ' . $v2->type . ' ' . $v2->value . "\n";
                }
                $form = $form->add('v_' . $v->idVersion, TextareaType::class, array('label' => 'Fichier de zone : ', 'data' => $data, 'disabled' => ($infos->idVersionActive != $v->idVersion ? true : false), 'attr' => array('class' => 'bigtextarea')));
                if ($infos->idVersionActive == $v->idVersion) {
                    $form = $form->add('save_active', SubmitType::class, array('label' => 'Sauver la version et l\'activer'));
                    $form = $form->add('save', SubmitType::class, array('label' => 'Sauver uniquement'));
                } else {
                    $form = $form->add('active_' . $v->idVersion, SubmitType::class, array('label' => 'Activer la version ' . $v->idVersion));
                    $form = $form->add('delete_' . $v->idVersion, SubmitType::class, array('label' => 'Supprimer la version ' . $v->idVersion));

                }

            }

            $form = $form->getForm();


            $form->handleRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();

                try {

                    if ($form->get('save_active')->isClicked() or $form->get('save')->isClicked()) {
                        // On sauve la version chez gandi


                        $newNumVersion = $client->saveZoneDns($email, $pwd, $ndd, $data['v_' . $infos->idVersionActive]);
                        //dump($data['v_'.$infos->idVersionActive]);
                        if ($form->get('save_active')->isClicked()) {
                            $client->useVersionZoneDns($email, $pwd, $ndd, $newNumVersion);
                        }

                    } else {
                        $clickedBtn = $form->getClickedButton()->getName();
                        if (substr($clickedBtn, 0, 7) == 'delete_') {
                            $idVersionToActivate = (int)explode('delete_', $clickedBtn)[1];

                            $client->deleteVersionZoneDns($email, $pwd, $ndd, $idVersionToActivate);
                        } else {
                            $idVersionToActivate = (int)explode('active_', $clickedBtn)[1];
                            $client->useVersionZoneDns($email, $pwd, $ndd, $idVersionToActivate);
                        }
                    }
                    // Redirect
                    if ($type == 'super_admin') {
                        return $this->redirectToRoute('ndd_list_zone_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                    } elseif ($type == 'admin') {
                        return $this->redirectToRoute('ndd_list_zone_admin', array('iduser' => $iduser, 'ndd' => $ndd));
                    } else {
                        return $this->redirectToRoute('ndd_list_zone_user', array('ndd' => $ndd));
                    }

                } catch (\SoapFault $e) {

                    $form->addError(new FormError(str_replace('Error on object : OBJECT_DNS_RECORD (CAUSE_BADPARAMETER)', '', $e->getMessage())));
                }


            }

            return $this->render('Ndd/domain_gestion_fichier_de_zone.html.twig',
                array(
                    'vActive' => $infos->idVersionActive,
                    'result' => 'test',
                    'classBody' => 'skin-blue sidebar-mini',
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                    'name' => $email,
                    'ndd' => $ndd,
                    'iduser' => $iduser,
                    'idagency' => $idagency,
                    'breadcrumb' => $breadcrumb,
                    'type' => $type,
                    //'infos'=>$infos,
                    'headers' => $headers,
                    'form' => $form->createView(),
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

                )
            );
        }else{
            // pas actif

            if ($routeName == 'ndd_list_zone_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
                $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());
                $type = 'user';

            } elseif ($routeName == 'ndd_list_zone_admin') {
                $idagency = $userConnected->getUser()->agency->id;
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());

                $type = 'admin';
            } else {
                // ndd_super_admin
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer le fichier de zone', 'param' => array());
                $type = 'super_admin';
            }


            return $this->render('Ndd/domain_gestion_fichier_de_zone_pas_gandi.html.twig',
                array(
                    'result' => 'test',
                    'classBody' => 'skin-blue sidebar-mini',
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                    'name' => $email,
                    'ndd' => $ndd,
                    'iduser' => $iduser,
                    'idagency' => $idagency,
                    'breadcrumb' => $breadcrumb,
                    'type' => $type,
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
                    //'infos'=>$infos,



                )
            );
        }
    }

    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/create-redirection", name="create-redirection-super-admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/create-redirection", name="create-redirection-admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/create-redirection", name="create-redirection-user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function createRedirectionAction(Request $request,$iduser,$idagency,$ndd){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        if ($routeName == 'create-redirection-user') {
            $iduser = $userConnected->getUser()->id;
            $idagency = $userConnected->getUser()->agency->id;
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
            $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_user', 'label' => 'Gerer les redirections', 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Ajouter une redirections', 'param' => array());
            $type = 'user';

        } elseif ($routeName == 'create-redirection-admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
            $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_admin', 'label' => 'Gerer les redirections', 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Ajouter une redirections', 'param' => array());

            $type = 'admin';
        } else {
            // ndd_super_admin
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
            $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_super_admin', 'label' => 'Gerer les redirections', 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Ajouter une redirections', 'param' => array());
            $type = 'super_admin';
        }


        $form = $this->createFormBuilder()
            ->add('type',ChoiceType::class,array('label'=>'Type de redirection : ','choices'=>array('301 - Directe (permanante)'=>'http301','302 - Directe (temporaire)'=>'http302','Transparente'=>'cloak')))
            ->add('host',TextType::class,array('label'=>'Sous domaine : ','required'=>false))
            ->add('protocol',ChoiceType::class,array('label'=>' ','choices'=>array('http://'=>'http://','https://'=>'https://','ftp://'=>'ftp://')))
            ->add('url',TextType::class,array('label'=>'Redirection : '))
            ->add('submit',SubmitType::class,array('label'=>'Sauver'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            try {
                $data = $form->getData();
                //dump($data);
                $host = $data['host']?$data['host']:'';
                $client->createWebRedir($email, $pwd, $ndd, $host, $data['protocol'] . $data['url'], $data['type']);

                if ($type == "super_admin") {
                    return $this->redirectToRoute('ndd_list_redirections_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                } elseif ($type == "admin") {
                    return $this->redirectToRoute('ndd_list_redirections_admin', array('iduser' => $iduser, 'ndd' => $ndd));
                } else {
                    return $this->redirectToRoute('ndd_list_redirections_user', array('ndd' => $ndd));
                }
            }catch (\Exception $e){
                $form->addError(new FormError(str_replace('Error on object : OBJECT_WEB_REDIRECTION (CAUSE_EXIST) ', '', $e->getMessage())));
            }
        }

        return $this->render('Ndd/domain_create_redirection.html.twig',
            array(
                'form'=>$form->createView(),
                'result' => 'test',
                'classBody' => 'skin-blue sidebar-mini',
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                'name' => $email,
                'ndd' => $ndd,
                'iduser' => $iduser,
                'idagency' => $idagency,
                'breadcrumb' => $breadcrumb,
                'type' => $type,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }

    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/update-redirection/{host}", name="update-redirection-super-admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/update-redirection/{host}", name="update-redirection-admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/update-redirection/{host}", name="update-redirection-user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function updateRedirectionAction(Request $request,$iduser,$idagency,$ndd,$host){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        if ($routeName == 'update-redirection-user') {
            $iduser = $userConnected->getUser()->id;
            $idagency = $userConnected->getUser()->agency->id;
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
            $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_user', 'label' => 'Gerer les redirections', 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());
            $type = 'user';

        } elseif ($routeName == 'update-redirection-admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
            $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_admin', 'label' => 'Gerer les redirections', 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());

            $type = 'admin';
        } else {
            // ndd_super_admin
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
            $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_super_admin', 'label' => 'Gerer les redirections', 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());
            $type = 'super_admin';
        }
        $host = $host=='(vide)'?'':$host;
        // On charge la redirection en cours
        $olds = $client->listWebRedir($email, $pwd, $ndd,$host);
        $old=null;
        foreach($olds as $ol){
            if($ol->host==$host){
                $old=$ol;
                break;
            }
        }

        $oldUrl = explode('://',$old->url);
        $form = $this->createFormBuilder()
            ->add('type',ChoiceType::class,array('label'=>'Type de redirection : ','choices'=>array('301 - Directe (permanante)'=>'http301','302 - Directe (temporaire)'=>'http302','Transparente'=>'cloak'),'data'=>$old->type))
            ->add('host',TextType::class,array('label'=>'Sous domaine : ','required'=>false,'data'=>$old->host))
            ->add('protocol',ChoiceType::class,array('label'=>' ','data'=>$oldUrl[0].'://','choices'=>array('http://'=>'http://','https://'=>'https://','ftp://'=>'ftp://')))
            ->add('url',TextType::class,array('label'=>'Redirection : ','data'=>$oldUrl[1]))
            ->add('submit',SubmitType::class,array('label'=>'Sauver'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            try {
                $data = $form->getData();
                $newHost = $data['host']?$data['host']:'';
                $client->updateWebRedir($email, $pwd, $ndd,$old->host, $newHost, $data['protocol'] . $data['url'], $data['type']);

                if ($type == "super_admin") {
                    return $this->redirectToRoute('ndd_list_redirections_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                } elseif ($type == "admin") {
                    return $this->redirectToRoute('ndd_list_redirections_admin', array('iduser' => $iduser, 'ndd' => $ndd));
                } else {
                    return $this->redirectToRoute('ndd_list_redirections_user', array('ndd' => $ndd));
                }
            }catch (\Exception $e){
                $form->addError(new FormError(str_replace('Error on object : OBJECT_WEB_REDIRECTION (CAUSE_EXIST) ', '', $e->getMessage())));
            }
        }

        return $this->render('Ndd/domain_create_redirection.html.twig',
            array(
                'form'=>$form->createView(),
                'result' => 'test',
                'classBody' => 'skin-blue sidebar-mini',
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                'name' => $email,
                'ndd' => $ndd,
                'iduser' => $iduser,
                'idagency' => $idagency,
                'breadcrumb' => $breadcrumb,
                'type' => $type,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/delete-redirection/{host}", name="delete-redirection-super-admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/delete-redirection/{host}", name="delete-redirection-admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/delete-redirection/{host}", name="delete-redirection-user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function deleteRedirectionAction(Request $request,$iduser,$idagency,$ndd,$host){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        if ($routeName == 'delete-redirection-user') {
            $iduser = $userConnected->getUser()->id;
            $idagency = $userConnected->getUser()->agency->id;
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
            $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_user', 'label' => 'Gerer les redirections', 'param' => array('ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());
            $type = 'user';

        } elseif ($routeName == 'delete-redirection-admin') {
            $idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
            $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_admin', 'label' => 'Gerer les redirections', 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());

            $type = 'admin';
        } else {
            // ndd_super_admin
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
            $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
            $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
            $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => 'ndd_list_redirections_super_admin', 'label' => 'Gerer les redirections', 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
            $breadcrumb[] = array('url' => '#', 'label' => 'Modifier une redirections', 'param' => array());
            $type = 'super_admin';
        }
        $host = $host=='(vide)'?'':$host;
        // On charge la redirection en cours
        $olds = $client->listWebRedir($email, $pwd, $ndd,$host);
        $old=null;
        foreach($olds as $ol){
            if($ol->host==$host){
                $old=$ol;
                break;
            }
        }


        $form = $this->createFormBuilder()
            ->add('delete',SubmitType::class,array('label'=>'Supprimer'))
            ->add('cancel',SubmitType::class,array('label'=>'Annuler'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            try {
                $data = $form->getData();
                if ($form->get('delete')->isClicked()) {
                    $host = $host?$host:'';
                    $client->deleteWebRedir($email, $pwd, $ndd,$host);
                }

                if ($type == "super_admin") {
                    return $this->redirectToRoute('ndd_list_redirections_super_admin', array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                } elseif ($type == "admin") {
                    return $this->redirectToRoute('ndd_list_redirections_admin', array('iduser' => $iduser, 'ndd' => $ndd));
                } else {
                    return $this->redirectToRoute('ndd_list_redirections_user', array('ndd' => $ndd));
                }
            }catch (\Exception $e){
                $form->addError(new FormError(str_replace('Error on object : OBJECT_WEB_REDIRECTION (CAUSE_EXIST) ', '', $e->getMessage())));
            }
        }

        return $this->render('Ndd/domain_delete_redirection.html.twig',
            array(
                'form'=>$form->createView(),
                'result' => 'test',
                'classBody' => 'skin-blue sidebar-mini',
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                'name' => $email,
                'ndd' => $ndd,
                'iduser' => $iduser,
                'idagency' => $idagency,
                'breadcrumb' => $breadcrumb,
                'type' => $type,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }
    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/list-redirections", name="ndd_list_redirections_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/list-redirections", name="ndd_list_redirections_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/list-redirections", name="ndd_list_redirections_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function listRedirectionsAction(Request $request,$iduser,$idagency,$ndd){

        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        // On doit regarder si le dns est bien celui de gandi.
        $domain = $client->getNdd($email,$pwd,$ndd);

        if($domain->nameservers[0]=='a.dns.gandi.net') {

            if ($routeName == 'ndd_list_redirections_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
                $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());
                $type = 'user';

            } elseif ($routeName == 'ndd_list_redirections_admin') {
                $idagency = $userConnected->getUser()->agency->id;
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());

                $type = 'admin';
            } else {
                // ndd_super_admin
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());
                $type = 'super_admin';
            }

            $list = $client->listWebRedir($email, $pwd, $ndd);




            return $this->render('Ndd/domain_list_redirections.html.twig',
                array(
                    'list'=>$list,
                    'result' => 'test',
                    'classBody' => 'skin-blue sidebar-mini',
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                    'name' => $email,
                    'ndd' => $ndd,
                    'iduser' => $iduser,
                    'idagency' => $idagency,
                    'breadcrumb' => $breadcrumb,
                    'type' => $type,
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
                    //'infos'=>$infos,


                )
            );

        }else{
            // pas actif

            if ($routeName == 'ndd_list_redirections_user') {
                $iduser = $userConnected->getUser()->id;
                $idagency = $userConnected->getUser()->agency->id;
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'ndds_user', 'label' => 'Liste des domaines', 'param' => array());
                $breadcrumb[] = array('url' => 'ndd_user', 'label' => $ndd, 'param' => array('ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());
                $type = 'user';

            } elseif ($routeName == 'ndd_list_redirections_admin') {
                $idagency = $userConnected->getUser()->agency->id;
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list_customer_admin', 'label' => 'Mes clients', 'param' => array());
                $breadcrumb[] = array('url' => 'customer_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndds_admin', 'label' => 'Liste des domaines', 'param' => array('iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_admin', 'label' => $ndd, 'param' => array('iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());

                $type = 'admin';
            } else {
                // ndd_super_admin
                $customerInfo = $client->getCustomer($email, $pwd, $iduser);
                $breadcrumb = array();
                $breadcrumb[] = array('url' => 'list-users-agency', 'label' => 'Liste des gestionnaires', 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'list_customer_super_admin', 'label' => 'Clients de l\'agence : ' . $customerInfo->agency->name, 'param' => array('idagency' => $idagency));
                $breadcrumb[] = array('url' => 'customer_super_admin', 'label' => $customerInfo->name, 'param' => array('iduser' => $iduser, 'idagency' => $idagency));
                $breadcrumb[] = array('url' => 'ndds_super_admin', 'label' => 'Liste des domaines', 'param' => array('idagency' => $idagency, 'iduser' => $iduser));
                $breadcrumb[] = array('url' => 'ndd_super_admin', 'label' => $ndd, 'param' => array('idagency' => $idagency, 'iduser' => $iduser, 'ndd' => $ndd));
                $breadcrumb[] = array('url' => '#', 'label' => 'Gerer les redirections', 'param' => array());
                $type = 'super_admin';
            }


            return $this->render('Ndd/domain_gestion_redirections_pas_gandi.html.twig',
                array(
                    'result' => 'test',
                    'classBody' => 'skin-blue sidebar-mini',
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css', '//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css', 'jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js', '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js', 'adminLTE/js/loadplugins.js'),
                    'name' => $email,
                    'ndd' => $ndd,
                    'iduser' => $iduser,
                    'idagency' => $idagency,
                    'breadcrumb' => $breadcrumb,
                    'type' => $type,
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
                    //'infos'=>$infos,



                )
            );
        }

    }

    /**
     *
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}", name="ndd_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}", name="ndd_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}", name="ndd_user",defaults={"iduser"=0,"idagency"=0})
     * @Security("has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function domainAction(Request $request,$iduser,$idagency,$ndd)
    {
        $routeName =$request->attributes->get('_route');
        // $requestRoute = $this->container->get('request');

//        $routeName = $requestRoute->get('_route');
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='ndd_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'#','label'=>$ndd,'param'=>array());
            $type='user';

        }elseif($routeName=='ndd_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'#','label'=>$ndd,'param'=>array());

            $type='admin';
        }else{
            // ndd_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'#','label'=>$ndd,'param'=>array());
            $type='super_admin';
        }

        try{

            $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);

            $domain = $client->getNdd($email,$pwd,$ndd);


            //dump($domain);

            //   public function listWebRedirAction($username,$password,$domain){
            // dump($client->listWebRedir($email,$pwd,$domain->name));
        } catch (\SoapFault $e) {
            // $result = $e->getMessage();
            throw new \Exception($e->getMessage());
        }
        /*
                             'csss'=>array('jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/fancybox/source/jquery.fancybox.css?v=2.1.5','adminLTE/chosen/chosen.min.css'),
                            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/fancybox/lib/jquery.mousewheel-3.0.6.pack.js','adminLTE/fancybox/source/jquery.fancybox.js?v=2.1.5','adminLTE/js/loadFancybox.js','adminLTE/js/loadplugins.js'
         */
        return $this->render('Ndd/domain.html.twig',
            array(
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/fancybox/source/jquery.fancybox.css?v=2.1.5','adminLTE/chosen/chosen.min.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/fancybox/lib/jquery.mousewheel-3.0.6.pack.js','adminLTE/fancybox/source/jquery.fancybox.js?v=2.1.5','adminLTE/js/loadFancybox.js'),
                'name'=>$email,
                'ndd'=> $domain,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'afficheProduits'=>$afficheProduits,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/gestion-dns", name="ndd_gestion_dns_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/gestion-dns", name="ndd_gestion_dns_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/gestion-dns", name="ndd_gestion_dns_user",defaults={"iduser"=0,"idagency"=0})
     */
    public function nddGestionDnsAction(Request $request,$idagency,$iduser,$ndd){


        $routeName =$request->attributes->get('_route');

        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        if($routeName=='ndd_gestion_dns_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Gérer les DNS du domaine : '.$ndd,'param'=>array());
            $typeusr='user';

        }elseif($routeName=='ndd_gestion_dns_admin'){
            $idagency=$userConnected->getUser()->agency->id;
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            // $retidrectEmpty = array('url'=>'emptyndduser','param'=>array());
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'customer_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndds_admin','label'=>'Liste des domaines','param'=>array('iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_admin','label'=>$ndd,'param'=>array('iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Gérer les DNS du domaine : '.$ndd,'param'=>array());

            $typeusr='admin';
        }else{
            // ndd_super_admin
            $customerInfo=$client->getCustomer($email,$pwd,$iduser);
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires','param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$customerInfo->agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'customer_super_admin','label'=>$customerInfo->name,'param'=>array('iduser'=>$iduser,'idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'ndds_super_admin','label'=>'Liste des domaines','param'=>array('idagency'=>$idagency,'iduser'=>$iduser));
            $breadcrumb[]=array('url'=>'ndd_super_admin','label'=>$ndd,'param'=>array('idagency'=>$idagency,'iduser'=>$iduser,'ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'','label'=>'Gérer les DNS du domaine : '.$ndd,'param'=>array());
            $typeusr='super_admin';
        }

        // On récupère les DNS pour le domaine.
        $objNdd = $client->getNdd($email,$pwd,$ndd);

        $dns1='';
        $dns2='';
        $dns3='';
        $dns4='';
        $dns5='';
        $dns6='';
        $dns7='';
        $dns8='';
        $dns9='';
        $jsHide = 'hide';
        $type = "default";
        if($objNdd->nameservers[0]!='a.dns.gandi.net'){
            $jsHide='';
            $type = "other";
            $dns1=array_key_exists('0', $objNdd->nameservers)?$objNdd->nameservers[0]:'';
            $dns2=array_key_exists('1', $objNdd->nameservers)?$objNdd->nameservers[1]:'';
            $dns3=array_key_exists('2', $objNdd->nameservers)?$objNdd->nameservers[2]:'';
            $dns4=array_key_exists('3', $objNdd->nameservers)?$objNdd->nameservers[3]:'';
            $dns5=array_key_exists('4', $objNdd->nameservers)?$objNdd->nameservers[4]:'';
            $dns6=array_key_exists('5', $objNdd->nameservers)?$objNdd->nameservers[5]:'';
            $dns7=array_key_exists('6', $objNdd->nameservers)?$objNdd->nameservers[6]:'';
            $dns8=array_key_exists('7', $objNdd->nameservers)?$objNdd->nameservers[7]:'';
            $dns9=array_key_exists('8', $objNdd->nameservers)?$objNdd->nameservers[8]:'';

        }

        $form = $this->createFormBuilder()
            ->add('type',ChoiceType::class,array('choices'=>array('DNS par défaut'=>'default','DNS personnalisés'=>'other'),'label'=>'DNS utilisés : ','expanded'=>true,'data'=>$type,'attr'=>array('id'=>'idpicdns')))

            ->add('dns1',TextType::class,array('label'=>'DNS 1 :','required'=>false,'data'=>$dns1))
            ->add('dns2',TextType::class,array('label'=>'DNS 2 :','required'=>false,'data'=>$dns2))
            ->add('dns3',TextType::class,array('label'=>'DNS 3 :','required'=>false,'data'=>$dns3))
            ->add('dns4',TextType::class,array('label'=>'DNS 4 :','required'=>false,'data'=>$dns4))
            ->add('dns5',TextType::class,array('label'=>'DNS 5 :','required'=>false,'data'=>$dns5))
            ->add('dns6',TextType::class,array('label'=>'DNS 6 :','required'=>false,'data'=>$dns6))
            ->add('dns7',TextType::class,array('label'=>'DNS 7 :','required'=>false,'data'=>$dns7))
            ->add('dns8',TextType::class,array('label'=>'DNS 8 :','required'=>false,'data'=>$dns8))
            ->add('dns9',TextType::class,array('label'=>'DNS 9 :','required'=>false,'data'=>$dns9))

            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-success')))
            ->getForm();



        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();
            if($data['type']=='default'){
                try {
                    $client->setNameServer($email, $pwd, $ndd, array('a.dns.gandi.net', 'b.dns.gandi.net', 'c.dns.gandi.net'));
                    if($typeusr=='super_admin'){
                        return $this->redirectToRoute('ndd_super_admin',array('ndd'=>$ndd,'iduser'=>$iduser,'idagency'=>$idagency));
                    }elseif($typeusr=='admin'){
                        return $this->redirectToRoute('ndd_admin',array('ndd'=>$ndd,'iduser'=>$iduser));
                    }else{
                        return $this->redirectToRoute('ndd_user',array('ndd'=>$ndd));
                    }
                }catch (\SoapFault $e){
                    $form->addError(new FormError($e->getMessage()));
                }
            }else{
                $jsHide='';
                $array = array();
                if($data['dns1']){$array[]=$data['dns1'];}
                if($data['dns2']){$array[]=$data['dns2'];}
                if($data['dns3']){$array[]=$data['dns3'];}
                if($data['dns4']){$array[]=$data['dns4'];}
                if($data['dns5']){$array[]=$data['dns5'];}
                if($data['dns6']){$array[]=$data['dns6'];}
                if($data['dns7']){$array[]=$data['dns7'];}
                if($data['dns8']){$array[]=$data['dns8'];}
                if($data['dns9']){$array[]=$data['dns9'];}
                try{
                    $client->setNameServer($email, $pwd, $ndd,$array);
                    if($typeusr=='super_admin'){
                        return $this->redirectToRoute('ndd_super_admin',array('ndd'=>$ndd,'iduser'=>$iduser,'idagency'=>$idagency));
                    }elseif($typeusr=='admin'){
                        return $this->redirectToRoute('ndd_admin',array('ndd'=>$ndd,'iduser'=>$iduser));
                    }else{
                        return $this->redirectToRoute('ndd_user',array('ndd'=>$ndd));
                    }
                }catch (\SoapFault $e){
                    $form->addError(new FormError($e->getMessage()));
                }
            }
        }



        return $this->render('Ndd/Form/gestion-dns.html.twig',
            array(
                'form'=>$form->createView(),
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','js/jsChangeDns.js'),
                'name'=>$email,
                'ndd'=> $ndd,
                'iduser'=>$iduser,
                'idagency'=>$idagency,
                'breadcrumb'=>$breadcrumb,
                'type'=>$type,
                'h1'=>'Gérer les DNS du domaine : '.$ndd,
                'hide'=>$jsHide,
                'typeusr'=>$typeusr,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );




    }
    /**
     * @Route("/private/ndd/getWhois/{ndd}", name="fancybox_get_whois")
     */
    public function fancyGetWhois(Request $request,$ndd){
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $whois = $client->whois($ndd);
        return $this->render('Ndd/Fancybox/returnwhois.html.twig',
            array(
                'csss'=>array('jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css'),
                'jss'=>array(),
                'whois'=>json_decode($whois),



            ));
    } /**
     * @Route("/private/ndd/getAuthCode/{ndd}", name="fancybox_get_auth_code")
     */
    public function fancyGetAuthCode(Request $request,$ndd){
        $session = $request->getSession();
        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();

        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $ndd = $client->getNdd($email,$pwd,$ndd);
        return $this->render('Ndd/Fancybox/return.html.twig',
            array(
                'csss'=>array('jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css'),
                'jss'=>array(),
                'ndd'=>$ndd,



            ));

    }
}