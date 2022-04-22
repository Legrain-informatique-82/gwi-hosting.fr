<?php

/* :Email:gestmailboxcompteemail.html.twig */
class __TwigTemplate_40a841175b18833a5e4e41eb86a4a5737663584088779463aa5e689b65015ac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email:gestmailboxcompteemail.html.twig", 1);
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
        $__internal_80b20bbaf3bbe20f62d48e604060f66efe0e7cdddf48b7dea0d7cb6000c033a0 = $this->env->getExtension("native_profiler");
        $__internal_80b20bbaf3bbe20f62d48e604060f66efe0e7cdddf48b7dea0d7cb6000c033a0->enter($__internal_80b20bbaf3bbe20f62d48e604060f66efe0e7cdddf48b7dea0d7cb6000c033a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email:gestmailboxcompteemail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b20bbaf3bbe20f62d48e604060f66efe0e7cdddf48b7dea0d7cb6000c033a0->leave($__internal_80b20bbaf3bbe20f62d48e604060f66efe0e7cdddf48b7dea0d7cb6000c033a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86eab36d3810b95d9c5f8942e285c783e55954bdbbeb4f17f877b6c3868947b6 = $this->env->getExtension("native_profiler");
        $__internal_86eab36d3810b95d9c5f8942e285c783e55954bdbbeb4f17f877b6c3868947b6->enter($__internal_86eab36d3810b95d9c5f8942e285c783e55954bdbbeb4f17f877b6c3868947b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Email:gestmailboxcompteemail.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email:gestmailboxcompteemail.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Email:gestmailboxcompteemail.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Email:gestmailboxcompteemail.html.twig", 27)->display($context);
        // line 28
        echo "
                <div class=\"well\">
                    <a href=\"http://webmail.";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "/?_user=";
        echo twig_escape_filter($this->env, (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "html", null, true);
        echo "\" class=\"btn btn-default btn-lg\" target=\"_blank\">
                        <span class=\"glyphicon glyphicon-send\"></span> Acceder au webmail
                    </a>

                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("update_role_compte_email");
        echo "\" class=\"btn btn-warning btn-lg\" ><i class=\"fa fa-pencil-square-o\"></i> Modifier</a>

                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("add_alias_mailbox_compte_email");
        echo "\">
                        <i class=\"fa fa-plus\"></i> Ajouter un alias
                    </a>

                    ";
        // line 40
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) == "paid")) {
            // line 41
            echo "
";
            // line 55
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("activate_responder_compte_email");
            echo "\" class=\"btn btn-info btn-lg\">
                            <span class=\"glyphicon glyphicon-phone-alt\"></span> Gérer le répondeur
                        </a>
                    ";
        }
        // line 59
        echo "
                </div>

                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Quota</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                ";
        // line 69
        if ((isset($context["pasDeQuota"]) ? $context["pasDeQuota"] : $this->getContext($context, "pasDeQuota"))) {
            // line 70
            echo "                                    <p>Pas de quota<br/>(";
            echo twig_escape_filter($this->env, (isset($context["quotaUsed"]) ? $context["quotaUsed"] : $this->getContext($context, "quotaUsed")), "html", null, true);
            echo "Mo utilisés)</p>
                                ";
        } else {
            // line 72
            echo "                                    <div class=\"progress-group\">
                                        <span class=\"progress-text\">Utilisation de l'espace alloué (";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["percentQuotaUsed"]) ? $context["percentQuotaUsed"] : $this->getContext($context, "percentQuotaUsed")), "html", null, true);
            echo " %)</span>
                                        <span class=\"progress-number\"><b>";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["quotaUsed"]) ? $context["quotaUsed"] : $this->getContext($context, "quotaUsed")), "html", null, true);
            echo "Mo</b>/";
            echo twig_escape_filter($this->env, (isset($context["quotaGranted"]) ? $context["quotaGranted"] : $this->getContext($context, "quotaGranted")), "html", null, true);
            echo "Mo</span>
                                        <div class=\"progress sm\">
                                            <div class=\"progress-bar progress-bar-green\" style=\"width: ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["percentQuotaUsed"]) ? $context["percentQuotaUsed"] : $this->getContext($context, "percentQuotaUsed")), "html", null, true);
            echo "%\"></div>
                                        </div>
                                    </div>
                                ";
        }
        // line 80
        echo "                            </div><!-- /.box-body -->
                        </div>


                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Paramètres de connexion</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <div id=\"tabs\">
                                    <ul>
                                        <li><a href=\"#pop\">pop</a></li>
                                        <li><a href=\"#imap\">imap</a></li>
                                        <li><a href=\"#smtp\">smtp</a></li>
                                    </ul>
                                    <div id=\"pop\">
                                        <ul>
                                            <li><b>Nom du serveur :</b> pop.";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                            <li><b>Port :</b> Laissez par défaut 110 POP ou 995 pour POP SSL.</li>
                                            <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                            <li><b>Nom d'utilisateur :</b> ";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ")</li>
                                            <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>
                                        </ul>
                                    </div>
                                    <div id=\"imap\">
                                        <ul>
                                            <li><b>Nom du serveur :</b> imap.";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                            <li><b>Port :</b> Laissez par défaut  143 IMAP ou 993 pour IMAP SSL).</li>
                                            <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>
                                            <li><b>Nom d'utilisateur :</b> ";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ")</li>
                                            <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>
                                        </ul>
                                    </div>
                                    <div id=\"smtp\">
                                        <ul>
                                            <li><b>Nom du serveur :</b> smtp.";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
        echo "</li>
                                            <li><b>Port :</b> 25 par défaut, 587 (STARTTLS) si votre FAI filtre le port 25 (Free, Orange…), ou 465 si vous utilisez SSL. Dans tous les cas, vous pouvez essayer les trois et vous arrêter sur celui qui fonctionne.</li>
                                            <li><b>Sécurité TLS ou SSL :</b> oui (conseillé). Si les différents ports ne fonctionnent pas, réessayez avec le port 25 (Sans chiffrement) et 587 (STARTTLS).</li>
                                            <li><b>Nom d'utilisateur :</b> ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ")</li>
                                            <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>
                                        </ul>

                                        <p class=\"well\">
                                            Si vous rencontrez malgré tout des difficultés, n'oubliez pas que vous pouvez tout à fait utiliser le SMTP de votre Fournisseur d'Accès Internet. Par exemple, si vous êtes chez free, vous pourrez utiliser smtp.free.fr, ou si vous êtes chez Orange, smtp.orange.fr. N'oubliez pas, dans ce cas, de désactiver l'authentification SMTP : les fournisseurs d'accès vous identifient automatiquement grâce à votre adresse IP de connexion.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"box box-primary\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">Alias</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                                    <thead>
                                    <tr>
                                        <th>Alias</th>
                                        <th>Supprimer</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliases"]) ? $context["aliases"] : $this->getContext($context, "aliases")));
        foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
            // line 146
            echo "                                        <tr>
                                            <td>";
            // line 147
            echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
            echo "@";
            echo twig_escape_filter($this->env, (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "html", null, true);
            echo "</td>
                                            <td>

                                                 <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_alias_compte_email", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "alias" => $context["alias"])), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i> Supprimer</a>

                                            </td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                </div>






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 172
        $this->loadTemplate("footer.html.twig", ":Email:gestmailboxcompteemail.html.twig", 172)->display($context);
        // line 173
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_86eab36d3810b95d9c5f8942e285c783e55954bdbbeb4f17f877b6c3868947b6->leave($__internal_86eab36d3810b95d9c5f8942e285c783e55954bdbbeb4f17f877b6c3868947b6_prof);

    }

    public function getTemplateName()
    {
        return ":Email:gestmailboxcompteemail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 173,  288 => 172,  271 => 157,  258 => 150,  250 => 147,  247 => 146,  243 => 145,  213 => 118,  207 => 115,  198 => 109,  192 => 106,  183 => 100,  177 => 97,  158 => 80,  151 => 76,  144 => 74,  140 => 73,  137 => 72,  131 => 70,  129 => 69,  117 => 59,  109 => 55,  106 => 41,  104 => 40,  97 => 36,  92 => 34,  83 => 30,  79 => 28,  77 => 27,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div class="well">*/
/*                     <a href="http://webmail.{{ ndd }}/?_user={{ emailAddress }}" class="btn btn-default btn-lg" target="_blank">*/
/*                         <span class="glyphicon glyphicon-send"></span> Acceder au webmail*/
/*                     </a>*/
/* */
/*                     <a href="{{ path('update_role_compte_email') }}" class="btn btn-warning btn-lg" ><i class="fa fa-pencil-square-o"></i> Modifier</a>*/
/* */
/*                     <a class="btn btn-primary btn-lg" href="{{ path("add_alias_mailbox_compte_email")  }}">*/
/*                         <i class="fa fa-plus"></i> Ajouter un alias*/
/*                     </a>*/
/* */
/*                     {% if status == 'paid' %}*/
/* */
/* {#*/
/*                         {% if responder.active  %}*/
/* */
/*                             <a href="{{ path("disable_responder_compte_email")  }}" class="btn btn-danger btn-lg">*/
/*                                 <span class="glyphicon glyphicon-phone-alt"></span> Désactiver le répondeur*/
/*                             </a>*/
/* */
/*                         {% else %}*/
/*                             <a href="{{ path("activate_responder_compte_email")}}" class="btn btn-info btn-lg">*/
/*                                 <span class="glyphicon glyphicon-phone-alt"></span> Activer le répondeur*/
/*                             </a>*/
/*                         {% endif %}*/
/* #}*/
/*                         <a href="{{ path("activate_responder_compte_email")}}" class="btn btn-info btn-lg">*/
/*                             <span class="glyphicon glyphicon-phone-alt"></span> Gérer le répondeur*/
/*                         </a>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-4">*/
/*                         <div class="box box-primary">*/
/*                             <div class="box-header with-border">*/
/*                                 <h3 class="box-title">Quota</h3>*/
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body">*/
/*                                 {% if pasDeQuota %}*/
/*                                     <p>Pas de quota<br/>({{ quotaUsed }}Mo utilisés)</p>*/
/*                                 {% else %}*/
/*                                     <div class="progress-group">*/
/*                                         <span class="progress-text">Utilisation de l'espace alloué ({{  percentQuotaUsed }} %)</span>*/
/*                                         <span class="progress-number"><b>{{ quotaUsed }}Mo</b>/{{ quotaGranted }}Mo</span>*/
/*                                         <div class="progress sm">*/
/*                                             <div class="progress-bar progress-bar-green" style="width: {{ percentQuotaUsed }}%"></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </div><!-- /.box-body -->*/
/*                         </div>*/
/* */
/* */
/*                         <div class="box box-primary">*/
/*                             <div class="box-header with-border">*/
/*                                 <h3 class="box-title">Paramètres de connexion</h3>*/
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body">*/
/*                                 <div id="tabs">*/
/*                                     <ul>*/
/*                                         <li><a href="#pop">pop</a></li>*/
/*                                         <li><a href="#imap">imap</a></li>*/
/*                                         <li><a href="#smtp">smtp</a></li>*/
/*                                     </ul>*/
/*                                     <div id="pop">*/
/*                                         <ul>*/
/*                                             <li><b>Nom du serveur :</b> pop.{{ ndd }}</li>*/
/*                                             <li><b>Port :</b> Laissez par défaut 110 POP ou 995 pour POP SSL.</li>*/
/*                                             <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>*/
/*                                             <li><b>Nom d'utilisateur :</b> {{ name }})</li>*/
/*                                             <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div id="imap">*/
/*                                         <ul>*/
/*                                             <li><b>Nom du serveur :</b> imap.{{ ndd }}</li>*/
/*                                             <li><b>Port :</b> Laissez par défaut  143 IMAP ou 993 pour IMAP SSL).</li>*/
/*                                             <li><b>Sécurité TLS ou SSL :</b> oui (conseillé).</li>*/
/*                                             <li><b>Nom d'utilisateur :</b> {{ name }})</li>*/
/*                                             <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div id="smtp">*/
/*                                         <ul>*/
/*                                             <li><b>Nom du serveur :</b> smtp.{{ ndd }}</li>*/
/*                                             <li><b>Port :</b> 25 par défaut, 587 (STARTTLS) si votre FAI filtre le port 25 (Free, Orange…), ou 465 si vous utilisez SSL. Dans tous les cas, vous pouvez essayer les trois et vous arrêter sur celui qui fonctionne.</li>*/
/*                                             <li><b>Sécurité TLS ou SSL :</b> oui (conseillé). Si les différents ports ne fonctionnent pas, réessayez avec le port 25 (Sans chiffrement) et 587 (STARTTLS).</li>*/
/*                                             <li><b>Nom d'utilisateur :</b> {{ name }})</li>*/
/*                                             <li><b>Mot de passe :</b> entrez le mot de passe de votre compte mail.</li>*/
/*                                         </ul>*/
/* */
/*                                         <p class="well">*/
/*                                             Si vous rencontrez malgré tout des difficultés, n'oubliez pas que vous pouvez tout à fait utiliser le SMTP de votre Fournisseur d'Accès Internet. Par exemple, si vous êtes chez free, vous pourrez utiliser smtp.free.fr, ou si vous êtes chez Orange, smtp.orange.fr. N'oubliez pas, dans ce cas, de désactiver l'authentification SMTP : les fournisseurs d'accès vous identifient automatiquement grâce à votre adresse IP de connexion.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!-- /.box-body -->*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-8">*/
/*                         <div class="box box-primary">*/
/*                             <div class="box-header with-border">*/
/*                                 <h3 class="box-title">Alias</h3>*/
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body">*/
/*                                 <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>Alias</th>*/
/*                                         <th>Supprimer</th>*/
/* */
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for alias in aliases %}*/
/*                                         <tr>*/
/*                                             <td>{{ alias }}@{{ ndd }}</td>*/
/*                                             <td>*/
/* */
/*                                                  <a href="{{ path("delete_alias_compte_email",{'ndd':ndd,'emailAddress':emailAddress,'alias': alias})  }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Supprimer</a>*/
/* */
/*                                             </td>*/
/* */
/*                                         </tr>*/
/* */
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div><!-- /.box-body -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
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
