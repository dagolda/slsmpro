<?php

/* BoAdminBundle:Students:pagesearch.html.twig */
class __TwigTemplate_390271ba5146b4986bb048cdc2108f9bf2e0045a3de99ffd26069530eb58f588 extends Twig_Template
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
        $__internal_53152eac3f35d753be8ecda97cbbcb42dd47451e7921080e3608fe008b4e755c = $this->env->getExtension("native_profiler");
        $__internal_53152eac3f35d753be8ecda97cbbcb42dd47451e7921080e3608fe008b4e755c->enter($__internal_53152eac3f35d753be8ecda97cbbcb42dd47451e7921080e3608fe008b4e755c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Students:tbliste.html.twig", "BoAdminBundle:Students:pagesearch.html.twig", 1)->display($context);
        
        $__internal_53152eac3f35d753be8ecda97cbbcb42dd47451e7921080e3608fe008b4e755c->leave($__internal_53152eac3f35d753be8ecda97cbbcb42dd47451e7921080e3608fe008b4e755c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Students:tbliste.html.twig' %}*/
