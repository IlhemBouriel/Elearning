<?php

/* EtudiantEtudiantBundle:etudiant:qcmGroupBy.html.twig */
class __TwigTemplate_20602dc0c4e66ed2927b9ed6a027bdbccf2eab722e7706fa49ff0bf461e9b494 extends Twig_Template
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
        $__internal_207c6cd79e1ba091f1851e1150b9e5173358762ca792279087f94be417932291 = $this->env->getExtension("native_profiler");
        $__internal_207c6cd79e1ba091f1851e1150b9e5173358762ca792279087f94be417932291->enter($__internal_207c6cd79e1ba091f1851e1150b9e5173358762ca792279087f94be417932291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:qcmGroupBy.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:template.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "EtudiantEtudiantBundle:etudiant:importBS.html.twig");
        echo "
<style type=\"text/css\">
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
  display: block;
}

body {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

blockquote, q {
  quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

.about {
  margin: 70px auto 40px;
  padding: 8px;
  width: 260px;
  font: 10px/18px 'Lucida Grande', Arial, sans-serif;
  color: #666;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.25);
  background: #eee;
  background: rgba(250, 250, 250, 0.8);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
}
.about a {
  color: #333;
  text-decoration: none;
  border-radius: 2px;
  -webkit-transition: background 0.1s;
  -moz-transition: background 0.1s;
  -o-transition: background 0.1s;
  transition: background 0.1s;
}
.about a:hover {
  text-decoration: none;
  background: #fafafa;
  background: rgba(255, 255, 255, 0.7);
}

.about-links {
  height: 30px;
}
.about-links > a {
  float: left;
  width: 50%;
  line-height: 30px;
  font-size: 12px;
}

.about-author {
  margin-top: 5px;
}
.about-author > a {
  padding: 1px 3px;
  margin: 0 -1px;
}

body {
  font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
  color: #404040;
  background: #75649b;
}

.plans {
  margin: 40px auto;
  width: 660px;
  zoom: 1;
}
.plans:before, .plans:after {
  content: '';
  display: table;
}
.plans:after {
  clear: both;
}

.plan {
  float: left;
  width: 220px;
  margin: 10px 0;
  padding: 20px;
  text-align: center;
  background: #fafafa;
  background-clip: padding-box;
  border: solid #453b5d;
  border-width: 2px 0 2px 2px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
.plan:first-child {
  border-top-left-radius: 7px;
  border-bottom-left-radius: 7px;
}
.plan:last-child {
  border-width: 2px;
  border-top-right-radius: 7px;
  border-bottom-right-radius: 7px;
}

.plan-title {
  position: relative;
  margin: -20px -10px 20px;
  padding: 20px;
  line-height: 1;
  font-size: 16px;
  font-weight: bold;
  color: #595f6b;
  border-bottom: 1px dashed #d2d2d2;
}
.plan-title:before {
  content: '';
  position: absolute;
  bottom: -1px;
  left: 0;
  right: 0;
  height: 1px;
  background-size: 3px 1px;
  background-image: -webkit-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: -moz-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: -o-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);
  background-image: linear-gradient(to right, white, white 33%, #d2d2d2 34%, #d2d2d2);
}

.plan-price {
  margin: 0 auto 20px;
  width: 90px;
  height: 90px;
  line-height: 90px;
  font-size: 19px;
  font-weight: bold;
  color: white;
  background: #595f6b;
  border-radius: 45px;
}
.plan-price > span {
  font-size: 12px;
  font-weight: normal;
  color: rgba(255, 255, 255, 0.9);
}

.plan-features {
  margin-bottom: 20px;
  line-height: 2;
  font-size: 12px;
  color: #999;
  text-align: center;
}
.plan-features > li > strong {
  font-weight: bold;
  color: #888;
}

.plan-button {
  display: inline-block;
  vertical-align: top;
  padding: 0 15px;
  line-height: 30px;
  font-weight: bold;
  color: white;
  text-transform: uppercase;
  text-decoration: none;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.7);
  background: rgba(44, 62, 80,1.0);
  border: 1px solid #222;
  border-bottom-color: black;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, rgba(44, 62, 80,0.8), #);
  background-image: -moz-linear-gradient(top, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));
  background-image: -o-linear-gradient(top, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));
  background-image: linear-gradient(to bottom, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);
}
.plan-button:active {
  color: rgba(255, 255, 255, 0.95);
  background: rgba(44, 62, 80,1.1);
  border-color: black #222 #222;
  background-image: -webkit-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);
  background-image: -moz-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);
  background-image: -o-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);
  background-image: linear-gradient(to bottom, rgba(44, 62, 80,1.1), #8770b9);
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);
}

