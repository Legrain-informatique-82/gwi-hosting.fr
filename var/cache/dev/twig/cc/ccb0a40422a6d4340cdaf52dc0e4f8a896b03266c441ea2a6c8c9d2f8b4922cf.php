<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a1d1d12068ed9003dbdeb8f9d3a67a65ccac8f32b6e203cf82d32bba2dc8ae7b extends Twig_Template
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
        $__internal_7cc8880a99e3d6eb766138f571d2348aff5d4593cf17b508cd78e726298558d8 = $this->env->getExtension("native_profiler");
        $__internal_7cc8880a99e3d6eb766138f571d2348aff5d4593cf17b508cd78e726298558d8->enter($__internal_7cc8880a99e3d6eb766138f571d2348aff5d4593cf17b508cd78e726298558d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7cc8880a99e3d6eb766138f571d2348aff5d4593cf17b508cd78e726298558d8->leave($__internal_7cc8880a99e3d6eb766138f571d2348aff5d4593cf17b508cd78e726298558d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
