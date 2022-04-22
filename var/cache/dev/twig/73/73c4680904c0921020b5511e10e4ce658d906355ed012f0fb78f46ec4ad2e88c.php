<?php

/* :PriceList/Form:addPriceList.html.twig */
class __TwigTemplate_3bca04d189fb69eb72bde35fb8650706d3e62cf04cca8f18850362ce03642178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":PriceList/Form:addPriceList.html.twig", 1);
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
        $__internal_24bd8789a2ab9ce3c30afa81226829388876bc452de89e45c33023fe7b805ad4 = $this->env->getExtension("native_profiler");
        $__internal_24bd8789a2ab9ce3c30afa81226829388876bc452de89e45c33023fe7b805ad4->enter($__internal_24bd8789a2ab9ce3c30afa81226829388876bc452de89e45c33023fe7b805ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":PriceList/Form:addPriceList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24bd8789a2ab9ce3c30afa81226829388876bc452de89e45c33023fe7b805ad4->leave($__internal_24bd8789a2ab9ce3c30afa81226829388876bc452de89e45c33023fe7b805ad4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54268dca6afc0131958c44e075537691c3e8562ee9346a328668759b5c2cb932 = $this->env->getExtension("native_profiler");
        $__internal_54268dca6afc0131958c44e075537691c3e8562ee9346a328668759b5c2cb932->enter($__internal_54268dca6afc0131958c44e075537691c3e8562ee9346a328668759b5c2cb932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":PriceList/Form:addPriceList.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":PriceList/Form:addPriceList.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":PriceList/Form:addPriceList.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":PriceList/Form:addPriceList.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 38
        $this->loadTemplate("footer.html.twig", ":PriceList/Form:addPriceList.html.twig", 38)->display($context);
        // line 39
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_54268dca6afc0131958c44e075537691c3e8562ee9346a328668759b5c2cb932->leave($__internal_54268dca6afc0131958c44e075537691c3e8562ee9346a328668759b5c2cb932_prof);

    }

    public function getTemplateName()
    {
        return ":PriceList/Form:addPriceList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  100 => 38,  91 => 32,  86 => 30,  82 => 29,  79 => 28,  77 => 27,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
