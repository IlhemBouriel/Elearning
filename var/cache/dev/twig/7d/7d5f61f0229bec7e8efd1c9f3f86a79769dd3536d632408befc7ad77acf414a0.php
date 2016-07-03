<?php

/* @EtudiantEtudiant/etudiant/randomlist.html.twig */
class __TwigTemplate_d5ea94e033035f1eba3ab9ce29fbb7995bd022cb0fe5a7ea7a1ab63ce26289fb extends Twig_Template
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
        $__internal_64f5fb40dee8ee54e4e1cbf7612e508ab3b021120a03ce0628f5cd48061254d9 = $this->env->getExtension("native_profiler");
        $__internal_64f5fb40dee8ee54e4e1cbf7612e508ab3b021120a03ce0628f5cd48061254d9->enter($__internal_64f5fb40dee8ee54e4e1cbf7612e508ab3b021120a03ce0628f5cd48061254d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/randomlist.html.twig"));

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

<style type=\"text/css\">


.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: black;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h3 {
  margin-top: 0;
  color: #ecf0f1;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: red;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
#boutton:hover {
\tfont-family: Arial,sans-serif;
     font-size: 1.6em;
     width: 200px;
     height: 43px;
     padding-top: 7px; /*permet le centrage vertical*/
     text-align: center;
     color: #000;
     background: #444;
}
p{
  color:#bdc3c7;
}
.bordure
{
  border-width:1px;
 border-style:solid;
 border-color:black;
 padding-left:10px;
 border-radius: 10px;

}
</style>


<div id=\"content\">
";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 83
            echo "<div id=\"bordure";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
<div class=\"bordure\">
</br>
<h4> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")), $context["key"], array(), "array"), "intituleMat", array()), "html", null, true);
            echo "</h4></br>
";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "ennonce", array()), "html", null, true);
            echo "</br> 
";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["QuestRep"]) ? $context["QuestRep"] : $this->getContext($context, "QuestRep")));
            foreach ($context['_seq'] as $context["k"] => $context["val"]) {
                // line 89
                if (($context["k"] == $context["key"])) {
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                        // line 91
                        echo "
      <button onclick=\"methode(";
                        // line 92
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["matieres"]) ? $context["matieres"] : $this->getContext($context, "matieres")), $context["key"], array(), "array"), "idMat", array()), "html", null, true);
                        echo ",";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")), $this->getAttribute($context["ch"], "idChoixAssoc", array()), array(), "array"), "statut", array()), "html", null, true);
                        echo ")\" type=\"button\" class=\"btn btn-default\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")), $this->getAttribute($context["ch"], "idChoixAssoc", array()), array(), "array"), "texte", array()), "html", null, true);
                        echo "</button>

