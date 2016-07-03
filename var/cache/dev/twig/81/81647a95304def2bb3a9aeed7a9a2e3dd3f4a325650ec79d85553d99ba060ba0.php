<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_216c60fa35eed9afe164e253160d720f46af3c00184d55e378b769ca4eff18e3 extends Twig_Template
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
        $__internal_1f81002fb5f6636826a5fd4ad7bcc187462055c1f044c941114ef141a09db5c7 = $this->env->getExtension("native_profiler");
        $__internal_1f81002fb5f6636826a5fd4ad7bcc187462055c1f044c941114ef141a09db5c7->enter($__internal_1f81002fb5f6636826a5fd4ad7bcc187462055c1f044c941114ef141a09db5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1f81002fb5f6636826a5fd4ad7bcc187462055c1f044c941114ef141a09db5c7->leave($__internal_1f81002fb5f6636826a5fd4ad7bcc187462055c1f044c941114ef141a09db5c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
