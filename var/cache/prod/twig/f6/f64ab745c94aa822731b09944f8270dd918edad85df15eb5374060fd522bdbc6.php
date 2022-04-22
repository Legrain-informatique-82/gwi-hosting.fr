<?php

/* :Ndd/Nav:options.html.twig */
class __TwigTemplate_f46bfb07b91aa01e961333523aed8b2c5d694d591ab62097d036fdd3d86de68b extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs nav-justified\">

    ";
        // line 3
        if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 4
            echo "        <li role=\"presentation\" ";
            if (((isset($context["active"]) ? $context["active"] : null) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 5
            if (((isset($context["active"]) ? $context["active"] : null) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 6
            if (((isset($context["active"]) ? $context["active"] : null) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 8
            if (((isset($context["active"]) ? $context["active"] : null) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        } elseif ((        // line 9
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 10
            echo "
        <li role=\"presentation\" ";
            // line 11
            if (((isset($context["active"]) ? $context["active"] : null) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 12
            if (((isset($context["active"]) ? $context["active"] : null) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 13
            if (((isset($context["active"]) ? $context["active"] : null) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 15
            if (((isset($context["active"]) ? $context["active"] : null) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        } else {
            // line 17
            echo "        <li role=\"presentation\" ";
            if (((isset($context["active"]) ? $context["active"] : null) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 18
            if (((isset($context["active"]) ? $context["active"] : null) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 19
            if (((isset($context["active"]) ? $context["active"] : null) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 21
            if (((isset($context["active"]) ? $context["active"] : null) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        }
        // line 23
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return ":Ndd/Nav:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 23,  124 => 21,  115 => 19,  107 => 18,  98 => 17,  89 => 15,  80 => 13,  72 => 12,  64 => 11,  61 => 10,  59 => 9,  51 => 8,  42 => 6,  34 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs nav-justified">*/
/* */
/*     {% if type =='super_admin' %}*/
/*         <li role="presentation" {% if active == 'general' %} class="active" {% endif %}><a href="{{ path('ndd_super_admin',{'idagency':idagency,'iduser':iduser,'ndd':ndd}) }}">Général</a></li>*/
/*         <li role="presentation" {% if active == 'email' %} class="active" {% endif %}><a href=" {{ path("list_emails_for_domain_super_admin",{'idagency':idagency,"iduser": iduser ,'ndd':ndd}) }}">Boites e-mail</a></li>*/
/*         <li role="presentation" {% if active == 'intervention' %} class="active" {% endif %}><a href=" {{ path("intervention_super_admin",{'idagency':idagency,"iduser": iduser ,'ndd':ndd}) }}">Interventions</a></li>*/
/* */
/*         <li role="presentation" {% if active == 'hebergement' %} class="active" {% endif %}><a href="{{ path("hebergement_super_admin",{'idagency':idagency,"iduser": iduser ,'ndd':ndd}) }}">Hébergement</a></li>*/
/*     {% elseif type =='admin' %}*/
/* */
/*         <li role="presentation" {% if active == 'general' %} class="active" {% endif %}><a href="{{ path('ndd_admin',{'iduser':iduser,'ndd':ndd}) }}">Général</a></li>*/
/*         <li role="presentation" {% if active == 'email' %} class="active" {% endif %}><a href=" {{ path("list_emails_for_domain_admin",{"iduser": iduser ,'ndd':ndd}) }}">Boites e-mail</a></li>*/
/*         <li role="presentation" {% if active == 'intervention' %} class="active" {% endif %}><a href=" {{ path("intervention_admin",{"iduser": iduser ,'ndd':ndd}) }}">Interventions</a></li>*/
/* */
/*         <li role="presentation" {% if active == 'hebergement' %} class="active" {% endif %}><a href="{{ path("hebergement_admin",{"iduser": iduser ,'ndd':ndd}) }}">Hébergement</a></li>*/
/*     {% else %}*/
/*         <li role="presentation" {% if active == 'general' %} class="active" {% endif %}><a href="{{ path('ndd_user',{'ndd':ndd}) }}">Général</a></li>*/
/*         <li role="presentation" {% if active == 'email' %} class="active" {% endif %}><a href=" {{ path("list_emails_for_domain_user",{'ndd':ndd}) }}">Boites e-mail</a></li>*/
/*         <li role="presentation" {% if active == 'intervention' %} class="active" {% endif %}><a href=" {{ path("intervention_user",{'ndd':ndd}) }}">Interventions</a></li>*/
/* */
/*         <li role="presentation" {% if active == 'hebergement' %} class="active" {% endif %}><a href="{{ path("hebergement_user",{'ndd':ndd}) }}">Hébergement</a></li>*/
/*     {% endif %}*/
/* </ul>*/
