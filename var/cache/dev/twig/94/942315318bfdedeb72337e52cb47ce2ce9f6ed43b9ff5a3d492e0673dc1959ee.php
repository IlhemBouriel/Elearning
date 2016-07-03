<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a4bf6028b3a696a41361cd1d172e1d6eb0b5f69cbeac8ea91e1e540cfd674aa2 extends Twig_Template
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
        $__internal_77bd9e5c4311c527c3e51eb310b4160109f2e8cf3afe45180d79c43376d6bd42 = $this->env->getExtension("native_profiler");
        $__internal_77bd9e5c4311c527c3e51eb310b4160109f2e8cf3afe45180d79c43376d6bd42->enter($__internal_77bd9e5c4311c527c3e51eb310b4160109f2e8cf3afe45180d79c43376d6bd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_77bd9e5c4311c527c3e51eb310b4160109f2e8cf3afe45180d79c43376d6bd42->leave($__internal_77bd9e5c4311c527c3e51eb310b4160109f2e8cf3afe45180d79c43376d6bd42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
