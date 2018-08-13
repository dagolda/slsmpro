<?php

/* BoAdminBundle:Substitution:tbliste.html.twig */
class __TwigTemplate_624932f3bebe6b75d6eb94dcb5afbb7ef5f690f9b0b714fe59dc0c6e8db6d0aa extends Twig_Template
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
        $__internal_9986ade3000b5a1f772c5f672ad67abab3856d6fe89b182639c4b5674b0e4cb6 = $this->env->getExtension("native_profiler");
        $__internal_9986ade3000b5a1f772c5f672ad67abab3856d6fe89b182639c4b5674b0e4cb6->enter($__internal_9986ade3000b5a1f772c5f672ad67abab3856d6fe89b182639c4b5674b0e4cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:tbliste.html.twig"));

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
                <th width=\"130px\" nowrap>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["substitution"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            if ($this->getAttribute($context["substitution"], "student", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "student", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : null), $this->getAttribute($context["substitution"], "idsubstitute", array()), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idsubstitute", array()), array(), "array"), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idsubstitute", array()), array(), "array"), "name", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["substitution"], "startdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startdate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["substitution"], "enddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "enddate", array()), "Y-m-d"), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
                <td align=\"right\">";
            // line 25
            if ($this->getAttribute($context["substitution"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 26
            if ($this->getAttribute($context["substitution"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 27
            if ($this->getAttribute($context["substitution"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 28
            if ($this->getAttribute($context["substitution"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "hour", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
                \t<a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("substitution_show", array("id" => $this->getAttribute($context["substitution"], "id", array()))), "html", null, true);
            echo "\">show</a>
\t\t\t\t";
            // line 32
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Substitution", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Substitution", array(), "array"), "edit", array()) == 1))) {
                // line 33
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("substitution_edit", array("id" => $this->getAttribute($context["substitution"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 35
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "\t\t\t<tr><td colspan=\"11\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substitution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
";
        
        $__internal_9986ade3000b5a1f772c5f672ad67abab3856d6fe89b182639c4b5674b0e4cb6->leave($__internal_9986ade3000b5a1f772c5f672ad67abab3856d6fe89b182639c4b5674b0e4cb6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 40,  173 => 38,  166 => 35,  158 => 33,  156 => 32,  152 => 31,  147 => 29,  141 => 28,  135 => 27,  129 => 26,  123 => 25,  115 => 24,  109 => 23,  99 => 22,  89 => 21,  81 => 20,  78 => 19,  73 => 18,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 4,  22 => 1,);
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
/*                 <th width="130px" nowrap>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for substitution in substitutions %}*/
/*             <tr>*/
/*                 <td>{%if substitution.student%}{{substitution.student}}{%else%}---{%endif%}</td>*/
/*                 <td>{%if teachers[substitution.idholder] is defined%}{{ teachers[substitution.idholder].firstname }} {{ teachers[substitution.idholder].name }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if teachers[substitution.idsubstitute] is defined%}{{ teachers[substitution.idsubstitute].firstname }} {{ teachers[substitution.idsubstitute].name }}{%else%}---{%endif%}</td>*/
/*                 <td>{% if substitution.startdate %}{{ substitution.startdate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{% if substitution.enddate %}{{ substitution.enddate|date('Y-m-d') }}{%else%}---{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startam %}{{ substitution.startam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endam %}{{ substitution.endam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startpm %}{{ substitution.startpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endpm %}{{ substitution.endpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{{ substitution.hour }}</td>*/
/*                 <td class="list-action">*/
/*                 	<a href="{{ path('substitution_show', { 'id': substitution.id }) }}">show</a>*/
/* 				{%if app.session.get('rights')['STAFF']['Substitution'] is defined and app.session.get('rights')['STAFF']['Substitution'].edit==1%}*/
/* 			<a href="{{ path('substitution_edit', { 'id': substitution.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 				{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="11">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>		*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
