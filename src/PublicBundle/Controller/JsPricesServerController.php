<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 13/04/16
 * Time: 15:38
 */

namespace PublicBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;


class JsPricesServerController extends Controller{


    /**
     * @Route("/js/get-price-puissance", name="js-get-price-puissance")
     */
    public function getPricePuissanceAction(Request $request){
        $idProduct   = $request->get('idproduct');
        $session = $request->getSession();
        $vals = $session->get('prix_serveur');

//        return new JsonResponse(array('price' => $vals['puissance'][$idProduct]));
        return new Response($vals['puissance'][$idProduct]);
    }

    /**
     * @Route("/js/get-price-hdd", name="js-get-price-hdd")
     */
    public function getPriceHddAction(Request $request){
        $idProduct   = $request->get('idproduct');
        $session = $request->getSession();
        $vals = $session->get('prix_serveur');
        return new Response($vals['hdd'][$idProduct]);
    }

 /**
     * @Route("/js/get-price-nbre-vhosts", name="js-get-price-nbre-vhosts")
     */
    public function getPriceNbreVhostsAction(Request $request){
        $idProduct   = $request->get('idproduct');
        $session = $request->getSession();
        $vals = $session->get('prix_serveur');
        return new Response($vals['nbreVhosts'][$idProduct]);
    }

/**
     * @Route("/js/get-price-save-auto", name="js-get-price-save-auto")
     */
    public function getPriceSaveAutoAction(Request $request){
        $idProduct   = $request->get('idproduct');
        $idTotalHdd   = $request->get('idTotalHdd');
        $session = $request->getSession();
        $vals = $session->get('prix_serveur');
        $arrayCorrespondanceIdsToNbGo = $session->get('arrayCorrespondanceIdsToNbGo');

        $result = $vals['saveAuto'][$idProduct] * .3*$arrayCorrespondanceIdsToNbGo[$idTotalHdd];
//        return new Response($vals['saveAuto'][$idProduct]);
        return new Response($result);
    }

}