<?php

/* :Cart/Menu:cartMenu.html.twig */
class __TwigTemplate_ac7ac8d58a9de603d99802651253c2c1fcc9c35500547aa98f8567f772e998e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2d8963a8621d0be82602866d342dc73c61070001202ff989e1aedbb9ce20cc = $this->env->getExtension("native_profiler");
        $__internal_7a2d8963a8621d0be82602866d342dc73c61070001202ff989e1aedbb9ce20cc->enter($__internal_7a2d8963a8621d0be82602866d342dc73c61070001202ff989e1aedbb9ce20cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart/Menu:cartMenu.html.twig"));

        // line 1
        if ((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart"))) {
            // line 2
            echo "    ";
            // line 3
            echo "
    <li class=\"dropdown notifications-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-shopping-cart\"></i>

            <span class=\"label label-info\">";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "cartLines", array())), "html", null, true);
            echo " </span>

        </a>
        <ul class=\"dropdown-menu\">
            <li class=\"header\">
                <!-- Ajout du petit tag avec le nombre de produit dans le panier -->
            </li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class=\"menu\">
                        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "cartLines", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 19
                echo "                            <li>
                                <p>
                                    <small class=\"pull-right\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "totalHt", array()), "html", null, true);
                echo "€ HT <br>
                                        ";
                // line 22
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                    // line 23
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_item_cart", array("idline" => $this->getAttribute($context["line"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">
                                            ";
                } else {
                    // line 25
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("public_remove_item_cart", array("idline" => $this->getAttribute($context["line"], "id", array()), "redirect" => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">
                                                ";
                }
                // line 27
                echo "                                                <i class=\"fa fa-trash\"></i></a></small>
                                    ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "productName", array()), "html", null, true);
                echo "
                                </p>
                            </li>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 32
                echo "                            <li>
                                <p>
                                    Actuellement aucun produit<br/> dans votre panier.
                                </p>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </ul>
            </li>
            <li class=\"footer\">
                ";
            // line 49
            echo "                <a class=\"btn btn-info \" href=\"";
            echo $this->env->getExtension('routing')->getPath("pay_cart");
            echo "\"><i class=\"fa fa-cart-arrow-down\"></i> Voir le panier</a></li>
        </ul>
    </li>


    ";
        }
        
        $__internal_7a2d8963a8621d0be82602866d342dc73c61070001202ff989e1aedbb9ce20cc->leave($__internal_7a2d8963a8621d0be82602866d342dc73c61070001202ff989e1aedbb9ce20cc_prof);

    }

    public function getTemplateName()
    {
        return ":Cart/Menu:cartMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 49,  96 => 38,  85 => 32,  76 => 28,  73 => 27,  67 => 25,  61 => 23,  59 => 22,  55 => 21,  51 => 19,  46 => 18,  33 => 8,  26 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if cart %}*/
/*     {#  INIT porte monnaie #}*/
/* */
/*     <li class="dropdown notifications-menu">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             <i class="fa fa-shopping-cart"></i>*/
/* */
/*             <span class="label label-info">{{ cart.cartLines | length }} </span>*/
/* */
/*         </a>*/
/*         <ul class="dropdown-menu">*/
/*             <li class="header">*/
/*                 <!-- Ajout du petit tag avec le nombre de produit dans le panier -->*/
/*             </li>*/
/*             <li>*/
/*                 <!-- inner menu: contains the actual data -->*/
/*                 <ul class="menu">*/
/*                         {% for line in cart.cartLines %}*/
/*                             <li>*/
/*                                 <p>*/
/*                                     <small class="pull-right">{{ line.totalHt }}€ HT <br>*/
/*                                         {% if app.user %}*/
/*                                         <a href="{{ path('remove_item_cart',{'idline':line.id}) }}" class="btn btn-danger btn-xs">*/
/*                                             {% else %}*/
/*                                             <a href="{{ path('public_remove_item_cart',{'idline':line.id,'redirect': route}) }}" class="btn btn-danger btn-xs">*/
/*                                                 {% endif %}*/
/*                                                 <i class="fa fa-trash"></i></a></small>*/
/*                                     {{ line.productName }}*/
/*                                 </p>*/
/*                             </li>*/
/*                         {% else %}*/
/*                             <li>*/
/*                                 <p>*/
/*                                     Actuellement aucun produit<br/> dans votre panier.*/
/*                                 </p>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*             <li class="footer">*/
/*                 {#*/
/*                  <p>*/
/*                      Total HT  : {{ cart.totalHt }} €<br/>*/
/*                      Total TVA  : {{ cart.totalTax }} €<br/>*/
/*                      Total TTC  : {{ cart.totalTTC }} €*/
/*                  </p>*/
/*                  <br/>*/
/*                  #}*/
/*                 <a class="btn btn-info " href="{{ path('pay_cart') }}"><i class="fa fa-cart-arrow-down"></i> Voir le panier</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* */
/*     {#*/
/*     fin porte monnaie*/
/*     #}*/
/* {% endif %}*/
