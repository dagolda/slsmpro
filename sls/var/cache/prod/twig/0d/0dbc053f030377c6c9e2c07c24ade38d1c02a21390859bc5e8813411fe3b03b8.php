<?php

/* BoAdminBundle:Default:tbliste.html.twig */
class __TwigTemplate_38489d2c9885aac07c945bd152cd3da3c2785769cb363167e82034e830c09b4b extends Twig_Template
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
        $__internal_e8c8db0bf1adaf42a3c373ec4c8e9074f920fac436716efc6d25567ad56ccc51 = $this->env->getExtension("native_profiler");
        $__internal_e8c8db0bf1adaf42a3c373ec4c8e9074f920fac436716efc6d25567ad56ccc51->enter($__internal_e8c8db0bf1adaf42a3c373ec4c8e9074f920fac436716efc6d25567ad56ccc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Default:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered acceuil_list\">
        <thead>
            <tr>
                <th>Id</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["ticket"], "students", array())) {
                // line 19
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "students", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "students", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t";
            } elseif ($this->getAttribute(            // line 20
$context["ticket"], "employee", array())) {
                // line 21
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "employee", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 22
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["ticket"], "openeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "openeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["ticket"], "resolveddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "resolveddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["ticket"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["ticket"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
";
        
        $__internal_e8c8db0bf1adaf42a3c373ec4c8e9074f920fac436716efc6d25567ad56ccc51->leave($__internal_e8c8db0bf1adaf42a3c373ec4c8e9074f920fac436716efc6d25567ad56ccc51_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  130 => 33,  119 => 29,  112 => 27,  108 => 26,  100 => 25,  94 => 24,  90 => 23,  87 => 22,  79 => 21,  77 => 20,  70 => 19,  68 => 18,  64 => 17,  61 => 16,  56 => 15,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered acceuil_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/* 				<th>{{'label.from'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ticket in tickets %}*/
/*             <tr>*/
/*                 <td>{{ ticket.id }}</td>*/
/*                 <td>{%if ticket.students %}*/
/* 					{{ticket.students.firstname}} {{ticket.students.name}}*/
/* 				{%elseif ticket.employee %}*/
/* 					{{ticket.employee.firstname}} {{ticket.employee.name}}*/
/* 				{%endif%}</td>*/
/*                 <td>{{ ticket.subject }}</td>*/
/*                 <td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{{ status[ticket.status] }}</td>*/
/*                 <td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 					<a href="{{ path('dash_tickets_show', { 'id': ticket.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
