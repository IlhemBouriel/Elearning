<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_931f2371547ce5e96f05ea9286d187c0c8422f48518e5cca7e715de500888846 extends Twig_Template
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
        $__internal_72fbb0b970192f921febf2dd8660bc2b4599ebebce41916485bb5f9c178ea118 = $this->env->getExtension("native_profiler");
        $__internal_72fbb0b970192f921febf2dd8660bc2b4599ebebce41916485bb5f9c178ea118->enter($__internal_72fbb0b970192f921febf2dd8660bc2b4599ebebce41916485bb5f9c178ea118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_72fbb0b970192f921febf2dd8660bc2b4599ebebce41916485bb5f9c178ea118->leave($__internal_72fbb0b970192f921febf2dd8660bc2b4599ebebce41916485bb5f9c178ea118_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
