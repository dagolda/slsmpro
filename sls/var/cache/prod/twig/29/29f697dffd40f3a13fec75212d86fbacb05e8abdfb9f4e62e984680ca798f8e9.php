<?php

/* BoAdminBundle:Activities:tbliste.html.twig */
class __TwigTemplate_7547ae42ced5835db67500d3274dba548dc3708706db4deeacd786ef3c0b5eaa extends Twig_Template
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
        $__internal_ce52b75a888a1c01119fa43f6c68a628d7d1a0cd55d7e3930d2fd77ee3556a6e = $this->env->getExtension("native_profiler");
        $__internal_ce52b75a888a1c01119fa43f6c68a628d7d1a0cd55d7e3930d2fd77ee3556a6e->enter($__internal_ce52b75a888a1c01119fa43f6c68a628d7d1a0cd55d7e3930d2fd77ee3556a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Activities:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.user", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Ip</th>
                <th>Session id</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subrubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) ? $context["activities"] : $this->getContext($context, "activities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activities_show", array("id" => $this->getAttribute($context["activity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            if ($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["activity"], "user", array()), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["activity"], "user", array()), array(), "array"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "ip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["activity"], "sessionid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo $this->getAttribute($context["activity"], "rubric", array());
            echo "</td>
                <td class='wrap' width=\"12%\">";
            // line 22
            echo $this->getAttribute($context["activity"], "subrubric", array());
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["activity"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["activity"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activities_show", array("id" => $this->getAttribute($context["activity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>";
        
        $__internal_ce52b75a888a1c01119fa43f6c68a628d7d1a0cd55d7e3930d2fd77ee3556a6e->leave($__internal_ce52b75a888a1c01119fa43f6c68a628d7d1a0cd55d7e3930d2fd77ee3556a6e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Activities:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  107 => 29,  96 => 25,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  67 => 18,  61 => 17,  58 => 16,  53 => 15,  45 => 10,  41 => 9,  37 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.user'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Ip</th>*/
/*                 <th>Session id</th>*/
/*                 <th>{{'label.rubric'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.subrubric'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for activity in activities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('activities_show', { 'id': activity.id }) }}">{{ activity.id }}</a></td>*/
/*                 <td>{%if users[activity.user] is defined %}{{ users[activity.user]}}{%endif%}</td>*/
/*                 <td>{{ activity.ip }}</td>*/
/*                 <td>{{ activity.sessionid }}</td>*/
/*                 <td>{{ activity.rubric|raw }}</td>*/
/*                 <td class='wrap' width="12%">{{ activity.subrubric|raw }}</td>*/
/*                 <td>{% if activity.creationdate %}{{ activity.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<a href="{{ path('activities_show', { 'id': activity.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
