<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d01bfb0558aa0bb92b19be825def239955289468014b24bf2063ab1baa3c44a6 extends Twig_Template
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
        $__internal_a1adce87e5410a62ae866bc16fb86f289ee50a2b24d3418d0880288815e572d3 = $this->env->getExtension("native_profiler");
        $__internal_a1adce87e5410a62ae866bc16fb86f289ee50a2b24d3418d0880288815e572d3->enter($__internal_a1adce87e5410a62ae866bc16fb86f289ee50a2b24d3418d0880288815e572d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a1adce87e5410a62ae866bc16fb86f289ee50a2b24d3418d0880288815e572d3->leave($__internal_a1adce87e5410a62ae866bc16fb86f289ee50a2b24d3418d0880288815e572d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
