<?php

/* BoAdminBundle:Employee:savailability.html.twig */
class __TwigTemplate_c9051bc8f8fc2e0424e4b783d44692943470585a00fffdefc0f62026ddc5089a extends Twig_Template
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
        $__internal_28043ac204dcb57ee3fb5b2681d3fbf3f9778f9392b472df1661db6fa26659c8 = $this->env->getExtension("native_profiler");
        $__internal_28043ac204dcb57ee3fb5b2681d3fbf3f9778f9392b472df1661db6fa26659c8->enter($__internal_28043ac204dcb57ee3fb5b2681d3fbf3f9778f9392b472df1661db6fa26659c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:savailability.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idavailability' id='idavailability'>
\t\t\t\t\t<option value=\"1\" ";
        // line 2
        if ((array_key_exists("idavailability", $context) && ($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "id", array()) == 1))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"2\" ";
        // line 3
        if ((array_key_exists("idavailability", $context) && ($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "id", array()) == 2))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.unavailable", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"3\" ";
        // line 4
        if ((array_key_exists("idavailability", $context) && ($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "id", array()) == 3))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t<option value=\"4\" ";
        // line 5
        if ((array_key_exists("idavailability", $context) && ($this->getAttribute((isset($context["availability"]) ? $context["availability"] : $this->getContext($context, "availability")), "id", array()) == 4))) {
            echo "selected='selected'";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inactive", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t";
        
        $__internal_28043ac204dcb57ee3fb5b2681d3fbf3f9778f9392b472df1661db6fa26659c8->leave($__internal_28043ac204dcb57ee3fb5b2681d3fbf3f9778f9392b472df1661db6fa26659c8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:savailability.html.twig";
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
/* 				<select name='idavailability' id='idavailability'>*/
/* 					<option value="1" {%if idavailability is defined and availability.id ==1%}selected='selected'{%endif%}>{{'label.available'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="2" {%if idavailability is defined and availability.id ==2%}selected='selected'{%endif%}>{{'label.unavailable'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="3" {%if idavailability is defined and availability.id ==3%}selected='selected'{%endif%}>{{'label.active'|trans([],'BoAdminBundle')}}</option>*/
/* 					<option value="4" {%if idavailability is defined and availability.id ==4%}selected='selected'{%endif%}>{{'label.inactive'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
