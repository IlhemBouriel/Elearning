<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_b5ab34bcb8d385326a9164ed2b41bf1f6b2b3a304f75775e83ba3a93dc3ec406 extends Twig_Template
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
        $__internal_5e49d25da005292b2aac82d689241e218aee4f58388f9271d4f9e72a100ab988 = $this->env->getExtension("native_profiler");
        $__internal_5e49d25da005292b2aac82d689241e218aee4f58388f9271d4f9e72a100ab988->enter($__internal_5e49d25da005292b2aac82d689241e218aee4f58388f9271d4f9e72a100ab988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5e49d25da005292b2aac82d689241e218aee4f58388f9271d4f9e72a100ab988->leave($__internal_5e49d25da005292b2aac82d689241e218aee4f58388f9271d4f9e72a100ab988_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
