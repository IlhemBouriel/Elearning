<?php

/* @EtudiantEtudiant/etudiant/template.html.twig */
class __TwigTemplate_8197175984131710086c9914af6108d518f29126fe06677767a653bed7e59296 extends Twig_Template
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
        $__internal_f25d68ab29cc72f6611e14e6adc1ef3aa450d0aea33f8b665f9fdf7b4861baa5 = $this->env->getExtension("native_profiler");
        $__internal_f25d68ab29cc72f6611e14e6adc1ef3aa450d0aea33f8b665f9fdf7b4861baa5->enter($__internal_f25d68ab29cc72f6611e14e6adc1ef3aa450d0aea33f8b665f9fdf7b4861baa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
      <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>E-Bouriel</title>
\t<!-- BOOTSTRAP STYLES-->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- FONTAWESOME STYLES-->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- MORRIS CHART STYLES-->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/morris/morris-0.4.3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <!-- CUSTOM STYLES-->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">E-Bouriel</a> 
            </div>
  <div style=\"color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;\"> &nbsp; <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("etudiant_deconnect_homepage");
        echo "\" class=\"btn btn-danger square-btn-adjust\">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class=\"navbar-default navbar-side\" role=\"navigation\">
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"main-menu\">
\t\t\t\t<li class=\"text-center\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/img/find_user.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\"/>
\t\t\t\t\t</li>
\t\t\t\t
\t\t\t\t\t
                    <li>
                        ";
        // line 45
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "dash")) {
            // line 46
            echo "                        <a class=\"active-menu\"  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_getHome_homepage");
            echo "\"><i class=\"fa fa-dashboard fa-3x\"></i> Dashboard</a>
                        ";
        } else {
            // line 48
            echo "                        <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_getHome_homepage");
            echo "\"><i class=\"fa fa-dashboard fa-3x\"></i> Dashboard</a>
                        ";
        }
        // line 50
        echo "                    </li>
                     <li>
                         ";
        // line 52
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "list")) {
            // line 53
            echo "                       <a  class=\"active-menu\" href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_allcourses_homepage");
            echo "\"><i class=\"fa fa-desktop fa-3x\"></i> All Courses</a>
                        ";
        } else {
            // line 55
            echo "                      <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_allcourses_homepage");
            echo "\"><i class=\"fa fa-desktop fa-3x\"></i> All Courses</a>
                        ";
        }
        // line 57
        echo "                        
                    </li>
                    <li>
                         ";
        // line 60
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "mine")) {
            // line 61
            echo "                       <a   class=\"active-menu\" href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_mycourses_homepage");
            echo "\"><i class=\"fa fa-qrcode fa-3x\"></i> My Courses</a>
                        ";
        } else {
            // line 63
            echo "                      <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_mycourses_homepage");
            echo "\"><i class=\"fa fa-qrcode fa-3x\"></i> My Courses</a>
                        ";
        }
        // line 65
        echo "                        
                    </li>
                     <li>
                         ";
        // line 68
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "result")) {
            // line 69
            echo "                       <a   class=\"active-menu\" href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_result_homepage");
            echo "\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> My Results</a>  
                        ";
        } else {
            // line 71
            echo "                       <a   href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_result_homepage");
            echo "\"><i class=\"fa fa-bar-chart-o fa-3x\"></i> My Results</a>  
                        ";
        }
        // line 73
        echo "                        
                    </li>
                      <li>
                         ";
        // line 76
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "qcm")) {
            // line 77
            echo "                       <a href=\"#\" class=\"active-menu\" ><i class=\"fa fa-sitemap fa-3x\"></i> QCM<span class=\"fa arrow\"></span></a>
                        ";
        } else {
            // line 79
            echo "                      <a href=\"#\" ><i class=\"fa fa-sitemap fa-3x\"></i> QCM<span class=\"fa arrow\"></span></a>
                        ";
        }
        // line 81
        echo "                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("etudiant_qcmGroupedByC_homepage");
        echo "\">Grouped By Courses</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("etudiant_randomQcm_homepage");
        echo "\">Randomly</a>
                            </li>
                        </ul>
                    </li>
                      <li>
                         ";
        // line 91
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "certif")) {
            // line 92
            echo "                        <a class=\"active-menu\" href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_getcertifications_homepage");
            echo "\"><i class=\"fa fa-table fa-3x\"></i> Certification</a>
                        ";
        } else {
            // line 94
            echo "                         <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_getcertifications_homepage");
            echo "\"><i class=\"fa fa-table fa-3x\"></i> Certification</a>  
                        ";
        }
        // line 96
        echo "                        
                    </li>
                        <li>
                         ";
        // line 99
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "msg")) {
            // line 100
            echo "                       <a href=\"#\" class=\"active-menu\" ><i class=\"fa fa-sitemap fa-3x\"></i> Messaging<span class=\"fa arrow\"></span></a>
                        ";
        } else {
            // line 102
            echo "                      <a href=\"#\" ><i class=\"fa fa-sitemap fa-3x\"></i> Messaging<span class=\"fa arrow\"></span></a>
                        ";
        }
        // line 104
        echo "                        <ul class=\"nav nav-second-level\">
                            <li>
                                <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("etudiant_mymessages_homepage");
        echo "\">My messages</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("etudiant_getFormSend_homepage");
        echo "\">Send a message</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                         ";
        // line 114
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) == "setting")) {
            // line 115
            echo "                        <a  class=\"active-menu\" href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_SetProfile_homepage");
            echo "\"><i class=\"fa fa-edit fa-3x\"></i> Setting </a>
                        ";
        } else {
            // line 117
            echo "                         <a  href=\"";
            echo $this->env->getExtension('routing')->getPath("etudiant_SetProfile_homepage");
            echo "\"><i class=\"fa fa-edit fa-3x\"></i> Setting </a>
                        ";
        }
        // line 119
        echo "                        
                    </li>
                    <li  >
                        
                    </li>\t\t\t\t
