<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b160deae8c7da05f9d593b0c11ae507094688441a8897a3f59d783aa86232e1c extends Twig_Template
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
        $__internal_bb1b304852f8abf62e9f3a876dee2f8a7c16fe31d8577ae0509ba1bed5faf844 = $this->env->getExtension("native_profiler");
        $__internal_bb1b304852f8abf62e9f3a876dee2f8a7c16fe31d8577ae0509ba1bed5faf844->enter($__internal_bb1b304852f8abf62e9f3a876dee2f8a7c16fe31d8577ae0509ba1bed5faf844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bb1b304852f8abf62e9f3a876dee2f8a7c16fe31d8577ae0509ba1bed5faf844->leave($__internal_bb1b304852f8abf62e9f3a876dee2f8a7c16fe31d8577ae0509ba1bed5faf844_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
