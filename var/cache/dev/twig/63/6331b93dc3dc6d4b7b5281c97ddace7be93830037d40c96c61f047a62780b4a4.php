<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_be7778525aa08cbf673a88bc58ace06610490d337b523ebb8894ca3600623978 extends Twig_Template
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
        $__internal_8cb9b22b4a3853c00578fe1e98fe57e4d20e3a8395cf1ed3ee39bcf96d8e6d90 = $this->env->getExtension("native_profiler");
        $__internal_8cb9b22b4a3853c00578fe1e98fe57e4d20e3a8395cf1ed3ee39bcf96d8e6d90->enter($__internal_8cb9b22b4a3853c00578fe1e98fe57e4d20e3a8395cf1ed3ee39bcf96d8e6d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8cb9b22b4a3853c00578fe1e98fe57e4d20e3a8395cf1ed3ee39bcf96d8e6d90->leave($__internal_8cb9b22b4a3853c00578fe1e98fe57e4d20e3a8395cf1ed3ee39bcf96d8e6d90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
