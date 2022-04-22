<?php

/* :Public/Ndd:acheter.html.twig */
class __TwigTemplate_455f32c2c906757e0e112c05a9c2edf25d3cb1e4ff6e41533e732f27e4afa994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Public/base.html.twig", ":Public/Ndd:acheter.html.twig", 1);
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
        $this->loadTemplate("Public/header.html.twig", ":Public/Ndd:acheter.html.twig", 7)->display($context);
        // line 8
        echo "    </div><!-- /.container -->

    <div id=\"content\" class=\"container\">
        ";
        // line 11
        $this->loadTemplate("flashMessage.html.twig", ":Public/Ndd:acheter.html.twig", 11)->display($context);
        // line 12
        echo "
        <div class=\"starter-template\">
            <h1>Enregistrer un nom de domaine</h1>


            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "


            <div class=\"well\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "checkndd", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submitStep1", array()), 'row');
        echo "
            </div>
            ";
        // line 25
        if ( !(null === (isset($context["resaNdd"]) ? $context["resaNdd"] : null))) {
            // line 26
            echo "                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ("p_" . (isset($context["idProductpassedInParameter"]) ? $context["idProductpassedInParameter"] : null)), array(), "any", true, true)) {
                // line 27
                echo "                    <div class=\"wel\">
                        Votre recherche : <br/>
                        ";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ("p_" . (isset($context["idProductpassedInParameter"]) ? $context["idProductpassedInParameter"] : null))), 'row');
                echo "
                    </div>
                ";
            }
            // line 32
            echo "

                <h1>Noms de domaine testés</h1>
            ";
        }
        // line 36
        echo "





            ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        </div>


        ";
        // line 56
        echo "    </div><!-- /.container -->



    ";
        // line 60
        $this->loadTemplate("Public/footer.html.twig", ":Public/Ndd:acheter.html.twig", 60)->display($context);
        // line 61
        echo "




";
    }

    public function getTemplateName()
    {
        return ":Public/Ndd:acheter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 61,  114 => 60,  108 => 56,  100 => 42,  92 => 36,  86 => 32,  80 => 29,  76 => 27,  73 => 26,  71 => 25,  66 => 23,  62 => 22,  55 => 18,  51 => 17,  44 => 12,  42 => 11,  37 => 8,  35 => 7,  31 => 5,  28 => 4,  11 => 1,);
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
/* */
/*     <div id="content" class="container">*/
/*         {% include 'flashMessage.html.twig' %}*/
/* */
/*         <div class="starter-template">*/
/*             <h1>Enregistrer un nom de domaine</h1>*/
/* */
/* */
/*             {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/* */
/*             <div class="well">*/
/*                 {{ form_row(form.checkndd) }}*/
/*                 {{ form_row(form.submitStep1) }}*/
/*             </div>*/
/*             {% if resaNdd is not null %}*/
/*                 {% if attribute(form, 'p_' ~ idProductpassedInParameter) is defined %}*/
/*                     <div class="wel">*/
/*                         Votre recherche : <br/>*/
/*                         {{ form_row( attribute(form, 'p_' ~ idProductpassedInParameter) ) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/* */
/*                 <h1>Noms de domaine testés</h1>*/
/*             {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*             {{ form_end(form) }}*/
/* */
/*         </div>*/
/* */
/* */
/*         {#*/
/* */
/*                 {% if form2 is not null %}*/
/*                     <h1>Noms de domaine testés</h1>*/
/*                     {{ form_start(form2) }}*/
/*                     {{ form_errors(form2) }}*/
/*                     {{ form_end(form2) }}*/
/*                 {% endif %}*/
/*         #}*/
/*     </div><!-- /.container -->*/
/* */
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
