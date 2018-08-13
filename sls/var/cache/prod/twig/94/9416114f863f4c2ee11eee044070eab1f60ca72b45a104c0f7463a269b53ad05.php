<?php

/* BoStudentBundle:Tickets:tbshow.html.twig */
class __TwigTemplate_53fcef8f1e3de5806c4b64a68ee7d91f2d4743e5951dcc5a0155177850c3e54f extends Twig_Template
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
        $__internal_b1a09e498b4552b672a6e2a77b7b902dea656cd1e2b5c48e95e695a6ea0f88c1 = $this->env->getExtension("native_profiler");
        $__internal_b1a09e498b4552b672a6e2a77b7b902dea656cd1e2b5c48e95e695a6ea0f88c1->enter($__internal_b1a09e498b4552b672a6e2a77b7b902dea656cd1e2b5c48e95e695a6ea0f88c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Tickets:tbshow.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"30\"%>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30\"%>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30\"%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.blockedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>              
\t\t\t\t\t<td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "subject", array()), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 11
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()) && $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array()))) {
            // line 12
            echo "\t\t\t\t\t\t\t";
            $context["i"] = 1;
            // line 13
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 14
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 15
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array())))) {
                    echo ", ";
                }
                // line 16
                echo "\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t\t\t";
        } elseif ( !(null === (isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")))) {
            // line 19
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
        // line 24
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statusddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>               
\t\t\t\t\t<td>";
        // line 33
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>\t\t\t\t\t
\t\t\t\t\t<td>";
        // line 35
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolvedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 44
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
        // line 45
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolveddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t
\t\t\t\t\t<td>";
        // line 46
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        // line 49
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())) {
            // line 50
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\">Image</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t<a href=\"#\" class=\"info1\">
\t\t\t\t\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"500\"/>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"900\"/>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\"><legend>Message</legend></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t</tbody>
\t\t</table>";
        
        $__internal_b1a09e498b4552b672a6e2a77b7b902dea656cd1e2b5c48e95e695a6ea0f88c1->leave($__internal_b1a09e498b4552b672a6e2a77b7b902dea656cd1e2b5c48e95e695a6ea0f88c1_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Tickets:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 69,  201 => 65,  191 => 58,  186 => 56,  178 => 50,  176 => 49,  166 => 46,  158 => 45,  152 => 44,  146 => 41,  142 => 40,  138 => 39,  129 => 35,  125 => 34,  119 => 33,  113 => 30,  109 => 29,  105 => 28,  94 => 24,  91 => 23,  87 => 21,  79 => 19,  76 => 18,  67 => 16,  63 => 15,  56 => 14,  51 => 13,  48 => 12,  46 => 11,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 			<tbody>*/
/* 				<tr>*/
/* 					<th width="30"%>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30"%>{{'label.contacts'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30"%">{{'label.blockedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>              */
/* 					<td>{{ ticket.subject }}</td>*/
/* 					<td>*/
/* 						{%if ticket.contacts and ticket.contacts.employee%}*/
/* 							{%set i=1%}*/
/* 							{%for employee in ticket.contacts.employee%}*/
/* 								{{ employee.firstname }} {{ employee.name }}*/
/* 								{%if i<ticket.contacts.employee|length%}, {%endif%}*/
/* 								{%set i=i+1%}								*/
/* 							{%endfor%}*/
/* 						{%elseif advisor is not null%}*/
/* 							{{ advisor.firstname }} {{ advisor.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td>{%if ticket.blockedby %}{{ ticket.blockedby }}{%else%}---{%endif%}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.statusddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>               */
/* 					<td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{{ status[ticket.status] }}</td>					*/
/* 					<td>{% if ticket.statusddate %}{{ ticket.statusddate|date('Y-m-d') }}{% endif %}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.resolvedby'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>				*/
/* 					<td>{% if ticket.resolveddate %}{{ ticket.openeddate|date('Y-m-d') }}{%else%}---{% endif %}</td>					*/
/* 					<td>{% if ticket.resolvedby %}{{ ticket.resolvedby}}{%else%}---{% endif %}</td>					*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				{%if ticket.filename%}*/
/* 				<tr>*/
/* 					<th colspan="3">Image</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="3">*/
/* 						<a href="#" class="info1">*/
/* 							<img src="{{ asset(['uploads/tickets/', ticket.filename]|join) }}" width="500"/>*/
/* 							<span>*/
/* 								<img src="{{ asset(['uploads/tickets/', ticket.filename]|join) }}" width="900"/>*/
/* 							</span>	*/
/* 						</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				{%endif%}*/
/* 				<tr>*/
/* 					<th colspan="3"><legend>Message</legend></th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="3">{{ ticket.comments }}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 			</tbody>*/
/* 		</table>*/
