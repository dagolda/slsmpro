<?php

/* BoAdvisorsBundle:Supervision:revision.html.twig */
class __TwigTemplate_5647cb0a9c9ee822cfbff49b748bdcb2478246b45e27f0ca7be0c7ae2bac5b86 extends Twig_Template
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
        $__internal_22b47789a057ec33435f2d7e59bbc0727f2fdef20a3aac21c4fc565e35eb5cbb = $this->env->getExtension("native_profiler");
        $__internal_22b47789a057ec33435f2d7e59bbc0727f2fdef20a3aac21c4fc565e35eb5cbb->enter($__internal_22b47789a057ec33435f2d7e59bbc0727f2fdef20a3aac21c4fc565e35eb5cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:revision.html.twig"));

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
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 19
            if ($this->getAttribute($context["revision"], "amendment", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "amendment", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 20
            if ($this->getAttribute($context["revision"], "reference", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "reference", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 21
            if ($this->getAttribute($context["revision"], "authorizeddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "authorizeddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            if ($this->getAttribute($context["revision"], "hoursbefore", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hoursbefore", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            if ($this->getAttribute($context["revision"], "hour", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hour", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            if ($this->getAttribute($context["revision"], "hourafter", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hourafter", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 25
            if (($this->getAttribute($context["revision"], "hourlyrate", array()) && ($this->getAttribute($context["revision"], "hourlyrate", array()) != 0))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "hourlyrate", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            if ($this->getAttribute($context["revision"], "costbefore", array())) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["revision"], "costbefore", array()), 0, "", " "), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            if ($this->getAttribute($context["revision"], "total", array())) {
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["revision"], "costafter", array()), 0, "", " "), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            if ($this->getAttribute($context["revision"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["revision"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>";
        
        $__internal_22b47789a057ec33435f2d7e59bbc0727f2fdef20a3aac21c4fc565e35eb5cbb->leave($__internal_22b47789a057ec33435f2d7e59bbc0727f2fdef20a3aac21c4fc565e35eb5cbb_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:revision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 31,  147 => 28,  139 => 27,  131 => 26,  123 => 25,  115 => 24,  107 => 23,  99 => 22,  93 => 21,  85 => 20,  77 => 19,  74 => 18,  70 => 17,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/* 				</tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/*     </table>*/
