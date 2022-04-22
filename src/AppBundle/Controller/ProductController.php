<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 15/06/15
 * Time: 09:17
 */
namespace AppBundle\Controller;

use AppBundle\Api\CityApi;
use AppBundle\Api\ZipCodeApi;
use AppBundle\AppBundle;
use AppBundle\Form\Type\AddZipCodeType;
use AppBundle\Form\Type\AddCityType;
use BeSimple\SoapCommon\Type\KeyValue\DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Acl\Exception\Exception;


class ProductController extends Controller{

    /**
     * @Route("/private/administrator/list-products/update/{idproduct}", name="update-product")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function updateProductAction(Request $request,$idproduct){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $breadcrumb=array();

        $breadcrumb[]=array('url'=>'list-products','label'=>'Liste des produits','param'=>array());
        $breadcrumb[]=array('url'=>'','label'=>'Modifier le produit','param'=>array());



        // On récupere le produit.
        $product = $client->getProductPriceByDefault($email,$pwd,$idproduct);

        $wsListCategories = $client->listProductsCategories($email,$pwd);
        $wsListProducts = $client->listProducts($email,$pwd);

        $wsCgus = $client->listAllCgu($email,$pwd);

        $listCgus=array();
        foreach($wsCgus as $wsc){
            if($wsc!=null) $listCgus[$wsc->id]=$wsc->name;
        }

        $listCategories=array();
        foreach($wsListCategories as $wsc){
            if($wsc!=null) $listCategories[$wsc->id]=$wsc->name.($wsc->visible?'':' (catégorie système)');
        }
        $categoriesSelected=array();
        $tmp = (array) $product->categories;
       /* if(empty($tmp)){
            $product->categories= new \stdClass();
            $product->categories->item=array();
        }
        if(!is_array($product->categories->item))$product->categories->item=array($product->categories->item);
       */
        if(!is_array($product->categories))$product->categories=array($product->categories);

        foreach($product->categories as $cs){
            if($cs!=null) $categoriesSelected[]=$cs->id;
        }
        $cgusSelected = array();
        if(!is_array($product->cgus))$product->cgus=array($product->cgus);

        foreach($product->cgus as $cs){
            if($cs!=null) $cgusSelected[]=$cs->id;
        }

        $listDependancies = array();
        foreach($wsListProducts as $wsc){
            if($wsc->id!=$product->id) {
                if($wsc!=null) $listDependancies[$wsc->id] = $wsc->name;
            }
        }
        $dependanciesSelected=array();
        /*
        $tmp = (array) $product->dependancies;
        if(empty($tmp)){
            $product->dependancies= new \stdClass();
            $product->dependancies->item=array();
        }
        if(!is_array($product->dependancies->item))$product->dependancies->item=array($product->dependancies->item);
        */
        if(!is_array($product->dependancies))$product->dependancies=array($product->dependancies);

        foreach($product->dependancies as $cs){
            if($cs!=null) $dependanciesSelected[]=$cs->id;
        }
        $dependanciesPerCategorySelected=array();
        /*
        $tmp = (array) $product->dependanciesPerCategories;
        if(empty($tmp)){
            $product->dependanciesPerCategories= new \stdClass();
            $product->dependanciesPerCategories->item=array();
        }
        if(!is_array($product->dependanciesPerCategories->item))$product->dependanciesPerCategories->item=array($product->dependanciesPerCategories->item);
        */
        if(!is_array($product->dependanciesPerCategories))$product->dependanciesPerCategories=array($product->dependanciesPerCategories);

        foreach($product->dependanciesPerCategories as $cs){
            if($cs!=null)  $dependanciesPerCategorySelected[]=$cs->id;
        }


        $produitsComposesSelected=array();
       /* $tmp = (array) $product->produitsComposes;
        if(empty($tmp)){
            $product->produitsComposes= new \stdClass();
            $product->produitsComposes->item=array();
        }
        if(!is_array($product->produitsComposes->item))$product->produitsComposes->item=array($product->produitsComposes->item);
       */
        if(!is_array($product->produitsComposes))$product->produitsComposes=array($product->produitsComposes);

        foreach($product->produitsComposes as $cs){
            if($cs!=null) $produitsComposesSelected[]=$cs->id;
        }
        // Préparation du formulaire.
        $arrayMinPeriod = array();
        for($i=1;$i<24;$i++)$arrayMinPeriod[$i]=$i;
        $features='';
        /*
                $tmp = (array) $product->features;
               if(empty($tmp)){
                    $product->features= new \stdClass();
                    $product->features->item=array();
                }
                       if(!is_array($product->features->item))$product->features->item=array($product->features->item);

               */
        //dump($product);
        if(!is_array($product->features))$product->features=array($product->features);

        foreach($product->features as $f){
            if($f!=null) $features.=$f->key.':'.$f->value.';';
        }





        $form = $this->createFormBuilder()
            ->add('name',TextType::class,array('label'=>'Nom du produit : ','data'=>$product->name))
            ->add('codeLgr',TextType::class,array('label'=>'Code produit : ','data'=>$product->codeLgr))
            ->add('shortDescription',TextareaType::class,array('label'=>'Description courte : ','data'=>$product->shortDescription))
            ->add('longDescription',TextareaType::class,array('label'=>'Description longue : ','data'=>$product->longDescription))
         //   ->add('minPeriod',ChoiceType::class,array('label'=>'Période minimum en mois : ','choices'=>array_flip($arrayMinPeriod),'data'=>$product->minPeriod))

