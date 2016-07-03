<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e23f9c8a588a4f703a2f77996c3002bf646f6857567189bc7f49cc0acb0c894e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae602dbb7d83c2c089454c0a6aa67cc48a6647a386bb93a77962358e75945124 = $this->env->getExtension("native_profiler");
        $__internal_ae602dbb7d83c2c089454c0a6aa67cc48a6647a386bb93a77962358e75945124->enter($__internal_ae602dbb7d83c2c089454c0a6aa67cc48a6647a386bb93a77962358e75945124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ae602dbb7d83c2c089454c0a6aa67cc48a6647a386bb93a77962358e75945124->leave($__internal_ae602dbb7d83c2c089454c0a6aa67cc48a6647a386bb93a77962358e75945124_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_76eb4fb4c0de74e6db371daa696d6f444a2c5eb70e0adc38fcbbbd13a0f2a877 = $this->env->getExtension("native_profiler");
        $__internal_76eb4fb4c0de74e6db371daa696d6f444a2c5eb70e0adc38fcbbbd13a0f2a877->enter($__internal_76eb4fb4c0de74e6db371daa696d6f444a2c5eb70e0adc38fcbbbd13a0f2a877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_76eb4fb4c0de74e6db371daa696d6f444a2c5eb70e0adc38fcbbbd13a0f2a877->leave($__internal_76eb4fb4c0de74e6db371daa696d6f444a2c5eb70e0adc38fcbbbd13a0f2a877_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
