<?php

/* BoAdminBundle:Default:contracts.html.twig */
class __TwigTemplate_b66a8c99925672d7851322bce396aa075a6256b056bd915dbd187f78f9854a8c extends Twig_Template
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
        $__internal_a5614ffd2170b6d48e33b03c44442e05f5414674c29574120fdcbd7f5a3ed370 = $this->env->getExtension("native_profiler");
        $__internal_a5614ffd2170b6d48e33b03c44442e05f5414674c29574120fdcbd7f5a3ed370->enter($__internal_a5614ffd2170b6d48e33b03c44442e05f5414674c29574120fdcbd7f5a3ed370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:contracts.html.twig"));

        // line 1
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "active", array()) == 1))) {
            // line 2
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "contracts")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("contracts_index");
            echo "\">
\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "active", array()) == 1))) {
            // line 9
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "students")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("students_index");
            echo "\">
\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.students", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Groups", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Groups", array(), "array"), "active", array()) == 1))) {
            // line 16
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "group")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("group_index");
            echo "\">
\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.groups", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Customers", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Customers", array(), "array"), "active", array()) == 1))) {
            // line 23
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "client")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("client_index");
            echo "\">
\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.customers", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "active", array()) == 1))) {
            // line 30
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "coordinator")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("coordinator_index");
            echo "\">
\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.coordinators", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Billing Contact", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Billing Contact", array(), "array"), "active", array()) == 1))) {
            // line 37
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "billingcontact")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("billingcontact_index");
            echo "\">
\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.billingcontacts", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 43
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin"))) {
            // line 44
            echo "\t<!--li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "schedule")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("agenda_index");
            echo "\">
\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.teacherschedule", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li-->
";
        }
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Events", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Events", array(), "array"), "active", array()) == 1))) {
            // line 51
            echo "\t<!--li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "events")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("events_index");
            echo "\">
\t\t\t";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.events", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li--!>
";
        }
        // line 57
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "active", array()) == 1))) {
            // line 58
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "absences")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("students_absence_day");
            echo "\">
\t\t\tAbsences
\t\t</a>
\t</li>
";
        }
        // line 64
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Diary", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Diary", array(), "array"), "active", array()) == 1))) {
            // line 65
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "diary")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("diary_index");
            echo "\">
\t\t\t";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.diary", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Prices", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Prices", array(), "array"), "active", array()) == 1))) {
            // line 72
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "prices")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 73
            echo $this->env->getExtension('routing')->getPath("pricesreference_index");
            echo "\">
\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.priceguide", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 78
        echo "
";
        
        $__internal_a5614ffd2170b6d48e33b03c44442e05f5414674c29574120fdcbd7f5a3ed370->leave($__internal_a5614ffd2170b6d48e33b03c44442e05f5414674c29574120fdcbd7f5a3ed370_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 78,  232 => 74,  228 => 73,  221 => 72,  219 => 71,  212 => 67,  208 => 66,  201 => 65,  199 => 64,  191 => 59,  184 => 58,  182 => 57,  175 => 53,  171 => 52,  164 => 51,  162 => 50,  155 => 46,  151 => 45,  144 => 44,  142 => 43,  135 => 39,  131 => 38,  124 => 37,  122 => 36,  115 => 32,  111 => 31,  104 => 30,  102 => 29,  95 => 25,  91 => 24,  84 => 23,  82 => 22,  75 => 18,  71 => 17,  64 => 16,  62 => 15,  55 => 11,  51 => 10,  44 => 9,  42 => 8,  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].active==1%}*/
/* 	<li {%if sm=="contracts"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('contracts_index') }}">*/
/* 			{{'layout.menu.contracts'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].active==1%}*/
/* 	<li {%if sm=="students"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('students_index') }}">*/
/* 			{{'layout.menu.students'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Groups'] is defined and app.session.get('rights')['CONTRACTS']['Groups'].active==1%}*/
/* 	<li {%if sm=="group"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('group_index') }}">*/
/* 			{{'layout.menu.groups'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Customers'] is defined and app.session.get('rights')['CONTRACTS']['Customers'].active==1%}*/
/* 	<li {%if sm=="client"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('client_index') }}">*/
/* 			{{'layout.menu.customers'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].active==1%}*/
/* 	<li {%if sm=="coordinator"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('coordinator_index') }}">*/
/* 			{{'layout.menu.coordinators'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Billing Contact'] is defined and app.session.get('rights')['CONTRACTS']['Billing Contact'].active==1%}*/
/* 	<li {%if sm=="billingcontact"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('billingcontact_index') }}">*/
/* 			{{'layout.menu.billingcontacts'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('profile') is defined and app.session.get('profile')=="Superadmin"%}*/
/* 	<!--li {%if sm=="schedule"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('agenda_index') }}">*/
/* 			{{'layout.menu.teacherschedule'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li-->*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Events'] is defined and app.session.get('rights')['CONTRACTS']['Events'].active==1%}*/
/* 	<!--li {%if sm=="events"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('events_index') }}">*/
/* 			{{'layout.menu.events'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li--!>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].active==1%}*/
/* 	<li {%if sm=="absences"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('students_absence_day') }}">*/
/* 			Absences*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Diary'] is defined and app.session.get('rights')['CONTRACTS']['Diary'].active==1%}*/
/* 	<li {%if sm=="diary"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('diary_index') }}">*/
/* 			{{'layout.menu.diary'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if app.session.get('rights')['CONTRACTS']['Prices'] is defined and app.session.get('rights')['CONTRACTS']['Prices'].active==1%}*/
/* 	<li {%if sm=="prices"%}class="active"{%endif%}>*/
/* 		<a href="{{ path('pricesreference_index') }}">*/
/* 			{{'layout.menu.priceguide'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* */
/* */
