<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 11/08/15
 * Time: 10:13
 */

namespace AppBundle\Controller;

use AppBundle\Traits\Crypt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Traits\Referer;

class CartController extends Controller
{
    use Referer,Crypt;
    
    /**
     * @Route("private/produits-en-attente-de-validation", name="list_product_next_payement")
     */
    public function listProductsNextPayement(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');


        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'En attente de validation','param'=>array());

        $paiementsEnAttente = $client-> listProductsNextPayement($email,$pwd);


        $form = $this->createFormBuilder();
        $listFinal = array();
        foreach($paiementsEnAttente as $p){
            $listFinal[$p->id]=$p;
            $form = $form->add('line_'.$p->id,CheckboxType::class,array('label'=>' ','value'=>$p->id,'required'=>false));
            //$form = $form->add('id_line_'.$p->id,'hidden',array('data'=>$p->id));

        }

        $form = $form->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-add-to-cart')));
        $form = $form->getForm();

        $form->handleRequest($request);
        if($form->isValid()){
            // Ajout au panier (avec l'id utilisateur dans le
            $data = $form->getData();

            foreach($data as $key => $value ){
                if($value) {
                    $tmp = explode('_',$key);
                    $idLine = $tmp[1];
                    $line = $listFinal[$idLine];

                    $oldFeatures = json_decode($line->features);
                    $oldFeatures->idUser = $line->userFinal->id;
                    $oldFeatures->lineInCart = $line->id;
                    $features = json_encode($oldFeatures);

                    $client->addToCart($email, $pwd, $line->product->id, $userConnected->getUser()->id, $features);
                }
            }

            $this->get('session')->getFlashBag()->add(
                'notice',
                'le(s) produit(s) a/ont été ajouté(s) au panier'
            );
            return $this->redirectToRoute('homepage');

        }


        return $this->render('Cart/paiements-en-attente.html.twig',
            array(
                'paiementsEnAttente'=>$paiementsEnAttente,
                'form'=>$form->createView(),
                'iduser'=>$userConnected->getUser()->id,
                'emailAddress'=>$email,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
                'name'=>$email,
                'h1'=>"En attente de validation",
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'breadcrumb'=>$breadcrumb,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

    }
    /**
     * @Route("removeItemCart/{idline}/{redirect}", name="public_remove_item_cart")
     */
    public function public_remove_item_cart(Request $request,$idline,$redirect){
        $session = $request->getSession();

        $publicCart = $session->get('cart');

//        dump($publicCart);

        foreach($publicCart->cartLines as $key => $line){
            if($line['id'] == $idline){
                $publicCart->totalHt =$publicCart->totalHt - $line['totalHt'];
                $publicCart->totalTax =$publicCart->totalTax - $line['totalTax'];
//                dump($line);
                unset($publicCart->cartLines[$key]);
                break;
            }
        }
        // Retour vers la page de détail du panier
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Le produit a bien été retiré de votre panier !'
        );


        return $this->redirectToRoute($redirect);
    }

    /**
     * @param $route
     * @return \Symfony\Component\HttpFoundation\Response
     * Affiche le panier "en session" dans l'entete de la partie publique (appel depuis le template Public/header.html.twig)
     */
    public function getCartWithoutConnectionAction(Request $request,$route)
    {
        $session = $request->getSession();

        $cart =  $session->get('cart');

        if($cart==null){
            $cart =(object)array(
                'totalHt'=>0,
                'totalTax'=>0,
                'cartLines'=>null

            );
            $session->set('cart',$cart);
        }


        return $this->render('Cart/Menu/cartMenu.html.twig',
            array(

                'cart'=>$cart,
                'route'=>$route
            ));
    }

    private function syncCartPublicToPrivate($session,$client,$email,$pwd,$idusr){



        //  On regarde si le panier virtuel existe. Si c'est le cas, on ajoute les produits au cartReel, puis on l'appelle.

        $publicCart = $session->get('cart');

        if ($publicCart != null) {

            if ($publicCart->cartLines != null) {

                $newLines = array();
                foreach ($publicCart->cartLines as $l) {

                    $newLines[] = array('idProduct' => $l['idProduct'], 'iduser' => $idusr, 'options' => $l['options']);
                }
                //  dump($email,$pwd,json_encode($newLines));
               $client->addListProductsToCart($email, $pwd, json_encode($newLines));
               $session->set('cart', null);
            }


        }
    }
    /**
     * @param $iduser
     * @return \Symfony\Component\HttpFoundation\Response
     * Affiche le panier dans l'entete ( appel depuis le template header.html.twig)
     */
    public function getCartAction(Request $request,$iduser)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

