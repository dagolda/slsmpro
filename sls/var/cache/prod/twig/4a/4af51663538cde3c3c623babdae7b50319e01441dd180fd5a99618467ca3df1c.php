<?php

/* agenda/index.html.twig */
class __TwigTemplate_5c54cb6268ca4b289db0e88e56cd6f7ac06d5852f1af79d031f4531bdbf17abc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "agenda/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
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
        $__internal_44560f74da08bbe889ae3eb2ebecdd53e11f8e5f4b021687dfa099da0b91a181 = $this->env->getExtension("native_profiler");
        $__internal_44560f74da08bbe889ae3eb2ebecdd53e11f8e5f4b021687dfa099da0b91a181->enter($__internal_44560f74da08bbe889ae3eb2ebecdd53e11f8e5f4b021687dfa099da0b91a181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44560f74da08bbe889ae3eb2ebecdd53e11f8e5f4b021687dfa099da0b91a181->leave($__internal_44560f74da08bbe889ae3eb2ebecdd53e11f8e5f4b021687dfa099da0b91a181_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a1118748cf3de08f2a7c6766b3f68e71ec6d97729b7cf94e41bb368887f2856 = $this->env->getExtension("native_profiler");
        $__internal_3a1118748cf3de08f2a7c6766b3f68e71ec6d97729b7cf94e41bb368887f2856->enter($__internal_3a1118748cf3de08f2a7c6766b3f68e71ec6d97729b7cf94e41bb368887f2856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_3a1118748cf3de08f2a7c6766b3f68e71ec6d97729b7cf94e41bb368887f2856->leave($__internal_3a1118748cf3de08f2a7c6766b3f68e71ec6d97729b7cf94e41bb368887f2856_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7cd204ddf1f4136aa63100274be3c6066b9cefb657299fc6e8cbddeb7bc754bd = $this->env->getExtension("native_profiler");
        $__internal_7cd204ddf1f4136aa63100274be3c6066b9cefb657299fc6e8cbddeb7bc754bd->enter($__internal_7cd204ddf1f4136aa63100274be3c6066b9cefb657299fc6e8cbddeb7bc754bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "agenda/index.html.twig", 3)->display($context);
        
        $__internal_7cd204ddf1f4136aa63100274be3c6066b9cefb657299fc6e8cbddeb7bc754bd->leave($__internal_7cd204ddf1f4136aa63100274be3c6066b9cefb657299fc6e8cbddeb7bc754bd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_cf57784070dc8911f063e6eefdd197b91ae4b7c92546f589ad28fd267c4ca8e9 = $this->env->getExtension("native_profiler");
        $__internal_cf57784070dc8911f063e6eefdd197b91ae4b7c92546f589ad28fd267c4ca8e9->enter($__internal_cf57784070dc8911f063e6eefdd197b91ae4b7c92546f589ad28fd267c4ca8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        
        $__internal_cf57784070dc8911f063e6eefdd197b91ae4b7c92546f589ad28fd267c4ca8e9->leave($__internal_cf57784070dc8911f063e6eefdd197b91ae4b7c92546f589ad28fd267c4ca8e9_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_db296e2d1d910b0c53cd15c508b02fbb83b258ef481ba0ba94ed000bd4b96f8c = $this->env->getExtension("native_profiler");
        $__internal_db296e2d1d910b0c53cd15c508b02fbb83b258ef481ba0ba94ed000bd4b96f8c->enter($__internal_db296e2d1d910b0c53cd15c508b02fbb83b258ef481ba0ba94ed000bd4b96f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_db296e2d1d910b0c53cd15c508b02fbb83b258ef481ba0ba94ed000bd4b96f8c->leave($__internal_db296e2d1d910b0c53cd15c508b02fbb83b258ef481ba0ba94ed000bd4b96f8c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fac20aa386e7e6da43dc7f5639c6457739cca16e896ad450eae36039754fdec9 = $this->env->getExtension("native_profiler");
        $__internal_fac20aa386e7e6da43dc7f5639c6457739cca16e896ad450eae36039754fdec9->enter($__internal_fac20aa386e7e6da43dc7f5639c6457739cca16e896ad450eae36039754fdec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div id=\"body-content\">
\t\t";
        // line 8
        $this->loadTemplate("BoAdminBundle:Agenda:actions2.html.twig", "agenda/index.html.twig", 8)->display($context);
        // line 9
        echo "\t\t<div class=\"pagination_content\">
\t\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Agenda:pagination.html.twig", "agenda/index.html.twig", 10)->display($context);
        // line 11
        echo "\t\t</div>
\t\t<div id=\"content-liste\">
\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Agenda:tbliste2.html.twig", "agenda/index.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</div>
\t</div>

\t<!-- begin avanced search form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"advanced_search\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advanced.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("agenda_advanced_search");
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 31
        $this->loadTemplate("BoAdminBundle:Agenda:advancedsearch.html.twig", "agenda/index.html.twig", 31)->display($context);
        // line 32
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.validate", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end avanced search form by modal dialog-->

\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_fac20aa386e7e6da43dc7f5639c6457739cca16e896ad450eae36039754fdec9->leave($__internal_fac20aa386e7e6da43dc7f5639c6457739cca16e896ad450eae36039754fdec9_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0c13f7f1ba4d26d87ebb82b726f944239dd1b758b5e658d56c06eaa5ccb4f88 = $this->env->getExtension("native_profiler");
        $__internal_f0c13f7f1ba4d26d87ebb82b726f944239dd1b758b5e658d56c06eaa5ccb4f88->enter($__internal_f0c13f7f1ba4d26d87ebb82b726f944239dd1b758b5e658d56c06eaa5ccb4f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'page=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("agenda_pagesearch");
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
        // line 68
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
        // line 75
        echo $this->env->getExtension('routing')->getPath("agenda_search2");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t\t\t
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_f0c13f7f1ba4d26d87ebb82b726f944239dd1b758b5e658d56c06eaa5ccb4f88->leave($__internal_f0c13f7f1ba4d26d87ebb82b726f944239dd1b758b5e658d56c06eaa5ccb4f88_prof);

    }

    public function getTemplateName()
    {
        return "agenda/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 87,  234 => 86,  230 => 85,  217 => 75,  205 => 68,  187 => 53,  176 => 47,  172 => 45,  160 => 44,  147 => 34,  143 => 32,  141 => 31,  136 => 29,  131 => 27,  116 => 14,  114 => 13,  110 => 11,  108 => 10,  105 => 9,  103 => 8,  100 => 7,  94 => 6,  78 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'label.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}*/
/* {% block nav %}{% endblock %}*/
/* {% block label %}<h1>{{'label.schedule'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Agenda:actions2.html.twig"%}*/
/* 		<div class="pagination_content">*/
/* 			{% include 'BoAdminBundle:Agenda:pagination.html.twig' %}*/
/* 		</div>*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Agenda:tbliste2.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- begin avanced search form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="advanced_search" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.advanced.search'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<form action="{{ path('agenda_advanced_search')}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{%include "BoAdminBundle:Agenda:advancedsearch.html.twig"%}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<input type="submit" value="{{'action.validate'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end avanced search form by modal dialog-->*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'page=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('agenda_pagesearch')}}",*/
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
/* 					url: "{{ path('agenda_search2')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});			*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
