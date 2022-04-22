<?php

/* :Public:base.html.twig */
class __TwigTemplate_3c78f6bc69bf60617e7d69c415d2d1132c200064817477bde2767d8c3ed35834 extends Twig_Template
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
        $__internal_3b6599ebaa16e1807c388618fe38f3e629d8dcc6d2cc8d6f0e915a7faaa4694f = $this->env->getExtension("native_profiler");
        $__internal_3b6599ebaa16e1807c388618fe38f3e629d8dcc6d2cc8d6f0e915a7faaa4694f->enter($__internal_3b6599ebaa16e1807c388618fe38f3e629d8dcc6d2cc8d6f0e915a7faaa4694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Public:base.html.twig"));

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
        
        $__internal_3b6599ebaa16e1807c388618fe38f3e629d8dcc6d2cc8d6f0e915a7faaa4694f->leave($__internal_3b6599ebaa16e1807c388618fe38f3e629d8dcc6d2cc8d6f0e915a7faaa4694f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65ec979d79032d31f007888d86396c2f96059db206a623f26e3b9ed890ac7610 = $this->env->getExtension("native_profiler");
        $__internal_65ec979d79032d31f007888d86396c2f96059db206a623f26e3b9ed890ac7610->enter($__internal_65ec979d79032d31f007888d86396c2f96059db206a623f26e3b9ed890ac7610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_65ec979d79032d31f007888d86396c2f96059db206a623f26e3b9ed890ac7610->leave($__internal_65ec979d79032d31f007888d86396c2f96059db206a623f26e3b9ed890ac7610_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da93af1f948490ff6e1d3233dab02df0a043a836edc59d08c72dd485097db1b7 = $this->env->getExtension("native_profiler");
        $__internal_da93af1f948490ff6e1d3233dab02df0a043a836edc59d08c72dd485097db1b7->enter($__internal_da93af1f948490ff6e1d3233dab02df0a043a836edc59d08c72dd485097db1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        if ((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss"))) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss")));
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
        
        $__internal_da93af1f948490ff6e1d3233dab02df0a043a836edc59d08c72dd485097db1b7->leave($__internal_da93af1f948490ff6e1d3233dab02df0a043a836edc59d08c72dd485097db1b7_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_11cafffa0a6d88f12c14b820bc164832eac21cee106f861c37d83a33699bb2d3 = $this->env->getExtension("native_profiler");
        $__internal_11cafffa0a6d88f12c14b820bc164832eac21cee106f861c37d83a33699bb2d3->enter($__internal_11cafffa0a6d88f12c14b820bc164832eac21cee106f861c37d83a33699bb2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    ";
        
        $__internal_11cafffa0a6d88f12c14b820bc164832eac21cee106f861c37d83a33699bb2d3->leave($__internal_11cafffa0a6d88f12c14b820bc164832eac21cee106f861c37d83a33699bb2d3_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83716656bb9b8764b2bc4a0d1e3f84b49b8540804400b32a98ad7c0130bdadd7 = $this->env->getExtension("native_profiler");
        $__internal_83716656bb9b8764b2bc4a0d1e3f84b49b8540804400b32a98ad7c0130bdadd7->enter($__internal_83716656bb9b8764b2bc4a0d1e3f84b49b8540804400b32a98ad7c0130bdadd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        if ((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss"))) {
            // line 51
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss")));
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
        
        $__internal_83716656bb9b8764b2bc4a0d1e3f84b49b8540804400b32a98ad7c0130bdadd7->leave($__internal_83716656bb9b8764b2bc4a0d1e3f84b49b8540804400b32a98ad7c0130bdadd7_prof);

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
        return array (  178 => 54,  169 => 52,  164 => 51,  161 => 50,  155 => 49,  148 => 40,  142 => 39,  129 => 22,  126 => 21,  117 => 19,  112 => 18,  110 => 17,  105 => 15,  97 => 9,  91 => 8,  79 => 7,  68 => 56,  66 => 49,  56 => 41,  54 => 39,  40 => 29,  38 => 8,  34 => 7,  26 => 1,);
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
