<?php

/* :default:index.html.twig */
class __TwigTemplate_1234cd6f62ce707b87ebd626ce5b5ffd5e7979e3e417925071ee20b1287d9a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_ed37543feba312c917fe38f7e54648f893102ed0bdfb0abd6c3fdc608f97821e = $this->env->getExtension("native_profiler");
        $__internal_ed37543feba312c917fe38f7e54648f893102ed0bdfb0abd6c3fdc608f97821e->enter($__internal_ed37543feba312c917fe38f7e54648f893102ed0bdfb0abd6c3fdc608f97821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed37543feba312c917fe38f7e54648f893102ed0bdfb0abd6c3fdc608f97821e->leave($__internal_ed37543feba312c917fe38f7e54648f893102ed0bdfb0abd6c3fdc608f97821e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54aebfcb30b43d700446cdb582680ab012a4a90a15a564fb347dc3869c0b3196 = $this->env->getExtension("native_profiler");
        $__internal_54aebfcb30b43d700446cdb582680ab012a4a90a15a564fb347dc3869c0b3196->enter($__internal_54aebfcb30b43d700446cdb582680ab012a4a90a15a564fb347dc3869c0b3196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    Homepage. ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "
";
        
        $__internal_54aebfcb30b43d700446cdb582680ab012a4a90a15a564fb347dc3869c0b3196->leave($__internal_54aebfcb30b43d700446cdb582680ab012a4a90a15a564fb347dc3869c0b3196_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     Homepage. {{ result }}*/
/* {% endblock %}*/
/* */
