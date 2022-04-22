<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ChangelogController extends Controller
{


    /**
     * @Route("/private/changelog", name="get_changelog")
     */
    public function getChangelogAction(Request $request)
    {
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email = $userConnected->getEmail();
        $pwd = $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;
        $changelog = json_decode($client->getChangelog($email,$pwd));
        $iduser=$userConnected->getUser()->id;

        $breadcrumb=array();
        $breadcrumb[]=array('url'=>'','label'=>'Nouveautés de l\'application','param'=>array());

        $categories = array();
        if(empty($changelog->categories->item)){
            $tmp=array();
            $tmp['id']=$changelog->id;
            $tmp['title']=$changelog->name;
            $tmp['articles']=property_exists($changelog->articles,'item')?(is_array($changelog->articles->item)?$changelog->articles->item:array($changelog->articles->item)):array();
            $categories[]=$tmp;
            //echo 'pas de sous cat : '.$changelog->name;
        }else{
            //echo 'sous cat : '.$changelog->name;
            //var_dump($changelog->categories );
            foreach($changelog->categories->item as $c){
               // echo '<hr>'.$c->name;
               // var_dump($c);
                $tmp=array();
                $tmp['id']=$c->id;
                $tmp['title']=$c->name;
                $tmp['articles']=property_exists($c->articles,'item')?(is_array($c->articles->item)?$c->articles->item:array($c->articles->item)):array();
                $categories[]=$tmp;
            }
        }
//getChangelog
        return $this->render('Changelog/detail.html.twig',
            array(
                'breadcrumb' => $breadcrumb,
                'classBody' => 'skin-blue sidebar-mini',
                'name' => $email,
                'h1' => "Nouveautés de l'application",
                'iduser' => $iduser,
                'categories'=>$categories,
                'csss' => array('adminLTE/plugins/iCheck/square/blue.css', '//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss' => array('adminLTE/js/app.min.js', 'adminLTE/plugins/iCheck/icheck.js', '//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js' ,'adminLTE/js/loadplugins.js'),
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),

            ));
    }
}