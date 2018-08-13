<?php

/* BoHomeBundle:Agenda:index.html.twig */
class __TwigTemplate_0f9bc91e75829eec555529a3f6ac2898aabb0354d2d3cc4d5c8f38965570e7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("home2.html.twig", "BoHomeBundle:Agenda:index.html.twig", 1);
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
        return "home2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d4da02d7107420a1a008b1471aecbaeca6ad821370bd7d1232b6acadd06a44c = $this->env->getExtension("native_profiler");
        $__internal_9d4da02d7107420a1a008b1471aecbaeca6ad821370bd7d1232b6acadd06a44c->enter($__internal_9d4da02d7107420a1a008b1471aecbaeca6ad821370bd7d1232b6acadd06a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Agenda:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4da02d7107420a1a008b1471aecbaeca6ad821370bd7d1232b6acadd06a44c->leave($__internal_9d4da02d7107420a1a008b1471aecbaeca6ad821370bd7d1232b6acadd06a44c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e4017750b30c3e00a921f96408af62eaf71285d1efeeceaa420cd07e4890c0b = $this->env->getExtension("native_profiler");
        $__internal_7e4017750b30c3e00a921f96408af62eaf71285d1efeeceaa420cd07e4890c0b->enter($__internal_7e4017750b30c3e00a921f96408af62eaf71285d1efeeceaa420cd07e4890c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7e4017750b30c3e00a921f96408af62eaf71285d1efeeceaa420cd07e4890c0b->leave($__internal_7e4017750b30c3e00a921f96408af62eaf71285d1efeeceaa420cd07e4890c0b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5f7b3863e07bda8423a93c14ff466e587745174236081ba7cc08ae9682abf81 = $this->env->getExtension("native_profiler");
        $__internal_d5f7b3863e07bda8423a93c14ff466e587745174236081ba7cc08ae9682abf81->enter($__internal_d5f7b3863e07bda8423a93c14ff466e587745174236081ba7cc08ae9682abf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_d5f7b3863e07bda8423a93c14ff466e587745174236081ba7cc08ae9682abf81->leave($__internal_d5f7b3863e07bda8423a93c14ff466e587745174236081ba7cc08ae9682abf81_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2de3eb8a0f75b72ac45a68a600a0d9446eb94789c825fdc1c07d31e5796ba79a = $this->env->getExtension("native_profiler");
        $__internal_2de3eb8a0f75b72ac45a68a600a0d9446eb94789c825fdc1c07d31e5796ba79a->enter($__internal_2de3eb8a0f75b72ac45a68a600a0d9446eb94789c825fdc1c07d31e5796ba79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoHomeBundle:Default:tdb.html.twig", "BoHomeBundle:Agenda:index.html.twig", 4)->display($context);
        
        $__internal_2de3eb8a0f75b72ac45a68a600a0d9446eb94789c825fdc1c07d31e5796ba79a->leave($__internal_2de3eb8a0f75b72ac45a68a600a0d9446eb94789c825fdc1c07d31e5796ba79a_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_de9f1ccfbcf80aaf1229f4c52cdce6a125b4424cf7bcf55c705b87bf8ecb50b0 = $this->env->getExtension("native_profiler");
        $__internal_de9f1ccfbcf80aaf1229f4c52cdce6a125b4424cf7bcf55c705b87bf8ecb50b0->enter($__internal_de9f1ccfbcf80aaf1229f4c52cdce6a125b4424cf7bcf55c705b87bf8ecb50b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t<div id=\"right_show\">
\t\t";
        // line 7
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoHomeBundle:Default:rightshow.html.twig", "BoHomeBundle:Agenda:index.html.twig", 7)->display($context);
        }
        echo "\t
\t</div>
";
        
        $__internal_de9f1ccfbcf80aaf1229f4c52cdce6a125b4424cf7bcf55c705b87bf8ecb50b0->leave($__internal_de9f1ccfbcf80aaf1229f4c52cdce6a125b4424cf7bcf55c705b87bf8ecb50b0_prof);

    }

    // line 10
    public function block_label($context, array $blocks = array())
    {
        $__internal_c22f169141524567fe24367b2c3a71249cab66fd29f4809ffb5da14ef4cb8740 = $this->env->getExtension("native_profiler");
        $__internal_c22f169141524567fe24367b2c3a71249cab66fd29f4809ffb5da14ef4cb8740->enter($__internal_c22f169141524567fe24367b2c3a71249cab66fd29f4809ffb5da14ef4cb8740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 11
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("admin.default.home", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>
";
        
        $__internal_c22f169141524567fe24367b2c3a71249cab66fd29f4809ffb5da14ef4cb8740->leave($__internal_c22f169141524567fe24367b2c3a71249cab66fd29f4809ffb5da14ef4cb8740_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_668f83dc7d5efa26a73cf13fd9568ee9677aea69d0c75ae0bdb6d359e8ef5192 = $this->env->getExtension("native_profiler");
        $__internal_668f83dc7d5efa26a73cf13fd9568ee9677aea69d0c75ae0bdb6d359e8ef5192->enter($__internal_668f83dc7d5efa26a73cf13fd9568ee9677aea69d0c75ae0bdb6d359e8ef5192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<div id=\"body-content\">
\t\t";
        // line 15
        $this->loadTemplate("BoHomeBundle:Agenda:actions.html.twig", "BoHomeBundle:Agenda:index.html.twig", 15)->display($context);
        // line 16
        echo "\t\t<div id=\"agenda_content\">
\t\t\t";
        // line 17
        $this->loadTemplate("BoHomeBundle:Agenda:content.html.twig", "BoHomeBundle:Agenda:index.html.twig", 17)->display($context);
        // line 18
        echo "\t\t</div>\t
\t\t<div id=\"agenda_error\"></div>\t\t\t
\t</div>
\t";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_668f83dc7d5efa26a73cf13fd9568ee9677aea69d0c75ae0bdb6d359e8ef5192->leave($__internal_668f83dc7d5efa26a73cf13fd9568ee9677aea69d0c75ae0bdb6d359e8ef5192_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_504dda25fe02651337fc59e54f04733750c7303ffa63ed7bb9d54602443a1d59 = $this->env->getExtension("native_profiler");
        $__internal_504dda25fe02651337fc59e54f04733750c7303ffa63ed7bb9d54602443a1d59->enter($__internal_504dda25fe02651337fc59e54f04733750c7303ffa63ed7bb9d54602443a1d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "\t\t<script>
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\t\$('.agenda_title').html(\"<center>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=-7;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#startdate\").val();
\t\t\t\tvar enddate=\$(\"#enddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\t\$('.agenda_title').html(\"<center>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=7;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#startdate\").val();
\t\t\t\tvar enddate=\$(\"#enddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_current\").click(function(){
\t\t\t\t\$('.agenda_title').html(\"<center>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=0;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#csd\").val();
\t\t\t\tvar enddate=\$(\"#ced\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idteacher\").change(function(){
\t\t\t\t\$('.agenda_title').html(\"<center>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$('#right_show').html(\"<center>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idteacher option:selected\");
\t\t\t\tidteacher=str.val();
\t\t\t\tvar number=0;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val(idteacher);
\t\t\t\tvar startdate=\$(\"#startdate\").val();
\t\t\t\tvar enddate=\$(\"#enddate\").val();
\t\t\t\tvar DATA = 'idemployee='+idteacher;\t\t\t\t
\t\t\t\tloadright(DATA);
\t\t\t\tvar DATA = 'data='+idteacher+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\tloaddata(DATA);
\t\t\t\treturn false;
\t\t\t});\t
\t\t\tfunction loaddata(DATA){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("home_agenda_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#agenda_content').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#agenda_error').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t\tfunction loadright(DATA){
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("employee_right_show");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#right_show').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#right_show').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t}
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_504dda25fe02651337fc59e54f04733750c7303ffa63ed7bb9d54602443a1d59->leave($__internal_504dda25fe02651337fc59e54f04733750c7303ffa63ed7bb9d54602443a1d59_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Agenda:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 99,  247 => 86,  229 => 71,  208 => 55,  202 => 54,  187 => 44,  172 => 34,  157 => 24,  153 => 22,  141 => 21,  136 => 18,  134 => 17,  131 => 16,  129 => 15,  126 => 14,  120 => 13,  108 => 11,  102 => 10,  90 => 7,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'home2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'admin.default.home'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoHomeBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	<div id="right_show">*/
/* 		{%if employee!=null%}{%include "BoHomeBundle:Default:rightshow.html.twig"%}{%endif%}	*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block label %}*/
/* 	<h1>{{'admin.default.home'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoHomeBundle:Agenda:actions.html.twig"%}*/
/* 		<div id="agenda_content">*/
/* 			{%include "BoHomeBundle:Agenda:content.html.twig"%}*/
/* 		</div>	*/
/* 		<div id="agenda_error"></div>			*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_previous").click(function(){*/
/* 				$('.agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=-7;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#startdate").val();*/
/* 				var enddate=$("#enddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_next").click(function(){*/
/* 				$('.agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=7;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#startdate").val();*/
/* 				var enddate=$("#enddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_current").click(function(){*/
/* 				$('.agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=0;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#csd").val();*/
/* 				var enddate=$("#ced").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});*/
/* 			$("#idteacher").change(function(){*/
/* 				$('.agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$('#right_show').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idteacher option:selected");*/
/* 				idteacher=str.val();*/
/* 				var number=0;*/
/* 				var idemployee=$("#idemployee").val(idteacher);*/
/* 				var startdate=$("#startdate").val();*/
/* 				var enddate=$("#enddate").val();*/
/* 				var DATA = 'idemployee='+idteacher;				*/
/* 				loadright(DATA);*/
/* 				var DATA = 'data='+idteacher+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				loaddata(DATA);*/
/* 				return false;*/
/* 			});	*/
/* 			function loaddata(DATA){*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('home_agenda_search')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#agenda_content').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#agenda_error').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 			function loadright(DATA){*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_right_show')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#right_show').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#right_show').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			}*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
