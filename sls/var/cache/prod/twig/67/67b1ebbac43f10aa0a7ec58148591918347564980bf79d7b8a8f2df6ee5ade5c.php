<?php

/* BoStudentBundle:Default:contactsearch.html.twig */
class __TwigTemplate_f026180ad47024769f660f38af5049b3f2240dddd650665ba8b6006a11c07afc extends Twig_Template
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
        $__internal_8653b03c1c0d8f3fb8055399abd7a0016657e52a4c385897107039f4a738b243 = $this->env->getExtension("native_profiler");
        $__internal_8653b03c1c0d8f3fb8055399abd7a0016657e52a4c385897107039f4a738b243->enter($__internal_8653b03c1c0d8f3fb8055399abd7a0016657e52a4c385897107039f4a738b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Default:contactsearch.html.twig"));

        // line 1
        if (array_key_exists("criteria", $context)) {
            // line 2
            echo "\t<div class=\"result_content\">
\t\t";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.result", array(), "BoAdminBundle"), "html", null, true);
            echo " \"";
            echo twig_escape_filter($this->env, (isset($context["criteria"]) ? $context["criteria"] : $this->getContext($context, "criteria")), "html", null, true);
            echo "\"<br/>
\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.search.noresult", array(), "BoAdminBundle"), "html", null, true);
            echo ".
\t</div>
";
        } else {
            // line 7
            echo "\t<div class='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 8
            $this->loadTemplate("BoStudentBundle:Default:tblistcontact.html.twig", "BoStudentBundle:Default:contactsearch.html.twig", 8)->display($context);
        }
        
        $__internal_8653b03c1c0d8f3fb8055399abd7a0016657e52a4c385897107039f4a738b243->leave($__internal_8653b03c1c0d8f3fb8055399abd7a0016657e52a4c385897107039f4a738b243_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Default:contactsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  39 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br/>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoStudentBundle:Default:tblistcontact.html.twig' %}*/
/* {%endif%}*/
