<?php

/* students/dayabsence.html.twig */
class __TwigTemplate_b2b918ddf946c8b2a98d5959695724e8bd72c73370858783e99a31414561a9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "students/dayabsence.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c884372d1a654956c8488580223ffcbc215cb338af27798b18bf404c24e5d8a = $this->env->getExtension("native_profiler");
        $__internal_5c884372d1a654956c8488580223ffcbc215cb338af27798b18bf404c24e5d8a->enter($__internal_5c884372d1a654956c8488580223ffcbc215cb338af27798b18bf404c24e5d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/dayabsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c884372d1a654956c8488580223ffcbc215cb338af27798b18bf404c24e5d8a->leave($__internal_5c884372d1a654956c8488580223ffcbc215cb338af27798b18bf404c24e5d8a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_547a4163a50c0e1329e4e2739c13c1206b84970cdb4ed3490b43c4e9f148954f = $this->env->getExtension("native_profiler");
        $__internal_547a4163a50c0e1329e4e2739c13c1206b84970cdb4ed3490b43c4e9f148954f->enter($__internal_547a4163a50c0e1329e4e2739c13c1206b84970cdb4ed3490b43c4e9f148954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_547a4163a50c0e1329e4e2739c13c1206b84970cdb4ed3490b43c4e9f148954f->leave($__internal_547a4163a50c0e1329e4e2739c13c1206b84970cdb4ed3490b43c4e9f148954f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_db42d288a60c87937142baaa2c9cc6799ec32114adb9eca365efd66821cd7b75 = $this->env->getExtension("native_profiler");
        $__internal_db42d288a60c87937142baaa2c9cc6799ec32114adb9eca365efd66821cd7b75->enter($__internal_db42d288a60c87937142baaa2c9cc6799ec32114adb9eca365efd66821cd7b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/dayabsence.html.twig", 3)->display($context);
        
        $__internal_db42d288a60c87937142baaa2c9cc6799ec32114adb9eca365efd66821cd7b75->leave($__internal_db42d288a60c87937142baaa2c9cc6799ec32114adb9eca365efd66821cd7b75_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_4953832135183b76a6db660b102246cff9d44ff803628ba9c2e8dc5b91abd76f = $this->env->getExtension("native_profiler");
        $__internal_4953832135183b76a6db660b102246cff9d44ff803628ba9c2e8dc5b91abd76f->enter($__internal_4953832135183b76a6db660b102246cff9d44ff803628ba9c2e8dc5b91abd76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        if (array_key_exists("now", $context)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</h1>";
        
        $__internal_4953832135183b76a6db660b102246cff9d44ff803628ba9c2e8dc5b91abd76f->leave($__internal_4953832135183b76a6db660b102246cff9d44ff803628ba9c2e8dc5b91abd76f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a788ef19621463b13f2fc6ff4bbd57bae361d3a24d0a9ebe191eb4c2db3128a = $this->env->getExtension("native_profiler");
        $__internal_9a788ef19621463b13f2fc6ff4bbd57bae361d3a24d0a9ebe191eb4c2db3128a->enter($__internal_9a788ef19621463b13f2fc6ff4bbd57bae361d3a24d0a9ebe191eb4c2db3128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Students:absenceactions.html.twig", "students/dayabsence.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Students:listabsences.html.twig", "students/dayabsence.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_absence\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<h5 id=\"error-message\" color=\"#FF3366\" align=\"center\"></h5>
\t\t\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("students_add_absence");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 29
        $this->loadTemplate("BoAdminBundle:Students:absenceform2.html.twig", "students/dayabsence.html.twig", 29)->display($context);
        // line 30
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" id=\"btn_create_absence\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_9a788ef19621463b13f2fc6ff4bbd57bae361d3a24d0a9ebe191eb4c2db3128a->leave($__internal_9a788ef19621463b13f2fc6ff4bbd57bae361d3a24d0a9ebe191eb4c2db3128a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5677bc219789f428e50fa016cac701341e9703b32b66b6477f629a2c16f50d50 = $this->env->getExtension("native_profiler");
        $__internal_5677bc219789f428e50fa016cac701341e9703b32b66b6477f629a2c16f50d50->enter($__internal_5677bc219789f428e50fa016cac701341e9703b32b66b6477f629a2c16f50d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "\t\t<script>
\t\t\t\$(\"#btn_create_absence\").click(function(){
\t\t\t\tvar str=\$(\".student option:selected\");
\t\t\t\tstudent=str.text();
\t\t\t\tvar numberday= \$(\".numberday\").val();
\t\t\t\tif(student==null || student==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must select a student\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(numberday==null || numberday==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must enter a number of day\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("students_absence_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("students_absence_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".amorpm\").change(function(){
\t\t\t\tvar str=\$(\".amorpm input:checked\");
\t\t\t\tvar amorpm = str.val();
\t\t\t\tif(amorpm==\"ALL\"){
\t\t\t\t\t\$(\".am-data\").hide();
\t\t\t\t\t\$(\".pm-data\").hide();
\t\t\t\t}
\t\t\t\tif(amorpm==\"AM\"){
\t\t\t\t\t\$(\".am-data\").show();
\t\t\t\t\t\$(\".pm-data\").hide();
\t\t\t\t}
\t\t\t\tif(amorpm==\"PM\"){
\t\t\t\t\t\$(\".am-data\").hide();
\t\t\t\t\t\$(\".pm-data\").show();
\t\t\t\t}
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5677bc219789f428e50fa016cac701341e9703b32b66b6477f629a2c16f50d50->leave($__internal_5677bc219789f428e50fa016cac701341e9703b32b66b6477f629a2c16f50d50_prof);

    }

    public function getTemplateName()
    {
        return "students/dayabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 114,  251 => 113,  247 => 112,  217 => 85,  206 => 79,  188 => 64,  165 => 43,  153 => 42,  141 => 33,  134 => 30,  132 => 29,  128 => 28,  123 => 26,  117 => 23,  103 => 11,  101 => 10,  98 => 9,  96 => 8,  92 => 6,  86 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.absence'|trans([],'BoAdminBundle')}} >> {%if now is defined%}{{now|date("Y-m-d")}}{%else%}{{'title.list'|trans([],'BoAdminBundle')}}{%endif%}</h1>{% endblock %}*/
/* {% block body %}*/
/* */
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:absenceactions.html.twig"%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Students:listabsences.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_absence" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.addabsence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<h5 id="error-message" color="#FF3366" align="center"></h5>*/
/* 			<form action="{{ path('students_add_absence') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Students:absenceform2.html.twig"%}*/
/* 					{{ form_rest(absence_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn_create_absence">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_create_absence").click(function(){*/
/* 				var str=$(".student option:selected");*/
/* 				student=str.text();*/
/* 				var numberday= $(".numberday").val();*/
/* 				if(student==null || student==""){*/
/* 					$('#error-message').html("You must select a student");*/
/* 					return false;*/
/* 				}*/
/* 				if(numberday==null || numberday==""){*/
/* 					$('#error-message').html("You must enter a number of day");*/
/* 					return false;*/
/* 				}				*/
/* 				return true;*/
/* 			});*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_absence_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();		*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_absence_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$(".amorpm").change(function(){*/
/* 				var str=$(".amorpm input:checked");*/
/* 				var amorpm = str.val();*/
/* 				if(amorpm=="ALL"){*/
/* 					$(".am-data").hide();*/
/* 					$(".pm-data").hide();*/
/* 				}*/
/* 				if(amorpm=="AM"){*/
/* 					$(".am-data").show();*/
/* 					$(".pm-data").hide();*/
/* 				}*/
/* 				if(amorpm=="PM"){*/
/* 					$(".am-data").hide();*/
/* 					$(".pm-data").show();*/
/* 				}*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
