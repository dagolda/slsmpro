<?php

/* BoHomeBundle:Default:maintenance.html.twig */
class __TwigTemplate_5b374d1112e859334472dc3f156811c88b0bea244330c64a13c769cbf8a27b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("maintenance.html.twig", "BoHomeBundle:Default:maintenance.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "maintenance.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ed76d590208da8c4c58fcb6fa02c68d224eeb8b75a2cf2e028a713b04d9b9a9 = $this->env->getExtension("native_profiler");
        $__internal_2ed76d590208da8c4c58fcb6fa02c68d224eeb8b75a2cf2e028a713b04d9b9a9->enter($__internal_2ed76d590208da8c4c58fcb6fa02c68d224eeb8b75a2cf2e028a713b04d9b9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:maintenance.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ed76d590208da8c4c58fcb6fa02c68d224eeb8b75a2cf2e028a713b04d9b9a9->leave($__internal_2ed76d590208da8c4c58fcb6fa02c68d224eeb8b75a2cf2e028a713b04d9b9a9_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:maintenance.html.twig";
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
