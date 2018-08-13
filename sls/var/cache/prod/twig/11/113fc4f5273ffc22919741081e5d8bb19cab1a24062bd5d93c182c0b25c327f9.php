<?php

/* message/index.html.twig */
class __TwigTemplate_c17a01920e36707526446e10bf277067f2244f8eec754221571eba5e04eb8d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "message/index.html.twig", 1);
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
        $__internal_42fdb24a4596c327c74659ea7d6ca4f62f635ea829ccda8b8bb04efcf8292f8a = $this->env->getExtension("native_profiler");
        $__internal_42fdb24a4596c327c74659ea7d6ca4f62f635ea829ccda8b8bb04efcf8292f8a->enter($__internal_42fdb24a4596c327c74659ea7d6ca4f62f635ea829ccda8b8bb04efcf8292f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "message/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42fdb24a4596c327c74659ea7d6ca4f62f635ea829ccda8b8bb04efcf8292f8a->leave($__internal_42fdb24a4596c327c74659ea7d6ca4f62f635ea829ccda8b8bb04efcf8292f8a_prof);

    }

    // line 2
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_83b170f7a9432f773ba8d811e259060a6800c36201c195dae7d640c595076a3b = $this->env->getExtension("native_profiler");
        $__internal_83b170f7a9432f773ba8d811e259060a6800c36201c195dae7d640c595076a3b->enter($__internal_83b170f7a9432f773ba8d811e259060a6800c36201c195dae7d640c595076a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:setting.html.twig", "message/index.html.twig", 2)->display($context);
        
        $__internal_83b170f7a9432f773ba8d811e259060a6800c36201c195dae7d640c595076a3b->leave($__internal_83b170f7a9432f773ba8d811e259060a6800c36201c195dae7d640c595076a3b_prof);

    }

    // line 3
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4c6acaa7917da8a4554b82e2a19d66bd432c8d45e6a2dcc0648478e41bf64451 = $this->env->getExtension("native_profiler");
        $__internal_4c6acaa7917da8a4554b82e2a19d66bd432c8d45e6a2dcc0648478e41bf64451->enter($__internal_4c6acaa7917da8a4554b82e2a19d66bd432c8d45e6a2dcc0648478e41bf64451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_4c6acaa7917da8a4554b82e2a19d66bd432c8d45e6a2dcc0648478e41bf64451->leave($__internal_4c6acaa7917da8a4554b82e2a19d66bd432c8d45e6a2dcc0648478e41bf64451_prof);

    }

    // line 5
    public function block_label($context, array $blocks = array())
    {
        $__internal_4d4062389ddc11838baef0aec560dc9d396f29f0d7ada7146d7a9bc143cac264 = $this->env->getExtension("native_profiler");
        $__internal_4d4062389ddc11838baef0aec560dc9d396f29f0d7ada7146d7a9bc143cac264->enter($__internal_4d4062389ddc11838baef0aec560dc9d396f29f0d7ada7146d7a9bc143cac264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>Message list</h1>";
        
        $__internal_4d4062389ddc11838baef0aec560dc9d396f29f0d7ada7146d7a9bc143cac264->leave($__internal_4d4062389ddc11838baef0aec560dc9d396f29f0d7ada7146d7a9bc143cac264_prof);

    }

    // line 6
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a5bbd7137223db46d01e70e2f2678bc5456e00f1e3310cd2ee69cd156cb66dc6 = $this->env->getExtension("native_profiler");
        $__internal_a5bbd7137223db46d01e70e2f2678bc5456e00f1e3310cd2ee69cd156cb66dc6->enter($__internal_a5bbd7137223db46d01e70e2f2678bc5456e00f1e3310cd2ee69cd156cb66dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 7
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Message:actions.html.twig", "message/index.html.twig", 7)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_a5bbd7137223db46d01e70e2f2678bc5456e00f1e3310cd2ee69cd156cb66dc6->leave($__internal_a5bbd7137223db46d01e70e2f2678bc5456e00f1e3310cd2ee69cd156cb66dc6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ecc53e2ca59925601533e1244b25b1cafdfcd934728e15c738e9e7e85d2e922 = $this->env->getExtension("native_profiler");
        $__internal_3ecc53e2ca59925601533e1244b25b1cafdfcd934728e15c738e9e7e85d2e922->enter($__internal_3ecc53e2ca59925601533e1244b25b1cafdfcd934728e15c738e9e7e85d2e922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 11
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 12
            $this->loadTemplate("BoAdminBundle:Message:pagination.html.twig", "message/index.html.twig", 12)->display($context);
            // line 13
            echo "\t</div>
\t";
        }
        // line 15
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdminBundle:Message:tbliste.html.twig", "message/index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_3ecc53e2ca59925601533e1244b25b1cafdfcd934728e15c738e9e7e85d2e922->leave($__internal_3ecc53e2ca59925601533e1244b25b1cafdfcd934728e15c738e9e7e85d2e922_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe69d852ab5f9af016cbd46a4b6aa4d6e241b5c5c5f0895ac62cf525542e016c = $this->env->getExtension("native_profiler");
        $__internal_fe69d852ab5f9af016cbd46a4b6aa4d6e241b5c5c5f0895ac62cf525542e016c->enter($__internal_fe69d852ab5f9af016cbd46a4b6aa4d6e241b5c5c5f0895ac62cf525542e016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("message_pagesearch");
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
\t\t\t\t\$(\".total_number\").hide();
\t\t\t\t\$(\".list_link\").show();
\t\t\t\tvar DATA = 'description=' + criteria;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("message_search");
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
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_fe69d852ab5f9af016cbd46a4b6aa4d6e241b5c5c5f0895ac62cf525542e016c->leave($__internal_fe69d852ab5f9af016cbd46a4b6aa4d6e241b5c5c5f0895ac62cf525542e016c_prof);

    }

    public function getTemplateName()
    {
        return "message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 58,  169 => 48,  157 => 41,  139 => 26,  130 => 19,  118 => 18,  115 => 17,  113 => 16,  110 => 15,  106 => 13,  104 => 12,  101 => 11,  98 => 10,  92 => 9,  82 => 7,  76 => 6,  64 => 5,  51 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:setting.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>Message list</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Message:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Message:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Message:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('message_pagesearch')}}",*/
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
/* 					url: "{{ path('message_search')}}",*/
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
