<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d44fc7174d074ada6c5b5cc2c1238029eac831df132e1d5c640f850567312cbe extends Twig_Template
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
        $__internal_e16fcebf70dee197d269d5e561f7e75598f1bcc781d11262ad29a4c64bf3748b = $this->env->getExtension("native_profiler");
        $__internal_e16fcebf70dee197d269d5e561f7e75598f1bcc781d11262ad29a4c64bf3748b->enter($__internal_e16fcebf70dee197d269d5e561f7e75598f1bcc781d11262ad29a4c64bf3748b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e16fcebf70dee197d269d5e561f7e75598f1bcc781d11262ad29a4c64bf3748b->leave($__internal_e16fcebf70dee197d269d5e561f7e75598f1bcc781d11262ad29a4c64bf3748b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
