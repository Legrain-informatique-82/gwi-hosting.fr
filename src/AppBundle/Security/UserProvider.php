<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 10/06/15
 * Time: 15:27
 */

namespace AppBundle\Security;


use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\DisabledException;
use Symfony\Component\Security\Core\Exception\LockedException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserProvider implements UserProviderInterface
{
    private $client;
    public function __construct($wsdl) {

        $this->client  = new \Zend\Soap\Client($wsdl, array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));



        /*
        $opts = array(
            'ssl' => array('ciphers'=>'RC4-SHA', 'verify_peer'=>false, 'verify_peer_name'=>false)
        );
        $params = array ('encoding' => 'UTF-8', 'verifypeer' => false, 'verifyhost' => false, 'soap_version' => SOAP_1_2, 'trace' => 1, 'exceptions' => 1, "connection_timeout" => 180, 'stream_context' => stream_context_create($opts) );
        $this->client =  new \SoapClient ($wsdl, $params );
*/


    }

    public function loadUserByUsername($username)
    {

        $client = $this->client;
        //var_dump($client);

        //$client = $this->container->get('besimple.soap.client.gwihostingsecurityapi');
        try {
            $password='aiPaishaiy9Eidohm7oobeec7Ci2izaebaegho8moukaewaetahzau2ha8Iedahthai1liNai2aM3olielie8uVae9hee1Iev4c';

            $userData = $client->login($username,$password);

            if(!$userData->active) throw new DisabledException("Votre compte n'est pas actif.");

            $wsUser=new WebserviceUser( $userData );
            // throw new \Exception(json_encode($wsUser));

            return $wsUser;
        }catch (\SoapFault $e) {

            switch ($e->faultcode) {
                case 'BadCredentialsException':
                    throw new BadCredentialsException("Identifiant inconnu.");
                    break;
                case 'DisabledException':
                    throw new LockedException("Le compte est désactivé.");
                    break;
                default:
                    throw new \Exception($e->getMessage());
                    break;
            }

            throw new \Exception( $e->getMessage() );
        }

    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'AppBundle\Security\WebServiceUser';
    }
}