<?php

/* :Contact/Fancybox:create.html.twig */
class __TwigTemplate_806dc9a655c76ca2d34cf3a3a0a2a925bbbc42a10f7ca2a1a126416e6ef34500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Contact/Fancybox/base.html.twig", ":Contact/Fancybox:create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Contact/Fancybox/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a968c6c0d365878d04e77e30c91bfcb302d0722d1ae92e5e439ae97a89213fd7 = $this->env->getExtension("native_profiler");
        $__internal_a968c6c0d365878d04e77e30c91bfcb302d0722d1ae92e5e439ae97a89213fd7->enter($__internal_a968c6c0d365878d04e77e30c91bfcb302d0722d1ae92e5e439ae97a89213fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Fancybox:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a968c6c0d365878d04e77e30c91bfcb302d0722d1ae92e5e439ae97a89213fd7->leave($__internal_a968c6c0d365878d04e77e30c91bfcb302d0722d1ae92e5e439ae97a89213fd7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f014ecbcec5cdef77cf552d14f0988fa6fdf34ea3b1e68ce4fbe5eec18f8716 = $this->env->getExtension("native_profiler");
        $__internal_2f014ecbcec5cdef77cf552d14f0988fa6fdf34ea3b1e68ce4fbe5eec18f8716->enter($__internal_2f014ecbcec5cdef77cf552d14f0988fa6fdf34ea3b1e68ce4fbe5eec18f8716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_start', array("attr" => array("id" => "form2")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
    <div id=\"tabs\" data-step=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : $this->getContext($context, "step")), "html", null, true);
        echo "\">
        <ul>
            <li><a href=\"#tabs-1\" class=\"clicTab1\">Type contact</a></li>
            <li><a href=\"#tabs-2\" class=\"clicTab2\">Détails</a></li>
            <li><a href=\"#tabs-3\" class=\"clicTab3\">Utilisateur lié</a></li>
        </ul>
        <div id=\"tabs-1\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "type", array()), 'row');
        echo "
           <div class=\"row\">
               <div class=\"col-xs-12\">
                   <a id=\"check-part-1\" href=\"#tabs-2\" class=\"btn btn-primary\">Poursuivre</a>
               </div>
           </div>


        </div>
        <div id=\"tabs-2\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "companyName", array()), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "insee", array()), 'row');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "numMarque", array()), 'row');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "numTva", array()), 'row');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "name", array()), 'row');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "firstname", array()), 'row');
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address", array()), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "zipCode", array()), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "city", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "state", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "phone", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "fax", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "cellphone", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email", array()), 'row');
        echo "
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <a href=\"#tabs-1\" id=\"back-to-part-1\" class=\"btn btn-primary\">Précédent</a>
                </div><div class=\"col-xs-6\">
                    <a id=\"check-part-2\" href=\"#tabs-3\" class=\"btn-open-tab-3 btn btn-primary\">Poursuivre</a>
                </div>
            </div>

        </div>
        <div id=\"tabs-3\">
            <fieldset>
                <legend>Choisir un utilisateur dans la liste</legend>
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "user", array()), 'row');
        echo "
            </fieldset>





            <fieldset>
                <legend>Ou, en creer un nouveau</legend>

                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "code_client_user", array()), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "email_user", array()), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "phone_user", array()), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "cellphone_user", array()), 'row');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "workphone_user", array()), 'row');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "password_user", array()), 'row');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "name_user", array()), 'row');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "firstname_user", array()), 'row');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address1_user", array()), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address2_user", array()), 'row');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "address3_user", array()), 'row');
        echo "
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "zipcode_user", array()), 'row');
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "city_user", array()), 'row');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "company_name_user", array()), 'row');
        echo "
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "num_tva_user", array()), 'row');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "tiersPourTva_user", array()), 'row');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "active_user", array()), 'row');
        echo "

            </fieldset>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <a href=\"#tabs-1\"  id=\"back-to-part-2\" class=\"btn btn-primary\">Précédent</a>
                </div>
                <div class=\"col-xs-6\">
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "contact_submit", array()), 'row');
        echo "
                </div>
            </div>


        </div>
        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'form_end');
        echo "
    </div><!-- end tabs -->