            ->add('categories',ChoiceType::class,array('label'=>'Catégories : ','choices'=>array_flip($listCategories),'multiple'=>true,'data'=>$categoriesSelected,'attr'=>array('class'=>'combobox')))

            ->add('dependancies',ChoiceType::class,array('label'=>'Dépend de (par produits) : ','choices'=>array_flip($listDependancies),'multiple'=>true,'data'=>$dependanciesSelected,'required'=>false,'attr'=>array('class'=>'combobox')))
            ->add('dependanciesPerCategories',ChoiceType::class,array('label'=>'Dépend de (au moins un produit d\' une des catégories suivantes) : ','choices'=>array_flip($listCategories),'required'=>false,'multiple'=>true,'data'=>$dependanciesPerCategorySelected,'attr'=>array('class'=>'combobox')))

            ->add('cgus',ChoiceType::class,array('label'=>'Conditions de ventes associées : ','choices'=>array_flip($listCgus),'required'=>false,'multiple'=>true,'data'=>$cgusSelected,'attr'=>array('class'=>'combobox')))

       //     ->add('produitsComposes',ChoiceType::class,array('label'=>'Produit composé de  : ','choices'=>array_flip($listDependancies),'multiple'=>true,'data'=>$produitsComposesSelected,'attr'=>array('class'=>'combobox')))

            ->add('features',TextareaType::class,array('label'=>  'Fonctionalités (fonctionnalité 1:valeur 1;fonctionnalité 2:valeur 2;) : ','data'=>$features,'required'=>false))



            ->add('active',ChoiceType::class,array('label'=>'Est actif ? :','choices'=>array_flip(array(0=>'Non',1=>'Oui')),'data'=>(int)$product->active,'expanded'=>true))


            ->add('update',SubmitType::class,array('label'=>'Mettre à jour','attr'=>array('class'=>'btn btn-warning')))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();


            $newFeatures=array();

            $ex = explode(';',$data['features']);
            foreach($ex as $k => $e){
                $kv = explode(':',$e);
                if($kv[0]!='') $newFeatures[$kv[0]]=$kv[1];
            }



            $options =array();
            $options['name']= $data['name'];
            $options['codeLgr']= $data['codeLgr'];
            $options['shortDescription']= $data['shortDescription'];
            $options['longDescription']= $data['longDescription'];
            $options['categories']= $data['categories'];

            $options['dependancies']= $data['dependancies'];
            $options['dependanciesPerCategories']= $data['dependanciesPerCategories'];

            $options['features']=$newFeatures;
            $options['active']=$data['active'];
            $options['cgus']=$data['cgus'];

            //dump($options);
           // dump($product->id);
           $client->updateProduct($email,$pwd,$product->id,json_encode($options));
            // $client update puis redirection vers la liste.
            return $this->redirectToRoute('list-products');
        }
        return $this->render('Product/Form/update.html.twig',
            array(
                'form'=>$form->createView(),
                'product'=>$product,
                'iduser'=>$userConnected->getUser()->id,
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css','adminLTE/chosen/chosen.min.css','adminLTE/chosen/docsupport/prism.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/chosen/docsupport/prism.js','adminLTE/chosen/chosen.jquery.min.js','js/combobox.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>'Modifier le produit',
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );
    }

    /**
     * @Route("/private/administrator/list-products", name="list-products")
     * @Security("has_role('ROLE_LEGRAIN')")
     */
    public function listProductsActions(Request $request){
        $session = $request->getSession();
        $userConnected = $this->getUser();
        $email =  $userConnected->getEmail();
        $pwd =  $session->get('pwd');
         $client  = new \Zend\Soap\Client($this->getParameter('wsdl_gwi_hosting'),                     array('compression' =>                         SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_DEFLATE ));                 ;


        $breadcrumb=array();

        $breadcrumb[]=array('url'=>'','label'=>'Liste des produits','param'=>array());

        $products = $client->listProducts($email, $pwd, 'both');

        //dump($products);
        return $this->render('Product/List/list.html.twig',
            array(
                'products'=>$products,
                'iduser'=>$userConnected->getUser()->id,
                'result'=>'test',
                'classBody'=>'skin-blue sidebar-mini',
                'csss'=>array('adminLTE/plugins/iCheck/square/blue.css','//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css','//cdn.datatables.net/responsive/1.0.6/css/dataTables.responsive.css','jquery-ui-bootstrap/css/custom-theme/jquery-ui-1.10.0.custom.css'),
                'jss'=>array('adminLTE/js/app.min.js','adminLTE/plugins/iCheck/icheck.js','//code.jquery.com/ui/1.11.4/jquery-ui.js','//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js','//cdn.datatables.net/responsive/1.0.6/js/dataTables.responsive.js','adminLTE/js/loadplugins.js'),
                'name'=>$email,
                'breadcrumb'=>$breadcrumb,
                'h1'=>'Liste des produits',
                'url_logo'=> '/images/logos/'.$userConnected->getUser()->agency->id.'.jpeg',
                'logo_exist'=> file_exists($this->getParameter('logos_directory').'/'.$userConnected->getUser()->agency->id.'.jpeg'),
            )
        );


    }
}