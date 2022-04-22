<?php

/* :Agency/Forms:delAgency.html.twig */
class __TwigTemplate_6b81b38642285b15092911137b358b5f3bda9b64df73c4c0468f55c6703f3ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/Forms:delAgency.html.twig", 1);
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
        $__internal_133fc658e5203bad13a9bb04843cc70a7de9bf392312f21cdd9c3c04637a72a8 = $this->env->getExtension("native_profiler");
        $__internal_133fc658e5203bad13a9bb04843cc70a7de9bf392312f21cdd9c3c04637a72a8->enter($__internal_133fc658e5203bad13a9bb04843cc70a7de9bf392312f21cdd9c3c04637a72a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/Forms:delAgency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133fc658e5203bad13a9bb04843cc70a7de9bf392312f21cdd9c3c04637a72a8->leave($__internal_133fc658e5203bad13a9bb04843cc70a7de9bf392312f21cdd9c3c04637a72a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfde973eb897cb8289ac4675ab8023fe204180fd3ca6a9ff7b6f49c104c7d983 = $this->env->getExtension("native_profiler");
        $__internal_cfde973eb897cb8289ac4675ab8023fe204180fd3ca6a9ff7b6f49c104c7d983->enter($__internal_cfde973eb897cb8289ac4675ab8023fe204180fd3ca6a9ff7b6f49c104c7d983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/Forms:delAgency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/Forms:delAgency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                        Supprimer l'agence
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":Agency/Forms:delAgency.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 25
        $this->loadTemplate("flashMessage.html.twig", ":Agency/Forms:delAgency.html.twig", 25)->display($context);
        // line 26
        echo "
          <p>Êtes-vous certain de vouloir supprimer cette agence  ?</p>

                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", array()), 'row');
        echo "

                    </div>
                </div>


                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 49
        $this->loadTemplate("footer.html.twig", ":Agency/Forms:delAgency.html.twig", 49)->display($context);
        // line 50
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_cfde973eb897cb8289ac4675ab8023fe204180fd3ca6a9ff7b6f49c104c7d983->leave($__internal_cfde973eb897cb8289ac4675ab8023fe204180fd3ca6a9ff7b6f49c104c7d983_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/Forms:delAgency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  114 => 49,  105 => 43,  96 => 37,  89 => 33,  83 => 30,  79 => 29,  74 => 26,  72 => 25,  65 => 20,  63 => 19,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         Supprimer l'agence*/
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*           <p>Êtes-vous certain de vouloir supprimer cette agence  ?</p>*/
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
