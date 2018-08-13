<?php

/* BoAdvisorsBundle:Tickets:pagesearch.html.twig */
class __TwigTemplate_79b3343889e43d9d333b20cbd4f8fcaac7e10806222c622026c5ecd88327697e extends Twig_Template
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
        $__internal_44840bfd443d435a01cf74e10048814df05ea1d0ba1c25b5a8dbf2ee5bdb5e6f = $this->env->getExtension("native_profiler");
        $__internal_44840bfd443d435a01cf74e10048814df05ea1d0ba1c25b5a8dbf2ee5bdb5e6f->enter($__internal_44840bfd443d435a01cf74e10048814df05ea1d0ba1c25b5a8dbf2ee5bdb5e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdvisorsBundle:Tickets:tbliste.html.twig", "BoAdvisorsBundle:Tickets:pagesearch.html.twig", 1)->display($context);
        
        $__internal_44840bfd443d435a01cf74e10048814df05ea1d0ba1c25b5a8dbf2ee5bdb5e6f->leave($__internal_44840bfd443d435a01cf74e10048814df05ea1d0ba1c25b5a8dbf2ee5bdb5e6f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdvisorsBundle:Tickets:tbliste.html.twig' %}*/
