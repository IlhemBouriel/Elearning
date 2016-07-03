<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_326806d7a1be16c358d8b10b3a5bfb171c1184b9e4bf5d597904c23fa96c53e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_de4875ed2ded3435798987131d15e004c30c0f91990302974a9bee0989c04e34 = $this->env->getExtension("native_profiler");
        $__internal_de4875ed2ded3435798987131d15e004c30c0f91990302974a9bee0989c04e34->enter($__internal_de4875ed2ded3435798987131d15e004c30c0f91990302974a9bee0989c04e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4875ed2ded3435798987131d15e004c30c0f91990302974a9bee0989c04e34->leave($__internal_de4875ed2ded3435798987131d15e004c30c0f91990302974a9bee0989c04e34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07b0b74ce35726ca834f16b571b75f0771796432913c405f8847c64baf0bef37 = $this->env->getExtension("native_profiler");
        $__internal_07b0b74ce35726ca834f16b571b75f0771796432913c405f8847c64baf0bef37->enter($__internal_07b0b74ce35726ca834f16b571b75f0771796432913c405f8847c64baf0bef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07b0b74ce35726ca834f16b571b75f0771796432913c405f8847c64baf0bef37->leave($__internal_07b0b74ce35726ca834f16b571b75f0771796432913c405f8847c64baf0bef37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57a24b1e50581d5bfe0d774b5bfda11b6e167f7d5b5458a7f9086de6dc23e3af = $this->env->getExtension("native_profiler");
        $__internal_57a24b1e50581d5bfe0d774b5bfda11b6e167f7d5b5458a7f9086de6dc23e3af->enter($__internal_57a24b1e50581d5bfe0d774b5bfda11b6e167f7d5b5458a7f9086de6dc23e3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57a24b1e50581d5bfe0d774b5bfda11b6e167f7d5b5458a7f9086de6dc23e3af->leave($__internal_57a24b1e50581d5bfe0d774b5bfda11b6e167f7d5b5458a7f9086de6dc23e3af_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9886ac59ca9d6e40660af8bbdcb03f7e1d41bcfa82ca80a17d2bda7820bc0f55 = $this->env->getExtension("native_profiler");
        $__internal_9886ac59ca9d6e40660af8bbdcb03f7e1d41bcfa82ca80a17d2bda7820bc0f55->enter($__internal_9886ac59ca9d6e40660af8bbdcb03f7e1d41bcfa82ca80a17d2bda7820bc0f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9886ac59ca9d6e40660af8bbdcb03f7e1d41bcfa82ca80a17d2bda7820bc0f55->leave($__internal_9886ac59ca9d6e40660af8bbdcb03f7e1d41bcfa82ca80a17d2bda7820bc0f55_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
