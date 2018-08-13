<?php

/* BoAdminBundle:Default:tdb.html.twig */
class __TwigTemplate_17c54294bc124c051e43eee0767268b30d7f6765417cb22e2def29876ef56642 extends Twig_Template
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
        $__internal_eae3d6228f18e9ef706afaf02eabd8d596e18c36e6f5b67da81f7efbd4e21ac5 = $this->env->getExtension("native_profiler");
        $__internal_eae3d6228f18e9ef706afaf02eabd8d596e18c36e6f5b67da81f7efbd4e21ac5->enter($__internal_eae3d6228f18e9ef706afaf02eabd8d596e18c36e6f5b67da81f7efbd4e21ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:tdb.html.twig"));

        // line 1
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "home")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("bo_admin_homepage");
        echo "\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.home", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t</a>
</li>
";
        // line 6
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 7
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "timesheet")) {
                echo " class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("dash_timesheet_index");
            echo "\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.timesheet", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 13
        if (((array_key_exists("employee", $context) && $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array())) && ((($this->getAttribute($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array()), "id", array()) == 3) || ($this->getAttribute($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array()), "id", array()) == 5)) || ($this->getAttribute($this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "status", array()), "id", array()) == 6)))) {
            // line 14
            echo "\t<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "contracts")) {
                echo " class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("bo_advisors_mycontracts");
            echo "\">
\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
\t<li ";
            // line 19
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "supervision")) {
                echo " class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("dash_supervision_index", array("status" => 1));
            echo "\">
\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.supervision", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
\t<li ";
            // line 24
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "validation")) {
                echo " class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("dash_validation_index");
            echo "\">
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.validation", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
\t<li ";
            // line 29
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "substitution")) {
                echo " class=\"active\"";
            }
            echo ">
\t\t<a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("dash_substitution_index");
            echo "\">
\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.substitution", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t</a>
\t</li>
";
        }
        // line 35
        echo "<li ";
        if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "absences")) {
            echo " class=\"active\"";
        }
        echo ">
\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("dash_absences_index");
        echo "\">
\t\tAbsences
\t</a>
</li>
";
        // line 40
        if (array_key_exists("exception", $context)) {
            // line 41
            echo "<li ";
            if (((isset($context["sm"]) ? $context["sm"] : $this->getContext($context, "sm")) == "error")) {
                echo " class=\"active\"";
            }
            echo ">
\t<a href=\"#\">
\t\tError Message
\t</a>
</li>
";
        }
        
        $__internal_eae3d6228f18e9ef706afaf02eabd8d596e18c36e6f5b67da81f7efbd4e21ac5->leave($__internal_eae3d6228f18e9ef706afaf02eabd8d596e18c36e6f5b67da81f7efbd4e21ac5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:tdb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  141 => 40,  134 => 36,  127 => 35,  120 => 31,  116 => 30,  110 => 29,  104 => 26,  100 => 25,  94 => 24,  88 => 21,  84 => 20,  78 => 19,  72 => 16,  68 => 15,  61 => 14,  59 => 13,  52 => 9,  48 => 8,  41 => 7,  39 => 6,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {%if sm=="home"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('bo_admin_homepage') }}">*/
/* 		{{'layout.menu.home'|trans([],'BoAdminBundle')}}*/
/* 	</a>*/
/* </li>*/
/* {%if app.session.get('dts') is defined and app.session.get('dts')==1%}*/
/* 	<li {%if sm=="timesheet"%} class="active"{%endif%}>*/
/* 		<a href="{{ path('dash_timesheet_index') }}">*/
/* 			{{'layout.menu.timesheet'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* {%if employee is defined and employee.status and (employee.status.id==3 or employee.status.id==5 or employee.status.id==6)%}*/
/* 	<li {%if sm=="contracts"%} class="active"{%endif%}>*/
/* 		<a href="{{ path('bo_advisors_mycontracts') }}">*/
/* 			{{'layout.menu.contracts'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* 	<li {%if sm=="supervision"%} class="active"{%endif%}>*/
/* 		<a href="{{ path('dash_supervision_index',{'status':1}) }}">*/
/* 			{{'layout.menu.supervision'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* 	<li {%if sm=="validation"%} class="active"{%endif%}>*/
/* 		<a href="{{ path('dash_validation_index') }}">*/
/* 			{{'layout.menu.validation'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* 	<li {%if sm=="substitution"%} class="active"{%endif%}>*/
/* 		<a href="{{ path('dash_substitution_index') }}">*/
/* 			{{'layout.menu.substitution'|trans([],'BoAdminBundle')}}*/
/* 		</a>*/
/* 	</li>*/
/* {%endif%}*/
/* <li {%if sm=="absences"%} class="active"{%endif%}>*/
/* 	<a href="{{ path('dash_absences_index') }}">*/
/* 		Absences*/
/* 	</a>*/
/* </li>*/
/* {%if exception is defined%}*/
/* <li {%if sm=="error"%} class="active"{%endif%}>*/
/* 	<a href="#">*/
/* 		Error Message*/
/* 	</a>*/
/* </li>*/
/* {%endif%}*/
/* */
