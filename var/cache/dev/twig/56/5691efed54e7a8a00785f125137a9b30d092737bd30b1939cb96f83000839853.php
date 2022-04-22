<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_67d7faf8d65ec12e4870cdc81665e2279623d17ac24f34c844635b94d5215c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238dc29272e14ed3f77727ad3968ff4f2ef0baf4c896a95303ec16859de26781 = $this->env->getExtension("native_profiler");
        $__internal_238dc29272e14ed3f77727ad3968ff4f2ef0baf4c896a95303ec16859de26781->enter($__internal_238dc29272e14ed3f77727ad3968ff4f2ef0baf4c896a95303ec16859de26781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_238dc29272e14ed3f77727ad3968ff4f2ef0baf4c896a95303ec16859de26781->leave($__internal_238dc29272e14ed3f77727ad3968ff4f2ef0baf4c896a95303ec16859de26781_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_28bcc1feeb86aec781d8dfa525e3d5c31c6e69dfca53c3a452ec30be67581d83 = $this->env->getExtension("native_profiler");
        $__internal_28bcc1feeb86aec781d8dfa525e3d5c31c6e69dfca53c3a452ec30be67581d83->enter($__internal_28bcc1feeb86aec781d8dfa525e3d5c31c6e69dfca53c3a452ec30be67581d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_28bcc1feeb86aec781d8dfa525e3d5c31c6e69dfca53c3a452ec30be67581d83->leave($__internal_28bcc1feeb86aec781d8dfa525e3d5c31c6e69dfca53c3a452ec30be67581d83_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
