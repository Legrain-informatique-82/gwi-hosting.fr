<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_109b4d7cf3689312d9335d9b8774e279c5b3be3e3a90f3eddf74c8f0e5822ff2 extends Twig_Template
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
        $__internal_d8a4945acf386dbe7de3da7a0f1def15a30f67d4bcb56b11b4864e906512a3a8 = $this->env->getExtension("native_profiler");
        $__internal_d8a4945acf386dbe7de3da7a0f1def15a30f67d4bcb56b11b4864e906512a3a8->enter($__internal_d8a4945acf386dbe7de3da7a0f1def15a30f67d4bcb56b11b4864e906512a3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_d8a4945acf386dbe7de3da7a0f1def15a30f67d4bcb56b11b4864e906512a3a8->leave($__internal_d8a4945acf386dbe7de3da7a0f1def15a30f67d4bcb56b11b4864e906512a3a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
