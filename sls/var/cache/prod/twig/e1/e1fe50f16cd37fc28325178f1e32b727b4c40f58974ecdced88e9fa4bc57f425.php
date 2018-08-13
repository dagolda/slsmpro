<?php

/* BoAdvisorsBundle:Supervision:contracts.html.twig */
class __TwigTemplate_58ad5b3703d061ad8f9135cbe26adb79859e59ad0010c1e9e000d1da560e79b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 1);
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
        $__internal_725a0d925fd96ae6fb044182ccb66d62d13d00247c7c864ade176cce6bdb0020 = $this->env->getExtension("native_profiler");
        $__internal_725a0d925fd96ae6fb044182ccb66d62d13d00247c7c864ade176cce6bdb0020->enter($__internal_725a0d925fd96ae6fb044182ccb66d62d13d00247c7c864ade176cce6bdb0020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:contracts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_725a0d925fd96ae6fb044182ccb66d62d13d00247c7c864ade176cce6bdb0020->leave($__internal_725a0d925fd96ae6fb044182ccb66d62d13d00247c7c864ade176cce6bdb0020_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c894990fbbf34ba47162dd22a991f4bad1e142a56134a431bf29e97b8bf4ae3 = $this->env->getExtension("native_profiler");
        $__internal_8c894990fbbf34ba47162dd22a991f4bad1e142a56134a431bf29e97b8bf4ae3->enter($__internal_8c894990fbbf34ba47162dd22a991f4bad1e142a56134a431bf29e97b8bf4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_8c894990fbbf34ba47162dd22a991f4bad1e142a56134a431bf29e97b8bf4ae3->leave($__internal_8c894990fbbf34ba47162dd22a991f4bad1e142a56134a431bf29e97b8bf4ae3_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_11ae359f261bb9cc9e709f769d73e723040ce565adeb072cf750eae9d6fb847e = $this->env->getExtension("native_profiler");
        $__internal_11ae359f261bb9cc9e709f769d73e723040ce565adeb072cf750eae9d6fb847e->enter($__internal_11ae359f261bb9cc9e709f769d73e723040ce565adeb072cf750eae9d6fb847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 3)->display($context);
        
        $__internal_11ae359f261bb9cc9e709f769d73e723040ce565adeb072cf750eae9d6fb847e->leave($__internal_11ae359f261bb9cc9e709f769d73e723040ce565adeb072cf750eae9d6fb847e_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_169e4a6cdefe7f9381e1a819b353cebffb0ddd2ae7ce4aeb156b75e6296c160b = $this->env->getExtension("native_profiler");
        $__internal_169e4a6cdefe7f9381e1a819b353cebffb0ddd2ae7ce4aeb156b75e6296c160b->enter($__internal_169e4a6cdefe7f9381e1a819b353cebffb0ddd2ae7ce4aeb156b75e6296c160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if (((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null)) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_169e4a6cdefe7f9381e1a819b353cebffb0ddd2ae7ce4aeb156b75e6296c160b->leave($__internal_169e4a6cdefe7f9381e1a819b353cebffb0ddd2ae7ce4aeb156b75e6296c160b_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_1b032fc1d60aa146ff1aa0cec739645b0dd9658673b4a873a069c1eb4ab321a2 = $this->env->getExtension("native_profiler");
        $__internal_1b032fc1d60aa146ff1aa0cec739645b0dd9658673b4a873a069c1eb4ab321a2->enter($__internal_1b032fc1d60aa146ff1aa0cec739645b0dd9658673b4a873a069c1eb4ab321a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_1b032fc1d60aa146ff1aa0cec739645b0dd9658673b4a873a069c1eb4ab321a2->leave($__internal_1b032fc1d60aa146ff1aa0cec739645b0dd9658673b4a873a069c1eb4ab321a2_prof);

    }

    // line 8
    public function block_actions($context, array $blocks = array())
    {
        $__internal_712c351ee4d42b996da23160c2cf28cde63ca3fec563c376b6c1ae0e402ba6f0 = $this->env->getExtension("native_profiler");
        $__internal_712c351ee4d42b996da23160c2cf28cde63ca3fec563c376b6c1ae0e402ba6f0->enter($__internal_712c351ee4d42b996da23160c2cf28cde63ca3fec563c376b6c1ae0e402ba6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $this->loadTemplate("BoAdvisorsBundle:Supervision:actions.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 8)->display($context);
        
        $__internal_712c351ee4d42b996da23160c2cf28cde63ca3fec563c376b6c1ae0e402ba6f0->leave($__internal_712c351ee4d42b996da23160c2cf28cde63ca3fec563c376b6c1ae0e402ba6f0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5e2c48483215351599f01d0c465fa3d541f7ac66e384320a30e9e4e8b779a50 = $this->env->getExtension("native_profiler");
        $__internal_d5e2c48483215351599f01d0c465fa3d541f7ac66e384320a30e9e4e8b779a50->enter($__internal_d5e2c48483215351599f01d0c465fa3d541f7ac66e384320a30e9e4e8b779a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t<div class=\"display_content\">
\t\t\t<input type=\"hidden\" name=\"status\" id=\"status\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\" />
\t\t\t<input type=\"hidden\" id=\"nb_pages\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["nb_pages"]) ? $context["nb_pages"] : $this->getContext($context, "nb_pages")), "html", null, true);
        echo "\" /> 
\t\t\t<legend>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 15
        if ((array_key_exists("total", $context) && ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) > (isset($context["nb_cpp"]) ? $context["nb_cpp"] : $this->getContext($context, "nb_cpp"))))) {
            // line 16
            echo "\t\t\t\t<div class=\"pagination_content\">
\t\t\t\t\t";
            // line 17
            $this->loadTemplate("BoAdvisorsBundle:Supervision:pagination.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "\t\t\t<div id=\"content-liste\">
\t\t\t\t";
        // line 21
        $this->loadTemplate("BoAdvisorsBundle:Supervision:contractlist.html.twig", "BoAdvisorsBundle:Supervision:contracts.html.twig", 21)->display($context);
        // line 22
        echo "\t\t\t</div>
\t\t</div>\t\t\t
\t</div>
\t";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d5e2c48483215351599f01d0c465fa3d541f7ac66e384320a30e9e4e8b779a50->leave($__internal_d5e2c48483215351599f01d0c465fa3d541f7ac66e384320a30e9e4e8b779a50_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ba3a457887a3ee88668c852a08601bb531a0207b58ceb8e7ca0e3085922d20f = $this->env->getExtension("native_profiler");
        $__internal_5ba3a457887a3ee88668c852a08601bb531a0207b58ceb8e7ca0e3085922d20f->enter($__internal_5ba3a457887a3ee88668c852a08601bb531a0207b58ceb8e7ca0e3085922d20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 26
        echo "\t\t<script>
\t\t\t\$(\"#idpage\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("dash_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});\t
\t\t\t\$(\"#btn_first\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar page=1;\t
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("dash_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==1){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tpage=parseInt(page)-1;
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("dash_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();\t\t\t\t
\t\t\t\tpage=parseInt(page)+1;
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("dash_supervision_pagesearch");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#content-liste').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_last\").click(function(){
\t\t\t\tvar nbpages = \$(\"#nb_pages\").val();\t\t
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tpage=str.text();
\t\t\t\tif(parseInt(page)==parseInt(nbpages)){
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar str=\$(\"#idpage option:selected\");
\t\t\t\tvar page=nbpages;\t\t\t\t
\t\t\t\tstr.text(page);
\t\t\t\tvar status = \$(\"#status\").val();\t\t\t
\t\t\t\tvar DATA = 'data='+page+\"-\"+status;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("dash_supervision_pagesearch");
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_5ba3a457887a3ee88668c852a08601bb531a0207b58ceb8e7ca0e3085922d20f->leave($__internal_5ba3a457887a3ee88668c852a08601bb531a0207b58ceb8e7ca0e3085922d20f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 139,  313 => 129,  300 => 121,  281 => 105,  267 => 96,  248 => 80,  236 => 73,  218 => 58,  205 => 50,  187 => 35,  175 => 28,  171 => 26,  159 => 25,  154 => 22,  152 => 21,  149 => 20,  145 => 18,  143 => 17,  140 => 16,  138 => 15,  134 => 14,  130 => 13,  126 => 12,  122 => 10,  116 => 9,  104 => 8,  88 => 7,  76 => 5,  70 => 4,  58 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base2.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}}  >> {{'label.contracts'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	{%if employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block actions %}{%include "BoAdvisorsBundle:Supervision:actions.html.twig"%}{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		<div class="display_content">*/
/* 			<input type="hidden" name="status" id="status" value="{{status}}" />*/
/* 			<input type="hidden" id="nb_pages" value="{{nb_pages}}" /> */
/* 			<legend>{{'label.contracts'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%if total is defined and total>nb_cpp%}*/
/* 				<div class="pagination_content">*/
/* 					{% include 'BoAdvisorsBundle:Supervision:pagination.html.twig' %}*/
/* 				</div>*/
/* 			{%endif%}*/
/* 			<div id="content-liste">*/
/* 				{%include "BoAdvisorsBundle:Supervision:contractlist.html.twig"%}*/
/* 			</div>*/
/* 		</div>			*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#idpage").change(function(){*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});	*/
/* 			$("#btn_first").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var page=1;	*/
/* 				var nbpages = $("#nb_pages").val();					*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_previous").click(function(){*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==1){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				page=parseInt(page)-1;*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_next").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();				*/
/* 				page=parseInt(page)+1;*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_supervision_pagesearch')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('#content-liste').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_last").click(function(){*/
/* 				var nbpages = $("#nb_pages").val();		*/
/* 				var str=$("#idpage option:selected");*/
/* 				page=str.text();*/
/* 				if(parseInt(page)==parseInt(nbpages)){*/
/* 					return false;*/
/* 				}*/
/* 				$('#content-liste').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var str=$("#idpage option:selected");*/
/* 				var page=nbpages;				*/
/* 				str.text(page);*/
/* 				var status = $("#status").val();			*/
/* 				var DATA = 'data='+page+"-"+status;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_supervision_pagesearch')}}",*/
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
