<?php

/* BoAdminBundle:Group:search.html.twig */
class __TwigTemplate_c1a576c210fc8d9ea4d3db68c2e3f9bf5d42043ebca7299f2bf50cef209356f6 extends Twig_Template
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
        $__internal_128c815c987e13022b6299a848b7eba0e9fe85de17f25d3f0639e228a66c6613 = $this->env->getExtension("native_profiler");
        $__internal_128c815c987e13022b6299a848b7eba0e9fe85de17f25d3f0639e228a66c6613->enter($__internal_128c815c987e13022b6299a848b7eba0e9fe85de17f25d3f0639e228a66c6613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.result", array(), "BoAdminBundle"), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, (isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "html", null, true);
            echo "\"<br>
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo ".
\t</div>
";
        } else {
            // line 7
            echo "\t";
            $this->loadTemplate("BoAdminBundle:Group:tbliste.html.twig", "BoAdminBundle:Group:search.html.twig", 7)->display($context);
        }
        
        $__internal_128c815c987e13022b6299a848b7eba0e9fe85de17f25d3f0639e228a66c6613->leave($__internal_128c815c987e13022b6299a848b7eba0e9fe85de17f25d3f0639e228a66c6613_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdminBundle:Group:tbliste.html.twig' %}*/
/* {%endif%}*/
