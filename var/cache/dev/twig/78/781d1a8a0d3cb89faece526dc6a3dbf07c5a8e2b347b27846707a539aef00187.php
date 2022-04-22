<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_946b0782e88841e230e05d8ca225e263b6594ab16162b78ef22c75412f8c6655 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_d45a0efe4b57a05651ee62bbad585de744f01ae981edd9a7fd96675c695f55b1 = $this->env->getExtension("native_profiler");
        $__internal_d45a0efe4b57a05651ee62bbad585de744f01ae981edd9a7fd96675c695f55b1->enter($__internal_d45a0efe4b57a05651ee62bbad585de744f01ae981edd9a7fd96675c695f55b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d45a0efe4b57a05651ee62bbad585de744f01ae981edd9a7fd96675c695f55b1->leave($__internal_d45a0efe4b57a05651ee62bbad585de744f01ae981edd9a7fd96675c695f55b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f7d16eb849b8f27554d94eee8bca42e092f49e07d812b2f891042c180541125 = $this->env->getExtension("native_profiler");
        $__internal_4f7d16eb849b8f27554d94eee8bca42e092f49e07d812b2f891042c180541125->enter($__internal_4f7d16eb849b8f27554d94eee8bca42e092f49e07d812b2f891042c180541125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f7d16eb849b8f27554d94eee8bca42e092f49e07d812b2f891042c180541125->leave($__internal_4f7d16eb849b8f27554d94eee8bca42e092f49e07d812b2f891042c180541125_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3f45bf6fd8a9f34df3147002e6ec02bc9df11e33a13d5b9e4f38ad1c5752d68 = $this->env->getExtension("native_profiler");
        $__internal_d3f45bf6fd8a9f34df3147002e6ec02bc9df11e33a13d5b9e4f38ad1c5752d68->enter($__internal_d3f45bf6fd8a9f34df3147002e6ec02bc9df11e33a13d5b9e4f38ad1c5752d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d3f45bf6fd8a9f34df3147002e6ec02bc9df11e33a13d5b9e4f38ad1c5752d68->leave($__internal_d3f45bf6fd8a9f34df3147002e6ec02bc9df11e33a13d5b9e4f38ad1c5752d68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
