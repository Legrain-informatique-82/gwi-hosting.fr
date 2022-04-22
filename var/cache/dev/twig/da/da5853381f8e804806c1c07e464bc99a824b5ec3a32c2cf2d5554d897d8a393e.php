<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_2da92c7bbef405c147c42bb39c08c4eaec0f8e40d8d5a59a056b048e7ebcb4d9 extends Twig_Template
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
        $__internal_c79165fc5c9d39711cbb10deb68c5acb1d4dfe95140ff9829d28299c73c35120 = $this->env->getExtension("native_profiler");
        $__internal_c79165fc5c9d39711cbb10deb68c5acb1d4dfe95140ff9829d28299c73c35120->enter($__internal_c79165fc5c9d39711cbb10deb68c5acb1d4dfe95140ff9829d28299c73c35120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c79165fc5c9d39711cbb10deb68c5acb1d4dfe95140ff9829d28299c73c35120->leave($__internal_c79165fc5c9d39711cbb10deb68c5acb1d4dfe95140ff9829d28299c73c35120_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
