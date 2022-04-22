<?php

/* :Ndd:domain.html.twig */
class __TwigTemplate_f0b4a2c28320797bf9c56d7ec340806c26fbc4fb0493c5f3cd6a1ff4e6824e4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Ndd:domain.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Ndd:domain.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Ndd:domain.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    Gestion de ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "html", null, true);
        echo " : Général

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Ndd:domain.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Ndd:domain.html.twig", 28)->display($context);
        // line 29
        echo "
                ";
        // line 30
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Ndd:domain.html.twig", 30)->display(array("active" => "general", "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "type" => (isset($context["type"]) ? $context["type"] : null), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null)));
        // line 31
        echo "
                <div class=\"row mt20\">
                    <div class=\"col-md-6\">
                        <div class=\"box box-solid\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-text-width\"></i>
                                <h3 class=\"box-title\">Nom de domaine</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body\">
                                <p>
                                    Nom de domaine : ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()), "html", null, true);
        echo "
                                </p>
                                <p>
                                    Date d'expiration : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "date_registry_end", array()), "d/m/Y"), "html", null, true);
        echo "
                                    ";
        // line 45
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
            // line 46
            echo "
                                        ";
            // line 47
            if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
                // line 48
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\">(Renouveler le domaine)</a>

                                        ";
            } elseif ((            // line 50
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
                // line 51
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\">(Renouveler le domaine)</a>

                                        ";
            } else {
                // line 54
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\">(Renouveler le domaine)</a>

                                        ";
            }
            // line 57
            echo "                                    ";
        }
        // line 58
        echo "                                </p>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div><!-- ./col -->
                    <div class=\"col-md-6\">
                        ";
        // line 64
        echo "                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "nameservers", array()), 0, array()) != "a.dns.gandi.net")) {
            // line 65
            echo "
                            <div class=\"box box-solid\">
                                <div class=\"box-header with-border\">
                                    <i class=\"fa fa-text-width\"></i>
                                    <h3 class=\"box-title\">DNS</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body clearfix\">
                                    <ul>
                                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "nameservers", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 74
                echo "                                            <li>DNS ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $context["server"], "html", null, true);
                echo "</li>
                                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['server'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        ";
        }
        // line 80
        echo "
                    </div><!-- ./col -->

                    <div class=\"col-md-6\">

                        ";
        // line 85
        if (($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "ownerContact", array()) != null)) {
            // line 86
            echo "                        <div class=\"box box-solid\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-text-width\"></i>
                                <h3 class=\"box-title\">Contact</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body clearfix\">
                                ";
            // line 92
            if (((($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "ownerContact", array()), "code", array()) == "GI47-GWI") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "user", array()), "id", array()) != 1)) || (($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "ownerContact", array()), "code", array()) == "PB10746-GWI") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "user", array()), "id", array()) != 1)))) {
                // line 93
                echo "                                    <p>Impossible d'afficher le contact propriètaire. Merci de vous rapprocher de legrain au 05.63.30.31.44</p>
                                ";
            } else {
                // line 95
                echo "                                    <p>Code : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "ownerContact", array()), "code", array()), "html", null, true);
                echo "</p>
                                    <p>E-mail associé : ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : null), "ownerContact", array()), "fakeEmail", array()), "html", null, true);
                echo "</p>
                                ";
            }
            // line 98
            echo "                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                        ";
        }
        // line 101
        echo "

                    </div><!-- /.col -->
                </div>


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 110
        $this->loadTemplate("footer.html.twig", ":Ndd:domain.html.twig", 110)->display($context);
        // line 111
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Ndd:domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 111,  241 => 110,  230 => 101,  225 => 98,  220 => 96,  215 => 95,  211 => 93,  209 => 92,  201 => 86,  199 => 85,  192 => 80,  186 => 76,  167 => 74,  150 => 73,  140 => 65,  137 => 64,  130 => 58,  127 => 57,  120 => 54,  113 => 51,  111 => 50,  105 => 48,  103 => 47,  100 => 46,  98 => 45,  94 => 44,  88 => 41,  76 => 31,  74 => 30,  71 => 29,  69 => 28,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     Gestion de {{ ndd.name }} : Général*/
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
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 {% include 'Ndd/Nav/options.html.twig'  with {'active': 'general','ndd':ndd.name, 'type':type,'idagency':idagency,'iduser':iduser} only %}*/
/* */
/*                 <div class="row mt20">*/
/*                     <div class="col-md-6">*/
/*                         <div class="box box-solid">*/
/*                             <div class="box-header with-border">*/
/*                                 <i class="fa fa-text-width"></i>*/
/*                                 <h3 class="box-title">Nom de domaine</h3>*/
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body">*/
/*                                 <p>*/
/*                                     Nom de domaine : {{ ndd.name }}*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Date d'expiration : {{ ndd.date_registry_end | date('d/m/Y') }}*/
/*                                     {% if afficheProduits %}*/
/* */
/*                                         {% if type == 'super_admin' %}*/
/*                                             <a href="{{ path("renew_ndd_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine">(Renouveler le domaine)</a>*/
/* */
/*                                         {% elseif type == 'admin' %}*/
/*                                             <a href="{{ path("renew_ndd_admin",{'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine">(Renouveler le domaine)</a>*/
/* */
/*                                         {% else %}*/
/*                                             <a href="{{ path("renew_ndd_user",{'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine">(Renouveler le domaine)</a>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </p>*/
/*                             </div><!-- /.box-body -->*/
/*                         </div><!-- /.box -->*/
/*                     </div><!-- ./col -->*/
/*                     <div class="col-md-6">*/
/*                         {# Si ndd pas sur gandi, on affiche les DNS #}*/
/*                         {% if ndd.nameservers.0 != 'a.dns.gandi.net' %}*/
/* */
/*                             <div class="box box-solid">*/
/*                                 <div class="box-header with-border">*/
/*                                     <i class="fa fa-text-width"></i>*/
/*                                     <h3 class="box-title">DNS</h3>*/
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body clearfix">*/
/*                                     <ul>*/
/*                                         {% for server in ndd.nameservers %}*/
/*                                             <li>DNS {{ loop.index }} : {{ server }}</li>*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                 </div><!-- /.box-body -->*/
/*                             </div><!-- /.box -->*/
/*                         {% endif %}*/
/* */
/*                     </div><!-- ./col -->*/
/* */
/*                     <div class="col-md-6">*/
/* */
/*                         {% if ndd.ownerContact != null %}*/
/*                         <div class="box box-solid">*/
/*                             <div class="box-header with-border">*/
/*                                 <i class="fa fa-text-width"></i>*/
/*                                 <h3 class="box-title">Contact</h3>*/
/*                             </div><!-- /.box-header -->*/
/*                             <div class="box-body clearfix">*/
/*                                 {% if (ndd.ownerContact.code=='GI47-GWI' and app.user.user.id !=1) or (ndd.ownerContact.code=='PB10746-GWI' and app.user.user.id !=1) %}*/
/*                                     <p>Impossible d'afficher le contact propriètaire. Merci de vous rapprocher de legrain au 05.63.30.31.44</p>*/
/*                                 {% else %}*/
/*                                     <p>Code : {{ ndd.ownerContact.code }}</p>*/
/*                                     <p>E-mail associé : {{ ndd.ownerContact.fakeEmail }}</p>*/
/*                                 {% endif %}*/
/*                             </div><!-- /.box-body -->*/
/*                         </div><!-- /.box -->*/
/*                         {% endif %}*/
/* */
/* */
/*                     </div><!-- /.col -->*/
/*                 </div>*/
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
