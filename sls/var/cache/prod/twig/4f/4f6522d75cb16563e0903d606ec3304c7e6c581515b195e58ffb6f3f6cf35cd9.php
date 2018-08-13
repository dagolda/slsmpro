<?php

/* BoAdminBundle:Advisors:pagesearch.html.twig */
class __TwigTemplate_9e96ce0f663f8d896b9455479a48042e149121403e222133d8f656242b701df4 extends Twig_Template
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
        $__internal_c42aeda4f87ce341dd7452af2584ebbef93406032d7851851d70b6fae5d28e7a = $this->env->getExtension("native_profiler");
        $__internal_c42aeda4f87ce341dd7452af2584ebbef93406032d7851851d70b6fae5d28e7a->enter($__internal_c42aeda4f87ce341dd7452af2584ebbef93406032d7851851d70b6fae5d28e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Advisors:tbliste.html.twig", "BoAdminBundle:Advisors:pagesearch.html.twig", 1)->display($context);
        
        $__internal_c42aeda4f87ce341dd7452af2584ebbef93406032d7851851d70b6fae5d28e7a->leave($__internal_c42aeda4f87ce341dd7452af2584ebbef93406032d7851851d70b6fae5d28e7a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Advisors:tbliste.html.twig' %}*/
