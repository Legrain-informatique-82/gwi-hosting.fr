<?php

/* :forms:password_forgotten.html.twig */
class __TwigTemplate_fcac78a58f25417f8c1da38adf6305d5b5a12258fd6ff8e48c90b9f7c717a28c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":forms:password_forgotten.html.twig", 1);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <div>
                <p>
                    Si vous avez oublié votre identifiant, merci de nous appeler.
                </p>
            </div>
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            <p>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-default btn-block btn-flat\">Retour à l'écran de connexion</a>
            </p>


        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":forms:password_forgotten.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  52 => 17,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
/*             {{ form_start(form) }}*/
/*             <div>*/
/*                 <p>*/
/*                     Si vous avez oublié votre identifiant, merci de nous appeler.*/
/*                 </p>*/
/*             </div>*/
/*             {{ form_errors(form) }}*/
/*             {{ form_end(form) }}*/
/*             <p>*/
/*                 <a href="{{ path("homepage") }}" class="btn btn-default btn-block btn-flat">Retour à l'écran de connexion</a>*/
/*             </p>*/
/* */
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
