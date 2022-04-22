<?php

namespace PublicBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{


    /**
     * @Route("/", name="public-homepage")
     */
    public function indexAction(Request $request){
        //  return $this->redirectToRoute('homepage');
        //   $userConnected = $this->getUser();

        $csss = array("slick/slick.css","slick/slick-theme.css");
        $jss = array( "slick/slick.min.js","js/text-carousel.js");

        // Infos twitter
        $settings = array(
            'oauth_access_token' => $this->getParameter('twitter_oauth_access_token'),
            'oauth_access_token_secret' => $this->getParameter('twitter_oauth_access_token_secret'),
            'consumer_key' => $this->getParameter('twitter_consumer_key'),
            'consumer_secret' =>$this->getParameter('twitter_consumer_secret')
        );
        // #gwi
//        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $url = 'https://api.twitter.com/1.1/search/tweets.json';
        $getfield = '?q=#gwi+from:GwiHosting';
        $requestMethod = 'GET';

        $twitter = new \TwitterAPIExchange($settings);
        $response = $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();

        $response = json_decode($response);




        $tweets = $response->statuses;

        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $app_url  ='http://'.$request->getHost();
        $agence = $client->getAgencyPerUrlApp($app_url);



        return $this->render('Public/accueil.html.twig',array(
            'csss'=>$csss,
            'jss'=>$jss,
            'tweets'=>$tweets,
            'agence'=>$agence,
            //'title_page'=>'TEST'

        ));
    }

    /**
     * @Route("/ajaxcheckndd/{iduseless}", name="ajax-check-ndd")
     */
    public function ajaxCheckNddAction(Request $request,$iduseless){
        // $request = $this->get('request');
        //request your data
        $domain   = $request->get('domain');
        $tld   = $request->get('tld');


        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $item = $client->testDomainAvailable($domain, $tld);

//        return new Response(json_encode($item));
        return new JsonResponse($item);
    }

/**
     * @Route("/ajaxlistcheckndd/{iduseless}", name="ajax-list-check-ndd")
     */
    public function ajaxListCheckNddAction(Request $request,$iduseless){
        // $request = $this->get('request');
        //request your data
        $domain   = $request->get('domain');
        $listids   = $request->get('listids');


        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $item = $client->testListDomainsAvailables($domain, $listids);

//        return new Response(json_encode($item));
        return new JsonResponse($item);
    }

    /**
     * @Route("/acheter-un-hebergement-mutualise", name="public-buy-hebergement-mutualisable")
     */
    public function publicAcheterHebergementMutualiseAction(Request $request){
        $client = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE));
        $session = $request->getSession();
        $csss = array();
        $jss = array("js/acheterhebergementmutualise.js");

        $pwd =  $session->get('pwd');
        // récupéraztion des produits hébergements
        if($this->getUser()){

            $userConnected = $this->getUser();
            $email = $userConnected->getEmail();
            $pwd = $session->get('pwd');
            $list = $client->publicPricesProductsHebergementMutualisablePerUser($email,$pwd);
        }else {
            $list = $client->publicPricesProductsHebergementMutualisable('http://' . $request->getHost());
        }
        $listProduits = array();
        $items = array();
        foreach($list as $i){
            $listProduits[$i->name]=$i->id;
            $items[$i->id]=$i;
        }
        $preSelected = $list[0]->id;
