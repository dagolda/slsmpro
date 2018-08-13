<?php

/* BoAdminBundle:Client:search.html.twig */
class __TwigTemplate_e7097f8f819b51946ad1b7f617a9984df85d896894494e5288693aa3dda24ada extends Twig_Template
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
        $__internal_bc169cc34e98429e2045515023394cf372c689be43c201a213bf9bccd133ffc7 = $this->env->getExtension("native_profiler");
        $__internal_bc169cc34e98429e2045515023394cf372c689be43c201a213bf9bccd133ffc7->enter($__internal_bc169cc34e98429e2045515023394cf372c689be43c201a213bf9bccd133ffc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Client:search.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Client:tbliste.html.twig", "BoAdminBundle:Client:search.html.twig", 6)->display($context);
        }
        
        $__internal_bc169cc34e98429e2045515023394cf372c689be43c201a213bf9bccd133ffc7->leave($__internal_bc169cc34e98429e2045515023394cf372c689be43c201a213bf9bccd133ffc7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Client:search.html.twig";
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
/* 	{% include 'BoAdminBundle:Client:tbliste.html.twig' %}*/
/* {%endif%}*/
