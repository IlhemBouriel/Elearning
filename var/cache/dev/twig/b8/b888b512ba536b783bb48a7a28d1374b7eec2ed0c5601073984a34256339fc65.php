<?php

/* EtudiantEtudiantBundle:etudiant:listMsgs.html.twig */
class __TwigTemplate_d0de8767bde5e80f151e28ccab2172582a98b8d11935daf5518a8d0578755556 extends Twig_Template
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
        $__internal_e29a19cfd3e20d028770ff27289008122296592332f0de43a6f26a1ef9e64fbb = $this->env->getExtension("native_profiler");
        $__internal_e29a19cfd3e20d028770ff27289008122296592332f0de43a6f26a1ef9e64fbb->enter($__internal_e29a19cfd3e20d028770ff27289008122296592332f0de43a6f26a1ef9e64fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:listMsgs.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "

<style type=\"text/css\">
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
.bold{
  font-weight:bold;
}
</style>
 
    
    <div class=\"col-sm-9 col-md-10\">
      <!-- Nav tabs -->
      <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-inbox\">
                </span>Primary</a></li>
        <li><a href=\"#profile\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-user\"></span>
                    Social</a></li>
        <li><a href=\"#messages\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-tags\"></span>
                    Promotions</a></li>
        <li><a href=\"#settings\" data-toggle=\"tab\"><span class=\"glyphicon glyphicon-plus no-margin\">
                </span></a></li>
      </ul>
      <!-- Tab panes -->
      <div class=\"tab-content\">
        <div class=\"tab-pane fade in active\" id=\"home\">
          <div class=\"list-group\">
            <a href=\"#\" class=\"list-group-item\">
          

    ";
        // line 81
        $context["i"] = 1;
        // line 82
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 83
            echo "   ";
            if ((null === $this->getAttribute($context["message"], "datelectureMsg", array()))) {
                // line 84
                echo "     <span class=\"glyphicon glyphicon-star-empty\"></span><span class=\"name\" style=\"min-width: 120px;
                                display: inline-block;\"><span id=\"text";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
                echo "\">Not Seen</span></span> <span class=\"\"><span id=\"span";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
                echo "\" class=\"bold\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "titreMsg", array()), "html", null, true);
                echo "</span></span>
                                <span class=\"text-muted\" style=\"font-size: 11px;\">\"";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenuMsg", array()), "html", null, true);
                echo "\"</span> 
              <span class=\"badge\">";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateenvoiMsg", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                                ";
            } else {
                // line 89
                echo "  <span class=\"glyphicon glyphicon-star-empty\"></span><span class=\"name\" style=\"min-width: 120px;
                                display: inline-block;\">Seen</span> <span class=\"\">";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "titreMsg", array()), "html", null, true);
                echo "</span>
                                <span class=\"text-muted\" style=\"font-size: 11px;\">\"";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenuMsg", array()), "html", null, true);
                echo "\"</span> 
              <span class=\"badge\">";
                // line 92
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "dateenvoiMsg", array()), "Y-m-d"), "html", null, true);
                echo "</span>
                                ";
            }
            // line 94
            echo "
               <span class=\"pull-right\"><button onclick=\"methode(";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
            echo ")\"><span class=\"glyphicon glyphicon-eye-open\">
                                </span></button></span>
            </a>
               <a id=\"lien";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
            echo "\" href=\"#openModal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
            echo "\" style=\"visibility:hidden\">ff</a>


<div id=\"openModal";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "idMsg", array()), "html", null, true);
            echo "\" class=\"modalDialog\">
    <div> <a href=\"#close\" title=\"Close\" class=\"close\">X</a>

          <h2>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "titreMsg", array()), "html", null, true);
            echo "</h2>

        <p>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "contenuMsg", array()), "html", null, true);
            echo ".</p>
    </div>
</div>
            <a href=\"#\" class=\"list-group-item\">
            


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "             
            </a>
           
          </div>
        </div>
        <div class=\"tab-pane fade in\" id=\"profile\">
          <div class=\"list-group\">
            <div class=\"list-group-item\">
              <span class=\"text-center\">This tab is empty.</span>
            </div>
          </div>
        </div>
        <div class=\"tab-pane fade in\" id=\"messages\">
          ...</div>
        <div class=\"tab-pane fade in\" id=\"settings\">
          This tab is empty.</div>
      </div>
    </div>
  
<div class=\"container\">
  <div class=\"row\">
    

  </div>
  <hr />

</div>

</div>
    </div>
        </div>



