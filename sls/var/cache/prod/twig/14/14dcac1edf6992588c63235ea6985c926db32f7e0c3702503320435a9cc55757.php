<?php

/* BoAdminBundle:Group:rightshow.html.twig */
class __TwigTemplate_7462fb0078a4a5001042a980ca787df46d5f025bb64b707ad0ad14f819ee0b13 extends Twig_Template
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
        $__internal_3a5fa1245ec362f8dcafcc6f0f76cf92f9881d67ef37d3b1565ca15108a597e0 = $this->env->getExtension("native_profiler");
        $__internal_3a5fa1245ec362f8dcafcc6f0f76cf92f9881d67ef37d3b1565ca15108a597e0->enter($__internal_3a5fa1245ec362f8dcafcc6f0f76cf92f9881d67ef37d3b1565ca15108a597e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:rightshow.html.twig"));

        // line 1
        echo "<div class=\"employee-identity\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        echo "</div>
    <table>
        <tbody>
            <tr>
                <th class='sty_label'>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th class='sty_label'>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t";
        // line 12
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "typecontract", array())) {
            // line 13
            echo "            <tr>
                <th class='sty_label'>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "typecontract", array()), "reference", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 18
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "advisor", array())) {
            // line 19
            echo "            <tr>
                <th class='sty_label'>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "advisor", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "advisor", array()), "name", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t";
        }
        // line 24
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array())) {
            // line 25
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th class='sty_label'>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "targetlevel", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 30
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array())) {
            // line 31
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th class='sty_label'>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "startdate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array())) {
            // line 37
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th class='sty_label'>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "enddate", array()), "Y-m-d"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 42
        echo "\t\t\t";
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) && $this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()), array(), "array", true, true))) {
            // line 43
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th class='sty_label'>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "status", array()), array(), "array"), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 48
        echo "\t\t\t";
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "createby", array())) {
            // line 49
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th class='sty_label'>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
            echo ":</th>
\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "createby", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 54
        echo "\t\t    <tr>
\t\t        <th class='sty_label'>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":</th>
\t\t        <td>";
        // line 56
        if ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t    </tr>
\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["closegroups"]) ? $context["closegroups"] : $this->getContext($context, "closegroups")));
        foreach ($context['_seq'] as $context["_key"] => $context["closegroup"]) {
            // line 59
            echo "\t\t\t\t";
            if ($this->getAttribute($context["closegroup"], "closedby", array())) {
                // line 60
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class='sty_label'>";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closedby", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t\t<td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["closegroup"], "closedby", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t";
            if ($this->getAttribute($context["closegroup"], "closeddate", array())) {
                // line 66
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class='sty_label'>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.closeddate", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t\t<td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["closegroup"], "closeddate", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t";
            if ($this->getAttribute($context["closegroup"], "reopenby", array())) {
                // line 72
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class='sty_label'>";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reopenby", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t\t<td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["closegroup"], "reopenby", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t";
            if ($this->getAttribute($context["closegroup"], "reopendate", array())) {
                // line 78
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class='sty_label'>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reopendate", array(), "BoAdminBundle"), "html", null, true);
                echo ":</th>
\t\t\t\t\t\t<td>";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["closegroup"], "reopendate", array()), "Y-m-d"), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 83
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['closegroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </tbody>
    </table>
";
        
        $__internal_3a5fa1245ec362f8dcafcc6f0f76cf92f9881d67ef37d3b1565ca15108a597e0->leave($__internal_3a5fa1245ec362f8dcafcc6f0f76cf92f9881d67ef37d3b1565ca15108a597e0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:rightshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 84,  244 => 83,  238 => 80,  234 => 79,  231 => 78,  228 => 77,  222 => 74,  218 => 73,  215 => 72,  212 => 71,  206 => 68,  202 => 67,  199 => 66,  196 => 65,  190 => 62,  186 => 61,  183 => 60,  180 => 59,  176 => 58,  169 => 56,  165 => 55,  162 => 54,  156 => 51,  152 => 50,  149 => 49,  146 => 48,  140 => 45,  136 => 44,  133 => 43,  130 => 42,  124 => 39,  120 => 38,  117 => 37,  114 => 36,  108 => 33,  104 => 32,  101 => 31,  98 => 30,  92 => 27,  88 => 26,  85 => 25,  82 => 24,  74 => 21,  70 => 20,  67 => 19,  64 => 18,  58 => 15,  54 => 14,  51 => 13,  49 => 12,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  22 => 1,);
    }
}
/* <div class="employee-identity">{{ group.name }}</div>*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th class='sty_label'>{{'label.id'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ group.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th class='sty_label'>{{'label.name'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ group.name }}</td>*/
/*             </tr>*/
/* 			{% if group.typecontract%}*/
/*             <tr>*/
/*                 <th class='sty_label'>{{'label.contracttype'|trans([],'BoAdminBundle')}}:</th>*/
/* 		<td>{{ group.typecontract.reference }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if group.advisor%}*/
/*             <tr>*/
/*                 <th class='sty_label'>{{'label.pa'|trans([],'BoAdminBundle')}}:</th>*/
/* 				<td>{{ group.advisor.firstname }} {{ group.advisor.name }}</td>*/
/*             </tr>*/
/* 			{% endif %}*/
/* 			{% if group.enddate %}*/
/* 				<tr>*/
/* 					<th class='sty_label'>{{'label.targetlevel'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ group.targetlevel }}</td>*/
/* 				</tr>*/
/* 			{% endif %}*/
/* 			{% if group.startdate %}*/
/* 				<tr>*/
/* 					<th class='sty_label'>{{'label.startdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ group.startdate|date('Y-m-d') }}</td>*/
/* 				</tr>*/
/* 			{% endif %}*/
/* 			{% if group.enddate %}*/
/* 				<tr>*/
/* 					<th class='sty_label'>{{'label.enddate'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ group.enddate|date('Y-m-d') }}</td>*/
/* 				</tr>*/
/* 			{% endif %}*/
/* 			{% if status and status[group.status] is defined %}*/
/* 				<tr>*/
/* 					<th class='sty_label'>{{'label.status'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ status[group.status] }}</td>*/
/* 				</tr>*/
/* 			{% endif %}*/
/* 			{% if group.createby %}*/
/* 				<tr>*/
/* 					<th class='sty_label'>{{'label.createdby'|trans([],'BoAdminBundle')}}:</th>*/
/* 					<td>{{ group.createby }}</td>*/
/* 				</tr>*/
/* 			{% endif %}*/
/* 		    <tr>*/
/* 		        <th class='sty_label'>{{'label.creationdate'|trans([],'BoAdminBundle')}}:</th>*/
/* 		        <td>{% if group.creationdate %}{{ group.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 		    </tr>*/
/* 			{%for closegroup in closegroups%}*/
/* 				{% if closegroup.closedby %}*/
/* 					<tr>*/
/* 						<th class='sty_label'>{{'label.closedby'|trans([],'BoAdminBundle')}}:</th>*/
/* 						<td>{{ closegroup.closedby }}</td>*/
/* 					</tr>*/
/* 				{% endif %}*/
/* 				{% if closegroup.closeddate %}*/
/* 					<tr>*/
/* 						<th class='sty_label'>{{'label.closeddate'|trans([],'BoAdminBundle')}}:</th>*/
/* 						<td>{{ closegroup.closeddate|date('Y-m-d') }}</td>*/
/* 					</tr>*/
/* 				{% endif %}*/
/* 				{% if closegroup.reopenby %}*/
/* 					<tr>*/
/* 						<th class='sty_label'>{{'label.reopenby'|trans([],'BoAdminBundle')}}:</th>*/
/* 						<td>{{ closegroup.reopenby }}</td>*/
/* 					</tr>*/
/* 				{% endif %}*/
/* 				{% if closegroup.reopendate %}*/
/* 					<tr>*/
/* 						<th class='sty_label'>{{'label.reopendate'|trans([],'BoAdminBundle')}}:</th>*/
/* 						<td>{{ closegroup.reopendate|date('Y-m-d') }}</td>*/
/* 					</tr>*/
/* 				{% endif %}*/
/* 			{%endfor%}*/
/*         </tbody>*/
/*     </table>*/
/* */
