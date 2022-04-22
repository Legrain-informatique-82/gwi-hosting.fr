<?php

/* :Cart:stepCreateNdd.html.twig */
class __TwigTemplate_6025b4d1cb3768e5c555584636d5a6522f866c689de486964180784f7303991d extends Twig_Template
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
        $__internal_40afaa603d85adfe9db57c4b0945bb22276f4a19cc592a1bc6a85f99ff6e52fa = $this->env->getExtension("native_profiler");
        $__internal_40afaa603d85adfe9db57c4b0945bb22276f4a19cc592a1bc6a85f99ff6e52fa->enter($__internal_40afaa603d85adfe9db57c4b0945bb22276f4a19cc592a1bc6a85f99ff6e52fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:stepCreateNdd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40afaa603d85adfe9db57c4b0945bb22276f4a19cc592a1bc6a85f99ff6e52fa->leave($__internal_40afaa603d85adfe9db57c4b0945bb22276f4a19cc592a1bc6a85f99ff6e52fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a419782d40ad9fc5e0ca2018ba65935bd37b07e1ffe6231f2e3123ea2d9512f = $this->env->getExtension("native_profiler");
        $__internal_0a419782d40ad9fc5e0ca2018ba65935bd37b07e1ffe6231f2e3123ea2d9512f->enter($__internal_0a419782d40ad9fc5e0ca2018ba65935bd37b07e1ffe6231f2e3123ea2d9512f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:stepCreateNdd.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
$context["instField"], "vars", array()), "name", array()), (isset($context["contactsInError"]) ? $context["contactsInError"] : $this->getContext($context, "contactsInError")))) {
                    // line 56
                    echo "                                    <p>


                                        <a href=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fancybox_complete_contact", array("contactName" => $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "value", array()), "ndd" => $this->getAttribute((isset($context["nddParLigne"]) ? $context["nddParLigne"] : $this->getContext($context, "nddParLigne")), $this->getAttribute($this->getAttribute($context["instField"], "vars", array()), "name", array()), array(), "array"))), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_0a419782d40ad9fc5e0ca2018ba65935bd37b07e1ffe6231f2e3123ea2d9512f->leave($__internal_0a419782d40ad9fc5e0ca2018ba65935bd37b07e1ffe6231f2e3123ea2d9512f_prof);

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
        return array (  198 => 92,  196 => 91,  178 => 76,  172 => 73,  167 => 70,  161 => 69,  156 => 66,  148 => 61,  143 => 59,  138 => 56,  136 => 55,  127 => 50,  124 => 48,  122 => 47,  114 => 42,  108 => 39,  103 => 38,  99 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
