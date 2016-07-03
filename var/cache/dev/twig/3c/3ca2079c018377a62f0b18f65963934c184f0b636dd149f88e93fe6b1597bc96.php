<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_78ab164dc014574ff0b7249787d0c5eed99f40ea8a3c1eca488e24cd4b3c4d93 extends Twig_Template
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
        $__internal_eb03e94109c9a2adb8759cbccd605f8e7be9353bf8a51627580422a2efe44e7a = $this->env->getExtension("native_profiler");
        $__internal_eb03e94109c9a2adb8759cbccd605f8e7be9353bf8a51627580422a2efe44e7a->enter($__internal_eb03e94109c9a2adb8759cbccd605f8e7be9353bf8a51627580422a2efe44e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_eb03e94109c9a2adb8759cbccd605f8e7be9353bf8a51627580422a2efe44e7a->leave($__internal_eb03e94109c9a2adb8759cbccd605f8e7be9353bf8a51627580422a2efe44e7a_prof);

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
