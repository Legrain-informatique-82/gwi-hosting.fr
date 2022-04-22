<?php

/* PublicBundle:Default:index.html.twig */
class __TwigTemplate_ceca78336cf7da1f5ea1824bc416e985d0fde9abcdfe9740f946864c6d59cb1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f0bcfbaeba7ce5691e4f75132572933d4bc3237e0e93bbe7fe1c516a28b821e = $this->env->getExtension("native_profiler");
        $__internal_9f0bcfbaeba7ce5691e4f75132572933d4bc3237e0e93bbe7fe1c516a28b821e->enter($__internal_9f0bcfbaeba7ce5691e4f75132572933d4bc3237e0e93bbe7fe1c516a28b821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PublicBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9f0bcfbaeba7ce5691e4f75132572933d4bc3237e0e93bbe7fe1c516a28b821e->leave($__internal_9f0bcfbaeba7ce5691e4f75132572933d4bc3237e0e93bbe7fe1c516a28b821e_prof);

    }

    public function getTemplateName()
    {
        return "PublicBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
