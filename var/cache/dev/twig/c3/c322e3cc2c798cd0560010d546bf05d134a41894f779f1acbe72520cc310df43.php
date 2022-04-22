<?php

/* :Cart:paiements-en-attente.html.twig */
class __TwigTemplate_4ced9e04c0e1d69d26dbd5a1bb0a4ba715e6179c0a8306fa2c8a0c25594c4027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:paiements-en-attente.html.twig", 1);
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
        $__internal_953855cd60fd36355e3fc59b90613cd226f4c5785fa25ddcc9f3bd707f22af85 = $this->env->getExtension("native_profiler");
        $__internal_953855cd60fd36355e3fc59b90613cd226f4c5785fa25ddcc9f3bd707f22af85->enter($__internal_953855cd60fd36355e3fc59b90613cd226f4c5785fa25ddcc9f3bd707f22af85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:paiements-en-attente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_953855cd60fd36355e3fc59b90613cd226f4c5785fa25ddcc9f3bd707f22af85->leave($__internal_953855cd60fd36355e3fc59b90613cd226f4c5785fa25ddcc9f3bd707f22af85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe4858a5ab83b24018b8afc072e52a275129a421bc91c2c3a41181ebcad46e80 = $this->env->getExtension("native_profiler");
        $__internal_fe4858a5ab83b24018b8afc072e52a275129a421bc91c2c3a41181ebcad46e80->enter($__internal_fe4858a5ab83b24018b8afc072e52a275129a421bc91c2c3a41181ebcad46e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cart:paiements-en-attente.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:paiements-en-attente.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:paiements-en-attente.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cart:paiements-en-attente.html.twig", 28)->display($context);
        // line 29
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Ajouter au panier</th>
                        <th>Utilisateur pour lequel<br/>sera le produit</th>
                        <th>Libellé</th>
                        <th>Total HT payé par le client</th>
                        <th>Total HT à payer</th>
                        <th>Date d'achat (par le client)</th>


                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiementsEnAttente"]) ? $context["paiementsEnAttente"] : $this->getContext($context, "paiementsEnAttente")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 46
            echo "                        <tr>
                            <td>
                                ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("line_" . $this->getAttribute($context["item"], "id", array()))), 'row');
            echo "
                            </td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "userFinal", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "userFinal", array()), "firstname", array()), "html", null, true);
            echo "<br/>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "userFinal", array()), "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "totalHT", array()), "html", null, true);
            echo "€</td>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, (((($this->getAttribute($this->getAttribute($context["item"], "product", array()), "minPriceHT", array()) == null)) ? ($this->getAttribute($this->getAttribute($context["item"], "product", array()), "priceHT", array())) : ($this->getAttribute($this->getAttribute($context["item"], "product", array()), "minPriceHT", array()))) * $this->getAttribute($context["item"], "quantity", array())), "html", null, true);
            echo "€</td>
                            <td data-order=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Ymd"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>

                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                </table>
                ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 65
        $this->loadTemplate("footer.html.twig", ":Cart:paiements-en-attente.html.twig", 65)->display($context);
        // line 66
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_fe4858a5ab83b24018b8afc072e52a275129a421bc91c2c3a41181ebcad46e80->leave($__internal_fe4858a5ab83b24018b8afc072e52a275129a421bc91c2c3a41181ebcad46e80_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:paiements-en-attente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 66,  160 => 65,  152 => 60,  148 => 58,  136 => 54,  132 => 53,  128 => 52,  124 => 51,  116 => 50,  111 => 48,  107 => 46,  103 => 45,  85 => 30,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Ajouter au panier</th>*/
/*                         <th>Utilisateur pour lequel<br/>sera le produit</th>*/
/*                         <th>Libellé</th>*/
/*                         <th>Total HT payé par le client</th>*/
/*                         <th>Total HT à payer</th>*/
/*                         <th>Date d'achat (par le client)</th>*/
/* */
/* */
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for item in paiementsEnAttente  %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 {{ form_row( attribute(form, 'line_'~item.id)  ) }}*/
/*                             </td>*/
/*                             <td>{{ item.userFinal.name }} {{ item.userFinal.firstname }}<br/>{{ item.userFinal.email }}</td>*/
/*                             <td>{{ item.name }}</td>*/
/*                             <td>{{ item.totalHT }}€</td>*/
/*                             <td>{{ (item.product.minPriceHT==null?item.product.priceHT:item.product.minPriceHT) * item.quantity }}€</td>*/
/*                             <td data-order="{{ item.date |date('Ymd') }}">{{ item.date |date('d/m/Y') }}</td>*/
/* */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 {{ form_end(form) }}*/
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
