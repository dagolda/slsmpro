<?php

/* user/index.html.twig */
class __TwigTemplate_9f4ea04ab6ec167c36e3891de360f56d49b0f6e17eb28e1c1fded16b0cbc1f29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "user/index.html.twig", 1);
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
        $__internal_7bbe00f8c38486577711b6289c2b89ef25db5c7cd023cf2173b51e2550e14222 = $this->env->getExtension("native_profiler");
        $__internal_7bbe00f8c38486577711b6289c2b89ef25db5c7cd023cf2173b51e2550e14222->enter($__internal_7bbe00f8c38486577711b6289c2b89ef25db5c7cd023cf2173b51e2550e14222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbe00f8c38486577711b6289c2b89ef25db5c7cd023cf2173b51e2550e14222->leave($__internal_7bbe00f8c38486577711b6289c2b89ef25db5c7cd023cf2173b51e2550e14222_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6902438266133c775eaaac89d3c5b96191752626ae19b1146afb126f4514becb = $this->env->getExtension("native_profiler");
        $__internal_6902438266133c775eaaac89d3c5b96191752626ae19b1146afb126f4514becb->enter($__internal_6902438266133c775eaaac89d3c5b96191752626ae19b1146afb126f4514becb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_6902438266133c775eaaac89d3c5b96191752626ae19b1146afb126f4514becb->leave($__internal_6902438266133c775eaaac89d3c5b96191752626ae19b1146afb126f4514becb_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_242a1b520f0770dba952ec9d2f1104925985d856a98c5b5377407b97f50800e3 = $this->env->getExtension("native_profiler");
        $__internal_242a1b520f0770dba952ec9d2f1104925985d856a98c5b5377407b97f50800e3->enter($__internal_242a1b520f0770dba952ec9d2f1104925985d856a98c5b5377407b97f50800e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tools.html.twig", "user/index.html.twig", 3)->display($context);
        
        $__internal_242a1b520f0770dba952ec9d2f1104925985d856a98c5b5377407b97f50800e3->leave($__internal_242a1b520f0770dba952ec9d2f1104925985d856a98c5b5377407b97f50800e3_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bfd36d296f0c6bece9f60ed0687a604565de9b431da9d7490aae60c94888e4a3 = $this->env->getExtension("native_profiler");
        $__internal_bfd36d296f0c6bece9f60ed0687a604565de9b431da9d7490aae60c94888e4a3->enter($__internal_bfd36d296f0c6bece9f60ed0687a604565de9b431da9d7490aae60c94888e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_bfd36d296f0c6bece9f60ed0687a604565de9b431da9d7490aae60c94888e4a3->leave($__internal_bfd36d296f0c6bece9f60ed0687a604565de9b431da9d7490aae60c94888e4a3_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_5b5d7e361337324515bb166ad0c3a78f3559fa57d1716860561cfc82f5ac581f = $this->env->getExtension("native_profiler");
        $__internal_5b5d7e361337324515bb166ad0c3a78f3559fa57d1716860561cfc82f5ac581f->enter($__internal_5b5d7e361337324515bb166ad0c3a78f3559fa57d1716860561cfc82f5ac581f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.user", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5b5d7e361337324515bb166ad0c3a78f3559fa57d1716860561cfc82f5ac581f->leave($__internal_5b5d7e361337324515bb166ad0c3a78f3559fa57d1716860561cfc82f5ac581f_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_73fec1f09352b704a76d025c485905389981259e16550575cb31d0a9bfcc9aa7 = $this->env->getExtension("native_profiler");
        $__internal_73fec1f09352b704a76d025c485905389981259e16550575cb31d0a9bfcc9aa7->enter($__internal_73fec1f09352b704a76d025c485905389981259e16550575cb31d0a9bfcc9aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoUserBundle:User:actions.html.twig", "user/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_73fec1f09352b704a76d025c485905389981259e16550575cb31d0a9bfcc9aa7->leave($__internal_73fec1f09352b704a76d025c485905389981259e16550575cb31d0a9bfcc9aa7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e50438dea21e1940262042971006d58d2dce9f03ba85a3ebf11cd0324d5cdfcb = $this->env->getExtension("native_profiler");
        $__internal_e50438dea21e1940262042971006d58d2dce9f03ba85a3ebf11cd0324d5cdfcb->enter($__internal_e50438dea21e1940262042971006d58d2dce9f03ba85a3ebf11cd0324d5cdfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoUserBundle:User:pagination.html.twig", "user/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoUserBundle:User:tbliste.html.twig", "user/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e50438dea21e1940262042971006d58d2dce9f03ba85a3ebf11cd0324d5cdfcb->leave($__internal_e50438dea21e1940262042971006d58d2dce9f03ba85a3ebf11cd0324d5cdfcb_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a93a58fe1051787295c6cd4f565304d8850480502eda87aa8ee166b945176927 = $this->env->getExtension("native_profiler");
        $__internal_a93a58fe1051787295c6cd4f565304d8850480502eda87aa8ee166b945176927->enter($__internal_a93a58fe1051787295c6cd4f565304d8850480502eda87aa8ee166b945176927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("user_pagesearch");
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
        // line 42
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("user_search");
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
        
        $__internal_a93a58fe1051787295c6cd4f565304d8850480502eda87aa8ee166b945176927->leave($__internal_a93a58fe1051787295c6cd4f565304d8850480502eda87aa8ee166b945176927_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 58,  189 => 48,  178 => 42,  160 => 27,  151 => 20,  139 => 19,  136 => 18,  134 => 17,  131 => 16,  127 => 14,  125 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tools.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.user'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoUserBundle:User:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total is defined and total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoUserBundle:User:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoUserBundle:User:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('user_pagesearch')}}",*/
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
/* 					url: "{{ path('user_search')}}",*/
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
