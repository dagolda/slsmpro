<?php

/* BoAdminBundle:Training:show.html.twig */
class __TwigTemplate_37f7beb8d5783374fe91d6b63b334b43de6204e0db59e694cbccc3cbacaff1d1 extends Twig_Template
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
        $__internal_591c92f8ff70b4ce60712558db27b059cd55908a68a5130c9c2ceccbf0f328b2 = $this->env->getExtension("native_profiler");
        $__internal_591c92f8ff70b4ce60712558db27b059cd55908a68a5130c9c2ceccbf0f328b2->enter($__internal_591c92f8ff70b4ce60712558db27b059cd55908a68a5130c9c2ceccbf0f328b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Training:show.html.twig"));

        // line 1
        echo "\t<table class=\"table table-bordered records_list\">
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
\t\t\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "edit", array()) == 1))) {
            echo "\t
\t\t\t\t\t<th>Actions</th>
\t\t\t\t";
        }
        // line 16
        echo "            </tr>
        </thead>
        <tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trainings"]) ? $context["trainings"] : $this->getContext($context, "trainings")));
        foreach ($context['_seq'] as $context["_key"] => $context["training"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class=\"sty_label\">
\t\t\t\t\t\t";
            // line 22
            if (((((($this->getAttribute($context["training"], "monday", array()) == true) && ($this->getAttribute($context["training"], "tuesday", array()) == true)) && ($this->getAttribute($context["training"], "wednesday", array()) == true)) && ($this->getAttribute($context["training"], "thursday", array()) == true)) && ($this->getAttribute($context["training"], "friday", array()) == true))) {
                // line 23
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frommonday.tofriday", array(), "BoAdminBundle"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "monday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 26
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "tuesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "wednesday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 28
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "thursday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
                    echo ", ";
                }
                // line 29
                echo "\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["training"], "friday", array()) == true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
                    echo " ";
                }
                // line 30
                echo "\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 32
            if (($this->getAttribute($context["training"], "startam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 33
            if (($this->getAttribute($context["training"], "endam", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endam", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 34
            if (($this->getAttribute($context["training"], "startpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "startpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            if (($this->getAttribute($context["training"], "endpm", array()) != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["training"], "endpm", array()), "H:i"), "html", null, true);
            } else {
                echo "00:00";
            }
            echo "</td>\t
\t\t\t\t\t<td>";
            // line 36
            if ($this->getAttribute($context["training"], "hourperday", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperday", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 37
            if ($this->getAttribute($context["training"], "hourperweek", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "hourperweek", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            if ($this->getAttribute($context["training"], "ttdnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "ttdnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t\t\t\t
\t\t\t\t\t<td>";
            // line 39
            if ($this->getAttribute($context["training"], "ttwnumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["training"], "ttwnumber", array()), "html", null, true);
            } else {
                echo "---";
            }
            echo "</td>\t
\t\t\t\t\t";
            // line 40
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "edit", array()) == 1)) && (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)))) {
                echo "\t\t\t\t\t
\t\t\t\t\t\t<td class=\"list-action\">
\t\t\t\t\t\t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("training_edit", array("id" => $this->getAttribute($context["training"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['training'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Contracts", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Contracts", array(), "array"), "creation", array()) == 1)) && (($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 1) || ($this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "status", array()) == 2)))) {
            // line 48
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"10\" class=\"list-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_training\">";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>\t\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t</tr>\t
\t\t\t";
        }
        // line 53
        echo "\t\t\t
        </tbody>
    </table>
";
        
        $__internal_591c92f8ff70b4ce60712558db27b059cd55908a68a5130c9c2ceccbf0f328b2->leave($__internal_591c92f8ff70b4ce60712558db27b059cd55908a68a5130c9c2ceccbf0f328b2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Training:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 53,  217 => 50,  213 => 48,  210 => 47,  203 => 45,  195 => 42,  190 => 40,  182 => 39,  174 => 38,  166 => 37,  158 => 36,  150 => 35,  142 => 34,  134 => 33,  126 => 32,  123 => 31,  120 => 30,  114 => 29,  108 => 28,  102 => 27,  96 => 26,  90 => 25,  84 => 23,  82 => 22,  78 => 20,  74 => 19,  69 => 16,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<table class="table table-bordered records_list">*/
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
/* 				{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].edit==1%}	*/
/* 					<th>Actions</th>*/
/* 				{%endif%}*/
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
/* 					{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].edit==1 and (contract.status==1 or contract.status==2)%}					*/
/* 						<td class="list-action">*/
/* 							<a href="{{ path('training_edit', { 'id': training.id }) }}">{{'action.edit'|trans([],'BoAdminBundle')}}</a>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 				</tr>*/
/* 			{%endfor%}*/
/* 			{%if app.session.get('rights')['CONTRACTS']['Contracts'] is defined and app.session.get('rights')['CONTRACTS']['Contracts'].creation==1 and (contract.status==1 or contract.status==2)%}*/
/* 				<tr>*/
/* 					<td colspan="10" class="list-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_training">{{'action.add'|trans([],'BoAdminBundle')}}</button>							*/
/* 					</td>*/
/* 				</tr>	*/
/* 			{%endif%}			*/
/*         </tbody>*/
/*     </table>*/
/* */
