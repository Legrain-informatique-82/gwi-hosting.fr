<?php

/* :Instance:renewInstance.html.twig */
class __TwigTemplate_246e278b24abd301f467be6b4d17cbbadfc2b222e2e8f9e0a6ec05ef3681c42c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Instance:renewInstance.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Instance:renewInstance.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- =============================================== -->
    ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Instance:renewInstance.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Instance:renewInstance.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

        </section>

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Instance:renewInstance.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            <table class=\"table table-striped table-hover table-condensed\">
                <thead>
                <tr>
                    <th>Nom de l'instance</th>
                    <th>Options associées</th>
                    <th>Date de fin</th>
                    <th>Durée</th>
                    <th>Prix sur la période (hors options)</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "instances", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["instField"]) {
            // line 43
            echo "                <tr>
                    <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayInstances"]) ? $context["arrayInstances"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["arrayInstances"]) ? $context["arrayInstances"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "options", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["opt"]) {
                // line 48
                echo "                                <li>";
                echo twig_escape_filter($this->env, $context["opt"], "html", null, true);
                echo "</li>
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                        </ul>
                    </td>
                    <td>

                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["arrayInstances"]) ? $context["arrayInstances"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "date", array()), "date", array()), "d/m/Y"), "html", null, true);
            echo "
                    </td>
                    <td class=\"select\">
                        ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["instField"], 'errors');
            echo "
                        ";
            // line 58
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["instField"], 'widget');
            echo "
                    </td>
                    <td class=\"line_price\" data-ht=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayInstances"]) ? $context["arrayInstances"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "priceHt", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["arrayInstances"]) ? $context["arrayInstances"] : null), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "priceHt", array()) * 12), 2, "common"), "html", null, true);
            echo "€ HT</td>
                </tr>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
                </tbody>
            </table>
            ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "





            </ul>
            ";
        // line 74
        echo "        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    ";
        // line 77
        $this->loadTemplate("footer.html.twig", ":Instance:renewInstance.html.twig", 77)->display($context);
        // line 78
        echo "


</div><!-- ./wrapper -->

";
    }

    public function getTemplateName()
    {
        return ":Instance:renewInstance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 78,  208 => 77,  203 => 74,  193 => 66,  188 => 63,  169 => 60,  164 => 58,  160 => 57,  154 => 54,  148 => 50,  131 => 48,  114 => 47,  108 => 44,  105 => 43,  88 => 42,  71 => 29,  69 => 28,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 {{h1}}*/
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
/*             {% include 'flashMessage.html.twig' %}*/
/*             {{ form_start(form) }}*/
/*             <table class="table table-striped table-hover table-condensed">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Nom de l'instance</th>*/
/*                     <th>Options associées</th>*/
/*                     <th>Date de fin</th>*/
/*                     <th>Durée</th>*/
/*                     <th>Prix sur la période (hors options)</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for instField in form.instances %}*/
/*                 <tr>*/
/*                     <td> {{ arrayInstances[loop.index0].name }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             {%  for opt in arrayInstances[loop.index0].options  %}*/
/*                                 <li>{{ opt }}</li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td>*/
/* */
/*                         {{ arrayInstances[loop.index0].date.date | date('d/m/Y')}}*/
/*                     </td>*/
/*                     <td class="select">*/
/*                         {{ form_errors(instField) }}*/
/*                         {{ form_widget(instField) }}*/
/*                     </td>*/
/*                     <td class="line_price" data-ht="{{ arrayInstances[loop.index0].priceHt }}">{{ (arrayInstances[loop.index0].priceHt*12)|round(2,'common') }}€ HT</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/* */
/*                 </tbody>*/
/*             </table>*/
/*             {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/* */
/*             </ul>*/
/*             {#{% include 'Ndd/Nav/options.html.twig'  with {'active': 'general','ndd':ndd.name, 'type':type,'idagency':idagency,'iduser':iduser} only %}#}*/
/*         </section><!-- /.content -->*/
/*     </div><!-- /.content-wrapper -->*/
/* */
/*     {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* </div><!-- ./wrapper -->*/
/* */
/* {% endblock %}*/
/* */
