<?php

/* @EtudiantEtudiant/etudiant/form.html.twig */
class __TwigTemplate_ec036628b19ec1c56c749aa9c188127774fe45ce84878e6b1341a96d45526667 extends Twig_Template
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
        $__internal_19388e1cd7143dce10d1a066863c6267d6a418ae3794a3bbe52e44c743ca201a = $this->env->getExtension("native_profiler");
        $__internal_19388e1cd7143dce10d1a066863c6267d6a418ae3794a3bbe52e44c743ca201a->enter($__internal_19388e1cd7143dce10d1a066863c6267d6a418ae3794a3bbe52e44c743ca201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/form.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
";
        // line 5
        if (((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == " ")) {
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
            echo "
";
        }
        // line 9
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("etudiant_signin_homepage");
        echo "\" method=\"POST\">
<label for=\"login\">Login:</label>
<input type=\"text\" name=\"login\" required/></br>
<label for=\"pass\">Password:</label>
<input type=\"password\" name=\"pass\" required/><label for=\"pass1\">Re-type the Password:</label>
<input type=\"password\" name=\"pass1\" required/></br>
<label for=\"nom\">First Name:</label>
<input type=\"text\" name=\"nom\" required/></br>
<label for=\"prenom\">Last Name:</label>
<input type=\"text\" name=\"prenom\" required/></br>
<label for=\"fac\">University:</label>
<input type=\"text\" name=\"fac\" required/></br>
<label for=\"mail\">Email:</label>
<input type=\"mail\" name=\"mail\" required/></br>
<input type=\"submit\" value=\"register\"/>
</form>
</body>
</html>";
        
        $__internal_19388e1cd7143dce10d1a066863c6267d6a418ae3794a3bbe52e44c743ca201a->leave($__internal_19388e1cd7143dce10d1a066863c6267d6a418ae3794a3bbe52e44c743ca201a_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* </head>*/
/* <body>*/
/* {% if msg == ' ' %}*/
/*     {% else %}*/
/*     {{msg}}*/
/* {% endif %}*/
/* <form action="{{ path('etudiant_signin_homepage') }}" method="POST">*/
/* <label for="login">Login:</label>*/
/* <input type="text" name="login" required/></br>*/
/* <label for="pass">Password:</label>*/
/* <input type="password" name="pass" required/><label for="pass1">Re-type the Password:</label>*/
/* <input type="password" name="pass1" required/></br>*/
/* <label for="nom">First Name:</label>*/
/* <input type="text" name="nom" required/></br>*/
/* <label for="prenom">Last Name:</label>*/
/* <input type="text" name="prenom" required/></br>*/
/* <label for="fac">University:</label>*/
/* <input type="text" name="fac" required/></br>*/
/* <label for="mail">Email:</label>*/
/* <input type="mail" name="mail" required/></br>*/
/* <input type="submit" value="register"/>*/
/* </form>*/
/* </body>*/
/* </html>*/
