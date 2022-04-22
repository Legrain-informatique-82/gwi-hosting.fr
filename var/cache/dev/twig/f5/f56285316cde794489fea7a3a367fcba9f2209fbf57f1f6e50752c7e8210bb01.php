<?php

/* :Cart:stepCreateServer.html.twig */
class __TwigTemplate_bc62dec2e40598fe6c8054db9158d8517f24335514dc2d92e93cb3de99cfbd42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:stepCreateServer.html.twig", 1);
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
        $__internal_3bf2173750da84932193d9e2c753689f9cce2bfdb96ebed7a0e1d692c92ff1e4 = $this->env->getExtension("native_profiler");
        $__internal_3bf2173750da84932193d9e2c753689f9cce2bfdb96ebed7a0e1d692c92ff1e4->enter($__internal_3bf2173750da84932193d9e2c753689f9cce2bfdb96ebed7a0e1d692c92ff1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:stepCreateServer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf2173750da84932193d9e2c753689f9cce2bfdb96ebed7a0e1d692c92ff1e4->leave($__internal_3bf2173750da84932193d9e2c753689f9cce2bfdb96ebed7a0e1d692c92ff1e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a44262ae244a8e371a774d4f666e9e8a1307b7adeddf88b3debbac7639450a5 = $this->env->getExtension("native_profiler");
        $__internal_2a44262ae244a8e371a774d4f666e9e8a1307b7adeddf88b3debbac7639450a5->enter($__internal_2a44262ae244a8e371a774d4f666e9e8a1307b7adeddf88b3debbac7639450a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cart:stepCreateServer.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:stepCreateServer.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:stepCreateServer.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Cart:stepCreateServer.html.twig", 27)->display($context);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "








            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 44
        $this->loadTemplate("footer.html.twig", ":Cart:stepCreateServer.html.twig", 44)->display($context);
        // line 45
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_2a44262ae244a8e371a774d4f666e9e8a1307b7adeddf88b3debbac7639450a5->leave($__internal_2a44262ae244a8e371a774d4f666e9e8a1307b7adeddf88b3debbac7639450a5_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:stepCreateServer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  106 => 44,  91 => 32,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {{ form_end(form) }}*/
/* */
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
