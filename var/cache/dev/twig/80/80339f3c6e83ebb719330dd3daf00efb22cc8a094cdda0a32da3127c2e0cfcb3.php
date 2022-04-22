<?php

/* :Email/Form:mailbox.html.twig */
class __TwigTemplate_17caae835b3f82d378e1ef0dad55ad7ae3c39f101350919cb01555402d96b0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:mailbox.html.twig", 1);
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
        $__internal_d047eb26efce8c159b4036d1949528ab8788fdae2625cb203101183ebcbd9f90 = $this->env->getExtension("native_profiler");
        $__internal_d047eb26efce8c159b4036d1949528ab8788fdae2625cb203101183ebcbd9f90->enter($__internal_d047eb26efce8c159b4036d1949528ab8788fdae2625cb203101183ebcbd9f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:mailbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d047eb26efce8c159b4036d1949528ab8788fdae2625cb203101183ebcbd9f90->leave($__internal_d047eb26efce8c159b4036d1949528ab8788fdae2625cb203101183ebcbd9f90_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b7946bef57918207aa67b66d12c96321db3b3dade27c96d28722fc96d3f47c0 = $this->env->getExtension("native_profiler");
        $__internal_1b7946bef57918207aa67b66d12c96321db3b3dade27c96d28722fc96d3f47c0->enter($__internal_1b7946bef57918207aa67b66d12c96321db3b3dade27c96d28722fc96d3f47c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email/Form:mailbox.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:mailbox.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 24
        echo "                ";
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:mailbox.html.twig", 24)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 25
        echo "
                <h1>
                    ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 34
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:mailbox.html.twig", 34)->display($context);
        // line 35
        echo "

                ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 45
        $this->loadTemplate("footer.html.twig", ":Email/Form:mailbox.html.twig", 45)->display($context);
        // line 46
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_1b7946bef57918207aa67b66d12c96321db3b3dade27c96d28722fc96d3f47c0->leave($__internal_1b7946bef57918207aa67b66d12c96321db3b3dade27c96d28722fc96d3f47c0_prof);

    }

    public function getTemplateName()
    {
        return ":Email/Form:mailbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  101 => 45,  92 => 39,  88 => 38,  84 => 37,  80 => 35,  78 => 34,  68 => 27,  64 => 25,  61 => 24,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {#*/
/*                                 <ol class="breadcrumb">*/
/*                                     <li><a href="{{ path('homepage') }}"><i class="fa fa-dashboard"></i> Accueil</a></li>*/
/*                                     <li><a href="#">Examples</a></li>*/
/*                                     <li class="active">Blank page</li>*/
/*                                 </ol>*/
/*                 #}*/
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
