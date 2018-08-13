<?php

/* BoAdvisorsBundle:Absences:tbliste.html.twig */
class __TwigTemplate_6e9ab3501413c9c9ae153ae1bc489e82afe9717545d5098d69ecec1021091da0 extends Twig_Template
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
        $__internal_52fe7eae25a051ca9d042927aa296b85e3e7d88a40341de9b8f32b4de04fa510 = $this->env->getExtension("native_profiler");
        $__internal_52fe7eae25a051ca9d042927aa296b85e3e7d88a40341de9b8f32b4de04fa510->enter($__internal_52fe7eae25a051ca9d042927aa296b85e3e7d88a40341de9b8f32b4de04fa510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) ? $context["absences"] : $this->getContext($context, "absences")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "motif", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            if ($this->getAttribute($context["absence"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 18
            if ($this->getAttribute($context["absence"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "enddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            if ($this->getAttribute($context["absence"], "amorpm", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "amorpm", array()), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["absence"], "numberday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["absence"], "numberday", array()), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["absence"], "creationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["absence"], "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td class=\"list-action\">
                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_absences_show", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <!--a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_absences_edit", array("id" => $this->getAttribute($context["absence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
            echo "</a-->
                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "\t\t\t<tr><td colspan=\"7\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
";
        
        $__internal_52fe7eae25a051ca9d042927aa296b85e3e7d88a40341de9b8f32b4de04fa510->leave($__internal_52fe7eae25a051ca9d042927aa296b85e3e7d88a40341de9b8f32b4de04fa510_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  113 => 28,  102 => 24,  98 => 23,  91 => 21,  85 => 20,  79 => 19,  73 => 18,  67 => 17,  63 => 16,  60 => 15,  55 => 14,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for absence in absences %}*/
/*             <tr>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if absence.amorpm %}{{ absence.amorpm }}{% endif %}</td>*/
/*                 <td>{% if absence.numberday %}{{ absence.numberday }}{% endif %}</td>*/
/*                 <td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td class="list-action">*/
/*                     <a href="{{ path('dash_absences_show', { 'id': absence.id }) }}">show</a>*/
/*                     <!--a href="{{ path('dash_absences_edit', { 'id': absence.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a-->*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="7">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
