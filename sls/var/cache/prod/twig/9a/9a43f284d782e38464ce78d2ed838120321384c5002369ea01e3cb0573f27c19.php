<?php

/* BoAdminBundle:Contracts:selectstatus.html.twig */
class __TwigTemplate_7bfa741f2e42591f6daf198ece0fe3668e56ddfa316fcde7538585434671e5d0 extends Twig_Template
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
        $__internal_f41e8ef1020d8086c2812f131177de093286dd18ff3613877c0aa4032c9bcf4b = $this->env->getExtension("native_profiler");
        $__internal_f41e8ef1020d8086c2812f131177de093286dd18ff3613877c0aa4032c9bcf4b->enter($__internal_f41e8ef1020d8086c2812f131177de093286dd18ff3613877c0aa4032c9bcf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:selectstatus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"1\" ";
        // line 2
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inprogress", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"0\" ";
        // line 3
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 0))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.archived", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 4
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.upcoming", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 5
        if ((array_key_exists("idstatus", $context) && ((isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus")) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.all", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_f41e8ef1020d8086c2812f131177de093286dd18ff3613877c0aa4032c9bcf4b->leave($__internal_f41e8ef1020d8086c2812f131177de093286dd18ff3613877c0aa4032c9bcf4b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:selectstatus.html.twig";
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
/* 					<option value="1" {%if idstatus is defined and idstatus ==1%}selected='selected'{%endif%}>{{'label.inprogress'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="0" {%if idstatus is defined and idstatus ==0%}selected='selected'{%endif%}>{{'label.archived'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idstatus is defined and idstatus ==2%}selected='selected'{%endif%}>{{'label.upcoming'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idstatus is defined and idstatus ==3%}selected='selected'{%endif%}>{{'label.all'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