\t\t\t\t\t\t            
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id=\"page-wrapper\" >
            <div id=\"page-inner\">
             
   
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- METISMENU SCRIPTS -->
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/morris/raphael-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/morris/morris.js"), "html", null, true);
        echo "\"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/assets/js/custom.js"), "html", null, true);
        echo "\"></script>
    
   
</body>
</html>
";
        
        $__internal_f25d68ab29cc72f6611e14e6adc1ef3aa450d0aea33f8b665f9fdf7b4861baa5->leave($__internal_f25d68ab29cc72f6611e14e6adc1ef3aa450d0aea33f8b665f9fdf7b4861baa5_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 148,  291 => 146,  287 => 145,  282 => 143,  277 => 141,  272 => 139,  250 => 119,  244 => 117,  238 => 115,  236 => 114,  228 => 109,  222 => 106,  218 => 104,  214 => 102,  210 => 100,  208 => 99,  203 => 96,  197 => 94,  191 => 92,  189 => 91,  181 => 86,  175 => 83,  171 => 81,  167 => 79,  163 => 77,  161 => 76,  156 => 73,  150 => 71,  144 => 69,  142 => 68,  137 => 65,  131 => 63,  125 => 61,  123 => 60,  118 => 57,  112 => 55,  106 => 53,  104 => 52,  100 => 50,  94 => 48,  88 => 46,  86 => 45,  78 => 40,  68 => 33,  46 => 14,  41 => 12,  36 => 10,  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*       <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*     <title>E-Bouriel</title>*/
/* 	<!-- BOOTSTRAP STYLES-->*/
/*     <link href="{{ asset('bundles/etudiantetudiant/assets/css/bootstrap.css') }}" rel="stylesheet" />*/
/*      <!-- FONTAWESOME STYLES-->*/
/*     <link href="{{ asset('bundles/etudiantetudiant/assets/css/font-awesome.css') }}" rel="stylesheet" />*/
/*      <!-- MORRIS CHART STYLES-->*/
/*     <link href="{{ asset('bundles/etudiantetudiant/assets/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />*/
/*         <!-- CUSTOM STYLES-->*/
/*     <link href="{{ asset('bundles/etudiantetudiant/assets/css/custom.css') }}" rel="stylesheet" />*/
/*      <!-- GOOGLE FONTS-->*/
/*    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />*/
/* </head>*/
/* <body>*/
/*     <div id="wrapper">*/
/*         <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">E-Bouriel</a> */
/*             </div>*/
/*   <div style="color: white;*/
/* padding: 15px 50px 5px 50px;*/
/* float: right;*/
/* font-size: 16px;"> &nbsp; <a href="{{ path('etudiant_deconnect_homepage')}}" class="btn btn-danger square-btn-adjust">Logout</a> </div>*/
/*         </nav>   */
/*            <!-- /. NAV TOP  -->*/
/*                 <nav class="navbar-default navbar-side" role="navigation">*/
/*             <div class="sidebar-collapse">*/
/*                 <ul class="nav" id="main-menu">*/
/* 				<li class="text-center">*/
/*                     <img src="{{ asset('bundles/etudiantetudiant/assets/img/find_user.png') }}" class="user-image img-responsive"/>*/
/* 					</li>*/
/* 				*/
/* 					*/
/*                     <li>*/
/*                         {% if id=='dash' %}*/
/*                         <a class="active-menu"  href="{{path('etudiant_getHome_homepage')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>*/
/*                         {% else %}*/
/*                         <a  href="{{path('etudiant_getHome_homepage')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>*/
/*                         {%endif %}*/
/*                     </li>*/
/*                      <li>*/
/*                          {% if id=='list' %}*/
/*                        <a  class="active-menu" href="{{path('etudiant_allcourses_homepage')}}"><i class="fa fa-desktop fa-3x"></i> All Courses</a>*/
/*                         {% else %}*/
/*                       <a  href="{{path('etudiant_allcourses_homepage')}}"><i class="fa fa-desktop fa-3x"></i> All Courses</a>*/
/*                         {%endif %}*/
/*                         */
/*                     </li>*/
/*                     <li>*/
/*                          {% if id=='mine' %}*/
/*                        <a   class="active-menu" href="{{path('etudiant_mycourses_homepage') }}"><i class="fa fa-qrcode fa-3x"></i> My Courses</a>*/
/*                         {% else %}*/
/*                       <a  href="{{path('etudiant_mycourses_homepage') }}"><i class="fa fa-qrcode fa-3x"></i> My Courses</a>*/
/*                         {%endif %}*/
/*                         */
/*                     </li>*/
/*                      <li>*/
/*                          {% if id=='result' %}*/
/*                        <a   class="active-menu" href="{{path('etudiant_result_homepage') }}"><i class="fa fa-bar-chart-o fa-3x"></i> My Results</a>  */
/*                         {% else %}*/
/*                        <a   href="{{path('etudiant_result_homepage') }}"><i class="fa fa-bar-chart-o fa-3x"></i> My Results</a>  */
/*                         {%endif %}*/
/*                         */
/*                     </li>*/
/*                       <li>*/
/*                          {% if id=='qcm' %}*/
/*                        <a href="#" class="active-menu" ><i class="fa fa-sitemap fa-3x"></i> QCM<span class="fa arrow"></span></a>*/
/*                         {% else %}*/
/*                       <a href="#" ><i class="fa fa-sitemap fa-3x"></i> QCM<span class="fa arrow"></span></a>*/
/*                         {%endif %}*/
/*                         <ul class="nav nav-second-level">*/
/*                             <li>*/
/*                                 <a href="{{path('etudiant_qcmGroupedByC_homepage') }}">Grouped By Courses</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('etudiant_randomQcm_homepage')}}">Randomly</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                       <li>*/
/*                          {% if id=='certif' %}*/
/*                         <a class="active-menu" href="{{path('etudiant_getcertifications_homepage')}}"><i class="fa fa-table fa-3x"></i> Certification</a>*/
/*                         {% else %}*/
/*                          <a  href="{{path('etudiant_getcertifications_homepage')}}"><i class="fa fa-table fa-3x"></i> Certification</a>  */
/*                         {%endif %}*/
/*                         */
/*                     </li>*/
/*                         <li>*/
/*                          {% if id=='msg' %}*/
/*                        <a href="#" class="active-menu" ><i class="fa fa-sitemap fa-3x"></i> Messaging<span class="fa arrow"></span></a>*/
/*                         {% else %}*/
/*                       <a href="#" ><i class="fa fa-sitemap fa-3x"></i> Messaging<span class="fa arrow"></span></a>*/
/*                         {%endif %}*/
/*                         <ul class="nav nav-second-level">*/
/*                             <li>*/
/*                                 <a href="{{path('etudiant_mymessages_homepage')}}">My messages</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{path('etudiant_getFormSend_homepage')}}">Send a message</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                      <li>*/
/*                          {% if id=='setting' %}*/
/*                         <a  class="active-menu" href="{{path('etudiant_SetProfile_homepage')}}"><i class="fa fa-edit fa-3x"></i> Setting </a>*/
/*                         {% else %}*/
/*                          <a  href="{{path('etudiant_SetProfile_homepage')}}"><i class="fa fa-edit fa-3x"></i> Setting </a>*/
/*                         {%endif %}*/
/*                         */
/*                     </li>*/
/*                     <li  >*/
/*                         */
/*                     </li>				*/
/* 						            */
/*                     */
/*                 </ul>*/
/*                */
/*             </div>*/
/*             */
/*         </nav>  */
/*         <!-- /. NAV SIDE  -->*/
/*         <div id="page-wrapper" >*/
/*             <div id="page-inner">*/
/*              */
/*    */
/*      <!-- /. WRAPPER  -->*/
/*     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->*/
/*     <!-- JQUERY SCRIPTS -->*/
/*     <script src="{{ asset('bundles/etudiantetudiant/assets/js/jquery-1.10.2.js') }}"></script>*/
/*       <!-- BOOTSTRAP SCRIPTS -->*/
/*     <script src="{{ asset('bundles/etudiantetudiant/assets/js/bootstrap.min.js') }}"></script>*/
/*     <!-- METISMENU SCRIPTS -->*/
/*     <script src="{{ asset('bundles/etudiantetudiant/assets/js/jquery.metisMenu.js') }}"></script>*/
/*      <!-- MORRIS CHART SCRIPTS -->*/
/*      <script src="{{ asset('bundles/etudiantetudiant/assets/js/morris/raphael-2.1.0.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/etudiantetudiant/assets/js/morris/morris.js') }}"></script>*/
/*       <!-- CUSTOM SCRIPTS -->*/
/*     <script src="{{ asset('bundles/etudiantetudiant/assets/js/custom.js') }}"></script>*/
/*     */
/*    */
/* </body>*/
/* </html>*/
/* */
