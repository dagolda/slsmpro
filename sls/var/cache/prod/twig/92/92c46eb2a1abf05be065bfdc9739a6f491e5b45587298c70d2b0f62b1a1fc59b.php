<?php

/* BoAdminBundle:Tickets:show.html.twig */
class __TwigTemplate_cb516bd5a98506311076bbb5cba6460d5cd80fc8928973becda14348278f8943 extends Twig_Template
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
        $__internal_462102fd91b772bc30c2f92f3df1aa0ab22dc2d87e5e1d6ef9e8a43501f504ae = $this->env->getExtension("native_profiler");
        $__internal_462102fd91b772bc30c2f92f3df1aa0ab22dc2d87e5e1d6ef9e8a43501f504ae->enter($__internal_462102fd91b772bc30c2f92f3df1aa0ab22dc2d87e5e1d6ef9e8a43501f504ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tickets:show.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"30\"%>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.submittby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"30\"%>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
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
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "employee", array()), "name", array()), "html", null, true);
        } elseif ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "students", array()), "name", array()), "html", null, true);
        }
        // line 12
        echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
        // line 14
        if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()) && $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array()))) {
            // line 15
            echo "\t\t\t\t\t\t\t";
            $context["i"] = 1;
            // line 16
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 17
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 18
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array())))) {
                    echo ", ";
                }
                // line 19
                echo "\t\t\t\t\t\t\t\t";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t\t\t\t";
        } elseif ((array_key_exists("advisor", $context) &&  !(null === (isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor"))))) {
            // line 22
            echo "\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advisor"]) ? $context["advisor"] : $this->getContext($context, "advisor")), "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t";
        } else {
            // line 24
            echo "\t\t\t\t\t\t\t---
\t\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.blockedby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr> 
\t\t\t\t\t<td>";
        // line 35
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "blockedby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
        // line 36
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()), array(), "array"), "html", null, true);
        echo "</td>\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.statusddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 46
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "statusddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 47
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
        // line 48
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolveddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "openeddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        // line 51
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array())) {
            // line 52
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolvedby", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closedby", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t<th>&nbsp;</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>\t\t\t\t
\t\t\t\t\t\t<td>";
            // line 58
            if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvedby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t
\t\t\t\t\t\t<td>";
            // line 59
            if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "closeby", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "closeby", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t
\t\t\t\t\t\t<td>&nbsp;</td>\t\t\t\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        // line 64
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())) {
            // line 65
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\">Image</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t<a href=\"#\" class=\"info1\">
\t\t\t\t\t\t\t<img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"500\"/>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"900\"/>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\"><legend>Message</legend></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        // line 87
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvednote", array())) {
            // line 88
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan=\"3\"><legend>";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolutionnotes", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend></th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvednote", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        }
        // line 96
        echo "\t\t\t</tbody>
\t\t</table>";
        
        $__internal_462102fd91b772bc30c2f92f3df1aa0ab22dc2d87e5e1d6ef9e8a43501f504ae->leave($__internal_462102fd91b772bc30c2f92f3df1aa0ab22dc2d87e5e1d6ef9e8a43501f504ae_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tickets:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 96,  268 => 92,  262 => 89,  259 => 88,  257 => 87,  251 => 84,  245 => 80,  235 => 73,  230 => 71,  222 => 65,  220 => 64,  217 => 63,  206 => 59,  198 => 58,  191 => 54,  187 => 53,  184 => 52,  182 => 51,  172 => 48,  166 => 47,  160 => 46,  154 => 43,  150 => 42,  146 => 41,  139 => 37,  133 => 36,  125 => 35,  119 => 32,  115 => 31,  111 => 30,  105 => 26,  101 => 24,  93 => 22,  90 => 21,  81 => 19,  77 => 18,  70 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 12,  46 => 11,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 			<tbody>*/
/* 				<tr>*/
/* 					<th width="30"%>{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30%">{{'label.submittby'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="30"%>{{'label.contacts'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>              */
/* 					<td>{{ ticket.subject }}</td>*/
/* 					<td>*/
/* 						{%if ticket.employee %}{{ ticket.employee.firstname }} {{ ticket.employee.name }}{%elseif ticket.students%}{{ ticket.students.firstname }} {{ ticket.students.name }}{%endif%}*/
/* 					</td>*/
/* 					<td>*/
/* 						{%if ticket.contacts and ticket.contacts.employee%}*/
/* 							{%set i=1%}*/
/* 							{%for employee in ticket.contacts.employee%}*/
/* 								{{ employee.firstname }} {{ employee.name }}*/
/* 								{%if i<ticket.contacts.employee|length%}, {%endif%}*/
/* 								{%set i=i+1%}								*/
/* 							{%endfor%}*/
/* 						{%elseif advisor is defined and advisor is not null%}*/
/* 							{{ advisor.firstname }} {{ advisor.name }}*/
/* 						{%else%}*/
/* 							---*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.blockedby'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr> */
/* 					<td>{%if ticket.blockedby %}{{ ticket.blockedby }}{%else%}---{%endif%}</td>				*/
/* 					<td>{% if ticket.openeddate %}{{ ticket.openeddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{{ status[ticket.status] }}</td>					*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				<tr>*/
/* 					<th>{{'label.statusddate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.resolveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{% if ticket.statusddate %}{{ ticket.statusddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{% if ticket.creationdate %}{{ ticket.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>				*/
/* 					<td>{% if ticket.resolveddate %}{{ ticket.openeddate|date('Y-m-d') }}{%else%}---{% endif %}</td>									*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				{%if ticket.resolvedby%}*/
/* 					<tr>*/
/* 						<th>{{'label.resolvedby'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th>{{'label.closedby'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th>&nbsp;</th>*/
/* 					</tr>*/
/* 					<tr>				*/
/* 						<td>{% if ticket.resolvedby %}{{ ticket.resolvedby}}{%else%}---{% endif %}</td>	*/
/* 						<td>{% if ticket.closeby %}{{ ticket.closeby}}{%else%}---{% endif %}</td>	*/
/* 						<td>&nbsp;</td>							*/
/* 					</tr>*/
/* 				{% endif %}*/
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
/* 				{%if ticket.resolvednote%}*/
/* 					<tr>*/
/* 						<th colspan="3"><legend>{{'label.resolutionnotes'|trans([],'BoAdminBundle')}}</legend></th>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td colspan="3">{{ ticket.resolvednote }}</td>*/
/* 					</tr>*/
/* 					<tr><td colspan="3">&nbsp;</td></tr>*/
/* 				{%endif%}*/
/* 			</tbody>*/
/* 		</table>*/
