<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2ae406a54974d1310e3d16d87fc433ad9d75048480352c8691976e180230c145 extends Twig_Template
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
        $__internal_599bd5b84d5e580a9036ec255cc3c8de9058fd8135593970bc00e1fa9b260c67 = $this->env->getExtension("native_profiler");
        $__internal_599bd5b84d5e580a9036ec255cc3c8de9058fd8135593970bc00e1fa9b260c67->enter($__internal_599bd5b84d5e580a9036ec255cc3c8de9058fd8135593970bc00e1fa9b260c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_599bd5b84d5e580a9036ec255cc3c8de9058fd8135593970bc00e1fa9b260c67->leave($__internal_599bd5b84d5e580a9036ec255cc3c8de9058fd8135593970bc00e1fa9b260c67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