<script type=\"text/javascript\">
function methode(id)
{
var lien='lien'.concat(id);
var span = '#span'.concat(id);
var text = '#text'.concat(id);
var tt = 'text'.concat(id);
 \$.ajax({
       url : \"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("etudiant_updateMsg_homepage");
        echo "\",
       type : \"POST\",
       data : \"id=\"+id,
       success : function(code_html){
    document.getElementById(lien).click();
    if (code_html == '1')
    {
    \$(span).removeClass(\"bold\");
    document.getElementById(tt).innerHTML =\" \";
    \$(text).html('Seen');
    }
    }
     });
    }


</script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
        
        $__internal_e29a19cfd3e20d028770ff27289008122296592332f0de43a6f26a1ef9e64fbb->leave($__internal_e29a19cfd3e20d028770ff27289008122296592332f0de43a6f26a1ef9e64fbb_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:listMsgs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 173,  240 => 156,  196 => 114,  182 => 106,  177 => 104,  171 => 101,  163 => 98,  157 => 95,  154 => 94,  149 => 92,  145 => 91,  141 => 90,  138 => 89,  133 => 87,  129 => 86,  121 => 85,  118 => 84,  115 => 83,  110 => 82,  108 => 81,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* */
/* <style type="text/css">*/
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
/* .bold{*/
/*   font-weight:bold;*/
/* }*/
/* </style>*/
/*  */
/*     */
/*     <div class="col-sm-9 col-md-10">*/
/*       <!-- Nav tabs -->*/
/*       <ul class="nav nav-tabs">*/
/*         <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">*/
/*                 </span>Primary</a></li>*/
/*         <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>*/
/*                     Social</a></li>*/
/*         <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>*/
/*                     Promotions</a></li>*/
/*         <li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">*/
/*                 </span></a></li>*/
/*       </ul>*/
/*       <!-- Tab panes -->*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane fade in active" id="home">*/
/*           <div class="list-group">*/
/*             <a href="#" class="list-group-item">*/
/*           */
/* */
/*     {%set i = 1 %}*/
/*    {% for message in messages %}*/
/*    {% if message.datelectureMsg is null %}*/
/*      <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;*/
/*                                 display: inline-block;"><span id="text{{message.idMsg}}">Not Seen</span></span> <span class=""><span id="span{{message.idMsg}}" class="bold">{{ message.titreMsg }}</span></span>*/
/*                                 <span class="text-muted" style="font-size: 11px;">"{{ message.contenuMsg }}"</span> */
/*               <span class="badge">{{ message.dateenvoiMsg|date('Y-m-d')  }}</span>*/
/*                                 {% else %}*/
/*   <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;*/
/*                                 display: inline-block;">Seen</span> <span class="">{{ message.titreMsg }}</span>*/
/*                                 <span class="text-muted" style="font-size: 11px;">"{{ message.contenuMsg }}"</span> */
/*               <span class="badge">{{ message.dateenvoiMsg|date('Y-m-d')  }}</span>*/
/*                                 {% endif %}*/
/* */
/*                <span class="pull-right"><button onclick="methode({{message.idMsg}})"><span class="glyphicon glyphicon-eye-open">*/
/*                                 </span></button></span>*/
/*             </a>*/
/*                <a id="lien{{message.idMsg}}" href="#openModal{{message.idMsg}}" style="visibility:hidden">ff</a>*/
/* */
/* */
/* <div id="openModal{{message.idMsg}}" class="modalDialog">*/
/*     <div> <a href="#close" title="Close" class="close">X</a>*/
/* */
/*           <h2>{{message.titreMsg}}</h2>*/
/* */
/*         <p>{{message.contenuMsg}}.</p>*/
/*     </div>*/
/* </div>*/
/*             <a href="#" class="list-group-item">*/
/*             */
/* */
/* */
/*                 {% endfor %}*/
/*              */
/*             </a>*/
/*            */
/*           </div>*/
/*         </div>*/
/*         <div class="tab-pane fade in" id="profile">*/
/*           <div class="list-group">*/
/*             <div class="list-group-item">*/
/*               <span class="text-center">This tab is empty.</span>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="tab-pane fade in" id="messages">*/
/*           ...</div>*/
/*         <div class="tab-pane fade in" id="settings">*/
/*           This tab is empty.</div>*/
/*       </div>*/
/*     </div>*/
/*   */
/* <div class="container">*/
/*   <div class="row">*/
/*     */
/* */
/*   </div>*/
/*   <hr />*/
/* */
/* </div>*/
/* */
/* </div>*/
/*     </div>*/
/*         </div>*/
/* */
/* */
/* */
/* <script type="text/javascript">*/
/* function methode(id)*/
/* {*/
/* var lien='lien'.concat(id);*/
/* var span = '#span'.concat(id);*/
/* var text = '#text'.concat(id);*/
/* var tt = 'text'.concat(id);*/
/*  $.ajax({*/
/*        url : "{{ path('etudiant_updateMsg_homepage')}}",*/
/*        type : "POST",*/
/*        data : "id="+id,*/
/*        success : function(code_html){*/
/*     document.getElementById(lien).click();*/
/*     if (code_html == '1')*/
/*     {*/
/*     $(span).removeClass("bold");*/
/*     document.getElementById(tt).innerHTML =" ";*/
/*     $(text).html('Seen');*/
/*     }*/
/*     }*/
/*      });*/
/*     }*/
/* */
/* */
/* </script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js') }}"></script>*/
/* <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>*/
