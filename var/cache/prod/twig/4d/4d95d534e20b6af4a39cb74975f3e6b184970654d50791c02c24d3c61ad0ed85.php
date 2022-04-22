<?php

/* :Email/Form:addAlias.html.twig */
class __TwigTemplate_b761ea05f359d3565fc9862ce0645a95f8f1a5c0cce68d7d9129dfcf27a950c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Email/Form:addAlias.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":Email/Form:addAlias.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Email/Form:addAlias.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                ";
        // line 18
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:addAlias.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 19
        echo "
                <h1>
                    Ajouter un alias
                </h1>
            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 28
        $this->loadTemplate("flashMessage.html.twig", ":Email/Form:addAlias.html.twig", 28)->display($context);
        // line 29
        echo "

                ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
                <p>
                    Les alias sont les autres noms sous lesquels sera reconnue votre nouvelle boîte aux lettres, Par exemple : <br/>
                    pour prenom.nom@example.com.
                    En choisissant l'alias nom.prenom, les e-mails envoyés à l'adresse mail nom.prenom@example.com arriveront sur l'adresse e-mail prenom.nom@example.com


                </p>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "alias", array()), 'row');
        echo "

                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 48
        if (((isset($context["type"]) ? $context["type"] : null) == "super_admin")) {
            // line 49
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : null), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
            echo "\">
                                Annuler
                            </a>
                        ";
        } elseif ((        // line 52
(isset($context["type"]) ? $context["type"] : null) == "admin")) {
            // line 53
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : null), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
            echo "\">
                                Annuler
                            </a>
                        ";
        } elseif ((        // line 56
(isset($context["type"]) ? $context["type"] : null) == "user")) {
            // line 57
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : null), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : null))), "html", null, true);
            echo "\">
                                Annuler
                            </a>
                            ";
        } else {
            // line 61
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo $this->env->getExtension('routing')->getPath("my_email_account");
            echo "\">
                                Annuler
                            </a>

                        ";
        }
        // line 66
        echo "                    </div>
                </div>
                ";
        // line 68
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 74
        $this->loadTemplate("footer.html.twig", ":Email/Form:addAlias.html.twig", 74)->display($context);
        // line 75
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Email/Form:addAlias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 75,  151 => 74,  142 => 68,  138 => 66,  129 => 61,  121 => 57,  119 => 56,  112 => 53,  110 => 52,  103 => 49,  101 => 48,  94 => 44,  87 => 40,  76 => 32,  72 => 31,  68 => 29,  66 => 28,  55 => 19,  53 => 18,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/*                 <h1>*/
/*                     Ajouter un alias*/
/*                 </h1>*/
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/* */
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <p>*/
/*                     Les alias sont les autres noms sous lesquels sera reconnue votre nouvelle boîte aux lettres, Par exemple : <br/>*/
/*                     pour prenom.nom@example.com.*/
/*                     En choisissant l'alias nom.prenom, les e-mails envoyés à l'adresse mail nom.prenom@example.com arriveront sur l'adresse e-mail prenom.nom@example.com*/
/* */
/* */
/*                 </p>*/
/*                 {{ form_row(form.alias) }}*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-2">*/
/*                         {{ form_row(form.save) }}*/
/* */
/*                     </div>*/
/*                     <div class="col-md-2">*/
/*                         {% if type == 'super_admin' %}*/
/*                             <a class="btn btn-default" href="{{ path('list_alias_mailbox_super_admin',{'idagency':idagency,'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress}) }}">*/
/*                                 Annuler*/
/*                             </a>*/
/*                         {% elseif type == 'admin' %}*/
/*                             <a class="btn btn-default" href="{{ path('list_alias_mailbox_admin',{'iduser':iduser,'ndd':ndd,'emailAddress':emailAddress}) }}">*/
/*                                 Annuler*/
/*                             </a>*/
/*                         {% elseif type =='user' %}*/
/*                             <a class="btn btn-default" href="{{ path('list_alias_mailbox_user',{'ndd':ndd,'emailAddress':emailAddress}) }}">*/
/*                                 Annuler*/
/*                             </a>*/
/*                             {% else %}*/
/*                             <a class="btn btn-default" href="{{ path('my_email_account') }}">*/
/*                                 Annuler*/
/*                             </a>*/
/* */
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
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
