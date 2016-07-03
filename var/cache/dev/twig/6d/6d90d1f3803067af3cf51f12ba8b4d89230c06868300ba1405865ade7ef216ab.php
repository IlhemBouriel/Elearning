<?php

/* ::base.html.twig */
class __TwigTemplate_b8874e2c264621ae5006354607b9ff6cb9fe2afbf4d80e8a852dc97acd5fcee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c79b17ccef152ac9564d025c3d1435e53958e4bcbb170275ea10c929c003cc8c = $this->env->getExtension("native_profiler");
        $__internal_c79b17ccef152ac9564d025c3d1435e53958e4bcbb170275ea10c929c003cc8c->enter($__internal_c79b17ccef152ac9564d025c3d1435e53958e4bcbb170275ea10c929c003cc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c79b17ccef152ac9564d025c3d1435e53958e4bcbb170275ea10c929c003cc8c->leave($__internal_c79b17ccef152ac9564d025c3d1435e53958e4bcbb170275ea10c929c003cc8c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a56ddc4708310d009c86b9a477bf094150bdbd29b88f0a4faca15b716b3e0c = $this->env->getExtension("native_profiler");
        $__internal_10a56ddc4708310d009c86b9a477bf094150bdbd29b88f0a4faca15b716b3e0c->enter($__internal_10a56ddc4708310d009c86b9a477bf094150bdbd29b88f0a4faca15b716b3e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_10a56ddc4708310d009c86b9a477bf094150bdbd29b88f0a4faca15b716b3e0c->leave($__internal_10a56ddc4708310d009c86b9a477bf094150bdbd29b88f0a4faca15b716b3e0c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d2f8d51a882131adf5df2414147ed7acc8e000518ff4f026cd11330671d12b4 = $this->env->getExtension("native_profiler");
        $__internal_8d2f8d51a882131adf5df2414147ed7acc8e000518ff4f026cd11330671d12b4->enter($__internal_8d2f8d51a882131adf5df2414147ed7acc8e000518ff4f026cd11330671d12b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d2f8d51a882131adf5df2414147ed7acc8e000518ff4f026cd11330671d12b4->leave($__internal_8d2f8d51a882131adf5df2414147ed7acc8e000518ff4f026cd11330671d12b4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d35765e4ae776b81bbf80abd4479b5011a4940221e6e066019a21030e874b311 = $this->env->getExtension("native_profiler");
        $__internal_d35765e4ae776b81bbf80abd4479b5011a4940221e6e066019a21030e874b311->enter($__internal_d35765e4ae776b81bbf80abd4479b5011a4940221e6e066019a21030e874b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d35765e4ae776b81bbf80abd4479b5011a4940221e6e066019a21030e874b311->leave($__internal_d35765e4ae776b81bbf80abd4479b5011a4940221e6e066019a21030e874b311_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_79417775349689a1ffe5146fbec78655dff4d3613911a8c0e8124b63e516cce7 = $this->env->getExtension("native_profiler");
        $__internal_79417775349689a1ffe5146fbec78655dff4d3613911a8c0e8124b63e516cce7->enter($__internal_79417775349689a1ffe5146fbec78655dff4d3613911a8c0e8124b63e516cce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_79417775349689a1ffe5146fbec78655dff4d3613911a8c0e8124b63e516cce7->leave($__internal_79417775349689a1ffe5146fbec78655dff4d3613911a8c0e8124b63e516cce7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
