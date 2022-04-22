<?php

/* :User/Form:user.html.twig */
class __TwigTemplate_8daa57b69e1b2e07a9624a96862a3769508231500c7f8184c5327d5211e1213c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", ":User/Form:user.html.twig", 2);
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
        $__internal_7f1454fbd049c8c29e3c5ff2af775d9be3f8805929f1bad983930f5669d04d56 = $this->env->getExtension("native_profiler");
        $__internal_7f1454fbd049c8c29e3c5ff2af775d9be3f8805929f1bad983930f5669d04d56->enter($__internal_7f1454fbd049c8c29e3c5ff2af775d9be3f8805929f1bad983930f5669d04d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":User/Form:user.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1454fbd049c8c29e3c5ff2af775d9be3f8805929f1bad983930f5669d04d56->leave($__internal_7f1454fbd049c8c29e3c5ff2af775d9be3f8805929f1bad983930f5669d04d56_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a2581f59c19e9d5e0c1903002e78cb6a3c4fdfd90e60b5fa89e2ef4bade8b7 = $this->env->getExtension("native_profiler");
        $__internal_10a2581f59c19e9d5e0c1903002e78cb6a3c4fdfd90e60b5fa89e2ef4bade8b7->enter($__internal_10a2581f59c19e9d5e0c1903002e78cb6a3c4fdfd90e60b5fa89e2ef4bade8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 9
        $this->loadTemplate("header.html.twig", ":User/Form:user.html.twig", 9)->display($context);
        // line 10
        echo "        <!-- =============================================== -->
        ";
        // line 11
        $this->loadTemplate("sidebar.html.twig", ":User/Form:user.html.twig", 11)->display($context);
        // line 12
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":User/Form:user.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("flashMessage.html.twig", ":User/Form:user.html.twig", 26)->display($context);
        // line 27
        echo "
                <div class=\"well\">
                    <p>
                        Une fois la modification effectuée, vous serez déconnecté.
                    </p>
                </div>


                ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 36
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
        $this->loadTemplate("footer.html.twig", ":User/Form:user.html.twig", 43)->display($context);
        // line 44
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_10a2581f59c19e9d5e0c1903002e78cb6a3c4fdfd90e60b5fa89e2ef4bade8b7->leave($__internal_10a2581f59c19e9d5e0c1903002e78cb6a3c4fdfd90e60b5fa89e2ef4bade8b7_prof);

    }

    public function getTemplateName()
    {
        return ":User/Form:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  104 => 43,  95 => 37,  91 => 36,  87 => 35,  77 => 27,  75 => 26,  66 => 20,  63 => 19,  61 => 18,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
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
/*                 <div class="well">*/
/*                     <p>*/
/*                         Une fois la modification effectuée, vous serez déconnecté.*/
/*                     </p>*/
/*                 </div>*/
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
