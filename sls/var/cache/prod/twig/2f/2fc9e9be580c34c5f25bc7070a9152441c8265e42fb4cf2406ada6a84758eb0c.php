<?php

/* BoAdminBundle:Employee:pagesearch.html.twig */
class __TwigTemplate_87fe8a7213e84c3018512af525f267cdf50cec1a846392ae32a26b4bf7063406 extends Twig_Template
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
        $__internal_90e6833147f6ec67f7f874550337e813c3c9b7fec52532239445bf5115f3ced7 = $this->env->getExtension("native_profiler");
        $__internal_90e6833147f6ec67f7f874550337e813c3c9b7fec52532239445bf5115f3ced7->enter($__internal_90e6833147f6ec67f7f874550337e813c3c9b7fec52532239445bf5115f3ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Employee:tbliste.html.twig", "BoAdminBundle:Employee:pagesearch.html.twig", 1)->display($context);
        
        $__internal_90e6833147f6ec67f7f874550337e813c3c9b7fec52532239445bf5115f3ced7->leave($__internal_90e6833147f6ec67f7f874550337e813c3c9b7fec52532239445bf5115f3ced7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Employee:tbliste.html.twig' %}*/
