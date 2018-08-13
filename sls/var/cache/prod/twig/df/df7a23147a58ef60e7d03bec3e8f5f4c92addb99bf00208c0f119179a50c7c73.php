<?php

/* BoAdminBundle:Evaluation:pagesearch.html.twig */
class __TwigTemplate_7494d1cc74bf2ddff15d1ebf1abf521c38005c3b058f41aba27cfc78b96ccb6a extends Twig_Template
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
        $__internal_d7e2853c53131a9e73b30701fcfeeb47a87887f71f1f31e7a1018f7e78ef3111 = $this->env->getExtension("native_profiler");
        $__internal_d7e2853c53131a9e73b30701fcfeeb47a87887f71f1f31e7a1018f7e78ef3111->enter($__internal_d7e2853c53131a9e73b30701fcfeeb47a87887f71f1f31e7a1018f7e78ef3111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Evaluation:tbliste2.html.twig", "BoAdminBundle:Evaluation:pagesearch.html.twig", 1)->display($context);
        
        $__internal_d7e2853c53131a9e73b30701fcfeeb47a87887f71f1f31e7a1018f7e78ef3111->leave($__internal_d7e2853c53131a9e73b30701fcfeeb47a87887f71f1f31e7a1018f7e78ef3111_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Evaluation:tbliste2.html.twig' %}*/
