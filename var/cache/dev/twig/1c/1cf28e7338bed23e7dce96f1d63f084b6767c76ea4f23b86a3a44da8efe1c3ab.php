<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_fd19e4faf1fb2f21aad2ed08084320b97926d8f3b843d7fa140434a5e8d84dfe extends Twig_Template
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
        $__internal_61c3659298ad7180d1d6e2f3c80ad09ecbca97fa4a84e85a151acb5450fc1b83 = $this->env->getExtension("native_profiler");
        $__internal_61c3659298ad7180d1d6e2f3c80ad09ecbca97fa4a84e85a151acb5450fc1b83->enter($__internal_61c3659298ad7180d1d6e2f3c80ad09ecbca97fa4a84e85a151acb5450fc1b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_61c3659298ad7180d1d6e2f3c80ad09ecbca97fa4a84e85a151acb5450fc1b83->leave($__internal_61c3659298ad7180d1d6e2f3c80ad09ecbca97fa4a84e85a151acb5450fc1b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
