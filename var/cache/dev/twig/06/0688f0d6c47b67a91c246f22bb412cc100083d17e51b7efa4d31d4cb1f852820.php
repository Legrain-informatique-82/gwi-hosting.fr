<?php

/* :Email/Form:forwardemail.html.twig */
class __TwigTemplate_c964f94fd74a98acd69b2c7cf07db141e828c870643d9003dab5a3500b358632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:forwardemail.html.twig", 1);
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
        $__internal_16f0f5c52c02cee60fb7a90c6eefa090b40aab7fe2471255a34130d6f6de70b8 = $this->env->getExtension("native_profiler");
        $__internal_16f0f5c52c02cee60fb7a90c6eefa090b40aab7fe2471255a34130d6f6de70b8->enter($__internal_16f0f5c52c02cee60fb7a90c6eefa090b40aab7fe2471255a34130d6f6de70b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:forwardemail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f0f5c52c02cee60fb7a90c6eefa090b40aab7fe2471255a34130d6f6de70b8->leave($__internal_16f0f5c52c02cee60fb7a90c6eefa090b40aab7fe2471255a34130d6f6de70b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a112ed7b3dfb2f53e1f7175a22ef6529ed89702a4a72ea8befcae86718b4d8 = $this->env->getExtension("native_profiler");
        $__internal_e4a112ed7b3dfb2f53e1f7175a22ef6529ed89702a4a72ea8befcae86718b4d8->enter($__internal_e4a112ed7b3dfb2f53e1f7175a22ef6529ed89702a4a72ea8befcae86718b4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email/Form:forwardemail.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:forwardemail.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:forwardemail.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:forwardemail.html.twig", 28)->display($context);
        // line 29
        echo "

                ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "



                <div class=\"form-group\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), 'label');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), 'errors');
        echo "

                    <div class=\"input-group\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), 'widget');
        echo "
                        <div class=\"input-group-addon\">@";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</div>
                    </div>

                </div>

                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 53
        $this->loadTemplate("footer.html.twig", ":Email/Form:forwardemail.html.twig", 53)->display($context);
        // line 54
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_e4a112ed7b3dfb2f53e1f7175a22ef6529ed89702a4a72ea8befcae86718b4d8->leave($__internal_e4a112ed7b3dfb2f53e1f7175a22ef6529ed89702a4a72ea8befcae86718b4d8_prof);

    }

    public function getTemplateName()
    {
        return ":Email/Form:forwardemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  127 => 53,  118 => 47,  110 => 42,  106 => 41,  100 => 38,  96 => 37,  88 => 32,  84 => 31,  80 => 29,  78 => 28,  68 => 21,  64 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/* */
/* */
/*                 <div class="form-group">*/
/*                 {{ form_label(form.source) }}*/
/*                 {{ form_errors(form.source) }}*/
/* */
/*                     <div class="input-group">*/
/*                         {{ form_widget(form.source) }}*/
/*                         <div class="input-group-addon">@{{ ndd }}</div>*/
/*                     </div>*/
/* */
/*                 </div>*/
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
