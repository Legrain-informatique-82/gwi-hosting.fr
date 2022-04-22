<?php

/* :AccountBalance/Form:creditAccountBalance.html.twig */
class __TwigTemplate_ea11303151d982e1e6208a8734e017217bcc1db63c8aff534855e2a0da316720 extends Twig_Template
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
        $__internal_8c337ff24a4c19b0e5c76b378b7f218761895188eb657caea767b863e650f088 = $this->env->getExtension("native_profiler");
        $__internal_8c337ff24a4c19b0e5c76b378b7f218761895188eb657caea767b863e650f088->enter($__internal_8c337ff24a4c19b0e5c76b378b7f218761895188eb657caea767b863e650f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":AccountBalance/Form:creditAccountBalance.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c337ff24a4c19b0e5c76b378b7f218761895188eb657caea767b863e650f088->leave($__internal_8c337ff24a4c19b0e5c76b378b7f218761895188eb657caea767b863e650f088_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89c3d117521eb1d240168006fecf526bf43914124032b3d4cb0e251c2b59d2a9 = $this->env->getExtension("native_profiler");
        $__internal_89c3d117521eb1d240168006fecf526bf43914124032b3d4cb0e251c2b59d2a9->enter($__internal_89c3d117521eb1d240168006fecf526bf43914124032b3d4cb0e251c2b59d2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance/Form:creditAccountBalance.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : $this->getContext($context, "infosPaiements")), "cheque", array());
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
        echo $this->getAttribute((isset($context["infosPaiements"]) ? $context["infosPaiements"] : $this->getContext($context, "infosPaiements")), "virement", array());
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
        
        $__internal_89c3d117521eb1d240168006fecf526bf43914124032b3d4cb0e251c2b59d2a9->leave($__internal_89c3d117521eb1d240168006fecf526bf43914124032b3d4cb0e251c2b59d2a9_prof);

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
        return array (  153 => 84,  151 => 83,  130 => 65,  118 => 56,  104 => 45,  100 => 44,  96 => 43,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
