<?php

/* BoAdminBundle:Substitution:search.html.twig */
class __TwigTemplate_f2f7f62925915b1872758682c4b37722ceda2185a9534c0f813949d77890051e extends Twig_Template
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
        $__internal_17cfcb263ad161de6fcd90ade08b09679dc78449dc67a5057de2e4b33870579b = $this->env->getExtension("native_profiler");
        $__internal_17cfcb263ad161de6fcd90ade08b09679dc78449dc67a5057de2e4b33870579b->enter($__internal_17cfcb263ad161de6fcd90ade08b09679dc78449dc67a5057de2e4b33870579b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:search.html.twig"));

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
            echo "\t<div id='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 8
            $this->loadTemplate("BoAdminBundle:Substitution:tbliste.html.twig", "BoAdminBundle:Substitution:search.html.twig", 8)->display($context);
        }
        
        $__internal_17cfcb263ad161de6fcd90ade08b09679dc78449dc67a5057de2e4b33870579b->leave($__internal_17cfcb263ad161de6fcd90ade08b09679dc78449dc67a5057de2e4b33870579b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:search.html.twig";
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
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	<div id='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{{count}} {{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Substitution:tbliste.html.twig' %}*/
/* {%endif%}*/
