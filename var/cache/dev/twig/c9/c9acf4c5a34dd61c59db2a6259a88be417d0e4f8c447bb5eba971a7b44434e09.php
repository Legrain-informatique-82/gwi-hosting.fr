<?php

/* :Instance/Form:liaisonInstanceGandi.html.twig */
class __TwigTemplate_b85c1b0b1731f1c3ec91021e0d64a471ef45933f61658b0e446957bdecfaf26c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 1);
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
        $__internal_7e02eba347dcf9d8480e22c8a8834bab5d0d3421daec44254063ecaba26a2ce9 = $this->env->getExtension("native_profiler");
        $__internal_7e02eba347dcf9d8480e22c8a8834bab5d0d3421daec44254063ecaba26a2ce9->enter($__internal_7e02eba347dcf9d8480e22c8a8834bab5d0d3421daec44254063ecaba26a2ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Instance/Form:liaisonInstanceGandi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e02eba347dcf9d8480e22c8a8834bab5d0d3421daec44254063ecaba26a2ce9->leave($__internal_7e02eba347dcf9d8480e22c8a8834bab5d0d3421daec44254063ecaba26a2ce9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d335e0200e2e244063da0e056c457692fb57aa1eb643fad561c88e9523066ebd = $this->env->getExtension("native_profiler");
        $__internal_d335e0200e2e244063da0e056c457692fb57aa1eb643fad561c88e9523066ebd->enter($__internal_d335e0200e2e244063da0e056c457692fb57aa1eb643fad561c88e9523066ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 27)->display($context);
        // line 28
        echo "



                ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "



                ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 43
        $this->loadTemplate("footer.html.twig", ":Instance/Form:liaisonInstanceGandi.html.twig", 43)->display($context);
        // line 44
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_d335e0200e2e244063da0e056c457692fb57aa1eb643fad561c88e9523066ebd->leave($__internal_d335e0200e2e244063da0e056c457692fb57aa1eb643fad561c88e9523066ebd_prof);

    }

    public function getTemplateName()
    {
        return ":Instance/Form:liaisonInstanceGandi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 44,  105 => 43,  96 => 37,  89 => 33,  85 => 32,  79 => 28,  77 => 27,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/* */
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
