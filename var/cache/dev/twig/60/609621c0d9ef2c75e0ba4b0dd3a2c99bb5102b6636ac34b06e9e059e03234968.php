<?php

/* ::testfrm.html.twig */
class __TwigTemplate_218e53b51971663905a5698b5d713734ba437db62d629bfe4c3a41b360369c11 extends Twig_Template
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
        $__internal_4f389164121fa246596992ea83b83871e05797c89c343e9b035ebfd5d51950d0 = $this->env->getExtension("native_profiler");
        $__internal_4f389164121fa246596992ea83b83871e05797c89c343e9b035ebfd5d51950d0->enter($__internal_4f389164121fa246596992ea83b83871e05797c89c343e9b035ebfd5d51950d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::testfrm.html.twig"));

        // line 1
        echo "
<table border=\"1\">
    <thead>
    <tr>
        <th>Renouveler ?</th>
        <th>Nom de domaine</th>
        <th>Date expiration</th>
        <th>Durée</th>
        <th>Nouvelle DAte</th>
    </tr>
    </thead>
    
    <tbody>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["sform"]) {
            // line 16
            echo "

        ";
            // line 18
            echo             $this->env->getExtension('form')->renderer->renderBlock($context["sform"], 'form_start');
            echo "


        <tr>
            <td></td>
            <td>";
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sform"], 'row');
            echo "</td>
            <td>";
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["sform"], 'row');
            echo "</td>
            <td></td>
            <td></td>
        </tr>
        ";
            // line 28
            echo             $this->env->getExtension('form')->renderer->renderBlock($context["sform"], 'form_end');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    
    
    </tbody>
</table>








";
        
        $__internal_4f389164121fa246596992ea83b83871e05797c89c343e9b035ebfd5d51950d0->leave($__internal_4f389164121fa246596992ea83b83871e05797c89c343e9b035ebfd5d51950d0_prof);

    }

    public function getTemplateName()
    {
        return "::testfrm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 30,  65 => 28,  58 => 24,  54 => 23,  46 => 18,  42 => 16,  38 => 15,  22 => 1,);
    }
}
/* */
/* <table border="1">*/
/*     <thead>*/
/*     <tr>*/
/*         <th>Renouveler ?</th>*/
/*         <th>Nom de domaine</th>*/
/*         <th>Date expiration</th>*/
/*         <th>Durée</th>*/
/*         <th>Nouvelle DAte</th>*/
/*     </tr>*/
/*     </thead>*/
/*     */
/*     <tbody>*/
/* */
/*     {% for sform in form %}*/
/* */
/* */
/*         {{ form_start(sform) }}*/
/* */
/* */
/*         <tr>*/
/*             <td></td>*/
/*             <td>{{ form_row(sform) }}</td>*/
/*             <td>{{ form_row(sform) }}</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*         {{ form_end(sform) }}*/
/*     {% endfor %}*/
/* */
/*     */
/*     */
/*     </tbody>*/
/* </table>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
