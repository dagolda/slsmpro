<?php

/* BoAdminBundle:Students:showactions.html.twig */
class __TwigTemplate_473bef84d9f30a17f0a49c267ff85aac7375de24dc2c31c61a594e8867a12dd9 extends Twig_Template
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
        $__internal_75b6d5b42d4c56bc7fac5d3abf9799b700a21db80c78aa42ea5bcc665fec11b4 = $this->env->getExtension("native_profiler");
        $__internal_75b6d5b42d4c56bc7fac5d3abf9799b700a21db80c78aa42ea5bcc665fec11b4->enter($__internal_75b6d5b42d4c56bc7fac5d3abf9799b700a21db80c78aa42ea5bcc665fec11b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method")))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("students_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("students_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t</td>\t
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_schedule", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t</td>\t\t\t\t
\t\t\t\t";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "others", array()) == 1))) {
            // line 22
            echo "\t\t\t\t\t";
            if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true)) {
                // line 23
                echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button id=\"btn_create\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.createuser", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"idstudent\" value=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "others", array()) == 1)) && ((isset($context["dispabsbtn"]) ? $context["dispabsbtn"] : $this->getContext($context, "dispabsbtn")) == true))) {
            // line 30
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_absence\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addabsence", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_75b6d5b42d4c56bc7fac5d3abf9799b700a21db80c78aa42ea5bcc665fec11b4->leave($__internal_75b6d5b42d4c56bc7fac5d3abf9799b700a21db80c78aa42ea5bcc665fec11b4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  83 => 25,  79 => 24,  76 => 23,  73 => 22,  71 => 21,  64 => 19,  56 => 16,  53 => 15,  45 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].ddelete==1%}*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('search') is defined and app.session.get('search') is not null%}	*/
/* 					<td>*/
/* 						<a href="{{ path('students_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				<td>*/
/* 					<a href="{{ path('students_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>	*/
/* 				<td>*/
/* 					<a href="{{ path('students_schedule',{ 'id': student.id }) }}">{{'label.schedule'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>				*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].others==1%}*/
/* 					{%if user[0] is not defined%}*/
/* 						<td>*/
/* 							<button id="btn_create">{{'action.createuser'|trans([],'BoAdminBundle')}}</button>*/
/* 							<input type="hidden" id="idstudent" value="{{ student.id }}"/>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].others==1 and dispabsbtn==true%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_absence">{{'label.addabsence'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
