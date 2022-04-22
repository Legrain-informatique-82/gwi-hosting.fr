<?php

/* :Cart:cart.html.twig */
class __TwigTemplate_ac2348784efb291d831db7859a433b1da85d70498957890853dc862de965d1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:cart.html.twig", 1);
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
        $__internal_21827dc2d4ae8012fa6f1455a1a58386c78d905d6c51d0724db66c6307717990 = $this->env->getExtension("native_profiler");
        $__internal_21827dc2d4ae8012fa6f1455a1a58386c78d905d6c51d0724db66c6307717990->enter($__internal_21827dc2d4ae8012fa6f1455a1a58386c78d905d6c51d0724db66c6307717990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21827dc2d4ae8012fa6f1455a1a58386c78d905d6c51d0724db66c6307717990->leave($__internal_21827dc2d4ae8012fa6f1455a1a58386c78d905d6c51d0724db66c6307717990_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b185cea7845510c5e74bddd45863194d83590c4a872218590f6108ccc16f3d41 = $this->env->getExtension("native_profiler");
        $__internal_b185cea7845510c5e74bddd45863194d83590c4a872218590f6108ccc16f3d41->enter($__internal_b185cea7845510c5e74bddd45863194d83590c4a872218590f6108ccc16f3d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cart:cart.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:cart.html.twig", 10)->display($context);
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
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:cart.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cart:cart.html.twig", 28)->display($context);
        // line 29
        echo "
                <table class=\"table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Supprimer</th>
                        <th>Total HT ( au prorata)</th>
                        <th>Taux TVA</th>
                        <th>Total TTC</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th colspan=\"3\">&nbsp;</th>
                        <th>Total HT  : </th>
                        <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalHt", array()), "html", null, true);
        echo " €</th>
                    </tr>
                    <tr>
                        <th colspan=\"3\">&nbsp;</th>
                        <th>Total TVA  : </th>
                        <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTax", array()), "html", null, true);
        echo " €</th>
                    </tr>
                    <tr>
                        <th colspan=\"3\">&nbsp;</th>
                        <th>Total TTC  : </th>
                        <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()), "html", null, true);
        echo " €</th>
                    </tr>
                    </tfoot>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "cartLines", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 58
            echo "                    <tbody>
                    <tr>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "productName", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_item_cart", array("idline" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a></td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "totalHt", array()), "html", null, true);
            echo " €</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, ($this->getAttribute($context["line"], "percentTax", array()) * 100), "html", null, true);
            echo " %</td>
                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "totalTTC", array()), "html", null, true);
            echo " €</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                        <tr>
                            <td colspan=\"6\">
                                Votre panier ne contient aucun article.
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    </tbody>
                </table>




                ";
        // line 80
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("next_step_cart");
        echo "\" class=\"btn btn-success\">Pousuivre</a>




            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 88
        $this->loadTemplate("footer.html.twig", ":Cart:cart.html.twig", 88)->display($context);
        // line 89
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_b185cea7845510c5e74bddd45863194d83590c4a872218590f6108ccc16f3d41->leave($__internal_b185cea7845510c5e74bddd45863194d83590c4a872218590f6108ccc16f3d41_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 89,  183 => 88,  171 => 80,  163 => 73,  152 => 67,  144 => 64,  140 => 63,  136 => 62,  132 => 61,  128 => 60,  124 => 58,  119 => 57,  113 => 54,  105 => 49,  97 => 44,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <table class="table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nom</th>*/
/*                         <th>Supprimer</th>*/
/*                         <th>Total HT ( au prorata)</th>*/
/*                         <th>Taux TVA</th>*/
/*                         <th>Total TTC</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tfoot>*/
/*                     <tr>*/
/*                         <th colspan="3">&nbsp;</th>*/
/*                         <th>Total HT  : </th>*/
/*                         <th>{{ cart.totalHt }} €</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th colspan="3">&nbsp;</th>*/
/*                         <th>Total TVA  : </th>*/
/*                         <th>{{ cart.totalTax }} €</th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th colspan="3">&nbsp;</th>*/
/*                         <th>Total TTC  : </th>*/
/*                         <th>{{ cart.totalTTC }} €</th>*/
/*                     </tr>*/
/*                     </tfoot>*/
/*                     {% for line in cart.cartLines %}*/
/*                     <tbody>*/
/*                     <tr>*/
/*                         <td>{{ line.productName }}</td>*/
/*                         <td><a href="{{ path('remove_item_cart',{'idline':line.id}) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>*/
/*                         <td>{{ line.totalHt }} €</td>*/
/*                         <td>{{ line.percentTax * 100 }} %</td>*/
/*                         <td>{{ line.totalTTC }} €</td>*/
/*                     </tr>*/
/*                     {% else %}*/
/*                         <tr>*/
/*                             <td colspan="6">*/
/*                                 Votre panier ne contient aucun article.*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/* */
/* */
/* */
/*                 {# btn poursuivre. #}*/
/*                 <a href="{{ path("next_step_cart") }}" class="btn btn-success">Pousuivre</a>*/
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
