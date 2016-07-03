<?php

/* @EtudiantEtudiant/etudiant/getResult.html.twig */
class __TwigTemplate_79e1a4cb0d3c397357f21a33ba5398cabcbc35f019a77fe4b51d47b2ab1f32b1 extends Twig_Template
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
        $__internal_ca86f609f078badbbd83f216c99dcaffa436dd4528de4dc4e2b9a9ed822a260d = $this->env->getExtension("native_profiler");
        $__internal_ca86f609f078badbbd83f216c99dcaffa436dd4528de4dc4e2b9a9ed822a260d->enter($__internal_ca86f609f078badbbd83f216c99dcaffa436dd4528de4dc4e2b9a9ed822a260d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/getResult.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "
<style type=\"text/css\">
body{
  background: #303030;
}

#pricing-table {
\tmargin: 100px auto;
\ttext-align: center;
\twidth: 892px; /* total computed width = 222 x 3 + 226 */
}

#pricing-table .plan {
\tfont: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;
\ttext-shadow: 0 1px rgba(255,255,255,.8);        
\tbackground: #fff;      
\tborder: 1px solid #ddd;
\tcolor: #333;
\tpadding: 20px;
\twidth: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px */      
\tfloat: left;
\tposition: relative;
}

#pricing-table #most-popular {
\tz-index: 2;
\ttop: -13px;
\tborder-width: 3px;
\tpadding: 30px 20px;
\t-moz-border-radius: 5px;
\t-webkit-border-radius: 5px;
\tborder-radius: 5px;
\t-moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
\t-webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);
\tbox-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);    
}

#pricing-table .plan:nth-child(1) {
\t-moz-border-radius: 5px 0 0 5px;
\t-webkit-border-radius: 5px 0 0 5px;
\tborder-radius: 5px 0 0 5px;        
}

#pricing-table .plan:nth-child(4) {
\t-moz-border-radius: 0 5px 5px 0;
\t-webkit-border-radius: 0 5px 5px 0;
\tborder-radius: 0 5px 5px 0;        
}

/* --------------- */\t

#pricing-table h3 {
\tfont-size: 20px;
\tfont-weight: normal;
\tpadding: 20px;
\tmargin: -20px -20px 50px -20px;
\tbackground-color: #eee;
\tbackground-image: -moz-linear-gradient(#fff,#eee);
\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));    
\tbackground-image: -webkit-linear-gradient(#fff, #eee);
\tbackground-image: -o-linear-gradient(#fff, #eee);
\tbackground-image: -ms-linear-gradient(#fff, #eee);
\tbackground-image: linear-gradient(#fff, #eee);
}

#pricing-table #most-popular h3 {
\tbackground-color: #ddd;
\tbackground-image: -moz-linear-gradient(#eee,#ddd);
\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));    
\tbackground-image: -webkit-linear-gradient(#eee, #ddd);
\tbackground-image: -o-linear-gradient(#eee, #ddd);
\tbackground-image: -ms-linear-gradient(#eee, #ddd);
\tbackground-image: linear-gradient(#eee, #ddd);
\tmargin-top: -30px;
\tpadding-top: 30px;
\t-moz-border-radius: 5px 5px 0 0;
\t-webkit-border-radius: 5px 5px 0 0;
\tborder-radius: 5px 5px 0 0; \t\t
}

#pricing-table .plan:nth-child(1) h3 {
\t-moz-border-radius: 5px 0 0 0;
\t-webkit-border-radius: 5px 0 0 0;
\tborder-radius: 5px 0 0 0;       
}

#pricing-table .plan:nth-child(4) h3 {
\t-moz-border-radius: 0 5px 0 0;
\t-webkit-border-radius: 0 5px 0 0;
\tborder-radius: 0 5px 0 0;       
}\t

#pricing-table h3 span {
\tdisplay: block;
\tfont: bold 25px/100px Georgia, Serif;
\tcolor: #777;
\tbackground: #fff;
\tborder: 5px solid #fff;
\theight: 100px;
\twidth: 100px;
\tmargin: 10px auto -65px;
\t-moz-border-radius: 100px;
\t-webkit-border-radius: 100px;
\tborder-radius: 100px;
\t-moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
\t-webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
\tbox-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;
}

/* --------------- */

#pricing-table ul {
\tmargin: 20px 0 0 0;
\tpadding: 0;
\tlist-style: none;
}

#pricing-table li {
\tborder-top: 1px solid #ddd;
\tpadding: 10px 0;
}

