<?php

/* BoHomeBundle:Tickets:tbliste.html.twig */
class __TwigTemplate_875aa192086cae6305eaa0fdd2e254636ff0ac5f8013b4f5e31903c89f92a391 extends Twig_Template
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
        $__internal_9bd3befd4a494b16b59e5411e3e7aece34442c6a98d8c13e3ce86e7da575cb94 = $this->env->getExtension("native_profiler");
        $__internal_9bd3befd4a494b16b59e5411e3e7aece34442c6a98d8c13e3ce86e7da575cb94->enter($__internal_9bd3befd4a494b16b59e5411e3e7aece34442c6a98d8c13e3ce86e7da575cb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tickets:tbliste.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
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
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "subject", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["ticket"], "openeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "openeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["ticket"], "resolveddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "resolveddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute($context["ticket"], "status", array()), array(), "array"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["ticket"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ticket"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_tickets_show", array("id" => $this->getAttribute($context["ticket"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
";
        
        $__internal_9bd3befd4a494b16b59e5411e3e7aece34442c6a98d8c13e3ce86e7da575cb94->leave($__internal_9bd3befd4a494b16b59e5411e3e7aece34442c6a98d8c13e3ce86e7da575cb94_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tickets:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  109 => 27,  98 => 23,  91 => 21,  87 => 20,  79 => 19,  73 => 18,  69 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
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
/*                 <td><a href="{{ path('tickets_show', { 'id': ticket.id }) }}">{{ ticket.id }}</a></td>*/
/*                 <td>{{ ticket.subject }}</td>*/
/*                 <td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td>{{ status[ticket.status] }}</td>*/
/*                 <td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/* 			<a href="{{ path('home_tickets_show', { 'id': ticket.id }) }}">{{'action.show'|trans([],'BoAdminBundle')}}</a>*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
