<?php

/* BoAdvisorsBundle:Enquiry:status.html.twig */
class __TwigTemplate_80508958872d2899d6ac3d8fcc9440b7a4c755c89322fba00200397903c6d319 extends Twig_Template
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
        $__internal_9668c58e459013bffaa40c734a820df6f7d76b9b8634253a16905d7b2e583e8e = $this->env->getExtension("native_profiler");
        $__internal_9668c58e459013bffaa40c734a820df6f7d76b9b8634253a16905d7b2e583e8e->enter($__internal_9668c58e459013bffaa40c734a820df6f7d76b9b8634253a16905d7b2e583e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:status.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" ";
        // line 2
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"1\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.submitted", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.resolved", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 5
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.notresolved", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_9668c58e459013bffaa40c734a820df6f7d76b9b8634253a16905d7b2e583e8e->leave($__internal_9668c58e459013bffaa40c734a820df6f7d76b9b8634253a16905d7b2e583e8e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  41 => 4,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" {%if idstatus is defined and idstatus ==1%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="1" {%if idstatus is defined and idstatus ==1%}selected='selected'{%endif%}>{{'status.submitted'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idstatus is defined and idstatus ==2%}selected='selected'{%endif%}>{{'action.resolved'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idstatus is defined and idstatus ==3%}selected='selected'{%endif%}>{{'action.notresolved'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
