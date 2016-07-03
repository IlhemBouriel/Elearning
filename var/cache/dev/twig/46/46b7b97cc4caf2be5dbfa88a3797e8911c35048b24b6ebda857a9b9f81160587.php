<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2024cae772df8e2093c5b557e35650935f86ed940cec5e93bd68804144277339 extends Twig_Template
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
        $__internal_ae861b63da05a37c233c7cc6ffd283a94ca3c953530b78e83292be871a405e50 = $this->env->getExtension("native_profiler");
        $__internal_ae861b63da05a37c233c7cc6ffd283a94ca3c953530b78e83292be871a405e50->enter($__internal_ae861b63da05a37c233c7cc6ffd283a94ca3c953530b78e83292be871a405e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ae861b63da05a37c233c7cc6ffd283a94ca3c953530b78e83292be871a405e50->leave($__internal_ae861b63da05a37c233c7cc6ffd283a94ca3c953530b78e83292be871a405e50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
