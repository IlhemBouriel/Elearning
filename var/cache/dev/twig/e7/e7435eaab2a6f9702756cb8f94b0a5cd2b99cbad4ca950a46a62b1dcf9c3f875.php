<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8ae2addd4b12f6b539e22ffc6b595a9f8c473c0212fc2606d92d001796299921 extends Twig_Template
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
        $__internal_dbd9144db7a5a810cf4354552cbe37173a931596f7444feb9386df605d1a168c = $this->env->getExtension("native_profiler");
        $__internal_dbd9144db7a5a810cf4354552cbe37173a931596f7444feb9386df605d1a168c->enter($__internal_dbd9144db7a5a810cf4354552cbe37173a931596f7444feb9386df605d1a168c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dbd9144db7a5a810cf4354552cbe37173a931596f7444feb9386df605d1a168c->leave($__internal_dbd9144db7a5a810cf4354552cbe37173a931596f7444feb9386df605d1a168c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
