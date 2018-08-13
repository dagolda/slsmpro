<?php

/* students/index.html.twig */
class __TwigTemplate_9b96ea223de0e4ff216678bc1c75b591f8e8244ad1996f0571289e51828276e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "students/index.html.twig", 1);
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
        $__internal_8ad9264219c3cf94377e4c664081f67d99de81466228d541c15c48538e295aa4 = $this->env->getExtension("native_profiler");
        $__internal_8ad9264219c3cf94377e4c664081f67d99de81466228d541c15c48538e295aa4->enter($__internal_8ad9264219c3cf94377e4c664081f67d99de81466228d541c15c48538e295aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ad9264219c3cf94377e4c664081f67d99de81466228d541c15c48538e295aa4->leave($__internal_8ad9264219c3cf94377e4c664081f67d99de81466228d541c15c48538e295aa4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7481f1111c5731127f3da3430ead6237843f4a150b75820fd01b2dc153521c0 = $this->env->getExtension("native_profiler");
        $__internal_e7481f1111c5731127f3da3430ead6237843f4a150b75820fd01b2dc153521c0->enter($__internal_e7481f1111c5731127f3da3430ead6237843f4a150b75820fd01b2dc153521c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_e7481f1111c5731127f3da3430ead6237843f4a150b75820fd01b2dc153521c0->leave($__internal_e7481f1111c5731127f3da3430ead6237843f4a150b75820fd01b2dc153521c0_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_e36172d6bf57ce549e583343a3bcc701901ce7eeac78bb01dc05c22ea470e712 = $this->env->getExtension("native_profiler");
        $__internal_e36172d6bf57ce549e583343a3bcc701901ce7eeac78bb01dc05c22ea470e712->enter($__internal_e36172d6bf57ce549e583343a3bcc701901ce7eeac78bb01dc05c22ea470e712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/index.html.twig", 3)->display($context);
        
        $__internal_e36172d6bf57ce549e583343a3bcc701901ce7eeac78bb01dc05c22ea470e712->leave($__internal_e36172d6bf57ce549e583343a3bcc701901ce7eeac78bb01dc05c22ea470e712_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ce815919893d4fe79df00a45a8b2fd4de7796ca8b32cbcb7b8c35d4112934f30 = $this->env->getExtension("native_profiler");
        $__internal_ce815919893d4fe79df00a45a8b2fd4de7796ca8b32cbcb7b8c35d4112934f30->enter($__internal_ce815919893d4fe79df00a45a8b2fd4de7796ca8b32cbcb7b8c35d4112934f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_ce815919893d4fe79df00a45a8b2fd4de7796ca8b32cbcb7b8c35d4112934f30->leave($__internal_ce815919893d4fe79df00a45a8b2fd4de7796ca8b32cbcb7b8c35d4112934f30_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_74dd8d02008dd3f44cae3b8b50523762f7fd14fa28d009cbc724dd759d55efbd = $this->env->getExtension("native_profiler");
        $__internal_74dd8d02008dd3f44cae3b8b50523762f7fd14fa28d009cbc724dd759d55efbd->enter($__internal_74dd8d02008dd3f44cae3b8b50523762f7fd14fa28d009cbc724dd759d55efbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_74dd8d02008dd3f44cae3b8b50523762f7fd14fa28d009cbc724dd759d55efbd->leave($__internal_74dd8d02008dd3f44cae3b8b50523762f7fd14fa28d009cbc724dd759d55efbd_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ba94b3986ef638aaaf2867a6f712b25b198b8c93325f100ad35bc99a175ce1fa = $this->env->getExtension("native_profiler");
        $__internal_ba94b3986ef638aaaf2867a6f712b25b198b8c93325f100ad35bc99a175ce1fa->enter($__internal_ba94b3986ef638aaaf2867a6f712b25b198b8c93325f100ad35bc99a175ce1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:actions.html.twig", "students/index.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_ba94b3986ef638aaaf2867a6f712b25b198b8c93325f100ad35bc99a175ce1fa->leave($__internal_ba94b3986ef638aaaf2867a6f712b25b198b8c93325f100ad35bc99a175ce1fa_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c2ded72fe707d6b78e1eb476ff59bfae0278ce32896af30992d1a1ac1a03cbe = $this->env->getExtension("native_profiler");
        $__internal_7c2ded72fe707d6b78e1eb476ff59bfae0278ce32896af30992d1a1ac1a03cbe->enter($__internal_7c2ded72fe707d6b78e1eb476ff59bfae0278ce32896af30992d1a1ac1a03cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t";
        if (((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp")))) {
            // line 12
            echo "\t<div class=\"pagination_content\">
\t\t";
            // line 13
            $this->loadTemplate("BoAdminBundle:Students:pagination.html.twig", "students/index.html.twig", 13)->display($context);
            // line 14
            echo "\t</div>
\t";
        }
        // line 16
        echo "\t<div id=\"content-liste\">
\t\t";
        // line 17
        $this->loadTemplate("BoAdminBundle:Students:tbliste.html.twig", "students/index.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_7c2ded72fe707d6b78e1eb476ff59bfae0278ce32896af30992d1a1ac1a03cbe->leave($__internal_7c2ded72fe707d6b78e1eb476ff59bfae0278ce32896af30992d1a1ac1a03cbe_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c76355f1ce26e8d05df1b5e214c7f609a6d1eafa6fc92ea3c01315f7d04317c0 = $this->env->getExtension("native_profiler");
        $__internal_c76355f1ce26e8d05df1b5e214c7f609a6d1eafa6fc92ea3c01315f7d04317c0->enter($__internal_c76355f1ce26e8d05df1b5e214c7f609a6d1eafa6fc92ea3c01315f7d04317c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("students_pagesearch");
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
        echo $this->env->getExtension('routing')->getPath("students_search");
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
        
        $__internal_c76355f1ce26e8d05df1b5e214c7f609a6d1eafa6fc92ea3c01315f7d04317c0->leave($__internal_c76355f1ce26e8d05df1b5e214c7f609a6d1eafa6fc92ea3c01315f7d04317c0_prof);

    }

    public function getTemplateName()
    {
        return "students/index.html.twig";
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
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Students:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	{%if total>nb_cpp%}*/
/* 	<div class="pagination_content">*/
/* 		{% include 'BoAdminBundle:Students:pagination.html.twig' %}*/
/* 	</div>*/
/* 	{%endif%}*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdminBundle:Students:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_pagesearch')}}",*/
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
/* 					url: "{{ path('students_search')}}",*/
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
