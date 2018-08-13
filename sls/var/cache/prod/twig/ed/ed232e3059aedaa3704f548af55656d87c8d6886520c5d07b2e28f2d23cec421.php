<?php

/* BoAdvisorsBundle:Tickets:search.html.twig */
class __TwigTemplate_7f3398a4107f9bdd1ccc461a6fd77795095f4da6f4730a84acc78ddc02c061d7 extends Twig_Template
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
        $__internal_496ac9df5832979e0d204b512f56968b3b6fd79ba09569a2d783f22a460c9577 = $this->env->getExtension("native_profiler");
        $__internal_496ac9df5832979e0d204b512f56968b3b6fd79ba09569a2d783f22a460c9577->enter($__internal_496ac9df5832979e0d204b512f56968b3b6fd79ba09569a2d783f22a460c9577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t</div>
";
        } else {
            // line 6
            echo "\t";
            $this->loadTemplate("BoAdvisorsBundle:Tickets:tbliste.html.twig", "BoAdvisorsBundle:Tickets:search.html.twig", 6)->display($context);
        }
        
        $__internal_496ac9df5832979e0d204b512f56968b3b6fd79ba09569a2d783f22a460c9577->leave($__internal_496ac9df5832979e0d204b512f56968b3b6fd79ba09569a2d783f22a460c9577_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdvisorsBundle:Tickets:tbliste.html.twig' %}*/
/* {%endif%}*/
