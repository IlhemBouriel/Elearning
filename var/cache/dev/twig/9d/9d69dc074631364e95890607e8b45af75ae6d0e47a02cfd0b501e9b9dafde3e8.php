<?php

/* @EtudiantEtudiant/etudiant/connect.html.twig */
class __TwigTemplate_053fdd1ee4c34dcb9418a6d152a9df9ca4e1203e68cbe77c5b67d41095cc3eeb extends Twig_Template
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
        $__internal_46041f8ff4b3c1689be81581825c9a1deb60fab98d6265809e01772dce7ae88d = $this->env->getExtension("native_profiler");
        $__internal_46041f8ff4b3c1689be81581825c9a1deb60fab98d6265809e01772dce7ae88d->enter($__internal_46041f8ff4b3c1689be81581825c9a1deb60fab98d6265809e01772dce7ae88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/connect.html.twig"));

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
        
        $__internal_46041f8ff4b3c1689be81581825c9a1deb60fab98d6265809e01772dce7ae88d->leave($__internal_46041f8ff4b3c1689be81581825c9a1deb60fab98d6265809e01772dce7ae88d_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/connect.html.twig";
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
