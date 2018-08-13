<?php

/* BoAdvisorsBundle:Tickets:tbliste.html.twig */
class __TwigTemplate_dd2aeeaf05b82ad2e60449b4a9baf26483c34a83a1f722a4d03e81e711fd8056 extends Twig_Template
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
        $__internal_17b0246b318aed7943540c32813b4780fb0f25b1162f5852404362f087877ee5 = $this->env->getExtension("native_profiler");
        $__internal_17b0246b318aed7943540c32813b4780fb0f25b1162f5852404362f087877ee5->enter($__internal_17b0246b318aed7943540c32813b4780fb0f25b1162f5852404362f087877ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openedby", array(), "BoAdminBundle"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.blockedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 17
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "subject", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($context["ticket"], "employee", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "employee", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "employee", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 22
$context["ticket"], "students", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "students", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ticket"], "students", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "---";
            }
            // line 24
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 25
            if ($this->getAttribute($context["ticket"], "openeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "openeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            if ($this->getAttribute($context["ticket"], "resolveddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "resolveddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            if ($this->getAttribute($context["ticket"], "blockedby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "blockedby", array()), "html", null, true);
                echo " ";
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["ticket"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            if ($this->getAttribute($context["ticket"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t\t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t";
            // line 32
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "ADMINISTRATION", array(), "array", false, true), "Tickets", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "ADMINISTRATION", array(), "array"), "Tickets", array(), "array"), "edit", array()) == 1))) {
                // line 33
                echo "\t\t\t\t\t\t\t<!--a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_tickets_edit", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a-->
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_17b0246b318aed7943540c32813b4780fb0f25b1162f5852404362f087877ee5->leave($__internal_17b0246b318aed7943540c32813b4780fb0f25b1162f5852404362f087877ee5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 40,  157 => 38,  150 => 35,  142 => 33,  140 => 32,  134 => 31,  127 => 29,  123 => 28,  114 => 27,  106 => 26,  100 => 25,  97 => 24,  94 => 23,  86 => 22,  79 => 21,  74 => 19,  68 => 18,  65 => 17,  60 => 16,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.openedby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.blockedby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for ticket in tickets %}*/
/* 				<tr>*/
/* 					<td><a href="{{ path('tickets_show', { 'id': ticket.id }) }}">{{ ticket.id }}</a></td>*/
/* 					<td>{{ ticket.subject }}</td>*/
/* 					<td>*/
/* 						{%if ticket.employee %}{{ ticket.employee.firstname }} {{ ticket.employee.name }}*/
/* 						{%elseif ticket.students %}{{ ticket.students.firstname }} {{ ticket.students.name }}*/
/* 						{%else%}---{%endif%}*/
/* 					</td>*/
/* 					<td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/* 					<td>{%if ticket.blockedby %}{{ ticket.blockedby }} {%else%}---{%endif%}</td>*/
/* 					<td>{{ status[ticket.status] }}</td>*/
/* 					<td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 					<td class="list-action">*/
/* 						<a href="{{ path('dash_tickets_show', { 'id': ticket.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/* 						{%if app.session.get('rights')['ADMINISTRATION']['Tickets'] is defined and app.session.get('rights')['ADMINISTRATION']['Tickets'].edit==1%}*/
/* 							<!--a href="{{ path('dash_tickets_edit', { 'id': ticket.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a-->*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%else%}*/
/* 				<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
