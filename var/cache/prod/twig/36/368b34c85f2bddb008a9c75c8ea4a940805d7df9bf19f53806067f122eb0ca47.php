<?php

/* ::breadcrumb.html.twig */
class __TwigTemplate_0e86ca0398f0e4b0bbddef267d789401ed13987f0da965bf6465b8abe43bcde4 extends Twig_Template
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
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 5
                echo "            <li class=\"active\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 7
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["link"], "url", array()), $this->getAttribute($context["link"], "param", array())), "html", null, true);
                if ($this->getAttribute($context["link"], "anchor", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "anchor", array()), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 9
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ol>";
    }

    public function getTemplateName()
    {
        return "::breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  63 => 9,  52 => 7,  46 => 5,  43 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ol class="breadcrumb">*/
/*     <li><a href="{{  path('homepage' )}}"><i class="fa fa-dashboard"></i> Accueil</a></li>*/
/*     {%  for link in breadcrumb %}*/
/*         {% if loop.last %}*/
/*             <li class="active">{{ link.label }}</li>*/
/*         {% else %}*/
/*             <li><a href="{{ path(link.url,link.param) }}{% if link.anchor is defined  %}{{ link.anchor }}{% endif %}">{{ link.label }}</a></li>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* </ol>*/
