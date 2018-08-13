<?php

/* BoAdminBundle:Absences:contract.html.twig */
class __TwigTemplate_3d66bac3f81b366bae6f2d63a688dafa9bacfd1e28cc658bb68a881daa4f46ad extends Twig_Template
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
        $__internal_941595f5870d2bfc5a5b19b1ec333522bb149ee3dbec55d4e2517cc7e110c915 = $this->env->getExtension("native_profiler");
        $__internal_941595f5870d2bfc5a5b19b1ec333522bb149ee3dbec55d4e2517cc7e110c915->enter($__internal_941595f5870d2bfc5a5b19b1ec333522bb149ee3dbec55d4e2517cc7e110c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:contract.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t<th width=\"3%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"4%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.number", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.field", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"3%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.advisor", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"120px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 20
            echo "\t\t";
            if ($this->getAttribute((isset($context["subcontform"]) ? $context["subcontform"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                // line 21
                echo "\t\t    <tr>
\t\t        <td ";
                // line 22
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
                echo "</td>
\t\t        <td ";
                // line 23
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
                echo "</td>
\t\t        <td ";
                // line 24
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">
\t\t\t\t\t";
                // line 25
                if ($this->getAttribute($context["contract"], "group", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                } else {
                    echo "N/A";
                }
                echo "</td>
\t\t        <td ";
                // line 26
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">
\t\t\t\t";
                // line 27
                if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                    // line 28
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                    $context['_iterated'] = false;
                    foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                        // line 29
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t";
                        $context['_iterated'] = true;
                    }
                    if (!$context['_iterated']) {
                        // line 31
                        echo "\t\t\t\t\t\t---
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "\t\t\t\t
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t</td>
\t\t        <td ";
                // line 35
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td ";
                // line 36
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute($context["contract"], "workfields", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "workfields", array()), "html", null, true);
                } else {
                    echo "N/A";
                }
                echo "</td>
\t\t        <td ";
                // line 37
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">
\t\t\t\t";
                // line 38
                if (($this->getAttribute($context["contract"], "local", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "local", array())) == 1))) {
                    // line 39
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "local", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                        // line 40
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "reference", array()), "html", null, true);
                        echo "
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t";
                } elseif ((($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array(), "any", false, true), "local", array(), "any", true, true)) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "local", array())) == 1))) {
                    // line 43
                    echo "\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["contract"], "group", array()), "local", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
                        // line 44
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "reference", array()), "html", null, true);
                        echo "
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "\t\t\t\t";
                } else {
                    // line 47
                    echo "\t\t\t\t\t---\t\t\t\t
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t</td>
\t\t        <td ";
                // line 50
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">
\t\t\t\t";
                // line 51
                if (array_key_exists("employee", $context)) {
                    // line 52
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 54
                    echo "\t\t\t\t\t---
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t</td>
\t\t        <td ";
                // line 57
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
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
\t\t        <td ";
                // line 58
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute($context["contract"], "startdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t        <td ";
                // line 59
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "class=\"completed_contracts\"";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "class=\"wax_3d_1\"";
                }
                echo ">";
                if ($this->getAttribute($context["contract"], "enddate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t        <td class=\"list-action ";
                // line 60
                if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                    echo "completed_contracts";
                } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                    echo "wax_3d_1";
                }
                echo "\" nowrap>
\t\t\t\t";
                // line 61
                if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "creation", array()) == 1)) && $this->getAttribute((isset($context["esc"]) ? $context["esc"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) && ($this->getAttribute((isset($context["esc"]) ? $context["esc"] : $this->getContext($context, "esc")), $this->getAttribute($context["contract"], "id", array()), array(), "array") == 1))) {
                    // line 62
                    echo "\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_subscont";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addsubstitution", array(), "BoAdminBundle"), "html", null, true);
                    echo "</button>
\t\t\t\t";
                }
                // line 63
                echo "                
\t\t\t</td>
\t\t    </tr>
\t\t";
            }
            // line 66
            echo "  
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "\t\t<tr><td colspan=\"12\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>
";
        
        $__internal_941595f5870d2bfc5a5b19b1ec333522bb149ee3dbec55d4e2517cc7e110c915->leave($__internal_941595f5870d2bfc5a5b19b1ec333522bb149ee3dbec55d4e2517cc7e110c915_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 70,  332 => 68,  326 => 66,  320 => 63,  312 => 62,  310 => 61,  302 => 60,  290 => 59,  278 => 58,  262 => 57,  259 => 56,  255 => 54,  247 => 52,  245 => 51,  237 => 50,  234 => 49,  230 => 47,  227 => 46,  218 => 44,  213 => 43,  210 => 42,  201 => 40,  196 => 39,  194 => 38,  186 => 37,  172 => 36,  162 => 35,  159 => 34,  155 => 32,  148 => 31,  138 => 29,  132 => 28,  130 => 27,  122 => 26,  114 => 25,  106 => 24,  96 => 23,  86 => 22,  83 => 21,  80 => 20,  75 => 19,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 		<th width="3%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="4%">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="3%">{{'label.room'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.advisor'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="120px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in absence.contracts %}*/
/* 		{%if subcontform[contract.id] is defined%}*/
/* 		    <tr>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.id }}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typecontract }}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if contract.group%}{{ contract.group.name }}{%else%}N/A{%endif%}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 				{%if contract.students is defined and contract.students|length==1%}*/
/* 					{%for student in contract.students %}*/
/* 						{{ student.firstname }} {{ student.name }}*/
/* 					{%else%}*/
/* 						---*/
/* 					{%endfor%}				*/
/* 				{%endif%}*/
/* 			</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 					<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.workfields%}{{ contract.workfields }}{%else%}N/A{%endif%}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 				{%if contract.local is defined and contract.local|length==1%}*/
/* 					{%for room in contract.local %}*/
/* 						{{ room.reference }}*/
/* 					{%endfor%}*/
/* 				{%elseif contract.group and contract.group.local is defined and contract.group.local|length==1%}*/
/* 					{%for room in contract.group.local %}*/
/* 						{{ room.reference }}*/
/* 					{%endfor%}*/
/* 				{%else%}*/
/* 					---				*/
/* 				{%endif%}*/
/* 			</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 				{%if employee is defined%}*/
/* 					{{ employee.firstname }} {{ employee.name }}*/
/* 				{%else%}*/
/* 					---*/
/* 				{%endif%}*/
/* 			</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.advisor%}{{ contract.advisor.firstname }} {{ contract.advisor.name }}{%else%}---{%endif%}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 		        <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 		        <td class="list-action {%if contract.status==0%}completed_contracts{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}wax_3d_1{%endif%}" nowrap>*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].creation==1 and esc[contract.id] is defined and esc[contract.id]==1 %}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_subscont{{contract.id}}">{{'label.addsubstitution'|trans([],'BoAdminBundle')}}</button>*/
/* 				{%endif%}                */
/* 			</td>*/
/* 		    </tr>*/
/* 		{%endif%}  */
/* 	{%else%}*/
/* 		<tr><td colspan="12">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
