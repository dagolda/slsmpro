<?php

/* BoAdminBundle:Default:pm.html.twig */
class __TwigTemplate_7847763c981621e7d20e4ba9a49d9c55757c42906af5178656eaf7be14427cdc extends Twig_Template
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
        $__internal_57907f48adc1ac2c045ff5e7ff5f5d90d411a9d203784a2771df3af7ccc8500b = $this->env->getExtension("native_profiler");
        $__internal_57907f48adc1ac2c045ff5e7ff5f5d90d411a9d203784a2771df3af7ccc8500b->enter($__internal_57907f48adc1ac2c045ff5e7ff5f5d90d411a9d203784a2771df3af7ccc8500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:pm.html.twig"));

        // line 1
        echo "\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t\t\t  <ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li ";
        // line 3
        if ((array_key_exists("pm", $context) && ((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "tabeau-bord"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bo_admin_homepage");
        echo "\">
\t\t\t\t\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.dashboard", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 8
        if ((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", true, true))) {
            // line 9
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "personnel")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("employee_index");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.staff", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", true, true))) {
            // line 16
            echo "\t\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "contracts")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("contracts_index");
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.contracts", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t";
        if ((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ROOMS", array(), "array", true, true))) {
            // line 23
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "local")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("local_index");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.rooms", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t";
        if ((((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ACCOUNTING", array(), "array", true, true)) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "dts"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "dts"), "method") == 1))) {
            // line 30
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "accounting")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("payroll_timesheet_index");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.accounting", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t\t";
        if ((((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Executive"))) {
            // line 37
            echo "\t\t\t\t\t\t<li ";
            if ((array_key_exists("pm", $context) && ((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "setting"))) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("param_index");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.setting", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t<li ";
        if (((array_key_exists("pm", $context) && array_key_exists("pm", $context)) && ((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "admin"))) {
            echo "class=\"active\"";
        }
        echo ">
\t\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("evaluation_index");
        echo "\">
\t\t\t\t\t\t\t\tADMIN
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 48
        if ((((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Executive"))) {
            // line 49
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "tools")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("activities_index");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.tools", array(), "BoAdminBundle")), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t";
        if ((((array_key_exists("pm", $context) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "profile"), "method", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Superadmin")) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "profile"), "method") == "Executive"))) {
            // line 56
            echo "\t\t\t\t\t\t<li ";
            if (((isset($context["pm"]) ? $context["pm"] : $this->getContext($context, "pm")) == "archives")) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("supemployee_index");
            echo "\">
\t\t\t\t\t\t\t\tARCHIVES
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://slsmpro.com/wpslsm/\" target=\"_blank\">
\t\t\t\t\t\t\t\t";
        // line 64
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("layout.menu.documents", array(), "BoAdminBundle")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
";
        
        $__internal_57907f48adc1ac2c045ff5e7ff5f5d90d411a9d203784a2771df3af7ccc8500b->leave($__internal_57907f48adc1ac2c045ff5e7ff5f5d90d411a9d203784a2771df3af7ccc8500b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:pm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 64,  198 => 62,  190 => 57,  183 => 56,  180 => 55,  173 => 51,  169 => 50,  162 => 49,  160 => 48,  153 => 44,  146 => 43,  139 => 39,  135 => 38,  128 => 37,  125 => 36,  118 => 32,  114 => 31,  107 => 30,  104 => 29,  97 => 25,  93 => 24,  86 => 23,  83 => 22,  76 => 18,  72 => 17,  65 => 16,  62 => 15,  55 => 11,  51 => 10,  44 => 9,  42 => 8,  36 => 5,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 				<div class="collapse navbar-collapse" id="myNavbar">*/
/* 					  <ul class="nav navbar-nav">*/
/* 						<li {%if pm is defined and pm=="tabeau-bord"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('bo_admin_homepage') }}">*/
/* 								{{'layout.menu.dashboard'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%if pm is defined and  app.session.get('rights')['STAFF'] is defined%}*/
/* 						<li {%if pm=="personnel"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('employee_index') }}">*/
/* 								{{'layout.menu.staff'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						{%if pm is defined and  app.session.get('rights')['CONTRACTS'] is defined%}*/
/* 							<li {%if pm=="contracts"%}class="active"{%endif%}>*/
/* 								<a href="{{ path('contracts_index') }}">*/
/* 									{{'layout.menu.contracts'|trans([],'BoAdminBundle')|upper}}*/
/* 								</a>*/
/* 							</li>*/
/* 						{%endif%}*/
/* 						{%if pm is defined and  app.session.get('rights')['ROOMS'] is defined%}*/
/* 						<li {%if pm=="local"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('local_index') }}">*/
/* 								{{'layout.menu.rooms'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						{%if pm is defined and  app.session.get('rights')['ACCOUNTING'] is defined and app.session.get('dts') is defined and app.session.get('dts')==1%}*/
/* 						<li {%if pm=="accounting"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('payroll_timesheet_index') }}">*/
/* 								{{'layout.menu.accounting'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						{%if pm is defined and  app.session.get('profile') is defined and app.session.get('profile')=="Superadmin" or app.session.get('profile')=="Executive"%}*/
/* 						<li {%if pm is defined and  pm=="setting"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('param_index') }}">*/
/* 								{{'layout.menu.setting'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						<li {%if pm is defined and  pm is defined and  pm=="admin"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('evaluation_index') }}">*/
/* 								ADMIN*/
/* 							</a>*/
/* 						</li>*/
/* 						{%if pm is defined and  app.session.get('profile') is defined and app.session.get('profile')=="Superadmin" or app.session.get('profile')=="Executive"%}*/
/* 						<li {%if pm=="tools"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('activities_index') }}">*/
/* 								{{'layout.menu.tools'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						{%if pm is defined and  app.session.get('profile') is defined and app.session.get('profile')=="Superadmin" or app.session.get('profile')=="Executive"%}*/
/* 						<li {%if pm=="archives"%}class="active"{%endif%}>*/
/* 							<a href="{{ path('supemployee_index') }}">*/
/* 								ARCHIVES*/
/* 							</a>*/
/* 						</li>*/
/* 						{%endif%}*/
/* 						<li>*/
/* 							<a href="https://slsmpro.com/wpslsm/" target="_blank">*/
/* 								{{'layout.menu.documents'|trans([],'BoAdminBundle')|upper}}*/
/* 							</a>*/
/* 						</li>*/
/* 					  </ul>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* */
