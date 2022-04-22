<?php

/* :Instance/Form:options.html.twig */
class __TwigTemplate_71b45ff8c0e40a0b0e60cff4f2f6903d49daeec2521bd34f3f29f8fb196a1c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Instance/Form:options.html.twig", 1);
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
        $__internal_76538b649877cad28d1e74c62eb5bd78d568abb9deeac260ff45f15b88742931 = $this->env->getExtension("native_profiler");
        $__internal_76538b649877cad28d1e74c62eb5bd78d568abb9deeac260ff45f15b88742931->enter($__internal_76538b649877cad28d1e74c62eb5bd78d568abb9deeac260ff45f15b88742931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Instance/Form:options.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76538b649877cad28d1e74c62eb5bd78d568abb9deeac260ff45f15b88742931->leave($__internal_76538b649877cad28d1e74c62eb5bd78d568abb9deeac260ff45f15b88742931_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72519a9cc4ac04e94590c259a108c1dc31eb26e734db73f7724906e1cda44e95 = $this->env->getExtension("native_profiler");
        $__internal_72519a9cc4ac04e94590c259a108c1dc31eb26e734db73f7724906e1cda44e95->enter($__internal_72519a9cc4ac04e94590c259a108c1dc31eb26e734db73f7724906e1cda44e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Instance/Form:options.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Instance/Form:options.html.twig", 10)->display($context);
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
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":Instance/Form:options.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 20
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 28
        echo "                ";
        $this->loadTemplate("flashMessage.html.twig", ":Instance/Form:options.html.twig", 28)->display($context);
        // line 29
        echo "               ";
        // line 32
        echo "                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Puissance</h3>

                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p class=\"well\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur earum
                            eius id maxime soluta unde veniam. Aliquid aspernatur commodi error harum laudantium, odit
                            omnis reiciendis velit voluptate. Deserunt, voluptates?</p>


                      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "size", array()), 'row');
        echo "
                    </div><!-- /.box-body -->
                </div>
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Espace disque en option</h3>

                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <p class=\"well\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur earum
                            eius id maxime soluta unde veniam. Aliquid aspernatur commodi error harum laudantium, odit
                            omnis reiciendis velit voluptate. Deserunt, voluptates?</p>


                      ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hdd", array()), 'row');
        echo "
                    </div><!-- /.box-body -->
                </div>
                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 66
        $this->loadTemplate("footer.html.twig", ":Instance/Form:options.html.twig", 66)->display($context);
        // line 67
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_72519a9cc4ac04e94590c259a108c1dc31eb26e734db73f7724906e1cda44e95->leave($__internal_72519a9cc4ac04e94590c259a108c1dc31eb26e734db73f7724906e1cda44e95_prof);

    }

    public function getTemplateName()
    {
        return ":Instance/Form:options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 67,  129 => 66,  122 => 62,  116 => 59,  99 => 45,  84 => 33,  79 => 32,  77 => 29,  74 => 28,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {#*/
/*                 Modifier la bdd des instances pouyr y ajouter les options du serveurs (garder la puissance.*/
/*                 Ajouter une information dans la table Instance indiquant le nombre de part d'hebergement en option ?*/
/*                 #}*/
/*                 {% include 'flashMessage.html.twig' %}*/
/*                {# PUISSANCE : {{ instance.sizeInstance }} <br>*/
/*                 options tranches en Go*/
/*                 #}*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <div class="box box-primary">*/
/*                     <div class="box-header with-border">*/
/*                         <h3 class="box-title">Puissance</h3>*/
/* */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <p class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur earum*/
/*                             eius id maxime soluta unde veniam. Aliquid aspernatur commodi error harum laudantium, odit*/
/*                             omnis reiciendis velit voluptate. Deserunt, voluptates?</p>*/
/* */
/* */
/*                       {{ form_row(form.size) }}*/
/*                     </div><!-- /.box-body -->*/
/*                 </div>*/
/*                 <div class="box box-primary">*/
/*                     <div class="box-header with-border">*/
/*                         <h3 class="box-title">Espace disque en option</h3>*/
/* */
/*                     </div><!-- /.box-header -->*/
/*                     <div class="box-body">*/
/*                         <p class="well">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur earum*/
/*                             eius id maxime soluta unde veniam. Aliquid aspernatur commodi error harum laudantium, odit*/
/*                             omnis reiciendis velit voluptate. Deserunt, voluptates?</p>*/
/* */
/* */
/*                       {{ form_row(form.hdd) }}*/
/*                     </div><!-- /.box-body -->*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
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
