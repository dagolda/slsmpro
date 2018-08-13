<?php

/* BoAdminBundle:SupEmployee:pagesearch.html.twig */
class __TwigTemplate_288f3298769cad43b022d698ad426f3e8cf447addac85fe5d078a844561ce086 extends Twig_Template
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
        $__internal_cb8234ee2bcf84c486752021c3854276139945d0b15643e3937d58377aefd3a7 = $this->env->getExtension("native_profiler");
        $__internal_cb8234ee2bcf84c486752021c3854276139945d0b15643e3937d58377aefd3a7->enter($__internal_cb8234ee2bcf84c486752021c3854276139945d0b15643e3937d58377aefd3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:SupEmployee:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:SupEmployee:tbliste.html.twig", "BoAdminBundle:SupEmployee:pagesearch.html.twig", 1)->display($context);
        
        $__internal_cb8234ee2bcf84c486752021c3854276139945d0b15643e3937d58377aefd3a7->leave($__internal_cb8234ee2bcf84c486752021c3854276139945d0b15643e3937d58377aefd3a7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:SupEmployee:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:SupEmployee:tbliste.html.twig' %}*/
