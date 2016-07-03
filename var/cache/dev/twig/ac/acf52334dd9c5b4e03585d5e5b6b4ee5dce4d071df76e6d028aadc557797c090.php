<?php

/* @EtudiantEtudiant/etudiant/ListSome.html.twig */
class __TwigTemplate_dc2d3a74297319f906c550afb8f083d67845e65eedd3b5e69a7674a1a18104d6 extends Twig_Template
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
        $__internal_c87a3dd0b1df15a66c8991394eda5eb846e7884f9e3b0405b100c359a71ac38a = $this->env->getExtension("native_profiler");
        $__internal_c87a3dd0b1df15a66c8991394eda5eb846e7884f9e3b0405b100c359a71ac38a->enter($__internal_c87a3dd0b1df15a66c8991394eda5eb846e7884f9e3b0405b100c359a71ac38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/ListSome.html.twig"));

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
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/font/css/font-awesome.min.css"), "html", null, true);
        echo "\">
";
        // line 5
        if (((isset($context["taille"]) ? $context["taille"] : $this->getContext($context, "taille")) == 0)) {
            // line 6
            echo "<div class=\"alert-box notice\"><span style=\"font-size:15px\">notice: </span>you haven't taken any courses.</div>
";
        } else {
            // line 8
            echo "<table id=\"myTable\" class=\"table table-bordered\">
 <thead>
    <tr>
      <th>Course</th>
      <th>Description</th>
      <th>Nb of followers</th>
      <th>Course</th>
      <th>Unfollow</th>
    </tr>
  </thead>
  <tbody>
    ";
            // line 19
            $context["l"] = 1;
            // line 20
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 21
                echo "  <tr>
    <td><b>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "intituleMat", array()), "html", null, true);
                echo "</b></td>
    <td><a href=\"#\" onclick=\"show(";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "idMat", array()), "html", null, true);
                echo ")\">Show Description</a>
      <div id=\"hide";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "idMat", array()), "html", null, true);
                echo "\" style=\"visibility:hidden\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "descriptionMat", array()), "html", null, true);
                echo "</div></td>
    ";
                // line 25
                $context["i"] = $this->getAttribute($context["value"], "idMat", array());
                // line 26
                echo "    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "</td>
    <td><button type=\"button\" onclick=\"start('";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "pathMat", array()), "html", null, true);
                echo "')\" class=\"btn btn-danger img-circle\"  style=\"border-radius:100%\">Start</button>
</td>
    <td><div id=\"stop";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "idMat", array()), "html", null, true);
                echo "\"><button id=\"butt";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "idMat", array()), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-danger img-circle\" onclick=\"stop(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "idMat", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
                echo ")\" style=\"border-radius:100%\">Stop</button></div></td>
  ";
                // line 30
                $context["l"] = ((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) + 1);
                // line 31
                echo "  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  </tbody>
</table>
";
        }
        // line 36
        echo "<script type=\"text/javascript\">
