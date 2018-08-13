<?php

/* BoAdvisorsBundle:Validation:tbliste.html.twig */
class __TwigTemplate_40eedb0b38ed351f65439a2568934c1aa6ae5a4257a72dd882994454385c2871 extends Twig_Template
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
        $__internal_5729ed8906762cf2f28bd854e80d83a0607cf3252bfd89727942e565c12df03a = $this->env->getExtension("native_profiler");
        $__internal_5729ed8906762cf2f28bd854e80d83a0607cf3252bfd89727942e565c12df03a->enter($__internal_5729ed8906762cf2f28bd854e80d83a0607cf3252bfd89727942e565c12df03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Validation:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"11%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "status", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\"  width=\"126px\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_employee_show", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
            echo "\">Show TS</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t\t<tr><td colspan=\"9\">No data found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>";
        
        $__internal_5729ed8906762cf2f28bd854e80d83a0607cf3252bfd89727942e565c12df03a->leave($__internal_5729ed8906762cf2f28bd854e80d83a0607cf3252bfd89727942e565c12df03a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Validation:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  107 => 29,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 17,  64 => 16,  59 => 15,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="4%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="11%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="5%">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="126px">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for employee in employees %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('employee_show', { 'id': employee.id }) }}">{{ employee.id }}</a></td>*/
/*                 <td>{{ employee.name }}</td>*/
/*                 <td>{{ employee.firstname }}</td>*/
/*                 <td>{{ employee.email }}</td>*/
/*                 <td>{{ employee.homenumber }}</td>*/
/*                 <td>{{ employee.cellnumber }}</td>*/
/*                 <td>{{ employee.status }}</td>*/
/*                 <td class="list-action"  width="126px">*/
/*                     <a href="{{ path('dash_employee_show', { 'id': employee.id }) }}">Show TS</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">No data found</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
