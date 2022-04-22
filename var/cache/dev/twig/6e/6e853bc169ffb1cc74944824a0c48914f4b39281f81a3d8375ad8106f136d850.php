<?php

/* ::flashMessage.html.twig */
class __TwigTemplate_d36469aba9067726c07e8e9ea96427e99155565b512423e2680753f3bfa28253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba90867b07097de5463b973ce83e841a800b0394ebcc88416c7cd0abb79c5be2 = $this->env->getExtension("native_profiler");
        $__internal_ba90867b07097de5463b973ce83e841a800b0394ebcc88416c7cd0abb79c5be2->enter($__internal_ba90867b07097de5463b973ce83e841a800b0394ebcc88416c7cd0abb79c5be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::flashMessage.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "
    <div class=\"alert alert-warning alert-dismissible fade in\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
        ";
            // line 5
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ba90867b07097de5463b973ce83e841a800b0394ebcc88416c7cd0abb79c5be2->leave($__internal_ba90867b07097de5463b973ce83e841a800b0394ebcc88416c7cd0abb79c5be2_prof);

    }

    public function getTemplateName()
    {
        return "::flashMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('notice') %}*/
/* */
/*     <div class="alert alert-warning alert-dismissible fade in" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* */
