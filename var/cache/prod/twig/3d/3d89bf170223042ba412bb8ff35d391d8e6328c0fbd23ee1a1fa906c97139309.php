<?php

/* ::footer.html.twig */
class __TwigTemplate_e0aafc634e319a7805c0079f2bd9c6e482801bb974b2e3bb480bcdab44231839 extends Twig_Template
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
        return array (  32 => 7,  25 => 4,  23 => 3,  19 => 1,);
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
