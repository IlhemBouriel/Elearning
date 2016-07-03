<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b70468b6cb5dcb5f1d1da2604c6123014b38562a14f5d7006174e773e17fc115 extends Twig_Template
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
        $__internal_fa550a15475a8c5fedb03a1a2554e68f2bbc92db3b0ae6fb904765014c306ee3 = $this->env->getExtension("native_profiler");
        $__internal_fa550a15475a8c5fedb03a1a2554e68f2bbc92db3b0ae6fb904765014c306ee3->enter($__internal_fa550a15475a8c5fedb03a1a2554e68f2bbc92db3b0ae6fb904765014c306ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa550a15475a8c5fedb03a1a2554e68f2bbc92db3b0ae6fb904765014c306ee3->leave($__internal_fa550a15475a8c5fedb03a1a2554e68f2bbc92db3b0ae6fb904765014c306ee3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
