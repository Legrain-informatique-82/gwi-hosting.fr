<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0316d70b51167c532dbea5efe29532549fc6f1f32e82183dc8e05097d3984653 extends Twig_Template
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
        $__internal_0aa3fb51952477118783a7ab0bd7e59c6b9e3493b0a917a1a1ea0260c2d23489 = $this->env->getExtension("native_profiler");
        $__internal_0aa3fb51952477118783a7ab0bd7e59c6b9e3493b0a917a1a1ea0260c2d23489->enter($__internal_0aa3fb51952477118783a7ab0bd7e59c6b9e3493b0a917a1a1ea0260c2d23489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0aa3fb51952477118783a7ab0bd7e59c6b9e3493b0a917a1a1ea0260c2d23489->leave($__internal_0aa3fb51952477118783a7ab0bd7e59c6b9e3493b0a917a1a1ea0260c2d23489_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
