<?php

/* :Instance:instance.html.twig */
class __TwigTemplate_430a4c24f3849d2a02a2c06de6d878cc739a560790636f25ec157900a02428ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Instance:instance.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Instance:instance.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Instance:instance.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Instance:instance.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Instance:instance.html.twig", 29)->display($context);
        // line 30
        echo "
                <div class=\"box box-solid box-default\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Informations</h3>
                        ";
        // line 34
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
            // line 35
            echo "                            <div class=\"box-tools pull-right\">
                                <a href=\"";
            // line 36
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 37
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 38
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 39
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "
                                ";
            } else {
                // line 41
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "
                                ";
            }
            // line 42
            echo "\" class=\"btn btn-warning \">Modifier les options du serveur
                                </a>
                            </div>
                        ";
        }
        // line 46
        echo "                    </div>
                    <div class=\"box-body\">
                        <ul class=\"list-unstyled\">
                            <li>Nom : ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "name", array()), "html", null, true);
        echo "</li>
                            <li>Produit : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</li>
                            <li>Type : ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "typeInstance", array()), "html", null, true);
        echo "</li>
                            <li>Date d'expiration :
                                ";
        // line 53
        if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : null))) {
            echo "<strong class=\"";
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dateEnd", array()), "date", array()), "U") < (isset($context["today"]) ? $context["today"] : null))) {
                echo "text-danger";
            } else {
                echo "text-primary";
            }
            echo "\">";
        }
        // line 54
        echo "                                    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dateEnd", array()), "date", array()), "d/m/Y"), "html", null, true);
        echo "
                                    ";
        // line 55
        if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : null))) {
            echo "</strong>";
        }
        // line 56
        echo "

                                ";
        // line 58
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
            // line 59
            echo "
                                    ";
            // line 60
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 61
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le serveur\">(Renouveler le serveur)</a>

                                    ";
            } elseif ((            // line 63
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 64
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le serveur\">(Renouveler le serveur)</a>

                                    ";
            } else {
                // line 67
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le serveur\">(Renouveler le serveur)</a>

                                    ";
            }
            // line 70
            echo "                                ";
        }
        // line 71
        echo "
                            </li>
                            <li>Localisation : ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dataCenter", array()), "country", array()), "html", null, true);
        echo "</li>
                            <li>Puissance  : ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "sizeInstance", array()), "html", null, true);
        echo "</li>
                            <li>Espace disque : ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dataDiskTotalSize", array()), "html", null, true);
        echo " (dont ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "dataDiskAdditionalSize", array()), "html", null, true);
        echo " Go en option)</li>
                            <li>
                                ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                                ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "</li>

                        </ul>
                    </div>
                </div>
                <div id=\"tabs-with-hash\" class=\"nav nav-tabs nav-justified\">
                    <ul>
                        <li><a href=\"#sites\">Sites</a></li>
                        <li><a href=\"#acces\">Accès</a></li>
                        <li><a href=\"#snapshot\">Sauvegardes</a></li>
                    </ul>
                    <div class=\"box\">
                        <div id=\"sites\">

                            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Option maintenance ?</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 102
        if ( !(null === $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "vhosts", array()))) {
            // line 103
            echo "
                                        ";
            // line 104
            $context["vh"] = $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "vhosts", array());
            // line 105
            echo "
                                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vh"]) ? $context["vh"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 107
                echo "                                        <tr>
                                            <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "name", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 109
                if ($this->getAttribute($context["v"], "inMaintenance", array())) {
                    echo "Oui";
                } else {
                    echo "Non";
                }
                // line 110
                echo "                                                ";
                if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
                    echo "<a href=\"
                                                    ";
                    // line 111
                    if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                        // line 112
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                        echo "
                                                    ";
                    } elseif ((                    // line 113
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                        // line 114
                        echo "                                                       ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 116
                        echo "                                                       ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                        echo "
                                                    ";
                    }
                    // line 118
                    echo "                                                \" title=\"(Alterner)\"><i class=\"fa fa-refresh\"></i></a>
                                                ";
                }
                // line 120
                echo "                                            </td>
                                            <td>
                                                <a
                                                        ";
                // line 123
                if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                    // line 124
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                    echo "\"
                                                        ";
                } elseif ((                // line 125
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                    // line 126
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                    echo "\"

                                                        ";
                } else {
                    // line 129
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                    echo "\"

                                                        ";
                }
                // line 132
                echo "                                                        class=\"btn btn-danger\" title=\"Supprimer\">
                                                    <i class=\"fa fa-trash\"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "
                                ";
        }
        // line 140
        echo "                                </tbody>
                            </table>

                        </div>
                        <div id=\"acces\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"box box-default box-solid\">
                                        <div class=\"box-header\">
                                            <h3 class=\"box-title\">Sftp</h3>
                                        </div>
                                        <div class=\"box-body\">
                                            <ul class=\"list-unstiled\">
                                                <li>Hôte : sftp://";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "ftpServer", array()), "html", null, true);
        echo "</li>
                                                <li>Utilisateur : ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "userFtp", array()), "html", null, true);
        echo "</li>
                                                <li>Mot de passe : Définie à la création</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"box box-default box-solid\">
                                        <div class=\"box-header\">
                                            <h3 class=\"box-title\">Administration</h3>
                                        </div>
                                        <div class=\"box-body\">
                                            <ul class=\"list-unstiled\">
                                                <li><a href=\"https://";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "userFtp", array()), "html", null, true);
        echo ".admin";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "ftpServer", array()), 4, null), "html", null, true);
        echo "\" target=\"_blank\">Administrer</a></li>
                                                <li>Utilisateur : ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : null), "userFtp", array()), "html", null, true);
        echo "</li>
                                                <li>Mot de passe : Définie à la création</li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"snapshot\">
                            <p>Restauration disponible sur simple demande.</p>
                            <table class=\"table table-striped table-hover table-condensed\" width=\"100%\">
                                <thead>
                                <tr>
                                    <th>Date de la créaton de la sauvegarde</th>
                                    <th>Nom</th>
                                    ";
        // line 185
        echo "                                </tr>
                                </thead>

                                <tbody>
                                ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["snapshots"]) ? $context["snapshots"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 190
            echo "                                    <tr>
                                        <td>";
            // line 191
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["s"], "date_created", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 194
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 205
        $this->loadTemplate("footer.html.twig", ":Instance:instance.html.twig", 205)->display($context);
        // line 206
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Instance:instance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 206,  435 => 205,  424 => 196,  417 => 194,  413 => 192,  409 => 191,  406 => 190,  402 => 189,  396 => 185,  377 => 168,  371 => 167,  355 => 154,  351 => 153,  336 => 140,  332 => 138,  321 => 132,  314 => 129,  307 => 126,  305 => 125,  300 => 124,  298 => 123,  293 => 120,  289 => 118,  283 => 116,  277 => 114,  275 => 113,  270 => 112,  268 => 111,  263 => 110,  257 => 109,  253 => 108,  250 => 107,  246 => 106,  243 => 105,  241 => 104,  238 => 103,  236 => 102,  210 => 79,  206 => 78,  202 => 77,  195 => 75,  191 => 74,  187 => 73,  183 => 71,  180 => 70,  173 => 67,  166 => 64,  164 => 63,  158 => 61,  156 => 60,  153 => 59,  151 => 58,  147 => 56,  143 => 55,  138 => 54,  128 => 53,  123 => 51,  119 => 50,  115 => 49,  110 => 46,  104 => 42,  98 => 41,  92 => 39,  90 => 38,  85 => 37,  83 => 36,  80 => 35,  78 => 34,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div class="box box-solid box-default">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">Informations</h3>*/
/*                         {% if afficheProduits %}*/
/*                             <div class="box-tools pull-right">*/
/*                                 <a href="{% if type == 'super_admin' %}*/
/*                                     {{ path("update_options_instance_super_admin",{'idagency':idagency,'iduser':iduser,'idinstance':instance.id}) }}*/
/*                                 {% elseif type == 'admin' %}*/
/*                                     {{ path("update_options_instance_admin",{'iduser':iduser,'idinstance':instance.id}) }}*/
/*                                 {% else %}*/
/*                                     {{ path("update_options_instance_user",{'idinstance':instance.id}) }}*/
/*                                 {% endif %}" class="btn btn-warning ">Modifier les options du serveur*/
/*                                 </a>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="box-body">*/
/*                         <ul class="list-unstyled">*/
/*                             <li>Nom : {{ instance.name }}</li>*/
/*                             <li>Produit : {{ instance.product.name }}</li>*/
/*                             <li>Type : {{ instance.typeInstance }}</li>*/
/*                             <li>Date d'expiration :*/
/*                                 {% if (instance.dateEnd.date | date('U')) < in2months  %}<strong class="{% if (instance.dateEnd.date | date('U')) < today  %}text-danger{% else %}text-primary{% endif %}">{% endif %}*/
/*                                     {{ instance.dateEnd.date | date('d/m/Y') }}*/
/*                                     {% if (instance.dateEnd.date | date('U')) < in2months   %}</strong>{% endif %}*/
/* */
/* */
/*                                 {% if afficheProduits %}*/
/* */
/*                                     {% if type == 'super_admin' %}*/
/*                                         <a href="{{ path("renew_instance_super_admin",{'idagency':idagency,'iduser':iduser,'idinstance':instance.id}) }}" class="btn btn-box-tool" title="Renouveler le serveur">(Renouveler le serveur)</a>*/
/* */
/*                                     {% elseif type == 'admin' %}*/
/*                                         <a href="{{ path("renew_instance_admin",{'iduser':iduser,'idinstance':instance.id}) }}" class="btn btn-box-tool" title="Renouveler le serveur">(Renouveler le serveur)</a>*/
/* */
/*                                     {% else %}*/
/*                                         <a href="{{ path("renew_instance_user",{'idinstance':instance.id}) }}" class="btn btn-box-tool" title="Renouveler le serveur">(Renouveler le serveur)</a>*/
/* */
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/* */
/*                             </li>*/
/*                             <li>Localisation : {{ instance.dataCenter.country }}</li>*/
/*                             <li>Puissance  : {{ instance.sizeInstance }}</li>*/
/*                             <li>Espace disque : {{ instance.dataDiskTotalSize }} (dont {{ instance.dataDiskAdditionalSize }} Go en option)</li>*/
/*                             <li>*/
/*                                 {{ form_start(form) }}*/
/*                                 {{ form_errors(form) }}*/
/*                                 {{ form_end(form) }}</li>*/
/* */
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="tabs-with-hash" class="nav nav-tabs nav-justified">*/
/*                     <ul>*/
/*                         <li><a href="#sites">Sites</a></li>*/
/*                         <li><a href="#acces">Accès</a></li>*/
/*                         <li><a href="#snapshot">Sauvegardes</a></li>*/
/*                     </ul>*/
/*                     <div class="box">*/
/*                         <div id="sites">*/
/* */
/*                             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Nom</th>*/
/*                                     <th>Option maintenance ?</th>*/
/*                                     <th>Actions</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {%  if instance.vhosts is not null %}*/
/* */
/*                                         {%  set vh = instance.vhosts  %}*/
/* */
/*                                     {% for v in vh %}*/
/*                                         <tr>*/
/*                                             <td>{{ v.name }}</td>*/
/*                                             <td>{% if v.inMaintenance %}Oui{% else %}Non{% endif %}*/
/*                                                 {% if is_granted("ROLE_LEGRAIN") %}<a href="*/
/*                                                     {% if type=="super_admin" %}*/
/*                                                         {{path('toggle_option_maintenance_simple_hosting_super_admin',{'idagency':idagency,'iduser':iduser,'idinstance':instance.id,'vhost':v.name}) }}*/
/*                                                     {% elseif type=="admin" %}*/
/*                                                        {{path('toggle_option_maintenance_simple_hosting_admin',{'iduser':iduser,'idinstance':instance.id,'vhost':v.name}) }}*/
/*                                                     {% else %}*/
/*                                                        {{path('toggle_option_maintenance_simple_hosting_user',{'idinstance':instance.id,'vhost':v.name}) }}*/
/*                                                     {% endif %}*/
/*                                                 " title="(Alterner)"><i class="fa fa-refresh"></i></a>*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <a*/
/*                                                         {% if type=="super_admin" %}*/
/*                                                             href="{{ path('delete_vhost_2_super_admin',{'idagency':idagency,'iduser':iduser,'idinstance':instance.id,'vhost':v.name}) }}"*/
/*                                                         {% elseif type=="admin" %}*/
/*                                                             href="{{ path('delete_vhost_2_admin',{'iduser':iduser,'idinstance':instance.id,'vhost':v.name}) }}"*/
/* */
/*                                                         {% else %}*/
/*                                                             href="{{ path('delete_vhost_2_user',{'idinstance':instance.id,'vhost':v.name}) }}"*/
/* */
/*                                                         {% endif %}*/
/*                                                         class="btn btn-danger" title="Supprimer">*/
/*                                                     <i class="fa fa-trash"></i>*/
/*                                                 </a>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/* */
/*                                 {% endif %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/*                         <div id="acces">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="box box-default box-solid">*/
/*                                         <div class="box-header">*/
/*                                             <h3 class="box-title">Sftp</h3>*/
/*                                         </div>*/
/*                                         <div class="box-body">*/
/*                                             <ul class="list-unstiled">*/
/*                                                 <li>Hôte : sftp://{{ instance.ftpServer }}</li>*/
/*                                                 <li>Utilisateur : {{ instance.userFtp }}</li>*/
/*                                                 <li>Mot de passe : Définie à la création</li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-6">*/
/*                                     <div class="box box-default box-solid">*/
/*                                         <div class="box-header">*/
/*                                             <h3 class="box-title">Administration</h3>*/
/*                                         </div>*/
/*                                         <div class="box-body">*/
/*                                             <ul class="list-unstiled">*/
/*                                                 <li><a href="https://{{ instance.userFtp }}.admin{{ instance.ftpServer[4:] }}" target="_blank">Administrer</a></li>*/
/*                                                 <li>Utilisateur : {{ instance.userFtp }}</li>*/
/*                                                 <li>Mot de passe : Définie à la création</li>*/
/* */
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="snapshot">*/
/*                             <p>Restauration disponible sur simple demande.</p>*/
/*                             <table class="table table-striped table-hover table-condensed" width="100%">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Date de la créaton de la sauvegarde</th>*/
/*                                     <th>Nom</th>*/
/*                                     {#  <th>Taille</th>#}*/
/*                                 </tr>*/
/*                                 </thead>*/
/* */
/*                                 <tbody>*/
/*                                 {% for s in snapshots %}*/
/*                                     <tr>*/
/*                                         <td>{{ s.date_created.date | date('d/m/Y') }}</td>*/
/*                                         <td>{{ s.name }}</td>*/
/*                                         {#  <td>{{ s.size }}</td>#}*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
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
