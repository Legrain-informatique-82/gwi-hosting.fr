<?php

/* :Hebergement:heber.html.twig */
class __TwigTemplate_a6bddd09d8972847352ef3307356a4fbcd051561f99c74eb400e25193a5c85ba extends Twig_Template
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
        $__internal_618e5d9df9cfaf7805f3c0b3f9eb5699f5ffe89f1db20d70d73a1d6b6191e8c1 = $this->env->getExtension("native_profiler");
        $__internal_618e5d9df9cfaf7805f3c0b3f9eb5699f5ffe89f1db20d70d73a1d6b6191e8c1->enter($__internal_618e5d9df9cfaf7805f3c0b3f9eb5699f5ffe89f1db20d70d73a1d6b6191e8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Hebergement:heber.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618e5d9df9cfaf7805f3c0b3f9eb5699f5ffe89f1db20d70d73a1d6b6191e8c1->leave($__internal_618e5d9df9cfaf7805f3c0b3f9eb5699f5ffe89f1db20d70d73a1d6b6191e8c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c1a9f51d03f28a9b1049be6b3ae46fc8b5165b0d485ed24c52cb8897fb87856 = $this->env->getExtension("native_profiler");
        $__internal_7c1a9f51d03f28a9b1049be6b3ae46fc8b5165b0d485ed24c52cb8897fb87856->enter($__internal_7c1a9f51d03f28a9b1049be6b3ae46fc8b5165b0d485ed24c52cb8897fb87856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement:heber.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Hebergement:heber.html.twig", 29)->display(array("active" => "hebergement", "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser"))));
        // line 30
        echo "

                <div class=\"well\">

                    <a
                            ";
        // line 35
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 36
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_super_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))), "html", null, true);
            echo "\"
                            ";
        } elseif ((        // line 37
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 38
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))), "html", null, true);
            echo "\"
                            ";
        } else {
            // line 40
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_ndd_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()))), "html", null, true);
            echo "\"
                            ";
        }
        // line 42
        echo "                            class=\"btn btn-primary ";
        if ((isset($context["wwwExist"]) ? $context["wwwExist"] : $this->getContext($context, "wwwExist"))) {
            echo "disabled";
        }
        echo "\">Lier le domaine à un serveur</a>

                    <a
                            ";
        // line 45
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 46
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_super_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))), "html", null, true);
            echo "\"
                            ";
        } elseif ((        // line 47
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 48
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_admin", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))), "html", null, true);
            echo "\"
                            ";
        } else {
            // line 50
            echo "                                href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_heber_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["vhosts"]) ? $context["vhosts"] : $this->getContext($context, "vhosts")));
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
                if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                    // line 69
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["v"], "serverId", array()))), "html", null, true);
                    echo "\"
                                        ";
                } elseif ((                // line 70
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                    // line 71
                    echo "                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["v"], "serverId", array()))), "html", null, true);
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
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 83
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                echo "\"
                                        ";
            } elseif ((            // line 84
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 85
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                echo "\"
                                        ";
            } else {
                // line 87
                echo "                                            href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
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
        
        $__internal_7c1a9f51d03f28a9b1049be6b3ae46fc8b5165b0d485ed24c52cb8897fb87856->leave($__internal_7c1a9f51d03f28a9b1049be6b3ae46fc8b5165b0d485ed24c52cb8897fb87856_prof);

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
        return array (  246 => 100,  244 => 99,  237 => 94,  227 => 89,  221 => 87,  215 => 85,  213 => 84,  208 => 83,  206 => 82,  200 => 78,  194 => 77,  187 => 74,  180 => 71,  178 => 70,  173 => 69,  171 => 68,  168 => 67,  166 => 66,  162 => 65,  159 => 64,  155 => 63,  142 => 52,  136 => 50,  130 => 48,  128 => 47,  123 => 46,  121 => 45,  112 => 42,  106 => 40,  100 => 38,  98 => 37,  93 => 36,  91 => 35,  84 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
