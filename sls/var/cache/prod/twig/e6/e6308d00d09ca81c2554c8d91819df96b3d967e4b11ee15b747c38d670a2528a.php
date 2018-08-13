<?php

/* BoAdminBundle:TicketContacts:tbliste.html.twig */
class __TwigTemplate_fedc2ede644150ea0c2e3f09fb5c0b0ad62c624a2393d40466b99df0b7ea87a8 extends Twig_Template
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
        $__internal_6af1e4eb5cbdfc43232eda97f9080e63d053076b7e5703e2edafc3d2ec0e7748 = $this->env->getExtension("native_profiler");
        $__internal_6af1e4eb5cbdfc43232eda97f9080e63d053076b7e5703e2edafc3d2ec0e7748->enter($__internal_6af1e4eb5cbdfc43232eda97f9080e63d053076b7e5703e2edafc3d2ec0e7748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TicketContacts:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"6%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"15%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"20%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ticketcontacts"]) ? $context["ticketcontacts"] : $this->getContext($context, "ticketcontacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticketcontact"]) {
            // line 14
            echo "            <tr>
                <td><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticketcontacts_show", array("id" => $this->getAttribute($context["ticketcontact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticketcontact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticketcontact"], "name", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t";
            // line 18
            if ($this->getAttribute($context["ticketcontact"], "employee", array())) {
                // line 19
                echo "\t\t\t\t\t\t";
                $context["i"] = 1;
                // line 20
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["ticketcontact"], "employee", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                    if ((twig_length_filter($this->env, $this->getAttribute($context["ticketcontact"], "employee", array())) > (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")))) {
                        echo ", ";
                    } else {
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    }
                    // line 22
                    echo "\t\t\t\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 23
                    echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "\t
\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["ticketcontact"], "cc", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticketcontact"], "cc", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["ticketcontact"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticketcontact"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
\t\t\t\t<td class=\"list-action\" nowrap>
\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ticketcontacts_edit", array("id" => $this->getAttribute($context["ticketcontact"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_employee";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticketcontact"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <tr>
                <td colspan=\"6\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message.no.found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticketcontact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>";
        
        $__internal_6af1e4eb5cbdfc43232eda97f9080e63d053076b7e5703e2edafc3d2ec0e7748->leave($__internal_6af1e4eb5cbdfc43232eda97f9080e63d053076b7e5703e2edafc3d2ec0e7748_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TicketContacts:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 39,  147 => 36,  144 => 35,  133 => 31,  125 => 30,  118 => 28,  110 => 27,  107 => 26,  103 => 24,  96 => 23,  91 => 22,  81 => 21,  75 => 20,  72 => 19,  70 => 18,  65 => 16,  59 => 15,  56 => 14,  51 => 13,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="6%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.contacts'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="15%">{{'label.cc'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="20%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ticketcontact in ticketcontacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ticketcontacts_show', { 'id': ticketcontact.id }) }}">{{ ticketcontact.id }}</a></td>*/
/*                 <td>{{ ticketcontact.name }}</td>*/
/*                 <td>*/
/* 					{%if ticketcontact.employee %}*/
/* 						{%set i=1%}*/
/* 						{%for employee in ticketcontact.employee %}*/
/* 							{{ employee.firstname }} {{ employee.name }}{%if ticketcontact.employee|length>i%}, {%else%}{%set i=i+1%}{%endif%}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endfor%}	*/
/* 					{%endif%}*/
/* 				</td>*/
/*                 <td>{%if ticketcontact.cc %}{{ ticketcontact.cc }}{%else%}N/A{%endif%}</td>*/
/*                 <td>{% if ticketcontact.creationdate %}{{ ticketcontact.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 				<td class="list-action" nowrap>*/
/* 					<a href="{{ path('ticketcontacts_edit', { 'id': ticketcontact.id }) }}" title="{{'action.edit'|trans([],'BoAdminBundle')}}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 					<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_employee{{ticketcontact.id}}">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 				</td>*/
/*             </tr>*/
/* 		{%else%}*/
/*             <tr>*/
/*                 <td colspan="6">{{'message.no.found'|trans([],'BoAdminBundle')}}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
