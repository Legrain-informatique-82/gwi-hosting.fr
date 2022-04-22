<?php

/* base.html.twig */
class __TwigTemplate_707e1470f81e23583d153dde8cf698216a708ef425195d7ccfef56fb75f51eb3 extends Twig_Template
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
        $__internal_c0ffd28c449303bd5341347377d99f1e9842abe873b7ec7f0c02edb09985ac69 = $this->env->getExtension("native_profiler");
        $__internal_c0ffd28c449303bd5341347377d99f1e9842abe873b7ec7f0c02edb09985ac69->enter($__internal_c0ffd28c449303bd5341347377d99f1e9842abe873b7ec7f0c02edb09985ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 30
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />



    </head>
    <body class=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["classBody"]) ? $context["classBody"] : $this->getContext($context, "classBody")), "html", null, true);
        echo "\">

        ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

        <!-- SlimScroll 1.3.0 -->
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("adminLTE/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


        ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "

    </body>
</html>
";
        
        $__internal_c0ffd28c449303bd5341347377d99f1e9842abe873b7ec7f0c02edb09985ac69->leave($__internal_c0ffd28c449303bd5341347377d99f1e9842abe873b7ec7f0c02edb09985ac69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da4b5f07b8f96f54e3cd868b7122f545689fa347679f9666a07f7358cc2fdb26 = $this->env->getExtension("native_profiler");
        $__internal_da4b5f07b8f96f54e3cd868b7122f545689fa347679f9666a07f7358cc2fdb26->enter($__internal_da4b5f07b8f96f54e3cd868b7122f545689fa347679f9666a07f7358cc2fdb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da4b5f07b8f96f54e3cd868b7122f545689fa347679f9666a07f7358cc2fdb26->leave($__internal_da4b5f07b8f96f54e3cd868b7122f545689fa347679f9666a07f7358cc2fdb26_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9c5f781fdff69fefa6bdfa344f0b4a7d6bb267f0af53de7753d4842f7e8f3f22 = $this->env->getExtension("native_profiler");
        $__internal_9c5f781fdff69fefa6bdfa344f0b4a7d6bb267f0af53de7753d4842f7e8f3f22->enter($__internal_9c5f781fdff69fefa6bdfa344f0b4a7d6bb267f0af53de7753d4842f7e8f3f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
            <!-- Font Awesome Icons -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("adminLTE/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("adminLTE/skins/skin-blue.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            ";
        // line 18
        if ((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss"))) {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss")));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 20
                echo "                    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css"]), "html", null, true);
                echo "\" rel=\"stylesheet\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "            ";
        }
        // line 23
        echo "            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->
        ";
        
        $__internal_9c5f781fdff69fefa6bdfa344f0b4a7d6bb267f0af53de7753d4842f7e8f3f22->leave($__internal_9c5f781fdff69fefa6bdfa344f0b4a7d6bb267f0af53de7753d4842f7e8f3f22_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d6d470007d7ae81f0297a2d0b2294a40847598a1b5642b3c392280f8c64c22 = $this->env->getExtension("native_profiler");
        $__internal_02d6d470007d7ae81f0297a2d0b2294a40847598a1b5642b3c392280f8c64c22->enter($__internal_02d6d470007d7ae81f0297a2d0b2294a40847598a1b5642b3c392280f8c64c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "        ";
        
        $__internal_02d6d470007d7ae81f0297a2d0b2294a40847598a1b5642b3c392280f8c64c22->leave($__internal_02d6d470007d7ae81f0297a2d0b2294a40847598a1b5642b3c392280f8c64c22_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d2b72c908e7c89082018dcd32fd95982e25cec8e894ca2503422622e61063f3 = $this->env->getExtension("native_profiler");
        $__internal_8d2b72c908e7c89082018dcd32fd95982e25cec8e894ca2503422622e61063f3->enter($__internal_8d2b72c908e7c89082018dcd32fd95982e25cec8e894ca2503422622e61063f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "            ";
        if ((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss"))) {
            // line 51
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss")));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 52
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js"]), "html", null, true);
                echo "\"></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            ";
        }
        // line 55
        echo "        ";
        
        $__internal_8d2b72c908e7c89082018dcd32fd95982e25cec8e894ca2503422622e61063f3->leave($__internal_8d2b72c908e7c89082018dcd32fd95982e25cec8e894ca2503422622e61063f3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  190 => 54,  181 => 52,  176 => 51,  173 => 50,  167 => 49,  160 => 38,  154 => 37,  141 => 23,  138 => 22,  129 => 20,  124 => 19,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  102 => 9,  96 => 8,  84 => 7,  73 => 56,  71 => 49,  65 => 46,  56 => 39,  54 => 37,  49 => 35,  40 => 30,  38 => 8,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <!-- Tell the browser to be responsive to screen width -->*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Latest compiled and minified CSS -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <!-- Optional theme -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*             <!-- Font Awesome Icons -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*             <link href="{{ asset('adminLTE/AdminLTE.min.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('adminLTE/skins/skin-blue.min.css') }}" rel="stylesheet" />*/
/*             <link href="{{ asset('css/main.css') }}" rel="stylesheet" />*/
/*             {% if csss %}*/
/*                 {% for css in csss %}*/
/*                     <link href="{{ asset( css ) }}" rel="stylesheet" />*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*             <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*             <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*             <![endif]-->*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* */
/*     </head>*/
/*     <body class="{{ classBody }}">*/
/* */
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/*         <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*         <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/*         <!-- SlimScroll 1.3.0 -->*/
/*         <script src="{{ asset('adminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>*/
/* */
/* */
/*         {% block javascripts %}*/
/*             {% if jss %}*/
/*                 {% for js in jss %}*/
/*                     <script src="{{ asset( js ) }}"></script>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