.plan-tall {
  margin: 0;
  background-color: white;
  border-width: 2px;
  border-radius: 7px;
}
.plan-tall > .plan-title {
  font-size: 18px;
}
.plan-tall > .plan-price {
  width: 100px;
  height: 100px;
  line-height: 100px;
  font-size: 21px;
  border-radius: 50px;
}
.plan-tall > .plan-features {
  font-size: 13px;
}
.plan-tall > .plan-button {
  padding: 0 16px;
  line-height: 32px;
}
.plan-tall + .plan {
  border-left: 0;
}

</style>

  <!--[if lt IE 9]><script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script><![endif]-->

  <div class=\"plans\">
  ";
        // line 267
        $context["i"] = 1;
        // line 268
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 269
            echo "  ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 3)) {
                // line 270
                echo " <div class=\"plan\">
      <h2 class=\"plan-title\">";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "intituleMat", array()), "html", null, true);
                echo "</h2>
      <p class=\"plan-price\">";
                // line 272
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "<span>/20</span></p>
      <ul class=\"plan-features\">
        <li><strong>";
                // line 274
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : $this->getContext($context, "best")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> Best Mark</li>
        <li><strong>";
                // line 275
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_inscrits"]) ? $context["nb_inscrits"] : $this->getContext($context, "nb_inscrits")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> followers</li>
        <li><strong>";
                // line 276
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["certif"]) ? $context["certif"] : $this->getContext($context, "certif")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> 
Certifications</li>
      </ul>
      <a href=\"";
                // line 279
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_getQcm_homepage", array("idMat" => $this->getAttribute($context["value"], "idMat", array()), "idetud" => (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")))), "html", null, true);
                echo "\" class=\"plan-button\">Start Now</a>
    </div>
    </div>
     <div class=\"plans\">
  ";
                // line 283
                $context["i"] = 1;
                // line 284
                echo "  ";
            } else {
                // line 285
                echo "<div class=\"plan\">
      <h2 class=\"plan-title\">";
                // line 286
                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "intituleMat", array()), "html", null, true);
                echo "</h2>
      <p class=\"plan-price\">";
                // line 287
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : $this->getContext($context, "note")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "<span>/20</span></p>
      <ul class=\"plan-features\">
        <li><strong>";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["best"]) ? $context["best"] : $this->getContext($context, "best")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> Best Mark</li>
        <li><strong>";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nb_inscrits"]) ? $context["nb_inscrits"] : $this->getContext($context, "nb_inscrits")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> followers</li>
        <li><strong>";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["certif"]) ? $context["certif"] : $this->getContext($context, "certif")), $this->getAttribute($context["value"], "idMat", array()), array(), "array"), "html", null, true);
                echo "</strong> 
Certifications</li>
      </ul>
      <a href=\"";
                // line 294
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("etudiant_getQcm_homepage", array("idMat" => $this->getAttribute($context["value"], "idMat", array()), "idetud" => (isset($context["idetud"]) ? $context["idetud"] : $this->getContext($context, "idetud")))), "html", null, true);
                echo "\" class=\"plan-button\">Start Now</a>
    </div>
   ";
                // line 296
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 297
                echo "  ";
            }
            // line 298
            echo "     
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "   
  </div>

