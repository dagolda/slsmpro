<?php

/* supemployee/index.html.twig */
class __TwigTemplate_79d7bc39f16a284b4c68b6135a3eec5045ab109ee345b456d9f42fd3d48bcc04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "supemployee/index.html.twig", 1);
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13cff04fc4ba3f9a56086248f47071856cc7a577816f8f6dd53bd8f8c279e65b = $this->env->getExtension("native_profiler");
        $__internal_13cff04fc4ba3f9a56086248f47071856cc7a577816f8f6dd53bd8f8c279e65b->enter($__internal_13cff04fc4ba3f9a56086248f47071856cc7a577816f8f6dd53bd8f8c279e65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "supemployee/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13cff04fc4ba3f9a56086248f47071856cc7a577816f8f6dd53bd8f8c279e65b->leave($__internal_13cff04fc4ba3f9a56086248f47071856cc7a577816f8f6dd53bd8f8c279e65b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_061554516078507bbe5d5f3f5b36f2294dd6bee39203d85ec68c71676232978f = $this->env->getExtension("native_profiler");
        $__internal_061554516078507bbe5d5f3f5b36f2294dd6bee39203d85ec68c71676232978f->enter($__internal_061554516078507bbe5d5f3f5b36f2294dd6bee39203d85ec68c71676232978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_061554516078507bbe5d5f3f5b36f2294dd6bee39203d85ec68c71676232978f->leave($__internal_061554516078507bbe5d5f3f5b36f2294dd6bee39203d85ec68c71676232978f_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ae4b95e21dbc466e2dff26385625fb39bc8356505c661be01815193ac7d67b40 = $this->env->getExtension("native_profiler");
        $__internal_ae4b95e21dbc466e2dff26385625fb39bc8356505c661be01815193ac7d67b40->enter($__internal_ae4b95e21dbc466e2dff26385625fb39bc8356505c661be01815193ac7d67b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:archives.html.twig", "supemployee/index.html.twig", 3)->display($context);
        
        $__internal_ae4b95e21dbc466e2dff26385625fb39bc8356505c661be01815193ac7d67b40->leave($__internal_ae4b95e21dbc466e2dff26385625fb39bc8356505c661be01815193ac7d67b40_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5563367d0d719191768fd09b96616f5ed2096c3e4fe0a3baa992d22c20db4e54 = $this->env->getExtension("native_profiler");
        $__internal_5563367d0d719191768fd09b96616f5ed2096c3e4fe0a3baa992d22c20db4e54->enter($__internal_5563367d0d719191768fd09b96616f5ed2096c3e4fe0a3baa992d22c20db4e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_5563367d0d719191768fd09b96616f5ed2096c3e4fe0a3baa992d22c20db4e54->leave($__internal_5563367d0d719191768fd09b96616f5ed2096c3e4fe0a3baa992d22c20db4e54_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_7335d63cb7c28722a5da109a418b5025a3da5a86332f6cff7339bede211e6229 = $this->env->getExtension("native_profiler");
        $__internal_7335d63cb7c28722a5da109a418b5025a3da5a86332f6cff7339bede211e6229->enter($__internal_7335d63cb7c28722a5da109a418b5025a3da5a86332f6cff7339bede211e6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_7335d63cb7c28722a5da109a418b5025a3da5a86332f6cff7339bede211e6229->leave($__internal_7335d63cb7c28722a5da109a418b5025a3da5a86332f6cff7339bede211e6229_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6520e057f132ef9cb55f68755cd622a2c82ee5b3ec8510bd8b748734546c95e6 = $this->env->getExtension("native_profiler");
        $__internal_6520e057f132ef9cb55f68755cd622a2c82ee5b3ec8510bd8b748734546c95e6->enter($__internal_6520e057f132ef9cb55f68755cd622a2c82ee5b3ec8510bd8b748734546c95e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:SupEmployee:actions.html.twig", "supemployee/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_6520e057f132ef9cb55f68755cd622a2c82ee5b3ec8510bd8b748734546c95e6->leave($__internal_6520e057f132ef9cb55f68755cd622a2c82ee5b3ec8510bd8b748734546c95e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd2d567e28ac076db136a3405d5441fe01ff6d100ca980be028c08f745a70273 = $this->env->getExtension("native_profiler");
        $__internal_dd2d567e28ac076db136a3405d5441fe01ff6d100ca980be028c08f745a70273->enter($__internal_dd2d567e28ac076db136a3405d5441fe01ff6d100ca980be028c08f745a70273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:SupEmployee:pagination.html.twig", "supemployee/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:SupEmployee:tbliste.html.twig", "supemployee/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_dd2d567e28ac076db136a3405d5441fe01ff6d100ca980be028c08f745a70273->leave($__internal_dd2d567e28ac076db136a3405d5441fe01ff6d100ca980be028c08f745a70273_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0b1c204d12f1582533136086e787e2da2d7a9ba789ac905132a6b7215219ee73 = $this->env->getExtension("native_profiler");
        $__internal_0b1c204d12f1582533136086e787e2da2d7a9ba789ac905132a6b7215219ee73->enter($__internal_0b1c204d12f1582533136086e787e2da2d7a9ba789ac905132a6b7215219ee73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 22
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
        // line 28
        echo $this->env->getExtension('routing')->getPath("supemployee_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn-search\").click(function(){
\t\t\t\tif(\$(\"#inp-search\").val()==\"\"){
\t\t\t\t\talert(\"Search fields is empty!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 43
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
        // line 50
        echo $this->env->getExtension('routing')->getPath("supemployee_search");
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("supemployee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("supemployee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idlangage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("supemployee_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idsexe\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idtype option:selected\");
\t\t\t\ttype=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar str=\$(\"#idlangage option:selected\");
\t\t\t\tlangage=str.val();
\t\t\t\tvar str=\$(\"#idsexe option:selected\");
\t\t\t\tsexe=str.val();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\t\$(\".extract_btn\").show();
\t\t\t\tvar DATA = 'data=' + type+':'+langage+\":\"+sexe+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("supemployee_extrasearch");
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
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_0b1c204d12f1582533136086e787e2da2d7a9ba789ac905132a6b7215219ee73->leave($__internal_0b1c204d12f1582533136086e787e2da2d7a9ba789ac905132a6b7215219ee73_prof);

    }

    public function getTemplateName()
    {
        return "supemployee/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 156,  324 => 146,  305 => 132,  292 => 122,  273 => 108,  260 => 98,  241 => 84,  228 => 74,  209 => 60,  196 => 50,  184 => 43,  166 => 28,  155 => 22,  151 => 20,  139 => 19,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:archives.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:SupEmployee:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:SupEmployee:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:SupEmployee:tbliste.html.twig"%}*/
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
/* 					url: "{{ path('supemployee_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
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
/* 					url: "{{ path('supemployee_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idtype").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('supemployee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('supemployee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idlangage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('supemployee_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idsexe").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idtype option:selected");*/
/* 				type=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var str=$("#idlangage option:selected");*/
/* 				langage=str.val();*/
/* 				var str=$("#idsexe option:selected");*/
/* 				sexe=str.val();*/
/* 				$(".list_link").show();*/
/* 				$(".extract_btn").show();*/
/* 				var DATA = 'data=' + type+':'+langage+":"+sexe+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('supemployee_extrasearch')}}",*/
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
/* */
