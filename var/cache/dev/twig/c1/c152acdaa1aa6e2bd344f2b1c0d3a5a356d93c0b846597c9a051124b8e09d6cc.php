<?php

/* @EtudiantEtudiant/etudiant/sendMsg.html.twig */
class __TwigTemplate_973d5706c1680b1ce0ae2983243747723bcf839eabeb3aa649a872be02189714 extends Twig_Template
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
        $__internal_80e2a89c70e5244c6e1d78a4c2f7aaf6bba91172444f17e30d4bdb4d52f01f28 = $this->env->getExtension("native_profiler");
        $__internal_80e2a89c70e5244c6e1d78a4c2f7aaf6bba91172444f17e30d4bdb4d52f01f28->enter($__internal_80e2a89c70e5244c6e1d78a4c2f7aaf6bba91172444f17e30d4bdb4d52f01f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EtudiantEtudiant/etudiant/sendMsg.html.twig"));

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
        
        $__internal_80e2a89c70e5244c6e1d78a4c2f7aaf6bba91172444f17e30d4bdb4d52f01f28->leave($__internal_80e2a89c70e5244c6e1d78a4c2f7aaf6bba91172444f17e30d4bdb4d52f01f28_prof);

    }

    public function getTemplateName()
    {
        return "@EtudiantEtudiant/etudiant/sendMsg.html.twig";
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
