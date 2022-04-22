<?php

/* :Cgu/Form:cgu.html.twig */
class __TwigTemplate_df7e784ad4e798bd735673286c971ed2c8d319c90ee0187e0c24e475644fc04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cgu/Form:cgu.html.twig", 1);
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
        $__internal_7085b528b702cc782532e117ce06d393483a59e23180867ffc0c9dd61f3c7f96 = $this->env->getExtension("native_profiler");
        $__internal_7085b528b702cc782532e117ce06d393483a59e23180867ffc0c9dd61f3c7f96->enter($__internal_7085b528b702cc782532e117ce06d393483a59e23180867ffc0c9dd61f3c7f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cgu/Form:cgu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7085b528b702cc782532e117ce06d393483a59e23180867ffc0c9dd61f3c7f96->leave($__internal_7085b528b702cc782532e117ce06d393483a59e23180867ffc0c9dd61f3c7f96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a71ad008a9df38e577ac6698cee6a6532eec017427071ff784e875ba3016d740 = $this->env->getExtension("native_profiler");
        $__internal_a71ad008a9df38e577ac6698cee6a6532eec017427071ff784e875ba3016d740->enter($__internal_a71ad008a9df38e577ac6698cee6a6532eec017427071ff784e875ba3016d740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cgu/Form:cgu.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cgu/Form:cgu.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 17
        $this->loadTemplate("breadcrumb.html.twig", ":Cgu/Form:cgu.html.twig", 17)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("flashMessage.html.twig", ":Cgu/Form:cgu.html.twig", 27)->display($context);
        // line 28
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
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 39
        $this->loadTemplate("footer.html.twig", ":Cgu/Form:cgu.html.twig", 39)->display($context);
        // line 40
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_a71ad008a9df38e577ac6698cee6a6532eec017427071ff784e875ba3016d740->leave($__internal_a71ad008a9df38e577ac6698cee6a6532eec017427071ff784e875ba3016d740_prof);

    }

    public function getTemplateName()
    {
        return ":Cgu/Form:cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  101 => 39,  92 => 33,  87 => 31,  83 => 30,  79 => 28,  77 => 27,  67 => 20,  63 => 18,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
