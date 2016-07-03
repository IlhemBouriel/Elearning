<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1d0917ed9eb2c284e6b31b2d24894c37b959365da02020af188b36223a897ac3 extends Twig_Template
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
        $__internal_ed47611b4acc170aea002aca3f00c36d8b31d469e3292386fee02fce6fae11a6 = $this->env->getExtension("native_profiler");
        $__internal_ed47611b4acc170aea002aca3f00c36d8b31d469e3292386fee02fce6fae11a6->enter($__internal_ed47611b4acc170aea002aca3f00c36d8b31d469e3292386fee02fce6fae11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ed47611b4acc170aea002aca3f00c36d8b31d469e3292386fee02fce6fae11a6->leave($__internal_ed47611b4acc170aea002aca3f00c36d8b31d469e3292386fee02fce6fae11a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
