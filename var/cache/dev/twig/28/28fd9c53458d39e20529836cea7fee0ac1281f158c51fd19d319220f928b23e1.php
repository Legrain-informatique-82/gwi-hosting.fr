<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ba8a58c8656bedd1839ff7f9b9636fa970f13beca754d05cd14018c2fc84aa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2fe4f3214df142beb61dc33349ff81a8548d7b1616b808013f154eb8e31f13b = $this->env->getExtension("native_profiler");
        $__internal_f2fe4f3214df142beb61dc33349ff81a8548d7b1616b808013f154eb8e31f13b->enter($__internal_f2fe4f3214df142beb61dc33349ff81a8548d7b1616b808013f154eb8e31f13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2fe4f3214df142beb61dc33349ff81a8548d7b1616b808013f154eb8e31f13b->leave($__internal_f2fe4f3214df142beb61dc33349ff81a8548d7b1616b808013f154eb8e31f13b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f038ef9f94e956d2c5e53a6dafe52b2f3bdce5a8c3f7e1984f5f778967fac7f = $this->env->getExtension("native_profiler");
        $__internal_3f038ef9f94e956d2c5e53a6dafe52b2f3bdce5a8c3f7e1984f5f778967fac7f->enter($__internal_3f038ef9f94e956d2c5e53a6dafe52b2f3bdce5a8c3f7e1984f5f778967fac7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f038ef9f94e956d2c5e53a6dafe52b2f3bdce5a8c3f7e1984f5f778967fac7f->leave($__internal_3f038ef9f94e956d2c5e53a6dafe52b2f3bdce5a8c3f7e1984f5f778967fac7f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6636f6cdb38e2595d02cb7651bd0f0a8b65305349a849704d1f17cc4b1a32118 = $this->env->getExtension("native_profiler");
        $__internal_6636f6cdb38e2595d02cb7651bd0f0a8b65305349a849704d1f17cc4b1a32118->enter($__internal_6636f6cdb38e2595d02cb7651bd0f0a8b65305349a849704d1f17cc4b1a32118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6636f6cdb38e2595d02cb7651bd0f0a8b65305349a849704d1f17cc4b1a32118->leave($__internal_6636f6cdb38e2595d02cb7651bd0f0a8b65305349a849704d1f17cc4b1a32118_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01bf35b267d39c506a8c0508d84acd8c10def88a278f8a49438efe9a394c0cd3 = $this->env->getExtension("native_profiler");
        $__internal_01bf35b267d39c506a8c0508d84acd8c10def88a278f8a49438efe9a394c0cd3->enter($__internal_01bf35b267d39c506a8c0508d84acd8c10def88a278f8a49438efe9a394c0cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01bf35b267d39c506a8c0508d84acd8c10def88a278f8a49438efe9a394c0cd3->leave($__internal_01bf35b267d39c506a8c0508d84acd8c10def88a278f8a49438efe9a394c0cd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
