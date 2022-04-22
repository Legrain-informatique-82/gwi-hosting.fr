<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 22/04/16
 * Time: 14:23
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use AppBundle\Traits\Referer;


class HebergementMutualiseController extends Controller{

    use Referer;

    /**
     * @param $route
     * @return \Symfony\Component\HttpFoundation\Response
     * Affiche le menu permettant d'acheter ou non un hebergement mutualise (appel depuis le template Public/menu-heber-mutu.html.twig)
     */
    public function getMenuHebergementMutualiseAction(Request $request,$route){
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($this->getUser()) {
            $session = $request->getSession();
            $userConnected = $this->getUser();
            $email = $userConnected->getEmail();
            $pwd = $session->get('pwd');
            $afficheMenu = $client->proposeHerbergementMutualisePerUser($email,$pwd);
        }else{
            $afficheMenu = $client->proposeHerbergementMutualise('http://'.$request->getHost());
        }
        return $this->render('HebergementMutualise/Menu/menu-heber-mutu.html.twig',
            array(
                'afficheMenu'=>$afficheMenu,
                'route'=>$route
            ));
    }


    /**
     * @Route("/private/produits-mutualises/list", name="list_heber_mutualises_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function listProduitsHebergementAction(Request $request){

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1 = 'Liste des produits hébergements mutualisés';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb = array();
        $breadcrumb[] = array('url' => '#', 'label' => 'Liste des produits hébergements mutualisés', 'param' => array());

        $list = $client->listProductsHosting($email,$pwd);


        return $this->render('HebergementMutualise/List/listProducts.html.twig',array(
            'classBody'=>'skin-blue sidebar-mini',
            'iduser'=>$userConnected->getUser()->id,
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'list'=>$list,
            'h1'=>$h1,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


        ));

    }

    /**
     * @Route("/private/produits-mutualises/create", name="create_heber_mutualises_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function createProduitHebergementAction(Request $request){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1 = 'Créér un produit hébergement mutualisé';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list_heber_mutualises_admin', 'label' => 'Liste des produits hébergements mutualisés', 'param' => array());
        $breadcrumb[] = array('url' => '#', 'label' => 'créér un produit hébergement mutualisé', 'param' => array());

        // Fom

        $listOfInstancesMutualisable = $client->listInstancesMutualisables($email,$pwd,$userConnected->getUser()->id);

        $listInstances = array();

        foreach ($listOfInstancesMutualisable as $i){
            $listInstances[$i->name]=$i->id;
        }

        // dump($item,$listOfInstancesMutualisable);
        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=>'Nom du produit'))
            ->add('instance',ChoiceType::class,array('choices'=>$listInstances,'label'=>'Instance'))
            ->add('priceHt',MoneyType::class,array('label'=>'prix ht / mois'))
//            ->add('periodInMonth',IntegerType::class,array('label'=>'Durée de la période en mois'))
            ->add('bookableByCustomer',CheckboxType::class,array('required'=>false,'label'=>'Réservable par le client'))
            ->add('renewByCustomer',CheckboxType::class,array('required'=>false,'label'=>'Renouvelable par le client'))
            ->add('detail',TextareaType::class,array('required'=>false,'label'=>'Détail'))
            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            // Maj :


            $client->createProductsHosting($email,$pwd,$data['name'],
                $data['instance'],
                ($data['bookableByCustomer']==null?false:true),
                ($data['renewByCustomer']==null?false:true),
                $data['priceHt'],$data['detail']);
            return $this->redirectToRoute('list_heber_mutualises_admin');

        }

        return $this->render('HebergementMutualise/Form/form.html.twig',array(
            'classBody'=>'skin-blue sidebar-mini',
            'form'=>$form->createView(),
            'iduser'=>$userConnected->getUser()->id,
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'h1'=>$h1,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
    /**
     * @Route("/private/produits-mutualises/remove/{idProduit}", name="remove_heber_mutualises_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function removeProduitHebergementAction(Request $request,$idProduit){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1 = 'supprimer le produit hébergement mutualisé';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list_heber_mutualises_admin', 'label' => 'Liste des produits hébergements mutualisés', 'param' => array());
        $breadcrumb[] = array('url' => '#', 'label' => 'Modifier le produit hébergement mutualisé', 'param' => array());

        // Fom
        $item = $client->getProductsHosting($email,$pwd,$idProduit);
        $form = $this->createFormBuilder()
            ->add('submit',SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            $client->removeProductsHosting($email,$pwd,$idProduit);
            return $this->redirectToRoute('list_heber_mutualises_admin');

        }

        return $this->render('HebergementMutualise/Form/remove.html.twig',array(
            'classBody'=>'skin-blue sidebar-mini',
            'form'=>$form->createView(),
            'iduser'=>$userConnected->getUser()->id,
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'h1'=>$h1,
            'breadcrumb'=>$breadcrumb,
            'produit'=>$item,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


        ));
    }
    /**
     * @Route("/private/produits-mutualises/update/{idProduit}", name="update_heber_mutualises_admin")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function updateProduitHebergementAction(Request $request,$idProduit){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1 = 'Modifier le produit hébergement mutualisé';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $breadcrumb = array();
        $breadcrumb[] = array('url' => 'list_heber_mutualises_admin', 'label' => 'Liste des produits hébergements mutualisés', 'param' => array());
        $breadcrumb[] = array('url' => '#', 'label' => 'Modifier le produit hébergement mutualisé', 'param' => array());

        // Fom
        $item = $client->getProductsHosting($email,$pwd,$idProduit);

        $listOfInstancesMutualisable = $client->listInstancesMutualisables($email,$pwd,$userConnected->getUser()->id);

        $listInstances = array();

        foreach ($listOfInstancesMutualisable as $i){
            $listInstances[$i->name]=$i->id;
        }

        // dump($item,$listOfInstancesMutualisable);
        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=>'Nom du produit','data'=>$item->name))
            ->add('instance',ChoiceType::class,array('choices'=>$listInstances,'label'=>'Instance','data'=>$item->instance->id))
            ->add('priceHt',MoneyType::class,array('label'=>'prix ht / mois','data'=>$item->priceHt))
//            ->add('periodInMonth',IntegerType::class,array('label'=>'Durée de la période en mois','data'=>$item->periodInMonth))
            ->add('bookableByCustomer',CheckboxType::class,array('required'=>false,'label'=>'Réservable par le client','data'=>$item->bookableByCustomer==null?false:true))
            ->add('renewByCustomer',CheckboxType::class,array('required'=>false,'label'=>'Renouvelable par le client','data'=>$item->renewByCustomer==null?false:true))
            ->add('detail',TextareaType::class,array('required'=>false,'label'=>'Détail','data'=>$item->detail))
            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            // Maj :


            $client->updateProductsHosting($email,$pwd,$idProduit,$data['name'],
                $data['instance'],
                ($data['bookableByCustomer']==null?false:true),
                ($data['renewByCustomer']==null?false:true),
                $data['priceHt'],$data['detail']);
            return $this->redirectToRoute('list_heber_mutualises_admin');

        }

        return $this->render('HebergementMutualise/Form/form.html.twig',array(
            'classBody'=>'skin-blue sidebar-mini',
            'form'=>$form->createView(),
            'iduser'=>$userConnected->getUser()->id,
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'h1'=>$h1,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


        ));
    }

    /**
     * @Route("/private/liste-tous-les-hebergements-mutualises", name="list_all_hosting")
     * @Route("/private/liste-hebergements-mutualises", name="list_my_hosting")
     */
    public function listMyHostingAction(Request $request){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $breadcrumb = array();

        if ($routeName == 'list_my_hosting') {
            $list = $client->listMyHebergementsMutualises($email, $pwd);
            $watchProprio = false;
            $h1 = 'Mes hébergements mutualisés';
            $breadcrumb[] = array('url' => '#', 'label' => 'Mes hébergements mutualisés', 'param' => array());

        } else{
            $list = $client->listAllHebergementsMutualises($email,$pwd);
            $watchProprio = true;
            $h1 = 'Tous les hébergements mutualisés que je gère';
            $breadcrumb[] = array('url' => '#', 'label' => $h1, 'param' => array());

        }

        $today = new \DateTime();
        return $this->render('HebergementMutualise/List/mes-hebergements-mutualises.html.twig',array(
            'list'=>$list,
            'classBody'=>'skin-blue sidebar-mini',
            'iduser'=>$userConnected->getUser()->id,
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'h1'=>$h1,
            'watchProprio'=>$watchProprio,
            'breadcrumb'=>$breadcrumb,
            'today'=> $today->getTimestamp(),
            'in2months'=>$today->modify('+2 months')->getTimestamp(),
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),




        ));
    }

    /**
     * @Route("/private/hebergement-mutualises/renew/{idheber}/{iduser}", name="renew_hosting_admin")
     * @Route("/private/hebergement-mutualises/renew/{idheber}/{iduser}", name="renew_hosting")
     */
    public function hebergementMutualiseRenew(Request $request,$idheber,$iduser){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $h1="Renouvellement de l'hébergement mutualisé";
        $objHeber = $client->getHosting($email,$pwd,$idheber);

        if($routeName=='renew_hosting_admin') {
//            $idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $typeUser='admin';
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_all_hosting', 'label' => 'Liste des hébergements', 'param' => array());
            $breadcrumb[] = array('url' => '', 'label' =>'Renouveler', 'param' => array());

        }else{
//            $iduser=$userConnected->getUser()->id;
            //$idagency = $userConnected->getUser()->agency->id;
            $customerInfo = $client->getCustomer($email, $pwd, $iduser);
            $typeUser='user';
            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list_my_hosting', 'label' => 'Mes hébergements', 'param' => array());
            $breadcrumb[] = array('url' => '', 'label' =>'Renouveler', 'param' => array());
        }

        $dataPerDefault=array();
        $arrayHeberss=array();

        $productHosting = $objHeber->productHosting;
        $product = $productHosting->product;

        $priceHT =$productHosting->priceHt;

        $arrayHeberss[]=array('idProduct'=>$product->id,'name'=>$productHosting->name,'date'=>$objHeber->dateEnding,
            'priceHt'=>$priceHT,'options'=>array('vhost'=>$objHeber->vhost,'idProduitHeber'=>$productHosting->id,'idHosting'=>$objHeber->id)
            //'priceTTC'=>($priceHT*$objNdd->product->percentTax)+$priceHT
        );
        $dataPerDefault[]=12;
//        dump($arrayHeberss);
        $form= $this->createFormBuilder()->add('hostings', CollectionType::class, array(
            'data'=>$dataPerDefault,
            // each item in the array will be an "email" field
            'entry_type'   => ChoiceType::class,
            // these options are passed to each "email" type
            'entry_options'  => array(
                'choices'  => array_flip(array(
                    '1' => '1  mois',
                    '3' => '3 mois',
                    '6' => '6 mois',
                    '12' => '12 mois',
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

        //dump($arrayHeberss);



        $form->handleRequest($request);
        if ($form->isValid()) {

            $data = $form->getData();

            //$arrayHeberss : infos sur les instances
            $i=0;
            foreach($data['hostings'] as $host){
                // var_dump($ndd,$arrayNdd[$i]);
                //{"idProduitHeber":"1","period":12}
                $options=array('idProduitHeber'=>$arrayHeberss[$i]['options']['idProduitHeber'],'period'=>$host,'idHosting'=>$arrayHeberss[$i]['options']['idHosting']);
                $client->addToCart($email,$pwd,$arrayHeberss[$i]['idProduct'],$iduser,json_encode($options));
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
        return $this->render('HebergementMutualise/renewHebergement.html.twig',
            array(
                'form'=>$form->createView(),
                'arrayHeberss'=>$arrayHeberss,

                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js','js/calcPrice.js'),
                'name'=>$email,
                'iduser'=>$iduser,
                'breadcrumb'=>$breadcrumb,
                'type'=>$typeUser,
//                        'idagency'=>$idagency,
                'h1'=>$h1,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );

    }


    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement/add-mutu", name="add_heber_mutu_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement/add-mutu", name="add_heber_mutu_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/hebergement/add-mutu", name="add_heber_mutu_user",defaults={"iduser"=0,"idagency"=0})
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


        if($routeName=='add_heber_mutu_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_user','label'=>'Hébergement','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter','param'=>array());
            $type='user';

        }elseif($routeName=='add_heber_mutu_admin'){
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
        $instances = $client->listHebergementsMutuDisponibles($email,$pwd,$iduser);
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
        if($this->isGranted('ROLE_AGENCE')){
            foreach($instances as $ins){
                $choice[$ins->id]=$ins->productHosting->name.' ('.$ins->productHosting->instance->name.')'.($racineVhost?($idServeurWww==$ins->id?' (www.'.$ndd.' sur ce serveur)':''):'');
            }
        }else{
            foreach($instances as $ins){
                $choice[$ins->id]=$ins->productHosting->name.($racineVhost?($idServeurWww==$ins->id?' (www.'.$ndd.' sur ce serveur)':''):'');
            }
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
                    $client->addHebergementMutualise($email, $pwd, $iduser, $subdomain, $ndd, $instance);
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
     * @Route("/private/administrator/{idagency}/customer/{iduser}/ndd/{ndd}/hebergement/addn-mutu", name="add_heber_mutu_ndd_super_admin")
     * @Route("/private/customer/{iduser}/ndd/{ndd}/hebergement/addn-mutu", name="add_heber_mutu_ndd_admin",defaults={"idagency"=0})
     * @Route("/private/ndd/{ndd}/hebergement/addn-mutu", name="add_heber_mutu_ndd_user",defaults={"iduser"=0,"idagency"=0})
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
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        if($routeName=='add_heber_mutu_ndd_user'){
            $iduser=$userConnected->getUser()->id;
            $idagency=$userConnected->getUser()->agency->id;
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'ndds_user','label'=>'Liste des domaines','param'=>array());
            $breadcrumb[]=array('url'=>'ndd_user','label'=>$ndd,'param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'hebergement_user','label'=>'Hébergement','param'=>array('ndd'=>$ndd));
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur mutualisé','param'=>array());
            $type='user';

        }elseif($routeName=='add_heber_mutu_ndd_admin'){
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
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur mutualisé','param'=>array());


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
            $breadcrumb[]=array('url'=>'#','label'=>'Lier le domaine à un serveur mutualisé','param'=>array());
            $type='super_admin';
        }
        // On récupère le NDD
        $domain = $client->getNdd($email,$pwd,$ndd);

        // Liste des instances qui ont de la place ce cet utilisateur et de l'agence ( + celle de legrain si le mec est un gestionnaire)
        // echo $iduser;
        $instances = $client->listHebergementsMutuDisponibles($email,$pwd,$iduser);
        // dump($instances);

        $choice =array();
        if($this->isGranted('ROLE_AGENCE')){
            foreach($instances as $ins){
                $choice[$ins->id]=$ins->productHosting->name.' ('.$ins->productHosting->instance->name.')';
            }
        }else{
            foreach($instances as $ins){
                $choice[$ins->id]=$ins->productHosting->name;
            }
        }
        // création du frm 1 champ txt optionnel et un radio par instance (obligatoire).

        $form = $this->createFormBuilder()
            //  ->add('subdomain',TextType::class,array('label'=>'Sous domaine : ','required'=>false))
            ->add('instance',ChoiceType::class,array('label'=>'hébergements disponibles :','choices' =>array_flip($choice),'attr'=>array('class'=>'combobox')))
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
                    $client->addHebergementMutualise($email, $pwd, $iduser, $subdomain, $ndd, $instance);
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

                'h1'=>'Ajouter un hébergement mutualisé pour le domaine '.$ndd,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }

}