<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0812bf9e6f8276f926dd8d1d2e72711a85735f108f43f304187c2ce3155a5d03 extends Twig_Template
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
        $__internal_9f2950c119f189187a80a5824edf1f57899668ee252a5ea425530ddc4d610f5d = $this->env->getExtension("native_profiler");
        $__internal_9f2950c119f189187a80a5824edf1f57899668ee252a5ea425530ddc4d610f5d->enter($__internal_9f2950c119f189187a80a5824edf1f57899668ee252a5ea425530ddc4d610f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9f2950c119f189187a80a5824edf1f57899668ee252a5ea425530ddc4d610f5d->leave($__internal_9f2950c119f189187a80a5824edf1f57899668ee252a5ea425530ddc4d610f5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
