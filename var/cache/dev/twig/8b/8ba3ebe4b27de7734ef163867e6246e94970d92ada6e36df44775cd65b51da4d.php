<?php

/* :Instance:instance.html.twig */
class __TwigTemplate_d60a88c355f7b866946183ca642376dc815251c3c5fbb4cfcb88e565ffc1459f extends Twig_Template
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
        $__internal_d082167155b63b0c120a563fdd05a1c87341f0ad9eba19293d45b86870728c71 = $this->env->getExtension("native_profiler");
        $__internal_d082167155b63b0c120a563fdd05a1c87341f0ad9eba19293d45b86870728c71->enter($__internal_d082167155b63b0c120a563fdd05a1c87341f0ad9eba19293d45b86870728c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Instance:instance.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d082167155b63b0c120a563fdd05a1c87341f0ad9eba19293d45b86870728c71->leave($__internal_d082167155b63b0c120a563fdd05a1c87341f0ad9eba19293d45b86870728c71_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f738c6ac9ebefc8c8d349c81d50c827c9e9e1898a1e58bf422bea20df3b39b7 = $this->env->getExtension("native_profiler");
        $__internal_6f738c6ac9ebefc8c8d349c81d50c827c9e9e1898a1e58bf422bea20df3b39b7->enter($__internal_6f738c6ac9ebefc8c8d349c81d50c827c9e9e1898a1e58bf422bea20df3b39b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Instance:instance.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
            // line 35
            echo "                            <div class=\"box-tools pull-right\">
                                <a href=\"";
            // line 36
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 37
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 38
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 39
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
                echo "
                                ";
            } else {
                // line 41
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_options_instance_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "name", array()), "html", null, true);
        echo "</li>
                            <li>Produit : ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "product", array()), "name", array()), "html", null, true);
        echo "</li>
                            <li>Type : ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "typeInstance", array()), "html", null, true);
        echo "</li>
                            <li>Date d'expiration :
                                ";
        // line 53
        if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
            echo "<strong class=\"";
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dateEnd", array()), "date", array()), "U") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                echo "text-danger";
            } else {
                echo "text-primary";
            }
            echo "\">";
        }
        // line 54
        echo "                                    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dateEnd", array()), "date", array()), "d/m/Y"), "html", null, true);
        echo "
                                    ";
        // line 55
        if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
            echo "</strong>";
        }
        // line 56
        echo "

                                ";
        // line 58
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
            // line 59
            echo "
                                    ";
            // line 60
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 61
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le serveur\">(Renouveler le serveur)</a>

                                    ";
            } elseif ((            // line 63
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 64
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le serveur\">(Renouveler le serveur)</a>

                                    ";
            } else {
                // line 67
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dataCenter", array()), "country", array()), "html", null, true);
        echo "</li>
                            <li>Puissance  : ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "sizeInstance", array()), "html", null, true);
        echo "</li>
                            <li>Espace disque : ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dataDiskTotalSize", array()), "html", null, true);
        echo " (dont ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "dataDiskAdditionalSize", array()), "html", null, true);
        echo " Go en option)</li>
                            <li>
                                ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 79
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        if ( !(null === $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "vhosts", array()))) {
            // line 103
            echo "
                                        ";
            // line 104
            $context["vh"] = $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "vhosts", array());
            // line 105
            echo "
                                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vh"]) ? $context["vh"] : $this->getContext($context, "vh")));
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
                    if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                        // line 112
                        echo "                                                        ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                        echo "
                                                    ";
                    } elseif ((                    // line 113
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                        // line 114
                        echo "                                                       ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                        echo "
                                                    ";
                    } else {
                        // line 116
                        echo "                                                       ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("toggle_option_maintenance_simple_hosting_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
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
                if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                    // line 124
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                    echo "\"
                                                        ";
                } elseif ((                // line 125
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                    // line 126
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
                    echo "\"

                                                        ";
                } else {
                    // line 129
                    echo "                                                            href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_vhost_2_user", array("idinstance" => $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "id", array()), "vhost" => $this->getAttribute($context["v"], "name", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "ftpServer", array()), "html", null, true);
        echo "</li>
                                                <li>Utilisateur : ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "userFtp", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "userFtp", array()), "html", null, true);
        echo ".admin";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "ftpServer", array()), 4, null), "html", null, true);
        echo "\" target=\"_blank\">Administrer</a></li>
                                                <li>Utilisateur : ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "userFtp", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["snapshots"]) ? $context["snapshots"] : $this->getContext($context, "snapshots")));
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
        
        $__internal_6f738c6ac9ebefc8c8d349c81d50c827c9e9e1898a1e58bf422bea20df3b39b7->leave($__internal_6f738c6ac9ebefc8c8d349c81d50c827c9e9e1898a1e58bf422bea20df3b39b7_prof);

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
        return array (  446 => 206,  444 => 205,  433 => 196,  426 => 194,  422 => 192,  418 => 191,  415 => 190,  411 => 189,  405 => 185,  386 => 168,  380 => 167,  364 => 154,  360 => 153,  345 => 140,  341 => 138,  330 => 132,  323 => 129,  316 => 126,  314 => 125,  309 => 124,  307 => 123,  302 => 120,  298 => 118,  292 => 116,  286 => 114,  284 => 113,  279 => 112,  277 => 111,  272 => 110,  266 => 109,  262 => 108,  259 => 107,  255 => 106,  252 => 105,  250 => 104,  247 => 103,  245 => 102,  219 => 79,  215 => 78,  211 => 77,  204 => 75,  200 => 74,  196 => 73,  192 => 71,  189 => 70,  182 => 67,  175 => 64,  173 => 63,  167 => 61,  165 => 60,  162 => 59,  160 => 58,  156 => 56,  152 => 55,  147 => 54,  137 => 53,  132 => 51,  128 => 50,  124 => 49,  119 => 46,  113 => 42,  107 => 41,  101 => 39,  99 => 38,  94 => 37,  92 => 36,  89 => 35,  87 => 34,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
