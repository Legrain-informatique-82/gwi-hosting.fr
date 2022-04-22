<?php

/* :Interventions/List:list.html.twig */
class __TwigTemplate_ab062a47254aad8703a9a6e6b59a7b0020f23e8eee6c6120be7a1973df25ede6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Interventions/List:list.html.twig", 1);
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
        $__internal_28ee64daee149f26bd4a5812d80781f531262b90b19e4ace2dda6f0b32077da8 = $this->env->getExtension("native_profiler");
        $__internal_28ee64daee149f26bd4a5812d80781f531262b90b19e4ace2dda6f0b32077da8->enter($__internal_28ee64daee149f26bd4a5812d80781f531262b90b19e4ace2dda6f0b32077da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Interventions/List:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ee64daee149f26bd4a5812d80781f531262b90b19e4ace2dda6f0b32077da8->leave($__internal_28ee64daee149f26bd4a5812d80781f531262b90b19e4ace2dda6f0b32077da8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e8f13c24b6d75ca9393a1a42fdad40a928d4e278daef6539d4fc90c0460b43b = $this->env->getExtension("native_profiler");
        $__internal_2e8f13c24b6d75ca9393a1a42fdad40a928d4e278daef6539d4fc90c0460b43b->enter($__internal_2e8f13c24b6d75ca9393a1a42fdad40a928d4e278daef6539d4fc90c0460b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Site wrapper -->
<div class=\"wrapper\">

    ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Interventions/List:list.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- =============================================== -->
    ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Interventions/List:list.html.twig", 10)->display($context);
        // line 11
        echo "    <!-- =============================================== -->
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
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Interventions/List:list.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

        </section>

        <!-- Main content -->
        <section class=\"content\">

            ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Interventions/List:list.html.twig", 29)->display($context);
        // line 30
        echo "
            ";
        // line 31
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Interventions/List:list.html.twig", 31)->display(array("active" => "intervention", "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser"))));
        // line 32
        echo "
            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">

                <thead>
<tr>
    <th>Non lu</th>

    <th>Créé le</th>
    <th>Libellé</th>
    <th>Status</th>
    <th>Détail</th>
</tr>
                </thead>
                <tbody>
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["interventions"]) ? $context["interventions"] : $this->getContext($context, "interventions")));
        foreach ($context['_seq'] as $context["_key"] => $context["int"]) {
            // line 47
            echo "                    ";
            // line 49
            echo "                <tr>
                    <td class=\"text-success\" data-order=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "isRead", array()), "html", null, true);
            echo "\">";
            if (($this->getAttribute($context["int"], "isRead", array()) == false)) {
                echo " <i class=\"fa fa-bell\"></i>";
            }
            echo " </td>

                    <td  data-order=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "creation_time", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["int"], "creation_time", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "name", array()), "html", null, true);
            echo " </td>
                    <td data-order=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["int"], "status", array()), "html", null, true);
            echo "\">";
            if (($this->getAttribute($context["int"], "status", array()) == "RESOLVED")) {
                echo " <span class=\"text-success\">Résolu</span>";
            } else {
                echo "<span class=\"text-danger\">En cours</span>";
            }
            echo "        </td>
                    <td>
                        ";
            // line 56
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 57
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_d_super_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "idbug" => $this->getAttribute($context["int"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" title=\"Détail de l'intervention\">
                            <i class=\"fa fa-file\"></i>
                        </a>
                        ";
            } elseif ((            // line 60
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 61
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_d_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "idbug" => $this->getAttribute($context["int"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" title=\"Détail de l'intervention\">
                            <i class=\"fa fa-file\"></i>
                        </a>
                        ";
            } else {
                // line 65
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intervention_d_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "idbug" => $this->getAttribute($context["int"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" title=\"Détail de l'intervention\">
                            <i class=\"fa fa-file\"></i>
                        </a>
                        ";
            }
            // line 69
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['int'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                </tbody>
            </table>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    ";
        // line 78
        $this->loadTemplate("footer.html.twig", ":Interventions/List:list.html.twig", 78)->display($context);
        // line 79
        echo "



</div><!-- ./wrapper -->
";
        
        $__internal_2e8f13c24b6d75ca9393a1a42fdad40a928d4e278daef6539d4fc90c0460b43b->leave($__internal_2e8f13c24b6d75ca9393a1a42fdad40a928d4e278daef6539d4fc90c0460b43b_prof);

    }

    public function getTemplateName()
    {
        return ":Interventions/List:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 79,  184 => 78,  176 => 72,  168 => 69,  160 => 65,  152 => 61,  150 => 60,  143 => 57,  141 => 56,  130 => 54,  126 => 53,  120 => 52,  111 => 50,  108 => 49,  106 => 47,  102 => 46,  86 => 32,  84 => 31,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <!-- Site wrapper -->*/
/* <div class="wrapper">*/
/* */
/*     {% include 'header.html.twig' %}*/
/*     <!-- =============================================== -->*/
/*     {% include 'sidebar.html.twig' %}*/
/*     <!-- =============================================== -->*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 {{ h1 }}*/
/* */
/*             </h1>*/
/* */
/*             {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/* */
/*             {% include 'flashMessage.html.twig' %}*/
/* */
/*             {% include 'Ndd/Nav/options.html.twig'  with {'active': 'intervention','ndd':ndd, 'type':type,'idagency':idagency,'iduser':iduser} only %}*/
/* */
/*             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/* */
/*                 <thead>*/
/* <tr>*/
/*     <th>Non lu</th>*/
/* */
/*     <th>Créé le</th>*/
/*     <th>Libellé</th>*/
/*     <th>Status</th>*/
/*     <th>Détail</th>*/
/* </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for int in interventions %}*/
/*                     {#[{"name":"Intrusion dans le site davril-formation-securite.com",*/
/*                     "creation_time":"2015-10-24T11:28:33Z","status":"RESOLVED","last_change_time":"2015-10-24T11:29:00Z","0":"isRead","1":true,"id":2}]#}*/
/*                 <tr>*/
/*                     <td class="text-success" data-order="{{ int.isRead }}">{% if int.isRead == false %} <i class="fa fa-bell"></i>{% endif %} </td>*/
/* */
/*                     <td  data-order="{{ int.creation_time }}">{{ int.creation_time | date('d/m/Y') }}</td>*/
/*                     <td>{{ int.name }} </td>*/
/*                     <td data-order="{{ int.status }}">{% if  int.status == 'RESOLVED'  %} <span class="text-success">Résolu</span>{% else %}<span class="text-danger">En cours</span>{% endif %}        </td>*/
/*                     <td>*/
/*                         {% if type == 'super_admin' %}*/
/*                         <a href="{{ path('intervention_d_super_admin',{'iduser':iduser,'idagency':idagency,'ndd':ndd,idbug:int.id}) }}" class="btn btn-default" title="Détail de l'intervention">*/
/*                             <i class="fa fa-file"></i>*/
/*                         </a>*/
/*                         {% elseif type=="admin" %}*/
/*                         <a href="{{ path('intervention_d_admin',{'iduser':iduser,'ndd':ndd,idbug:int.id}) }}" class="btn btn-default" title="Détail de l'intervention">*/
/*                             <i class="fa fa-file"></i>*/
/*                         </a>*/
/*                         {% else %}*/
/*                         <a href="{{ path('intervention_d_user',{'ndd':ndd,idbug:int.id}) }}" class="btn btn-default" title="Détail de l'intervention">*/
/*                             <i class="fa fa-file"></i>*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/* */
/*         </section><!-- /.content -->*/
/*     </div><!-- /.content-wrapper -->*/
/* */
/*     {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/* </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
