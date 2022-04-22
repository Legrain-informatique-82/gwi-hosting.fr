<?php

/* ::sidebar.html.twig */
class __TwigTemplate_42446284365d6cea49a3d3c633e4ce06de9cbef45e4a734b181411423e1b380d extends Twig_Template
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
        $__internal_b2c6085daf213653b18b91948e19bfd2c43a82fe4ba865165dd3847cfbcf9fa7 = $this->env->getExtension("native_profiler");
        $__internal_b2c6085daf213653b18b91948e19bfd2c43a82fe4ba865165dd3847cfbcf9fa7->enter($__internal_b2c6085daf213653b18b91948e19bfd2c43a82fe4ba865165dd3847cfbcf9fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        if ( !array_key_exists("disableMenu", $context)) {
            // line 2
            echo "<!-- Left side column. contains the sidebar -->
<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <ul class=\"sidebar-menu\">
            ";
            // line 7
            if ($this->env->getExtension('security')->isGranted("ROLE_COMPTE_EMAIL")) {
                // line 8
                echo "                <li class=\"header\">Ma boite e-mail</li>

                <li ";
                // line 10
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "my_email_account")) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"";
                // line 11
                echo $this->env->getExtension('routing')->getPath("my_email_account");
                echo "\">
                        <i class=\"fa fa-circle-o text-aqua\"></i><span>
                            Gerer
                        </span>
                    </a>
                </li>
            ";
            }
            // line 18
            echo "
            ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
                // line 20
                echo "                <li class=\"header\">Admin</li>

                <li class=\"treeview  ";
                // line 22
                if ((((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-agency") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create-agency")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-users-agency")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create-users-agency"))) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-building\"></i> <span>Agences</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 27
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-agency")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("list-agency");
                echo "\"><i class=\"fa fa-circle-o\"></i> Agences </a></li>
                        <li ";
                // line 28
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create-agency")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("create-agency");
                echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter une agence </a></li>
                        <li ";
                // line 29
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-users-agency")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("list-users-agency");
                echo "\"><i class=\"fa fa-circle-o\"></i> Gestionnaires</a></li>
                        <li ";
                // line 30
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "create-users-agency")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("create-users-agency");
                echo "\"><i class=\"fa fa-circle-o\"></i>Ajouter un gestionnaire</a></li>


                    </ul>
                </li>


                <li class=\"treeview  ";
                // line 37
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-products")) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-archive\"></i> <span>Produits</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 42
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-products")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("list-products");
                echo "\"><i class=\"fa fa-circle-o\"></i> Produits </a></li>


                    </ul>
                </li>

                <li class=\"treeview  ";
                // line 48
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "adm_gest_ndd")) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-globe\"></i> <span>Nom de domaine</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 53
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "adm_gest_ndd")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("adm_gest_ndd");
                echo "\"><i class=\"fa fa-circle-o\"></i> Lier un domaine</a></li>

                    </ul>
                </li>

                <li class=\"treeview  ";
                // line 58
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liaison_instance_gandi")) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-globe\"></i> <span>Instances</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 63
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liaison_instance_gandi")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("liaison_instance_gandi");
                echo "\"><i class=\"fa fa-circle-o\"></i> Lier une instance </a></li>

                    </ul>
                </li>

                <li class=\"treeview  ";
                // line 68
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "gestion-cgv")) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-globe\"></i> <span>CGV</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 73
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "gestion-cgv")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("gestion-cgv");
                echo "\"><i class=\"fa fa-circle-o\"></i> Liste des GCV </a></li>

                    </ul>
                </li>

                <li class=\"treeview  ";
                // line 78
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-contacts")) {
                    echo " active ";
                }
                echo "\">
                    <a href=\"#\">
                        <i class=\"fa fa-language\"></i> <span>Contacts</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li ";
                // line 83
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-contacts")) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo $this->env->getExtension('routing')->getPath("list-contacts");
                echo "\"><i class=\"fa fa-circle-o\"></i> Contacts </a></li>


                    </ul>
                </li>


            ";
            }
            // line 91
            echo "            ";
            if ($this->env->getExtension('security')->isGranted("ROLE_UTILISATEUR_AGENCE")) {
                // line 92
                echo "
                <li class=\"header\">General</li>
                ";
                // line 94
                if ($this->env->getExtension('security')->isGranted("ROLE_AGENCE")) {
                    // line 95
                    echo "                    <li class=\"treeview  ";
                    if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_customer_admin") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "add_customer_admin"))) {
                        echo " active ";
                    }
                    echo "\">
                        <a href=\"#\">
                            <i class=\"fa fa-users\"></i> <span>Clients</span> <i class=\"fa fa-angle-left pull-right\"></i>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li ";
                    // line 100
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_customer_admin")) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("list_customer_admin");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Mes clients </a></li>
                            <li ";
                    // line 101
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "add_customer_admin")) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("add_customer_admin");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Ajouter un client </a></li>
                            <li ";
                    // line 102
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list_product_next_payement")) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("list_product_next_payement");
                    echo "\"><i class=\"fa fa-circle-o\"></i> Paiements en attente<br/> de validation </a></li>

                        </ul>
                    </li>
                    ";
                    // line 107
                    echo "                    ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "agency", array()), "facturationBylegrain", array()) == false) || $this->env->getExtension('security')->isGranted("ROLE_LEGRAIN"))) {
                        // line 108
                        echo "                        <li class=\"treeview  ";
                        if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-pricelists") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-pricelists"))) {
                            echo " active ";
                        }
                        echo "\">
                            <a href=\"#\">
                                <i class=\"fa fa-eur\"></i> <span>Options facturation</span> <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li ";
                        // line 113
                        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "list-pricelists")) {
                            echo " class=\"active\" ";
                        }
                        echo "><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("list-pricelists");
                        echo "\"><i class=\"fa fa-circle-o\"></i> Mes grilles de tarifs</a></li>
                                <li ";
                        // line 114
                        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "param-infos-paiements")) {
                            echo " class=\"active\" ";
                        }
                        echo "><a href=\"";
                        echo $this->env->getExtension('routing')->getPath("param-infos-paiements");
                        echo "\"><i class=\"fa fa-circle-o\"></i> Paramètres de paiements</a></li>
                            </ul>
                        </li>
                    ";
                    }
                    // line 118
                    echo "
                ";
                }
                // line 120
                echo "                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-globe\"></i> <span>Noms de domaine</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a  ";
                // line 125
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ndds_user")) {
                    echo " class=\"active\" ";
                }
                echo " href=\"";
                echo $this->env->getExtension('routing')->getPath("ndds_user");
                echo "\"><i class=\"fa fa-circle-o\"></i> Mes domaines </a></li>

                    </ul>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-server\"></i> <span>Serveurs</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li><a  ";
                // line 134
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "instances_user")) {
                    echo " class=\"active\" ";
                }
                echo " href=\"";
                echo $this->env->getExtension('routing')->getPath("instances_user");
                echo "\"><i class=\"fa fa-circle-o\"></i> Mes serveurs </a></li>

                    </ul>
                </li>







            ";
            }
            // line 146
            echo "

        </ul>

        ";
            // line 289
            echo "    </section>
    <!-- /.sidebar -->

