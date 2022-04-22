<?php

/* :User/List:listUsersAgency.html.twig */
class __TwigTemplate_e86df0d17b9d5d0e9c261a9455e668d8bbb5d817ef3df06315e68be53aff8945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User/List:listUsersAgency.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":User/List:listUsersAgency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":User/List:listUsersAgency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Liste des gestionnaires d'agences
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":User/List:listUsersAgency.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":User/List:listUsersAgency.html.twig", 27)->display($context);
        // line 28
        echo "
                <div class=\"well\">
                    <p>
                        <a class=\"btn btn-primary\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("create-users-agency");
        echo "\">
                            <i class=\"fa fa-plus\"></i> Ajouter un gestionnaire
                        </a>
                    </p>
                </div>


                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Code client</th>
                        <th>Nom &amp; prénom</th>
                        <th>Adresse</th>
                        <th>Téléphone de contact</th>
                        <th>E-mail de contact</th>
                        <th>Agence</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 53
            echo "                        <tr>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "codeClient", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address1", array()), "html", null, true);
            echo "
                                ";
            // line 57
            if ($this->getAttribute($context["user"], "address2", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address2", array()), "html", null, true);
            }
            // line 58
            echo "                                ";
            if ($this->getAttribute($context["user"], "address3", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "address3", array()), "html", null, true);
            }
            // line 59
            echo "                                <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "zipcode", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "city", array()), "name", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "name", array()), "html", null, true);
            echo "</td>

                            <td>
                                <div class=\"btn-group\">
                                  <div class=\"btn-group\">
                                      <a class=\"btn btn-primary\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_customer_super_admin", array("idagency" => $this->getAttribute($this->getAttribute($context["user"], "agency", array()), "id", array()))), "html", null, true);
            echo "\" title=\"Clients de cette agence\">
                                          <i class=\"fa fa-users\"></i>
                                      </a>
                                  </div>
                                </div>
                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </tbody>
                </table>







            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 90
        $this->loadTemplate("footer.html.twig", ":User/List:listUsersAgency.html.twig", 90)->display($context);
        // line 91
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":User/List:listUsersAgency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 91,  182 => 90,  168 => 78,  152 => 68,  144 => 63,  140 => 62,  136 => 61,  128 => 59,  122 => 58,  117 => 57,  113 => 56,  107 => 55,  103 => 54,  100 => 53,  96 => 52,  72 => 31,  67 => 28,  65 => 27,  57 => 21,  55 => 20,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     Liste des gestionnaires d'agences*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div class="well">*/
/*                     <p>*/
/*                         <a class="btn btn-primary" href="{{ path("create-users-agency")  }}">*/
/*                             <i class="fa fa-plus"></i> Ajouter un gestionnaire*/
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
/*                         <th>Téléphone de contact</th>*/
/*                         <th>E-mail de contact</th>*/
/*                         <th>Agence</th>*/
/* */
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
/*                             <td>{{ user.email }}</td>*/
/*                             <td>{{ user.agency.name }}</td>*/
/* */
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                   <div class="btn-group">*/
/*                                       <a class="btn btn-primary" href="{{ path("list_customer_super_admin",{'idagency':user.agency.id}) }}" title="Clients de cette agence">*/
/*                                           <i class="fa fa-users"></i>*/
/*                                       </a>*/
/*                                   </div>*/
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
