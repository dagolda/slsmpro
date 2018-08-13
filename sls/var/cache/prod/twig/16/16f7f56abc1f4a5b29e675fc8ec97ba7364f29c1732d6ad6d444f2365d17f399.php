<?php

/* BoAdvisorsBundle:Employee:tbliste.html.twig */
class __TwigTemplate_5b1a32146ff1a6c1a5e39e3aafdf2c60d4e81baf78fa69a5ae3e0e1d4dbd631c extends Twig_Template
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
        $__internal_be0dce3d5a3b3b9f8e6bc14fed2946ec4434fcbd4daf624959a934ababf916e5 = $this->env->getExtension("native_profiler");
        $__internal_be0dce3d5a3b3b9f8e6bc14fed2946ec4434fcbd4daf624959a934ababf916e5->enter($__internal_be0dce3d5a3b3b9f8e6bc14fed2946ec4434fcbd4daf624959a934ababf916e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Employee:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"4%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"5%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"126px\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employees"]) ? $context["employees"] : $this->getContext($context, "employees")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "homenumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "cellnumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["employee"], "status", array()), array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
                <td class=\"list-action\"  width=\"126px\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_employee_new", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.newts", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr><td colspan=\"8\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>";
        
        $__internal_be0dce3d5a3b3b9f8e6bc14fed2946ec4434fcbd4daf624959a934ababf916e5->leave($__internal_be0dce3d5a3b3b9f8e6bc14fed2946ec4434fcbd4daf624959a934ababf916e5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Employee:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  112 => 31,  102 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="5%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="126px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('employee_show', { 'id': employee.id }) }}">{{ employee.id }}</a></td>*/
/*                 <td>{{ employee.firstname }}</td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.email }}</td>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/*                 <td>{{ employee.status|trans([],'BoAdminBundle') }}</td>*/
/*                 <td class="list-action"  width="126px">*/
/*                     <a href="{{ path('dash_employee_new', { 'id': employee.id }) }}">*/
/* 						{{'action.newts'|trans([],'BoAdminBundle')}}*/
/* 					</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
