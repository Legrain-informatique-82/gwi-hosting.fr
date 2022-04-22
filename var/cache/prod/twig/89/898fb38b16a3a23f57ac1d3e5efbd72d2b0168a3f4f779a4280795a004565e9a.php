<?php

/* :Email/Form:activeResponder.html.twig */
class __TwigTemplate_ab85aea77893c8fdf41d156fd337894e2ba41c3118bfa09df549a1a983fce7ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:activeResponder.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Email/Form:activeResponder.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:activeResponder.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:activeResponder.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 19
        echo "
                <h1>
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:activeResponder.html.twig", 27)->display($context);
        // line 28
        echo "
                <p class=\"well\">
                    Le répondeur ne répondra qu'une seule fois par jour et par adresse e-mail à un même expéditeur. Le répondeur ne fonctionne pas entre boîtes mail du même domaine. Il ne fonctionne pas non plus sur les alias.

                    <br/>Si vous l'activez pour le jour même, il y aura un délais d'activation pouvant durer une heure.

                    <br/> Pour désactiver le répondeur, il vous suffit de mettre la date du jour comme date de fin, le répondeur se désactivera en une heure maximum.


</p>


                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 48
        $this->loadTemplate("footer.html.twig", ":Email/Form:activeResponder.html.twig", 48)->display($context);
        // line 49
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Email/Form:activeResponder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 49,  101 => 48,  92 => 42,  88 => 41,  84 => 40,  70 => 28,  68 => 27,  59 => 21,  55 => 19,  53 => 18,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <p class="well">*/
/*                     Le répondeur ne répondra qu'une seule fois par jour et par adresse e-mail à un même expéditeur. Le répondeur ne fonctionne pas entre boîtes mail du même domaine. Il ne fonctionne pas non plus sur les alias.*/
/* */
/*                     <br/>Si vous l'activez pour le jour même, il y aura un délais d'activation pouvant durer une heure.*/
/* */
/*                     <br/> Pour désactiver le répondeur, il vous suffit de mettre la date du jour comme date de fin, le répondeur se désactivera en une heure maximum.*/
/* */
/* */
/* </p>*/
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
