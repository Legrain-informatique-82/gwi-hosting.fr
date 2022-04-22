<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_78b20308c077d903b527b102a155193de19fe7c80e7b3b48f886eee82fa384bc extends Twig_Template
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
        $__internal_c5a957910420e73bb1dee6e6f1cd9342d813bb9b125e5a102bf6472bdf186f9c = $this->env->getExtension("native_profiler");
        $__internal_c5a957910420e73bb1dee6e6f1cd9342d813bb9b125e5a102bf6472bdf186f9c->enter($__internal_c5a957910420e73bb1dee6e6f1cd9342d813bb9b125e5a102bf6472bdf186f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c5a957910420e73bb1dee6e6f1cd9342d813bb9b125e5a102bf6472bdf186f9c->leave($__internal_c5a957910420e73bb1dee6e6f1cd9342d813bb9b125e5a102bf6472bdf186f9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
