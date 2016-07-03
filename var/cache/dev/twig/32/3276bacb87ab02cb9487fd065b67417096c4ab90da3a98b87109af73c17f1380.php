<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5ee920ef0dcea76bc868f61a6429ee9d2ee9927aafa8791d5a5003c9524f01a4 extends Twig_Template
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
        $__internal_f56b569439c3444e7da482adc788ac66b7fc6af5409c368514e79b165049a07c = $this->env->getExtension("native_profiler");
        $__internal_f56b569439c3444e7da482adc788ac66b7fc6af5409c368514e79b165049a07c->enter($__internal_f56b569439c3444e7da482adc788ac66b7fc6af5409c368514e79b165049a07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f56b569439c3444e7da482adc788ac66b7fc6af5409c368514e79b165049a07c->leave($__internal_f56b569439c3444e7da482adc788ac66b7fc6af5409c368514e79b165049a07c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
