<?php

/* BoAdvisorsBundle:Supervision:training.html.twig */
class __TwigTemplate_84edeed0be9438c824c5f00d60a7f25255bb0fa0b75477851e91e00a59af84af extends Twig_Template
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
        $__internal_98ca9547308e4a5ec47ff5354d541bb4b8507362f0533d96ba8a84a573808e76 = $this->env->getExtension("native_profiler");
        $__internal_98ca9547308e4a5ec47ff5354d541bb4b8507362f0533d96ba8a84a573808e76->enter($__internal_98ca9547308e4a5ec47ff5354d541bb4b8507362f0533d96ba8a84a573808e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Supervision:training.html.twig"));

        // line 1
        echo "    <table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t\t\t<th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daysoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th><a href=\"#\" class=\"infobb\">NDT<span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberdaytraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></a></th>
\t\t\t\t<th><a href=\"#\" class=\"infobb\">NWT<span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberweektraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></a></th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 16
        if (((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")) != null)) {
            // line 17
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t";
            // line 19
            if (((((($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "monday", array()) == true) && ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "tuesday", array()) == true)) && ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "wednesday", array()) == true)) && ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "thursday", array()) == true)) && ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "friday", array()) == true))) {
                // line 20
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "monday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 23
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "tuesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "wednesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 25
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "thursday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 26
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "friday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                    echo " ";
                }
                // line 27
                echo "\t\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "startam", array()), "H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "endam", array()), "H:i"), "html", null, true);
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "startpm", array()), "H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "endpm", array()), "H:i"), "html", null, true);
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 33
            if ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 34
            if ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "hourperweek", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "hourperweek", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            if ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "ttdnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "ttdnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 36
            if ($this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "ttwnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["training"]) ? $context["training"] : $this->getContext($context, "training")), "ttwnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t";
        } else {
            // line 39
            echo "\t\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        // line 40
        echo "\t\t\t\t
        </tbody>
    </table>";
        
        $__internal_98ca9547308e4a5ec47ff5354d541bb4b8507362f0533d96ba8a84a573808e76->leave($__internal_98ca9547308e4a5ec47ff5354d541bb4b8507362f0533d96ba8a84a573808e76_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Supervision:training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 40,  166 => 39,  156 => 36,  148 => 35,  140 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  113 => 28,  110 => 27,  104 => 26,  98 => 25,  92 => 24,  86 => 23,  80 => 22,  74 => 20,  72 => 19,  68 => 17,  66 => 16,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 				<th>{{'label.daysoftraining'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th><a href="#" class="infobb">NDT<span>{{'label.numberdaytraining'|trans([],'BoAdminBundle')}}</span></a></th>*/
/* 				<th><a href="#" class="infobb">NWT<span>{{'label.numberweektraining'|trans([],'BoAdminBundle')}}</span></a></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% if training!=null %}*/
/* 				<tr>*/
/* 					<td class="sty_label">*/
/* 						{%if training.monday==true and training.tuesday==true and training.wednesday==true and training.thursday==true and training.friday==true%}*/
/* 							{{'label.frommonday.tofriday'|trans([],'BoAdminBundle')}}*/
/* 						{%else%}*/
/* 							{%if training.monday==true%}{{'label.monday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if training.tuesday==true%}{{'label.tuesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if training.wednesday==true%}{{'label.wednesday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if training.thursday==true%}{{'label.thursday'|trans([],'BoAdminBundle')}}, {%endif%}*/
/* 							{%if training.friday==true%}{{'label.friday'|trans([],'BoAdminBundle')}} {%endif%}*/
/* 						{%endif%}*/
/* 					</td>*/
/* 					<td>{{ training.startam|date('H:i') }}</td>*/
/* 					<td>{{ training.endam|date('H:i') }}</td>	*/
/* 					<td>{{ training.startpm|date('H:i') }}</td>*/
/* 					<td>{{ training.endpm|date('H:i') }}</td>	*/
/* 					<td>{%if training.hourperday%}{{ training.hourperday }}{%else%}---{%endif%}</td>				*/
/* 					<td>{%if training.hourperweek%}{{ training.hourperweek }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if training.ttdnumber%}{{ training.ttdnumber }}{%else%}---{%endif%}</td>				*/
/* 					<td>{%if training.ttwnumber%}{{ training.ttwnumber }}{%else%}---{%endif%}</td>					*/
/* 				</tr>*/
/* 			{%else%}*/
/* 				<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/* 			{%endif%}				*/
/*         </tbody>*/
/*     </table>*/
