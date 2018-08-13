<?php

/* BoAdvisorsBundle:Orderform:index.html.twig */
class __TwigTemplate_56484972cfc8164ab8ee0fbcb46fd6103d703dab1ba39ba78e4a4170395c6b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 1);
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
        $__internal_1ccd2632d3342ecd34a6dc9b861249080c4215a76845b484a73707f495e456bc = $this->env->getExtension("native_profiler");
        $__internal_1ccd2632d3342ecd34a6dc9b861249080c4215a76845b484a73707f495e456bc->enter($__internal_1ccd2632d3342ecd34a6dc9b861249080c4215a76845b484a73707f495e456bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccd2632d3342ecd34a6dc9b861249080c4215a76845b484a73707f495e456bc->leave($__internal_1ccd2632d3342ecd34a6dc9b861249080c4215a76845b484a73707f495e456bc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8c106c003dc24f185545e81deca20334e370a5495f946fa9635a8f224f47441 = $this->env->getExtension("native_profiler");
        $__internal_d8c106c003dc24f185545e81deca20334e370a5495f946fa9635a8f224f47441->enter($__internal_d8c106c003dc24f185545e81deca20334e370a5495f946fa9635a8f224f47441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_d8c106c003dc24f185545e81deca20334e370a5495f946fa9635a8f224f47441->leave($__internal_d8c106c003dc24f185545e81deca20334e370a5495f946fa9635a8f224f47441_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7d71991fb855e481df59913912c57711b701b691cbbac9246ba61e0017a5c14a = $this->env->getExtension("native_profiler");
        $__internal_7d71991fb855e481df59913912c57711b701b691cbbac9246ba61e0017a5c14a->enter($__internal_7d71991fb855e481df59913912c57711b701b691cbbac9246ba61e0017a5c14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 3)->display($context);
        
        $__internal_7d71991fb855e481df59913912c57711b701b691cbbac9246ba61e0017a5c14a->leave($__internal_7d71991fb855e481df59913912c57711b701b691cbbac9246ba61e0017a5c14a_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_021c38f72e37fc6e39a83df9596f59bd6e3ff60165bbbafea2de6c3e422ad145 = $this->env->getExtension("native_profiler");
        $__internal_021c38f72e37fc6e39a83df9596f59bd6e3ff60165bbbafea2de6c3e422ad145->enter($__internal_021c38f72e37fc6e39a83df9596f59bd6e3ff60165bbbafea2de6c3e422ad145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t
\t";
        // line 5
        if ((array_key_exists("employee", $context) && ((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null))) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_021c38f72e37fc6e39a83df9596f59bd6e3ff60165bbbafea2de6c3e422ad145->leave($__internal_021c38f72e37fc6e39a83df9596f59bd6e3ff60165bbbafea2de6c3e422ad145_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_d09db02a640f078452e9b9474dd6114dfcfa4f95639418d12d1e59086ad14b3d = $this->env->getExtension("native_profiler");
        $__internal_d09db02a640f078452e9b9474dd6114dfcfa4f95639418d12d1e59086ad14b3d->enter($__internal_d09db02a640f078452e9b9474dd6114dfcfa4f95639418d12d1e59086ad14b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.orderform", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d09db02a640f078452e9b9474dd6114dfcfa4f95639418d12d1e59086ad14b3d->leave($__internal_d09db02a640f078452e9b9474dd6114dfcfa4f95639418d12d1e59086ad14b3d_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fb841b63e34325c3ceda3ffddf757ae21ef0fa4f12bdef8754d5c8273ba8d3c8 = $this->env->getExtension("native_profiler");
        $__internal_fb841b63e34325c3ceda3ffddf757ae21ef0fa4f12bdef8754d5c8273ba8d3c8->enter($__internal_fb841b63e34325c3ceda3ffddf757ae21ef0fa4f12bdef8754d5c8273ba8d3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 9
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Orderform:actions.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 9)->display($context);
        echo "\t\t\t\t\t
";
        
        $__internal_fb841b63e34325c3ceda3ffddf757ae21ef0fa4f12bdef8754d5c8273ba8d3c8->leave($__internal_fb841b63e34325c3ceda3ffddf757ae21ef0fa4f12bdef8754d5c8273ba8d3c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75968790b335781f5002ecb843e6c59b57b15eba993c1c32d1dc11b2ef798e1b = $this->env->getExtension("native_profiler");
        $__internal_75968790b335781f5002ecb843e6c59b57b15eba993c1c32d1dc11b2ef798e1b->enter($__internal_75968790b335781f5002ecb843e6c59b57b15eba993c1c32d1dc11b2ef798e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t<!--div class=\"pagination_content\">
\t\t";
        // line 13
        $this->loadTemplate("BoAdvisorsBundle:Orderform:criteria.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 13)->display($context);
        // line 14
        echo "\t</div-->
\t<div id=\"content-liste\">
\t\t";
        // line 16
        $this->loadTemplate("BoAdvisorsBundle:Orderform:tbliste.html.twig", "BoAdvisorsBundle:Orderform:index.html.twig", 16)->display($context);
        // line 17
        echo "\t</div>
\t";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_75968790b335781f5002ecb843e6c59b57b15eba993c1c32d1dc11b2ef798e1b->leave($__internal_75968790b335781f5002ecb843e6c59b57b15eba993c1c32d1dc11b2ef798e1b_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1218fbde966845c5c30643b428a42f767d956861836fca4fcde2209d234c6e8 = $this->env->getExtension("native_profiler");
        $__internal_a1218fbde966845c5c30643b428a42f767d956861836fca4fcde2209d234c6e8->enter($__internal_a1218fbde966845c5c30643b428a42f767d956861836fca4fcde2209d234c6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo $this->env->getExtension('routing')->getPath("dash_orderform_pagesearch");
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
        echo $this->env->getExtension('routing')->getPath("dash_orderform_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idstatus\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idstatus option:selected\");
\t\t\t\tstatus=str.val();
\t\t\t\tvar DATA = 'data='+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("dash_orderform_extrasearch");
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
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_a1218fbde966845c5c30643b428a42f767d956861836fca4fcde2209d234c6e8->leave($__internal_a1218fbde966845c5c30643b428a42f767d956861836fca4fcde2209d234c6e8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 73,  213 => 63,  202 => 57,  189 => 47,  178 => 41,  160 => 26,  151 => 19,  139 => 18,  136 => 17,  134 => 16,  130 => 14,  128 => 13,  125 => 12,  119 => 11,  109 => 9,  103 => 8,  87 => 7,  76 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block nav %}	*/
/* 	{%if employee is defined and employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.orderform'|trans([],'BoAdminBundle')}} >> {{'title.list'|trans([],'BoAdminBundle')}}</h1>{% endblock %}	*/
/* {% block actions %}*/
/* 	{%include "BoAdvisorsBundle:Orderform:actions.html.twig"%}					*/
/* {% endblock %}*/
/* {% block body %}*/
/* 	<!--div class="pagination_content">*/
/* 		{% include 'BoAdvisorsBundle:Orderform:criteria.html.twig' %}*/
/* 	</div-->*/
/* 	<div id="content-liste">*/
/* 		{%include "BoAdvisorsBundle:Orderform:tbliste.html.twig"%}*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var DATA = 'motcle=' + page;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_orderform_pagesearch')}}",*/
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
/* 					url: "{{ path('dash_orderform_search')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idstatus").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idstatus option:selected");*/
/* 				status=str.val();*/
/* 				var DATA = 'data='+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_orderform_extrasearch')}}",*/
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