";
        
        $__internal_2f014ecbcec5cdef77cf552d14f0988fa6fdf34ea3b1e68ce4fbe5eec18f8716->leave($__internal_2f014ecbcec5cdef77cf552d14f0988fa6fdf34ea3b1e68ce4fbe5eec18f8716_prof);

    }

    public function getTemplateName()
    {
        return ":Contact/Fancybox:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 91,  231 => 85,  220 => 77,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  200 => 72,  196 => 71,  192 => 70,  188 => 69,  184 => 68,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  143 => 51,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  62 => 15,  52 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'Contact/Fancybox/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     {{ form_start(form2,{'attr': {'id': 'form2'}}) }}*/
/*     {{ form_errors(form2) }}*/
/*     <div id="tabs" data-step="{{ step }}">*/
/*         <ul>*/
/*             <li><a href="#tabs-1" class="clicTab1">Type contact</a></li>*/
/*             <li><a href="#tabs-2" class="clicTab2">Détails</a></li>*/
/*             <li><a href="#tabs-3" class="clicTab3">Utilisateur lié</a></li>*/
/*         </ul>*/
/*         <div id="tabs-1">*/
/*             {{ form_row(form2.type) }}*/
/*            <div class="row">*/
/*                <div class="col-xs-12">*/
/*                    <a id="check-part-1" href="#tabs-2" class="btn btn-primary">Poursuivre</a>*/
/*                </div>*/
/*            </div>*/
/* */
/* */
/*         </div>*/
/*         <div id="tabs-2">*/
/*             {{ form_row(form2.companyName) }}*/
/*             {{ form_row(form2.insee) }}*/
/*             {{ form_row(form2.numMarque) }}*/
/*             {{ form_row(form2.numTva) }}*/
/*             {{ form_row(form2.name) }}*/
/*             {{ form_row(form2.firstname) }}*/
/*             {{ form_row(form2.address) }}*/
/*             {{ form_row(form2.zipCode) }}*/
/*             {{ form_row(form2.city) }}*/
/*             {{ form_row(form2.state) }}*/
/*             {{ form_row(form2.phone) }}*/
/*             {{ form_row(form2.fax) }}*/
/*             {{ form_row(form2.cellphone) }}*/
/*             {{ form_row(form2.email) }}*/
/*             <div class="row">*/
/*                 <div class="col-xs-6">*/
/*                     <a href="#tabs-1" id="back-to-part-1" class="btn btn-primary">Précédent</a>*/
/*                 </div><div class="col-xs-6">*/
/*                     <a id="check-part-2" href="#tabs-3" class="btn-open-tab-3 btn btn-primary">Poursuivre</a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div id="tabs-3">*/
/*             <fieldset>*/
/*                 <legend>Choisir un utilisateur dans la liste</legend>*/
/*                 {{ form_row(form2.user) }}*/
/*             </fieldset>*/
/* */
/* */
/* */
/* */
/* */
/*             <fieldset>*/
/*                 <legend>Ou, en creer un nouveau</legend>*/
/* */
/*                 {{ form_row(form2.code_client_user) }}*/
/*                 {{ form_row(form2.email_user) }}*/
/*                 {{ form_row(form2.phone_user) }}*/
/*                 {{ form_row(form2.cellphone_user) }}*/
/*                 {{ form_row(form2.workphone_user) }}*/
/*                 {{ form_row(form2.password_user) }}*/
/*                 {{ form_row(form2.name_user) }}*/
/*                 {{ form_row(form2.firstname_user) }}*/
/*                 {{ form_row(form2.address1_user) }}*/
/*                 {{ form_row(form2.address2_user) }}*/
/*                 {{ form_row(form2.address3_user) }}*/
/*                 {{ form_row(form2.zipcode_user) }}*/
/*                 {{ form_row(form2.city_user) }}*/
/*                 {{ form_row(form2.company_name_user) }}*/
/*                 {{ form_row(form2.num_tva_user) }}*/
/*                 {{ form_row(form2.tiersPourTva_user) }}*/
/*                 {{ form_row(form2.active_user) }}*/
/* */
/*             </fieldset>*/
/*             <div class="row">*/
/*                 <div class="col-xs-6">*/
/*                     <a href="#tabs-1"  id="back-to-part-2" class="btn btn-primary">Précédent</a>*/
/*                 </div>*/
/*                 <div class="col-xs-6">*/
/*                     {{ form_row(form2.contact_submit) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         {{ form_end(form2) }}*/
/*     </div><!-- end tabs -->*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
