<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b292fd2ba1a6833f7e3c467789a627a73696b54fe34b0b5a2bb4eda1e4682afb extends Twig_Template
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
        $__internal_a596b27471ec27e6f338428ffbd6e0df31b45ee2ac40aa519ffb90f38b146702 = $this->env->getExtension("native_profiler");
        $__internal_a596b27471ec27e6f338428ffbd6e0df31b45ee2ac40aa519ffb90f38b146702->enter($__internal_a596b27471ec27e6f338428ffbd6e0df31b45ee2ac40aa519ffb90f38b146702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a596b27471ec27e6f338428ffbd6e0df31b45ee2ac40aa519ffb90f38b146702->leave($__internal_a596b27471ec27e6f338428ffbd6e0df31b45ee2ac40aa519ffb90f38b146702_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
