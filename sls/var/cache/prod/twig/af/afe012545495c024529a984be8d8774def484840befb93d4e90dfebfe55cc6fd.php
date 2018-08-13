<?php

/* BoAdminBundle:Default:personnel.html.twig */
class __TwigTemplate_21961453a72693cf1c4ceebfde4adffc157ab17b8609edb32a5e97ffe1b6d55b extends Twig_Template
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
        $__internal_fad118665c9d86f2e8ba2b5adb4f74d831f40d4d1e2a5db054390aa2c787ec2e = $this->env->getExtension("native_profiler");
        $__internal_fad118665c9d86f2e8ba2b5adb4f74d831f40d4d1e2a5db054390aa2c787ec2e->enter($__internal_fad118665c9d86f2e8ba2b5adb4f74d831f40d4d1e2a5db054390aa2c787ec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:personnel.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "active", array()) == 1))) {
            // line 2
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "employee"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("employee_index");
            echo "\">
\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.employees", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dat"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 9
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Agenda", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Agenda", array(), "array"), "active", array()) == 1))) {
                // line 10
                echo "\t\t<li ";
                if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "agenda"))) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 11
                echo $this->env->getExtension('routing')->getPath("agenda_general");
                echo "\">
\t\t\t\t";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.agenda", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 16
            echo "\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Agenda", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Agenda", array(), "array"), "active", array()) == 1))) {
                // line 17
                echo "\t\t<li ";
                if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "agenda"))) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("bo_calendar_homepage");
                echo "\">
\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.calendar", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t</a>
\t\t</li>
\t";
            }
        }
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Advisor", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Advisor", array(), "array"), "active", array()) == 1))) {
            // line 25
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "advisors"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("advisors_index");
            echo "\">
\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.advisors", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 31
        echo "
\t<li ";
        // line 32
        if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "teamcontacts"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("teamcontacts_index");
        echo "\">
\t\t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teamcontacts", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t</a>
\t</li>
\t<!--li ";
        // line 37
        if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "tadmin"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("tadmin_index");
        echo "\">
\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tadmin", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t</a>
\t</li-->

";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Clearance", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Clearance", array(), "array"), "active", array()) == 1))) {
            // line 44
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "clearance"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("securitycote_index");
            echo "\">
\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.clearance", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Schedule", array(), "array"), "active", array()) == 1))) {
            // line 51
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "schedule"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("agenda_index");
            echo "\">
\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "active", array()) == 1))) {
            // line 58
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "substitution"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("substitution_daylist");
            echo "\">
\t\t\t";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "active", array()) == 1))) {
            // line 65
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "absences"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("absences_employee_day");
            echo "\">
\t\t\tAbsences
\t\t</a>
\t</li>
";
        }
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Holiday", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Holiday", array(), "array"), "active", array()) == 1))) {
            // line 72
            echo "\t<li ";
            if ((array_key_exists("sm", $context) && ((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "holiday"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"#\">
\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.holiday", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        
        $__internal_fad118665c9d86f2e8ba2b5adb4f74d831f40d4d1e2a5db054390aa2c787ec2e->leave($__internal_fad118665c9d86f2e8ba2b5adb4f74d831f40d4d1e2a5db054390aa2c787ec2e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:personnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 74,  222 => 72,  220 => 71,  212 => 66,  205 => 65,  203 => 64,  196 => 60,  192 => 59,  185 => 58,  183 => 57,  176 => 53,  172 => 52,  165 => 51,  163 => 50,  156 => 46,  152 => 45,  145 => 44,  143 => 43,  136 => 39,  132 => 38,  126 => 37,  120 => 34,  116 => 33,  110 => 32,  107 => 31,  100 => 27,  96 => 26,  89 => 25,  87 => 24,  79 => 19,  75 => 18,  68 => 17,  65 => 16,  58 => 12,  54 => 11,  47 => 10,  44 => 9,  42 => 8,  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].active==1%}*/
/* 	<li {%if sm is defined and sm=="employee"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('employee_index') }}">*/
/* 			{{'layout.menu.employees'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('dat') is defined and app.session.get('dts')==1%}*/
/* 	{%if app.session.get('rights')['STAFF']['Agenda'] is defined and app.session.get('rights')['STAFF']['Agenda'].active==1%}*/
/* 		<li {%if sm is defined and sm=="agenda"%}class="active"{%endif%}>*/
/* 			<a href="{{ path('agenda_general') }}">*/
/* 				{{'layout.menu.agenda'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/* 		</li>*/
/* 	{%endif%}*/
/* 	{%if app.session.get('rights')['STAFF']['Agenda'] is defined and app.session.get('rights')['STAFF']['Agenda'].active==1%}*/
/* 		<li {%if sm is defined and sm=="agenda"%}class="active"{%endif%}>*/
/* 			<a href="{{ path('bo_calendar_homepage') }}">*/
/* 				{{'layout.menu.calendar'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/* 		</li>*/
/* 	{%endif%}*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Advisor'] is defined and app.session.get('rights')['STAFF']['Advisor'].active==1%}*/
/* 	<li {%if sm is defined and sm=="advisors"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('advisors_index') }}">*/
/* 			{{'layout.menu.advisors'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* */
/* 	<li {%if sm is defined and sm=="teamcontacts"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('teamcontacts_index') }}">*/
/* 			{{'layout.menu.teamcontacts'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* 	<!--li {%if sm is defined and sm=="tadmin"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('tadmin_index') }}">*/
/* 			{{'label.tadmin'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li-->*/
/* */
/* {%if app.session.get('rights')['STAFF']['Clearance'] is defined and app.session.get('rights')['STAFF']['Clearance'].active==1%}*/
/* 	<li {%if sm is defined and sm=="clearance"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('securitycote_index') }}">*/
/* 			{{'layout.menu.clearance'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Schedule'] is defined and app.session.get('rights')['STAFF']['Schedule'].active==1%}*/
/* 	<li {%if sm is defined and sm=="schedule"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('agenda_index') }}">*/
/* 			{{'layout.menu.teacherschedule'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].active==1%}*/
/* 	<li {%if sm is defined and sm=="substitution"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('substitution_daylist') }}">*/
/* 			{{'layout.menu.substitution'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].active==1%}*/
/* 	<li {%if sm is defined and sm=="absences"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('absences_employee_day') }}">*/
/* 			Absences*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Holiday'] is defined and app.session.get('rights')['STAFF']['Holiday'].active==1%}*/
/* 	<li {%if sm is defined and sm=="holiday"%}class="active"{%endif%}>*/
/* 		<a href="#">*/
/* 			{{'layout.menu.holiday'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* */
