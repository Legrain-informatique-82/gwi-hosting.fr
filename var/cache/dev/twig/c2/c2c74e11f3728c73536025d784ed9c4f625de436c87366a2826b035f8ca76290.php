<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6e54b1580c765d032db0052558920cff4ad0e63669d10dad8b157380de9c67d4 extends Twig_Template
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
        $__internal_7d06fd0c0377656e605bad2ade5e7aaff94e5e39cc525108c3b21449a43dcd10 = $this->env->getExtension("native_profiler");
        $__internal_7d06fd0c0377656e605bad2ade5e7aaff94e5e39cc525108c3b21449a43dcd10->enter($__internal_7d06fd0c0377656e605bad2ade5e7aaff94e5e39cc525108c3b21449a43dcd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7d06fd0c0377656e605bad2ade5e7aaff94e5e39cc525108c3b21449a43dcd10->leave($__internal_7d06fd0c0377656e605bad2ade5e7aaff94e5e39cc525108c3b21449a43dcd10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
