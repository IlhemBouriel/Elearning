<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a009dfebf2c5deb1e543a7450f2110ed0b082b4129f39193b6c837ac53f94047 extends Twig_Template
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
        $__internal_b6a8e94c9c53c336d0c0e46b61ff294b78f6520644510811aa031ba288835954 = $this->env->getExtension("native_profiler");
        $__internal_b6a8e94c9c53c336d0c0e46b61ff294b78f6520644510811aa031ba288835954->enter($__internal_b6a8e94c9c53c336d0c0e46b61ff294b78f6520644510811aa031ba288835954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b6a8e94c9c53c336d0c0e46b61ff294b78f6520644510811aa031ba288835954->leave($__internal_b6a8e94c9c53c336d0c0e46b61ff294b78f6520644510811aa031ba288835954_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
