<?php

/* BoAdminBundle:Employee:scheduleactions.html.twig */
class __TwigTemplate_25cd981e62f9dc0c7d58298c59383ead25a04cd56344dfb56238667069905c0e extends Twig_Template
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
        $__internal_ba0b335a11a3625f35c05465cc5d85922c47b58ed8ffc4487c5ca7c9355861ea = $this->env->getExtension("native_profiler");
        $__internal_ba0b335a11a3625f35c05465cc5d85922c47b58ed8ffc4487c5ca7c9355861ea->enter($__internal_ba0b335a11a3625f35c05465cc5d85922c47b58ed8ffc4487c5ca7c9355861ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:scheduleactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_schedule", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previous", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.next", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "creation", array()) == 1))) {
            // line 22
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_schedule\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_ba0b335a11a3625f35c05465cc5d85922c47b58ed8ffc4487c5ca7c9355861ea->leave($__internal_ba0b335a11a3625f35c05465cc5d85922c47b58ed8ffc4487c5ca7c9355861ea_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:scheduleactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 25,  71 => 23,  68 => 22,  66 => 21,  60 => 18,  56 => 17,  49 => 13,  45 => 12,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('employee_show',{ 'id': employee.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<a href="{{ path('employee_schedule',{'id':employee.id}) }}">{{'label.currentweek'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<button type="submit" id="btn_previous" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 							{{'label.previous'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<button type="submit" id="btn_next"  title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 							{{'label.next'|trans([],'BoAdminBundle')}}*/
/* 						</button>					*/
/* 					</td>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_schedule">{{'label.addschedule'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					{%endif%}				*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
