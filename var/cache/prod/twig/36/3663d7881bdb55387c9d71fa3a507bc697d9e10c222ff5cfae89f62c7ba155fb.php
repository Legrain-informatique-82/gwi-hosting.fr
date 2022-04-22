<?php

/* :User/List:listClientsAgency.html.twig */
class __TwigTemplate_467ad6448e0135f19dd83d87c561a0fa07c9683691935426fa77ce319ab7d75e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User/List:listClientsAgency.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":User/List:listClientsAgency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":User/List:listClientsAgency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":User/List:listClientsAgency.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":User/List:listClientsAgency.html.twig", 26)->display($context);
        // line 27
        echo "

                <div class=\"well\">
                    <p>
                        <a class=\"btn btn-primary\" href=\"";
        // line 31
        if (((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : null) == "addCustomer")) {
            echo $this->env->getExtension('routing')->getPath((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : null));
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : null), array("idagency" => $this->getAttribute((isset($context["agency"]) ? $context["agency"] : null), "id", array()))), "html", null, true);
        }
        echo "\">
                            <i class=\"fa fa-plus\"></i> Ajouter un client
                        </a>
                    </p>
                </div>


                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Code client</th>
                        <th>Nom &amp; prénom</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>E-mail</th>
                        ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
            // line 47
            echo "                            <th>Type de client</th>
                        ";
        }
        // line 49
        echo "                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "                        <tr>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "codeClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address1", array()), "html", null, true);
            echo "
                                ";
            // line 58
            if ($this->getAttribute($context["user"], "address2", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address2", array()), "html", null, true);
            }
            // line 59
            echo "                                ";
            if ($this->getAttribute($context["user"], "address3", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address3", array()), "html", null, true);
            }
            // line 60
            echo "                                <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "zipcode", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "city", array()), "name", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo " </td>

                            ";
            // line 65
            if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
                // line 66
                echo "                                <td>";
                if ($this->getAttribute($context["user"], "isGestionnaire", array())) {
                    echo "Agence";
                } else {
                    echo "Client";
                }
                echo "</td>
                            ";
            }
            // line 68
            echo "                            <td>
                                <div class=\"btn-group\">
                                    <div class=\"btn-group\">
                                        <div class=\"btn-group\">

                                            ";
            // line 73
            if (((isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 74
                echo "
                                                <a class=\"btn btn-primary\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndds_admin", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des domaines\"><i class=\"fa fa-globe\"></i></a>
                                                <a class=\"btn btn-info\" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instances_admin", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des serveurs\"><i class=\"fa fa-server\"></i></a>
                                                <a class=\"btn-warning btn\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_customer_admin", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Editer\"><i class=\"fa fa-pencil\"></i></a>
                                                <a class=\"btn-danger btn\" href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_customer_admin", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn-default btn\" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historic_account_balance_admin", array("iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des transactions\"><i class=\"fa fa-eur\"></i></a>
                                            ";
            } elseif ((            // line 80
(isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 81
                echo "                                                <a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndds_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des domaines\"><i class=\"fa fa-globe\"></i></a>
                                                <a class=\"btn btn-info\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instances_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des serveurs\"><i class=\"fa fa-server\"></i></a>
                                                <a class=\"btn-warning btn\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_customer_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Editer\"><i class=\"fa fa-pencil\"></i></a>
                                                <a class=\"btn-danger btn\" href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_customer_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></a>
                                                <a class=\"btn-default btn\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historic_account_balance_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" title=\"Liste des transactions\"><i class=\"fa fa-eur\"></i></a>
                                            ";
            }
            // line 87
            echo "                                            ";
            if ((isset($context["bugzilla"]) ? $context["bugzilla"] : null)) {
                // line 88
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gestTagBugzilla", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()), "iduser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\" title=\"tag bugzilla\"><i class=\"fa fa-bug\"></i></a>
                                            ";
            }
            // line 90
            echo "                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                    </tbody>
                </table>







            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 110
        $this->loadTemplate("footer.html.twig", ":User/List:listClientsAgency.html.twig", 110)->display($context);
        // line 111
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":User/List:listClientsAgency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 111,  262 => 110,  248 => 98,  235 => 90,  229 => 88,  226 => 87,  221 => 85,  217 => 84,  213 => 83,  209 => 82,  204 => 81,  202 => 80,  198 => 79,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  179 => 74,  177 => 73,  170 => 68,  160 => 66,  158 => 65,  153 => 63,  149 => 62,  141 => 60,  135 => 59,  130 => 58,  126 => 57,  120 => 56,  116 => 55,  113 => 54,  109 => 53,  103 => 49,  99 => 47,  97 => 46,  75 => 31,  69 => 27,  67 => 26,  59 => 20,  57 => 19,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     {{ h1 }}*/
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
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
/*                         <a class="btn btn-primary" href="{% if pathRouteNameBtnAdd == 'addCustomer' %}{{ path(pathRouteNameBtnAdd)  }}{% else %}{{ path(pathRouteNameBtnAdd,{'idagency':agency.id})  }}{% endif %}">*/
/*                             <i class="fa fa-plus"></i> Ajouter un client*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Code client</th>*/
/*                         <th>Nom &amp; prénom</th>*/
/*                         <th>Adresse</th>*/
/*                         <th>Téléphone</th>*/
/*                         <th>E-mail</th>*/
/*                         {% if is_granted("ROLE_LEGRAIN") %}*/
/*                             <th>Type de client</th>*/
/*                         {% endif %}*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for user in users %}*/
/*                         <tr>*/
/*                             <td>{{ user.codeClient }}</td>*/
/*                             <td>{{ user.name }} {{ user.firstname }}</td>*/
/*                             <td>{{ user.address1 }}*/
/*                                 {% if user.address2 %}<br/>{{ user.address2 }}{% endif %}*/
/*                                 {% if user.address3 %}<br/>{{ user.address3 }}{% endif %}*/
/*                                 <br/>{{ user.zipcode.name }} {{ user.city.name }}*/
/*                             </td>*/
/*                             <td>{{ user.phone }}</td>*/
/*                             <td>{{ user.email }} </td>*/
/* */
/*                             {% if is_granted("ROLE_LEGRAIN") %}*/
/*                                 <td>{% if user.isGestionnaire %}Agence{% else %}Client{% endif %}</td>*/
/*                             {% endif %}*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                     <div class="btn-group">*/
/*                                         <div class="btn-group">*/
/* */
/*                                             {% if type=="admin" %}*/
/* */
/*                                                 <a class="btn btn-primary" href="{{ path("ndds_admin",{'iduser':user.id}) }}" title="Liste des domaines"><i class="fa fa-globe"></i></a>*/
/*                                                 <a class="btn btn-info" href="{{ path("instances_admin",{'iduser':user.id}) }}" title="Liste des serveurs"><i class="fa fa-server"></i></a>*/
/*                                                 <a class="btn-warning btn" href="{{ path("update_customer_admin",{'iduser':user.id}) }}" title="Editer"><i class="fa fa-pencil"></i></a>*/
/*                                                 <a class="btn-danger btn" href="{{ path("delete_customer_admin",{'iduser':user.id}) }}" title="Supprimer"><i class="fa fa-trash"></i></a>*/
/*                                                 <a class="btn-default btn" href="{{ path("historic_account_balance_admin",{'iduser':user.id}) }}" title="Liste des transactions"><i class="fa fa-eur"></i></a>*/
/*                                             {% elseif type=="super_admin" %}*/
/*                                                 <a class="btn btn-primary" href="{{ path("ndds_super_admin",{'idagency':user.agency.id,'iduser':user.id}) }}" title="Liste des domaines"><i class="fa fa-globe"></i></a>*/
/*                                                 <a class="btn btn-info" href="{{ path("instances_super_admin",{'idagency':user.agency.id,'iduser':user.id}) }}" title="Liste des serveurs"><i class="fa fa-server"></i></a>*/
/*                                                 <a class="btn-warning btn" href="{{ path("update_customer_super_admin",{'idagency':user.agency.id,'iduser':user.id}) }}" title="Editer"><i class="fa fa-pencil"></i></a>*/
/*                                                 <a class="btn-danger btn" href="{{ path("delete_customer_super_admin",{'idagency':user.agency.id,'iduser':user.id}) }}" title="Supprimer"><i class="fa fa-trash"></i></a>*/
/*                                                 <a class="btn-default btn" href="{{ path("historic_account_balance_super_admin",{'idagency':user.agency.id,'iduser':user.id}) }}" title="Liste des transactions"><i class="fa fa-eur"></i></a>*/
/*                                             {% endif %}*/
/*                                             {% if bugzilla %}*/
/*                                                 <a href="{{ path("gestTagBugzilla",{'idagency':user.agency.id,'iduser':user.id}) }}" class="btn btn-info" title="tag bugzilla"><i class="fa fa-bug"></i></a>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
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
