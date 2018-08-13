<?php

/* BoAdminBundle:Local:actions.html.twig */
class __TwigTemplate_9b446fc30e51ea3ae8adcf638c5478468b1254f052ebf3e06afde3fc06e29be8 extends Twig_Template
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
        $__internal_7970fb095522e36adc0eea9aafefcd3f3da58bd4b747781096358214ff1703b2 = $this->env->getExtension("native_profiler");
        $__internal_7970fb095522e36adc0eea9aafefcd3f3da58bd4b747781096358214ff1703b2->enter($__internal_7970fb095522e36adc0eea9aafefcd3f3da58bd4b747781096358214ff1703b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "search", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td class=\"form-group\">
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "creation", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_local\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "others", array()) == 1))) {
            echo "\t
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("local_newbatch");
            echo "\">Add batch</a>
\t\t\t\t\t</td--!>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()))) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "employee", array()), "profil", array()) == "Superadmin"))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("local_empty");
            echo "\">Empty Local</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->env->getExtension('routing')->getPath("local_upcomingbug");
            echo "\">Upcoming bug</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", false, true), "Room", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ROOMS", array(), "array"), "Room", array(), "array"), "liste", array()) == 1))) {
            echo "\t
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("local_index");
            echo "\">Room list</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal rooms <span class=\"badge\">";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"btn brown_3d_11\">
\t\t\t\t\t\t\t";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.occupied", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"btn wax_3d_3\">
\t\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reserved", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"btn ping-color\">
\t\t\t\t\t\t\t";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unavailable", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<span class=\"btn status_free\">
\t\t\t\t\t\t\t";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.free", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</span>
\t\t\t\t\t</td-->
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_7970fb095522e36adc0eea9aafefcd3f3da58bd4b747781096358214ff1703b2->leave($__internal_7970fb095522e36adc0eea9aafefcd3f3da58bd4b747781096358214ff1703b2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  124 => 53,  116 => 48,  108 => 43,  104 => 41,  97 => 37,  90 => 33,  84 => 31,  78 => 28,  72 => 25,  66 => 23,  60 => 20,  54 => 18,  48 => 15,  42 => 13,  36 => 10,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].search==1%}	*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="submit" id="btn_search">{{'action.search'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].creation==1%}	*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_local">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].others==1%}	*/
/* 					<!--td>*/
/* 						<a href="{{ path('local_newbatch') }}">Add batch</a>*/
/* 					</td--!>*/
/* 				{%endif%}*/
/* 				{% if app.user is defined and app.user.employee.profil is not null and app.user.employee.profil=="Superadmin" %}	*/
/* 					<td>*/
/* 						<a href="{{ path('local_empty') }}">Empty Local</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('local_upcomingbug') }}">Upcoming bug</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['ROOMS']['Room'] is defined and app.session.get('rights')['ROOMS']['Room'].liste==1%}	*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('local_index') }}">Room list</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total rooms <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<span class="btn brown_3d_11">*/
/* 							{{'label.occupied'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<td>*/
/* 						<span class="btn wax_3d_3">*/
/* 							{{'label.reserved'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<td>*/
/* 						<span class="btn ping-color">*/
/* 							{{'label.unavailable'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<span class="btn status_free">*/
/* 							{{'label.free'|trans([],'BoAdminBundle')}}*/
/* 						</span>*/
/* 					</td-->*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
