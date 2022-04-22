<?php

/* :Email/List:listemail.html.twig */
class __TwigTemplate_f2ef3f55c3db48496970cf62dc40a43bbc33d2d67184cc254fdc003205b74a41 extends Twig_Template
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
        $__internal_9ac75f05d42b7303161388d7220bd774fd17ffcb5f78e7dab762bdf1a69dd566 = $this->env->getExtension("native_profiler");
        $__internal_9ac75f05d42b7303161388d7220bd774fd17ffcb5f78e7dab762bdf1a69dd566->enter($__internal_9ac75f05d42b7303161388d7220bd774fd17ffcb5f78e7dab762bdf1a69dd566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/List:listemail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac75f05d42b7303161388d7220bd774fd17ffcb5f78e7dab762bdf1a69dd566->leave($__internal_9ac75f05d42b7303161388d7220bd774fd17ffcb5f78e7dab762bdf1a69dd566_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0404e13d450fd7bb35edaabdb1ca5c4331ead34f22694bf7f8f53c30bf528e3 = $this->env->getExtension("native_profiler");
        $__internal_e0404e13d450fd7bb35edaabdb1ca5c4331ead34f22694bf7f8f53c30bf528e3->enter($__internal_e0404e13d450fd7bb35edaabdb1ca5c4331ead34f22694bf7f8f53c30bf528e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo " : Liste des boites e-mails
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Email/List:listemail.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Email/List:listemail.html.twig", 28)->display(array("active" => "email", "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))));
        // line 29
        echo "

                <div class=\"well\">
                    <p>
                        ";
        // line 33
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 34
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">
                            ";
        } elseif ((        // line 35
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 36
            echo "                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 38
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">
                                    ";
        }
        // line 40
        echo "                                    <i class=\"fa fa-plus\"></i> Ajouter une boite e-mail
                                </a>

                                ";
        // line 43
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 44
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">
                                    ";
        } elseif ((        // line 45
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 46
            echo "                                    <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
            echo "\">
                                        ";
        } else {
            // line 48
            echo "                                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("create_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")))), "html", null, true);
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
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
            // line 61
            echo "                    <div class=\"well\">
                        ";
            // line 62
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()) == 1)) {
                // line 63
                echo "                        <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
                echo "</h2>
                        <div>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "longDescription", array()), "html", null, true);
                echo "</div>
                        <p>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceHT", array()), "html", null, true);
                echo " € HT pour un mois</p>


                            ";
                // line 68
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
                            ";
                // line 69
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "

                            ";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addToCart", array()), 'row');
                echo "

                            ";
                // line 73
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "

                        ";
            } else {
                // line 76
                echo "                            <h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
                echo "</h2>
                            <div>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "longDescription", array()), "html", null, true);
                echo "</div>
                            <p>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "priceHT", array()), "html", null, true);
                echo " € HT par Go pour un mois</p>
                            ";
                // line 79
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
                            ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "

                            ";
                // line 82
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbGo", array()), 'row');
                echo "

                            ";
                // line 84
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addToCart", array()), 'row');
                echo "

                            ";
                // line 86
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        echo twig_escape_filter($this->env, (isset($context["countMailbox"]) ? $context["countMailbox"] : $this->getContext($context, "countMailbox")), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxMailbox"]) ? $context["maxMailbox"] : $this->getContext($context, "maxMailbox")), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Boite e-mail : ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["countMailbox"]) ? $context["countMailbox"] : $this->getContext($context, "countMailbox")), "html", null, true);
        echo " sur ";
        echo twig_escape_filter($this->env, (isset($context["maxMailbox"]) ? $context["maxMailbox"] : $this->getContext($context, "maxMailbox")), "html", null, true);
        echo "  autorisées</p>
                            <p>Pourcentage d'utilisation : ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["percentMailbox"]) ? $context["percentMailbox"] : $this->getContext($context, "percentMailbox")), "html", null, true);
        echo "% </p>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <p>
                                <canvas id=\"chartQuotaMailbox\" width=\"150\" height=\"150\" data-used=\"";
        // line 102
        echo twig_escape_filter($this->env, twig_round((isset($context["countQuota"]) ? $context["countQuota"] : $this->getContext($context, "countQuota")), 2, "ceil"), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxQuota"]) ? $context["maxQuota"] : $this->getContext($context, "maxQuota")), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Quota : ";
        // line 104
        echo twig_escape_filter($this->env, twig_round((isset($context["countQuota"]) ? $context["countQuota"] : $this->getContext($context, "countQuota")), 2, "ceil"), "html", null, true);
        echo "Go sur ";
        echo twig_escape_filter($this->env, (isset($context["maxQuota"]) ? $context["maxQuota"] : $this->getContext($context, "maxQuota")), "html", null, true);
        echo "Go autorisés</p>
                            <p>pourcentage d'utilisation : ";
        // line 105
        echo twig_escape_filter($this->env, twig_round((isset($context["percentQuota"]) ? $context["percentQuota"] : $this->getContext($context, "percentQuota"))), "html", null, true);
        echo " %</p>

                        </div>

                        <div class=\"col-md-4 text-center\">
                            <p>
                                <canvas id=\"chartForward\" width=\"150\" height=\"150\" data-used=\"";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["countForward"]) ? $context["countForward"] : $this->getContext($context, "countForward")), "html", null, true);
        echo "\" data-total=\"";
        echo twig_escape_filter($this->env, (isset($context["maxForward"]) ? $context["maxForward"] : $this->getContext($context, "maxForward")), "html", null, true);
        echo "\"></canvas>
                            </p>
                            <p>Redirections: ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["countForward"]) ? $context["countForward"] : $this->getContext($context, "countForward")), "html", null, true);
        echo " sur ";
        echo twig_escape_filter($this->env, (isset($context["maxForward"]) ? $context["maxForward"] : $this->getContext($context, "maxForward")), "html", null, true);
        echo "  autorisées</p>
                            <p>Pourcentage d'utilisation : ";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["percentForward"]) ? $context["percentForward"] : $this->getContext($context, "percentForward")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["emails"]) ? $context["emails"] : $this->getContext($context, "emails")));
        foreach ($context['_seq'] as $context["_key"] => $context["email"]) {
            // line 146
            echo "                                        <tr>
                                            <td>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["email"], "login", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
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
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 159
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 162
                if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
                    // line 163
                    echo "                                                            ";
                    // line 173
                    echo "                                                             <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                    echo "\" class=\"btn btn-info btn-xs\" title=\"Gérer le répondeur\">
                                                                    <span class=\"glyphicon glyphicon-phone-alt\"></span>
                                                             </a>
                                                        ";
                }
                // line 177
                echo "
                                                    ";
            } elseif ((            // line 178
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 179
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 182
                if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
                    // line 193
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 200
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                        <a href=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"gérer les alias\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-arrow-circle-right\"></i></a>
                                                        ";
                // line 202
                if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
                    // line 203
                    echo "                                                           ";
                    // line 212
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activate_responder_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
            echo "/?_user=";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["email"], "login", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["listForward"]) ? $context["listForward"] : $this->getContext($context, "listForward")));
        foreach ($context['_seq'] as $context["_key"] => $context["forward"]) {
            // line 238
            echo "                                        <tr>
                                            <td>";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($context["forward"], "source", array()), "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
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
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 257
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                    ";
            } elseif ((            // line 259
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 260
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" title=\"Supprimer\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
                                                    ";
            } else {
                // line 263
                echo "                                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_mail_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
                echo "\" class=\"btn btn-warning btn-xs\" title=\"Modifier\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                                        <a href=\"";
                // line 264
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_mail_forward_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (($this->getAttribute($context["forward"], "source", array()) . "@") . (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd"))))), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> Laissez par défaut 110 POP ou 995 pour POP SSL.</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo ")</li>
                                <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>
                            </ul>

                            <h2 class=\"h4\">Parametres IMAP</h2>
                            <ul>
                                <li><b>Nom du serveur :</b> imap.";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> Laissez par défaut  143 IMAP ou 993 pour IMAP SSL).</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 292
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo ")</li>
                                <li><b>Mot de passe :</b> entrez le mot de passe que vous avez défini en créant le compte mail.</li>
                            </ul>

                            <h2 class=\"h4\">Parametres SMTP</h2>
                            <ul>
                                <li><b>Nom du serveur :</b> smtp.";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                <li><b>Port :</b> 25 par défaut, 587 (STARTTLS) si votre FAI filtre le port 25 (Free, Orange…), ou 465 si vous utilisez SSL. Dans tous les cas, vous pouvez essayer les trois et vous arrêter sur celui qui fonctionne.</li>
                                <li><b>Sécurité TLS ou SSL :</b> oui (conseillé). Si les différents ports ne fonctionnent pas, réessayez avec le port 25 (Sans chiffrement) et 587 (STARTTLS).</li>
                                <li><b>Nom d'utilisateur :</b> votre adresse email complète (y compris le @";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
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
        
        $__internal_e0404e13d450fd7bb35edaabdb1ca5c4331ead34f22694bf7f8f53c30bf528e3->leave($__internal_e0404e13d450fd7bb35edaabdb1ca5c4331ead34f22694bf7f8f53c30bf528e3_prof);

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
        return array (  658 => 324,  656 => 323,  631 => 301,  625 => 298,  616 => 292,  610 => 289,  601 => 283,  595 => 280,  586 => 273,  574 => 266,  569 => 264,  564 => 263,  559 => 261,  554 => 260,  552 => 259,  548 => 258,  543 => 257,  541 => 256,  533 => 250,  527 => 248,  523 => 246,  514 => 244,  510 => 243,  507 => 242,  505 => 241,  498 => 239,  495 => 238,  491 => 237,  475 => 223,  460 => 217,  457 => 216,  449 => 212,  447 => 203,  445 => 202,  441 => 201,  437 => 200,  432 => 199,  428 => 197,  420 => 193,  418 => 182,  414 => 181,  410 => 180,  405 => 179,  403 => 178,  400 => 177,  392 => 173,  390 => 163,  388 => 162,  384 => 161,  380 => 160,  375 => 159,  373 => 158,  368 => 155,  364 => 154,  360 => 152,  356 => 151,  344 => 149,  338 => 148,  332 => 147,  329 => 146,  325 => 145,  291 => 114,  285 => 113,  278 => 111,  269 => 105,  263 => 104,  256 => 102,  249 => 98,  243 => 97,  236 => 95,  229 => 90,  225 => 88,  220 => 86,  215 => 84,  210 => 82,  205 => 80,  201 => 79,  197 => 78,  193 => 77,  188 => 76,  182 => 73,  177 => 71,  172 => 69,  168 => 68,  162 => 65,  158 => 64,  153 => 63,  151 => 62,  148 => 61,  145 => 60,  136 => 50,  130 => 48,  124 => 46,  122 => 45,  117 => 44,  115 => 43,  110 => 40,  104 => 38,  98 => 36,  96 => 35,  91 => 34,  89 => 33,  83 => 29,  81 => 28,  78 => 27,  76 => 26,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
