<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_96267405d47d58e9413b5d7ec22c66b01bd756c8df23d9ae55665a3bddc96650 extends Twig_Template
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
        $__internal_ca08ebfbf0c3e05ede018615e7f5818bc8564babb807a017868b8daba1ad3bfa = $this->env->getExtension("native_profiler");
        $__internal_ca08ebfbf0c3e05ede018615e7f5818bc8564babb807a017868b8daba1ad3bfa->enter($__internal_ca08ebfbf0c3e05ede018615e7f5818bc8564babb807a017868b8daba1ad3bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ca08ebfbf0c3e05ede018615e7f5818bc8564babb807a017868b8daba1ad3bfa->leave($__internal_ca08ebfbf0c3e05ede018615e7f5818bc8564babb807a017868b8daba1ad3bfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
