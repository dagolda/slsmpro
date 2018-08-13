<?php

/* employee/back.html.twig */
class __TwigTemplate_eec7fe6066dcd918a655387babd44aa611ea88407d09874856ad1a3300ff1368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "employee/back.html.twig", 1);
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
        $__internal_cabe1dbf6476d2f1ce18b6311c23d2eddb62de5e97072aef5945d0847c1a5c9c = $this->env->getExtension("native_profiler");
        $__internal_cabe1dbf6476d2f1ce18b6311c23d2eddb62de5e97072aef5945d0847c1a5c9c->enter($__internal_cabe1dbf6476d2f1ce18b6311c23d2eddb62de5e97072aef5945d0847c1a5c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cabe1dbf6476d2f1ce18b6311c23d2eddb62de5e97072aef5945d0847c1a5c9c->leave($__internal_cabe1dbf6476d2f1ce18b6311c23d2eddb62de5e97072aef5945d0847c1a5c9c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebfe209dc1ce5897992b46ea48979c60e1da53d505c7b9d185a0506e7942ec10 = $this->env->getExtension("native_profiler");
        $__internal_ebfe209dc1ce5897992b46ea48979c60e1da53d505c7b9d185a0506e7942ec10->enter($__internal_ebfe209dc1ce5897992b46ea48979c60e1da53d505c7b9d185a0506e7942ec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_ebfe209dc1ce5897992b46ea48979c60e1da53d505c7b9d185a0506e7942ec10->leave($__internal_ebfe209dc1ce5897992b46ea48979c60e1da53d505c7b9d185a0506e7942ec10_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_ce225518c3f1b853ba5b56e8e815a98e1ccf69d2654f6034eb1107dbe386fbb7 = $this->env->getExtension("native_profiler");
        $__internal_ce225518c3f1b853ba5b56e8e815a98e1ccf69d2654f6034eb1107dbe386fbb7->enter($__internal_ce225518c3f1b853ba5b56e8e815a98e1ccf69d2654f6034eb1107dbe386fbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/back.html.twig", 3)->display($context);
        
        $__internal_ce225518c3f1b853ba5b56e8e815a98e1ccf69d2654f6034eb1107dbe386fbb7->leave($__internal_ce225518c3f1b853ba5b56e8e815a98e1ccf69d2654f6034eb1107dbe386fbb7_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_bcc56e5d4c0923e0648a86434758ae51148466929be9b955dec58d75904c08e6 = $this->env->getExtension("native_profiler");
        $__internal_bcc56e5d4c0923e0648a86434758ae51148466929be9b955dec58d75904c08e6->enter($__internal_bcc56e5d4c0923e0648a86434758ae51148466929be9b955dec58d75904c08e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_bcc56e5d4c0923e0648a86434758ae51148466929be9b955dec58d75904c08e6->leave($__internal_bcc56e5d4c0923e0648a86434758ae51148466929be9b955dec58d75904c08e6_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_430ce2cc5ffb4f0bfc2f4d33a384c10c05b5fbfac385fedd4ec5971462baed61 = $this->env->getExtension("native_profiler");
        $__internal_430ce2cc5ffb4f0bfc2f4d33a384c10c05b5fbfac385fedd4ec5971462baed61->enter($__internal_430ce2cc5ffb4f0bfc2f4d33a384c10c05b5fbfac385fedd4ec5971462baed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_430ce2cc5ffb4f0bfc2f4d33a384c10c05b5fbfac385fedd4ec5971462baed61->leave($__internal_430ce2cc5ffb4f0bfc2f4d33a384c10c05b5fbfac385fedd4ec5971462baed61_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a82f0727127eec86d38f10a8315d7a7b8f7fe216704a0ecbe4964215768d9db1 = $this->env->getExtension("native_profiler");
        $__internal_a82f0727127eec86d38f10a8315d7a7b8f7fe216704a0ecbe4964215768d9db1->enter($__internal_a82f0727127eec86d38f10a8315d7a7b8f7fe216704a0ecbe4964215768d9db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:backactions.html.twig", "employee/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_a82f0727127eec86d38f10a8315d7a7b8f7fe216704a0ecbe4964215768d9db1->leave($__internal_a82f0727127eec86d38f10a8315d7a7b8f7fe216704a0ecbe4964215768d9db1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad6d182eddc2275175caae76a68ad7657074d1bdf8c7f49c65a7b82790efc6a = $this->env->getExtension("native_profiler");
        $__internal_aad6d182eddc2275175caae76a68ad7657074d1bdf8c7f49c65a7b82790efc6a->enter($__internal_aad6d182eddc2275175caae76a68ad7657074d1bdf8c7f49c65a7b82790efc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("BoAdminBundle:Employee:tbliste.html.twig", "employee/back.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_aad6d182eddc2275175caae76a68ad7657074d1bdf8c7f49c65a7b82790efc6a->leave($__internal_aad6d182eddc2275175caae76a68ad7657074d1bdf8c7f49c65a7b82790efc6a_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4be0c6b3dd729b3ca0e17705b45ceb9147afef06c195da70dc99c25b34110fc9 = $this->env->getExtension("native_profiler");
        $__internal_4be0c6b3dd729b3ca0e17705b45ceb9147afef06c195da70dc99c25b34110fc9->enter($__internal_4be0c6b3dd729b3ca0e17705b45ceb9147afef06c195da70dc99c25b34110fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 18
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
        // line 24
        echo $this->env->getExtension('routing')->getPath("employee_pagesearch");
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
        // line 39
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
        // line 46
        echo $this->env->getExtension('routing')->getPath("employee_search");
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_4be0c6b3dd729b3ca0e17705b45ceb9147afef06c195da70dc99c25b34110fc9->leave($__internal_4be0c6b3dd729b3ca0e17705b45ceb9147afef06c195da70dc99c25b34110fc9_prof);

    }

    public function getTemplateName()
    {
        return "employee/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 56,  192 => 46,  180 => 39,  162 => 24,  151 => 18,  147 => 16,  135 => 15,  132 => 14,  130 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Employee:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 		{%include "BoAdminBundle:Employee:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_pagesearch')}}",*/
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
/* 					url: "{{ path('employee_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});			*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
