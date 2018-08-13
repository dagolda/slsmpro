<?php

/* client/index.html.twig */
class __TwigTemplate_979f3b8f93789f3e097b1b6408b55dc72cfdf2d83cf21a65ee1269ed19fb7613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "client/index.html.twig", 1);
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
        $__internal_4dbfc6c9da5462bcc4adf33dbc77f9850dfed8b8f8edd07aac829e8b7ea415e5 = $this->env->getExtension("native_profiler");
        $__internal_4dbfc6c9da5462bcc4adf33dbc77f9850dfed8b8f8edd07aac829e8b7ea415e5->enter($__internal_4dbfc6c9da5462bcc4adf33dbc77f9850dfed8b8f8edd07aac829e8b7ea415e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbfc6c9da5462bcc4adf33dbc77f9850dfed8b8f8edd07aac829e8b7ea415e5->leave($__internal_4dbfc6c9da5462bcc4adf33dbc77f9850dfed8b8f8edd07aac829e8b7ea415e5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ecd4c7bf22420896c71884e690a080297f99f8a97fc239290637cd7c7ce36ce = $this->env->getExtension("native_profiler");
        $__internal_0ecd4c7bf22420896c71884e690a080297f99f8a97fc239290637cd7c7ce36ce->enter($__internal_0ecd4c7bf22420896c71884e690a080297f99f8a97fc239290637cd7c7ce36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_0ecd4c7bf22420896c71884e690a080297f99f8a97fc239290637cd7c7ce36ce->leave($__internal_0ecd4c7bf22420896c71884e690a080297f99f8a97fc239290637cd7c7ce36ce_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a5cd4630b315d6a4370aa202b801226717bc512888b3278455d39d837d41cfe1 = $this->env->getExtension("native_profiler");
        $__internal_a5cd4630b315d6a4370aa202b801226717bc512888b3278455d39d837d41cfe1->enter($__internal_a5cd4630b315d6a4370aa202b801226717bc512888b3278455d39d837d41cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "client/index.html.twig", 3)->display($context);
        
        $__internal_a5cd4630b315d6a4370aa202b801226717bc512888b3278455d39d837d41cfe1->leave($__internal_a5cd4630b315d6a4370aa202b801226717bc512888b3278455d39d837d41cfe1_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7b15d883f841d789b1f6a926129de71bade061513106e4ff4b0be86f73b88c21 = $this->env->getExtension("native_profiler");
        $__internal_7b15d883f841d789b1f6a926129de71bade061513106e4ff4b0be86f73b88c21->enter($__internal_7b15d883f841d789b1f6a926129de71bade061513106e4ff4b0be86f73b88c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_7b15d883f841d789b1f6a926129de71bade061513106e4ff4b0be86f73b88c21->leave($__internal_7b15d883f841d789b1f6a926129de71bade061513106e4ff4b0be86f73b88c21_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_6f373bb9d871a409cc32f1250af25203271f308a0f57beb1a0e81092299ca266 = $this->env->getExtension("native_profiler");
        $__internal_6f373bb9d871a409cc32f1250af25203271f308a0f57beb1a0e81092299ca266->enter($__internal_6f373bb9d871a409cc32f1250af25203271f308a0f57beb1a0e81092299ca266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_6f373bb9d871a409cc32f1250af25203271f308a0f57beb1a0e81092299ca266->leave($__internal_6f373bb9d871a409cc32f1250af25203271f308a0f57beb1a0e81092299ca266_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_52e15f3625faef2ff115c73e817212b696f5de55866f83c70c874a378395cd67 = $this->env->getExtension("native_profiler");
        $__internal_52e15f3625faef2ff115c73e817212b696f5de55866f83c70c874a378395cd67->enter($__internal_52e15f3625faef2ff115c73e817212b696f5de55866f83c70c874a378395cd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Client:actions.html.twig", "client/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_52e15f3625faef2ff115c73e817212b696f5de55866f83c70c874a378395cd67->leave($__internal_52e15f3625faef2ff115c73e817212b696f5de55866f83c70c874a378395cd67_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c8bcc832bd77eb1741bfbb936fdda80f4ff10e4b9e5d80ff602017fe39e8289 = $this->env->getExtension("native_profiler");
        $__internal_2c8bcc832bd77eb1741bfbb936fdda80f4ff10e4b9e5d80ff602017fe39e8289->enter($__internal_2c8bcc832bd77eb1741bfbb936fdda80f4ff10e4b9e5d80ff602017fe39e8289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Client:tbliste.html.twig", "client/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t
\t<!-- begin add client creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_client\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.client", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 31
        $this->loadTemplate("BoAdminBundle:Client:newform.html.twig", "client/index.html.twig", 31)->display($context);
        // line 32
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input id=\"btn-create\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end client creation form by modal dialog-->\t
\t
\t";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_2c8bcc832bd77eb1741bfbb936fdda80f4ff10e4b9e5d80ff602017fe39e8289->leave($__internal_2c8bcc832bd77eb1741bfbb936fdda80f4ff10e4b9e5d80ff602017fe39e8289_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d26e8e8e3a58b9aaf8aa2d46c247271471f3d38344ce31aa455409700c9f3d61 = $this->env->getExtension("native_profiler");
        $__internal_d26e8e8e3a58b9aaf8aa2d46c247271471f3d38344ce31aa455409700c9f3d61->enter($__internal_d26e8e8e3a58b9aaf8aa2d46c247271471f3d38344ce31aa455409700c9f3d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 49
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
        // line 55
        echo $this->env->getExtension('routing')->getPath("client_pagesearch");
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
        // line 70
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
        // line 77
        echo $this->env->getExtension('routing')->getPath("client_search");
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_d26e8e8e3a58b9aaf8aa2d46c247271471f3d38344ce31aa455409700c9f3d61->leave($__internal_d26e8e8e3a58b9aaf8aa2d46c247271471f3d38344ce31aa455409700c9f3d61_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 89,  253 => 88,  249 => 87,  236 => 77,  224 => 70,  206 => 55,  195 => 49,  191 => 47,  179 => 46,  166 => 36,  162 => 35,  155 => 32,  153 => 31,  149 => 30,  143 => 27,  138 => 25,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.customer'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Client:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Client:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add client creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_client" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'title.add.client'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('client_new')}}" method="post" class="style" class="form_submitt">*/
/* 				<div class="modal-message"></div>*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Client:newform.html.twig"%}*/
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
/* 	<!-- end client creation form by modal dialog-->	*/
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
/* 					url: "{{ path('client_pagesearch')}}",*/
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
/* 					url: "{{ path('client_search')}}",*/
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
