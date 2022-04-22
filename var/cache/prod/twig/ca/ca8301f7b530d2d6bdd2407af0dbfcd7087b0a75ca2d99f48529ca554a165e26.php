<?php

/* ::header.html.twig */
class __TwigTemplate_59de9db38f8217d923254181b494255512f9020ae16a8712da083dbe35d9cbf8 extends Twig_Template
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
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>GWI</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>GWI</b>Hosting</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </a>
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">


                ";
        // line 22
        if ( !array_key_exists("disableMenu", $context)) {
            // line 23
            echo "
                    ";
            // line 24
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Cart:getCart", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))));
            echo "

                    ";
            // line 26
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccountBalance:getAccountBalance", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null))));
            echo "
                ";
        }
        // line 28
        echo "
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-user\"></i>
                        <span class=\"hidden-xs\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "user", array()), "email", array()), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <i class=\"fa fa-user fa-3x\"></i>
                        </li>
                        ";
        // line 54
        echo "                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            ";
        // line 56
        if ( !array_key_exists("disableMenu", $context)) {
            // line 57
            echo "
                                <div class=\"pull-left\">
                                    <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("myprofile");
            echo "\" class=\"btn btn-default\">
                                        Mon profil
                                    </a>
                                    ";
            // line 62
            if ($this->env->getExtension('security')->isGranted("ROLE_AGENCE")) {
                // line 63
                echo "                                        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("myagency");
                echo "\" class=\"btn btn-default\">
                                            Mon agence
                                        </a>
                                    ";
            }
            // line 67
            echo "                                </div>
                            ";
        }
        // line 69
        echo "                            <div class=\"pull-right\">
                                <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"btn btn-primary btn-flat\" title=\"Se déconnecter\">
                                    <i class=\"fa fa-power-off fa-2x\"></i>

                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                ";
        // line 84
        echo "            </ul>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 84,  110 => 70,  107 => 69,  103 => 67,  95 => 63,  93 => 62,  87 => 59,  83 => 57,  81 => 56,  77 => 54,  67 => 33,  60 => 28,  55 => 26,  50 => 24,  47 => 23,  45 => 22,  23 => 3,  19 => 1,);
    }
}
/* <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="{{ path('homepage') }}" class="logo">*/
/*         <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*         <span class="logo-mini"><b>GWI</b></span>*/
/*         <!-- logo for regular state and mobile devices -->*/
/*         <span class="logo-lg"><b>GWI</b>Hosting</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*         <!-- Sidebar toggle button-->*/
/*         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </a>*/
/*         <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/* */
/* */
/*                 {% if disableMenu is not defined %}*/
/* */
/*                     {{ render(controller("AppBundle:Cart:getCart", {'iduser': iduser})) }}*/
/* */
/*                     {{ render(controller("AppBundle:AccountBalance:getAccountBalance", {'iduser': iduser})) }}*/
/*                 {% endif %}*/
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
/*                 {#*/
/*                 <!-- Control Sidebar Toggle Button -->*/
/*                 <li>*/
/*                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                 </li>*/
/*                 #}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/