        $cart=null;
        $listSorted=null;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $idusr = $userConnected->getUser()->id;
        if($client->cartExist($email,$pwd,$idusr)) {

            //  On regarde si le panier virtuel existe. Si c'est le cas, on ajoute les produits au cartReel, puis on l'appelle.
            $this->syncCartPublicToPrivate($session,$client,$email,$pwd,$idusr);

            /*
                        $publicCart =  $session->get('cart');

                        if($publicCart!=null){

                            if($publicCart->cartLines!=null){

                                $newLines = array();
                                foreach($publicCart->cartLines as $l){

                                    $newLines[]=array('idProduct'=>$l['idProduct'],'iduser'=>$idusr,'options'=>$l['options']);
                                }
                                $client->addListProductsToCart($email,$pwd,json_encode($newLines));
                                $session->set('cart',null);
                            }

                        }
            */
            $cart = $client->getCart($email, $pwd, $idusr);


            if($cart->cartLines !==null)
                if (!is_array($cart->cartLines)) $cart->cartLines = array($cart->cartLines);


        }

        return $this->render('Cart/Menu/cartMenu.html.twig',
            array(

                'cart'=>$cart,
                'route'=>null
            ));
    }



    /**
     * @Route("/private/removeItemCart/{idline}", name="remove_item_cart")
     */
    public function remove_item_cart(Request $request,$idline){

      //  dump($params);
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $client->removeToCart($email,$pwd,$idline);
        // Retour vers la page de détail du panier
        $this->get('session')->getFlashBag()->add(
            'notice',
            'Le produit a bien été retiré de votre panier !'
        );

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

     //   return $this->redirectToRoute('pay_cart');
    }

    /**
     * @Route("/private/cart/pay/{iduserwhopay}", name="submit_cart")
     */
    public function submitCartAction(Request $request,$iduserwhopay)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'mon panier','param'=>array());
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $cart = $client->payCart($email,$pwd,$iduserwhopay,true);
        return $this->redirectToRoute('after-payement');
    }

    /**
     * @Route("/private/cart/next-step-server", name="next_step_cart_server")
     */
    public function cartNextStepServerAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $pathNextStep= 'next_step_cart_hebergement';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $cart = $client->getCart($email,$pwd,$iduser);

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'pay_cart','label'=>'Détail','param'=>array());
        $breadcrumb[]=array('url'=>'next_step_cart','label'=>'noms de domaine','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'serveurs','param'=>array());
        // On regarde si il y a au moins une une création de serveur dans le panier
        $lines = json_decode($client->getCreationServerInCart($email,$pwd,$cart->id));
        // Le panier ne possede pas de nouveaux serveurs, ou si le membre est un utilisateur ne possede pas le role Agence on redirige
        if(count($lines)===0 || !$this->isGranted('ROLE_AGENCE')){
            return $this->redirectToRoute($pathNextStep);
        }else{
            // echo 'liste des utilisateurs. On doit modifier le proprio du serveur.';
            /*
             * +"idLine": 167
     +"iduser": 1
     +"name":
             */
            $listUsers = $client->listUsers($email,$pwd);
            $choiceUsersList =array();
            foreach($listUsers as $u){
                $choiceUsersList[$u->id]=$u->email.' ('.$u->name.' '.$u->firstname.')';

            }
            $form = $this->createFormBuilder();
            $i=0;
            foreach($lines as $line){
                //  dump($line);
                if(!$line->alreadyOk) {
                    $i++;
                    $form = $form->add('user_id_' . $line->idLine, ChoiceType::class, array('label' => $line->name, 'choices' => array_flip($choiceUsersList), 'data' => $line->iduser, 'attr' => array('class' => 'combobox')));
                }
            }
            if($i==0)  return $this->redirectToRoute($pathNextStep);
            $form = $form->add('submit',SubmitType::class,array('label'=>'poursuivre','attr'=>array('class'=>'btn btn-success')));
            $form = $form->getForm();

            $form->handleRequest($request);
            if($form->isValid()) {
                $data = $form->getData();


                $key =  array_keys($data)[0];
                $idNewUser = $data[$key];
                $idLine = substr($key,8);
                $client->changeUserToLineInCart($email,$pwd,$cart->id,$idLine,$idNewUser);
                return $this->redirectToRoute($pathNextStep);

            }

        }
        return $this->render('Cart/stepCreateServer.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',

                'name'=>$email,
                'h1'=>"Affecter un utilisateur au serveur",
                'iduser'=>$iduser,


                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));

    }


    /**
     * @Route("/private/cart/next-step-hebergement", name="next_step_cart_hebergement")
     */
    public function cartNextStepHebergementAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $pathNextStep= 'final_step_cart';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>  SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $cart = $client->getCart($email,$pwd,$iduser);

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'pay_cart','label'=>'Détail','param'=>array());
        $breadcrumb[]=array('url'=>'next_step_cart','label'=>'noms de domaine','param'=>array());
        $breadcrumb[]=array('url'=>'next_step_cart_server','label'=>'serveurs','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Hébergements mutualisé','param'=>array());

        // On regarde si il y a au moins une une création d'hebergement dans le panier
        $lines = json_decode($client->getCreationHebergementInCart($email,$pwd,$cart->id));

        // Le panier ne possede pas de nouveaux serveurs, ou si le membre est un utilisateur ne possede pas le role Agence on redirige
        if(count($lines)===0 || !$this->isGranted('ROLE_AGENCE')){
            return $this->redirectToRoute($pathNextStep);
        }else{
            // echo 'liste des utilisateurs. On doit modifier le proprio du serveur.';
            $listUsers = $client->listUsers($email,$pwd);
            $choiceUsersList =array();
            foreach($listUsers as $u){
                $choiceUsersList[$u->id]=$u->email.' ('.$u->name.' '.$u->firstname.')';

            }
            $form = $this->createFormBuilder();
            $i=0;
            foreach($lines as $line){
                //  dump($line);
                if(!$line->alreadyOk) {
                    $i++;
                    $form = $form->add('user_id_' . $line->idLine, ChoiceType::class, array('label' => $line->name, 'choices' => array_flip($choiceUsersList), 'data' => $line->iduser, 'attr' => array('class' => 'combobox')));
                }
            }
            if($i==0)  return $this->redirectToRoute($pathNextStep);
            $form = $form->add('submit',SubmitType::class,array('label'=>'poursuivre','attr'=>array('class'=>'btn btn-success')));
            $form = $form->getForm();

            $form->handleRequest($request);
            if($form->isValid()) {
                $data = $form->getData();


                $key =  array_keys($data)[0];
                $idNewUser = $data[$key];
                $idLine = substr($key,8);
                $client->changeUserToLineInCart($email,$pwd,$cart->id,$idLine,$idNewUser);
                return $this->redirectToRoute($pathNextStep);

            }

        }

        return $this->render('Cart/stepCreateHebergement.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'name'=>$email,
                'h1'=>"Affecter un utilisateur à l'hébergement",
                'iduser'=>$iduser,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));


    }

    /**
     * @Route("/private/cart/next-step-ndd", name="next_step_cart")
     */
    public function cartNextStepNddAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $pathNextStep= 'next_step_cart_server';
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $cart = $client->getCart($email,$pwd,$iduser);

        $contactsInError = array();


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'pay_cart','label'=>'Détail','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Noms de domaines','param'=>array());

        // On regarde si il y a au moins une une création de ndd dans le panier
        $lines = json_decode($client->getCreationNddInCart($email,$pwd,$cart->id));
        // Le panier ne possede pas de nouveaux ndd, on redirige
        if(count($lines)===0){
            return $this->redirectToRoute($pathNextStep);
        }else{
            // On traite
            $listContacts = $client->listAllContacts($email,$pwd);
            $arrayContacts = array();

            foreach($listContacts as $c){
                /*
                +"id": 10
              +"email": "christian.miroux@wanadoo.fr"
              +"name": "Miroux"
              +"codeFacturation": ""
              +"firstname": "Christian"
              +"fakeEmail": "christian.miroux@wanadoo.fr"
              +"code": "CM12372-GWI"
              +"isDefault": false
                 */
                $arrayContacts[$c->code]=$c->code.' ('.$c->name.' '.$c->firstname.($c->codeFacturation?' '.$c->codeFacturation:'').')';
            }

            $form = $this->createFormBuilder();
            $nddParLigne = array();
            $i=0;
            foreach($lines as $line){

                if(!$line->alreadyOk) {
                    $i++;
                    $nddParLigne[$line->idLine] = $line->ndd;
                    /*
                        dump($line)
                        +"idLine": 113
                        +"contact": null
                        +"ndd": "sgsgsg.fr"
                        +"alreadyOk": true
                    */
                    $form = $form->add($line->idLine, ChoiceType::class, array('label' => 'Contact pour le domaine ' . $line->ndd, 'choices' => array_flip($arrayContacts), 'placeholder' => 'Choisir un contact', 'required' => true, 'data' => $line->contact, 'attr' => array('class' => 'combobox ajaxSelect', 'data-id' => $line->idLine)));
                }
            }
            if($i==0) return $this->redirectToRoute($pathNextStep);
            $form = $form->add('submit',SubmitType::class,array('label'=>'Poursuivre','attr'=>array('class'=>'btn btn-success')))->getForm();




            $form->handleRequest($request);
            if ($request->getMethod() == 'POST') {
                if ($request->request->has('form')) {
                    // handle the first form


                    if ($form->isValid()) {
                        $data = $form->getData();
                        $totalError = 0;
                        foreach($data as $key => $value) {
                            // Si la valeur est vide : erreur
                            if ($value == null) $form->addError(new FormError('Vous devez choisir un contact le domaine : ' . $nddParLigne[$key]));
                            // Si elle est renseignée, on regarde si le contact est compatible avec le tld du ndd. ( on retourne la liste des erreurs si ce n'est pas le cas.
                            else {
                                $canAssociateDomain = json_decode($client->canAssociateDomain($value, $nddParLigne[$key]));
                                //dump(json_decode($canAssociateDomain));
                                if (property_exists($canAssociateDomain, 'error') && $canAssociateDomain->error) {
                                    $form->addError(new FormError('Le contact : ' . $value . ' doit être complété pour pouvoir être associé au nom de domaine ' . $nddParLigne[$key]));
                                    $contactsInError[]=$key;
                                    $totalError++;
                                }

                                // Liste des erreurs
                            }
                        }
                        if($totalError===0){
                            //dump($data);
                            $client->addContactsToCartLines($email,$pwd,$cart->id,json_encode($data));
                            // redirect
                            return $this->redirectToRoute($pathNextStep);
                        }

                    }
                }
            }
//            dump($arrayContacts);
            /*
             * <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="adminLTE/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="adminLTE/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="adminLTE/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

             */

            return $this->render('Cart/stepCreateNdd.html.twig',
                array(
                    'form'=>$form->createView(),
                    'name'=>$email,
                    'contactsInError'=>$contactsInError,
                    'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/fancybox/source/jquery.fancybox.css?v=2.1.5','adminLTE/chosen/chosen.min.css'),
                    'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/fancybox/lib/jquery.mousewheel-3.0.6.pack.js','adminLTE/fancybox/source/jquery.fancybox.js?v=2.1.5','adminLTE/js/loadFancybox.js','adminLTE/js/loadplugins.js'),
                    'h1'=>'Validation du panier',
                    'classBody'=>'skin-blue sidebar-mini',
                    'iduser'=> $iduser,
                    'breadcrumb'=>$breadcrumb,
                    'nddParLigne'=>$nddParLigne,
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),



                ));

        }

    }
    /**
     * @Route("/private/cart/final", name="final_step_cart")
     */
    public function cartLastAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'pay_cart','label'=>'Détail','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'validation du panier','param'=>array());
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $cart = $client->getCart($email,$pwd,$iduser);



        if($cart->cartLines !==null) if (!is_array($cart->cartLines)) $cart->cartLines = array($cart->cartLines);

        if($cart->potentialPayer !==null)   if (!is_array($cart->potentialPayer)) $cart->potentialPayer = array($cart->potentialPayer);
        if($cart->cgus !==null)  if (!is_array($cart->cgus)) $cart->cgus = array($cart->cgus);

        $arrayNewTarifs=array();
        foreach ($cart->potentialPayer as $pp) {
            $arrayNewTarifs[$pp->id]=json_decode($client->getTotalCartPerUserWhoPaid($email,$pwd,$cart->id,$pp->id));
        }
        return $this->render('Cart/finalCart.html.twig',
            array(
                'name'=>$email,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'h1'=>'Validation du panier',
                'classBody'=>'skin-blue sidebar-mini',
                'iduser'=> $iduser,
                'breadcrumb'=>$breadcrumb,
                'cart'=>$cart,
                'arrayNewTarifs'=>$arrayNewTarifs,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));
    }

    /**
     * @Route("/private/cart/thx",name="after-payement")
     */
    public function afterPayement(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $h1="Merci de votre achat";
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'merci pour votre achat','param'=>array());
        return $this->render('Cart/afterpayement.html.twig',
            array(
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'iduser' => $iduser,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }
    /**
     * @Route("/private/cart/credit_and_pay/{iduserwhopay}", name="credit_and_pay")
     */
    public function creditAndPayAction(Request $request,$iduserwhopay){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'pay_cart','label'=>'Mon panier','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Créditer et payer','param'=>array());
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        // Le panier
        $cart = $client->getCart($email,$pwd,$iduser);



        // $payer
        $payer=null;
        $potentielsPayers=$cart->potentialPayer;
        if(!is_array($potentielsPayers)){
            $potentielsPayers=array($potentielsPayers);
        }
        foreach($potentielsPayers as $p){
            if($p->id == $iduserwhopay) {
                $payer = $p;
                break;
            }
        }

        $newTotal = json_decode($client->getTotalCartPerUserWhoPaid($email,$pwd,$cart->id,$iduserwhopay));

        $minTotal = $newTotal->totalTTC - $payer->solde;
        $minTotal=$minTotal<10?10:$minTotal;

        $h1 = 'Créditer et payer';


        $infosPaiements = json_decode($client->getParamsPaiement($email,$pwd));

        // Form par cheque
        $minTotalCheque = $newTotal->totalTTC - $payer->solde;
        $minTotalCheque=$minTotalCheque < 1?10:$minTotalCheque;
        $formCheque = $this->createFormBuilder()
            ->add('amountCheque',MoneyType::class,array('label'=>'Montant à ajouter : ',    'invalid_message' => 'La valeur est incorrecte',"data"=>$minTotalCheque))
            ->add('creditCheque',SubmitType::class,array('label'=>'Payer','attr'=>array('class'=>'btn btn-success')))
            ->getForm();
        // Form cb
        $formCheque->handleRequest($request);


        if($formCheque->isValid()){
            $data = $formCheque->getData();
            $amount = $data['amountCheque'];
            try{
                $client->creditAnotherAccount($email,$pwd,'other',$iduserwhopay,$amount,'Rechargement compte pré payé par cheque, virement ou espèce');
                // payer
                $cart = $client->payCart($email,$pwd,$iduserwhopay,true);
                // Redirection
                return $this->redirectToRoute('after-payement');
            }catch (\SoapFault $e){
                $formCheque->addError(new FormError($e->getMessage()));
            }
        }

        $vars = array();
        $vars['email']=$email;
        $vars['pwd']=$pwd;
        $vars['idUser']=$iduserwhopay;
        $vars['payCart']=true;
        $developpement = $this->getParameter('developpement');
        $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST').($developpement?'/app_dev.php':'').'/private/after-payment2';
        $vars['cancelUrl']= 'http://'.$request->server->get('HTTP_HOST').$this->generateUrl('credit_and_pay',array('iduserwhopay'=>$iduserwhopay));

        $vars['amount']=$minTotal;
        $urlPaiementExterne= $this->getParameter('url_paiement_externalise').$this->crypter(json_encode($vars));
        $isPossibleToPayByCard= $client->isPossibleToPayByCard($email,$pwd,$iduser);

        // Rendu
        return $this->render('Cart/creditandpay.html.twig',
            array(
                'isPossibleToPayByCard'=>$isPossibleToPayByCard,
                'urlPaiementExterne'=>$urlPaiementExterne,
                'infosPaiements'=>$infosPaiements,
                'total'=>$minTotal,
//                'formCb'=>$formCb->createView(),
                'formCheque'=>$formCheque->createView(),
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'iduser' => $iduser,
                'iduserwhopay'=>$iduserwhopay,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));

        /*
        return $this->render('Cart/cart.html.twig',
            array(
                'name'=>$email,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'h1'=>'Mon panier',
                'classBody'=>'skin-blue sidebar-mini',
                'iduser'=> $iduser,
                'breadcrumb'=>$breadcrumb,
                'cart'=>$cart,


            ));
        */
    }
    /**
     * @Route("/private/cart", name="pay_cart")
     */
    public function payCartAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'mon panier','param'=>array());
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        $this->syncCartPublicToPrivate($session,$client,$email,$pwd,$iduser);

        $cart = $client->getCart($email,$pwd,$iduser);



        if($cart->cartLines !==null) if (!is_array($cart->cartLines)) $cart->cartLines = array($cart->cartLines);

        if($cart->potentialPayer !==null)   if (!is_array($cart->potentialPayer)) $cart->potentialPayer = array($cart->potentialPayer);
        if($cart->cgus !==null)  if (!is_array($cart->cgus)) $cart->cgus = array($cart->cgus);
        return $this->render('Cart/cart.html.twig',
            array(
                'name'=>$email,
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'h1'=>'Mon panier',
                'classBody'=>'skin-blue sidebar-mini',
                'iduser'=> $iduser,
                'breadcrumb'=>$breadcrumb,
                'cart'=>$cart,
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


            ));
    }
}