<?php

/* :Cart:afterpayement.html.twig */
class __TwigTemplate_ef99d1ce06bd64d3a1fd5454a6ea090578db7e11873cc162650d5d1354b5154b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Cart:afterpayement.html.twig", 1);
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
        $__internal_ed1b6d446d16ea56d62b335c35d0cc4c747662ea517b7651f92e1e6a11fac05d = $this->env->getExtension("native_profiler");
        $__internal_ed1b6d446d16ea56d62b335c35d0cc4c747662ea517b7651f92e1e6a11fac05d->enter($__internal_ed1b6d446d16ea56d62b335c35d0cc4c747662ea517b7651f92e1e6a11fac05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:afterpayement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed1b6d446d16ea56d62b335c35d0cc4c747662ea517b7651f92e1e6a11fac05d->leave($__internal_ed1b6d446d16ea56d62b335c35d0cc4c747662ea517b7651f92e1e6a11fac05d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2634de6bb06a9eb8bcd819d264bdebe2d030fc16d0ea8c4a240e28574cf209a = $this->env->getExtension("native_profiler");
        $__internal_d2634de6bb06a9eb8bcd819d264bdebe2d030fc16d0ea8c4a240e28574cf209a->enter($__internal_d2634de6bb06a9eb8bcd819d264bdebe2d030fc16d0ea8c4a240e28574cf209a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Cart:afterpayement.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Cart:afterpayement.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Cart:afterpayement.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Cart:afterpayement.html.twig", 27)->display($context);
        // line 28
        echo "                    <p>Merci pour votre achat. Il vous sera attribué rapidement.
                        <br><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Retour à l'accueil.</a>
                    </p>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 34
        $this->loadTemplate("footer.html.twig", ":Cart:afterpayement.html.twig", 34)->display($context);
        // line 35
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_d2634de6bb06a9eb8bcd819d264bdebe2d030fc16d0ea8c4a240e28574cf209a->leave($__internal_d2634de6bb06a9eb8bcd819d264bdebe2d030fc16d0ea8c4a240e28574cf209a_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:afterpayement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  90 => 34,  82 => 29,  79 => 28,  77 => 27,  69 => 21,  67 => 20,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*         {{ h1 }}*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/*                     <p>Merci pour votre achat. Il vous sera attribué rapidement.*/
/*                         <br><a href="{{ path('homepage') }}">Retour à l'accueil.</a>*/
/*                     </p>*/
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
