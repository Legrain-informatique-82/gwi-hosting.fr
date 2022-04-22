<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_cfdb0521c16fb7a015bdab34ee0afe88214b5b515072684d16eeae76a76e19bb extends Twig_Template
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
        $__internal_8880a47d7653564f01e14af10c659f13791b4b82e3c409b37f7f3390f03d6152 = $this->env->getExtension("native_profiler");
        $__internal_8880a47d7653564f01e14af10c659f13791b4b82e3c409b37f7f3390f03d6152->enter($__internal_8880a47d7653564f01e14af10c659f13791b4b82e3c409b37f7f3390f03d6152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8880a47d7653564f01e14af10c659f13791b4b82e3c409b37f7f3390f03d6152->leave($__internal_8880a47d7653564f01e14af10c659f13791b4b82e3c409b37f7f3390f03d6152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
