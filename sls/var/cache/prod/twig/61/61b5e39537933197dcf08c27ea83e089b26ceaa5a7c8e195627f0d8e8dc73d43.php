<?php

/* BoAdvisorsBundle:Enquiry:index.html.twig */
class __TwigTemplate_b7788d03851e9653eafc63fd86cb9f723711581255aae185bcfb2bcdeb1f6edb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 1);
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
        $__internal_16c30884349285276b872f4676e9d367c9765eeddaec286aa58e5d10981fcd31 = $this->env->getExtension("native_profiler");
        $__internal_16c30884349285276b872f4676e9d367c9765eeddaec286aa58e5d10981fcd31->enter($__internal_16c30884349285276b872f4676e9d367c9765eeddaec286aa58e5d10981fcd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c30884349285276b872f4676e9d367c9765eeddaec286aa58e5d10981fcd31->leave($__internal_16c30884349285276b872f4676e9d367c9765eeddaec286aa58e5d10981fcd31_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e767d6ef7dc1fac09d1a7b380da426356a75dcce71a20da92746be9c5122ca37 = $this->env->getExtension("native_profiler");
        $__internal_e767d6ef7dc1fac09d1a7b380da426356a75dcce71a20da92746be9c5122ca37->enter($__internal_e767d6ef7dc1fac09d1a7b380da426356a75dcce71a20da92746be9c5122ca37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e767d6ef7dc1fac09d1a7b380da426356a75dcce71a20da92746be9c5122ca37->leave($__internal_e767d6ef7dc1fac09d1a7b380da426356a75dcce71a20da92746be9c5122ca37_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_186b0dfe8ac34982ef05286c30b268bae75b48ea014440b1256e773d7556dbed = $this->env->getExtension("native_profiler");
        $__internal_186b0dfe8ac34982ef05286c30b268bae75b48ea014440b1256e773d7556dbed->enter($__internal_186b0dfe8ac34982ef05286c30b268bae75b48ea014440b1256e773d7556dbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 3)->display($context);
        
        $__internal_186b0dfe8ac34982ef05286c30b268bae75b48ea014440b1256e773d7556dbed->leave($__internal_186b0dfe8ac34982ef05286c30b268bae75b48ea014440b1256e773d7556dbed_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c13db160c0d364bcb6ada9eaf2e88260b659967c577b366301d5a4e46bd17d5b = $this->env->getExtension("native_profiler");
        $__internal_c13db160c0d364bcb6ada9eaf2e88260b659967c577b366301d5a4e46bd17d5b->enter($__internal_c13db160c0d364bcb6ada9eaf2e88260b659967c577b366301d5a4e46bd17d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_c13db160c0d364bcb6ada9eaf2e88260b659967c577b366301d5a4e46bd17d5b->leave($__internal_c13db160c0d364bcb6ada9eaf2e88260b659967c577b366301d5a4e46bd17d5b_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_14c5836189f9b4a09f9458bc5965bdcff90fe6b0fbe4b141c3cd47d2528e0422 = $this->env->getExtension("native_profiler");
        $__internal_14c5836189f9b4a09f9458bc5965bdcff90fe6b0fbe4b141c3cd47d2528e0422->enter($__internal_14c5836189f9b4a09f9458bc5965bdcff90fe6b0fbe4b141c3cd47d2528e0422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_14c5836189f9b4a09f9458bc5965bdcff90fe6b0fbe4b141c3cd47d2528e0422->leave($__internal_14c5836189f9b4a09f9458bc5965bdcff90fe6b0fbe4b141c3cd47d2528e0422_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2c3c096d9f08bf61db86ee0358986a05f8ec8eed869ce353b3989a707f9e5e39 = $this->env->getExtension("native_profiler");
        $__internal_2c3c096d9f08bf61db86ee0358986a05f8ec8eed869ce353b3989a707f9e5e39->enter($__internal_2c3c096d9f08bf61db86ee0358986a05f8ec8eed869ce353b3989a707f9e5e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:actions.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_2c3c096d9f08bf61db86ee0358986a05f8ec8eed869ce353b3989a707f9e5e39->leave($__internal_2c3c096d9f08bf61db86ee0358986a05f8ec8eed869ce353b3989a707f9e5e39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb959bfce50651103460193e8846a0e7080a03a408b96b7c13fd9e7fe0d068c9 = $this->env->getExtension("native_profiler");
        $__internal_bb959bfce50651103460193e8846a0e7080a03a408b96b7c13fd9e7fe0d068c9->enter($__internal_bb959bfce50651103460193e8846a0e7080a03a408b96b7c13fd9e7fe0d068c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 13
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 14
            $this->loadTemplate("BoAdvisorsBundle:Enquiry:pagination.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 14)->display($context);
            // line 15
            echo "\t</div>
\t";
        }
        // line 17
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 18
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:tbliste.html.twig", "BoAdvisorsBundle:Enquiry:index.html.twig", 18)->display($context);
        // line 19
        echo "\t</div>
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_bb959bfce50651103460193e8846a0e7080a03a408b96b7c13fd9e7fe0d068c9->leave($__internal_bb959bfce50651103460193e8846a0e7080a03a408b96b7c13fd9e7fe0d068c9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e126fb62b3e8af98c1e304ee44f0e9f3f147592320e24fd1c328070cffa750e8 = $this->env->getExtension("native_profiler");
        $__internal_e126fb62b3e8af98c1e304ee44f0e9f3f147592320e24fd1c328070cffa750e8->enter($__internal_e126fb62b3e8af98c1e304ee44f0e9f3f147592320e24fd1c328070cffa750e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'page=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_pagesearch");
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
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 43
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_search");
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar DATA = 'data='+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_first\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar page=1;\t
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_pagesearch");
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
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_pagesearch");
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
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_pagesearch");
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
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);\t\t\t
\t\t\t\tvar DATA = 'page='+page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_e126fb62b3e8af98c1e304ee44f0e9f3f147592320e24fd1c328070cffa750e8->leave($__internal_e126fb62b3e8af98c1e304ee44f0e9f3f147592320e24fd1c328070cffa750e8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 165,  341 => 155,  329 => 148,  310 => 132,  297 => 124,  278 => 108,  267 => 102,  249 => 87,  237 => 80,  219 => 65,  208 => 59,  195 => 49,  184 => 43,  166 => 28,  157 => 21,  145 => 20,  142 => 19,  140 => 18,  137 => 17,  133 => 15,  131 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Enquiry:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdvisorsBundle:Enquiry:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Enquiry:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'page=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_pagesearch')}}",*/
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
/* 				var criteria = $("#inp-search").val();			*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_search')}}",*/
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
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var DATA = 'data='+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_first").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var page=1;	*/
/* 				var nbpages = $("#nb_pages").val();					*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_pagesearch')}}",*/
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
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_pagesearch')}}",*/
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
/* 				if(parseInt(page)==parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();				*/
/* 				page=parseInt(page)+1;*/
/* 				str.text(page);		*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_pagesearch')}}",*/
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
/* 				if(parseInt(page)==parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				var page=nbpages;				*/
/* 				str.text(page);			*/
/* 				var DATA = 'page='+page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});		*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
