<?php

/* :Agency/Forms:agency.html.twig */
class __TwigTemplate_c7d7b0bfb164fd5b4c2fdd8f308f378814edbab678327bd081e7ebe85190019e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/Forms:agency.html.twig", 1);
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
        $__internal_b0f154ba4f200471e0d8bece76b0544db0fff4d37628c7b90fcb4ba4329e130b = $this->env->getExtension("native_profiler");
        $__internal_b0f154ba4f200471e0d8bece76b0544db0fff4d37628c7b90fcb4ba4329e130b->enter($__internal_b0f154ba4f200471e0d8bece76b0544db0fff4d37628c7b90fcb4ba4329e130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/Forms:agency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f154ba4f200471e0d8bece76b0544db0fff4d37628c7b90fcb4ba4329e130b->leave($__internal_b0f154ba4f200471e0d8bece76b0544db0fff4d37628c7b90fcb4ba4329e130b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cec996a67368b73dfa8827d0b127c4be5136b2e4bb47f5a1e2aa13743ff1ea47 = $this->env->getExtension("native_profiler");
        $__internal_cec996a67368b73dfa8827d0b127c4be5136b2e4bb47f5a1e2aa13743ff1ea47->enter($__internal_cec996a67368b73dfa8827d0b127c4be5136b2e4bb47f5a1e2aa13743ff1ea47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/Forms:agency.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/Forms:agency.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 17
        $this->loadTemplate("breadcrumb.html.twig", ":Agency/Forms:agency.html.twig", 17)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 18
        echo "
                <h1>
                    ";
        // line 20
        if ((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))) {
            // line 21
            echo "                        Ajouter une agence
                    ";
        } else {
            // line 23
            echo "                        Modifier l'agence
                    ";
        }
        // line 25
        echo "                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 31
        $this->loadTemplate("flashMessage.html.twig", ":Agency/Forms:agency.html.twig", 31)->display($context);
        // line 32
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
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 43
        $this->loadTemplate("footer.html.twig", ":Agency/Forms:agency.html.twig", 43)->display($context);
        // line 44
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_cec996a67368b73dfa8827d0b127c4be5136b2e4bb47f5a1e2aa13743ff1ea47->leave($__internal_cec996a67368b73dfa8827d0b127c4be5136b2e4bb47f5a1e2aa13743ff1ea47_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/Forms:agency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 44,  109 => 43,  100 => 37,  95 => 35,  91 => 34,  87 => 32,  85 => 31,  77 => 25,  73 => 23,  69 => 21,  67 => 20,  63 => 18,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {% if add %}*/
/*                         Ajouter une agence*/
/*                     {% else %}*/
/*                         Modifier l'agence*/
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
