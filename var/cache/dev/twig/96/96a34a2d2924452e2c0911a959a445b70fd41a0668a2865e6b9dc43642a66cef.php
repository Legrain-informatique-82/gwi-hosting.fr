<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e32616a750cef6d3433adde5ced6d35f80b8cca4a94651bd222c9204c95f93d3 extends Twig_Template
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
        $__internal_22ae0cc154c307f54156f619e811423d45c543e4b627006fbab4ec652b5df891 = $this->env->getExtension("native_profiler");
        $__internal_22ae0cc154c307f54156f619e811423d45c543e4b627006fbab4ec652b5df891->enter($__internal_22ae0cc154c307f54156f619e811423d45c543e4b627006fbab4ec652b5df891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_22ae0cc154c307f54156f619e811423d45c543e4b627006fbab4ec652b5df891->leave($__internal_22ae0cc154c307f54156f619e811423d45c543e4b627006fbab4ec652b5df891_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
