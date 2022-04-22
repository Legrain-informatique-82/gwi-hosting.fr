<?php

/* :AccountBalance/List:transactions.html.twig */
class __TwigTemplate_57d8501fdc4faaf8e05da07a1c062adb8a4c3d0b307701a148c3aa76bfd33c3c extends Twig_Template
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
        $__internal_f3f097c584165137caee6c67b759bb5bcb16a7c9821d45673f4e19727557b67d = $this->env->getExtension("native_profiler");
        $__internal_f3f097c584165137caee6c67b759bb5bcb16a7c9821d45673f4e19727557b67d->enter($__internal_f3f097c584165137caee6c67b759bb5bcb16a7c9821d45673f4e19727557b67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":AccountBalance/List:transactions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3f097c584165137caee6c67b759bb5bcb16a7c9821d45673f4e19727557b67d->leave($__internal_f3f097c584165137caee6c67b759bb5bcb16a7c9821d45673f4e19727557b67d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b40a3a19d2ff49ae2c3d1724af2f0473178c3127ed708d168cedc377a30672ce = $this->env->getExtension("native_profiler");
        $__internal_b40a3a19d2ff49ae2c3d1724af2f0473178c3127ed708d168cedc377a30672ce->enter($__internal_b40a3a19d2ff49ae2c3d1724af2f0473178c3127ed708d168cedc377a30672ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : $this->getContext($context, "h1")), "html", null, true);
        echo "

                </h1>

                ";
        // line 23
        $this->loadTemplate("breadcrumb.html.twig", ":AccountBalance/List:transactions.html.twig", 23)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
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
        echo twig_escape_filter($this->env, (isset($context["solde"]) ? $context["solde"] : $this->getContext($context, "solde")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["lines"]) ? $context["lines"] : $this->getContext($context, "lines")));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'form_start');
        echo "
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'errors');
        echo "
                        ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCb"]) ? $context["formCb"] : $this->getContext($context, "formCb")), 'form_end');
        echo "
                    </div>
                    <div id=\"crediter\">

                        ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'form_start');
        echo "
                        ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'errors');
        echo "
                        ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCheque"]) ? $context["formCheque"] : $this->getContext($context, "formCheque")), 'form_end');
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
        
        $__internal_b40a3a19d2ff49ae2c3d1724af2f0473178c3127ed708d168cedc377a30672ce->leave($__internal_b40a3a19d2ff49ae2c3d1724af2f0473178c3127ed708d168cedc377a30672ce_prof);

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
        return array (  195 => 87,  193 => 86,  181 => 77,  177 => 76,  173 => 75,  166 => 71,  162 => 70,  158 => 69,  152 => 65,  143 => 62,  133 => 61,  129 => 60,  125 => 59,  119 => 58,  116 => 57,  112 => 56,  88 => 35,  85 => 34,  83 => 33,  72 => 24,  70 => 23,  63 => 19,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
