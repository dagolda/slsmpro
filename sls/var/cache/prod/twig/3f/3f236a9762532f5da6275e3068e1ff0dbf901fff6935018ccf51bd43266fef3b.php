<?php

/* BoAdminBundle:Group:actions.html.twig */
class __TwigTemplate_77520b5a12a1ea530f3efd842e70f21fa1828d73864e73e26192e4512920ab1c extends Twig_Template
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
        $__internal_80dea40a8cf43533abe9a959468c1c7ea22f59fd563b239591cbdf0876e31eed = $this->env->getExtension("native_profiler");
        $__internal_80dea40a8cf43533abe9a959468c1c7ea22f59fd563b239591cbdf0876e31eed->enter($__internal_80dea40a8cf43533abe9a959468c1c7ea22f59fd563b239591cbdf0876e31eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "search", array()) == 1))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "creation", array()) == 1))) {
            // line 12
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_group\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "others", array()) == 1))) {
            // line 17
            echo "\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("group_newbatch");
            echo "\">Add batch</a>
\t\t\t\t\t</td--!>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("group_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "liste", array()) == 1))) {
            // line 25
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal groups <span class=\"badge\">";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_80dea40a8cf43533abe9a959468c1c7ea22f59fd563b239591cbdf0876e31eed->leave($__internal_80dea40a8cf43533abe9a959468c1c7ea22f59fd563b239591cbdf0876e31eed_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  80 => 27,  76 => 25,  74 => 24,  67 => 22,  64 => 21,  58 => 18,  55 => 17,  52 => 16,  46 => 13,  43 => 12,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_group">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].others==1%}*/
/* 					<!--td>*/
/* 						<a href="{{ path('group_newbatch') }}">Add batch</a>*/
/* 					</td--!>*/
/* 				{%endif%}*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('group_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].liste==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total groups <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
