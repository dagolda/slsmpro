<?php

/* substitution/index.html.twig */
class __TwigTemplate_15c46ba850aa6d2aa010364add4a9e16e5c2054514b6c12794c56051c6e23bf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "substitution/index.html.twig", 1);
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
        $__internal_4267404c93df1efe136671729df0ca8358519de274b369a97f5eb02c5bc6c3cc = $this->env->getExtension("native_profiler");
        $__internal_4267404c93df1efe136671729df0ca8358519de274b369a97f5eb02c5bc6c3cc->enter($__internal_4267404c93df1efe136671729df0ca8358519de274b369a97f5eb02c5bc6c3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "substitution/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4267404c93df1efe136671729df0ca8358519de274b369a97f5eb02c5bc6c3cc->leave($__internal_4267404c93df1efe136671729df0ca8358519de274b369a97f5eb02c5bc6c3cc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a9786c427a4bd2780b0a7f4676e0493be323d45448040211212116e909d63e2 = $this->env->getExtension("native_profiler");
        $__internal_7a9786c427a4bd2780b0a7f4676e0493be323d45448040211212116e909d63e2->enter($__internal_7a9786c427a4bd2780b0a7f4676e0493be323d45448040211212116e909d63e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_7a9786c427a4bd2780b0a7f4676e0493be323d45448040211212116e909d63e2->leave($__internal_7a9786c427a4bd2780b0a7f4676e0493be323d45448040211212116e909d63e2_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_fcaaee8ece6afa118943c2d2a2345943ca58d62b3cfd254c3624a55c37766413 = $this->env->getExtension("native_profiler");
        $__internal_fcaaee8ece6afa118943c2d2a2345943ca58d62b3cfd254c3624a55c37766413->enter($__internal_fcaaee8ece6afa118943c2d2a2345943ca58d62b3cfd254c3624a55c37766413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "substitution/index.html.twig", 3)->display($context);
        
        $__internal_fcaaee8ece6afa118943c2d2a2345943ca58d62b3cfd254c3624a55c37766413->leave($__internal_fcaaee8ece6afa118943c2d2a2345943ca58d62b3cfd254c3624a55c37766413_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4d3fe71dca7f883e444e99fb0facd6acc6777eec34c11b4279a8cf5337f8e97d = $this->env->getExtension("native_profiler");
        $__internal_4d3fe71dca7f883e444e99fb0facd6acc6777eec34c11b4279a8cf5337f8e97d->enter($__internal_4d3fe71dca7f883e444e99fb0facd6acc6777eec34c11b4279a8cf5337f8e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_4d3fe71dca7f883e444e99fb0facd6acc6777eec34c11b4279a8cf5337f8e97d->leave($__internal_4d3fe71dca7f883e444e99fb0facd6acc6777eec34c11b4279a8cf5337f8e97d_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_c3411575980ebfb7f2ce8c22edcfdc9159ea61725fbe5285ca1fcd1637013702 = $this->env->getExtension("native_profiler");
        $__internal_c3411575980ebfb7f2ce8c22edcfdc9159ea61725fbe5285ca1fcd1637013702->enter($__internal_c3411575980ebfb7f2ce8c22edcfdc9159ea61725fbe5285ca1fcd1637013702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.substitution", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_c3411575980ebfb7f2ce8c22edcfdc9159ea61725fbe5285ca1fcd1637013702->leave($__internal_c3411575980ebfb7f2ce8c22edcfdc9159ea61725fbe5285ca1fcd1637013702_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d03405a0703c8bced93b04cbf4132cd41f13676f1f44d4364a79f143d35b590b = $this->env->getExtension("native_profiler");
        $__internal_d03405a0703c8bced93b04cbf4132cd41f13676f1f44d4364a79f143d35b590b->enter($__internal_d03405a0703c8bced93b04cbf4132cd41f13676f1f44d4364a79f143d35b590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Substitution:actions.html.twig", "substitution/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_d03405a0703c8bced93b04cbf4132cd41f13676f1f44d4364a79f143d35b590b->leave($__internal_d03405a0703c8bced93b04cbf4132cd41f13676f1f44d4364a79f143d35b590b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3d83f054deb0f4913f59a92c31d0d6940aa2220148515dc6662217920f671d1 = $this->env->getExtension("native_profiler");
        $__internal_e3d83f054deb0f4913f59a92c31d0d6940aa2220148515dc6662217920f671d1->enter($__internal_e3d83f054deb0f4913f59a92c31d0d6940aa2220148515dc6662217920f671d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Substitution:pagination.html.twig", "substitution/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Substitution:tbliste.html.twig", "substitution/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e3d83f054deb0f4913f59a92c31d0d6940aa2220148515dc6662217920f671d1->leave($__internal_e3d83f054deb0f4913f59a92c31d0d6940aa2220148515dc6662217920f671d1_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_417b52802dc5525d769cbb263c6c2a1c3ac217161377d10b0568b90fe95942b5 = $this->env->getExtension("native_profiler");
        $__internal_417b52802dc5525d769cbb263c6c2a1c3ac217161377d10b0568b90fe95942b5->enter($__internal_417b52802dc5525d769cbb263c6c2a1c3ac217161377d10b0568b90fe95942b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("substitution_pagesearch");
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
        // line 42
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
        // line 49
        echo $this->env->getExtension('routing')->getPath("substitution_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#holders\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#holders option:selected\");
\t\t\t\tholder=str.val();
\t\t\t\tvar start = \$(\".start\").val();
\t\t\t\tvar end = \$(\".end\").val();
\t\t\t\tvar DATA = 'data=' + holder+':'+start+\":\"+end;
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("substitution_holder");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#substitute\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#substitute option:selected\");
\t\t\t\tsubstitute=str.val();
\t\t\t\t//alert(substitute);
\t\t\t\t//return false;
\t\t\t\tvar start = \$(\".start\").val();
\t\t\t\tvar end = \$(\".end\").val();
\t\t\t\tvar DATA = 'data=' + substitute+':'+start+\":\"+end;
\t\t\t\t\$(\".pagination_content\").hide();
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("substitution_substitute");
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
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_417b52802dc5525d769cbb263c6c2a1c3ac217161377d10b0568b90fe95942b5->leave($__internal_417b52802dc5525d769cbb263c6c2a1c3ac217161377d10b0568b90fe95942b5_prof);

    }

    public function getTemplateName()
    {
        return "substitution/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 99,  246 => 89,  230 => 78,  217 => 68,  203 => 59,  190 => 49,  178 => 42,  160 => 27,  151 => 20,  139 => 19,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.substitution'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Substitution:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Substitution:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Substitution:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_pagesearch')}}",*/
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
/* 					url: "{{ path('substitution_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#holders").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#holders option:selected");*/
/* 				holder=str.val();*/
/* 				var start = $(".start").val();*/
/* 				var end = $(".end").val();*/
/* 				var DATA = 'data=' + holder+':'+start+":"+end;*/
/* 				$(".pagination_content").hide();*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_holder')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#substitute").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#substitute option:selected");*/
/* 				substitute=str.val();*/
/* 				//alert(substitute);*/
/* 				//return false;*/
/* 				var start = $(".start").val();*/
/* 				var end = $(".end").val();*/
/* 				var DATA = 'data=' + substitute+':'+start+":"+end;*/
/* 				$(".pagination_content").hide();*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('substitution_substitute')}}",*/
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
