<?php

/* :Contact/Form:contact.html.twig */
class __TwigTemplate_d430ae1b50709889f101683545f7731e4e33256c6983a282da915a9cf831e801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":Contact/Form:contact.html.twig", 2);
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
        $__internal_da621ed9c99dde32be04e7fa5ae083d49077f3b21fc07e7f6ebe1bbcff8a5d91 = $this->env->getExtension("native_profiler");
        $__internal_da621ed9c99dde32be04e7fa5ae083d49077f3b21fc07e7f6ebe1bbcff8a5d91->enter($__internal_da621ed9c99dde32be04e7fa5ae083d49077f3b21fc07e7f6ebe1bbcff8a5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Form:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da621ed9c99dde32be04e7fa5ae083d49077f3b21fc07e7f6ebe1bbcff8a5d91->leave($__internal_da621ed9c99dde32be04e7fa5ae083d49077f3b21fc07e7f6ebe1bbcff8a5d91_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_4462725bc9023ba8acb39759adfae3ab677bf235c8d3f7f144a164a85d2bb3fe = $this->env->getExtension("native_profiler");
        $__internal_4462725bc9023ba8acb39759adfae3ab677bf235c8d3f7f144a164a85d2bb3fe->enter($__internal_4462725bc9023ba8acb39759adfae3ab677bf235c8d3f7f144a164a85d2bb3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 9
        $this->loadTemplate("header.html.twig", ":Contact/Form:contact.html.twig", 9)->display($context);
        // line 10
        echo "        <!-- =============================================== -->
        ";
        // line 11
        $this->loadTemplate("sidebar.html.twig", ":Contact/Form:contact.html.twig", 11)->display($context);
        // line 12
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":Contact/Form:contact.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 19
        echo "                <h1>
                    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Contact/Form:contact.html.twig", 26)->display($context);
        // line 27
        echo "


                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 31
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
        $this->loadTemplate("footer.html.twig", ":Contact/Form:contact.html.twig", 38)->display($context);
        // line 39
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_4462725bc9023ba8acb39759adfae3ab677bf235c8d3f7f144a164a85d2bb3fe->leave($__internal_4462725bc9023ba8acb39759adfae3ab677bf235c8d3f7f144a164a85d2bb3fe_prof);

    }

    public function getTemplateName()
    {
        return ":Contact/Form:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  99 => 38,  90 => 32,  86 => 31,  82 => 30,  77 => 27,  75 => 26,  66 => 20,  63 => 19,  61 => 18,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
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
/*                 <h1>*/
/*                     {{  h1 }}*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
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
