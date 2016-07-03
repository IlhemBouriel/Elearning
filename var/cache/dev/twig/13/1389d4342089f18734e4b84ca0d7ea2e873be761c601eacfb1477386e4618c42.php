<?php

/* @EtudiantEtudiant/etudiant/ListAll.html.twig */
class __TwigTemplate_407f1d98318f1542574af8021ce20f9ddae9e3bd5f5b497e400baedf6617c025 extends Twig_Template
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
        $__internal_014dbae1d3337e62a08f0f1c6407d9bc992e71b11ee38dea80eea1df521f0ff3 = $this->env->getExtension("native_profiler");
        $__internal_014dbae1d3337e62a08f0f1c6407d9bc992e71b11ee38dea80eea1df521f0ff3->enter($__internal_014dbae1d3337e62a08f0f1c6407d9bc992e71b11ee38dea80eea1df521f0ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/ListAll.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/font/css/font-awesome.min.css"), "html", null, true);
        echo "\">
<table class=\"table table-bordered\">
 <thead>
    <tr>
      <th>Course</th>
      <th>Description</th>
      <th>Follow</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 13
        $context["i"] = 0;
        // line 14
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mat"]) ? $context["mat"] : $this->getContext($context, "mat")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 15
            echo "    <tr>
      <td><b>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "intituleMat", array()), "html", null, true);
            echo "</b></td>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "descriptionMat", array()), "html", null, true);
            echo "</td>
      <td>
      ";
            // line 19
            if ((isset($context["mine"]) ? $context["mine"] : $this->getContext($context, "mine"))) {
                // line 20
                echo "      ";
                $context["test"] = 0;
                // line 21
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["mine"]) ? $context["mine"] : $this->getContext($context, "mine")));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 22
                    echo "      ";
                    if (($this->getAttribute($context["c"], "idMatAssoc", array()) == $this->getAttribute($context["m"], "idMat", array()))) {
                        // line 23
                        echo "      ";
                        $context["test"] = 1;
                        // line 24
                        echo "      ";
                    }
                    // line 25
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "      ";
                if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) == 1)) {
                    // line 27
                    echo "      Already registered
      ";
                } else {
                    // line 29
                    echo "         <i id=\"icon";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\"></i>
      <div id=\"div";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\">
      <button class=\"btn\" onclick=\"methode(";
                    // line 31
                    echo twig_escape_filter($this->env, (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idMat", array()), "html", null, true);
                    echo ",";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo ")\">Follow</button>  
      ";
                    // line 32
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 33
                    echo "       </div>
       <div id=\"other";
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\"></div>
      ";
                }
                // line 36
                echo "      ";
            } else {
                // line 37
                echo "         <i id=\"icon";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\"></i>
      <div id=\"div";
                // line 38
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\">
      <button class=\"btn\" onclick=\"methode(";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idMat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ")\">Follow</button>  
      ";
                // line 40
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 41
                echo "       </div>
       <div id=\"other";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\"></div>
      ";
            }
            // line 44
            echo "      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tbody>
</table>

<script type=\"text/javascript\">
function methode(et,mat,id)
{
var i = '#div';
var j ='#icon';
var m ='#other';
var ii = i.concat(id);
var jj= j.concat(id);
var mm = m.concat(id+1);
\$(ii).hide();
\$(jj).addClass(\"fa fa-spinner fa-spin fa-3x fa-fw\");
 \$.ajax({
       url : \"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("etudiant_follow_homepage");
        echo "\",
       type : \"POST\",
       data : \"idet=\" + et + \"&idmat=\"+ mat,
       success : function(code_html){ 
       \$(jj).hide();
       \$(mm).addClass('fa fa-3x fa-thumbs-up');
       }
    });
}
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_014dbae1d3337e62a08f0f1c6407d9bc992e71b11ee38dea80eea1df521f0ff3->leave($__internal_014dbae1d3337e62a08f0f1c6407d9bc992e71b11ee38dea80eea1df521f0ff3_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/ListAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 73,  176 => 62,  159 => 47,  151 => 44,  146 => 42,  143 => 41,  141 => 40,  133 => 39,  129 => 38,  124 => 37,  121 => 36,  116 => 34,  113 => 33,  111 => 32,  103 => 31,  99 => 30,  94 => 29,  90 => 27,  87 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  67 => 21,  64 => 20,  62 => 19,  57 => 17,  53 => 16,  50 => 15,  45 => 14,  43 => 13,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <link rel="stylesheet" href="{{ asset('bundles/etudiantetudiant/font/css/font-awesome.min.css') }}">*/
/* <table class="table table-bordered">*/
/*  <thead>*/
/*     <tr>*/
/*       <th>Course</th>*/
/*       <th>Description</th>*/
/*       <th>Follow</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   {% set i = 0 %}*/
/*   {% for m in mat %}*/
/*     <tr>*/
/*       <td><b>{{ m.intituleMat }}</b></td>*/
/*       <td>{{ m.descriptionMat }}</td>*/
/*       <td>*/
/*       {% if mine %}*/
/*       {% set test = 0 %}*/
/*       {% for c in mine %}*/
/*       {% if c.idMatAssoc == m.idMat  %}*/
/*       {% set  test = 1 %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*       {% if test == 1 %}*/
/*       Already registered*/
/*       {% else %}*/
/*          <i id="icon{{i}}"></i>*/
/*       <div id="div{{i}}">*/
/*       <button class="btn" onclick="methode({{idetud}},{{m.idMat}},{{i}})">Follow</button>  */
/*       {% set i = i + 1 %}*/
/*        </div>*/
/*        <div id="other{{i}}"></div>*/
/*       {% endif %}*/
/*       {% else %}*/
/*          <i id="icon{{i}}"></i>*/
/*       <div id="div{{i}}">*/
/*       <button class="btn" onclick="methode({{idetud}},{{m.idMat}},{{i}})">Follow</button>  */
/*       {% set i = i + 1 %}*/
/*        </div>*/
/*        <div id="other{{i}}"></div>*/
/*       {% endif %}*/
/*       </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
/* <script type="text/javascript">*/
/* function methode(et,mat,id)*/
/* {*/
/* var i = '#div';*/
/* var j ='#icon';*/
/* var m ='#other';*/
/* var ii = i.concat(id);*/
/* var jj= j.concat(id);*/
/* var mm = m.concat(id+1);*/
/* $(ii).hide();*/
/* $(jj).addClass("fa fa-spinner fa-spin fa-3x fa-fw");*/
/*  $.ajax({*/
/*        url : "{{ path('etudiant_follow_homepage')}}",*/
/*        type : "POST",*/
/*        data : "idet=" + et + "&idmat="+ mat,*/
/*        success : function(code_html){ */
/*        $(jj).hide();*/
/*        $(mm).addClass('fa fa-3x fa-thumbs-up');*/
/*        }*/
/*     });*/
/* }*/
/* </script>*/
/* <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js')}}"></script>*/
/* */
