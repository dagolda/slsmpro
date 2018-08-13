<?php

/* BoAdminBundle:Agenda:tbliste.html.twig */
class __TwigTemplate_f18fd2625dfb85b983e8cf009ff5a10b50fd1d2ac56e420ca79bc723bc9566c5 extends Twig_Template
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
        $__internal_fc27ae2cc80de8efefc85ce0893dd65c2faf6a543c76bceff8fc9f29c22626d0 = $this->env->getExtension("native_profiler");
        $__internal_fc27ae2cc80de8efefc85ce0893dd65c2faf6a543c76bceff8fc9f29c22626d0->enter($__internal_fc27ae2cc80de8efefc85ce0893dd65c2faf6a543c76bceff8fc9f29c22626d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.mon", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tue", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wed", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thu", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fri", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["schedules"]) ? $context["schedules"] : $this->getContext($context, "schedules")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 23
            echo "\t\t";
            if ($this->getAttribute($context["schedule"], "contracts", array())) {
                $context["contract"] = $this->getAttribute($context["schedule"], "contracts", array());
            }
            // line 24
            echo "            <tr>
                <td ";
            // line 25
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "id", array()), "html", null, true);
            echo "</a></td>
                <td ";
            // line 26
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 27
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 28
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["schedule"], "hourperday", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 29
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">
\t\t\t";
            // line 30
            if ((($this->getAttribute($context["schedule"], "group", array()) == null) && array_key_exists("contract", $context))) {
                // line 31
                echo "\t\t\t\t";
                $context["students"] = $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "students", array());
                // line 32
                echo "\t\t\t\t\t";
                if ((twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) == 1)) {
                    // line 33
                    echo "\t\t\t\t\t\t";
                    $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), 0, array(), "array");
                    // line 34
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 35
(isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array())) {
                    // line 36
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "group", array()), "name", array()), "html", null, true);
                    echo " 
\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t\t
\t\t\t";
            } else {
                // line 38
                echo "---";
            }
            echo "</td>
                <td ";
            // line 39
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">
\t\t\t";
            // line 40
            if ((($this->getAttribute($context["schedule"], "group", array()) != null) && $this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute($this->getAttribute($context["schedule"], "group", array()), "id", array()), array(), "array", true, true))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")), $this->getAttribute($context["schedule"], "idgroup", array()), array(), "array"), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            // line 41
            echo "\t\t</td>
                <td ";
            // line 42
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "monday", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 43
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "tuesday", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 44
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "wednesday", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 45
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "thursday", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 46
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "friday", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 47
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 48
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 49
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "startpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 50
            if ($this->getAttribute((isset($context["overlap"]) ? $context["overlap"] : null), $this->getAttribute($context["schedule"], "id", array()), array(), "array", true, true)) {
                echo "class=\"ping-color\"";
            }
            echo ">";
            if ($this->getAttribute($context["schedule"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["schedule"], "endpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t<tr><td colspan=\"15\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>
";
        
        $__internal_fc27ae2cc80de8efefc85ce0893dd65c2faf6a543c76bceff8fc9f29c22626d0->leave($__internal_fc27ae2cc80de8efefc85ce0893dd65c2faf6a543c76bceff8fc9f29c22626d0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 55,  296 => 53,  282 => 50,  272 => 49,  262 => 48,  252 => 47,  240 => 46,  228 => 45,  216 => 44,  204 => 43,  192 => 42,  189 => 41,  183 => 40,  177 => 39,  172 => 38,  168 => 37,  162 => 36,  160 => 35,  153 => 34,  150 => 33,  147 => 32,  144 => 31,  142 => 30,  136 => 29,  128 => 28,  118 => 27,  108 => 26,  100 => 25,  97 => 24,  92 => 23,  87 => 22,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.mon'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.tue'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.wed'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.thu'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.fri'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for schedule in schedules %}*/
/* 		{%if schedule.contracts %}{%set contract = schedule.contracts%}{%endif%}*/
/*             <tr>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{{ schedule.id }}</a></td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.startdate %}{{ schedule.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.enddate %}{{ schedule.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{{ schedule.hourperday }}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>*/
/* 			{% if schedule.group==null and contract is defined%}*/
/* 				{%set students = contract.students%}*/
/* 					{%if students|length==1%}*/
/* 						{%set student=students[0]%}*/
/* 						{{student.firstname}} {{student.name}}*/
/* 					{%elseif contract.group%}*/
/* 						{{contract.group.name}} */
/* 					{%endif%}					*/
/* 			{%else%}---{%endif%}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>*/
/* 			{% if schedule.group!=null and groups[schedule.group.id] is defined%}{{ groups[schedule.idgroup].name }}{%else%}---{%endif%}*/
/* 		</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.monday %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.tuesday %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.wednesday %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.thursday %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.friday %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.startam %}{{ schedule.startam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.endam %}{{ schedule.endam|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.startpm %}{{ schedule.startpm|date('H:i') }}{% endif %}</td>*/
/*                 <td {%if overlap[schedule.id] is defined%}class="ping-color"{%endif%}>{% if schedule.endpm %}{{ schedule.endpm|date('H:i') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="15">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
