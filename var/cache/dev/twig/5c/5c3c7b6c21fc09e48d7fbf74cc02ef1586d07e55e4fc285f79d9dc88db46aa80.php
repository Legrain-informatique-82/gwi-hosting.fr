<?php

/* :Public/Server:acheter.html.twig */
class __TwigTemplate_5c7d82e9e4b3bb1262833b6ae4bf1a002f2fabad37b32f509822323aa8c3c9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Public/base.html.twig", ":Public/Server:acheter.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27afe0e2ed85311caba0a79f90c537891ee49b0b61ca88af7e2dfee7f1676f31 = $this->env->getExtension("native_profiler");
        $__internal_27afe0e2ed85311caba0a79f90c537891ee49b0b61ca88af7e2dfee7f1676f31->enter($__internal_27afe0e2ed85311caba0a79f90c537891ee49b0b61ca88af7e2dfee7f1676f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Public/Server:acheter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27afe0e2ed85311caba0a79f90c537891ee49b0b61ca88af7e2dfee7f1676f31->leave($__internal_27afe0e2ed85311caba0a79f90c537891ee49b0b61ca88af7e2dfee7f1676f31_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_af81e99cce839852ce5b18a0cb26779d9fec3c686da04513f06a51560a5a5e70 = $this->env->getExtension("native_profiler");
        $__internal_af81e99cce839852ce5b18a0cb26779d9fec3c686da04513f06a51560a5a5e70->enter($__internal_af81e99cce839852ce5b18a0cb26779d9fec3c686da04513f06a51560a5a5e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\">
        ";
        // line 7
        $this->loadTemplate("Public/header.html.twig", ":Public/Server:acheter.html.twig", 7)->display($context);
        // line 8
        echo "    </div><!-- /.container -->

    <div id=\"content\" class=\"container\">
        ";
        // line 11
        $this->loadTemplate("flashMessage.html.twig", ":Public/Server:acheter.html.twig", 11)->display($context);
        // line 12
        echo "

        <h1>Réserver un serveur</h1>


        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"row\">
            <div class=\"col-md-2\"></div>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 22
            echo "                <div class=\"col-md-4\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typesServer"]) ? $context["typesServer"] : $this->getContext($context, "typesServer")), $this->getAttribute($this->getAttribute($context["type"], "vars", array()), "value", array()), array(), "array"), "label", array()), "html", null, true);
            echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <p>Prix : ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typesServer"]) ? $context["typesServer"] : $this->getContext($context, "typesServer")), $this->getAttribute($this->getAttribute($context["type"], "vars", array()), "value", array()), array(), "array"), "price", array()), "html", null, true);
            echo "€ HT/mois</p>
                            <p>Espace disque disponible : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typesServer"]) ? $context["typesServer"] : $this->getContext($context, "typesServer")), $this->getAttribute($this->getAttribute($context["type"], "vars", array()), "value", array()), array(), "array"), "disk", array()), "html", null, true);
            echo " Go</p>
                            <p>Nombre de site maximum disponible : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typesServer"]) ? $context["typesServer"] : $this->getContext($context, "typesServer")), $this->getAttribute($this->getAttribute($context["type"], "vars", array()), "value", array()), array(), "array"), "nbre", array()), "html", null, true);
            echo "</p>
                            <p><abbr title=\"un snapshot quotidien gardé 24 heures, un snapshot quotidien gardé 48 heures, un snapshot hebdomadaire gardé 7 jours, un snapshot hebdomadaire gardé 14 jours\">Sauvegardes</abbr> automatique : Oui</p>



                        </div>
                        <div class=\"panel-footer\">";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["type"], 'row');
            echo "</div>
                    </div>


                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 47
        echo "        </div>
        ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    </div><!-- /.container -->



    ";
        // line 55
        $this->loadTemplate("Public/footer.html.twig", ":Public/Server:acheter.html.twig", 55)->display($context);
        // line 56
        echo "




";
        
        $__internal_af81e99cce839852ce5b18a0cb26779d9fec3c686da04513f06a51560a5a5e70->leave($__internal_af81e99cce839852ce5b18a0cb26779d9fec3c686da04513f06a51560a5a5e70_prof);

    }

    public function getTemplateName()
    {
        return ":Public/Server:acheter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 56,  131 => 55,  121 => 48,  118 => 47,  115 => 43,  102 => 36,  93 => 30,  89 => 29,  85 => 28,  79 => 25,  74 => 22,  70 => 21,  64 => 18,  60 => 17,  53 => 12,  51 => 11,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'Public/base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         {% include 'Public/header.html.twig' %}*/
/*     </div><!-- /.container -->*/
/* */
/*     <div id="content" class="container">*/
/*         {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*         <h1>Réserver un serveur</h1>*/
/* */
/* */
/*         {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="row">*/
/*             <div class="col-md-2"></div>*/
/*             {% for type in form.type.children %}*/
/*                 <div class="col-md-4">*/
/*                     <div class="panel panel-primary">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ typesServer[type.vars.value].label }}</h3>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <p>Prix : {{ typesServer[type.vars.value].price }}€ HT/mois</p>*/
/*                             <p>Espace disque disponible : {{ typesServer[type.vars.value].disk }} Go</p>*/
/*                             <p>Nombre de site maximum disponible : {{ typesServer[type.vars.value].nbre }}</p>*/
/*                             <p><abbr title="un snapshot quotidien gardé 24 heures, un snapshot quotidien gardé 48 heures, un snapshot hebdomadaire gardé 7 jours, un snapshot hebdomadaire gardé 14 jours">Sauvegardes</abbr> automatique : Oui</p>*/
/* */
/* */
/* */
/*                         </div>*/
/*                         <div class="panel-footer">{{ form_row(type) }}</div>*/
/*                     </div>*/
/* */
/* */
/*                 </div>*/
/* */
/*             {% endfor %}*/
/* */
/*             {#*/
/*             {{ form_row(form.type) | raw }}*/
/*             #}*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* */
/* */
/*     </div><!-- /.container -->*/
/* */
/* */
/* */
/*     {% include 'Public/footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
