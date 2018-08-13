<?php

/* errors/index.html.twig */
class __TwigTemplate_0dba71c190517e570d8df6bfd07ff5088959188abb91a796edcfb4db40037f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "errors/index.html.twig", 1);
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
        $__internal_8d86592a8078526fd31398dcbc00fb67bf1d6c48b1082f8f6caa7ae0281c9a84 = $this->env->getExtension("native_profiler");
        $__internal_8d86592a8078526fd31398dcbc00fb67bf1d6c48b1082f8f6caa7ae0281c9a84->enter($__internal_8d86592a8078526fd31398dcbc00fb67bf1d6c48b1082f8f6caa7ae0281c9a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "errors/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d86592a8078526fd31398dcbc00fb67bf1d6c48b1082f8f6caa7ae0281c9a84->leave($__internal_8d86592a8078526fd31398dcbc00fb67bf1d6c48b1082f8f6caa7ae0281c9a84_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_38ae24d5df54adbe28950d3cbaff4eef15ca4996140652deb0345ff8af1a1acb = $this->env->getExtension("native_profiler");
        $__internal_38ae24d5df54adbe28950d3cbaff4eef15ca4996140652deb0345ff8af1a1acb->enter($__internal_38ae24d5df54adbe28950d3cbaff4eef15ca4996140652deb0345ff8af1a1acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "errors/index.html.twig", 2)->display($context);
        
        $__internal_38ae24d5df54adbe28950d3cbaff4eef15ca4996140652deb0345ff8af1a1acb->leave($__internal_38ae24d5df54adbe28950d3cbaff4eef15ca4996140652deb0345ff8af1a1acb_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_16e83c2fbd4c488a1812d7ee3964a72e2092c9ee898182652cd48913ee09fe43 = $this->env->getExtension("native_profiler");
        $__internal_16e83c2fbd4c488a1812d7ee3964a72e2092c9ee898182652cd48913ee09fe43->enter($__internal_16e83c2fbd4c488a1812d7ee3964a72e2092c9ee898182652cd48913ee09fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_16e83c2fbd4c488a1812d7ee3964a72e2092c9ee898182652cd48913ee09fe43->leave($__internal_16e83c2fbd4c488a1812d7ee3964a72e2092c9ee898182652cd48913ee09fe43_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_971de500c359ad3191ed8a13c7ffbf0f4881b312611c82f2ecbc2697e5681467 = $this->env->getExtension("native_profiler");
        $__internal_971de500c359ad3191ed8a13c7ffbf0f4881b312611c82f2ecbc2697e5681467->enter($__internal_971de500c359ad3191ed8a13c7ffbf0f4881b312611c82f2ecbc2697e5681467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Errors list</h1>";
        
        $__internal_971de500c359ad3191ed8a13c7ffbf0f4881b312611c82f2ecbc2697e5681467->leave($__internal_971de500c359ad3191ed8a13c7ffbf0f4881b312611c82f2ecbc2697e5681467_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9de97d0fa4357dc6dadc4c0a98b01a908b4c65132ba2957d46535f74052c3535 = $this->env->getExtension("native_profiler");
        $__internal_9de97d0fa4357dc6dadc4c0a98b01a908b4c65132ba2957d46535f74052c3535->enter($__internal_9de97d0fa4357dc6dadc4c0a98b01a908b4c65132ba2957d46535f74052c3535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Errors:actions.html.twig", "errors/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_9de97d0fa4357dc6dadc4c0a98b01a908b4c65132ba2957d46535f74052c3535->leave($__internal_9de97d0fa4357dc6dadc4c0a98b01a908b4c65132ba2957d46535f74052c3535_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c4593164caf1022c1530fd74fab3e9ac35ce39144f45981d76d1ba207f6cd55 = $this->env->getExtension("native_profiler");
        $__internal_8c4593164caf1022c1530fd74fab3e9ac35ce39144f45981d76d1ba207f6cd55->enter($__internal_8c4593164caf1022c1530fd74fab3e9ac35ce39144f45981d76d1ba207f6cd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 12
            $this->loadTemplate("BoAdminBundle:Errors:pagination.html.twig", "errors/index.html.twig", 12)->display($context);
            // line 13
            echo "\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Errors:tbliste.html.twig", "errors/index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_8c4593164caf1022c1530fd74fab3e9ac35ce39144f45981d76d1ba207f6cd55->leave($__internal_8c4593164caf1022c1530fd74fab3e9ac35ce39144f45981d76d1ba207f6cd55_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01ae419180caf2b04b1afda23a5dd04275c63d61a18c67ec46a4dbb044ed2db9 = $this->env->getExtension("native_profiler");
        $__internal_01ae419180caf2b04b1afda23a5dd04275c63d61a18c67ec46a4dbb044ed2db9->enter($__internal_01ae419180caf2b04b1afda23a5dd04275c63d61a18c67ec46a4dbb044ed2db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("errors_pagesearch");
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
        // line 41
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
        // line 47
        echo $this->env->getExtension('routing')->getPath("errors_search");
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
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_01ae419180caf2b04b1afda23a5dd04275c63d61a18c67ec46a4dbb044ed2db9->leave($__internal_01ae419180caf2b04b1afda23a5dd04275c63d61a18c67ec46a4dbb044ed2db9_prof);

    }

    public function getTemplateName()
    {
        return "errors/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 57,  168 => 47,  157 => 41,  139 => 26,  130 => 19,  118 => 18,  115 => 17,  113 => 16,  110 => 15,  106 => 13,  104 => 12,  101 => 11,  98 => 10,  92 => 9,  82 => 7,  76 => 6,  64 => 5,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>Errors list</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Errors:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Errors:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Errors:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('errors_pagesearch')}}",*/
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
/* 					url: "{{ path('errors_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
