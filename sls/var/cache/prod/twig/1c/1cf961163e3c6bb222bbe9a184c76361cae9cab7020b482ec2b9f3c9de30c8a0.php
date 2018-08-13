<?php

/* employee/schedule.html.twig */
class __TwigTemplate_523f1d260eb6b2081e7978c317112e23a90182bd576e560fbf7231c8121b3db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/schedule.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_47c950fbf24ca10d82c8cc14f01a104e6fd40a784971fe4e10e6c607c1245fb0 = $this->env->getExtension("native_profiler");
        $__internal_47c950fbf24ca10d82c8cc14f01a104e6fd40a784971fe4e10e6c607c1245fb0->enter($__internal_47c950fbf24ca10d82c8cc14f01a104e6fd40a784971fe4e10e6c607c1245fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47c950fbf24ca10d82c8cc14f01a104e6fd40a784971fe4e10e6c607c1245fb0->leave($__internal_47c950fbf24ca10d82c8cc14f01a104e6fd40a784971fe4e10e6c607c1245fb0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_34c5ef80867c851ab6394b3d619c87180d72f0c3eb792efed60d3d403adebd07 = $this->env->getExtension("native_profiler");
        $__internal_34c5ef80867c851ab6394b3d619c87180d72f0c3eb792efed60d3d403adebd07->enter($__internal_34c5ef80867c851ab6394b3d619c87180d72f0c3eb792efed60d3d403adebd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_34c5ef80867c851ab6394b3d619c87180d72f0c3eb792efed60d3d403adebd07->leave($__internal_34c5ef80867c851ab6394b3d619c87180d72f0c3eb792efed60d3d403adebd07_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_decaa5add2013e6148e3e87f634903c9dac8b52b6a6803219892e7995302c055 = $this->env->getExtension("native_profiler");
        $__internal_decaa5add2013e6148e3e87f634903c9dac8b52b6a6803219892e7995302c055->enter($__internal_decaa5add2013e6148e3e87f634903c9dac8b52b6a6803219892e7995302c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_decaa5add2013e6148e3e87f634903c9dac8b52b6a6803219892e7995302c055->leave($__internal_decaa5add2013e6148e3e87f634903c9dac8b52b6a6803219892e7995302c055_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5ef6830a8d29047378b2d13a19b6dbcaced0d28282d7fbc2b94e2c7527a3d962 = $this->env->getExtension("native_profiler");
        $__internal_5ef6830a8d29047378b2d13a19b6dbcaced0d28282d7fbc2b94e2c7527a3d962->enter($__internal_5ef6830a8d29047378b2d13a19b6dbcaced0d28282d7fbc2b94e2c7527a3d962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/schedule.html.twig", 4)->display($context);
        
        $__internal_5ef6830a8d29047378b2d13a19b6dbcaced0d28282d7fbc2b94e2c7527a3d962->leave($__internal_5ef6830a8d29047378b2d13a19b6dbcaced0d28282d7fbc2b94e2c7527a3d962_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_37979a2ea7439ec3b13e404eb492f6a15a0036c4992f63f15c756c0cdb40cf51 = $this->env->getExtension("native_profiler");
        $__internal_37979a2ea7439ec3b13e404eb492f6a15a0036c4992f63f15c756c0cdb40cf51->enter($__internal_37979a2ea7439ec3b13e404eb492f6a15a0036c4992f63f15c756c0cdb40cf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "employee/schedule.html.twig", 6)->display($context);
        
        $__internal_37979a2ea7439ec3b13e404eb492f6a15a0036c4992f63f15c756c0cdb40cf51->leave($__internal_37979a2ea7439ec3b13e404eb492f6a15a0036c4992f63f15c756c0cdb40cf51_prof);

    }

    // line 8
    public function block_label($context, array $blocks = array())
    {
        $__internal_c8d61382ce34ba38a837b61011874e6c9f471a1955921ed398094af9f6dbccee = $this->env->getExtension("native_profiler");
        $__internal_c8d61382ce34ba38a837b61011874e6c9f471a1955921ed398094af9f6dbccee->enter($__internal_c8d61382ce34ba38a837b61011874e6c9f471a1955921ed398094af9f6dbccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c8d61382ce34ba38a837b61011874e6c9f471a1955921ed398094af9f6dbccee->leave($__internal_c8d61382ce34ba38a837b61011874e6c9f471a1955921ed398094af9f6dbccee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_25429ed3edcddbaa9900ee02d4f66e18659d69ceb20444d48e2c45bbda8c5f4b = $this->env->getExtension("native_profiler");
        $__internal_25429ed3edcddbaa9900ee02d4f66e18659d69ceb20444d48e2c45bbda8c5f4b->enter($__internal_25429ed3edcddbaa9900ee02d4f66e18659d69ceb20444d48e2c45bbda8c5f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Employee:scheduleactions.html.twig", "employee/schedule.html.twig", 11)->display($context);
        // line 12
        echo "
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Employee:schedules.html.twig", "employee/schedule.html.twig", 13)->display($context);
        // line 14
        echo "
\t\t<div id=\"data_error\"></div>\t\t\t
\t</div>

\t";
        // line 18
        if (((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")) != null)) {
            // line 19
            echo "\t\t<!-- begin admin schedule creation form by modal dialog-->
\t\t<div class=\"container\">
\t\t  <!-- Modal -->
\t\t  <div class=\"modal fade\" id=\"add_schedule\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t  <h4 class=\"modal-title\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"error_message\" align=\"center\"></div>
\t\t\t\t\t<form action=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_add_schedule", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
            echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 34
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), 'errors');
            echo "
\t\t\t\t\t\t\t\t";
            // line 35
            $this->loadTemplate("BoAdminBundle:Agenda:adchform.html.twig", "employee/schedule.html.twig", 35)->display($context);
            // line 36
            echo "\t\t\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["asc_form"]) ? $context["asc_form"] : $this->getContext($context, "asc_form")), 'rest');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "\" id=\"btn_add_schedule\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t\t  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t\t<!-- end admin schedule form by modal dialog-->
\t";
        }
        // line 49
        echo "
\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_25429ed3edcddbaa9900ee02d4f66e18659d69ceb20444d48e2c45bbda8c5f4b->leave($__internal_25429ed3edcddbaa9900ee02d4f66e18659d69ceb20444d48e2c45bbda8c5f4b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0282081eb25cae14c410da2590cdacf9f3105197b92f58c99d514a69336bb7a9 = $this->env->getExtension("native_profiler");
        $__internal_0282081eb25cae14c410da2590cdacf9f3105197b92f58c99d514a69336bb7a9->enter($__internal_0282081eb25cae14c410da2590cdacf9f3105197b92f58c99d514a69336bb7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script>\t
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#nstartdate\").val();
\t\t\t\tvar enddate=\$(\"#nenddate\").val();
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_current\").click(function(){
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=0;
\t\t\t\tvar enddate=0;
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#pstartdate\").val();
\t\t\t\tvar enddate=\$(\"#penddate\").val();
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_add_schedule\").click(function(){
\t\t\t\tvar startam = getRealTime(\$(\".startam\").val());
\t\t\t\tvar endam = getRealTime(\$(\".endam\").val());
\t\t\t\tvar startpm = getRealTime(\$(\".startpm\").val());
\t\t\t\tvar endpm = getRealTime(\$(\".endpm\").val());
\t\t\t\tvar tot = (endam - startam)  + (endpm - startpm);
\t\t\t\tif(startam==0 && endam==0 && startpm==0 && endpm==0){
\t\t\t\t\t\$('#error_message').html(\"You have to enter the schedule\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(\$(\".asc_start\").val()>\$(\".asc_end\").val()){
\t\t\t\t\t\$('#error_message').html(\"Schedule startdate can not be equal to or greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(\$(\".hourperday\").val()==\"\"){
\t\t\t\t\t\$('#error_message').html(\"You have to fill the Hour/day field\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(tot != \$(\".hourperday\").val()){
\t\t\t\t\t\$('#error_message').html(\"The Hour/day entered is not correct\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\treturn true;\t\t\t
\t\t\t});\t
\t\t\tfunction loaddata(DATA){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("employee_schedule_load");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#load_data').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#data_error').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t\tfunction getRealTime(time){
\t\t\t\tvar at = time.split(\":\");
\t\t\t\tvar h=parseInt(at[0]);
\t\t\t\tvar m=parseInt(at[1]);
\t\t\t\tif(m==0) return h; 
\t\t\t\tvar d=m/60;
\t\t\t\tvar nt = h + d;
\t\t\t\treturn  parseFloat(nt);
\t\t\t} 
\t\t</script>\t\t
\t\t<script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_0282081eb25cae14c410da2590cdacf9f3105197b92f58c99d514a69336bb7a9->leave($__internal_0282081eb25cae14c410da2590cdacf9f3105197b92f58c99d514a69336bb7a9_prof);

    }

    public function getTemplateName()
    {
        return "employee/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 129,  296 => 128,  271 => 106,  234 => 74,  220 => 65,  206 => 56,  199 => 51,  187 => 50,  184 => 49,  171 => 39,  164 => 36,  162 => 35,  158 => 34,  153 => 32,  147 => 29,  135 => 19,  133 => 18,  127 => 14,  125 => 13,  122 => 12,  120 => 11,  117 => 10,  111 => 9,  95 => 8,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Employee:scheduleactions.html.twig"%}*/
/* */
/* 		{%include "BoAdminBundle:Employee:schedules.html.twig"%}*/
/* */
/* 		<div id="data_error"></div>			*/
/* 	</div>*/
/* */
/* 	{%if asc_form!=null%}*/
/* 		<!-- begin admin schedule creation form by modal dialog-->*/
/* 		<div class="container">*/
/* 		  <!-- Modal -->*/
/* 		  <div class="modal fade" id="add_schedule" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 					  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 					  <h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<div id="error_message" align="center"></div>*/
/* 					<form action="{{ path('employee_add_schedule',{'id':employee.id}) }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(asc_form) }}*/
/* 								{%include "BoAdminBundle:Agenda:adchform.html.twig"%}*/
/* 							{{ form_rest(asc_form) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn_add_schedule">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 			  */
/* 			</div>*/
/* 		  </div>*/
/* 		</div>*/
/* 		<!-- end admin schedule form by modal dialog-->*/
/* 	{%endif%}*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$("#btn_next").click(function(){*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#nstartdate").val();*/
/* 				var enddate=$("#nenddate").val();*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_current").click(function(){*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=0;*/
/* 				var enddate=0;*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_previous").click(function(){*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#pstartdate").val();*/
/* 				var enddate=$("#penddate").val();*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_add_schedule").click(function(){*/
/* 				var startam = getRealTime($(".startam").val());*/
/* 				var endam = getRealTime($(".endam").val());*/
/* 				var startpm = getRealTime($(".startpm").val());*/
/* 				var endpm = getRealTime($(".endpm").val());*/
/* 				var tot = (endam - startam)  + (endpm - startpm);*/
/* 				if(startam==0 && endam==0 && startpm==0 && endpm==0){*/
/* 					$('#error_message').html("You have to enter the schedule");*/
/* 					return false;*/
/* 				}*/
/* 				if($(".asc_start").val()>$(".asc_end").val()){*/
/* 					$('#error_message').html("Schedule startdate can not be equal to or greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				if($(".hourperday").val()==""){*/
/* 					$('#error_message').html("You have to fill the Hour/day field");*/
/* 					return false;*/
/* 				}*/
/* 				if(tot != $(".hourperday").val()){*/
/* 					$('#error_message').html("The Hour/day entered is not correct");*/
/* 					return false;*/
/* 				}				*/
/* 				return true;			*/
/* 			});	*/
/* 			function loaddata(DATA){*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_schedule_load')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#load_data').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#data_error').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 			function getRealTime(time){*/
/* 				var at = time.split(":");*/
/* 				var h=parseInt(at[0]);*/
/* 				var m=parseInt(at[1]);*/
/* 				if(m==0) return h; */
/* 				var d=m/60;*/
/* 				var nt = h + d;*/
/* 				return  parseFloat(nt);*/
/* 			} */
/* 		</script>		*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
