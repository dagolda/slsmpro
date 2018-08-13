<?php

/* BoAdminBundle:Local:teachers.html.twig */
class __TwigTemplate_9765436af2cde6f738de77c2950a0196caae4ca987c20669946b6ae6ebc366cb extends Twig_Template
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
        $__internal_71589237f4a64108f1e4b9be6fd144d0a562a8ba0a7f9c172300b0c727f6893c = $this->env->getExtension("native_profiler");
        $__internal_71589237f4a64108f1e4b9be6fd144d0a562a8ba0a7f9c172300b0c727f6893c->enter($__internal_71589237f4a64108f1e4b9be6fd144d0a562a8ba0a7f9c172300b0c727f6893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:teachers.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"11%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"18%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"28%\" colspan=\"2\">Schedule</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 16
            echo "\t\t\t";
            if (((((($this->getAttribute($context["contract"], "startdate", array()) <= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now"))) && ((isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")) <= $this->getAttribute($context["contract"], "enddate", array()))) && ($this->getAttribute($context["contract"], "status", array()) == 1)) || ($this->getAttribute($context["contract"], "startdate", array()) >= (isset($context["now"]) ? $context["now"] : $this->getContext($context, "now")))) && $this->getAttribute((isset($context["cteachers"]) ? $context["cteachers"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true))) {
                // line 17
                echo "\t\t\t\t";
                $context["teachers"] = $this->getAttribute((isset($context["cteachers"]) ? $context["cteachers"] : $this->getContext($context, "cteachers")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 18
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["cteacherschedule"]) ? $context["cteacherschedule"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                    $context["schedule"] = $this->getAttribute((isset($context["cteacherschedule"]) ? $context["cteacherschedule"] : $this->getContext($context, "cteacherschedule")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                }
                // line 19
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 20
                    echo "\t\t\t\t\t";
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 21
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 23
                    if (($this->getAttribute($context["contract"], "group", array()) && $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()))) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 25
$context["contract"], "students", array()) && (twig_length_filter($this->env, $this->getAttribute($context["contract"], "students", array())) == 1))) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contract"], "students", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                            // line 27
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                            echo " 
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td colspan=\"2\"><center>";
                    // line 36
                    if (((array_key_exists("schedule", $context) && $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : null), $this->getAttribute($context["employee"], "id", array()), array(), "array", true, true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array") != null))) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), $this->getAttribute($context["employee"], "id", array()), array(), "array"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</center></td>
\t\t\t\t\t</tr>\t\t\t\t
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t";
            }
            // line 40
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>";
        
        $__internal_71589237f4a64108f1e4b9be6fd144d0a562a8ba0a7f9c172300b0c727f6893c->leave($__internal_71589237f4a64108f1e4b9be6fd144d0a562a8ba0a7f9c172300b0c727f6893c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 41,  153 => 40,  150 => 39,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  114 => 30,  110 => 28,  99 => 27,  94 => 26,  92 => 25,  87 => 24,  85 => 23,  81 => 21,  78 => 20,  73 => 19,  68 => 18,  65 => 17,  62 => 16,  57 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="11%">{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="18%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="28%" colspan="2">Schedule</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% set i=0 %}*/
/*         {% for contract in contracts %}*/
/* 			{%if ((contract.startdate<=now and now<=contract.enddate and contract.status==1) or contract.startdate>=now) and cteachers[contract.id] is defined%}*/
/* 				{%set teachers=cteachers[contract.id]%}*/
/* 				{%if cteacherschedule[contract.id] is defined%}{%set schedule=cteacherschedule[contract.id]%}{%endif%}*/
/* 				{% for employee in teachers %}*/
/* 					{% set i=i+1 %}*/
/* 					<tr>*/
/* 						<td>*/
/* 							{%if contract.group and contract.group.name%}*/
/* 								{{ contract.group.name }}*/
/* 							{%elseif contract.students and contract.students|length==1%}*/
/* 								{% for student in contract.students %}*/
/* 									{{student.firstname}} {{student.name}} */
/* 								{%endfor%}								*/
/* 							{%endif%}*/
/* 						</td>*/
/* 						<td>{{ employee.firstname }}</td>*/
/* 						<td>{{ employee.name }}</td>*/
/* 						<td>{{ employee.email }}</td>*/
/* 						<td>{{ employee.homenumber }}</td>*/
/* 						<td>{{ employee.cellnumber }}</td>*/
/* 						<td colspan="2"><center>{%if schedule is defined and schedule[employee.id] is defined and schedule[employee.id]!=null %}{{ schedule[employee.id]}}{%else%}---{%endif%}</center></td>*/
/* 					</tr>				*/
/* 				{% endfor %}*/
/* 			{%endif%}*/
/* 		{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
