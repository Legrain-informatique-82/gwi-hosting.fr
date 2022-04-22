<?php

/* :Ndd/Nav:options.html.twig */
class __TwigTemplate_a335a8b0a94b7f8672dada8710adc09aa687306912395711af615b82f3a72ea9 extends Twig_Template
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
        $__internal_0825780e0e55e1cb94baa9a3a39bf842adcc4758f9dea823c99be942b6a10663 = $this->env->getExtension("native_profiler");
        $__internal_0825780e0e55e1cb94baa9a3a39bf842adcc4758f9dea823c99be942b6a10663->enter($__internal_0825780e0e55e1cb94baa9a3a39bf842adcc4758f9dea823c99be942b6a10663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ndd/Nav:options.html.twig"));

        // line 1
        echo "<ul class=\"nav nav-tabs nav-justified\">

    ";
        // line 3
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 4
            echo "        <li role=\"presentation\" ";
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 5
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 6
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 8
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        } elseif ((        // line 9
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 10
            echo "
        <li role=\"presentation\" ";
            // line 11
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 12
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 13
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 15
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        } else {
            // line 17
            echo "        <li role=\"presentation\" ";
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "general")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Général</a></li>
        <li role=\"presentation\" ";
            // line 18
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "email")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Boites e-mail</a></li>
        <li role=\"presentation\" ";
            // line 19
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "intervention")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\" ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Interventions</a></li>

        <li role=\"presentation\" ";
            // line 21
            if (((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active")) == "hebergement")) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">Hébergement</a></li>
    ";
        }
        // line 23
        echo "</ul>";
        
        $__internal_0825780e0e55e1cb94baa9a3a39bf842adcc4758f9dea823c99be942b6a10663->leave($__internal_0825780e0e55e1cb94baa9a3a39bf842adcc4758f9dea823c99be942b6a10663_prof);

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
        return array (  136 => 23,  127 => 21,  118 => 19,  110 => 18,  101 => 17,  92 => 15,  83 => 13,  75 => 12,  67 => 11,  64 => 10,  62 => 9,  54 => 8,  45 => 6,  37 => 5,  28 => 4,  26 => 3,  22 => 1,);
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
