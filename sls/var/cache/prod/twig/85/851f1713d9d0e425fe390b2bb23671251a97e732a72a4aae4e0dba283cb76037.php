<?php

/* employee/agenda.html.twig */
class __TwigTemplate_d733215d247e22b7c9784c501cb88d69d4f90a4ed047b18c756647824b8ee9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "employee/agenda.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
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
        $__internal_4933f843d50afe517a31774980dae61bb66882a8e22aafdbf46b41909dc360ef = $this->env->getExtension("native_profiler");
        $__internal_4933f843d50afe517a31774980dae61bb66882a8e22aafdbf46b41909dc360ef->enter($__internal_4933f843d50afe517a31774980dae61bb66882a8e22aafdbf46b41909dc360ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "employee/agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4933f843d50afe517a31774980dae61bb66882a8e22aafdbf46b41909dc360ef->leave($__internal_4933f843d50afe517a31774980dae61bb66882a8e22aafdbf46b41909dc360ef_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e5e29d24f488435a19397179f752bcfc4bef6113d0042b6c69b3293ef2ce129 = $this->env->getExtension("native_profiler");
        $__internal_6e5e29d24f488435a19397179f752bcfc4bef6113d0042b6c69b3293ef2ce129->enter($__internal_6e5e29d24f488435a19397179f752bcfc4bef6113d0042b6c69b3293ef2ce129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_6e5e29d24f488435a19397179f752bcfc4bef6113d0042b6c69b3293ef2ce129->leave($__internal_6e5e29d24f488435a19397179f752bcfc4bef6113d0042b6c69b3293ef2ce129_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86cc9f623757bc66dba27c77950193cedb9a58a8d20bdf3bbd623c4215c76171 = $this->env->getExtension("native_profiler");
        $__internal_86cc9f623757bc66dba27c77950193cedb9a58a8d20bdf3bbd623c4215c76171->enter($__internal_86cc9f623757bc66dba27c77950193cedb9a58a8d20bdf3bbd623c4215c76171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_86cc9f623757bc66dba27c77950193cedb9a58a8d20bdf3bbd623c4215c76171->leave($__internal_86cc9f623757bc66dba27c77950193cedb9a58a8d20bdf3bbd623c4215c76171_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_9639a21dce0b09f7229d6e41f785748e0c45aa1d35108cecfffd5610414b5b6f = $this->env->getExtension("native_profiler");
        $__internal_9639a21dce0b09f7229d6e41f785748e0c45aa1d35108cecfffd5610414b5b6f->enter($__internal_9639a21dce0b09f7229d6e41f785748e0c45aa1d35108cecfffd5610414b5b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:personnel.html.twig", "employee/agenda.html.twig", 4)->display($context);
        
        $__internal_9639a21dce0b09f7229d6e41f785748e0c45aa1d35108cecfffd5610414b5b6f->leave($__internal_9639a21dce0b09f7229d6e41f785748e0c45aa1d35108cecfffd5610414b5b6f_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_02b97e61cb80691183c92e8848c798e615649cad8ee0276d269310af666a04b1 = $this->env->getExtension("native_profiler");
        $__internal_02b97e61cb80691183c92e8848c798e615649cad8ee0276d269310af666a04b1->enter($__internal_02b97e61cb80691183c92e8848c798e615649cad8ee0276d269310af666a04b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 6
        echo "\t";
        $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "employee/agenda.html.twig", 6)->display($context);
        
        $__internal_02b97e61cb80691183c92e8848c798e615649cad8ee0276d269310af666a04b1->leave($__internal_02b97e61cb80691183c92e8848c798e615649cad8ee0276d269310af666a04b1_prof);

    }

    // line 8
    public function block_label($context, array $blocks = array())
    {
        $__internal_976f47662051ba61824f8b93db39e356b8d5655ee342482d74909d0c7d12f786 = $this->env->getExtension("native_profiler");
        $__internal_976f47662051ba61824f8b93db39e356b8d5655ee342482d74909d0c7d12f786->enter($__internal_976f47662051ba61824f8b93db39e356b8d5655ee342482d74909d0c7d12f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.agenda", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_976f47662051ba61824f8b93db39e356b8d5655ee342482d74909d0c7d12f786->leave($__internal_976f47662051ba61824f8b93db39e356b8d5655ee342482d74909d0c7d12f786_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c38ac6e82ff356ca0c904340906573c0bf13123e0c611e2951fe5c952905222e = $this->env->getExtension("native_profiler");
        $__internal_c38ac6e82ff356ca0c904340906573c0bf13123e0c611e2951fe5c952905222e->enter($__internal_c38ac6e82ff356ca0c904340906573c0bf13123e0c611e2951fe5c952905222e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div id=\"body-content\">
\t\t";
        // line 11
        $this->loadTemplate("BoAdminBundle:Employee:agendaactions.html.twig", "employee/agenda.html.twig", 11)->display($context);
        // line 12
        echo "\t\t<div id=\"agenda_content\">
\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Employee:agenda.html.twig", "employee/agenda.html.twig", 13)->display($context);
        // line 14
        echo "\t\t</div>\t
\t\t<div id=\"agenda_error\"></div>\t\t\t
\t</div>
\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_c38ac6e82ff356ca0c904340906573c0bf13123e0c611e2951fe5c952905222e->leave($__internal_c38ac6e82ff356ca0c904340906573c0bf13123e0c611e2951fe5c952905222e_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4ec0c920cd654c7d84f0a5ea07f4b9d4c4b6760455452578928121586c24ca3 = $this->env->getExtension("native_profiler");
        $__internal_a4ec0c920cd654c7d84f0a5ea07f4b9d4c4b6760455452578928121586c24ca3->enter($__internal_a4ec0c920cd654c7d84f0a5ea07f4b9d4c4b6760455452578928121586c24ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t<script>
\t\t\t\$(\"#btn_previous\").click(function(){
\t\t\t\t\$('#agenda_title').html(\"<center>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=-7;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#startdate\").val();
\t\t\t\tvar enddate=\$(\"#enddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("employee_agenda_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#agenda_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#btn_next\").click(function(){
\t\t\t\t\$('#agenda_title').html(\"<center>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tvar number=7;
\t\t\t\tvar idemployee=\$(\"#idemployee\").val();
\t\t\t\tvar startdate=\$(\"#startdate\").val();
\t\t\t\tvar enddate=\$(\"#enddate\").val();
\t\t\t\tvar DATA = 'data='+idemployee+\"#\"+startdate+\"#\"+enddate+\"#\"+number;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("employee_agenda_search");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: true,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('#agenda_content').html(data);
\t\t\t\t\t},
\t\t\t\t\terror: function(data,status,error){
\t\t\t\t\t\t\$('#agenda_error').html(error);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\"#idemployee\").change(function(){
\t\t\t\t\$('#content-liste').html(\"<center>";
        // line 59
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
        // line 65
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
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_a4ec0c920cd654c7d84f0a5ea07f4b9d4c4b6760455452578928121586c24ca3->leave($__internal_a4ec0c920cd654c7d84f0a5ea07f4b9d4c4b6760455452578928121586c24ca3_prof);

    }

    public function getTemplateName()
    {
        return "employee/agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 75,  214 => 65,  203 => 59,  187 => 46,  174 => 38,  161 => 28,  148 => 20,  144 => 18,  132 => 17,  127 => 14,  125 => 13,  122 => 12,  120 => 11,  117 => 10,  111 => 9,  95 => 8,  87 => 6,  81 => 5,  69 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:personnel.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%include "BoAdminBundle:Employee:rightshow.html.twig"%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.employee'|trans([],'BoAdminBundle')}} >> {{'title.agenda'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Employee:agendaactions.html.twig"%}*/
/* 		<div id="agenda_content">*/
/* 			{%include "BoAdminBundle:Employee:agenda.html.twig"%}*/
/* 		</div>	*/
/* 		<div id="agenda_error"></div>			*/
/* 	</div>*/
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_previous").click(function(){*/
/* 				$('#agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=-7;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#startdate").val();*/
/* 				var enddate=$("#enddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_agenda_search')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#agenda_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#btn_next").click(function(){*/
/* 				$('#agenda_title').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				var number=7;*/
/* 				var idemployee=$("#idemployee").val();*/
/* 				var startdate=$("#startdate").val();*/
/* 				var enddate=$("#enddate").val();*/
/* 				var DATA = 'data='+idemployee+"#"+startdate+"#"+enddate+"#"+number;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('employee_agenda_search')}}",*/
/* 					data: DATA,*/
/* 					cache: true,*/
/* 					success: function(data){*/
/* 						$('#agenda_content').html(data);*/
/* 					},*/
/* 					error: function(data,status,error){*/
/* 						$('#agenda_error').html(error);*/
/* 					}*/
/* 				});*/
/* 				return false;*/
/* 			});*/
/* 			$("#idemployee").change(function(){*/
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
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
