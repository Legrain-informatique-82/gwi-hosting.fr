<?php

/* :Cgu:readCgu.html.twig */
class __TwigTemplate_9d93a5786702598a58501f23c09554b92d31b9d48c818a2c66999525844baffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cgu:readCgu.html.twig", 1);
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
        $__internal_90eec6e136fa6ed385903734e639d5b9c81ecbeea13f853166c7e0b1b90fdccc = $this->env->getExtension("native_profiler");
        $__internal_90eec6e136fa6ed385903734e639d5b9c81ecbeea13f853166c7e0b1b90fdccc->enter($__internal_90eec6e136fa6ed385903734e639d5b9c81ecbeea13f853166c7e0b1b90fdccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cgu:readCgu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90eec6e136fa6ed385903734e639d5b9c81ecbeea13f853166c7e0b1b90fdccc->leave($__internal_90eec6e136fa6ed385903734e639d5b9c81ecbeea13f853166c7e0b1b90fdccc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_daaa2dc826f89f61dfaedbd217a682c3338be3798c6a05628ca755279dc823c7 = $this->env->getExtension("native_profiler");
        $__internal_daaa2dc826f89f61dfaedbd217a682c3338be3798c6a05628ca755279dc823c7->enter($__internal_daaa2dc826f89f61dfaedbd217a682c3338be3798c6a05628ca755279dc823c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cgu:readCgu.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cgu:readCgu.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cgu"]) ? $context["cgu"] : $this->getContext($context, "cgu")), "name", array()), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Cgu:readCgu.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cgu:readCgu.html.twig", 28)->display($context);
        // line 29
        echo "
                ";
        // line 30
        echo $this->getAttribute((isset($context["cgu"]) ? $context["cgu"] : $this->getContext($context, "cgu")), "content", array());
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 36
        $this->loadTemplate("footer.html.twig", ":Cgu:readCgu.html.twig", 36)->display($context);
        // line 37
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_daaa2dc826f89f61dfaedbd217a682c3338be3798c6a05628ca755279dc823c7->leave($__internal_daaa2dc826f89f61dfaedbd217a682c3338be3798c6a05628ca755279dc823c7_prof);

    }

    public function getTemplateName()
    {
        return ":Cgu:readCgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 37,  92 => 36,  83 => 30,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     {{ cgu.name }}*/
/* */
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {{cgu.content |raw}}*/
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
