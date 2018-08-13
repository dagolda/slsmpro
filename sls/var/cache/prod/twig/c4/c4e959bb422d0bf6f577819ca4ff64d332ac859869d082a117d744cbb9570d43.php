<?php

/* BoAdminBundle:Contracts:days.html.twig */
class __TwigTemplate_d625755dfb2ad76b08a8fb0821ed59ad59f0ceb6b7f149a3cf764418c3c2460c extends Twig_Template
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
        $__internal_28c93ca385acac8ba86f96043754e33bb9d4ecd1bb594d56b6a40de12d1f43a0 = $this->env->getExtension("native_profiler");
        $__internal_28c93ca385acac8ba86f96043754e33bb9d4ecd1bb594d56b6a40de12d1f43a0->enter($__internal_28c93ca385acac8ba86f96043754e33bb9d4ecd1bb594d56b6a40de12d1f43a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:days.html.twig"));

        // line 1
        echo "\t\t";
        if (((((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true))) {
            // line 2
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t";
        } else {
            // line 4
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                echo ", ";
            }
            // line 5
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                echo ", ";
            }
            // line 6
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                echo ", ";
            }
            // line 7
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                echo ", ";
            }
            // line 8
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                echo " ";
            }
            // line 9
            echo "\t\t";
        }
        
        $__internal_28c93ca385acac8ba86f96043754e33bb9d4ecd1bb594d56b6a40de12d1f43a0->leave($__internal_28c93ca385acac8ba86f96043754e33bb9d4ecd1bb594d56b6a40de12d1f43a0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:days.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  55 => 8,  49 => 7,  43 => 6,  37 => 5,  31 => 4,  25 => 2,  22 => 1,);
    }
}
/* 		{%if schedule.monday==true and schedule.tuesday==true and schedule.wednesday==true and schedule.thursday==true and schedule.friday==true%}*/
/* 			{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 		{%else%}*/
/* 			{%if schedule.monday==true%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 			{%if schedule.tuesday==true%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 			{%if schedule.wednesday==true%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 			{%if schedule.thursday==true%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 			{%if schedule.friday==true%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 		{%endif%}*/
/* */
