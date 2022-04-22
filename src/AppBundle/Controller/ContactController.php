<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 11/08/15
 * Time: 10:13
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Constraints\Email;



class ContactController extends Controller
{

    /**
     * @Route("/private/contact/update/{idcontact}",name="update-contact")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function updateContactAction(Request $request,$idcontact){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;



        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'list-contacts','label'=>'Gestion des contacts','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Modifier le contact','param'=>array());



        $contact = $client->getInfosContact($email, $pwd, $idcontact);
        $h1 = 'Modifier le contact : '.$contact->code;
        $listUsers=array();

        // Récuperation de la liste des utilisateur
        $apiAllUsers = $client->listAllUsers($email,$pwd);
        foreach($apiAllUsers as $u){
            $listUsers[$u->id]=$u->email.' ('.$u->name.' '.$u->firstname.' ('.$u->codeClient.') - Agence : '.$u->agency->name.')';
        }


        $form = $this->createFormBuilder()
            ->add('fakeEmail',EmailType::class,array('label'=>'Email affiché au client :','data'=>$contact->fakeEmail))
            ->add('isDefault',ChoiceType::class,array('label'=>'par defaut (si un autre est par défaut, le remplace) :','choices'=>array_flip(array(0=>'Non',1=>'Oui')),'expanded'=>true,'data'=>(int)$contact->isDefault))
            ->add('user',ChoiceType::class,array('label'=>'Utilisateur affecté : ','choices'=>array_flip($listUsers),'data'=>$contact->user->id,'attr'=>array('class'=>'combobox')))
            ->add('submit',SubmitType::class,array('label'=>'Mettre à jour','attr'=>array('class'=>'btn btn-warning')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();

            $update = array();
            $update['iduser']= $data['user'];
            $update['isDefault']= $data['isDefault'];
            $update['fakeEmail']= $data['fakeEmail'];

            $client->updateContact($email,$pwd,$idcontact,json_encode($update));
            return $this->redirectToRoute('list-contacts');
        }

        return $this->render('Contact/Form/contact.html.twig',
            array(
                'form'=>$form->createView(),
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => $h1,
                'iduser' => $userConnected->getUser()->id,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }
    /**
     * @Route("/private/contact/list",name="list-contacts")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function listContactsAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Gestion des contacts','param'=>array());

        $contacts = $client->listAllContacts($email,$pwd);

        return $this->render('Contact/List/contacts.html.twig',array(
            'iduser'=>$userConnected->getUser()->id,
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>'Liste des contacts',
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'contacts' => $contacts,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }


    /**
     * @Route("/private/contact/addContact/{idCartLine}", name="fancybox_add_contact")
     */
    public function fancyCreateContact(Request $request,$idCartLine){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

        $step = 0;
        // Contact à associer à un utilisateur
        // Saisi des infos (fake email, le "vrai" etant sauvé dans les params de l'appli
        // Charger la ligne du panier et y associer le contact nouvellement créé.
        $usersApi = $client->listUsers($email,$pwd);

        $users = array();
        foreach($usersApi as $uApi){
            if($uApi->id!= $userConnected->getUser()->id) {
                $users[$uApi->id] = $uApi->email . ' (' . $uApi->name . ' ' . $uApi->firstname . ' - Agence : ' . $uApi->agency->name . ' - Code client : ' . $uApi->codeClient . ')';
            }else{
                $users[$uApi->id] = $uApi->email . ' (' . $uApi->name . ' ' . $uApi->firstname . ' - Agence : ' . $uApi->agency->name .')';
            }
        }

        $listTiersPourTVA = $client->listTiersPourTVA($email,$pwd);

        $choiceTiersPourTva = array();
        foreach($listTiersPourTVA as $t) {
            $choiceTiersPourTva[$t->id] = $t->name;
        }

        // lien pour fermer apres enregistrement : javascript:jQuery.fancybox.close();
        $countries = array("AL"=>"Albanie","DE"=>"Allemagne","AD"=>"Andorre","AN"=>"Antilles Néerlandaises","AT"=>"Autriche","BY"=>"Belarus","BE"=>"Belgique","BA"=>"Bosnie-Herzégovine","BG"=>"Bulgarie","CY"=>"Chypre","HR"=>"Croatie","CW"=>"Curacao","DK"=>"Danemark","ES"=>"Espagne","EE"=>"Estonie","FO"=>"Feroë (Iles)","FI"=>"Finlande","FR"=>"France","GI"=>"Gibraltar","GD"=>"Grenade","GL"=>"Groënland","GR"=>"Grêce","GP"=>"Guadeloupe","GG"=>"Guernesey","GF"=>"Guyane Francaise","HU"=>"Hongrie","IE"=>"Irlande","IS"=>"Islande","IT"=>"Italie","JE"=>"Jersey (Ile)","LV"=>"Lettonie","LI"=>"Liechtenstein","LT"=>"Lituanie","LU"=>"Luxembourg","MK"=>"Macédoine","MT"=>"Malte","MQ"=>"Martinique","MD"=>"Moldovie","MC"=>"Monaco","ME"=>"Monténégro","NO"=>"Norvège","NC"=>"Nouvelle Calédonie","NL"=>"Pays-Bas","BQ"=>"Pays-Bas caribéens","PL"=>"Pologne","PF"=>"Polynesie Francaise","PT"=>"Portugal","RO"=>"Roumanie","GB"=>"Royaume-Uni","RU"=>"Russie","RE"=>"Réunion","PM"=>"Saint Pierre et Miquelon","SM"=>"Saint-Marin","MF"=>"Saint-Martin","VA"=>"Saint-Siège (État de la cité du Vatican)","VC"=>"Saint-Vincent-et-Grenadines","RS"=>"Serbie et Montenegro","SK"=>"Slovaque (Rep.)","SI"=>"Slovénie","CH"=>"Suisse","SE"=>"Suède","SJ"=>"Svalbard et Île Jan Mayen","CZ"=>"Tchèque (Rep.)","TF"=>"Terres Australes Francaise","UA"=>"Ukraine","BV"=>"Île Bouvet","IM"=>"Île de Man","AX"=>"Îles Åland","AI"=>"Anguilla","AG"=>"Antigua et Barbuda","AR"=>"Argentine","AW"=>"Aruba","BS"=>"Bahamas","BB"=>"Barbade","BZ"=>"Belize","BM"=>"Bermudes","BO"=>"Bolivie","BR"=>"Brésil","CA"=>"Canada","KY"=>"Cayman (Iles)","CL"=>"Chili","CO"=>"Colombie","CR"=>"Costa Rica","CU"=>"Cuba","DO"=>"Dominicaine (Rep.)","DM"=>"Dominique","SV"=>"El Salvador","EC"=>"Equateur","US"=>"Etats-Unis d'Amerique","FK"=>"Falkland (Iles)","GU"=>"Guam","GT"=>"Guatemala","GY"=>"Guyana","GS"=>"Géorgie du Sud et les Îles Sandwich du Sud","HI"=>"Hawaï","HT"=>"Haïti","HN"=>"Honduras","JM"=>"Jamaïque","MX"=>"Mexique","MS"=>"Montserrat","NI"=>"Nicaragua","PA"=>"Panama","PY"=>"Paraguay","PN"=>"Pitcairn","PR"=>"Porto Rico","PE"=>"Pérou","BL"=>"Saint-Barthélemy","KN"=>"Saint-Kitts-et-Nevis","SX"=>"Saint-Martin (Partie Néerlandaise)","SH"=>"Sainte-Hélène","LC"=>"Sainte-Lucie","AS"=>"Samoa Américaines","ST"=>"Sao Tome-et-Principe","SL"=>"Sierra Leone","TT"=>"Trinité-et-Tobago","TC"=>"Turks et Caïcos (Iles)","UY"=>"Uruguay","VE"=>"Venezuela","VI"=>"Vierges Américaines (Iles)","VG"=>"Vierges Britanniques (Iles)","AF"=>"Afghanistan","AQ"=>"Antarctique","SA"=>"Arabie Saoudite","AM"=>"Arménie","AC"=>"Ascension","HM"=>"Australia Heard Island and McDonald Islands","AU"=>"Australie","AZ"=>"Azerbaidjan","BH"=>"Bahrein","BD"=>"Bangladesh","BT"=>"Bhoutan","BN"=>"Brunei","KH"=>"Cambodge","CN"=>"Chine","CX"=>"Christmas Island","CK"=>"Cook (Iles)","KR"=>"Corée (Rep. de)","KP"=>"Corée (Rep. Dem. Pop.)","AE"=>"Emirats Arabes Unis","FJ"=>"Fidji","GE"=>"Géorgie","HK"=>"Hong-Kong","IN"=>"Inde","ID"=>"Indonésie","IQ"=>"Irak","IR"=>"Iran (Rep. Isl.)","CC"=>"Islands Cocos (Keeling) Islands","IL"=>"Israël","JP"=>"Japon","JO"=>"Jordanie","KZ"=>"Kazakhstan","KG"=>"Kirghizistan","KI"=>"Kiribati","KW"=>"Koweït","LA"=>"Laos (Rep. Dem. Pop. du)","LB"=>"Liban","MO"=>"Macao","MY"=>"Malaisie","MV"=>"Maldives","MP"=>"Mariannes (Iles)","MH"=>"Marshall (Iles)","FM"=>"Micronésie","MN"=>"Mongolie","MM"=>"Myanmar","NR"=>"Nauru","NU"=>"Niue","NF"=>"Norfolk (Ile)","NZ"=>"Nouvelle-Zélande","NP"=>"Népal","OM"=>"Oman","UZ"=>"Ouzbekistan","PK"=>"Pakistan","PW"=>"Palau","PS"=>"Palestine","PG"=>"Papouasie-Nouvelle-Guinée","PH"=>"Philippines","QA"=>"Qatar","SB"=>"Salomon","WS"=>"Samoa-Occidental","SC"=>"Seychelles","SG"=>"Singapour","LK"=>"Sri Lanka","SR"=>"Surinam","SY"=>"Syrie","TJ"=>"Tadjikistan (Rep. du)","TW"=>"Taïwan","IO"=>"Territoire britannique de l'océan Indien","TH"=>"Thaïlande","TP"=>"Timor Oriental","TL"=>"Timor-Leste","TK"=>"Tokelau","TO"=>"Tonga","TM"=>"Turkmenistan","TR"=>"Turquie","TV"=>"Tuvalu","VU"=>"Vanuatu","VN"=>"Vietnam","WF"=>"Wallis et Futuna","YE"=>"Yémen (Rep.)","ZA"=>"Afrique du Sud","DZ"=>"Algérie","AO"=>"Angola","BW"=>"Botswana","BF"=>"Burkina Faso","BI"=>"Burundi","BJ"=>"Bénin","CM"=>"Cameroun","CV"=>"Cap-Vert","CF"=>"Centrafricaine (Rep.)","KM"=>"Comores","CG"=>"Congo","CD"=>"Congo Zaïre (Rep. Dem.)","CI"=>"Côte d'Ivoire","DJ"=>"Djibouti","EG"=>"Egypte","ZZ"=>"Equatorial Kundu","ER"=>"Erythrée","ET"=>"Ethiopie","GA"=>"Gabon","GM"=>"Gambie","GH"=>"Ghana","GN"=>"Guinée","GQ"=>"Guinée Equatoriale","GW"=>"Guinée-Bissau","KE"=>"Kenya","LS"=>"Lesotho","LR"=>"Liberia","LY"=>"Libye","MG"=>"Madagascar","MW"=>"Malawi","ML"=>"Mali","MA"=>"Maroc","MU"=>"Maurice","MR"=>"Mauritanie","YT"=>"Mayotte","MZ"=>"Mozambique","NA"=>"Namibie","NE"=>"Niger","NG"=>"Nigeria","UG"=>"Ouganda","RW"=>"Rwanda","EH"=>"Sahara Occidental","SO"=>"Somalie","SD"=>"Soudan","SS"=>"Soudan du Sud","SZ"=>"Swaziland","SN"=>"Sénégal","TZ"=>"Tanzanie","TD"=>"Tchad","TG"=>"Togo","TN"=>"Tunisie","ZM"=>"Zambie","ZW"=>"Zimbabwe");
        $typesContacts = array(0=>'Une personne',1=>'Une société',2=>'Une association',3=>'Un organisme public');
        $form2 = $this->createFormBuilder()
            ->add('type',ChoiceType::class,array('label'=>'Type de contact :','choices'=>array_flip($typesContacts),'attr'=>array('class'=>'combobox')))

            ->add('companyName',TextType::class,array('label'=>'Nom de la société  : ','required'=>false,'attr'=>array('class'=>'jsCompany')))
            ->add('insee',TextType::class,array('label'=>'INSEE ou SIREN  : ','required'=>false,'attr'=>array('class'=>'jsCompany')))
            ->add('numMarque',TextType::class,array('label'=>'N° de marque (INPI,OMPI,...) : ','required'=>false,'attr'=>array('class'=>'jsCompany')))
            ->add('numTva',TextType::class,array('label'=>'N° de TVA : ','required'=>false,'attr'=>array('class'=>'jsCompany')))

            ->add('name',TextType::class,array('label'=>'Nom : '))
            ->add('firstname',TextType::class,array('label'=>'Prénom : '))
            ->add('address',TextareaType::class,array('label'=>'Adresse postale : '))
            ->add('zipCode',TextType::class,array('label'=>'Code postal : ','required'=>false))
            ->add('city',TextType::class,array('label'=>'Ville : '))
            ->add('state', ChoiceType::class, array('placeholder' => false,'label'=>'Pays : ','choices'=>array_flip($countries),'attr'=>array('class'=>'combobox')))
            ->add('phone',TextType::class,array('label'=>'Téléphone : '))
            ->add('fax',TextType::class,array('label'=>'Fax : ','required'=>false))
            ->add('cellphone',TextType::class,array('label'=>'Portable : ','required'=>false))
            ->add('email',EmailType::class,array('label'=>'E-mail : '))
            ->add('contact_submit',SubmitType::class,array('label'=>'Sauver','attr'=>array('class'=>'btn btn-success')));




        $createContactIsPossible=false;
        if($this->isGranted('ROLE_AGENCE')&&$userConnected->getUser()->agency->facturationBylegrain!=null) {
            $createContactIsPossible=true;
            $form2 = $form2->add('user', ChoiceType::class, array('required' => false, 'label' => 'Utilisateur associé :', 'choices' => array_flip($users), 'placeholder' => 'Veuillez choisir un utilisateur', 'attr' => array('class' => 'combobox'),'data'=>$session->get('idUserSelected')))
                ->add('code_client_user', TextType::class, array('label' => 'Code client :', 'required' => false))
                ->add('email_user', TextType::class, array('label' => "E-mail :", 'required' => false, "constraints" => array(new Email(array('message' => "'{{ value }}' n'est pas un email valide.", 'checkMX' => true)))))
                ->add('phone_user', TextType::class, array('label' => "Téléphone :", 'required' => false))
                ->add('cellphone_user', TextType::class, array('label' => "Téléphone portable :", 'required' => false))
                ->add('workphone_user', TextType::class, array('label' => "Téléphone bureau :", 'required' => false))
                ->add('password_user', RepeatedType::class, array('required' => false, 'type' => PasswordType::class,
                    'invalid_message' => 'Les mots de passe doivent correspondre',
                    'first_options' => array('label' => 'Mot de passe : '),
                    'second_options' => array('label' => 'Mot de passe (validation) :')))
                ->add('name_user', TextType::class, array('label' => "Nom :", "required" => false))
                ->add('firstname_user', TextType::class, array('label' => "Prénom :", 'required' => false))
                ->add('address1_user', TextType::class, array('label' => "Adresse :", 'required' => false))
                ->add('address2_user', TextType::class, array('label' => "Adresse :", "required" => false))
                ->add('address3_user', TextType::class, array('label' => "Adresse :", "required" => false))
                ->add('zipcode_user', TextType::class, array('label' => "Code Postal :", 'required' => false))
                ->add('city_user', TextType::class, array('label' => "Ville :", 'required' => false))
                ->add('company_name_user', TextType::class, array('label' => "Entreprise :", 'required' => false))
                ->add('num_tva_user', TextType::class, array('label' => "Numéro TVA :", 'required' => false))
                ->add('tiersPourTva_user', ChoiceType::class, array('label' => "Zone TVA :", 'choices' => array_flip($choiceTiersPourTva)))
                ->add('active_user', ChoiceType::class, array('label' => 'Compte actif ? :', 'choices' => array_flip(array(true => 'Peut se connecter', false => 'Ne peut pas se connecter')), 'attr' => array('class' => 'combobox')));
        }else{
            $form2 = $form2->add('user', ChoiceType::class, array('required' => false, 'label' => 'Utilisateur associé :', 'choices' =>array_flip( $users),'attr' => array('class' => 'combobox')));
        }
        $form2 = $form2->getForm();

        $form2->handleRequest($request);
        // handle the first form
        if ($form2->isValid()) {
            $data = $form2->getData();

            // On sauve chez gandi et chez nous, puis on retourne les infos dans la route suivante.
            $parameters = array();
            $parameters['type'] = $data['type'];
            $parameters['user'] = $data['user'];
            $parameters['company_name'] = $data['companyName'];
            $parameters['insee'] = $data['insee'];
            $parameters['num_marque'] = $data['numMarque'];
            $parameters['num_tva'] = $data['numTva'];
            $parameters['name'] = $data['name'];
            $parameters['firstname'] = $data['firstname'];
            $parameters['address'] = $data['address'];
            $parameters['zipCode'] = $data['zipCode'];
            $parameters['city'] = $data['city'];
            $parameters['state'] = $data['state'];
            $parameters['phone'] = $data['phone'];
            $parameters['fax'] = $data['fax'];
            $parameters['cellphone'] = $data['cellphone'];
            $parameters['email'] = $data['email'];
            $creationNewUser = false;
            $newIdUser = null;
            // Si l'utilisateur n'existe pas, on l'ajoute.


            $idagency = $userConnected->getUser()->agency->id;
            try {
                if ($data['user'] == null) {
                    $step =2;
                    $newIdUser = $client->createClientAgency($email, $pwd, $data['name_user'], $data['firstname_user'], $data['email_user'], $data['password_user'], $data['address1_user'], $data['address2_user'],
                        $data['address3_user'], $data['city_user'], $data['zipcode_user'], $idagency, $data['phone_user'], $data['active_user'],
                        $data['tiersPourTva_user'], $data['code_client_user'], $data['cellphone_user'], $data['workphone_user'], $data['company_name_user'], $data['num_tva_user']
                    );
                    $creationNewUser = true;
                    // $session->set('idUserSelected',$newIdUser);
                    $parameters['user'] = $newIdUser;

                }

                $step =1;
                $newContact = $client->saveContact($email, $pwd, json_encode($parameters));


                return $this->redirectToRoute("fancybox_return_contact", array('idLine' => $idCartLine, 'code' => $newContact->code, 'value' => ($newContact->code . ' (' . $newContact->name . ' ' . $newContact->firstname . ($newContact->codeFacturation ? ' ' . $newContact->codeFacturation : '') . ')')));
            } catch (\SoapFault $e) {

                if ($creationNewUser) {
                    $client->deleteUser($email, $pwd, $newIdUser);
                    $parameters['user'] = null;

                }
                $form2->addError(new FormError($e->getMessage() ));
            }
        }





        return $this->render('Contact/Fancybox/create.html.twig',
            array(
                'createContactIsPossible'=>$createContactIsPossible,
                'step'=>$step,
                'form2'=>$form2->createView(),
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('//code.jquery.com/ui/1.11.4/jquery-ui.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','js/jsContactPopin.js'),


            )
        );
    }


