<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_384d6ef4583884860eb6c0dba85fb3b9f3ba4c02e43cecf39513106464aad9a5 extends Twig_Template
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
        $__internal_ac35a64adeb5c1853b3962a17b495e915ece90ad44f3066ead6c48561abeaa49 = $this->env->getExtension("native_profiler");
        $__internal_ac35a64adeb5c1853b3962a17b495e915ece90ad44f3066ead6c48561abeaa49->enter($__internal_ac35a64adeb5c1853b3962a17b495e915ece90ad44f3066ead6c48561abeaa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ac35a64adeb5c1853b3962a17b495e915ece90ad44f3066ead6c48561abeaa49->leave($__internal_ac35a64adeb5c1853b3962a17b495e915ece90ad44f3066ead6c48561abeaa49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
