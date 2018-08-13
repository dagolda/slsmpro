<?php

/* BoHomeBundle:Timesheet:addtsgroup.html.twig */
class __TwigTemplate_547c4f0bf810f0c5311636f830b6e4049b706cb82c747fd2577c8df2578ef515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Timesheet:addtsgroup.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4be9285e5aa93d17c02042e989bd037d93ae71e955c3f219a71f2132c45d6821 = $this->env->getExtension("native_profiler");
        $__internal_4be9285e5aa93d17c02042e989bd037d93ae71e955c3f219a71f2132c45d6821->enter($__internal_4be9285e5aa93d17c02042e989bd037d93ae71e955c3f219a71f2132c45d6821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Timesheet:addtsgroup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be9285e5aa93d17c02042e989bd037d93ae71e955c3f219a71f2132c45d6821->leave($__internal_4be9285e5aa93d17c02042e989bd037d93ae71e955c3f219a71f2132c45d6821_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6f4c1c579ef580dfdca6a20ee7caff58639f39881e7a41bcc9f836c49593249 = $this->env->getExtension("native_profiler");
        $__internal_b6f4c1c579ef580dfdca6a20ee7caff58639f39881e7a41bcc9f836c49593249->enter($__internal_b6f4c1c579ef580dfdca6a20ee7caff58639f39881e7a41bcc9f836c49593249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b6f4c1c579ef580dfdca6a20ee7caff58639f39881e7a41bcc9f836c49593249->leave($__internal_b6f4c1c579ef580dfdca6a20ee7caff58639f39881e7a41bcc9f836c49593249_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a2d45d2569264e360aee7f58558c7b9d83c8415b68f24326ca621e34e163c347 = $this->env->getExtension("native_profiler");
        $__internal_a2d45d2569264e360aee7f58558c7b9d83c8415b68f24326ca621e34e163c347->enter($__internal_a2d45d2569264e360aee7f58558c7b9d83c8415b68f24326ca621e34e163c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Timesheet:addtsgroup.html.twig", 3)->display($context);
        
        $__internal_a2d45d2569264e360aee7f58558c7b9d83c8415b68f24326ca621e34e163c347->leave($__internal_a2d45d2569264e360aee7f58558c7b9d83c8415b68f24326ca621e34e163c347_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a1ee773b8f3d12fb1b8a16cdf5f3fc38641c6df929fb1262250bf177203c289a = $this->env->getExtension("native_profiler");
        $__internal_a1ee773b8f3d12fb1b8a16cdf5f3fc38641c6df929fb1262250bf177203c289a->enter($__internal_a1ee773b8f3d12fb1b8a16cdf5f3fc38641c6df929fb1262250bf177203c289a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:User:rightshow.html.twig", "BoHomeBundle:Timesheet:addtsgroup.html.twig", 4)->display($context);
        }
        
        $__internal_a1ee773b8f3d12fb1b8a16cdf5f3fc38641c6df929fb1262250bf177203c289a->leave($__internal_a1ee773b8f3d12fb1b8a16cdf5f3fc38641c6df929fb1262250bf177203c289a_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_4e755ee21613d372cebfe243c3851474a3ecc167cf3506bc79fb307ff3f33fa7 = $this->env->getExtension("native_profiler");
        $__internal_4e755ee21613d372cebfe243c3851474a3ecc167cf3506bc79fb307ff3f33fa7->enter($__internal_4e755ee21613d372cebfe243c3851474a3ecc167cf3506bc79fb307ff3f33fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_4e755ee21613d372cebfe243c3851474a3ecc167cf3506bc79fb307ff3f33fa7->leave($__internal_4e755ee21613d372cebfe243c3851474a3ecc167cf3506bc79fb307ff3f33fa7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc415abc9c8cc42d7c25f42df7a74a21340805d067d8188e80e40bb827b0a0f = $this->env->getExtension("native_profiler");
        $__internal_6cc415abc9c8cc42d7c25f42df7a74a21340805d067d8188e80e40bb827b0a0f->enter($__internal_6cc415abc9c8cc42d7c25f42df7a74a21340805d067d8188e80e40bb827b0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_group", array("idgroup" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t";
        // line 10
        $this->loadTemplate("BoHomeBundle:Timesheet:addactions.html.twig", "BoHomeBundle:Timesheet:addtsgroup.html.twig", 10)->display($context);
        // line 11
        echo "\t\t\t<div class=\"search_content\"></div>
\t\t\t<div class=\"show_content\">
\t\t\t\t";
        // line 13
        $this->loadTemplate("BoHomeBundle:Timesheet:addform.html.twig", "BoHomeBundle:Timesheet:addtsgroup.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t</div>
\t\t\t<input id=\"idsgroup\" type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["idgroup"]) ? $context["idgroup"] : $this->getContext($context, "idgroup")), "html", null, true);
        echo "\" />
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t</form>\t
\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6cc415abc9c8cc42d7c25f42df7a74a21340805d067d8188e80e40bb827b0a0f->leave($__internal_6cc415abc9c8cc42d7c25f42df7a74a21340805d067d8188e80e40bb827b0a0f_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d29542fc6ca067dcb06af9859b94d76514b6bc199ff31e3e9c0036bd5e3a5fa1 = $this->env->getExtension("native_profiler");
        $__internal_d29542fc6ca067dcb06af9859b94d76514b6bc199ff31e3e9c0036bd5e3a5fa1->enter($__internal_d29542fc6ca067dcb06af9859b94d76514b6bc199ff31e3e9c0036bd5e3a5fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("home_timesheet_contractsearch");
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
        // line 107
        echo $this->env->getExtension('routing')->getPath("home_timesheet_reloaddata");
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
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d29542fc6ca067dcb06af9859b94d76514b6bc199ff31e3e9c0036bd5e3a5fa1->leave($__internal_d29542fc6ca067dcb06af9859b94d76514b6bc199ff31e3e9c0036bd5e3a5fa1_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Timesheet:addtsgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 117,  243 => 107,  227 => 94,  220 => 90,  148 => 20,  136 => 19,  130 => 16,  126 => 15,  123 => 14,  121 => 13,  117 => 11,  115 => 10,  111 => 9,  107 => 8,  104 => 7,  98 => 6,  82 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}	{%if employee!=null%}{%include "BoAdminBundle:User:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.timesheet'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<form action="{{ path('home_timesheet_group', { 'idgroup': group.id }) }}" method="post" class="style">*/
/* 			{{ form_errors(form) }}*/
/* 			{%include "BoHomeBundle:Timesheet:addactions.html.twig"%}*/
/* 			<div class="search_content"></div>*/
/* 			<div class="show_content">*/
/* 				{%include "BoHomeBundle:Timesheet:addform.html.twig"%}*/
/* 			</div>*/
/* 			<input id="idsgroup" type="hidden" value="{{idgroup}}" />*/
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
/* 					url: "{{ path('home_timesheet_contractsearch')}}",*/
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
/* 					url: "{{ path('home_timesheet_reloaddata')}}",*/
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
