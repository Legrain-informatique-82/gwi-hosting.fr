<?php

/* :Contact/Fancybox:update.html.twig */
class __TwigTemplate_7ed88cd0db803d3141fbaad511630e46c3253ee7212a009a0d4da1b4a02c29de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Contact/Fancybox/base.html.twig", ":Contact/Fancybox:update.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Contact/Fancybox/base.html.twig";
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

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "



";
    }

    public function getTemplateName()
    {
        return ":Contact/Fancybox:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'Contact/Fancybox/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_end(form) }}*/
/* */
/* */
/* */
/* {% endblock %}*/
