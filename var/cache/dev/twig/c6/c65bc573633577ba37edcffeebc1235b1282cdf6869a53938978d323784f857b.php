<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0ace0cc9786289fa264f9914201c617d3e4bdafa11819a9ae3d2133c63a12fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_ae197796a87ad05cd0e5e14381c1599fa8658da7395dbe5bf5097bd278bc12b1 = $this->env->getExtension("native_profiler");
        $__internal_ae197796a87ad05cd0e5e14381c1599fa8658da7395dbe5bf5097bd278bc12b1->enter($__internal_ae197796a87ad05cd0e5e14381c1599fa8658da7395dbe5bf5097bd278bc12b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae197796a87ad05cd0e5e14381c1599fa8658da7395dbe5bf5097bd278bc12b1->leave($__internal_ae197796a87ad05cd0e5e14381c1599fa8658da7395dbe5bf5097bd278bc12b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_beb668a0b9145cc6a6b942e29ed1ef53ffdb7c4e7620c876b59329f415a50788 = $this->env->getExtension("native_profiler");
        $__internal_beb668a0b9145cc6a6b942e29ed1ef53ffdb7c4e7620c876b59329f415a50788->enter($__internal_beb668a0b9145cc6a6b942e29ed1ef53ffdb7c4e7620c876b59329f415a50788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_beb668a0b9145cc6a6b942e29ed1ef53ffdb7c4e7620c876b59329f415a50788->leave($__internal_beb668a0b9145cc6a6b942e29ed1ef53ffdb7c4e7620c876b59329f415a50788_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_579eda08a351b440a37c11528fecce2ccd39a2a4c87b591d3bce3e0e83bc267d = $this->env->getExtension("native_profiler");
        $__internal_579eda08a351b440a37c11528fecce2ccd39a2a4c87b591d3bce3e0e83bc267d->enter($__internal_579eda08a351b440a37c11528fecce2ccd39a2a4c87b591d3bce3e0e83bc267d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_579eda08a351b440a37c11528fecce2ccd39a2a4c87b591d3bce3e0e83bc267d->leave($__internal_579eda08a351b440a37c11528fecce2ccd39a2a4c87b591d3bce3e0e83bc267d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
