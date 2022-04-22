<?php

/* :Hebergement/Form:add.html.twig */
class __TwigTemplate_23dfc4487cbe7fb3006701c21cb5c4caf28b86f3c0471ff6da929e0fe03114ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement/Form:add.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Hebergement/Form:add.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement/Form:add.html.twig", 10)->display($context);
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
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement/Form:add.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement/Form:add.html.twig", 27)->display($context);
        // line 28
        echo "                <div class=\"col-md-6\">
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "



                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subdomain", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subdomain", array()), 'errors');
        echo "


                        <div class=\"input-group\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subdomain", array()), 'widget');
        echo "
                            <div class=\"input-group-addon\">.";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "html", null, true);
        echo "</div>
                        </div>
                    </div>


                <div class=\"ui-widget\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "instance", array()), 'row');
        echo "

                </div>



                ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 58
        $this->loadTemplate("footer.html.twig", ":Hebergement/Form:add.html.twig", 58)->display($context);
        // line 59
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Hebergement/Form:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 59,  126 => 58,  118 => 53,  109 => 47,  100 => 41,  96 => 40,  89 => 36,  85 => 35,  77 => 30,  73 => 29,  70 => 28,  68 => 27,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/*                 <div class="col-md-6">*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/* */
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.subdomain) }}*/
/*                         {{ form_errors(form.subdomain) }}*/
/* */
/* */
/*                         <div class="input-group">*/
/*                             {{ form_widget(form.subdomain) }}*/
/*                             <div class="input-group-addon">.{{ ndd.name }}</div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                 <div class="ui-widget">*/
/*                     {{ form_row(form.instance) }}*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/*                 {{ form_end(form) }}*/
/*                 </div>*/
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
