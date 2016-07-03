<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_685ea91a877d351453f626b504dd7f8ebda129b94fd4508a96abd132bd0e88bf extends Twig_Template
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
        $__internal_e562e95bb1470a53e1aa311126803066c02fda568b5f1f8244572ea6867165b2 = $this->env->getExtension("native_profiler");
        $__internal_e562e95bb1470a53e1aa311126803066c02fda568b5f1f8244572ea6867165b2->enter($__internal_e562e95bb1470a53e1aa311126803066c02fda568b5f1f8244572ea6867165b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e562e95bb1470a53e1aa311126803066c02fda568b5f1f8244572ea6867165b2->leave($__internal_e562e95bb1470a53e1aa311126803066c02fda568b5f1f8244572ea6867165b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
