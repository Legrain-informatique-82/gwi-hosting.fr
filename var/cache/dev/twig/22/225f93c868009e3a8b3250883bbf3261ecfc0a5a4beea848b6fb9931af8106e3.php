<?php

/* :Changelog:detail.html.twig */
class __TwigTemplate_9a11e5f3340fb80f04bdc68ba574c1d7169f4c57b792aaa7f7adaf06a657ea3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Changelog:detail.html.twig", 1);
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
        $__internal_84b683f83d9b850405172714020147537c2da7eb45763db96de63b02fb48d113 = $this->env->getExtension("native_profiler");
        $__internal_84b683f83d9b850405172714020147537c2da7eb45763db96de63b02fb48d113->enter($__internal_84b683f83d9b850405172714020147537c2da7eb45763db96de63b02fb48d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Changelog:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84b683f83d9b850405172714020147537c2da7eb45763db96de63b02fb48d113->leave($__internal_84b683f83d9b850405172714020147537c2da7eb45763db96de63b02fb48d113_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a89a077c4fbbc37156de025d6c04ef4041159dd61cf8081553c549f3165f4505 = $this->env->getExtension("native_profiler");
        $__internal_a89a077c4fbbc37156de025d6c04ef4041159dd61cf8081553c549f3165f4505->enter($__internal_a89a077c4fbbc37156de025d6c04ef4041159dd61cf8081553c549f3165f4505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Changelog:detail.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Changelog:detail.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
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
        $this->loadTemplate("breadcrumb.html.twig", ":Changelog:detail.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Changelog:detail.html.twig", 29)->display($context);
        // line 30
        echo "
                <div id=\"tabs-with-hash\" class=\"nav nav-tabs nav-justified\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 33
            echo "                        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 34
                echo "                            <ul>
                        ";
            }
            // line 36
            echo "                        <li><a href=\"#tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</a></li>
                        ";
            // line 37
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 38
                echo "                            </ul>
                        ";
            }
            // line 40
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 42
            echo "                        <div id=\"tab-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">
                            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\" data-orderfirstcol=\"desk\">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Label</th>
                                    <th>Détail</th>
                                    <th>Type</th>
                                    <th>Version</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 55
                echo "                                    <tr>
                                        <td data-order=\"";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "Ymd"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 58
                echo $this->getAttribute($context["article"], "content", array());
                echo "</td>
                                        <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "type", array()), "html", null, true);
                echo "</td>
                                        <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "version", array()), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                                </tbody>
                            </table>

                        </div>
";
            // line 102
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </div><!-- end #tabs -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 107
        $this->loadTemplate("footer.html.twig", ":Changelog:detail.html.twig", 107)->display($context);
        // line 108
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_a89a077c4fbbc37156de025d6c04ef4041159dd61cf8081553c549f3165f4505->leave($__internal_a89a077c4fbbc37156de025d6c04ef4041159dd61cf8081553c549f3165f4505_prof);

    }

    public function getTemplateName()
    {
        return ":Changelog:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 108,  209 => 107,  203 => 103,  197 => 102,  191 => 63,  182 => 60,  178 => 59,  174 => 58,  170 => 57,  164 => 56,  161 => 55,  157 => 54,  141 => 42,  136 => 41,  122 => 40,  118 => 38,  116 => 37,  109 => 36,  105 => 34,  102 => 33,  85 => 32,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Site wrapper -->*/
/*     <div class="wrapper">*/
/* */
/*         {% include 'header.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         {% include 'sidebar.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*             <!-- Content Header (Page header) -->*/
/*             <section class="content-header">*/
/*                 <h1>*/
/*                     {{ h1 }}*/
/* */
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <div id="tabs-with-hash" class="nav nav-tabs nav-justified">*/
/*                     {%  for category in categories %}*/
/*                         {% if loop.first %}*/
/*                             <ul>*/
/*                         {% endif %}*/
/*                         <li><a href="#tab-{{ category.id }}">{{ category.title }}</a></li>*/
/*                         {% if loop.last %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                     {%  for category in categories %}*/
/*                         <div id="tab-{{ category.id }}">*/
/*                             <table class="dataTable table table-striped table-hover table-condensed" width="100%" data-orderfirstcol="desk">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>Date</th>*/
/*                                     <th>Label</th>*/
/*                                     <th>Détail</th>*/
/*                                     <th>Type</th>*/
/*                                     <th>Version</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for article in category.articles %}*/
/*                                     <tr>*/
/*                                         <td data-order="{{ article.date | date('Ymd') }}">{{ article.date | date('d/m/Y') }}</td>*/
/*                                         <td>{{ article.name }}</td>*/
/*                                         <td>{{ article.content|raw }}</td>*/
/*                                         <td>{{ article.type }}</td>*/
/*                                         <td>{{ article.version }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/* */
/*                         </div>*/
/* {#*/
/*                         {% if loop.first %}*/
/*                             <div class="box">*/
/*                             <div class="box-body">*/
/*                         {% endif %}*/
/*                         <div id="tab-{{ category.id }}">*/
/*                             {% for article in category.articles %}*/
/*                                 <div class="box box-primary box-solid">*/
/*                                     <div class="box-header with-border">*/
/*                                         <h2 class="box-title">{{ article.name }}</h2>*/
/*                                         <div class="box-tools pull-right">*/
/*                                             <span class="label label-danger">{{ article.type }}</span>*/
/*                                         </div><!-- /.box-tools -->*/
/*                                     </div><!-- /.box-header -->*/
/*                                     <div class="box-body">*/
/*                                         {{ article.content|raw }}*/
/*                                     </div><!-- /.box-body -->*/
/*                                     <div class="box-footer">*/
/*                                         Le : {{ article.date | date('d/m/Y') }}*/
/*                                         <div class="box-tools pull-right">*/
/* */
/*                                             <span class="label label-primary">{{ article.version }}</span>*/
/*                                         </div><!-- /.box-tools -->*/
/*                                     </div><!-- box-footer -->*/
/*                                 </div><!-- /.box -->*/
/*                             {% else %}*/
/*                                 <p>Aucune nouveauté actuellement</p>*/
/*                             {% endfor %}*/
/*                         </div><!-- end #tab-{{ category.id }} -->*/
/*                         {% if loop.last %}*/
/*                             </div><!-- end .box-body -->*/
/* */
/*                             </div><!-- end .box -->*/
/*                         {% endif %}*/
/*                         #}*/
/*                     {% endfor %}*/
/*                 </div><!-- end #tabs -->*/
/*             </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*         {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/*     </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