function show(id)
{
  var ch =\"hide\";
  var c=ch.concat(id);
  if(document.getElementById(c).style.visibility==\"hidden\")
  {
    document.getElementById(c).style.visibility=\"visible\";
  }
  else
  {
    document.getElementById(c).style.visibility=\"hidden\";
  }
}

function stop(idmat,idet,l)
{
  var b = \"#butt\";
  var div =\"#stop\";
  var butt=b.concat(idmat);
  var stop=div.concat(idmat);
  \$(butt).hide();
  \$(stop).addClass(\"fa fa-spinner fa-spin fa-3x fa-fw\");
   \$.ajax({
       url : \"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("etudiant_deleteC_homepage");
        echo "\",
       type : \"POST\",
       data : \"idet=\" + idet + \"&idmat=\"+ idmat,
       success : function(code_html){ 
       document.getElementById(\"myTable\").deleteRow(l);
       }
    });
   
}

function start(chemin)
{
  \$.ajax({
    url : \"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("etudiant_openC_homepage");
        echo "\",
    type : \"POST\",
    data : \"chemin=\"+chemin,
    success:function(code_html)
    {
    
    }
  });
}
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c87a3dd0b1df15a66c8991394eda5eb846e7884f9e3b0405b100c359a71ac38a->leave($__internal_c87a3dd0b1df15a66c8991394eda5eb846e7884f9e3b0405b100c359a71ac38a_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/ListSome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 84,  161 => 73,  145 => 60,  119 => 36,  114 => 33,  107 => 31,  105 => 30,  93 => 29,  88 => 27,  83 => 26,  81 => 25,  75 => 24,  71 => 23,  67 => 22,  64 => 21,  59 => 20,  57 => 19,  44 => 8,  40 => 6,  38 => 5,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* <link rel="stylesheet" href="{{ asset('bundles/etudiantetudiant/font/css/font-awesome.min.css') }}">*/
/* {% if taille == 0 %}*/
/* <div class="alert-box notice"><span style="font-size:15px">notice: </span>you haven't taken any courses.</div>*/
/* {% else %}*/
/* <table id="myTable" class="table table-bordered">*/
/*  <thead>*/
/*     <tr>*/
/*       <th>Course</th>*/
/*       <th>Description</th>*/
/*       <th>Nb of followers</th>*/
/*       <th>Course</th>*/
/*       <th>Unfollow</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% set l=1 %}*/
/*  {% for key,value  in courses %}*/
/*   <tr>*/
/*     <td><b>{{value.intituleMat}}</b></td>*/
/*     <td><a href="#" onclick="show({{value.idMat}})">Show Description</a>*/
/*       <div id="hide{{value.idMat}}" style="visibility:hidden">{{value.descriptionMat}}</div></td>*/
/*     {% set i = value.idMat %}*/
/*     <td>{{tab[i]}}</td>*/
/*     <td><button type="button" onclick="start('{{value.pathMat}}')" class="btn btn-danger img-circle"  style="border-radius:100%">Start</button>*/
/* </td>*/
/*     <td><div id="stop{{value.idMat}}"><button id="butt{{value.idMat}}" type="button" class="btn btn-danger img-circle" onclick="stop({{value.idMat}},{{idetud}},{{l}})" style="border-radius:100%">Stop</button></div></td>*/
/*   {% set l = l + 1 %}*/
/*   </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* {% endif %}*/
/* <script type="text/javascript">*/
/* function show(id)*/
/* {*/
/*   var ch ="hide";*/
/*   var c=ch.concat(id);*/
/*   if(document.getElementById(c).style.visibility=="hidden")*/
/*   {*/
/*     document.getElementById(c).style.visibility="visible";*/
/*   }*/
/*   else*/
/*   {*/
/*     document.getElementById(c).style.visibility="hidden";*/
/*   }*/
/* }*/
/* */
/* function stop(idmat,idet,l)*/
/* {*/
/*   var b = "#butt";*/
/*   var div ="#stop";*/
/*   var butt=b.concat(idmat);*/
/*   var stop=div.concat(idmat);*/
/*   $(butt).hide();*/
/*   $(stop).addClass("fa fa-spinner fa-spin fa-3x fa-fw");*/
/*    $.ajax({*/
/*        url : "{{ path('etudiant_deleteC_homepage')}}",*/
/*        type : "POST",*/
/*        data : "idet=" + idet + "&idmat="+ idmat,*/
/*        success : function(code_html){ */
/*        document.getElementById("myTable").deleteRow(l);*/
/*        }*/
/*     });*/
/*    */
/* }*/
/* */
/* function start(chemin)*/
/* {*/
/*   $.ajax({*/
/*     url : "{{path('etudiant_openC_homepage')}}",*/
/*     type : "POST",*/
/*     data : "chemin="+chemin,*/
/*     success:function(code_html)*/
/*     {*/
/*     */
/*     }*/
/*   });*/
/* }*/
/* </script>*/
/* <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js')}}"></script>*/
/* */
