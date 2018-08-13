<?php

/* agenda/general.html.twig */
class __TwigTemplate_8adead7fdf9487fe910d478c53b3fde275dd712b59b4880e9acaaa58a38dc9be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "agenda/general.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5faa5c56805cdcb80b3aa10a4425cbc151fc13b8c68a5d0db26c5481eea7a52d = $this->env->getExtension("native_profiler");
        $__internal_5faa5c56805cdcb80b3aa10a4425cbc151fc13b8c68a5d0db26c5481eea7a52d->enter($__internal_5faa5c56805cdcb80b3aa10a4425cbc151fc13b8c68a5d0db26c5481eea7a52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/general.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5faa5c56805cdcb80b3aa10a4425cbc151fc13b8c68a5d0db26c5481eea7a52d->leave($__internal_5faa5c56805cdcb80b3aa10a4425cbc151fc13b8c68a5d0db26c5481eea7a52d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9238b06e2fefcdd4205b3f844d6aec1aa1b93e1a8b06d75e1d02886dff9b113 = $this->env->getExtension("native_profiler");
        $__internal_c9238b06e2fefcdd4205b3f844d6aec1aa1b93e1a8b06d75e1d02886dff9b113->enter($__internal_c9238b06e2fefcdd4205b3f844d6aec1aa1b93e1a8b06d75e1d02886dff9b113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c9238b06e2fefcdd4205b3f844d6aec1aa1b93e1a8b06d75e1d02886dff9b113->leave($__internal_c9238b06e2fefcdd4205b3f844d6aec1aa1b93e1a8b06d75e1d02886dff9b113_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_592a5413cb8cf48ba87e6125c0f9accc4b36616d8202ed5f3667c9272eb825a0 = $this->env->getExtension("native_profiler");
        $__internal_592a5413cb8cf48ba87e6125c0f9accc4b36616d8202ed5f3667c9272eb825a0->enter($__internal_592a5413cb8cf48ba87e6125c0f9accc4b36616d8202ed5f3667c9272eb825a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_592a5413cb8cf48ba87e6125c0f9accc4b36616d8202ed5f3667c9272eb825a0->leave($__internal_592a5413cb8cf48ba87e6125c0f9accc4b36616d8202ed5f3667c9272eb825a0_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b3b89bbc25e6bd34289d6eecbd608ac9fc6d8452dc44695bc10ca3554a8f9aa8 = $this->env->getExtension("native_profiler");
        $__internal_b3b89bbc25e6bd34289d6eecbd608ac9fc6d8452dc44695bc10ca3554a8f9aa8->enter($__internal_b3b89bbc25e6bd34289d6eecbd608ac9fc6d8452dc44695bc10ca3554a8f9aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "agenda/general.html.twig", 4)->display($context);
        
        $__internal_b3b89bbc25e6bd34289d6eecbd608ac9fc6d8452dc44695bc10ca3554a8f9aa8->leave($__internal_b3b89bbc25e6bd34289d6eecbd608ac9fc6d8452dc44695bc10ca3554a8f9aa8_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7338e06131125148141e9b8bdca222f95d3afe92720e33c8f8ba676349c586ee = $this->env->getExtension("native_profiler");
        $__internal_7338e06131125148141e9b8bdca222f95d3afe92720e33c8f8ba676349c586ee->enter($__internal_7338e06131125148141e9b8bdca222f95d3afe92720e33c8f8ba676349c586ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t<div id=\"right_show\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "agenda/general.html.twig", 7)->display($context);
        // line 8
        echo "\t</div>
";
        
        $__internal_7338e06131125148141e9b8bdca222f95d3afe92720e33c8f8ba676349c586ee->leave($__internal_7338e06131125148141e9b8bdca222f95d3afe92720e33c8f8ba676349c586ee_prof);

    }

    // line 10
    public function block_label($context, array $blocks = array())
    {
        $__internal_b5ac3f4aaa9ea48f8b2888873ae3a980082c1d3812850c6d01eb97618bb5f104 = $this->env->getExtension("native_profiler");
        $__internal_b5ac3f4aaa9ea48f8b2888873ae3a980082c1d3812850c6d01eb97618bb5f104->enter($__internal_b5ac3f4aaa9ea48f8b2888873ae3a980082c1d3812850c6d01eb97618bb5f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_b5ac3f4aaa9ea48f8b2888873ae3a980082c1d3812850c6d01eb97618bb5f104->leave($__internal_b5ac3f4aaa9ea48f8b2888873ae3a980082c1d3812850c6d01eb97618bb5f104_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c007f5bd3cbd42b8749c1b9c914de2f5a937f87ecb3f7e2600caea49482b400 = $this->env->getExtension("native_profiler");
        $__internal_4c007f5bd3cbd42b8749c1b9c914de2f5a937f87ecb3f7e2600caea49482b400->enter($__internal_4c007f5bd3cbd42b8749c1b9c914de2f5a937f87ecb3f7e2600caea49482b400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<div id=\"body-content\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Agenda:actions.html.twig", "agenda/general.html.twig", 13)->display($context);
        // line 14
        echo "\t\t<div id=\"agenda_content\">
\t\t\t";
        // line 15
        $this->loadTemplate("BoAdminBundle:Agenda:content.html.twig", "agenda/general.html.twig", 15)->display($context);
        // line 16
        echo "\t\t</div>\t
\t\t<div id=\"agenda_error\"></div>\t\t\t
\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4c007f5bd3cbd42b8749c1b9c914de2f5a937f87ecb3f7e2600caea49482b400->leave($__internal_4c007f5bd3cbd42b8749c1b9c914de2f5a937f87ecb3f7e2600caea49482b400_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19906c4102b6330315f37a14dccc0419ea639a2f984d9273a4a5151e49e0ab45 = $this->env->getExtension("native_profiler");
        $__internal_19906c4102b6330315f37a14dccc0419ea639a2f984d9273a4a5151e49e0ab45->enter($__internal_19906c4102b6330315f37a14dccc0419ea639a2f984d9273a4a5151e49e0ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t<script>
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\t\$('.agenda_title').html(\"<center>";
        // line 22
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
        // line 32
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
        // line 42
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
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$('#right_show').html(\"<center>";
        // line 53
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
        // line 69
        echo $this->env->getExtension('routing')->getPath("agenda_search");
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
        // line 84
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
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_19906c4102b6330315f37a14dccc0419ea639a2f984d9273a4a5151e49e0ab45->leave($__internal_19906c4102b6330315f37a14dccc0419ea639a2f984d9273a4a5151e49e0ab45_prof);

    }

    public function getTemplateName()
    {
        return "agenda/general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 97,  243 => 84,  225 => 69,  204 => 53,  198 => 52,  183 => 42,  168 => 32,  153 => 22,  149 => 20,  137 => 19,  132 => 16,  130 => 15,  127 => 14,  125 => 13,  122 => 12,  116 => 11,  100 => 10,  92 => 8,  90 => 7,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	<div id="right_show">*/
/* 		{%include "BoAdminBundle:Employee:rightshow.html.twig"%}*/
/* 	</div>*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Agenda:actions.html.twig"%}*/
/* 		<div id="agenda_content">*/
/* 			{%include "BoAdminBundle:Agenda:content.html.twig"%}*/
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
/* 					url: "{{ path('agenda_search')}}",*/
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
