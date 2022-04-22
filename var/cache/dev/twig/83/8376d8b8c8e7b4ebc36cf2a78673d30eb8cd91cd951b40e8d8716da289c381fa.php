<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3944d75ffe12931e15757b6da6dbc4f53d615c91d83c734724300714ded4a51b extends Twig_Template
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
        $__internal_5f6e7681e30ce833d3b23565e53687a7233cad38d15d4bdc66fd3b96b7225fa0 = $this->env->getExtension("native_profiler");
        $__internal_5f6e7681e30ce833d3b23565e53687a7233cad38d15d4bdc66fd3b96b7225fa0->enter($__internal_5f6e7681e30ce833d3b23565e53687a7233cad38d15d4bdc66fd3b96b7225fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5f6e7681e30ce833d3b23565e53687a7233cad38d15d4bdc66fd3b96b7225fa0->leave($__internal_5f6e7681e30ce833d3b23565e53687a7233cad38d15d4bdc66fd3b96b7225fa0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
