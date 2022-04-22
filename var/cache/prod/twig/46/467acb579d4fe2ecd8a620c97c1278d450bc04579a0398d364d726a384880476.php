<?php

/* :Agency/Forms:agencyAndUser.html.twig */
class __TwigTemplate_40f4912251502f206843d5d823965e4f337c38fdac83838ee496c7d1c9b9e5b9 extends Twig_Template
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
        if ((isset($context["add"]) ? $context["add"] : null)) {
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
        if ((isset($context["add"]) ? $context["add"] : null)) {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

                ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  121 => 53,  119 => 52,  110 => 46,  105 => 44,  101 => 43,  96 => 40,  94 => 39,  87 => 34,  83 => 32,  79 => 30,  77 => 29,  72 => 26,  67 => 23,  63 => 21,  61 => 20,  57 => 19,  53 => 18,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
