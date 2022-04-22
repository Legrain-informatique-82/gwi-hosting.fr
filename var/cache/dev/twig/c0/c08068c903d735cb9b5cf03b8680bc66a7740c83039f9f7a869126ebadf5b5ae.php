<?php

/* :Contact/Fancybox:close.html.twig */
class __TwigTemplate_7f44cd45b1b59e87f6aa573ff80be82042a7af3364d0bd5aac85557ed9e44ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Contact/Fancybox/base.html.twig", ":Contact/Fancybox:close.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Contact/Fancybox/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c365667ab62e890879c62d29ca55e2464acac120e2109cf2a30893193fc365a = $this->env->getExtension("native_profiler");
        $__internal_4c365667ab62e890879c62d29ca55e2464acac120e2109cf2a30893193fc365a->enter($__internal_4c365667ab62e890879c62d29ca55e2464acac120e2109cf2a30893193fc365a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Fancybox:close.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c365667ab62e890879c62d29ca55e2464acac120e2109cf2a30893193fc365a->leave($__internal_4c365667ab62e890879c62d29ca55e2464acac120e2109cf2a30893193fc365a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1141fd372081590ae9d4371575339404867e997d7c987f4c340ef4e9f94af3b3 = $this->env->getExtension("native_profiler");
        $__internal_1141fd372081590ae9d4371575339404867e997d7c987f4c340ef4e9f94af3b3->enter($__internal_1141fd372081590ae9d4371575339404867e997d7c987f4c340ef4e9f94af3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <a href=\"javascript:parent.jQuery.fancybox.close();\">Close iframe parent</a>

    </div>
    <script type=\"text/javascript\">


        \$(function () {

            // On ferme l'iframe
            parent.jQuery.fancybox.close();
        });
    </script>
";
        
        $__internal_1141fd372081590ae9d4371575339404867e997d7c987f4c340ef4e9f94af3b3->leave($__internal_1141fd372081590ae9d4371575339404867e997d7c987f4c340ef4e9f94af3b3_prof);

    }

    public function getTemplateName()
    {
        return ":Contact/Fancybox:close.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'Contact/Fancybox/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>*/
/* */
/*     </div>*/
/*     <script type="text/javascript">*/
/* */
/* */
/*         $(function () {*/
/* */
/*             // On ferme l'iframe*/
/*             parent.jQuery.fancybox.close();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
