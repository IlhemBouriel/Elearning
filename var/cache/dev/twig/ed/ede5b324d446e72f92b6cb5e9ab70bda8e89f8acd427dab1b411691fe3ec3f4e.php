<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ec76617c00ce9d696f1d3c991e088cb667f82b0f31b5cbf590158b2cacde3957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7217cb90d6542cc9bd14cb5db2ed2479cf16f6ec48d8a943ed9630636b7914a = $this->env->getExtension("native_profiler");
        $__internal_d7217cb90d6542cc9bd14cb5db2ed2479cf16f6ec48d8a943ed9630636b7914a->enter($__internal_d7217cb90d6542cc9bd14cb5db2ed2479cf16f6ec48d8a943ed9630636b7914a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7217cb90d6542cc9bd14cb5db2ed2479cf16f6ec48d8a943ed9630636b7914a->leave($__internal_d7217cb90d6542cc9bd14cb5db2ed2479cf16f6ec48d8a943ed9630636b7914a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e93391233cb2a812e19dc87310e8fe0af9200c77e39cfb924ea2ca422d887b35 = $this->env->getExtension("native_profiler");
        $__internal_e93391233cb2a812e19dc87310e8fe0af9200c77e39cfb924ea2ca422d887b35->enter($__internal_e93391233cb2a812e19dc87310e8fe0af9200c77e39cfb924ea2ca422d887b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e93391233cb2a812e19dc87310e8fe0af9200c77e39cfb924ea2ca422d887b35->leave($__internal_e93391233cb2a812e19dc87310e8fe0af9200c77e39cfb924ea2ca422d887b35_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_210eb6cddaebb87c71d54c795d8b322bbe70c94e11c6b0603293446c0bb6c9fa = $this->env->getExtension("native_profiler");
        $__internal_210eb6cddaebb87c71d54c795d8b322bbe70c94e11c6b0603293446c0bb6c9fa->enter($__internal_210eb6cddaebb87c71d54c795d8b322bbe70c94e11c6b0603293446c0bb6c9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_210eb6cddaebb87c71d54c795d8b322bbe70c94e11c6b0603293446c0bb6c9fa->leave($__internal_210eb6cddaebb87c71d54c795d8b322bbe70c94e11c6b0603293446c0bb6c9fa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b45fb29a6283af5076f641c2dcc57457ad69b0e7936b9cb47af289d9aacc3c = $this->env->getExtension("native_profiler");
        $__internal_f6b45fb29a6283af5076f641c2dcc57457ad69b0e7936b9cb47af289d9aacc3c->enter($__internal_f6b45fb29a6283af5076f641c2dcc57457ad69b0e7936b9cb47af289d9aacc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f6b45fb29a6283af5076f641c2dcc57457ad69b0e7936b9cb47af289d9aacc3c->leave($__internal_f6b45fb29a6283af5076f641c2dcc57457ad69b0e7936b9cb47af289d9aacc3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
