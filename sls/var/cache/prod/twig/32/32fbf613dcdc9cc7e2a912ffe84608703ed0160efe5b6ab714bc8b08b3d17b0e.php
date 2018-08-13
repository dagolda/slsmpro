<?php

/* BoAdminBundle:Agenda:search.html.twig */
class __TwigTemplate_790c9e993717458bb951909e498673afe5ca57713000a01bc098c44f1852b759 extends Twig_Template
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
        $__internal_533f6c668c5b88b72efc0f1d6acfe0eab4fac993247468312cc2db0cb3c233e4 = $this->env->getExtension("native_profiler");
        $__internal_533f6c668c5b88b72efc0f1d6acfe0eab4fac993247468312cc2db0cb3c233e4->enter($__internal_533f6c668c5b88b72efc0f1d6acfe0eab4fac993247468312cc2db0cb3c233e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:search.html.twig"));

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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules"))), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 7
            $this->loadTemplate("BoAdminBundle:Agenda:tbliste2.html.twig", "BoAdminBundle:Agenda:search.html.twig", 7)->display($context);
        }
        
        $__internal_533f6c668c5b88b72efc0f1d6acfe0eab4fac993247468312cc2db0cb3c233e4->leave($__internal_533f6c668c5b88b72efc0f1d6acfe0eab4fac993247468312cc2db0cb3c233e4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:search.html.twig";
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
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{%if count is defined%}{{count}} {%else%}{{schedules|length}}{%endif%}{{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:Agenda:tbliste2.html.twig' %}*/
/* {%endif%}*/
/* */
