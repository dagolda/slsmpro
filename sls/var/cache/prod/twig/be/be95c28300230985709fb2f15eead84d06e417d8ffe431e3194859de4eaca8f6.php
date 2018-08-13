<?php

/* BoAdminBundle:Securitycote:pagesearch.html.twig */
class __TwigTemplate_e784cfa58d679f7ff0189c6291e152763edba3b11ee9c41d498f7604b7d2559d extends Twig_Template
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
        $__internal_f8c5a24c745a27abade1b0f0b1ee74d433f57deef149d5a693b8472ae9e39f5c = $this->env->getExtension("native_profiler");
        $__internal_f8c5a24c745a27abade1b0f0b1ee74d433f57deef149d5a693b8472ae9e39f5c->enter($__internal_f8c5a24c745a27abade1b0f0b1ee74d433f57deef149d5a693b8472ae9e39f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:SecurityCote:tbliste.html.twig", "BoAdminBundle:Securitycote:pagesearch.html.twig", 1)->display($context);
        
        $__internal_f8c5a24c745a27abade1b0f0b1ee74d433f57deef149d5a693b8472ae9e39f5c->leave($__internal_f8c5a24c745a27abade1b0f0b1ee74d433f57deef149d5a693b8472ae9e39f5c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:SecurityCote:tbliste.html.twig' %}*/