</aside>
";
        }
        
        $__internal_b2c6085daf213653b18b91948e19bfd2c43a82fe4ba865165dd3847cfbcf9fa7->leave($__internal_b2c6085daf213653b18b91948e19bfd2c43a82fe4ba865165dd3847cfbcf9fa7_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 289,  350 => 146,  331 => 134,  315 => 125,  308 => 120,  304 => 118,  293 => 114,  285 => 113,  274 => 108,  271 => 107,  260 => 102,  252 => 101,  244 => 100,  233 => 95,  231 => 94,  227 => 92,  224 => 91,  209 => 83,  199 => 78,  187 => 73,  177 => 68,  165 => 63,  155 => 58,  143 => 53,  133 => 48,  120 => 42,  110 => 37,  96 => 30,  88 => 29,  80 => 28,  72 => 27,  62 => 22,  58 => 20,  56 => 19,  53 => 18,  43 => 11,  37 => 10,  33 => 8,  31 => 7,  24 => 2,  22 => 1,);
    }
}
/* {% if disableMenu is not defined %}*/
/* <!-- Left side column. contains the sidebar -->*/
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <ul class="sidebar-menu">*/
/*             {% if is_granted("ROLE_COMPTE_EMAIL") %}*/
/*                 <li class="header">Ma boite e-mail</li>*/
/* */
/*                 <li {% if app.request.get('_route') == 'my_email_account' %}class="active"{% endif %}>*/
/*                     <a href="{{ path("my_email_account") }}">*/
/*                         <i class="fa fa-circle-o text-aqua"></i><span>*/
/*                             Gerer*/
/*                         </span>*/
/*                     </a>*/
/*                 </li>*/
/*             {% endif %}*/
/* */
/*             {% if is_granted("ROLE_LEGRAIN") %}*/
/*                 <li class="header">Admin</li>*/
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'list-agency' or app.request.get('_route') == 'create-agency' or app.request.get('_route') == 'list-users-agency' or app.request.get('_route') == 'create-users-agency' %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-building"></i> <span>Agences</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'list-agency' %} class="active" {% endif %}><a href="{{ path("list-agency") }}"><i class="fa fa-circle-o"></i> Agences </a></li>*/
/*                         <li {% if app.request.get('_route') == 'create-agency' %} class="active" {% endif %}><a href="{{ path("create-agency") }}"><i class="fa fa-circle-o"></i> Ajouter une agence </a></li>*/
/*                         <li {% if app.request.get('_route') == 'list-users-agency' %} class="active" {% endif %}><a href="{{ path('list-users-agency') }}"><i class="fa fa-circle-o"></i> Gestionnaires</a></li>*/
/*                         <li {% if app.request.get('_route') == 'create-users-agency' %} class="active" {% endif %}><a href="{{ path('create-users-agency') }}"><i class="fa fa-circle-o"></i>Ajouter un gestionnaire</a></li>*/
/* */
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'list-products'  %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-archive"></i> <span>Produits</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'list-products' %} class="active" {% endif %}><a href="{{ path("list-products") }}"><i class="fa fa-circle-o"></i> Produits </a></li>*/
/* */
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'adm_gest_ndd' %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-globe"></i> <span>Nom de domaine</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'adm_gest_ndd' %} class="active" {% endif %}><a href="{{ path("adm_gest_ndd") }}"><i class="fa fa-circle-o"></i> Lier un domaine</a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'liaison_instance_gandi' %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-globe"></i> <span>Instances</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'liaison_instance_gandi' %} class="active" {% endif %}><a href="{{ path("liaison_instance_gandi") }}"><i class="fa fa-circle-o"></i> Lier une instance </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'gestion-cgv' %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-globe"></i> <span>CGV</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'gestion-cgv' %} class="active" {% endif %}><a href="{{ path("gestion-cgv") }}"><i class="fa fa-circle-o"></i> Liste des GCV </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/*                 <li class="treeview  {% if app.request.get('_route') == 'list-contacts'  %} active {% endif %}">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-language"></i> <span>Contacts</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li {% if app.request.get('_route') == 'list-contacts' %} class="active" {% endif %}><a href="{{ path("list-contacts") }}"><i class="fa fa-circle-o"></i> Contacts </a></li>*/
/* */
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*             {% endif %}*/
/*             {% if is_granted("ROLE_UTILISATEUR_AGENCE") %}*/
/* */
/*                 <li class="header">General</li>*/
/*                 {% if is_granted("ROLE_AGENCE") %}*/
/*                     <li class="treeview  {% if app.request.get('_route') == 'list_customer_admin' or app.request.get('_route') == 'add_customer_admin' %} active {% endif %}">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-users"></i> <span>Clients</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li {% if app.request.get('_route') == 'list_customer_admin' %} class="active" {% endif %}><a href="{{ path('list_customer_admin') }}"><i class="fa fa-circle-o"></i> Mes clients </a></li>*/
/*                             <li {% if app.request.get('_route') == 'add_customer_admin' %} class="active" {% endif %}><a href="{{ path('add_customer_admin') }}"><i class="fa fa-circle-o"></i> Ajouter un client </a></li>*/
/*                             <li {% if app.request.get('_route') == 'list_product_next_payement' %} class="active" {% endif %}><a href="{{ path('list_product_next_payement') }}"><i class="fa fa-circle-o"></i> Paiements en attente<br/> de validation </a></li>*/
/* */
/*                         </ul>*/
/*                     </li>*/
/*                     {#  Si L'agence du gestionnaire n'a pas choisi la facturation par legrain et que l'utilisateur connecté n'est pas legrain#}*/
/*                     {% if ( app.user.user.agency.facturationBylegrain == false) or (is_granted("ROLE_LEGRAIN") ) %}*/
/*                         <li class="treeview  {% if app.request.get('_route') == 'list-pricelists' or app.request.get('_route') == 'list-pricelists' %} active {% endif %}">*/
/*                             <a href="#">*/
/*                                 <i class="fa fa-eur"></i> <span>Options facturation</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                             </a>*/
/*                             <ul class="treeview-menu">*/
/*                                 <li {% if app.request.get('_route') == 'list-pricelists' %} class="active" {% endif %}><a href="{{ path('list-pricelists') }}"><i class="fa fa-circle-o"></i> Mes grilles de tarifs</a></li>*/
/*                                 <li {% if app.request.get('_route') == 'param-infos-paiements' %} class="active" {% endif %}><a href="{{ path('param-infos-paiements') }}"><i class="fa fa-circle-o"></i> Paramètres de paiements</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     {% endif %}*/
/* */
/*                 {% endif %}*/
/*                 <li class="treeview">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-globe"></i> <span>Noms de domaine</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li><a  {% if app.request.get('_route') == 'ndds_user' %} class="active" {% endif %} href="{{ path('ndds_user') }}"><i class="fa fa-circle-o"></i> Mes domaines </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class="treeview">*/
/*                     <a href="#">*/
/*                         <i class="fa fa-server"></i> <span>Serveurs</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                     </a>*/
/*                     <ul class="treeview-menu">*/
/*                         <li><a  {% if app.request.get('_route') == 'instances_user' %} class="active" {% endif %} href="{{ path('instances_user') }}"><i class="fa fa-circle-o"></i> Mes serveurs </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             {% endif %}*/
/* */
/* */
/*         </ul>*/
/* */
/*         {#*/
/*                 <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*                 <ul class="sidebar-menu">*/
/* */
/*                     <li class="header">NAVIGATION</li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>*/
/*                             <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-files-o"></i>*/
/*                             <span>Layout Options</span>*/
/*                             <span class="label label-primary pull-right">4</span>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>*/
/*                             <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>*/
/*                             <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>*/
/*                             <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="../widgets.html">*/
/*                             <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">Hot</small>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-pie-chart"></i>*/
/*                             <span>Charts</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>*/
/*                             <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>*/
/*                             <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>*/
/*                             <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-laptop"></i>*/
/*                             <span>UI Elements</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>*/
/*                             <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>*/
/*                             <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>*/
/*                             <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>*/
/*                             <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>*/
/*                             <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-edit"></i> <span>Forms</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>*/
/*                             <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>*/
/*                             <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-table"></i> <span>Tables</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>*/
/*                             <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="../calendar.html">*/
/*                             <i class="fa fa-calendar"></i> <span>Calendar</span>*/
/*                             <small class="label pull-right bg-red">3</small>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="../mailbox/mailbox.html">*/
/*                             <i class="fa fa-envelope"></i> <span>Mailbox</span>*/
/*                             <small class="label pull-right bg-yellow">12</small>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="treeview active">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-folder"></i> <span>Examples</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>*/
/*                             <li><a href="login.html"><i class="fa fa-circle-o"></i> Login</a></li>*/
/*                             <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>*/
/*                             <li><a href="lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>*/
/*                             <li><a href="404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>*/
/*                             <li><a href="500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>*/
/*                             <li class="active"><a href="blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="treeview">*/
/*                         <a href="#">*/
/*                             <i class="fa fa-share"></i> <span>Multilevel</span>*/
/*                             <i class="fa fa-angle-left pull-right"></i>*/
/*                         </a>*/
/*                         <ul class="treeview-menu">*/
/*                             <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*                             <li>*/
/*                                 <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>*/
/*                                 <ul class="treeview-menu">*/
/*                                     <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>*/
/*                                     <li>*/
/*                                         <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>*/
/*                                         <ul class="treeview-menu">*/
/*                                             <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                                             <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                             <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>*/
/*                     <li class="header">LABELS</li>*/
/*                     <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>*/
/*                     <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>*/
/*                     <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>*/
/* */
/*         </ul>*/
/*  #}*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* */
/* </aside>*/
/* {% endif %}*/
