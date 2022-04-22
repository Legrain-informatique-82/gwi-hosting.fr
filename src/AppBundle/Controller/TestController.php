<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 08/03/16
 * Time: 08:38
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\DebugClassLoader;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Traits\Referer;


class TestController extends Controller
{
    use Referer;

    /**
     * @Route("/test/init", name="test_init")
     */
    public function indexAction(Request $request){
        return $this->render('Test/init.html.twig',
            array(

            )
        );

    }
    /**
     * @Route("/test/redirect", name="test_redirect")
     */
    public function redirectAction(Request $request){


        $params = $this->getRefererParams($request);
        //$logger->error('An error occurred');
            $options = array();
            foreach ($params as $key => $value){
                if($key!='_route')
                    $options[$key]=$value;
            }

           /* return $this->redirect($this->generateUrl(
                $params['_route'],
                $options

            ));
           */
        return $this->redirectToRoute($params['_route'], $options);
    }



}