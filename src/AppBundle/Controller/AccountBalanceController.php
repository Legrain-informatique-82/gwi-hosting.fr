<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 04/08/15
 * Time: 10:21
 */

namespace AppBundle\Controller;

use AppBundle\Traits\Crypt;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class AccountBalanceController extends Controller
{
    use Crypt;

    /**
     * @Route("/private/after-payment", name="after-payment")
     */
    public function afterPayementAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $h1='Compté pré payé crédité';
//        $pwd =  $session->get('pwd');
//        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());

        return $this->render('AccountBalance/after-payement.html.twig',
            array(
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'message'=>'Votre compte a bien été crédité',
                'h1' => $h1,
                'iduser' => $iduser,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),

                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }
    /**
     * @Route("/private/after-payment2", name="after-payment2")
     */
    public function afterPayement2Action(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $h1='Merci de votre achat';
//        $pwd =  $session->get('pwd');
//        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());

        return $this->render('AccountBalance/after-payement.html.twig',
            array(
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'message'=>'Vos achats ont été réglés, vos produits vous seront affectés rapidement',
                'iduser' => $iduser,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }
    /**
     * @Route("/private/account_balance/credit",name="credit_account_balance", defaults={"iduser"=0})
     */
    public function creditAccountBalanceAction(Request $request,$iduser){

        //   $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $iduser=$userConnected->getUser()->id;
        $email =  $userConnected->getEmail();
        $h1='Créditer mon compte pré-payé';
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());

        $infosPaiements = json_decode($client->getParamsPaiement($email,$pwd));

        $isPossibleToPayByCard= $client->isPossibleToPayByCard($email,$pwd,$iduser);

        $vars = array();
        $vars['email']=$email;
        $vars['pwd']=$pwd;
        $vars['idUser']=null;
        $vars['payCart']=false;
        $vars['cancelUrl']= 'http://'.$request->server->get('HTTP_HOST').$this->generateUrl('credit_account_balance');
        $developpement = $this->getParameter('developpement');
        $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST').($developpement?'/app_dev.php':'').'/private/after-payment';

        $vars['amount']=null;

        $urlPaiementExterne= $this->getParameter('url_paiement_externalise').$this->crypter(json_encode($vars));
        return $this->render('AccountBalance/Form/creditAccountBalance.html.twig',
            array(
                'isPossibleToPayByCard'=>$isPossibleToPayByCard,
                'urlPaiementExterne'=>$urlPaiementExterne,
                'infosPaiements'=>$infosPaiements,
                //  'form'=>$form->createView(),
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'iduser' => $iduser,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));
    }

    /**
     * @Route("/private/account_balance/historic",name="historic_account_balance_user", defaults={"iduser"=0,"idagency"=0})
     * @Route("/private/customer/{iduser}/account_balance/historic",name="historic_account_balance_admin", defaults={"idagency"=0 })
     * @Route("/private/administrator/{idagency}/customer/{iduser}/account_balance/historic",name="historic_account_balance_super_admin")
     */
    public function historicAccountBalanceAction($iduser,$idagency,Request $request){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');



        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $breadcrumb=array();



        switch ($routeName){
            case 'historic_account_balance_user':
                $breadcrumb[]=array('url'=>'#','label'=>'historique de mes transactions','param'=>array());
                $iduser = $userConnected->getUser()->id;
                $h1= "Historique de mes transactions";
                break;
            case 'historic_account_balance_admin':
                $usr=$client->getCustomer($email,$pwd,$iduser);
                $h1= "Transactions de : ".$usr->firstname.' '.$usr->name;
                $breadcrumb[]=array('url'=>'customer_admin','label'=>$usr->name,'param'=>array('iduser'=>$iduser));

                $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());

                break;
            case 'historic_account_balance_super_admin':

                $usr=$client->getCustomer($email,$pwd,$iduser);
                $agency= $client->getAgency($email,$pwd,$idagency);

                $h1= "Transactions de : ".$usr->firstname.' '.$usr->name;

                $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array('idagency'=>$idagency));
                $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Liste des clients de l\'agences : '.$agency->name,'param'=>array('idagency'=>$idagency));
                //Liste des gestionnaires d'agences  > Clients de l'age
                $breadcrumb[]=array('url'=>'customer_admin','label'=>$usr->name,'param'=>array('iduser'=>$iduser));

                $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());

                break;
            default:
                $iduser=0;
                $h1='';
                break;
        }
        $afficheFormCheque=false;
        if(($userConnected->getUser()->roles=="ROLE_LEGRAIN")||$userConnected->getUser()->id!=$iduser)
            $afficheFormCheque=true;



        if($client->accountBalanceExist($email,$pwd,$iduser)) {
            $accountBalance = $client->getAccountBalance($email, $pwd, $iduser);

            /*
                        $tmp = (array)$accountBalance->lines;
                        if (empty($tmp)) {
                            $accountBalance->lines = new \stdClass();
                            $accountBalance->lines->item = array();
                            // return $this->redirectToRoute($retidrectEmpty['url'],$retidrectEmpty['param']);
                        }
                        if (!is_array($accountBalance->lines->item)) $accountBalance->lines->item = array($accountBalance->lines->item);
              */
            if($accountBalance->lines !==null)
                if (!is_array($accountBalance->lines)) $accountBalance->lines = array($accountBalance->lines);


            $listSorted = (array)$accountBalance->lines;
            // tri inverse
            arsort($listSorted);


            // Form par cheque
            $formCheque = $this->createFormBuilder()
                ->add('amountCheque',MoneyType::class,array('label'=>'Montant à ajouter : ',    'invalid_message' => 'La valeur est incorrecte'))
                ->add('creditCheque',SubmitType::class,array('label'=>'Créditer','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-euro')))
                ->getForm();
            // Form cb
            $formCheque->handleRequest($request);



            if($formCheque->isValid()){
                $data = $formCheque->getData();
                $amount = $data['amountCheque'];
                try{
                    $client->creditAnotherAccount($email,$pwd,'other',$iduser,$amount,'Rechargement compte pré payé par cheque, virement ou espèce');
                    // Redirection
                    switch ($routeName){
                        case 'historic_account_balance_user':

                            return $this->redirectToRoute("historic_account_balance_user");

                            break;
                        case 'historic_account_balance_admin':

                            return $this->redirectToRoute("historic_account_balance_admin",array('iduser'=>$iduser));

                            break;
                        case 'historic_account_balance_super_admin':

                            return $this->redirectToRoute("historic_account_balance_super_admin",array('idagency'=>$idagency,'iduser'=>$iduser));

                            break;
                        default:
                            throw new \SoapFault('error','Redirection impossible');
                            break;
                    }
                }catch (\SoapFault $e){
                    $formCheque->addError(new FormError($e->getMessage()));
                }
            }

            $vars = array();
            $vars['email']=$email;
            $vars['pwd']=$pwd;
            $vars['idUser']=$iduser;
            $vars['payCart']=false;
            $developpement = $this->getParameter('developpement');
            $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST').($developpement?'/app_dev.php':'').'/private/after-payment';
            switch ($routeName){
                case 'historic_account_balance_user':

                    $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_user");
                    $vars['cancelUrl']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_user");

                    break;
                case 'historic_account_balance_admin':

                    $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_admin",array('iduser'=>$iduser));
                    $vars['cancelUrl']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_admin",array('iduser'=>$iduser));

                    break;
                case 'historic_account_balance_super_admin':

                    $vars['urlRedirect']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_super_admin",array('idagency'=>$idagency,'iduser'=>$iduser));
                    $vars['cancelUrl']='http://'.$request->server->get('HTTP_HOST'). $this->generateUrl("historic_account_balance_super_admin",array('idagency'=>$idagency,'iduser'=>$iduser));

                    break;

            }
            $vars['amount']=null;
