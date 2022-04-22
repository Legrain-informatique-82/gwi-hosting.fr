<?php

/* :Cart:stepCreateNdd.html.twig */
class __TwigTemplate_6643591d9be45cd333ce519ee905e489e4ee3c0111f2e7ffe2889d4d5419335f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:stepCreateNdd.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Cart:stepCreateNdd.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:stepCreateNdd.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
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
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:stepCreateNdd.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Cart:stepCreateNdd.html.twig", 27)->display($context);
        // line 28
        echo "


                ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["instField"]) {
            // line 34
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "name", array()) != "submit") && ($this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "name", array()) != "_token"))) {
                // line 35
                echo "                        <div class=\"row\">
                            <div class=\"col-xs-3\">
                                ";
                // line 38
                echo "                                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["instField"], 'label');
                echo "
                                ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["instField"], 'errors');
                echo "
                            </div>
                            <div class=\"col-xs-3\">
                                ";
                // line 42
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["instField"], 'widget');
                echo "

                            </div>

                            <div class=\"col-xs-6\">
                                ";
                // line 47
                if (($this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "value", array()) == null)) {
                    // line 48
                    echo "                                    <p>
                                        ";
                    // line 50
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fancybox_add_contact", array("idCartLine" => $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "name", array()))), "html", null, true);
                    echo "\"  data-fancybox-type=\"iframe\" class=\"fancybox btn btn-primary \">
                                            Creer un contact
                                        </a>

                                    </p>
                                ";
                } elseif (twig_in_filter($this->getAttribute($this->getAttribute(                // line 55
$context["instField"], "vars", array()), "name", array()), (isset($context["contactsInError"]) ? $context["contactsInError"] : null))) {
                    // line 56
                    echo "                                    <p>


                                        <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fancybox_complete_contact", array("contactName" => $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "value", array()), "ndd" => $this->getAttribute((isset($context["nddParLigne"]) ? $context["nddParLigne"] : null), $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "name", array()), array(), "array"))), "html", null, true);
                    echo "\"  data-fancybox-type=\"iframe\" class=\"fancybox btn btn-warning \">

                                        Completer le contact ";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "value", array()), "html", null, true);
                    echo "
                                        </a>
                                    </p>

                                ";
                }
                // line 66
                echo "                            </div>
                        </div>
                    ";
            }
            // line 69
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                <div class=\"row\">
                    <div class=\"col-xs-12\">

                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "











            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 91
        $this->loadTemplate("footer.html.twig", ":Cart:stepCreateNdd.html.twig", 91)->display($context);
        // line 92
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Cart:stepCreateNdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 92,  187 => 91,  169 => 76,  163 => 73,  158 => 70,  152 => 69,  147 => 66,  139 => 61,  134 => 59,  129 => 56,  127 => 55,  118 => 50,  115 => 48,  113 => 47,  105 => 42,  99 => 39,  94 => 38,  90 => 35,  87 => 34,  83 => 33,  79 => 32,  75 => 31,  70 => 28,  68 => 27,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/* */
/*                 {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}*/
/*                 {{ form_errors(form) }}*/
/*                 {% for instField in form %}*/
/*                     {% if instField.vars.name != 'submit' and instField.vars.name !='_token' %}*/
/*                         <div class="row">*/
/*                             <div class="col-xs-3">*/
/*                                 {#{{ form_row(instField) }}#}*/
/*                                 {{ form_label(instField) }}*/
/*                                 {{ form_errors(instField) }}*/
/*                             </div>*/
/*                             <div class="col-xs-3">*/
/*                                 {{ form_widget(instField) }}*/
/* */
/*                             </div>*/
/* */
/*                             <div class="col-xs-6">*/
/*                                 {% if instField.vars.value == null %}*/
/*                                     <p>*/
/*                                         {#<a href="{{ path("fancybox_add_contact",{'idCartLine':instField.vars.name}) }}" class="fancybox fancybox.ajax btn btn-primary ">Creer un contact</a>#}*/
/*                                         <a href="{{ path("fancybox_add_contact",{'idCartLine':instField.vars.name}) }}"  data-fancybox-type="iframe" class="fancybox btn btn-primary ">*/
/*                                             Creer un contact*/
/*                                         </a>*/
/* */
/*                                     </p>*/
/*                                 {% elseif instField.vars.name in contactsInError %}*/
/*                                     <p>*/
/* */
/* */
/*                                         <a href="{{ path("fancybox_complete_contact",{'contactName':instField.vars.value,'ndd':nddParLigne[instField.vars.name] }) }}"  data-fancybox-type="iframe" class="fancybox btn btn-warning ">*/
/* */
/*                                         Completer le contact {{ instField.vars.value }}*/
/*                                         </a>*/
/*                                     </p>*/
/* */
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12">*/
/* */
/*                         {{ form_row(form.submit) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
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
