<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d86852f4083fbff96f0f0dbee66c4e1e7646a8e4ecb3ab7bfcc53910e78bbf97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_282b6f74f7c44307afb143ea6d1a65ed862935ea6d918487b6307d7e236f9155 = $this->env->getExtension("native_profiler");
        $__internal_282b6f74f7c44307afb143ea6d1a65ed862935ea6d918487b6307d7e236f9155->enter($__internal_282b6f74f7c44307afb143ea6d1a65ed862935ea6d918487b6307d7e236f9155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_282b6f74f7c44307afb143ea6d1a65ed862935ea6d918487b6307d7e236f9155->leave($__internal_282b6f74f7c44307afb143ea6d1a65ed862935ea6d918487b6307d7e236f9155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc268f80a839c8cca4b9ef6e919fab5b34bc23b32a1265ee69cc2bf1cd04fdae = $this->env->getExtension("native_profiler");
        $__internal_dc268f80a839c8cca4b9ef6e919fab5b34bc23b32a1265ee69cc2bf1cd04fdae->enter($__internal_dc268f80a839c8cca4b9ef6e919fab5b34bc23b32a1265ee69cc2bf1cd04fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc268f80a839c8cca4b9ef6e919fab5b34bc23b32a1265ee69cc2bf1cd04fdae->leave($__internal_dc268f80a839c8cca4b9ef6e919fab5b34bc23b32a1265ee69cc2bf1cd04fdae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffd8df8f1fa39101da10179482e1dd428ce0b272c00daa080b23d70b1c10430e = $this->env->getExtension("native_profiler");
        $__internal_ffd8df8f1fa39101da10179482e1dd428ce0b272c00daa080b23d70b1c10430e->enter($__internal_ffd8df8f1fa39101da10179482e1dd428ce0b272c00daa080b23d70b1c10430e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ffd8df8f1fa39101da10179482e1dd428ce0b272c00daa080b23d70b1c10430e->leave($__internal_ffd8df8f1fa39101da10179482e1dd428ce0b272c00daa080b23d70b1c10430e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ac600e79506411e64ff009aa0d35f594afe1ea245674526aa8b9d7614c76047 = $this->env->getExtension("native_profiler");
        $__internal_4ac600e79506411e64ff009aa0d35f594afe1ea245674526aa8b9d7614c76047->enter($__internal_4ac600e79506411e64ff009aa0d35f594afe1ea245674526aa8b9d7614c76047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ac600e79506411e64ff009aa0d35f594afe1ea245674526aa8b9d7614c76047->leave($__internal_4ac600e79506411e64ff009aa0d35f594afe1ea245674526aa8b9d7614c76047_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
