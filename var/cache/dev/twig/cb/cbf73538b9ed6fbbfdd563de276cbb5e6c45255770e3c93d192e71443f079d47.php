<?php

/* :Public:accueil.html.twig */
class __TwigTemplate_d0e0341dea36f1a8b759f14e8583c5343ea9fa1887033009b4ceab5bf33df457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Public/base.html.twig", ":Public:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bcf5108d9d32e314e2873056632c3261482e405e057bf3948fed68899fdd312 = $this->env->getExtension("native_profiler");
        $__internal_5bcf5108d9d32e314e2873056632c3261482e405e057bf3948fed68899fdd312->enter($__internal_5bcf5108d9d32e314e2873056632c3261482e405e057bf3948fed68899fdd312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Public:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcf5108d9d32e314e2873056632c3261482e405e057bf3948fed68899fdd312->leave($__internal_5bcf5108d9d32e314e2873056632c3261482e405e057bf3948fed68899fdd312_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a8d0bcafb17d9697da3ac20e61fb9238c43fe3179003b936bd431762db3a2a = $this->env->getExtension("native_profiler");
        $__internal_e6a8d0bcafb17d9697da3ac20e61fb9238c43fe3179003b936bd431762db3a2a->enter($__internal_e6a8d0bcafb17d9697da3ac20e61fb9238c43fe3179003b936bd431762db3a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\">
        ";
        // line 7
        $this->loadTemplate("Public/header.html.twig", ":Public:accueil.html.twig", 7)->display($context);
        // line 8
        echo "    </div><!-- /.container -->
        <div id=\"content\" class=\"container\">
            ";
        // line 10
        $this->loadTemplate("flashMessage.html.twig", ":Public:accueil.html.twig", 10)->display($context);
        // line 11
        echo "

            <div class=\"row\">
                <div class=\"col-md-4 text-center\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("public-buy-ndd");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/enregister-nom-de-domaine.jpg"), "html", null, true);
        echo "\" alt=\"Enregistrer un nom de domaine\"></a>
                </div>
                <div class=\"col-md-4 text-center\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("public-buy-server");
        echo "\">
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/reserver-serveur.jpg"), "html", null, true);
        echo "\" alt=\"Réserver un serveur\">
                    </a>
                </div> <div class=\"col-md-4 text-center\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/creer-mail-prochainement.jpg"), "html", null, true);
        echo "\" alt=\"Creer vos adresses profesionelles, disponible prochainement\">
                </div>
            </div>

    </div>


    ";
        // line 29
        $this->loadTemplate("Public/footer.html.twig", ":Public:accueil.html.twig", 29)->display($context);
        // line 30
        echo "




";
        
        $__internal_e6a8d0bcafb17d9697da3ac20e61fb9238c43fe3179003b936bd431762db3a2a->leave($__internal_e6a8d0bcafb17d9697da3ac20e61fb9238c43fe3179003b936bd431762db3a2a_prof);

    }

    public function getTemplateName()
    {
        return ":Public:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  86 => 29,  76 => 22,  70 => 19,  66 => 18,  58 => 15,  52 => 11,  50 => 10,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'Public/base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         {% include 'Public/header.html.twig' %}*/
/*     </div><!-- /.container -->*/
/*         <div id="content" class="container">*/
/*             {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col-md-4 text-center">*/
/*                     <a href="{{ path('public-buy-ndd') }}"><img src="{{ asset('images/enregister-nom-de-domaine.jpg') }}" alt="Enregistrer un nom de domaine"></a>*/
/*                 </div>*/
/*                 <div class="col-md-4 text-center">*/
/*                     <a href="{{ path('public-buy-server') }}">*/
/*                     <img src="{{ asset('images/reserver-serveur.jpg') }}" alt="Réserver un serveur">*/
/*                     </a>*/
/*                 </div> <div class="col-md-4 text-center">*/
/*                     <img src="{{ asset('images/creer-mail-prochainement.jpg') }}" alt="Creer vos adresses profesionelles, disponible prochainement">*/
/*                 </div>*/
/*             </div>*/
/* */
/*     </div>*/
/* */
/* */
/*     {% include 'Public/footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
