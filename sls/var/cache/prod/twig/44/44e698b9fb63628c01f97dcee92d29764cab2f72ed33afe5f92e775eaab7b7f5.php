<?php

/* contracts/back.html.twig */
class __TwigTemplate_98e6965548d5a4c0518364dd38ec744d8a0b664cf76a5bf579adb85431bf1e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "contracts/back.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'actions' => array($this, 'block_actions'),
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
        $__internal_748d51352309693a0a88ed31fb988f0fe666e8d23fe1ad65a8caf874891e84d9 = $this->env->getExtension("native_profiler");
        $__internal_748d51352309693a0a88ed31fb988f0fe666e8d23fe1ad65a8caf874891e84d9->enter($__internal_748d51352309693a0a88ed31fb988f0fe666e8d23fe1ad65a8caf874891e84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contracts/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748d51352309693a0a88ed31fb988f0fe666e8d23fe1ad65a8caf874891e84d9->leave($__internal_748d51352309693a0a88ed31fb988f0fe666e8d23fe1ad65a8caf874891e84d9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0572bc784f4335e8b25a528a60c47848a886cd48133b049847a36d9bd3d5e82b = $this->env->getExtension("native_profiler");
        $__internal_0572bc784f4335e8b25a528a60c47848a886cd48133b049847a36d9bd3d5e82b->enter($__internal_0572bc784f4335e8b25a528a60c47848a886cd48133b049847a36d9bd3d5e82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0572bc784f4335e8b25a528a60c47848a886cd48133b049847a36d9bd3d5e82b->leave($__internal_0572bc784f4335e8b25a528a60c47848a886cd48133b049847a36d9bd3d5e82b_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_81b41ae4ad3106b0dc766ba99902896f5974f6e9c84f69ac9ba8e183a61f1ae6 = $this->env->getExtension("native_profiler");
        $__internal_81b41ae4ad3106b0dc766ba99902896f5974f6e9c84f69ac9ba8e183a61f1ae6->enter($__internal_81b41ae4ad3106b0dc766ba99902896f5974f6e9c84f69ac9ba8e183a61f1ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "contracts/back.html.twig", 3)->display($context);
        
        $__internal_81b41ae4ad3106b0dc766ba99902896f5974f6e9c84f69ac9ba8e183a61f1ae6->leave($__internal_81b41ae4ad3106b0dc766ba99902896f5974f6e9c84f69ac9ba8e183a61f1ae6_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b5d09653b2a3ca3140347939ef72c236c5f022d22e74e05fe3a3821ada77ecf5 = $this->env->getExtension("native_profiler");
        $__internal_b5d09653b2a3ca3140347939ef72c236c5f022d22e74e05fe3a3821ada77ecf5->enter($__internal_b5d09653b2a3ca3140347939ef72c236c5f022d22e74e05fe3a3821ada77ecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_b5d09653b2a3ca3140347939ef72c236c5f022d22e74e05fe3a3821ada77ecf5->leave($__internal_b5d09653b2a3ca3140347939ef72c236c5f022d22e74e05fe3a3821ada77ecf5_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_82ce982a25d6ca95e733ffbfa0ff7c10a2b71bacf29335cd88f04ac59ec8f627 = $this->env->getExtension("native_profiler");
        $__internal_82ce982a25d6ca95e733ffbfa0ff7c10a2b71bacf29335cd88f04ac59ec8f627->enter($__internal_82ce982a25d6ca95e733ffbfa0ff7c10a2b71bacf29335cd88f04ac59ec8f627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_82ce982a25d6ca95e733ffbfa0ff7c10a2b71bacf29335cd88f04ac59ec8f627->leave($__internal_82ce982a25d6ca95e733ffbfa0ff7c10a2b71bacf29335cd88f04ac59ec8f627_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_da91f330ea9e6ad689a116391b81443d27ac9be35d71b70034db01430a5260e4 = $this->env->getExtension("native_profiler");
        $__internal_da91f330ea9e6ad689a116391b81443d27ac9be35d71b70034db01430a5260e4->enter($__internal_da91f330ea9e6ad689a116391b81443d27ac9be35d71b70034db01430a5260e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Contracts:backactions.html.twig", "contracts/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_da91f330ea9e6ad689a116391b81443d27ac9be35d71b70034db01430a5260e4->leave($__internal_da91f330ea9e6ad689a116391b81443d27ac9be35d71b70034db01430a5260e4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4039f866cfa0ea21c927b52573e0fa518dfe3a680d9da3d63e60082e759d8d26 = $this->env->getExtension("native_profiler");
        $__internal_4039f866cfa0ea21c927b52573e0fa518dfe3a680d9da3d63e60082e759d8d26->enter($__internal_4039f866cfa0ea21c927b52573e0fa518dfe3a680d9da3d63e60082e759d8d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t<div class='numberfound'><b>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</b> : <span>";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></div>
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Contracts:tbliste.html.twig", "contracts/back.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_4039f866cfa0ea21c927b52573e0fa518dfe3a680d9da3d63e60082e759d8d26->leave($__internal_4039f866cfa0ea21c927b52573e0fa518dfe3a680d9da3d63e60082e759d8d26_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c21ad561d6a18b228c0f4465092788bc745563e49f34e659c438533b9420973 = $this->env->getExtension("native_profiler");
        $__internal_5c21ad561d6a18b228c0f4465092788bc745563e49f34e659c438533b9420973->enter($__internal_5c21ad561d6a18b228c0f4465092788bc745563e49f34e659c438533b9420973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("contracts_pagesearch");
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
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 39
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("contracts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_archived\").click(function(){
\t\t\t\t\$(\"#inp-search\").val(\"\");\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".btn_archived\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = \"description=fini\";
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("contracts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;

\t\t\t});
\t\t\t\$(\"#idtype\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar start = \$(\".startdate\").val();
\t\t\t\tvar end = \$(\".enddate\").val();
\t\t\t\tvar DATA = 'data=' + type+':'+start+\":\"+end+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("contracts_extrasearch");
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5c21ad561d6a18b228c0f4465092788bc745563e49f34e659c438533b9420973->leave($__internal_5c21ad561d6a18b228c0f4465092788bc745563e49f34e659c438533b9420973_prof);

    }

    public function getTemplateName()
    {
        return "contracts/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 98,  250 => 88,  233 => 76,  219 => 65,  206 => 57,  192 => 46,  180 => 39,  162 => 24,  151 => 18,  147 => 16,  135 => 15,  132 => 14,  130 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.contracts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Contracts:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 		{%include "BoAdminBundle:Contracts:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_pagesearch')}}",*/
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
/* 				var criteria = $("#inp-search").val();				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_archived").click(function(){*/
/* 				$("#inp-search").val("");				*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".total_number").hide();*/
/* 				$(".btn_archived").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = "description=fini";*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* */
/* 			});*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var start = $(".startdate").val();*/
/* 				var end = $(".enddate").val();*/
/* 				var DATA = 'data=' + type+':'+start+":"+end+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('contracts_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
