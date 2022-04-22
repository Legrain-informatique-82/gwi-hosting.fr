<?php

/* :Ndd:renewNdd.html.twig */
class __TwigTemplate_97cecc670667ae2c86b5a01e554b72bedd7577c907aabcf3e205b2dee5860121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Ndd:renewNdd.html.twig", 1);
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
        $__internal_087f6950ad3f4446eff8303695d32b789b04c5522f7f581ad89ec80867f88d23 = $this->env->getExtension("native_profiler");
        $__internal_087f6950ad3f4446eff8303695d32b789b04c5522f7f581ad89ec80867f88d23->enter($__internal_087f6950ad3f4446eff8303695d32b789b04c5522f7f581ad89ec80867f88d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ndd:renewNdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_087f6950ad3f4446eff8303695d32b789b04c5522f7f581ad89ec80867f88d23->leave($__internal_087f6950ad3f4446eff8303695d32b789b04c5522f7f581ad89ec80867f88d23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acf9aee846d6f8bdb4a84d0e65902fa0d372e7e311e65e1a76cf20ad7f02ab42 = $this->env->getExtension("native_profiler");
        $__internal_acf9aee846d6f8bdb4a84d0e65902fa0d372e7e311e65e1a76cf20ad7f02ab42->enter($__internal_acf9aee846d6f8bdb4a84d0e65902fa0d372e7e311e65e1a76cf20ad7f02ab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!-- Site wrapper -->
<div class=\"wrapper\">

    ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Ndd:renewNdd.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- =============================================== -->
    ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Ndd:renewNdd.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Ndd:renewNdd.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

        </section>

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Ndd:renewNdd.html.twig", 28)->display($context);
        // line 29
        echo "

            <p class=\"well\">
                Pour supprimer une option, merci de vous rendre dans la fiche du domaine
            </p>

            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <table class=\"table table-striped table-hover table-condensed\">
                <thead>
                <tr>
                    <th>Nom de domaine</th>
                    <th>Options associées</th>
                    <th>Date de fin</th>
                    <th>Durée</th>
                    <th>Prix sur la période hors options</th>
                </tr>
                </thead>
                <tbody>

                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ndds", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["nddField"]) {
            // line 49
            echo "                <tr>
                    <td> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayNdd"]) ? $context["arrayNdd"] : $this->getContext($context, "arrayNdd")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["arrayNdd"]) ? $context["arrayNdd"] : $this->getContext($context, "arrayNdd")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "options", array()));
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
                // line 54
                echo "                            <li>";
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
            // line 56
            echo "                        </ul>
                    </td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayNdd"]) ? $context["arrayNdd"] : $this->getContext($context, "arrayNdd")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td class=\"select\">
                        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nddField"], 'errors');
            echo "
                        ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nddField"], 'widget');
            echo "
                    </td>
                    <td class=\"line_price\" data-ht=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arrayNdd"]) ? $context["arrayNdd"] : $this->getContext($context, "arrayNdd")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "priceHt", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute($this->getAttribute((isset($context["arrayNdd"]) ? $context["arrayNdd"] : $this->getContext($context, "arrayNdd")), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "priceHt", array()) * 12), 2, "common"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nddField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                </tbody>
            </table>
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "





            </ul>
            ";
        // line 77
        echo "        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    ";
        // line 80
        $this->loadTemplate("footer.html.twig", ":Ndd:renewNdd.html.twig", 80)->display($context);
        // line 81
        echo "


</div><!-- ./wrapper -->

";
        
        $__internal_acf9aee846d6f8bdb4a84d0e65902fa0d372e7e311e65e1a76cf20ad7f02ab42->leave($__internal_acf9aee846d6f8bdb4a84d0e65902fa0d372e7e311e65e1a76cf20ad7f02ab42_prof);

    }

    public function getTemplateName()
    {
        return ":Ndd:renewNdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 81,  221 => 80,  216 => 77,  206 => 69,  201 => 66,  182 => 63,  177 => 61,  173 => 60,  168 => 58,  164 => 56,  147 => 54,  130 => 53,  124 => 50,  121 => 49,  104 => 48,  88 => 35,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/*             <p class="well">*/
/*                 Pour supprimer une option, merci de vous rendre dans la fiche du domaine*/
/*             </p>*/
/* */
/*             {{ form_start(form) }}*/
/*             <table class="table table-striped table-hover table-condensed">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Nom de domaine</th>*/
/*                     <th>Options associées</th>*/
/*                     <th>Date de fin</th>*/
/*                     <th>Durée</th>*/
/*                     <th>Prix sur la période hors options</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/* */
/*                 {% for nddField in form.ndds %}*/
/*                 <tr>*/
/*                     <td> {{ arrayNdd[loop.index0].name }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                         {%  for opt in arrayNdd[loop.index0].options  %}*/
/*                             <li>{{ opt }}</li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td>{{ arrayNdd[loop.index0].date | date('d/m/Y')}}</td>*/
/*                     <td class="select">*/
/*                         {{ form_errors(nddField) }}*/
/*                         {{ form_widget(nddField) }}*/
/*                     </td>*/
/*                     <td class="line_price" data-ht="{{ arrayNdd[loop.index0].priceHt }}">{{ (arrayNdd[loop.index0].priceHt*12)|round(2,'common') }}€ HT</td>*/
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
