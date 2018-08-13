<?php

/* BoAdminBundle:Contracts:search.html.twig */
class __TwigTemplate_58795de327698bcab214b93d0bb1eac561ea3569c8cff6ed1fc589223c108d70 extends Twig_Template
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
        $__internal_0985a643c1f3a3bec7eea35419e65a973212503d79e8067efd51ce8dc445b530 = $this->env->getExtension("native_profiler");
        $__internal_0985a643c1f3a3bec7eea35419e65a973212503d79e8067efd51ce8dc445b530->enter($__internal_0985a643c1f3a3bec7eea35419e65a973212503d79e8067efd51ce8dc445b530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:search.html.twig"));

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
            $this->loadTemplate("BoAdminBundle:Contracts:tbliste.html.twig", "BoAdminBundle:Contracts:search.html.twig", 8)->display($context);
        }
        
        $__internal_0985a643c1f3a3bec7eea35419e65a973212503d79e8067efd51ce8dc445b530->leave($__internal_0985a643c1f3a3bec7eea35419e65a973212503d79e8067efd51ce8dc445b530_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:search.html.twig";
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
/* 	{% include 'BoAdminBundle:Contracts:tbliste.html.twig' %}*/
/* {%endif%}*/
