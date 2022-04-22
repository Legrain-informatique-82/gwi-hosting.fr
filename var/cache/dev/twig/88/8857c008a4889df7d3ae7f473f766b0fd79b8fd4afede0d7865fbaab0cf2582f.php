<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dad23968118203fa508bc5e1a30d856992105569c66ed87d0cc6c23c8a5814f4 extends Twig_Template
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
        $__internal_799b39678cabec33b441b871cb16bd9d79f2935effd22eac463a36737d17ade2 = $this->env->getExtension("native_profiler");
        $__internal_799b39678cabec33b441b871cb16bd9d79f2935effd22eac463a36737d17ade2->enter($__internal_799b39678cabec33b441b871cb16bd9d79f2935effd22eac463a36737d17ade2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_799b39678cabec33b441b871cb16bd9d79f2935effd22eac463a36737d17ade2->leave($__internal_799b39678cabec33b441b871cb16bd9d79f2935effd22eac463a36737d17ade2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
