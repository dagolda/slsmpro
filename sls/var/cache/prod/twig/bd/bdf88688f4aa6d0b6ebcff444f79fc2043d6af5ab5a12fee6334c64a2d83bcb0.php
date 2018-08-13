<?php

/* BoAdminBundle:Contracts:substitutions.html.twig */
class __TwigTemplate_c0df74638074bea54566811baf5b1bdfb513ed75a46698f1cb39334e876367a5 extends Twig_Template
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
        $__internal_f502e85ca20149b4bfca240dead4ed8b1f02d5071ed9a2afd6f33f2591927fe2 = $this->env->getExtension("native_profiler");
        $__internal_f502e85ca20149b4bfca240dead4ed8b1f02d5071ed9a2afd6f33f2591927fe2->enter($__internal_f502e85ca20149b4bfca240dead4ed8b1f02d5071ed9a2afd6f33f2591927fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:substitutions.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"12%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"6%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["substitution"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            if ($this->getAttribute($context["substitution"], "student", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "student", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subteachers"]) ? $context["subteachers"] : $this->getContext($context, "subteachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subteachers"]) ? $context["subteachers"] : $this->getContext($context, "subteachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subteachers"]) ? $context["subteachers"] : $this->getContext($context, "subteachers")), $this->getAttribute($context["substitution"], "idsubstitute", array()), array(), "array"), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["subteachers"]) ? $context["subteachers"] : $this->getContext($context, "subteachers")), $this->getAttribute($context["substitution"], "idsubstitute", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["substitution"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["substitution"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td align=\"right\">";
            // line 24
            if ($this->getAttribute($context["substitution"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 25
            if ($this->getAttribute($context["substitution"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 26
            if ($this->getAttribute($context["substitution"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 27
            if ($this->getAttribute($context["substitution"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "hour", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr><td colspan=\"10\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substitution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>
";
        
        $__internal_f502e85ca20149b4bfca240dead4ed8b1f02d5071ed9a2afd6f33f2591927fe2->leave($__internal_f502e85ca20149b4bfca240dead4ed8b1f02d5071ed9a2afd6f33f2591927fe2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:substitutions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 33,  146 => 31,  138 => 28,  132 => 27,  126 => 26,  120 => 25,  114 => 24,  106 => 23,  100 => 22,  94 => 21,  88 => 20,  80 => 19,  77 => 18,  72 => 17,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="12%">{{'label.student'|trans([],'BoAdminBundle')}}/{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="6%">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for substitution in substitutions %}*/
/*             <tr>*/
/*                 <td>{%if substitution.student%}{{substitution.student}}{%else%}---{%endif%}</td>*/
/*                 <td>{{ subteachers[substitution.idholder].firstname }} {{ subteachers[substitution.idholder].name }}</td>*/
/*                 <td>{{ subteachers[substitution.idsubstitute].firstname }} {{ subteachers[substitution.idsubstitute].name }}</td>*/
/*                 <td>{% if substitution.startdate %}{{ substitution.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if substitution.enddate %}{{ substitution.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startam %}{{ substitution.startam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endam %}{{ substitution.endam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startpm %}{{ substitution.startpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endpm %}{{ substitution.endpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{{ substitution.hour }}</td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="10">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>		*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
