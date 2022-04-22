<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 11/06/15
 * Time: 15:57
 */


namespace AppBuncle\Security\Service;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class PasswordEncoder implements PasswordEncoderInterface {



    public function encodePassword( $raw, $salt ) {
        return sha1($salt.$raw.$salt);
    }

    public function isPasswordValid( $encoded, $raw, $salt ) {
        return $encoded === $this->encodePassword( $raw, $salt );
    }

}