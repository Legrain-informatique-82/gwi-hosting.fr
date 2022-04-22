<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b22212e6cb74fbf6b6eec0f4efee52a9275bdf62d62bf3c8931498d449092b19 extends Twig_Template
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
        $__internal_559dd35f7e8bef740a5451d8c88b505f8321eebcd33bf8ff2e78a46ef740d447 = $this->env->getExtension("native_profiler");
        $__internal_559dd35f7e8bef740a5451d8c88b505f8321eebcd33bf8ff2e78a46ef740d447->enter($__internal_559dd35f7e8bef740a5451d8c88b505f8321eebcd33bf8ff2e78a46ef740d447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_559dd35f7e8bef740a5451d8c88b505f8321eebcd33bf8ff2e78a46ef740d447->leave($__internal_559dd35f7e8bef740a5451d8c88b505f8321eebcd33bf8ff2e78a46ef740d447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
