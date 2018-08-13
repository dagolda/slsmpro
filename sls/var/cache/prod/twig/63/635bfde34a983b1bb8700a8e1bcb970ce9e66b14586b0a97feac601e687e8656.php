<?php

/* advisors/index.html.twig */
class __TwigTemplate_a83605c145cc7113a030365bc6eba59af287eeab75c2d4890d68ae25c1a0ce34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "advisors/index.html.twig", 1);
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
        $__internal_1a325390391b7532d977c4c036cf6d6d3ce0158e747927c05d437d4ea39b6f67 = $this->env->getExtension("native_profiler");
        $__internal_1a325390391b7532d977c4c036cf6d6d3ce0158e747927c05d437d4ea39b6f67->enter($__internal_1a325390391b7532d977c4c036cf6d6d3ce0158e747927c05d437d4ea39b6f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "advisors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a325390391b7532d977c4c036cf6d6d3ce0158e747927c05d437d4ea39b6f67->leave($__internal_1a325390391b7532d977c4c036cf6d6d3ce0158e747927c05d437d4ea39b6f67_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d02af0bf7c1f40ebb66c56eec9f680da4fd642601932595df54267aa9c7f52 = $this->env->getExtension("native_profiler");
        $__internal_50d02af0bf7c1f40ebb66c56eec9f680da4fd642601932595df54267aa9c7f52->enter($__internal_50d02af0bf7c1f40ebb66c56eec9f680da4fd642601932595df54267aa9c7f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_50d02af0bf7c1f40ebb66c56eec9f680da4fd642601932595df54267aa9c7f52->leave($__internal_50d02af0bf7c1f40ebb66c56eec9f680da4fd642601932595df54267aa9c7f52_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_435067f43a9635d7e506cb9d296ca8655cd315b5dc80b81131d28869c2c943c7 = $this->env->getExtension("native_profiler");
        $__internal_435067f43a9635d7e506cb9d296ca8655cd315b5dc80b81131d28869c2c943c7->enter($__internal_435067f43a9635d7e506cb9d296ca8655cd315b5dc80b81131d28869c2c943c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "advisors/index.html.twig", 3)->display($context);
        
        $__internal_435067f43a9635d7e506cb9d296ca8655cd315b5dc80b81131d28869c2c943c7->leave($__internal_435067f43a9635d7e506cb9d296ca8655cd315b5dc80b81131d28869c2c943c7_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5992d13493ed17a22698c65c513235a98bdc24450387e8789c4f02c48988f644 = $this->env->getExtension("native_profiler");
        $__internal_5992d13493ed17a22698c65c513235a98bdc24450387e8789c4f02c48988f644->enter($__internal_5992d13493ed17a22698c65c513235a98bdc24450387e8789c4f02c48988f644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_5992d13493ed17a22698c65c513235a98bdc24450387e8789c4f02c48988f644->leave($__internal_5992d13493ed17a22698c65c513235a98bdc24450387e8789c4f02c48988f644_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_dac74c6a56f6986279df5d0d2de40182cac8f92c19244e7218e9cb885aa982c1 = $this->env->getExtension("native_profiler");
        $__internal_dac74c6a56f6986279df5d0d2de40182cac8f92c19244e7218e9cb885aa982c1->enter($__internal_dac74c6a56f6986279df5d0d2de40182cac8f92c19244e7218e9cb885aa982c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisors", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_dac74c6a56f6986279df5d0d2de40182cac8f92c19244e7218e9cb885aa982c1->leave($__internal_dac74c6a56f6986279df5d0d2de40182cac8f92c19244e7218e9cb885aa982c1_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8a17dfdc7d911776011ca90d59ab95b849636ce7aa4746d568a9cbebcd561963 = $this->env->getExtension("native_profiler");
        $__internal_8a17dfdc7d911776011ca90d59ab95b849636ce7aa4746d568a9cbebcd561963->enter($__internal_8a17dfdc7d911776011ca90d59ab95b849636ce7aa4746d568a9cbebcd561963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Advisors:actions.html.twig", "advisors/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_8a17dfdc7d911776011ca90d59ab95b849636ce7aa4746d568a9cbebcd561963->leave($__internal_8a17dfdc7d911776011ca90d59ab95b849636ce7aa4746d568a9cbebcd561963_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1f747384d222fc00135e6301580a65e5aa80865966eb2d1d4238243c61dd4f7 = $this->env->getExtension("native_profiler");
        $__internal_a1f747384d222fc00135e6301580a65e5aa80865966eb2d1d4238243c61dd4f7->enter($__internal_a1f747384d222fc00135e6301580a65e5aa80865966eb2d1d4238243c61dd4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Advisors:pagination.html.twig", "advisors/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Advisors:tbliste.html.twig", "advisors/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>

\t<!-- begin add advisor creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_advisor\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-message\"></div>
\t\t\t<form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("advisors_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Advisors:newform.html.twig", "advisors/index.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end advisor creation form by modal dialog-->\t
\t
\t";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_a1f747384d222fc00135e6301580a65e5aa80865966eb2d1d4238243c61dd4f7->leave($__internal_a1f747384d222fc00135e6301580a65e5aa80865966eb2d1d4238243c61dd4f7_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6b298d7cf77d62e146961243bd582ddd0c4f0d70137b5be11647ae789e28c18 = $this->env->getExtension("native_profiler");
        $__internal_f6b298d7cf77d62e146961243bd582ddd0c4f0d70137b5be11647ae789e28c18->enter($__internal_f6b298d7cf77d62e146961243bd582ddd0c4f0d70137b5be11647ae789e28c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("advisors_pagesearch");
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
        // line 74
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
        // line 81
        echo $this->env->getExtension('routing')->getPath("advisors_search");
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
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f6b298d7cf77d62e146961243bd582ddd0c4f0d70137b5be11647ae789e28c18->leave($__internal_f6b298d7cf77d62e146961243bd582ddd0c4f0d70137b5be11647ae789e28c18_prof);

    }

    public function getTemplateName()
    {
        return "advisors/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 93,  261 => 92,  257 => 91,  244 => 81,  232 => 74,  214 => 59,  205 => 52,  193 => 51,  180 => 41,  176 => 40,  169 => 37,  167 => 36,  163 => 35,  158 => 33,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.advisors'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Advisors:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Advisors:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Advisors:tbliste.html.twig"%}*/
/* 	</div>*/
/* */
/* 	<!-- begin add advisor creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_advisor" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.advisor'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-message"></div>*/
/* 			<form action="{{ path('advisors_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Advisors:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end advisor creation form by modal dialog-->	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('advisors_pagesearch')}}",*/
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
/* 					url: "{{ path('advisors_search')}}",*/
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
