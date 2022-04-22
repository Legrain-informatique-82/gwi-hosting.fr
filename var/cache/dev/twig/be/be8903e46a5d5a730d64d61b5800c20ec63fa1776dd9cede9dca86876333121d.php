<?php

/* :forms:register.html.twig */
class __TwigTemplate_b39d9e873276430dba4527700a5798fd4f67b40760bcf5cfbcb5ee7d69f6e110 extends Twig_Template
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
        $__internal_61876beeeda45690e44f6641a481d82b19311452d93a51628046ca1b8f115c3e = $this->env->getExtension("native_profiler");
        $__internal_61876beeeda45690e44f6641a481d82b19311452d93a51628046ca1b8f115c3e->enter($__internal_61876beeeda45690e44f6641a481d82b19311452d93a51628046ca1b8f115c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61876beeeda45690e44f6641a481d82b19311452d93a51628046ca1b8f115c3e->leave($__internal_61876beeeda45690e44f6641a481d82b19311452d93a51628046ca1b8f115c3e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7c4e3f2a7390d0dc809d633f19c77d800b0a42e0db2ae28def7af66b27483e = $this->env->getExtension("native_profiler");
        $__internal_cf7c4e3f2a7390d0dc809d633f19c77d800b0a42e0db2ae28def7af66b27483e->enter($__internal_cf7c4e3f2a7390d0dc809d633f19c77d800b0a42e0db2ae28def7af66b27483e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <b>GWI</b>Hosting</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_cf7c4e3f2a7390d0dc809d633f19c77d800b0a42e0db2ae28def7af66b27483e->leave($__internal_cf7c4e3f2a7390d0dc809d633f19c77d800b0a42e0db2ae28def7af66b27483e_prof);

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
        return array (  61 => 14,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
