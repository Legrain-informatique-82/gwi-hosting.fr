<?php

/* :forms:login.html.twig */
class __TwigTemplate_c7b82e42c8be75a0d765e8dbb8f75f690b6f44982f9f88eb6d65203c026f8664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":forms:login.html.twig", 1);
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
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <b>GWI</b>Hosting</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 11
            echo "                <div class=\"callout callout-danger\">
                    <h4><i class=\"icon fa fa-warning\"></i> Erreur</h4>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 16
        echo "
            <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check", array());
        echo "\" method=\"POST\" >
                <div class=\"form-group has-feedback\">
                    <label for=\"inputUsernameEmail\">Email : </label>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" required=\"required\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" name=\"_username\" id=\"username\">
                    </div>
                </div>

                <div class=\"form-group has-feedback\">
                    <label for=\"inputPassword\">Mot de passe :</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\"><i class=\"fa fa-lock\"></i></span>
                        <input type=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" id=\"password\">
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xs-7\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                <label for=\"remember_me\">Se Souvenir de moi</label>
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-5\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">
                            Se connecter
                        </button>
                    </div><!-- /.col -->
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-4\">
                        <p class=\"text-left\">
                            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">M'inscrire.</a>
                        </p>
                    </div>
                    <div class=\"col-xs-8\">
                        <p class=\"text-right\">
                            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("password_forgotten");
        echo "\">J'ai oublié mon mot de passe.</a>
                        </p>
                    </div>
                    ";
        // line 67
        echo "                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":forms:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 67,  103 => 57,  95 => 52,  62 => 22,  54 => 17,  51 => 16,  45 => 13,  41 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <b>GWI</b>Hosting</a>*/
/*         </div><!-- /.login-logo -->*/
/*         <div class="login-box-body">*/
/*             {% if error %}*/
/*                 <div class="callout callout-danger">*/
/*                     <h4><i class="icon fa fa-warning"></i> Erreur</h4>*/
/*                     {{ error.message }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path("login_check", {}) }}" method="POST" >*/
/*                 <div class="form-group has-feedback">*/
/*                     <label for="inputUsernameEmail">Email : </label>*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>*/
/*                         <input type="text" required="required" class="form-control" value="{{ last_username }}" name="_username" id="username">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group has-feedback">*/
/*                     <label for="inputPassword">Mot de passe :</label>*/
/*                     <div class="input-group">*/
/*                         <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>*/
/*                         <input type="password" class="form-control" name="_password" required="required" id="password">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-xs-7">*/
/*                         <div class="checkbox icheck">*/
/*                             <label>*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*                                 <label for="remember_me">Se Souvenir de moi</label>*/
/*                             </label>*/
/*                         </div>*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-xs-5">*/
/*                         <button type="submit" class="btn btn-primary btn-block btn-flat">*/
/*                             Se connecter*/
/*                         </button>*/
/*                     </div><!-- /.col -->*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-4">*/
/*                         <p class="text-left">*/
/*                             <a href="{{ path("register") }}">M'inscrire.</a>*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="col-xs-8">*/
/*                         <p class="text-right">*/
/*                             <a href="{{ path("password_forgotten") }}">J'ai oublié mon mot de passe.</a>*/
/*                         </p>*/
/*                     </div>*/
/*                     {#*/
/*                         <div class="col-xs-12">*/
/*                              <p class="text-right">*/
/*                                  <a href="{{ path("password_forgotten") }}">J'ai oublié mon mot de passe.</a>*/
/*                              </p>*/
/*                          </div>*/
/*                          #}*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
