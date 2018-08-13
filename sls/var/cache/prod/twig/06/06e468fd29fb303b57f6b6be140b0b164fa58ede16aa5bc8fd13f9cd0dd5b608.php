<?php

/* BoAdminBundle:Coordinator:actions.html.twig */
class __TwigTemplate_3c782223f12fd44ef0d3e0d633a24dee93f29cb1810128d4b4674b019cb38197 extends Twig_Template
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
        $__internal_fdbe2588bfabd1b9dc636aa719e5cb50a9d7e96c84d8a7d1ce95cd67ba24a1ba = $this->env->getExtension("native_profiler");
        $__internal_fdbe2588bfabd1b9dc636aa719e5cb50a9d7e96c84d8a7d1ce95cd67ba24a1ba->enter($__internal_fdbe2588bfabd1b9dc636aa719e5cb50a9d7e96c84d8a7d1ce95cd67ba24a1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "creation", array()) == 1))) {
            // line 12
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_coordinator\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "liste", array()) == 1))) {
            // line 17
            echo "\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("coordinator_index");
            echo "\">Coordinator list</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal coordinators <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_fdbe2588bfabd1b9dc636aa719e5cb50a9d7e96c84d8a7d1ce95cd67ba24a1ba->leave($__internal_fdbe2588bfabd1b9dc636aa719e5cb50a9d7e96c84d8a7d1ce95cd67ba24a1ba_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 26,  65 => 22,  58 => 18,  55 => 17,  52 => 16,  46 => 13,  43 => 12,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_coordinator">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].liste==1%}*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('coordinator_index') }}">Coordinator list</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total coordinators <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
