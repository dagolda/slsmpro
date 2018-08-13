<?php

/* BoAdminBundle:Agenda:absence.html.twig */
class __TwigTemplate_4a563d60e9be3da6620786894939d7db5e76d396e97969c27668c99d8d72b5f4 extends Twig_Template
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
        $__internal_8456087e9869cbdd9c7ef4a3a95467b5321967921b05a020f462b2894c46558e = $this->env->getExtension("native_profiler");
        $__internal_8456087e9869cbdd9c7ef4a3a95467b5321967921b05a020f462b2894c46558e->enter($__internal_8456087e9869cbdd9c7ef4a3a95467b5321967921b05a020f462b2894c46558e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:absence.html.twig"));

        // line 1
        echo "\t";
        $context["i"] = 1;
        echo "    
\t<table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array())) > 1)) {
            echo "s";
        }
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noshow", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "students", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "students", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "students", array()), "name", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "motif", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["contract"], "id", array()), "html", null, true);
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "contracts", array())))) {
                echo ",";
            }
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 25
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "noshow", array()) == true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_8456087e9869cbdd9c7ef4a3a95467b5321967921b05a020f462b2894c46558e->leave($__internal_8456087e9869cbdd9c7ef4a3a95467b5321967921b05a020f462b2894c46558e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 26,  126 => 25,  122 => 24,  116 => 23,  110 => 22,  104 => 21,  89 => 20,  85 => 19,  75 => 18,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* 	{%set i=1%}    */
/* 	<table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.contract'|trans([],'BoAdminBundle')}} {{'label.id'|trans([],'BoAdminBundle')}}{%if absence.contracts|length>1%}s{%endif%}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.noshow'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <td>{%if absence.students%}{{ absence.students.firstname }} {{ absence.students.name }}{%else%}---{%endif%}</td>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{%for contract in absence.contracts %}{{ contract.id }}{%if i<absence.contracts|length%},{%endif%}{%set i=i+1%}{%endfor%}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.amorpm %}{{ absence.amorpm }}{% endif %}</td>*/
/*                 <td>{{ absence.numberday }}</td>*/
/*                 <td>{% if absence.noshow == true%}{{'label.yes'|trans([],'BoAdminBundle')}}{% else %}{{'label.no'|trans([],'BoAdminBundle')}}{% endif %}</td>*/
/*                 <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
