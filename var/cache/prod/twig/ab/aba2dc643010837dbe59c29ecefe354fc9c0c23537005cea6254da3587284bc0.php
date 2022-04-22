<?php

/* ::testfrm.html.twig */
class __TwigTemplate_c87245b4f770a852b916e3080f115c35c513a06e68f85784136453846cda8209 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        return array (  70 => 30,  62 => 28,  55 => 24,  51 => 23,  43 => 18,  39 => 16,  35 => 15,  19 => 1,);
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
