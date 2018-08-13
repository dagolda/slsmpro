<?php

/* BoAdminBundle:Tadmin:tbliste.html.twig */
class __TwigTemplate_c15d85368b4777ee40ca039442e042279af711a41505ba2314560ae1556d4622 extends Twig_Template
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
        $__internal_c930d4b09fab09b1d2edb2f4172d4768aa25b0287866dc4d7e9953a9762a5991 = $this->env->getExtension("native_profiler");
        $__internal_c930d4b09fab09b1d2edb2f4172d4768aa25b0287866dc4d7e9953a9762a5991->enter($__internal_c930d4b09fab09b1d2edb2f4172d4768aa25b0287866dc4d7e9953a9762a5991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tadmin:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"6%\">Id</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"9%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"13%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tadmins"]) ? $context["tadmins"] : $this->getContext($context, "tadmins")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tadmin"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_show", array("id" => $this->getAttribute($context["tadmin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tadmin"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["tadmin"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "startdate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["tadmin"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["tadmin"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "startam", array()), "H:i:s"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["tadmin"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "endam", array()), "H:i:s"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["tadmin"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "startpm", array()), "H:i:s"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["tadmin"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "endpm", array()), "H:i:s"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["tadmin"], "hour", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["tadmin"], "hour", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["tadmin"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tadmin"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t<a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_show", array("id" => $this->getAttribute($context["tadmin"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tadmin_edit", array("id" => $this->getAttribute($context["tadmin"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "\t\t\t<tr><td colspan=\"10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tadmin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>";
        
        $__internal_c930d4b09fab09b1d2edb2f4172d4768aa25b0287866dc4d7e9953a9762a5991->leave($__internal_c930d4b09fab09b1d2edb2f4172d4768aa25b0287866dc4d7e9953a9762a5991_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tadmin:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 36,  158 => 34,  147 => 30,  143 => 29,  134 => 27,  126 => 26,  118 => 25,  110 => 24,  102 => 23,  94 => 22,  86 => 21,  78 => 20,  72 => 19,  69 => 18,  64 => 17,  56 => 12,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="6%">Id</th>*/
/*                 <th width="12%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="9%">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="13%">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tadmin in tadmins %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tadmin_show', { 'id': tadmin.id }) }}">{{ tadmin.id }}</a></td>*/
/*                 <td>{% if tadmin.startdate %}{{ tadmin.startdate|date('Y-m-d') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.enddate %}{{ tadmin.enddate|date('Y-m-d') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.startam %}{{ tadmin.startam|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.endam %}{{ tadmin.endam|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.startpm %}{{ tadmin.startpm|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.endpm %}{{ tadmin.endpm|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.hour %}{{ tadmin.hour }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.creationdate %}{{ tadmin.creationdate|date('Y-m-d H:i:s') }}{% else %}---{% endif %}</td>*/
/* 				<td class="list-action">*/
/* 					<a href="{{ path('tadmin_show', { 'id': tadmin.id }) }}">show</a>*/
/* 					<a href="{{ path('tadmin_edit', { 'id': tadmin.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
