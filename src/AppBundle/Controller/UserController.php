<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 17/06/15
 * Time: 14:30
 */

namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\EmailApi;
use AppBundle\Api\UserApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use AppBundle\Traits\Referer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Url;

class UserController extends Controller {

use Referer;

    /**
     * @Route("/private/user/update", name="myprofile")
     * @Security("has_role('ROLE_COMPTE_EMAIL') || has_role('ROLE_UTILISATEUR_AGENCE')")
     */
    public function indexAction(Request $request){

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Modifier mon profil','param'=>array());

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $idUser = $userConnected->getUser()->id;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        //  $userConnected = $this->get('security.context')->getToken()->getUser();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $usr = $userConnected->getUser();
        //dump($usr);
        $userApi = new UserApi(
            $usr->id,
            $usr->name,
            '',
            $usr->firstname,
            $usr->email ,
            $usr->address1,
            $usr->address2 ,
            $usr->address3,
            $usr->city==null?null:$usr->city->name ,
            $usr->zipcode==null?null:$usr->zipcode->name ,
            $usr->agency ,
            $usr->phone ,
            $usr->cellPhone ,
            $usr->workPhone ,
            $usr->active,
            $usr->codeClient,
            $usr->companyName,
            $usr->numTVA,
            $usr->tiersPourTVA==null?null:$usr->tiersPourTVA->id


        );

        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t){
            $choiceTiersPourTva[$t->id]=$t->name;
        }
        $form = $this->createFormBuilder($userApi)
            ->add('email',EmailType::class,array('label'=>'E-mail : ',"disabled"=>($this->isGranted('ROLE_COMPTE_EMAIL')?true:false)))
            ->add('password', RepeatedType::class,array('type'=>PasswordType::class,'label'=>'Mot de passe (laissez vide si inchangé ): ','required'=>false,'invalid_message' => 'Les mots de passe doivent correspondre','first_options'  => array('label' => 'Mot de passe'),
                'second_options' => array('label' => 'Mot de passe (validation)')))
            ->add('name',TextType::class,array('label'=>'Nom : '))
            ->add('firstname',TextType::class,array('label'=>'Prénom : ','required'=>false))
            ->add('phone',TextType::class,array('label'=>'Téléphone : ','required'=>false))
            ->add('cellPhone',TextType::class,array('label'=>"Téléphone portable :",'required'=>false))
            ->add('workPhone',TextType::class,array('label'=>"Téléphone bureau :",'required'=>false))
            ->add('address1',TextType::class,array('label'=>'Adresse : '))
            ->add('address2',TextType::class,array('label'=>'Adresse 2 : ','required'=>false))
            ->add('address3',TextType::class,array('label'=>'Adresse 3 : ','required'=>false))
            ->add('zipcode',TextType::class,array('label'=>'Code postal : '))
            ->add('city',TextType::class,array('label'=>'Ville : '))


            ->add('companyName',TextType::class,array('label'=>"Entreprise :",'required'=>false))
            ->add('numTVA',TextType::class,array('label'=>"Numéro TVA :",'required'=>false))
            ->add('tiersPourTva',ChoiceType::class,array('label'=>"Tiers pour TVA :",'choices'=>array_flip($choiceTiersPourTva)))



