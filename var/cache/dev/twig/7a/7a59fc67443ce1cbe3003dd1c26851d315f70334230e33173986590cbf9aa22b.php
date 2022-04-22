<?php

/* :Ndd:domain.html.twig */
class __TwigTemplate_fcd1c9b695653fce7938d021b074305f7e311fe6bf872cf5d8c3b85dcd9bcfc5 extends Twig_Template
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
        $__internal_a63a3930b8724453f49a9b2c7bd5258c888c35658273044edee4ff9eeb65e651 = $this->env->getExtension("native_profiler");
        $__internal_a63a3930b8724453f49a9b2c7bd5258c888c35658273044edee4ff9eeb65e651->enter($__internal_a63a3930b8724453f49a9b2c7bd5258c888c35658273044edee4ff9eeb65e651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ndd:domain.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63a3930b8724453f49a9b2c7bd5258c888c35658273044edee4ff9eeb65e651->leave($__internal_a63a3930b8724453f49a9b2c7bd5258c888c35658273044edee4ff9eeb65e651_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45e647aece81619e031f8fcbf4340e2765a4a7d880a0cf4bf93454dc17b524ca = $this->env->getExtension("native_profiler");
        $__internal_45e647aece81619e031f8fcbf4340e2765a4a7d880a0cf4bf93454dc17b524ca->enter($__internal_45e647aece81619e031f8fcbf4340e2765a4a7d880a0cf4bf93454dc17b524ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "html", null, true);
        echo " : Général

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Ndd:domain.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        $this->loadTemplate("Ndd/Nav/options.html.twig", ":Ndd:domain.html.twig", 30)->display(array("active" => "general", "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "type" => (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser"))));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()), "html", null, true);
        echo "
                                </p>
                                <p>
                                    Date d'expiration : ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "date_registry_end", array()), "d/m/Y"), "html", null, true);
        echo "
                                    ";
        // line 45
        if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
            // line 46
            echo "
                                        ";
            // line 47
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
                // line 48
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\">(Renouveler le domaine)</a>

                                        ";
            } elseif ((            // line 50
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
                // line 51
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()))), "html", null, true);
                echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\">(Renouveler le domaine)</a>

                                        ";
            } else {
                // line 54
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_user", array("ndd" => $this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "name", array()))), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "nameservers", array()), 0, array()) != "a.dns.gandi.net")) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "nameservers", array()));
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
        if (($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "ownerContact", array()) != null)) {
            // line 86
            echo "                        <div class=\"box box-solid\">
                            <div class=\"box-header with-border\">
                                <i class=\"fa fa-text-width\"></i>
                                <h3 class=\"box-title\">Contact</h3>
                            </div><!-- /.box-header -->
                            <div class=\"box-body clearfix\">
                                ";
            // line 92
            if (((($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "ownerContact", array()), "code", array()) == "GI47-GWI") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "id", array()) != 1)) || (($this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "ownerContact", array()), "code", array()) == "PB10746-GWI") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "id", array()) != 1)))) {
                // line 93
                echo "                                    <p>Impossible d'afficher le contact propriètaire. Merci de vous rapprocher de legrain au 05.63.30.31.44</p>
                                ";
            } else {
                // line 95
                echo "                                    <p>Code : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "ownerContact", array()), "code", array()), "html", null, true);
                echo "</p>
                                    <p>E-mail associé : ";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "ownerContact", array()), "fakeEmail", array()), "html", null, true);
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
        
        $__internal_45e647aece81619e031f8fcbf4340e2765a4a7d880a0cf4bf93454dc17b524ca->leave($__internal_45e647aece81619e031f8fcbf4340e2765a4a7d880a0cf4bf93454dc17b524ca_prof);

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
        return array (  252 => 111,  250 => 110,  239 => 101,  234 => 98,  229 => 96,  224 => 95,  220 => 93,  218 => 92,  210 => 86,  208 => 85,  201 => 80,  195 => 76,  176 => 74,  159 => 73,  149 => 65,  146 => 64,  139 => 58,  136 => 57,  129 => 54,  122 => 51,  120 => 50,  114 => 48,  112 => 47,  109 => 46,  107 => 45,  103 => 44,  97 => 41,  85 => 31,  83 => 30,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
