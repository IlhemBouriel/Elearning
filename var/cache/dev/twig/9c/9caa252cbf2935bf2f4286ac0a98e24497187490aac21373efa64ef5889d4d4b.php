<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7147c8bbe31a08f88ddb1be0bc62e29dca549a94759e31b3e843fb19102361a0 extends Twig_Template
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
        $__internal_89ef6ae5241281f118ea587d7939c4e8f1427ba2ede4a830a1e2909c821660ce = $this->env->getExtension("native_profiler");
        $__internal_89ef6ae5241281f118ea587d7939c4e8f1427ba2ede4a830a1e2909c821660ce->enter($__internal_89ef6ae5241281f118ea587d7939c4e8f1427ba2ede4a830a1e2909c821660ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_89ef6ae5241281f118ea587d7939c4e8f1427ba2ede4a830a1e2909c821660ce->leave($__internal_89ef6ae5241281f118ea587d7939c4e8f1427ba2ede4a830a1e2909c821660ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
