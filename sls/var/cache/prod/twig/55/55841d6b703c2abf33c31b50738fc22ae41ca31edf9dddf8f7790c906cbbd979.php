<?php

/* BoAdminBundle:Agenda:tbliste2.html.twig */
class __TwigTemplate_89df3f7e9c3bdb7590d03dea38d9d1e15336d6c9d238868ea0c4b904f5f403bf extends Twig_Template
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
        $__internal_e6dcdb9a7cabc8c46e696d4e67e9ab7a0c4a4af567d7d656e4f901f5c73d1cf3 = $this->env->getExtension("native_profiler");
        $__internal_e6dcdb9a7cabc8c46e696d4e67e9ab7a0c4a4af567d7d656e4f901f5c73d1cf3->enter($__internal_e6dcdb9a7cabc8c46e696d4e67e9ab7a0c4a4af567d7d656e4f901f5c73d1cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:tbliste2.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.actions", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 22
            echo "            <tr>
                <td ";
            // line 23
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
            echo "</a></td>
                <td ";
            // line 24
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "employee", array()), "name", array()), "html", null, true);
            }
            echo "</a></td>
                <td ";
            // line 25
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 26
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "hourperday", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 28
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "students", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "students", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "students", array()), "name", array()), "html", null, true);
            } elseif ((($this->getAttribute($context["schedule"], "contracts", array()) && $this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "students", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "students", array())) == 1))) {
                $context["student"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "students", array()), 0, array(), "array");
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
            } elseif (($this->getAttribute($context["schedule"], "contracts", array()) && $this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "group", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "group", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 29
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "group", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 30
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            $this->loadTemplate("BoAdminBundle:Agenda:days.html.twig", "BoAdminBundle:Agenda:tbliste2.html.twig", 30)->display($context);
            echo "</td>
                <td ";
            // line 31
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 32
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 33
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 34
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 35
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "creationdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 36
            if (($this->getAttribute($context["schedule"], "status", array()) == 0)) {
                echo "ping-color";
            }
            echo "\" width=\"120px\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_show", array("id" => $this->getAttribute($context["schedule"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
";
            // line 38
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Teacher Schedule", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Teacher Schedule", array(), "array"), "edit", array()) == 1))) {
                // line 39
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda_edit", array("id" => $this->getAttribute($context["schedule"], "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t</a>
\t\t";
            }
            // line 43
            echo "                </td>
            </tr>
\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 46
            echo "\t\t<tr><td colspan=\"16\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
";
        
        $__internal_e6dcdb9a7cabc8c46e696d4e67e9ab7a0c4a4af567d7d656e4f901f5c73d1cf3->leave($__internal_e6dcdb9a7cabc8c46e696d4e67e9ab7a0c4a4af567d7d656e4f901f5c73d1cf3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:tbliste2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 48,  283 => 46,  268 => 43,  262 => 40,  257 => 39,  255 => 38,  249 => 37,  243 => 36,  233 => 35,  223 => 34,  213 => 33,  203 => 32,  193 => 31,  185 => 30,  173 => 29,  152 => 28,  144 => 27,  134 => 26,  124 => 25,  112 => 24,  104 => 23,  101 => 22,  83 => 21,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.days'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.actions'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for schedule in schedules %}*/
/*             <tr>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{{ schedule.id }}</a></td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{%if schedule.employee %}{{ schedule.employee.firstname }} {{ schedule.employee.name }}{%endif%}</a></td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.startdate %}{{ schedule.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.enddate %}{{ schedule.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{{ schedule.hourperday }}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{%if schedule.students%}{{ schedule.students.firstname }} {{ schedule.students.name }}{%elseif schedule.contracts and schedule.contracts.students and schedule.contracts.students|length==1%}{%set student=schedule.contracts.students[0]%}{{ student.firstname }} {{ student.name }}{%elseif schedule.contracts and schedule.contracts.group%}{{ schedule.contracts.group.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{%if schedule.group%}{{ schedule.group.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{%include "BoAdminBundle:Agenda:days.html.twig"%}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.startam %}{{ schedule.startam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.endam %}{{ schedule.endam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.startpm %}{{ schedule.startpm|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.endpm %}{{ schedule.endpm|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if schedule.status==0%}class="ping-color"{%endif%}>{% if schedule.creationdate %}{{ schedule.creationdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="list-action {%if schedule.status==0%}ping-color{%endif%}" width="120px">*/
/*                     <a href="{{ path('agenda_show', { 'id': schedule.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* {%if app.session.get('rights')['CONTRACTS']['Teacher Schedule'] is defined and app.session.get('rights')['CONTRACTS']['Teacher Schedule'].edit==1%}*/
/* 			<a href="{{ path('agenda_edit', { 'id': schedule.id }) }}">*/
/* 				{{'action.edit'|trans([],'BoAdminBundle')}}*/
/* 			</a>*/
/* 		{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 	{%else%}*/
/* 		<tr><td colspan="16">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
