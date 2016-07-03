<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8cd68ca3599f812502d835b950c748b0a4e32f44112252088ed19245a2f71326 extends Twig_Template
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
        $__internal_06bf40c320e91c2b2ac9a2d269601d7fc3e1de3bb85727737d3e6ce0c94764bc = $this->env->getExtension("native_profiler");
        $__internal_06bf40c320e91c2b2ac9a2d269601d7fc3e1de3bb85727737d3e6ce0c94764bc->enter($__internal_06bf40c320e91c2b2ac9a2d269601d7fc3e1de3bb85727737d3e6ce0c94764bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_06bf40c320e91c2b2ac9a2d269601d7fc3e1de3bb85727737d3e6ce0c94764bc->leave($__internal_06bf40c320e91c2b2ac9a2d269601d7fc3e1de3bb85727737d3e6ce0c94764bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
