<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0ca8c0d311546f209013fa5077305542fb401001ad486c5a45e151946f5c05c2 extends Twig_Template
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
        $__internal_c47b0ef378c7843cee058090778e25de5c9993ef6bfb52c8c771c56e3b7d23a8 = $this->env->getExtension("native_profiler");
        $__internal_c47b0ef378c7843cee058090778e25de5c9993ef6bfb52c8c771c56e3b7d23a8->enter($__internal_c47b0ef378c7843cee058090778e25de5c9993ef6bfb52c8c771c56e3b7d23a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c47b0ef378c7843cee058090778e25de5c9993ef6bfb52c8c771c56e3b7d23a8->leave($__internal_c47b0ef378c7843cee058090778e25de5c9993ef6bfb52c8c771c56e3b7d23a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
