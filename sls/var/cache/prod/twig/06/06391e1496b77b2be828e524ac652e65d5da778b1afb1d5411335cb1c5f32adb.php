<?php

/* BoAdvisorsBundle:Employee:search.html.twig */
class __TwigTemplate_cf2061aa31dd8028da6e05da885fc09f81a66733caf49e304b3c22d7053901a7 extends Twig_Template
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
        $__internal_0fe49f4b73473a73b5438c8ad2a28b66adce3aaec7fad781c11f95c8575ceb68 = $this->env->getExtension("native_profiler");
        $__internal_0fe49f4b73473a73b5438c8ad2a28b66adce3aaec7fad781c11f95c8575ceb68->enter($__internal_0fe49f4b73473a73b5438c8ad2a28b66adce3aaec7fad781c11f95c8575ceb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Employee:search.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\tSearch results for this criteria \"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "html", null, true);
            echo "\"<br>
\t\tSorry, no response seems match your request.
\t</div>
";
        } else {
            // line 7
            echo "\t";
            $this->loadTemplate("BoAdvisorsBundle:Employee:tbliste.html.twig", "BoAdvisorsBundle:Employee:search.html.twig", 7)->display($context);
        }
        
        $__internal_0fe49f4b73473a73b5438c8ad2a28b66adce3aaec7fad781c11f95c8575ceb68->leave($__internal_0fe49f4b73473a73b5438c8ad2a28b66adce3aaec7fad781c11f95c8575ceb68_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Employee:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		Search results for this criteria "{{criteria}}"<br>*/
/* 		Sorry, no response seems match your request.*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdvisorsBundle:Employee:tbliste.html.twig' %}*/
/* {%endif%}*/
