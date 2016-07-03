<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_986a32659dd5bb87668a1b8a59b8b8a8c7da81f290404673a16fdc0f1927561e extends Twig_Template
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
        $__internal_50474a20aafb6356c4972ad51ed6f103ff16bd2219adab02f16d3d66625461d8 = $this->env->getExtension("native_profiler");
        $__internal_50474a20aafb6356c4972ad51ed6f103ff16bd2219adab02f16d3d66625461d8->enter($__internal_50474a20aafb6356c4972ad51ed6f103ff16bd2219adab02f16d3d66625461d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_50474a20aafb6356c4972ad51ed6f103ff16bd2219adab02f16d3d66625461d8->leave($__internal_50474a20aafb6356c4972ad51ed6f103ff16bd2219adab02f16d3d66625461d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
