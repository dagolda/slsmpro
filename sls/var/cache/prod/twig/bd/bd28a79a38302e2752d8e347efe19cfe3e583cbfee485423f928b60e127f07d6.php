<?php

/* BoAdvisorsBundle:Enquiry:search.html.twig */
class __TwigTemplate_185b165a7f44dd842796ce60096d4a840a441cbef7ab43e6ba9b550740724276 extends Twig_Template
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
        $__internal_bf32eeb65b4686d0d4e1b47e7ea05e3de5cd7898615f5ad304a2c3b310cd4013 = $this->env->getExtension("native_profiler");
        $__internal_bf32eeb65b4686d0d4e1b47e7ea05e3de5cd7898615f5ad304a2c3b310cd4013->enter($__internal_bf32eeb65b4686d0d4e1b47e7ea05e3de5cd7898615f5ad304a2c3b310cd4013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:search.html.twig"));

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
            $this->loadTemplate("BoAdvisorsBundle:Enquiry:tbliste.html.twig", "BoAdvisorsBundle:Enquiry:search.html.twig", 6)->display($context);
        }
        
        $__internal_bf32eeb65b4686d0d4e1b47e7ea05e3de5cd7898615f5ad304a2c3b310cd4013->leave($__internal_bf32eeb65b4686d0d4e1b47e7ea05e3de5cd7898615f5ad304a2c3b310cd4013_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:search.html.twig";
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
/* 	{% include 'BoAdvisorsBundle:Enquiry:tbliste.html.twig' %}*/
/* {%endif%}*/
