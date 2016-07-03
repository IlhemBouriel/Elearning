<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e3bbb543448ee235881c04abc321b250257e44a367a08082747487ec5f76a09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4ee77ce4e70d82336732b9da4b62d77e49e9677e2fbbd0796623819549d8d4 = $this->env->getExtension("native_profiler");
        $__internal_1e4ee77ce4e70d82336732b9da4b62d77e49e9677e2fbbd0796623819549d8d4->enter($__internal_1e4ee77ce4e70d82336732b9da4b62d77e49e9677e2fbbd0796623819549d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e4ee77ce4e70d82336732b9da4b62d77e49e9677e2fbbd0796623819549d8d4->leave($__internal_1e4ee77ce4e70d82336732b9da4b62d77e49e9677e2fbbd0796623819549d8d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b90d50b7fba68cf44607928d7cb9fb38c3fa8a1cca0e2b5a9adf2ff89beb06c5 = $this->env->getExtension("native_profiler");
        $__internal_b90d50b7fba68cf44607928d7cb9fb38c3fa8a1cca0e2b5a9adf2ff89beb06c5->enter($__internal_b90d50b7fba68cf44607928d7cb9fb38c3fa8a1cca0e2b5a9adf2ff89beb06c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b90d50b7fba68cf44607928d7cb9fb38c3fa8a1cca0e2b5a9adf2ff89beb06c5->leave($__internal_b90d50b7fba68cf44607928d7cb9fb38c3fa8a1cca0e2b5a9adf2ff89beb06c5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53cdbaa452818fb657ddcb3fa5fde01a18f03855ddf6da49762752d8d3724c90 = $this->env->getExtension("native_profiler");
        $__internal_53cdbaa452818fb657ddcb3fa5fde01a18f03855ddf6da49762752d8d3724c90->enter($__internal_53cdbaa452818fb657ddcb3fa5fde01a18f03855ddf6da49762752d8d3724c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_53cdbaa452818fb657ddcb3fa5fde01a18f03855ddf6da49762752d8d3724c90->leave($__internal_53cdbaa452818fb657ddcb3fa5fde01a18f03855ddf6da49762752d8d3724c90_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab870660b6c8eb59c578e6ff9bb6d05e2329967c1da9e67365791c8ae4067d8c = $this->env->getExtension("native_profiler");
        $__internal_ab870660b6c8eb59c578e6ff9bb6d05e2329967c1da9e67365791c8ae4067d8c->enter($__internal_ab870660b6c8eb59c578e6ff9bb6d05e2329967c1da9e67365791c8ae4067d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab870660b6c8eb59c578e6ff9bb6d05e2329967c1da9e67365791c8ae4067d8c->leave($__internal_ab870660b6c8eb59c578e6ff9bb6d05e2329967c1da9e67365791c8ae4067d8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