            ->add('valid',SubmitType::class,array('label'=>'Modifier','attr'=>array('class'=>'btn btn-warning')))

            ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            // save
            try {
                $disconnect=false;
                if($email!=$userApi->getEmail()||($pwd!=$userApi->getPassword()&&$userApi->getPassword()!='')) $disconnect=true;
                if ($client->updateUser(
                    $email, $pwd, $userApi->getId(), $userApi->getEmail(), ($userApi->getPassword() == '' ? null : $userApi->getPassword()), $userApi->getName(), $userApi->getFirstname(),
                    $userApi->getPhone(),$userApi->getAddress1(),$userApi->getAddress2(),$userApi->getAddress3(),$userApi->getCity(),$userApi->getZipcode(),true ,
                    $userApi->getTiersPourTva(),null,$userApi->getCellPhone(),$userApi->getWorkPhone(),$userApi->getCompanyName(),$userApi->getNumTVA()
                ) ) {

                    if($disconnect){
                        return $this->redirect(
                            $this->generateUrl("logout")
                        );
                    }else {
                        return $this->redirect(
                            $this->generateUrl("homepage")
                        );
                    }
                } else {
                    // Afficher erreur
                    $form->addError(new FormError('Erreur lors de la mise à jour des données'));
                }
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }
        }
        return $this->render('User/Form/user.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb'=>$breadcrumb,
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
                'name'=>$email,
                'h1'=>"Modification de mes infos",
                'iduser'=>$idUser,
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            ));
    }

    // listes des utilisateurs agences ( role legrain uniquement)
    /**
     * @Route("/private/administrator",name="list-users-agency")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function listUserAgency(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'#','label'=>'Liste des gestionnaires','param'=>array());

        // Appel de l'api. récupération de la liste d'agence ( si admin).
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $list = $client->listUsersAgencies($email,$pwd);


        return $this->render('User/List/listUsersAgency.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js',
                '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js',
                '//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js',
                'adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'users'=> $list,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/update",name="update_customer_super_admin", )
     * @Route("/private/customer/{iduser}/update",name="update_customer_admin", defaults={"idagency"=0})
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function updateClientsAgency(Request $request,$iduser,$idagency){
        $updGrille = false;
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($routeName=='update_customer_admin'){

            $pathRedirect='list_customer_admin';
            $parametersRedirect=array();
            $h1='Modifier le client';

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'#','label'=>'Modifier le client','param'=>array());
        }else{

            $agency= $client->getAgency($email,$pwd,$idagency);
            $pathRedirect='list_customer_super_admin';
            $parametersRedirect=array('idagency'=>$idagency);
            $h1='Modifier le client de l\'agence : '.$agency->name;

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Liste des clients de l\'agences : '.$agency->name,'param'=>array('idagency'=>$idagency));
            //Liste des gestionnaires d'agences  > Clients de l'agence : Legrain
            $breadcrumb[]=array('url'=>'#','label'=>'Modifier le client','param'=>array());

        }

        // récupération de l'utilisateur par défaut (celui à modifier)
        $defaultData = $client->getCustomer($email,$pwd,$iduser);
        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t){
            $choiceTiersPourTva[$t->id]=$t->name;
        }

        // FRM creation agence
        $form = $this->createFormBuilder( )
            ->add('code_client',TextType::class,array('data'=>$defaultData->codeClient,'label'=>'Code client :','required'=>false))
            ->add('email_user',EmailType::class,array('data'=>$defaultData->email,'label'=>"E-mail :","constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone_user',TextType::class,array('data'=>$defaultData->phone,'label'=>"Téléphone :",'required'=>false))
            ->add('cellphone_user',TextType::class,array('data'=>$defaultData->cellPhone,'label'=>"Téléphone portable :",'required'=>false))
            ->add('workphone_user',TextType::class,array('data'=>$defaultData->workPhone,'label'=>"Téléphone bureau :",'required'=>false))
            ->add('password',RepeatedType::class,array('required'=>false, 'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Mot de passe (validation) :' )))
            ->add('name_user',TextType::class,array('data'=>$defaultData->name,'label'=>"Nom :"))
            ->add('firstname_user',TextType::class,array('data'=>$defaultData->firstname,'label'=>"Prénom :",'required'=>false))
            ->add('address1_user',TextType::class,array('data'=>$defaultData->address1,'label'=>"Adresse :"))
            ->add('address2_user',TextType::class,array('data'=>$defaultData->address2,'label'=>"Adresse :","required"=>false))
            ->add('address3_user',TextType::class,array('data'=>$defaultData->address3,'label'=>"Adresse :","required"=>false))
            ->add('zipcode_user',TextType::class,array('data'=>$defaultData->zipcode==null?null:$defaultData->zipcode->name,'label'=>"Code Postal :"))
            ->add('city_user',TextType::class,array('data'=>$defaultData->city==null?null:$defaultData->city->name,'label'=>"Ville :"))

            ->add('company_name',TextType::class,array('data'=>$defaultData->companyName,'label'=>"Entreprise :",'required'=>false))
            ->add('num_tva',TextType::class,array('data'=>$defaultData->numTVA,'label'=>"Numéro TVA :",'required'=>false))
            ->add('tiersPourTva',ChoiceType::class,array('data'=>$defaultData->tiersPourTVA==null?null:$defaultData->tiersPourTVA->id,'label'=>"Tiers pour TVA :",'choices'=>array_flip($choiceTiersPourTva)))



            ->add('active',ChoiceType::class,array('data'=>$defaultData->active==(string)1?1:0,'label'=>'Compte actif ? :','choices'=>array_flip(array(true=>'Peut se connecter',false=>'Ne peut pas se connecter')),'expanded'=>true));


        // priceList dans certains cas :
        //Le client n'est pas sois même
        //Le client appartient à l'agence
        //Si legrain est connecté, le client est aussi les gestionnaires des agences
        if($userConnected->getUser()->id!=$iduser){
            $estGestionnaire=$defaultData->isGestionnaire;
            $userConnecteEstRoleLegrain=in_array('ROLE_LEGRAIN',$userConnected->getUser()->roles);
            if(($userConnected->getUser()->agency->id==$defaultData->agency->id) || ($estGestionnaire && $userConnecteEstRoleLegrain)) {
                // Si Legrain ou; si gestionnaire pas facturé par legrain.
                if (!$userConnected->getUser()->agency->facturationBylegrain || $this->isGranted('ROLE_LEGRAIN')) {
                    // Liste des listes de prix
                    $listPrices = $client->listPriceList($email, $pwd);

                    $choices = array();
                    foreach ($listPrices as $lp) {
                        $choices[$lp->id] = $lp->name;
                    }
                    $form = $form->add('listPrice', ChoiceType::class, array('label' => 'Grille de tarifs : ', 'choices' =>array_flip( $choices)));
                    $updGrille = true;
                }
            }
        }

        $form = $form->add('save',SubmitType::class,array('label'=>'Modifier','attr'=>array('class'=>" btn btn-default btn-lgr btn-lgr-save")))->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            try{
                $client->updateUser($email,$pwd,$iduser,$data['email_user'],$data['password'],
                    $data['name_user'],$data['firstname_user'],$data['phone_user'],$data['address1_user'],$data['address2_user'],
                    $data['address3_user'],$data['city_user'],$data['zipcode_user'],($data['active']?true:false),
                    $data['tiersPourTva'],$data['code_client'],$data['cellphone_user'],$data['workphone_user'],$data['company_name'],$data['num_tva']);

                if($updGrille){
                    $client->setListPrice($email,$pwd,$data['listPrice'],$iduser);
                }

                return $this->redirectToRoute($pathRedirect,$parametersRedirect);
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }
        return $this->render('User/Form/clientAgency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>true,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>$h1,
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));

    }

    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}/delete",name="delete_customer_super_admin", )
     * @Route("/private/customer/{iduser}/delete",name="delete_customer_admin", defaults={"idagency"=0})
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function deleteClientsAgency(Request $request,$idagency,$iduser){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        if($routeName=='delete_customer_admin'){

            $pathRedirect='list_customer_admin';
            $parametersRedirect=array();
            $h1='Supprimer le client';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'#','label'=>'Supprimer le client','param'=>array());
            $type="admin";
        }else{
            $type="super_admin";
            $agency= $client->getAgency($email,$pwd,$idagency);
            $pathRedirect='list_customer_super_admin';
            $parametersRedirect=array('idagency'=>$idagency);
            $h1='Supprimer le client de l\'agence : '.$agency->name;

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Liste des clients de l\'agences : '.$agency->name,'param'=>array('idagency'=>$idagency));
            //Liste des gestionnaires d'agences  > Clients de l'agence : Legrain
            $breadcrumb[]=array('url'=>'#','label'=>'Supprimer le client','param'=>array());

        }

        // récupération de l'utilisateur par défaut
        $defaultData = $client->getCustomer($email,$pwd,$iduser);

        // FRM creation agence
        $form = $this->createFormBuilder( )
            ->add('delete',SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>" btn btn-danger")))
            ->add('cancel',SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>" btn btn-default")))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            try{
                if ($form->get('delete')->isClicked()) {
                    $client->deleteUser($email,$pwd,$iduser);
                }
                if ($form->get('delete')->isClicked()||$form->get('cancel')->isClicked()) {
                    return $this->redirectToRoute($pathRedirect,$parametersRedirect);
                }
//                $client->updateUser($email,$pwd,$iduser,$data['email_user'],$data['password'],$data['name_user'],$data['firstname_user'],$data['phone_user'],$data['address1_user'],$data['address2_user'],$data['address3_user'],$data['city_user'],$data['zipcode_user'],($data['active']?true:false));
//                return $this->redirectToRoute($pathRedirect,$parametersRedirect);
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }
        return $this->render('User/Form/delUser.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>true,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>$h1,
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }

    /**
     * @Route("/private/administrator/{idagency}/customer/add/",name="add_customer_super_admin", )
     * @Route("/private/customer/add/",name="add_customer_admin", defaults={"idagency"=0})
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function createClientsAgency(Request $request,$idagency){
//        $requestRoute = $this->container->get('request');

//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        if($idagency==0){
            $agency=$userConnected->getUser()->agency;
            $idagency=$agency->id;
            $pathRedirect='list_customer_admin';
            $parametersRedirect=array();
            $h1='Ajouter un client';

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter un client','param'=>array());
        }else{
            $agency= $client->getAgency($email,$pwd,$idagency);
            $pathRedirect='list_customer_super_admin';
            $parametersRedirect=array('idagency'=>$idagency);
            $h1='Ajouter un client à l\'agence : '.$agency->name;

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Liste des clients de l\'agences : '.$agency->name,'param'=>array('idagency'=>$idagency));
            //Liste des gestionnaires d'agences  > Clients de l'agence : Legrain
            $breadcrumb[]=array('url'=>'#','label'=>'Ajouter un client','param'=>array());

        }
        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);
        $tmp = (array) $listTiersPourTVA;

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t) {
            $choiceTiersPourTva[$t->id] = $t->name;
        }

        // FRM creation agence
        $form = $this->createFormBuilder( )
            ->add('code_client',TextType::class,array('label'=>'Code client :','required'=>false))
            ->add('email_user',TextType::class,array('label'=>"E-mail :","constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone_user',TextType::class,array('label'=>"Téléphone :"))
            ->add('cellphone_user',TextType::class,array('label'=>"Téléphone portable :",'required'=>false))
            ->add('workphone_user',TextType::class,array('label'=>"Téléphone bureau :",'required'=>false))
            ->add('password',RepeatedType::class,array( 'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Mot de passe (validation) :' )))
            ->add('name_user',TextType::class,array('label'=>"Nom :"))
            ->add('firstname_user',TextType::class,array('label'=>"Prénom :"))

            ->add('address1_user',TextType::class,array('label'=>"Adresse :"))
            ->add('address2_user',TextType::class,array('label'=>"Adresse :","required"=>false))
            ->add('address3_user',TextType::class,array('label'=>"Adresse :","required"=>false))
            ->add('zipcode_user',TextType::class,array('label'=>"Code Postal :"))
            ->add('city_user',TextType::class,array('label'=>"Ville:"))
            ->add('company_name',TextType::class,array('label'=>"Entreprise :",'required'=>false))
            ->add('num_tva',TextType::class,array('label'=>"Numéro TVA :",'required'=>false))
            ->add('tiersPourTva',ChoiceType::class,array('label'=>"Tiers pour TVA :",'choices'=>array_flip($choiceTiersPourTva)))
            ->add('active',ChoiceType::class,array('label'=>'Compte actif ? :','choices'=>array_flip(array(true=>'Peut se connecter',false=>'Ne peut pas se connecter')),'expanded'=>true))
            ->add('save',SubmitType::class,array('label'=>'Sauvegarder','attr'=>array('class'=>" btn btn-default btn-lgr btn-lgr-sauver")))
            ->getForm();

        $form->handleRequest($request);


        if($form->isValid()){
            $data = $form->getData();
            try{
                $client->createClientAgency($email,$pwd,$data['name_user'],$data['firstname_user'],$data['email_user'],$data['password'],$data['address1_user'],$data['address2_user'],
                    $data['address3_user'],$data['city_user'],$data['zipcode_user'],$idagency,$data['phone_user'],$data['active'],
                    $data['tiersPourTva'],$data['code_client'],$data['cellphone_user'],$data['workphone_user'],$data['company_name'],$data['num_tva']
                );


                return $this->redirectToRoute($pathRedirect,$parametersRedirect);
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }
        return $this->render('User/Form/clientAgency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>true,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>$h1,
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
    /**
     * @Route("/private/administrator/{idagency}/customer/{iduser}",name="customer_super_admin" )
     * @Route("/private/customer/{iduser}",name="customer_admin", defaults={"idagency"=0})
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function ficheCustomer(Request $request,$idagency,$iduser){
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        // Fiche de l'utilisateur
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $customer = $client->getCustomer($email,$pwd,$iduser);


        // dump($customer);
        if($idagency==0)$idagency=$userConnected->getUser()->agency->id;
        $agency = $client->getAgency($email,$pwd,$idagency);

        $h1='Fiche de l\'utilisateur : '.$customer->firstname.' '.$customer->name;
        //dump($list);
        if( $routeName=='customer_admin'){
            $pathRouteNameBtnAdd ='add_customer_admin';

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list_customer_admin','label'=>'Mes clients','param'=>array());
            $breadcrumb[]=array('url'=>'','label'=>$h1,'param'=>array());
            $type="admin";
        }else{
            $pathRouteNameBtnAdd ='add_customer_super_admin';

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'list_customer_super_admin','label'=>'Clients de l\'agence : '.$agency->name,'param'=>array('idagency'=>$idagency));
            $breadcrumb[]=array('url'=>'#','label'=>$h1,'param'=>array());
            $type="super_admin";
        }

        // Liste des ndds pour ce tiers
        $ndds = $client->listNdd($email,$pwd,$iduser);

        // Liste des serveurs pour ce tiers
        $instances = $client->listInstances($email, $pwd, $iduser);

        // Liste des hébergements mutualisés pour ce tiers
        $listHeberMutu = $client->listHebergementsMutualises($email, $pwd, $iduser);

        if($client->accountBalanceExist($email,$pwd,$iduser)) {
            $accountBalance = $client->getAccountBalance($email, $pwd, $iduser);
        }else{
            $accountBalance=null;
        }

       // dump($accountBalance);
        // On groupe les listes
        $form = $this->createFormBuilder();
        $services = array();
        $arrayNdd=array();
        $nbNdds=0;
        foreach($ndds as $ndd){
            $form = $form->add('ndd_'.$ndd->id.'_'.$ndd->product->id,CheckboxType::class,array('label'=>$ndd->name,'required'=>false));
            $item = new \stdClass();
            $item->id = $ndd->id;
            $item->date = $ndd->date_registry_end;
            $item->name = $ndd->name;
            $item->type = 'ndd';
            $item->idproduct = $ndd->product->id;
            $item->services=$ndd->services;
            $arrayNdd[$ndd->id]=$ndd->name;
            $services[]=$item;
            $nbNdds++;
        }
        $arrayInstances=array();
        $nbInstances=0;
        foreach($instances as $instance){
            $form = $form->add('server_'.$instance->id.'_'.$instance->productRenew->id,CheckboxType::class,array('label'=>$instance->name,'required'=>false));

            $item = new \stdClass();
            $dateEnd= new \DateTime($instance->dateEnd->date);
            $item->id = $instance->id;
            $item->date = $dateEnd->getTimestamp();
            $item->name = $instance->name;
            $item->type = 'instance';
            $item->idproduct = $instance->productRenew->id;
            $item->services=null;
            $arrayInstances[$instance->id]=$instance->name;
            $services[]=$item;
            $nbInstances++;

        }
        $arrayHeberMutu=array();
        foreach($listHeberMutu as $he){
            $form = $form->add('hebermutu_'.$he->id.'_'.$he->productHosting->product->id,CheckboxType::class,array('label'=>$he->productHosting->name.'('.($he->vhost==null?'NC':$he->vhost).')','required'=>false));

            $item = new \stdClass();
            $item->id = $he->id;
            $item->date = strtotime($he->dateEnding->date);
            $item->name = $he->productHosting->name.'('.($he->vhost==null?'NC':$he->vhost).')';
            $item->type = 'hebermutu';
            $item->idproduct = $he->productHosting->product->id;
            $item->idproductHeber = $he->productHosting->id;
            $arrayHeberMutu[$he->id]=$he->productHosting->id;
            $services[]=$item;



        }
        $today = new \DateTime();
        $afficheProduits = $client->accountBalanceExist($email,$pwd,$userConnected->getUser()->id);


        $form = $form->add('submit',SubmitType::class,array('label'=>'Ajouter au panier','attr'=>array('class'=>'btn btn-success')));
        $form = $form->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            $elemsAddToCart = array();
            foreach($data as $key => $value){
                if($value){
                    $exploded = explode('_',$key);
                    list($type,$idelement,$idproduct)=$exploded;
                    $options=array();
                    switch($type){
                        case 'ndd':
                            $options=array('ndd'=>$arrayNdd[$idelement],'period'=>12);
                            break;
                        case 'server':
                            $options=array('instance'=>$arrayInstances[$idelement],'period'=>12);
                            break;
                        case 'hebermutu':
                            $options=array('idProduitHeber'=>$arrayHeberMutu[$idelement],'idHosting'=>$idelement,'period'=>12);
                            break;
                    }
                    $elemsAddToCart[]=array('idProduct'=>$idproduct,'iduser'=>$iduser,'options'=>json_encode($options));
                }
            }

           $client->addListProductsToCart($email, $pwd,json_encode($elemsAddToCart));
            $this->get('session')->getFlashBag()->add(
                'notice',
                'le(s) produit(s) a/ont été ajouté au panier'
            );
            // Redirection vers la page accueil
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

         //    return $this->redirectToRoute('pay_cart');

        }

        return $this->render('User/customer.html.twig',array(
            'form'=>$form->createView(),
            'breadcrumb'=>$breadcrumb,
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
            'agency'=>$agency,
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'h1'=>$h1,
            'pathRouteNameBtnAdd'=>$pathRouteNameBtnAdd,
            'customer'=> $customer,
            'iduser'=> $userConnected->getUser()->id,
            'type'=>$type,
            'bugzilla'=>($this->isGranted('ROLE_LEGRAIN')?true:false),
            'services'=>$services,
            'today'=> $today->getTimestamp(),
            'in2months'=>$today->modify('+2 months')->getTimestamp(),
            'afficheProduits'=>$afficheProduits,
            'idagency'=>$idagency,
            'nbNdds'=>$nbNdds,
            'nbInstances'=>$nbInstances,
            'accountBalance'=>$accountBalance,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));



    }
    // listes des clients agences ( role agence uniquement)
    /**
     * @Route("/private/administrator/{idagency}/customers",name="list_customer_super_admin" )
     * @Route("/private/customers",name="list_customer_admin", defaults={"idagency"=0})
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function listCustomers(Request $request,$idagency){
//        $requestRoute = $this->container->get('request');

//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');



        if($idagency==0)$idagency=$userConnected->getUser()->agency->id;
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        // On charge la liste d'utlisateur de l'agence passée en //
        $list = $client->listClientsAgencies($email,$pwd,$idagency);
        $agency = $client->getAgency($email,$pwd,$idagency);


        //dump($list);
        if( $routeName=='list_customer_admin'){
            $pathRouteNameBtnAdd ='add_customer_admin';
            $h1='Mes clients';
            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'','label'=>'Mes clients','param'=>array());
            $type="admin";
        }else{
            $pathRouteNameBtnAdd ='add_customer_super_admin';
            $h1='Liste des clients de l\'agence : '.$agency->name;

            $breadcrumb=array();
            $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array());
            $breadcrumb[]=array('url'=>'#','label'=>'Clients de l\'agence : '.$agency->name,'param'=>array());
            $type="super_admin";
        }

        return $this->render('User/List/listClientsAgency.html.twig',array(
            'breadcrumb'=>$breadcrumb,
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'agency'=>$agency,
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'h1'=>$h1,
            'pathRouteNameBtnAdd'=>$pathRouteNameBtnAdd,
            'users'=> $list,
            'iduser'=> $userConnected->getUser()->id,
            'type'=>$type,
            'bugzilla'=>($this->isGranted('ROLE_LEGRAIN')?true:false),
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));

    }

    /**
     * @Route("/private/user/complement_infos",name="complement_infos_user")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function complementInfosUserAction(Request $request)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email = $userConnected->getEmail();
        $pwd = $session->get('pwd');
        $client = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE));


        $breadcrumb = array();
        $breadcrumb[] = array('url' => '', 'label' => 'Complements d\'informations utilisateur', 'param' => array());
        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t){
            $choiceTiersPourTva[$t->id]=$t->name;
        }
        $usr = $userConnected->getUser();
        $agency = $usr->agency;


        $zc=null;
        if($usr->zipcode!=null){
            $zc = $usr->zipcode->name;
        }elseif($agency->zipCode!=null){
            $zc = $agency->zipcode->name;
        }
        $c=null;
        if($usr->city!=null){
            $c = $usr->city->name;
        }elseif($agency->city!=null){
            $c = $agency->city->name;
        }

        $form = $this->createFormBuilder()
            ->add('name', TextType::class, array('label' => 'Nom :','data'=>$usr->name))
            ->add('firstname', TextType::class, array('label' => 'Prénom :','required'=>false,'data'=>$usr->firstname))
            ->add('email', EmailType::class, array('label' => 'E-mail :','data'=>$email))
            ->add('address1', TextType::class, array('label' => 'Adresse :','data'=>($usr->address1==null?$agency->address1:$usr->address1)))
            ->add('address2', TextType::class, array('label' => 'Adresse :','data'=>($usr->address2==null?$agency->address2:$usr->address2),'required'=>false))
            ->add('address3', TextType::class, array('label' => 'Adresse :','data'=>($usr->address3==null?$agency->address3:$usr->address3),'required'=>false))
            ->add('zipCode', TextType::class, array('label' => 'Code postal :','data'=>$zc))
            ->add('city', TextType::class, array('label' => 'Ville :','data'=>$c))
            ->add('phone', TextType::class, array('label' => 'Téléphone :', 'data'=>$usr->phone,'required' => false))
            ->add('cellPhone', TextType::class, array('label' => 'Téléphone portable :','data'=>$usr->cellPhone, 'required' => false))
            ->add('workPhone', TextType::class, array('label' => 'Téléphone travail :','data'=>($usr->workPhone==null?$agency->phone:$usr->workPhone), 'required' => false))
            ->add('companyName', TextType::class, array('label' => 'Nom entreprise :','data'=>($usr->companyName==null?$agency->name:$usr->companyName), 'required' => false))
            ->add('numTva', TextType::class, array('label' => 'numéro TVA :', 'data'=>$usr->numTVA,'required' => false))
            ->add('tiersPourTva',ChoiceType::class,array('label'=>"Zone TVA :",'data'=>$usr->tiersPourTVA==null?null:$usr->tiersPourTVA->id,'choices'=>array_flip($choiceTiersPourTva)))

            ->add('submit', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();


        $form->handleRequest($request);
        if ($form->isValid()) {
            $data = $form->getData();
            // Appel du ws pour charger le choix de l'utilisateur. (Retourne une erreur si choix déjà fait)
            try {
                $client->complementInfosGestionnaire($email, $pwd, $data['name'],$data['firstname'],$data['address1'],$data['address2'],$data['address3'],$data['zipCode'],$data['city'],$data['phone'],$data['cellPhone'],$data['workPhone'],$data['email'],$data['companyName'],$data['numTva'],$data['tiersPourTva']);
                //  redirection vers homepage
                return $this->redirectToRoute('homepage');
            } catch (\SoapFault $e) {
                $form->addError(new FormError($e->getMessage()));

            }



        }
        return $this->render('User/Form/complements_infos_user.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>'Complements d\'informations utilisateur',
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'form'=>$form->createView(),
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }

    /**
     * @Route("/private/administrator/create",name="create-users-agency")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function createUserAgency(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
        $listAgencies = $client->listAgencies($email,$pwd);
        $choice=array();
        foreach($listAgencies as $a){
            $choice[$a->id]=$a->name;
        }
        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t){
            $choiceTiersPourTva[$t->id]=$t->name;
        }
        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'list-users-agency','label'=>'Liste des gestionnaires d\'agences','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Ajouter un gestionnaire','param'=>array());
        // FRM creation agence
        $form = $this->createFormBuilder( )
            ->add('code_client',TextType::class,array('label'=>'Code client :','required'=>false))

            ->add('email_user',TextType::class,array('label'=>"E-mail de l'utilisateur :","constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone_user',TextType::class,array('label'=>"Téléphone de l'utilisateur :"))
            ->add('cellphone_user',TextType::class,array('label'=>"Téléphone portable :",'required'=>false))
            ->add('workphone_user',TextType::class,array('label'=>"Téléphone bureau :",'required'=>false))
            ->add('password',RepeatedType::class,array( 'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array('label' => 'Mot de passe : '),
                'second_options' => array('label' => 'Mot de passe (validation) :' )))
            ->add('name_user',TextType::class,array('label'=>"Nom  de l'utilisateur :"))
            ->add('firstname_user',TextType::class,array('label'=>"Prénom  de l'utilisateur :"))
            ->add('address1_user',TextType::class,array('label'=>"Adresse  de l'utilisateur :"))
            ->add('address2_user',TextType::class,array('label'=>"Adresse  de l'utilisateur :","required"=>false))
            ->add('address3_user',TextType::class,array('label'=>"Adresse  de l'utilisateur :","required"=>false))
            ->add('zipcode_user',TextType::class,array('label'=>"Code Postal  de l'utilisateur :"))
            ->add('city_user',TextType::class,array('label'=>"Ville de l'utilisateur:"))
            ->add('company_name',TextType::class,array('label'=>"Entreprise :",'required'=>false))
            ->add('num_tva',TextType::class,array('label'=>"Numéro TVA :",'required'=>false))
            ->add('tiersPourTva',ChoiceType::class,array('label'=>"Tiers pour TVA :",'choices'=>array_flip($choiceTiersPourTva)))
            ->add('agencies', ChoiceType::class, array(
                'choices'   => array_flip($choice),
                'label'  => 'Agence : ',
            ))
            ->add('save',SubmitType::class,array('label'=>'Sauvegarder','attr'=>array('class'=>" btn btn-success")))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            try{

                $client->createUserAgency($email,$pwd,$data['name_user'],$data['firstname_user'],$data['email_user'],$data['password'],$data['address1_user'],$data['address2_user'],
                    $data['address3_user'],$data['city_user'],$data['zipcode_user'],$data['agencies'],$data['phone_user'],true,
                    $data['tiersPourTva'],$data['code_client'],$data['cellphone_user'],$data['workphone_user'],$data['company_name'],$data['num_tva']
                );
                return $this->redirectToRoute('list-users-agency');
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }

        }
        return $this->render('User/Form/userAgency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>true,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
}