<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2384617b73f93ed106d0c81038f936e7c2b0ac00a5fcf3cc9f0af75c2ed3ed21 extends Twig_Template
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
        $__internal_409ee33da76d19ee5f1d0ab5d7be25b201af9c83ef47d3abda69e0316b5cfad9 = $this->env->getExtension("native_profiler");
        $__internal_409ee33da76d19ee5f1d0ab5d7be25b201af9c83ef47d3abda69e0316b5cfad9->enter($__internal_409ee33da76d19ee5f1d0ab5d7be25b201af9c83ef47d3abda69e0316b5cfad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_409ee33da76d19ee5f1d0ab5d7be25b201af9c83ef47d3abda69e0316b5cfad9->leave($__internal_409ee33da76d19ee5f1d0ab5d7be25b201af9c83ef47d3abda69e0316b5cfad9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
