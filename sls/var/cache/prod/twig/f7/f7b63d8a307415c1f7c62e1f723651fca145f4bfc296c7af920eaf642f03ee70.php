<?php

/* activities/index.html.twig */
class __TwigTemplate_3c1d5b1398d5be01c780546d68b2980e92fa26223039441f982c0813a8a29b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "activities/index.html.twig", 1);
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
        $__internal_f5677be42d17f53f210fb9392db21a3c1e70266eeb24fa76161d63b656d959bf = $this->env->getExtension("native_profiler");
        $__internal_f5677be42d17f53f210fb9392db21a3c1e70266eeb24fa76161d63b656d959bf->enter($__internal_f5677be42d17f53f210fb9392db21a3c1e70266eeb24fa76161d63b656d959bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "activities/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5677be42d17f53f210fb9392db21a3c1e70266eeb24fa76161d63b656d959bf->leave($__internal_f5677be42d17f53f210fb9392db21a3c1e70266eeb24fa76161d63b656d959bf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddb85b62055d3675b0e8cbaaeb9af1ed67c235255a469f884b62c6f94a8f64b9 = $this->env->getExtension("native_profiler");
        $__internal_ddb85b62055d3675b0e8cbaaeb9af1ed67c235255a469f884b62c6f94a8f64b9->enter($__internal_ddb85b62055d3675b0e8cbaaeb9af1ed67c235255a469f884b62c6f94a8f64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.activity", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ddb85b62055d3675b0e8cbaaeb9af1ed67c235255a469f884b62c6f94a8f64b9->leave($__internal_ddb85b62055d3675b0e8cbaaeb9af1ed67c235255a469f884b62c6f94a8f64b9_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_2e7b7aeab6d042aa916928657f92a5e09e783921f86c8c20881397309191ffad = $this->env->getExtension("native_profiler");
        $__internal_2e7b7aeab6d042aa916928657f92a5e09e783921f86c8c20881397309191ffad->enter($__internal_2e7b7aeab6d042aa916928657f92a5e09e783921f86c8c20881397309191ffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "activities/index.html.twig", 3)->display($context);
        
        $__internal_2e7b7aeab6d042aa916928657f92a5e09e783921f86c8c20881397309191ffad->leave($__internal_2e7b7aeab6d042aa916928657f92a5e09e783921f86c8c20881397309191ffad_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_588a86d89ff54b17632bc7625e8720a75443b40e79949259fce416dce0cce7c1 = $this->env->getExtension("native_profiler");
        $__internal_588a86d89ff54b17632bc7625e8720a75443b40e79949259fce416dce0cce7c1->enter($__internal_588a86d89ff54b17632bc7625e8720a75443b40e79949259fce416dce0cce7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_588a86d89ff54b17632bc7625e8720a75443b40e79949259fce416dce0cce7c1->leave($__internal_588a86d89ff54b17632bc7625e8720a75443b40e79949259fce416dce0cce7c1_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_259e2c2a676d346add44f7a24fe4aad52f825090a481b1bb5de396c4f4b56c7b = $this->env->getExtension("native_profiler");
        $__internal_259e2c2a676d346add44f7a24fe4aad52f825090a481b1bb5de396c4f4b56c7b->enter($__internal_259e2c2a676d346add44f7a24fe4aad52f825090a481b1bb5de396c4f4b56c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.activity", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_259e2c2a676d346add44f7a24fe4aad52f825090a481b1bb5de396c4f4b56c7b->leave($__internal_259e2c2a676d346add44f7a24fe4aad52f825090a481b1bb5de396c4f4b56c7b_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_83131dec4fbad56d99df01a5b9d0d832fd83cf05c46b4bfd8ed9647bd9895f64 = $this->env->getExtension("native_profiler");
        $__internal_83131dec4fbad56d99df01a5b9d0d832fd83cf05c46b4bfd8ed9647bd9895f64->enter($__internal_83131dec4fbad56d99df01a5b9d0d832fd83cf05c46b4bfd8ed9647bd9895f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Activities:actions.html.twig", "activities/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_83131dec4fbad56d99df01a5b9d0d832fd83cf05c46b4bfd8ed9647bd9895f64->leave($__internal_83131dec4fbad56d99df01a5b9d0d832fd83cf05c46b4bfd8ed9647bd9895f64_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eafe01155e61111584efa2a274112c03dfffefb341b09a646ef525363718624 = $this->env->getExtension("native_profiler");
        $__internal_5eafe01155e61111584efa2a274112c03dfffefb341b09a646ef525363718624->enter($__internal_5eafe01155e61111584efa2a274112c03dfffefb341b09a646ef525363718624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Activities:pagination.html.twig", "activities/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Activities:tbliste.html.twig", "activities/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5eafe01155e61111584efa2a274112c03dfffefb341b09a646ef525363718624->leave($__internal_5eafe01155e61111584efa2a274112c03dfffefb341b09a646ef525363718624_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bbb2ba6113e02564dfc82b8a637fb482b3cde588e8aebd01625aa076d4c97299 = $this->env->getExtension("native_profiler");
        $__internal_bbb2ba6113e02564dfc82b8a637fb482b3cde588e8aebd01625aa076d4c97299->enter($__internal_bbb2ba6113e02564dfc82b8a637fb482b3cde588e8aebd01625aa076d4c97299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("activities_pagesearch");
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
        echo $this->env->getExtension('routing')->getPath("activities_search");
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
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_bbb2ba6113e02564dfc82b8a637fb482b3cde588e8aebd01625aa076d4c97299->leave($__internal_bbb2ba6113e02564dfc82b8a637fb482b3cde588e8aebd01625aa076d4c97299_prof);

    }

    public function getTemplateName()
    {
        return "activities/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 60,  196 => 50,  184 => 43,  166 => 28,  155 => 22,  151 => 20,  139 => 19,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.activity'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.activity'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Activities:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Activities:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Activities:tbliste.html.twig"%}*/
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
/* 					url: "{{ path('activities_pagesearch')}}",*/
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
/* 					url: "{{ path('activities_search')}}",*/
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
