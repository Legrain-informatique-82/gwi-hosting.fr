<?php

/* :default:testform.html.twig */
class __TwigTemplate_d639273fcfdfe94dc3e20b4bca2ed459962da1389415c320cda45ada1badc324 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <p>Frm</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
        echo "</p>


    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<p>
    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
</p>
    <p>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "
    </p>

    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
";
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
        return array (  62 => 18,  56 => 15,  50 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
