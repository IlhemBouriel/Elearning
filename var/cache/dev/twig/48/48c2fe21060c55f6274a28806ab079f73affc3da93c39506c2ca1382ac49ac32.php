<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5e5358d8ac67074c78311776d2d7355eb9d2a54e9f21e392f3520e8edf33e684 extends Twig_Template
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
        $__internal_eab0f88bdecb5a783de4040b62aafeede22646c69ed7650b7b66aaa3206002ce = $this->env->getExtension("native_profiler");
        $__internal_eab0f88bdecb5a783de4040b62aafeede22646c69ed7650b7b66aaa3206002ce->enter($__internal_eab0f88bdecb5a783de4040b62aafeede22646c69ed7650b7b66aaa3206002ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_eab0f88bdecb5a783de4040b62aafeede22646c69ed7650b7b66aaa3206002ce->leave($__internal_eab0f88bdecb5a783de4040b62aafeede22646c69ed7650b7b66aaa3206002ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
