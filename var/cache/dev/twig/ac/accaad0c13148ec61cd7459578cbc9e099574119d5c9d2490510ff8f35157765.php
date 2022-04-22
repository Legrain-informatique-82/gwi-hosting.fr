<?php

/* :Contact/Fancybox:base.html.twig */
class __TwigTemplate_db54b129b0c8c52007c793bc8680a79991bd6d82a54308843a33a49fd13f1c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47087b9881b69577eb527525ac55f8d74a2d76b9aeb17c6024eff69af95a1e0d = $this->env->getExtension("native_profiler");
        $__internal_47087b9881b69577eb527525ac55f8d74a2d76b9aeb17c6024eff69af95a1e0d->enter($__internal_47087b9881b69577eb527525ac55f8d74a2d76b9aeb17c6024eff69af95a1e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Contact/Fancybox:base.html.twig"));

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
        // line 46
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />



    </head>
    <body>

        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "


    </body>
</html>
";
        
        $__internal_47087b9881b69577eb527525ac55f8d74a2d76b9aeb17c6024eff69af95a1e0d->leave($__internal_47087b9881b69577eb527525ac55f8d74a2d76b9aeb17c6024eff69af95a1e0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a54af772537ebea9c84d5e9e63f6175a5b465acc620072faf04242c0d835ad4c = $this->env->getExtension("native_profiler");
        $__internal_a54af772537ebea9c84d5e9e63f6175a5b465acc620072faf04242c0d835ad4c->enter($__internal_a54af772537ebea9c84d5e9e63f6175a5b465acc620072faf04242c0d835ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a54af772537ebea9c84d5e9e63f6175a5b465acc620072faf04242c0d835ad4c->leave($__internal_a54af772537ebea9c84d5e9e63f6175a5b465acc620072faf04242c0d835ad4c_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86fe572e027ea4e593f7b90ea53f871093c71d3cbdb34b0dae81894ecc4ac3a6 = $this->env->getExtension("native_profiler");
        $__internal_86fe572e027ea4e593f7b90ea53f871093c71d3cbdb34b0dae81894ecc4ac3a6->enter($__internal_86fe572e027ea4e593f7b90ea53f871093c71d3cbdb34b0dae81894ecc4ac3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <!-- Latest compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <!-- Optional theme -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
            <!-- Font Awesome Icons -->
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">

            ";
        // line 16
        if ((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss"))) {
            // line 17
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["csss"]) ? $context["csss"] : $this->getContext($context, "csss")));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 18
                echo "                    <link href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css"]), "html", null, true);
                echo "\" rel=\"stylesheet\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

            <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
            <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>


        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "

        ";
        
        $__internal_86fe572e027ea4e593f7b90ea53f871093c71d3cbdb34b0dae81894ecc4ac3a6->leave($__internal_86fe572e027ea4e593f7b90ea53f871093c71d3cbdb34b0dae81894ecc4ac3a6_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4003850faf2b1d6d059ff97ef19dc675590f5b0c4deb652bcd9ff91520c05265 = $this->env->getExtension("native_profiler");
        $__internal_4003850faf2b1d6d059ff97ef19dc675590f5b0c4deb652bcd9ff91520c05265->enter($__internal_4003850faf2b1d6d059ff97ef19dc675590f5b0c4deb652bcd9ff91520c05265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "            ";
        if ((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss"))) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["jss"]) ? $context["jss"] : $this->getContext($context, "jss")));
            foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
                // line 39
                echo "            <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js"]), "html", null, true);
                echo "\"></script>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        }
        // line 42
        echo "        ";
        
        $__internal_4003850faf2b1d6d059ff97ef19dc675590f5b0c4deb652bcd9ff91520c05265->leave($__internal_4003850faf2b1d6d059ff97ef19dc675590f5b0c4deb652bcd9ff91520c05265_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d0c1a10a867597034816e7b561102459b33d954c24688f8713b703955b33fb = $this->env->getExtension("native_profiler");
        $__internal_07d0c1a10a867597034816e7b561102459b33d954c24688f8713b703955b33fb->enter($__internal_07d0c1a10a867597034816e7b561102459b33d954c24688f8713b703955b33fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "        ";
        
        $__internal_07d0c1a10a867597034816e7b561102459b33d954c24688f8713b703955b33fb->leave($__internal_07d0c1a10a867597034816e7b561102459b33d954c24688f8713b703955b33fb_prof);

    }

    public function getTemplateName()
    {
        return ":Contact/Fancybox:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 54,  172 => 53,  165 => 42,  162 => 41,  153 => 39,  148 => 38,  145 => 37,  139 => 36,  130 => 43,  128 => 36,  111 => 21,  108 => 20,  99 => 18,  94 => 17,  92 => 16,  83 => 9,  77 => 8,  65 => 7,  53 => 55,  51 => 53,  40 => 46,  38 => 8,  34 => 7,  26 => 1,);
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
/* */
/*             {% if csss %}*/
/*                 {% for css in csss %}*/
/*                     <link href="{{ asset( css ) }}" rel="stylesheet" />*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/* */
/*             <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*             <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*             <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*             <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*             <![endif]-->*/
/* */
/*             <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*             <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>*/
/*             <!-- Latest compiled and minified JavaScript -->*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/* */
/*         {% block javascripts %}*/
/*             {% if jss %}*/
/*             {% for js in jss %}*/
/*             <script src="{{ asset( js ) }}"></script>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*         {% endblock %}*/
/* */
/* */
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/* */
/* */
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}*/
/*         {% endblock %}*/
/* */
/* */
/* */
/*     </body>*/
/* </html>*/
/* */
