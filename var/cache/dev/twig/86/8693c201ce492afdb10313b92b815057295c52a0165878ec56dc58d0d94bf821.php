<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1e8ee0460db07abbc0624db74ee179a4cb69bbe89688fc621e37c8bdd2d59245 extends Twig_Template
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
        $__internal_0d47c005356b85be394d7c09dbc9888736f9a7ea193acec712748be7d122da2d = $this->env->getExtension("native_profiler");
        $__internal_0d47c005356b85be394d7c09dbc9888736f9a7ea193acec712748be7d122da2d->enter($__internal_0d47c005356b85be394d7c09dbc9888736f9a7ea193acec712748be7d122da2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0d47c005356b85be394d7c09dbc9888736f9a7ea193acec712748be7d122da2d->leave($__internal_0d47c005356b85be394d7c09dbc9888736f9a7ea193acec712748be7d122da2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
