<?php

/* BoAdvisorsBundle:Timesheet:addts.html.twig */
class __TwigTemplate_08d22c310ecd54b104da076a030ff71ddb920842222248ea5d647bdc694a982b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Timesheet:addts.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86df4346746c7fdc62e385950def3b63709e317d21b8c1b422749317661ff67e = $this->env->getExtension("native_profiler");
        $__internal_86df4346746c7fdc62e385950def3b63709e317d21b8c1b422749317661ff67e->enter($__internal_86df4346746c7fdc62e385950def3b63709e317d21b8c1b422749317661ff67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:addts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86df4346746c7fdc62e385950def3b63709e317d21b8c1b422749317661ff67e->leave($__internal_86df4346746c7fdc62e385950def3b63709e317d21b8c1b422749317661ff67e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_889eee04c1e59e17efc6f31e0fb8e2ae974595869fe0e71f183b5a9376c60b27 = $this->env->getExtension("native_profiler");
        $__internal_889eee04c1e59e17efc6f31e0fb8e2ae974595869fe0e71f183b5a9376c60b27->enter($__internal_889eee04c1e59e17efc6f31e0fb8e2ae974595869fe0e71f183b5a9376c60b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_889eee04c1e59e17efc6f31e0fb8e2ae974595869fe0e71f183b5a9376c60b27->leave($__internal_889eee04c1e59e17efc6f31e0fb8e2ae974595869fe0e71f183b5a9376c60b27_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_f6a629e23771e3f72c30b5f89f148d2e73a517f43fb8534ce5e9ffea5a14d663 = $this->env->getExtension("native_profiler");
        $__internal_f6a629e23771e3f72c30b5f89f148d2e73a517f43fb8534ce5e9ffea5a14d663->enter($__internal_f6a629e23771e3f72c30b5f89f148d2e73a517f43fb8534ce5e9ffea5a14d663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Timesheet:addts.html.twig", 3)->display($context);
        
        $__internal_f6a629e23771e3f72c30b5f89f148d2e73a517f43fb8534ce5e9ffea5a14d663->leave($__internal_f6a629e23771e3f72c30b5f89f148d2e73a517f43fb8534ce5e9ffea5a14d663_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_218c1e1b5f3a359a5918d8888e75bf4d10a779d89460f74389659befcf138ca6 = $this->env->getExtension("native_profiler");
        $__internal_218c1e1b5f3a359a5918d8888e75bf4d10a779d89460f74389659befcf138ca6->enter($__internal_218c1e1b5f3a359a5918d8888e75bf4d10a779d89460f74389659befcf138ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:User:rightshow.html.twig", "BoAdvisorsBundle:Timesheet:addts.html.twig", 4)->display($context);
        }
        
        $__internal_218c1e1b5f3a359a5918d8888e75bf4d10a779d89460f74389659befcf138ca6->leave($__internal_218c1e1b5f3a359a5918d8888e75bf4d10a779d89460f74389659befcf138ca6_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_656dcdf641f6b115380fae69cf64f880708303368156a57d5959a235c18feedc = $this->env->getExtension("native_profiler");
        $__internal_656dcdf641f6b115380fae69cf64f880708303368156a57d5959a235c18feedc->enter($__internal_656dcdf641f6b115380fae69cf64f880708303368156a57d5959a235c18feedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_656dcdf641f6b115380fae69cf64f880708303368156a57d5959a235c18feedc->leave($__internal_656dcdf641f6b115380fae69cf64f880708303368156a57d5959a235c18feedc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3fba586c406f2b159c9b419b584ecd9f7b2e69b32effb157e40e98ea10b9f59 = $this->env->getExtension("native_profiler");
        $__internal_d3fba586c406f2b159c9b419b584ecd9f7b2e69b32effb157e40e98ea10b9f59->enter($__internal_d3fba586c406f2b159c9b419b584ecd9f7b2e69b32effb157e40e98ea10b9f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_timesheet_add", array("idcontract" => $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:addactions.html.twig", "BoAdvisorsBundle:Timesheet:addts.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"search_content\"></div>
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:addform.html.twig", "BoAdvisorsBundle:Timesheet:addts.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<input id=\"idsgroup\" type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["idgroup"]) ? $context["idgroup"] : $this->getContext($context, "idgroup")), "html", null, true);
        echo "\" />
\t\t\t<input id=\"idcontract\" type=\"hidden\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
        echo "\" />
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d3fba586c406f2b159c9b419b584ecd9f7b2e69b32effb157e40e98ea10b9f59->leave($__internal_d3fba586c406f2b159c9b419b584ecd9f7b2e69b32effb157e40e98ea10b9f59_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d1194c1ebe4e721ecc67ef6d6397db7e6aff5fa2601eea16738bf1de05a5930 = $this->env->getExtension("native_profiler");
        $__internal_2d1194c1ebe4e721ecc67ef6d6397db7e6aff5fa2601eea16738bf1de05a5930->enter($__internal_2d1194c1ebe4e721ecc67ef6d6397db7e6aff5fa2601eea16738bf1de05a5930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\tvar str=\$(\"#idgroup option:selected\");
\t\t\t\tidgroup=str.val();
\t\t\t\tif(idgroup!=0){
\t\t\t\t\t\$(\"#learner_attendance\").show();
\t\t\t\t\t\$('#idstudent').attr('disabled', 'disabled');
\t\t\t\t}
\t\t\t});
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tvar str=\$(\"#idgroup option:selected\");
\t\t\t\tidgroup=str.val();
\t\t\t\tvar str=\$(\".typeclass option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstudent option:selected\");
\t\t\t\tidstudent=str.val();
\t\t\t\tif(type=='Teaching' && idgroup==\"0\" && idstudent==\"0\"){
\t\t\t\t\talert(\"One of the two fields group or student must not be empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#idgroup\").change(function(){
\t\t\t\tvar str=\$(\"#idgroup option:selected\");
\t\t\t\tidgroup=str.val();
\t\t\t\tvar str=\$(\".typeclass option:selected\");
\t\t\t\ttypets=str.val();
\t\t\t\tif(idgroup==0){
\t\t\t\t\t\$(\"#learner_attendance\").hide();
\t\t\t\t\t\$('#idstudent').removeAttr('disabled');
\t\t\t\t}else{
\t\t\t\t\t\$(\"#learner_attendance\").show();
\t\t\t\t\t\$('#idstudent').attr('disabled', 'disabled');
\t\t\t\t}
\t\t\t});
\t\t\t\$(\"#idstudent\").change(function(){
\t\t\t\tvar str=\$(\"#idstudent option:selected\");
\t\t\t\tidstudent=str.val();
\t\t\t\tif(idstudent==0){
\t\t\t\t\t\$('#idgroup').removeAttr('disabled');
\t\t\t\t\tvar str=\$(\"#idgroup option:selected\");
\t\t\t\t\tidgroup=str.val();
\t\t\t\t\tif(idgroup!=0) \$(\"#learner_attendance\").show();
\t\t\t\t}else{
\t\t\t\t\t\$(\"#learner_attendance\").hide();
\t\t\t\t\t\$('#idgroup').attr('disabled', 'disabled');
\t\t\t\t}
\t\t\t});
\t\t\t\$(\".typeclass\").change(function(){
\t\t\t\tvar str=\$(\".typeclass option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tif(type!=1){
\t\t\t\t\tvar str=\$(\"#idgroup option:selected\");
\t\t\t\t\tidgroup=str.val();
\t\t\t\t\t\$(\"#learner_attendance\").hide();
\t\t\t\t\t\$('#idsgroup').val(idgroup);
\t\t\t\t\t\$('#idgroup').val(0);
\t\t\t\t\t\$('#idstudent').val(0);
\t\t\t\t}else{
\t\t\t\t\treloaddate(type,\$('#idsgroup').val());
\t\t\t\t}
\t\t\t});
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t
\t\t\t\t\$('.show_content').hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$('.search_content').html(\"<center>Recherche en cours >>&nbsp;<img src=\\\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_contractsearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.search_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\tfunction reloaddate(type,idgroup){
\t\t\t\tvar DATA = 'data='+type+\"-\"+idgroup;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("dash_timesheet_reloaddata");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#reload_timesheet').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_2d1194c1ebe4e721ecc67ef6d6397db7e6aff5fa2601eea16738bf1de05a5930->leave($__internal_2d1194c1ebe4e721ecc67ef6d6397db7e6aff5fa2601eea16738bf1de05a5930_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:addts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 118,  251 => 108,  235 => 95,  228 => 91,  156 => 21,  144 => 20,  138 => 17,  134 => 16,  130 => 15,  127 => 14,  125 => 13,  121 => 11,  119 => 10,  115 => 9,  111 => 8,  108 => 7,  102 => 6,  84 => 5,  69 => 4,  57 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}} >> {{'action.add'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%if employee!=null%}{%include "BoAdminBundle:User:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}} >> {{'action.add'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('dash_timesheet_add', { 'idcontract': contract.id }) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoAdvisorsBundle:Timesheet:addactions.html.twig"%}*/
/* 			<div class="search_content"></div>*/
/* 			<div class="show_content">*/
/* 				{%include "BoAdvisorsBundle:Timesheet:addform.html.twig"%}*/
/* 			</div>*/
/* 			<input id="idsgroup" type="hidden" value="{{idgroup}}" />*/
/* 			<input id="idcontract" type="hidden" value="{{contract.id}}" />*/
/* 			{{ form_rest(form) }}*/
/* 		</form>	*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$(document).ready(function(){*/
/* 				var str=$("#idgroup option:selected");*/
/* 				idgroup=str.val();*/
/* 				if(idgroup!=0){*/
/* 					$("#learner_attendance").show();*/
/* 					$('#idstudent').attr('disabled', 'disabled');*/
/* 				}*/
/* 			});*/
/* 			$("#btn-create").click(function(){*/
/* 				var str=$("#idgroup option:selected");*/
/* 				idgroup=str.val();*/
/* 				var str=$(".typeclass option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstudent option:selected");*/
/* 				idstudent=str.val();*/
/* 				if(type=='Teaching' && idgroup=="0" && idstudent=="0"){*/
/* 					alert("One of the two fields group or student must not be empty!");*/
/* 					return false;*/
/* 				}				*/
/* 				return true;*/
/* 			});*/
/* 			$("#idgroup").change(function(){*/
/* 				var str=$("#idgroup option:selected");*/
/* 				idgroup=str.val();*/
/* 				var str=$(".typeclass option:selected");*/
/* 				typets=str.val();*/
/* 				if(idgroup==0){*/
/* 					$("#learner_attendance").hide();*/
/* 					$('#idstudent').removeAttr('disabled');*/
/* 				}else{*/
/* 					$("#learner_attendance").show();*/
/* 					$('#idstudent').attr('disabled', 'disabled');*/
/* 				}*/
/* 			});*/
/* 			$("#idstudent").change(function(){*/
/* 				var str=$("#idstudent option:selected");*/
/* 				idstudent=str.val();*/
/* 				if(idstudent==0){*/
/* 					$('#idgroup').removeAttr('disabled');*/
/* 					var str=$("#idgroup option:selected");*/
/* 					idgroup=str.val();*/
/* 					if(idgroup!=0) $("#learner_attendance").show();*/
/* 				}else{*/
/* 					$("#learner_attendance").hide();*/
/* 					$('#idgroup').attr('disabled', 'disabled');*/
/* 				}*/
/* 			});*/
/* 			$(".typeclass").change(function(){*/
/* 				var str=$(".typeclass option:selected");*/
/* 				type=str.val();*/
/* 				if(type!=1){*/
/* 					var str=$("#idgroup option:selected");*/
/* 					idgroup=str.val();*/
/* 					$("#learner_attendance").hide();*/
/* 					$('#idsgroup').val(idgroup);*/
/* 					$('#idgroup').val(0);*/
/* 					$('#idstudent').val(0);*/
/* 				}else{*/
/* 					reloaddate(type,$('#idsgroup').val());*/
/* 				}*/
/* 			});*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();	*/
/* 				$('.show_content').hide();*/
/* 				$(".list_link").show();*/
/* 				$('.search_content').html("<center>Recherche en cours >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_contractsearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.search_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			function reloaddate(type,idgroup){*/
/* 				var DATA = 'data='+type+"-"+idgroup;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_timesheet_reloaddata')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#reload_timesheet').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
