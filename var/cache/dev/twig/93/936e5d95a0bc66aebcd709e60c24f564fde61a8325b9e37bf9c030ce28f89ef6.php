<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1bdc10deea9453be10b071e297b437d26ed1045dff0e11e59a603c0d460295e6 extends Twig_Template
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
        $__internal_e9d5669194cd77a03d4ab3ae879dcde7a0708f57fa15fff7ab786c8a52fa5a96 = $this->env->getExtension("native_profiler");
        $__internal_e9d5669194cd77a03d4ab3ae879dcde7a0708f57fa15fff7ab786c8a52fa5a96->enter($__internal_e9d5669194cd77a03d4ab3ae879dcde7a0708f57fa15fff7ab786c8a52fa5a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e9d5669194cd77a03d4ab3ae879dcde7a0708f57fa15fff7ab786c8a52fa5a96->leave($__internal_e9d5669194cd77a03d4ab3ae879dcde7a0708f57fa15fff7ab786c8a52fa5a96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
