<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_abbd0496be690227285ec7b49e6450e855bc912f71342cfdc7cc6a738f86f1d3 extends Twig_Template
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
        $__internal_a86abac6278e8a6f6675589d8a192440126868db3e2d9b664ffb7aac38577ba0 = $this->env->getExtension("native_profiler");
        $__internal_a86abac6278e8a6f6675589d8a192440126868db3e2d9b664ffb7aac38577ba0->enter($__internal_a86abac6278e8a6f6675589d8a192440126868db3e2d9b664ffb7aac38577ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a86abac6278e8a6f6675589d8a192440126868db3e2d9b664ffb7aac38577ba0->leave($__internal_a86abac6278e8a6f6675589d8a192440126868db3e2d9b664ffb7aac38577ba0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
