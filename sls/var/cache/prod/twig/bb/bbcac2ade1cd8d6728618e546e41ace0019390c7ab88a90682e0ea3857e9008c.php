<?php

/* BoAdminBundle:Default:maintenance.html.twig */
class __TwigTemplate_ff5c5c9a41899b6c8ec2e68fce7d317c303d4595447fc0d1c3b9dd1eb4d43569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("maintenance.html.twig", "BoAdminBundle:Default:maintenance.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "maintenance.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f45ff2a194fc7aef4266e5617f25335ad14400039a1b395cabe86613b938587 = $this->env->getExtension("native_profiler");
        $__internal_6f45ff2a194fc7aef4266e5617f25335ad14400039a1b395cabe86613b938587->enter($__internal_6f45ff2a194fc7aef4266e5617f25335ad14400039a1b395cabe86613b938587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:maintenance.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f45ff2a194fc7aef4266e5617f25335ad14400039a1b395cabe86613b938587->leave($__internal_6f45ff2a194fc7aef4266e5617f25335ad14400039a1b395cabe86613b938587_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'maintenance.html.twig' %}*/
/* */
