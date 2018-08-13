<?php

/* BoAdminBundle:Absences:employeeactions.html.twig */
class __TwigTemplate_46561e36faf744b3453e50902efe2cb06b2936ef5fcdc7e30e8eb82a0e3ab98c extends Twig_Template
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
        $__internal_2f789a6d230b24dd3f299717eff058bed6e212b1ab6cc7e56d165c68355a31fb = $this->env->getExtension("native_profiler");
        $__internal_2f789a6d230b24dd3f299717eff058bed6e212b1ab6cc7e56d165c68355a31fb->enter($__internal_2f789a6d230b24dd3f299717eff058bed6e212b1ab6cc7e56d165c68355a31fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:employeeactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1))) {
            // line 12
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_absence\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t";
        if (array_key_exists("now", $context)) {
            // line 17
            echo "\t\t\t\t\t\t<td><a href=\"";
            echo $this->env->getExtension('routing')->getPath("absences_employee_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.allabsences", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t\t<td><a href=\"";
            echo $this->env->getExtension('routing')->getPath("absences_employee_day");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.absencesofday", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
        // line 23
        if (array_key_exists("now", $context)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ofday", array(), "BoAdminBundle"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
            echo " ";
        }
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_2f789a6d230b24dd3f299717eff058bed6e212b1ab6cc7e56d165c68355a31fb->leave($__internal_2f789a6d230b24dd3f299717eff058bed6e212b1ab6cc7e56d165c68355a31fb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:employeeactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  71 => 21,  63 => 19,  55 => 17,  52 => 16,  46 => 13,  43 => 12,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].search==1%}*/
/* 						<td class="form-group">*/
/* 							<input type="text" class="form-control" id="inp-search">*/
/* 						</td>*/
/* 						<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					{%endif%}*/
/* 					{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_absence">{{'label.addabsence'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if now is defined%}*/
/* 						<td><a href="{{ path('absences_employee_index') }}">{{'label.allabsences'|trans([],'BoAdminBundle')}}</a></td>*/
/* 					{%else%}*/
/* 						<td><a href="{{ path('absences_employee_day') }}">{{'label.absencesofday'|trans([],'BoAdminBundle')}}</a></td>*/
/* 					{%endif%}*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {%if now is defined%}{{'label.ofday'|trans([],'BoAdminBundle')}}{%else%}{{'label.all'|trans([],'BoAdminBundle')}} {%endif%} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
