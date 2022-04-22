<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fba9ad36d53ad67dae1c1b2ecc8344f71d70331a675822725755877bb6baf6b6 extends Twig_Template
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
        $__internal_c10877f843c17928e7f2f7588abcc6e3d23365e7ed0a963516efe81f0ebd623f = $this->env->getExtension("native_profiler");
        $__internal_c10877f843c17928e7f2f7588abcc6e3d23365e7ed0a963516efe81f0ebd623f->enter($__internal_c10877f843c17928e7f2f7588abcc6e3d23365e7ed0a963516efe81f0ebd623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c10877f843c17928e7f2f7588abcc6e3d23365e7ed0a963516efe81f0ebd623f->leave($__internal_c10877f843c17928e7f2f7588abcc6e3d23365e7ed0a963516efe81f0ebd623f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
