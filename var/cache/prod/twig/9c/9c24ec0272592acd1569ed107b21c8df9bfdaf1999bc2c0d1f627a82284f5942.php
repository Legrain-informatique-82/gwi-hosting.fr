<?php

/* :Dashboard:dashboard.html.twig */
class __TwigTemplate_cd1c4054fb52e612583288cf37f9f027e010f35fd21d420c3c392ff5cce7a7bb extends Twig_Template
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
        return array (  132 => 79,  130 => 78,  114 => 65,  99 => 53,  88 => 44,  79 => 38,  75 => 37,  64 => 28,  62 => 27,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
