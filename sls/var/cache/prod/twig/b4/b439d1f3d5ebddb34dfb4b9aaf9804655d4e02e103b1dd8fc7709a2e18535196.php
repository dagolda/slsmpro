<?php

/* coordinator/back.html.twig */
class __TwigTemplate_0505045c0cb75ca0e1e0292fd5e4c16684fdf98fdb770a81cd14d65e1c9379c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "coordinator/back.html.twig", 1);
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
        $__internal_a765fb7161400e9636030e6d196cffe8ebfc599a265ed696460260985d7342b9 = $this->env->getExtension("native_profiler");
        $__internal_a765fb7161400e9636030e6d196cffe8ebfc599a265ed696460260985d7342b9->enter($__internal_a765fb7161400e9636030e6d196cffe8ebfc599a265ed696460260985d7342b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "coordinator/back.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a765fb7161400e9636030e6d196cffe8ebfc599a265ed696460260985d7342b9->leave($__internal_a765fb7161400e9636030e6d196cffe8ebfc599a265ed696460260985d7342b9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_47fd35244e575ccd62ce7b5ffe620192bc29633c6a8ffebbec6e4e9b82a8be3e = $this->env->getExtension("native_profiler");
        $__internal_47fd35244e575ccd62ce7b5ffe620192bc29633c6a8ffebbec6e4e9b82a8be3e->enter($__internal_47fd35244e575ccd62ce7b5ffe620192bc29633c6a8ffebbec6e4e9b82a8be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_47fd35244e575ccd62ce7b5ffe620192bc29633c6a8ffebbec6e4e9b82a8be3e->leave($__internal_47fd35244e575ccd62ce7b5ffe620192bc29633c6a8ffebbec6e4e9b82a8be3e_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_b095c5f4d5fe8b576de446ba8c05866ff815a823c6cf78a092cbfb7c04e137fd = $this->env->getExtension("native_profiler");
        $__internal_b095c5f4d5fe8b576de446ba8c05866ff815a823c6cf78a092cbfb7c04e137fd->enter($__internal_b095c5f4d5fe8b576de446ba8c05866ff815a823c6cf78a092cbfb7c04e137fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "coordinator/back.html.twig", 3)->display($context);
        
        $__internal_b095c5f4d5fe8b576de446ba8c05866ff815a823c6cf78a092cbfb7c04e137fd->leave($__internal_b095c5f4d5fe8b576de446ba8c05866ff815a823c6cf78a092cbfb7c04e137fd_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d3292bf44dc41839d886f353f28690bb018312c17daedcc48dc8670f2d2b52c5 = $this->env->getExtension("native_profiler");
        $__internal_d3292bf44dc41839d886f353f28690bb018312c17daedcc48dc8670f2d2b52c5->enter($__internal_d3292bf44dc41839d886f353f28690bb018312c17daedcc48dc8670f2d2b52c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
";
        
        $__internal_d3292bf44dc41839d886f353f28690bb018312c17daedcc48dc8670f2d2b52c5->leave($__internal_d3292bf44dc41839d886f353f28690bb018312c17daedcc48dc8670f2d2b52c5_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_5c3187575df3cba32378196cf02f037c220a5950fe110227262765b1d465aaa5 = $this->env->getExtension("native_profiler");
        $__internal_5c3187575df3cba32378196cf02f037c220a5950fe110227262765b1d465aaa5->enter($__internal_5c3187575df3cba32378196cf02f037c220a5950fe110227262765b1d465aaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.coordinator", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_5c3187575df3cba32378196cf02f037c220a5950fe110227262765b1d465aaa5->leave($__internal_5c3187575df3cba32378196cf02f037c220a5950fe110227262765b1d465aaa5_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e9e2298331c807b9ee5ddb74e3a6f84a3f91d55e040795e0c48e96a01c92528c = $this->env->getExtension("native_profiler");
        $__internal_e9e2298331c807b9ee5ddb74e3a6f84a3f91d55e040795e0c48e96a01c92528c->enter($__internal_e9e2298331c807b9ee5ddb74e3a6f84a3f91d55e040795e0c48e96a01c92528c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Coordinator:backactions.html.twig", "coordinator/back.html.twig", 8)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_e9e2298331c807b9ee5ddb74e3a6f84a3f91d55e040795e0c48e96a01c92528c->leave($__internal_e9e2298331c807b9ee5ddb74e3a6f84a3f91d55e040795e0c48e96a01c92528c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a45d89f27f27cc9aa503181ca49f0e94166677d8c321ad0e3c2f963be523811 = $this->env->getExtension("native_profiler");
        $__internal_6a45d89f27f27cc9aa503181ca49f0e94166677d8c321ad0e3c2f963be523811->enter($__internal_6a45d89f27f27cc9aa503181ca49f0e94166677d8c321ad0e3c2f963be523811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("BoAdminBundle:Coordinator:tbliste.html.twig", "coordinator/back.html.twig", 13)->display($context);
        // line 14
        echo "\t</div>
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6a45d89f27f27cc9aa503181ca49f0e94166677d8c321ad0e3c2f963be523811->leave($__internal_6a45d89f27f27cc9aa503181ca49f0e94166677d8c321ad0e3c2f963be523811_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b41387cc3d8478280125bff8a1708deab872e37b77c3c0788b2c01f7d378eec = $this->env->getExtension("native_profiler");
        $__internal_5b41387cc3d8478280125bff8a1708deab872e37b77c3c0788b2c01f7d378eec->enter($__internal_5b41387cc3d8478280125bff8a1708deab872e37b77c3c0788b2c01f7d378eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("coordinator_pagesearch");
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
        // line 38
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
        // line 45
        echo $this->env->getExtension('routing')->getPath("coordinator_search");
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5b41387cc3d8478280125bff8a1708deab872e37b77c3c0788b2c01f7d378eec->leave($__internal_5b41387cc3d8478280125bff8a1708deab872e37b77c3c0788b2c01f7d378eec_prof);

    }

    public function getTemplateName()
    {
        return "coordinator/back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 55,  186 => 45,  174 => 38,  156 => 23,  147 => 16,  135 => 15,  132 => 14,  130 => 13,  122 => 12,  119 => 11,  113 => 10,  103 => 8,  97 => 7,  81 => 6,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.coordinator'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdminBundle:Coordinator:backactions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<div id="content-liste">*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 		{%include "BoAdminBundle:Coordinator:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('coordinator_pagesearch')}}",*/
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
/* 					url: "{{ path('coordinator_search')}}",*/
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
