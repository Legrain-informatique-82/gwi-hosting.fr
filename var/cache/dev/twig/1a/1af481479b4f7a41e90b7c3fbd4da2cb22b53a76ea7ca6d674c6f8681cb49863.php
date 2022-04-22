<?php

/* :Dashboard:dashboard.html.twig */
class __TwigTemplate_5b2cb59e22251ef41504eae3f2515adde9f0e391686c403c0ea202ae484e6ea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Dashboard:dashboard.html.twig", 1);
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
        $__internal_9bb7b58bff71266d98ccde1ddcfa6e7328e36575becee78f80e444c5dc33fe25 = $this->env->getExtension("native_profiler");
        $__internal_9bb7b58bff71266d98ccde1ddcfa6e7328e36575becee78f80e444c5dc33fe25->enter($__internal_9bb7b58bff71266d98ccde1ddcfa6e7328e36575becee78f80e444c5dc33fe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Dashboard:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb7b58bff71266d98ccde1ddcfa6e7328e36575becee78f80e444c5dc33fe25->leave($__internal_9bb7b58bff71266d98ccde1ddcfa6e7328e36575becee78f80e444c5dc33fe25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ead3a47e2f8f0f90dba8f6082a40a7a14f31cc7ec11696ecc159317852949f3 = $this->env->getExtension("native_profiler");
        $__internal_6ead3a47e2f8f0f90dba8f6082a40a7a14f31cc7ec11696ecc159317852949f3->enter($__internal_6ead3a47e2f8f0f90dba8f6082a40a7a14f31cc7ec11696ecc159317852949f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Dashboard:dashboard.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Dashboard:dashboard.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Tableau de bord
                </h1>



            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_AGENCE")) {
            // line 28
            echo "                <div class=\"row\">

                    <div class=\"col-md-6\">
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Mes clients</h3>

                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("list_customer_admin");
            echo "\" class=\"btn btn-primary\">Mes clients</a>
                                <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("add_customer_admin");
            echo "\" class=\"btn btn-primary\">Ajouter un client</a>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </div>
                ";
        }
        // line 44
        echo "
                    <div class=\"row\">

                        <div class=\"col-md-6\">
                            <div class=\"box box-primary\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Mes domaines</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("ndds_user");
        echo "\" class=\"btn btn-primary\">Mes domaines</a>
                                </div><!-- /.box-body -->
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"box box-primary\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">Mes serveurs</h3>

                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("instances_user");
        echo "\" class=\"btn btn-primary\">Mes serveurs</a>
                                </div><!-- /.box-body -->
                            </div>
                        </div>


                    </div>



            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 78
        $this->loadTemplate("footer.html.twig", ":Dashboard:dashboard.html.twig", 78)->display($context);
        // line 79
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_6ead3a47e2f8f0f90dba8f6082a40a7a14f31cc7ec11696ecc159317852949f3->leave($__internal_6ead3a47e2f8f0f90dba8f6082a40a7a14f31cc7ec11696ecc159317852949f3_prof);

    }

    public function getTemplateName()
    {
        return ":Dashboard:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 79,  139 => 78,  123 => 65,  108 => 53,  97 => 44,  88 => 38,  84 => 37,  73 => 28,  71 => 27,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     Tableau de bord*/
/*                 </h1>*/
/* */
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% if is_granted("ROLE_AGENCE") %}*/
/*                 <div class="row">*/
/* */
/*                     <div class="col-md-6">*/
/*                         <div class="box box-primary">*/
/*                             <div class="box-header with-border">*/
/*                                 <h3 class="box-title">Mes clients</h3>*/
/* */
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body">*/
/*                                 <a href="{{ path('list_customer_admin') }}" class="btn btn-primary">Mes clients</a>*/
/*                                 <a href="{{ path('add_customer_admin') }}" class="btn btn-primary">Ajouter un client</a>*/
/*                             </div><!-- /.box-body -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/* */
/*                     <div class="row">*/
/* */
/*                         <div class="col-md-6">*/
/*                             <div class="box box-primary">*/
/*                                 <div class="box-header with-border">*/
/*                                     <h3 class="box-title">Mes domaines</h3>*/
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body">*/
/*                                     <a href="{{ path('ndds_user') }}" class="btn btn-primary">Mes domaines</a>*/
/*                                 </div><!-- /.box-body -->*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="col-md-6">*/
/*                             <div class="box box-primary">*/
/*                                 <div class="box-header with-border">*/
/*                                     <h3 class="box-title">Mes serveurs</h3>*/
/* */
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body">*/
/*                                     <a href="{{ path('instances_user') }}" class="btn btn-primary">Mes serveurs</a>*/
/*                                 </div><!-- /.box-body -->*/
/*                             </div>*/
/*                         </div>*/
/* */
/* */
/*                     </div>*/
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
