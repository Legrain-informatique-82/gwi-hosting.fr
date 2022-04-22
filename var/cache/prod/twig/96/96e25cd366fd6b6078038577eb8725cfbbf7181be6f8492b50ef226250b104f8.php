<?php

/* :Email/Form:deleteMailbox.html.twig */
class __TwigTemplate_4bac006699f87c0cc1dacb43babccdf223bb2a22494f292adba847111bce9b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:deleteMailbox.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Email/Form:deleteMailbox.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:deleteMailbox.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                        Suppression de la boite e-mail : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:deleteMailbox.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 20
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 25
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:deleteMailbox.html.twig", 25)->display($context);
        // line 26
        echo "
          <p>Êtes-vous certain de vouloir supprimer cette boite aux lettres ?</p>

                ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cancel", array()), 'row');
        echo "

                    </div>
                </div>


                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 49
        $this->loadTemplate("footer.html.twig", ":Email/Form:deleteMailbox.html.twig", 49)->display($context);
        // line 50
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Email/Form:deleteMailbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 50,  108 => 49,  99 => 43,  90 => 37,  83 => 33,  77 => 30,  73 => 29,  68 => 26,  66 => 25,  59 => 20,  57 => 19,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                         Suppression de la boite e-mail : {{ email }}*/
/*                 </h1>*/
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*           <p>Êtes-vous certain de vouloir supprimer cette boite aux lettres ?</p>*/
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.delete) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.cancel) }}*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
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
