<?php

/* :Email:create_email_first.html.twig */
class __TwigTemplate_896c41897394e3d5cd28156eec535921c1f768cf60e4a9a1bbb344b0f59a6c2b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $this->loadTemplate("breadcrumb.html.twig", ":Email:create_email_first.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Email:create_email_first.html.twig", 29)->display(array_merge($context, array("active" => "email", "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))));
        // line 30
        echo "
                <div class=\"well\">
                    <p>Aucune boite e-mail existante, cliquez sur le bouton ci-dessous pour en ajouter une.</p>
                    <p>
                        <a class=\"btn btn-primary\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : null), "url", array()), $this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : null), "param", array())), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["btnAddAction"]) ? $context["btnAddAction"] : null), "label", array()), "html", null, true);
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
        return array (  103 => 52,  101 => 51,  82 => 35,  78 => 34,  72 => 30,  70 => 29,  67 => 28,  65 => 27,  58 => 22,  56 => 21,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
