<?php

/* BoAdminBundle:Contracts:upcoming.html.twig */
class __TwigTemplate_5a910bd789c8219768b6a4ea6c6c1a8f56cbfca83d95f93ec9801ed564b81548 extends Twig_Template
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
        $__internal_250541f0fd734ec9f55bb42d5c9704350d74a76aa88c9191dffd1f21306c0a6c = $this->env->getExtension("native_profiler");
        $__internal_250541f0fd734ec9f55bb42d5c9704350d74a76aa88c9191dffd1f21306c0a6c->enter($__internal_250541f0fd734ec9f55bb42d5c9704350d74a76aa88c9191dffd1f21306c0a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:upcoming.html.twig"));

        // line 1
        echo "\t<div class='numberfound'><b>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</b> : <span>";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></div>
\t";
        // line 2
        $this->loadTemplate("BoAdminBundle:Contracts:tbliste.html.twig", "BoAdminBundle:Contracts:upcoming.html.twig", 2)->display($context);
        
        $__internal_250541f0fd734ec9f55bb42d5c9704350d74a76aa88c9191dffd1f21306c0a6c->leave($__internal_250541f0fd734ec9f55bb42d5c9704350d74a76aa88c9191dffd1f21306c0a6c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:upcoming.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 2,  22 => 1,);
    }
}
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Contracts:tbliste.html.twig' %}*/
/* */
