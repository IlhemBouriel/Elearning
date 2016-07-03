<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_6515c39956f12d92990e83430a79c91a77afd2afb29972158da01f872bc1f985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_26a7a0af99aa94b1e1a41b2d7f059911ab4b3d57cb91ff8a58df8abf17f410e4 = $this->env->getExtension("native_profiler");
        $__internal_26a7a0af99aa94b1e1a41b2d7f059911ab4b3d57cb91ff8a58df8abf17f410e4->enter($__internal_26a7a0af99aa94b1e1a41b2d7f059911ab4b3d57cb91ff8a58df8abf17f410e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a7a0af99aa94b1e1a41b2d7f059911ab4b3d57cb91ff8a58df8abf17f410e4->leave($__internal_26a7a0af99aa94b1e1a41b2d7f059911ab4b3d57cb91ff8a58df8abf17f410e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cf621394a987e97cfc87e9d9107818ecac98725918f8855376089cabbbc070a = $this->env->getExtension("native_profiler");
        $__internal_7cf621394a987e97cfc87e9d9107818ecac98725918f8855376089cabbbc070a->enter($__internal_7cf621394a987e97cfc87e9d9107818ecac98725918f8855376089cabbbc070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7cf621394a987e97cfc87e9d9107818ecac98725918f8855376089cabbbc070a->leave($__internal_7cf621394a987e97cfc87e9d9107818ecac98725918f8855376089cabbbc070a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0842abeff2c74bb33a1030581c2b32b721f145f88b967f218dfa1c92914770c5 = $this->env->getExtension("native_profiler");
        $__internal_0842abeff2c74bb33a1030581c2b32b721f145f88b967f218dfa1c92914770c5->enter($__internal_0842abeff2c74bb33a1030581c2b32b721f145f88b967f218dfa1c92914770c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0842abeff2c74bb33a1030581c2b32b721f145f88b967f218dfa1c92914770c5->leave($__internal_0842abeff2c74bb33a1030581c2b32b721f145f88b967f218dfa1c92914770c5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
