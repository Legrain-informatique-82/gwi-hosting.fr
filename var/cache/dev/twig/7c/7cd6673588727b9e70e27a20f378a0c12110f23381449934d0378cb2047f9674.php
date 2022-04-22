<?php

/* :User/Form:delUser.html.twig */
class __TwigTemplate_ab4269118b0ee1b3a9eec1c021e9d4db4d5c191de5a86ad113879bf775591f9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User/Form:delUser.html.twig", 1);
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
        $__internal_f89bb3353c4263a5ae972a8b8699ffcaa0ebecf4694e2ce0d69a75e73acdecd9 = $this->env->getExtension("native_profiler");
        $__internal_f89bb3353c4263a5ae972a8b8699ffcaa0ebecf4694e2ce0d69a75e73acdecd9->enter($__internal_f89bb3353c4263a5ae972a8b8699ffcaa0ebecf4694e2ce0d69a75e73acdecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User/Form:delUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89bb3353c4263a5ae972a8b8699ffcaa0ebecf4694e2ce0d69a75e73acdecd9->leave($__internal_f89bb3353c4263a5ae972a8b8699ffcaa0ebecf4694e2ce0d69a75e73acdecd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24575655bd57079fc917db1803171234bb8297a854b8d77b3feae45f753a1c6e = $this->env->getExtension("native_profiler");
        $__internal_24575655bd57079fc917db1803171234bb8297a854b8d77b3feae45f753a1c6e->enter($__internal_24575655bd57079fc917db1803171234bb8297a854b8d77b3feae45f753a1c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":User/Form:delUser.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":User/Form:delUser.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":User/Form:delUser.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":User/Form:delUser.html.twig", 27)->display($context);
        // line 28
        echo "
                <p>Êtes-vous certain de vouloir supprimer l'utilisateur ? Attention, la suppression est irreversible.</p>

                ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", array()), 'row');
        echo "

                    </div>
                </div>


                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 52
        $this->loadTemplate("footer.html.twig", ":User/Form:delUser.html.twig", 52)->display($context);
        // line 53
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_24575655bd57079fc917db1803171234bb8297a854b8d77b3feae45f753a1c6e->leave($__internal_24575655bd57079fc917db1803171234bb8297a854b8d77b3feae45f753a1c6e_prof);

    }

    public function getTemplateName()
    {
        return ":User/Form:delUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 53,  120 => 52,  110 => 45,  101 => 39,  94 => 35,  88 => 32,  84 => 31,  79 => 28,  77 => 27,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <p>Êtes-vous certain de vouloir supprimer l'utilisateur ? Attention, la suppression est irreversible.</p>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.delete) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.cancel) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 {{ form_end(form) }}*/
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
