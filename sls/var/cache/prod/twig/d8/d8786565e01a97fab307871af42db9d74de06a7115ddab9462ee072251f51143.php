<?php

/* BoAdminBundle:Substitution:pagesearch.html.twig */
class __TwigTemplate_4322c1323a9bb675cdf926bf7e11cceab39ed791c4e0d547fd47b73b4d8c58fe extends Twig_Template
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
        $__internal_6cf171728b35d1a425069fba7eff6100db707cfff860460fd343950005945ebc = $this->env->getExtension("native_profiler");
        $__internal_6cf171728b35d1a425069fba7eff6100db707cfff860460fd343950005945ebc->enter($__internal_6cf171728b35d1a425069fba7eff6100db707cfff860460fd343950005945ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Substitution:tbliste.html.twig", "BoAdminBundle:Substitution:pagesearch.html.twig", 1)->display($context);
        
        $__internal_6cf171728b35d1a425069fba7eff6100db707cfff860460fd343950005945ebc->leave($__internal_6cf171728b35d1a425069fba7eff6100db707cfff860460fd343950005945ebc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Substitution:tbliste.html.twig' %}*/
