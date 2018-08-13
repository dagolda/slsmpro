<?php

/* BoAdminBundle:Local:search.html.twig */
class __TwigTemplate_405a5187739072e940beb2aa49c5d477739ed777eb25f2f48ed2aacc5efc51ab extends Twig_Template
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
        $__internal_0b395e55f227e707d88b7009e5821ec73ee8768021e3de83e4f2f731f7708a9b = $this->env->getExtension("native_profiler");
        $__internal_0b395e55f227e707d88b7009e5821ec73ee8768021e3de83e4f2f731f7708a9b->enter($__internal_0b395e55f227e707d88b7009e5821ec73ee8768021e3de83e4f2f731f7708a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:search.html.twig"));

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
            if (array_key_exists("count", $context)) {
                echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["locals"]) ? $context["locals"] : $this->getContext($context, "locals"))), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 8
            $this->loadTemplate("BoAdminBundle:Local:tbliste.html.twig", "BoAdminBundle:Local:search.html.twig", 8)->display($context);
        }
        
        $__internal_0b395e55f227e707d88b7009e5821ec73ee8768021e3de83e4f2f731f7708a9b->leave($__internal_0b395e55f227e707d88b7009e5821ec73ee8768021e3de83e4f2f731f7708a9b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  39 => 7,  33 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.result'|trans([],'BoAdminBundle')}} "{{criteria}}"<br/>*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}.*/
/* 	</div>*/
/* {%else%}*/
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{%if count is defined%}{{count}} {%else%}{{locals|length}}{%endif%}{{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Local:tbliste.html.twig' %}*/
/* {%endif%}*/
