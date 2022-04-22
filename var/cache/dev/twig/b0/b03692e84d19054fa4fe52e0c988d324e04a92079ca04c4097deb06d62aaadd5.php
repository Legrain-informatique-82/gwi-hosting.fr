<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0289200a4150af3da6eba3f6cbdcec9307bd3b7f700c8680cac0ed63b0be09b0 extends Twig_Template
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
        $__internal_2a9839f1db577474dc765c2e38a74c27c001a7af83db286a06b81120aceaba45 = $this->env->getExtension("native_profiler");
        $__internal_2a9839f1db577474dc765c2e38a74c27c001a7af83db286a06b81120aceaba45->enter($__internal_2a9839f1db577474dc765c2e38a74c27c001a7af83db286a06b81120aceaba45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_2a9839f1db577474dc765c2e38a74c27c001a7af83db286a06b81120aceaba45->leave($__internal_2a9839f1db577474dc765c2e38a74c27c001a7af83db286a06b81120aceaba45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