    /**
     * @Route("/private/contact/returnContact/{idLine}/{code}/{value}", name="fancybox_return_contact")
     */
    public function fancyReturnContact(Request $request,$idLine,$code,$value){
        //
        return $this->render('Contact/Fancybox/return.html.twig',
            array(

                'idLine'=>$idLine,
                'code'=>$code,
                'value'=>$value,
                'csss'=>array('jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css'),
                'jss'=>array('adminLTE/chosen/chosen.jquery.min.js','js/combobox.js'),

            ));
    }
    /**
     * @Route("/private/contact/closeContact", name="fancybox_close")
     */
    public function fancyCloseContact(Request $request){
        //
        return $this->render('Contact/Fancybox/close.html.twig',
            array(


                'csss'=>array('jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css'),
                'jss'=>array('adminLTE/chosen/chosen.jquery.min.js','js/combobox.js'),

            ));
    }
    /**
     * @Route("/private/contact/updateContact/{contactName}/{ndd}", name="fancybox_complete_contact")
     */
    public function fancyCompleteContact(Request $request,$contactName,$ndd){
        // récupèrer la liste des erreurs

        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        // $line = $client->getCartLine($email, $pwd, $idCartLine);
        $canAssociateDomain= json_decode($client->canAssociateDomain($contactName, $ndd));
        $countries = array("AL"=>"Albanie","DE"=>"Allemagne","AD"=>"Andorre","AN"=>"Antilles Néerlandaises","AT"=>"Autriche","BY"=>"Belarus","BE"=>"Belgique","BA"=>"Bosnie-Herzégovine","BG"=>"Bulgarie","CY"=>"Chypre","HR"=>"Croatie","CW"=>"Curacao","DK"=>"Danemark","ES"=>"Espagne","EE"=>"Estonie","FO"=>"Feroë (Iles)","FI"=>"Finlande","FR"=>"France","GI"=>"Gibraltar","GD"=>"Grenade","GL"=>"Groënland","GR"=>"Grêce","GP"=>"Guadeloupe","GG"=>"Guernesey","GF"=>"Guyane Francaise","HU"=>"Hongrie","IE"=>"Irlande","IS"=>"Islande","IT"=>"Italie","JE"=>"Jersey (Ile)","LV"=>"Lettonie","LI"=>"Liechtenstein","LT"=>"Lituanie","LU"=>"Luxembourg","MK"=>"Macédoine","MT"=>"Malte","MQ"=>"Martinique","MD"=>"Moldovie","MC"=>"Monaco","ME"=>"Monténégro","NO"=>"Norvège","NC"=>"Nouvelle Calédonie","NL"=>"Pays-Bas","BQ"=>"Pays-Bas caribéens","PL"=>"Pologne","PF"=>"Polynesie Francaise","PT"=>"Portugal","RO"=>"Roumanie","GB"=>"Royaume-Uni","RU"=>"Russie","RE"=>"Réunion","PM"=>"Saint Pierre et Miquelon","SM"=>"Saint-Marin","MF"=>"Saint-Martin","VA"=>"Saint-Siège (État de la cité du Vatican)","VC"=>"Saint-Vincent-et-Grenadines","RS"=>"Serbie et Montenegro","SK"=>"Slovaque (Rep.)","SI"=>"Slovénie","CH"=>"Suisse","SE"=>"Suède","SJ"=>"Svalbard et Île Jan Mayen","CZ"=>"Tchèque (Rep.)","TF"=>"Terres Australes Francaise","UA"=>"Ukraine","BV"=>"Île Bouvet","IM"=>"Île de Man","AX"=>"Îles Åland","AI"=>"Anguilla","AG"=>"Antigua et Barbuda","AR"=>"Argentine","AW"=>"Aruba","BS"=>"Bahamas","BB"=>"Barbade","BZ"=>"Belize","BM"=>"Bermudes","BO"=>"Bolivie","BR"=>"Brésil","CA"=>"Canada","KY"=>"Cayman (Iles)","CL"=>"Chili","CO"=>"Colombie","CR"=>"Costa Rica","CU"=>"Cuba","DO"=>"Dominicaine (Rep.)","DM"=>"Dominique","SV"=>"El Salvador","EC"=>"Equateur","US"=>"Etats-Unis d'Amerique","FK"=>"Falkland (Iles)","GU"=>"Guam","GT"=>"Guatemala","GY"=>"Guyana","GS"=>"Géorgie du Sud et les Îles Sandwich du Sud","HI"=>"Hawaï","HT"=>"Haïti","HN"=>"Honduras","JM"=>"Jamaïque","MX"=>"Mexique","MS"=>"Montserrat","NI"=>"Nicaragua","PA"=>"Panama","PY"=>"Paraguay","PN"=>"Pitcairn","PR"=>"Porto Rico","PE"=>"Pérou","BL"=>"Saint-Barthélemy","KN"=>"Saint-Kitts-et-Nevis","SX"=>"Saint-Martin (Partie Néerlandaise)","SH"=>"Sainte-Hélène","LC"=>"Sainte-Lucie","AS"=>"Samoa Américaines","ST"=>"Sao Tome-et-Principe","SL"=>"Sierra Leone","TT"=>"Trinité-et-Tobago","TC"=>"Turks et Caïcos (Iles)","UY"=>"Uruguay","VE"=>"Venezuela","VI"=>"Vierges Américaines (Iles)","VG"=>"Vierges Britanniques (Iles)","AF"=>"Afghanistan","AQ"=>"Antarctique","SA"=>"Arabie Saoudite","AM"=>"Arménie","AC"=>"Ascension","HM"=>"Australia Heard Island and McDonald Islands","AU"=>"Australie","AZ"=>"Azerbaidjan","BH"=>"Bahrein","BD"=>"Bangladesh","BT"=>"Bhoutan","BN"=>"Brunei","KH"=>"Cambodge","CN"=>"Chine","CX"=>"Christmas Island","CK"=>"Cook (Iles)","KR"=>"Corée (Rep. de)","KP"=>"Corée (Rep. Dem. Pop.)","AE"=>"Emirats Arabes Unis","FJ"=>"Fidji","GE"=>"Géorgie","HK"=>"Hong-Kong","IN"=>"Inde","ID"=>"Indonésie","IQ"=>"Irak","IR"=>"Iran (Rep. Isl.)","CC"=>"Islands Cocos (Keeling) Islands","IL"=>"Israël","JP"=>"Japon","JO"=>"Jordanie","KZ"=>"Kazakhstan","KG"=>"Kirghizistan","KI"=>"Kiribati","KW"=>"Koweït","LA"=>"Laos (Rep. Dem. Pop. du)","LB"=>"Liban","MO"=>"Macao","MY"=>"Malaisie","MV"=>"Maldives","MP"=>"Mariannes (Iles)","MH"=>"Marshall (Iles)","FM"=>"Micronésie","MN"=>"Mongolie","MM"=>"Myanmar","NR"=>"Nauru","NU"=>"Niue","NF"=>"Norfolk (Ile)","NZ"=>"Nouvelle-Zélande","NP"=>"Népal","OM"=>"Oman","UZ"=>"Ouzbekistan","PK"=>"Pakistan","PW"=>"Palau","PS"=>"Palestine","PG"=>"Papouasie-Nouvelle-Guinée","PH"=>"Philippines","QA"=>"Qatar","SB"=>"Salomon","WS"=>"Samoa-Occidental","SC"=>"Seychelles","SG"=>"Singapour","LK"=>"Sri Lanka","SR"=>"Surinam","SY"=>"Syrie","TJ"=>"Tadjikistan (Rep. du)","TW"=>"Taïwan","IO"=>"Territoire britannique de l'océan Indien","TH"=>"Thaïlande","TP"=>"Timor Oriental","TL"=>"Timor-Leste","TK"=>"Tokelau","TO"=>"Tonga","TM"=>"Turkmenistan","TR"=>"Turquie","TV"=>"Tuvalu","VU"=>"Vanuatu","VN"=>"Vietnam","WF"=>"Wallis et Futuna","YE"=>"Yémen (Rep.)","ZA"=>"Afrique du Sud","DZ"=>"Algérie","AO"=>"Angola","BW"=>"Botswana","BF"=>"Burkina Faso","BI"=>"Burundi","BJ"=>"Bénin","CM"=>"Cameroun","CV"=>"Cap-Vert","CF"=>"Centrafricaine (Rep.)","KM"=>"Comores","CG"=>"Congo","CD"=>"Congo Zaïre (Rep. Dem.)","CI"=>"Côte d'Ivoire","DJ"=>"Djibouti","EG"=>"Egypte","ZZ"=>"Equatorial Kundu","ER"=>"Erythrée","ET"=>"Ethiopie","GA"=>"Gabon","GM"=>"Gambie","GH"=>"Ghana","GN"=>"Guinée","GQ"=>"Guinée Equatoriale","GW"=>"Guinée-Bissau","KE"=>"Kenya","LS"=>"Lesotho","LR"=>"Liberia","LY"=>"Libye","MG"=>"Madagascar","MW"=>"Malawi","ML"=>"Mali","MA"=>"Maroc","MU"=>"Maurice","MR"=>"Mauritanie","YT"=>"Mayotte","MZ"=>"Mozambique","NA"=>"Namibie","NE"=>"Niger","NG"=>"Nigeria","UG"=>"Ouganda","RW"=>"Rwanda","EH"=>"Sahara Occidental","SO"=>"Somalie","SD"=>"Soudan","SS"=>"Soudan du Sud","SZ"=>"Swaziland","SN"=>"Sénégal","TZ"=>"Tanzanie","TD"=>"Tchad","TG"=>"Togo","TN"=>"Tunisie","ZM"=>"Zambie","ZW"=>"Zimbabwe");
        $form = $this->createFormBuilder();
        foreach($canAssociateDomain->otherwire as $otherwire){

            switch ($otherwire->reason) {
                case (preg_match('/BirthDepartment*/',$otherwire->reason) ? true : false) :
                    $form = $form->add('birth_department',TextType::class,array('label'=>'Code postal du lieu de naissance :'));
                    break;
                case (preg_match('/BirthDate*/',$otherwire->reason) ? true : false) :
                    $form = $form->add('birth_date','date',array('label'=>'Date de naissance :', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd',));
                    break;
                case (preg_match('/BirthCountryIso*/',$otherwire->reason) ? true : false) :
                    $form = $form->add('birth_country',ChoiceType::class,array('label'=>'Pays de naissance :' ,"choices"=>array_flip($countries),'attr'=>array('class'=>'combobox')));
                    break;
                case (preg_match('/BirthCity*/',$otherwire->reason) ? true : false) :
                    $form = $form->add('birth_city',TextType::class,array('label'=>'Ville de naissance :'));
                    break;

            }
        }
        $form = $form->add('submit',SubmitType::class,array('label'=>'Completer','attr'=>array('class'=>'btn btn-default')))->getForm();

        $form->handleRequest($request);

        if($form->isValid()){
            $data = $form->getData();
            $params = array();
            foreach($data as $key =>$value){
                if($value instanceof \DateTime){
                    $params[$key]=$value->format('Y-m-d');

                }else
                    $params[$key]=$value;
            }

            try {
                // Appel de la méthode webservice pour mettre à jour le contact
                $client->addComplementInformationContact($email, $pwd, $contactName, json_encode($params));
                // Redirige vers la page after (qui ferme le fancybox)
                return $this->redirectToRoute('fancybox_close');
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));
            }



        }

        return $this->render('Contact/Fancybox/update.html.twig',
            array(

                'form'=>$form->createView(),
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('//code.jquery.com/ui/1.11.4/jquery-ui.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','js/jsContactPopin.js'),

            )
        );


    }


}