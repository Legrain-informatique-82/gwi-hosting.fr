<?php

/* :User/Form:userAgency.html.twig */
class __TwigTemplate_9fed8d4c8c0c3c3627a1a54197877bf06b63007b20dce01bfe7e71ab13a73b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":User/Form:userAgency.html.twig", 1);
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
        $__internal_b884235a8c1ea89820ca4dc9f0241e3396b7bb74beccc506636ce7cf99606a78 = $this->env->getExtension("native_profiler");
        $__internal_b884235a8c1ea89820ca4dc9f0241e3396b7bb74beccc506636ce7cf99606a78->enter($__internal_b884235a8c1ea89820ca4dc9f0241e3396b7bb74beccc506636ce7cf99606a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User/Form:userAgency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b884235a8c1ea89820ca4dc9f0241e3396b7bb74beccc506636ce7cf99606a78->leave($__internal_b884235a8c1ea89820ca4dc9f0241e3396b7bb74beccc506636ce7cf99606a78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90a108694f107fce9b6f84f323dab0840105d3865b0faf302af3fedac62a76de = $this->env->getExtension("native_profiler");
        $__internal_90a108694f107fce9b6f84f323dab0840105d3865b0faf302af3fedac62a76de->enter($__internal_90a108694f107fce9b6f84f323dab0840105d3865b0faf302af3fedac62a76de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":User/Form:userAgency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":User/Form:userAgency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":User/Form:userAgency.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 19
        echo "
                <h1>
                    ";
        // line 21
        if ((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))) {
            // line 22
            echo "                        Ajouter un gestionaire
                    ";
        } else {
            // line 24
            echo "                        Modifier le gestionaire
                    ";
        }
        // line 26
        echo "                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 32
        $this->loadTemplate("flashMessage.html.twig", ":User/Form:userAgency.html.twig", 32)->display($context);
        // line 33
        echo "

                ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 44
        $this->loadTemplate("footer.html.twig", ":User/Form:userAgency.html.twig", 44)->display($context);
        // line 45
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_90a108694f107fce9b6f84f323dab0840105d3865b0faf302af3fedac62a76de->leave($__internal_90a108694f107fce9b6f84f323dab0840105d3865b0faf302af3fedac62a76de_prof);

    }

    public function getTemplateName()
    {
        return ":User/Form:userAgency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  110 => 44,  101 => 38,  96 => 36,  92 => 35,  88 => 33,  86 => 32,  78 => 26,  74 => 24,  70 => 22,  68 => 21,  64 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {% if add %}*/
/*                         Ajouter un gestionaire*/
/*                     {% else %}*/
/*                         Modifier le gestionaire*/
/*                     {% endif %}*/
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
