<?php

/* BoAdvisorsBundle:Enquiry:show.html.twig */
class __TwigTemplate_149170a266bc9a6b18b9e9dbee5cc1a745c1f85bb3780569c40ccac6e43f7c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Enquiry:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_9ace7de20d2da70cb92789ab93cf062df67426713cc912ae0e441a5211bae402 = $this->env->getExtension("native_profiler");
        $__internal_9ace7de20d2da70cb92789ab93cf062df67426713cc912ae0e441a5211bae402->enter($__internal_9ace7de20d2da70cb92789ab93cf062df67426713cc912ae0e441a5211bae402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ace7de20d2da70cb92789ab93cf062df67426713cc912ae0e441a5211bae402->leave($__internal_9ace7de20d2da70cb92789ab93cf062df67426713cc912ae0e441a5211bae402_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e7d7dc3b620fcc53c99d400b8e8fda0faac741db6d6b83479234be1daa3cea = $this->env->getExtension("native_profiler");
        $__internal_f2e7d7dc3b620fcc53c99d400b8e8fda0faac741db6d6b83479234be1daa3cea->enter($__internal_f2e7d7dc3b620fcc53c99d400b8e8fda0faac741db6d6b83479234be1daa3cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_f2e7d7dc3b620fcc53c99d400b8e8fda0faac741db6d6b83479234be1daa3cea->leave($__internal_f2e7d7dc3b620fcc53c99d400b8e8fda0faac741db6d6b83479234be1daa3cea_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_405e1e9b82341846b2cee562be85a326e178c773782bc36412c5acf288a47d7b = $this->env->getExtension("native_profiler");
        $__internal_405e1e9b82341846b2cee562be85a326e178c773782bc36412c5acf288a47d7b->enter($__internal_405e1e9b82341846b2cee562be85a326e178c773782bc36412c5acf288a47d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:admin.html.twig", "BoAdvisorsBundle:Enquiry:show.html.twig", 3)->display($context);
        
        $__internal_405e1e9b82341846b2cee562be85a326e178c773782bc36412c5acf288a47d7b->leave($__internal_405e1e9b82341846b2cee562be85a326e178c773782bc36412c5acf288a47d7b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21c87469bdb39de8a611d411ed72fd613f99341489b9a47a15183ba51118be4a = $this->env->getExtension("native_profiler");
        $__internal_21c87469bdb39de8a611d411ed72fd613f99341489b9a47a15183ba51118be4a->enter($__internal_21c87469bdb39de8a611d411ed72fd613f99341489b9a47a15183ba51118be4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<style>
\t\t.row .content {min-height: 700px}
\t</style>
";
        
        $__internal_21c87469bdb39de8a611d411ed72fd613f99341489b9a47a15183ba51118be4a->leave($__internal_21c87469bdb39de8a611d411ed72fd613f99341489b9a47a15183ba51118be4a_prof);

    }

    // line 10
    public function block_nav($context, array $blocks = array())
    {
        $__internal_4f08779492c7319c39c173c1a7d9197ce952274fab425f481f9ef8f53bd13b1b = $this->env->getExtension("native_profiler");
        $__internal_4f08779492c7319c39c173c1a7d9197ce952274fab425f481f9ef8f53bd13b1b->enter($__internal_4f08779492c7319c39c173c1a7d9197ce952274fab425f481f9ef8f53bd13b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        echo "\t";
        if ((array_key_exists("employee", $context) && ((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")) != null))) {
            $this->loadTemplate("BoAdminBundle:Employee:rightshow.html.twig", "BoAdvisorsBundle:Enquiry:show.html.twig", 10)->display($context);
        }
        
        $__internal_4f08779492c7319c39c173c1a7d9197ce952274fab425f481f9ef8f53bd13b1b->leave($__internal_4f08779492c7319c39c173c1a7d9197ce952274fab425f481f9ef8f53bd13b1b_prof);

    }

    // line 11
    public function block_label($context, array $blocks = array())
    {
        $__internal_d6b7d91cf9df7747bde5bb51634318f93070d2bd3e7984ed2a59ad52f41137e2 = $this->env->getExtension("native_profiler");
        $__internal_d6b7d91cf9df7747bde5bb51634318f93070d2bd3e7984ed2a59ad52f41137e2->enter($__internal_d6b7d91cf9df7747bde5bb51634318f93070d2bd3e7984ed2a59ad52f41137e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.enquiry", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_d6b7d91cf9df7747bde5bb51634318f93070d2bd3e7984ed2a59ad52f41137e2->leave($__internal_d6b7d91cf9df7747bde5bb51634318f93070d2bd3e7984ed2a59ad52f41137e2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_68e734ffb7487db66d09072048b107c7ee0519dda0d923eb6869e13a506338a8 = $this->env->getExtension("native_profiler");
        $__internal_68e734ffb7487db66d09072048b107c7ee0519dda0d923eb6869e13a506338a8->enter($__internal_68e734ffb7487db66d09072048b107c7ee0519dda0d923eb6869e13a506338a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<div id=\"body-content\">
\t\t";
        // line 14
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:showactions.html.twig", "BoAdvisorsBundle:Enquiry:show.html.twig", 14)->display($context);
        // line 15
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 16
        $this->loadTemplate("BoAdvisorsBundle:Enquiry:tbshow.html.twig", "BoAdvisorsBundle:Enquiry:show.html.twig", 16)->display($context);
        // line 17
        echo "\t\t</div>
\t</div>
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_68e734ffb7487db66d09072048b107c7ee0519dda0d923eb6869e13a506338a8->leave($__internal_68e734ffb7487db66d09072048b107c7ee0519dda0d923eb6869e13a506338a8_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae148efe0d7d82f663a6f7e13bfc9dae5b21c0f7a7ba66132f20c6d90e49eaed = $this->env->getExtension("native_profiler");
        $__internal_ae148efe0d7d82f663a6f7e13bfc9dae5b21c0f7a7ba66132f20c6d90e49eaed->enter($__internal_ae148efe0d7d82f663a6f7e13bfc9dae5b21c0f7a7ba66132f20c6d90e49eaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t\t<script>
\t\t\t\$(\"#btn_resolved\").click(function(){
\t\t\t\t\$(\".btn_resolved\").hide();
\t\t\t\t\$('.show_content').html(\"<center>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tidenquiry = \$(\"#btn_resolved\").val();
\t\t\t\tvar DATA = 'id='+idenquiry;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_resolved");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.show_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t\t\t
\t\t\t});
\t\t\t\$(\"#btn_notresolved\").click(function(){
\t\t\t\t\$(\".btn_notresolved\").hide();
\t\t\t\t\$(\".btn_resolved\").hide();
\t\t\t\t\$('.show_content').html(\"<center>";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search_inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo " >>&nbsp;<img src=\\\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/others/loading.gif"), "html", null, true);
        echo "\\\" border='0' /></center>\");
\t\t\t\tidenquiry = \$(\"#btn_notresolved\").val();
\t\t\t\tvar DATA = 'id='+idenquiry;
\t\t\t\t\$.ajax({
\t\t\t\t\ttype: \"POST\",
\t\t\t\t\turl: \"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("dash_enquiry_notresolved");
        echo "\",
\t\t\t\t\tdata: DATA,
\t\t\t\t\tcache: false,
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\t\$('.show_content').html(data);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\treturn false;\t\t\t
\t\t\t});
\t\t</script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_ae148efe0d7d82f663a6f7e13bfc9dae5b21c0f7a7ba66132f20c6d90e49eaed->leave($__internal_ae148efe0d7d82f663a6f7e13bfc9dae5b21c0f7a7ba66132f20c6d90e49eaed_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 81,  243 => 80,  230 => 70,  220 => 65,  205 => 53,  195 => 48,  190 => 45,  178 => 44,  167 => 36,  163 => 35,  159 => 34,  153 => 31,  147 => 28,  134 => 17,  132 => 16,  129 => 15,  127 => 14,  124 => 13,  118 => 12,  102 => 11,  87 => 10,  74 => 5,  68 => 4,  56 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:admin.html.twig"%}{% endblock %}*/
/* {% block stylesheets %}*/
/* 	{{parent()}}*/
/* 	<style>*/
/* 		.row .content {min-height: 700px}*/
/* 	</style>*/
/* {% endblock %}*/
/* {% block nav %}	{%if employee is defined and employee!=null%}{%include "BoAdminBundle:Employee:rightshow.html.twig"%}{%endif%}{% endblock %}*/
/* {% block label %}<h1>{{'entity.enquiry'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdvisorsBundle:Enquiry:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdvisorsBundle:Enquiry:tbshow.html.twig"%}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="myModal" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'message.alert.delete'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  <p>{{'message.confirm.delete'|trans([],'BoAdminBundle')}}</p>*/
/* 			</div>*/
/* 			<div class="modal-footer">*/
/* 				{{ form_start(delete_form) }}*/
/* 					<input type="submit" value="{{'action.confirm'|trans([],'BoAdminBundle')}}">*/
/* 				{{ form_end(delete_form) }}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script>*/
/* 			$("#btn_resolved").click(function(){*/
/* 				$(".btn_resolved").hide();*/
/* 				$('.show_content').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				idenquiry = $("#btn_resolved").val();*/
/* 				var DATA = 'id='+idenquiry;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_resolved')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.show_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;			*/
/* 			});*/
/* 			$("#btn_notresolved").click(function(){*/
/* 				$(".btn_notresolved").hide();*/
/* 				$(".btn_resolved").hide();*/
/* 				$('.show_content').html("<center>{{'message.search_inprogress'|trans([],'BoAdminBundle')}} >>&nbsp;<img src=\"{{ asset('images/others/loading.gif') }}\" border='0' /></center>");*/
/* 				idenquiry = $("#btn_notresolved").val();*/
/* 				var DATA = 'id='+idenquiry;*/
/* 				$.ajax({*/
/* 					type: "POST",*/
/* 					url: "{{ path('dash_enquiry_notresolved')}}",*/
/* 					data: DATA,*/
/* 					cache: false,*/
/* 					success: function(data){*/
/* 						$('.show_content').html(data);*/
/* 					}*/
/* 				});*/
/* 				return false;			*/
/* 			});*/
/* 		</script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
