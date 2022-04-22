<?php

/* :Email/Form:activeResponder.html.twig */
class __TwigTemplate_6bae1d646c9bdc1940e114aba2254de97132328c837d1f1533148d69c7b9b2c0 extends Twig_Template
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
        $__internal_56b48061c19552ab00df45129f6f394cfb96b8d4d9f3bc5e5f3777f5e298f54b = $this->env->getExtension("native_profiler");
        $__internal_56b48061c19552ab00df45129f6f394cfb96b8d4d9f3bc5e5f3777f5e298f54b->enter($__internal_56b48061c19552ab00df45129f6f394cfb96b8d4d9f3bc5e5f3777f5e298f54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:activeResponder.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b48061c19552ab00df45129f6f394cfb96b8d4d9f3bc5e5f3777f5e298f54b->leave($__internal_56b48061c19552ab00df45129f6f394cfb96b8d4d9f3bc5e5f3777f5e298f54b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9110260d6bb49c44cbd16a6ee49ede31d70bc2c340bcbb3e1b12c72aad27e584 = $this->env->getExtension("native_profiler");
        $__internal_9110260d6bb49c44cbd16a6ee49ede31d70bc2c340bcbb3e1b12c72aad27e584->enter($__internal_9110260d6bb49c44cbd16a6ee49ede31d70bc2c340bcbb3e1b12c72aad27e584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:activeResponder.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 19
        echo "
                <h1>
                    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_9110260d6bb49c44cbd16a6ee49ede31d70bc2c340bcbb3e1b12c72aad27e584->leave($__internal_9110260d6bb49c44cbd16a6ee49ede31d70bc2c340bcbb3e1b12c72aad27e584_prof);

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
        return array (  112 => 49,  110 => 48,  101 => 42,  97 => 41,  93 => 40,  79 => 28,  77 => 27,  68 => 21,  64 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
