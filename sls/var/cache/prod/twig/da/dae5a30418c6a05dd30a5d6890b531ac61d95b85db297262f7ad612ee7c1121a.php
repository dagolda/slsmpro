<?php

/* BoAdvisorsBundle:Substitution:tbliste.html.twig */
class __TwigTemplate_90b6ec5b226f9511fc419f0a141fb55c783321e15ca22c2ac9ade4d08b3b7120 extends Twig_Template
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
        $__internal_d28a396097e30b8126d503a8e8000021e15d924aa488d267d34b7186920d48dd = $this->env->getExtension("native_profiler");
        $__internal_d28a396097e30b8126d503a8e8000021e15d924aa488d267d34b7186920d48dd->enter($__internal_d28a396097e30b8126d503a8e8000021e15d924aa488d267d34b7186920d48dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Substitution:tbliste.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
                <th width=\"9%\">Date</th>
                <th width=\"14%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"14%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"12%\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"10%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"8%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substitutions"]) ? $context["substitutions"] : $this->getContext($context, "substitutions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["substitution"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            if ($this->getAttribute($context["substitution"], "ddate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "ddate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")), $this->getAttribute($context["substitution"], "idholder", array()), array(), "array"), "name", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t\t";
            // line 21
            if ($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "group", array())) {
                // line 22
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "group", array()), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif ($this->getAttribute($this->getAttribute(            // line 23
(isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "students", array())) {
                // line 24
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "students", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "students", array()), "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t";
            }
            // line 28
            echo "                <td align=\"right\">";
            if ($this->getAttribute($context["substitution"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 29
            if ($this->getAttribute($context["substitution"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endam", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 30
            if ($this->getAttribute($context["substitution"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 31
            if ($this->getAttribute($context["substitution"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endpm", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "hour", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
\t\t\t\t\t";
            // line 34
            if ($this->getAttribute((isset($context["existts"]) ? $context["existts"] : null), $this->getAttribute($context["substitution"], "id", array()), array(), "array", true, true)) {
                // line 35
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_substitution_newts", array("id" => $this->getAttribute($context["substitution"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.newts", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t";
            }
            // line 37
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substitution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>";
        
        $__internal_d28a396097e30b8126d503a8e8000021e15d924aa488d267d34b7186920d48dd->leave($__internal_d28a396097e30b8126d503a8e8000021e15d924aa488d267d34b7186920d48dd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Substitution:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  158 => 40,  151 => 37,  143 => 35,  141 => 34,  136 => 32,  130 => 31,  124 => 30,  118 => 29,  111 => 28,  108 => 27,  97 => 25,  92 => 24,  90 => 23,  85 => 22,  83 => 21,  76 => 19,  70 => 18,  67 => 17,  62 => 16,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th width="9%">Date</th>*/
/*                 <th width="14%">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="14%">{{'label.student'|trans([],'BoAdminBundle')}}/{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="12%">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="10%">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="8%">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for substitution in substitutions %}*/
/*             <tr>*/
/*                 <td>{% if substitution.ddate %}{{ substitution.ddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ teachers[substitution.idholder].firstname }} {{ teachers[substitution.idholder].name }}</td>*/
/*                 <td>*/
/* 					{%if contracts[substitution.idcontract].group %}*/
/* 						{{ contracts[substitution.idcontract].group }}*/
/* 					{%elseif contracts[substitution.idcontract].students %}*/
/* 						{%for student in contracts[substitution.idcontract].students %}*/
/* 							{{ contracts[substitution.idcontract].firstname }} {{ contracts[substitution.idcontract].students.name }}</td>*/
/* 						{%endfor%}*/
/* 					{% endif %}*/
/*                 <td align="right">{% if substitution.startam %}{{ substitution.startam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endam %}{{ substitution.endam|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startpm %}{{ substitution.startpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endpm %}{{ substitution.endpm|date('H:i:s') }}{% endif %}</td>*/
/*                 <td align="right">{{ substitution.hour }}</td>*/
/*                 <td class="list-action">*/
/* 					{%if existts[substitution.id] is defined%}*/
/* 					<a href="{{ path('dash_substitution_newts', { 'id': substitution.id }) }}">{{'action.newts'|trans([],'BoAdminBundle')}}</a>*/
/* 					{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>		*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
