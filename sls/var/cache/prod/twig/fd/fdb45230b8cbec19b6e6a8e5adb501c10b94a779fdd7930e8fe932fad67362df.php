<?php

/* absences/employeeday.html.twig */
class __TwigTemplate_1a5dca387733f9b6c55c6e89ee356cae2285271e7db6bcc274d409b19a6f8ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "absences/employeeday.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68e91663f7261ca491dde964e6aedfb817e211092c2d2bd5161932497159420d = $this->env->getExtension("native_profiler");
        $__internal_68e91663f7261ca491dde964e6aedfb817e211092c2d2bd5161932497159420d->enter($__internal_68e91663f7261ca491dde964e6aedfb817e211092c2d2bd5161932497159420d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absences/employeeday.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68e91663f7261ca491dde964e6aedfb817e211092c2d2bd5161932497159420d->leave($__internal_68e91663f7261ca491dde964e6aedfb817e211092c2d2bd5161932497159420d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d9a9abbe2468505d2ef35eb6f5295152ff32be0bfb4237344fc7d114a8562fc = $this->env->getExtension("native_profiler");
        $__internal_9d9a9abbe2468505d2ef35eb6f5295152ff32be0bfb4237344fc7d114a8562fc->enter($__internal_9d9a9abbe2468505d2ef35eb6f5295152ff32be0bfb4237344fc7d114a8562fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9d9a9abbe2468505d2ef35eb6f5295152ff32be0bfb4237344fc7d114a8562fc->leave($__internal_9d9a9abbe2468505d2ef35eb6f5295152ff32be0bfb4237344fc7d114a8562fc_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_38141c050cb9b49c20c926d8d97df268b5ea9996466446dc670c62f8216e3d36 = $this->env->getExtension("native_profiler");
        $__internal_38141c050cb9b49c20c926d8d97df268b5ea9996466446dc670c62f8216e3d36->enter($__internal_38141c050cb9b49c20c926d8d97df268b5ea9996466446dc670c62f8216e3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "absences/employeeday.html.twig", 3)->display($context);
        
        $__internal_38141c050cb9b49c20c926d8d97df268b5ea9996466446dc670c62f8216e3d36->leave($__internal_38141c050cb9b49c20c926d8d97df268b5ea9996466446dc670c62f8216e3d36_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_b9d54f1b3c8ed146f4f53ff0780329e4096cb763fba227b2e410894b96ea8a38 = $this->env->getExtension("native_profiler");
        $__internal_b9d54f1b3c8ed146f4f53ff0780329e4096cb763fba227b2e410894b96ea8a38->enter($__internal_b9d54f1b3c8ed146f4f53ff0780329e4096cb763fba227b2e410894b96ea8a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absences", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        if (array_key_exists("now", $context)) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")), "Y-m-d"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</h1>";
        
        $__internal_b9d54f1b3c8ed146f4f53ff0780329e4096cb763fba227b2e410894b96ea8a38->leave($__internal_b9d54f1b3c8ed146f4f53ff0780329e4096cb763fba227b2e410894b96ea8a38_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34f239adca14498d3688084377d2212ec9a96625a20500c2ca92272b0b567e65 = $this->env->getExtension("native_profiler");
        $__internal_34f239adca14498d3688084377d2212ec9a96625a20500c2ca92272b0b567e65->enter($__internal_34f239adca14498d3688084377d2212ec9a96625a20500c2ca92272b0b567e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Absences:employeeactions.html.twig", "absences/employeeday.html.twig", 7)->display($context);
        // line 8
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 9
        $this->loadTemplate("BoAdminBundle:Absences:absemployee.html.twig", "absences/employeeday.html.twig", 9)->display($context);
        // line 10
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
\t\t\t  \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  \t<h4 class=\"modal-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<h5 id=\"error-message\" color=\"#FF3366\" align=\"center\"></h5>
\t\t\t<form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("absences_new_employee");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Absences:modalform.html.twig", "absences/employeeday.html.twig", 28)->display($context);
        // line 29
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 32
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
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_34f239adca14498d3688084377d2212ec9a96625a20500c2ca92272b0b567e65->leave($__internal_34f239adca14498d3688084377d2212ec9a96625a20500c2ca92272b0b567e65_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f8b26f9e578ecef903ae7f3dc4b9681f341c3422180cd3ee93f5dcc98e4e9327 = $this->env->getExtension("native_profiler");
        $__internal_f8b26f9e578ecef903ae7f3dc4b9681f341c3422180cd3ee93f5dcc98e4e9327->enter($__internal_f8b26f9e578ecef903ae7f3dc4b9681f341c3422180cd3ee93f5dcc98e4e9327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".abstart\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});\t
\t\t\t\$(\".abend\").change(function(){
\t\t\t\tstartdate = new Date(\$(\".abstart\").val());
\t\t\t\tenddate = new Date(\$(\".abend\").val());
\t\t\t\tdiff = enddate - startdate;
\t\t\t\tnumerday = diff/(24*60*60*1000); 
\t\t\t\tif(numerday<0){
\t\t\t\t\talert(\"Absence start date can not be greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}else{
\t\t\t\t\tnumerday++;
\t\t\t\t\t\$(\".numberday\").val(numerday)
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#btn_create_absence\").click(function(){
\t\t\t\tvar str=\$(\".employee option:selected\");
\t\t\t\temployee=str.text();
\t\t\t\tvar numberday= \$(\".numberday\").val();
\t\t\t\tif(employee==null || employee==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must select a employee\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(numberday==null || numberday==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must enter a number of day\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("absences_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f8b26f9e578ecef903ae7f3dc4b9681f341c3422180cd3ee93f5dcc98e4e9327->leave($__internal_f8b26f9e578ecef903ae7f3dc4b9681f341c3422180cd3ee93f5dcc98e4e9327_prof);

    }

    public function getTemplateName()
    {
        return "absences/employeeday.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 121,  255 => 120,  251 => 119,  238 => 109,  226 => 102,  164 => 42,  152 => 41,  140 => 32,  133 => 29,  131 => 28,  127 => 27,  122 => 25,  116 => 22,  102 => 10,  100 => 9,  97 => 8,  95 => 7,  92 => 6,  86 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.absences'|trans([],'BoAdminBundle')}} >> {%if now is defined%}{{now|date("Y-m-d")}}{%else%}{{'title.list'|trans([],'BoAdminBundle')}}{%endif%}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Absences:employeeactions.html.twig"%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Absences:absemployee.html.twig"%}*/
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
/* 			  	<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  	<h4 class="modal-title">{{'label.addabsence'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<h5 id="error-message" color="#FF3366" align="center"></h5>*/
/* 			<form action="{{ path('absences_new_employee') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(absence_form) }}*/
/* 						{%include "BoAdminBundle:Absences:modalform.html.twig"%}*/
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
/* 			$("#btn-create").click(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".abstart").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});	*/
/* 			$(".abend").change(function(){*/
/* 				startdate = new Date($(".abstart").val());*/
/* 				enddate = new Date($(".abend").val());*/
/* 				diff = enddate - startdate;*/
/* 				numerday = diff/(24*60*60*1000); */
/* 				if(numerday<0){*/
/* 					alert("Absence start date can not be greater than the end date!");*/
/* 					return false;*/
/* 				}else{*/
/* 					numerday++;*/
/* 					$(".numberday").val(numerday)*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#btn_create_absence").click(function(){*/
/* 				var str=$(".employee option:selected");*/
/* 				employee=str.text();*/
/* 				var numberday= $(".numberday").val();*/
/* 				if(employee==null || employee==""){*/
/* 					$('#error-message').html("You must select a employee");*/
/* 					return false;*/
/* 				}*/
/* 				if(numberday==null || numberday==""){*/
/* 					$('#error-message').html("You must enter a number of day");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#btn-search").click(function(){*/
/* 				if($("#inp-search").val()==""){*/
/* 					alert("Search fields is empty!");*/
/* 					return false;*/
/* 				}*/
/* 				var criteria = $("#inp-search").val();				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('absences_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
