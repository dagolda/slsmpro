<?php

/* BoAdminBundle:Holidayslist:pagesearch.html.twig */
class __TwigTemplate_2acb9ff5654de08c1cd510e65fd37aca37d66f151b5dfc6661909ce5ef0fdc6f extends Twig_Template
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
        $__internal_e7f284b02886088d50023627a7e03e6f2dfa1abd55321516bfed3f6b53b607f1 = $this->env->getExtension("native_profiler");
        $__internal_e7f284b02886088d50023627a7e03e6f2dfa1abd55321516bfed3f6b53b607f1->enter($__internal_e7f284b02886088d50023627a7e03e6f2dfa1abd55321516bfed3f6b53b607f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Holidayslist:tbliste.html.twig", "BoAdminBundle:Holidayslist:pagesearch.html.twig", 1)->display($context);
        
        $__internal_e7f284b02886088d50023627a7e03e6f2dfa1abd55321516bfed3f6b53b607f1->leave($__internal_e7f284b02886088d50023627a7e03e6f2dfa1abd55321516bfed3f6b53b607f1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Holidayslist:tbliste.html.twig' %}*/
/* */
