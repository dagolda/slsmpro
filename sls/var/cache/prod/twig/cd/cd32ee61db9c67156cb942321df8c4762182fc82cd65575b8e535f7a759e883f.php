<?php

/* BoAdminBundle:Contracts:pagesearch.html.twig */
class __TwigTemplate_7b297d109bf7b85d5f9dacc9adcce56affc6020bbbaaa9fa6b855d15296f5b8d extends Twig_Template
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
        $__internal_a16ccbfc67e5d6794ef13cbe9bd7929ceff4a35b914c1ca96a335c074dcd742e = $this->env->getExtension("native_profiler");
        $__internal_a16ccbfc67e5d6794ef13cbe9bd7929ceff4a35b914c1ca96a335c074dcd742e->enter($__internal_a16ccbfc67e5d6794ef13cbe9bd7929ceff4a35b914c1ca96a335c074dcd742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Contracts:tbliste.html.twig", "BoAdminBundle:Contracts:pagesearch.html.twig", 1)->display($context);
        
        $__internal_a16ccbfc67e5d6794ef13cbe9bd7929ceff4a35b914c1ca96a335c074dcd742e->leave($__internal_a16ccbfc67e5d6794ef13cbe9bd7929ceff4a35b914c1ca96a335c074dcd742e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Contracts:tbliste.html.twig' %}*/
