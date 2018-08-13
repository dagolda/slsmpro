<?php

/* BoAdvisorsBundle:Default:schedulegroup.html.twig */
class __TwigTemplate_4c98874fd2bef97dae57ddb17dd7bdcb4e53353e90b687c844145461cea196c5 extends Twig_Template
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
        $__internal_8e9953126290cfd1a03cd68f3274bd743b0ee998f23ea84b753f77a766f7ee10 = $this->env->getExtension("native_profiler");
        $__internal_8e9953126290cfd1a03cd68f3274bd743b0ee998f23ea84b753f77a766f7ee10->enter($__internal_8e9953126290cfd1a03cd68f3274bd743b0ee998f23ea84b753f77a766f7ee10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Default:schedulegroup.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.days", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["tsg"]) ? $context["tsg"] : null), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                // line 17
                echo "\t\t\t\t";
                $context["schedule"] = $this->getAttribute((isset($context["tsg"]) ? $context["tsg"] : $this->getContext($context, "tsg")), $this->getAttribute($context["group"], "id", array()), array(), "array");
                // line 18
                echo "\t\t\t\t";
                $context["nbd"] = 0;
                // line 19
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t";
                // line 22
                if (((((($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) && ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true))) {
                    // line 23
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                    // line 24
                    $context["nbd"] = 5;
                    // line 25
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "monday", array()) == true)) {
                        $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                        echo ", ";
                    }
                    // line 27
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "tuesday", array()) == true)) {
                        $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                        echo ", ";
                    }
                    // line 28
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "wednesday", array()) == true)) {
                        $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                        echo ", ";
                    }
                    // line 29
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "thursday", array()) == true)) {
                        $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                        echo ", ";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "friday", array()) == true)) {
                        $context["nbd"] = ((isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")) + 1);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                        echo " ";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td align=\"center\">";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startam", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td align=\"center\">";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endam", array()), "H:i"), "html", null, true);
                echo "</td>\t
\t\t\t\t\t<td align=\"center\">";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "startpm", array()), "H:i"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td align=\"center\">";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "endpm", array()), "H:i"), "html", null, true);
                echo "</td>\t
\t\t\t\t\t<td align=\"center\">";
                // line 37
                if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>\t\t\t\t
\t\t\t\t\t<td align=\"center\">";
                // line 38
                if ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperweek", array())) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperweek", array()), "html", null, true);
                } elseif ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array())) {
                    $context["hourperday"] = ($this->getAttribute((isset($context["schedule"]) ? $context["schedule"] : $this->getContext($context, "schedule")), "hourperday", array()) * (isset($context["nbd"]) ? $context["nbd"] : $this->getContext($context, "nbd")));
                    echo twig_escape_filter($this->env, (isset($context["hourperday"]) ? $context["hourperday"] : $this->getContext($context, "hourperday")), "html", null, true);
                } else {
                    echo "---";
                }
                echo "</td>
\t\t\t\t</tr>
\t\t\t";
            }
            // line 41
            echo "\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "\t\t\t<tr><td colspan=\"8\">No contract found</td></tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t
        </tbody>
    </table>";
        
        $__internal_8e9953126290cfd1a03cd68f3274bd743b0ee998f23ea84b753f77a766f7ee10->leave($__internal_8e9953126290cfd1a03cd68f3274bd743b0ee998f23ea84b753f77a766f7ee10_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Default:schedulegroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 43,  179 => 42,  174 => 41,  161 => 38,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  134 => 32,  131 => 31,  124 => 30,  117 => 29,  110 => 28,  103 => 27,  96 => 26,  93 => 25,  91 => 24,  86 => 23,  84 => 22,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  62 => 15,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.days'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for group in groups %}*/
/* 			{%if tsg[group.id] is defined%}*/
/* 				{%set schedule=tsg[group.id]%}*/
/* 				{%set nbd=0%}*/
/* 				<tr>*/
/* 					<td>{{ group.name }}</td>*/
/* 					<td class="sty_label">*/
/* 						{%if schedule.monday==true and schedule.tuesday==true and schedule.wednesday==true and schedule.thursday==true and schedule.friday==true%}*/
/* 							{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 							{%set nbd=5%}*/
/* 						{%else%}*/
/* 							{%if schedule.monday==true%}{%set nbd=nbd+1%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if schedule.tuesday==true%}{%set nbd=nbd+1%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if schedule.wednesday==true%}{%set nbd=nbd+1%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if schedule.thursday==true%}{%set nbd=nbd+1%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if schedule.friday==true%}{%set nbd=nbd+1%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td align="center">{{ schedule.startam|date('H:i') }}</td>*/
/* 					<td align="center">{{ schedule.endam|date('H:i') }}</td>	*/
/* 					<td align="center">{{ schedule.startpm|date('H:i') }}</td>*/
/* 					<td align="center">{{ schedule.endpm|date('H:i') }}</td>	*/
/* 					<td align="center">{%if schedule.hourperday%}{{ schedule.hourperday }}{%else%}---{%endif%}</td>				*/
/* 					<td align="center">{%if schedule.hourperweek%}{{ schedule.hourperweek }}{%elseif schedule.hourperday%}{%set hourperday=schedule.hourperday*nbd%}{{ hourperday }}{%else%}---{%endif%}</td>*/
/* 				</tr>*/
/* 			{%endif%}*/
/* 		{%else%}*/
/* 			<tr><td colspan="8">No contract found</td></tr>*/
/* 		{%endfor%}			*/
/*         </tbody>*/
/*     </table>*/
