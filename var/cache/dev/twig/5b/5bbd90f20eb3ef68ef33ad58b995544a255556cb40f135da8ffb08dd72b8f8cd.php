<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_29b4597f6a94de1c26253276024fb6a372a0de0dd283851eec3d9ddfe9bf4ca8 extends Twig_Template
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
        $__internal_34fcb973778fd1d861b45965a16cca09d0c0704ae304cc59c6df9f63c0b48ea3 = $this->env->getExtension("native_profiler");
        $__internal_34fcb973778fd1d861b45965a16cca09d0c0704ae304cc59c6df9f63c0b48ea3->enter($__internal_34fcb973778fd1d861b45965a16cca09d0c0704ae304cc59c6df9f63c0b48ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_34fcb973778fd1d861b45965a16cca09d0c0704ae304cc59c6df9f63c0b48ea3->leave($__internal_34fcb973778fd1d861b45965a16cca09d0c0704ae304cc59c6df9f63c0b48ea3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
