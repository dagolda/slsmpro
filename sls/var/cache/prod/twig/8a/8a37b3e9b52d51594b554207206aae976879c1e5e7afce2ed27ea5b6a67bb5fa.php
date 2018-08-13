<?php

/* BoAdvisorsBundle:Timesheet:selecttype.html.twig */
class __TwigTemplate_5a7c6979af11000298086e3fd791d65ece8afb8681634c82a1d078f596d24c23 extends Twig_Template
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
        $__internal_f7836a7f496e74e0ba24566b70d5d7f247a4637007d3b2c9ff3ea118e43185c3 = $this->env->getExtension("native_profiler");
        $__internal_f7836a7f496e74e0ba24566b70d5d7f247a4637007d3b2c9ff3ea118e43185c3->enter($__internal_f7836a7f496e74e0ba24566b70d5d7f247a4637007d3b2c9ff3ea118e43185c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:selecttype.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idtype' id='idtype'>
\t\t\t\t\t<option value=\"1\" ";
        // line 2
        if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teaching", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 3
        if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.admin", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 4
        if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holiday", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"4\" ";
        // line 5
        if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == 4))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.other", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"5\" ";
        // line 6
        if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == 5))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statutory", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_f7836a7f496e74e0ba24566b70d5d7f247a4637007d3b2c9ff3ea118e43185c3->leave($__internal_f7836a7f496e74e0ba24566b70d5d7f247a4637007d3b2c9ff3ea118e43185c3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:selecttype.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  49 => 5,  41 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idtype' id='idtype'>*/
/* 					<option value="1" {%if idtype is defined and idtype==1%}selected='selected'{%endif%}>{{'label.teaching'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idtype is defined and idtype==2%}selected='selected'{%endif%}>{{'label.admin'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idtype is defined and idtype==3%}selected='selected'{%endif%}>{{'label.holiday'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="4" {%if idtype is defined and idtype==4%}selected='selected'{%endif%}>{{'label.other'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="5" {%if idtype is defined and idtype==5%}selected='selected'{%endif%}>{{'label.statutory'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