/* --------------- */
\t
#pricing-table .signup {
\tposition: relative;
\tpadding: 8px 20px;
\tmargin: 20px 0 0 0;  
\tcolor: #fff;
\tfont: bold 14px Arial, Helvetica;
\ttext-transform: uppercase;
\ttext-decoration: none;
\tdisplay: inline-block;       
\tbackground-color: #c0392b;
\tbackground-image: -moz-linear-gradient(#c0392b, #e74c3c);
\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(#c0392b), to(#e74c3c));    
\tbackground-image: -webkit-linear-gradient(#c0392b, #e74c3c);
\tbackground-image: -o-linear-gradient(#c0392b, #e74c3c);
\tbackground-image: -ms-linear-gradient(#c0392b, #e74c3c);
\tbackground-image: linear-gradient(#c0392b, #e74c3c);
\t-moz-border-radius: 3px;
\t-webkit-border-radius: 3px;
\tborder-radius: 3px;     
\ttext-shadow: 0 1px 0 rgba(0,0,0,.3);        
\t-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
\t-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
\tbox-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);
}

#pricing-table .signup:hover {
\tbackground-color: #e74c3c;
\tbackground-image: -moz-linear-gradient(#e74c3c, #c0392b);
\tbackground-image: -webkit-gradient(linear, left top, left bottom, from(#e74c3c), to(#c0392b));      
\tbackground-image: -webkit-linear-gradient(#e74c3c, #c0392b);
\tbackground-image: -o-linear-gradient(#e74c3c, #c0392b);
\tbackground-image: -ms-linear-gradient(#e74c3c, #c0392b);
\tbackground-image: linear-gradient(#e74c3c, #c0392b); 
}

#pricing-table .signup:active, #pricing-table .signup:focus {
\tbackground: #e74c3c;       
\ttop: 2px;
\t-moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
\t-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;
\tbox-shadow: 0 0 3px rgba(0, 0, 0, .7) inset; 
}

/* --------------- */

.clear:before, .clear:after {
  content:\"\";
  display:table
}

.clear:after {
  clear:both
}

.clear {
  zoom:1
}
#div {
\t margin: auto;
    width: 50%;
    padding: 10px;
}
</style>

";
        // line 190
        if (((isset($context["taille"]) ? $context["taille"] : $this->getContext($context, "taille")) < 4)) {
            // line 191
            echo "<div id=\"div\">
<div id=\"pricing-table\" class=\"clear\">
";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matrice"]) ? $context["matrice"] : $this->getContext($context, "matrice")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 194
                echo "<div class=\"plan\">
        <h3><b>";
                // line 195
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</b><span>";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</span></h3>
        <button  type=\"button\" class=\"btn btn-danger img-circle\" onclick=\"methode('";
                // line 196
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "')\" >Improve It</button>         
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "</div>
</div>
";
        } else {
            // line 202
            echo "

<div id=\"pricing-table\" class=\"clear\">
";
            // line 205
            $context["i"] = 0;
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["matrice"]) ? $context["matrice"] : $this->getContext($context, "matrice")));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 207
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 4)) {
                    // line 208
                    $context["i"] = 0;
                    // line 209
                    echo "</div>
<div id=\"pricing-table\" class=\"clear\">
<div class=\"plan\">
        <h3><b>";
                    // line 212
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</b><span>";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</span></h3>
        <button type=\"button\" class=\"btn btn-danger img-circle\" onclick=\"methode('";
                    // line 213
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "')\">Improve It</button>         
    </div>
";
                } else {
                    // line 216
                    echo "<div class=\"plan\">
        <h3><b>";
                    // line 217
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</b><span>";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</span></h3>
        <button  type=\"button\" class=\"btn btn-danger img-circle\" onclick=\"methode('";
                    // line 218
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "')\">Improve It</button>         
    </div>
    ";
                    // line 220
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 224
        echo "
<script>
function methode(matiere)
{
\t\$.ajax({
       url : \"";
        // line 229
        echo $this->env->getExtension('routing')->getPath("etudiant_improve_homepage");
        echo "\",
       type : \"POST\",
       data : \"course=\" + matiere,
       success : function(code_html){ 

       }
    });
}
</script>

";
        
        $__internal_ca86f609f078badbbd83f216c99dcaffa436dd4528de4dc4e2b9a9ed822a260d->leave($__internal_ca86f609f078badbbd83f216c99dcaffa436dd4528de4dc4e2b9a9ed822a260d_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/getResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 229,  304 => 224,  296 => 220,  291 => 218,  285 => 217,  282 => 216,  276 => 213,  270 => 212,  265 => 209,  263 => 208,  261 => 207,  257 => 206,  255 => 205,  250 => 202,  245 => 199,  236 => 196,  230 => 195,  227 => 194,  223 => 193,  219 => 191,  217 => 190,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <style type="text/css">*/
/* body{*/
/*   background: #303030;*/
/* }*/
/* */
/* #pricing-table {*/
/* 	margin: 100px auto;*/
/* 	text-align: center;*/
/* 	width: 892px; /* total computed width = 222 x 3 + 226 *//* */
/* }*/
/* */
/* #pricing-table .plan {*/
/* 	font: 12px 'Lucida Sans', 'trebuchet MS', Arial, Helvetica;*/
/* 	text-shadow: 0 1px rgba(255,255,255,.8);        */
/* 	background: #fff;      */
/* 	border: 1px solid #ddd;*/
/* 	color: #333;*/
/* 	padding: 20px;*/
/* 	width: 180px; /* plan width = 180 + 20 + 20 + 1 + 1 = 222px *//*       */
/* 	float: left;*/
/* 	position: relative;*/
/* }*/
/* */
/* #pricing-table #most-popular {*/
/* 	z-index: 2;*/
/* 	top: -13px;*/
/* 	border-width: 3px;*/
/* 	padding: 30px 20px;*/
/* 	-moz-border-radius: 5px;*/
/* 	-webkit-border-radius: 5px;*/
/* 	border-radius: 5px;*/
/* 	-moz-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);*/
/* 	-webkit-box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);*/
/* 	box-shadow: 20px 0 10px -10px rgba(0, 0, 0, .15), -20px 0 10px -10px rgba(0, 0, 0, .15);    */
/* }*/
/* */
/* #pricing-table .plan:nth-child(1) {*/
/* 	-moz-border-radius: 5px 0 0 5px;*/
/* 	-webkit-border-radius: 5px 0 0 5px;*/
/* 	border-radius: 5px 0 0 5px;        */
/* }*/
/* */
/* #pricing-table .plan:nth-child(4) {*/
/* 	-moz-border-radius: 0 5px 5px 0;*/
/* 	-webkit-border-radius: 0 5px 5px 0;*/
/* 	border-radius: 0 5px 5px 0;        */
/* }*/
/* */
/* /* --------------- *//* 	*/
/* */
/* #pricing-table h3 {*/
/* 	font-size: 20px;*/
/* 	font-weight: normal;*/
/* 	padding: 20px;*/
/* 	margin: -20px -20px 50px -20px;*/
/* 	background-color: #eee;*/
/* 	background-image: -moz-linear-gradient(#fff,#eee);*/
/* 	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));    */
/* 	background-image: -webkit-linear-gradient(#fff, #eee);*/
/* 	background-image: -o-linear-gradient(#fff, #eee);*/
/* 	background-image: -ms-linear-gradient(#fff, #eee);*/
/* 	background-image: linear-gradient(#fff, #eee);*/
/* }*/
/* */
/* #pricing-table #most-popular h3 {*/
/* 	background-color: #ddd;*/
/* 	background-image: -moz-linear-gradient(#eee,#ddd);*/
/* 	background-image: -webkit-gradient(linear, left top, left bottom, from(#eee), to(#ddd));    */
/* 	background-image: -webkit-linear-gradient(#eee, #ddd);*/
/* 	background-image: -o-linear-gradient(#eee, #ddd);*/
/* 	background-image: -ms-linear-gradient(#eee, #ddd);*/
/* 	background-image: linear-gradient(#eee, #ddd);*/
/* 	margin-top: -30px;*/
/* 	padding-top: 30px;*/
/* 	-moz-border-radius: 5px 5px 0 0;*/
/* 	-webkit-border-radius: 5px 5px 0 0;*/
/* 	border-radius: 5px 5px 0 0; 		*/
/* }*/
/* */
/* #pricing-table .plan:nth-child(1) h3 {*/
/* 	-moz-border-radius: 5px 0 0 0;*/
/* 	-webkit-border-radius: 5px 0 0 0;*/
/* 	border-radius: 5px 0 0 0;       */
/* }*/
/* */
/* #pricing-table .plan:nth-child(4) h3 {*/
/* 	-moz-border-radius: 0 5px 0 0;*/
/* 	-webkit-border-radius: 0 5px 0 0;*/
/* 	border-radius: 0 5px 0 0;       */
/* }	*/
/* */
/* #pricing-table h3 span {*/
/* 	display: block;*/
/* 	font: bold 25px/100px Georgia, Serif;*/
/* 	color: #777;*/
/* 	background: #fff;*/
/* 	border: 5px solid #fff;*/
/* 	height: 100px;*/
/* 	width: 100px;*/
/* 	margin: 10px auto -65px;*/
/* 	-moz-border-radius: 100px;*/
/* 	-webkit-border-radius: 100px;*/
/* 	border-radius: 100px;*/
/* 	-moz-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/* 	-webkit-box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/* 	box-shadow: 0 5px 20px #ddd inset, 0 3px 0 #999 inset;*/
/* }*/
/* */
/* /* --------------- *//* */
/* */
/* #pricing-table ul {*/
/* 	margin: 20px 0 0 0;*/
/* 	padding: 0;*/
/* 	list-style: none;*/
/* }*/
/* */
/* #pricing-table li {*/
/* 	border-top: 1px solid #ddd;*/
/* 	padding: 10px 0;*/
/* }*/
/* */
/* /* --------------- *//* */
/* 	*/
/* #pricing-table .signup {*/
/* 	position: relative;*/
/* 	padding: 8px 20px;*/
/* 	margin: 20px 0 0 0;  */
/* 	color: #fff;*/
/* 	font: bold 14px Arial, Helvetica;*/
/* 	text-transform: uppercase;*/
/* 	text-decoration: none;*/
/* 	display: inline-block;       */
/* 	background-color: #c0392b;*/
/* 	background-image: -moz-linear-gradient(#c0392b, #e74c3c);*/
/* 	background-image: -webkit-gradient(linear, left top, left bottom, from(#c0392b), to(#e74c3c));    */
/* 	background-image: -webkit-linear-gradient(#c0392b, #e74c3c);*/
/* 	background-image: -o-linear-gradient(#c0392b, #e74c3c);*/
/* 	background-image: -ms-linear-gradient(#c0392b, #e74c3c);*/
/* 	background-image: linear-gradient(#c0392b, #e74c3c);*/
/* 	-moz-border-radius: 3px;*/
/* 	-webkit-border-radius: 3px;*/
/* 	border-radius: 3px;     */
/* 	text-shadow: 0 1px 0 rgba(0,0,0,.3);        */
/* 	-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/* 	-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/* 	box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 2px 0 rgba(0, 0, 0, .7);*/
/* }*/
/* */
/* #pricing-table .signup:hover {*/
/* 	background-color: #e74c3c;*/
/* 	background-image: -moz-linear-gradient(#e74c3c, #c0392b);*/
/* 	background-image: -webkit-gradient(linear, left top, left bottom, from(#e74c3c), to(#c0392b));      */
/* 	background-image: -webkit-linear-gradient(#e74c3c, #c0392b);*/
/* 	background-image: -o-linear-gradient(#e74c3c, #c0392b);*/
/* 	background-image: -ms-linear-gradient(#e74c3c, #c0392b);*/
/* 	background-image: linear-gradient(#e74c3c, #c0392b); */
/* }*/
/* */
/* #pricing-table .signup:active, #pricing-table .signup:focus {*/
/* 	background: #e74c3c;       */
/* 	top: 2px;*/
/* 	-moz-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;*/
/* 	-webkit-box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset;*/
/* 	box-shadow: 0 0 3px rgba(0, 0, 0, .7) inset; */
/* }*/
/* */
/* /* --------------- *//* */
/* */
/* .clear:before, .clear:after {*/
/*   content:"";*/
/*   display:table*/
/* }*/
/* */
/* .clear:after {*/
/*   clear:both*/
/* }*/
/* */
/* .clear {*/
/*   zoom:1*/
/* }*/
/* #div {*/
/* 	 margin: auto;*/
/*     width: 50%;*/
/*     padding: 10px;*/
/* }*/
/* </style>*/
/* */
/* {% if taille < 4 %}*/
/* <div id="div">*/
/* <div id="pricing-table" class="clear">*/
/* {% for key,value in matrice%}*/
/* <div class="plan">*/
/*         <h3><b>{{ key }}</b><span>{{value }}</span></h3>*/
/*         <button  type="button" class="btn btn-danger img-circle" onclick="methode('{{ key }}')" >Improve It</button>         */
/*     </div>*/
/* {% endfor %}*/
/* </div>*/
/* </div>*/
/* {% else %}*/
/* */
/* */
/* <div id="pricing-table" class="clear">*/
/* {% set i = 0 %}*/
/* {% for key,value in matrice%}*/
/* {% if i == 4 %}*/
/* {% set i = 0 %}*/
/* </div>*/
/* <div id="pricing-table" class="clear">*/
/* <div class="plan">*/
/*         <h3><b>{{ key }}</b><span>{{ value }}</span></h3>*/
/*         <button type="button" class="btn btn-danger img-circle" onclick="methode('{{ key }}')">Improve It</button>         */
/*     </div>*/
/* {% else %}*/
/* <div class="plan">*/
/*         <h3><b>{{ key }}</b><span>{{value }}</span></h3>*/
/*         <button  type="button" class="btn btn-danger img-circle" onclick="methode('{{ key }}')">Improve It</button>         */
/*     </div>*/
/*     {% set i = i + 1 %}*/
/* {% endif %}*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
/* <script>*/
/* function methode(matiere)*/
/* {*/
/* 	$.ajax({*/
/*        url : "{{ path('etudiant_improve_homepage')}}",*/
/*        type : "POST",*/
/*        data : "course=" + matiere,*/
/*        success : function(code_html){ */
/* */
/*        }*/
/*     });*/
/* }*/
/* </script>*/
/* */
/* */
