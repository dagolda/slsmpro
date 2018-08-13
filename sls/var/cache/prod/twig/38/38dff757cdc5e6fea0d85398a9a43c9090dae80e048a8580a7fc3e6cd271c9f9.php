<?php

/* BoAdvisorsBundle:Orderform:extrasearch.html.twig */
class __TwigTemplate_5444f4c7f56a80db777598c5aae76abfe4de3520d6eee1ac854a67964acc4b37 extends Twig_Template
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
        $__internal_556034757be9c4697b789fd7f6ba143ebd18df1aafb0caad04bd739855c81611 = $this->env->getExtension("native_profiler");
        $__internal_556034757be9c4697b789fd7f6ba143ebd18df1aafb0caad04bd739855c81611->enter($__internal_556034757be9c4697b789fd7f6ba143ebd18df1aafb0caad04bd739855c81611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:extrasearch.html.twig"));

        // line 1
        echo "\t";
        if ((twig_length_filter($this->env, (isset($context["orderforms"]) ? $context["orderforms"] : $this->getContext($context, "orderforms"))) > 0)) {
            // line 2
            echo "\t\t<div class='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["orderforms"]) ? $context["orderforms"] : $this->getContext($context, "orderforms"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
        }
        // line 4
        echo "\t";
        $this->loadTemplate("BoAdvisorsBundle:Orderform:tbliste.html.twig", "BoAdvisorsBundle:Orderform:extrasearch.html.twig", 4)->display($context);
        
        $__internal_556034757be9c4697b789fd7f6ba143ebd18df1aafb0caad04bd739855c81611->leave($__internal_556034757be9c4697b789fd7f6ba143ebd18df1aafb0caad04bd739855c81611_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:extrasearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  25 => 2,  22 => 1,);
    }
}
/* 	{% if orderforms|length>0 %}*/
/* 		<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{orderforms|length}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{%endif%}*/
/* 	{% include 'BoAdvisorsBundle:Orderform:tbliste.html.twig' %}*/
/* */
