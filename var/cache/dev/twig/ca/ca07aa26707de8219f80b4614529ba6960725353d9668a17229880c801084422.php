<?php

/* :AccountBalance:transactionsForbidden.html.twig */
class __TwigTemplate_d26d0c8bf4f5fb19fd2e224bad323ea2efff08de322ac8e903214547ebd182a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 1);
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
        $__internal_70bd9c76165936150649921179c786a22559478b1161b7b30c61b384009f55a7 = $this->env->getExtension("native_profiler");
        $__internal_70bd9c76165936150649921179c786a22559478b1161b7b30c61b384009f55a7->enter($__internal_70bd9c76165936150649921179c786a22559478b1161b7b30c61b384009f55a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":AccountBalance:transactionsForbidden.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70bd9c76165936150649921179c786a22559478b1161b7b30c61b384009f55a7->leave($__internal_70bd9c76165936150649921179c786a22559478b1161b7b30c61b384009f55a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04ee9f18be55cd97e75ea573821506fdae6fc51ec2dff937c22767a78dab5439 = $this->env->getExtension("native_profiler");
        $__internal_04ee9f18be55cd97e75ea573821506fdae6fc51ec2dff937c22767a78dab5439->enter($__internal_04ee9f18be55cd97e75ea573821506fdae6fc51ec2dff937c22767a78dab5439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "            </section>
            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 24
        $this->loadTemplate("flashMessage.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 24)->display($context);
        // line 25
        echo "
                <div class=\"well\">
                    <p>
                        Cette fonctionnalité n'est pas encore implantée pour cet utilisateur.
                        <br/>Merci de rééssayer ultérieurement.
                    </p>
                </div>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 36
        $this->loadTemplate("footer.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 36)->display($context);
        // line 37
        echo "

    </div><!-- ./wrapper -->
";
        
        $__internal_04ee9f18be55cd97e75ea573821506fdae6fc51ec2dff937c22767a78dab5439->leave($__internal_04ee9f18be55cd97e75ea573821506fdae6fc51ec2dff937c22767a78dab5439_prof);

    }

    public function getTemplateName()
    {
        return ":AccountBalance:transactionsForbidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  89 => 36,  76 => 25,  74 => 24,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/*             </section>*/
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div class="well">*/
/*                     <p>*/
/*                         Cette fonctionnalité n'est pas encore implantée pour cet utilisateur.*/
/*                         <br/>Merci de rééssayer ultérieurement.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*             </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*         {% include 'footer.html.twig' %}*/
/* */
/* */
/*     </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
