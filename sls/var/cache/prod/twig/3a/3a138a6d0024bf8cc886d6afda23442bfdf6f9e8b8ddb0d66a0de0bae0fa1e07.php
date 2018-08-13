<?php

/* BoAdminBundle:Local:schedule.html.twig */
class __TwigTemplate_6cbd13624742394c975027935cae813813bfa50f0eec30563da06d0ec270c3f2 extends Twig_Template
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
        $__internal_47a0522600e2e25d3c12dcbbdd83af78d7b7e00b23b8d564733816ae15f3864e = $this->env->getExtension("native_profiler");
        $__internal_47a0522600e2e25d3c12dcbbdd83af78d7b7e00b23b8d564733816ae15f3864e->enter($__internal_47a0522600e2e25d3c12dcbbdd83af78d7b7e00b23b8d564733816ae15f3864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:schedule.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daysoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 17
            echo "\t\t\t\t";
            if ((((($this->getAttribute($context["contract"], "status", array()) == 1) || ($this->getAttribute($context["contract"], "status", array()) == 2)) && ((($this->getAttribute($context["contract"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["contract"], "enddate", array()))) || ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))))) && $this->getAttribute((isset($context["ctrainings"]) ? $context["ctrainings"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true))) {
                // line 18
                echo "\t\t\t\t\t";
                $context["atrainings"] = $this->getAttribute((isset($context["ctrainings"]) ? $context["ctrainings"] : $this->getContext($context, "ctrainings")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 19
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["atrainings"]) ? $context["atrainings"] : $this->getContext($context, "atrainings")));
                foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
                    // line 20
                    echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                    // line 22
                    if (($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()))) {
                        // line 23
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 24
$context["contract"], "students", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "startdate", array()), "Y-m-d"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["contract"], "enddate", array()), "Y-m-d"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t\t\t";
                    // line 33
                    if (((((($this->getAttribute($context["training"], "monday", array()) == true) && ($this->getAttribute($context["training"], "tuesday", array()) == true)) && ($this->getAttribute($context["training"], "wednesday", array()) == true)) && ($this->getAttribute($context["training"], "thursday", array()) == true)) && ($this->getAttribute($context["training"], "friday", array()) == true))) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "monday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 37
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "tuesday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "wednesday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "thursday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                            echo ", ";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["training"], "friday", array()) == true)) {
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                            echo " ";
                        }
                        // line 41
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
                    // line 43
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startam", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 44
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endam", array()), "H:i"), "html", null, true);
                    echo "</td>\t
\t\t\t\t\t\t\t<td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startpm", array()), "H:i"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endpm", array()), "H:i"), "html", null, true);
                    echo "</td>\t
\t\t\t\t\t\t\t<td>";
                    // line 47
                    if ($this->getAttribute($context["training"], "hourperday", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperday", array()), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t";
            }
            // line 51
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"9\">";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t
        </tbody>
    </table>
";
        
        $__internal_47a0522600e2e25d3c12dcbbdd83af78d7b7e00b23b8d564733816ae15f3864e->leave($__internal_47a0522600e2e25d3c12dcbbdd83af78d7b7e00b23b8d564733816ae15f3864e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  211 => 53,  208 => 52,  203 => 51,  200 => 50,  187 => 47,  183 => 46,  179 => 45,  175 => 44,  171 => 43,  168 => 42,  165 => 41,  159 => 40,  153 => 39,  147 => 38,  141 => 37,  135 => 36,  129 => 34,  127 => 33,  122 => 31,  118 => 30,  115 => 29,  111 => 27,  100 => 26,  95 => 25,  93 => 24,  88 => 23,  86 => 22,  82 => 20,  77 => 19,  74 => 18,  71 => 17,  66 => 16,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 		<th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.daysoftraining'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for contract in contracts%}*/
/* 				{%if (contract.status==1 or contract.status==2) and ((contract.startdate<=now and now<=contract.enddate) or contract.startdate>=now) and ctrainings[contract.id] is defined %}*/
/* 					{%set atrainings=ctrainings[contract.id]%}*/
/* 					{% for training in atrainings%}*/
/* 						<tr>*/
/* 							<td>*/
/* 								{%if contract.group and contract.group.name%}*/
/* 									{{ contract.group.name }}*/
/* 								{%elseif contract.students and contract.students|length==1%}*/
/* 									{% for student in contract.students %}*/
/* 										{{student.firstname}} {{student.name}} */
/* 									{%endfor%}								*/
/* 								{%endif%}*/
/* 							</td>*/
/* 							<td>{{ contract.startdate|date('Y-m-d') }}</td>*/
/* 							<td>{{ contract.enddate|date('Y-m-d') }}</td>*/
/* 							<td class="sty_label">*/
/* 								{%if training.monday==true and training.tuesday==true and training.wednesday==true and training.thursday==true and training.friday==true%}*/
/* 									{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 								{%else%}*/
/* 									{%if training.monday==true%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.tuesday==true%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.wednesday==true%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.thursday==true%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 									{%if training.friday==true%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 								{%endif%}*/
/* 							</td>*/
/* 							<td>{{ training.startam|date('H:i') }}</td>*/
/* 							<td>{{ training.endam|date('H:i') }}</td>	*/
/* 							<td>{{ training.startpm|date('H:i') }}</td>*/
/* 							<td>{{ training.endpm|date('H:i') }}</td>	*/
/* 							<td>{%if training.hourperday%}{{ training.hourperday }}{%else%}---{%endif%}</td>							*/
/* 						</tr>*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* 			{%else%}*/
/* 				<tr>*/
/* 					<td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td>*/
/* 				</tr>*/
/* 			{%endfor%}				*/
/*         </tbody>*/
/*     </table>*/
/* */
