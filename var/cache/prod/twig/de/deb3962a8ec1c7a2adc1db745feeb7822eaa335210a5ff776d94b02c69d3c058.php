<?php

/* :Contact/List:contacts.html.twig */
class __TwigTemplate_e668a0890807aefe723a3420f950ddb6f40b67fe54dda90fc5bfff4e5231284f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "

                </h1>

                ";
        // line 21
        $this->loadTemplate("breadcrumb.html.twig", ":Contact/List:contacts.html.twig", 21)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
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
        return array (  202 => 87,  200 => 86,  188 => 76,  174 => 75,  170 => 73,  168 => 72,  161 => 67,  156 => 64,  154 => 63,  148 => 60,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  120 => 53,  117 => 52,  101 => 38,  98 => 37,  96 => 36,  79 => 35,  72 => 30,  70 => 29,  61 => 22,  59 => 21,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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
