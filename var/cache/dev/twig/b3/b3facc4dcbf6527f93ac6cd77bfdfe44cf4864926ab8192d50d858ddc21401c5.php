<?php

/* EtudiantEtudiantBundle:etudiant:home.html.twig */
class __TwigTemplate_9329e2c0f68cf5a4fa832aa8b06d65ed8cd9e93ba482f2d8d01c31282bb9344a extends Twig_Template
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
        $__internal_f4972e0a744726231316e69934f17f90f4c21bee81df63838fc4650d43da2985 = $this->env->getExtension("native_profiler");
        $__internal_f4972e0a744726231316e69934f17f90f4c21bee81df63838fc4650d43da2985->enter($__internal_f4972e0a744726231316e69934f17f90f4c21bee81df63838fc4650d43da2985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:home.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/alertCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        // line 3
        if (((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")) == " ")) {
            // line 4
            echo "    ";
        } else {
            // line 5
            echo "    ";
            if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 1)) {
                // line 6
                echo "    <div class=\"alert-box success\"><span>success: </span>";
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
                echo "</div>
    ";
            } elseif ((            // line 7
(isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == 2)) {
                // line 8
                echo "    <div class=\"alert-box error\"><span>error: </span>";
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 10
                echo "    <div class=\"alert-box warning\"><span>warning: </span>";
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
                echo "</div>
    ";
            }
        }
        // line 13
        echo " </div>
            
            </div>
        
        </div>
";
        
        $__internal_f4972e0a744726231316e69934f17f90f4c21bee81df63838fc4650d43da2985->leave($__internal_f4972e0a744726231316e69934f17f90f4c21bee81df63838fc4650d43da2985_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  51 => 10,  45 => 8,  43 => 7,  38 => 6,  35 => 5,  32 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* {% if msg == ' ' %}*/
/*     {% else %}*/
/*     {% if code == 1 %}*/
/*     <div class="alert-box success"><span>success: </span>{{msg}}</div>*/
/*     {% elseif code == 2 %}*/
/*     <div class="alert-box error"><span>error: </span>{{msg}}</div>*/
/*     {% else %}*/
/*     <div class="alert-box warning"><span>warning: </span>{{msg}}</div>*/
/*     {% endif %}*/
/* {% endif %}*/
/*  </div>*/
/*             */
/*             </div>*/
/*         */
/*         </div>*/
/* */
