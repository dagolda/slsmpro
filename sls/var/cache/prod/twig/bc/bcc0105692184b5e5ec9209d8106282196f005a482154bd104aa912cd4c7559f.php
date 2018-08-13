<?php

/* BoAdminBundle:Employee:showactions.html.twig */
class __TwigTemplate_b9729d9ef56aa2917955cbec0463f3ceff8bbe468e10585463e38b9ed11c43ae extends Twig_Template
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
        $__internal_1835feffa82b934e47944dc2993b5b745c6a2473417fe99691619778a766a557 = $this->env->getExtension("native_profiler");
        $__internal_1835feffa82b934e47944dc2993b5b745c6a2473417fe99691619778a766a557->enter($__internal_1835feffa82b934e47944dc2993b5b745c6a2473417fe99691619778a766a557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.archive", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#setting\">
\t\t\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.setting", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t<td>
\t\t\t\t\t";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method")))) {
            echo "\t
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("employee_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        } elseif (($this->getAttribute($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "wcont"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "wcont"), "method") == 1))) {
            // line 21
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("employee_active");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("employee_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_schedule", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t\t";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t";
        // line 31
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dat"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 32
            echo "\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tsdoc_index", array("idemployee" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.timesheet", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t</td>\t
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t
\t\t\t\t<td>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_spec\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.adminhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t</td>
\t\t\t\t";
        // line 39
        if ((null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 40
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_user_create", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.createuser", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "others", array()) == 1))) {
            // line 45
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_sendlogin", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sendlogin", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_absence\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 53
        if (($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "active", array()) == false)) {
            // line 54
            echo "\t\t\t\t\t\t\t<span class=\"btn ping-color\">
\t\t\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.disable", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 57
(isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "available", array()) == false)) {
            // line 58
            echo "\t\t\t\t\t\t\t<span class=\"btn enquiry_processed\">
\t\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unavailable", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_1835feffa82b934e47944dc2993b5b745c6a2473417fe99691619778a766a557->leave($__internal_1835feffa82b934e47944dc2993b5b745c6a2473417fe99691619778a766a557_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  169 => 59,  166 => 58,  164 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  145 => 49,  137 => 46,  134 => 45,  131 => 44,  123 => 41,  120 => 40,  118 => 39,  111 => 37,  107 => 35,  99 => 33,  96 => 32,  94 => 31,  88 => 28,  84 => 27,  80 => 25,  72 => 23,  64 => 21,  62 => 20,  56 => 19,  52 => 18,  49 => 17,  42 => 13,  34 => 8,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].ddelete==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 							{{'action.archive'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#setting">*/
/* 							{{'label.setting'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				<td>*/
/* 					{%if app.session.get('search') is defined and app.session.get('search') is not null%}	*/
/* 						<a href="{{ path('employee_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%elseif app.session.get('wcont') is defined and app.session.get('wcont')==1%}*/
/* 						<a href="{{ path('employee_active') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%else%}*/
/* 						<a href="{{ path('employee_list') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/* 				</td>*/
/* 				<td>*/
/* 					<a href="{{ path('employee_schedule',{ 'id': employee.id }) }}">*/
/* 						{{'layout.menu.teacherschedule'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/* 				</td>*/
/* 				{%if app.session.get('dat') is defined and app.session.get('dts')==1%}*/
/* 				<td>*/
/* 					<a href="{{ path('tsdoc_index',{ 'idemployee': employee.id }) }}">{{'label.timesheet'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>	*/
/* 				{%endif%}			*/
/* 				<td>*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_spec">{{'action.add'|trans([],'BoAdminBundle')}} {{'label.adminhours'|trans([],'BoAdminBundle')}}</button>*/
/* 				</td>*/
/* 				{%if user is null%}*/
/* 					<td>*/
/* 						<a href="{{ path('employee_user_create', { 'id': employee.id }) }}">{{'action.createuser'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].others==1%}*/
/* 					<td>*/
/* 						<a href="{{ path('employee_sendlogin', { 'id': employee.id }) }}">{{'action.sendlogin'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_absence">{{'label.addabsence'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						{%if employee.active==false%}*/
/* 							<span class="btn ping-color">*/
/* 								{{'label.disable'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%elseif employee.available==false%}*/
/* 							<span class="btn enquiry_processed">*/
/* 								{{'label.unavailable'|trans([],'BoAdminBundle')}}*/
/* 							</span>*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