<a id=\"lien";
                        // line 94
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                        echo "\" style=\"visibility:hidden\" href=\"#popup";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                        echo "\" type=\"button\" class=\"btn btn-default\" />


     <div id=\"popup";
                        // line 97
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                        echo "\"  class=\"overlay\">
  <div class=\"popup\">
  ";
                        // line 99
                        if (($this->getAttribute($this->getAttribute((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")), $this->getAttribute($context["ch"], "idChoixAssoc", array()), array(), "array"), "statut", array()) == "true")) {
                            // line 100
                            echo "    <a class=\"close\" href=\"#\">×</a>
    <h3>TRUE</h3>
    <div class=\"content\">
      <p>";
                            // line 103
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")), $this->getAttribute($context["ch"], "idChoixAssoc", array()), array(), "array"), "texte", array()), "html", null, true);
                            echo " is the right answer .</p>
    </div>
    ";
                        } else {
                            // line 106
                            echo "    <a class=\"close\" href=\"#\">×</a>
        <h3>FALSE</h3>
    <div class=\"content\">
     <p> Thanks for for the try, but \" ";
                            // line 109
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")), $this->getAttribute($context["ch"], "idChoixAssoc", array()), array(), "array"), "texte", array()), "html", null, true);
                            echo " \" isn't the right answer .</p>
    </div>
    ";
                        }
                        // line 112
                        echo "  
</div>
</div>

";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "</br></br>
</div>
</div>
</br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "</div>




    
            </div>
        
        </div>

        <script type=\"text/javascript\">
        function methode(idq,idc,idetud,idmat,statut)
        {
        var ch = 'lien'.concat(idc);
        document.getElementById(ch).click();
        var bord = 'bordure'.concat(idq);
        \$.ajax({
       url : \"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("etudiant_test_homepage");
        echo "\",
       data : \"idetud=\"+idetud+\"&idmat=\"+idmat+\"&statut=\"+statut,
       type : \"POST\",
       success : function(code_html){ 
       document.getElementById(bord).innerHTML=\" \";   
         if ( \$.trim( \$('#content').text() ).length == 0 )
        {
           \$.ajax({
       url : \"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("etudiant_getpointAll_homepage");
        echo "\",
       type : \"POST\",
       success : function(code_html){
     \$('#content').html(code_html);
     }});
        }   
        }
     });
    
        }
        </script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
        
        $__internal_64f5fb40dee8ee54e4e1cbf7612e508ab3b021120a03ce0628f5cd48061254d9->leave($__internal_64f5fb40dee8ee54e4e1cbf7612e508ab3b021120a03ce0628f5cd48061254d9_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/randomlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 160,  251 => 149,  240 => 141,  221 => 124,  211 => 119,  196 => 112,  190 => 109,  185 => 106,  179 => 103,  174 => 100,  172 => 99,  167 => 97,  159 => 94,  144 => 92,  141 => 91,  137 => 90,  135 => 89,  131 => 88,  127 => 87,  123 => 86,  116 => 83,  112 => 82,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* */
/* <style type="text/css">*/
/* */
/* */
/* .overlay {*/
/*   position: absolute;*/
/*   top: 0;*/
/*   bottom: 0;*/
/*   left: 0;*/
/*   right: 0;*/
/*   background: rgba(0, 0, 0, 0.7);*/
/*   transition: opacity 500ms;*/
/*   visibility: hidden;*/
/*   opacity: 0;*/
/* }*/
/* .overlay:target {*/
/*   visibility: visible;*/
/*   opacity: 1;*/
/* }*/
/* */
/* .popup {*/
/*   margin: 70px auto;*/
/*   padding: 20px;*/
/*   background: black;*/
/*   border-radius: 5px;*/
/*   width: 30%;*/
/*   position: relative;*/
/*   transition: all 5s ease-in-out;*/
/* }*/
/* */
/* .popup h3 {*/
/*   margin-top: 0;*/
/*   color: #ecf0f1;*/
/*   font-family: Tahoma, Arial, sans-serif;*/
/* }*/
/* .popup .close {*/
/*   position: absolute;*/
/*   top: 20px;*/
/*   right: 30px;*/
/*   transition: all 200ms;*/
/*   font-size: 30px;*/
/*   font-weight: bold;*/
/*   text-decoration: none;*/
/*   color: #333;*/
/* }*/
/* .popup .close:hover {*/
/*   color: red;*/
/* }*/
/* .popup .content {*/
/*   max-height: 30%;*/
/*   overflow: auto;*/
/* }*/
/* #boutton:hover {*/
/* 	font-family: Arial,sans-serif;*/
/*      font-size: 1.6em;*/
/*      width: 200px;*/
/*      height: 43px;*/
/*      padding-top: 7px; /*permet le centrage vertical*//* */
/*      text-align: center;*/
/*      color: #000;*/
/*      background: #444;*/
/* }*/
/* p{*/
/*   color:#bdc3c7;*/
/* }*/
/* .bordure*/
/* {*/
/*   border-width:1px;*/
/*  border-style:solid;*/
/*  border-color:black;*/
/*  padding-left:10px;*/
/*  border-radius: 10px;*/
/* */
/* }*/
/* </style>*/
/* */
/* */
/* <div id="content">*/
/* {% for key,value in questions %}*/
/* <div id="bordure{{key}}">*/
/* <div class="bordure">*/
/* </br>*/
/* <h4> {{matieres[key].intituleMat}}</h4></br>*/
/* {{value.ennonce}}</br> */
/* {% for k,val in QuestRep %}*/
/* {% if k == key %}*/
/* {% for ch in val %}*/
/* */
/*       <button onclick="methode({{k}},{{ch.idChoixAssoc}},{{idetud}},{{matieres[key].idMat}},{{ choices[ch.idChoixAssoc].statut}})" type="button" class="btn btn-default">{{choices[ch.idChoixAssoc].texte}}</button>*/
/* */
/* <a id="lien{{ch.idChoixAssoc}}" style="visibility:hidden" href="#popup{{ch.idChoixAssoc}}" type="button" class="btn btn-default" />*/
/* */
/* */
/*      <div id="popup{{ch.idChoixAssoc}}"  class="overlay">*/
/*   <div class="popup">*/
/*   {% if choices[ch.idChoixAssoc].statut == 'true'%}*/
/*     <a class="close" href="#">×</a>*/
/*     <h3>TRUE</h3>*/
/*     <div class="content">*/
/*       <p>{{choices[ch.idChoixAssoc].texte}} is the right answer .</p>*/
/*     </div>*/
/*     {% else %}*/
/*     <a class="close" href="#">×</a>*/
/*         <h3>FALSE</h3>*/
/*     <div class="content">*/
/*      <p> Thanks for for the try, but " {{choices[ch.idChoixAssoc].texte}} " isn't the right answer .</p>*/
/*     </div>*/
/*     {% endif %}*/
/*   */
/* </div>*/
/* </div>*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* </br></br>*/
/* </div>*/
/* </div>*/
/* </br>*/
/* {% endfor %}*/
/* </div>*/
/* */
/* */
/* */
/* */
/*     */
/*             </div>*/
/*         */
/*         </div>*/
/* */
/*         <script type="text/javascript">*/
/*         function methode(idq,idc,idetud,idmat,statut)*/
/*         {*/
/*         var ch = 'lien'.concat(idc);*/
/*         document.getElementById(ch).click();*/
/*         var bord = 'bordure'.concat(idq);*/
/*         $.ajax({*/
/*        url : "{{ path('etudiant_test_homepage')}}",*/
/*        data : "idetud="+idetud+"&idmat="+idmat+"&statut="+statut,*/
/*        type : "POST",*/
/*        success : function(code_html){ */
/*        document.getElementById(bord).innerHTML=" ";   */
/*          if ( $.trim( $('#content').text() ).length == 0 )*/
/*         {*/
/*            $.ajax({*/
/*        url : "{{ path('etudiant_getpointAll_homepage')}}",*/
/*        type : "POST",*/
/*        success : function(code_html){*/
/*      $('#content').html(code_html);*/
/*      }});*/
/*         }   */
/*         }*/
/*      });*/
/*     */
/*         }*/
/*         </script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js') }}"></script>*/
/* <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
