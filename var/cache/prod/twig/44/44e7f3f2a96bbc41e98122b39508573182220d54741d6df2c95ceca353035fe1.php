<?php

/* :Product/List:list.html.twig */
class __TwigTemplate_207f8e886ec702bccf99890cd151b4c6719d9ca732999d9e2a2c75d85b7ee395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Product/List:list.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Product/List:list.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Product/List:list.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Product/List:list.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Product/List:list.html.twig", 26)->display($context);
        // line 27
        echo "




                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Nom &amp; prénom</th>
                        <th>Prix HT grille par défaut (par mois)</th>
                        <th>Prix réduit HT grille par défaut (par mois)</th>
                        <th>Tva</th>
                        <th>Période minimum (en mois)</th>
                        <th>Catégories</th>
                        <th>Etat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 47
            echo "
                        <tr>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo " </td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "priceHT", array()), "html", null, true);
            echo "€/mois</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute($context["p"], "minPriceHT", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["p"], "minPriceHT", array()), "Pas de prix réduit")) : ("Pas de prix réduit")), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, ($this->getAttribute($context["p"], "percentTax", array()) * 100), "html", null, true);
            echo "%</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "minPeriod", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 55
            if (twig_test_iterable($this->getAttribute($context["p"], "categories", array()))) {
                // line 56
                echo "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p"], "categories", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                    // line 58
                    echo "                                            <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                    echo "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                    </ul>
                                ";
            } else {
                // line 62
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "categories", array()), "name", array()), "html", null, true);
                echo "
                                ";
            }
            // line 64
            echo "
                            </td>
                            <td>";
            // line 66
            if ($this->getAttribute($context["p"], "active", array())) {
                echo "Actif";
            } else {
                echo "Inactif";
            }
            echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update-product", array("idproduct" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" title=\"Modifier\"><i class=\"fa fa-pencil\"></i></a>
                            ";
            // line 71
            echo "                                </div>
                            </td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </tbody>
                </table>







            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 88
        $this->loadTemplate("footer.html.twig", ":Product/List:list.html.twig", 88)->display($context);
        // line 89
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Product/List:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 89,  189 => 88,  175 => 76,  165 => 71,  161 => 69,  151 => 66,  147 => 64,  141 => 62,  137 => 60,  128 => 58,  124 => 57,  121 => 56,  119 => 55,  114 => 53,  110 => 52,  106 => 51,  102 => 50,  98 => 49,  94 => 47,  90 => 46,  69 => 27,  67 => 26,  59 => 20,  57 => 19,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                    {{ h1 }}*/
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
/* */
/* */
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nom &amp; prénom</th>*/
/*                         <th>Prix HT grille par défaut (par mois)</th>*/
/*                         <th>Prix réduit HT grille par défaut (par mois)</th>*/
/*                         <th>Tva</th>*/
/*                         <th>Période minimum (en mois)</th>*/
/*                         <th>Catégories</th>*/
/*                         <th>Etat</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for p in products %}*/
/* */
/*                         <tr>*/
/*                             <td>{{ p.name }} </td>*/
/*                             <td>{{ p.priceHT }}€/mois</td>*/
/*                             <td>{{ p.minPriceHT |default('Pas de prix réduit')}}</td>*/
/*                             <td>{{ p.percentTax*100 }}%</td>*/
/*                             <td>{{ p.minPeriod }}</td>*/
/*                             <td>*/
/*                                 {% if p.categories is iterable %}*/
/*                                     <ul class="list-unstyled">*/
/*                                         {% for cat in p.categories %}*/
/*                                             <li>{{ cat.name }}</li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 {% else %}*/
/*                                     {{ p.categories.name }}*/
/*                                 {% endif %}*/
/* */
/*                             </td>*/
/*                             <td>{% if p.active %}Actif{% else %}Inactif{% endif %}</td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                 <a href="{{ path('update-product',{'idproduct':p.id}) }}" class="btn btn-warning" title="Modifier"><i class="fa fa-pencil"></i></a>*/
/*                             {#    <a href="" class="btn btn-primary disabled"><i class="fa fa-euro"></i></a> #}*/
/*                                 </div>*/
/*                             </td>*/
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
