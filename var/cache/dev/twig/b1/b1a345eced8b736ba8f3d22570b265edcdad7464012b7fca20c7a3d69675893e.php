<?php

/* :Agency/List:listAgency.html.twig */
class __TwigTemplate_335766bc000eec5dc494d63576cd161c34b1f6a990b06711cb2091fe5ec20095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/List:listAgency.html.twig", 1);
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
        $__internal_d309ff81b3ef8c2e99b67c1e72bb47584f389e3c6021bc379eb51b6acfe1bcb3 = $this->env->getExtension("native_profiler");
        $__internal_d309ff81b3ef8c2e99b67c1e72bb47584f389e3c6021bc379eb51b6acfe1bcb3->enter($__internal_d309ff81b3ef8c2e99b67c1e72bb47584f389e3c6021bc379eb51b6acfe1bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/List:listAgency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d309ff81b3ef8c2e99b67c1e72bb47584f389e3c6021bc379eb51b6acfe1bcb3->leave($__internal_d309ff81b3ef8c2e99b67c1e72bb47584f389e3c6021bc379eb51b6acfe1bcb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b416138a84807810225f81736bb8cbedf8cb857ea5d608b84eb5bd401faedc7 = $this->env->getExtension("native_profiler");
        $__internal_2b416138a84807810225f81736bb8cbedf8cb857ea5d608b84eb5bd401faedc7->enter($__internal_2b416138a84807810225f81736bb8cbedf8cb857ea5d608b84eb5bd401faedc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/List:listAgency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/List:listAgency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Liste des Agences web
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Agency/List:listAgency.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Agency/List:listAgency.html.twig", 26)->display($context);
        // line 27
        echo "
                <div class=\"well\">
                    <p>
                        <a class=\"btn btn-primary\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("create-agency");
        echo "\">
                            <i class=\"fa fa-plus\"></i> Ajouter une agence
                        </a>
                    </p>
                </div>


                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Siret</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Téléphone de contact</th>
                        <th>E-mail de contact</th>
                        <th>site internet</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencies"]) ? $context["agencies"] : $this->getContext($context, "agencies")));
        foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
            // line 51
            echo "                        <tr>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "siret", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "address1", array()), "html", null, true);
            echo "
                                ";
            // line 55
            if ($this->getAttribute($context["agency"], "address2", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "address2", array()), "html", null, true);
            }
            // line 56
            echo "                                ";
            if ($this->getAttribute($context["agency"], "address3", array())) {
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "address3", array()), "html", null, true);
            }
            // line 57
            echo "                                <br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agency"], "zipCode", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["agency"], "city", array()), "name", array()), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "phone", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 61
            if ($this->getAttribute($context["agency"], "website", array())) {
                echo "<a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "website", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["agency"], "website", array()), "html", null, true);
                echo "</a>";
            }
            echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    <a class=\"btn btn-warning\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update-agency", array("idAgency" => $this->getAttribute($context["agency"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete-agency", array("idagency" => $this->getAttribute($context["agency"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i></a>
                                </div>
                            </td>

                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                    </tbody>
                </table>







            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 84
        $this->loadTemplate("footer.html.twig", ":Agency/List:listAgency.html.twig", 84)->display($context);
        // line 85
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_2b416138a84807810225f81736bb8cbedf8cb857ea5d608b84eb5bd401faedc7->leave($__internal_2b416138a84807810225f81736bb8cbedf8cb857ea5d608b84eb5bd401faedc7_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/List:listAgency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 85,  192 => 84,  178 => 72,  165 => 65,  161 => 64,  149 => 61,  145 => 60,  141 => 59,  133 => 57,  127 => 56,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  107 => 51,  103 => 50,  80 => 30,  75 => 27,  73 => 26,  66 => 21,  64 => 20,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     Liste des Agences web*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div class="well">*/
/*                     <p>*/
/*                         <a class="btn btn-primary" href="{{ path("create-agency")  }}">*/
/*                             <i class="fa fa-plus"></i> Ajouter une agence*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Siret</th>*/
/*                         <th>Nom</th>*/
/*                         <th>Adresse</th>*/
/*                         <th>Téléphone de contact</th>*/
/*                         <th>E-mail de contact</th>*/
/*                         <th>site internet</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for agency in agencies %}*/
/*                         <tr>*/
/*                             <td>{{ agency.siret }}</td>*/
/*                             <td>{{ agency.name }}</td>*/
/*                             <td>{{ agency.address1 }}*/
/*                                 {% if agency.address2 %}<br/>{{ agency.address2 }}{% endif %}*/
/*                                 {% if agency.address3 %}<br/>{{ agency.address3 }}{% endif %}*/
/*                                 <br/>{{ agency.zipCode.name }} {{ agency.city.name }}*/
/*                             </td>*/
/*                             <td>{{ agency.phone }}</td>*/
/*                             <td>{{ agency.email }}</td>*/
/*                             <td>{% if agency.website %}<a target="_blank" href="{{ agency.website }}">{{ agency.website }}</a>{% endif %}</td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                     <a class="btn btn-warning" href="{{ path('update-agency',{'idAgency':agency.id })}}"><i class="fa fa-pencil"></i></a>*/
/*                                     <a class="btn btn-danger" href="{{ path('delete-agency',{'idagency':agency.id })}}"><i class="fa fa-trash"></i></a>*/
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
