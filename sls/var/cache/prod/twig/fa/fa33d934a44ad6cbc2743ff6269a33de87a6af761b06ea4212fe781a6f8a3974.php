<?php

/* group/index.html.twig */
class __TwigTemplate_bbab6806bf99fb8491cd6ceb8b1981c52f16c749f18f8d0989a0b1766d2d1e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "group/index.html.twig", 1);
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
        $__internal_c11db63a0fde037753a767da82841ec12355e1485a11c0384404284760de4ff8 = $this->env->getExtension("native_profiler");
        $__internal_c11db63a0fde037753a767da82841ec12355e1485a11c0384404284760de4ff8->enter($__internal_c11db63a0fde037753a767da82841ec12355e1485a11c0384404284760de4ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "group/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11db63a0fde037753a767da82841ec12355e1485a11c0384404284760de4ff8->leave($__internal_c11db63a0fde037753a767da82841ec12355e1485a11c0384404284760de4ff8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_58caf9f0c87b32745b3df6bf1a3e94ace76c8039ab37a4f713f1037d33e933dd = $this->env->getExtension("native_profiler");
        $__internal_58caf9f0c87b32745b3df6bf1a3e94ace76c8039ab37a4f713f1037d33e933dd->enter($__internal_58caf9f0c87b32745b3df6bf1a3e94ace76c8039ab37a4f713f1037d33e933dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_58caf9f0c87b32745b3df6bf1a3e94ace76c8039ab37a4f713f1037d33e933dd->leave($__internal_58caf9f0c87b32745b3df6bf1a3e94ace76c8039ab37a4f713f1037d33e933dd_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_6715ed2d1661eb1499e9ff9dd0d58d1790d90cf3b105840610849a1ebd19a370 = $this->env->getExtension("native_profiler");
        $__internal_6715ed2d1661eb1499e9ff9dd0d58d1790d90cf3b105840610849a1ebd19a370->enter($__internal_6715ed2d1661eb1499e9ff9dd0d58d1790d90cf3b105840610849a1ebd19a370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "group/index.html.twig", 3)->display($context);
        
        $__internal_6715ed2d1661eb1499e9ff9dd0d58d1790d90cf3b105840610849a1ebd19a370->leave($__internal_6715ed2d1661eb1499e9ff9dd0d58d1790d90cf3b105840610849a1ebd19a370_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ee8928f83d024f2e069579eb24d4b01bc7c5a73c58a798b4a0aa4a783bc1283d = $this->env->getExtension("native_profiler");
        $__internal_ee8928f83d024f2e069579eb24d4b01bc7c5a73c58a798b4a0aa4a783bc1283d->enter($__internal_ee8928f83d024f2e069579eb24d4b01bc7c5a73c58a798b4a0aa4a783bc1283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_ee8928f83d024f2e069579eb24d4b01bc7c5a73c58a798b4a0aa4a783bc1283d->leave($__internal_ee8928f83d024f2e069579eb24d4b01bc7c5a73c58a798b4a0aa4a783bc1283d_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_9b5875926c1f9492f7ba1be48766edb56599cdcb4e20ad7992376b0a719545e6 = $this->env->getExtension("native_profiler");
        $__internal_9b5875926c1f9492f7ba1be48766edb56599cdcb4e20ad7992376b0a719545e6->enter($__internal_9b5875926c1f9492f7ba1be48766edb56599cdcb4e20ad7992376b0a719545e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_9b5875926c1f9492f7ba1be48766edb56599cdcb4e20ad7992376b0a719545e6->leave($__internal_9b5875926c1f9492f7ba1be48766edb56599cdcb4e20ad7992376b0a719545e6_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_35d64af01222f41f570d2627544169af4f891850c7fa8731b524d7e343ef208e = $this->env->getExtension("native_profiler");
        $__internal_35d64af01222f41f570d2627544169af4f891850c7fa8731b524d7e343ef208e->enter($__internal_35d64af01222f41f570d2627544169af4f891850c7fa8731b524d7e343ef208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Group:actions.html.twig", "group/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_35d64af01222f41f570d2627544169af4f891850c7fa8731b524d7e343ef208e->leave($__internal_35d64af01222f41f570d2627544169af4f891850c7fa8731b524d7e343ef208e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98da4c70c196cb5ad5ff29f3aa6a45c4d5d14c64939463a1d206481539954671 = $this->env->getExtension("native_profiler");
        $__internal_98da4c70c196cb5ad5ff29f3aa6a45c4d5d14c64939463a1d206481539954671->enter($__internal_98da4c70c196cb5ad5ff29f3aa6a45c4d5d14c64939463a1d206481539954671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Group:pagination.html.twig", "group/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Group:tbliste.html.twig", "group/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
\t<!-- begin add group creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_group\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("group_new");
        echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Group:newform.html.twig", "group/index.html.twig", 36)->display($context);
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
\t\t\t\t\t<input id=\"btn-create\" type=\"submit\" value=\"";
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
\t<!-- end group creation form by modal dialog-->\t\t
\t
\t";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_98da4c70c196cb5ad5ff29f3aa6a45c4d5d14c64939463a1d206481539954671->leave($__internal_98da4c70c196cb5ad5ff29f3aa6a45c4d5d14c64939463a1d206481539954671_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ed90c7ba9089f01e3113c882c46e519ed9e65319dd25e873ebb8725e0696b5d = $this->env->getExtension("native_profiler");
        $__internal_0ed90c7ba9089f01e3113c882c46e519ed9e65319dd25e873ebb8725e0696b5d->enter($__internal_0ed90c7ba9089f01e3113c882c46e519ed9e65319dd25e873ebb8725e0696b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "\t\t<script>
\t\t\t\$(\"#btn-create\").click(function(){
\t\t\t\tif(\$(\".startdate\").val()>=\$(\".enddate\").val()){
\t\t\t\t\t\$('.modal-message').html(\"Group startdate can not be equal to or greater than the end date!\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 61
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
        // line 67
        echo $this->env->getExtension('routing')->getPath("group_pagesearch");
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
        // line 82
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
        // line 88
        echo $this->env->getExtension('routing')->getPath("group_search");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_0ed90c7ba9089f01e3113c882c46e519ed9e65319dd25e873ebb8725e0696b5d->leave($__internal_0ed90c7ba9089f01e3113c882c46e519ed9e65319dd25e873ebb8725e0696b5d_prof);

    }

    public function getTemplateName()
    {
        return "group/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 100,  273 => 99,  269 => 98,  256 => 88,  245 => 82,  227 => 67,  216 => 61,  205 => 52,  193 => 51,  180 => 41,  176 => 40,  169 => 37,  167 => 36,  163 => 35,  157 => 32,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.group'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Group:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Group:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Group:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add group creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_group" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.group'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('group_new')}}" method="post" class="style" class="form_submitt">*/
/* 				<div class="modal-message"></div>*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Group:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input id="btn-create" type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end group creation form by modal dialog-->		*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn-create").click(function(){*/
/* 				if($(".startdate").val()>=$(".enddate").val()){*/
/* 					$('.modal-message').html("Group startdate can not be equal to or greater than the end date!");*/
/* 					return false;*/
/* 				}*/
/* 				return true;*/
/* 			});*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('group_pagesearch')}}",*/
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
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('group_search')}}",*/
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
