<?php

/* :Ndd/List:listndd.html.twig */
class __TwigTemplate_eb9ae70141cbf34889ac50d7101f34df4883093d677bba7b5f57b1d4564c832d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Ndd/List:listndd.html.twig", 1);
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
        $__internal_a5e2c778944fdd0e5f6d4dd32202d669c5a1423a04cbfe10d8d1f226e93fb130 = $this->env->getExtension("native_profiler");
        $__internal_a5e2c778944fdd0e5f6d4dd32202d669c5a1423a04cbfe10d8d1f226e93fb130->enter($__internal_a5e2c778944fdd0e5f6d4dd32202d669c5a1423a04cbfe10d8d1f226e93fb130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Ndd/List:listndd.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e2c778944fdd0e5f6d4dd32202d669c5a1423a04cbfe10d8d1f226e93fb130->leave($__internal_a5e2c778944fdd0e5f6d4dd32202d669c5a1423a04cbfe10d8d1f226e93fb130_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f5c25773609f5e0c0983d2a65879a14ff995f0b71c1aaec78cc65d6b48a07b = $this->env->getExtension("native_profiler");
        $__internal_22f5c25773609f5e0c0983d2a65879a14ff995f0b71c1aaec78cc65d6b48a07b->enter($__internal_22f5c25773609f5e0c0983d2a65879a14ff995f0b71c1aaec78cc65d6b48a07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Ndd/List:listndd.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Ndd/List:listndd.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Ndd/List:listndd.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Ndd/List:listndd.html.twig", 29)->display($context);
        // line 30
        echo "




                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ndds"]) ? $context["ndds"] : $this->getContext($context, "ndds")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ndd"]) {
            // line 36
            echo "                    ";
            if (((isset($context["countNdds"]) ? $context["countNdds"] : $this->getContext($context, "countNdds")) > 9)) {
                // line 37
                echo "                        ";
                // line 38
                echo "                        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 39
                    echo "                            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Date expiration</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                        ";
                }
                // line 49
                echo "                        <tr>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["ndd"], "name", array()), "html", null, true);
                echo "</td>
                            <td data-order=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["ndd"], "date_registry_end", array()), "html", null, true);
                echo " \" >
                                ";
                // line 52
                if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                    echo "<strong class=\"";
                    if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                        echo "text-danger";
                    } else {
                        echo "text-primary";
                    }
                    echo "\">";
                }
                // line 53
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ndd"], "date_registry_end", array()), "d/m/Y"), "html", null, true);
                echo "
                                    ";
                // line 54
                if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                    echo "</strong>";
                }
                // line 55
                echo "                            </td>
                            <td>
                                <div class=\"btn-group\">
                                    ";
                // line 58
                if (((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "super_admin")) {
                    // line 59
                    echo "                                        ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 60
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-default\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                    }
                    // line 62
                    echo "                                        <a class=\"btn btn-default\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 65
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 66
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 67
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 69
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 71
                        echo "                                            ";
                    } else {
                        // line 72
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 73
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 75
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 77
                        echo "                                            ";
                    }
                    // line 78
                    echo "                                        </a>
                                        <a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion de l'hébergement\"><i class=\"fa fa-database\"></i></a>
                                    ";
                } elseif ((                // line 80
(isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "admin")) {
                    // line 81
                    echo "                                        ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 82
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-default\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                    }
                    // line 84
                    echo "                                        <a class=\"btn btn-default\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        <a href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 87
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 88
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 89
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 91
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 93
                        echo "                                            ";
                    } else {
                        // line 94
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 95
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 97
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 99
                        echo "                                            ";
                    }
                    // line 100
                    echo "                                        </a>
                                        <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion de l'hébergement\"><i class=\"fa fa-database\"></i></a>
                                    ";
                } else {
                    // line 103
                    echo "                                        ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 104
                        echo "                                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-default\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                        ";
                    }
                    // line 106
                    echo "                                        <a class=\"btn btn-default\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        <a href=\"";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 109
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 110
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 111
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 113
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 115
                        echo "                                            ";
                    } else {
                        // line 116
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 117
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 119
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 121
                        echo "                                            ";
                    }
                    // line 122
                    echo "                                        </a>
                                        <a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion de l'hébergement\"><i class=\"fa fa-database\"></i></a>
                                    ";
                }
                // line 125
                echo "                                </div>
                            </td>
                        </tr>
                        ";
                // line 128
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 129
                    echo "                            </tbody>
                            </table>
                        ";
                }
                // line 132
                echo "                    ";
            } else {
                // line 133
                echo "                        ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "   <div class=\"row\">";
                }
                // line 134
                echo "                        <div class=\"col-md-4\">
                            <!-- Default box -->
                            <div class=\"box\">
                                <div class=\"box-header with-border\">
                                    <h3 class=\"box-title\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["ndd"], "name", array()), "html", null, true);
                echo "


                                        <sub>

                                            ";
                // line 143
                if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                    echo "<strong class=\"";
                    if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                        echo "text-danger";
                    } else {
                        echo "text-primary";
                    }
                    echo "\">";
                }
                // line 144
                echo "                                                (";
                if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                    echo "A expiré le";
                } else {
                    echo "Expire le";
                }
                echo " : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ndd"], "date_registry_end", array()), "d/m/Y"), "html", null, true);
                echo ")
                                                ";
                // line 145
                if (($this->getAttribute($context["ndd"], "date_registry_end", array()) < (isset($context["in2months"]) ? $context["in2months"] : $this->getContext($context, "in2months")))) {
                    echo "</strong>";
                }
                // line 146
                echo "                                        </sub>
                                    </h3>

                                    <div class=\"box-tools pull-right\">

                                        ";
                // line 151
                if (((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "super_admin")) {
                    // line 152
                    echo "                                            ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 153
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                            ";
                    }
                    // line 155
                    echo "                                            <a class=\"btn btn-box-tool\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        ";
                } elseif ((                // line 156
(isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "admin")) {
                    // line 157
                    echo "                                            ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 158
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                            ";
                    }
                    // line 160
                    echo "                                            <a class=\"btn btn-box-tool\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        ";
                } else {
                    // line 162
                    echo "                                            ";
                    if ((isset($context["afficheProduits"]) ? $context["afficheProduits"] : $this->getContext($context, "afficheProduits"))) {
                        // line 163
                        echo "                                                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("renew_ndd_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                        echo "\" class=\"btn btn-box-tool\" title=\"Renouveler le domaine\"><i class=\"fa fa-cart-plus\"></i></a>
                                            ";
                    }
                    // line 165
                    echo "                                            <a class=\"btn btn-box-tool\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ndd_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" title=\"Gérer\"><i class=\"fa fa-wrench\"></i> </a>
                                        ";
                }
                // line 167
                echo "                                    </div>
                                </div>
                                <div class=\"box-body\">
                                    ";
                // line 170
                if (((isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "super_admin")) {
                    // line 171
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 173
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 174
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 175
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 177
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 179
                        echo "                                            ";
                    } else {
                        // line 180
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 181
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 183
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 185
                        echo "                                            ";
                    }
                    // line 186
                    echo "                                        </a>
                                        <a href=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_super_admin", array("idagency" => (isset($context["idagency"]) ? $context["idagency"] : $this->getContext($context, "idagency")), "iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default \" title=\"Gestion de l'hébergement\"><i class=\"fa fa-database\"></i></a>
                                    ";
                } elseif ((                // line 188
(isset($context["typeUser"]) ? $context["typeUser"] : $this->getContext($context, "typeUser")) == "admin")) {
                    // line 189
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 191
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 192
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 193
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 195
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 197
                        echo "                                            ";
                    } else {
                        // line 198
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 199
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 201
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 203
                        echo "                                            ";
                    }
                    // line 204
                    echo "                                        </a>
                                        <a href=\"";
                    // line 205
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_admin", array("iduser" => (isset($context["iduser"]) ? $context["iduser"] : $this->getContext($context, "iduser")), "ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion de l'hébergement\"><i class=\"fa fa-database\"></i></a>
                                    ";
                } else {
                    // line 207
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list_emails_for_domain_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion des boites e-mail\">
                                            <i class=\"fa fa-envelope\"></i>
                                            ";
                    // line 209
                    if ($this->getAttribute($this->getAttribute($context["ndd"], "services", array(), "any", false, true), "item", array(), "any", true, true)) {
                        // line 210
                        echo "                                                ";
                        if (twig_in_filter("mail", $this->getAttribute($this->getAttribute($context["ndd"], "services", array()), "item", array()))) {
                            // line 211
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 213
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 215
                        echo "                                            ";
                    } else {
                        // line 216
                        echo "                                                ";
                        if (("mail" == $this->getAttribute($context["ndd"], "services", array()))) {
                            // line 217
                            echo "                                                    <sup class=\"text-success\"><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        } else {
                            // line 219
                            echo "                                                    <sup><i class=\"fa fa-circle\"></i></sup>
                                                ";
                        }
                        // line 221
                        echo "                                            ";
                    }
                    // line 222
                    echo "
                                        </a>
                                        <a href=\"";
                    // line 224
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hebergement_user", array("ndd" => $this->getAttribute($context["ndd"], "name", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default\" title=\"Gestion de l'hébergement\">
                                            <i class=\"fa fa-database\"></i>
                                        </a>

                                    ";
                }
                // line 229
                echo "
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!-- /.col-md-4 -->
                        ";
                // line 234
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 235
                    echo "                            </div><!-- .row-->
                        ";
                }
                // line 237
                echo "                    ";
            }
            // line 238
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ndd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 249
        $this->loadTemplate("footer.html.twig", ":Ndd/List:listndd.html.twig", 249)->display($context);
        // line 250
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_22f5c25773609f5e0c0983d2a65879a14ff995f0b71c1aaec78cc65d6b48a07b->leave($__internal_22f5c25773609f5e0c0983d2a65879a14ff995f0b71c1aaec78cc65d6b48a07b_prof);

    }

    public function getTemplateName()
    {
        return ":Ndd/List:listndd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  636 => 250,  634 => 249,  622 => 239,  608 => 238,  605 => 237,  601 => 235,  599 => 234,  592 => 229,  584 => 224,  580 => 222,  577 => 221,  573 => 219,  569 => 217,  566 => 216,  563 => 215,  559 => 213,  555 => 211,  552 => 210,  550 => 209,  544 => 207,  539 => 205,  536 => 204,  533 => 203,  529 => 201,  525 => 199,  522 => 198,  519 => 197,  515 => 195,  511 => 193,  508 => 192,  506 => 191,  500 => 189,  498 => 188,  494 => 187,  491 => 186,  488 => 185,  484 => 183,  480 => 181,  477 => 180,  474 => 179,  470 => 177,  466 => 175,  463 => 174,  461 => 173,  455 => 171,  453 => 170,  448 => 167,  442 => 165,  436 => 163,  433 => 162,  427 => 160,  421 => 158,  418 => 157,  416 => 156,  411 => 155,  405 => 153,  402 => 152,  400 => 151,  393 => 146,  389 => 145,  378 => 144,  368 => 143,  360 => 138,  354 => 134,  349 => 133,  346 => 132,  341 => 129,  339 => 128,  334 => 125,  329 => 123,  326 => 122,  323 => 121,  319 => 119,  315 => 117,  312 => 116,  309 => 115,  305 => 113,  301 => 111,  298 => 110,  296 => 109,  291 => 107,  286 => 106,  280 => 104,  277 => 103,  272 => 101,  269 => 100,  266 => 99,  262 => 97,  258 => 95,  255 => 94,  252 => 93,  248 => 91,  244 => 89,  241 => 88,  239 => 87,  234 => 85,  229 => 84,  223 => 82,  220 => 81,  218 => 80,  214 => 79,  211 => 78,  208 => 77,  204 => 75,  200 => 73,  197 => 72,  194 => 71,  190 => 69,  186 => 67,  183 => 66,  181 => 65,  176 => 63,  171 => 62,  165 => 60,  162 => 59,  160 => 58,  155 => 55,  151 => 54,  146 => 53,  136 => 52,  132 => 51,  128 => 50,  125 => 49,  113 => 39,  110 => 38,  108 => 37,  105 => 36,  88 => 35,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* */
/* */
/* */
/* */
/*                 {% for ndd in ndds %}*/
/*                     {% if countNdds > 9 %}*/
/*                         {#affichage en table#}*/
/*                         {% if loop.first %}*/
/*                             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Nom</th>*/
/*                                 <th>Date expiration</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                         {% endif %}*/
/*                         <tr>*/
/*                             <td>{{ ndd.name }}</td>*/
/*                             <td data-order="{{ ndd.date_registry_end}} " >*/
/*                                 {% if ndd.date_registry_end < in2months  %}<strong class="{% if ndd.date_registry_end < today  %}text-danger{% else %}text-primary{% endif %}">{% endif %}*/
/*                                     {{ ndd.date_registry_end | date('d/m/Y') }}*/
/*                                     {% if ndd.date_registry_end < in2months   %}</strong>{% endif %}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <div class="btn-group">*/
/*                                     {% if typeUser == 'super_admin' %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_ndd_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-default" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('ndd_super_admin',{'idagency':idagency,'iduser':iduser,'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         <a href="{{ path('list_emails_for_domain_super_admin',{'idagency':idagency,'iduser': iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_super_admin',{'idagency':idagency,'iduser': iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion de l'hébergement"><i class="fa fa-database"></i></a>*/
/*                                     {% elseif typeUser == 'admin' %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_ndd_admin",{'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-default" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('ndd_admin',{'iduser':iduser,'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         <a href="{{ path("list_emails_for_domain_admin",{"iduser": iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_admin',{'iduser': iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion de l'hébergement"><i class="fa fa-database"></i></a>*/
/*                                     {% else %}*/
/*                                         {% if afficheProduits %}*/
/*                                             <a href="{{ path("renew_ndd_user",{'ndd':ndd.name}) }}" class="btn btn-default" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                         {% endif %}*/
/*                                         <a class="btn btn-default" href="{{ path('ndd_user',{'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         <a href="{{ path("list_emails_for_domain_user",{'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_user',{'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion de l'hébergement"><i class="fa fa-database"></i></a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% if loop.last %}*/
/*                             </tbody>*/
/*                             </table>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {% if loop.first %}   <div class="row">{% endif %}*/
/*                         <div class="col-md-4">*/
/*                             <!-- Default box -->*/
/*                             <div class="box">*/
/*                                 <div class="box-header with-border">*/
/*                                     <h3 class="box-title">{{ ndd.name }}*/
/* */
/* */
/*                                         <sub>*/
/* */
/*                                             {% if ndd.date_registry_end < in2months  %}<strong class="{% if ndd.date_registry_end < today  %}text-danger{% else %}text-primary{% endif %}">{% endif %}*/
/*                                                 ({% if ndd.date_registry_end < today  %}A expiré le{% else %}Expire le{% endif %} : {{ ndd.date_registry_end | date('d/m/Y') }})*/
/*                                                 {% if ndd.date_registry_end < in2months   %}</strong>{% endif %}*/
/*                                         </sub>*/
/*                                     </h3>*/
/* */
/*                                     <div class="box-tools pull-right">*/
/* */
/*                                         {% if typeUser == 'super_admin' %}*/
/*                                             {% if afficheProduits %}*/
/*                                                 <a href="{{ path("renew_ndd_super_admin",{'idagency':idagency,'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                             {% endif %}*/
/*                                             <a class="btn btn-box-tool" href="{{ path('ndd_super_admin',{'idagency':idagency,'iduser':iduser,'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         {% elseif typeUser == 'admin' %}*/
/*                                             {% if afficheProduits %}*/
/*                                                 <a href="{{ path("renew_ndd_admin",{'iduser':iduser,'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                             {% endif %}*/
/*                                             <a class="btn btn-box-tool" href="{{ path('ndd_admin',{'iduser':iduser,'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         {% else %}*/
/*                                             {% if afficheProduits %}*/
/*                                                 <a href="{{ path("renew_ndd_user",{'ndd':ndd.name}) }}" class="btn btn-box-tool" title="Renouveler le domaine"><i class="fa fa-cart-plus"></i></a>*/
/*                                             {% endif %}*/
/*                                             <a class="btn btn-box-tool" href="{{ path('ndd_user',{'ndd':ndd.name}) }}" title="Gérer"><i class="fa fa-wrench"></i> </a>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="box-body">*/
/*                                     {% if typeUser == 'super_admin' %}*/
/*                                         <a href="{{ path("list_emails_for_domain_super_admin",{'idagency':idagency,"iduser": iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_super_admin',{'idagency':idagency,'iduser': iduser ,'ndd':ndd.name}) }}" class="btn btn-default " title="Gestion de l'hébergement"><i class="fa fa-database"></i></a>*/
/*                                     {% elseif typeUser == 'admin' %}*/
/*                                         <a href="{{ path("list_emails_for_domain_admin",{"iduser": iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_admin',{'iduser': iduser ,'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion de l'hébergement"><i class="fa fa-database"></i></a>*/
/*                                     {% else %}*/
/*                                         <a href="{{ path("list_emails_for_domain_user",{'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion des boites e-mail">*/
/*                                             <i class="fa fa-envelope"></i>*/
/*                                             {% if ndd.services.item is defined %}*/
/*                                                 {% if 'mail' in ndd.services.item %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% else %}*/
/*                                                 {% if 'mail' == ndd.services %}*/
/*                                                     <sup class="text-success"><i class="fa fa-circle"></i></sup>*/
/*                                                 {% else %}*/
/*                                                     <sup><i class="fa fa-circle"></i></sup>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/* */
/*                                         </a>*/
/*                                         <a href="{{ path('hebergement_user',{'ndd':ndd.name}) }}" class="btn btn-default" title="Gestion de l'hébergement">*/
/*                                             <i class="fa fa-database"></i>*/
/*                                         </a>*/
/* */
/*                                     {% endif %}*/
/* */
/*                                 </div><!-- /.box-body -->*/
/* */
/*                             </div><!-- /.box -->*/
/*                         </div><!-- /.col-md-4 -->*/
/*                         {% if loop.last %}*/
/*                             </div><!-- .row-->*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
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
