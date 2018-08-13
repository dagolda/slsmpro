<?php

/* BoAdminBundle:Students:searchabs.html.twig */
class __TwigTemplate_df1fd394c0374ab651838831d1fd3ef785793cf1ea0c78da40877ff542ccab68 extends Twig_Template
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
        $__internal_ccb9cf24263ad47592e92c853a2a16a2fd8bf4f5f52da6f72171bd98cc6ce305 = $this->env->getExtension("native_profiler");
        $__internal_ccb9cf24263ad47592e92c853a2a16a2fd8bf4f5f52da6f72171bd98cc6ce305->enter($__internal_ccb9cf24263ad47592e92c853a2a16a2fd8bf4f5f52da6f72171bd98cc6ce305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:searchabs.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Students:absences.html.twig", "BoAdminBundle:Students:searchabs.html.twig", 6)->display($context);
        }
        
        $__internal_ccb9cf24263ad47592e92c853a2a16a2fd8bf4f5f52da6f72171bd98cc6ce305->leave($__internal_ccb9cf24263ad47592e92c853a2a16a2fd8bf4f5f52da6f72171bd98cc6ce305_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:searchabs.html.twig";
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
/* 	{% include 'BoAdminBundle:Students:absences.html.twig' %}*/
/* {%endif%}*/
/* */
