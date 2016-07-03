<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c688466fafd7b3f2a6d492713fbbe01ea1eadb917fc3426a34c6ea934b3d0fa8 extends Twig_Template
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
        $__internal_fde18c43daf202a268308cff04a5b34fc24b4361a6936357dfeb392836903298 = $this->env->getExtension("native_profiler");
        $__internal_fde18c43daf202a268308cff04a5b34fc24b4361a6936357dfeb392836903298->enter($__internal_fde18c43daf202a268308cff04a5b34fc24b4361a6936357dfeb392836903298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fde18c43daf202a268308cff04a5b34fc24b4361a6936357dfeb392836903298->leave($__internal_fde18c43daf202a268308cff04a5b34fc24b4361a6936357dfeb392836903298_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
