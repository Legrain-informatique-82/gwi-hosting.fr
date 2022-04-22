<?php

/* :User/Form:user.html.twig */
class __TwigTemplate_02edc27ecced972bcec4441a60dbcdc0394d826e5adfc55cfbf6d7ff6413c9df extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
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
        $this->loadTemplate("breadcrumb.html.twig", ":User/Form:user.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 19
        echo "                <h1>
                    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  97 => 44,  95 => 43,  86 => 37,  82 => 36,  78 => 35,  68 => 27,  66 => 26,  57 => 20,  54 => 19,  52 => 18,  44 => 12,  42 => 11,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  11 => 2,);
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
