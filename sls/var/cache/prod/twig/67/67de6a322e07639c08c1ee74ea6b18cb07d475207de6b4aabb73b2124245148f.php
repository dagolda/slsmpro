<?php

/* BoAdvisorsBundle:Timesheet:selectstatus.html.twig */
class __TwigTemplate_463b61840b6bcf40cae57527a6dca3930cb2266c94ef17d7bb276522adc5bd0e extends Twig_Template
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
        $__internal_25196bc917d207829a48872e8d16a6c9c34b90abbc297b902af9bb83ae15d484 = $this->env->getExtension("native_profiler");
        $__internal_25196bc917d207829a48872e8d16a6c9c34b90abbc297b902af9bb83ae15d484->enter($__internal_25196bc917d207829a48872e8d16a6c9c34b90abbc297b902af9bb83ae15d484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:selectstatus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"1\" ";
        // line 2
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("status.submitted", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.validated", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"4\" ";
        // line 5
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 4))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rejected", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_25196bc917d207829a48872e8d16a6c9c34b90abbc297b902af9bb83ae15d484->leave($__internal_25196bc917d207829a48872e8d16a6c9c34b90abbc297b902af9bb83ae15d484_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:selectstatus.html.twig";
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
/* 					<option value="1" {%if idstatus is defined and idstatus ==1%}selected='selected'{%endif%}>{{'status.submitted'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idstatus is defined and idstatus ==2%}selected='selected'{%endif%}>{{'label.inprogress'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idstatus is defined and idstatus ==3%}selected='selected'{%endif%}>{{'label.validated'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="4" {%if idstatus is defined and idstatus ==4%}selected='selected'{%endif%}>{{'label.rejected'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
