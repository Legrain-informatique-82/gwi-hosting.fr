<?php

/* :Email/List:listealiases.html.twig */
class __TwigTemplate_a264ed07ec8aad84ec47cfcd625ec0fd712cc743c82e777247daf38926ae7d35 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, (isset($context["emailAddress"]) ? $context["emailAddress"] : null), "html", null, true);
        echo "

                </h1>
                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Email/List:listealiases.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 32
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
            echo "\">
                        ";
        } elseif ((        // line 33
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 34
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
            echo "\">
                            ";
        } else {
            // line 36
            echo "                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["aliases"]) ? $context["aliases"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
            // line 53
            echo "                        <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 56
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 57
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), "alias" => $context["alias"])), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                ";
            } elseif ((            // line 58
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 59
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), "alias" => $context["alias"])), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                ";
            } else {
                // line 61
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null), "alias" => $context["alias"])), "html", null, true);
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
        return array (  173 => 81,  171 => 80,  157 => 68,  147 => 63,  141 => 61,  135 => 59,  133 => 58,  128 => 57,  126 => 56,  119 => 54,  116 => 53,  112 => 52,  96 => 38,  90 => 36,  84 => 34,  82 => 33,  77 => 32,  75 => 31,  69 => 27,  67 => 26,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
