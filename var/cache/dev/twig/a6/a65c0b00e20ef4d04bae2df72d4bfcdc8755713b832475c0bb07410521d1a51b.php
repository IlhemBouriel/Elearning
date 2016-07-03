<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3700de413eb8c1c47cc1508da9d0d304cf297d5ccb0c1cf841977e2721f6103f extends Twig_Template
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
        $__internal_8ddb3893127863d3220688814725b857c97ad3e7a8704efe9e36bcbb4dea42bc = $this->env->getExtension("native_profiler");
        $__internal_8ddb3893127863d3220688814725b857c97ad3e7a8704efe9e36bcbb4dea42bc->enter($__internal_8ddb3893127863d3220688814725b857c97ad3e7a8704efe9e36bcbb4dea42bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8ddb3893127863d3220688814725b857c97ad3e7a8704efe9e36bcbb4dea42bc->leave($__internal_8ddb3893127863d3220688814725b857c97ad3e7a8704efe9e36bcbb4dea42bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
