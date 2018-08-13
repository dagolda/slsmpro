<?php

/* teamcontacts/index.html.twig */
class __TwigTemplate_e3c2bc804c18eb3f1f9b1b849bd5619dcd0dea9f4068b65c3d6f5cc1a4793b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "teamcontacts/index.html.twig", 1);
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
        $__internal_e40ad5e610cece1444d97fba226ce9c4c97d5c77e01dfeabb0ee07e0de79e106 = $this->env->getExtension("native_profiler");
        $__internal_e40ad5e610cece1444d97fba226ce9c4c97d5c77e01dfeabb0ee07e0de79e106->enter($__internal_e40ad5e610cece1444d97fba226ce9c4c97d5c77e01dfeabb0ee07e0de79e106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teamcontacts/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e40ad5e610cece1444d97fba226ce9c4c97d5c77e01dfeabb0ee07e0de79e106->leave($__internal_e40ad5e610cece1444d97fba226ce9c4c97d5c77e01dfeabb0ee07e0de79e106_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_042145f55bf8874b7903c783b6770b64faffb1c3b3a7123a667c3e89996a450d = $this->env->getExtension("native_profiler");
        $__internal_042145f55bf8874b7903c783b6770b64faffb1c3b3a7123a667c3e89996a450d->enter($__internal_042145f55bf8874b7903c783b6770b64faffb1c3b3a7123a667c3e89996a450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_042145f55bf8874b7903c783b6770b64faffb1c3b3a7123a667c3e89996a450d->leave($__internal_042145f55bf8874b7903c783b6770b64faffb1c3b3a7123a667c3e89996a450d_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_37e314a2a3a7c23fef8ea7b80b53feb903a8336dd0436760e8e1ffa9511c539d = $this->env->getExtension("native_profiler");
        $__internal_37e314a2a3a7c23fef8ea7b80b53feb903a8336dd0436760e8e1ffa9511c539d->enter($__internal_37e314a2a3a7c23fef8ea7b80b53feb903a8336dd0436760e8e1ffa9511c539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "teamcontacts/index.html.twig", 3)->display($context);
        
        $__internal_37e314a2a3a7c23fef8ea7b80b53feb903a8336dd0436760e8e1ffa9511c539d->leave($__internal_37e314a2a3a7c23fef8ea7b80b53feb903a8336dd0436760e8e1ffa9511c539d_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e7fa5e18bc00c32a729f1392f0e88b9cb2c5e533e5497cc53baedcea92fc6ea0 = $this->env->getExtension("native_profiler");
        $__internal_e7fa5e18bc00c32a729f1392f0e88b9cb2c5e533e5497cc53baedcea92fc6ea0->enter($__internal_e7fa5e18bc00c32a729f1392f0e88b9cb2c5e533e5497cc53baedcea92fc6ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_e7fa5e18bc00c32a729f1392f0e88b9cb2c5e533e5497cc53baedcea92fc6ea0->leave($__internal_e7fa5e18bc00c32a729f1392f0e88b9cb2c5e533e5497cc53baedcea92fc6ea0_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_3c752896ff1a8213a802a3b4c1546b24f09542b83e3b606b372d536e318ead3d = $this->env->getExtension("native_profiler");
        $__internal_3c752896ff1a8213a802a3b4c1546b24f09542b83e3b606b372d536e318ead3d->enter($__internal_3c752896ff1a8213a802a3b4c1546b24f09542b83e3b606b372d536e318ead3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_3c752896ff1a8213a802a3b4c1546b24f09542b83e3b606b372d536e318ead3d->leave($__internal_3c752896ff1a8213a802a3b4c1546b24f09542b83e3b606b372d536e318ead3d_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_22e36ee730283c6dfa2a4798e1e7d797e8bea76bc38e82d914965c030b774892 = $this->env->getExtension("native_profiler");
        $__internal_22e36ee730283c6dfa2a4798e1e7d797e8bea76bc38e82d914965c030b774892->enter($__internal_22e36ee730283c6dfa2a4798e1e7d797e8bea76bc38e82d914965c030b774892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:TeamContacts:actions.html.twig", "teamcontacts/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_22e36ee730283c6dfa2a4798e1e7d797e8bea76bc38e82d914965c030b774892->leave($__internal_22e36ee730283c6dfa2a4798e1e7d797e8bea76bc38e82d914965c030b774892_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca6d4caf420acd220c0757ae713bc6a9e6c41ebecc52641ed2e982969fb9861 = $this->env->getExtension("native_profiler");
        $__internal_9ca6d4caf420acd220c0757ae713bc6a9e6c41ebecc52641ed2e982969fb9861->enter($__internal_9ca6d4caf420acd220c0757ae713bc6a9e6c41ebecc52641ed2e982969fb9861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:TeamContacts:pagination.html.twig", "teamcontacts/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:TeamContacts:tbliste.html.twig", "teamcontacts/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
\t<!-- begin teamcontact creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_tc\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contractual", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t  <div class=\"modal-message\"></div>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("teamcontacts_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:TeamContacts:modalform.html.twig", "teamcontacts/index.html.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" id=\"btn_create\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end teamcontact creation form by modal dialog-->\t
\t
\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_9ca6d4caf420acd220c0757ae713bc6a9e6c41ebecc52641ed2e982969fb9861->leave($__internal_9ca6d4caf420acd220c0757ae713bc6a9e6c41ebecc52641ed2e982969fb9861_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0bc8ca556118a413337b8e7d037d0e22a8f4c259aef4bf72a3cf7c7ac478b29 = $this->env->getExtension("native_profiler");
        $__internal_a0bc8ca556118a413337b8e7d037d0e22a8f4c259aef4bf72a3cf7c7ac478b29->enter($__internal_a0bc8ca556118a413337b8e7d037d0e22a8f4c259aef4bf72a3cf7c7ac478b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 53
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
        // line 59
        echo $this->env->getExtension('routing')->getPath("teamcontacts_pagesearch");
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
        echo $this->env->getExtension('routing')->getPath("teamcontacts_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_create\").click(function(){
\t\t\t\tvar str=\$(\".employee option:selected\");
\t\t\t\temployee=str.text();
\t\t\t\tif(employee==\"\"){
\t\t\t\t\t\$('.modal-message').html(\"You have to select an employee!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\".employee\").change(function(){
\t\t\t\tvar str=\$(\".employee option:selected\");
\t\t\t\temployee=str.text();
\t\t\t\tif(employee!=\"\"){
\t\t\t\t\t\$('.modal-message').html(\"\");
\t\t\t\t}else{
\t\t\t\t\t\$('.modal-message').html(\"You have to select an employee!\");
\t\t\t\t}
\t\t\t\treturn false;\t\t\t
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_a0bc8ca556118a413337b8e7d037d0e22a8f4c259aef4bf72a3cf7c7ac478b29->leave($__internal_a0bc8ca556118a413337b8e7d037d0e22a8f4c259aef4bf72a3cf7c7ac478b29_prof);

    }

    public function getTemplateName()
    {
        return "teamcontacts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 111,  278 => 110,  246 => 81,  234 => 74,  216 => 59,  205 => 53,  201 => 51,  189 => 50,  176 => 40,  169 => 37,  167 => 36,  163 => 35,  158 => 33,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.teamcontacts'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:TeamContacts:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:TeamContacts:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:TeamContacts:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin teamcontact creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_tc" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.contractual'|trans([],'BoAdminBundle')}}</h4>*/
/* 			  <div class="modal-message"></div>*/
/* 			</div>*/
/* 			<form action="{{ path('teamcontacts_new') }}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(tc_form) }}*/
/* 						{%include "BoAdminBundle:TeamContacts:modalform.html.twig"%}*/
/* 					{{ form_rest(tc_form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" id="btn_create">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end teamcontact creation form by modal dialog-->	*/
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
/* 					url: "{{ path('teamcontacts_pagesearch')}}",*/
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
/* 					url: "{{ path('teamcontacts_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_create").click(function(){*/
/* 				var str=$(".employee option:selected");*/
/* 				employee=str.text();*/
/* 				if(employee==""){*/
/* 					$('.modal-message').html("You have to select an employee!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$(".employee").change(function(){*/
/* 				var str=$(".employee option:selected");*/
/* 				employee=str.text();*/
/* 				if(employee!=""){*/
/* 					$('.modal-message').html("");*/
/* 				}else{*/
/* 					$('.modal-message').html("You have to select an employee!");*/
/* 				}*/
/* 				return false;			*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
