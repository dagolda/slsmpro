<?php

/* BoAdvisorsBundle:Supervision:contractlist.html.twig */
class __TwigTemplate_16d530eab213f0b6519ad3391c20ed36262a4ff6267a99092ec6c4d8c55f279e extends Twig_Template
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
        $__internal_3a4335cac12752f1e7cc9ae74617759cf7d89f0c4227097ec4a3504bd5208197 = $this->env->getExtension("native_profiler");
        $__internal_3a4335cac12752f1e7cc9ae74617759cf7d89f0c4227097ec4a3504bd5208197->enter($__internal_3a4335cac12752f1e7cc9ae74617759cf7d89f0c4227097ec4a3504bd5208197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:contractlist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th width=\"3%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
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
                <th width=\"9%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.session", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"7%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.step", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"90px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 20
            echo "            <tr>
                <td ";
            // line 21
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "typecontract", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t";
            // line 24
            if ((($this->getAttribute($context["contract"], "typeoftraining", array()) == "GR") && $this->getAttribute($context["contract"], "group", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 26
            if (($this->getAttribute($context["contract"], "students", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                // line 27
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 28
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
                // line 30
                echo "\t\t\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t\t\t---\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t</td>
                <td ";
            // line 34
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "contractnumber", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td ";
            // line 35
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
                <td ";
            // line 36
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "session", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "session", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 37
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">";
            if ($this->getAttribute($context["contract"], "step", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "step", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td ";
            // line 38
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "class=\"completed_contracts\"";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "class=\"wax_3d_1\"";
            }
            echo ">
\t\t\t\t\t";
            // line 39
            $context["i"] = 1;
            // line 40
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > 0)) {
                // line 41
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 42
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($context["contract"], "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo "<br>";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 43
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t\t\t";
            } elseif (($this->getAttribute($context["contract"], "group", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > 0))) {
                // line 45
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
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
            } else {
                // line 49
                echo "\t\t\t\t\t\t---
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t</td>
                <td ";
            // line 52
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
                <td ";
            // line 53
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
                <td class=\"";
            // line 54
            if (($this->getAttribute($context["contract"], "status", array()) == 0)) {
                echo "completed_contracts";
            } elseif (((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) {
                echo "wax_3d_1";
            }
            echo " list-action\" nowrap>
                    <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_supervision_contract_show", array("id" => $this->getAttribute($context["contract"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t<tr><td colspan=\"11\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
";
        
        $__internal_3a4335cac12752f1e7cc9ae74617759cf7d89f0c4227097ec4a3504bd5208197->leave($__internal_3a4335cac12752f1e7cc9ae74617759cf7d89f0c4227097ec4a3504bd5208197_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:contractlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 63,  321 => 61,  311 => 56,  307 => 55,  299 => 54,  287 => 53,  275 => 52,  272 => 51,  268 => 49,  265 => 48,  259 => 47,  249 => 46,  244 => 45,  241 => 44,  235 => 43,  225 => 42,  220 => 41,  217 => 40,  215 => 39,  207 => 38,  193 => 37,  179 => 36,  165 => 35,  155 => 34,  152 => 33,  148 => 31,  145 => 30,  134 => 28,  129 => 27,  127 => 26,  119 => 25,  111 => 24,  103 => 23,  93 => 22,  83 => 21,  80 => 20,  75 => 19,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th width="3%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.type'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.number'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.field'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.session'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="7%">{{'label.step'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="90px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/*             <tr>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.id }}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.typecontract }}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 				{%if contract.typeoftraining=="GR" and contract.group%}{{ contract.group.name }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
/* 					{%if contract.students is defined and contract.students|length==1%}*/
/* 						{%for student in contract.students %}*/
/* 							{{ student.firstname }} {{ student.name }}*/
/* 						{%endfor%}*/
/* 					{%else%}*/
/* 						---					*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{{ contract.contractnumber }}</td>*/
/* 				<td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.workfields%}{{ contract.workfields }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.session%}{{ contract.session }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{%if contract.step%}{{ contract.step }}{%else%}N/A{%endif%}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>*/
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
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.startdate %}{{ contract.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if contract.status==0%}class="completed_contracts"{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}class="wax_3d_1"{%endif%}>{% if contract.enddate %}{{ contract.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td class="{%if contract.status==0%}completed_contracts{%elseif (contract.status==1 or contract.status==2) and contract.startdate>=now%}wax_3d_1{%endif%} list-action" nowrap>*/
/*                     <a href="{{ path('dash_supervision_contract_show', { 'id': contract.id }) }}">*/
/* 						{{'action.show'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="11">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
