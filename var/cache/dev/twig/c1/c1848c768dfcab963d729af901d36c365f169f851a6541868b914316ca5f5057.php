<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a3e24de2ce2c37522eeaf1b5303325a551bf026f739656a3ae3d3c6951d7cb9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_391f73c9415c128b4176af58dac61d7369a157fb79e497b1dec81258044510f9 = $this->env->getExtension("native_profiler");
        $__internal_391f73c9415c128b4176af58dac61d7369a157fb79e497b1dec81258044510f9->enter($__internal_391f73c9415c128b4176af58dac61d7369a157fb79e497b1dec81258044510f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_391f73c9415c128b4176af58dac61d7369a157fb79e497b1dec81258044510f9->leave($__internal_391f73c9415c128b4176af58dac61d7369a157fb79e497b1dec81258044510f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e1ec3ff61201e8965b8fea78cf18462a453c33ac5b45f1b6c96c578430d5326 = $this->env->getExtension("native_profiler");
        $__internal_9e1ec3ff61201e8965b8fea78cf18462a453c33ac5b45f1b6c96c578430d5326->enter($__internal_9e1ec3ff61201e8965b8fea78cf18462a453c33ac5b45f1b6c96c578430d5326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e1ec3ff61201e8965b8fea78cf18462a453c33ac5b45f1b6c96c578430d5326->leave($__internal_9e1ec3ff61201e8965b8fea78cf18462a453c33ac5b45f1b6c96c578430d5326_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5e36a02cebb12c433cab6bd312dd834831a7a27063683e454fe781a90943e1f = $this->env->getExtension("native_profiler");
        $__internal_c5e36a02cebb12c433cab6bd312dd834831a7a27063683e454fe781a90943e1f->enter($__internal_c5e36a02cebb12c433cab6bd312dd834831a7a27063683e454fe781a90943e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5e36a02cebb12c433cab6bd312dd834831a7a27063683e454fe781a90943e1f->leave($__internal_c5e36a02cebb12c433cab6bd312dd834831a7a27063683e454fe781a90943e1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c54b8a9ae0151914e0b771dd4a7f293fe24792adac64e6de7a2173a883c6ea7f = $this->env->getExtension("native_profiler");
        $__internal_c54b8a9ae0151914e0b771dd4a7f293fe24792adac64e6de7a2173a883c6ea7f->enter($__internal_c54b8a9ae0151914e0b771dd4a7f293fe24792adac64e6de7a2173a883c6ea7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c54b8a9ae0151914e0b771dd4a7f293fe24792adac64e6de7a2173a883c6ea7f->leave($__internal_c54b8a9ae0151914e0b771dd4a7f293fe24792adac64e6de7a2173a883c6ea7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
