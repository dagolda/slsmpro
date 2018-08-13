<?php

/* BoAdminBundle:Absences:search.html.twig */
class __TwigTemplate_c583affe78c9820c56380194d6658204005ab506f0c1d3415620aede7b1b83a5 extends Twig_Template
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
        $__internal_6d3757fcab02e333c1ce1656b4adb326afed3805dd80424346a03fe0312330ff = $this->env->getExtension("native_profiler");
        $__internal_6d3757fcab02e333c1ce1656b4adb326afed3805dd80424346a03fe0312330ff->enter($__internal_6d3757fcab02e333c1ce1656b4adb326afed3805dd80424346a03fe0312330ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:search.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Absences:absemployee.html.twig", "BoAdminBundle:Absences:search.html.twig", 6)->display($context);
        }
        
        $__internal_6d3757fcab02e333c1ce1656b4adb326afed3805dd80424346a03fe0312330ff->leave($__internal_6d3757fcab02e333c1ce1656b4adb326afed3805dd80424346a03fe0312330ff_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:search.html.twig";
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
/* 	{% include 'BoAdminBundle:Absences:absemployee.html.twig' %}*/
/* {%endif%}*/
/* */
