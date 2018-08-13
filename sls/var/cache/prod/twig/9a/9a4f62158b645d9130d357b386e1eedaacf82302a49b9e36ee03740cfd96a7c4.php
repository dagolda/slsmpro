<?php

/* BoAdminBundle:Local:pagesearch.html.twig */
class __TwigTemplate_3a7dda81263921da87740bde1a089eb46253f2fca5a49e92af3243b20ee09d2a extends Twig_Template
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
        $__internal_d7991910338db91cee24a445959839d95e75b218dd3de40b7faa25880f11dfb7 = $this->env->getExtension("native_profiler");
        $__internal_d7991910338db91cee24a445959839d95e75b218dd3de40b7faa25880f11dfb7->enter($__internal_d7991910338db91cee24a445959839d95e75b218dd3de40b7faa25880f11dfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Local:tbliste.html.twig", "BoAdminBundle:Local:pagesearch.html.twig", 1)->display($context);
        
        $__internal_d7991910338db91cee24a445959839d95e75b218dd3de40b7faa25880f11dfb7->leave($__internal_d7991910338db91cee24a445959839d95e75b218dd3de40b7faa25880f11dfb7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Local:tbliste.html.twig' %}*/
