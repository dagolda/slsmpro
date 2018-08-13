<?php

/* BoAdminBundle:HTeacherSchedule:tbliste.html.twig */
class __TwigTemplate_1a9af1b8891584fe18edac338aaf0ce21c23763abd436971261434de5dda71ae extends Twig_Template
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
        $__internal_42001437414fbdadc02613fd679bbd7046a58e1958cd4087d3b2bec25d09dfc0 = $this->env->getExtension("native_profiler");
        $__internal_42001437414fbdadc02613fd679bbd7046a58e1958cd4087d3b2bec25d09dfc0->enter($__internal_42001437414fbdadc02613fd679bbd7046a58e1958cd4087d3b2bec25d09dfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:HTeacherSchedule:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"11%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"24%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["htss0"]) ? $context["htss0"] : $this->getContext($context, "htss0")));
        foreach ($context['_seq'] as $context["_key"] => $context["hts0"]) {
            // line 12
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["listteacher"]) ? $context["listteacher"] : null), $this->getAttribute($context["hts0"], "idemployee", array()), array(), "array", true, true)) {
                // line 13
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listteacher"]) ? $context["listteacher"] : $this->getContext($context, "listteacher")), $this->getAttribute($context["hts0"], "idemployee", array()), array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listteacher"]) ? $context["listteacher"] : $this->getContext($context, "listteacher")), $this->getAttribute($context["hts0"], "idemployee", array()), array(), "array"), "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 15
                if ($this->getAttribute($context["hts0"], "startdate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hts0"], "startdate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 16
                if ($this->getAttribute($context["hts0"], "enddate", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hts0"], "enddate", array()), "Y-m-d"), "html", null, true);
                }
                echo "</td>
\t\t\t\t\t<td>";
                // line 17
                if ((array_key_exists("hts", $context) && $this->getAttribute((isset($context["hts"]) ? $context["hts"] : null), $this->getAttribute($context["hts0"], "id", array()), array(), "array", true, true))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hts"]) ? $context["hts"] : $this->getContext($context, "hts")), $this->getAttribute($context["hts0"], "id", array()), array(), "array"), "html", null, true);
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hts0'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
";
        
        $__internal_42001437414fbdadc02613fd679bbd7046a58e1958cd4087d3b2bec25d09dfc0->leave($__internal_42001437414fbdadc02613fd679bbd7046a58e1958cd4087d3b2bec25d09dfc0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:HTeacherSchedule:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  82 => 20,  74 => 17,  68 => 16,  62 => 15,  56 => 14,  53 => 13,  50 => 12,  46 => 11,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="11%">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="24%">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for hts0 in htss0 %}*/
/* 			{%if listteacher[hts0.idemployee] is defined%}*/
/* 				<tr>*/
/* 					<td>{{ listteacher[hts0.idemployee].firstname }} {{ listteacher[hts0.idemployee].name }}</td>*/
/* 					<td>{% if hts0.startdate %}{{ hts0.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{% if hts0.enddate %}{{ hts0.enddate|date('Y-m-d') }}{% endif %}</td>*/
/* 					<td>{% if hts is defined and hts[hts0.id] is defined %}{{  hts[hts0.id] }}{% endif %}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
