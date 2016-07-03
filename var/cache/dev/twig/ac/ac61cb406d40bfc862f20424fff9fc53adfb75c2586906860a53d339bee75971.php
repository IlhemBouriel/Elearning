<?php

/* EtudiantEtudiantBundle:etudiant:connect.html.twig */
class __TwigTemplate_5da0588ff96513c7fdfb18db15b958d6a9667acab2a28eb21ed6a6bc8a290558 extends Twig_Template
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
        $__internal_529aadf8efa44e02bed7417f2d35b8947b9c31cab91ce0cb6cdf407bf6586862 = $this->env->getExtension("native_profiler");
        $__internal_529aadf8efa44e02bed7417f2d35b8947b9c31cab91ce0cb6cdf407bf6586862->enter($__internal_529aadf8efa44e02bed7417f2d35b8947b9c31cab91ce0cb6cdf407bf6586862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:connect.html.twig"));

        // line 1
        if (((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == " ")) {
            // line 2
            echo "    ";
        } else {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
";
        }
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("etudiant_getHome_homepage");
        echo "\" method=\"POST\">
<label for=\"login\">Login:</label>
<input type=\"text\" name=\"login\" required/></br>
<label for=\"pass\">Password:</label>
<input type=\"password\" name=\"pass\" required/></br>
<input type=\"submit\" value=\"connect\"/>
</form>";
        
        $__internal_529aadf8efa44e02bed7417f2d35b8947b9c31cab91ce0cb6cdf407bf6586862->leave($__internal_529aadf8efa44e02bed7417f2d35b8947b9c31cab91ce0cb6cdf407bf6586862_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:connect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if msg == ' ' %}*/
/*     {% else %}*/
/*     {{msg}}*/
/* {% endif %}*/
/* <form action="{{ path('etudiant_getHome_homepage') }}" method="POST">*/
/* <label for="login">Login:</label>*/
/* <input type="text" name="login" required/></br>*/
/* <label for="pass">Password:</label>*/
/* <input type="password" name="pass" required/></br>*/
/* <input type="submit" value="connect"/>*/
/* </form>*/
