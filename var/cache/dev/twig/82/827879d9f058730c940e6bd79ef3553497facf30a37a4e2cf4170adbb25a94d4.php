<?php

/* :Email/Form:deleteMailbox.html.twig */
class __TwigTemplate_147a3987d62030df840353faac71389981137c48a1e95f78fdf8fea493bebde7 extends Twig_Template
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
        $__internal_f39fd60bc181f6cb7a15883bc2e1b2d32125d9828ca9f2fed64a2f1d904d85bb = $this->env->getExtension("native_profiler");
        $__internal_f39fd60bc181f6cb7a15883bc2e1b2d32125d9828ca9f2fed64a2f1d904d85bb->enter($__internal_f39fd60bc181f6cb7a15883bc2e1b2d32125d9828ca9f2fed64a2f1d904d85bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:deleteMailbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f39fd60bc181f6cb7a15883bc2e1b2d32125d9828ca9f2fed64a2f1d904d85bb->leave($__internal_f39fd60bc181f6cb7a15883bc2e1b2d32125d9828ca9f2fed64a2f1d904d85bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cde6e1368f696dd4a6532f4c69b17a1a5f6ea89a7c9ec736264a49f1e45ccc7 = $this->env->getExtension("native_profiler");
        $__internal_1cde6e1368f696dd4a6532f4c69b17a1a5f6ea89a7c9ec736264a49f1e45ccc7->enter($__internal_1cde6e1368f696dd4a6532f4c69b17a1a5f6ea89a7c9ec736264a49f1e45ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "
                </h1>
                ";
        // line 19
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:deleteMailbox.html.twig", 19)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cancel", array()), 'row');
        echo "

                    </div>
                </div>


                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_1cde6e1368f696dd4a6532f4c69b17a1a5f6ea89a7c9ec736264a49f1e45ccc7->leave($__internal_1cde6e1368f696dd4a6532f4c69b17a1a5f6ea89a7c9ec736264a49f1e45ccc7_prof);

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
        return array (  119 => 50,  117 => 49,  108 => 43,  99 => 37,  92 => 33,  86 => 30,  82 => 29,  77 => 26,  75 => 25,  68 => 20,  66 => 19,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
