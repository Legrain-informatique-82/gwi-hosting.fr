<?php

/* :AccountBalance:transactionsForbidden.html.twig */
class __TwigTemplate_c5d2ffc4fd2c5b0d886739da762cf7c995e83d59dae37a0c30d9791db9c7b755 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance:transactionsForbidden.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        return array (  82 => 37,  80 => 36,  67 => 25,  65 => 24,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
