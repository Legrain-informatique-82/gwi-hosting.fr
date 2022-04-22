<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1c35ecd820a95c277d3fd8ba78086af0b0f57527bb91aa9e3c5d17e8c63192f3 extends Twig_Template
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
        $__internal_ee6f6bf20166ff5b6c82b9538f24683ebec94bbf3e05a2b44acef85448806735 = $this->env->getExtension("native_profiler");
        $__internal_ee6f6bf20166ff5b6c82b9538f24683ebec94bbf3e05a2b44acef85448806735->enter($__internal_ee6f6bf20166ff5b6c82b9538f24683ebec94bbf3e05a2b44acef85448806735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ee6f6bf20166ff5b6c82b9538f24683ebec94bbf3e05a2b44acef85448806735->leave($__internal_ee6f6bf20166ff5b6c82b9538f24683ebec94bbf3e05a2b44acef85448806735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
