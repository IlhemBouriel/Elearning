<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_27de178fc5f55cde0070a76662a69670966bc9ab8ceed4e02803b7ad9d3002f7 extends Twig_Template
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
        $__internal_0bac30fd48eceffe18e476d121c68623a4a769469aaaf9f437624573141ea561 = $this->env->getExtension("native_profiler");
        $__internal_0bac30fd48eceffe18e476d121c68623a4a769469aaaf9f437624573141ea561->enter($__internal_0bac30fd48eceffe18e476d121c68623a4a769469aaaf9f437624573141ea561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_0bac30fd48eceffe18e476d121c68623a4a769469aaaf9f437624573141ea561->leave($__internal_0bac30fd48eceffe18e476d121c68623a4a769469aaaf9f437624573141ea561_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
