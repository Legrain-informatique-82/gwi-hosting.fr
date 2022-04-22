<?php

/* :Hebergement:heber.html.twig */
class __TwigTemplate_08cd6267edaaaadc4f2dad63f354b8fd5a77e037f3f8ca00562270c50791f5d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement:heber.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Hebergement:heber.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement:heber.html.twig", 10)->display($context);
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
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement:heber.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement:heber.html.twig", 27)->display($context);
        // line 28
        echo "
                ";
        // line 29
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Hebergement:heber.html.twig", 29)->display(array("active" => "hebergement", "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "type" => (isset($context["type"]) ? $context["type"] : null), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null)));
        // line 30
        echo "

                <div class=\"well\">

                    <a
                            ";
        // line 35
        if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 36
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_super_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))), "html", null, true);
            echo "\"
                            ";
        } elseif ((        // line 37
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 38
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))), "html", null, true);
            echo "\"
                            ";
        } else {
            // line 40
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()))), "html", null, true);
            echo "\"
                            ";
        }
        // line 42
        echo "                            class=\"btn btn-primary ";
        if ((isset($context["wwwExist"]) ? $context["wwwExist"] : null)) {
            echo "disabled";
        }
        echo "\">Lier le domaine à un serveur</a>

                    <a
                            ";
        // line 45
        if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 46
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_super_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))), "html", null, true);
            echo "\"
                            ";
        } elseif ((        // line 47
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 48
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))), "html", null, true);
            echo "\"
                            ";
        } else {
            // line 50
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()))), "html", null, true);
            echo "\"
                            ";
        }
        // line 52
        echo "                            class=\"btn btn-primary\">Ajouter un sous domaine</a>
                </div>
                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                    <thead>
                    <tr>
                        <th>Vhosts</th>
                        <th>Nom du serveur</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vhosts"]) ? $context["vhosts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 64
            echo "                        <tr>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            if ($this->getAttribute($context["v"], "serverName", array())) {
                // line 67
                echo "                                <a
                                        ";
                // line 68
                if (((isset($context["type"]) ? $context["type"] : null) == "admin")) {
                    // line 69
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["v"], "serverId", array()))), "html", null, true);
                    echo "\"
                                        ";
                } elseif ((                // line 70
(isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                    // line 71
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["v"], "serverId", array()))), "html", null, true);
                    echo "\"

                                        ";
                } else {
                    // line 74
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_user", array("idinstance" => $this->getAttribute($context["v"], "serverId", array()))), "html", null, true);
                    echo "\"

                                        ";
                }
                // line 77
                echo "                                        >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "serverName", array()), "html", null, true);
            } else {
                echo "NC";
            }
            // line 78
            echo "                                </a></td>
                            <td>
                                <a

                                        ";
            // line 82
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 83
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                echo "\"
                                        ";
            } elseif ((            // line 84
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 85
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                echo "\"
                                        ";
            } else {
                // line 87
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                echo "\"
                                        ";
            }
            // line 89
            echo "
                                        class=\"btn btn-danger\"><i class=\"fa fa-trash\" title=\"Supprimer\"></i></a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </tbody>
                </table>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 99
        $this->loadTemplate("footer.html.twig", ":Hebergement:heber.html.twig", 99)->display($context);
        // line 100
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Hebergement:heber.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 100,  235 => 99,  228 => 94,  218 => 89,  212 => 87,  206 => 85,  204 => 84,  199 => 83,  197 => 82,  191 => 78,  185 => 77,  178 => 74,  171 => 71,  169 => 70,  164 => 69,  162 => 68,  159 => 67,  157 => 66,  153 => 65,  150 => 64,  146 => 63,  133 => 52,  127 => 50,  121 => 48,  119 => 47,  114 => 46,  112 => 45,  103 => 42,  97 => 40,  91 => 38,  89 => 37,  84 => 36,  82 => 35,  75 => 30,  73 => 29,  70 => 28,  68 => 27,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 {% include 'Ndd/Nav/options.html.twig'  with {'active': 'hebergement','ndd':ndd.name, 'type':type,'idagency':idagency,'iduser':iduser} only %}*/
/* */
/* */
/*                 <div class="well">*/
/* */
/*                     <a*/
/*                             {% if type=="super_admin" %}*/
/*                                 href="{{ path('add_heber_ndd_super_admin',{'ndd':ndd.name,'idagency':idagency,'iduser':iduser}) }}"*/
/*                             {% elseif type=="admin" %}*/
/*                                 href="{{ path('add_heber_ndd_admin',{'ndd':ndd.name,'iduser':iduser}) }}"*/
/*                             {% else %}*/
/*                                 href="{{ path('add_heber_ndd_user',{'ndd':ndd.name}) }}"*/
/*                             {% endif %}*/
/*                             class="btn btn-primary {% if wwwExist %}disabled{% endif %}">Lier le domaine à un serveur</a>*/
/* */
/*                     <a*/
/*                             {% if type=="super_admin" %}*/
/*                                 href="{{ path('add_heber_super_admin',{'ndd':ndd.name,'idagency':idagency,'iduser':iduser}) }}"*/
/*                             {% elseif type=="admin" %}*/
/*                                 href="{{ path('add_heber_admin',{'ndd':ndd.name,'iduser':iduser}) }}"*/
/*                             {% else %}*/
/*                                 href="{{ path('add_heber_user',{'ndd':ndd.name}) }}"*/
/*                             {% endif %}*/
/*                             class="btn btn-primary">Ajouter un sous domaine</a>*/
/*                 </div>*/
/*                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Vhosts</th>*/
/*                         <th>Nom du serveur</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for v in vhosts %}*/
/*                         <tr>*/
/*                             <td>{{ v.name }}</td>*/
/*                             <td>{% if v.serverName %}*/
/*                                 <a*/
/*                                         {% if type=="admin" %}*/
/*                                             href="{{path("instance_admin",{'iduser':iduser,'idinstance':v.serverId})}}"*/
/*                                         {% elseif type=="super_admin" %}*/
/*                                             href="{{path("instance_super_admin",{'idagency':idagency,'iduser':iduser,'idinstance':v.serverId})}}"*/
/* */
/*                                         {% else %}*/
/*                                             href="{{path("instance_user",{'idinstance':v.serverId})}}"*/
/* */
/*                                         {% endif %}*/
/*                                         >{{ v.serverName }}{% else %}NC{% endif %}*/
/*                                 </a></td>*/
/*                             <td>*/
/*                                 <a*/
/* */
/*                                         {% if type =="super_admin" %}*/
/*                                             href="{{path("delete_vhost_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd.name,'vhost':v.name})}}"*/
/*                                         {% elseif type=="admin" %}*/
/*                                             href="{{path("delete_vhost_admin",{'iduser':iduser,'ndd':ndd.name,'vhost':v.name})}}"*/
/*                                         {% else %}*/
/*                                             href="{{path("delete_vhost_user",{'ndd':ndd.name,'vhost':v.name})}}"*/
/*                                         {% endif %}*/
/* */
/*                                         class="btn btn-danger"><i class="fa fa-trash" title="Supprimer"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
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
