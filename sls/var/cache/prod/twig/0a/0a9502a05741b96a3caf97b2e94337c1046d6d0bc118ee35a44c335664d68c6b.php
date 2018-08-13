<?php

/* BoAdminBundle:Contracts:actions.html.twig */
class __TwigTemplate_210bdb806e46a5f89de7fc5b261a82076f362897cf2a9b2ee32b5388cfb1ce99 extends Twig_Template
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
        $__internal_fa23aea0be7fbd4d9fbbbf257aeb23b19b1fc0287fd7f466ea0461c7304094ac = $this->env->getExtension("native_profiler");
        $__internal_fa23aea0be7fbd4d9fbbbf257aeb23b19b1fc0287fd7f466ea0461c7304094ac->enter($__internal_fa23aea0be7fbd4d9fbbbf257aeb23b19b1fc0287fd7f466ea0461c7304094ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_search\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
            // line 14
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("contracts_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "liste", array()) == 1))) {
            // line 19
            echo "\t\t\t\t\t<td ";
            if ( !array_key_exists("idfield", $context)) {
                echo "class=\"list_link\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("contracts_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("contracts.list", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td class=\"btn_archived\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_archived\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.archived", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td--!>
\t\t\t\t\t<td class=\"btn_upcoming\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_upcoming\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.upcoming", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["all"]) ? $context["all"] : $this->getContext($context, "all")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inprogress", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["inprogress"]) ? $context["inprogress"] : $this->getContext($context, "inprogress")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.archived", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["archived"]) ? $context["archived"] : $this->getContext($context, "archived")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_fa23aea0be7fbd4d9fbbbf257aeb23b19b1fc0287fd7f466ea0461c7304094ac->leave($__internal_fa23aea0be7fbd4d9fbbbf257aeb23b19b1fc0287fd7f466ea0461c7304094ac_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  107 => 40,  97 => 35,  87 => 30,  80 => 26,  74 => 23,  66 => 20,  59 => 19,  56 => 18,  48 => 15,  45 => 14,  42 => 13,  36 => 10,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 					<td>*/
/* 						<a href="{{ path('contracts_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].liste==1%}*/
/* 					<td {%if idfield is not defined%}class="list_link"{%endif%}>*/
/* 						<a href="{{ path('contracts_index') }}">{{'contracts.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<!--td class="btn_archived">*/
/* 						<button type="submit" id="btn_archived">{{'action.archived'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td--!>*/
/* 					<td class="btn_upcoming">*/
/* 						<button type="submit" id="btn_upcoming">{{'action.upcoming'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.all'|trans([],'BoAdminBundle')}} <span class="badge">{{all|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.inprogress'|trans([],'BoAdminBundle')}} <span class="badge">{{inprogress|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							{{'label.archived'|trans([],'BoAdminBundle')}} <span class="badge">{{archived|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
