<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3e4adfb67418edc052991a6446186d2ae0a822a213565d7aae2f829876f46e1e extends Twig_Template
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
        $__internal_f41f9901303bfed8c4b634fd998023a2f07079b5227e08f78a5c27fd29059d03 = $this->env->getExtension("native_profiler");
        $__internal_f41f9901303bfed8c4b634fd998023a2f07079b5227e08f78a5c27fd29059d03->enter($__internal_f41f9901303bfed8c4b634fd998023a2f07079b5227e08f78a5c27fd29059d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f41f9901303bfed8c4b634fd998023a2f07079b5227e08f78a5c27fd29059d03->leave($__internal_f41f9901303bfed8c4b634fd998023a2f07079b5227e08f78a5c27fd29059d03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
