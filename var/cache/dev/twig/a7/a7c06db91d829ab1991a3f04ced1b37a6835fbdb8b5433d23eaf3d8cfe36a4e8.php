<?php

/* :Ndd:emptyndd.html.twig */
class __TwigTemplate_889842e1820db36720a9d79cc322dbba837081fef1bb35ee832d54ee9735a366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Ndd:emptyndd.html.twig", 1);
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
        $__internal_c0cbeb342199fce06e566d44a222eae6f53aa4ecf761392a116dd63d3b82aca3 = $this->env->getExtension("native_profiler");
        $__internal_c0cbeb342199fce06e566d44a222eae6f53aa4ecf761392a116dd63d3b82aca3->enter($__internal_c0cbeb342199fce06e566d44a222eae6f53aa4ecf761392a116dd63d3b82aca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ndd:emptyndd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0cbeb342199fce06e566d44a222eae6f53aa4ecf761392a116dd63d3b82aca3->leave($__internal_c0cbeb342199fce06e566d44a222eae6f53aa4ecf761392a116dd63d3b82aca3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b6adfe7f700ab2f7843b2de2cf0bc534ab4cadf767b1ae1dd1a11e5b841328c = $this->env->getExtension("native_profiler");
        $__internal_9b6adfe7f700ab2f7843b2de2cf0bc534ab4cadf767b1ae1dd1a11e5b841328c->enter($__internal_9b6adfe7f700ab2f7843b2de2cf0bc534ab4cadf767b1ae1dd1a11e5b841328c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Ndd:emptyndd.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Ndd:emptyndd.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Liste des noms de domaines

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Ndd:emptyndd.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Ndd:emptyndd.html.twig", 28)->display($context);
        // line 29
        echo "

                <div class=\"well\">
                    <p>
                        Vous ne possèdez aucun nom de domaine pour le moment.
                    </p>
                </div>






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 45
        $this->loadTemplate("footer.html.twig", ":Ndd:emptyndd.html.twig", 45)->display($context);
        // line 46
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_9b6adfe7f700ab2f7843b2de2cf0bc534ab4cadf767b1ae1dd1a11e5b841328c->leave($__internal_9b6adfe7f700ab2f7843b2de2cf0bc534ab4cadf767b1ae1dd1a11e5b841328c_prof);

    }

    public function getTemplateName()
    {
        return ":Ndd:emptyndd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 46,  95 => 45,  77 => 29,  75 => 28,  67 => 22,  65 => 21,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     Liste des noms de domaines*/
/* */
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
/*                 <div class="well">*/
/*                     <p>*/
/*                         Vous ne possèdez aucun nom de domaine pour le moment.*/
/*                     </p>*/
/*                 </div>*/
/* */
/* */
/* */
/* */
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
