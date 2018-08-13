<?php

/* BoAdvisorsBundle:Tickets:tbshow.html.twig */
class __TwigTemplate_a4373e8778d0785061730b366db9f2054b7525cabea238aabbcd899a11ee4703 extends Twig_Template
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
        $__internal_9cbcb2704287bc66e86a566262cfd382d09a21666d0b5617d1d203672e385404 = $this->env->getExtension("native_profiler");
        $__internal_9cbcb2704287bc66e86a566262cfd382d09a21666d0b5617d1d203672e385404->enter($__internal_9cbcb2704287bc66e86a566262cfd382d09a21666d0b5617d1d203672e385404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:tbshow.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "status", array()), array(), "array"), "html", null, true);
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
\t\t";
        // line 39
        if ((array_key_exists("contact", $context) && ((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")) != null))) {
            // line 40
            echo "
\t\t\t    <tr>
\t\t\t\t<th colspan=\"2\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cc", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
\t\t\t    </tr>
\t\t\t    <tr> 
\t\t\t\t<td colspan=\"2\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array())) {
                // line 47
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "employee", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                    // line 48
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                    echo "
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "\t\t\t\t\t";
            } else {
                echo "N/A";
            }
            echo "</td>             
\t\t\t       \t<td>";
            // line 51
            if ($this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "cc", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "contacts", array()), "cc", array()), "html", null, true);
            } else {
                echo "N/A";
            }
            echo "</td>
\t\t\t    </tr>
\t\t\t    <tr><td colspan=\"3\">&nbsp;</td></tr>

\t\t";
        }
        // line 56
        echo "\t\t\t\t";
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())) {
            // line 57
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\">Image</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t\t\t<a href=\"#\" class=\"info1\">
\t\t\t\t\t\t\t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"500\"/>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "uploads/tickets/", 1 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "filename", array())))), "html", null, true);
            echo "\" width=\"900\"/>
\t\t\t\t\t\t\t</span>\t
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t\t";
        }
        // line 72
        echo "            <tr>
                <th colspan=\"3\"><legend>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comments", array(), "BoAdminBundle"), "html", null, true);
        echo "</legend></th>
            </tr>
            <tr>
                <td colspan=\"3\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "comments", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t";
        // line 79
        if ($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvednote", array())) {
            // line 80
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"3\"><legend>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.resolutionnotes", array(), "BoAdminBundle"), "html", null, true);
            echo "</legend></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"3\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "resolvednote", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 88
        echo "        </tbody>
    </table>
";
        
        $__internal_9cbcb2704287bc66e86a566262cfd382d09a21666d0b5617d1d203672e385404->leave($__internal_9cbcb2704287bc66e86a566262cfd382d09a21666d0b5617d1d203672e385404_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 88,  243 => 84,  237 => 81,  234 => 80,  232 => 79,  226 => 76,  220 => 73,  217 => 72,  207 => 65,  202 => 63,  194 => 57,  191 => 56,  179 => 51,  172 => 50,  161 => 48,  156 => 47,  154 => 46,  148 => 43,  144 => 42,  140 => 40,  138 => 39,  128 => 36,  120 => 35,  116 => 34,  109 => 30,  105 => 29,  101 => 28,  92 => 24,  86 => 23,  80 => 22,  74 => 19,  70 => 18,  66 => 17,  60 => 13,  50 => 12,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/*                 <td>{{ status[ticket.status] }}</td>*/
/* 				<td>{% if ticket.resolvedby %}{{ ticket.resolvedby }}{% else %}N/A{% endif %}</td>*/
/* 				<td>{% if ticket.resolveddate %}{{ ticket.resolveddate|date('Y-m-d H:i:s') }}{% else %}N/A{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		{%if contact is defined and contact!=null%}*/
/* */
/* 			    <tr>*/
/* 				<th colspan="2">{{'label.contact'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.cc'|trans([],'BoAdminBundle')}}</th>*/
/* 			    </tr>*/
/* 			    <tr> */
/* 				<td colspan="2">{%if ticket.contacts.employee %}*/
/* 					{%for employee in ticket.contacts.employee%}*/
/* 						{{ employee.firstname }} {{ employee.name }}*/
/* 					{%endfor%}*/
/* 					{%else%}N/A{%endif%}</td>             */
/* 			       	<td>{%if ticket.contacts.cc %}{{  ticket.contacts.cc }}{%else%}N/A{%endif%}</td>*/
/* 			    </tr>*/
/* 			    <tr><td colspan="3">&nbsp;</td></tr>*/
/* */
/* 		{%endif%}*/
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
/*             <tr>*/
/*                 <th colspan="3"><legend>{{'label.comments'|trans([],'BoAdminBundle')}}</legend></th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="3">{{ ticket.comments }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/* 			{%if ticket.resolvednote%}*/
/* 				<tr>*/
/* 					<th colspan="3"><legend>{{'label.resolutionnotes'|trans([],'BoAdminBundle')}}</legend></th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="3">{{ ticket.resolvednote }}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="3">&nbsp;</td></tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
/* */
