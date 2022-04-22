<?php

/* :forms:associateZipCodeAndCity.html.twig */
class __TwigTemplate_2a9b8d663726ff0c18a3dc1297c4617b8df69f47341205e128fab17be4ff0b1d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <p>Associer une ville avec un code postal</p>



    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    <p>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "zipCodes", array()), 'row');
        echo "
    </p>


    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
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
        return array (  54 => 16,  47 => 12,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
