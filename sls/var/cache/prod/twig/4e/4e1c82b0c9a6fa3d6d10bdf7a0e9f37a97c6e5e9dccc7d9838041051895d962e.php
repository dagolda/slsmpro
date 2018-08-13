<?php

/* BoAdminBundle:Group:training.html.twig */
class __TwigTemplate_0067e97b39ea1510e837790f92954b79f00c050b7f4e6c0621001dbb3978eb06 extends Twig_Template
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
        $__internal_4601cbd1e746c83fadd73a5c0d367584428ea1be63b2790f92170c02b0574644 = $this->env->getExtension("native_profiler");
        $__internal_4601cbd1e746c83fadd73a5c0d367584428ea1be63b2790f92170c02b0574644->enter($__internal_4601cbd1e746c83fadd73a5c0d367584428ea1be63b2790f92170c02b0574644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:training.html.twig"));

        // line 1
        echo "\t<table class=\"table table-bordered records_list\">
        <thead>
            <tr>
\t\t<th>";
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
\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th><a href=\"#\" class=\"infobb\">NDT<span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberdaytraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></a></th>
\t\t<th><a href=\"#\" class=\"infobb\">NWT<span>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberweektraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</span></a></th>
            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 17
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t";
            // line 19
            if (((((($this->getAttribute($context["training"], "monday", array()) == true) && ($this->getAttribute($context["training"], "tuesday", array()) == true)) && ($this->getAttribute($context["training"], "wednesday", array()) == true)) && ($this->getAttribute($context["training"], "thursday", array()) == true)) && ($this->getAttribute($context["training"], "friday", array()) == true))) {
                // line 20
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "monday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 23
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "tuesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "wednesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 25
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "thursday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 26
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "friday", array()) == true)) {
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
            if (($this->getAttribute($context["training"], "startam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            if (($this->getAttribute($context["training"], "endam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 31
            if (($this->getAttribute($context["training"], "startpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            if (($this->getAttribute($context["training"], "endpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 33
            if ($this->getAttribute($context["training"], "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 34
            if ($this->getAttribute($context["training"], "hourperweek", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperweek", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            if ($this->getAttribute($context["training"], "ttdnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "ttdnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 36
            if ($this->getAttribute($context["training"], "ttwnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "ttwnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "\t\t\t\t<tr><td colspan=\"9\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No data found", array(), "BoAdminBundle"), "html", null, true);
            echo "</td></tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t
        </tbody>
    </table>
";
        
        $__internal_4601cbd1e746c83fadd73a5c0d367584428ea1be63b2790f92170c02b0574644->leave($__internal_4601cbd1e746c83fadd73a5c0d367584428ea1be63b2790f92170c02b0574644_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:training.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 40,  187 => 39,  175 => 36,  167 => 35,  159 => 34,  151 => 33,  143 => 32,  135 => 31,  127 => 30,  119 => 29,  116 => 28,  113 => 27,  107 => 26,  101 => 25,  95 => 24,  89 => 23,  83 => 22,  77 => 20,  75 => 19,  71 => 17,  66 => 16,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<table class="table table-bordered records_list">*/
/*         <thead>*/
/*             <tr>*/
/* 		<th>{{'label.daysoftraining'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th><a href="#" class="infobb">NDT<span>{{'label.numberdaytraining'|trans([],'BoAdminBundle')}}</span></a></th>*/
/* 		<th><a href="#" class="infobb">NWT<span>{{'label.numberweektraining'|trans([],'BoAdminBundle')}}</span></a></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 			{% for training in trainings %}*/
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
/* 					<td>{%if training.startam!=null%}{{ training.startam|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 					<td>{%if training.endam!=null%}{{ training.endam|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 					<td>{%if training.startpm!=null%}{{ training.startpm|date('H:i') }}{%else%}00:00{%endif%}</td>*/
/* 					<td>{%if training.endpm!=null%}{{ training.endpm|date('H:i') }}{%else%}00:00{%endif%}</td>	*/
/* 					<td>{%if training.hourperday%}{{ training.hourperday }}{%else%}---{%endif%}</td>				*/
/* 					<td>{%if training.hourperweek%}{{ training.hourperweek }}{%else%}---{%endif%}</td>*/
/* 					<td>{%if training.ttdnumber%}{{ training.ttdnumber }}{%else%}---{%endif%}</td>				*/
/* 					<td>{%if training.ttwnumber%}{{ training.ttwnumber }}{%else%}---{%endif%}</td>	*/
/* 				</tr>*/
/* 			{%else%}*/
/* 				<tr><td colspan="9">{{'No data found'|trans([],'BoAdminBundle')}}</td></tr>*/
/* 			{%endfor%}		*/
/*         </tbody>*/
/*     </table>*/
/* */
