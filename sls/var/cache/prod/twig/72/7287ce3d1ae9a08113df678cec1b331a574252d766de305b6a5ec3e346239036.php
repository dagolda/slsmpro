<?php

/* students/schedule.html.twig */
class __TwigTemplate_df618c7800b9a270ebd34e3e454083321a2e5943cf331119c5262ecce6e38d64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "students/schedule.html.twig", 1);
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
        $__internal_c41e266d4a6185d63e00cd66148dc5159d0c825f3b8ef1b84ffe3cfbd7f59fe5 = $this->env->getExtension("native_profiler");
        $__internal_c41e266d4a6185d63e00cd66148dc5159d0c825f3b8ef1b84ffe3cfbd7f59fe5->enter($__internal_c41e266d4a6185d63e00cd66148dc5159d0c825f3b8ef1b84ffe3cfbd7f59fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/schedule.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41e266d4a6185d63e00cd66148dc5159d0c825f3b8ef1b84ffe3cfbd7f59fe5->leave($__internal_c41e266d4a6185d63e00cd66148dc5159d0c825f3b8ef1b84ffe3cfbd7f59fe5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9c85a9bc3fff0a88e3a8ed914512c009ecc631972a5bf87b5648f0fd4010fda = $this->env->getExtension("native_profiler");
        $__internal_c9c85a9bc3fff0a88e3a8ed914512c009ecc631972a5bf87b5648f0fd4010fda->enter($__internal_c9c85a9bc3fff0a88e3a8ed914512c009ecc631972a5bf87b5648f0fd4010fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c9c85a9bc3fff0a88e3a8ed914512c009ecc631972a5bf87b5648f0fd4010fda->leave($__internal_c9c85a9bc3fff0a88e3a8ed914512c009ecc631972a5bf87b5648f0fd4010fda_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_979bf0511a3be359b314baee20e03d1e10e877b5fc871920e6a1944fd5e3c5d0 = $this->env->getExtension("native_profiler");
        $__internal_979bf0511a3be359b314baee20e03d1e10e877b5fc871920e6a1944fd5e3c5d0->enter($__internal_979bf0511a3be359b314baee20e03d1e10e877b5fc871920e6a1944fd5e3c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_979bf0511a3be359b314baee20e03d1e10e877b5fc871920e6a1944fd5e3c5d0->leave($__internal_979bf0511a3be359b314baee20e03d1e10e877b5fc871920e6a1944fd5e3c5d0_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_885bde46fc215c7ae3e71d0e3915eec30127ea61b1d50bed6365fe5fbe22ae37 = $this->env->getExtension("native_profiler");
        $__internal_885bde46fc215c7ae3e71d0e3915eec30127ea61b1d50bed6365fe5fbe22ae37->enter($__internal_885bde46fc215c7ae3e71d0e3915eec30127ea61b1d50bed6365fe5fbe22ae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/schedule.html.twig", 4)->display($context);
        
        $__internal_885bde46fc215c7ae3e71d0e3915eec30127ea61b1d50bed6365fe5fbe22ae37->leave($__internal_885bde46fc215c7ae3e71d0e3915eec30127ea61b1d50bed6365fe5fbe22ae37_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_9cb8e8c2138026be9234d2148662ac282bc515c28cd3dd6b41bf7f8bad74447b = $this->env->getExtension("native_profiler");
        $__internal_9cb8e8c2138026be9234d2148662ac282bc515c28cd3dd6b41bf7f8bad74447b->enter($__internal_9cb8e8c2138026be9234d2148662ac282bc515c28cd3dd6b41bf7f8bad74447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "students/schedule.html.twig", 6)->display($context);
        
        $__internal_9cb8e8c2138026be9234d2148662ac282bc515c28cd3dd6b41bf7f8bad74447b->leave($__internal_9cb8e8c2138026be9234d2148662ac282bc515c28cd3dd6b41bf7f8bad74447b_prof);

    }

    // line 8
    public function block_label($context, array $blocks = array())
    {
        $__internal_a3a8d571c10baf060aeb563cb9b4454a42414d797f71a9af005c0b2a119781c5 = $this->env->getExtension("native_profiler");
        $__internal_a3a8d571c10baf060aeb563cb9b4454a42414d797f71a9af005c0b2a119781c5->enter($__internal_a3a8d571c10baf060aeb563cb9b4454a42414d797f71a9af005c0b2a119781c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a3a8d571c10baf060aeb563cb9b4454a42414d797f71a9af005c0b2a119781c5->leave($__internal_a3a8d571c10baf060aeb563cb9b4454a42414d797f71a9af005c0b2a119781c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6582c1431095e697b94d784d2c99f41d1576b9b6f07541e0a2bcb604a0460c40 = $this->env->getExtension("native_profiler");
        $__internal_6582c1431095e697b94d784d2c99f41d1576b9b6f07541e0a2bcb604a0460c40->enter($__internal_6582c1431095e697b94d784d2c99f41d1576b9b6f07541e0a2bcb604a0460c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Students:scheduleactions.html.twig", "students/schedule.html.twig", 11)->display($context);
        // line 12
        echo "
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Students:schedules.html.twig", "students/schedule.html.twig", 13)->display($context);
        // line 14
        echo "\t\t<div id=\"data_error\"></div>\t\t\t
\t</div>

\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6582c1431095e697b94d784d2c99f41d1576b9b6f07541e0a2bcb604a0460c40->leave($__internal_6582c1431095e697b94d784d2c99f41d1576b9b6f07541e0a2bcb604a0460c40_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1752b99ba337e5283fbc0b9e14c2ea173ca8be5085563d64dd77fb375a72093 = $this->env->getExtension("native_profiler");
        $__internal_d1752b99ba337e5283fbc0b9e14c2ea173ca8be5085563d64dd77fb375a72093->enter($__internal_d1752b99ba337e5283fbc0b9e14c2ea173ca8be5085563d64dd77fb375a72093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>\t
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\tvar idstudent=\$(\"#idstudent\").val();
\t\t\t\tvar startdate=\$(\"#nstartdate\").val();
\t\t\t\tvar enddate=\$(\"#nenddate\").val();
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idstudent+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_current\").click(function(){
\t\t\t\tvar idstudent=\$(\"#idstudent\").val();
\t\t\t\tvar startdate=0;
\t\t\t\tvar enddate=0;
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idstudent+\"#\"+startdate+\"#\"+enddate;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar idstudent=\$(\"#idstudent\").val();
\t\t\t\tvar startdate=\$(\"#pstartdate\").val();
\t\t\t\tvar enddate=\$(\"#penddate\").val();
\t\t\t\t\$('#load_data').html(\"<center>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar DATA = 'data='+idstudent+\"#\"+startdate+\"#\"+enddate;
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
        // line 73
        echo $this->env->getExtension('routing')->getPath("students_schedule_load");
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
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d1752b99ba337e5283fbc0b9e14c2ea173ca8be5085563d64dd77fb375a72093->leave($__internal_d1752b99ba337e5283fbc0b9e14c2ea173ca8be5085563d64dd77fb375a72093_prof);

    }

    public function getTemplateName()
    {
        return "students/schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 96,  241 => 95,  216 => 73,  179 => 41,  165 => 32,  151 => 23,  144 => 18,  132 => 17,  127 => 14,  125 => 13,  122 => 12,  120 => 11,  117 => 10,  111 => 9,  95 => 8,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Students:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.schedule'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:scheduleactions.html.twig"%}*/
/* */
/* 		{%include "BoAdminBundle:Students:schedules.html.twig"%}*/
/* 		<div id="data_error"></div>			*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>	*/
/* 			$("#btn_next").click(function(){*/
/* 				var idstudent=$("#idstudent").val();*/
/* 				var startdate=$("#nstartdate").val();*/
/* 				var enddate=$("#nenddate").val();*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idstudent+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_current").click(function(){*/
/* 				var idstudent=$("#idstudent").val();*/
/* 				var startdate=0;*/
/* 				var enddate=0;*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idstudent+"#"+startdate+"#"+enddate;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_previous").click(function(){*/
/* 				var idstudent=$("#idstudent").val();*/
/* 				var startdate=$("#pstartdate").val();*/
/* 				var enddate=$("#penddate").val();*/
/* 				$('#load_data').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var DATA = 'data='+idstudent+"#"+startdate+"#"+enddate;*/
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
/* 					url: "{{ path('students_schedule_load')}}",*/
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
