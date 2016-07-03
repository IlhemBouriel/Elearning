<?php

/* base.html.twig */
class __TwigTemplate_5c8e1ba22ae8b85fda41fb1ea568a7e8e6fada592fe631cbff7cc239ffe29d4b extends Twig_Template
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
        $__internal_f5a087a59e7906c3e007ff1f574ddde250d4a59fc462d7e9bae8a9d4bdd82dfb = $this->env->getExtension("native_profiler");
        $__internal_f5a087a59e7906c3e007ff1f574ddde250d4a59fc462d7e9bae8a9d4bdd82dfb->enter($__internal_f5a087a59e7906c3e007ff1f574ddde250d4a59fc462d7e9bae8a9d4bdd82dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f5a087a59e7906c3e007ff1f574ddde250d4a59fc462d7e9bae8a9d4bdd82dfb->leave($__internal_f5a087a59e7906c3e007ff1f574ddde250d4a59fc462d7e9bae8a9d4bdd82dfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_00d1817571946d8db84a32a6b6dc08ef2c24a8557036e1a964da1840afba1be9 = $this->env->getExtension("native_profiler");
        $__internal_00d1817571946d8db84a32a6b6dc08ef2c24a8557036e1a964da1840afba1be9->enter($__internal_00d1817571946d8db84a32a6b6dc08ef2c24a8557036e1a964da1840afba1be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00d1817571946d8db84a32a6b6dc08ef2c24a8557036e1a964da1840afba1be9->leave($__internal_00d1817571946d8db84a32a6b6dc08ef2c24a8557036e1a964da1840afba1be9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a4612c6fab6fe93cc0364676e35006e6dfc8a8b951bd721c4ab1b9885cc6dea0 = $this->env->getExtension("native_profiler");
        $__internal_a4612c6fab6fe93cc0364676e35006e6dfc8a8b951bd721c4ab1b9885cc6dea0->enter($__internal_a4612c6fab6fe93cc0364676e35006e6dfc8a8b951bd721c4ab1b9885cc6dea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a4612c6fab6fe93cc0364676e35006e6dfc8a8b951bd721c4ab1b9885cc6dea0->leave($__internal_a4612c6fab6fe93cc0364676e35006e6dfc8a8b951bd721c4ab1b9885cc6dea0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e85257ef955b64f8750f9093506c14cc51f50a0fa8cc6b3c31b795ef65a0a6a5 = $this->env->getExtension("native_profiler");
        $__internal_e85257ef955b64f8750f9093506c14cc51f50a0fa8cc6b3c31b795ef65a0a6a5->enter($__internal_e85257ef955b64f8750f9093506c14cc51f50a0fa8cc6b3c31b795ef65a0a6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e85257ef955b64f8750f9093506c14cc51f50a0fa8cc6b3c31b795ef65a0a6a5->leave($__internal_e85257ef955b64f8750f9093506c14cc51f50a0fa8cc6b3c31b795ef65a0a6a5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ed1919bc8489552931a22d9e440e75a7623efcb575832566b8d855ee1abce374 = $this->env->getExtension("native_profiler");
        $__internal_ed1919bc8489552931a22d9e440e75a7623efcb575832566b8d855ee1abce374->enter($__internal_ed1919bc8489552931a22d9e440e75a7623efcb575832566b8d855ee1abce374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed1919bc8489552931a22d9e440e75a7623efcb575832566b8d855ee1abce374->leave($__internal_ed1919bc8489552931a22d9e440e75a7623efcb575832566b8d855ee1abce374_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
