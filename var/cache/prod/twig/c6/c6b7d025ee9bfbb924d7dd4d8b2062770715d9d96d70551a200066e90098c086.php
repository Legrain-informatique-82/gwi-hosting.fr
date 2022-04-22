<?php

/* :AccountBalance/Menu:accountBalanceMenu.html.twig */
class __TwigTemplate_16a46240617193f9caafc7690d4a7e4384bd17c55a4eb2f1873cb0259710c4dc extends Twig_Template
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
        // line 1
        if ((isset($context["accountBalance"]) ? $context["accountBalance"] : null)) {
            // line 2
            echo "    ";
            // line 5
            echo "
    <li class=\"dropdown notifications-menu\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : null), "amount", array()), "html", null, true);
            echo " <i class=\"fa fa-eur\"></i>
            ";
            // line 9
            if (($this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : null), "amount", array()) < 10)) {
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["accountBalance"]) ? $context["accountBalance"] : null), "amount", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) ? $context["lines"] : null));
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
        return array (  125 => 47,  120 => 44,  109 => 39,  106 => 38,  96 => 33,  91 => 31,  86 => 29,  76 => 28,  72 => 27,  69 => 26,  64 => 25,  59 => 22,  53 => 19,  47 => 17,  45 => 16,  41 => 14,  38 => 13,  34 => 10,  32 => 9,  28 => 8,  23 => 5,  21 => 2,  19 => 1,);
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
