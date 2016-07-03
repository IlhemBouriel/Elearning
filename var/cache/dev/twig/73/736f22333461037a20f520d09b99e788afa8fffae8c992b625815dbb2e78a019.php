<?php

/* EtudiantEtudiantBundle:etudiant:sendMsg.html.twig */
class __TwigTemplate_c1bc8a0f88ea9953c89e2a9ac1045633bac6a387bcdeac363c091345d5438034 extends Twig_Template
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
        $__internal_a9dc24e0a4bf35267bf4b966574c91d0807a75912fbb211f05525944c857552f = $this->env->getExtension("native_profiler");
        $__internal_a9dc24e0a4bf35267bf4b966574c91d0807a75912fbb211f05525944c857552f->enter($__internal_a9dc24e0a4bf35267bf4b966574c91d0807a75912fbb211f05525944c857552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EtudiantEtudiantBundle:etudiant:sendMsg.html.twig"));

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
            echo "    <div class=\"alert-box success\"><span>success: </span>your message has been sent</div>
    ";
        }
        // line 8
        echo " 
   <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
            <h4 class=\"modal-title\">Compose Message</h4>
          </div>
        
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("etudiant_sendmessage_homepage");
        echo "\" role=\"form\" id=\"form\" class=\"form-horizontal\" method=\"post\" >
                <div class=\"form-group\">
                  <label class=\"col-sm-2\" for=\"inputTo\">To</label>
                  <div class=\"col-sm-10\"><select name=\"destinataire\"class=\"form-control\" id=\"inputTo\">
        
  <option>Admin</option>
</select>
                    </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2\" for=\"inputSubject\">Subject</label>
                  <div class=\"col-sm-10\"><input name=\"titre\"  type=\"text\" class=\"form-control\" id=\"inputSubject\" placeholder=\"subject\"></div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-12\" for=\"inputBody\">Message</label>
                  <div class=\"col-sm-12\"><textarea name=\"contenu\" class=\"form-control\" id=\"inputBody\" rows=\"18\"></textarea></div>
                </div>
            
 
          <div class=\"modal-footer\">
            <button type=\"button\" onclick=\"methode()\" class=\"btn btn-default pull-left\" data-dismiss=\"modal\">Cancel</button> 
            <input type=\"submit\" type=\"button\" class=\"btn btn-primary \">Send <i class=\"fa fa-arrow-circle-right fa-lg\"></i></input>
            </form>
            
 
          </div>
          </div>

<script type=\"text/javascript\">
function methode()
{
   \$(\"input[name=titre]\").val(\" \");
   \$(\"textarea[name=contenu]\").val(\" \");
}
</script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/etudiantetudiant/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_a9dc24e0a4bf35267bf4b966574c91d0807a75912fbb211f05525944c857552f->leave($__internal_a9dc24e0a4bf35267bf4b966574c91d0807a75912fbb211f05525944c857552f_prof);

    }

    public function getTemplateName()
    {
        return "EtudiantEtudiantBundle:etudiant:sendMsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 49,  52 => 14,  44 => 8,  40 => 7,  37 => 6,  35 => 5,  30 => 3,  26 => 2,  22 => 1,);
    }
}
/* {{ include('EtudiantEtudiantBundle:etudiant:template.html.twig')}}*/
/* {{ include('EtudiantEtudiantBundle:etudiant:importBS.html.twig')}}*/
/* <link href="{{ asset('bundles/etudiantetudiant/alertCSS.css') }}" rel="stylesheet" />*/
/* */
/* {% if msg == 0 %}*/
/*               {% else %}*/
/*     <div class="alert-box success"><span>success: </span>your message has been sent</div>*/
/*     {% endif %} */
/*    <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*             <h4 class="modal-title">Compose Message</h4>*/
/*           </div>*/
/*         */
/*             <form action="{{path('etudiant_sendmessage_homepage')}}" role="form" id="form" class="form-horizontal" method="post" >*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2" for="inputTo">To</label>*/
/*                   <div class="col-sm-10"><select name="destinataire"class="form-control" id="inputTo">*/
/*         */
/*   <option>Admin</option>*/
/* </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2" for="inputSubject">Subject</label>*/
/*                   <div class="col-sm-10"><input name="titre"  type="text" class="form-control" id="inputSubject" placeholder="subject"></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-12" for="inputBody">Message</label>*/
/*                   <div class="col-sm-12"><textarea name="contenu" class="form-control" id="inputBody" rows="18"></textarea></div>*/
/*                 </div>*/
/*             */
/*  */
/*           <div class="modal-footer">*/
/*             <button type="button" onclick="methode()" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button> */
/*             <input type="submit" type="button" class="btn btn-primary ">Send <i class="fa fa-arrow-circle-right fa-lg"></i></input>*/
/*             </form>*/
/*             */
/*  */
/*           </div>*/
/*           </div>*/
/* */
/* <script type="text/javascript">*/
/* function methode()*/
/* {*/
/*    $("input[name=titre]").val(" ");*/
/*    $("textarea[name=contenu]").val(" ");*/
/* }*/
/* </script>*/
/* <script src="{{ asset('bundles/etudiantetudiant/jquery-3.0.0.min.js') }}"></script>*/
