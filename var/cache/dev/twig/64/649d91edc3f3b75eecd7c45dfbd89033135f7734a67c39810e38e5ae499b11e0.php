<?php

/* :Hebergement/Form:delheber.html.twig */
class __TwigTemplate_fd4dbea6b39d69724e329d6681e3d3cb8c02ae975c2941116d94582fe78645b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement/Form:delheber.html.twig", 1);
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
        $__internal_a8679723f753c9cc0516e57d4706c4e7f494e63be9f33bfcf9f339f33081d09b = $this->env->getExtension("native_profiler");
        $__internal_a8679723f753c9cc0516e57d4706c4e7f494e63be9f33bfcf9f339f33081d09b->enter($__internal_a8679723f753c9cc0516e57d4706c4e7f494e63be9f33bfcf9f339f33081d09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Hebergement/Form:delheber.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8679723f753c9cc0516e57d4706c4e7f494e63be9f33bfcf9f339f33081d09b->leave($__internal_a8679723f753c9cc0516e57d4706c4e7f494e63be9f33bfcf9f339f33081d09b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a04815e64bef13766720c12721deb47adac75a9c41671a9324efee6bd28fda48 = $this->env->getExtension("native_profiler");
        $__internal_a04815e64bef13766720c12721deb47adac75a9c41671a9324efee6bd28fda48->enter($__internal_a04815e64bef13766720c12721deb47adac75a9c41671a9324efee6bd28fda48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Hebergement/Form:delheber.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement/Form:delheber.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement/Form:delheber.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement/Form:delheber.html.twig", 27)->display($context);
        // line 28
        echo "



             <p>Vous vous appretez à supprimer votre vhost. Toutefois, les données seront sauvegardées sur le serveur à cet emplacement : /lamp0/web/trash.
             <br/>Vous pouvez y accèder grâce à une connexion sftp.</p>
                ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 41
        $this->loadTemplate("footer.html.twig", ":Hebergement/Form:delheber.html.twig", 41)->display($context);
        // line 42
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_a04815e64bef13766720c12721deb47adac75a9c41671a9324efee6bd28fda48->leave($__internal_a04815e64bef13766720c12721deb47adac75a9c41671a9324efee6bd28fda48_prof);

    }

    public function getTemplateName()
    {
        return ":Hebergement/Form:delheber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 42,  103 => 41,  95 => 36,  91 => 35,  87 => 34,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/* */
/*              <p>Vous vous appretez à supprimer votre vhost. Toutefois, les données seront sauvegardées sur le serveur à cet emplacement : /lamp0/web/trash.*/
/*              <br/>Vous pouvez y accèder grâce à une connexion sftp.</p>*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 {{ form_end(form) }}*/
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
