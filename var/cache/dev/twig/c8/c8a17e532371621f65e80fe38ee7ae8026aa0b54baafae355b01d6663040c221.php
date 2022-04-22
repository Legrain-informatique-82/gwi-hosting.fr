<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_551e03a52f86dc19bd2c8d0020e50841e81a49c717bc26eb4c60e35fbc9adb6c extends Twig_Template
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
        $__internal_b7af769c011610e53c6a80b9c49ad1a0f5baa9a62f78a76dbce84eda3201591e = $this->env->getExtension("native_profiler");
        $__internal_b7af769c011610e53c6a80b9c49ad1a0f5baa9a62f78a76dbce84eda3201591e->enter($__internal_b7af769c011610e53c6a80b9c49ad1a0f5baa9a62f78a76dbce84eda3201591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b7af769c011610e53c6a80b9c49ad1a0f5baa9a62f78a76dbce84eda3201591e->leave($__internal_b7af769c011610e53c6a80b9c49ad1a0f5baa9a62f78a76dbce84eda3201591e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
