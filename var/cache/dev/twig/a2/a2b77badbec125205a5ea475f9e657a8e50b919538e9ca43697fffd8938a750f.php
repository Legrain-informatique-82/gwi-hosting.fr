<?php

/* :Agency/Forms:param-paiements.html.twig */
class __TwigTemplate_39e61978662ca14ce68beb8c5148d6b62480cafe710ed46c1687e0d989c25a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/Forms:param-paiements.html.twig", 1);
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
        $__internal_153af54c4bdcd5a7e044ac59c384a2a381ba4a3abb3e68002353062b44293e14 = $this->env->getExtension("native_profiler");
        $__internal_153af54c4bdcd5a7e044ac59c384a2a381ba4a3abb3e68002353062b44293e14->enter($__internal_153af54c4bdcd5a7e044ac59c384a2a381ba4a3abb3e68002353062b44293e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/Forms:param-paiements.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153af54c4bdcd5a7e044ac59c384a2a381ba4a3abb3e68002353062b44293e14->leave($__internal_153af54c4bdcd5a7e044ac59c384a2a381ba4a3abb3e68002353062b44293e14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4ef4f06618cf06a58024541a503c6180c9d708e281d94434da8ef700b391af0 = $this->env->getExtension("native_profiler");
        $__internal_c4ef4f06618cf06a58024541a503c6180c9d708e281d94434da8ef700b391af0->enter($__internal_c4ef4f06618cf06a58024541a503c6180c9d708e281d94434da8ef700b391af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/Forms:param-paiements.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/Forms:param-paiements.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 17
        $this->loadTemplate("breadcrumb.html.twig", ":Agency/Forms:param-paiements.html.twig", 17)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("flashMessage.html.twig", ":Agency/Forms:param-paiements.html.twig", 27)->display($context);
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
        // line 38
        $this->loadTemplate("footer.html.twig", ":Agency/Forms:param-paiements.html.twig", 38)->display($context);
        // line 39
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_c4ef4f06618cf06a58024541a503c6180c9d708e281d94434da8ef700b391af0->leave($__internal_c4ef4f06618cf06a58024541a503c6180c9d708e281d94434da8ef700b391af0_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/Forms:param-paiements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  100 => 38,  91 => 32,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  67 => 20,  63 => 18,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
