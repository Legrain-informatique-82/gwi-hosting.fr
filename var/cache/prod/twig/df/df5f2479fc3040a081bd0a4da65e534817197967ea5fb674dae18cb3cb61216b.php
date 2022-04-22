<?php

/* :Cart:finalCart.html.twig */
class __TwigTemplate_e0f2df6e3e7aedd03a87e90d1d72ac3285eae207887677e323eac04307000098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:finalCart.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Cart:finalCart.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:finalCart.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:finalCart.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cart:finalCart.html.twig", 28)->display($context);
        // line 29
        echo "


                ";
        // line 32
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cgus", array())) {
            // line 33
            echo "                    <h3>Conditions générales de ventes</h3>
                    <div class=\"well\">
                        <ul class=\"list-unstyled\">
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "cgus", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cgu"]) {
                // line 37
                echo "                                <li><label ><input type=\"checkbox\" class=\"validCgu\" value=\"valid\"> Vous devez accepter les conditions générales de ventes suivantes : </label> <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lecture-cgv", array("url" => $this->getAttribute($context["cgu"], "url", array()))), "html", null, true);
                echo "\" target=\"_blank\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cgu"], "name", array()), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cgu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        </ul>
                    </div>
                ";
        }
        // line 42
        echo "
                ";
        // line 57
        echo "                ";
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()) != 0)) {
            // line 58
            echo "                    ";
            if ($this->env->getExtension('security')->isGranted("ROLE_AGENCE")) {
                // line 59
                echo "                        <h3>
                            Choix du payeur
                        </h3>
                        <div class=\"row\">
                            ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "potentialPayer", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 64
                    echo "                                <div class=\"col-md-3\">
                                    <div class=\"box box-default\">
                                        <div class=\"box-header with-border\">
                                            ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "firstname", array()), "html", null, true);
                    echo "
                                        </div><!-- /.box-header -->
                                        <div class=\"box-body\">

                                            <p>Solde :";
                    // line 71
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        echo "<span class=\"text-danger\">";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "solde", array()), "html", null, true);
                    echo " €";
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        echo "</span>";
                    }
                    echo "</p>
                                            ";
                    // line 72
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        // line 73
                        echo "                                                <p>
                                                    <a href=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("credit_and_pay", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()) < 0)) {
                            echo "Recréditer";
                        } else {
                            echo "Créditer et payer";
                        }
                        echo "</a>
                                                </p>
                                            ";
                    } else {
                        // line 77
                        echo "                                                <p>
                                                    <a href=\"";
                        // line 78
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submit_cart", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()) < 0)) {
                            echo "Recréditer";
                        } else {
                            echo "Payer";
                        }
                        echo "</a>
                                                </p>
                                            ";
                    }
                    // line 81
                    echo "                                        </div><!-- /.box-body -->

                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
                        </div>
                    ";
            } else {
                // line 89
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "potentialPayer", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 90
                    echo "                            <div class=\"box box-default\">
                                <div class=\"box-header with-border\">
                                    ";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "firstname", array()), "html", null, true);
                    echo "
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <p>Solde :";
                    // line 95
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        echo "<span class=\"text-danger\">";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "solde", array()), "html", null, true);
                    echo " €";
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        echo "</span>";
                    }
                    echo "</p>
                                    ";
                    // line 96
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()))) {
                        // line 97
                        echo "                                        <p>
                                            <a href=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("credit_and_pay", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()) < 0)) {
                            echo "Recréditer";
                        } else {
                            echo "Créditer et payer";
                        }
                        echo "</a>
                                        </p>
                                    ";
                    } else {
                        // line 101
                        echo "                                        <p>
                                            <a href=\"";
                        // line 102
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("submit_cart", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "totalTTC", array()) < 0)) {
                            echo "Recréditer";
                        } else {
                            echo "Payer";
                        }
                        echo "</a>
                                        </p>
                                    ";
                    }
                    // line 105
                    echo "                                </div><!-- /.box-body -->

                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                    ";
            }
            // line 110
            echo "                ";
        }
        // line 111
        echo "

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 116
        $this->loadTemplate("footer.html.twig", ":Cart:finalCart.html.twig", 116)->display($context);
        // line 117
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Cart:finalCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 117,  278 => 116,  271 => 111,  268 => 110,  265 => 109,  256 => 105,  244 => 102,  241 => 101,  229 => 98,  226 => 97,  224 => 96,  212 => 95,  204 => 92,  200 => 90,  195 => 89,  190 => 86,  180 => 81,  168 => 78,  165 => 77,  153 => 74,  150 => 73,  148 => 72,  136 => 71,  127 => 67,  122 => 64,  118 => 63,  112 => 59,  109 => 58,  106 => 57,  103 => 42,  98 => 39,  87 => 37,  83 => 36,  78 => 33,  76 => 32,  71 => 29,  69 => 28,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/*                 {% if cart.cgus %}*/
/*                     <h3>Conditions générales de ventes</h3>*/
/*                     <div class="well">*/
/*                         <ul class="list-unstyled">*/
/*                             {% for cgu in cart.cgus %}*/
/*                                 <li><label ><input type="checkbox" class="validCgu" value="valid"> Vous devez accepter les conditions générales de ventes suivantes : </label> <a href="{{ path("lecture-cgv",{'url':cgu.url}) }}" target="_blank">  {{ cgu.name }}</a></li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {#*/
/* */
/*                 Si legrain ou gestionnaire, possibilité de récupèrer les personnes pouvant payer.*/
/*                 S'il n'y a qu'un seul client dans le panier, on laisse le choix : compte de l'utilisateur ou, compte de son gestionnaire.*/
/*                 Si le panier est rempli par legrain, c'est le meme principe. SAuf si le client est un gestionnaire d'une autre agence ou on proposera alors :*/
/*                 compte du gestionnaire autre agence ou, compte Legrain.*/
/* */
/*                 Si Legrain passe une commande pour un client d'une agence tierce, il pourra choisir : Compte client, compte du gestionnaire, son compte*/
/* */
/* */
/*                 Si le panier concerne plusieurs clients, seul le compte du gestionnaire sera débité ( ou legrain).*/
/* */
/* */
/*                 #}*/
/*                 {% if cart.totalTTC  != 0 %}*/
/*                     {% if is_granted('ROLE_AGENCE') %}*/
/*                         <h3>*/
/*                             Choix du payeur*/
/*                         </h3>*/
/*                         <div class="row">*/
/*                             {% for line in cart.potentialPayer %}*/
/*                                 <div class="col-md-3">*/
/*                                     <div class="box box-default">*/
/*                                         <div class="box-header with-border">*/
/*                                             {{ line.name }} {{ line.firstname }}*/
/*                                         </div><!-- /.box-header -->*/
/*                                         <div class="box-body">*/
/* */
/*                                             <p>Solde :{% if line.solde < cart.totalTTC %}<span class="text-danger">{% endif %} {{ line.solde }} €{% if line.solde < cart.totalTTC %}</span>{% endif %}</p>*/
/*                                             {% if line.solde < cart.totalTTC %}*/
/*                                                 <p>*/
/*                                                     <a href="{{ path('credit_and_pay',{'iduserwhopay':line.id}) }}" class="btn btn-success fvalidcgu">{% if cart.totalTTC < 0 %}Recréditer{% else %}Créditer et payer{% endif %}</a>*/
/*                                                 </p>*/
/*                                             {% else %}*/
/*                                                 <p>*/
/*                                                     <a href="{{ path('submit_cart',{'iduserwhopay':line.id}) }}" class="btn btn-success fvalidcgu">{% if cart.totalTTC < 0 %}Recréditer{% else %}Payer{% endif %}</a>*/
/*                                                 </p>*/
/*                                             {% endif %}*/
/*                                         </div><!-- /.box-body -->*/
/* */
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/* */
/*                         </div>*/
/*                     {% else %}*/
/*                         {% for line in cart.potentialPayer %}*/
/*                             <div class="box box-default">*/
/*                                 <div class="box-header with-border">*/
/*                                     {{ line.name }} {{ line.firstname }}*/
/*                                 </div><!-- /.box-header -->*/
/*                                 <div class="box-body">*/
/*                                     <p>Solde :{% if line.solde < cart.totalTTC %}<span class="text-danger">{% endif %} {{ line.solde }} €{% if line.solde < cart.totalTTC %}</span>{% endif %}</p>*/
/*                                     {% if line.solde < cart.totalTTC %}*/
/*                                         <p>*/
/*                                             <a href="{{ path('credit_and_pay',{'iduserwhopay':line.id}) }}" class="btn btn-success fvalidcgu">{% if cart.totalTTC < 0 %}Recréditer{% else %}Créditer et payer{% endif %}</a>*/
/*                                         </p>*/
/*                                     {% else %}*/
/*                                         <p>*/
/*                                             <a href="{{ path('submit_cart',{'iduserwhopay':line.id}) }}" class="btn btn-success fvalidcgu">{% if cart.totalTTC < 0 %}Recréditer{% else %}Payer{% endif %}</a>*/
/*                                         </p>*/
/*                                     {% endif %}*/
/*                                 </div><!-- /.box-body -->*/
/* */
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
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
