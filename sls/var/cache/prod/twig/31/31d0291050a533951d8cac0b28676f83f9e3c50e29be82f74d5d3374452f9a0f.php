<?php

/* BoAdminBundle:Securitycote:actions.html.twig */
class __TwigTemplate_ff3b34f55218a1cbb08b9b193993c5bb4112e5b45ea24bde438daec9de04be3b extends Twig_Template
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
        $__internal_21059ee9968500ce33ca88d66462aac6d2d0db325dbcd1bc21768527bb963e57 = $this->env->getExtension("native_profiler");
        $__internal_21059ee9968500ce33ca88d66462aac6d2d0db325dbcd1bc21768527bb963e57->enter($__internal_21059ee9968500ce33ca88d66462aac6d2d0db325dbcd1bc21768527bb963e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "search", array()) == 1))) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "creation", array()) == 1))) {
            echo "\t\t\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_sc\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "liste", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("securitycote_index");
            echo "\">Liste</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal Clearance <span class=\"badge\">";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_21059ee9968500ce33ca88d66462aac6d2d0db325dbcd1bc21768527bb963e57->leave($__internal_21059ee9968500ce33ca88d66462aac6d2d0db325dbcd1bc21768527bb963e57_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  67 => 24,  60 => 20,  54 => 18,  48 => 15,  42 => 13,  36 => 10,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].creation==1%}				*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_sc">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].liste==1%}	*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('securitycote_index') }}">Liste</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total Clearance <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
