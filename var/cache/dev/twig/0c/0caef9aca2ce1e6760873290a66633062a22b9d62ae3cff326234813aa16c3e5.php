<?php

/* :forms:associateZipCodeAndCity.html.twig */
class __TwigTemplate_ae9cf4bb49a28e6ec21352e7a51e0f291fc52f4686bb63f5cded26df8f5bf598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":forms:associateZipCodeAndCity.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f2252d535b31541a4b3d4622c533cc89e587d873e037c70b79d3969007f3cdb = $this->env->getExtension("native_profiler");
        $__internal_6f2252d535b31541a4b3d4622c533cc89e587d873e037c70b79d3969007f3cdb->enter($__internal_6f2252d535b31541a4b3d4622c533cc89e587d873e037c70b79d3969007f3cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:associateZipCodeAndCity.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2252d535b31541a4b3d4622c533cc89e587d873e037c70b79d3969007f3cdb->leave($__internal_6f2252d535b31541a4b3d4622c533cc89e587d873e037c70b79d3969007f3cdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e82e5cefd81c8d6905971f1f1519c48124b52ca3c3615924d20bb95eacce7e63 = $this->env->getExtension("native_profiler");
        $__internal_e82e5cefd81c8d6905971f1f1519c48124b52ca3c3615924d20bb95eacce7e63->enter($__internal_e82e5cefd81c8d6905971f1f1519c48124b52ca3c3615924d20bb95eacce7e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>Associer une ville avec un code postal</p>



    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <p>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zipCodes", array()), 'row');
        echo "
    </p>


    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e82e5cefd81c8d6905971f1f1519c48124b52ca3c3615924d20bb95eacce7e63->leave($__internal_e82e5cefd81c8d6905971f1f1519c48124b52ca3c3615924d20bb95eacce7e63_prof);

    }

    public function getTemplateName()
    {
        return ":forms:associateZipCodeAndCity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  56 => 12,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>Associer une ville avec un code postal</p>*/
/* */
/* */
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     <p>*/
/*         {{ form_row(form.zipCodes) }}*/
/*     </p>*/
/* */
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
