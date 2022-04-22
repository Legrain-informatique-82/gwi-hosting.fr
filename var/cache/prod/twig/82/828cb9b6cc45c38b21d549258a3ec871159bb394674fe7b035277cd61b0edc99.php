<?php

/* :PriceList/Form:priceListLines.html.twig */
class __TwigTemplate_e817aad6e7fd50460270de5a136769d7ac4a10c7aee3c762ba7a67c5285fc6c4 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":PriceList/Form:priceListLines.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "valid", array()), 'row');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
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
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ("minPrice_" . $this->getAttribute($context["l"], "idProduct", array()))), 'row');
            echo "</td>
                            <td> ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), ("price_" . $this->getAttribute($context["l"], "idProduct", array()))), 'row');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  141 => 86,  139 => 85,  130 => 79,  125 => 76,  119 => 75,  111 => 47,  107 => 46,  103 => 45,  99 => 43,  95 => 42,  82 => 32,  77 => 30,  73 => 29,  70 => 28,  68 => 27,  59 => 20,  57 => 19,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
