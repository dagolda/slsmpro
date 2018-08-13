<?php

/* BoAdminBundle:Param:search.html.twig */
class __TwigTemplate_89a967de99b107af636e7635363b7fdfc58657a61764e0e6ba1505d36fbf976f extends Twig_Template
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
        $__internal_0faf7507244908f110110695fcbbe5034d4642a9bbed6706d688710a7c167daa = $this->env->getExtension("native_profiler");
        $__internal_0faf7507244908f110110695fcbbe5034d4642a9bbed6706d688710a7c167daa->enter($__internal_0faf7507244908f110110695fcbbe5034d4642a9bbed6706d688710a7c167daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Param:search.html.twig"));

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
            echo "\t<div class='numberfound'><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.searchresult", array(), "BoAdminBundle"), "html", null, true);
            echo "</b> : <span>";
            if (array_key_exists("count", $context)) {
                echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees"))), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 7
            $this->loadTemplate("BoAdminBundle:Param:tbliste.html.twig", "BoAdminBundle:Param:search.html.twig", 7)->display($context);
        }
        
        $__internal_0faf7507244908f110110695fcbbe5034d4642a9bbed6706d688710a7c167daa->leave($__internal_0faf7507244908f110110695fcbbe5034d4642a9bbed6706d688710a7c167daa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Param:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  33 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if criteria is defined %}*/
/* 	<div class="result_content">*/
/* 		{{'message.search.noresult'|trans([],'BoAdminBundle')}}*/
/* 	</div>*/
/* {%else%}*/
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{%if count is defined%}{{count}} {%else%}{{employees|length}}{%endif%}{{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Param:tbliste.html.twig' %}*/
/* {%endif%}*/
