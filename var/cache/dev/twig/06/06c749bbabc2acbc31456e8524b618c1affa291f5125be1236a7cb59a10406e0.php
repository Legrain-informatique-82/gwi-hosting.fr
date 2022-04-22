<?php

/* :Public/Ndd:acheter.html.twig */
class __TwigTemplate_f90776e2dba63ee9725c0576a98807d4c4c0eee3f9693c18dc346d14eed0aae1 extends Twig_Template
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
        $__internal_98b3526c5b20ec7a981598ed50c970d8e09fe595373494d59a144a07d9658daf = $this->env->getExtension("native_profiler");
        $__internal_98b3526c5b20ec7a981598ed50c970d8e09fe595373494d59a144a07d9658daf->enter($__internal_98b3526c5b20ec7a981598ed50c970d8e09fe595373494d59a144a07d9658daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Public/Ndd:acheter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b3526c5b20ec7a981598ed50c970d8e09fe595373494d59a144a07d9658daf->leave($__internal_98b3526c5b20ec7a981598ed50c970d8e09fe595373494d59a144a07d9658daf_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d940a600e7915aa68784de50413e5f4635688b1ec356fb20cff13e6191342b4 = $this->env->getExtension("native_profiler");
        $__internal_7d940a600e7915aa68784de50413e5f4635688b1ec356fb20cff13e6191342b4->enter($__internal_7d940a600e7915aa68784de50413e5f4635688b1ec356fb20cff13e6191342b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


            <div class=\"well\">
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "checkndd", array()), 'row');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submitStep1", array()), 'row');
        echo "
            </div>
            ";
        // line 25
        if ( !(null === (isset($context["resaNdd"]) ? $context["resaNdd"] : $this->getContext($context, "resaNdd")))) {
            // line 26
            echo "                ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ("p_" . (isset($context["idProductpassedInParameter"]) ? $context["idProductpassedInParameter"] : $this->getContext($context, "idProductpassedInParameter"))), array(), "any", true, true)) {
                // line 27
                echo "                    <div class=\"wel\">
                        Votre recherche : <br/>
                        ";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("p_" . (isset($context["idProductpassedInParameter"]) ? $context["idProductpassedInParameter"] : $this->getContext($context, "idProductpassedInParameter")))), 'row');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_7d940a600e7915aa68784de50413e5f4635688b1ec356fb20cff13e6191342b4->leave($__internal_7d940a600e7915aa68784de50413e5f4635688b1ec356fb20cff13e6191342b4_prof);

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
        return array (  125 => 61,  123 => 60,  117 => 56,  109 => 42,  101 => 36,  95 => 32,  89 => 29,  85 => 27,  82 => 26,  80 => 25,  75 => 23,  71 => 22,  64 => 18,  60 => 17,  53 => 12,  51 => 11,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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
