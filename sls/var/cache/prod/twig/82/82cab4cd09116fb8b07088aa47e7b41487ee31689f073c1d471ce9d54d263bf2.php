<?php

/* students/allabsence.html.twig */
class __TwigTemplate_f753adebd325402fd7ff04ab2fbe07f92c913258a2cf3ff4b3f080cf6f2c345c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "students/allabsence.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
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
        $__internal_7b58ffff2f24dbf6524d12bf1a318c84711b88b33640bb7419f964df5d874475 = $this->env->getExtension("native_profiler");
        $__internal_7b58ffff2f24dbf6524d12bf1a318c84711b88b33640bb7419f964df5d874475->enter($__internal_7b58ffff2f24dbf6524d12bf1a318c84711b88b33640bb7419f964df5d874475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/allabsence.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b58ffff2f24dbf6524d12bf1a318c84711b88b33640bb7419f964df5d874475->leave($__internal_7b58ffff2f24dbf6524d12bf1a318c84711b88b33640bb7419f964df5d874475_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_36c14164b051e325d089a76e0361e3d7885bdcbf61901637810859a327962687 = $this->env->getExtension("native_profiler");
        $__internal_36c14164b051e325d089a76e0361e3d7885bdcbf61901637810859a327962687->enter($__internal_36c14164b051e325d089a76e0361e3d7885bdcbf61901637810859a327962687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "-";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absence", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_36c14164b051e325d089a76e0361e3d7885bdcbf61901637810859a327962687->leave($__internal_36c14164b051e325d089a76e0361e3d7885bdcbf61901637810859a327962687_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_8c3f08d195b49f0a3b3d695d82b61de0870b43f2baa57da4ce777f4b73b274c1 = $this->env->getExtension("native_profiler");
        $__internal_8c3f08d195b49f0a3b3d695d82b61de0870b43f2baa57da4ce777f4b73b274c1->enter($__internal_8c3f08d195b49f0a3b3d695d82b61de0870b43f2baa57da4ce777f4b73b274c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/allabsence.html.twig", 3)->display($context);
        
        $__internal_8c3f08d195b49f0a3b3d695d82b61de0870b43f2baa57da4ce777f4b73b274c1->leave($__internal_8c3f08d195b49f0a3b3d695d82b61de0870b43f2baa57da4ce777f4b73b274c1_prof);

    }

    // line 4
    public function block_label($context, array $blocks = array())
    {
        $__internal_0479b7bd1ec1f64d97c7535cd876a9afbfa7097d26e2837ef67c8bd7fae2c1ed = $this->env->getExtension("native_profiler");
        $__internal_0479b7bd1ec1f64d97c7535cd876a9afbfa7097d26e2837ef67c8bd7fae2c1ed->enter($__internal_0479b7bd1ec1f64d97c7535cd876a9afbfa7097d26e2837ef67c8bd7fae2c1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.absences", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_0479b7bd1ec1f64d97c7535cd876a9afbfa7097d26e2837ef67c8bd7fae2c1ed->leave($__internal_0479b7bd1ec1f64d97c7535cd876a9afbfa7097d26e2837ef67c8bd7fae2c1ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5942c947b4b4b8411ca4cbf1400987d5a3432aa08cd7e0eefee8acf60598fd6e = $this->env->getExtension("native_profiler");
        $__internal_5942c947b4b4b8411ca4cbf1400987d5a3432aa08cd7e0eefee8acf60598fd6e->enter($__internal_5942c947b4b4b8411ca4cbf1400987d5a3432aa08cd7e0eefee8acf60598fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<div id=\"body-content\">
\t\t";
        // line 7
        $this->loadTemplate("BoAdminBundle:Students:absenceactions.html.twig", "students/allabsence.html.twig", 7)->display($context);
        // line 8
        echo "\t\t";
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 9
            echo "\t\t\t<div class=\"pagination_content\">
\t\t\t\t";
            // line 10
            $this->loadTemplate("BoAdminBundle:Absences:spagination.html.twig", "students/allabsence.html.twig", 10)->display($context);
            // line 11
            echo "\t\t\t</div>
\t\t";
        }
        // line 13
        echo "\t\t<div id=\"content-liste\">
\t\t\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:Students:listabsences.html.twig", "students/allabsence.html.twig", 14)->display($context);
        // line 15
        echo "\t\t</div>
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5942c947b4b4b8411ca4cbf1400987d5a3432aa08cd7e0eefee8acf60598fd6e->leave($__internal_5942c947b4b4b8411ca4cbf1400987d5a3432aa08cd7e0eefee8acf60598fd6e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eba5da7e5b40afe0371a652f52964590fe101a4825c8e0dd094c43037ccc90fc = $this->env->getExtension("native_profiler");
        $__internal_eba5da7e5b40afe0371a652f52964590fe101a4825c8e0dd094c43037ccc90fc->enter($__internal_eba5da7e5b40afe0371a652f52964590fe101a4825c8e0dd094c43037ccc90fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"#btn_create_absence\").click(function(){
\t\t\t\tvar str=\$(\".student option:selected\");
\t\t\t\tstudent=str.text();
\t\t\t\tvar numberday= \$(\".numberday\").val();
\t\t\t\tif(student==null || student==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must select a student\");
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\tif(numberday==null || numberday==\"\"){
\t\t\t\t\t\$('#error-message').html(\"You must enter a number of day\");
\t\t\t\t\treturn false;
\t\t\t\t}\t\t\t\t
\t\t\t\treturn true;
\t\t\t});
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("students_absence_pagesearch");
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
\t\t\t\tvar criteria = \$(\"#inp-search\").val();\t\t
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 54
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
        // line 60
        echo $this->env->getExtension('routing')->getPath("students_absence_search");
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
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_eba5da7e5b40afe0371a652f52964590fe101a4825c8e0dd094c43037ccc90fc->leave($__internal_eba5da7e5b40afe0371a652f52964590fe101a4825c8e0dd094c43037ccc90fc_prof);

    }

    public function getTemplateName()
    {
        return "students/allabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 72,  195 => 71,  191 => 70,  178 => 60,  167 => 54,  149 => 39,  126 => 18,  114 => 17,  110 => 15,  108 => 14,  105 => 13,  101 => 11,  99 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  82 => 5,  66 => 4,  54 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}-{{'entity.absence'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block label %}<h1>{{'entity.absences'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Students:absenceactions.html.twig"%}*/
/* 		{%if total is defined and total>nb_cpp%}*/
/* 			<div class="pagination_content">*/
/* 				{% include 'BoAdminBundle:Absences:spagination.html.twig' %}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div id="content-liste">*/
/* 			{%include "BoAdminBundle:Students:listabsences.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_create_absence").click(function(){*/
/* 				var str=$(".student option:selected");*/
/* 				student=str.text();*/
/* 				var numberday= $(".numberday").val();*/
/* 				if(student==null || student==""){*/
/* 					$('#error-message').html("You must select a student");*/
/* 					return false;*/
/* 				}*/
/* 				if(numberday==null || numberday==""){*/
/* 					$('#error-message').html("You must enter a number of day");*/
/* 					return false;*/
/* 				}				*/
/* 				return true;*/
/* 			});*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_absence_pagesearch')}}",*/
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
/* 				var criteria = $("#inp-search").val();		*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				$(".pagination_content").hide();*/
/* 				$(".list_link").show();*/
/* 				var DATA = 'description=' + criteria;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('students_absence_search')}}",*/
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
