<?php

/* BoAdminBundle:Coordinator:contract.html.twig */
class __TwigTemplate_d87e74d0f387a87025e7a866d04de27a11a657c85283ac4b31f7ecd4be127f3e extends Twig_Template
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
        $__internal_78cda7918d92e1376c01bfa0b5275c297b854beb4cc71de501be36c61d1bc32b = $this->env->getExtension("native_profiler");
        $__internal_78cda7918d92e1376c01bfa0b5275c297b854beb4cc71de501be36c61d1bc32b->enter($__internal_78cda7918d92e1376c01bfa0b5275c297b854beb4cc71de501be36c61d1bc32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:contract.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th width=\"3%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"4%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"3%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 21
            echo "            <tr>
                <td ";
            // line 22
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 24
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typetime", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t";
            // line 26
            if ((($this->getAttribute($context["contract"], "typeoftraining", array()) == "GR") && $this->getAttribute($context["contract"], "group", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 27
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 29
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 32
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t
\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t</td>
                <td ";
            // line 36
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 37
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
            // line 38
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
            // line 39
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
            // line 40
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            }
            echo ">
\t\t\t\t\t";
            // line 41
            $context["i"] = 1;
            // line 42
            echo "
\t\t\t\t\t";
            // line 43
            if (($this->getAttribute($context["contract"], "group", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > 0))) {
                // line 44
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 45
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo "<br>";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 46
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t";
            } elseif ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > 0)) {
                // line 48
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 49
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo "<br>";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 50
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t---
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t</td>
                <td ";
            // line 55
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo " class=\"completed_contracts\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "advisor", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "advisor", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "advisor", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
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
            echo "\t\t\t<tr><td colspan=\"13\">";
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
        
        $__internal_78cda7918d92e1376c01bfa0b5275c297b854beb4cc71de501be36c61d1bc32b->leave($__internal_78cda7918d92e1376c01bfa0b5275c297b854beb4cc71de501be36c61d1bc32b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 62,  316 => 60,  302 => 57,  292 => 56,  278 => 55,  275 => 54,  271 => 52,  268 => 51,  262 => 50,  252 => 49,  247 => 48,  244 => 47,  238 => 46,  228 => 45,  223 => 44,  221 => 43,  218 => 42,  216 => 41,  210 => 40,  198 => 39,  186 => 38,  174 => 37,  166 => 36,  163 => 35,  159 => 33,  152 => 32,  142 => 30,  136 => 29,  134 => 28,  128 => 27,  120 => 26,  114 => 25,  106 => 24,  98 => 23,  90 => 22,  87 => 21,  82 => 20,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th width="3%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="4%">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="3%">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.advisor'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.id }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typecontract }}</td>*/
/* 				<td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.typetime }}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 				{%if contract.typeoftraining=="GR" and contract.group%}{{ contract.group.name }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>*/
/* 					{%if contract.students is defined and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endfor%}				*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 				<td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.workfields%}{{ contract.workfields }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.session%}{{ contract.session }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.step%}{{ contract.step }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%endif%}>*/
/* 					{%set i=1%}*/
/* */
/* 					{%if contract.group and contract.group.employee|length>0%}*/
/* 						{%for teacher in contract.group.employee %}*/
/* 							{{ teacher.firstname }} {{ teacher.name }}{%if contract.group.employee|length>i%}<br>{%else%}{%set i=i+1%}{%endif%}*/
/* 						{%endfor%}*/
/* 					{%elseif contract.employee|length>0%}*/
/* 						{%for teacher in contract.employee %}*/
/* 							{{ teacher.firstname }} {{ teacher.name }}{%if contract.employee|length>i%}<br>{%else%}{%set i=i+1%}{%endif%}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{%if contract.advisor%}{{ contract.advisor.firstname }} {{ contract.advisor.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%} class="completed_contracts"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="13">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
