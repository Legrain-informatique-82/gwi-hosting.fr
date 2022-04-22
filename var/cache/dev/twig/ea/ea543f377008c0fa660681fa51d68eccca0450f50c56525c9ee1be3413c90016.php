<?php

/* :forms:login.html.twig */
class __TwigTemplate_04672034e8e46aee771695c8f3415e0536cff90c0d2bbd920e1a1d460b28a4d6 extends Twig_Template
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
        $__internal_d4d58ea3acb22caeebee05a2f0325ec9c4aa4a965062ce2f4c6f477519adfa69 = $this->env->getExtension("native_profiler");
        $__internal_d4d58ea3acb22caeebee05a2f0325ec9c4aa4a965062ce2f4c6f477519adfa69->enter($__internal_d4d58ea3acb22caeebee05a2f0325ec9c4aa4a965062ce2f4c6f477519adfa69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d58ea3acb22caeebee05a2f0325ec9c4aa4a965062ce2f4c6f477519adfa69->leave($__internal_d4d58ea3acb22caeebee05a2f0325ec9c4aa4a965062ce2f4c6f477519adfa69_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc73eb4e730b07bff1b85dc868b022b79e5284e905d17c4ed879599c6820af0f = $this->env->getExtension("native_profiler");
        $__internal_cc73eb4e730b07bff1b85dc868b022b79e5284e905d17c4ed879599c6820af0f->enter($__internal_cc73eb4e730b07bff1b85dc868b022b79e5284e905d17c4ed879599c6820af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <b>GWI</b>Hosting</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "                <div class=\"callout callout-danger\">
                    <h4><i class=\"icon fa fa-warning\"></i> Erreur</h4>
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_cc73eb4e730b07bff1b85dc868b022b79e5284e905d17c4ed879599c6820af0f->leave($__internal_cc73eb4e730b07bff1b85dc868b022b79e5284e905d17c4ed879599c6820af0f_prof);

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
        return array (  118 => 67,  112 => 57,  104 => 52,  71 => 22,  63 => 17,  60 => 16,  54 => 13,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
