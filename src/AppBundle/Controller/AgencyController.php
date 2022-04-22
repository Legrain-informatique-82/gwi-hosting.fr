<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 30/06/15
 * Time: 09:37
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Url;


class AgencyController extends Controller{


    /**
     * @Route("/private/agency/set_url_app",name="agency_set_url_app")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function setUrlAppAgencyAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Adresse de l\'application','param'=>array());

        $choiceProtocol = array(/*'https://'=>'https://',*/'http://'=>'http');
        $choiceOptions = array('Option 1 : Choississez un nom de domaine sur gwi-hosting.fr'=>1,'Option 2 : Choississez un nom de domaine sur votre site Internet'=>2);

        $agency = $userConnected->getUser()->agency;

        if($agency->website==null) {

            $website = 'votresiteinternet.fr';
        }else{

            $tmp = explode('.',str_replace(array('http://','https://'),'',$agency->website));
            $website =   $tmp[count($tmp)-2].'.'.$tmp[count($tmp)-1];
        }

        $form = $this->createFormBuilder()
            ->add('options',ChoiceType::class,array('label'=>' ','choices'=>$choiceOptions,'data'=>1,'expanded'=>true))
            ->add('protocol1',ChoiceType::class,array('label'=>' ','choices'=>$choiceProtocol,'data'=>'http://'))
            ->add('subdomain1',TextType::class,array('label'=>' ','data'=>' '))
            ->add('domain1',TextType::class,array('label'=>' ','data'=>'gwi-hosting.fr',"disabled"=>true))
            ->add('protocol2',ChoiceType::class,array('label'=>' ','choices'=>$choiceProtocol,'data'=>'http://'))
            ->add('subdomain2',TextType::class,array('label'=>' ','data'=>' '))
            ->add('domain2',TextType::class,array('label'=>' ','data'=>$website))
            ->add('submit',SubmitType::class,array('label'=>'Parametrer','attr'=>array('class'=>'btn btn-default')))
            ->getForm();

        $form->handleRequest($request);
        if($form->isValid()) {
            $data = $form->getData();

            if($data['options']==1){
                $protocol = $data['protocol1'];
                $subdomain =  urlencode($data['subdomain1']);
                $domain = 'gwi-hosting.fr';
            }else{
                $protocol = $data['protocol2'];
                $subdomain = urlencode($data['subdomain2']);
                $domain = $data['domain2'];
            }
            $client->setUrlApp($email,$pwd,$protocol.'://'.$subdomain.'.'.$domain);
            return $this->redirectToRoute('homepage');

        }

        return $this->render('Agency/Forms/set_url_app.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>'Complements d\'informations sur votre agence',
            'jss'=>array('adminLTE/js/app.min.js','js/setUrlApp.js'),
            'name'=>$email,
            'form'=>$form->createView(),
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

        ));
    }

    /**
     * @Route("/private/agency/complement_infos",name="complement_infos_agency")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function complementInfosAgencyAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Complements d\'informations agence','param'=>array());

        $agency = $userConnected->getUser()->agency;

        $filename=$agency->id.'.jpeg';
        $url_logo='/images/logos/'.$filename;
        $logo_exist = file_exists($this->getParameter('logos_directory').'/'.$filename);


        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=> 'Nom :','data'=>$agency->name))
            ->add('siret',TextType::class,array('label'=> 'Siret :','data'=>$agency->siret))
            ->add('address1',TextType::class,array('label'=> 'Adresse :','data'=>$agency->address1))
            ->add('address2',TextType::class,array('label'=> 'Adresse :','data'=>$agency->address2,'required'=>false))
            ->add('address3',TextType::class,array('label'=> 'Adresse :','data'=>$agency->address3,'required'=>false))
            ->add('zipCode',TextType::class,array('label'=> 'Code postal :','data'=>($agency->zipCode==null?null:$agency->zipCode->name)))
            ->add('city',TextType::class,array('label'=> 'Ville :','data'=>($agency->city==null?null:$agency->city->name)))
            ->add('phone',TextType::class,array('label'=> 'Téléphone :','data'=>$agency->phone,'required'=>false))

            ->add('email',EmailType::class,array('label'=> 'E-mail :','data'=>$email))
            ->add('website',UrlType::class,array('label'=> 'Site Internet :','data'=>$agency->website,'required'=>false))
            ->add('descriptionHtml',TextareaType::class,array('attr'=>array('class'=>'textarea'),'label'=> 'Description de l\'agence :','data'=>$agency->descriptionHtml,'required'=>false))

            ->add('logo', FileType::class, array('label' => 'Logo (jpg)','required'=>false,'constraints'=>array(new Image(array('mimeTypes'=>'image/jpeg','mimeTypesMessage'=>'Le format de l\'image doit être jpg')))))

            ->add('submit',SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();
            // Appel du ws pour charger le choix de l'utilisateur. (Retourne une erreur si choix déjà fait)
            try {
                // sauvegarde du logo
                // $file stores the uploaded PDF file
                $file = $data['logo'];
                if($file!=null) {
                    // Generate a unique name for the file before saving it
                    $fileName = $agency->id . '.' . $file->guessExtension();

                    // Move the file to the directory where brochures are stored
                    $file->move(
                        $this->getParameter('logos_directory'),
                        $fileName
                    );

                    // Suppression de l'image cache quand on modifie le logo
                    $this->get('liip_imagine.cache.manager')->remove($url_logo, 'logo_agency');


                }

                $client->complementInfosAgency($email, $pwd,  $data['name'],$data['siret'],$data['address1'],$data['address2'],$data['address3'],$data['zipCode'],$data['city'],$data['phone'],$data['email'],$data['website']);


                $descriptionHtml=$data['descriptionHtml']=='<p><br></p>'?'':$data['descriptionHtml'];
                $client->setDescriptionAgency($email, $pwd,$descriptionHtml);

                //  redirection vers homepage
              //  dump($data);
                return $this->redirectToRoute('homepage');


            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));

            }




        }

        return $this->render('Agency/Forms/complements_infos_agence.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css'),
            'h1'=>'Complements d\'informations sur votre agence',
            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'form'=>$form->createView(),
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,



            'logo_exist'=>$logo_exist,
            'url_logo'=>$url_logo,
        ));
    }
    /**
     * @Route("/private/agency/choice-facturation",name="choice_facturation_agency")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function choiceFacturationAgencyAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));


        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Choix du mode de facturation','param'=>array());

        $choices = array(false=>'Je souhaite être payé par mes clients',true=>'Je laisse Legrain gérer la facturation');
        $form = $this->createFormBuilder()
            ->add('choice',ChoiceType::class,array('label'=>'Mode de facturation','expanded'=>true,'data'=>1,'choices'=>array_flip($choices)))
            ->add(SubmitType::class,SubmitType::class,array('label'=>'Valider','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();
            // Appel du ws pour charger le choix de l'utilisateur. (Retourne une erreur si choix déjà fait)
            try {
                $client->choseFacturationMode($email, $pwd, (bool)$data['choice']);
                // Si facturation par client (data = 0), redirection vers la page permettant de saisir ses infos bancaires,
                // dans l'autrez cas, redirection vers homepage
                return $this->redirectToRoute(($data['choice']==false?'param-infos-paiements':'homepage'));
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));

            }




        }

        return $this->render('Agency/Forms/facturationByLegrain.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>'Choix du mode de facturation',
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
     * @Route("/private/agency/param-infos-paiements",name="param-infos-paiements")
     * @Security("has_role('ROLE_AGENCE')")
     */
    public function setInfosPaiementsAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $agency=$userConnected->getUser()->agency;
        // Appel de l'api.
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));




        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'paramètres de paiements','param'=>array());


        $form = $this->createFormBuilder()
            ->add('cheque',TextareaType::class,array('label'=>'Adresse d\'envoi du chèque :','data'=>$agency->infosCheque))
            ->add('virement',TextareaType::class,array('label'=>'Infos virement bancaire :','data'=>$agency->infosVirement))
            ->add(SubmitType::class,SubmitType::class,array('label'=>'Sauvegarder','attr'=>array('class'=>'btn btn-default btn-lgr btn-lgr-save')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            $data = $form->getData();

            try {
                $client->updateParamPaiements($email,$pwd,$data['cheque'],$data['virement']);
            }catch(\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));

            }
            // Si facturation par client (data = 0), redirection vers la page permettant de saisir ses infos bancaires,
            // dans l'autrez cas, redirection vers homepage
            return $this->redirectToRoute('homepage');



        }

        return $this->render('Agency/Forms/param-paiements.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),
            'h1'=>'Informations de facturation',
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
     * @Route("/private/agency",name="list-agency")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function listAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

        // Appel de l'api. récupération de la liste d'agence ( si admin).

        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $list = $client->listAgencies($email,$pwd);

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Liste des agences','param'=>array());

        return $this->render('Agency/List/listAgency.html.twig',array(
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'agencies'=> $list,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }

    /**
     * @Route("/private/agency/delete/{idagency}",name="delete-agency")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function deleteAction(Request $request,$idagency)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email = $userConnected->getEmail();
        $pwd = $session->get('pwd');

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'list-agency','label'=>'Liste des agences','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Supprimer une agence','param'=>array());

        $form = $this->createFormBuilder()
            ->add('delete',SubmitType::class,array('label'=>'Supprimer','attr'=>array('class'=>'btn btn-danger')))
            ->add('cancel',SubmitType::class,array('label'=>'Annuler','attr'=>array('class'=>'btn btn-default')))
            ->getForm();


        $form->handleRequest($request);
        if($form->isValid()){
            if ($form->get('delete')->isClicked()) {
                if($userConnected->getUser()->agency->id == $idagency) {
                    // error
                    $form->addError(new FormError('Impossible de supprimer sa propre agence'));

                }else{
                    // del
                    try{
                        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                        $client->deleteAgency($email,$pwd,$idagency);
                        return $this->redirectToRoute('list-agency');

                    }catch (\SoapFault $e){
                        $form->addError(new FormError($e->getMessage()));

                    }

                }


            }

            if ($form->get('cancel')->isClicked()) {
                return $this->redirectToRoute('list-agency');
            }
        }

        return $this->render('Agency/Forms/delAgency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
    /**
     * @Route("/private/agency/create",name="create-agency")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function createAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'list-agency','label'=>'Liste des agences','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Ajouter une agence','param'=>array());

        // FRM creation agence
        $form = $this->createFormBuilder( )
            ->add('name',TextType::class ,array('label'=>"Nom de l'agence :"))
            ->add('siret',TextType::class,array('label'=>"SIRET de l'agence :"))
            ->add('email',TextType::class,array('label'=>"E-mail de contact  de l'agence :","constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone',TextType::class,array('label'=>"Téléphone de contact  de l'agence :"))
            ->add('website',TextType::class,array('label'=>"Site Internet  de l'agence :",'constraints'=>array(new Url(array('message'=>"'{{ value }}' n'est pas une URL valide")))))
            ->add('address1',TextType::class,array('label'=>"Adresse  de l'agence :"))
            ->add('address2',TextType::class,array('label'=>"Adresse  de l'agence :","required"=>false))
            ->add('address3',TextType::class,array('label'=>"Adresse  de l'agence :","required"=>false))
            ->add('zipcode',TextType::class,array('label'=>"Code Postal  de l'agence :"))
            ->add('city',TextType::class,array('label'=>"Ville de l'agence:"))
            //->add('facturationBylegrain','choice',array("required"=>false,'label'=>"Facturation par legrain ? :","expanded"=>true,"choices"=>array(0=>'Non',1=>'Oui')))

            ->add('save',SubmitType::class,array('label'=>'Sauvegarder','attr'=>array('class'=>" btn btn-success")))
            ->getForm();

        $form->handleRequest($request);


        if($form->isValid()){
            try{

                $data = $form->getData();
                // dump($data['facturationBylegrain']);
                $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                $agency = $client->createAgency($email,$pwd,$data['name'],$data['siret'],$data['address1'],$data['address2'],$data['address3'],$data['city'],$data['zipcode'],$data['phone'],$data['email'],$data['website']);


                return $this->redirectToRoute('list-agency');
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));

            }
        }
        return $this->render('Agency/Forms/agency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>true,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }

    /**
     * @Route("/private/agency/update/{idAgency}",name="update-agency")
     * @Route("/private/myagency",name="myagency",defaults={"idAgency"=0})
     * @Security("has_role('ROLE_LEGRAIN') || has_role('ROLE_AGENCE')")
     */
    public function updateAction(Request $request,$idAgency){
//        $requestRoute = $this->container->get('request');
//        $routeName = $requestRoute->get('_route');
        $routeName =$request->attributes->get('_route');
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
        $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;

        if ($routeName == 'update-agency') {

            $defaultData = $client->getAgency($email, $pwd, $idAgency);


            $breadcrumb = array();
            $breadcrumb[] = array('url' => 'list-agency', 'label' => 'Liste des agences', 'param' => array());
            $breadcrumb[] = array('url' => '', 'label' => 'Modifier l\'agence : ' . $defaultData->name, 'param' => array());
        }else{
            $idAgency = $userConnected->getUser()->agency->id;

            $defaultData = $client->getAgency($email, $pwd, $idAgency);


            $breadcrumb = array();
            $breadcrumb[] = array('url' => '', 'label' => 'Modifier mon agence ' , 'param' => array());
        }
        // FRM creation agence
        //dump($defaultData);
        $form = $this->createFormBuilder( )
            ->add('name',TextType::class,array('label'=>"Nom de l'agence :","data"=>$defaultData->name))
            ->add('siret',TextType::class,array('label'=>"SIRET de l'agence :","data"=>$defaultData->siret))
            ->add('email',TextType::class,array('label'=>"E-mail de contact :","data"=>$defaultData->email,"constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone',TextType::class,array('label'=>"Téléphone de contact :","data"=>$defaultData->phone))
            ->add('website',TextType::class,array('label'=>"Site Internet :","data"=>$defaultData->website,'constraints'=>array(new Url(array('message'=>"'{{ value }}' n'est pas une URL valide")))))
            ->add('address1',TextType::class,array('label'=>"Adresse :","data"=>$defaultData->address1))
            ->add('address2',TextType::class,array('label'=>"Adresse :","required"=>false,"data"=>$defaultData->address2))
            ->add('address3',TextType::class,array('label'=>"Adresse :","required"=>false,"data"=>$defaultData->address3))
            ->add('zipcode',TextType::class,array('label'=>"Code Postal :","data"=>($defaultData->zipCode==null?null:$defaultData->zipCode->name)))
            ->add('city',TextType::class,array('label'=>"Ville :","data"=>($defaultData->city==null?null:$defaultData->city->name)))
            // ->add('facturationBylegrain','choice',array('label'=>"Facturation par legrain ? :","expanded"=>true,"choices"=>array(0=>'Non',1=>'Oui'),"data"=>$defaultData->facturationBylegrain==null?0:($defaultData->facturationBylegrain?1:0)))
            ->add('useTva',ChoiceType::class,array('label'=>"Assujetti à la tva  ? :","expanded"=>true,"choices"=>array('Oui'=>true,'Non'=>false),"data"=>$defaultData->useTva))
            ->add('save',SubmitType::class,array('label'=>'Mettre à jour','attr'=>array('class'=>" btn btn-warning")))
            ->getForm();

        $form->handleRequest($request);


        if($form->isValid()){
            try{
                $data = $form->getData();
                //$client = $this->container->get('besimple.soap.client.gwihostingapi');
                $client->updateAgency($email,$pwd,$idAgency,$data['name'],$data['siret'],$data['address1'],$data['address2'],$data['address3'],$data['city'],$data['zipcode'],$data['phone'],$data['email'],$data['website']/*,$data['facturationBylegrain']*/,$data['useTva']);
                if ($routeName == 'update-agency') {
                    return $this->redirectToRoute('list-agency');
                }else{
                    return $this->redirectToRoute('homepage');
                }
            }catch (\SoapFault $e){
                $form->addError(new FormError($e->getMessage()));

            }
        }
        return $this->render('Agency/Forms/agency.html.twig',array(
            'form'=>$form->createView(),
            'result'=>'test',
            'add'=>false,
            'classBody'=>'skin-blue sidebar-mini',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),

            'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/chart.js','adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
            'name'=>$email,
            'iduser'=> $userConnected->getUser()->id,
            'breadcrumb'=>$breadcrumb,
            'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
            'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
        ));
    }
}