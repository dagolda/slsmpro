<?php

/* BoCoordinatorBundle:Students:tblist.html.twig */
class __TwigTemplate_d110cd14a1aabea00c20b6c680742213344b2e1a5e15cd0f1e974d3099242187 extends Twig_Template
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
        $__internal_403ac9553ddd94c7c9333cefe0ac57fd699793b7d4c9997355defb68fd222816 = $this->env->getExtension("native_profiler");
        $__internal_403ac9553ddd94c7c9333cefe0ac57fd699793b7d4c9997355defb68fd222816->enter($__internal_403ac9553ddd94c7c9333cefe0ac57fd699793b7d4c9997355defb68fd222816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoCoordinatorBundle:Students:tblist.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_supervision_students_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["student"], "startlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "startlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["student"], "targetlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["student"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["student"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["student"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_supervision_students_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
        
        $__internal_403ac9553ddd94c7c9333cefe0ac57fd699793b7d4c9997355defb68fd222816->leave($__internal_403ac9553ddd94c7c9333cefe0ac57fd699793b7d4c9997355defb68fd222816_prof);

    }

    public function getTemplateName()
    {
        return "BoCoordinatorBundle:Students:tblist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 33,  135 => 31,  124 => 27,  117 => 25,  109 => 24,  101 => 23,  93 => 22,  85 => 21,  81 => 20,  77 => 19,  71 => 18,  68 => 17,  63 => 16,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for student in students %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('coordinator_supervision_students_show', { 'id': student.id }) }}">{{ student.id }}</a></td>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{%if student.startlevel %}{{ student.startlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.targetlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.creationdate %}{{ student.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('coordinator_supervision_students_show', { 'id': student.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
