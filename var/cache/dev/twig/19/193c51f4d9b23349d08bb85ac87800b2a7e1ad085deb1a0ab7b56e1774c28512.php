<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_edbf4d46efb5adeb0f28b7537bf92cba0661ae4ead878da85d396687f2c77749 extends Twig_Template
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
        $__internal_d13b9de5fefbfaf0571af6de49524a807f3ae590f7b29bb4e9c2f79daf6d7925 = $this->env->getExtension("native_profiler");
        $__internal_d13b9de5fefbfaf0571af6de49524a807f3ae590f7b29bb4e9c2f79daf6d7925->enter($__internal_d13b9de5fefbfaf0571af6de49524a807f3ae590f7b29bb4e9c2f79daf6d7925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d13b9de5fefbfaf0571af6de49524a807f3ae590f7b29bb4e9c2f79daf6d7925->leave($__internal_d13b9de5fefbfaf0571af6de49524a807f3ae590f7b29bb4e9c2f79daf6d7925_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
