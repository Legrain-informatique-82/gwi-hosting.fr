<?php

/* :Email:create_email_first.html.twig */
class __TwigTemplate_945c2851ecf157063f71d1022a01833b1c897ad736aa1776248d3c8a3fd8cf25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email:create_email_first.html.twig", 1);
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
        $__internal_5d1208382e602a49e4137cf000782bf74bd5e9b7131893823f1b36d2c7a5ad73 = $this->env->getExtension("native_profiler");
        $__internal_5d1208382e602a49e4137cf000782bf74bd5e9b7131893823f1b36d2c7a5ad73->enter($__internal_5d1208382e602a49e4137cf000782bf74bd5e9b7131893823f1b36d2c7a5ad73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email:create_email_first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1208382e602a49e4137cf000782bf74bd5e9b7131893823f1b36d2c7a5ad73->leave($__internal_5d1208382e602a49e4137cf000782bf74bd5e9b7131893823f1b36d2c7a5ad73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_422639a467f673fa9fc319911c054777349cf236e7db166394f6461fa424f455 = $this->env->getExtension("native_profiler");
        $__internal_422639a467f673fa9fc319911c054777349cf236e7db166394f6461fa424f455->enter($__internal_422639a467f673fa9fc319911c054777349cf236e7db166394f6461fa424f455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email:create_email_first.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email:create_email_first.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                   Aucune boite e-mail

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Email:create_email_first.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Email:create_email_first.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
        // line 29
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Email:create_email_first.html.twig", 29)->display(array_merge($context, array("active" => "email", "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))));
        // line 30
        echo "
                <div class=\"well\">
                    <p>Aucune boite e-mail existante, cliquez sur le bouton ci-dessous pour en ajouter une.</p>
                    <p>
                        <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : $this->getContext($context, "btnAddAction")), "url", array()), $this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : $this->getContext($context, "btnAddAction")), "param", array())), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : $this->getContext($context, "btnAddAction")), "label", array()), "html", null, true);
        echo "
                        </a>
                    </p>
                </div>









            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 51
        $this->loadTemplate("footer.html.twig", ":Email:create_email_first.html.twig", 51)->display($context);
        // line 52
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_422639a467f673fa9fc319911c054777349cf236e7db166394f6461fa424f455->leave($__internal_422639a467f673fa9fc319911c054777349cf236e7db166394f6461fa424f455_prof);

    }

    public function getTemplateName()
    {
        return ":Email:create_email_first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  110 => 51,  91 => 35,  87 => 34,  81 => 30,  79 => 29,  76 => 28,  74 => 27,  67 => 22,  65 => 21,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                    Aucune boite e-mail*/
/* */
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {% include 'Ndd/Nav/options.html.twig'  with {'active': 'email','ndd':ndd } %}*/
/* */
/*                 <div class="well">*/
/*                     <p>Aucune boite e-mail existante, cliquez sur le bouton ci-dessous pour en ajouter une.</p>*/
/*                     <p>*/
/*                         <a class="btn btn-primary" href="{{ path(btnAddAction.url,btnAddAction.param)  }}">*/
/*                             <i class="fa fa-plus"></i> {{ btnAddAction.label  }}*/
/*                         </a>*/
/*                     </p>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
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
