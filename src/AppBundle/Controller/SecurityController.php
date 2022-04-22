<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 11/06/15
 * Time: 09:48
 */
namespace AppBundle\Controller;

use AppBundle\Security\WebserviceUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Form\FormError;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class SecurityController extends Controller
{


    /**
     * @Route("/private/register",name="register")
     */
    public function registerAction(Request $request){
        $session = $request->getSession();

        $form = $this->createFormBuilder()
            ->add('email_user',TextType::class,array('label'=>"E-mail* :","constraints"=>array(new Email(array('message'=> "'{{ value }}' n'est pas un email valide.", 'checkMX'=> true)))))
            ->add('phone_user',TextType::class,array('label'=>"Téléphone* :"))
            ->add('cellphone_user',TextType::class,array('label'=>"Téléphone portable :",'required'=>false))
            ->add('workphone_user',TextType::class,array('label'=>"Téléphone bureau :",'required'=>false))
            ->add('password',RepeatedType::class,array( 'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre',
                'first_options'  => array('label' => 'Mot de passe* : '),
                'second_options' => array('label' => 'Mot de passe (validation)* :' )))
            ->add('name_user',TextType::class,array('label'=>"Nom* :"))
            ->add('firstname_user',TextType::class,array('label'=>"Prénom* :"))

            ->add('address1_user',TextType::class,array('label'=>"Adresse* :"))
            ->add('address2_user',TextType::class,array('label'=>"Adresse :","required"=>false))
            ->add('address3_user',TextType::class,array('label'=>"Adresse :","required"=>false))
            ->add('zipcode_user',TextType::class,array('label'=>"Code Postal* :"))
            ->add('city_user',TextType::class,array('label'=>"Ville* :"))

            ->add('company_name',TextType::class,array('label'=>"Entreprise :",'required'=>false))
            ->add('num_tva',TextType::class,array('label'=>"Numéro TVA :",'required'=>false))
//            ->add('tiersPourTva','choice',array('label'=>"Tiers pour TVA :",'choices'=>$choiceTiersPourTva))
//            ->add('agencies', 'choice', array(
//                'choices'   => $choice,
//                'label'  => 'Agence : ',
//            ))
            ->add('save',SubmitType::class,array('label'=>'M\'inscrire','attr'=>array('class'=>"btn btn-success btn-block btn-flat")))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $data = $form->getData();
                $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));

                $app_url  ='http://'.$request->getHost();

                $user = $client->registerClientAgency($app_url,$data['name_user'],$data['firstname_user'],$data['email_user'],$data['password'],$data['address1_user'],$data['address2_user'],
                    $data['address3_user'],$data['city_user'],$data['zipcode_user'],$data['phone_user'],
                    $data['cellphone_user'],$data['workphone_user'],$data['company_name'],$data['num_tva']
                );

                $wsUser = new WebserviceUser($user);

                // Création d'un nouveau token basé sur l'utilisateur qui vient de s'inscrire
                $token = new UsernamePasswordToken($wsUser, null, 'main', $wsUser->getRoles());
                // on passe le mdp en session afin qu'il puisse être appelé par la suite par le webservice
                $session->set('pwd',$data['password']);
                // On passe le token créé au service security context afin que l'utilisateur soit authentifié

                $this->get('security.token_storage')->setToken($token);
                return $this->redirectToRoute('homepage');

            } catch (\SoapFault $e) {
                $form->addError(new FormError($e->getMessage()));


            }
        }

        return $this->render('forms/register.html.twig',  array(
            //  'username' => $username,
            // 'error'         => $error,
            'form' => $form->createView(),
            'classBody' => 'login-page',
            'csss' => array('adminLTE/plugins/iCheck/square/blue.css'),
            'jss' => array('adminLTE/plugins/iCheck/icheck.js', 'adminLTE/js/loadplugins.js'),
            'url_logo'=> '',
            'logo_exist'=> false,
        ));

    }

    /**
     * @Route("/private/password-forgotten",name="password_forgotten")
     */
    public function passwordForgottenAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('username', EmailType::class, array('required' => false, 'label' => 'Votre identifiant (e-mail) : '))
            ->add('submit', SubmitType::class, array('label' => 'Récupérer mon mot de passe', 'attr' => array('class' => 'btn btn-primary btn-block btn-flat">')))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $data = $form->getData();
                $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
                if ($client->getMyPassword($data['username']))
                    $form->addError(new FormError('Un e-mail contenant votre nouveau mot de passe vous a été envoyé.'));
                else
                    $form->addError(new FormError('Une erreur est survenue, merci de rééssayer ultérieurement.'));


            } catch (\SoapFault $e) {
                $form->addError(new FormError($e->getMessage()));


            }
        }
        return $this->render('forms/password_forgotten.html.twig',  array(
            //  'username' => $username,
            // 'error'         => $error,
            'form' => $form->createView(),
            'classBody' => 'login-page',
            'csss' => array('adminLTE/plugins/iCheck/square/blue.css'),
            'jss' => array('adminLTE/plugins/iCheck/icheck.js', 'adminLTE/js/loadplugins.js'),
            'url_logo'=> '',
            'logo_exist'=> false,
        ));

    }
    /**
     * @Route("/login", name="login")
     * @Template("forms/login.html.twig")
     */
    public function loginAction(Request $request){
        /*
        $session = $request->getSession();


         $token = $this->get('security.context');


        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);

        $session = $request->getSession();

        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }


        $params = array(
            "last_username" => $session->get(SecurityContext::LAST_USERNAME),
            "error" => $error,
            'classBody'=>'login-page',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
            'jss'=>array('adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js')
        );

        return $params;
        */
        $helper = $this->get('security.authentication_utils');

        return $this->render('forms/login.html.twig', array(
            'last_username' => $helper->getLastUsername(),
            'error'         => $helper->getLastAuthenticationError(),
            'classBody'=>'login-page',
            'csss'=>array('adminLTE/plugins/iCheck/square/blue.css'),
            'jss'=>array('adminLTE/plugins/iCheck/icheck.js','adminLTE/js/loadplugins.js'),
            'url_logo'=> '',
            'logo_exist'=> false,
        ));
    }

    /**
     * @Method({"POST"})
     * @Route("/login_check", name="login_check")
     */
    public function check()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    /**
     * @Method({"GET"})
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }

}