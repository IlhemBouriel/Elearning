<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d3858ce4095756c5ac8214d0de02911679f49ff5228e00e17c88ef3277812b1c extends Twig_Template
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
        $__internal_103a2acdd18175971afb6d2d11a06c68aaa326aaafdba8f81c8fb4ea89a2689c = $this->env->getExtension("native_profiler");
        $__internal_103a2acdd18175971afb6d2d11a06c68aaa326aaafdba8f81c8fb4ea89a2689c->enter($__internal_103a2acdd18175971afb6d2d11a06c68aaa326aaafdba8f81c8fb4ea89a2689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_103a2acdd18175971afb6d2d11a06c68aaa326aaafdba8f81c8fb4ea89a2689c->leave($__internal_103a2acdd18175971afb6d2d11a06c68aaa326aaafdba8f81c8fb4ea89a2689c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
