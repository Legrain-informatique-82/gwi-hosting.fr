<?php

/* :Contact/Fancybox:update.html.twig */
class __TwigTemplate_e16e85ba96d46fe34e3f2923d35f8bc0c3ffbd61a3b595d115d83a5b3997d610 extends Twig_Template
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
        $__internal_57bbcfdd41d76db120bfb7038f59f576fc70e62e65a595c574c58f276b3d8d4b = $this->env->getExtension("native_profiler");
        $__internal_57bbcfdd41d76db120bfb7038f59f576fc70e62e65a595c574c58f276b3d8d4b->enter($__internal_57bbcfdd41d76db120bfb7038f59f576fc70e62e65a595c574c58f276b3d8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Fancybox:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bbcfdd41d76db120bfb7038f59f576fc70e62e65a595c574c58f276b3d8d4b->leave($__internal_57bbcfdd41d76db120bfb7038f59f576fc70e62e65a595c574c58f276b3d8d4b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc262a0d95dc5c3e57b5afb7a93c117cee40e0e3e7da24be4f49fa0c9e85d9c9 = $this->env->getExtension("native_profiler");
        $__internal_dc262a0d95dc5c3e57b5afb7a93c117cee40e0e3e7da24be4f49fa0c9e85d9c9->enter($__internal_dc262a0d95dc5c3e57b5afb7a93c117cee40e0e3e7da24be4f49fa0c9e85d9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



";
        
        $__internal_dc262a0d95dc5c3e57b5afb7a93c117cee40e0e3e7da24be4f49fa0c9e85d9c9->leave($__internal_dc262a0d95dc5c3e57b5afb7a93c117cee40e0e3e7da24be4f49fa0c9e85d9c9_prof);

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
        return array (  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
