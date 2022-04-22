<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_784920cc430603bceae5f6305162ba4dd5d65219fe124f59737c21363fb49be9 extends Twig_Template
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
        $__internal_626192450b998ab63804e7159b5dde757e65749b4f0ad6a9988bed26144b02cf = $this->env->getExtension("native_profiler");
        $__internal_626192450b998ab63804e7159b5dde757e65749b4f0ad6a9988bed26144b02cf->enter($__internal_626192450b998ab63804e7159b5dde757e65749b4f0ad6a9988bed26144b02cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_626192450b998ab63804e7159b5dde757e65749b4f0ad6a9988bed26144b02cf->leave($__internal_626192450b998ab63804e7159b5dde757e65749b4f0ad6a9988bed26144b02cf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
