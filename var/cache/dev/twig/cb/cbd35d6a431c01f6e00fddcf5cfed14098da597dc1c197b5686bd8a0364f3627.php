<?php

/* :Email/List:listealiases.html.twig */
class __TwigTemplate_8285071c7046462b806e7f941a4dbc085968789aa4db7418dbf14b36bc413704 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/List:listealiases.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6e876fcf4fd44574a3c5786759b1d0713267ce4b6ee3087332bd88c0d7ec156 = $this->env->getExtension("native_profiler");
        $__internal_c6e876fcf4fd44574a3c5786759b1d0713267ce4b6ee3087332bd88c0d7ec156->enter($__internal_c6e876fcf4fd44574a3c5786759b1d0713267ce4b6ee3087332bd88c0d7ec156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/List:listealiases.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6e876fcf4fd44574a3c5786759b1d0713267ce4b6ee3087332bd88c0d7ec156->leave($__internal_c6e876fcf4fd44574a3c5786759b1d0713267ce4b6ee3087332bd88c0d7ec156_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95c31ad95f95de45cf2ac9e0a7d502cf1954d46901e5d95c681a3fdc128f1abe = $this->env->getExtension("native_profiler");
        $__internal_95c31ad95f95de45cf2ac9e0a7d502cf1954d46901e5d95c681a3fdc128f1abe->enter($__internal_95c31ad95f95de45cf2ac9e0a7d502cf1954d46901e5d95c681a3fdc128f1abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email/List:listealiases.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/List:listealiases.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Liste des alias de la boite e-mail : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "html", null, true);
        echo "

                </h1>
                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Email/List:listealiases.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Email/List:listealiases.html.twig", 26)->display($context);
        // line 27
        echo "

                <div class=\"well\">
                    <p>
                        ";
        // line 31
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 32
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
            echo "\">
                        ";
        } elseif ((        // line 33
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 34
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 36
            echo "                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
            echo "\">
                            ";
        }
        // line 38
        echo "                            <i class=\"fa fa-plus\"></i> Ajouter un alias
                        </a>
                    </p>
                </div>

                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Alias</th>
                        <th>Supprimer</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliases"]) ? $context["aliases"] : $this->getContext($context, "aliases")));
        foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
            // line 53
            echo "                        <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 56
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 57
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "alias" => $context["alias"])), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                ";
            } elseif ((            // line 58
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 59
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "alias" => $context["alias"])), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                ";
            } else {
                // line 61
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "alias" => $context["alias"])), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                ";
            }
            // line 63
            echo "                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </tbody>
                </table>







            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 80
        $this->loadTemplate("footer.html.twig", ":Email/List:listealiases.html.twig", 80)->display($context);
        // line 81
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_95c31ad95f95de45cf2ac9e0a7d502cf1954d46901e5d95c681a3fdc128f1abe->leave($__internal_95c31ad95f95de45cf2ac9e0a7d502cf1954d46901e5d95c681a3fdc128f1abe_prof);

    }

    public function getTemplateName()
    {
        return ":Email/List:listealiases.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 81,  180 => 80,  166 => 68,  156 => 63,  150 => 61,  144 => 59,  142 => 58,  137 => 57,  135 => 56,  128 => 54,  125 => 53,  121 => 52,  105 => 38,  99 => 36,  93 => 34,  91 => 33,  86 => 32,  84 => 31,  78 => 27,  76 => 26,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Site wrapper -->*/
/*     <div class="wrapper">*/
/* */
/*         {% include 'header.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         {% include 'sidebar.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*             <!-- Content Header (Page header) -->*/
/*             <section class="content-header">*/
/*                 <h1>*/
/*                     Liste des alias de la boite e-mail : {{ emailAddress }}*/
/* */
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*                 <div class="well">*/
/*                     <p>*/
/*                         {% if type == 'super_admin' %}*/
/*                         <a class="btn btn-primary" href="{{ path("add_alias_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress})  }}">*/
/*                         {% elseif type == 'admin' %}*/
/*                         <a class="btn btn-primary" href="{{ path("add_alias_mailbox_admin",{'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress})  }}">*/
/*                             {% else %}*/
/*                             <a class="btn btn-primary" href="{{ path("add_alias_mailbox_user",{'ndd':ndd,'emailAddress':emailAddress})  }}">*/
/*                             {% endif %}*/
/*                             <i class="fa fa-plus"></i> Ajouter un alias*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Alias</th>*/
/*                         <th>Supprimer</th>*/
/* */
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for alias in aliases %}*/
/*                         <tr>*/
/*                             <td>{{ alias }}@{{ ndd }}</td>*/
/*                             <td>*/
/*                                 {% if type == 'super_admin' %}*/
/*                                     <a href="{{ path("delete_alias_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress,'alias': alias})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                 {% elseif type == 'admin' %}*/
/*                                 <a href="{{ path("delete_alias_mailbox_admin",{'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress,'alias': alias})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                 {% else %}*/
/*                                     <a href="{{ path("delete_alias_mailbox_user",{'ndd':ndd,'emailAddress':emailAddress,'alias': alias})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                 {% endif %}*/
/*                             </td>*/
/* */
/*                         </tr>*/
/* */
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*         {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/*     </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
