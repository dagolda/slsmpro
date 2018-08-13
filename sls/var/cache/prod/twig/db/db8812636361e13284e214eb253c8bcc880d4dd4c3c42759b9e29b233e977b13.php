<?php

/* BoAdminBundle:Advisors:search.html.twig */
class __TwigTemplate_6043a0f393671c29e36c54b2d7eb41c6c496b76bb33666b7052432e1b1862432 extends Twig_Template
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
        $__internal_55011a14198e282fb55096a8c3fb4410d80863b36db1779ae27f09bc2da015b4 = $this->env->getExtension("native_profiler");
        $__internal_55011a14198e282fb55096a8c3fb4410d80863b36db1779ae27f09bc2da015b4->enter($__internal_55011a14198e282fb55096a8c3fb4410d80863b36db1779ae27f09bc2da015b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:search.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Advisors:tbliste.html.twig", "BoAdminBundle:Advisors:search.html.twig", 6)->display($context);
        }
        
        $__internal_55011a14198e282fb55096a8c3fb4410d80863b36db1779ae27f09bc2da015b4->leave($__internal_55011a14198e282fb55096a8c3fb4410d80863b36db1779ae27f09bc2da015b4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:search.html.twig";
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
/* 	{% include 'BoAdminBundle:Advisors:tbliste.html.twig' %}*/
/* {%endif%}*/
