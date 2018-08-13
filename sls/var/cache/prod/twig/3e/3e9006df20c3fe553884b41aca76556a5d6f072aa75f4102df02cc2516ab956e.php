<?php

/* BoAdminBundle:Students:search.html.twig */
class __TwigTemplate_60585dc69149794ee8d7f23bb22cd02702fb96bbb8e6c1c2c6367305fd5750e3 extends Twig_Template
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
        $__internal_aa334a4dd477bc867979549bf4fc14a1ffcc4aa914ad2d0151cbeff47626852b = $this->env->getExtension("native_profiler");
        $__internal_aa334a4dd477bc867979549bf4fc14a1ffcc4aa914ad2d0151cbeff47626852b->enter($__internal_aa334a4dd477bc867979549bf4fc14a1ffcc4aa914ad2d0151cbeff47626852b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:search.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Students:tbliste.html.twig", "BoAdminBundle:Students:search.html.twig", 6)->display($context);
        }
        
        $__internal_aa334a4dd477bc867979549bf4fc14a1ffcc4aa914ad2d0151cbeff47626852b->leave($__internal_aa334a4dd477bc867979549bf4fc14a1ffcc4aa914ad2d0151cbeff47626852b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:search.html.twig";
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
/* 	{% include 'BoAdminBundle:Students:tbliste.html.twig' %}*/
/* {%endif%}*/
