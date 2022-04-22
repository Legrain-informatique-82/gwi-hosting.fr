<?php

/* :forms:password_forgotten.html.twig */
class __TwigTemplate_6c7591f2a158cdddba73e950291e36625c6c57b84689f0e07843645e906f5842 extends Twig_Template
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
        $__internal_ed8a4b489bfb0c6a9fbf8a1a79e91a1a3983ed492dc6a90ad48b11eb2dd4fb80 = $this->env->getExtension("native_profiler");
        $__internal_ed8a4b489bfb0c6a9fbf8a1a79e91a1a3983ed492dc6a90ad48b11eb2dd4fb80->enter($__internal_ed8a4b489bfb0c6a9fbf8a1a79e91a1a3983ed492dc6a90ad48b11eb2dd4fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:password_forgotten.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8a4b489bfb0c6a9fbf8a1a79e91a1a3983ed492dc6a90ad48b11eb2dd4fb80->leave($__internal_ed8a4b489bfb0c6a9fbf8a1a79e91a1a3983ed492dc6a90ad48b11eb2dd4fb80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba4011dfa8a8980640f59a5e2383bed4dec1ce6c30c8079b8915dc4b60c209e4 = $this->env->getExtension("native_profiler");
        $__internal_ba4011dfa8a8980640f59a5e2383bed4dec1ce6c30c8079b8915dc4b60c209e4->enter($__internal_ba4011dfa8a8980640f59a5e2383bed4dec1ce6c30c8079b8915dc4b60c209e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div>
                <p>
                    Si vous avez oublié votre identifiant, merci de nous appeler.
                </p>
            </div>
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_ba4011dfa8a8980640f59a5e2383bed4dec1ce6c30c8079b8915dc4b60c209e4->leave($__internal_ba4011dfa8a8980640f59a5e2383bed4dec1ce6c30c8079b8915dc4b60c209e4_prof);

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
        return array (  66 => 19,  61 => 17,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
