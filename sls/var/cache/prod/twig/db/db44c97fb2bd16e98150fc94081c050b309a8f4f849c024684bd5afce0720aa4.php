<?php

/* BoAdminBundle:TeamContacts:search.html.twig */
class __TwigTemplate_3bf6fbc3ab420c2bdb67da938889380b88b1b68731b9ab76eec3b5dd1ba92ba4 extends Twig_Template
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
        $__internal_b575132ac7ffecd169d30b1754c552f909154d1861d67df6dc35e7d786ae5d6b = $this->env->getExtension("native_profiler");
        $__internal_b575132ac7ffecd169d30b1754c552f909154d1861d67df6dc35e7d786ae5d6b->enter($__internal_b575132ac7ffecd169d30b1754c552f909154d1861d67df6dc35e7d786ae5d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:search.html.twig"));

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
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["teamcontacts"]) ? $context["teamcontacts"] : $this->getContext($context, "teamcontacts"))), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</span></div>
\t";
            // line 7
            $this->loadTemplate("BoAdminBundle:TeamContacts:tbliste.html.twig", "BoAdminBundle:TeamContacts:search.html.twig", 7)->display($context);
        }
        
        $__internal_b575132ac7ffecd169d30b1754c552f909154d1861d67df6dc35e7d786ae5d6b->leave($__internal_b575132ac7ffecd169d30b1754c552f909154d1861d67df6dc35e7d786ae5d6b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:search.html.twig";
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
/* 	<div class='numberfound'><b>{{'message.searchresult'|trans([],'BoAdminBundle')}}</b> : <span>{%if count is defined%}{{count}} {%else%}{{teamcontacts|length}}{%endif%}{{'message.found'|trans([],'BoAdminBundle')}}</span></div>*/
/* 	{% include 'BoAdminBundle:TeamContacts:tbliste.html.twig' %}*/
/* {%endif%}*/