//            dump($vars);
            $urlPaiementExterne= $this->getParameter('url_paiement_externalise').$this->crypter(json_encode($vars));
            $isPossibleToPayByCard= $client->isPossibleToPayByCard($email,$pwd,$iduser);

            $infosPaiements = json_decode($client->getParamsPaiement($email,$pwd));
            // Rendu
            return $this->render('AccountBalance/List/transactions.html.twig',
                array(
                    'isPossibleToPayByCard'=>$isPossibleToPayByCard,
                    'infosPaiements'=>$infosPaiements,
                    'urlPaiementExterne'=>$urlPaiementExterne,
                    'afficheFormCheque'=>$afficheFormCheque,
                    'formCheque'=>$formCheque->createView(),
                    'breadcrumb' => $breadcrumb,
                    'classBody' => 'skin-blue sidebar-mini',
                    'name' => $email,
                    'h1' => $h1,
                    'iduser' => $iduser,
                    'lines' => $listSorted,
                    'solde' => $accountBalance->amount,
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

                ));
        }else{
            return $this->render('AccountBalance/transactionsForbidden.html.twig',
                array(

                    'breadcrumb' => $breadcrumb,
                    'classBody' => 'skin-blue sidebar-mini',
                    'name' => $email,
                    'h1' => $h1,
                    'iduser' => $iduser,
                    'csss' => array('adminLTE/plugins/iCheck/square/blue.css'),
                    'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', 'adminLTE/js/loadplugins.js'),
                    'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                    'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

                ));
        }
    }
    /**
     * @param $iduser
     * @return \Symfony\Component\HttpFoundation\Response
     * Affiche le porte monnaie dans l'entete ( appel depuis le template header.html.twig)
     */
    public function getAccountBalanceAction(Request $request,$iduser)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

        $accountBalance=null;
        $listSorted=null;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        $idusr = $userConnected->getUser()->id;
        if($client->accountBalanceExist($email,$pwd,$idusr)) {
            $accountBalance = $client->getAccountBalance($email, $pwd, $idusr);

            /*
                        $tmp = (array)$accountBalance->lines;
                        if (empty($tmp)) {
                            $accountBalance->lines = new \stdClass();
                            $accountBalance->lines->item = array();
                        }
                        if (!is_array($accountBalance->lines->item)) $accountBalance->lines->item = array($accountBalance->lines->item);


                        $listSorted = (array)$accountBalance->lines->item;
            */
            $listSorted = (array)$accountBalance->lines;
            // tri inverse
            arsort($listSorted);
            // Seulement les 10 premier enregistrements du tableau
            $listSorted = array_slice($listSorted, 0, 10);
        }

        return $this->render('AccountBalance/Menu/accountBalanceMenu.html.twig',
            array(

                'accountBalance'=>$accountBalance,
                'lines'=>$listSorted


            ));
    }
}