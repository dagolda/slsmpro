<?php

/* BoAdminBundle:Agenda:actions2.html.twig */
class __TwigTemplate_563d21dd2bc5c0e6699ad03d6190ec428705ecdb56536974b88123ca9c937811 extends Twig_Template
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
        $__internal_09e4c33da3b6c8c6e870d30a2001e4810975e854732dd5665ca9c483721a1987 = $this->env->getExtension("native_profiler");
        $__internal_09e4c33da3b6c8c6e870d30a2001e4810975e854732dd5665ca9c483721a1987->enter($__internal_09e4c33da3b6c8c6e870d30a2001e4810975e854732dd5665ca9c483721a1987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:actions2.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#advanced_search\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advanced.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t";
        // line 11
        if ((array_key_exists("closed", $context) && ((isset($context["closed"]) ? $context["closed"] : $this->getContext($context, "closed")) == 1))) {
            // line 12
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("agenda_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("agenda_closed");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.closed", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_09e4c33da3b6c8c6e870d30a2001e4810975e854732dd5665ca9c483721a1987->leave($__internal_09e4c33da3b6c8c6e870d30a2001e4810975e854732dd5665ca9c483721a1987_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:actions2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  50 => 14,  42 => 12,  40 => 11,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td><button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#advanced_search">{{'label.advanced.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 					{%if closed is defined and closed==1%}*/
/* 						<a href="{{ path('agenda_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%else%}*/
/* 						<a href="{{ path('agenda_closed') }}">{{'title.closed'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
