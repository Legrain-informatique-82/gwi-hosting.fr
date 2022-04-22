<?php

/* :Agency/Forms:agencyAndUser.html.twig */
class __TwigTemplate_079f9bbf28dc5c596e2126bd08606521f1cfb82ae64205940d657d1afa18c9f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Agency/Forms:agencyAndUser.html.twig", 1);
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
        $__internal_f8f7fe18c823d3ba47eaf2f2b9f3f946bb3088ce521a472cb672edd4fe3be6bb = $this->env->getExtension("native_profiler");
        $__internal_f8f7fe18c823d3ba47eaf2f2b9f3f946bb3088ce521a472cb672edd4fe3be6bb->enter($__internal_f8f7fe18c823d3ba47eaf2f2b9f3f946bb3088ce521a472cb672edd4fe3be6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Agency/Forms:agencyAndUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8f7fe18c823d3ba47eaf2f2b9f3f946bb3088ce521a472cb672edd4fe3be6bb->leave($__internal_f8f7fe18c823d3ba47eaf2f2b9f3f946bb3088ce521a472cb672edd4fe3be6bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5144c551624e0e3014996fce158421f1a02d2b2391ef8e6666f2f14757509116 = $this->env->getExtension("native_profiler");
        $__internal_5144c551624e0e3014996fce158421f1a02d2b2391ef8e6666f2f14757509116->enter($__internal_5144c551624e0e3014996fce158421f1a02d2b2391ef8e6666f2f14757509116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Agency/Forms:agencyAndUser.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Agency/Forms:agencyAndUser.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">

                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
                   <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("list-agency");
        echo "\">Liste des agences web</a></li>
                    ";
        // line 20
        if ((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))) {
            // line 21
            echo "                    <li class=\"active\">Ajouter une agence</li>
                    ";
        } else {
            // line 23
            echo "                        <li class=\"active\">Ajouter l'agence</li>

                    ";
        }
        // line 26
        echo "
                </ol>
                <h1>
                    ";
        // line 29
        if ((isset($context["add"]) ? $context["add"] : $this->getContext($context, "add"))) {
            // line 30
            echo "                        Ajouter une agence
                    ";
        } else {
            // line 32
            echo "                        Modifier l'agence
                    ";
        }
        // line 34
        echo "                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 39
        $this->loadTemplate("flashMessage.html.twig", ":Agency/Forms:agencyAndUser.html.twig", 39)->display($context);
        // line 40
        echo "


                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 52
        $this->loadTemplate("footer.html.twig", ":Agency/Forms:agencyAndUser.html.twig", 52)->display($context);
        // line 53
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_5144c551624e0e3014996fce158421f1a02d2b2391ef8e6666f2f14757509116->leave($__internal_5144c551624e0e3014996fce158421f1a02d2b2391ef8e6666f2f14757509116_prof);

    }

    public function getTemplateName()
    {
        return ":Agency/Forms:agencyAndUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  128 => 52,  119 => 46,  114 => 44,  110 => 43,  105 => 40,  103 => 39,  96 => 34,  92 => 32,  88 => 30,  86 => 29,  81 => 26,  76 => 23,  72 => 21,  70 => 20,  66 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <ol class="breadcrumb">*/
/*                     <li><a href="{{  path('homepage' )}}"><i class="fa fa-dashboard"></i> Accueil</a></li>*/
/*                    <li><a href="{{  path('list-agency')}}">Liste des agences web</a></li>*/
/*                     {% if add %}*/
/*                     <li class="active">Ajouter une agence</li>*/
/*                     {% else %}*/
/*                         <li class="active">Ajouter l'agence</li>*/
/* */
/*                     {% endif %}*/
/* */
/*                 </ol>*/
/*                 <h1>*/
/*                     {% if add %}*/
/*                         Ajouter une agence*/
/*                     {% else %}*/
/*                         Modifier l'agence*/
/*                     {% endif %}*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
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
