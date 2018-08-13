<?php

/* local/index.html.twig */
class __TwigTemplate_ec1fea1cc3addc8a4b230f140338eba24dc5f55e9bda729593e81ddc6741e101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "local/index.html.twig", 1);
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
        $__internal_de20e4eed693cfd3fcbe5f167fe0e8c8211da49646052efb2e98abb2713cf54f = $this->env->getExtension("native_profiler");
        $__internal_de20e4eed693cfd3fcbe5f167fe0e8c8211da49646052efb2e98abb2713cf54f->enter($__internal_de20e4eed693cfd3fcbe5f167fe0e8c8211da49646052efb2e98abb2713cf54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "local/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de20e4eed693cfd3fcbe5f167fe0e8c8211da49646052efb2e98abb2713cf54f->leave($__internal_de20e4eed693cfd3fcbe5f167fe0e8c8211da49646052efb2e98abb2713cf54f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b621e0ed6255cc7556590cc873283efdcecf5f28f341a5a346bf874ea7a6fc4c = $this->env->getExtension("native_profiler");
        $__internal_b621e0ed6255cc7556590cc873283efdcecf5f28f341a5a346bf874ea7a6fc4c->enter($__internal_b621e0ed6255cc7556590cc873283efdcecf5f28f341a5a346bf874ea7a6fc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b621e0ed6255cc7556590cc873283efdcecf5f28f341a5a346bf874ea7a6fc4c->leave($__internal_b621e0ed6255cc7556590cc873283efdcecf5f28f341a5a346bf874ea7a6fc4c_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_3237e269fee4fe137212c06013748c7e8302ff2554ac1fdac25e77afacb748a2 = $this->env->getExtension("native_profiler");
        $__internal_3237e269fee4fe137212c06013748c7e8302ff2554ac1fdac25e77afacb748a2->enter($__internal_3237e269fee4fe137212c06013748c7e8302ff2554ac1fdac25e77afacb748a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:local.html.twig", "local/index.html.twig", 3)->display($context);
        
        $__internal_3237e269fee4fe137212c06013748c7e8302ff2554ac1fdac25e77afacb748a2->leave($__internal_3237e269fee4fe137212c06013748c7e8302ff2554ac1fdac25e77afacb748a2_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4e2883240cc9a514c54c1b94079b8ded25aa8dae70e887b53a668a0bae75b89c = $this->env->getExtension("native_profiler");
        $__internal_4e2883240cc9a514c54c1b94079b8ded25aa8dae70e887b53a668a0bae75b89c->enter($__internal_4e2883240cc9a514c54c1b94079b8ded25aa8dae70e887b53a668a0bae75b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_4e2883240cc9a514c54c1b94079b8ded25aa8dae70e887b53a668a0bae75b89c->leave($__internal_4e2883240cc9a514c54c1b94079b8ded25aa8dae70e887b53a668a0bae75b89c_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_a75f9b1ac8d5825570098605c740d5d4fab6ee7303897b7d91f9b2fb1b87c728 = $this->env->getExtension("native_profiler");
        $__internal_a75f9b1ac8d5825570098605c740d5d4fab6ee7303897b7d91f9b2fb1b87c728->enter($__internal_a75f9b1ac8d5825570098605c740d5d4fab6ee7303897b7d91f9b2fb1b87c728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_a75f9b1ac8d5825570098605c740d5d4fab6ee7303897b7d91f9b2fb1b87c728->leave($__internal_a75f9b1ac8d5825570098605c740d5d4fab6ee7303897b7d91f9b2fb1b87c728_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_69881a846b100abb1abcbba68012e3a38265494ba1d26a6a4767ea72bb3414b7 = $this->env->getExtension("native_profiler");
        $__internal_69881a846b100abb1abcbba68012e3a38265494ba1d26a6a4767ea72bb3414b7->enter($__internal_69881a846b100abb1abcbba68012e3a38265494ba1d26a6a4767ea72bb3414b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Local:actions.html.twig", "local/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_69881a846b100abb1abcbba68012e3a38265494ba1d26a6a4767ea72bb3414b7->leave($__internal_69881a846b100abb1abcbba68012e3a38265494ba1d26a6a4767ea72bb3414b7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9129537499a33fd37e72a750536b3d181a23561bb3a8ff5c5efee6b07fef457 = $this->env->getExtension("native_profiler");
        $__internal_e9129537499a33fd37e72a750536b3d181a23561bb3a8ff5c5efee6b07fef457->enter($__internal_e9129537499a33fd37e72a750536b3d181a23561bb3a8ff5c5efee6b07fef457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"pagination_content\">
\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Local:pagination.html.twig", "local/index.html.twig", 12)->display($context);
        // line 13
        echo "\t</div>
\t<div id=\"content-liste\">
\t\t";
        // line 15
        $this->loadTemplate("BoAdminBundle:Local:tbliste.html.twig", "local/index.html.twig", 15)->display($context);
        // line 16
        echo "\t</div>
\t
\t<!-- begin add local creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_local\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-message\"></div>
\t\t\t<form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("local_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 34
        $this->loadTemplate("BoAdminBundle:Local:modalform.html.twig", "local/index.html.twig", 34)->display($context);
        // line 35
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\" class=\"create_local\"/>
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end local creation form by modal dialog-->\t
\t
\t";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e9129537499a33fd37e72a750536b3d181a23561bb3a8ff5c5efee6b07fef457->leave($__internal_e9129537499a33fd37e72a750536b3d181a23561bb3a8ff5c5efee6b07fef457_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9091fe27ba45ed738f9b34408efc1c6fcd2404eac8de4642e7adbac9284fc001 = $this->env->getExtension("native_profiler");
        $__internal_9091fe27ba45ed738f9b34408efc1c6fcd2404eac8de4642e7adbac9284fc001->enter($__internal_9091fe27ba45ed738f9b34408efc1c6fcd2404eac8de4642e7adbac9284fc001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("local_pagesearch");
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
        // line 72
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
        // line 78
        echo $this->env->getExtension('routing')->getPath("local_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idcampus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idcampus option:selected\");
\t\t\t\tcampus=str.val();
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar DATA = 'data=' +campus+\":\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("local_extrasearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_9091fe27ba45ed738f9b34408efc1c6fcd2404eac8de4642e7adbac9284fc001->leave($__internal_9091fe27ba45ed738f9b34408efc1c6fcd2404eac8de4642e7adbac9284fc001_prof);

    }

    public function getTemplateName()
    {
        return "local/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 126,  306 => 125,  302 => 124,  289 => 114,  276 => 106,  263 => 96,  250 => 88,  237 => 78,  226 => 72,  208 => 57,  199 => 50,  187 => 49,  174 => 39,  170 => 38,  163 => 35,  161 => 34,  157 => 33,  152 => 31,  144 => 28,  130 => 16,  128 => 15,  124 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:local.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'label.room'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Local:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Local:pagination.html.twig' %}*/
/* 	</div>*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Local:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add local creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_local" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.room'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-message"></div>*/
/* 			<form action="{{ path('local_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Local:modalform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}" class="create_local"/>*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end local creation form by modal dialog-->	*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_pagesearch')}}",*/
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
/* 					url: "{{ path('local_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idcampus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idcampus option:selected");*/
/* 				campus=str.val();*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var DATA = 'data=' +campus+":"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('local_extrasearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
