<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 01/03/16
 * Time: 15:53
 */

namespace AppBundle\Traits;

use Symfony\Component\HttpFoundation\Request;

trait Referer {
    private function getRefererParams(Request $request) {
      //  $request = $this->getRequest();

        $referer = $request->headers->get('referer');
        $baseUrl = $request->getSchemeAndHttpHost() .$request->getBaseUrl();


        $lastPath = substr($referer, strpos($referer, $baseUrl) + strlen($baseUrl));

        return $this->get('router')->getMatcher()->match($lastPath);
    }
}