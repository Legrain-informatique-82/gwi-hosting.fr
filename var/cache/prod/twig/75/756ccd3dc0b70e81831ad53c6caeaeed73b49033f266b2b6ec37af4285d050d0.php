<?php

/* :Public:base.html.twig */
class __TwigTemplate_d15fe2f5e0bb7f12ab64a8f5d7822546db3eb5567434d18bc17342288b828a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <meta charset=\"UTF-8\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />



</head>
<body >




    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "
<script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
<script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
<!-- Latest compiled and minified JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>



";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "

</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
        <!-- Font Awesome Icons -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/public.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
        // line 17
        if ((isset($context["csss"]) ? $context["csss"] : null)) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["csss"]) ? $context["csss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 19
                echo "                <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css"]), "html", null, true);
                echo "\" rel=\"stylesheet\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ((isset($context["jss"]) ? $context["jss"] : null)) {
            // line 51
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jss"]) ? $context["jss"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 52
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js"]), "html", null, true);
                echo "\"></script>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return ":Public:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  142 => 52,  137 => 51,  134 => 50,  131 => 49,  127 => 40,  124 => 39,  114 => 22,  111 => 21,  102 => 19,  97 => 18,  95 => 17,  90 => 15,  82 => 9,  79 => 8,  73 => 7,  65 => 56,  63 => 49,  53 => 41,  51 => 39,  37 => 29,  35 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*         <!-- Font Awesome Icons -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*         <link href="{{ asset('css/public.css') }}" rel="stylesheet" />*/
/* */
/*         {% if csss %}*/
/*             {% for css in csss %}*/
/*                 <link href="{{ asset( css ) }}" rel="stylesheet" />*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/*     {% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* */
/* </head>*/
/* <body >*/
/* */
/* */
/* */
/* */
/*     {% block body %}*/
/*     {% endblock %}*/
/* */
/* <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/* <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/* <!-- Latest compiled and minified JavaScript -->*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/*     {% if jss %}*/
/*         {% for js in jss %}*/
/*             <script src="{{ asset( js ) }}"></script>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */
