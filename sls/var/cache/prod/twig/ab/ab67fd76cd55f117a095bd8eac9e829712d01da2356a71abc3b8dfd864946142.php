<?php

/* BoAdminBundle:Local:students.html.twig */
class __TwigTemplate_2a8e1c01ac2cbbf4069f5b329620d8509c942b8e8d19fe932b49cdb508784462 extends Twig_Template
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
        $__internal_17158817a04d5c2fd0299622131232c7119629574e54c113e79fd36e37e44eb5 = $this->env->getExtension("native_profiler");
        $__internal_17158817a04d5c2fd0299622131232c7119629574e54c113e79fd36e37e44eb5->enter($__internal_17158817a04d5c2fd0299622131232c7119629574e54c113e79fd36e37e44eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:students.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 15
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["cstudents"]) ? $context["cstudents"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                // line 16
                echo "\t\t\t\t";
                $context["students"] = $this->getAttribute((isset($context["cstudents"]) ? $context["cstudents"] : $this->getContext($context, "cstudents")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 17
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 18
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 22
                    if ($this->getAttribute($context["student"], "startlevel", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 24
                    if ($this->getAttribute($context["student"], "startdate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startdate", array()), "Y-m-d"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 25
                    if ($this->getAttribute($context["student"], "enddate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "enddate", array()), "Y-m-d"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "\t\t\t";
            }
            // line 29
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>";
        
        $__internal_17158817a04d5c2fd0299622131232c7119629574e54c113e79fd36e37e44eb5->leave($__internal_17158817a04d5c2fd0299622131232c7119629574e54c113e79fd36e37e44eb5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  130 => 30,  125 => 29,  122 => 28,  109 => 25,  101 => 24,  97 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  74 => 18,  69 => 17,  66 => 16,  63 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 		{% for contract in contracts %}*/
/* 			{%if cstudents[contract.id] is defined%}*/
/* 				{%set students=cstudents[contract.id]%}*/
/* 				{% for student in students %}*/
/* 					<tr>*/
/* 						<td>{{ student.id }}</td>*/
/* 						<td>{{ student.name }}</td>*/
/* 						<td>{{ student.firstname }}</td>*/
/* 						<td>{%if student.startlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/* 						<td>{{ student.targetlevel }}</td>*/
/* 						<td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 						<td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					</tr>*/
/* 				{%endfor%}*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
