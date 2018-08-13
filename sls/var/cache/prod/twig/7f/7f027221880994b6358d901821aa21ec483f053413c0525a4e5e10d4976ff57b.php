<?php

/* BoCoordinatorBundle:Students:show.html.twig */
class __TwigTemplate_370f23fcbad21f4c933ee728d5207bcb55845eec92a558e63a15e30338009e7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("coordinator.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'smenu' => array($this, 'block_smenu'),
            'nav' => array($this, 'block_nav'),
            'label' => array($this, 'block_label'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "coordinator.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52b69e8f50aa022eedb8818d498516bd6479aa8f86f2e4d3881c4449d69c073c = $this->env->getExtension("native_profiler");
        $__internal_52b69e8f50aa022eedb8818d498516bd6479aa8f86f2e4d3881c4449d69c073c->enter($__internal_52b69e8f50aa022eedb8818d498516bd6479aa8f86f2e4d3881c4449d69c073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Students:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52b69e8f50aa022eedb8818d498516bd6479aa8f86f2e4d3881c4449d69c073c->leave($__internal_52b69e8f50aa022eedb8818d498516bd6479aa8f86f2e4d3881c4449d69c073c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_51c86d6bd5c62344edebfdf7d8ad213c1c2d83531853251952a0655df2f1398c = $this->env->getExtension("native_profiler");
        $__internal_51c86d6bd5c62344edebfdf7d8ad213c1c2d83531853251952a0655df2f1398c->enter($__internal_51c86d6bd5c62344edebfdf7d8ad213c1c2d83531853251952a0655df2f1398c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "- ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        echo "  >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        
        $__internal_51c86d6bd5c62344edebfdf7d8ad213c1c2d83531853251952a0655df2f1398c->leave($__internal_51c86d6bd5c62344edebfdf7d8ad213c1c2d83531853251952a0655df2f1398c_prof);

    }

    // line 3
    public function block_smenu($context, array $blocks = array())
    {
        $__internal_7774f7be33eddd68a3a8b17bdf7aa2199ba698a7bd3ac3c51dfc8d7e59bfb387 = $this->env->getExtension("native_profiler");
        $__internal_7774f7be33eddd68a3a8b17bdf7aa2199ba698a7bd3ac3c51dfc8d7e59bfb387->enter($__internal_7774f7be33eddd68a3a8b17bdf7aa2199ba698a7bd3ac3c51dfc8d7e59bfb387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "smenu"));

        $this->loadTemplate("BoCoordinatorBundle:Default:supervision.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 3)->display($context);
        
        $__internal_7774f7be33eddd68a3a8b17bdf7aa2199ba698a7bd3ac3c51dfc8d7e59bfb387->leave($__internal_7774f7be33eddd68a3a8b17bdf7aa2199ba698a7bd3ac3c51dfc8d7e59bfb387_prof);

    }

    // line 4
    public function block_nav($context, array $blocks = array())
    {
        $__internal_64b8c4b27333b030cd2b524c29bc5dccd6887a01210ead7a4eadcbebcf200b9a = $this->env->getExtension("native_profiler");
        $__internal_64b8c4b27333b030cd2b524c29bc5dccd6887a01210ead7a4eadcbebcf200b9a->enter($__internal_64b8c4b27333b030cd2b524c29bc5dccd6887a01210ead7a4eadcbebcf200b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 5
        echo "\t";
        if (((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) != null)) {
            $this->loadTemplate("BoAdminBundle:Students:rightshow.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 5)->display($context);
        }
        echo "\t
";
        
        $__internal_64b8c4b27333b030cd2b524c29bc5dccd6887a01210ead7a4eadcbebcf200b9a->leave($__internal_64b8c4b27333b030cd2b524c29bc5dccd6887a01210ead7a4eadcbebcf200b9a_prof);

    }

    // line 7
    public function block_label($context, array $blocks = array())
    {
        $__internal_cc1c095d53a5e7ba7aa7ad63f7a17bce20b6ad9e9f4e1e195caa902bd512774e = $this->env->getExtension("native_profiler");
        $__internal_cc1c095d53a5e7ba7aa7ad63f7a17bce20b6ad9e9f4e1e195caa902bd512774e->enter($__internal_cc1c095d53a5e7ba7aa7ad63f7a17bce20b6ad9e9f4e1e195caa902bd512774e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        echo "<h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.supervision", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        echo " >> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
        echo "</h1>";
        
        $__internal_cc1c095d53a5e7ba7aa7ad63f7a17bce20b6ad9e9f4e1e195caa902bd512774e->leave($__internal_cc1c095d53a5e7ba7aa7ad63f7a17bce20b6ad9e9f4e1e195caa902bd512774e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f1155f556439c677d8fb70b7c4563c99077170499f56153d63bdef677a7df4 = $this->env->getExtension("native_profiler");
        $__internal_d7f1155f556439c677d8fb70b7c4563c99077170499f56153d63bdef677a7df4->enter($__internal_d7f1155f556439c677d8fb70b7c4563c99077170499f56153d63bdef677a7df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"body-content\">
\t\t";
        // line 10
        $this->loadTemplate("BoCoordinatorBundle:Students:showactions.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 10)->display($context);
        // line 11
        echo "\t\t";
        if ((array_key_exists("contract", $context) && ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null))) {
            // line 12
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 14
            $this->loadTemplate("BoAdminBundle:Students:advisor.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 14)->display($context);
            // line 15
            echo "\t\t\t</div>
\t\t";
        }
        // line 17
        echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend>
\t\t\t";
        // line 19
        $this->loadTemplate("BoAdminBundle:Students:contract.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 19)->display($context);
        // line 20
        echo "\t\t</div>
\t\t";
        // line 21
        if ((array_key_exists("group", $context) && ((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) != null))) {
            // line 22
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t";
            // line 24
            $this->loadTemplate("BoAdminBundle:Contracts:group.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 24)->display($context);
            // line 25
            echo "\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers"))) > 0)) {
            // line 28
            echo "\t\t\t<div class=\"display_content\">
\t\t\t\t<legend>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Teacher", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t\t<div id=\"teacher_content\">
\t\t\t\t\t\t";
            // line 31
            $this->loadTemplate("BoAdminBundle:Students:teachers.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 31)->display($context);
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
            $this->loadTemplate("BoAdminBundle:Students:local.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 38)->display($context);
            // line 39
            echo "\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t";
        if ((isset($context["evaluations"]) ? $context["evaluations"] : $this->getContext($context, "evaluations"))) {
            // line 42
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluation", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 44
            $this->loadTemplate("BoAdminBundle:Students:tbeval.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 44)->display($context);
            // line 45
            echo "\t\t</div>
\t\t";
        }
        // line 47
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) > 0)) {
            // line 48
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.recentabsences", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 50
            $this->loadTemplate("BoCoordinatorBundle:Students:absences.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 50)->display($context);
            // line 51
            echo "\t\t</div>
\t\t";
        }
        // line 53
        echo "\t\t";
        if (((isset($context["timesheets"]) ? $context["timesheets"] : $this->getContext($context, "timesheets")) != null)) {
            // line 54
            echo "\t\t<div class=\"display_content\">
\t\t\t<legend>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.timesheet", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend>
\t\t\t";
            // line 56
            $this->loadTemplate("BoAdminBundle:Students:timesheet.html.twig", "BoCoordinatorBundle:Students:show.html.twig", 56)->display($context);
            // line 57
            echo "\t\t</div>
\t\t";
        }
        // line 59
        echo "\t</div>
";
        
        $__internal_d7f1155f556439c677d8fb70b7c4563c99077170499f56153d63bdef677a7df4->leave($__internal_d7f1155f556439c677d8fb70b7c4563c99077170499f56153d63bdef677a7df4_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Students:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 59,  236 => 57,  234 => 56,  230 => 55,  227 => 54,  224 => 53,  220 => 51,  218 => 50,  214 => 49,  211 => 48,  208 => 47,  204 => 45,  202 => 44,  198 => 43,  195 => 42,  192 => 41,  188 => 39,  186 => 38,  182 => 37,  179 => 36,  176 => 35,  171 => 32,  169 => 31,  164 => 29,  161 => 28,  158 => 27,  154 => 25,  152 => 24,  148 => 23,  145 => 22,  143 => 21,  140 => 20,  138 => 19,  134 => 18,  131 => 17,  127 => 15,  125 => 14,  121 => 13,  118 => 12,  115 => 11,  113 => 10,  110 => 9,  104 => 8,  86 => 7,  74 => 5,  68 => 4,  56 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends 'coordinator.html.twig' %}*/
/* {% block title %}{{parent()}}- {{'entity.supervision'|trans([],'BoAdminBundle')}}  >> {{'label.students'|trans([],'BoAdminBundle')}}  >> {{'action.show'|trans([],'BoAdminBundle')}}{% endblock %}*/
/* {% block smenu %}{%include "BoCoordinatorBundle:Default:supervision.html.twig"%}{% endblock %}*/
/* {% block nav %}*/
/* 	{%if student!=null%}{%include "BoAdminBundle:Students:rightshow.html.twig"%}{%endif%}	*/
/* {% endblock %}*/
/* {% block label %}<h1>{{'entity.supervision'|trans([],'BoAdminBundle')}} >> {{'label.students'|trans([],'BoAdminBundle')}} >> {{'action.show'|trans([],'BoAdminBundle')}}</h1>{% endblock %}*/
/* {% block body %}*/
/* 	<div id="body-content">*/
/* 		{%include "BoCoordinatorBundle:Students:showactions.html.twig"%}*/
/* 		{%if contract is defined and contract!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.advisor'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Students:advisor.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.contract'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:contract.html.twig"%}*/
/* 		</div>*/
/* 		{%if group is defined and group!=null%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'label.group'|trans([],'BoAdminBundle')}}</legend>*/
/* 				{%include "BoAdminBundle:Contracts:group.html.twig"%}*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if teachers|length>0%}*/
/* 			<div class="display_content">*/
/* 				<legend>{{'Teacher'|trans([],'BoAdminBundle')}}</legend>*/
/* 				<div id="teacher_content">*/
/* 						{%include "BoAdminBundle:Students:teachers.html.twig"%}*/
/* 				</div>*/
/* 			</div>*/
/* 		{%endif%}*/
/* 		{%if contract.campus is defined and contract.campus!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.room'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:local.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if evaluations %}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.evaluation'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:tbeval.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if absences|length>0 %}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'label.recentabsences'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoCoordinatorBundle:Students:absences.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 		{%if timesheets!=null%}*/
/* 		<div class="display_content">*/
/* 			<legend>{{'entity.timesheet'|trans([],'BoAdminBundle')}}</legend>*/
/* 			{%include "BoAdminBundle:Students:timesheet.html.twig"%}*/
/* 		</div>*/
/* 		{%endif%}*/
/* 	</div>*/
/* {% endblock %}*/
/* */
