<?php

/* :PriceList/List:priceList.html.twig */
class __TwigTemplate_6a81b6af41fefc6a1ce1a061d0001e2004d889b2943f3af594527221f290141e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":PriceList/List:priceList.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":PriceList/List:priceList.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":PriceList/List:priceList.html.twig", 10)->display($context);
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
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":PriceList/List:priceList.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":PriceList/List:priceList.html.twig", 29)->display($context);
        // line 30
        echo "

<p class=\"well\">
    <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("create-list-pricelists");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter une grille de tarifs</a>
</p>

                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">

                    <thead>
                    <tr>
                        <td>Nom de la liste</td>
                        <td>Par défaut</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "                        <tr>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</td>

                            <td>";
            // line 50
            if ($this->getAttribute($context["item"], "isDefault", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("price-list-update-liste", array("idPriceList" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" title=\"Modifier la grille\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("price-list-update-prices", array("idPriceList" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" title=\"Gérer les prix\"><i class=\"fa fa-cogs\"></i></a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </tbody>
                </table>






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 70
        $this->loadTemplate("footer.html.twig", ":PriceList/List:priceList.html.twig", 70)->display($context);
        // line 71
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":PriceList/List:priceList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 71,  143 => 70,  130 => 59,  119 => 54,  115 => 53,  105 => 50,  100 => 48,  97 => 47,  93 => 46,  77 => 33,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* <p class="well">*/
/*     <a href="{{ path('create-list-pricelists') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter une grille de tarifs</a>*/
/* </p>*/
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/* */
/*                     <thead>*/
/*                     <tr>*/
/*                         <td>Nom de la liste</td>*/
/*                         <td>Par défaut</td>*/
/*                         <td>Actions</td>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for item in list %}*/
/*                         <tr>*/
/*                             <td>{{ item.name }}</td>*/
/* */
/*                             <td>{% if item.isDefault %}Oui{% else %}Non{% endif %}</td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                     <a href="{{ path("price-list-update-liste",{'idPriceList':item.id}) }}" class="btn btn-warning" title="Modifier la grille"><i class="fa fa-pencil"></i></a>*/
/*                                     <a href="{{ path("price-list-update-prices",{'idPriceList':item.id}) }}" class="btn btn-primary" title="Gérer les prix"><i class="fa fa-cogs"></i></a>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
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
