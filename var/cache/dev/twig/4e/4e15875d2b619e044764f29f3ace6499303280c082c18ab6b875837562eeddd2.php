<?php

/* :Hebergement/Form:addndd.html.twig */
class __TwigTemplate_c94ec912aa89cf5409be41c0f7bc97bf338629048164782a9b171bd08c53ee8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement/Form:addndd.html.twig", 1);
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
        $__internal_1a02d62a8ebbe99d444bdc339f91b59be17eee1b79e34c49fbda91cb06d203e3 = $this->env->getExtension("native_profiler");
        $__internal_1a02d62a8ebbe99d444bdc339f91b59be17eee1b79e34c49fbda91cb06d203e3->enter($__internal_1a02d62a8ebbe99d444bdc339f91b59be17eee1b79e34c49fbda91cb06d203e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Hebergement/Form:addndd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a02d62a8ebbe99d444bdc339f91b59be17eee1b79e34c49fbda91cb06d203e3->leave($__internal_1a02d62a8ebbe99d444bdc339f91b59be17eee1b79e34c49fbda91cb06d203e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b58c6ce8537f80389feaaa31af13c70b5703523d9c376e483b8454ac79e65340 = $this->env->getExtension("native_profiler");
        $__internal_b58c6ce8537f80389feaaa31af13c70b5703523d9c376e483b8454ac79e65340->enter($__internal_b58c6ce8537f80389feaaa31af13c70b5703523d9c376e483b8454ac79e65340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Hebergement/Form:addndd.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement/Form:addndd.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement/Form:addndd.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement/Form:addndd.html.twig", 27)->display($context);
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

<p>Choisir le serveur sur lequel vous voulez héberger votre domaine.</p>

                <div class=\"ui-widget\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instance", array()), 'row');
        echo "

                </div>



                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 50
        $this->loadTemplate("footer.html.twig", ":Hebergement/Form:addndd.html.twig", 50)->display($context);
        // line 51
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_b58c6ce8537f80389feaaa31af13c70b5703523d9c376e483b8454ac79e65340->leave($__internal_b58c6ce8537f80389feaaa31af13c70b5703523d9c376e483b8454ac79e65340_prof);

    }

    public function getTemplateName()
    {
        return ":Hebergement/Form:addndd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 51,  115 => 50,  107 => 45,  98 => 39,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* <p>Choisir le serveur sur lequel vous voulez héberger votre domaine.</p>*/
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
