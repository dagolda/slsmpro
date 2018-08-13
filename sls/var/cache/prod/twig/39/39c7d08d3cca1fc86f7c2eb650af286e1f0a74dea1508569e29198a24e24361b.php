<?php

/* BoAdminBundle:Employee:absences.html.twig */
class __TwigTemplate_612e21a064b1aae62b3aab87a218f7df56176e143751fc3fac27aff7e505c99e extends Twig_Template
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
        $__internal_f8eac9aac565eeff6b50b540169dd61e1ccfc44e6f38e9529b6f5482b606e952 = $this->env->getExtension("native_profiler");
        $__internal_f8eac9aac565eeff6b50b540169dd61e1ccfc44e6f38e9529b6f5482b606e952->enter($__internal_f8eac9aac565eeff6b50b540169dd61e1ccfc44e6f38e9529b6f5482b606e952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:absences.html.twig"));

        // line 1
        echo "\t";
        $context["i"] = 1;
        // line 2
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
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
            echo "\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["absence"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show_absence", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Absences", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Absences", array(), "array"), "edit", array()) == 1))) {
                // line 29
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_edit_absence", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 31
            echo "                </td>
            </tr>
\t\t\t<input type=\"hidden\" id=\"absence";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" name=\"absence";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" value=\"absence.startdate|date('Y-m-d')\" />
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t\t\t<tr><td colspan=\"10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo " in database</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t";
        if (((twig_length_filter($this->env, (isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences"))) > 0) && (twig_length_filter($this->env, (isset($context["allabsences"]) ? $context["allabsences"] : $this->getContext($context, "allabsences"))) < 20))) {
            // line 38
            echo "\t\t<tr><td colspan=\"9\" class=\"list-action\">
\t\t\t";
            // line 39
            if ((array_key_exists("offset", $context) && ((isset($context["offset"]) ? $context["offset"] : $this->getContext($context, "offset")) == 20))) {
                // line 40
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_list_absence", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "offset" => 5)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            } else {
                // line 42
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_list_absence", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "offset" => 20)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.allabsences", array(), "BoAdminBundle"), "html", null, true);
                echo "</a> <span color='red'>* List limited to 20</span> 
\t\t\t";
            }
            // line 44
            echo "\t\t</td></tr>
\t";
        }
        // line 46
        echo "        </tbody>
    </table>
\t<input type=\"hidden\" id=\"ta\"  name=\"ta\" value=\"i\" />
";
        
        $__internal_f8eac9aac565eeff6b50b540169dd61e1ccfc44e6f38e9529b6f5482b606e952->leave($__internal_f8eac9aac565eeff6b50b540169dd61e1ccfc44e6f38e9529b6f5482b606e952_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:absences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 46,  176 => 44,  168 => 42,  160 => 40,  158 => 39,  155 => 38,  152 => 37,  143 => 35,  134 => 33,  130 => 31,  122 => 29,  120 => 28,  114 => 27,  107 => 25,  103 => 24,  99 => 23,  93 => 22,  87 => 21,  77 => 20,  73 => 19,  70 => 18,  67 => 17,  62 => 16,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  34 => 6,  30 => 5,  25 => 2,  22 => 1,);
    }
}
/* 	{%set i=1%}*/
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/* 			{%set i=i+1%}*/
/*             <tr>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{%if absence.employee %}{{ absence.employee.firstname }} {{ absence.employee.name }}{%else%}---{% endif %}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ absence.amorpm }}</td>*/
/*                 <td>{{ absence.numberday }}</td>*/
/*                 <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('employee_show_absence', { 'id': absence.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%if app.session.get('rights')['STAFF']['Absences'] is defined and app.session.get('rights')['STAFF']['Absences'].edit==1%}*/
/* 						<a href="{{ path('employee_edit_absence', { 'id': absence.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 			<input type="hidden" id="absence{{i}}" name="absence{{i}}" value="absence.startdate|date('Y-m-d')" />*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">{{'No data found'|trans([],'BoAdminBundle')}} in database</td></tr>*/
/*         {% endfor %}*/
/* 	{%if absences|length>0 and allabsences|length<20%}*/
/* 		<tr><td colspan="9" class="list-action">*/
/* 			{%if offset is defined and offset==20%}*/
/* 				<a href="{{ path('employee_list_absence', { 'id': employee.id,'offset':5 }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%else%}*/
/* 				<a href="{{ path('employee_list_absence', { 'id': employee.id,'offset':20 }) }}">{{'label.allabsences'|trans([],'BoAdminBundle')}}</a> <span color='red'>* List limited to 20</span> */
/* 			{% endif %}*/
/* 		</td></tr>*/
/* 	{% endif %}*/
/*         </tbody>*/
/*     </table>*/
/* 	<input type="hidden" id="ta"  name="ta" value="i" />*/
/* */
