<?php

/* BoAdminBundle:Absences:absemployee.html.twig */
class __TwigTemplate_0c4095701f324b801cc0a2f903ca550297d2230d431d34613110b084525b2199 extends Twig_Template
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
        $__internal_88d65122d3fe43536abfa53cc5cf63c73d094d39cd620debfb364d58f6c8938d = $this->env->getExtension("native_profiler");
        $__internal_88d65122d3fe43536abfa53cc5cf63c73d094d39cd620debfb364d58f6c8938d->enter($__internal_88d65122d3fe43536abfa53cc5cf63c73d094d39cd620debfb364d58f6c8938d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:absemployee.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.valid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 17
            echo "            <tr>
                <td ";
            // line 18
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 19
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            if ($this->getAttribute($context["absence"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td ";
            // line 20
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 21
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td ";
            // line 22
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 23
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            if ($this->getAttribute($context["absence"], "valid", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td ";
            // line 24
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo " align=\"right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            echo "</td>
                <td ";
            // line 25
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "class='wax_3d_1'";
            }
            echo ">";
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action ";
            // line 26
            if (($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : null), $this->getAttribute($context["absence"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["abssub"]) ? $context["abssub"] : $this->getContext($context, "abssub")), $this->getAttribute($context["absence"], "id", array()), array(), "array") == 1))) {
                echo "wax_3d_1";
            }
            echo "\" width=\"130px\" nowrap>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absences_employee_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "edit", array()) == 1))) {
                // line 29
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absences_employee_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t\t<tr><td colspan=\"10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo " in database</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
";
        
        $__internal_88d65122d3fe43536abfa53cc5cf63c73d094d39cd620debfb364d58f6c8938d->leave($__internal_88d65122d3fe43536abfa53cc5cf63c73d094d39cd620debfb364d58f6c8938d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:absemployee.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 34,  173 => 31,  165 => 29,  163 => 28,  157 => 27,  151 => 26,  141 => 25,  133 => 24,  121 => 23,  113 => 22,  103 => 21,  93 => 20,  79 => 19,  71 => 18,  68 => 17,  63 => 16,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.valid'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/*             <tr>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{{ absence.motif }}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{%if absence.employee %}{{ absence.employee.firstname }} {{ absence.employee.name }}{%else%}---{%endif%}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{{ absence.amorpm }}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{%if absence.valid %}Yes{% else %}No{% endif %}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%} align="right">{{ absence.numberday }}</td>*/
/*                 <td {%if abssub[absence.id] is defined and abssub[absence.id]==1%}class='wax_3d_1'{%endif%}>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action {%if abssub[absence.id] is defined and abssub[absence.id]==1%}wax_3d_1{%endif%}" width="130px" nowrap>*/
/*                     <a href="{{ path('absences_employee_show', { 'id': absence.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].edit==1%}*/
/* 						<a href="{{ path('absences_employee_edit', { 'id': absence.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">{{'No data found'|trans([],'BoAdminBundle')}} in database</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
