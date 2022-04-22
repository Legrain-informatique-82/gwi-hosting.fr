<?php

/* :Hebergement/Form:add.html.twig */
class __TwigTemplate_871d7e102e3ec8543e530dfde1a4f55bbe8f9b973a2689b8fb88f60dee0ff3aa extends Twig_Template
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
        $__internal_d507d0f7b345093a3e4cb4f93ee73a8510ca99f9a0124a5139ee698c8bdf9a81 = $this->env->getExtension("native_profiler");
        $__internal_d507d0f7b345093a3e4cb4f93ee73a8510ca99f9a0124a5139ee698c8bdf9a81->enter($__internal_d507d0f7b345093a3e4cb4f93ee73a8510ca99f9a0124a5139ee698c8bdf9a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Hebergement/Form:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d507d0f7b345093a3e4cb4f93ee73a8510ca99f9a0124a5139ee698c8bdf9a81->leave($__internal_d507d0f7b345093a3e4cb4f93ee73a8510ca99f9a0124a5139ee698c8bdf9a81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd57cbf966eebdce3a47158b5bb1f1bf598af0050796b241c5554f44dd0fcc4 = $this->env->getExtension("native_profiler");
        $__internal_3bd57cbf966eebdce3a47158b5bb1f1bf598af0050796b241c5554f44dd0fcc4->enter($__internal_3bd57cbf966eebdce3a47158b5bb1f1bf598af0050796b241c5554f44dd0fcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement/Form:add.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "



                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subdomain", array()), 'label');
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subdomain", array()), 'errors');
        echo "


                        <div class=\"input-group\">
                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subdomain", array()), 'widget');
        echo "
                            <div class=\"input-group-addon\">.";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "html", null, true);
        echo "</div>
                        </div>
                    </div>


                <div class=\"ui-widget\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instance", array()), 'row');
        echo "

                </div>



                ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_3bd57cbf966eebdce3a47158b5bb1f1bf598af0050796b241c5554f44dd0fcc4->leave($__internal_3bd57cbf966eebdce3a47158b5bb1f1bf598af0050796b241c5554f44dd0fcc4_prof);

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
        return array (  137 => 59,  135 => 58,  127 => 53,  118 => 47,  109 => 41,  105 => 40,  98 => 36,  94 => 35,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
