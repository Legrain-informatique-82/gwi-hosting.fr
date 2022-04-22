<?php

/* :Cgu/List:cgus.html.twig */
class __TwigTemplate_596b5e91a0b4549bf492042110422f569e3ab3d80ed97bde9f1b793c0b490654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cgu/List:cgus.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Cgu/List:cgus.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cgu/List:cgus.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Cgu/List:cgus.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cgu/List:cgus.html.twig", 28)->display($context);
        // line 29
        echo "                <div class=\"well\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("add-cgv");
        echo "\" class=\"btn btn-primary\">Ajouter une CGU</a>
                </div>

                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>url</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listCgus"]) ? $context["listCgus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cgu"]) {
            // line 43
            echo "                        <tr>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["cgu"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["cgu"], "url", array()), "html", null, true);
            echo "</td>
                            <td>
                                <div class=\"btn-group\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update-cgv", array("idcgu" => $this->getAttribute($context["cgu"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" title=\"Modifier\"><i class=\"fa fa-cogs\"></i></a>
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove-cgv", array("idcgu" => $this->getAttribute($context["cgu"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cgu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 60
        $this->loadTemplate("footer.html.twig", ":Cgu/List:cgus.html.twig", 60)->display($context);
        // line 61
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Cgu/List:cgus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 61,  129 => 60,  121 => 54,  110 => 49,  106 => 48,  100 => 45,  96 => 44,  93 => 43,  89 => 42,  74 => 30,  71 => 29,  69 => 28,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/*                 <div class="well">*/
/*                     <a href="{{ path('add-cgv') }}" class="btn btn-primary">Ajouter une CGU</a>*/
/*                 </div>*/
/* */
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Nom</th>*/
/*                         <th>url</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for cgu in listCgus %}*/
/*                         <tr>*/
/*                             <td>{{ cgu.name }}</td>*/
/*                             <td>{{ cgu.url }}</td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                 <a href="{{ path("update-cgv",{'idcgu':cgu.id}) }}" class="btn btn-warning" title="Modifier"><i class="fa fa-cogs"></i></a>*/
/*                                 <a href="{{ path("remove-cgv",{'idcgu':cgu.id}) }}" class="btn btn-danger" title="Supprimer"><i class="fa fa-trash"></i></a>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
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
