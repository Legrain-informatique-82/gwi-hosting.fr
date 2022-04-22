<?php

/* :Public:header.html.twig */
class __TwigTemplate_69503b4f2567f620994966b64325cf5d42062acd39e25dea4453e0c727121db6 extends Twig_Template
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
        $__internal_e2de359b27b8194a05658618fd84dd7b7d0b3a27956d6ed0782892ad643f9f4e = $this->env->getExtension("native_profiler");
        $__internal_e2de359b27b8194a05658618fd84dd7b7d0b3a27956d6ed0782892ad643f9f4e->enter($__internal_e2de359b27b8194a05658618fd84dd7b7d0b3a27956d6ed0782892ad643f9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Public:header.html.twig"));

        // line 1
        echo "
<div class=\"row\">
    <div class=\"col-md-6\">
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("public-homepage");
        echo "\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Gwi-hosting\">
        </a>
    </div>
    <div class=\"col-md-6\">
        <ul class=\"nav navbar-nav pull-right\">
        ";
        // line 10
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 11
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Cart:getCart", array("iduser" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "id", array()))));
            echo "

            ";
            // line 13
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccountBalance:getAccountBalance", array("iduser" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "id", array()))));
            echo "

                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-user\"></i>
                        <span class=\"hidden-xs\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "email", array()), "html", null, true);
            echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <i class=\"fa fa-user fa-3x\"></i>

                        </li>
                        ";
            // line 41
            echo "                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            ";
            // line 43
            if ( !array_key_exists("disableMenu", $context)) {
                // line 44
                echo "
                                <div class=\"pull-left\">
                                    <a href=\"";
                // line 46
                echo $this->env->getExtension('routing')->getPath("myprofile");
                echo "\" class=\"btn btn-default\">
                                        Mon profil
                                    </a>
                                    ";
                // line 49
                if ($this->env->getExtension('security')->isGranted("ROLE_AGENCE")) {
                    // line 50
                    echo "                                        <a href=\"";
                    echo $this->env->getExtension('routing')->getPath("myagency");
                    echo "\" class=\"btn btn-default\">
                                            Mon agence
                                        </a>
                                    ";
                }
                // line 54
                echo "                                </div>
                            ";
            }
            // line 56
            echo "                            <div class=\"pull-right\">
                                <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" class=\"btn btn-primary btn-flat\" title=\"Se déconnecter\">
                                    <i class=\"fa fa-power-off fa-2x\"></i>

                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
        ";
        } else {
            // line 66
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Cart:getCartWithoutConnection", array("route" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"))));
            echo "
        ";
        }
        // line 68
        echo "        </ul>
    </div>
</div>
<div class=\"row\">
<nav id=\"topmenu\" class=\"navbar navbar-default\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-menu-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-menu-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li  ";
        // line 86
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-homepage")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("public-homepage");
        echo "\">Accueil ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-homepage")) {
            echo " <span class=\"sr-only\">(current)</span> ";
        }
        echo "</a></li>
                <li ";
        // line 87
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-buy-ndd")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("public-buy-ndd");
        echo "\">Réserver un nom de domaine";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-buy-ndd")) {
            echo " <span class=\"sr-only\">(current)</span> ";
        }
        echo "</a></li>
                <li ";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-buy-server")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("public-buy-server");
        echo "\">Réserver un serveur";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "public-buy-server")) {
            echo " <span class=\"sr-only\">(current)</span> ";
        }
        echo "</a></li>
                ";
        // line 103
        echo "            </ul>

            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 106
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 107
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">Mon compte</a></li>
                ";
        } else {
            // line 109
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">Se connecter/S'inscrire</a></li>
                ";
        }
        // line 111
        echo "


            </ul>

        </div><!-- /.navbar-collapse -->
