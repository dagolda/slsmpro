<?php

/* pricesreference/index.html.twig */
class __TwigTemplate_86e15c3d0dc6f4ecc2d440c505e7093f95a1da3fdee8ed3ead826745205e5712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "pricesreference/index.html.twig", 1);
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
        $__internal_9e26dd2c80052b37a25089f322ff6552fa01993bee475ce436fa18845e459abe = $this->env->getExtension("native_profiler");
        $__internal_9e26dd2c80052b37a25089f322ff6552fa01993bee475ce436fa18845e459abe->enter($__internal_9e26dd2c80052b37a25089f322ff6552fa01993bee475ce436fa18845e459abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pricesreference/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e26dd2c80052b37a25089f322ff6552fa01993bee475ce436fa18845e459abe->leave($__internal_9e26dd2c80052b37a25089f322ff6552fa01993bee475ce436fa18845e459abe_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b517b94c04806667af26d36448a366dc52fd6324240d97eb6913ded3d2e31528 = $this->env->getExtension("native_profiler");
        $__internal_b517b94c04806667af26d36448a366dc52fd6324240d97eb6913ded3d2e31528->enter($__internal_b517b94c04806667af26d36448a366dc52fd6324240d97eb6913ded3d2e31528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_b517b94c04806667af26d36448a366dc52fd6324240d97eb6913ded3d2e31528->leave($__internal_b517b94c04806667af26d36448a366dc52fd6324240d97eb6913ded3d2e31528_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_97f2d9eb758d160f3b9c56f87b3a41c26ab81831ddc19dc95eeebe8b680edaa8 = $this->env->getExtension("native_profiler");
        $__internal_97f2d9eb758d160f3b9c56f87b3a41c26ab81831ddc19dc95eeebe8b680edaa8->enter($__internal_97f2d9eb758d160f3b9c56f87b3a41c26ab81831ddc19dc95eeebe8b680edaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "pricesreference/index.html.twig", 3)->display($context);
        
        $__internal_97f2d9eb758d160f3b9c56f87b3a41c26ab81831ddc19dc95eeebe8b680edaa8->leave($__internal_97f2d9eb758d160f3b9c56f87b3a41c26ab81831ddc19dc95eeebe8b680edaa8_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_8f197e087771daec478d44e3fb5b59b69c75a371b3c681e259743d69acf41686 = $this->env->getExtension("native_profiler");
        $__internal_8f197e087771daec478d44e3fb5b59b69c75a371b3c681e259743d69acf41686->enter($__internal_8f197e087771daec478d44e3fb5b59b69c75a371b3c681e259743d69acf41686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_8f197e087771daec478d44e3fb5b59b69c75a371b3c681e259743d69acf41686->leave($__internal_8f197e087771daec478d44e3fb5b59b69c75a371b3c681e259743d69acf41686_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_d93f0241cd6c6674a3ab4cdaccd209547774657ed68dde02c52a5ad489c30f78 = $this->env->getExtension("native_profiler");
        $__internal_d93f0241cd6c6674a3ab4cdaccd209547774657ed68dde02c52a5ad489c30f78->enter($__internal_d93f0241cd6c6674a3ab4cdaccd209547774657ed68dde02c52a5ad489c30f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.pricesreference", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d93f0241cd6c6674a3ab4cdaccd209547774657ed68dde02c52a5ad489c30f78->leave($__internal_d93f0241cd6c6674a3ab4cdaccd209547774657ed68dde02c52a5ad489c30f78_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_972af6c1fa5e081efaa7874ed36ea5c8135cbc8b02ba259e9dfb4ec64861f901 = $this->env->getExtension("native_profiler");
        $__internal_972af6c1fa5e081efaa7874ed36ea5c8135cbc8b02ba259e9dfb4ec64861f901->enter($__internal_972af6c1fa5e081efaa7874ed36ea5c8135cbc8b02ba259e9dfb4ec64861f901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Pricesreference:actions.html.twig", "pricesreference/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_972af6c1fa5e081efaa7874ed36ea5c8135cbc8b02ba259e9dfb4ec64861f901->leave($__internal_972af6c1fa5e081efaa7874ed36ea5c8135cbc8b02ba259e9dfb4ec64861f901_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_27477f5b79bc1254f6e43a85afc3f248051b0cab55c2ba9508612031befbaf57 = $this->env->getExtension("native_profiler");
        $__internal_27477f5b79bc1254f6e43a85afc3f248051b0cab55c2ba9508612031befbaf57->enter($__internal_27477f5b79bc1254f6e43a85afc3f248051b0cab55c2ba9508612031befbaf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t\t<div class=\"pagination_content\">
\t\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Pricesreference:pagination.html.twig", "pricesreference/index.html.twig", 13)->display($context);
            // line 14
            echo "\t\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Pricesreference:tbliste.html.twig", "pricesreference/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
\t<!-- begin add Price guide creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_priceguide\" role=\"dialog\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.priceguide", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("pricesreference_new");
        echo "\" method=\"post\" class=\"style\" class=\"form_submitt\">
\t\t\t\t<div class=\"modal-message\"></div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 36
        $this->loadTemplate("BoAdminBundle:Pricesreference:newform.html.twig", "pricesreference/index.html.twig", 36)->display($context);
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
\t<!-- end price guide creation form by modal dialog-->\t
\t
\t";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_27477f5b79bc1254f6e43a85afc3f248051b0cab55c2ba9508612031befbaf57->leave($__internal_27477f5b79bc1254f6e43a85afc3f248051b0cab55c2ba9508612031befbaf57_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b604e90d725b12e6afdc0a91e0e08c8416ce7f846ec0943a7ba02106800511c = $this->env->getExtension("native_profiler");
        $__internal_4b604e90d725b12e6afdc0a91e0e08c8416ce7f846ec0943a7ba02106800511c->enter($__internal_4b604e90d725b12e6afdc0a91e0e08c8416ce7f846ec0943a7ba02106800511c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 54
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
        // line 60
        echo $this->env->getExtension('routing')->getPath("pricesreference_pagesearch");
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
        // line 75
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
        // line 82
        echo $this->env->getExtension('routing')->getPath("pricesreference_search");
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4b604e90d725b12e6afdc0a91e0e08c8416ce7f846ec0943a7ba02106800511c->leave($__internal_4b604e90d725b12e6afdc0a91e0e08c8416ce7f846ec0943a7ba02106800511c_prof);

    }

    public function getTemplateName()
    {
        return "pricesreference/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 94,  267 => 93,  263 => 92,  250 => 82,  238 => 75,  220 => 60,  209 => 54,  205 => 52,  193 => 51,  180 => 41,  176 => 40,  169 => 37,  167 => 36,  163 => 35,  157 => 32,  150 => 30,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.pricesreference'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Pricesreference:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Pricesreference:pagination.html.twig' %}*/
/* 		</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Pricesreference:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	*/
/* 	<!-- begin add Price guide creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_priceguide" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.priceguide'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('pricesreference_new')}}" method="post" class="style" class="form_submitt">*/
/* 				<div class="modal-message"></div>*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Pricesreference:newform.html.twig"%}*/
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
/* 	<!-- end price guide creation form by modal dialog-->	*/
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
/* 					url: "{{ path('pricesreference_pagesearch')}}",*/
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
/* 					url: "{{ path('pricesreference_search')}}",*/
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
