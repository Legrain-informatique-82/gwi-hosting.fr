<?php

namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class DefaultController extends Controller
{

    /**
     * @Route("/private/", name="homepage")
     */
    public function indexAction(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $user = $userConnected->getUser();

            if ($this->isGranted('ROLE_COMPTE_EMAIL')) {
                return $this->redirectToRoute('my_email_account');
                /*} else if ($user->agency->city === null && in_array('ROLE_AGENCE', $user->roles)) {
                    return $this->redirectToRoute('complement_infos_agency'); }
                else if ($user->city === null && in_array('ROLE_AGENCE', $user->roles)) {
                    return $this->redirectToRoute('complement_infos_user');
                } else if ($user->agency->facturationBylegrain === null && in_array('ROLE_AGENCE', $user->roles)) {
                    return $this->redirectToRoute('choice_facturation_agency');*/
            } else {
                $email =  $userConnected->getEmail();
                $pwd =  $session->get('pwd');
                $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'), array('compression' =>SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));
                $totauxAchatAnneeEnCours = json_decode($client->nbAchatEtRenouvellementParMois($email,$pwd));
                $nbndds='[';
                $nbrenewndds='[';
                $nbinstances='[';
                $nbrenewinstances='[';
                foreach($totauxAchatAnneeEnCours as $m){
                    $nbndds.=$m->createndd.',';
                    $nbrenewndds.=$m->renewndd.',';
                    $nbinstances.=$m->instance.',';
                    $nbrenewinstances.=$m->renewinstance.',';
                }
                $nbndds=substr($nbndds,0,-1);
                $nbrenewndds=substr($nbrenewndds,0,-1);
                $nbinstances=substr($nbinstances,0,-1);
                $nbrenewinstances=substr($nbrenewinstances,0,-1);

                $nbndds.=']';
                $nbrenewndds.=']';
                $nbinstances.=']';
                $nbrenewinstances.=']';



                $urlApp = $user->urlApp;
                $seeDnsUpd=false;
                $subdomain='';
                if($urlApp!=null){
                    $tmp = explode('.',str_replace(array('http://','https://'),'',$urlApp));
                    if($tmp[count($tmp)-2].'.'.$tmp[count($tmp)-1]!=='gwi-hosting.fr')$seeDnsUpd=true;

                    $subdomain=$tmp[count($tmp)-3];
                }





                return $this->render('Dashboard/dashboard.html.twig',
                    array(
                        'nbndds'=>$nbndds,
                        'nbrenewndds'=>$nbrenewndds,
                        'nbinstances'=>$nbinstances,
                        'nbrenewinstances'=>$nbrenewinstances,
                        'iduser'=>$user->id,
                        'classBody'=>'skin-blue sidebar-mini',
                        'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                        'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/chartjs/Chart.min.js','adminLTE/js/dashboard.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','js/jsContactPopin.js'),
                        'seeDnsUpd'=>$seeDnsUpd,
                        'subdomain'=>$subdomain,
                        'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                        'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),


                    )
                );


                //  return $this->redirectToRoute('ndds_user');

            }


    }

    /**
     * @Route("/private/zipCode/add/", name="addZipCode")
     */
    public function createZipCodeAction(Request $request)
    {
        $result='';
        // On initialise notre objet ZipCodeApi
        $zipCode = new ZipCodeApi();
        // On créé l'objet form à partir du formBuilder (En passant en param l'objet)
        $form = $this->createForm(new AddZipCodeType(), $zipCode);

        if ($request->getMethod() == 'POST') { // Si on a soumis le formulaire

            $form->handleRequest($request);
            if ($form->isValid()) {
                try{
                     $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                    $idZipCode = $client->createZipCode('a','a',$zipCode->getName());

                    $result = "L'id est : ".$idZipCode->getId();
                    $zipCode->setName('');

                } catch (\SoapFault $e) {
                    $result = $e->getMessage();
                }
            }
        }
        return $this->render('default/testform.html.twig',array('form' => $form->createView(),'result'=>$result));


    }
    /**
     * @Route("/private/zipCode/list/", name="listZipCodes")
     */
    public function listZipCodesAction(){
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $listZipCodes = $client->listZipCodes('a','a');

        foreach($listZipCodes->item as $zipCode){
            echo $zipCode->getName().'<br>';
        }
    }
    /**
     * @Route("/private/city/add/", name="addCity")
     */
    public function createCityAction(Request $request)
    {

        $result='';
        // On initialise notre objet ZipCodeApi
        $city = new CityApi();
        // On créé l'objet form à partir du formBuilder (En passant en param l'objet)
        $form = $this->createForm(new AddCityType(), $city);

        if ($request->getMethod() == 'POST') { // Si on a soumis le formulaire

            $form->handleRequest($request);
            if ($form->isValid()) {
                try{
                     $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                    $idCity = $client->createCity('a','a',$city->getName());
                    $result = "L'id est : ".$idCity->getId();
                    $city->setName('');

                } catch (\SoapFault $e) {
                    $result = $e->getMessage();
                }
            }
        }
        return $this->render('default/testform.html.twig',array('form' => $form->createView(),'result'=>$result));
    }

    /**
     * @Route("/private/city/addZipCode/", name="cityAddZipCode")
     */
    public function cityAddZipCodeAction(Request $request)
    {
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $zipcodesApi = $client->listZipCodes('a','a');
        $arrayZipCodes = array();
        foreach($zipcodesApi->item as $zc){
            $arrayZipCodes[$zc->getId()]=$zc->getName();
        }
        $citiesApi = $client->listCities('a','a');
        $arrayCities = array();
        foreach($citiesApi->item as $c){
            $arrayCities[$c->getId()]=$c->getName();
        }

        $defaultData = array();
        $form = $this->createFormBuilder($defaultData)
            -> add('zipCodes', 'choice', array(
                'choices'   => $arrayZipCodes,
                'required'  => true,
                'label'=> "Codes postaux : "
            ))
            -> add('cities', 'choice', array(
                'choices'   => $arrayCities,
                'required'  => true,
                'label'=> "Ville : "
            ))

            ->add('save', 'submit',array('label'=>'Associer'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // Les données sont un tableau avec les clés "name", "email", et "message"
            $data = $form->getData();

            $client->associateZipCodeAndCity('a', 'a', $data['zipCodes'], $data['cities']);

        }
        return $this->render('forms/associateZipCodeAndCity.html.twig',array('form' => $form->createView()));

    }


}
