<?php

/* absences/listforemployee.html.twig */
class __TwigTemplate_44209a35658a8534b2a204e4fb785058da8c6d95368501bd274e69ecf9e3e5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "absences/listforemployee.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
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
        $__internal_7d1d361da5cb25325d54845ba328aaa00c0127da841eaef012c9851020d98546 = $this->env->getExtension("native_profiler");
        $__internal_7d1d361da5cb25325d54845ba328aaa00c0127da841eaef012c9851020d98546->enter($__internal_7d1d361da5cb25325d54845ba328aaa00c0127da841eaef012c9851020d98546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "absences/listforemployee.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1d361da5cb25325d54845ba328aaa00c0127da841eaef012c9851020d98546->leave($__internal_7d1d361da5cb25325d54845ba328aaa00c0127da841eaef012c9851020d98546_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a79a5489cdfd5b748f73da950ff48b4663275437f854d732eb65f9caa876a28 = $this->env->getExtension("native_profiler");
        $__internal_5a79a5489cdfd5b748f73da950ff48b4663275437f854d732eb65f9caa876a28->enter($__internal_5a79a5489cdfd5b748f73da950ff48b4663275437f854d732eb65f9caa876a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_5a79a5489cdfd5b748f73da950ff48b4663275437f854d732eb65f9caa876a28->leave($__internal_5a79a5489cdfd5b748f73da950ff48b4663275437f854d732eb65f9caa876a28_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7e1f9fe588f2648f00ad766a8d658b02f6da1038aa83c9077c82c43bcab06c42 = $this->env->getExtension("native_profiler");
        $__internal_7e1f9fe588f2648f00ad766a8d658b02f6da1038aa83c9077c82c43bcab06c42->enter($__internal_7e1f9fe588f2648f00ad766a8d658b02f6da1038aa83c9077c82c43bcab06c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "absences/listforemployee.html.twig", 3)->display($context);
        
        $__internal_7e1f9fe588f2648f00ad766a8d658b02f6da1038aa83c9077c82c43bcab06c42->leave($__internal_7e1f9fe588f2648f00ad766a8d658b02f6da1038aa83c9077c82c43bcab06c42_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_a00d3457387fb20ac9f77852a3246098a9d870dab44991892a6efe99c7c5dfab = $this->env->getExtension("native_profiler");
        $__internal_a00d3457387fb20ac9f77852a3246098a9d870dab44991892a6efe99c7c5dfab->enter($__internal_a00d3457387fb20ac9f77852a3246098a9d870dab44991892a6efe99c7c5dfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absences", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a00d3457387fb20ac9f77852a3246098a9d870dab44991892a6efe99c7c5dfab->leave($__internal_a00d3457387fb20ac9f77852a3246098a9d870dab44991892a6efe99c7c5dfab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc9486e1bcabeae32ca4fb2d5c54508b259d6abce935e9b52da24f1203f69e2b = $this->env->getExtension("native_profiler");
        $__internal_fc9486e1bcabeae32ca4fb2d5c54508b259d6abce935e9b52da24f1203f69e2b->enter($__internal_fc9486e1bcabeae32ca4fb2d5c54508b259d6abce935e9b52da24f1203f69e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Absences:employeeactions.html.twig", "absences/listforemployee.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 9
            echo "\t\t\t<div class=\"pagination_content\">
\t\t\t\t";
            // line 10
            $this->loadTemplate("BoAdminBundle:Absences:pagination.html.twig", "absences/listforemployee.html.twig", 10)->display($context);
            // line 11
            echo "\t\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:Absences:absemployee.html.twig", "absences/listforemployee.html.twig", 14)->display($context);
        // line 15
        echo "\t\t</div>
\t</div>
\t
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fc9486e1bcabeae32ca4fb2d5c54508b259d6abce935e9b52da24f1203f69e2b->leave($__internal_fc9486e1bcabeae32ca4fb2d5c54508b259d6abce935e9b52da24f1203f69e2b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a05fda7606bce751f8f80a802fe27d86a57cde7a1b6cb0b3da8066b3de3713b = $this->env->getExtension("native_profiler");
        $__internal_4a05fda7606bce751f8f80a802fe27d86a57cde7a1b6cb0b3da8066b3de3713b->enter($__internal_4a05fda7606bce751f8f80a802fe27d86a57cde7a1b6cb0b3da8066b3de3713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 21
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
        // line 27
        echo $this->env->getExtension('routing')->getPath("absences_pagesearch");
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
        echo $this->env->getExtension('routing')->getPath("absences_search");
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4a05fda7606bce751f8f80a802fe27d86a57cde7a1b6cb0b3da8066b3de3713b->leave($__internal_4a05fda7606bce751f8f80a802fe27d86a57cde7a1b6cb0b3da8066b3de3713b_prof);

    }

    public function getTemplateName()
    {
        return "absences/listforemployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 61,  189 => 60,  185 => 59,  172 => 49,  160 => 42,  142 => 27,  131 => 21,  127 => 19,  115 => 18,  110 => 15,  108 => 14,  105 => 13,  101 => 11,  99 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  82 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.absences'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Absences:employeeactions.html.twig"%}*/
/* 		{%if total is defined and total>nb_cpp%}*/
/* 			<div class="pagination_content">*/
/* 				{% include 'BoAdminBundle:Absences:pagination.html.twig' %}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Absences:absemployee.html.twig"%}*/
/* 		</div>*/
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
/* 					url: "{{ path('absences_pagesearch')}}",*/
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
/* 					url: "{{ path('absences_search')}}",*/
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
