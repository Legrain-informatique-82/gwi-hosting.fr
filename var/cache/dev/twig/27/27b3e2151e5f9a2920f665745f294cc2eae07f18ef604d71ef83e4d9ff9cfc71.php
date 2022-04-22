<?php

/* :Product/Form:update.html.twig */
class __TwigTemplate_85ed6342103c8ff4a46bed790a070ceb547fdd55180a39ea41d9022eabd1de1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Product/Form:update.html.twig", 1);
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
        $__internal_a2e54e4c802e0d6a45850cb6b7a03a12f8b2695744a3740f5c6b097e36ab8f22 = $this->env->getExtension("native_profiler");
        $__internal_a2e54e4c802e0d6a45850cb6b7a03a12f8b2695744a3740f5c6b097e36ab8f22->enter($__internal_a2e54e4c802e0d6a45850cb6b7a03a12f8b2695744a3740f5c6b097e36ab8f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Product/Form:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e54e4c802e0d6a45850cb6b7a03a12f8b2695744a3740f5c6b097e36ab8f22->leave($__internal_a2e54e4c802e0d6a45850cb6b7a03a12f8b2695744a3740f5c6b097e36ab8f22_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcd52e992ed8b0faa19d499a1632da7bf684b893822a0a50f789a49098685073 = $this->env->getExtension("native_profiler");
        $__internal_dcd52e992ed8b0faa19d499a1632da7bf684b893822a0a50f789a49098685073->enter($__internal_dcd52e992ed8b0faa19d499a1632da7bf684b893822a0a50f789a49098685073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Product/Form:update.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Product/Form:update.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Product/Form:update.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Product/Form:update.html.twig", 26)->display($context);
        // line 27
        echo "




                ";
        // line 33
        echo "
                ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "





            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 45
        $this->loadTemplate("footer.html.twig", ":Product/Form:update.html.twig", 45)->display($context);
        // line 46
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_dcd52e992ed8b0faa19d499a1632da7bf684b893822a0a50f789a49098685073->leave($__internal_dcd52e992ed8b0faa19d499a1632da7bf684b893822a0a50f789a49098685073_prof);

    }

    public function getTemplateName()
    {
        return ":Product/Form:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  108 => 45,  96 => 36,  92 => 35,  88 => 34,  85 => 33,  78 => 27,  76 => 26,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                    {{ h1 }}*/
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/* */
/* */
/*                 {# {{ dump(product) }} #}*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_end(form) }}*/
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
