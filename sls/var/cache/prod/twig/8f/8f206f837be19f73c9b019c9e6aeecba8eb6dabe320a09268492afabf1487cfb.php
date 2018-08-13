<?php

/* BoAdvisorsBundle:Supervision:show.html.twig */
class __TwigTemplate_a1bffbb516d2990d23ca7ea843a3c2a78eb48200b1af7681d8bfe03eb1a3d6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 1);
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
        $__internal_c46ea7423f7e9385a129179145dcf5ac7070c98d42012f614ea1f5c58c6d003a = $this->env->getExtension("native_profiler");
        $__internal_c46ea7423f7e9385a129179145dcf5ac7070c98d42012f614ea1f5c58c6d003a->enter($__internal_c46ea7423f7e9385a129179145dcf5ac7070c98d42012f614ea1f5c58c6d003a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46ea7423f7e9385a129179145dcf5ac7070c98d42012f614ea1f5c58c6d003a->leave($__internal_c46ea7423f7e9385a129179145dcf5ac7070c98d42012f614ea1f5c58c6d003a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0fc16d0fab08f173b9297d7a9a7fc5c89cd02eaca965ce2ff58eeda4cbd5fa9 = $this->env->getExtension("native_profiler");
        $__internal_c0fc16d0fab08f173b9297d7a9a7fc5c89cd02eaca965ce2ff58eeda4cbd5fa9->enter($__internal_c0fc16d0fab08f173b9297d7a9a7fc5c89cd02eaca965ce2ff58eeda4cbd5fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_c0fc16d0fab08f173b9297d7a9a7fc5c89cd02eaca965ce2ff58eeda4cbd5fa9->leave($__internal_c0fc16d0fab08f173b9297d7a9a7fc5c89cd02eaca965ce2ff58eeda4cbd5fa9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a56e5c232dc1326b85d2046dc3344c467ad3c45ba1bf4641a8acc6c68d353886 = $this->env->getExtension("native_profiler");
        $__internal_a56e5c232dc1326b85d2046dc3344c467ad3c45ba1bf4641a8acc6c68d353886->enter($__internal_a56e5c232dc1326b85d2046dc3344c467ad3c45ba1bf4641a8acc6c68d353886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo " <style>.row.content {height: 100%;}</style>";
        
        $__internal_a56e5c232dc1326b85d2046dc3344c467ad3c45ba1bf4641a8acc6c68d353886->leave($__internal_a56e5c232dc1326b85d2046dc3344c467ad3c45ba1bf4641a8acc6c68d353886_prof);

    }

    // line 4
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_16381d1418573ed6737e5719078110e944c1cfd32023268456777eb58bb0565c = $this->env->getExtension("native_profiler");
        $__internal_16381d1418573ed6737e5719078110e944c1cfd32023268456777eb58bb0565c->enter($__internal_16381d1418573ed6737e5719078110e944c1cfd32023268456777eb58bb0565c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoAdminBundle:Default:tdb.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 4)->display($context);
        
        $__internal_16381d1418573ed6737e5719078110e944c1cfd32023268456777eb58bb0565c->leave($__internal_16381d1418573ed6737e5719078110e944c1cfd32023268456777eb58bb0565c_prof);

    }

    // line 5
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6794a0768d337f26231d58ab18d08c20be4a6b5e34f7c338ff0cc73effc8f4ae = $this->env->getExtension("native_profiler");
        $__internal_6794a0768d337f26231d58ab18d08c20be4a6b5e34f7c338ff0cc73effc8f4ae->enter($__internal_6794a0768d337f26231d58ab18d08c20be4a6b5e34f7c338ff0cc73effc8f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("BoAdminBundle:Contracts:rightshow.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 5)->display($context);
        
        $__internal_6794a0768d337f26231d58ab18d08c20be4a6b5e34f7c338ff0cc73effc8f4ae->leave($__internal_6794a0768d337f26231d58ab18d08c20be4a6b5e34f7c338ff0cc73effc8f4ae_prof);

    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        $__internal_14766f51aab41df5746306e6b41c447d00b4ce49d85ff46c426cf49adcfb9b49 = $this->env->getExtension("native_profiler");
        $__internal_14766f51aab41df5746306e6b41c447d00b4ce49d85ff46c426cf49adcfb9b49->enter($__internal_14766f51aab41df5746306e6b41c447d00b4ce49d85ff46c426cf49adcfb9b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_14766f51aab41df5746306e6b41c447d00b4ce49d85ff46c426cf49adcfb9b49->leave($__internal_14766f51aab41df5746306e6b41c447d00b4ce49d85ff46c426cf49adcfb9b49_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6d6c8ae27135a85053e1842cb4551dace769c3a335a8a17aafa6df38133374 = $this->env->getExtension("native_profiler");
        $__internal_1a6d6c8ae27135a85053e1842cb4551dace769c3a335a8a17aafa6df38133374->enter($__internal_1a6d6c8ae27135a85053e1842cb4551dace769c3a335a8a17aafa6df38133374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div id=\"body-content\">
\t\t";
        // line 9
        $this->loadTemplate("BoAdvisorsBundle:Supervision:showactions.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 9)->display($context);
        // line 10
        echo "
\t\t";
        // line 11
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "group", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()) != null))) {
            // line 12
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 14)->display($context);
            // line 15
            echo "\t\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.training", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 19
        $this->loadTemplate("BoAdvisorsBundle:Supervision:training.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"teacher_content\">
\t\t\t\t";
        // line 24
        $this->loadTemplate("BoAdvisorsBundle:Supervision:teachers.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 24)->display($context);
        // line 25
        echo "\t\t\t</div>
\t\t</div>
\t\t";
        // line 27
        if ((array_key_exists("substitutions", $context) && (twig_length_filter($this->env, (isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions"))) > 0))) {
            // line 28
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t";
            // line 31
            $this->loadTemplate("BoAdminBundle:Contracts:substitutions.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 31)->display($context);
            // line 32
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "\t\t";
        if (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : null), "campus", array(), "any", true, true) && ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "campus", array()) != null))) {
            // line 36
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 38
            $this->loadTemplate("BoAdvisorsBundle:Supervision:local.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 38)->display($context);
            // line 39
            echo "\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Student", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t<div id=\"students_content\">
\t\t\t\t";
        // line 44
        $this->loadTemplate("BoAdvisorsBundle:Supervision:students.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 44)->display($context);
        // line 45
        echo "\t\t\t</div>
\t\t</div>\t
\t\t";
        // line 47
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "advisor", array())) {
            // line 48
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t<div id=\"advisor_content\">
\t\t\t\t";
            // line 51
            $this->loadTemplate("BoAdminBundle:Contracts:advisor.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 51)->display($context);
            // line 52
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t";
        if ((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions"))) {
            // line 56
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revision", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 58
            $this->loadTemplate("BoAdvisorsBundle:Supervision:revision.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 58)->display($context);
            // line 59
            echo "\t\t</div>
\t\t";
        }
        // line 61
        echo "\t\t";
        if ((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator"))) {
            // line 62
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.departmentcontact", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 64
            $this->loadTemplate("BoAdminBundle:Contracts:coordinator.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 64)->display($context);
            // line 65
            echo "\t\t</div>\t
\t\t";
        }
        // line 66
        echo "\t
\t\t";
        // line 67
        if ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array())) {
            // line 68
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notes", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t<div>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "notes", array()), "html", null, true);
            echo "</div>
\t\t</div>\t
\t\t";
        }
        // line 72
        echo "\t\t\t
\t\t<br/>
\t</div>
\t
\t<div class=\"container\">
\t  <!-- Modal -->
\t  <div class=\"modal fade\" id=\"historic_student\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t
\t\t  <!-- Modal content-->
\t\t  <div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t  <h4 class=\"modal-title\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studenthistoric", array(), "BoAdminBundle"), "html", null, true);
        echo "</h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t  ";
        // line 88
        $this->loadTemplate("BoAdminBundle:HistoStudents:tbliste.html.twig", "BoAdvisorsBundle:Supervision:show.html.twig", 88)->display($context);
        // line 89
        echo "\t\t\t</div>
\t\t  </div>
\t\t  
\t\t</div>
\t  </div>
\t</div>

\t";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_1a6d6c8ae27135a85053e1842cb4551dace769c3a335a8a17aafa6df38133374->leave($__internal_1a6d6c8ae27135a85053e1842cb4551dace769c3a335a8a17aafa6df38133374_prof);

    }

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cf52b2536405b400abf0b63be6877af463b738345d307034c24471966a775a6 = $this->env->getExtension("native_profiler");
        $__internal_0cf52b2536405b400abf0b63be6877af463b738345d307034c24471966a775a6->enter($__internal_0cf52b2536405b400abf0b63be6877af463b738345d307034c24471966a775a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_0cf52b2536405b400abf0b63be6877af463b738345d307034c24471966a775a6->leave($__internal_0cf52b2536405b400abf0b63be6877af463b738345d307034c24471966a775a6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 98,  328 => 97,  316 => 96,  307 => 89,  305 => 88,  299 => 85,  284 => 72,  278 => 70,  274 => 69,  271 => 68,  269 => 67,  266 => 66,  262 => 65,  260 => 64,  256 => 63,  253 => 62,  250 => 61,  246 => 59,  244 => 58,  240 => 57,  237 => 56,  234 => 55,  229 => 52,  227 => 51,  222 => 49,  219 => 48,  217 => 47,  213 => 45,  211 => 44,  206 => 42,  203 => 41,  199 => 39,  197 => 38,  193 => 37,  190 => 36,  187 => 35,  182 => 32,  180 => 31,  175 => 29,  172 => 28,  170 => 27,  166 => 25,  164 => 24,  159 => 22,  155 => 20,  153 => 19,  149 => 18,  146 => 17,  142 => 15,  140 => 14,  136 => 13,  133 => 12,  131 => 11,  128 => 10,  126 => 9,  123 => 8,  117 => 7,  97 => 6,  85 => 5,  73 => 4,  60 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}} >> {{'label.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block stylesheets %}{{parent()}} <style>.row.content {height: 100%;}</style>{% endblock %}*/
/* {% block smenu %}{%include "BoAdminBundle:Default:tdb.html.twig"%}{% endblock %}*/
/* {% block nav %}{%include "BoAdminBundle:Contracts:rightshow.html.twig"%}{% endblock %}*/
/* {% block label %}<h1>{{'layout.menu.dashboard'|trans([],'BoAdminBundle')}} >> {{'entity.supervision'|trans([],'BoAdminBundle')}} >> {{'label.contracts'|trans([],'BoAdminBundle')}} >> {{'title.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoAdvisorsBundle:Supervision:showactions.html.twig"%}*/
/* */
/* 		{%if contract.group is defined and contract.group!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.training'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Supervision:training.html.twig"%}*/
/* 		</div>*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="teacher_content">*/
/* 				{%include "BoAdvisorsBundle:Supervision:teachers.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		{%if substitutions is defined and substitutions|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.substitution'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 					{%include "BoAdminBundle:Contracts:substitutions.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contract.campus is defined and contract.campus!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.room'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Supervision:local.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'Student'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="students_content">*/
/* 				{%include "BoAdvisorsBundle:Supervision:students.html.twig"%}*/
/* 			</div>*/
/* 		</div>	*/
/* 		{%if contract.advisor%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.pa'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div id="advisor_content">*/
/* 				{%include "BoAdminBundle:Contracts:advisor.html.twig"%}*/
/* 			</div>*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if revisions%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.revision'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdvisorsBundle:Supervision:revision.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if coordinator%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'title.departmentcontact'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Contracts:coordinator.html.twig"%}*/
/* 		</div>	*/
/* 		{%endif%}	*/
/* 		{%if contract.notes%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.notes'|trans([],'BoAdminBundle')}}</legend>*/
/* 			<div>{{contract.notes}}</div>*/
/* 		</div>	*/
/* 		{%endif%}			*/
/* 		<br/>*/
/* 	</div>*/
/* 	*/
/* 	<div class="container">*/
/* 	  <!-- Modal -->*/
/* 	  <div class="modal fade" id="historic_student" role="dialog">*/
/* 		<div class="modal-dialog">*/
/* 		*/
/* 		  <!-- Modal content-->*/
/* 		  <div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 			  <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/* 			  <h4 class="modal-title">{{'label.studenthistoric'|trans([],'BoAdminBundle')}}</h4>*/
/* 			</div>*/
/* 			<div class="modal-body">*/
/* 			  {%include "BoAdminBundle:HistoStudents:tbliste.html.twig"%}*/
/* 			</div>*/
/* 		  </div>*/
/* 		  */
/* 		</div>*/
/* 	  </div>*/
/* 	</div>*/
/* */
/* 	{% block javascripts %}*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/bootstrap/bootstrap.min.js') }}"></script>*/
/* 		<script type="text/javascript" src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
