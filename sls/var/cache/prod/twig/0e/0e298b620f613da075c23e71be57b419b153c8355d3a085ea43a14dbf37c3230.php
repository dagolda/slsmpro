<?php

/* BoAdminBundle:Advisors:contracts.html.twig */
class __TwigTemplate_070cccd9fadb64bf861b1820523dd0c59f2fd218861f4f163ac519faab05c823 extends Twig_Template
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
        $__internal_15d30480f2a14eb3c66cdc158983f8105fc2933a15619e39b76617cef691ce9e = $this->env->getExtension("native_profiler");
        $__internal_15d30480f2a14eb3c66cdc158983f8105fc2933a15619e39b76617cef691ce9e->enter($__internal_15d30480f2a14eb3c66cdc158983f8105fc2933a15619e39b76617cef691ce9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:contracts.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"6%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"5%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 19
            echo "            <tr>
                <td ";
            // line 20
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 21
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 22
            if ((($this->getAttribute($context["contract"], "typeoftraining", array()) == "GR") && $this->getAttribute($context["contract"], "group", array()))) {
                // line 23
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t---\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</td>
                <td ";
            // line 28
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 29
            if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 30
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t---\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t</td>
                <td ";
            // line 37
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 38
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ((($this->getAttribute($context["contract"], "location", array()) == "Campus") && ($this->getAttribute($context["contract"], "campus", array()) != null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "campus", array()), "reference", array()), "html", null, true);
            } elseif ((($this->getAttribute($context["contract"], "location", array()) == "Office") && ($this->getAttribute($context["contract"], "adresse", array()) != null))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "adresse", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t<td ";
            // line 39
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "workfields", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "workfields", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 40
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "session", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "session", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 41
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "step", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "step", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 42
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 43
            $context["i"] = 1;
            // line 44
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > 0)) {
                // line 45
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo "<br>";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 47
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["contract"], "group", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > 0))) {
                // line 49
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo "<br>";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 51
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t\t---
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t</td>
                <td ";
            // line 56
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 57
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "\t\t\t<tr><td colspan=\"11\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </tbody>
    </table>";
        
        $__internal_15d30480f2a14eb3c66cdc158983f8105fc2933a15619e39b76617cef691ce9e->leave($__internal_15d30480f2a14eb3c66cdc158983f8105fc2933a15619e39b76617cef691ce9e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 62,  293 => 60,  279 => 57,  269 => 56,  266 => 55,  262 => 53,  259 => 52,  253 => 51,  243 => 50,  238 => 49,  235 => 48,  229 => 47,  219 => 46,  214 => 45,  211 => 44,  209 => 43,  203 => 42,  191 => 41,  179 => 40,  167 => 39,  153 => 38,  145 => 37,  142 => 36,  138 => 34,  135 => 33,  124 => 31,  119 => 30,  117 => 29,  111 => 28,  108 => 27,  104 => 25,  98 => 23,  96 => 22,  90 => 21,  82 => 20,  79 => 19,  74 => 18,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="6%">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.location'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="5%">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 					{%if contract.typeoftraining=="GR" and contract.group%}*/
/* 						{{ contract.group.name }}*/
/* 					{%else%}*/
/* 						---					*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 					{%if contract.students is defined and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---					*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.location=="Campus" and contract.campus!=null%}{{ contract.campus.reference }}{%elseif contract.location=="Office" and contract.adresse!=null%}{{contract.adresse}}{%else%}---{%endif%}</td>*/
/* 				<td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.workfields%}{{ contract.workfields }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.session%}{{ contract.session }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.step%}{{ contract.step }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%endif%}>*/
/* 					{%set i=1%}*/
/* 					{%if contract.employee|length>0%}*/
/* 						{%for teacher in contract.employee %}*/
/* 							{{ teacher.firstname }} {{ teacher.name }}{%if contract.employee|length>i%}<br>{%else%}{%set i=i+1%}{%endif%}*/
/* 						{%endfor%}*/
/* 					{%elseif contract.group and contract.group.employee|length>0%}*/
/* 						{%for teacher in contract.group.employee %}*/
/* 							{{ teacher.firstname }} {{ teacher.name }}{%if contract.group.employee|length>i%}<br>{%else%}{%set i=i+1%}{%endif%}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="11">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
