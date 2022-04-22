<?php

/* :Public:accueil.html.twig */
class __TwigTemplate_ce7536746339e1120c4f2f35023a0c6a346b11144c8713f0234d2f8fb824ce4a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        return array (  79 => 30,  77 => 29,  67 => 22,  61 => 19,  57 => 18,  49 => 15,  43 => 11,  41 => 10,  37 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
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
