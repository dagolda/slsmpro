<?php

/* BoAdminBundle:Students:absences.html.twig */
class __TwigTemplate_a49a16a89d5dbcd429330b9e0cba0e8f13ebb488ca14914010631e3677a48bc8 extends Twig_Template
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
        $__internal_1ec2895b82367732402c77747246ea26e8ee81b2052e6118ce5476f95b90c7e3 = $this->env->getExtension("native_profiler");
        $__internal_1ec2895b82367732402c77747246ea26e8ee81b2052e6118ce5476f95b90c7e3->enter($__internal_1ec2895b82367732402c77747246ea26e8ee81b2052e6118ce5476f95b90c7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:absences.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noshow", array(), "BoAdminBundle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            if ($this->getAttribute($context["absence"], "students", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "students", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "students", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["absence"], "amorpm", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if (($this->getAttribute($context["absence"], "noshow", array()) == true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
                    \t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_show_absence", array("id" => $this->getAttribute($context["absence"], "id", array()), "option" => 2)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "edit", array()) == 1))) {
                // line 29
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_edit_absence", array("id" => $this->getAttribute($context["absence"], "id", array()), "option" => 2)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t";
        if (((array_key_exists("allabsences", $context) && (twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) > 0)) && (twig_length_filter($this->env, (isset($context["allabsences"]) ? $context["allabsences"] : $this->getContext($context, "allabsences"))) > 5))) {
            // line 37
            echo "\t\t<tr><td colspan=\"9\" class=\"list-action\">
\t\t\t";
            // line 38
            if ((array_key_exists("offset", $context) && ((isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")) == 5))) {
                // line 39
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_list_absence", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "offset" => 5)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_list_absence", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "offset" => 0)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.allabsences", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 43
            echo "\t\t</td></tr>
\t";
        }
        // line 45
        echo "        </tbody>
    </table>
";
        
        $__internal_1ec2895b82367732402c77747246ea26e8ee81b2052e6118ce5476f95b90c7e3->leave($__internal_1ec2895b82367732402c77747246ea26e8ee81b2052e6118ce5476f95b90c7e3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:absences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 45,  178 => 43,  170 => 41,  162 => 39,  160 => 38,  157 => 37,  154 => 36,  145 => 34,  138 => 31,  130 => 29,  128 => 28,  122 => 27,  115 => 25,  107 => 24,  103 => 23,  97 => 22,  91 => 21,  85 => 20,  81 => 19,  71 => 18,  68 => 17,  63 => 16,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.noshow'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/*             <tr>*/
/*                 <td>{%if absence.students%}{{ absence.students.firstname }} {{ absence.students.name }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.amorpm %}{{ absence.amorpm }}{% endif %}</td>*/
/*                 <td>{{ absence.numberday }}</td>*/
/*                 <td>{% if absence.noshow == true%}{{'label.yes'|trans([],'BoAdminBundle')}}{% else %}{{'label.no'|trans([],'BoAdminBundle')}}{% endif %}</td>*/
/*                 <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/*                     	<a href="{{ path('students_show_absence', { 'id': absence.id,'option':2 }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].edit==1%}*/
/* 				<a href="{{ path('students_edit_absence', { 'id': absence.id,'option':2 }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 	{%else%}*/
/* 		<tr><td colspan="9">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/* 	{%if allabsences is defined and absences|length>0 and allabsences|length>5%}*/
/* 		<tr><td colspan="9" class="list-action">*/
/* 			{%if offset is defined and offset==5%}*/
/* 				<a href="{{ path('students_list_absence', { 'id': student.id,'offset':5 }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%else%}*/
/* 				<a href="{{ path('students_list_absence', { 'id': student.id,'offset':0 }) }}">{{'label.allabsences'|trans([],'BoAdminBundle')}}</a>*/
/* 			{% endif %}*/
/* 		</td></tr>*/
/* 	{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
