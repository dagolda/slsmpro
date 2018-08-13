<?php

/* holidayslist/index.html.twig */
class __TwigTemplate_3262b4aa4de02d3e7b458680294f31a8dc4c272f779fd241015c4fec645f9f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "holidayslist/index.html.twig", 1);
        $this->blocks = array(
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de02f62f0cd7d689fea2c295a9f8fda25c27d1c7eb5ec7ea7f38fac30d25783c = $this->env->getExtension("native_profiler");
        $__internal_de02f62f0cd7d689fea2c295a9f8fda25c27d1c7eb5ec7ea7f38fac30d25783c->enter($__internal_de02f62f0cd7d689fea2c295a9f8fda25c27d1c7eb5ec7ea7f38fac30d25783c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "holidayslist/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de02f62f0cd7d689fea2c295a9f8fda25c27d1c7eb5ec7ea7f38fac30d25783c->leave($__internal_de02f62f0cd7d689fea2c295a9f8fda25c27d1c7eb5ec7ea7f38fac30d25783c_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_a8b9e9ab8f21899454541c7587e50e7311f178d46939a34b6219082ea15cc725 = $this->env->getExtension("native_profiler");
        $__internal_a8b9e9ab8f21899454541c7587e50e7311f178d46939a34b6219082ea15cc725->enter($__internal_a8b9e9ab8f21899454541c7587e50e7311f178d46939a34b6219082ea15cc725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "holidayslist/index.html.twig", 2)->display($context);
        
        $__internal_a8b9e9ab8f21899454541c7587e50e7311f178d46939a34b6219082ea15cc725->leave($__internal_a8b9e9ab8f21899454541c7587e50e7311f178d46939a34b6219082ea15cc725_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ab375d798e75bcb06382ed31f2b412e0dc48a2dd8d248902f5b47ccf46fe3181 = $this->env->getExtension("native_profiler");
        $__internal_ab375d798e75bcb06382ed31f2b412e0dc48a2dd8d248902f5b47ccf46fe3181->enter($__internal_ab375d798e75bcb06382ed31f2b412e0dc48a2dd8d248902f5b47ccf46fe3181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_ab375d798e75bcb06382ed31f2b412e0dc48a2dd8d248902f5b47ccf46fe3181->leave($__internal_ab375d798e75bcb06382ed31f2b412e0dc48a2dd8d248902f5b47ccf46fe3181_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_c5c33a19201c506115089f64697e473a1b58c9ad4ffe9fb0b378411ef11ac23a = $this->env->getExtension("native_profiler");
        $__internal_c5c33a19201c506115089f64697e473a1b58c9ad4ffe9fb0b378411ef11ac23a->enter($__internal_c5c33a19201c506115089f64697e473a1b58c9ad4ffe9fb0b378411ef11ac23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Holidayslist list</h1>";
        
        $__internal_c5c33a19201c506115089f64697e473a1b58c9ad4ffe9fb0b378411ef11ac23a->leave($__internal_c5c33a19201c506115089f64697e473a1b58c9ad4ffe9fb0b378411ef11ac23a_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_721de975fb6350100dc54c75d743db2f4931d9c9f19e323e20ffa0ba614d5d75 = $this->env->getExtension("native_profiler");
        $__internal_721de975fb6350100dc54c75d743db2f4931d9c9f19e323e20ffa0ba614d5d75->enter($__internal_721de975fb6350100dc54c75d743db2f4931d9c9f19e323e20ffa0ba614d5d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Holidayslist:actions.html.twig", "holidayslist/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_721de975fb6350100dc54c75d743db2f4931d9c9f19e323e20ffa0ba614d5d75->leave($__internal_721de975fb6350100dc54c75d743db2f4931d9c9f19e323e20ffa0ba614d5d75_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_316f45a86ac61de34f3f9dc098114d4f7b0372517c43c5c4eb4c29cb934ec7d8 = $this->env->getExtension("native_profiler");
        $__internal_316f45a86ac61de34f3f9dc098114d4f7b0372517c43c5c4eb4c29cb934ec7d8->enter($__internal_316f45a86ac61de34f3f9dc098114d4f7b0372517c43c5c4eb4c29cb934ec7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 12
            $this->loadTemplate("BoAdminBundle:Holidayslist:pagination.html.twig", "holidayslist/index.html.twig", 12)->display($context);
            // line 13
            echo "\t\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Holidayslist:tbliste.html.twig", "holidayslist/index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>

\t<!-- begin add aholidayslist form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_holiday\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.holiday", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-message\"></div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("holidayslist_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 35
        $this->loadTemplate("BoAdminBundle:Holidayslist:editform.html.twig", "holidayslist/index.html.twig", 35)->display($context);
        // line 36
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end add aholidayslist form by modal dialog-->
\t
\t";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_316f45a86ac61de34f3f9dc098114d4f7b0372517c43c5c4eb4c29cb934ec7d8->leave($__internal_316f45a86ac61de34f3f9dc098114d4f7b0372517c43c5c4eb4c29cb934ec7d8_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_afe4f267c536f1e8503aeab63d948d94519f6b4e674b909bc9568206fc2ecbb3 = $this->env->getExtension("native_profiler");
        $__internal_afe4f267c536f1e8503aeab63d948d94519f6b4e674b909bc9568206fc2ecbb3->enter($__internal_afe4f267c536f1e8503aeab63d948d94519f6b4e674b909bc9568206fc2ecbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'page=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("holidayslist_pagesearch");
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
        // line 73
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
        // line 80
        echo $this->env->getExtension('routing')->getPath("holidayslist_search");
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_afe4f267c536f1e8503aeab63d948d94519f6b4e674b909bc9568206fc2ecbb3->leave($__internal_afe4f267c536f1e8503aeab63d948d94519f6b4e674b909bc9568206fc2ecbb3_prof);

    }

    public function getTemplateName()
    {
        return "holidayslist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 92,  240 => 91,  236 => 90,  223 => 80,  211 => 73,  193 => 58,  184 => 51,  172 => 50,  159 => 40,  155 => 39,  148 => 36,  146 => 35,  142 => 34,  137 => 32,  129 => 29,  115 => 17,  113 => 16,  110 => 15,  106 => 13,  104 => 12,  101 => 11,  98 => 10,  92 => 9,  82 => 7,  76 => 6,  64 => 5,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>Holidayslist list</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Holidayslist:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Holidayslist:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Holidayslist:tbliste.html.twig"%}*/
/* 	</div>*/
/* */
/* 	<!-- begin add aholidayslist form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_holiday" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.holiday'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-message"></div>*/
/* 			<form action="{{ path('holidayslist_new')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Holidayslist:editform.html.twig"%}*/
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
/* 	<!-- end add aholidayslist form by modal dialog-->*/
/* 	*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'page=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('holidayslist_pagesearch')}}",*/
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
/* 					url: "{{ path('holidayslist_search')}}",*/
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
