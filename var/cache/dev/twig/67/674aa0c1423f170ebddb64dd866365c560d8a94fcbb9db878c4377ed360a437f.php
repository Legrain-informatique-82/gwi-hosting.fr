<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5365a5bec27eae01faa53fb95585cc47c6f18e19df8d27f45cf39f9ba66fe05a extends Twig_Template
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
        $__internal_6eed1e852ce48fde1cff70e64afcb93ae12722a41c17fa7cb54bfce86aca163b = $this->env->getExtension("native_profiler");
        $__internal_6eed1e852ce48fde1cff70e64afcb93ae12722a41c17fa7cb54bfce86aca163b->enter($__internal_6eed1e852ce48fde1cff70e64afcb93ae12722a41c17fa7cb54bfce86aca163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_6eed1e852ce48fde1cff70e64afcb93ae12722a41c17fa7cb54bfce86aca163b->leave($__internal_6eed1e852ce48fde1cff70e64afcb93ae12722a41c17fa7cb54bfce86aca163b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
