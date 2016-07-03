<?php

/* EtudiantEtudiantBundle:etudiant:qcmEnonce.html.twig */
class __TwigTemplate_03ef89d04f85aa64be2ce33894126a1e4d7ab25a239bd9c04ac42d993426f7cd extends Twig_Template
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
        $__internal_b420f5fbda6589245136eb69a8fed26fffece20a4003f59d41cdc83a7e4790c3 = $this->env->getExtension("native_profiler");
        $__internal_b420f5fbda6589245136eb69a8fed26fffece20a4003f59d41cdc83a7e4790c3->enter($__internal_b420f5fbda6589245136eb69a8fed26fffece20a4003f59d41cdc83a7e4790c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:qcmEnonce.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/alertCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

<style type=\"text/css\">
.checkbox label:after, 
.radio label:after {
    content: '';
    display: table;
    clear: both;
}

.checkbox .cr,
.radio .cr {
    position: relative;
    display: inline-block;
    border: 1px solid #a9a9a9;
    border-radius: .25em;
    width: 1.3em;
    height: 1.3em;
    float: left;
    margin-right: .5em;
}

.radio .cr {
    border-radius: 50%;
}

.checkbox .cr .cr-icon,
.radio .cr .cr-icon {
    position: absolute;
    font-size: .8em;
    line-height: 0;
    top: 50%;
    left: 20%;
}

.radio .cr .cr-icon {
    margin-left: 0.04em;
}

.checkbox label input[type=\"checkbox\"],
.radio label input[type=\"radio\"] {
    display: none;
}

.checkbox label input[type=\"checkbox\"] + .cr > .cr-icon,
.radio label input[type=\"radio\"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}

.checkbox label input[type=\"checkbox\"]:checked + .cr > .cr-icon,
.radio label input[type=\"radio\"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}

.checkbox label input[type=\"checkbox\"]:disabled + .cr,
.radio label input[type=\"radio\"]:disabled + .cr {
    opacity: .5;
}

.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}
</style>

<link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\">
<div id=\"content\">
";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["QuestRep"]) ? $context["QuestRep"] : $this->getContext($context, "QuestRep")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 122
            echo "<div id=\"div";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
<b>* </b>
<b>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")), $context["key"], array(), "array"), "ennonce", array()), "html", null, true);
            echo ":</b></br>
";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["_key"] => $context["ch"]) {
                // line 126
                echo "
        <div class=\"checkbox\">
            <label style=\"font-size: 1em\">
                <input type=\"checkbox\" value=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                echo "\" onclick=\"methode(";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ch"], "idChoixAssoc", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["idmat"]) ? $context["idmat"] : $this->getContext($context, "idmat")), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
                echo ")\" >
                <span class=\"cr\"><i class=\"cr-icon fa fa-check\"></i></span>
             ";
                // line 131
                $context["id"] = $this->getAttribute($context["ch"], "idChoixAssoc", array());
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choix"]) ? $context["choix"] : $this->getContext($context, "choix")), (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array(), "array"), "texte", array()), "html", null, true);
                echo "</br>
            </label>
        </div>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "</form>
</div>
</br></br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "</div>


<script type=\"text/javascript\">
function methode(idq,idc,idetud,idmat,nbq)
{
    var elementID= \"div\".concat(idq);
\t\$.ajax({
       url : \"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("etudiant_verify_homepage");
        echo "\",
       type : \"POST\",
       data : \"idq=\" + idq + \"&idc=\"+ idc + \"&idetud=\"+idetud+\"&idmat=\"+idmat,
       success : function(code_html){ 
       document.getElementById(elementID).innerHTML = \"\";
       if(code_html=='true')
       {
       alert(code_html);
       }
       else
       {
       alert(code_html);
       }
      if ( \$.trim( \$('#content').text() ).length == 0 )
       {
       \$.ajax({
       url : \"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("etudiant_getpoint_homepage");
        echo "\",
       type : \"POST\",
       data : \"idetud=\"+idetud+\"&idmat=\"+idmat+\"&nbq=\"+nbq,
       success : function(code_html){
     \$('#content').html(code_html);
     }});
}
       }
    });
}
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


";
        
        $__internal_b420f5fbda6589245136eb69a8fed26fffece20a4003f59d41cdc83a7e4790c3->leave($__internal_b420f5fbda6589245136eb69a8fed26fffece20a4003f59d41cdc83a7e4790c3_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:qcmEnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 165,  224 => 149,  214 => 141,  205 => 137,  194 => 132,  192 => 131,  177 => 129,  172 => 126,  168 => 125,  164 => 124,  158 => 122,  154 => 121,  34 => 4,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js') }}"></script>*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* */
/* <style type="text/css">*/
/* .checkbox label:after, */
/* .radio label:after {*/
/*     content: '';*/
/*     display: table;*/
/*     clear: both;*/
/* }*/
/* */
/* .checkbox .cr,*/
/* .radio .cr {*/
/*     position: relative;*/
/*     display: inline-block;*/
/*     border: 1px solid #a9a9a9;*/
/*     border-radius: .25em;*/
/*     width: 1.3em;*/
/*     height: 1.3em;*/
/*     float: left;*/
/*     margin-right: .5em;*/
/* }*/
/* */
/* .radio .cr {*/
/*     border-radius: 50%;*/
/* }*/
/* */
/* .checkbox .cr .cr-icon,*/
/* .radio .cr .cr-icon {*/
/*     position: absolute;*/
/*     font-size: .8em;*/
/*     line-height: 0;*/
/*     top: 50%;*/
/*     left: 20%;*/
/* }*/
/* */
/* .radio .cr .cr-icon {*/
/*     margin-left: 0.04em;*/
/* }*/
/* */
/* .checkbox label input[type="checkbox"],*/
/* .radio label input[type="radio"] {*/
/*     display: none;*/
/* }*/
/* */
/* .checkbox label input[type="checkbox"] + .cr > .cr-icon,*/
/* .radio label input[type="radio"] + .cr > .cr-icon {*/
/*     transform: scale(3) rotateZ(-20deg);*/
/*     opacity: 0;*/
/*     transition: all .3s ease-in;*/
/* }*/
/* */
/* .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,*/
/* .radio label input[type="radio"]:checked + .cr > .cr-icon {*/
/*     transform: scale(1) rotateZ(0deg);*/
/*     opacity: 1;*/
/* }*/
/* */
/* .checkbox label input[type="checkbox"]:disabled + .cr,*/
/* .radio label input[type="radio"]:disabled + .cr {*/
/*     opacity: .5;*/
/* }*/
/* */
/* .modalDialog {*/
/*     position: fixed;*/
/*     font-family: Arial, Helvetica, sans-serif;*/
/*     top: 0;*/
/*     right: 0;*/
/*     bottom: 0;*/
/*     left: 0;*/
/*     background: rgba(0, 0, 0, 0.8);*/
/*     z-index: 99999;*/
/*     opacity:0;*/
/*     -webkit-transition: opacity 400ms ease-in;*/
/*     -moz-transition: opacity 400ms ease-in;*/
/*     transition: opacity 400ms ease-in;*/
/*     pointer-events: none;*/
/* }*/
/* .modalDialog:target {*/
/*     opacity:1;*/
/*     pointer-events: auto;*/
/* }*/
/* .modalDialog > div {*/
/*     width: 400px;*/
/*     position: relative;*/
/*     margin: 10% auto;*/
/*     padding: 5px 20px 13px 20px;*/
/*     border-radius: 10px;*/
/*     background: #fff;*/
/*     background: -moz-linear-gradient(#fff, #999);*/
/*     background: -webkit-linear-gradient(#fff, #999);*/
/*     background: -o-linear-gradient(#fff, #999);*/
/* }*/
/* .close {*/
/*     background: #606061;*/
/*     color: #FFFFFF;*/
/*     line-height: 25px;*/
/*     position: absolute;*/
/*     right: -12px;*/
/*     text-align: center;*/
/*     top: -10px;*/
/*     width: 24px;*/
/*     text-decoration: none;*/
/*     font-weight: bold;*/
/*     -webkit-border-radius: 12px;*/
/*     -moz-border-radius: 12px;*/
/*     border-radius: 12px;*/
/*     -moz-box-shadow: 1px 1px 3px #000;*/
/*     -webkit-box-shadow: 1px 1px 3px #000;*/
/*     box-shadow: 1px 1px 3px #000;*/
/* }*/
/* .close:hover {*/
/*     background: #00d9ff;*/
/* }*/
/* </style>*/
/* */
/* <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">*/
/* <div id="content">*/
/* {% for key,value in QuestRep %}*/
/* <div id="div{{key}}">*/
/* <b>* </b>*/
/* <b>{{ questions[key].ennonce }}:</b></br>*/
/* {% for ch in value %}*/
/* */
/*         <div class="checkbox">*/
/*             <label style="font-size: 1em">*/
/*                 <input type="checkbox" value="{{ch.idChoixAssoc}}" onclick="methode({{key}},{{ch.idChoixAssoc}},{{idetud}},{{idmat}},{{nb}})" >*/
/*                 <span class="cr"><i class="cr-icon fa fa-check"></i></span>*/
/*              {% set id = ch.idChoixAssoc  %}*/
/* {{choix[id].texte}}</br>*/
/*             </label>*/
/*         </div>*/
/* */
/* {% endfor %}*/
/* </form>*/
/* </div>*/
/* </br></br>*/
/* {% endfor %}*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript">*/
/* function methode(idq,idc,idetud,idmat,nbq)*/
/* {*/
/*     var elementID= "div".concat(idq);*/
/* 	$.ajax({*/
/*        url : "{{ path('etudiant_verify_homepage')}}",*/
/*        type : "POST",*/
/*        data : "idq=" + idq + "&idc="+ idc + "&idetud="+idetud+"&idmat="+idmat,*/
/*        success : function(code_html){ */
/*        document.getElementById(elementID).innerHTML = "";*/
/*        if(code_html=='true')*/
/*        {*/
/*        alert(code_html);*/
/*        }*/
/*        else*/
/*        {*/
/*        alert(code_html);*/
/*        }*/
/*       if ( $.trim( $('#content').text() ).length == 0 )*/
/*        {*/
/*        $.ajax({*/
/*        url : "{{ path('etudiant_getpoint_homepage')}}",*/
/*        type : "POST",*/
/*        data : "idetud="+idetud+"&idmat="+idmat+"&nbq="+nbq,*/
/*        success : function(code_html){*/
/*      $('#content').html(code_html);*/
/*      }});*/
/* }*/
/*        }*/
/*     });*/
/* }*/
/* </script>*/
/* */
/* <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
/* */
/* */
/* */
