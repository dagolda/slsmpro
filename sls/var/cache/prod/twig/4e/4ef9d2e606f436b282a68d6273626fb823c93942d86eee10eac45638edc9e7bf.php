<?php

/* BoAdminBundle:Tools:schedulelist.html.twig */
class __TwigTemplate_93d877b349f8551ebc48ae3bf28fc0dd2d7a6afde0d2d41c782975458c46a24d extends Twig_Template
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
        $__internal_9ec5a9271c8f70c410443f7a169e2adf5f2c63d77909bcf43d00bedfd8f279ac = $this->env->getExtension("native_profiler");
        $__internal_9ec5a9271c8f70c410443f7a169e2adf5f2c63d77909bcf43d00bedfd8f279ac->enter($__internal_9ec5a9271c8f70c410443f7a169e2adf5f2c63d77909bcf43d00bedfd8f279ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tools:schedulelist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Contract Id</th>
                <th>Group Id</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daysofschedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["schedule"], "contracts", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "contracts", array()), "id", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["schedule"], "group", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["schedule"], "group", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>
\t\t\t\t\t";
            // line 26
            if (((((($this->getAttribute($context["schedule"], "monday", array()) == true) && ($this->getAttribute($context["schedule"], "tuesday", array()) == true)) && ($this->getAttribute($context["schedule"], "wednesday", array()) == true)) && ($this->getAttribute($context["schedule"], "thursday", array()) == true)) && ($this->getAttribute($context["schedule"], "friday", array()) == true))) {
                // line 27
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 29
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["schedule"], "monday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 30
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["schedule"], "tuesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 31
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["schedule"], "wednesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["schedule"], "thursday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 33
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["schedule"], "friday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                    echo " ";
                }
                // line 34
                echo "\t\t\t\t\t";
            }
            echo "\t\t\t\t
\t\t\t\t</td>
                <td>";
            // line 36
            if ($this->getAttribute($context["schedule"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 37
            if ($this->getAttribute($context["schedule"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 38
            if ($this->getAttribute($context["schedule"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 39
            if ($this->getAttribute($context["schedule"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 40
            if ($this->getAttribute($context["schedule"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["schedule"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "hourperday", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            if ($this->getAttribute($context["schedule"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td nowrap>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "\t\t\t<tr><td colspan=\"13\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
";
        
        $__internal_9ec5a9271c8f70c410443f7a169e2adf5f2c63d77909bcf43d00bedfd8f279ac->leave($__internal_9ec5a9271c8f70c410443f7a169e2adf5f2c63d77909bcf43d00bedfd8f279ac_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tools:schedulelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 51,  206 => 49,  195 => 45,  188 => 43,  184 => 42,  178 => 41,  172 => 40,  166 => 39,  160 => 38,  154 => 37,  148 => 36,  142 => 34,  136 => 33,  130 => 32,  124 => 31,  118 => 30,  112 => 29,  106 => 27,  104 => 26,  95 => 24,  87 => 23,  81 => 22,  78 => 21,  73 => 20,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  45 => 10,  41 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Contract Id</th>*/
/*                 <th>Group Id</th>*/
/*                 <th>{{'label.daysofschedule'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for schedule in schedules %}*/
/*             <tr>*/
/*                 <td>{{ employee.firstname }} {{ employee.name }}</td>*/
/*                 <td>{%if schedule.contracts %}{{ schedule.contracts.id }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if schedule.group %}{{ schedule.group.name }}{%else%}---{%endif%}</td>*/
/*                 <td>*/
/* 					{%if schedule.monday==true and schedule.tuesday==true and schedule.wednesday==true and schedule.thursday==true and schedule.friday==true%}*/
/* 						{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 					{%else%}*/
/* 						{%if schedule.monday==true%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.tuesday==true%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.wednesday==true%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.thursday==true%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 						{%if schedule.friday==true%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 					{%endif%}				*/
/* 				</td>*/
/*                 <td>{% if schedule.startdate %}{{ schedule.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if schedule.enddate %}{{ schedule.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if schedule.startam %}{{ schedule.startam|date('H:i') }}{% endif %}</td>*/
/*                 <td>{% if schedule.endam %}{{ schedule.endam|date('H:i') }}{% endif %}</td>*/
/*                 <td>{% if schedule.startpm %}{{ schedule.startpm|date('H:i') }}{% endif %}</td>*/
/*                 <td>{% if schedule.endpm %}{{ schedule.endpm|date('H:i') }}{% endif %}</td>*/
/*                 <td>{{ schedule.hourperday }}</td>*/
/*                 <td>{% if schedule.creationdate %}{{ schedule.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td nowrap>*/
/* 					<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal{{schedule.id}}">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="13">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
