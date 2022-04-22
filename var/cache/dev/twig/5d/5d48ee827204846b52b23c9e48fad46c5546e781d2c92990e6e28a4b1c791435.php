<?php

/* :default:testform.html.twig */
class __TwigTemplate_011044e1b55da675937829d3ab86a597df57d21f71dd1d79950b261ed32a6c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:testform.html.twig", 1);
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
        $__internal_b20d04f2ef81bc65bb05c2ff9ab6e2921265e3cc66287db5c33f48ebd4833399 = $this->env->getExtension("native_profiler");
        $__internal_b20d04f2ef81bc65bb05c2ff9ab6e2921265e3cc66287db5c33f48ebd4833399->enter($__internal_b20d04f2ef81bc65bb05c2ff9ab6e2921265e3cc66287db5c33f48ebd4833399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:testform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b20d04f2ef81bc65bb05c2ff9ab6e2921265e3cc66287db5c33f48ebd4833399->leave($__internal_b20d04f2ef81bc65bb05c2ff9ab6e2921265e3cc66287db5c33f48ebd4833399_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d86a2e53a223dec49d4afd2ea3a10283c295117a66142edf4627854e60262956 = $this->env->getExtension("native_profiler");
        $__internal_d86a2e53a223dec49d4afd2ea3a10283c295117a66142edf4627854e60262956->enter($__internal_d86a2e53a223dec49d4afd2ea3a10283c295117a66142edf4627854e60262956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <p>Frm</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</p>


    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<p>
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
</p>
    <p>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "
    </p>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_d86a2e53a223dec49d4afd2ea3a10283c295117a66142edf4627854e60262956->leave($__internal_d86a2e53a223dec49d4afd2ea3a10283c295117a66142edf4627854e60262956_prof);

    }

    public function getTemplateName()
    {
        return ":default:testform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  65 => 15,  59 => 12,  54 => 10,  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <p>Frm</p>*/
/*     <p>{{ result }}</p>*/
/* */
/* */
/*     {{ form_start(form) }}*/
/*     {{ form_errors(form) }}*/
/* <p>*/
/*     {{ form_row(form.name) }}*/
/* </p>*/
/*     <p>*/
/*     {{ form_row(form.save) }}*/
/*     </p>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
