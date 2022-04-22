<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 22/03/16
 * Time: 15:24
 */
namespace AppBundle\Traits;

use Symfony\Component\HttpFoundation\Request;

trait Crypt {
   private function crypter($need) {
        $key = "x9f5h1t8y9ahtmx9";
        $iv_size = mcrypt_get_iv_size(MCRYPT_XTEA, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
       // return urlencode(base64_encode(mcrypt_encrypt(MCRYPT_XTEA, $key, $need, MCRYPT_MODE_ECB, $iv)));
       return str_replace(array('+', '/'), array('-', '_'), base64_encode(mcrypt_encrypt(MCRYPT_XTEA, $key, $need, MCRYPT_MODE_ECB, $iv)));
   }

   private function decrypter($need) {
        $need = base64_decode(str_replace(array('-', '_'), array('+', '/'), $need));
        $key = "x9f5h1t8y9ahtmx9";
        $iv_size = mcrypt_get_iv_size(MCRYPT_XTEA, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypt = mcrypt_decrypt(MCRYPT_XTEA, $key, $need, MCRYPT_MODE_ECB, $iv);
        return $decrypt;
    }
}