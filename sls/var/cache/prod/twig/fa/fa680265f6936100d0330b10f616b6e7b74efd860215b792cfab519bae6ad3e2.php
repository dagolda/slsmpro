<?php

/* securitycote/index.html.twig */
class __TwigTemplate_f16191e838912011960d89a5b09cca99180146fb89bd0ca0e9ef8fa65077e0ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "securitycote/index.html.twig", 1);
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc0800660a56f7256ab20aab618739ffb36dba61eb2dacc69c1e173026780322 = $this->env->getExtension("native_profiler");
        $__internal_cc0800660a56f7256ab20aab618739ffb36dba61eb2dacc69c1e173026780322->enter($__internal_cc0800660a56f7256ab20aab618739ffb36dba61eb2dacc69c1e173026780322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "securitycote/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0800660a56f7256ab20aab618739ffb36dba61eb2dacc69c1e173026780322->leave($__internal_cc0800660a56f7256ab20aab618739ffb36dba61eb2dacc69c1e173026780322_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e05307abee6e9fe59a66e657c67f7a6f32428485ad201535c52964b4de3ddafe = $this->env->getExtension("native_profiler");
        $__internal_e05307abee6e9fe59a66e657c67f7a6f32428485ad201535c52964b4de3ddafe->enter($__internal_e05307abee6e9fe59a66e657c67f7a6f32428485ad201535c52964b4de3ddafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "securitycote/index.html.twig", 2)->display($context);
        
        $__internal_e05307abee6e9fe59a66e657c67f7a6f32428485ad201535c52964b4de3ddafe->leave($__internal_e05307abee6e9fe59a66e657c67f7a6f32428485ad201535c52964b4de3ddafe_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_7de7603dd0903655b4a4e15737b4d03f298b6634666071addcc22c3bb2f849de = $this->env->getExtension("native_profiler");
        $__internal_7de7603dd0903655b4a4e15737b4d03f298b6634666071addcc22c3bb2f849de->enter($__internal_7de7603dd0903655b4a4e15737b4d03f298b6634666071addcc22c3bb2f849de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_7de7603dd0903655b4a4e15737b4d03f298b6634666071addcc22c3bb2f849de->leave($__internal_7de7603dd0903655b4a4e15737b4d03f298b6634666071addcc22c3bb2f849de_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_83063833617b20c051aac4d165c9c7cc3b2def5bca5e1cd639eb5dd47c29fcec = $this->env->getExtension("native_profiler");
        $__internal_83063833617b20c051aac4d165c9c7cc3b2def5bca5e1cd639eb5dd47c29fcec->enter($__internal_83063833617b20c051aac4d165c9c7cc3b2def5bca5e1cd639eb5dd47c29fcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_83063833617b20c051aac4d165c9c7cc3b2def5bca5e1cd639eb5dd47c29fcec->leave($__internal_83063833617b20c051aac4d165c9c7cc3b2def5bca5e1cd639eb5dd47c29fcec_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_4dd88a24740c590646db6c5514ce1de247060646c85d9984eaacc16103b45094 = $this->env->getExtension("native_profiler");
        $__internal_4dd88a24740c590646db6c5514ce1de247060646c85d9984eaacc16103b45094->enter($__internal_4dd88a24740c590646db6c5514ce1de247060646c85d9984eaacc16103b45094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Securitycote:actions.html.twig", "securitycote/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_4dd88a24740c590646db6c5514ce1de247060646c85d9984eaacc16103b45094->leave($__internal_4dd88a24740c590646db6c5514ce1de247060646c85d9984eaacc16103b45094_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d4ccd8bfc41ce842bf3e5a5bb8a043251a359d5c2e33a3c7974d03e35aad6c0 = $this->env->getExtension("native_profiler");
        $__internal_1d4ccd8bfc41ce842bf3e5a5bb8a043251a359d5c2e33a3c7974d03e35aad6c0->enter($__internal_1d4ccd8bfc41ce842bf3e5a5bb8a043251a359d5c2e33a3c7974d03e35aad6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 12
            $this->loadTemplate("BoAdminBundle:Securitycote:pagination.html.twig", "securitycote/index.html.twig", 12)->display($context);
            // line 13
            echo "\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Securitycote:tbliste.html.twig", "securitycote/index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_sc\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t  <!-- Modal content-->
\t\t\t  <div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t  <h4 class=\"modal-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.clearance", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("securitycote_new");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 32
        $this->loadTemplate("BoAdminBundle:Securitycote:modalform.html.twig", "securitycote/index.html.twig", 32)->display($context);
        // line 33
        echo "\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t</form>\t
\t\t\t  </div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_1d4ccd8bfc41ce842bf3e5a5bb8a043251a359d5c2e33a3c7974d03e35aad6c0->leave($__internal_1d4ccd8bfc41ce842bf3e5a5bb8a043251a359d5c2e33a3c7974d03e35aad6c0_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9702ff76f1afdbebe9e18bbc2b3af6f4d61e9c89d28f42b8574d9efac7dbe06a = $this->env->getExtension("native_profiler");
        $__internal_9702ff76f1afdbebe9e18bbc2b3af6f4d61e9c89d28f42b8574d9efac7dbe06a->enter($__internal_9702ff76f1afdbebe9e18bbc2b3af6f4d61e9c89d28f42b8574d9efac7dbe06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("securitycote_pagesearch");
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
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 67
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
        // line 73
        echo $this->env->getExtension('routing')->getPath("securitycote_search");
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script-->
\t";
        
        $__internal_9702ff76f1afdbebe9e18bbc2b3af6f4d61e9c89d28f42b8574d9efac7dbe06a->leave($__internal_9702ff76f1afdbebe9e18bbc2b3af6f4d61e9c89d28f42b8574d9efac7dbe06a_prof);

    }

    public function getTemplateName()
    {
        return "securitycote/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 85,  234 => 84,  230 => 83,  217 => 73,  206 => 67,  188 => 52,  179 => 45,  167 => 44,  156 => 36,  149 => 33,  147 => 32,  143 => 31,  138 => 29,  131 => 27,  119 => 17,  117 => 16,  114 => 15,  110 => 13,  108 => 12,  105 => 11,  102 => 10,  96 => 9,  86 => 7,  80 => 6,  64 => 5,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.clearance'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Securitycote:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Securitycote:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Securitycote:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_sc" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 			  <!-- Modal content-->*/
/* 			  <div class="modal-content">*/
/* 				<div class="modal-header">*/
/* 				  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 				  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'entity.clearance'|trans([],'BoAdminBundle')}}</h4>*/
/* 				</div>*/
/* 				<form action="{{ path('securitycote_new') }}" method="post" class="style">*/
/* 					<div class="modal-body">*/
/* 						{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Securitycote:modalform.html.twig"%}*/
/* 						{{ form_rest(form) }}*/
/* 					</div>*/
/* 					<div class="modal-footer">*/
/* 						<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 					</div>*/
/* 				</form>	*/
/* 			  </div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('securitycote_pagesearch')}}",*/
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
/* 				var criteria = $("#inp-search").val();	*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('securitycote_search')}}",*/
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
/* 		<!--script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script-->*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
