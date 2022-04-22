<?php

/* :Cart:creditandpay.html.twig */
class __TwigTemplate_91e65e052091e3402b7f7f2a2236ae798cb690bdeb7fdaaae1301a9e778d11a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:creditandpay.html.twig", 1);
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
        $__internal_d5c238f2cb710103ea89250fb8a0d19ba7a0c14c17c4e6295d6927c7cee87a87 = $this->env->getExtension("native_profiler");
        $__internal_d5c238f2cb710103ea89250fb8a0d19ba7a0c14c17c4e6295d6927c7cee87a87->enter($__internal_d5c238f2cb710103ea89250fb8a0d19ba7a0c14c17c4e6295d6927c7cee87a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:creditandpay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c238f2cb710103ea89250fb8a0d19ba7a0c14c17c4e6295d6927c7cee87a87->leave($__internal_d5c238f2cb710103ea89250fb8a0d19ba7a0c14c17c4e6295d6927c7cee87a87_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7e461e796ce12e96ce1e68b8357be8fdd2ff3e17ec0abeaa2eaa54c359b406 = $this->env->getExtension("native_profiler");
        $__internal_fc7e461e796ce12e96ce1e68b8357be8fdd2ff3e17ec0abeaa2eaa54c359b406->enter($__internal_fc7e461e796ce12e96ce1e68b8357be8fdd2ff3e17ec0abeaa2eaa54c359b406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cart:creditandpay.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:creditandpay.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:creditandpay.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Cart:creditandpay.html.twig", 28)->display($context);
        // line 29
        echo "                <div id=\"tabs-with-hash\">
                    <ul>
                        <li><a href=\"#crediter-cb\">Payer par carte</a></li>
                        ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
            // line 33
            echo "                        <li><a href=\"#crediter\">Payer par cheque, virement, espèce, ...)</a></li>
                        ";
        } else {
            // line 35
            echo "                            <li><a href=\"#crediter-cheque\">Payer par cheque</a></li>
                            <li><a href=\"#crediter-virement\">Payer par virement</a></li>
                        ";
        }
        // line 38
        echo "                    </ul>
                    <div id=\"transactions\">




                            <div id=\"crediter-cb\">
                                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'form_start');
        echo "
                                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'errors');
        echo "
                                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'form_end');
        echo "
                            </div>
                        ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("ROLE_LEGRAIN")) {
            // line 50
            echo "                            <div id=\"crediter\">

                                ";
            // line 52
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'form_start');
            echo "
                                ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'errors');
            echo "
                                ";
            // line 54
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'form_end');
            echo "
                            </div>
                        ";
        } else {
            // line 57
            echo "                            <div id=\"crediter-cheque\">
                                <p>
                                    En envoyant un chèque d'une valeur de ";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "€ à l'ordre : <b>Legrain informatique</b>
                                    <br/>
                                    À l'adresse :

                                </p>
                                <address>
                                    ";
            // line 65
            echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : $this->getContext($context, "infosPaiements")), "cheque", array());
            echo "
                                </address>
                                <p>
                                    Votre compte sera crédité une fois le cheque reçu et encaissé.
                                </p>
                            </div>
                            <div id=\"crediter-virement\">

                                <p>
                                    Par virement, d'un montant de ";
            // line 74
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "€<br/>
                                    ";
            // line 75
            echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : $this->getContext($context, "infosPaiements")), "virement", array());
            echo "
                                </p>
                                <p>
                                    Votre compte sera crédité une fois le virement reçu.
                                </p>
                            </div>
                        ";
        }
        // line 82
        echo "                    </div><!-- /#tabs -->


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 88
        $this->loadTemplate("footer.html.twig", ":Cart:creditandpay.html.twig", 88)->display($context);
        // line 89
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_fc7e461e796ce12e96ce1e68b8357be8fdd2ff3e17ec0abeaa2eaa54c359b406->leave($__internal_fc7e461e796ce12e96ce1e68b8357be8fdd2ff3e17ec0abeaa2eaa54c359b406_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:creditandpay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 89,  185 => 88,  177 => 82,  167 => 75,  163 => 74,  151 => 65,  142 => 59,  138 => 57,  132 => 54,  128 => 53,  124 => 52,  120 => 50,  118 => 49,  113 => 47,  109 => 46,  105 => 45,  96 => 38,  91 => 35,  87 => 33,  85 => 32,  80 => 29,  78 => 28,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/*                 <div id="tabs-with-hash">*/
/*                     <ul>*/
/*                         <li><a href="#crediter-cb">Payer par carte</a></li>*/
/*                         {% if is_granted('ROLE_LEGRAIN') %}*/
/*                         <li><a href="#crediter">Payer par cheque, virement, espèce, ...)</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="#crediter-cheque">Payer par cheque</a></li>*/
/*                             <li><a href="#crediter-virement">Payer par virement</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                     <div id="transactions">*/
/* */
/* */
/* */
/* */
/*                             <div id="crediter-cb">*/
/*                                 {{ form_start(formCb) }}*/
/*                                 {{ form_errors(formCb) }}*/
/*                                 {{ form_end(formCb) }}*/
/*                             </div>*/
/*                         {% if is_granted('ROLE_LEGRAIN') %}*/
/*                             <div id="crediter">*/
/* */
/*                                 {{ form_start(formCheque) }}*/
/*                                 {{ form_errors(formCheque) }}*/
/*                                 {{ form_end(formCheque) }}*/
/*                             </div>*/
/*                         {% else %}*/
/*                             <div id="crediter-cheque">*/
/*                                 <p>*/
/*                                     En envoyant un chèque d'une valeur de {{ total }}€ à l'ordre : <b>Legrain informatique</b>*/
/*                                     <br/>*/
/*                                     À l'adresse :*/
/* */
/*                                 </p>*/
/*                                 <address>*/
/*                                     {{ infosPaiements.cheque | raw }}*/
/*                                 </address>*/
/*                                 <p>*/
/*                                     Votre compte sera crédité une fois le cheque reçu et encaissé.*/
/*                                 </p>*/
/*                             </div>*/
/*                             <div id="crediter-virement">*/
/* */
/*                                 <p>*/
/*                                     Par virement, d'un montant de {{ total }}€<br/>*/
/*                                     {{ infosPaiements.virement | raw }}*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Votre compte sera crédité une fois le virement reçu.*/
/*                                 </p>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div><!-- /#tabs -->*/
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
