<?php

/* :Hebergement:nongere.html.twig */
class __TwigTemplate_3b653199d8f226d0aaa397a438ba5b896bd5a874a6e0326d0d22681299b1da1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement:nongere.html.twig", 1);
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
        $__internal_e3e684b50a2038fc66eb0e22d4d4577a5fb6ca3feb9e181469852975385bc7c3 = $this->env->getExtension("native_profiler");
        $__internal_e3e684b50a2038fc66eb0e22d4d4577a5fb6ca3feb9e181469852975385bc7c3->enter($__internal_e3e684b50a2038fc66eb0e22d4d4577a5fb6ca3feb9e181469852975385bc7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Hebergement:nongere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e684b50a2038fc66eb0e22d4d4577a5fb6ca3feb9e181469852975385bc7c3->leave($__internal_e3e684b50a2038fc66eb0e22d4d4577a5fb6ca3feb9e181469852975385bc7c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5223a117510c4964f83056fed8f56b1c469592588ac5a9fcd69dcf22a137638 = $this->env->getExtension("native_profiler");
        $__internal_b5223a117510c4964f83056fed8f56b1c469592588ac5a9fcd69dcf22a137638->enter($__internal_b5223a117510c4964f83056fed8f56b1c469592588ac5a9fcd69dcf22a137638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Hebergement:nongere.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement:nongere.html.twig", 10)->display($context);
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
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement:nongere.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement:nongere.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
        // line 29
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Hebergement:nongere.html.twig", 29)->display(array("active" => "hebergement", "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser"))));
        // line 30
        echo "                <p>Option non gérée</p>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 34
        $this->loadTemplate("footer.html.twig", ":Hebergement:nongere.html.twig", 34)->display($context);
        // line 35
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_b5223a117510c4964f83056fed8f56b1c469592588ac5a9fcd69dcf22a137638->leave($__internal_b5223a117510c4964f83056fed8f56b1c469592588ac5a9fcd69dcf22a137638_prof);

    }

    public function getTemplateName()
    {
        return ":Hebergement:nongere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  90 => 34,  84 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* {{ h1 }}*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {% include 'Ndd/Nav/options.html.twig'  with {'active': 'hebergement','ndd':ndd.name, 'type':type,'idagency':idagency,'iduser':iduser} only %}*/
/*                 <p>Option non gérée</p>*/
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