";
        
        $__internal_207c6cd79e1ba091f1851e1150b9e5173358762ca792279087f94be417932291->leave($__internal_207c6cd79e1ba091f1851e1150b9e5173358762ca792279087f94be417932291_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:qcmGroupBy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 300,  378 => 298,  375 => 297,  373 => 296,  368 => 294,  362 => 291,  358 => 290,  354 => 289,  349 => 287,  345 => 286,  342 => 285,  339 => 284,  337 => 283,  330 => 279,  324 => 276,  320 => 275,  316 => 274,  311 => 272,  307 => 271,  304 => 270,  301 => 269,  296 => 268,  294 => 267,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <style type="text/css">*/
/* html, body, div, span, applet, object, iframe,*/
/* h1, h2, h3, h4, h5, h6, p, blockquote, pre,*/
/* a, abbr, acronym, address, big, cite, code,*/
/* del, dfn, em, img, ins, kbd, q, s, samp,*/
/* small, strike, strong, sub, sup, tt, var,*/
/* b, u, i, center,*/
/* dl, dt, dd, ol, ul, li,*/
/* fieldset, form, label, legend,*/
/* table, caption, tbody, tfoot, thead, tr, th, td,*/
/* article, aside, canvas, details, embed,*/
/* figure, figcaption, footer, header, hgroup,*/
/* menu, nav, output, ruby, section, summary,*/
/* time, mark, audio, video {*/
/*   margin: 0;*/
/*   padding: 0;*/
/*   border: 0;*/
/*   font-size: 100%;*/
/*   font: inherit;*/
/*   vertical-align: baseline;*/
/* }*/
/* */
/* article, aside, details, figcaption, figure,*/
/* footer, header, hgroup, menu, nav, section {*/
/*   display: block;*/
/* }*/
/* */
/* body {*/
/*   line-height: 1;*/
/* }*/
/* */
/* ol, ul {*/
/*   list-style: none;*/
/* }*/
/* */
/* blockquote, q {*/
/*   quotes: none;*/
/* }*/
/* */
/* blockquote:before, blockquote:after,*/
/* q:before, q:after {*/
/*   content: '';*/
/*   content: none;*/
/* }*/
/* */
/* table {*/
/*   border-collapse: collapse;*/
/*   border-spacing: 0;*/
/* }*/
/* */
/* .about {*/
/*   margin: 70px auto 40px;*/
/*   padding: 8px;*/
/*   width: 260px;*/
/*   font: 10px/18px 'Lucida Grande', Arial, sans-serif;*/
/*   color: #666;*/
/*   text-align: center;*/
/*   text-shadow: 0 1px rgba(255, 255, 255, 0.25);*/
/*   background: #eee;*/
/*   background: rgba(250, 250, 250, 0.8);*/
/*   border-radius: 4px;*/
/*   background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));*/
/*   background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));*/
/*   background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));*/
/*   background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));*/
/*   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);*/
/*   box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);*/
/* }*/
/* .about a {*/
/*   color: #333;*/
/*   text-decoration: none;*/
/*   border-radius: 2px;*/
/*   -webkit-transition: background 0.1s;*/
/*   -moz-transition: background 0.1s;*/
/*   -o-transition: background 0.1s;*/
/*   transition: background 0.1s;*/
/* }*/
/* .about a:hover {*/
/*   text-decoration: none;*/
/*   background: #fafafa;*/
/*   background: rgba(255, 255, 255, 0.7);*/
/* }*/
/* */
/* .about-links {*/
/*   height: 30px;*/
/* }*/
/* .about-links > a {*/
/*   float: left;*/
/*   width: 50%;*/
/*   line-height: 30px;*/
/*   font-size: 12px;*/
/* }*/
/* */
/* .about-author {*/
/*   margin-top: 5px;*/
/* }*/
/* .about-author > a {*/
/*   padding: 1px 3px;*/
/*   margin: 0 -1px;*/
/* }*/
/* */
/* body {*/
/*   font: 12px/20px 'Lucida Grande', Verdana, sans-serif;*/
/*   color: #404040;*/
/*   background: #75649b;*/
/* }*/
/* */
/* .plans {*/
/*   margin: 40px auto;*/
/*   width: 660px;*/
/*   zoom: 1;*/
/* }*/
/* .plans:before, .plans:after {*/
/*   content: '';*/
/*   display: table;*/
/* }*/
/* .plans:after {*/
/*   clear: both;*/
/* }*/
/* */
/* .plan {*/
/*   float: left;*/
/*   width: 220px;*/
/*   margin: 10px 0;*/
/*   padding: 20px;*/
/*   text-align: center;*/
/*   background: #fafafa;*/
/*   background-clip: padding-box;*/
/*   border: solid #453b5d;*/
/*   border-width: 2px 0 2px 2px;*/
/*   -webkit-box-sizing: border-box;*/
/*   -moz-box-sizing: border-box;*/
/*   box-sizing: border-box;*/
/*   -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);*/
/*   box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);*/
/* }*/
/* .plan:first-child {*/
/*   border-top-left-radius: 7px;*/
/*   border-bottom-left-radius: 7px;*/
/* }*/
/* .plan:last-child {*/
/*   border-width: 2px;*/
/*   border-top-right-radius: 7px;*/
/*   border-bottom-right-radius: 7px;*/
/* }*/
/* */
/* .plan-title {*/
/*   position: relative;*/
/*   margin: -20px -10px 20px;*/
/*   padding: 20px;*/
/*   line-height: 1;*/
/*   font-size: 16px;*/
/*   font-weight: bold;*/
/*   color: #595f6b;*/
/*   border-bottom: 1px dashed #d2d2d2;*/
/* }*/
/* .plan-title:before {*/
/*   content: '';*/
/*   position: absolute;*/
/*   bottom: -1px;*/
/*   left: 0;*/
/*   right: 0;*/
/*   height: 1px;*/
/*   background-size: 3px 1px;*/
/*   background-image: -webkit-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);*/
/*   background-image: -moz-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);*/
/*   background-image: -o-linear-gradient(left, white, white 33%, #d2d2d2 34%, #d2d2d2);*/
/*   background-image: linear-gradient(to right, white, white 33%, #d2d2d2 34%, #d2d2d2);*/
/* }*/
/* */
/* .plan-price {*/
/*   margin: 0 auto 20px;*/
/*   width: 90px;*/
/*   height: 90px;*/
/*   line-height: 90px;*/
/*   font-size: 19px;*/
/*   font-weight: bold;*/
/*   color: white;*/
/*   background: #595f6b;*/
/*   border-radius: 45px;*/
/* }*/
/* .plan-price > span {*/
/*   font-size: 12px;*/
/*   font-weight: normal;*/
/*   color: rgba(255, 255, 255, 0.9);*/
/* }*/
/* */
/* .plan-features {*/
/*   margin-bottom: 20px;*/
/*   line-height: 2;*/
/*   font-size: 12px;*/
/*   color: #999;*/
/*   text-align: center;*/
/* }*/
/* .plan-features > li > strong {*/
/*   font-weight: bold;*/
/*   color: #888;*/
/* }*/
/* */
/* .plan-button {*/
/*   display: inline-block;*/
/*   vertical-align: top;*/
/*   padding: 0 15px;*/
/*   line-height: 30px;*/
/*   font-weight: bold;*/
/*   color: white;*/
/*   text-transform: uppercase;*/
/*   text-decoration: none;*/
/*   text-shadow: 0 1px 1px rgba(0, 0, 0, 0.7);*/
/*   background: rgba(44, 62, 80,1.0);*/
/*   border: 1px solid #222;*/
/*   border-bottom-color: black;*/
/*   border-radius: 3px;*/
/*   background-image: -webkit-linear-gradient(top, rgba(44, 62, 80,0.8), #);*/
/*   background-image: -moz-linear-gradient(top, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));*/
/*   background-image: -o-linear-gradient(top, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));*/
/*   background-image: linear-gradient(to bottom, rgba(44, 62, 80,0.8), rgba(44, 62, 80,1.1));*/
/*   -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);*/
/*   box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), inset 0 2px rgba(255, 255, 255, 0.1), 0 1px rgba(0, 0, 0, 0.1);*/
/* }*/
/* .plan-button:active {*/
/*   color: rgba(255, 255, 255, 0.95);*/
/*   background: rgba(44, 62, 80,1.1);*/
/*   border-color: black #222 #222;*/
/*   background-image: -webkit-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);*/
/*   background-image: -moz-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);*/
/*   background-image: -o-linear-gradient(top, rgba(44, 62, 80,1.1), #8770b9);*/
/*   background-image: linear-gradient(to bottom, rgba(44, 62, 80,1.1), #8770b9);*/
/*   -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);*/
/*   box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.25);*/
/* }*/
/* */
/* .plan-tall {*/
/*   margin: 0;*/
/*   background-color: white;*/
/*   border-width: 2px;*/
/*   border-radius: 7px;*/
/* }*/
/* .plan-tall > .plan-title {*/
/*   font-size: 18px;*/
/* }*/
/* .plan-tall > .plan-price {*/
/*   width: 100px;*/
/*   height: 100px;*/
/*   line-height: 100px;*/
/*   font-size: 21px;*/
/*   border-radius: 50px;*/
/* }*/
/* .plan-tall > .plan-features {*/
/*   font-size: 13px;*/
/* }*/
/* .plan-tall > .plan-button {*/
/*   padding: 0 16px;*/
/*   line-height: 32px;*/
/* }*/
/* .plan-tall + .plan {*/
/*   border-left: 0;*/
/* }*/
/* */
/* </style>*/
/* */
/*   <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->*/
/* */
/*   <div class="plans">*/
/*   {% set i = 1 %}*/
/*   {% for key,value in courses %}*/
/*   {% if i == 3 %}*/
/*  <div class="plan">*/
/*       <h2 class="plan-title">{{ value.intituleMat}}</h2>*/
/*       <p class="plan-price">{{ note[value.idMat] }}<span>/20</span></p>*/
/*       <ul class="plan-features">*/
/*         <li><strong>{{best[value.idMat]}}</strong> Best Mark</li>*/
/*         <li><strong>{{nb_inscrits[value.idMat]}}</strong> followers</li>*/
/*         <li><strong>{{certif[value.idMat]}}</strong> */
/* Certifications</li>*/
/*       </ul>*/
/*       <a href="{{path('etudiant_getQcm_homepage',{'idMat':value.idMat,'idetud':idetud})}}" class="plan-button">Start Now</a>*/
/*     </div>*/
/*     </div>*/
/*      <div class="plans">*/
/*   {% set i = 1 %}*/
/*   {% else %}*/
/* <div class="plan">*/
/*       <h2 class="plan-title">{{ value.intituleMat}}</h2>*/
/*       <p class="plan-price">{{ note[value.idMat] }}<span>/20</span></p>*/
/*       <ul class="plan-features">*/
/*         <li><strong>{{best[value.idMat]}}</strong> Best Mark</li>*/
/*         <li><strong>{{nb_inscrits[value.idMat]}}</strong> followers</li>*/
/*         <li><strong>{{certif[value.idMat]}}</strong> */
/* Certifications</li>*/
/*       </ul>*/
/*       <a href="{{path('etudiant_getQcm_homepage',{'idMat':value.idMat,'idetud':idetud})}}" class="plan-button">Start Now</a>*/
/*     </div>*/
/*    {% set i = i + 1 %}*/
/*   {% endif %}*/
/*      */
/*   {% endfor %}*/
/*    */
/*   </div>*/
/* */
/* */
