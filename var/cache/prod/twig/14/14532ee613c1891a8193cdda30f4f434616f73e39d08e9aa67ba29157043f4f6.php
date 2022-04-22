<?php

/* :Contact/Fancybox:close.html.twig */
class __TwigTemplate_be830d2cab40ec4fe9602bc0e8393f93d6e80646850d69261256d61143f1f392 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
