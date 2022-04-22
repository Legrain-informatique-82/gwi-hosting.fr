<?php

/* :Interventions/List:tags.html.twig */
class __TwigTemplate_5fa5eb160191d819673f53d5191a1de47b180c7ff549be9418fbed08ca47e849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Interventions/List:tags.html.twig", 1);
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
<!-- Site wrapper -->
<div class=\"wrapper\">

    ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Interventions/List:tags.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- =============================================== -->
    ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Interventions/List:tags.html.twig", 10)->display($context);
        // line 11
        echo "    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "

            </h1>

            ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Interventions/List:tags.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

        </section>

        <!-- Main content -->
        <section class=\"content\">

            ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Interventions/List:tags.html.twig", 29)->display($context);
        // line 30
        echo "



            ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "



            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">

                <thead>
<tr>
    <th>Tag</th>
    <th>Supprimer</th>

</tr>
                </thead>
                <tbody>

                ";
        // line 52
        if ( !(null === (isset($context["tags"]) ? $context["tags"] : null))) {
            // line 53
            echo "
                    ";
            // line 54
            if ( !$this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), "item", array(), "any", true, true)) {
                // line 55
                echo "                            ";
                $context["ts"] = (isset($context["tags"]) ? $context["tags"] : null);
                // line 56
                echo "                    ";
            } else {
                // line 57
                echo "                            ";
                $context["ts"] = $this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), "item", array());
                // line 58
                echo "        
                    ";
            }
            // line 60
            echo "    
                    ";
            // line 61
            if (twig_test_iterable((isset($context["ts"]) ? $context["ts"] : null))) {
                // line 62
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ts"]) ? $context["ts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 63
                    echo "                                <tr>
                                    <td>";
                    // line 64
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo " </td>
                                    <td><a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("del_tag_intervention", array("tag" => $context["tag"], "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null))), "html", null, true);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
    
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                    ";
            } else {
                // line 70
                echo "                            ";
                // line 71
                echo "                                <tr>
                                    <td>";
                // line 72
                echo twig_escape_filter($this->env, (isset($context["ts"]) ? $context["ts"] : null), "html", null, true);
                echo " </td>
                                    <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("del_tag_intervention", array("tag" => (isset($context["ts"]) ? $context["ts"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "idagency" => (isset($context["idagency"]) ? $context["idagency"] : null))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-trash\"></i></a></td>
    
                                </tr>
                                
                    ";
            }
            // line 78
            echo "                    
                ";
        }
        // line 80
        echo "                
                </tbody>
            </table>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    ";
        // line 87
        $this->loadTemplate("footer.html.twig", ":Interventions/List:tags.html.twig", 87)->display($context);
        // line 88
        echo "



</div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Interventions/List:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 88,  185 => 87,  176 => 80,  172 => 78,  164 => 73,  160 => 72,  157 => 71,  155 => 70,  152 => 69,  142 => 65,  138 => 64,  135 => 63,  130 => 62,  128 => 61,  125 => 60,  121 => 58,  118 => 57,  115 => 56,  112 => 55,  110 => 54,  107 => 53,  105 => 52,  89 => 39,  82 => 35,  78 => 34,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/* */
/*             {{ form_start(form) }}*/
/*             {{ form_errors(form) }}*/
/* */
/* */
/* */
/*             {{ form_end(form) }}*/
/* */
/*             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/* */
/*                 <thead>*/
/* <tr>*/
/*     <th>Tag</th>*/
/*     <th>Supprimer</th>*/
/* */
/* </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {%  if tags is not null %}*/
/* */
/*                     {% if tags.item  is not defined %}*/
/*                             {%  set ts = tags  %}*/
/*                     {% else %}*/
/*                             {%  set ts = tags.item   %}*/
/*         */
/*                     {% endif %}*/
/*     */
/*                     {% if ts is iterable %}*/
/*                             {% for tag in  ts %}*/
/*                                 <tr>*/
/*                                     <td>{{ tag }} </td>*/
/*                                     <td><a href="{{ path('del_tag_intervention',{'tag':tag,'iduser':iduser,'idagency':idagency}) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>*/
/*     */
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                     {% else %}*/
/*                             {# ts is probably a string #}*/
/*                                 <tr>*/
/*                                     <td>{{ ts }} </td>*/
/*                                     <td><a href="{{ path('del_tag_intervention',{'tag':ts,'iduser':iduser,'idagency':idagency}) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>*/
/*     */
/*                                 </tr>*/
/*                                 */
/*                     {% endif %}*/
/*                     */
/*                 {% endif %}*/
/*                 */
/*                 </tbody>*/
/*             </table>*/
/* */
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
