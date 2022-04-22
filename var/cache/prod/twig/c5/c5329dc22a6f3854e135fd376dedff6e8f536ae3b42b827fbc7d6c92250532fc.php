<?php

/* :forms:register.html.twig */
class __TwigTemplate_6f06f1a652f9695026c6e00e07c3735f78cedd09d3792bdd4e74f9254fdd3f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":forms:register.html.twig", 1);
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
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            <p>
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"btn btn-default btn-block btn-flat\">Retour à l'écran de connexion</a>
            </p>


        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return ":forms:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  47 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
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
