<?php

/* :PriceList/Form:priceListLines.html.twig */
class __TwigTemplate_e419f71e31399ef45bf2c760cdb6a626ec2159e5cffbc19282dd849b4cb53c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":PriceList/Form:priceListLines.html.twig", 1);
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
        $__internal_f830b4094feed2eecbe34f3d2feb7875ee3596e4ea483cbdbef30ce618ea90cd = $this->env->getExtension("native_profiler");
        $__internal_f830b4094feed2eecbe34f3d2feb7875ee3596e4ea483cbdbef30ce618ea90cd->enter($__internal_f830b4094feed2eecbe34f3d2feb7875ee3596e4ea483cbdbef30ce618ea90cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":PriceList/Form:priceListLines.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f830b4094feed2eecbe34f3d2feb7875ee3596e4ea483cbdbef30ce618ea90cd->leave($__internal_f830b4094feed2eecbe34f3d2feb7875ee3596e4ea483cbdbef30ce618ea90cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_298c563a1ba450c5cc1a7b345bb80dbd1d9d958ffe858d423eff2d6a38fe1c68 = $this->env->getExtension("native_profiler");
        $__internal_298c563a1ba450c5cc1a7b345bb80dbd1d9d958ffe858d423eff2d6a38fe1c68->enter($__internal_298c563a1ba450c5cc1a7b345bb80dbd1d9d958ffe858d423eff2d6a38fe1c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":PriceList/Form:priceListLines.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":PriceList/Form:priceListLines.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":PriceList/Form:priceListLines.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":PriceList/Form:priceListLines.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valid", array()), 'row');
        echo "
                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Nom du produit</th>
                        <th>Prix temporaire HT</th>
                        <th>prix HT</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 43
            echo "
                        <tr>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "productName", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("minPrice_" . $this->getAttribute($context["l"], "idProduct", array()))), 'row');
            echo "</td>
                            <td> ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ("price_" . $this->getAttribute($context["l"], "idProduct", array()))), 'row');
            echo "</td>
                        </tr>



                        ";
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </tbody>
                </table>

                ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 85
        $this->loadTemplate("footer.html.twig", ":PriceList/Form:priceListLines.html.twig", 85)->display($context);
        // line 86
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_298c563a1ba450c5cc1a7b345bb80dbd1d9d958ffe858d423eff2d6a38fe1c68->leave($__internal_298c563a1ba450c5cc1a7b345bb80dbd1d9d958ffe858d423eff2d6a38fe1c68_prof);

    }

    public function getTemplateName()
    {
        return ":PriceList/Form:priceListLines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 86,  148 => 85,  139 => 79,  134 => 76,  128 => 75,  120 => 47,  116 => 46,  112 => 45,  108 => 43,  104 => 42,  91 => 32,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_row(form.valid) }}*/
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nom du produit</th>*/
/*                         <th>Prix temporaire HT</th>*/
/*                         <th>prix HT</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for l in list %}*/
/* */
/*                         <tr>*/
/*                             <td>{{ l.productName }}</td>*/
/*                             <td> {{ form_row( attribute(form, 'minPrice_'~l.idProduct)  ) }}</td>*/
/*                             <td> {{ form_row( attribute(form, 'price_'~l.idProduct)  ) }}</td>*/
/*                         </tr>*/
/* */
/* */
/* */
/*                         {#*/
/*                         {% if loop.index0 %3==0 %}*/
/*                             {% if loop.first == false%}*/
/*                                 </div><!-- End .row -->*/
/*                             {% endif %}*/
/*                             <div class="row">*/
/*                         {% endif %}*/
/*                         <div class="col-md-4">*/
/*                             <div class="box box-primary">*/
/*                                 <div class="box-header with-border">*/
/*                                     <h3 class="box-title">{{ l.productName }}</h3>*/
/* */
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body">*/
/*                                     {{ form_row( attribute(form, 'minPrice_'~l.id)  ) }}*/
/*                                     {{ form_row( attribute(form, 'price_'~l.id)  ) }}*/
/*                                 </div><!-- /.box-body -->*/
/*                             </div>*/
/*                         </div>*/
/*                         {% i  f loop.last %}*/
/*                     </div><!-- End .row -->*/
/*                     {% endif %}*/
/*                     #}*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 {{ form_end(form) }}*/
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
