<?php

/* :Instance/List:listinstances.html.twig */
class __TwigTemplate_0ab9d55ba4f9ee5dd297effd0183893b9962334935582a83520b2972530933c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Instance/List:listinstances.html.twig", 1);
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
        $__internal_061d83f1152235857e288adbfc7ab7b332ca8be036a062bab438a24b4b6647eb = $this->env->getExtension("native_profiler");
        $__internal_061d83f1152235857e288adbfc7ab7b332ca8be036a062bab438a24b4b6647eb->enter($__internal_061d83f1152235857e288adbfc7ab7b332ca8be036a062bab438a24b4b6647eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Instance/List:listinstances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061d83f1152235857e288adbfc7ab7b332ca8be036a062bab438a24b4b6647eb->leave($__internal_061d83f1152235857e288adbfc7ab7b332ca8be036a062bab438a24b4b6647eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_19d987a9ab0da8332d426636ecfebc22768deccb724df647bb66005403eb5049 = $this->env->getExtension("native_profiler");
        $__internal_19d987a9ab0da8332d426636ecfebc22768deccb724df647bb66005403eb5049->enter($__internal_19d987a9ab0da8332d426636ecfebc22768deccb724df647bb66005403eb5049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Instance/List:listinstances.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Instance/List:listinstances.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Instance/List:listinstances.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Instance/List:listinstances.html.twig", 29)->display($context);
        // line 30
        echo "




                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instances"]) ? $context["instances"] : $this->getContext($context, "instances")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "
                        ";
            // line 38
            echo "                        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 39
                echo "                            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Produit</th>
                                <th>Localisation</th>
                                <th>Type</th>
                                <th>Taille</th>
                                ";
                // line 48
                echo "                                <th>Date expiration</th>
                                ";
                // line 50
                echo "                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                        ";
            }
            // line 55
            echo "                        <tr>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "product", array()), "name", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dataCenter", array()), "country", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "typeInstance", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "sizeInstance", array()), "html", null, true);
            echo "</td>
                            ";
            // line 62
            echo "                            <td data-order=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U"), "html", null, true);
            echo " \" >
                                ";
            // line 63
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                echo "<strong class=\"";
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                    echo "text-danger";
                } else {
                    echo "text-primary";
                }
                echo "\">";
            }
            // line 64
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "
                                    ";
            // line 65
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                echo "</strong>";
            }
            // line 66
            echo "                            </td>
                            ";
            // line 68
            echo "                            <td>
                                <div class=\"btn-group\">


                                    ";
            // line 72
            if (((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "super_admin")) {
                // line 73
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                    // line 74
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Renouveler le serveur\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                }
                // line 76
                echo "                                        <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>

                                    ";
            } elseif ((            // line 78
(isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "admin")) {
                // line 79
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                    // line 80
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Renouveler le serveur\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                }
                // line 82
                echo "                                        <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                      ";
            } else {
                // line 84
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                    // line 85
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_user", array("idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Renouveler le serveur\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                }
                // line 87
                echo "                                        <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_user", array("idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                     ";
            }
            // line 89
            echo "
                                </div>
                            </td>
                        </tr>
                        ";
            // line 93
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 94
                echo "                            </tbody>
                            </table>
                        ";
            }
            // line 97
            echo "
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!-- /.col-md-4 -->
                        ";
            // line 102
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 103
                echo "                            </div><!-- .row-->
                        ";
            }
            // line 105
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 116
        $this->loadTemplate("footer.html.twig", ":Instance/List:listinstances.html.twig", 116)->display($context);
        // line 117
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_19d987a9ab0da8332d426636ecfebc22768deccb724df647bb66005403eb5049->leave($__internal_19d987a9ab0da8332d426636ecfebc22768deccb724df647bb66005403eb5049_prof);

    }

    public function getTemplateName()
    {
        return ":Instance/List:listinstances.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 117,  288 => 116,  276 => 106,  262 => 105,  258 => 103,  256 => 102,  249 => 97,  244 => 94,  242 => 93,  236 => 89,  230 => 87,  224 => 85,  221 => 84,  215 => 82,  209 => 80,  206 => 79,  204 => 78,  198 => 76,  192 => 74,  189 => 73,  187 => 72,  181 => 68,  178 => 66,  174 => 65,  169 => 64,  159 => 63,  154 => 62,  150 => 60,  146 => 59,  142 => 58,  138 => 57,  134 => 56,  131 => 55,  124 => 50,  121 => 48,  111 => 39,  108 => 38,  105 => 36,  88 => 35,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/* */
/* */
/*                 {% for i in instances %}*/
/* */
/*                         {#affichage en table#}*/
/*                         {% if loop.first %}*/
/*                             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Nom</th>*/
/*                                 <th>Produit</th>*/
/*                                 <th>Localisation</th>*/
/*                                 <th>Type</th>*/
/*                                 <th>Taille</th>*/
/*                                 {#<th>Disque</th>#}*/
/*                                 <th>Date expiration</th>*/
/*                                 {#<th>Etat</th>#}*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                         {% endif %}*/
/*                         <tr>*/
/*                             <td>{{ i.name }}</td>*/
/*                             <td>{{ i.product.name }}</td>*/
/*                             <td>{{ i.dataCenter.country }}</td>*/
/*                             <td>{{ i.typeInstance }}</td>*/
/*                             <td>{{ i.sizeInstance }}</td>*/
/*                             {#<td>disque</td>#}*/
/*                             <td data-order="{{ i.dateEnd.date | date('U')}} " >*/
/*                                 {% if (i.dateEnd.date | date('U')) < in2months  %}<strong class="{% if (i.dateEnd.date | date('U')) < today  %}text-danger{% else %}text-primary{% endif %}">{% endif %}*/
/*                                     {{ i.dateEnd.date | date('d/m/Y') }}*/
/*                                     {% if (i.dateEnd.date | date('U')) < in2months   %}</strong>{% endif %}*/
/*                             </td>*/
/*                             {#<td>Etat</td>#}*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/* */
/* */
/*                                     {% if typeUser == 'super_admin' %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_instance_super_admin",{'idagency':idagency,'iduser':iduser,'idinstance':i.id}) }}" class="btn btn-default" title="Renouveler le serveur"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('instance_super_admin',{'idagency':idagency,'iduser':iduser,'idinstance':i.id}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/* */
/*                                     {% elseif typeUser == 'admin' %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_instance_admin",{'iduser':iduser,'idinstance':i.id}) }}" class="btn btn-default" title="Renouveler le serveur"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('instance_admin',{'iduser':iduser,'idinstance':i.id}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                       {% else %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_instance_user",{'idinstance':i.id}) }}" class="btn btn-default" title="Renouveler le serveur"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('instance_user',{'idinstance':i.id}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                      {% endif %}*/
/* */
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% if loop.last %}*/
/*                             </tbody>*/
/*                             </table>*/
/*                         {% endif %}*/
/* */
/*                                 </div><!-- /.box-body -->*/
/* */
/*                             </div><!-- /.box -->*/
/*                         </div><!-- /.col-md-4 -->*/
/*                         {% if loop.last %}*/
/*                             </div><!-- .row-->*/
/*                         {% endif %}*/
/*                 {% endfor %}*/
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
