<?php

/* BoUserBundle:User:search.html.twig */
class __TwigTemplate_0b74c513859f61603ac879b0ee7eafc0020d386dacb4a4ccd0c3f9543e0a91a3 extends Twig_Template
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
        $__internal_f41257f44695cd9ee51b1d652ede0ad4dbf723fb4483b711c5fd6c67aa262881 = $this->env->getExtension("native_profiler");
        $__internal_f41257f44695cd9ee51b1d652ede0ad4dbf723fb4483b711c5fd6c67aa262881->enter($__internal_f41257f44695cd9ee51b1d652ede0ad4dbf723fb4483b711c5fd6c67aa262881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:search.html.twig"));

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
            $this->loadTemplate("BoUserBundle:User:tbliste.html.twig", "BoUserBundle:User:search.html.twig", 7)->display($context);
        }
        
        $__internal_f41257f44695cd9ee51b1d652ede0ad4dbf723fb4483b711c5fd6c67aa262881->leave($__internal_f41257f44695cd9ee51b1d652ede0ad4dbf723fb4483b711c5fd6c67aa262881_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:search.html.twig";
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
/* 	{% include 'BoUserBundle:User:tbliste.html.twig' %}*/
/* {%endif%}*/
