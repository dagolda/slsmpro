<?php

/* BoAdvisorsBundle:Help:tbshow.html.twig */
class __TwigTemplate_03dbebefab206c484c7e96c2aa79a36405e21576cece15f83cdadd2a9f98ff9d extends Twig_Template
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
        $__internal_2a7704dd74ce7db352418bc1d7c2c26b785a2e2edf39ad631d1c1a36c52d44ad = $this->env->getExtension("native_profiler");
        $__internal_2a7704dd74ce7db352418bc1d7c2c26b785a2e2edf39ad631d1c1a36c52d44ad->enter($__internal_2a7704dd74ce7db352418bc1d7c2c26b785a2e2edf39ad631d1c1a36c52d44ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Help:tbshow.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
                <th width=\"30%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"30%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.submittby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>              
\t\t\t\t<td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 12
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "name", array()), "html", null, true);
        } elseif ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "name", array()), "html", null, true);
        }
        // line 13
        echo "\t\t\t\t</td>
            </tr>
            <tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statusdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>               
\t\t\t\t<td>";
        // line 22
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 24
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolvedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 35
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array()), "html", null, true);
        } else {
            echo "N/A";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 36
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolveddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolveddate", array()), "Y-m-d H:i:s"), "html", null, true);
        } else {
            echo "N/A";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
                <th colspan=\"3\"><legend>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comments", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></th>
            </tr>
            <tr>
                <td colspan=\"3\">";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
        </tbody>
    </table>
";
        
        $__internal_2a7704dd74ce7db352418bc1d7c2c26b785a2e2edf39ad631d1c1a36c52d44ad->leave($__internal_2a7704dd74ce7db352418bc1d7c2c26b785a2e2edf39ad631d1c1a36c52d44ad_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Help:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 43,  139 => 40,  128 => 36,  120 => 35,  116 => 34,  109 => 30,  105 => 29,  101 => 28,  92 => 24,  86 => 23,  80 => 22,  74 => 19,  70 => 18,  66 => 17,  60 => 13,  50 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="30%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="30%">{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="30%">{{'label.submittby'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>              */
/* 				<td>{{ ticket.id }}</td>*/
/*                 <td>{{ ticket.subject }}</td>*/
/* 				<td>*/
/* 					{%if ticket.employee %}{{ ticket.employee.firstname }} {{ ticket.employee.name }}{%elseif ticket.students%}{{ ticket.students.firstname }} {{ ticket.students.name }}{%endif%}*/
/* 				</td>*/
/*             </tr>*/
/*             <tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.statusdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/* 				<td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if ticket.statusddate %}{{ ticket.statusddate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.resolvedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 */
/*                 <td>{{ ticket.status }}</td>*/
/* 				<td>{% if ticket.resolvedby %}{{ ticket.resolvedby }}{% else %}N/A{% endif %}</td>*/
/* 				<td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d H:i:s') }}{% else %}N/A{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th colspan="3"><legend>{{'label.comments'|trans([],'BoAdminBundle')}}</legend></th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3">{{ ticket.comments }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
