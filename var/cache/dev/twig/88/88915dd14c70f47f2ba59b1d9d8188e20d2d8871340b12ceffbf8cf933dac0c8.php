<?php

/* :Email/Form:addAlias.html.twig */
class __TwigTemplate_d0b9e29ceded8b5d14328f4e40bce338e42fe91cb2ebadd12c4acee3d917d2ee extends Twig_Template
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
        $__internal_c5297e8d2fbe0c80bb5bb1c3e0f49acd13aede6bf358fb69b6ab080419c997a2 = $this->env->getExtension("native_profiler");
        $__internal_c5297e8d2fbe0c80bb5bb1c3e0f49acd13aede6bf358fb69b6ab080419c997a2->enter($__internal_c5297e8d2fbe0c80bb5bb1c3e0f49acd13aede6bf358fb69b6ab080419c997a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Email/Form:addAlias.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5297e8d2fbe0c80bb5bb1c3e0f49acd13aede6bf358fb69b6ab080419c997a2->leave($__internal_c5297e8d2fbe0c80bb5bb1c3e0f49acd13aede6bf358fb69b6ab080419c997a2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5aaf6845fd159c3b30962b6440ddf08cc77852b625c9725975b0d6f6ad19ad5 = $this->env->getExtension("native_profiler");
        $__internal_b5aaf6845fd159c3b30962b6440ddf08cc77852b625c9725975b0d6f6ad19ad5->enter($__internal_b5aaf6845fd159c3b30962b6440ddf08cc77852b625c9725975b0d6f6ad19ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("breadcrumb.html.twig", ":Email/Form:addAlias.html.twig", 18)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <p>
                    Les alias sont les autres noms sous lesquels sera reconnue votre nouvelle boîte aux lettres, Par exemple : <br/>
                    pour prenom.nom@example.com.
                    En choisissant l'alias nom.prenom, les e-mails envoyés à l'adresse mail nom.prenom@example.com arriveront sur l'adresse e-mail prenom.nom@example.com


                </p>
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alias", array()), 'row');
        echo "

                <div class=\"row\">
                    <div class=\"col-md-2\">
                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "

                    </div>
                    <div class=\"col-md-2\">
                        ";
        // line 48
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "super_admin")) {
            // line 49
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
            echo "\">
                                Annuler
                            </a>
                        ";
        } elseif ((        // line 52
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "admin")) {
            // line 53
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
            echo "\">
                                Annuler
                            </a>
                        ";
        } elseif ((        // line 56
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "user")) {
            // line 57
            echo "                            <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_alias_mailbox_user", array("ndd" => (isset($context["ndd"]) ? $context["ndd"] : $this->getContext($context, "ndd")), "emailAddress" => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")))), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_b5aaf6845fd159c3b30962b6440ddf08cc77852b625c9725975b0d6f6ad19ad5->leave($__internal_b5aaf6845fd159c3b30962b6440ddf08cc77852b625c9725975b0d6f6ad19ad5_prof);

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
        return array (  162 => 75,  160 => 74,  151 => 68,  147 => 66,  138 => 61,  130 => 57,  128 => 56,  121 => 53,  119 => 52,  112 => 49,  110 => 48,  103 => 44,  96 => 40,  85 => 32,  81 => 31,  77 => 29,  75 => 28,  64 => 19,  62 => 18,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
