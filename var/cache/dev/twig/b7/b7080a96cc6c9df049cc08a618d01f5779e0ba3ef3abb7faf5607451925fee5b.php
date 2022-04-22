<?php

/* ::footer.html.twig */
class __TwigTemplate_70fe5f4f21f09564901a7b8f0ebecdaab0a787f9ea8da299fff692ba40df3b2d extends Twig_Template
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
        $__internal_ab624cbf173509e1d618945d8f107640fd4256801ca21b0020f5afde5539d7c0 = $this->env->getExtension("native_profiler");
        $__internal_ab624cbf173509e1d618945d8f107640fd4256801ca21b0020f5afde5539d7c0->enter($__internal_ab624cbf173509e1d618945d8f107640fd4256801ca21b0020f5afde5539d7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
        ";
        // line 3
        if ( !array_key_exists("disableMenu", $context)) {
            // line 4
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("get_changelog");
            echo "\">Nouveautés dans l'application</a>
            |
        ";
        }
        // line 7
        echo " 
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href=\"http://legrain.fr\">Legrain Informatique</a>.</strong> Tous droits réservés.
</footer>";
        
        $__internal_ab624cbf173509e1d618945d8f107640fd4256801ca21b0020f5afde5539d7c0->leave($__internal_ab624cbf173509e1d618945d8f107640fd4256801ca21b0020f5afde5539d7c0_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  28 => 4,  26 => 3,  22 => 1,);
    }
}
/* <footer class="main-footer">*/
/*     <div class="pull-right hidden-xs">*/
/*         {% if disableMenu is not defined %}*/
/*         <a href="{{ path("get_changelog") }}">Nouveautés dans l'application</a>*/
/*             |*/
/*         {% endif %}*/
/*  */
/*         <b>Version</b> 1.0*/
/*     </div>*/
/*     <strong>Copyright &copy; 2014-2015 <a href="http://legrain.fr">Legrain Informatique</a>.</strong> Tous droits réservés.*/
/* </footer>*/
