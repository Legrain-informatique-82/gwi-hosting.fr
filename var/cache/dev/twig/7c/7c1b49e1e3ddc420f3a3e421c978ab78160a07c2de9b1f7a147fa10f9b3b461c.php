<?php

/* :Cgu/Form:removeCgu.html.twig */
class __TwigTemplate_478da1e538df5e773ef1544dbce048fb7c8dc6f01f326ed9f85b37072d5182b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cgu/Form:removeCgu.html.twig", 1);
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
        $__internal_a190aa902fcd18b664f4532dd7253543666bb5d00a0989af3aa9a1060e49c0ea = $this->env->getExtension("native_profiler");
        $__internal_a190aa902fcd18b664f4532dd7253543666bb5d00a0989af3aa9a1060e49c0ea->enter($__internal_a190aa902fcd18b664f4532dd7253543666bb5d00a0989af3aa9a1060e49c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cgu/Form:removeCgu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a190aa902fcd18b664f4532dd7253543666bb5d00a0989af3aa9a1060e49c0ea->leave($__internal_a190aa902fcd18b664f4532dd7253543666bb5d00a0989af3aa9a1060e49c0ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04810477630186a00d9d303634eb10b3691191583ca9f01041fde30de66fdc7c = $this->env->getExtension("native_profiler");
        $__internal_04810477630186a00d9d303634eb10b3691191583ca9f01041fde30de66fdc7c->enter($__internal_04810477630186a00d9d303634eb10b3691191583ca9f01041fde30de66fdc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cgu/Form:removeCgu.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cgu/Form:removeCgu.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                ";
        // line 17
        $this->loadTemplate("breadcrumb.html.twig", ":Cgu/Form:removeCgu.html.twig", 17)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 18
        echo "
                <h1>
                  ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Cgu/Form:removeCgu.html.twig", 27)->display($context);
        // line 28
        echo "
<p>Êtes-vous sur de voulour supprimer cette cgu ? Attention, cette action est irrévocable</p>
                ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("gestion-cgv");
        echo "\" class=\"btn btn-default\">Annuler</a>


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 40
        $this->loadTemplate("footer.html.twig", ":Cgu/Form:removeCgu.html.twig", 40)->display($context);
        // line 41
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_04810477630186a00d9d303634eb10b3691191583ca9f01041fde30de66fdc7c->leave($__internal_04810477630186a00d9d303634eb10b3691191583ca9f01041fde30de66fdc7c_prof);

    }

    public function getTemplateName()
    {
        return ":Cgu/Form:removeCgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  105 => 40,  96 => 34,  92 => 33,  87 => 31,  83 => 30,  79 => 28,  77 => 27,  67 => 20,  63 => 18,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*                 <h1>*/
/*                   {{ h1 }}*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* <p>Êtes-vous sur de voulour supprimer cette cgu ? Attention, cette action est irrévocable</p>*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_end(form) }}*/
/*                 <a href="{{ path('gestion-cgv') }}" class="btn btn-default">Annuler</a>*/
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
