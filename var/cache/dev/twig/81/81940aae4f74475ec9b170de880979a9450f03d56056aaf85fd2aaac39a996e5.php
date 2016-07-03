<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0cdb87607aff533b9a936b53a06d52229566f047f8c3c1aff42330f22e331c1b extends Twig_Template
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
        $__internal_35d103cc058d7fa58f237c513e7a85d1cf9d260f187a397353696d661120b04d = $this->env->getExtension("native_profiler");
        $__internal_35d103cc058d7fa58f237c513e7a85d1cf9d260f187a397353696d661120b04d->enter($__internal_35d103cc058d7fa58f237c513e7a85d1cf9d260f187a397353696d661120b04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_35d103cc058d7fa58f237c513e7a85d1cf9d260f187a397353696d661120b04d->leave($__internal_35d103cc058d7fa58f237c513e7a85d1cf9d260f187a397353696d661120b04d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
