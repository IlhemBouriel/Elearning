<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_eee6557aa1582c34a24b1a61ff73e00b4455657c177fec7a05ecf3cced9686eb extends Twig_Template
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
        $__internal_98583f696cf2c1175d08304588f67ab369a2c32a94089bae189eea3fabc84e6c = $this->env->getExtension("native_profiler");
        $__internal_98583f696cf2c1175d08304588f67ab369a2c32a94089bae189eea3fabc84e6c->enter($__internal_98583f696cf2c1175d08304588f67ab369a2c32a94089bae189eea3fabc84e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_98583f696cf2c1175d08304588f67ab369a2c32a94089bae189eea3fabc84e6c->leave($__internal_98583f696cf2c1175d08304588f67ab369a2c32a94089bae189eea3fabc84e6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
