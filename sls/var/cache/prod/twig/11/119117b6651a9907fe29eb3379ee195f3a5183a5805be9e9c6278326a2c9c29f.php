<?php

/* robot/index.html.twig */
class __TwigTemplate_407408f7db687fe54e347ae663613cdecbdc5bfcb747c8d84521868df7a9c843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "robot/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
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
        $__internal_d5aab0a349f6e838d1161e1ed3e9047eea1e1fa6f00c3839afac542663c6ab39 = $this->env->getExtension("native_profiler");
        $__internal_d5aab0a349f6e838d1161e1ed3e9047eea1e1fa6f00c3839afac542663c6ab39->enter($__internal_d5aab0a349f6e838d1161e1ed3e9047eea1e1fa6f00c3839afac542663c6ab39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "robot/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5aab0a349f6e838d1161e1ed3e9047eea1e1fa6f00c3839afac542663c6ab39->leave($__internal_d5aab0a349f6e838d1161e1ed3e9047eea1e1fa6f00c3839afac542663c6ab39_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_003d8d0c58bb993d2a5b9de4f1947c0ce34e680b10a882cc8270b1256f8152ad = $this->env->getExtension("native_profiler");
        $__internal_003d8d0c58bb993d2a5b9de4f1947c0ce34e680b10a882cc8270b1256f8152ad->enter($__internal_003d8d0c58bb993d2a5b9de4f1947c0ce34e680b10a882cc8270b1256f8152ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- Robot >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_003d8d0c58bb993d2a5b9de4f1947c0ce34e680b10a882cc8270b1256f8152ad->leave($__internal_003d8d0c58bb993d2a5b9de4f1947c0ce34e680b10a882cc8270b1256f8152ad_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fdfe8aaca058161582f335f188b4f276cbb0e8fa3f82f0020ec063569f3d903a = $this->env->getExtension("native_profiler");
        $__internal_fdfe8aaca058161582f335f188b4f276cbb0e8fa3f82f0020ec063569f3d903a->enter($__internal_fdfe8aaca058161582f335f188b4f276cbb0e8fa3f82f0020ec063569f3d903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "robot/index.html.twig", 3)->display($context);
        
        $__internal_fdfe8aaca058161582f335f188b4f276cbb0e8fa3f82f0020ec063569f3d903a->leave($__internal_fdfe8aaca058161582f335f188b4f276cbb0e8fa3f82f0020ec063569f3d903a_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_5aa5375f2a0a0e774f639c8d451dccc9a5345826604a74695103f20401f0b19a = $this->env->getExtension("native_profiler");
        $__internal_5aa5375f2a0a0e774f639c8d451dccc9a5345826604a74695103f20401f0b19a->enter($__internal_5aa5375f2a0a0e774f639c8d451dccc9a5345826604a74695103f20401f0b19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Robot >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5aa5375f2a0a0e774f639c8d451dccc9a5345826604a74695103f20401f0b19a->leave($__internal_5aa5375f2a0a0e774f639c8d451dccc9a5345826604a74695103f20401f0b19a_prof);

    }

    // line 5
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ede02cc118d5e0a3d2e5f74e648a3a050b83cee491428b3fe4f96de0bc863ebe = $this->env->getExtension("native_profiler");
        $__internal_ede02cc118d5e0a3d2e5f74e648a3a050b83cee491428b3fe4f96de0bc863ebe->enter($__internal_ede02cc118d5e0a3d2e5f74e648a3a050b83cee491428b3fe4f96de0bc863ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Robot:actions.html.twig", "robot/index.html.twig", 6)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_ede02cc118d5e0a3d2e5f74e648a3a050b83cee491428b3fe4f96de0bc863ebe->leave($__internal_ede02cc118d5e0a3d2e5f74e648a3a050b83cee491428b3fe4f96de0bc863ebe_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2412ce463c8584d85a9bfadaa2f4df1f8dfb9b4c00c05578fae7e4341410fd43 = $this->env->getExtension("native_profiler");
        $__internal_2412ce463c8584d85a9bfadaa2f4df1f8dfb9b4c00c05578fae7e4341410fd43->enter($__internal_2412ce463c8584d85a9bfadaa2f4df1f8dfb9b4c00c05578fae7e4341410fd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Robot:tbliste.html.twig", "robot/index.html.twig", 10)->display($context);
        // line 11
        echo "\t</div>
\t
\t";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2412ce463c8584d85a9bfadaa2f4df1f8dfb9b4c00c05578fae7e4341410fd43->leave($__internal_2412ce463c8584d85a9bfadaa2f4df1f8dfb9b4c00c05578fae7e4341410fd43_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_102a19f82f9d23aa67119454350575ade5d8ac0eff5b7f5407faf87a36889ffd = $this->env->getExtension("native_profiler");
        $__internal_102a19f82f9d23aa67119454350575ade5d8ac0eff5b7f5407faf87a36889ffd->enter($__internal_102a19f82f9d23aa67119454350575ade5d8ac0eff5b7f5407faf87a36889ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 16
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("robot_pagesearch");
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
        // line 37
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
        // line 44
        echo $this->env->getExtension('routing')->getPath("robot_search");
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
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_102a19f82f9d23aa67119454350575ade5d8ac0eff5b7f5407faf87a36889ffd->leave($__internal_102a19f82f9d23aa67119454350575ade5d8ac0eff5b7f5407faf87a36889ffd_prof);

    }

    public function getTemplateName()
    {
        return "robot/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 56,  184 => 55,  180 => 54,  167 => 44,  155 => 37,  137 => 22,  126 => 16,  122 => 14,  110 => 13,  106 => 11,  104 => 10,  101 => 9,  95 => 8,  85 => 6,  79 => 5,  65 => 4,  53 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- Robot >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>Robot >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Robot:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Robot:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('robot_pagesearch')}}",*/
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
/* 					url: "{{ path('robot_search')}}",*/
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
