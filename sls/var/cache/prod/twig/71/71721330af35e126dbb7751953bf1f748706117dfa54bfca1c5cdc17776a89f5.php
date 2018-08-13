<?php

/* BoAdminBundle:Absences:tbliste.html.twig */
class __TwigTemplate_bc86c8b574dd70a15c0353c32cbd02e3c0aae7eafed73ef8b439dddd623956ee extends Twig_Template
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
        $__internal_8a9cfd52aa5a19c20cf10ee2c14a66975d6903d2c3737b4f5a5d52ef3add9777 = $this->env->getExtension("native_profiler");
        $__internal_8a9cfd52aa5a19c20cf10ee2c14a66975d6903d2c3737b4f5a5d52ef3add9777->enter($__internal_8a9cfd52aa5a19c20cf10ee2c14a66975d6903d2c3737b4f5a5d52ef3add9777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 16
            echo "            <tr>
\t\t  <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 18
            if ($this->getAttribute($context["absence"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["absence"], "employee", array()), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t  <td>";
            // line 19
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t  <td>";
            // line 20
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t  <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 23
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\" nowrap>
\t\t\t";
            // line 25
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Students", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Students", array(), "array"), "edit", array()) == 1))) {
                // line 26
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("absences_employee_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 28
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
        
        $__internal_8a9cfd52aa5a19c20cf10ee2c14a66975d6903d2c3737b4f5a5d52ef3add9777->leave($__internal_8a9cfd52aa5a19c20cf10ee2c14a66975d6903d2c3737b4f5a5d52ef3add9777_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  125 => 31,  118 => 28,  110 => 26,  108 => 25,  101 => 23,  97 => 22,  93 => 21,  87 => 20,  81 => 19,  71 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/*             <tr>*/
/* 		  <td>{{ absence.motif }}</td>*/
/* 		  <td>{%if absence.employee %}{{ absence.employee.firstname }} {{ absence.employee.name }}{%else%}---{%endif%}</td>*/
/* 		  <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 		  <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 		  <td>{{ absence.amorpm }}</td>*/
/* 		  <td>{{ absence.numberday }}</td>*/
/* 		  <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action" nowrap>*/
/* 			{%if app.session.get('rights')['CONTRACTS']['Students'] is defined and app.session.get('rights')['CONTRACTS']['Students'].edit==1%}*/
/* 				<a href="{{ path('absences_employee_edit', { 'id': absence.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'message.no.found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
