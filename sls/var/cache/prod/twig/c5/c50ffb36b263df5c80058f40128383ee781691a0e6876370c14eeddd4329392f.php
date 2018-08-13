<?php

/* students/back.html.twig */
class __TwigTemplate_4a0ce254ee42c54867101fc7e2e10bc329393c86615eae79666cb7c0ff4dc657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "students/back.html.twig", 1);
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
        $__internal_8c7019a4372132e5c69a67a11a3d8929032711a08a9fa252b3af97ad229e0ae8 = $this->env->getExtension("native_profiler");
        $__internal_8c7019a4372132e5c69a67a11a3d8929032711a08a9fa252b3af97ad229e0ae8->enter($__internal_8c7019a4372132e5c69a67a11a3d8929032711a08a9fa252b3af97ad229e0ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "students/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c7019a4372132e5c69a67a11a3d8929032711a08a9fa252b3af97ad229e0ae8->leave($__internal_8c7019a4372132e5c69a67a11a3d8929032711a08a9fa252b3af97ad229e0ae8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_46ff4e743523e32e672537ac5e33f06448e162cce9d9298a675bb02ebb9cdac4 = $this->env->getExtension("native_profiler");
        $__internal_46ff4e743523e32e672537ac5e33f06448e162cce9d9298a675bb02ebb9cdac4->enter($__internal_46ff4e743523e32e672537ac5e33f06448e162cce9d9298a675bb02ebb9cdac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_46ff4e743523e32e672537ac5e33f06448e162cce9d9298a675bb02ebb9cdac4->leave($__internal_46ff4e743523e32e672537ac5e33f06448e162cce9d9298a675bb02ebb9cdac4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b16d74ea7b92e764062333b265883158e96c0241589ea87744874235dbdd73c3 = $this->env->getExtension("native_profiler");
        $__internal_b16d74ea7b92e764062333b265883158e96c0241589ea87744874235dbdd73c3->enter($__internal_b16d74ea7b92e764062333b265883158e96c0241589ea87744874235dbdd73c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "students/back.html.twig", 3)->display($context);
        
        $__internal_b16d74ea7b92e764062333b265883158e96c0241589ea87744874235dbdd73c3->leave($__internal_b16d74ea7b92e764062333b265883158e96c0241589ea87744874235dbdd73c3_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_1c084a911cf1f2a4c0862a9f4ab30e4f899f72e413e43625798094e81e1c690b = $this->env->getExtension("native_profiler");
        $__internal_1c084a911cf1f2a4c0862a9f4ab30e4f899f72e413e43625798094e81e1c690b->enter($__internal_1c084a911cf1f2a4c0862a9f4ab30e4f899f72e413e43625798094e81e1c690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_1c084a911cf1f2a4c0862a9f4ab30e4f899f72e413e43625798094e81e1c690b->leave($__internal_1c084a911cf1f2a4c0862a9f4ab30e4f899f72e413e43625798094e81e1c690b_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_51e5cdf3a0f51e0266957626e8c5ebc5f5f7061a96a21da719a3d7603f93359d = $this->env->getExtension("native_profiler");
        $__internal_51e5cdf3a0f51e0266957626e8c5ebc5f5f7061a96a21da719a3d7603f93359d->enter($__internal_51e5cdf3a0f51e0266957626e8c5ebc5f5f7061a96a21da719a3d7603f93359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.student", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_51e5cdf3a0f51e0266957626e8c5ebc5f5f7061a96a21da719a3d7603f93359d->leave($__internal_51e5cdf3a0f51e0266957626e8c5ebc5f5f7061a96a21da719a3d7603f93359d_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6f66df8ec446a274d17d5820fbf16c534a6aaafb31b726b43e5689b6322f074f = $this->env->getExtension("native_profiler");
        $__internal_6f66df8ec446a274d17d5820fbf16c534a6aaafb31b726b43e5689b6322f074f->enter($__internal_6f66df8ec446a274d17d5820fbf16c534a6aaafb31b726b43e5689b6322f074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Students:backactions.html.twig", "students/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_6f66df8ec446a274d17d5820fbf16c534a6aaafb31b726b43e5689b6322f074f->leave($__internal_6f66df8ec446a274d17d5820fbf16c534a6aaafb31b726b43e5689b6322f074f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff851cc79ac61f97cd53352bd721f87e4c3db721f1b71c047ed231461c4da13 = $this->env->getExtension("native_profiler");
        $__internal_eff851cc79ac61f97cd53352bd721f87e4c3db721f1b71c047ed231461c4da13->enter($__internal_eff851cc79ac61f97cd53352bd721f87e4c3db721f1b71c047ed231461c4da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div id=\"content-liste\">
\t\t<div class='numberfound'><b>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</b> : <span>";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></div>
\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Students:tbliste.html.twig", "students/back.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_eff851cc79ac61f97cd53352bd721f87e4c3db721f1b71c047ed231461c4da13->leave($__internal_eff851cc79ac61f97cd53352bd721f87e4c3db721f1b71c047ed231461c4da13_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_60ee33b07cbc7f7d8ef18d18e43ee285758d5460d03fcac26c484b15dae8d571 = $this->env->getExtension("native_profiler");
        $__internal_60ee33b07cbc7f7d8ef18d18e43ee285758d5460d03fcac26c484b15dae8d571->enter($__internal_60ee33b07cbc7f7d8ef18d18e43ee285758d5460d03fcac26c484b15dae8d571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar DATA = 'motcle=' + page;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 23
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
        // line 38
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
        // line 44
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
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_60ee33b07cbc7f7d8ef18d18e43ee285758d5460d03fcac26c484b15dae8d571->leave($__internal_60ee33b07cbc7f7d8ef18d18e43ee285758d5460d03fcac26c484b15dae8d571_prof);

    }

    public function getTemplateName()
    {
        return "students/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 54,  185 => 44,  174 => 38,  156 => 23,  147 => 16,  135 => 15,  132 => 14,  130 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.student'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Students:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
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
