<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_25b4281fccd47b6bcac9649421dff20461124bdf61c946d366ef43e8a455d6da extends Twig_Template
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
        $__internal_5d950543e7b662f2d7b904d995b4185ef44c06de989cabc71f6a3f327e588864 = $this->env->getExtension("native_profiler");
        $__internal_5d950543e7b662f2d7b904d995b4185ef44c06de989cabc71f6a3f327e588864->enter($__internal_5d950543e7b662f2d7b904d995b4185ef44c06de989cabc71f6a3f327e588864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5d950543e7b662f2d7b904d995b4185ef44c06de989cabc71f6a3f327e588864->leave($__internal_5d950543e7b662f2d7b904d995b4185ef44c06de989cabc71f6a3f327e588864_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
