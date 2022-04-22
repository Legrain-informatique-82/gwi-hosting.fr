<?php

/* :Agency/Forms:facturationByLegrain.html.twig */
class __TwigTemplate_92e0bcf506929c146290535b062e10ee0aff014b8f6bea28388adb1b1c467a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 1);
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
        $__internal_fc80e1f31f19039cae6178f820340ace5ff1874f2b1591d1d2f0ae7b8d66e3ab = $this->env->getExtension("native_profiler");
        $__internal_fc80e1f31f19039cae6178f820340ace5ff1874f2b1591d1d2f0ae7b8d66e3ab->enter($__internal_fc80e1f31f19039cae6178f820340ace5ff1874f2b1591d1d2f0ae7b8d66e3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/Forms:facturationByLegrain.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc80e1f31f19039cae6178f820340ace5ff1874f2b1591d1d2f0ae7b8d66e3ab->leave($__internal_fc80e1f31f19039cae6178f820340ace5ff1874f2b1591d1d2f0ae7b8d66e3ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92bd7a399abe62c5e7e36c5c743ab907650db3a9214046e60bd2a340e91773a = $this->env->getExtension("native_profiler");
        $__internal_d92bd7a399abe62c5e7e36c5c743ab907650db3a9214046e60bd2a340e91773a->enter($__internal_d92bd7a399abe62c5e7e36c5c743ab907650db3a9214046e60bd2a340e91773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 17
        $this->loadTemplate("breadcrumb.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 17)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 18
        echo "
                <h1>
                  ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 27)->display($context);
        // line 28
        echo "<div class=\"well\">
    <p>Vous vous appretez à choisir votre mode de facturation.<br/> <b class=\"text-danger\">Attention, vous ne pourrez plus le changer une fois ce choix effectué</b></p>

</div>

                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 42
        $this->loadTemplate("footer.html.twig", ":Agency/Forms:facturationByLegrain.html.twig", 42)->display($context);
        // line 43
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_d92bd7a399abe62c5e7e36c5c743ab907650db3a9214046e60bd2a340e91773a->leave($__internal_d92bd7a399abe62c5e7e36c5c743ab907650db3a9214046e60bd2a340e91773a_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/Forms:facturationByLegrain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  104 => 42,  95 => 36,  90 => 34,  86 => 33,  79 => 28,  77 => 27,  67 => 20,  63 => 18,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*                 <h1>*/
/*                   {{ h1 }}*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* <div class="well">*/
/*     <p>Vous vous appretez à choisir votre mode de facturation.<br/> <b class="text-danger">Attention, vous ne pourrez plus le changer une fois ce choix effectué</b></p>*/
/* */
/* </div>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
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
