<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_63037ca32ea4b3c28dd94e6cb1a8a86e56107cf3e74c508b3ae5c21df6346ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76d57c9c6a6dd0e93b2cdd9457fc3d781a470f2cc1be5679fea6a09b0fd73d21 = $this->env->getExtension("native_profiler");
        $__internal_76d57c9c6a6dd0e93b2cdd9457fc3d781a470f2cc1be5679fea6a09b0fd73d21->enter($__internal_76d57c9c6a6dd0e93b2cdd9457fc3d781a470f2cc1be5679fea6a09b0fd73d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_76d57c9c6a6dd0e93b2cdd9457fc3d781a470f2cc1be5679fea6a09b0fd73d21->leave($__internal_76d57c9c6a6dd0e93b2cdd9457fc3d781a470f2cc1be5679fea6a09b0fd73d21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
