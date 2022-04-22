<?php

/* :Interventions/List:listComments.html.twig */
class __TwigTemplate_8df5c9b03aa01568f836ee0156bbe072b33ded5cee011ded74c26075b473282a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Interventions/List:listComments.html.twig", 1);
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
        $__internal_09304ad59268af4967e374694bec4172270daa3bfbf25ce3a025d6f8de8b895e = $this->env->getExtension("native_profiler");
        $__internal_09304ad59268af4967e374694bec4172270daa3bfbf25ce3a025d6f8de8b895e->enter($__internal_09304ad59268af4967e374694bec4172270daa3bfbf25ce3a025d6f8de8b895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Interventions/List:listComments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09304ad59268af4967e374694bec4172270daa3bfbf25ce3a025d6f8de8b895e->leave($__internal_09304ad59268af4967e374694bec4172270daa3bfbf25ce3a025d6f8de8b895e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58d3f24d53ef9ede4996f15edbe93fe05a749aab5fcdf595818c02d8fcd33a42 = $this->env->getExtension("native_profiler");
        $__internal_58d3f24d53ef9ede4996f15edbe93fe05a749aab5fcdf595818c02d8fcd33a42->enter($__internal_58d3f24d53ef9ede4996f15edbe93fe05a749aab5fcdf595818c02d8fcd33a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Site wrapper -->
<div class=\"wrapper\">

    ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Interventions/List:listComments.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- =============================================== -->
    ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Interventions/List:listComments.html.twig", 10)->display($context);
        // line 11
        echo "    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "

            </h1>

            ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Interventions/List:listComments.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

        </section>

        <!-- Main content -->
        <section class=\"content\">

            ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Interventions/List:listComments.html.twig", 29)->display($context);
        // line 30
        echo "

            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 33
            echo "                <div class=\"box box-default box-solid\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Le ";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["d"], "time", array()), "d/m/Y à H:i"), "html", null, true);
            echo "</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "text", array()), "html", null, true);
            echo "
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    ";
        // line 45
        $this->loadTemplate("footer.html.twig", ":Interventions/List:listComments.html.twig", 45)->display($context);
        // line 46
        echo "



</div><!-- ./wrapper -->
";
        
        $__internal_58d3f24d53ef9ede4996f15edbe93fe05a749aab5fcdf595818c02d8fcd33a42->leave($__internal_58d3f24d53ef9ede4996f15edbe93fe05a749aab5fcdf595818c02d8fcd33a42_prof);

    }

    public function getTemplateName()
    {
        return ":Interventions/List:listComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  114 => 45,  109 => 42,  99 => 38,  93 => 35,  89 => 33,  85 => 32,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <!-- Site wrapper -->*/
/* <div class="wrapper">*/
/* */
/*     {% include 'header.html.twig' %}*/
/*     <!-- =============================================== -->*/
/*     {% include 'sidebar.html.twig' %}*/
/*     <!-- =============================================== -->*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 {{ h1 }}*/
/* */
/*             </h1>*/
/* */
/*             {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/* */
/*             {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*             {% for d in details %}*/
/*                 <div class="box box-default box-solid">*/
/*                     <div class="box-header">*/
/*                         <h3 class="box-title">Le {{ d.time | date('d/m/Y \à H:i') }}</h3>*/
/*                     </div>*/
/*                     <div class="box-body">*/
/*                         {{ d.text }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </section><!-- /.content -->*/
/*     </div><!-- /.content-wrapper -->*/
/* */
/*     {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/* </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
