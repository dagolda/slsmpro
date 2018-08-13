<?php

/* BoAdminBundle:Agenda:showactions.html.twig */
class __TwigTemplate_35152d7cd090c5bfe96375eb00e4bb71cba3c11c62413da2f8eae209a6bdaa7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82faa1fd8259b221e0ec7cfcdbe37d975a1591288ec2274657f5f0da7b46298c = $this->env->getExtension("native_profiler");
        $__internal_82faa1fd8259b221e0ec7cfcdbe37d975a1591288ec2274657f5f0da7b46298c->enter($__internal_82faa1fd8259b221e0ec7cfcdbe37d975a1591288ec2274657f5f0da7b46298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("agenda_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1))) {
            // line 14
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_cancel\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.canceling", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Diary", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Diary", array(), "array"), "creation", array()) == 1))) {
            // line 19
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_diary\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.diary", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1))) {
            // line 24
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_substitution\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addsubstitution", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agendastatus"]) ? $context["agendastatus"] : $this->getContext($context, "agendastatus")), $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "status", array()), array(), "array"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_82faa1fd8259b221e0ec7cfcdbe37d975a1591288ec2274657f5f0da7b46298c->leave($__internal_82faa1fd8259b221e0ec7cfcdbe37d975a1591288ec2274657f5f0da7b46298c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  83 => 28,  77 => 25,  74 => 24,  71 => 23,  63 => 20,  60 => 19,  57 => 18,  49 => 15,  46 => 14,  44 => 13,  37 => 11,  30 => 7,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('agenda_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_cancel">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.canceling'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Diary'] is defined and app.session.get('rights')['CONTRACTS']['Diary'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_diary">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.diary'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_substitution">{{'label.addsubstitution'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.status'|trans([],'BoAdminBundle')}} <span class="badge">{{agendastatus[schedule.status]}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
