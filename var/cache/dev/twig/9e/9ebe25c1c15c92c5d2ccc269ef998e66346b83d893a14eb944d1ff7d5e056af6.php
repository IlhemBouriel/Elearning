<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b2034442336869d0bedcc324bffcb7ba4ebb59dd60b650607182cae924d7f063 extends Twig_Template
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
        $__internal_94a5bb0da90824e0d516fc011b2f50ab921991a204725f37bab2314c38767243 = $this->env->getExtension("native_profiler");
        $__internal_94a5bb0da90824e0d516fc011b2f50ab921991a204725f37bab2314c38767243->enter($__internal_94a5bb0da90824e0d516fc011b2f50ab921991a204725f37bab2314c38767243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_94a5bb0da90824e0d516fc011b2f50ab921991a204725f37bab2314c38767243->leave($__internal_94a5bb0da90824e0d516fc011b2f50ab921991a204725f37bab2314c38767243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
