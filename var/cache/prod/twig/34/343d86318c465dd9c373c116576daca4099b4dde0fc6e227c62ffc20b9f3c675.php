<?php

/* :Email/List:listemail.html.twig */
class __TwigTemplate_94680a784297ef9a9ac6e1daced69bdb15060fc437d020252bce1577b208ed3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/List:listemail.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Email/List:listemail.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/List:listemail.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Gestion de ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo " : Liste des boites e-mails
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Email/List:listemail.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 26
        $this->loadTemplate("flashMessage.html.twig", ":Email/List:listemail.html.twig", 26)->display($context);
        // line 27
        echo "
                ";
        // line 28
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Email/List:listemail.html.twig", 28)->display(array("active" => "email", "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "type" => (isset($context["type"]) ? $context["type"] : null)));
        // line 29
        echo "

                <div class=\"well\">
                    <p>
                        ";
        // line 33
        if (((isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 34
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                            ";
        } elseif ((        // line 35
(isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 36
            echo "                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 38
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                                    ";
        }
        // line 40
        echo "                                    <i class=\"fa fa-plus\"></i> Ajouter une boite e-mail
                                </a>

                                ";
        // line 43
        if (((isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 44
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                                    ";
        } elseif ((        // line 45
(isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 46
            echo "                                    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                                        ";
        } else {
            // line 48
            echo "                                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null))), "html", null, true);
            echo "\">
                                            ";
        }
        // line 50
        echo "                                            <i class=\"fa fa-plus\"></i> Ajouter une redirection e-mail
                                        </a>
                    </p>


                </div>

                ";
        // line 60
        echo "                ";
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
            // line 61
            echo "                    <div class=\"well\">
                        ";
            // line 62
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id", array()) == 1)) {
                // line 63
                echo "                        <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
                echo "</h2>
                        <div>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "longDescription", array()), "html", null, true);
                echo "</div>
                        <p>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "priceHT", array()), "html", null, true);
                echo " € HT pour un mois</p>


                            ";
                // line 68
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
                echo "
                            ";
                // line 69
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "

                            ";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "addToCart", array()), 'row');
                echo "

                            ";
                // line 73
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
                echo "

                        ";
            } else {
                // line 76
                echo "                            <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
                echo "</h2>
                            <div>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "longDescription", array()), "html", null, true);
                echo "</div>
                            <p>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "priceHT", array()), "html", null, true);
                echo " € HT par Go pour un mois</p>
                            ";
                // line 79
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
                echo "
                            ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "

                            ";
                // line 82
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nbGo", array()), 'row');
                echo "

                            ";
                // line 84
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "addToCart", array()), 'row');
                echo "

                            ";
                // line 86
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
                echo "
                        ";
            }
            // line 88
            echo "                    </div>
                ";
        }
        // line 90
        echo "
                <div class=\"well\">
                    <div class=\"row\">
                        <div class=\"col-md-4 text-center\">
                            <p>
                                <canvas id=\"chartMailbox\" width=\"150\" height=\"150\" data-used=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["countMailbox"]) ? $context["countMailbox"] : null), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxMailbox"]) ? $context["maxMailbox"] : null), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Boite e-mail : ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["countMailbox"]) ? $context["countMailbox"] : null), "html", null, true);
        echo " sur ";
        echo twig_escape_filter($this->env, (isset($context["maxMailbox"]) ? $context["maxMailbox"] : null), "html", null, true);
        echo "  autorisées</p>
                            <p>Pourcentage d'utilisation : ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["percentMailbox"]) ? $context["percentMailbox"] : null), "html", null, true);
        echo "% </p>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <p>
                                <canvas id=\"chartQuotaMailbox\" width=\"150\" height=\"150\" data-used=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_round((isset($context["countQuota"]) ? $context["countQuota"] : null), 2, "ceil"), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxQuota"]) ? $context["maxQuota"] : null), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Quota : ";
        // line 104
        echo twig_escape_filter($this->env, twig_round((isset($context["countQuota"]) ? $context["countQuota"] : null), 2, "ceil"), "html", null, true);
        echo "Go sur ";
        echo twig_escape_filter($this->env, (isset($context["maxQuota"]) ? $context["maxQuota"] : null), "html", null, true);
        echo "Go autorisés</p>
                            <p>pourcentage d'utilisation : ";
        // line 105
        echo twig_escape_filter($this->env, twig_round((isset($context["percentQuota"]) ? $context["percentQuota"] : null)), "html", null, true);
        echo " %</p>

                        </div>

                        <div class=\"col-md-4 text-center\">
                            <p>
                                <canvas id=\"chartForward\" width=\"150\" height=\"150\" data-used=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["countForward"]) ? $context["countForward"] : null), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxForward"]) ? $context["maxForward"] : null), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Redirections: ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["countForward"]) ? $context["countForward"] : null), "html", null, true);
        echo " sur ";
        echo twig_escape_filter($this->env, (isset($context["maxForward"]) ? $context["maxForward"] : null), "html", null, true);
        echo "  autorisées</p>
                            <p>Pourcentage d'utilisation : ";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["percentForward"]) ? $context["percentForward"] : null), "html", null, true);
        echo "% </p>

                        </div>

                    </div>
                </div>

                <div id=\"tabs\" class=\"nav nav-tabs nav-justified\">
                    <ul>
                        <li><a href=\"#emails\">Boites e-mails</a></li>
                        <li><a href=\"#redirections\">Redirections</a></li>
                        <li><a href=\"#parametrage\">Paramètres (imap,pop,smtp)</a></li>
                    </ul>
                    <div class=\"box\">


                        <div class=\"box-body\">

                            <div id=\"emails\">
                                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>taille</th>
                                        <th>Quota</th>
                                        <th>Répondeur</th>
                                        <th>Gestion par l'utilisateur</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) ? $context["emails"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 146
            echo "                                        <tr>
                                            <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "login", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
            echo "</td>
                                            <td data-order=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["email"], "quota", array()), "used", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute($context["email"], "quota", array()), "used", array()) / 1024), 2, "floor"), "html", null, true);
            echo " Mo</td>
                                            <td data-order=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["email"], "quota", array()), "granted", array()), "html", null, true);
            echo "\">";
            if (($this->getAttribute($this->getAttribute($context["email"], "quota", array()), "granted", array()) == 0)) {
                echo "Aucun quota ";
            } else {
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["email"], "quota", array()), "granted", array()) / 1024), "html", null, true);
                echo " Mo";
            }
            echo "</td>
                                            <td>
                                                ";
            // line 151
            if ($this->getAttribute($this->getAttribute($context["email"], "responder", array()), "active", array())) {
                echo "Activé";
            }
            // line 152
            echo "                                            </td>
                                            <td>
                                                ";
            // line 154
            if ($this->getAttribute($context["email"], "accountApiExist", array())) {
                echo "Oui";
            }
            // line 155
            echo "                                            </td>
                                            <td>
                                                <div class=\"btn-group\">
                                                    ";
            // line 158
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 159
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 162
                if (((isset($context["status"]) ? $context["status"] : null) == "paid")) {
                    // line 163
                    echo "                                                            ";
                    // line 173
                    echo "                                                             <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-xs\" title=\"Gérer le répondeur\">
                                                                    <span class=\"glyphicon glyphicon-phone-alt\"></span>
                                                             </a>
                                                        ";
                }
                // line 177
                echo "
                                                    ";
            } elseif ((            // line 178
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 179
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 182
                if (((isset($context["status"]) ? $context["status"] : null) == "paid")) {
                    // line 193
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-xs\" title=\"Gérer le répondeur\">
                                                                <span class=\"glyphicon glyphicon-phone-alt\"></span>
                                                            </a>
                                                        ";
                }
                // line 197
                echo "
                                                    ";
            } else {
                // line 199
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 202
                if (((isset($context["status"]) ? $context["status"] : null) == "paid")) {
                    // line 203
                    echo "                                                           ";
                    // line 212
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-xs\" title=\"Gérer le répondeur\">
                                                                <span class=\"glyphicon glyphicon-phone-alt\"></span>
                                                            </a>
                                                        ";
                }
                // line 216
                echo "                                                    ";
            }
            // line 217
            echo "                                                    <a target=\"_blank\" class=\"btn btn-default btn-xs\" href=\"http://webmail.";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
            echo "/?_user=";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)), "html", null, true);
            echo "\" title=\"Lien vers le webmail\"><span class=\"glyphicon glyphicon-send\"></span></a>
                                                </div>
                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                                    </tbody>
                                </table>
                            </div>
                            <div id=\"redirections\">

                                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                                    <thead>
                                    <tr>
                                        <th>Adresse</th>
                                        <th>Redirigé vers</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listForward"]) ? $context["listForward"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["forward"]) {
            // line 238
            echo "                                        <tr>
                                            <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($context["forward"], "source", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
            echo "</td>
                                            <td>
                                                ";
            // line 241
            if (twig_test_iterable($this->getAttribute($context["forward"], "destinations", array()))) {
                // line 242
                echo "                                                    <ul class=\"list-unstyled\">
                                                        ";
                // line 243
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forward"], "destinations", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["redirect"]) {
                    // line 244
                    echo "                                                            <li>";
                    echo twig_escape_filter($this->env, $context["redirect"], "html", null, true);
                    echo "</li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['redirect'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 246
                echo "                                                    </ul>
                                                ";
            } else {
                // line 248
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["forward"], "destinations", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 250
            echo "
                                            </td>

                                            <td>
                                                <div class=\"btn-group\">

                                                    ";
            // line 256
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 257
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                    ";
            } elseif ((            // line 259
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 260
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                    ";
            } else {
                // line 263
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : null)))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                    ";
            }
            // line 266
            echo "
                                                </div>
                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id=\"parametrage\">
                            <h2 class=\"h4\">Parametres POP</h2>
                            <ul>
                               <li><b>Nom du serveur :</b> pop.";
        // line 280
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> Laissez par défaut 110 POP ou 995 pour POP SSL.</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo ")</li>
                                <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>
                            </ul>

                            <h2 class=\"h4\">Parametres IMAP</h2>
                            <ul>
                                <li><b>Nom du serveur :</b> imap.";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> Laissez par défaut  143 IMAP ou 993 pour IMAP SSL).</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo ")</li>
                                <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>
                            </ul>

                            <h2 class=\"h4\">Parametres SMTP</h2>
                            <ul>
                                <li><b>Nom du serveur :</b> smtp.";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> 25 par défaut, 587 (STARTTLS) si votre FAI filtre le port 25 (Free, Orange…), ou 465 si vous utilisez SSL. Dans tous les cas, vous pouvez essayer les trois et vous arrêter sur celui qui fonctionne.</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé). Si les différents ports ne fonctionnent pas, réessayez avec le port 25 (Sans chiffrement) et 587 (STARTTLS).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : null), "html", null, true);
        echo ")</li>
                                <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>
                            </ul>

                            <p class=\"well\">
                                Si vous rencontrez malgré tout des difficultés, n'oubliez pas que vous pouvez tout à fait utiliser le SMTP de votre Fournisseur d'Accès Internet. Par exemple, si vous êtes chez free, vous pourrez utiliser smtp.free.fr, ou si vous êtes chez Orange, smtp.orange.fr. N'oubliez pas, dans ce cas, de désactiver l'authentification SMTP : les fournisseurs d'accès vous identifient automatiquement grâce à votre adresse IP de connexion.
                            </p>
                        </div>

                    </div><!-- /.box-body -->
                </div>








            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 323
        $this->loadTemplate("footer.html.twig", ":Email/List:listemail.html.twig", 323)->display($context);
        // line 324
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Email/List:listemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  649 => 324,  647 => 323,  622 => 301,  616 => 298,  607 => 292,  601 => 289,  592 => 283,  586 => 280,  577 => 273,  565 => 266,  560 => 264,  555 => 263,  550 => 261,  545 => 260,  543 => 259,  539 => 258,  534 => 257,  532 => 256,  524 => 250,  518 => 248,  514 => 246,  505 => 244,  501 => 243,  498 => 242,  496 => 241,  489 => 239,  486 => 238,  482 => 237,  466 => 223,  451 => 217,  448 => 216,  440 => 212,  438 => 203,  436 => 202,  432 => 201,  428 => 200,  423 => 199,  419 => 197,  411 => 193,  409 => 182,  405 => 181,  401 => 180,  396 => 179,  394 => 178,  391 => 177,  383 => 173,  381 => 163,  379 => 162,  375 => 161,  371 => 160,  366 => 159,  364 => 158,  359 => 155,  355 => 154,  351 => 152,  347 => 151,  335 => 149,  329 => 148,  323 => 147,  320 => 146,  316 => 145,  282 => 114,  276 => 113,  269 => 111,  260 => 105,  254 => 104,  247 => 102,  240 => 98,  234 => 97,  227 => 95,  220 => 90,  216 => 88,  211 => 86,  206 => 84,  201 => 82,  196 => 80,  192 => 79,  188 => 78,  184 => 77,  179 => 76,  173 => 73,  168 => 71,  163 => 69,  159 => 68,  153 => 65,  149 => 64,  144 => 63,  142 => 62,  139 => 61,  136 => 60,  127 => 50,  121 => 48,  115 => 46,  113 => 45,  108 => 44,  106 => 43,  101 => 40,  95 => 38,  89 => 36,  87 => 35,  82 => 34,  80 => 33,  74 => 29,  72 => 28,  69 => 27,  67 => 26,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     Gestion de {{ ndd }} : Liste des boites e-mails*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {% include 'Ndd/Nav/options.html.twig'  with {'active': 'email','ndd':ndd,'idagency':idagency,'iduser':iduser,'type':type } only %}*/
/* */
/* */
/*                 <div class="well">*/
/*                     <p>*/
/*                         {% if type =='admin' %}*/
/*                         <a class="btn btn-primary" href="{{ path("create_mailbox_admin",{'iduser':iduser,'ndd':ndd})  }}">*/
/*                             {% elseif type=="super_admin" %}*/
/*                             <a class="btn btn-primary" href="{{ path("create_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd})  }}">*/
/*                                 {% else %}*/
/*                                 <a class="btn btn-primary" href="{{ path("create_mailbox_user",{'ndd':ndd})  }}">*/
/*                                     {% endif %}*/
/*                                     <i class="fa fa-plus"></i> Ajouter une boite e-mail*/
/*                                 </a>*/
/* */
/*                                 {% if type =='admin' %}*/
/*                                 <a class="btn btn-primary" href="{{ path("create_forward_admin",{'iduser':iduser,'ndd':ndd})  }}">*/
/*                                     {% elseif type=="super_admin" %}*/
/*                                     <a class="btn btn-primary" href="{{ path("create_forward_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd})  }}">*/
/*                                         {% else %}*/
/*                                         <a class="btn btn-primary" href="{{ path("create_forward_user",{'ndd':ndd})  }}">*/
/*                                             {% endif %}*/
/*                                             <i class="fa fa-plus"></i> Ajouter une redirection e-mail*/
/*                                         </a>*/
/*                     </p>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 {#*/
/*                     Si agence legrain ou gestionnaire autres agences. Si non on n'affiche rien.*/
/*                 #}*/
/*                 {% if afficheProduits %}*/
/*                     <div class="well">*/
/*                         {% if product.id == 1 %}*/
/*                         <h2>{{ product.name }}</h2>*/
/*                         <div>{{ product.longDescription }}</div>*/
/*                         <p>{{ product.priceHT }} € HT pour un mois</p>*/
/* */
/* */
/*                             {{ form_start(form) }}*/
/*                             {{ form_errors(form) }}*/
/* */
/*                             {{ form_row(form.addToCart) }}*/
/* */
/*                             {{ form_end(form) }}*/
/* */
/*                         {% else %}*/
/*                             <h2>{{ product.name }}</h2>*/
/*                             <div>{{ product.longDescription }}</div>*/
/*                             <p>{{ product.priceHT }} € HT par Go pour un mois</p>*/
/*                             {{ form_start(form) }}*/
/*                             {{ form_errors(form) }}*/
/* */
/*                             {{ form_row(form.nbGo) }}*/
/* */
/*                             {{ form_row(form.addToCart) }}*/
/* */
/*                             {{ form_end(form) }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 <div class="well">*/
/*                     <div class="row">*/
/*                         <div class="col-md-4 text-center">*/
/*                             <p>*/
/*                                 <canvas id="chartMailbox" width="150" height="150" data-used="{{  countMailbox}}" data-total="{{ maxMailbox }}"></canvas>*/
/*                             </p>*/
/*                             <p>Boite e-mail : {{ countMailbox }} sur {{ maxMailbox }}  autorisées</p>*/
/*                             <p>Pourcentage d'utilisation : {{ percentMailbox }}% </p>*/
/*                         </div>*/
/*                         <div class="col-md-4 text-center">*/
/*                             <p>*/
/*                                 <canvas id="chartQuotaMailbox" width="150" height="150" data-used="{{  countQuota|round(2, 'ceil')  }}" data-total="{{ maxQuota }}"></canvas>*/
/*                             </p>*/
/*                             <p>Quota : {{ countQuota|round(2, 'ceil') }}Go sur {{ maxQuota }}Go autorisés</p>*/
/*                             <p>pourcentage d'utilisation : {{ percentQuota | round}} %</p>*/
/* */
/*                         </div>*/
/* */
/*                         <div class="col-md-4 text-center">*/
/*                             <p>*/
/*                                 <canvas id="chartForward" width="150" height="150" data-used="{{  countForward}}" data-total="{{ maxForward }}"></canvas>*/
/*                             </p>*/
/*                             <p>Redirections: {{ countForward }} sur {{ maxForward }}  autorisées</p>*/
/*                             <p>Pourcentage d'utilisation : {{ percentForward }}% </p>*/
/* */
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="tabs" class="nav nav-tabs nav-justified">*/
/*                     <ul>*/
/*                         <li><a href="#emails">Boites e-mails</a></li>*/
/*                         <li><a href="#redirections">Redirections</a></li>*/
/*                         <li><a href="#parametrage">Paramètres (imap,pop,smtp)</a></li>*/
/*                     </ul>*/
/*                     <div class="box">*/
/* */
/* */
/*                         <div class="box-body">*/
/* */
/*                             <div id="emails">*/
/*                                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>Nom</th>*/
/*                                         <th>taille</th>*/
/*                                         <th>Quota</th>*/
/*                                         <th>Répondeur</th>*/
/*                                         <th>Gestion par l'utilisateur</th>*/
/*                                         <th>Actions</th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for email in emails %}*/
/*                                         <tr>*/
/*                                             <td>{{ email.login }}@{{ ndd }}</td>*/
/*                                             <td data-order="{{ email.quota.used }}">{{( email.quota.used/1024)|round(2, 'floor')  }} Mo</td>*/
/*                                             <td data-order="{{ email.quota.granted }}">{% if email.quota.granted == 0 %}Aucun quota {% else %}{{ email.quota.granted/1024 }} Mo{% endif %}</td>*/
/*                                             <td>*/
/*                                                 {% if email.responder.active  %}Activé{% endif %}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 {% if email.accountApiExist  %}Oui{% endif %}*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <div class="btn-group">*/
/*                                                     {% if type =='super_admin' %}*/
/*                                                         <a href="{{ path("update_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                         <a href="{{ path("list_alias_mailbox_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="gérer les alias" class="btn btn-primary btn-xs"><i class="fa fa-arrow-circle-right"></i></a>*/
/*                                                         {% if status == 'paid' %}*/
/*                                                             {#*/
/*                                                             {% if email.responder.active  %}*/
/*                                                                 <a href="{{ path("disable_responder_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-danger btn-xs" title="DésGérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                                 </a>*/
/*                                                             {% else %}*/
/*                                                                 <a href="{{ path("activate_responder_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>                                                                </a>*/
/*                                                             {% endif %}*/
/*                                                             #}*/
/*                                                              <a href="{{ path("activate_responder_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                              </a>*/
/*                                                         {% endif %}*/
/* */
/*                                                     {% elseif type =='admin' %}*/
/*                                                         <a href="{{ path("update_mailbox_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mailbox_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                         <a href="{{ path("list_alias_mailbox_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="gérer les alias" class="btn btn-primary btn-xs"><i class="fa fa-arrow-circle-right"></i></a>*/
/*                                                         {% if status == 'paid' %}*/
/* {#*/
/*                                                             {% if email.responder.active  %}*/
/*                                                                 <a href="{{ path("disable_responder_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-danger btn-xs" title="DésGérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                                 </a>*/
/*                                                             {% else %}*/
/*                                                                 <a href="{{ path("activate_responder_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>                                                                </a>*/
/*                                                             {% endif %}*/
/*                                                             #}*/
/*                                                             <a href="{{ path("activate_responder_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                 <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                             </a>*/
/*                                                         {% endif %}*/
/* */
/*                                                     {% else %}*/
/*                                                         <a href="{{ path("update_mailbox_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mailbox_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                         <a href="{{ path("list_alias_mailbox_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" title="gérer les alias" class="btn btn-primary btn-xs"><i class="fa fa-arrow-circle-right"></i></a>*/
/*                                                         {% if status == 'paid' %}*/
/*                                                            {# {% if email.responder.active  %}*/
/*                                                                 <a href="{{ path("disable_responder_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-danger btn-xs" title="DésGérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                                 </a>*/
/*                                                             {% else %}*/
/*                                                                 <a href="{{ path("activate_responder_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                     <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                                 </a>*/
/*                                                             {% endif %}#}*/
/*                                                             <a href="{{ path("activate_responder_user",{'ndd':ndd,'emailAddress': email.login ~'@'~ ndd})  }}" class="btn btn-info btn-xs" title="Gérer le répondeur">*/
/*                                                                 <span class="glyphicon glyphicon-phone-alt"></span>*/
/*                                                             </a>*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                     <a target="_blank" class="btn btn-default btn-xs" href="http://webmail.{{ ndd }}/?_user={{ email.login ~'@'~ ndd }}" title="Lien vers le webmail"><span class="glyphicon glyphicon-send"></span></a>*/
/*                                                 </div>*/
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div id="redirections">*/
/* */
/*                                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>Adresse</th>*/
/*                                         <th>Redirigé vers</th>*/
/*                                         <th>Actions</th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for forward in listForward %}*/
/*                                         <tr>*/
/*                                             <td>{{ forward.source }}@{{ ndd }}</td>*/
/*                                             <td>*/
/*                                                 {% if forward.destinations is iterable %}*/
/*                                                     <ul class="list-unstyled">*/
/*                                                         {% for redirect in forward.destinations %}*/
/*                                                             <li>{{ redirect }}</li>*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 {% else %}*/
/*                                                     {{ forward.destinations }}*/
/*                                                 {% endif %}*/
/* */
/*                                             </td>*/
/* */
/*                                             <td>*/
/*                                                 <div class="btn-group">*/
/* */
/*                                                     {% if type =='super_admin' %}*/
/*                                                         <a href="{{ path("update_mail_forward_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mail_forward_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                     {% elseif type =='admin' %}*/
/*                                                         <a href="{{ path("update_mail_forward_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mail_forward_admin",{'iduser':iduser,'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                     {% else %}*/
/*                                                         <a href="{{ path("update_mail_forward_user",{'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                                         <a href="{{ path("delete_mail_forward_user",{'ndd':ndd,'emailAddress': forward.source ~'@'~ ndd})  }}" title="Supprimer" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>*/
/*                                                     {% endif %}*/
/* */
/*                                                 </div>*/
/*                                             </td>*/
/* */
/*                                         </tr>*/
/* */
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="parametrage">*/
/*                             <h2 class="h4">Parametres POP</h2>*/
/*                             <ul>*/
/*                                <li><b>Nom du serveur :</b> pop.{{ ndd }}</li>*/
/*                                 <li><b>Port :</b> Laissez par défaut 110 POP ou 995 pour POP SSL.</li>*/
/*                                 <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>*/
/*                                 <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @{{ ndd }})</li>*/
/*                                 <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>*/
/*                             </ul>*/
/* */
/*                             <h2 class="h4">Parametres IMAP</h2>*/
/*                             <ul>*/
/*                                 <li><b>Nom du serveur :</b> imap.{{ ndd }}</li>*/
/*                                 <li><b>Port :</b> Laissez par défaut  143 IMAP ou 993 pour IMAP SSL).</li>*/
/*                                 <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>*/
/*                                 <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @{{ ndd }})</li>*/
/*                                 <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>*/
/*                             </ul>*/
/* */
/*                             <h2 class="h4">Parametres SMTP</h2>*/
/*                             <ul>*/
/*                                 <li><b>Nom du serveur :</b> smtp.{{ ndd }}</li>*/
/*                                 <li><b>Port :</b> 25 par défaut, 587 (STARTTLS) si votre FAI filtre le port 25 (Free, Orange…), ou 465 si vous utilisez SSL. Dans tous les cas, vous pouvez essayer les trois et vous arrêter sur celui qui fonctionne.</li>*/
/*                                 <li><b>Sécurité TLS ou SSL :</b> oui (conseillé). Si les différents ports ne fonctionnent pas, réessayez avec le port 25 (Sans chiffrement) et 587 (STARTTLS).</li>*/
/*                                 <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @{{ ndd }})</li>*/
/*                                 <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>*/
/*                             </ul>*/
/* */
/*                             <p class="well">*/
/*                                 Si vous rencontrez malgré tout des difficultés, n'oubliez pas que vous pouvez tout à fait utiliser le SMTP de votre Fournisseur d'Accès Internet. Par exemple, si vous êtes chez free, vous pourrez utiliser smtp.free.fr, ou si vous êtes chez Orange, smtp.orange.fr. N'oubliez pas, dans ce cas, de désactiver l'authentification SMTP : les fournisseurs d'accès vous identifient automatiquement grâce à votre adresse IP de connexion.*/
/*                             </p>*/
/*                         </div>*/
/* */
/*                     </div><!-- /.box-body -->*/
/*                 </div>*/
/* */
/* */
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
