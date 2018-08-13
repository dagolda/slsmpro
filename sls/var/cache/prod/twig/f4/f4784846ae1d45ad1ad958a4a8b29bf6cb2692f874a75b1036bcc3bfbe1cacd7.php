<?php

/* BoAdminBundle:Agenda:tbshow.html.twig */
class __TwigTemplate_3874be308d350891e21e4c90c5b6b085db1d6ff3d76cbf0f8bec3f271c955fab extends Twig_Template
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
        $__internal_e370d86ae80cf8fe35080c08f4881ec4f2a5baa64e2e7cba61091db87aba9934 = $this->env->getExtension("native_profiler");
        $__internal_e370d86ae80cf8fe35080c08f4881ec4f2a5baa64e2e7cba61091db87aba9934->enter($__internal_e370d86ae80cf8fe35080c08f4881ec4f2a5baa64e2e7cba61091db87aba9934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:tbshow.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <th width=\"20%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"20%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "id", array()), "html", null, true);
        echo "</td>
 \t\t<td>";
        // line 12
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "employee", array()), "name", array()), "html", null, true);
        }
        echo "</td>  
\t\t<td>";
        // line 13
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "students", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "students", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "students", array()), "name", array()), "html", null, true);
        } elseif ((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()) && $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()), "students", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()), "students", array())) == 1))) {
            $context["student"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()), "students", array()), 0, array(), "array");
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>  
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t<td>";
        // line 15
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>         
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
            <tr>
                <th width=\"20%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.groupid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"20%\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th width=\"20%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.invitation", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t<td>";
        // line 26
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "contracts", array()), "id", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t<td>";
        // line 27
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "group", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "group", array()), "id", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t<td>";
        // line 28
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "status", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "status", array()), "html", null, true);
        } else {
            echo "No";
        }
        echo "</td>  
                <td>";
        // line 29
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "istatus", array()), "html", null, true);
        }
        echo "</td>
\t\t<td>";
        // line 30
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "idate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "idate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>         
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 42
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 43
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 44
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 45
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>               
\t\t<td><input type=\"checkbox\" ";
        // line 56
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 57
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
\t\t<td><input type=\"checkbox\" ";
        // line 58
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 59
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 60
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
\t    ";
        // line 63
        if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "description", array())) {
            // line 64
            echo "            <tr>
                <th>";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
            </tr>
            <tr>               
\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "description", array()), "html", null, true);
            echo "</td>
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
\t    ";
        }
        // line 72
        echo "        </tbody>
    </table>
";
        
        $__internal_e370d86ae80cf8fe35080c08f4881ec4f2a5baa64e2e7cba61091db87aba9934->leave($__internal_e370d86ae80cf8fe35080c08f4881ec4f2a5baa64e2e7cba61091db87aba9934_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 72,  284 => 68,  278 => 65,  275 => 64,  273 => 63,  265 => 60,  259 => 59,  253 => 58,  247 => 57,  241 => 56,  235 => 53,  231 => 52,  227 => 51,  223 => 50,  219 => 49,  208 => 45,  200 => 44,  192 => 43,  184 => 42,  180 => 41,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  158 => 34,  149 => 30,  143 => 29,  135 => 28,  127 => 27,  119 => 26,  111 => 23,  105 => 22,  99 => 21,  95 => 20,  91 => 19,  82 => 15,  76 => 14,  61 => 13,  53 => 12,  49 => 11,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="20%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.studentname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="20%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 		<td>{{ schedule.id }}</td>*/
/*  		<td>{%if schedule.employee %}{{ schedule.employee.firstname }} {{ schedule.employee.name }}{%endif%}</td>  */
/* 		<td>{% if schedule.students %}{{ schedule.students.firstname }} {{ schedule.students.name }}{%elseif schedule.contracts and schedule.contracts.students and schedule.contracts.students|length==1%}{%set student=schedule.contracts.students[0]%}{{ student.firstname }} {{ student.name }}{%else%}---{%endif%}</td>  */
/*                 <td>{% if schedule.startdate %}{{ schedule.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 		<td>{% if schedule.enddate %}{{ schedule.enddate|date('Y-m-d') }}{% endif %}</td>         */
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th width="20%">{{'label.contractid'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.groupid'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.status'|trans([],'BoAdminBundle')}}/{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="20%">{{'label.invitation'|trans([],'BoAdminBundle')}} {{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th width="20%">{{'label.invitation'|trans([],'BoAdminBundle')}} {{'label.ddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 		<td>{%if schedule.contracts %}{{ schedule.contracts.id }}{%else%}---{%endif%}</td>*/
/* 		<td>{%if schedule.group %}{{ schedule.group.id }}{%else%}---{%endif%}</td>*/
/* 		<td>{% if schedule.status %}{{ schedule.status }}{%else%}No{%endif%}</td>  */
/*                 <td>{% if schedule.istatus %}{{ schedule.istatus }}{% endif %}</td>*/
/* 		<td>{% if schedule.idate %}{{ schedule.idate|date('Y-m-d') }}{% endif %}</td>         */
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ schedule.hourperday }}</td>*/
/*                 <td>{% if schedule.startam %}{{ schedule.startam|date('H:i') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if schedule.endam %}{{ schedule.endam|date('H:i') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if schedule.startpm %}{{ schedule.startpm|date('H:i') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if schedule.endpm %}{{ schedule.endpm|date('H:i') }}{%else%}---{% endif %}</td>*/
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'Monday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'Tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Thursday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Friday'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/* 		<td><input type="checkbox" {% if schedule.monday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if schedule.tuesday %}checked{% endif %} disabled="disabled"></td>*/
/* 		<td><input type="checkbox" {% if schedule.wednesday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if schedule.thursday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if schedule.friday %}checked{% endif %} disabled="disabled"></td>*/
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/* 	    {%if schedule.description %}*/
/*             <tr>*/
/*                 <th>{{'label.description'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/* 		<td>{{ schedule.description }}</td>*/
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/* 	    {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* */
