<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 12/06/15
 * Time: 09:27
 */

namespace AppBundle\Security\Encoder;

use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class LgrEncoder implements PasswordEncoderInterface {



    public function encodePassword( $raw, $salt ) {
        return sha1($salt.$raw.$salt);
    }

    public function isPasswordValid( $encoded, $raw, $salt ) {
        // Set le password saisi par l'utilisateur en session
        $session = new Session();
        $session->set('pwd', $raw);
        return $encoded === $this->encodePassword( $raw, $salt );
    }

}