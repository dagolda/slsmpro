<?php

/* BoAdminBundle:Group:studentsgroup.html.twig */
class __TwigTemplate_349c287f152525e9186619baa6905af539607be07bbddcf6e6ceba464c5043bc extends Twig_Template
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
        $__internal_e2260a26a9559e6f9bfd5f25572e06460a31ec84c3abed276812d5ac3346d72b = $this->env->getExtension("native_profiler");
        $__internal_e2260a26a9559e6f9bfd5f25572e06460a31ec84c3abed276812d5ac3346d72b->enter($__internal_e2260a26a9559e6f9bfd5f25572e06460a31ec84c3abed276812d5ac3346d72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:studentsgroup.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
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
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 15
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["contract"], "id", array()), array(), "array", true, true)) {
                // line 16
                echo "\t\t\t\t";
                $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), $this->getAttribute($context["contract"], "id", array()), array(), "array");
                // line 17
                echo "\t\t\t\t";
                if (((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")) && $this->getAttribute($context["contract"], "group", array()))) {
                    // line 18
                    echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contract"], "group", array()), "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 22
                    if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 24
                    if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array()), "Y-m-d"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t\t<td>";
                    // line 25
                    if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array())) {
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array()), "Y-m-d"), "html", null, true);
                    } else {
                        echo "---";
                    }
                    echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                }
                // line 28
                echo "\t\t\t";
            }
            // line 29
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "\t\t\t<tr><td colspan=\"5\">";
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
        
        $__internal_e2260a26a9559e6f9bfd5f25572e06460a31ec84c3abed276812d5ac3346d72b->leave($__internal_e2260a26a9559e6f9bfd5f25572e06460a31ec84c3abed276812d5ac3346d72b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:studentsgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  125 => 30,  120 => 29,  117 => 28,  107 => 25,  99 => 24,  95 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  72 => 18,  69 => 17,  66 => 16,  63 => 15,  58 => 14,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contract in contracts %}*/
/* 			{%if students[contract.id] is defined%}*/
/* 				{%set student=students[contract.id]%}*/
/* 				{%if student and contract.group%}*/
/* 					<tr>*/
/* 						<td>{{ contract.group.name }}</td>*/
/* 						<td>{{ student.firstname }}</td>*/
/* 						<td>{{ student.name }}</td>*/
/* 						<td>{%if student.startlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/* 						<td>{{ student.targetlevel }}</td>*/
/* 						<td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 						<td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					</tr>*/
/* 				{%endif%}*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="5">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
