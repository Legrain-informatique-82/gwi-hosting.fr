<?php

/* :Instance/List:listinstances.html.twig */
class __TwigTemplate_aeac1318070a09ff51683280642ddc81ad6f21d179333b01a8a88a1b479fe498 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Instance/List:listinstances.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["instances"]) ? $context["instances"] : null));
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
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : null))) {
                echo "<strong class=\"";
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["today"]) ? $context["today"] : null))) {
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
            if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "dateEnd", array()), "date", array()), "U") < (isset($context["in2months"]) ? $context["in2months"] : null))) {
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
            if (((isset($context["typeUser"]) ? $context["typeUser"] : null) == "super_admin")) {
                // line 73
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
                    // line 74
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Renouveler le serveur\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                }
                // line 76
                echo "                                        <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>

                                    ";
            } elseif ((            // line 78
(isset($context["typeUser"]) ? $context["typeUser"] : null) == "admin")) {
                // line 79
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
                    // line 80
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Renouveler le serveur\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                }
                // line 82
                echo "                                        <a class=\"btn btn-default\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("instance_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idinstance" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                      ";
            } else {
                // line 84
                echo "                                        ";
                if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : null)) {
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
        return array (  281 => 117,  279 => 116,  267 => 106,  253 => 105,  249 => 103,  247 => 102,  240 => 97,  235 => 94,  233 => 93,  227 => 89,  221 => 87,  215 => 85,  212 => 84,  206 => 82,  200 => 80,  197 => 79,  195 => 78,  189 => 76,  183 => 74,  180 => 73,  178 => 72,  172 => 68,  169 => 66,  165 => 65,  160 => 64,  150 => 63,  145 => 62,  141 => 60,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  122 => 55,  115 => 50,  112 => 48,  102 => 39,  99 => 38,  96 => 36,  79 => 35,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
