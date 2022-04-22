<?php

/* :AccountBalance/Form:creditAccountBalance.html.twig */
class __TwigTemplate_0c322a851ee99a504481f4a56b4b96c6903c06573dc6db8f894969601fb09006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 10)->display($context);
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
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 29)->display($context);
        // line 30
        echo "
                <div id=\"tabs-with-hash\" class=\"nav nav-tabs nav-justified\">
                    <ul>
                        <li><a href=\"#cb\" >Par carte</a></li>
                        <li><a href=\"#cheque\">Par chèque</a></li>
                        <li><a href=\"#virement\">Par virement</a></li>
                    </ul>
                    <div class=\"box\">


                        <div class=\"box-body\">
                            <div id=\"cb\">

                                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

                            </div>
                            <div id=\"cheque\">
                                <p>
                                    En envoyant un chèque d'une valeur minimale de 10€ à l'ordre : <b>Legrain informatique</b>
                                    <br/>
                                    À l'adresse :

                                </p>
                                <address>
                                    ";
        // line 56
        echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : null), "cheque", array());
        echo "
                                </address>
                                <p>
                                    Votre compte sera crédité une fois le cheque reçu et encaissé.
                                </p>
                            </div>
                            <div id=\"virement\">
                                <p>
                                    Par virement, d'un montant minimum de 10€<br/>
                                   ";
        // line 65
        echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : null), "virement", array());
        echo "
                                </p>
                                <p>
                                    Votre compte sera crédité une fois le virement reçu.
                                </p>
                            </div>

                        </div>
                    </div>






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 83
        $this->loadTemplate("footer.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 83)->display($context);
        // line 84
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":AccountBalance/Form:creditAccountBalance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 84,  142 => 83,  121 => 65,  109 => 56,  95 => 45,  91 => 44,  87 => 43,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/*                     <ul>*/
/*                         <li><a href="#cb" >Par carte</a></li>*/
/*                         <li><a href="#cheque">Par chèque</a></li>*/
/*                         <li><a href="#virement">Par virement</a></li>*/
/*                     </ul>*/
/*                     <div class="box">*/
/* */
/* */
/*                         <div class="box-body">*/
/*                             <div id="cb">*/
/* */
/*                                 {{ form_start(form) }}*/
/*                                 {{ form_errors(form) }}*/
/*                                 {{ form_end(form) }}*/
/* */
/*                             </div>*/
/*                             <div id="cheque">*/
/*                                 <p>*/
/*                                     En envoyant un chèque d'une valeur minimale de 10€ à l'ordre : <b>Legrain informatique</b>*/
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
/*                             <div id="virement">*/
/*                                 <p>*/
/*                                     Par virement, d'un montant minimum de 10€<br/>*/
/*                                    {{ infosPaiements.virement | raw}}*/
/*                                 </p>*/
/*                                 <p>*/
/*                                     Votre compte sera crédité une fois le virement reçu.*/
/*                                 </p>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
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
