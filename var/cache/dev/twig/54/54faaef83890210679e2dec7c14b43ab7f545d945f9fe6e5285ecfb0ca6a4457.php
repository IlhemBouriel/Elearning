<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_169b9e642ddc6b88c90e00129a2d9bd75edaa7e1cbeee55ddef1fae50bab646e extends Twig_Template
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
        $__internal_3c43a5a8d877f73304b3876e9b3ff8215b2f470c33ae56a95e5515736bb190cd = $this->env->getExtension("native_profiler");
        $__internal_3c43a5a8d877f73304b3876e9b3ff8215b2f470c33ae56a95e5515736bb190cd->enter($__internal_3c43a5a8d877f73304b3876e9b3ff8215b2f470c33ae56a95e5515736bb190cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3c43a5a8d877f73304b3876e9b3ff8215b2f470c33ae56a95e5515736bb190cd->leave($__internal_3c43a5a8d877f73304b3876e9b3ff8215b2f470c33ae56a95e5515736bb190cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
