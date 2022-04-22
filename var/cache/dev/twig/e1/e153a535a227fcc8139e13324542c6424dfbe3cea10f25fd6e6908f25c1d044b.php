<?php

/* :AccountBalance/Menu:accountBalanceMenu.html.twig */
class __TwigTemplate_57b2f1eb2b34306bbc4da973c556c8875461fac2c9b75a089d31c64c80e9c351 extends Twig_Template
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
        $__internal_ab4c07afb5f5a72d39f803a5b2176793163a6432979b71e5ce0576700873caaa = $this->env->getExtension("native_profiler");
        $__internal_ab4c07afb5f5a72d39f803a5b2176793163a6432979b71e5ce0576700873caaa->enter($__internal_ab4c07afb5f5a72d39f803a5b2176793163a6432979b71e5ce0576700873caaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":AccountBalance/Menu:accountBalanceMenu.html.twig"));

        // line 1
        if ((isset($context["accountBalance"]) ? $context["accountBalance"] : $this->getContext($context, "accountBalance"))) {
            // line 2
            echo "    ";
            // line 5
            echo "
    <li class=\"dropdown notifications-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : $this->getContext($context, "accountBalance")), "amount", array()), "html", null, true);
            echo " <i class=\"fa fa-eur\"></i>
            ";
            // line 9
            if (($this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : $this->getContext($context, "accountBalance")), "amount", array()) < 10)) {
                // line 10
                echo "                <span class=\"label label-danger\">
                            <i class=\"fa fa-warning\"></i>
                        </span> ";
                // line 13
                echo "            ";
            }
            // line 14
            echo "        </a>
        <ul class=\"dropdown-menu\">
            ";
            // line 16
            if ((false == $this->env->getExtension('security')->isGranted("ROLE_LEGRAIN"))) {
                // line 17
                echo "            <li class=\"header\">  Solde : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : $this->getContext($context, "accountBalance")), "amount", array()), "html", null, true);
                echo " €

                <a href=\"";
                // line 19
                echo $this->env->getExtension('routing')->getPath("credit_account_balance");
                echo "\" class=\"btn btn-default\">Créditer</a>
            </li>
                ";
            }
            // line 22
            echo "            <li>
                <!-- inner menu: contains the actual data -->
                <ul class=\"menu\">
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) ? $context["lines"] : $this->getContext($context, "lines")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 26
                echo "                        <li>
                        <a href=\"";
                // line 27
                echo $this->env->getExtension('routing')->getPath("historic_account_balance_user");
                echo "\" class=\"disabled\" >
                            <small class=\"pull-right text-";
                // line 28
                if (($this->getAttribute($context["line"], "mouvement", array()) < 0)) {
                    echo "danger";
                } else {
                    echo "success";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "mouvement", array()), "html", null, true);
                echo "€</small>
                            <small>Le ";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["line"], "date", array()), "date", array()), "d/m/Y à H \\h \\e\\t i \\m\\i\\n"), "html", null, true);
                echo "</small>
                            <br/>
                            ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "description", array()), "html", null, true);
                echo "
                            <br>
                            <small><b>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "idTransaction", array()), "html", null, true);
                echo "</b></small>


                        </a>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 38
                echo "                        <li>
                            <a href=\"";
                // line 39
                echo $this->env->getExtension('routing')->getPath("historic_account_balance_user");
                echo "\">
                                Aucune transaction trouvée.
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
                </ul>
            </li>
            <li class=\"footer\"><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("historic_account_balance_user");
            echo "\">Historique des mouvements</a></li>
        </ul>
    </li>


    ";
        }
        
        $__internal_ab4c07afb5f5a72d39f803a5b2176793163a6432979b71e5ce0576700873caaa->leave($__internal_ab4c07afb5f5a72d39f803a5b2176793163a6432979b71e5ce0576700873caaa_prof);

    }

    public function getTemplateName()
    {
        return ":AccountBalance/Menu:accountBalanceMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 47,  123 => 44,  112 => 39,  109 => 38,  99 => 33,  94 => 31,  89 => 29,  79 => 28,  75 => 27,  72 => 26,  67 => 25,  62 => 22,  56 => 19,  50 => 17,  48 => 16,  44 => 14,  41 => 13,  37 => 10,  35 => 9,  31 => 8,  26 => 5,  24 => 2,  22 => 1,);
    }
}
/* {% if accountBalance %}*/
/*     {#*/
/*                INIT porte monnaie*/
/*                #}*/
/* */
/*     <li class="dropdown notifications-menu">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*             {{ accountBalance.amount }} <i class="fa fa-eur"></i>*/
/*             {% if accountBalance.amount < 10 %}*/
/*                 <span class="label label-danger">*/
/*                             <i class="fa fa-warning"></i>*/
/*                         </span> {# Si solde < 10 € #}*/
/*             {% endif %}*/
/*         </a>*/
/*         <ul class="dropdown-menu">*/
/*             {% if false==is_granted('ROLE_LEGRAIN') %}*/
/*             <li class="header">  Solde : {{ accountBalance.amount }} €*/
/* */
/*                 <a href="{{ path("credit_account_balance") }}" class="btn btn-default">Créditer</a>*/
/*             </li>*/
/*                 {% endif %}*/
/*             <li>*/
/*                 <!-- inner menu: contains the actual data -->*/
/*                 <ul class="menu">*/
/*                     {% for line in lines %}*/
/*                         <li>*/
/*                         <a href="{{ path('historic_account_balance_user') }}" class="disabled" >*/
/*                             <small class="pull-right text-{% if line.mouvement < 0 %}danger{% else %}success{% endif %}">{{ line.mouvement }}€</small>*/
/*                             <small>Le {{ line.date.date | date("d/m/Y \à H \\h \\e\\t i \\m\\i\\n")  }}</small>*/
/*                             <br/>*/
/*                             {{ line.description }}*/
/*                             <br>*/
/*                             <small><b>{{ line.idTransaction }}</b></small>*/
/* */
/* */
/*                         </a>*/
/*                     {% else %}*/
/*                         <li>*/
/*                             <a href="{{ path('historic_account_balance_user') }}">*/
/*                                 Aucune transaction trouvée.*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/*             </li>*/
/*             <li class="footer"><a href="{{ path('historic_account_balance_user') }}">Historique des mouvements</a></li>*/
/*         </ul>*/
/*     </li>*/
/* */
/* */
/*     {#*/
/*     fin porte monnaie*/
/*     #}*/
/* {% endif %}*/
