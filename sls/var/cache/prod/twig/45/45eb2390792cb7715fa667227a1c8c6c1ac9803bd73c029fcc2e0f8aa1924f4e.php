<?php

/* BoAdvisorsBundle:Orderform:search.html.twig */
class __TwigTemplate_c5472bbf15cb887c9f7a404d1a2a3629040d8acaeb7dfe5d5a689f5657bba6d5 extends Twig_Template
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
        $__internal_f8dfdf06bcb142428663f27407794bc102ea3092765c9b214281d2a6710baeb4 = $this->env->getExtension("native_profiler");
        $__internal_f8dfdf06bcb142428663f27407794bc102ea3092765c9b214281d2a6710baeb4->enter($__internal_f8dfdf06bcb142428663f27407794bc102ea3092765c9b214281d2a6710baeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:search.html.twig"));

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
            $this->loadTemplate("BoAdvisorsBundle:Orderform:tbliste.html.twig", "BoAdvisorsBundle:Orderform:search.html.twig", 6)->display($context);
        }
        
        $__internal_f8dfdf06bcb142428663f27407794bc102ea3092765c9b214281d2a6710baeb4->leave($__internal_f8dfdf06bcb142428663f27407794bc102ea3092765c9b214281d2a6710baeb4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:search.html.twig";
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
/* 	{% include 'BoAdvisorsBundle:Orderform:tbliste.html.twig' %}*/
/* {%endif%}*/
