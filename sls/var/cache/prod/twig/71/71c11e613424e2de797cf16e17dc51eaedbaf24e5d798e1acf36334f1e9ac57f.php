<?php

/* BoCoordinatorBundle:Supervision:contracts.html.twig */
class __TwigTemplate_61f5f707f52469d1fbf9a2e0707238b7d1fdf320c6396a8d99d896898d88ed2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 1);
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
        return "coordinator.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de43d9e539d30302552640b0822c081119df5c8f5c46abefaaf164a3b177211 = $this->env->getExtension("native_profiler");
        $__internal_4de43d9e539d30302552640b0822c081119df5c8f5c46abefaaf164a3b177211->enter($__internal_4de43d9e539d30302552640b0822c081119df5c8f5c46abefaaf164a3b177211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Supervision:contracts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de43d9e539d30302552640b0822c081119df5c8f5c46abefaaf164a3b177211->leave($__internal_4de43d9e539d30302552640b0822c081119df5c8f5c46abefaaf164a3b177211_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_13bdf99003955ae25cefca6e1ec49f7326ffdde2dc63a6cbcecdfd9d617f1fab = $this->env->getExtension("native_profiler");
        $__internal_13bdf99003955ae25cefca6e1ec49f7326ffdde2dc63a6cbcecdfd9d617f1fab->enter($__internal_13bdf99003955ae25cefca6e1ec49f7326ffdde2dc63a6cbcecdfd9d617f1fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_13bdf99003955ae25cefca6e1ec49f7326ffdde2dc63a6cbcecdfd9d617f1fab->leave($__internal_13bdf99003955ae25cefca6e1ec49f7326ffdde2dc63a6cbcecdfd9d617f1fab_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_034440985d2ecf3d8283b064315cf0f8887bf9f8ace415786f2340666a4e5304 = $this->env->getExtension("native_profiler");
        $__internal_034440985d2ecf3d8283b064315cf0f8887bf9f8ace415786f2340666a4e5304->enter($__internal_034440985d2ecf3d8283b064315cf0f8887bf9f8ace415786f2340666a4e5304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:supervision.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 3)->display($context);
        
        $__internal_034440985d2ecf3d8283b064315cf0f8887bf9f8ace415786f2340666a4e5304->leave($__internal_034440985d2ecf3d8283b064315cf0f8887bf9f8ace415786f2340666a4e5304_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_75481a24da6dc733d73dc95f5cfbe49ddad7693817b23fa542fe4d180f0c2311 = $this->env->getExtension("native_profiler");
        $__internal_75481a24da6dc733d73dc95f5cfbe49ddad7693817b23fa542fe4d180f0c2311->enter($__internal_75481a24da6dc733d73dc95f5cfbe49ddad7693817b23fa542fe4d180f0c2311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if (((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")) != null)) {
            $this->loadTemplate("BoAdminBundle:Coordinator:rightshow.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_75481a24da6dc733d73dc95f5cfbe49ddad7693817b23fa542fe4d180f0c2311->leave($__internal_75481a24da6dc733d73dc95f5cfbe49ddad7693817b23fa542fe4d180f0c2311_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_66cd568a6f6b963e01a98d50a9d1c1c2d0b985ca36fe74fa4789d7962c3c6eae = $this->env->getExtension("native_profiler");
        $__internal_66cd568a6f6b963e01a98d50a9d1c1c2d0b985ca36fe74fa4789d7962c3c6eae->enter($__internal_66cd568a6f6b963e01a98d50a9d1c1c2d0b985ca36fe74fa4789d7962c3c6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_66cd568a6f6b963e01a98d50a9d1c1c2d0b985ca36fe74fa4789d7962c3c6eae->leave($__internal_66cd568a6f6b963e01a98d50a9d1c1c2d0b985ca36fe74fa4789d7962c3c6eae_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8cd48592a496695f362c2dc5cdf1754030f8b084408e53fcb389088194f66330 = $this->env->getExtension("native_profiler");
        $__internal_8cd48592a496695f362c2dc5cdf1754030f8b084408e53fcb389088194f66330->enter($__internal_8cd48592a496695f362c2dc5cdf1754030f8b084408e53fcb389088194f66330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $this->loadTemplate("BoCoordinatorBundle:Supervision:actions.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 8)->display($context);
        
        $__internal_8cd48592a496695f362c2dc5cdf1754030f8b084408e53fcb389088194f66330->leave($__internal_8cd48592a496695f362c2dc5cdf1754030f8b084408e53fcb389088194f66330_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebbd398db38777122c2bdebd5e2786633f58002057f1815a37cdee70273c43b9 = $this->env->getExtension("native_profiler");
        $__internal_ebbd398db38777122c2bdebd5e2786633f58002057f1815a37cdee70273c43b9->enter($__internal_ebbd398db38777122c2bdebd5e2786633f58002057f1815a37cdee70273c43b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t<div class=\"display_content\">
\t\t\t<input type=\"hidden\" name=\"status\" id=\"status\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\" />
\t\t\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t\t\t<legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 15
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 16
            echo "\t\t\t\t<div class=\"pagination_content\">
\t\t\t\t\t";
            // line 17
            $this->loadTemplate("BoCoordinatorBundle:Supervision:pagination.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t\t<div id=\"content-liste\">
\t\t\t\t";
        // line 21
        $this->loadTemplate("BoCoordinatorBundle:Supervision:contractlist.html.twig", "BoCoordinatorBundle:Supervision:contracts.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
\t";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_ebbd398db38777122c2bdebd5e2786633f58002057f1815a37cdee70273c43b9->leave($__internal_ebbd398db38777122c2bdebd5e2786633f58002057f1815a37cdee70273c43b9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebbe43cead7c3191fb5cfed0c0b8bd35a8e04091d64612d745f6e2d6f834723f = $this->env->getExtension("native_profiler");
        $__internal_ebbe43cead7c3191fb5cfed0c0b8bd35a8e04091d64612d745f6e2d6f834723f->enter($__internal_ebbe43cead7c3191fb5cfed0c0b8bd35a8e04091d64612d745f6e2d6f834723f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_first\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar page=1;\t
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)>=parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_last\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)>=parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("coordinator_supervision_pagesearch");
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_ebbe43cead7c3191fb5cfed0c0b8bd35a8e04091d64612d745f6e2d6f834723f->leave($__internal_ebbe43cead7c3191fb5cfed0c0b8bd35a8e04091d64612d745f6e2d6f834723f_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Supervision:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 139,  311 => 129,  298 => 121,  279 => 105,  265 => 96,  246 => 80,  234 => 73,  216 => 58,  203 => 50,  185 => 35,  173 => 28,  169 => 26,  157 => 25,  152 => 22,  150 => 21,  147 => 20,  143 => 18,  141 => 17,  138 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  120 => 10,  114 => 9,  102 => 8,  86 => 7,  74 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.supervision'|trans([],'BoAdminBundle')}}  >> {{'label.contracts'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:supervision.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	{%if coordinator!=null%}{%include "BoAdminBundle:Coordinator:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block actions %}{%include "BoCoordinatorBundle:Supervision:actions.html.twig"%}{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<div class="display_content">*/
/* 			<input type="hidden" name="status" id="status" value="{{status}}" />*/
/* 			<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 			<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%if total is defined and total>nb_cpp%}*/
/* 				<div class="pagination_content">*/
/* 					{% include 'BoCoordinatorBundle:Supervision:pagination.html.twig' %}*/
/* 				</div>*/
/* 			{%endif%}*/
/* 			<div id="content-liste">*/
/* 				{%include "BoCoordinatorBundle:Supervision:contractlist.html.twig"%}*/
/* 			</div>*/
/* 		</div>			*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_first").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var page=1;	*/
/* 				var nbpages = $("#nb_pages").val();					*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_previous").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				page=parseInt(page)-1;*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_next").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)>=parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();				*/
/* 				page=parseInt(page)+1;*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_last").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)>=parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				var page=nbpages;				*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_supervision_pagesearch')}}",*/
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
