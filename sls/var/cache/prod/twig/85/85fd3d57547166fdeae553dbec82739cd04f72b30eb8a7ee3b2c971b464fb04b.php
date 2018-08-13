<?php

/* BoAdminBundle:TeamContacts:pagesearch.html.twig */
class __TwigTemplate_ca4e89b686c0b8cccbdb62b8a9c1fdbe3319352878b0ebb5998cea48aea87c89 extends Twig_Template
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
        $__internal_dee217a0fc6471a3505f6d40e60a02601ab552b82f5aa9a123c9c5f3507f730e = $this->env->getExtension("native_profiler");
        $__internal_dee217a0fc6471a3505f6d40e60a02601ab552b82f5aa9a123c9c5f3507f730e->enter($__internal_dee217a0fc6471a3505f6d40e60a02601ab552b82f5aa9a123c9c5f3507f730e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:TeamContacts:tbliste.html.twig", "BoAdminBundle:TeamContacts:pagesearch.html.twig", 1)->display($context);
        
        $__internal_dee217a0fc6471a3505f6d40e60a02601ab552b82f5aa9a123c9c5f3507f730e->leave($__internal_dee217a0fc6471a3505f6d40e60a02601ab552b82f5aa9a123c9c5f3507f730e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:TeamContacts:tbliste.html.twig' %}*/
