<?php

/* BoAdminBundle:Activities:pagesearch.html.twig */
class __TwigTemplate_68593d986fd5920d07a8a052509c063891f4302f51df538d7de7497182cc92bb extends Twig_Template
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
        $__internal_66f1a8be5fe63e2c5da46b64897778289b661daa083374cea99ffa9f027356de = $this->env->getExtension("native_profiler");
        $__internal_66f1a8be5fe63e2c5da46b64897778289b661daa083374cea99ffa9f027356de->enter($__internal_66f1a8be5fe63e2c5da46b64897778289b661daa083374cea99ffa9f027356de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Activities:pagesearch.html.twig"));

        // line 1
        $this->loadTemplate("BoAdminBundle:Activities:tbliste.html.twig", "BoAdminBundle:Activities:pagesearch.html.twig", 1)->display($context);
        
        $__internal_66f1a8be5fe63e2c5da46b64897778289b661daa083374cea99ffa9f027356de->leave($__internal_66f1a8be5fe63e2c5da46b64897778289b661daa083374cea99ffa9f027356de_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Activities:pagesearch.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'BoAdminBundle:Activities:tbliste.html.twig' %}*/
