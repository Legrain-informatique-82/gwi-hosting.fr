<?php

/* ::header.html.twig */
class __TwigTemplate_a6a725a68b3eab3ec2b3a02d152be6187d5c64067272a48fe578ba62e4b1f42e extends Twig_Template
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
        $__internal_2e80edf52639667e3ebb8e61d557a1ae0b3fd49a3f2b0ab3504edcab0934b8ec = $this->env->getExtension("native_profiler");
        $__internal_2e80edf52639667e3ebb8e61d557a1ae0b3fd49a3f2b0ab3504edcab0934b8ec->enter($__internal_2e80edf52639667e3ebb8e61d557a1ae0b3fd49a3f2b0ab3504edcab0934b8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Cart:getCart", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))));
            echo "

                    ";
            // line 26
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:AccountBalance:getAccountBalance", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")))));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "user", array()), "email", array()), "html", null, true);
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
        
        $__internal_2e80edf52639667e3ebb8e61d557a1ae0b3fd49a3f2b0ab3504edcab0934b8ec->leave($__internal_2e80edf52639667e3ebb8e61d557a1ae0b3fd49a3f2b0ab3504edcab0934b8ec_prof);

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
        return array (  124 => 84,  113 => 70,  110 => 69,  106 => 67,  98 => 63,  96 => 62,  90 => 59,  86 => 57,  84 => 56,  80 => 54,  70 => 33,  63 => 28,  58 => 26,  53 => 24,  50 => 23,  48 => 22,  26 => 3,  22 => 1,);
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
