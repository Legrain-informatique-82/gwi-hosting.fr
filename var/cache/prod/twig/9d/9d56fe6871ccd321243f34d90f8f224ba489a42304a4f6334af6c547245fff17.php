<?php

/* :Contact/Fancybox:create.html.twig */
class __TwigTemplate_51fd933552d6e5abe9e895215f20768a1fe29aec984b8dcfb1f41a42d97ca185 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_start', array("attr" => array("id" => "form2")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
        echo "
    <div id=\"tabs\" data-step=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["step"]) ? $context["step"] : null), "html", null, true);
        echo "\">
        <ul>
            <li><a href=\"#tabs-1\" class=\"clicTab1\">Type contact</a></li>
            <li><a href=\"#tabs-2\" class=\"clicTab2\">Détails</a></li>
            <li><a href=\"#tabs-3\" class=\"clicTab3\">Utilisateur lié</a></li>
        </ul>
        <div id=\"tabs-1\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "type", array()), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "companyName", array()), 'row');
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "insee", array()), 'row');
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "numMarque", array()), 'row');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "numTva", array()), 'row');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "name", array()), 'row');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "firstname", array()), 'row');
        echo "
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "address", array()), 'row');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "zipCode", array()), 'row');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "city", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "state", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "phone", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "fax", array()), 'row');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "cellphone", array()), 'row');
        echo "
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "email", array()), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "user", array()), 'row');
        echo "
            </fieldset>





            <fieldset>
                <legend>Ou, en creer un nouveau</legend>

                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "code_client_user", array()), 'row');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "email_user", array()), 'row');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "phone_user", array()), 'row');
        echo "
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "cellphone_user", array()), 'row');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "workphone_user", array()), 'row');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "password_user", array()), 'row');
        echo "
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "name_user", array()), 'row');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "firstname_user", array()), 'row');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "address1_user", array()), 'row');
        echo "
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "address2_user", array()), 'row');
        echo "
                ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "address3_user", array()), 'row');
        echo "
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "zipcode_user", array()), 'row');
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "city_user", array()), 'row');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "company_name_user", array()), 'row');
        echo "
                ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "num_tva_user", array()), 'row');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "tiersPourTva_user", array()), 'row');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "active_user", array()), 'row');
        echo "

            </fieldset>
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <a href=\"#tabs-1\"  id=\"back-to-part-2\" class=\"btn btn-primary\">Précédent</a>
                </div>
                <div class=\"col-xs-6\">
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "contact_submit", array()), 'row');
        echo "
                </div>
            </div>


        </div>
        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form2"]) ? $context["form2"] : null), 'form_end');
        echo "
    </div><!-- end tabs -->





";
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
        return array (  231 => 91,  222 => 85,  211 => 77,  207 => 76,  203 => 75,  199 => 74,  195 => 73,  191 => 72,  187 => 71,  183 => 70,  179 => 69,  175 => 68,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  134 => 51,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  53 => 15,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
