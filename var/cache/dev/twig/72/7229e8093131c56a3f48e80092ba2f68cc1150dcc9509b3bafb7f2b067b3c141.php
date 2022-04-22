<?php

/* :User/List:listClientsAgency.html.twig */
class __TwigTemplate_249bc804844f64ea223b0bb444026938ac4b9a30345679e6dc22735d0e9d9558 extends Twig_Template
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
        $__internal_073e59efbd3bef88d52ddc1409c78d53cfd2f87436aa3947c89a2660343ee759 = $this->env->getExtension("native_profiler");
        $__internal_073e59efbd3bef88d52ddc1409c78d53cfd2f87436aa3947c89a2660343ee759->enter($__internal_073e59efbd3bef88d52ddc1409c78d53cfd2f87436aa3947c89a2660343ee759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User/List:listClientsAgency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_073e59efbd3bef88d52ddc1409c78d53cfd2f87436aa3947c89a2660343ee759->leave($__internal_073e59efbd3bef88d52ddc1409c78d53cfd2f87436aa3947c89a2660343ee759_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc7aeebf3e755193721ff6ae91610b830390f9c50c4d1a36e99f52dabfc7f951 = $this->env->getExtension("native_profiler");
        $__internal_dc7aeebf3e755193721ff6ae91610b830390f9c50c4d1a36e99f52dabfc7f951->enter($__internal_dc7aeebf3e755193721ff6ae91610b830390f9c50c4d1a36e99f52dabfc7f951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":User/List:listClientsAgency.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        if (((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : $this->getContext($context, "pathRouteNameBtnAdd")) == "addCustomer")) {
            echo $this->env->getExtension('routing')->getPath((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : $this->getContext($context, "pathRouteNameBtnAdd")));
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["pathRouteNameBtnAdd"]) ? $context["pathRouteNameBtnAdd"] : $this->getContext($context, "pathRouteNameBtnAdd")), array("idagency" => $this->getAttribute((isset($context["agency"]) ? $context["agency"] : $this->getContext($context, "agency")), "id", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
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
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
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
            if ((isset($context["bugzilla"]) ? $context["bugzilla"] : $this->getContext($context, "bugzilla"))) {
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
        
        $__internal_dc7aeebf3e755193721ff6ae91610b830390f9c50c4d1a36e99f52dabfc7f951->leave($__internal_dc7aeebf3e755193721ff6ae91610b830390f9c50c4d1a36e99f52dabfc7f951_prof);

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
        return array (  273 => 111,  271 => 110,  257 => 98,  244 => 90,  238 => 88,  235 => 87,  230 => 85,  226 => 84,  222 => 83,  218 => 82,  213 => 81,  211 => 80,  207 => 79,  203 => 78,  199 => 77,  195 => 76,  191 => 75,  188 => 74,  186 => 73,  179 => 68,  169 => 66,  167 => 65,  162 => 63,  158 => 62,  150 => 60,  144 => 59,  139 => 58,  135 => 57,  129 => 56,  125 => 55,  122 => 54,  118 => 53,  112 => 49,  108 => 47,  106 => 46,  84 => 31,  78 => 27,  76 => 26,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
