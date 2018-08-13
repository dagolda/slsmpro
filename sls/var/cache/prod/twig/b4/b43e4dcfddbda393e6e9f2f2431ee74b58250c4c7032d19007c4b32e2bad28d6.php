<?php

/* BoHomeBundle:Substitution:tbliste.html.twig */
class __TwigTemplate_654914641d67c5c6e2e6c1934961f1814c080cf861592bb01986bb9f638fbf22 extends Twig_Template
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
        $__internal_37aa99f5d7df45ab7b2e0b56d5175e5a897826509ac2b2756d9932a40f9cf6cb = $this->env->getExtension("native_profiler");
        $__internal_37aa99f5d7df45ab7b2e0b56d5175e5a897826509ac2b2756d9932a40f9cf6cb->enter($__internal_37aa99f5d7df45ab7b2e0b56d5175e5a897826509ac2b2756d9932a40f9cf6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Substitution:tbliste.html.twig"));

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
\t\t\t\t";
            // line 21
            if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), $this->getAttribute($context["substitution"], "idgroup", array()), array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), $this->getAttribute($context["substitution"], "idgroup", array()), array(), "array"), "name", array()))) {
                // line 22
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), $this->getAttribute($context["substitution"], "idgroup", array()), array(), "array"), "name", array()), "html", null, true);
                echo "
\t\t\t\t";
            } elseif ((($this->getAttribute(            // line 23
(isset($context["contracts"]) ? $context["contracts"] : null), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "group", array())) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "group", array()), "name", array()))) {
                // line 24
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "group", array()), "name", array()), "html", null, true);
                echo "
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 25
(isset($context["contracts"]) ? $context["contracts"] : null), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "students", array()))) {
                // line 26
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts")), $this->getAttribute($context["substitution"], "idcontract", array()), array(), "array"), "students", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                    // line 27
                    echo "\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                    echo "</td>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "\t\t\t\t";
            }
            // line 30
            echo "                <td align=\"right\">";
            if ($this->getAttribute($context["substitution"], "startam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 31
            if ($this->getAttribute($context["substitution"], "endam", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endam", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 32
            if ($this->getAttribute($context["substitution"], "startpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "startpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 33
            if ($this->getAttribute($context["substitution"], "endpm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["substitution"], "endpm", array()), "H:i"), "html", null, true);
            }
            echo "</td>
                <td align=\"right\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["substitution"], "hour", array()), "html", null, true);
            echo "</td>
                <td class=\"list-action\">
\t\t\t";
            // line 36
            if ($this->getAttribute((isset($context["existts"]) ? $context["existts"] : null), $this->getAttribute($context["substitution"], "id", array()), array(), "array", true, true)) {
                // line 37
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_substitution_newts", array("id" => $this->getAttribute($context["substitution"], "id", array()))), "html", null, true);
                echo "\" ";
                if (($this->getAttribute((isset($context["dtsb"]) ? $context["dtsb"] : null), $this->getAttribute($context["substitution"], "id", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["dtsb"]) ? $context["dtsb"] : $this->getContext($context, "dtsb")), $this->getAttribute($context["substitution"], "id", array()), array(), "array") == 0))) {
                    echo "class=\"disabled\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 39
            echo "                </td>
            </tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['substitution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
";
        
        $__internal_37aa99f5d7df45ab7b2e0b56d5175e5a897826509ac2b2756d9932a40f9cf6cb->leave($__internal_37aa99f5d7df45ab7b2e0b56d5175e5a897826509ac2b2756d9932a40f9cf6cb_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Substitution:tbliste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  169 => 42,  162 => 39,  150 => 37,  148 => 36,  143 => 34,  137 => 33,  131 => 32,  125 => 31,  118 => 30,  115 => 29,  104 => 27,  99 => 26,  97 => 25,  92 => 24,  90 => 23,  85 => 22,  83 => 21,  76 => 19,  70 => 18,  67 => 17,  62 => 16,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 6,  28 => 5,  22 => 1,);
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
/* 				{%if group[substitution.idgroup] is defined and group[substitution.idgroup].name %}*/
/* 					{{ group[substitution.idgroup].name }}*/
/* 				{%elseif contracts[substitution.idcontract] is defined and contracts[substitution.idcontract].group and contracts[substitution.idcontract].group.name%}*/
/* 					{{ contracts[substitution.idcontract].group.name }}*/
/* 				{%elseif contracts[substitution.idcontract] is defined and contracts[substitution.idcontract].students %}*/
/* 					{%for student in contracts[substitution.idcontract].students %}*/
/* 						{{ student.firstname }} {{ student.name }}</td>*/
/* 					{%endfor%}*/
/* 				{% endif %}*/
/*                 <td align="right">{% if substitution.startam %}{{ substitution.startam|date('H:i') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endam %}{{ substitution.endam|date('H:i') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.startpm %}{{ substitution.startpm|date('H:i') }}{% endif %}</td>*/
/*                 <td align="right">{% if substitution.endpm %}{{ substitution.endpm|date('H:i') }}{% endif %}</td>*/
/*                 <td align="right">{{ substitution.hour }}</td>*/
/*                 <td class="list-action">*/
/* 			{%if existts[substitution.id] is defined%}*/
/* 				<a href="{{ path('home_substitution_newts', { 'id': substitution.id }) }}" {%if dtsb[substitution.id] is defined and dtsb[substitution.id]==0%}class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 			{%endif%}*/
/*                 </td>*/
/*             </tr>*/
/* 		{%else%}*/
/* 			<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>		*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
