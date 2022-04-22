<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_b0270a03363b16c701eca5bf7e38106627a83d97f78483fd545436e323a61457 extends Twig_Template
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
        $__internal_be62d38b9e1cecec96e369e2a72baa4b349bf53229e5136f6f3b786491f7a5b2 = $this->env->getExtension("native_profiler");
        $__internal_be62d38b9e1cecec96e369e2a72baa4b349bf53229e5136f6f3b786491f7a5b2->enter($__internal_be62d38b9e1cecec96e369e2a72baa4b349bf53229e5136f6f3b786491f7a5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_be62d38b9e1cecec96e369e2a72baa4b349bf53229e5136f6f3b786491f7a5b2->leave($__internal_be62d38b9e1cecec96e369e2a72baa4b349bf53229e5136f6f3b786491f7a5b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
