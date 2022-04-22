<?php

/* :Email/Form:deleteMailForward.html.twig */
class __TwigTemplate_02869420ea50ce41cc5e25b4f89f6eb307db567c52db8822c1eb5b0f20d355e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:deleteMailForward.html.twig", 1);
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
        $__internal_7a4cda0b912ddb5043d16150ac1f47172b81fa8605c50e848981f99094afc222 = $this->env->getExtension("native_profiler");
        $__internal_7a4cda0b912ddb5043d16150ac1f47172b81fa8605c50e848981f99094afc222->enter($__internal_7a4cda0b912ddb5043d16150ac1f47172b81fa8605c50e848981f99094afc222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:deleteMailForward.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4cda0b912ddb5043d16150ac1f47172b81fa8605c50e848981f99094afc222->leave($__internal_7a4cda0b912ddb5043d16150ac1f47172b81fa8605c50e848981f99094afc222_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb72691d6fd0d64e3cf93efcaed10e02647c911d6d1b7ad06a74f81549b94490 = $this->env->getExtension("native_profiler");
        $__internal_bb72691d6fd0d64e3cf93efcaed10e02647c911d6d1b7ad06a74f81549b94490->enter($__internal_bb72691d6fd0d64e3cf93efcaed10e02647c911d6d1b7ad06a74f81549b94490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email/Form:deleteMailForward.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:deleteMailForward.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:deleteMailForward.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 25
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:deleteMailForward.html.twig", 25)->display($context);
        // line 26
        echo "
          <p>Êtes-vous certain de vouloir supprimer cette redirection ?</p>

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
        $this->loadTemplate("footer.html.twig", ":Email/Form:deleteMailForward.html.twig", 49)->display($context);
        // line 50
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_bb72691d6fd0d64e3cf93efcaed10e02647c911d6d1b7ad06a74f81549b94490->leave($__internal_bb72691d6fd0d64e3cf93efcaed10e02647c911d6d1b7ad06a74f81549b94490_prof);

    }

    public function getTemplateName()
    {
        return ":Email/Form:deleteMailForward.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 50,  117 => 49,  108 => 43,  99 => 37,  92 => 33,  86 => 30,  82 => 29,  77 => 26,  75 => 25,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                         {{ h1 }}*/
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*           <p>Êtes-vous certain de vouloir supprimer cette redirection ?</p>*/
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