//        dump($list);
        $duree = array('1 mois'=>1,'3 mois'=>3,'6 mois'=>6,'12 mois'=>12);

        $form = $this->createFormBuilder()
            ->add('product',ChoiceType::class,array('label'=>'Offre : ','choices'=>$listProduits,'data'=>$preSelected))
            ->add('duree',ChoiceType::class,array('label'=>'Durée de l\'hébergement : ','choices'=>$duree,'data'=>12))
            ->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();
            $productHeber = $data['product'];
            $dureeInMonths = $data['duree'];

            $itemSelected = $items[$productHeber];

            // Add to cart (si connecté ou si non connecté)
            // cf serveur normal.
            // Si connecté, on ajoute au vrai panier.
            if($this->getUser()){

                $options =  '{"idProduitHeber":"' . $itemSelected->id . '","period":' . $dureeInMonths . '}';
                $client->addToCart($this->getUser()->getEmail(),   $session->get('pwd'), $itemSelected->product->id, $this->getUser()->getUser()->id, $options);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre hébergement a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-hebergement-mutualisable");
            }else{
                $cart = $session->get('cart');
                $maxId = 1;
                // S'il y a desja des enregistrements dans le panier
                if($cart->cartLines!=null) {
                    // On récupère le plus grand ID
                    foreach ($cart->cartLines as $line) {
                        $line = (object)$line;
                        $maxId = $line->id;

                    }
                }
                // on récupere le produit qui est lié au produit héber

                $priceHt = $itemSelected->priceHt;
                $labelCart=$itemSelected->name.' ('.$dureeInMonths.' mois)';
                $percentTax=$itemSelected->product->percentTax;

                $cart->totalHt+= $priceHt;

                $cart->totalTax+=$priceHt * $percentTax;
                $cart->cartLines[] = array(
                    'id' => $maxId+1,
                    'productReference' => $itemSelected->product->reference,
                    'productName' => $labelCart ,
                    'quantity' => $dureeInMonths,
                    'unitPrice' => $priceHt,
                    'percentTax' => $percentTax,
                    'totalHt' => $priceHt * $dureeInMonths,
                    'idProduct' => $itemSelected->product->id,
                    'totalTax' => $priceHt * $dureeInMonths * $percentTax,
                    'options' => '{"idProduitHeber":"' . $itemSelected->id . '","period":' . $dureeInMonths . '}'

                );
                $session->set('cart',$cart);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre hébergement a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-hebergement-mutualisable");
            }
        }

        // dump($list);
        return $this->render('Public/Server/acheter-hebergement-mutualise.html.twig',array(
            'form'=>$form->createView(),
            'csss'=>$csss,
            'jss'=>$jss,
            'list'=>$list,
            'preSelected'=>$preSelected,


        ));


    }

    /**
     * @Route("/acheter-un-serveur-mutualisable", name="public-buy-server-mutualisable")
     */
    public function buyServerMutualisableAction(Request $request){
        $client = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE));
        $session = $request->getSession();
        $csss = array();
        $jss = array('js/acheterserveur.js');


        // On récupère les serveurs

        $pwd =  $session->get('pwd');
        // Si pas connecté

        // récupéraztion du prix du serbeur de base
        $prices=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'public_select_instance_mutualisable'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'public_select_instance_mutualisable');

        // Quasi identique au serveur classique. mais ne doit pouvoir être achetable que par les gestionnaires dont l'agence facture  ou legrain.
        $server = $prices[0];

        $objPuissance=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'puissanceInstance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'puissanceInstance');

        $arrayPrix = array();
        $arrayPuissance = array();
        $prixPuissance = array();
        $i=0;
        $initPrixPuissance = 0;
        foreach($objPuissance as $p){
            if($i==0){
                $i++;
                $initPrixPuissance=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }

            $arrayPuissance[$p->id]=$p->name;
            $prixPuissance[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }
        $arrayPrix['puissance']=$prixPuissance;


        $objPartHddInOption=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'optionPartHddInstance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'optionPartHddInstance');



        // Taille instance maxi 1To mais on s'arrete à 980 car la plus grosse instance part avec 20 Go de HDD
        $sizemaxi = 990;
        $objPartHddInOption=$objPartHddInOption[0];
        $nbGoPerPart=1;

        if(!is_array($objPartHddInOption->features))$objPartHddInOption->features=array($objPartHddInOption->features);
        $initPrixHdd = 0;
        $prixHdd=array();
        foreach($objPartHddInOption->features as $p){

            if($p->key=='part'){
                $nbGoPerPart = $p->value;
                break;
            }
        }
        $nbProposition = $sizemaxi/$nbGoPerPart;
        $parts=array();
        $arrayCorrespondanceIdsToNbGo = array();
        for($i=0;$i<=$nbProposition;$i++){
            if($i==0){

                $initPrixHdd=$i*($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT);
            }
            $prix = $i*($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT);
            $prixCalcul = $prix;
            //$prix = $prix==0?'Aucun supplement':$prix.'€HT/mois';
            $parts[$i]=(10+($i*$nbGoPerPart)).' Go';
            $prixHdd[$i]=$prix;
            $arrayCorrespondanceIdsToNbGo[$i]=(10+($i*$nbGoPerPart));

        }

        $arrayPrix['hdd']=$prixHdd;
        $session->set('arrayCorrespondanceIdsToNbGo',$arrayCorrespondanceIdsToNbGo);


        $objNbreVhosts=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'Nombre_sites_maxi_par_instance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'Nombre_sites_maxi_par_instance');

        $arrayNbreVhosts = array();
        $prixNbreVhosts = array();
        $i=0;
        $initPrixNbreVhosts = 0;

        foreach($objNbreVhosts as $p){
            if($i==0){
                $i++;
                $initPrixNbreVhosts=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }
            $prix = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
//            $prix=$prix==0?'Aucun supplement':'+'.$prix.'€HT/mois';
            $arrayNbreVhosts[$p->id]=$p->name;
            $prixNbreVhosts[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }
        $arrayPrix['nbreVhosts']=$prixNbreVhosts;


        $objSaveAuto=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'instance_sauvegarde_auto'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'instance_sauvegarde_auto');

        $arraySavesAuto = array();
        $prixSaveAuto = array();
        $i=0;
        $initPrixSaveAuto = 0;
        // $objSaveAuto = array_reverse($objSaveAuto);
        foreach($objSaveAuto as $p){
            if($i==0){
                $i++;
                $initPrixSaveAuto = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }
            $prix = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
//            $prix=$prix==0?'Aucun supplement':'+'.$prix.'€HT/mois et par Go.';
            $arraySavesAuto[$p->id]=$p->name;
            $prixSaveAuto[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }

        $arrayPrix['saveAuto']=$prixSaveAuto;



        $resa=array(
            1=>'1 mois',
            3=>'3 mois',
            6=>'6 mois',
            12=>'12 mois',
        );
        $session->set('prix_serveur',$arrayPrix);
        $arraylanguages = array('php5.6mysql'=>'Php 5.6 / Mysql 5.5','php7mysql5.6'=>'Php 7 / Mysql 5.6');


        $form = $this->createFormBuilder()

            ->add('language',ChoiceType::class,array('label'=>"Langage / Base de données : ",'choices'=>array_flip($arraylanguages)))
            //            ->add('type',ChoiceType::class,array('label'=>"Choix du serveur : ",'choices'=>array_flip($types),'expanded'=>true,'attr'=>array('class'=>'type')))
            ->add('type',HiddenType::class,array('data'=>$server->id))
            ->add('nbreVhosts',ChoiceType::class,array('label'=>"Nombre de sites à héberger : ",'choices'=>array_flip($arrayNbreVhosts)))
            ->add('partHdd',ChoiceType::class,array('label'=>"Espace disque : ",'choices'=>array_flip($parts)))
            ->add('saveAuto',ChoiceType::class,array('label'=>"Sauvegarde : ",'choices'=>array_flip($arraySavesAuto)))
            ->add('puissance',ChoiceType::class,array('label'=>"Puissance : ",'choices'=>array_flip($arrayPuissance)))



            // ->add('lapsTimeInMonths',ChoiceType::class,array('label'=>"Durée de réservation : ",'choices'=>array_flip($resa)))
            ->add('lapsTimeInMonths',ChoiceType::class,array('label'=>" ",'choices'=>array_flip($resa)))
            ->add('submit',SubmitType::class,array('label'=>'Ajouter ce serveur au panier','attr'=>array('class'=>'btn btn-success')))
            ->getForm();


        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();

            // On récupère le produit qui a été ajouté en param.
            $server = null;
            foreach($prices as $price){
                if($server!=null)break;
                if($data['type']==$price->id){
                    $server=$price;
                    break;
                }
            }

            $puissance = null;
            foreach($objPuissance as $pui){
                if($puissance!=null)break;
                if($data['puissance']==$pui->id){
                    $puissance=$pui;
                    break;
                }
            }

            $nbreVhosts = null;
            foreach($objNbreVhosts as $nbre){
                if($nbreVhosts!=null)break;
                if($data['nbreVhosts']==$nbre->id){
                    $nbreVhosts=$nbre;
                    break;
                }
            }

            $saveAuto = null;
            foreach($objSaveAuto as $sa){
                if($saveAuto!=null)break;
                if($data['saveAuto']==$sa->id){
                    $saveAuto=$sa;
                    break;
                }
            }

            $period = $data['lapsTimeInMonths'];
            $partHdd = $data['partHdd'];

            // Si connecté, on ajoute au vrai panier.
            if($this->getUser()){


                $options ='{"partHdd":"' . $partHdd . '","period":' . $period . ',"puissance":'.$puissance->id.',"nbreVhosts":'.$nbreVhosts->id.',"saveAuto":'.$saveAuto->id.',"language":"'.$data['language'].'"}';

                $client->addToCart($this->getUser()->getEmail(),   $session->get('pwd'), $server->id, $this->getUser()->getUser()->id, $options);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre serveur a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-server-mutualisable");

            }
            // Si pas connecté. On ajoute au panier par session. DAns les 2 cas, on redirige sur cette page
            else{

                $cart = $session->get('cart');
                $maxId = 1;
                // S'il y a desja des enregistrements dans le panier
                if($cart->cartLines!=null) {
                    // On récupère le plus grand ID
                    foreach ($cart->cartLines as $line) {
                        $line = (object)$line;
                        $maxId = $line->id;

                    }
                }
                // Calcul du prix au mois
                $priceHt = ($puissance->minPriceHT==null?$puissance->priceHT:$puissance->minPriceHT)+($server->minPriceHT==null?$server->priceHT:$server->minPriceHT)+(($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT)*$partHdd);
                $labelCart='Serveur : '.$server->name.' - '.$puissance->name;
                if($partHdd!=0){
                    $labelCart.=' - Nombre part espace disque en option : '.$partHdd;
                }
                $labelCart.=' - durée abonnement : '.$period.' mois';
                $percentTax=$server->percentTax;

                $cart->totalHt+= $priceHt;

                $cart->totalTax+=$priceHt * $percentTax;
                $cart->cartLines[] = array(
                    'id' => $maxId+1,
                    'productReference' => $server->reference,
                    'productName' => $labelCart ,
                    'quantity' => $period,
                    'unitPrice' => $priceHt,
                    'percentTax' => $percentTax,
                    'totalHt' => $priceHt * $period,
                    'idProduct' => $server->id,
                    'totalTax' => $priceHt * $period * $percentTax,
                    'options' => '{"partHdd":"' . $partHdd . '","period":' . $period . ',"puissance":'.$puissance->id.',"nbreVhosts":'.$nbreVhosts->id.',"saveAuto":'.$saveAuto->id.'}'

                );
                $session->set('cart',$cart);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre serveur a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-server-mutualisable");
            }






        }

        return $this->render('Public/Server/acheter-mutualisable.html.twig',array(
            'form'=>$form->createView(),
            'csss'=>$csss,
            'jss'=>$jss,
            'server'=>$server,
            'initPrixPuissance'=>$initPrixPuissance,
            'initPrixHdd'=>$initPrixHdd,
            'initPrixNbreVhosts'=>$initPrixNbreVhosts,
            'initPrixSaveAuto'=>$initPrixSaveAuto,
//            'typesServer'=>$typesServer,

        ));

    }
    /**
     * @Route("/acheter-un-serveur", name="public-buy-server")
     */
    public function buyServerAction(Request $request){
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $session = $request->getSession();
        $csss = array();
        $jss = array('js/acheterserveur.js');


        // On récupère les serveurs

        $pwd =  $session->get('pwd');
        // Si pas connecté
        $prices=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'public_select_instance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'public_select_instance');

        $server = $prices[0];

        $objPuissance=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'puissanceInstance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'puissanceInstance');

        $arrayPrix = array();
        $arrayPuissance = array();
        $prixPuissance = array();
        $i=0;
        $initPrixPuissance = 0;
        foreach($objPuissance as $p){
            if($i==0){
                $i++;
                $initPrixPuissance=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }

            $arrayPuissance[$p->id]=$p->name;
            $prixPuissance[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }
        $arrayPrix['puissance']=$prixPuissance;

        $objPartHddInOption=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'optionPartHddInstance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'optionPartHddInstance');

        // Taille instance maxi 1To mais on s'arrete à 980 car la plus grosse instance part avec 20 Go de HDD
        $sizemaxi = 990;
        $objPartHddInOption=$objPartHddInOption[0];
        $nbGoPerPart=1;

        if(!is_array($objPartHddInOption->features))$objPartHddInOption->features=array($objPartHddInOption->features);
        $initPrixHdd = 0;
        $prixHdd=array();
        foreach($objPartHddInOption->features as $p){

            if($p->key=='part'){
                $nbGoPerPart = $p->value;
                break;
            }
        }
        $nbProposition = $sizemaxi/$nbGoPerPart;
        $parts=array();
        $arrayCorrespondanceIdsToNbGo = array();
        for($i=0;$i<=$nbProposition;$i++){
            if($i==0){

                $initPrixHdd=$i*($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT);
            }
            $prix = $i*($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT);
            $prixCalcul = $prix;
            //$prix = $prix==0?'Aucun supplement':$prix.'€HT/mois';
            $parts[$i]=(10+($i*$nbGoPerPart)).' Go';
            $prixHdd[$i]=$prix;
            $arrayCorrespondanceIdsToNbGo[$i]=(10+($i*$nbGoPerPart));
        }
        $arrayPrix['hdd']=$prixHdd;
        $session->set('arrayCorrespondanceIdsToNbGo',$arrayCorrespondanceIdsToNbGo);

        $objNbreVhosts=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'Nombre_sites_maxi_par_instance'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'Nombre_sites_maxi_par_instance');

        $arrayNbreVhosts = array();
        $prixNbreVhosts = array();
        $i=0;
        $initPrixNbreVhosts = 0;

        foreach($objNbreVhosts as $p){
            if($i==0){
                $i++;
                $initPrixNbreVhosts=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }
            $prix = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            $arrayNbreVhosts[$p->id]=$p->name;
            $prixNbreVhosts[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }
        $arrayPrix['nbreVhosts']=$prixNbreVhosts;

        $objSaveAuto=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'instance_sauvegarde_auto'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'instance_sauvegarde_auto');

        $arraySavesAuto = array();
        $prixSaveAuto = array();
        $i=0;
        $initPrixSaveAuto = 0;
        // $objSaveAuto = array_reverse($objSaveAuto);
        foreach($objSaveAuto as $p){
            if($i==0){
                $i++;
                $initPrixSaveAuto = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
            }
            $prix = ($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
//            $prix=$prix==0?'Aucun supplement':'+'.$prix.'€HT/mois et par Go.';
            $arraySavesAuto[$p->id]=$p->name;
            $prixSaveAuto[$p->id]=($p->minPriceHT==null?$p->priceHT:$p->minPriceHT);
        }

        $arrayPrix['saveAuto']=$prixSaveAuto;

        $resa=array(
            1=>'Durée : 1 mois',
            3=>'Durée : 3 mois',
            6=>'Durée : 6 mois',
            12=>'Durée : 12 mois',
        );

        $arraylanguages = array(
            'php5.6mysql'=>'Php 5.6 / Mysql 5.5',
            'php7mysql5.6'=>'Php 7 / Mysql 5.6'/*,
            'rubymysql'=>'Ruby / mysql'*/
            );

        $session->set('prix_serveur',$arrayPrix);
        $form = $this->createFormBuilder()
//            ->add('type',ChoiceType::class,array('label'=>"Choix du serveur : ",'choices'=>array_flip($types),'expanded'=>true,'attr'=>array('class'=>'type')))
            ->add('language',ChoiceType::class,array('label'=>"Langage / Base de données : ",'choices'=>array_flip($arraylanguages)))

            ->add('type',HiddenType::class,array('data'=>$server->id))

            ->add('nbreVhosts',ChoiceType::class,array('label'=>"Nombre de sites à héberger : ",'choices'=>array_flip($arrayNbreVhosts)))
            ->add('partHdd',ChoiceType::class,array('label'=>"Espace disque : ",'choices'=>array_flip($parts)))
            ->add('saveAuto',ChoiceType::class,array('label'=>"Sauvegarde : ",'choices'=>array_flip($arraySavesAuto)))
            ->add('puissance',ChoiceType::class,array('label'=>"Puissance : ",'choices'=>array_flip($arrayPuissance)))

            // ->add('lapsTimeInMonths',ChoiceType::class,array('label'=>"Durée de réservation : ",'choices'=>array_flip($resa)))
            ->add('lapsTimeInMonths',ChoiceType::class,array('label'=>" ",'choices'=>array_flip($resa)))
            ->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();

            // On récupère le produit qui a été ajouté en param.
            $server = null;
            foreach($prices as $price){
                if($server!=null)break;
                if($data['type']==$price->id){
                    $server=$price;
                    break;
                }
            }

            $puissance = null;
            foreach($objPuissance as $pui){
                if($puissance!=null)break;
                if($data['puissance']==$pui->id){
                    $puissance=$pui;
                    break;
                }
            }

            $nbreVhosts = null;
            foreach($objNbreVhosts as $nbre){
                if($nbreVhosts!=null)break;
                if($data['nbreVhosts']==$nbre->id){
                    $nbreVhosts=$nbre;
                    break;
                }
            }

            $saveAuto = null;
            foreach($objSaveAuto as $sa){
                if($saveAuto!=null)break;
                if($data['saveAuto']==$sa->id){
                    $saveAuto=$sa;
                    break;
                }
            }
            $period = $data['lapsTimeInMonths'];
            $partHdd = $data['partHdd'];

            // Si connecté, on ajoute au vrai panier.
            if($this->getUser()){
                //language = $data['language']
                $options ='{"partHdd":"' . $partHdd . '","period":' . $period . ',"puissance":'.$puissance->id.',"nbreVhosts":'.$nbreVhosts->id.',"saveAuto":'.$saveAuto->id.',"language":"'.$data['language'].'"}';

                $client->addToCart($this->getUser()->getEmail(),   $session->get('pwd'), $server->id, $this->getUser()->getUser()->id, $options);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre serveur a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-server");
            }
            // Si pas connecté. On ajoute au panier par session. DAns les 2 cas, on redirige sur cette page
            else{
                $cart = $session->get('cart');
                $maxId = 1;
                // S'il y a desja des enregistrements dans le panier
                if($cart->cartLines!=null) {
                    // On récupère le plus grand ID
                    foreach ($cart->cartLines as $line) {
                        $line = (object)$line;
                        $maxId = $line->id;
                    }
                }
                // Calcul du prix au mois
                $priceHt = ($puissance->minPriceHT==null?$puissance->priceHT:$puissance->minPriceHT)+($server->minPriceHT==null?$server->priceHT:$server->minPriceHT)+(($objPartHddInOption->minPriceHT==null?$objPartHddInOption->priceHT:$objPartHddInOption->minPriceHT)*$partHdd);
                $labelCart='Serveur : '.$server->name.' - '.$puissance->name;
                if($partHdd!=0){
                    $labelCart.=' - Nombre part espace disque en option : '.$partHdd;
                }
                $labelCart.=' - durée abonnement : '.$period.' mois';
                $percentTax=$server->percentTax;

                $cart->totalHt+= $priceHt;
                $cart->totalTax+=$priceHt * $percentTax;
                $cart->cartLines[] = array(
                    'id' => $maxId+1,
                    'productReference' => $server->reference,
                    'productName' => $labelCart ,
                    'quantity' => $period,
                    'unitPrice' => $priceHt,
                    'percentTax' => $percentTax,
                    'totalHt' => $priceHt * $period,
                    'idProduct' => $server->id,
                    'totalTax' => $priceHt * $period * $percentTax,
                    'options' => '{"partHdd":"' . $partHdd . '","period":' . $period . ',"puissance":'.$puissance->id.',"nbreVhosts":'.$nbreVhosts->id.',"saveAuto":'.$saveAuto->id.',"language":"'.$data['language'].'"}'
                );
                $session->set('cart',$cart);
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Votre serveur a bien été ajouté au panier'
                );
                return $this->redirectToRoute("public-buy-server");
            }
        }

        return $this->render('Public/Server/acheter.html.twig',array(
            'form'=>$form->createView(),
            'csss'=>$csss,
            'jss'=>$jss,
            'server'=>$server,
            'initPrixPuissance'=>$initPrixPuissance,
            'initPrixHdd'=>$initPrixHdd,
            'initPrixNbreVhosts'=>$initPrixNbreVhosts,
            'initPrixSaveAuto'=>$initPrixSaveAuto,
//            'typesServer'=>$typesServer,
        ));

    }
    /**
     * @Route("/acheter-un-nom-de-domaine", name="public-buy-ndd")
     */
    public function buyNddAction(Request $request){

        // Hostname ( sous domaine + ndd)
        $session = $request->getSession();
        $nddPrincipalDispo=false;
        $arrayProduits=array();
        $priceProducts=array();

        $domain='';

        $resaNdd =  $session->get('resaNdd');
        $idProductpassedInParameter =  $session->get('idProductpassedInParameter');

        $form = $this->createFormBuilder();

        $form = $form->add('checkndd',TextType::class,array('label'=>'Vérifier la disponibilité de votre domaine','data'=>$resaNdd))
            ->add('submitStep1',SubmitType::class,array('label'=>'Vérifier','attr'=>array('class'=>'btn btn-default')));

        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($resaNdd!=null) {
            $pwd =  $session->get('pwd');
            // Si pas connecté
            $prices=$this->getUser()?$client->publicPricesProductsPerCategoryAndUser($this->getUser()->getEmail(),$pwd,'createndd'):$client->publicPricesProductsPerCategory('http://'.$request->getHost(),'createndd');

//            dump($prices);
            // récupération du tld passé en parametre

            // On récupère l'exension
            $domainExploded = explode('.',$resaNdd);
            $domain = $domainExploded[0];

            $tld='';

            for ($i = 1; $i < count($domainExploded); $i++) {
                $tld .= '.' . $domainExploded[$i];
            }
            $item=false;
            if($tld!='') {
                try {
                    $item = $client->testDomainAvailable($domain, $tld);
                    $item=json_decode($item);
                }catch(\SoapFault $e){
                    $item=false;
                }
            }
            //dump($prices->item);
            foreach($prices as $p){

                $features = $p->features;

                if(!is_array($features))$features=array($features);
                foreach($features as $f) {
                    if($f->key == 'tld') {
                        $tmpTld = $f->value;
                        break;
                    }
                }
                $arrayNbYears = array('1 an'=>1,'2 ans'=>2,'3 ans'=>3);

                $nddPrincipalDispo = ($item && $item->availlable) ?true:false;
                if($item && $domain.$tmpTld == $resaNdd ){
                        $session->set('idProductpassedInParameter',$p->id);
                    $idProductpassedInParameter=$p->id;
                    $arrayProduits[]=$p->id;
                    $priceProducts[$p->id]=array('mini'=>$p->minPriceHT*12,'maxi'=>$p->priceHT*12);
                    $form = $form->add('p_' . $p->id, CheckboxType::class, array('attr'=>array('class'=>($item->availlable?'':'hide')),'disabled' => ($item->availlable?false:true), 'label' => $domain . $tmpTld, 'required' => false));
                    $form = $form->add('ndd_' . $p->id, HiddenType::class, array('data' => $domain . $tmpTld));
                    $form = $form->add('nb_years_' . $p->id, ChoiceType::class, array('disabled' => ($item->availlable?false:true),'data' => 1,'choices'=>$arrayNbYears,'label'=>' '));
                }else {
                    $arrayProduits[]=$p->id;
                    $priceProducts[$p->id]=array('mini'=>$p->minPriceHT*12,'maxi'=>$p->priceHT*12);
                    $form = $form->add('p_' . $p->id, CheckboxType::class, array( 'label' => $domain . $tmpTld, 'required' => false));
                    $form = $form->add('ndd_' . $p->id, HiddenType::class, array('data' => $domain . $tmpTld));
                    $form = $form->add('nb_years_' . $p->id, ChoiceType::class, array('data' => 1,'choices'=>$arrayNbYears,'label'=>' '));
                }
            }

        }
        $form = $form->add("submitStep2",SubmitType::class,array('label'=>'Ajouter au panier les noms de domaines sélectionnés','attr'=>array('class'=>'btn btn-success'.($resaNdd==null?' hidden':'')  ),'disabled'=>($resaNdd==null)?true:false));

        $form = $form->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();

            if ($form->get('submitStep1')->isClicked()) {
                $error = false;
                $reason='';

                // On checke tout
                $nddWithoutExtention = explode('.',$data['checkndd']);
                $nddWithoutExtention = $nddWithoutExtention[0];

                if(!preg_match('/^[a-z0-9\.-]+$/',$data['checkndd'])){$error = true;$reason='Le nom de domaine contient des caractères non conformes';}
                if(strlen($nddWithoutExtention)>63){$error = true;$reason='Le nom de domaine ne doit pas faire plus de 63 caractères';}
                if(strlen($nddWithoutExtention)<3){$error = true;$reason='Le nom de domaine ne doit pas faire moins de 3 caractères';}
                if(!$error) {
                    $session->set('resaNdd', $data['checkndd']);
                    return $this->redirectToRoute("public-buy-ndd");
                }else{
                    $form->addError(new FormError($reason));
                }
            }
            if ($form->get('submitStep2')->isClicked()) {
                $totalHt = 0;
                $totalTax =0;
                foreach($data as $key =>$value){
                    // Uniquement les checkbox à true
                    if(substr($key,0,2)=='p_'&& $value){
                        // p_403p_825p_1930p_3171
                        $idProduct = substr($key,2);
                        $ndd = $data['ndd_'.$idProduct];
                        $periodInYears = $data['nb_years_'.$idProduct];

                        foreach($prices as $keyPrice => $price){
                            if($price->id==$idProduct){
                                $period =  $price->minPeriod;
                                $priceHt = ($price->minPriceHT?$price->minPriceHT:$price->priceHT);
//                                $totalHt+=$priceHt;
                                $percentTax=$price->percentTax;
//                                $totalTax+=$percentTax*$priceHt;
                                $labelCart = $price->name;
                                $reference = $price->reference;
                                break;
                            }
                        }

                        // Si connecté, on ajoute au vrai panier.
                        if($this->getUser()){
                            $options ='{"ndd":"' . $ndd . '","period":' . $periodInYears*12 . ',"packmail":false}';
                            $client->addToCart($this->getUser()->getEmail(),   $session->get('pwd'), $idProduct, $this->getUser()->getUser()->id, $options);
                            /*$this->get('session')->getFlashBag()->add(
                                'notice',
                                'Vos produits ont bien été ajoutés au panier'
                            );*/
                        }
                        // Si pas connecté. On ajoute au panier par session. DAns les 2 cas, on redirige sur cette page
                        else{
                            $cart = $session->get('cart');
                            $addToCart = true;
                            $maxId = 1;
                            if($cart->cartLines!=null) {


                                foreach ($cart->cartLines as $line) {
                                    $line = (object)$line;
                                    $maxId=$line->id;
                                    // Si le ndd est present dans le panier, on passe addToCart à false
                                    $options = json_decode($line->options);
                                    if ($line->productReference == $reference && $line->idProduct == $idProduct && $options->ndd == $ndd)
                                        $addToCart = false;
                                }
                            }

                            if($addToCart) {
                                $cart->totalHt+= $priceHt;

                                $cart->totalTax+=$priceHt * $percentTax;
                                $cart->cartLines[] = array(

                                    'id' => $maxId+1,
                                    'productReference' => $reference,
                                    'productName' => $labelCart . ' pour le domaine ' . $ndd,
                                    'quantity' => $period,
                                    'unitPrice' => $priceHt,
                                    'percentTax' => $percentTax,
                                    'totalHt' => $priceHt * $period,
                                    'idProduct' => $idProduct,
                                    'totalTax' => $priceHt * $period * $percentTax,
                                    'options' => '{"ndd":"' . $ndd . '","period":' . $period . ',"packmail":false}'
                                );
                            }
                            $session->set('cart',$cart);
                        }
                    }
                }
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Vos produits ont bien été ajoutés au panier'
                );
                $session->set('resaNdd',null);
                $session->set('idProductpassedInParameter',null);
                return $this->redirectToRoute("public-buy-ndd");
            }
        }


        $csss = array(/*'adminLTE/plugins/iCheck/square/blue.css',*/);
        $jss = array(/*'adminLTE/plugins/iCheck/icheck.js',*/'js/acheterndd.js');

        return $this->render('Public/Ndd/acheter.html.twig',array(
            'form'=>$form->createView(),
            'csss'=>$csss,
            'jss'=>$jss,
            'resaNdd'=>$resaNdd,
            'idProductpassedInParameter'=>$idProductpassedInParameter,
            'arrayProduits'=>$arrayProduits,
            'listIdProductsTab1'=>implode(';',$arrayProduits),
            'priceProducts'=>$priceProducts,
            'domain'=>$domain,
            'nddPrincipalDispo'=>$nddPrincipalDispo,
            'ajaxTab1'=>$this->generateUrl('ajax-list-check-ndd',array("iduseless"=>'tab1')),

        ));


    }

    /**
     * @Route("/mail-sent", name="register-agency-ok")
     */
    public function registerAgencyOkAction(Request $request){
        return $this->render('Public/Register/after-email.html.twig',array(

            'csss'=>array(),
            'jss'=>array(),
            'classBody' => 'login-page',
        ));
    }
    /**
     * @Route("/register-agency", name="register-agency")
     */
    public function registerAgencyAction(Request $request){
        //  return $this->redirectToRoute('homepage');
        //   $userConnected = $this->getUser();


        $csss = array('adminLTE/plugins/iCheck/square/blue.css');
        $jss = array('adminLTE/plugins/iCheck/icheck.js', 'adminLTE/js/loadplugins.js');

        $form = $this->createFormBuilder()
            ->add('email',EmailType::class,array('label'=>'Votre e-mail : '))
            ->add('password',RepeatedType::class,array( 'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Mot de passe (validation) :' )))
            ->add('nameAgency',TextType::class,array('label'=>'Nom de l\'agence :'))
           // ->add('company_name',TextType::class,array('label'=>'Nom de votre société* : '))
           // ->add('phone',TextType::class,array('label'=>'Votre numéro de téléphone* :'))
           // ->add('more',TextareaType::class,array('label'=>'Informations complementaires :','required'=>false))
            ->add('blabla',TextType::class,array('label'=>'Ne pas renseigner : ','required'=>false))
            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-primary btn-lg btn-block')))
            ->getForm();


        $form->handleRequest($request);

        if($form->isValid()) {
            $data = $form->getData();

            if ($data['blabla']) {
                $form->addError(new FormError('Vous êtes un robot'));
            }
            // Send email à : contact@gwi-hosting.fr
            if ($form->isValid()) {
                $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

                $client->registerAgencyMinimalistInfos($data['email'],$data['password'],$data['nameAgency']);
                return $this->redirectToRoute('homepage');
                /*
                $message = \Swift_Message::newInstance()
                    ->setSubject('Demande de contact (création compte agence)')
                    ->setFrom('app@gwi-hosting.fr')
                    ->setTo('contact@gwi-hosting.fr')

                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'Public/Register/Email/email-creation-agence.html.twig',
                            array('data' => $data)
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);
                return $this->redirectToRoute('register-agency-ok');
                */
            }
        }
        return $this->render('Public/Register/Form/agency.html.twig',array(
            'form'=>$form->createView(),
            'csss'=>$csss,
            'jss'=>$jss,
            'classBody' => 'login-page',
        ));
    }

}
