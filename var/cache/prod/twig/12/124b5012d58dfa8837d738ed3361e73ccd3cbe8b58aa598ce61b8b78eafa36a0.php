<?php

/* :AccountBalance/List:transactions.html.twig */
class __TwigTemplate_f06c1cd03f925568d1fad59ebef9aec0f51f77d6c0e9b9a822f93559a89e2003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":AccountBalance/List:transactions.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", ":AccountBalance/List:transactions.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":AccountBalance/List:transactions.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">


                <h1>
                    ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "

                </h1>

                ";
        // line 23
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance/List:transactions.html.twig", 23)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 24
        echo "

            </section>



            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 33
        $this->loadTemplate("flashMessage.html.twig", ":AccountBalance/List:transactions.html.twig", 33)->display($context);
        // line 34
        echo "
                <p>Solde actuel : ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["solde"]) ? $context["solde"] : null), "html", null, true);
        echo " €</p>

                <div id=\"tabs-with-hash\">
                    <ul>
                        <li><a href=\"#transactions\">Historique des transactions</a></li>
                        <li><a href=\"#crediter-cb\">Créditer le compte par carte</a></li>
                        <li><a href=\"#crediter\">Créditer le compte (cheque,virement,espèce,...)</a></li>
                    </ul>
                    <div id=\"transactions\">

                        <table class=\"dataTable table table-striped table-hover table-condensed\" data-orderfirstcol=\"desk\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Id de transaction</th>
                                <th>Description</th>
                                <th>Mouvement</th>
                                <th>Solde</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) ? $context["lines"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 57
            echo "                                <tr>
                                    <td data-order=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["line"], "date", array()), "date", array()), "U"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["line"], "date", array()), "date", array()), "d/m/Y à H \\h \\e\\t i \\m\\i\\n"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "idTransaction", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "description", array()), "html", null, true);
            echo "</td>
                                    <td class=\"text-";
            // line 61
            if (($this->getAttribute($context["line"], "mouvement", array()) < 0)) {
                echo "danger";
            } else {
                echo "success";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "mouvement", array()), "html", null, true);
            echo " €</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["line"], "balance", array()), "html", null, true);
            echo " €</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                    <div id=\"crediter-cb\">
                        ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : null), 'form_start');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCb"]) ? $context["formCb"] : null), 'errors');
        echo "
                        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : null), 'form_end');
        echo "
                    </div>
                    <div id=\"crediter\">

                        ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : null), 'form_start');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCheque"]) ? $context["formCheque"] : null), 'errors');
        echo "
                        ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : null), 'form_end');
        echo "
                    </div>
                </div><!-- /#tabs -->



            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 86
        $this->loadTemplate("footer.html.twig", ":AccountBalance/List:transactions.html.twig", 86)->display($context);
        // line 87
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":AccountBalance/List:transactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 87,  184 => 86,  172 => 77,  168 => 76,  164 => 75,  157 => 71,  153 => 70,  149 => 69,  143 => 65,  134 => 62,  124 => 61,  120 => 60,  116 => 59,  110 => 58,  107 => 57,  103 => 56,  79 => 35,  76 => 34,  74 => 33,  63 => 24,  61 => 23,  54 => 19,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/* */
/*                 {% include 'flashMessage.html.twig' %}*/
/* */
/*                 <p>Solde actuel : {{ solde }} €</p>*/
/* */
/*                 <div id="tabs-with-hash">*/
/*                     <ul>*/
/*                         <li><a href="#transactions">Historique des transactions</a></li>*/
/*                         <li><a href="#crediter-cb">Créditer le compte par carte</a></li>*/
/*                         <li><a href="#crediter">Créditer le compte (cheque,virement,espèce,...)</a></li>*/
/*                     </ul>*/
/*                     <div id="transactions">*/
/* */
/*                         <table class="dataTable table table-striped table-hover table-condensed" data-orderfirstcol="desk" width="100%">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Date</th>*/
/*                                 <th>Id de transaction</th>*/
/*                                 <th>Description</th>*/
/*                                 <th>Mouvement</th>*/
/*                                 <th>Solde</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for line in lines %}*/
/*                                 <tr>*/
/*                                     <td data-order="{{ line.date.date | date('U') }}">{{ line.date.date |  date("d/m/Y \à H \\h \\e\\t i \\m\\i\\n")   }}</td>*/
/*                                     <td>{{ line.idTransaction }}</td>*/
/*                                     <td>{{ line.description }}</td>*/
/*                                     <td class="text-{% if line.mouvement < 0 %}danger{% else %}success{% endif %}">{{ line.mouvement }} €</td>*/
/*                                     <td>{{ line.balance }} €</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div id="crediter-cb">*/
/*                         {{ form_start(formCb) }}*/
/*                         {{ form_errors(formCb) }}*/
/*                         {{ form_end(formCb) }}*/
/*                     </div>*/
/*                     <div id="crediter">*/
/* */
/*                         {{ form_start(formCheque) }}*/
/*                         {{ form_errors(formCheque) }}*/
/*                         {{ form_end(formCheque) }}*/
/*                     </div>*/
/*                 </div><!-- /#tabs -->*/
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
