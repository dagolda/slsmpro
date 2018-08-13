<?php

/* BoAdminBundle:Coordinator:search.html.twig */
class __TwigTemplate_9b8570ea913588a7a557d5e15a5a7f2b402f8fe7b978cf5339dc7ed4380c262d extends Twig_Template
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
        $__internal_fac0a5f789e9c41c848009b357c5901314d5681500064e816652631e246d17e0 = $this->env->getExtension("native_profiler");
        $__internal_fac0a5f789e9c41c848009b357c5901314d5681500064e816652631e246d17e0->enter($__internal_fac0a5f789e9c41c848009b357c5901314d5681500064e816652631e246d17e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:search.html.twig"));

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
            echo "\t";
            $this->loadTemplate("BoAdminBundle:Coordinator:tbliste.html.twig", "BoAdminBundle:Coordinator:search.html.twig", 7)->display($context);
        }
        
        $__internal_fac0a5f789e9c41c848009b357c5901314d5681500064e816652631e246d17e0->leave($__internal_fac0a5f789e9c41c848009b357c5901314d5681500064e816652631e246d17e0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br/>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	{% include 'BoAdminBundle:Coordinator:tbliste.html.twig' %}*/
/* {%endif%}*/
