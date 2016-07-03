<?php

/* @EtudiantEtudiant/etudiant/setProfile.html.twig */
class __TwigTemplate_f36b2a684192ddf5f696ebb0699e821548fc88a18275ce58f79ff13ac2fb4928 extends Twig_Template
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
        $__internal_2697cf6508158fa00358ccde9ee22542ed8bbff8ffc9e5a5a39fb325c63bfd4b = $this->env->getExtension("native_profiler");
        $__internal_2697cf6508158fa00358ccde9ee22542ed8bbff8ffc9e5a5a39fb325c63bfd4b->enter($__internal_2697cf6508158fa00358ccde9ee22542ed8bbff8ffc9e5a5a39fb325c63bfd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/setProfile.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/alertCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 5
        if (((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == 0)) {
            // line 6
            echo "              ";
        } else {
            // line 7
            echo "    <div class=\"alert-box success\"><span>success: </span>your changes have been saved</div>
    ";
        }
        // line 9
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("etudiant_UpdateProfile_homepage");
        echo "\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Login</label>
    <input type=\"text\" class=\"form-control\" name=\"login\" id=\"exampleInputEmail1\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "login", array()), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    <input type=\"password\" name=\"pass1\" onblur=\"methode1()\"  class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "password", array()), "html", null, true);
        echo "\">
  </div>
  <div style=\"display:none\" id=\"div\" class=\"form-group\">
    <label for=\"exampleInputPassword1\">Retype Password</label>
    <input type=\"password\" name=\"pass2\"  onblur=\"methode2()\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Retype Password\">
  </div>
 <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">FirstName</label>
    <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"exampleInputPassword1\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "nomEtud", array()), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">LastName</label>
    <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"exampleInputPassword1\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "prenomEtud", array()), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Email</label>
    <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["me"]) ? $context["me"] : $this->getContext($context, "me")), "mailEtud", array()), "html", null, true);
        echo "\">
  </div>
  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>

</div>
</div>

<script type=\"text/javascript\">

function methode1()
{
  document.getElementById('div').style.display= 'inline';
}
function methode2()
{
  var pass1 = \$(\"input[name=pass1]\").val();
  var pass2 = \$(\"input[name=pass2]\").val();
  if (pass1 != pass2 )
  {
   \$(\"input[name=pass1]\").val(\"\");
   \$(\"input[name=pass2]\").val(\"\");
 document.getElementById('div').style.display= 'none';
  }
  }

</script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_2697cf6508158fa00358ccde9ee22542ed8bbff8ffc9e5a5a39fb325c63bfd4b->leave($__internal_2697cf6508158fa00358ccde9ee22542ed8bbff8ffc9e5a5a39fb325c63bfd4b_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/setProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 59,  83 => 32,  76 => 28,  69 => 24,  58 => 16,  51 => 12,  44 => 9,  40 => 7,  37 => 6,  35 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* */
/* {% if msg == 0 %}*/
/*               {% else %}*/
/*     <div class="alert-box success"><span>success: </span>your changes have been saved</div>*/
/*     {% endif %}*/
/* <form method="POST" action="{{path('etudiant_UpdateProfile_homepage')}}">*/
/*   <div class="form-group">*/
/*     <label for="exampleInputEmail1">Login</label>*/
/*     <input type="text" class="form-control" name="login" id="exampleInputEmail1" placeholder="{{me.login}}">*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputPassword1">Password</label>*/
/*     <input type="password" name="pass1" onblur="methode1()"  class="form-control" id="exampleInputPassword1" placeholder="{{me.password}}">*/
/*   </div>*/
/*   <div style="display:none" id="div" class="form-group">*/
/*     <label for="exampleInputPassword1">Retype Password</label>*/
/*     <input type="password" name="pass2"  onblur="methode2()" class="form-control" id="exampleInputPassword1" placeholder="Retype Password">*/
/*   </div>*/
/*  <div class="form-group">*/
/*     <label for="exampleInputPassword1">FirstName</label>*/
/*     <input type="text" class="form-control" name="prenom" id="exampleInputPassword1" placeholder="{{me.nomEtud}}">*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputPassword1">LastName</label>*/
/*     <input type="text" class="form-control" name="nom" id="exampleInputPassword1" placeholder="{{me.prenomEtud}}">*/
/*   </div>*/
/*   <div class="form-group">*/
/*     <label for="exampleInputPassword1">Email</label>*/
/*     <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="{{me.mailEtud}}">*/
/*   </div>*/
/*   <button type="submit" class="btn btn-default">Submit</button>*/
/* </form>*/
/* */
/* </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* */
/* function methode1()*/
/* {*/
/*   document.getElementById('div').style.display= 'inline';*/
/* }*/
/* function methode2()*/
/* {*/
/*   var pass1 = $("input[name=pass1]").val();*/
/*   var pass2 = $("input[name=pass2]").val();*/
/*   if (pass1 != pass2 )*/
/*   {*/
/*    $("input[name=pass1]").val("");*/
/*    $("input[name=pass2]").val("");*/
/*  document.getElementById('div').style.display= 'none';*/
/*   }*/
/*   }*/
/* */
/* </script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js') }}"></script>*/
