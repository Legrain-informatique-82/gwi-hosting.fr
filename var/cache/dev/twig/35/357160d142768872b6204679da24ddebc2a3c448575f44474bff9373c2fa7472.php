<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7d196622d88c8365d56188d166f0bc4ff789a00b0b44513a8c9c0b1b70e66e3c extends Twig_Template
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
        $__internal_060a6789185cfc5371498598d1239213f998a75a667472873819a45b44679f10 = $this->env->getExtension("native_profiler");
        $__internal_060a6789185cfc5371498598d1239213f998a75a667472873819a45b44679f10->enter($__internal_060a6789185cfc5371498598d1239213f998a75a667472873819a45b44679f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_060a6789185cfc5371498598d1239213f998a75a667472873819a45b44679f10->leave($__internal_060a6789185cfc5371498598d1239213f998a75a667472873819a45b44679f10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
