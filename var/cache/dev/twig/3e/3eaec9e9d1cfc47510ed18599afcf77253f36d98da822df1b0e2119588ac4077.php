<?php

/* :Contact/List:contacts.html.twig */
class __TwigTemplate_3bbaccff48cc1d05bd514fd83572d79e7326e5e2a8b9e34c5c6f28bb8b37c400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Contact/List:contacts.html.twig", 1);
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
        $__internal_f5dcde1e1e93ce12e33ef73090e9972e17860d0975ccef62642ce5785923931a = $this->env->getExtension("native_profiler");
        $__internal_f5dcde1e1e93ce12e33ef73090e9972e17860d0975ccef62642ce5785923931a->enter($__internal_f5dcde1e1e93ce12e33ef73090e9972e17860d0975ccef62642ce5785923931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/List:contacts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5dcde1e1e93ce12e33ef73090e9972e17860d0975ccef62642ce5785923931a->leave($__internal_f5dcde1e1e93ce12e33ef73090e9972e17860d0975ccef62642ce5785923931a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6386fb1da37a7b33512a69c5dc08c1530ed73af660754f154cb9d4fa893be4 = $this->env->getExtension("native_profiler");
        $__internal_ec6386fb1da37a7b33512a69c5dc08c1530ed73af660754f154cb9d4fa893be4->enter($__internal_ec6386fb1da37a7b33512a69c5dc08c1530ed73af660754f154cb9d4fa893be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Contact/List:contacts.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Contact/List:contacts.html.twig", 10)->display($context);
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
        $this->loadTemplate("breadcrumb.html.twig", ":Contact/List:contacts.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb"))));
        // line 22
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">

                ";
        // line 29
        $this->loadTemplate("flashMessage.html.twig", ":Contact/List:contacts.html.twig", 29)->display($context);
        // line 30
        echo "




                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 36
            echo "                        ";
            // line 37
            echo "                        ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 38
                echo "                            <table class=\"dataTable table table-striped table-hover table-condensed\" width=\"100%\">
                            <thead>
                            <tr>
                                <th>Nom et prénom du contact</th>
                                <th>Code</th>
                                <th>Email réél</th>
                                <th>Email affiché au contact</th>
                                <th>par défaut</th>
                               
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                        ";
            }
            // line 52
            echo "                        <tr>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "code", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "fakeEmail", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 57
            if ($this->getAttribute($context["contact"], "isDefault", array())) {
                echo "Oui";
            } else {
                echo "Non";
            }
            echo "</td>
                            <td>
                            
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update-contact", array("idcontact" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" title=\"Modifier\"><i class=\"fa fa-cogs\"></i></a>
                            </td>
                        </tr>
                        ";
            // line 63
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 64
                echo "                            </tbody>
                            </table>
                        ";
            }
            // line 67
            echo "
                                </div><!-- /.box-body -->

                            </div><!-- /.box -->
                        </div><!-- /.col-md-4 -->
                        ";
            // line 72
            if ($this->getAttribute($context["loop"], "last", array())) {
                // line 73
                echo "                            </div><!-- .row-->
                        ";
            }
            // line 75
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "






            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 86
        $this->loadTemplate("footer.html.twig", ":Contact/List:contacts.html.twig", 86)->display($context);
        // line 87
        echo "



    </div><!-- ./wrapper -->
";
        
        $__internal_ec6386fb1da37a7b33512a69c5dc08c1530ed73af660754f154cb9d4fa893be4->leave($__internal_ec6386fb1da37a7b33512a69c5dc08c1530ed73af660754f154cb9d4fa893be4_prof);

    }

    public function getTemplateName()
    {
        return ":Contact/List:contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 87,  209 => 86,  197 => 76,  183 => 75,  179 => 73,  177 => 72,  170 => 67,  165 => 64,  163 => 63,  157 => 60,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  129 => 53,  126 => 52,  110 => 38,  107 => 37,  105 => 36,  88 => 35,  81 => 30,  79 => 29,  70 => 22,  68 => 21,  61 => 17,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 {% for contact in contacts %}*/
/*                         {#affichage en table#}*/
/*                         {% if loop.first %}*/
/*                             <table class="dataTable table table-striped table-hover table-condensed" width="100%">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Nom et prénom du contact</th>*/
/*                                 <th>Code</th>*/
/*                                 <th>Email réél</th>*/
/*                                 <th>Email affiché au contact</th>*/
/*                                 <th>par défaut</th>*/
/*                                */
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                         {% endif %}*/
/*                         <tr>*/
/*                             <td>{{ contact.name }}<br>{{ contact.firstname }}</td>*/
/*                             <td>{{ contact.code }}</td>*/
/*                             <td>{{ contact.email }}</td>*/
/*                             <td>{{ contact.fakeEmail }}</td>*/
/*                             <td>{% if contact.isDefault %}Oui{% else %}Non{% endif %}</td>*/
/*                             <td>*/
/*                             */
/*                             <a href="{{ path('update-contact',{'idcontact':contact.id}) }}" class="btn btn-warning" title="Modifier"><i class="fa fa-cogs"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% if loop.last %}*/
/*                             </tbody>*/
/*                             </table>*/
/*                         {% endif %}*/
/* */
/*                                 </div><!-- /.box-body -->*/
/* */
/*                             </div><!-- /.box -->*/
/*                         </div><!-- /.col-md-4 -->*/
/*                         {% if loop.last %}*/
/*                             </div><!-- .row-->*/
/*                         {% endif %}*/
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
