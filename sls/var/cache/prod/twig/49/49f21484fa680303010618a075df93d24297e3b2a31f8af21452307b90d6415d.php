<?php

/* BoAdvisorsBundle:Timesheet:tbliste.html.twig */
class __TwigTemplate_18079482cf01b6592b2dc88c8c3ff591406f89c02021926aa9134682fa78f0ce extends Twig_Template
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
        $__internal_796ea3b259e8f22431a121cabae8d0146013b797a4eb56928545542616e132b5 = $this->env->getExtension("native_profiler");
        $__internal_796ea3b259e8f22431a121cabae8d0146013b797a4eb56928545542616e132b5->enter($__internal_796ea3b259e8f22431a121cabae8d0146013b797a4eb56928545542616e132b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Date</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo " or ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timesheets"]) ? $context["timesheets"] : $this->getContext($context, "timesheets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["timesheet"]) {
            // line 18
            echo "\t\t\t";
            if (($this->getAttribute($context["timesheet"], "status", array()) && ($this->getAttribute($context["timesheet"], "status", array()) == 4))) {
                $context["style"] = "rejected";
            } elseif (($this->getAttribute($context["timesheet"], "status", array()) && ($this->getAttribute($context["timesheet"], "status", array()) > 2))) {
                $context["style"] = "validated";
            } else {
                $context["style"] = "normal";
            }
            // line 19
            echo "            <tr>
                <td class=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "ddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            if ($this->getAttribute($context["timesheet"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["timesheet"], "group", array()), "name", array()), "html", null, true);
            } elseif ($this->getAttribute($context["timesheet"], "student", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["timesheet"], "student", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["timesheet"], "students", array()), "name", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td  class=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "startam", array()), "H:i"), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "endam", array()), "H:i"), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "startpm", array()), "H:i"), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "endpm", array()), "H:i"), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["timesheet"], "hour", array()), "html", null, true);
            echo "</td>
                <td  class=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            if ($this->getAttribute($context["timesheet"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["timesheet"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td  class=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), "html", null, true);
            echo "\">";
            if (($this->getAttribute($context["timesheet"], "status", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["std"]) ? $context["std"] : $this->getContext($context, "std")), $this->getAttribute($context["timesheet"], "status", array()), array(), "array"), array(), "BoAdminBundle"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_timesheet_show", array("id" => $this->getAttribute($context["timesheet"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 31
            if ((($this->getAttribute($context["timesheet"], "status", array()) == 1) || ($this->getAttribute($context["timesheet"], "status", array()) == 4))) {
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_timesheet_edit", array("id" => $this->getAttribute($context["timesheet"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 34
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "\t\t\t<tr><td colspan=\"10\">No data found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>";
        
        $__internal_796ea3b259e8f22431a121cabae8d0146013b797a4eb56928545542616e132b5->leave($__internal_796ea3b259e8f22431a121cabae8d0146013b797a4eb56928545542616e132b5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 39,  173 => 37,  166 => 34,  158 => 32,  156 => 31,  150 => 30,  141 => 28,  133 => 27,  127 => 26,  121 => 25,  115 => 24,  109 => 23,  103 => 22,  89 => 21,  83 => 20,  80 => 19,  71 => 18,  66 => 17,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}} or {{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for timesheet in timesheets %}*/
/* 			{%if timesheet.status and timesheet.status==4%}{%set style="rejected"%}{%elseif timesheet.status and timesheet.status>2%}{%set style="validated"%}{%else%}{%set style="normal"%}{%endif%}*/
/*             <tr>*/
/*                 <td class="{{style}}">{{ timesheet.ddate|date('Y-m-d') }}</td>*/
/*                 <td  class="{{style}}">{%if timesheet.group%}{{ timesheet.group.name }}{%elseif timesheet.student is defined%}{{ timesheet.student.firstname }} {{ timesheet.students.name }}{%else%}N/A{%endif%}</td>*/
/*                 <td  class="{{style}}">{{ timesheet.startam|date('H:i') }}</td>*/
/*                 <td  class="{{style}}">{{ timesheet.endam|date('H:i') }}</td>*/
/*                 <td  class="{{style}}">{{ timesheet.startpm|date('H:i') }}</td>*/
/*                 <td  class="{{style}}">{{ timesheet.endpm|date('H:i') }}</td>*/
/*                 <td  class="{{style}}">{{ timesheet.hour }}</td>*/
/*                 <td  class="{{style}}">{% if timesheet.creationdate %}{{ timesheet.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td  class="{{style}}">{%if timesheet.status>0 %}{{std[timesheet.status]|trans([],'BoAdminBundle')}}{%endif%}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('dash_timesheet_show', { 'id': timesheet.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if timesheet.status==1 or timesheet.status==4%}*/
/* 						<a href="{{ path('dash_timesheet_edit', { 'id': timesheet.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">No data found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
