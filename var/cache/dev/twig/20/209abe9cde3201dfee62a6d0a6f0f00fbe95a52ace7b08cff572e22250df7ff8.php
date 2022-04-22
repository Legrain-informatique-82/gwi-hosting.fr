<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4e0c429f824ca23b54212d5078a712a5b244ddd4f29303076a6c6e21f6fe55a3 extends Twig_Template
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
        $__internal_c78bc90ec335520f8a4b400579066a2c206bb38e0f8c871487d7e468e486eaa2 = $this->env->getExtension("native_profiler");
        $__internal_c78bc90ec335520f8a4b400579066a2c206bb38e0f8c871487d7e468e486eaa2->enter($__internal_c78bc90ec335520f8a4b400579066a2c206bb38e0f8c871487d7e468e486eaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c78bc90ec335520f8a4b400579066a2c206bb38e0f8c871487d7e468e486eaa2->leave($__internal_c78bc90ec335520f8a4b400579066a2c206bb38e0f8c871487d7e468e486eaa2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