</nav>
</div>
";
        
        $__internal_e2de359b27b8194a05658618fd84dd7b7d0b3a27956d6ed0782892ad643f9f4e->leave($__internal_e2de359b27b8194a05658618fd84dd7b7d0b3a27956d6ed0782892ad643f9f4e_prof);

    }

    public function getTemplateName()
    {
        return ":Public:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 111,  187 => 109,  181 => 107,  179 => 106,  174 => 103,  162 => 88,  150 => 87,  138 => 86,  118 => 68,  112 => 66,  100 => 57,  97 => 56,  93 => 54,  85 => 50,  83 => 49,  77 => 46,  73 => 44,  71 => 43,  67 => 41,  56 => 19,  47 => 13,  41 => 11,  39 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* */
/* <div class="row">*/
/*     <div class="col-md-6">*/
/*         <a href="{{ path('public-homepage') }}">*/
/*         <img src="{{ asset('images/logo.jpg') }}" alt="Gwi-hosting">*/
/*         </a>*/
/*     </div>*/
/*     <div class="col-md-6">*/
/*         <ul class="nav navbar-nav pull-right">*/
/*         {% if app.user %}*/
/*             {{ render(controller("AppBundle:Cart:getCart", {'iduser': app.user.user.id})) }}*/
/* */
/*             {{ render(controller("AppBundle:AccountBalance:getAccountBalance", {'iduser': app.user.user.id})) }}*/
/* */
/*                 <!-- User Account: style can be found in dropdown.less -->*/
/*                 <li class="dropdown user user-menu">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-user"></i>*/
/*                         <span class="hidden-xs">{{ app.user.user.email }}</span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <!-- User image -->*/
/*                         <li class="user-header">*/
/*                             <i class="fa fa-user fa-3x"></i>*/
/* */
/*                         </li>*/
/*                         {#*/
/*                         <!-- Menu Body -->*/
/*                         <li class="user-body">*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Followers</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Sales</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Friends</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         #}*/
/*                         <!-- Menu Footer-->*/
/*                         <li class="user-footer">*/
/*                             {% if disableMenu is not defined %}*/
/* */
/*                                 <div class="pull-left">*/
/*                                     <a href="{{ path('myprofile') }}" class="btn btn-default">*/
/*                                         Mon profil*/
/*                                     </a>*/
/*                                     {% if is_granted("ROLE_AGENCE") %}*/
/*                                         <a href="{{ path('myagency') }}" class="btn btn-default">*/
/*                                             Mon agence*/
/*                                         </a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                             <div class="pull-right">*/
/*                                 <a href="{{ path('logout') }}" class="btn btn-primary btn-flat" title="Se déconnecter">*/
/*                                     <i class="fa fa-power-off fa-2x"></i>*/
/* */
/*                                 </a>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*         {% else %}*/
/*             {{ render(controller("AppBundle:Cart:getCartWithoutConnection",{'route':app.request.get('_route')})) }}*/
/*         {% endif %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/* <nav id="topmenu" class="navbar navbar-default">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-menu-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-menu-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li  {% if app.request.get('_route') == 'public-homepage' %} class="active" {% endif %}><a href="{{ path('public-homepage') }}">Accueil {% if app.request.get('_route') == 'public-homepage' %} <span class="sr-only">(current)</span> {% endif %}</a></li>*/
/*                 <li {% if app.request.get('_route') == 'public-buy-ndd' %} class="active" {% endif %}><a href="{{ path('public-buy-ndd') }}">Réserver un nom de domaine{% if app.request.get('_route') == 'public-buy-ndd' %} <span class="sr-only">(current)</span> {% endif %}</a></li>*/
/*                 <li {% if app.request.get('_route') == 'public-buy-server' %} class="active" {% endif %}><a href="{{ path('public-buy-server') }}">Réserver un serveur{% if app.request.get('_route') == 'public-buy-server' %} <span class="sr-only">(current)</span> {% endif %}</a></li>*/
/*                 {#*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">One more separated link</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 #}*/
/*             </ul>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% if app.user %}*/
/*                 <li><a href="{{ path('homepage') }}">Mon compte</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('homepage') }}">Se connecter/S'inscrire</a></li>*/
/*                 {% endif %}*/
/* */
/* */
/* */
/*             </ul>*/
/* */
/*         </div><!-- /.navbar-collapse -->*/
/* </nav>*/
/* </div>*/
/* */
