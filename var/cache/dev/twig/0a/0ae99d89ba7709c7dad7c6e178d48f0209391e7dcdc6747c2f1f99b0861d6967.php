<?php

/* :Cart:finalCart.html.twig */
class __TwigTemplate_bea55185b476b5620782b3b43ece94ad0200ddaf0b68c006b8cc06a22146860b extends Twig_Template
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
        $__internal_f4734d24e1df1c8ff471370c6bfbceed1fcb2e35e302517b59da629a3fd0b9bc = $this->env->getExtension("native_profiler");
        $__internal_f4734d24e1df1c8ff471370c6bfbceed1fcb2e35e302517b59da629a3fd0b9bc->enter($__internal_f4734d24e1df1c8ff471370c6bfbceed1fcb2e35e302517b59da629a3fd0b9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:finalCart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4734d24e1df1c8ff471370c6bfbceed1fcb2e35e302517b59da629a3fd0b9bc->leave($__internal_f4734d24e1df1c8ff471370c6bfbceed1fcb2e35e302517b59da629a3fd0b9bc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5620ef7310a24c1cb9f45a0ce082256c37ee4bb182c712af0dd1f4d5ae734149 = $this->env->getExtension("native_profiler");
        $__internal_5620ef7310a24c1cb9f45a0ce082256c37ee4bb182c712af0dd1f4d5ae734149->enter($__internal_5620ef7310a24c1cb9f45a0ce082256c37ee4bb182c712af0dd1f4d5ae734149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:finalCart.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "cgus", array())) {
            // line 33
            echo "                    <h3>Conditions générales de ventes</h3>
                    <div class=\"well\">
                        <ul class=\"list-unstyled\">
                            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "cgus", array()));
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
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()) != 0)) {
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "potentialPayer", array()));
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
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        echo "<span class=\"text-danger\">";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "solde", array()), "html", null, true);
                    echo " €";
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        echo "</span>";
                    }
                    echo "</p>
                                            ";
                    // line 72
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        // line 73
                        echo "                                                <p>
                                                    <a href=\"";
                        // line 74
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("credit_and_pay", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()) < 0)) {
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
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()) < 0)) {
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
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "potentialPayer", array()));
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
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        echo "<span class=\"text-danger\">";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "solde", array()), "html", null, true);
                    echo " €";
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        echo "</span>";
                    }
                    echo "</p>
                                    ";
                    // line 96
                    if (($this->getAttribute($context["line"], "solde", array()) < $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()))) {
                        // line 97
                        echo "                                        <p>
                                            <a href=\"";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("credit_and_pay", array("iduserwhopay" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-success fvalidcgu\">";
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()) < 0)) {
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
                        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "totalTTC", array()) < 0)) {
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
        
        $__internal_5620ef7310a24c1cb9f45a0ce082256c37ee4bb182c712af0dd1f4d5ae734149->leave($__internal_5620ef7310a24c1cb9f45a0ce082256c37ee4bb182c712af0dd1f4d5ae734149_prof);

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
        return array (  289 => 117,  287 => 116,  280 => 111,  277 => 110,  274 => 109,  265 => 105,  253 => 102,  250 => 101,  238 => 98,  235 => 97,  233 => 96,  221 => 95,  213 => 92,  209 => 90,  204 => 89,  199 => 86,  189 => 81,  177 => 78,  174 => 77,  162 => 74,  159 => 73,  157 => 72,  145 => 71,  136 => 67,  131 => 64,  127 => 63,  121 => 59,  118 => 58,  115 => 57,  112 => 42,  107 => 39,  96 => 37,  92 => 36,  87 => 33,  85 => 32,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
