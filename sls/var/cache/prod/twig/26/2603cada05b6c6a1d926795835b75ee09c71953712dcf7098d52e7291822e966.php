<?php

/* BoAdminBundle:Students:tbliste.html.twig */
class __TwigTemplate_377617a55f330d622958047e3666c1bb3eb8d1fc06152ef81ecb12d4374dfdc0 extends Twig_Template
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
        $__internal_987318afcb11ae688334d4fcb392ecb475c334e2f0dd6b8c79aa59950580cc42 = $this->env->getExtension("native_profiler");
        $__internal_987318afcb11ae688334d4fcb392ecb475c334e2f0dd6b8c79aa59950580cc42->enter($__internal_987318afcb11ae688334d4fcb392ecb475c334e2f0dd6b8c79aa59950580cc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
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
                <!--th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th--!>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["student"], "startlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "startlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["student"], "targetlevel", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "targetlevel", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["student"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["student"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <!--td>
\t\t\t\t\t";
            // line 27
            if ($this->getAttribute($context["student"], "contracts", array())) {
                // line 28
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["student"], "contracts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "typecontract", array()), "reference", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t</td--!>
                <td>";
            // line 33
            if ($this->getAttribute($context["student"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "edit", array()) == 1))) {
                // line 37
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 39
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>";
        
        $__internal_987318afcb11ae688334d4fcb392ecb475c334e2f0dd6b8c79aa59950580cc42->leave($__internal_987318afcb11ae688334d4fcb392ecb475c334e2f0dd6b8c79aa59950580cc42_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 44,  173 => 42,  166 => 39,  158 => 37,  156 => 36,  152 => 35,  145 => 33,  142 => 32,  138 => 30,  129 => 29,  124 => 28,  122 => 27,  113 => 25,  105 => 24,  97 => 23,  89 => 22,  85 => 21,  81 => 20,  75 => 19,  72 => 18,  67 => 17,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <!--th>{{'label.contracttype'|trans([],'BoAdminBundle')}}</th--!>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for student in students %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('students_show', { 'id': student.id }) }}">{{ student.id }}</a></td>*/
/*                 <td>{{ student.firstname }}</td>*/
/*                 <td>{{ student.name }}</td>*/
/*                 <td>{%if student.startlevel %}{{ student.startlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.targetlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{% if student.startdate %}{{ student.startdate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if student.enddate %}{{ student.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <!--td>*/
/* 					{%if student.contracts%}*/
/* 						{%for c in student.contracts%}*/
/* 							{{ c.typecontract.reference }}*/
/* 						{%endfor%}						*/
/* 					{%endif%}*/
/* 				</td--!>*/
/*                 <td>{% if student.creationdate %}{{ student.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('students_show', { 'id': student.id }) }}">show</a>*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].edit==1%}*/
/* 						<a href="{{ path('students_edit', { 'id': student.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
