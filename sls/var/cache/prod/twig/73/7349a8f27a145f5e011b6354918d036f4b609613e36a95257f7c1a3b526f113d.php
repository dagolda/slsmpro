<?php

/* BoAdvisorsBundle:Tickets:showactions.html.twig */
class __TwigTemplate_ed7e094caa47c21a031262ae9569a827f9841e9b774011bae0fe9501ebb961c5 extends Twig_Template
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
        $__internal_89246ee13ddeb8dbfc1084a4e1cd87eb1c435650784a29fc72441bf4246c6d64 = $this->env->getExtension("native_profiler");
        $__internal_89246ee13ddeb8dbfc1084a4e1cd87eb1c435650784a29fc72441bf4246c6d64->enter($__internal_89246ee13ddeb8dbfc1084a4e1cd87eb1c435650784a29fc72441bf4246c6d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Tickets", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Tickets", array(), "array"), "ddelete", array()) == 1)) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) != 4))) {
            // line 6
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 11
        if (array_key_exists("url", $context)) {
            // line 12
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 14
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("dash_tickets_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        // line 16
        echo "\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 17
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == 1)) {
            // line 18
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_blocked", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.reserve", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t";
        if ((($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == 2) && ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array()) == (isset($context["connected"]) ? $context["connected"] : $this->getContext($context, "connected"))))) {
            // line 23
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_note\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.resolve", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t";
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()) == 3)) {
            // line 28
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_close", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.close", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 32
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_89246ee13ddeb8dbfc1084a4e1cd87eb1c435650784a29fc72441bf4246c6d64->leave($__internal_89246ee13ddeb8dbfc1084a4e1cd87eb1c435650784a29fc72441bf4246c6d64_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  94 => 29,  91 => 28,  88 => 27,  82 => 24,  79 => 23,  76 => 22,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  52 => 14,  44 => 12,  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if app.session.get('rights')['ADMINISTRATION']['Tickets'] is defined and app.session.get('rights')['ADMINISTRATION']['Tickets'].ddelete==1 and ticket.status!=4%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						{%if url is defined%}*/
/* 							<a href="{{ url }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%else%}*/
/* 							<a href="{{ path('dash_tickets_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>						*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					{%if ticket.status==1%}*/
/* 						<td>*/
/* 							<a href="{{ path('dash_tickets_blocked', { 'id': ticket.id }) }}">{{'action.reserve'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if ticket.status==2 and ticket.blockedby==connected%}*/
/* 						<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_note">{{'action.resolve'|trans([],'BoAdminBundle')}}</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					{%if ticket.status==3%}*/
/* 						<td>*/
/* 							<a href="{{ path('dash_tickets_close', { 'id': ticket.id }) }}">{{'action.close'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
