<?php

/* :Email/Form:disableResponder.html.twig */
class __TwigTemplate_e6aee7d29ec154f408e85de64f0d6101feb0cedc21884c1d7008b9b16cd587a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:disableResponder.html.twig", 1);
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
        $__internal_edf906c4bbfcfad15d8dcc4c918806101c39f9e7eb074bc460ee5721ccdf10f1 = $this->env->getExtension("native_profiler");
        $__internal_edf906c4bbfcfad15d8dcc4c918806101c39f9e7eb074bc460ee5721ccdf10f1->enter($__internal_edf906c4bbfcfad15d8dcc4c918806101c39f9e7eb074bc460ee5721ccdf10f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:disableResponder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edf906c4bbfcfad15d8dcc4c918806101c39f9e7eb074bc460ee5721ccdf10f1->leave($__internal_edf906c4bbfcfad15d8dcc4c918806101c39f9e7eb074bc460ee5721ccdf10f1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46804a071598842f6213d09f0c453f3742ef8504b09c1be04d1fd06f4837950f = $this->env->getExtension("native_profiler");
        $__internal_46804a071598842f6213d09f0c453f3742ef8504b09c1be04d1fd06f4837950f->enter($__internal_46804a071598842f6213d09f0c453f3742ef8504b09c1be04d1fd06f4837950f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email/Form:disableResponder.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:disableResponder.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:disableResponder.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 19
        echo "
                <h1>
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:disableResponder.html.twig", 28)->display($context);
        // line 29
        echo "

                <p>Êtes-vous certain de vouloir désactiver ce répondeur ?</p>

                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateEnd", array()), 'row');
        echo "

                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "disable", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", array()), 'row');
        echo "

                    </div>
                </div>


                ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 55
        $this->loadTemplate("footer.html.twig", ":Email/Form:disableResponder.html.twig", 55)->display($context);
        // line 56
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_46804a071598842f6213d09f0c453f3742ef8504b09c1be04d1fd06f4837950f->leave($__internal_46804a071598842f6213d09f0c453f3742ef8504b09c1be04d1fd06f4837950f_prof);

    }

    public function getTemplateName()
    {
        return ":Email/Form:disableResponder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  126 => 55,  117 => 49,  108 => 43,  101 => 39,  94 => 35,  90 => 34,  86 => 33,  80 => 29,  78 => 28,  68 => 21,  64 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*                 <h1>*/
/*                     {{  h1 }}*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*                 <p>Êtes-vous certain de vouloir désactiver ce répondeur ?</p>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_row(form.dateEnd) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.disable) }}*/
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
