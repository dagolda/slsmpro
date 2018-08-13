<?php

/* BoAdminBundle:Contracts:revision.html.twig */
class __TwigTemplate_5f1e0bf64a0b39ce69c639577784983416074b905be3567b1e7a36b9b42b4913 extends Twig_Template
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
        $__internal_68d9888caa0e0a2203823e4df5535f3379b152eca568e331ea303654239ee59c = $this->env->getExtension("native_profiler");
        $__internal_68d9888caa0e0a2203823e4df5535f3379b152eca568e331ea303654239ee59c->enter($__internal_68d9888caa0e0a2203823e4df5535f3379b152eca568e331ea303654239ee59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:revision.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list2\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amendment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.authorizeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hoursbefore", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourafter", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.costbefore", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.totalcost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width='120px' nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 20
            if ($this->getAttribute($context["revision"], "amendment", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "amendment", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            if ($this->getAttribute($context["revision"], "reference", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "reference", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            if ($this->getAttribute($context["revision"], "authorizeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "authorizeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            if ($this->getAttribute($context["revision"], "hoursbefore", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hoursbefore", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            if ($this->getAttribute($context["revision"], "hour", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hour", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            if ($this->getAttribute($context["revision"], "hourafter", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hourafter", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            if (($this->getAttribute($context["revision"], "hourlyrate", array()) && ($this->getAttribute($context["revision"], "hourlyrate", array()) != 0))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hourlyrate", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            if ($this->getAttribute($context["revision"], "costbefore", array())) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["revision"], "costbefore", array()), 0, "", " "), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            if ($this->getAttribute($context["revision"], "total", array())) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["revision"], "costafter", array()), 0, "", " "), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            if ($this->getAttribute($context["revision"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t";
            // line 31
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1)) && (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)))) {
                // line 32
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("revision_edit", array("id" => $this->getAttribute($context["revision"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("revision_remove", array("id" => $this->getAttribute($context["revision"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1)) && (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)))) {
            // line 39
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\" class=\"list-action\">
\t\t\t\t\t\t";
            // line 41
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1))) {
                // line 42
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_revision\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
                echo "</button>\t
\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 47
        echo "        </tbody>
    </table>
";
        
        $__internal_68d9888caa0e0a2203823e4df5535f3379b152eca568e331ea303654239ee59c->leave($__internal_68d9888caa0e0a2203823e4df5535f3379b152eca568e331ea303654239ee59c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:revision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 47,  194 => 44,  188 => 42,  186 => 41,  182 => 39,  179 => 38,  171 => 35,  164 => 33,  157 => 32,  155 => 31,  148 => 29,  140 => 28,  132 => 27,  124 => 26,  116 => 25,  108 => 24,  100 => 23,  94 => 22,  86 => 21,  78 => 20,  75 => 19,  71 => 18,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list2">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.amendment'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.authorizeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hoursbefore'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourafter'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourlyrate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.costbefore'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.totalcost'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width='120px' nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for revision in revisions %}*/
/* 				<tr>*/
/* 					<td>{%if revision.amendment %}{{ revision.amendment }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.reference %}{{ revision.reference }}{%else%}---{%endif%}</td>*/
/* 					<td>{% if revision.authorizeddate %}{{ revision.authorizeddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{%if revision.hoursbefore %}{{ revision.hoursbefore }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.hour %}{{ revision.hour }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.hourafter %}{{ revision.hourafter }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.hourlyrate and revision.hourlyrate!=0 %}{{ revision.hourlyrate }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.costbefore %}{{ revision.costbefore|number_format(0, '', ' ') }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if revision.total %}{{ revision.costafter|number_format(0, '', ' ') }}{%else%}---{%endif%}</td>*/
/* 					<td>{% if revision.enddate %}{{ revision.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td class="list-action">*/
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1 and (contract.status==1 or contract.status==2)%}*/
/* 						<a href="{{ path('revision_edit', { 'id': revision.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 						<a href="{{ path('revision_remove', { 'id': revision.id }) }}">{{'action.remove'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1 and (contract.status==1 or contract.status==2)%}*/
/* 				<tr>*/
/* 					<td colspan="11" class="list-action">*/
/* 						{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1%}*/
/* 							<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_revision">{{'action.add'|trans([],'BoAdminBundle')}}</button>	*/
/* 						{%endif%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
/* */
