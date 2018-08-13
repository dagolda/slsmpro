<?php

/* BoHomeBundle:Default:ticketlist.html.twig */
class __TwigTemplate_394321e01e587e12fa18d98872f4ae77b88c7fc54ae3077083ce6011aab0a480 extends Twig_Template
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
        $__internal_f9396a076e43fc69753d3f3b7e397b1f9adc0751fc9105c2268d0d19ce72d09e = $this->env->getExtension("native_profiler");
        $__internal_f9396a076e43fc69753d3f3b7e397b1f9adc0751fc9105c2268d0d19ce72d09e->enter($__internal_f9396a076e43fc69753d3f3b7e397b1f9adc0751fc9105c2268d0d19ce72d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:ticketlist.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.affectedto", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "subject", array()), "html", null, true);
            echo "</td>
\t\t<td>
\t\t\t";
            // line 17
            if ($this->getAttribute($context["ticket"], "contacts", array())) {
                $context["contact"] = $this->getAttribute($context["ticket"], "contacts", array());
            }
            // line 18
            echo "\t\t\t";
            if (((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")) && $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array()))) {
                // line 19
                echo "\t\t\t\t";
                $context["i"] = 1;
                // line 20
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 21
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                    // line 22
                    $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                    // line 23
                    echo "\t\t\t\t\t";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "employee", array())))) {
                        echo ", ";
                    }
                    echo "\t\t\t\t\t
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t---
\t\t\t";
            }
            // line 28
            echo "\t\t</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["ticket"], "openeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "openeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            if ($this->getAttribute($context["ticket"], "resolveddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "resolveddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["ticket"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            if ($this->getAttribute($context["ticket"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t\t\t<tr><td colspan=\"6\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>
";
        
        $__internal_f9396a076e43fc69753d3f3b7e397b1f9adc0751fc9105c2268d0d19ce72d09e->leave($__internal_f9396a076e43fc69753d3f3b7e397b1f9adc0751fc9105c2268d0d19ce72d09e_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:ticketlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 37,  140 => 35,  130 => 32,  126 => 31,  118 => 30,  112 => 29,  109 => 28,  105 => 26,  102 => 25,  91 => 23,  89 => 22,  82 => 21,  77 => 20,  74 => 19,  71 => 18,  67 => 17,  62 => 15,  59 => 14,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.affectedto'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ticket in tickets %}*/
/*             <tr>*/
/*                 <td>{{ ticket.subject }}</td>*/
/* 		<td>*/
/* 			{%if ticket.contacts %}{%set contact=ticket.contacts%}{%endif%}*/
/* 			{%if contact and contact.employee%}*/
/* 				{%set i=1%}*/
/* 				{%for employee in contact.employee%}*/
/* 					{{ employee.firstname }} {{ employee.name }}*/
/* 					{%set i=i+1%}*/
/* 					{%if i<contact.employee|length%}, {%endif%}					*/
/* 				{%endfor%}*/
/* 			{%else%}*/
/* 				---*/
/* 			{%endif%}*/
/* 		</td>*/
/*                 <td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{{ status[ticket.status] }}</td>*/
/*                 <td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="6">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
