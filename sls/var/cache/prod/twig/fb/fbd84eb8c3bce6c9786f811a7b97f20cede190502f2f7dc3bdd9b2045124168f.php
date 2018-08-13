<?php

/* agenda/show.html.twig */
class __TwigTemplate_97887a2ae5bf6b9c3e03ff1dd9c434eb8cba72cd3c1215dd15f466c7a8cba033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "agenda/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_096c00b6e13a8cf57ceb8b365102302c3809dde8523d3d6fa462691c9e3c6b5a = $this->env->getExtension("native_profiler");
        $__internal_096c00b6e13a8cf57ceb8b365102302c3809dde8523d3d6fa462691c9e3c6b5a->enter($__internal_096c00b6e13a8cf57ceb8b365102302c3809dde8523d3d6fa462691c9e3c6b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agenda/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_096c00b6e13a8cf57ceb8b365102302c3809dde8523d3d6fa462691c9e3c6b5a->leave($__internal_096c00b6e13a8cf57ceb8b365102302c3809dde8523d3d6fa462691c9e3c6b5a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b6446467d58ae5e45dd66ebacf61500e2657825fb0f289fd49d587c8ac297e4 = $this->env->getExtension("native_profiler");
        $__internal_9b6446467d58ae5e45dd66ebacf61500e2657825fb0f289fd49d587c8ac297e4->enter($__internal_9b6446467d58ae5e45dd66ebacf61500e2657825fb0f289fd49d587c8ac297e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_9b6446467d58ae5e45dd66ebacf61500e2657825fb0f289fd49d587c8ac297e4->leave($__internal_9b6446467d58ae5e45dd66ebacf61500e2657825fb0f289fd49d587c8ac297e4_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_5c032ae9620293b848198f1e459410c396925c82fc688b58b33ab1d567e250ce = $this->env->getExtension("native_profiler");
        $__internal_5c032ae9620293b848198f1e459410c396925c82fc688b58b33ab1d567e250ce->enter($__internal_5c032ae9620293b848198f1e459410c396925c82fc688b58b33ab1d567e250ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:contracts.html.twig", "agenda/show.html.twig", 3)->display($context);
        
        $__internal_5c032ae9620293b848198f1e459410c396925c82fc688b58b33ab1d567e250ce->leave($__internal_5c032ae9620293b848198f1e459410c396925c82fc688b58b33ab1d567e250ce_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_170262686ac0ccf162f54f3cb0b381bcf03fc22d9bba92062fe1a8f9326330cd = $this->env->getExtension("native_profiler");
        $__internal_170262686ac0ccf162f54f3cb0b381bcf03fc22d9bba92062fe1a8f9326330cd->enter($__internal_170262686ac0ccf162f54f3cb0b381bcf03fc22d9bba92062fe1a8f9326330cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract"))) {
            echo " ";
            $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "agenda/show.html.twig", 5)->display($context);
            echo " ";
        }
        
        $__internal_170262686ac0ccf162f54f3cb0b381bcf03fc22d9bba92062fe1a8f9326330cd->leave($__internal_170262686ac0ccf162f54f3cb0b381bcf03fc22d9bba92062fe1a8f9326330cd_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_2c50e90babe232e65bf43113fcc7454c9caacde84ad974410073d574309dfa23 = $this->env->getExtension("native_profiler");
        $__internal_2c50e90babe232e65bf43113fcc7454c9caacde84ad974410073d574309dfa23->enter($__internal_2c50e90babe232e65bf43113fcc7454c9caacde84ad974410073d574309dfa23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_2c50e90babe232e65bf43113fcc7454c9caacde84ad974410073d574309dfa23->leave($__internal_2c50e90babe232e65bf43113fcc7454c9caacde84ad974410073d574309dfa23_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9f06a28ff6e507630ea7b00f3d53f0c3217c3eb0835c35fce1a46da2618e12c = $this->env->getExtension("native_profiler");
        $__internal_d9f06a28ff6e507630ea7b00f3d53f0c3217c3eb0835c35fce1a46da2618e12c->enter($__internal_d9f06a28ff6e507630ea7b00f3d53f0c3217c3eb0835c35fce1a46da2618e12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"body-content\">
\t\t";
        // line 10
        $this->loadTemplate("BoAdminBundle:Agenda:showactions.html.twig", "agenda/show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t<div class=\"show_content\">
\t\t\t";
        // line 12
        $this->loadTemplate("BoAdminBundle:Agenda:tbshow.html.twig", "agenda/show.html.twig", 12)->display($context);
        // line 13
        echo "\t\t</div>
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "invitation", array()) && (twig_length_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "invitation", array())) > 0))) {
            // line 15
            echo "\t\t\t";
            $context["invitations"] = $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "invitation", array());
            // line 16
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 18
            $this->loadTemplate("BoAdminBundle:Invitation:tbliste.html.twig", "agenda/show.html.twig", 18)->display($context);
            // line 19
            echo "\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t";
        if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : null), "cancel", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "cancel", array())) > 0))) {
            // line 22
            echo "\t\t\t";
            $context["cancels"] = $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "cancel", array());
            // line 23
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.canceling", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 26
            $this->loadTemplate("BoAdminBundle:Cancel:tbliste.html.twig", "agenda/show.html.twig", 26)->display($context);
            // line 27
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : null), "substitution", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "substitution", array())) > 0))) {
            // line 31
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 34
            $this->loadTemplate("BoAdminBundle:Contracts:substitutions.html.twig", "agenda/show.html.twig", 34)->display($context);
            // line 35
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 38
        echo "\t</div>
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.alert.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.confirm.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.confirm", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t<!-- begin add cancellation creation form by modal dialog-->
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"add_cancel\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.canceling", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-message\"></div>
\t\t\t<form action=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_add_cancel", array("id" => $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t";
        // line 80
        $this->loadTemplate("BoAdminBundle:Cancel:newform.html.twig", "agenda/show.html.twig", 80)->display($context);
        // line 81
        echo "\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button class=\"close_modal_add\" data-dismiss=\"modal\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t</div>
\t\t\t</form>\t
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>
\t<!-- end cancellation creation form by modal dialog-->

\t<!-- begin add substitution creation form by modal dialog-->
\t<div class=\"container\">
\t\t<!-- Modal -->
\t\t<div class=\"modal fade\" id=\"add_substitution\" role=\"dialog\">
\t\t\t<div class=\"modal-dialog\">
\t\t\t
\t\t\t\t<!-- Modal content-->
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t<h4 class=\"modal-title\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<form action=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_substitution_new", array("idagenda" => $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" class=\"style\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'errors');
        echo "
\t\t\t\t\t\t\t\t";
        // line 110
        $this->loadTemplate("BoAdminBundle:Agenda:substitutionform.html.twig", "agenda/show.html.twig", 110)->display($context);
        // line 111
        echo "\t\t\t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), 'rest');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>\t
\t\t\t\t</div>
\t\t\t  
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- end substitution creation form by modal dialog-->\t

\t";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_d9f06a28ff6e507630ea7b00f3d53f0c3217c3eb0835c35fce1a46da2618e12c->leave($__internal_d9f06a28ff6e507630ea7b00f3d53f0c3217c3eb0835c35fce1a46da2618e12c_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8874a3713d63c9cf1d589dc3d2e8a8a361003c190df4dab667e2127935f14f0e = $this->env->getExtension("native_profiler");
        $__internal_8874a3713d63c9cf1d589dc3d2e8a8a361003c190df4dab667e2127935f14f0e->enter($__internal_8874a3713d63c9cf1d589dc3d2e8a8a361003c190df4dab667e2127935f14f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_8874a3713d63c9cf1d589dc3d2e8a8a361003c190df4dab667e2127935f14f0e->leave($__internal_8874a3713d63c9cf1d589dc3d2e8a8a361003c190df4dab667e2127935f14f0e_prof);

    }

    public function getTemplateName()
    {
        return "agenda/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 126,  331 => 125,  319 => 124,  306 => 114,  299 => 111,  297 => 110,  293 => 109,  288 => 107,  283 => 105,  260 => 85,  256 => 84,  249 => 81,  247 => 80,  243 => 79,  238 => 77,  230 => 74,  209 => 56,  205 => 55,  201 => 54,  195 => 51,  189 => 48,  177 => 38,  172 => 35,  170 => 34,  165 => 32,  162 => 31,  159 => 30,  154 => 27,  152 => 26,  147 => 24,  144 => 23,  141 => 22,  138 => 21,  134 => 19,  132 => 18,  128 => 17,  125 => 16,  122 => 15,  120 => 14,  117 => 13,  115 => 12,  112 => 11,  110 => 10,  107 => 9,  101 => 8,  85 => 7,  73 => 5,  67 => 4,  55 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.contract'|trans([],'BoAdminBundle')}} >> {{'label.teacherschedule'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:contracts.html.twig"%}{% endblock %}	*/
/* {% block nav %}*/
/* 	{%if contract %} {%include "BoAdminBundle:Contracts:rightshow.html.twig"%} {%endif%}*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.contract'|trans([],'BoAdminBundle')}} >> {{'label.teacherschedule'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdminBundle:Agenda:showactions.html.twig"%}*/
/* 		<div class="show_content">*/
/* 			{%include "BoAdminBundle:Agenda:tbshow.html.twig"%}*/
/* 		</div>*/
/* 		{%if schedule.invitation and schedule.invitation|length>0%}*/
/* 			{%set invitations = schedule.invitation%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.invitation'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Invitation:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if schedule.cancel is defined and schedule.cancel|length>0%}*/
/* 			{%set cancels = schedule.cancel%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.canceling'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Cancel:tbliste.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if schedule.substitution is defined and schedule.substitution|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.substitution'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Contracts:substitutions.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
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
/* 	<!-- begin add cancellation creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="add_cancel" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.canceling'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-message"></div>*/
/* 			<form action="{{ path('agenda_add_cancel',{'id':schedule.id})}}" method="post" class="style">*/
/* 				<div class="modal-body">*/
/* 					{{ form_errors(form) }}*/
/* 						{%include "BoAdminBundle:Cancel:newform.html.twig"%}*/
/* 					{{ form_rest(form) }}*/
/* 				</div>*/
/* 				<div class="modal-footer">*/
/* 					<button class="close_modal_add" data-dismiss="modal">{{'action.close'|trans([],'BoAdminBundle')}}</button>*/
/* 					<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 				</div>*/
/* 			</form>	*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* 	<!-- end cancellation creation form by modal dialog-->*/
/* */
/* 	<!-- begin add substitution creation form by modal dialog-->*/
/* 	<div class="container">*/
/* 		<!-- Modal -->*/
/* 		<div class="modal fade" id="add_substitution" role="dialog">*/
/* 			<div class="modal-dialog">*/
/* 			*/
/* 				<!-- Modal content-->*/
/* 				<div class="modal-content">*/
/* 					<div class="modal-header">*/
/* 						<button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 						<h4 class="modal-title">{{'label.addschedule'|trans([],'BoAdminBundle')}}</h4>*/
/* 					</div>*/
/* 					<form action="{{ path('agenda_substitution_new',{'idagenda':schedule.id}) }}" method="post" class="style">*/
/* 						<div class="modal-body">*/
/* 							{{ form_errors(substitution_form) }}*/
/* 								{%include "BoAdminBundle:Agenda:substitutionform.html.twig"%}*/
/* 							{{ form_rest(substitution_form) }}*/
/* 						</div>*/
/* 						<div class="modal-footer">*/
/* 							<input type="submit" value="{{'action.create'|trans([],'BoAdminBundle')}}">*/
/* 						</div>*/
/* 					</form>	*/
/* 				</div>*/
/* 			  */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- end substitution creation form by modal dialog-->	*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
