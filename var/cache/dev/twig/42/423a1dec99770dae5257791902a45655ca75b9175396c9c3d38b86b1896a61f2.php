<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_eac0eae8bd55a6349543cd95a60ba68280a37895a3c517a2fa04c748b327e171 extends Twig_Template
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
        $__internal_93f25981401dad1f9d8bcc0ed07a6402e81c48257257d64a761f9518a01647b4 = $this->env->getExtension("native_profiler");
        $__internal_93f25981401dad1f9d8bcc0ed07a6402e81c48257257d64a761f9518a01647b4->enter($__internal_93f25981401dad1f9d8bcc0ed07a6402e81c48257257d64a761f9518a01647b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_93f25981401dad1f9d8bcc0ed07a6402e81c48257257d64a761f9518a01647b4->leave($__internal_93f25981401dad1f9d8bcc0ed07a6402e81c48257257d64a761f9518a01647b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
