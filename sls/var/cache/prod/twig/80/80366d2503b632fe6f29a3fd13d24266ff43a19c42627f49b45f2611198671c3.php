<?php

/* BoAdvisorsBundle:Timesheet:addform.html.twig */
class __TwigTemplate_b4aea4c8785b60ed5eb1f044b8d36fd5a4b20c6566db4fec7aa2d77895b0079a extends Twig_Template
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
        $__internal_cd4e7fbb60560f02d8f29530b51416fba04e686b96cc6c60665c45957d2039d6 = $this->env->getExtension("native_profiler");
        $__internal_cd4e7fbb60560f02d8f29530b51416fba04e686b96cc6c60665c45957d2039d6->enter($__internal_cd4e7fbb60560f02d8f29530b51416fba04e686b96cc6c60665c45957d2039d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:addform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">Date</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td width=\"20%\">&nbsp;</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddate", array()), 'widget');
        echo "</td>
\t\t\t<td><input type=\"text\" value=\"Teaching\" disabled=\"disabled\"/></td>
\t\t\t<td><input type=\"text\" value=\"";
        // line 11
        if ((array_key_exists("contract", $context) && ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
        } else {
            echo "N/A";
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"20%\" class=\"sty_label\">Group</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberofhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.legende", array(), "BoAdminBundle"), "html", null, true);
        echo "Legende</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        echo "\" disabled=\"disabled\"/></td>\t\t\t
\t\t\t<td><input type=\"text\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))), "html", null, true);
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "legende", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startam", array()), 'widget', array("attr" => array("class" => "startam span3")));
        echo "</td>
\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endam", array()), 'widget', array("attr" => array("class" => "endam span3")));
        echo "</td>
\t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startpm", array()), 'widget', array("attr" => array("class" => "startpm span3")));
        echo "</td>
\t\t\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpm", array()), 'widget', array("attr" => array("class" => "endpm span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t</table>
\t<div id='learner_attendance'>
\t\t<legend>Attendance of learners</legend>
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 46
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td class='ts_presence_label'>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
            echo ":</td>
\t\t\t\t\t<td class='ts_presence_value'>
\t\t\t\t\t\t<input type='radio' name='student";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "' value='P' checked> P
\t\t\t\t\t\t<input type='radio' name='student";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "' value='N-S'> N-S
\t\t\t\t\t\t<input type='radio' name='student";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "' value='ABS'> ABS\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td width=\"3px\">&nbsp;</td>
\t\t\t\t\t<td><input type='text' name='delay";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "' value='0' size=\"8\"> (Delay in minutes)</td>
\t\t\t\t\t<td width=\"30%\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t
\t\t</table>\t\t
\t</div>";
        
        $__internal_cd4e7fbb60560f02d8f29530b51416fba04e686b96cc6c60665c45957d2039d6->leave($__internal_cd4e7fbb60560f02d8f29530b51416fba04e686b96cc6c60665c45957d2039d6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:addform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  157 => 54,  151 => 51,  147 => 50,  143 => 49,  136 => 47,  133 => 46,  129 => 45,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 19,  60 => 18,  56 => 17,  43 => 11,  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">Date</th>*/
/* 			<th width="20%" class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td width="20%">&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ddate) }}</td>*/
/* 			<td><input type="text" value="Teaching" disabled="disabled"/></td>*/
/* 			<td><input type="text" value="{%if contract is defined and contract!=null%}{{contract.contractnumber}}{%else%}N/A{%endif%}" disabled="disabled"/></td>*/
/* 			<td>&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="20%" class="sty_label">Group</th>*/
/* 			<th width="20%" class="sty_label">{{'label.studentnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.numberofhour'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.legende'|trans([],'BoAdminBundle')}}Legende</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td><input type="text" value="{{group.name}}" disabled="disabled"/></td>			*/
/* 			<td><input type="text" value="{{students|length}}" disabled="disabled"/></td>*/
/* 			<td>{{ form_widget(form.hour) }}</td>*/
/* 			<td>{{ form_widget(form.legende) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="20%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startam, {'attr' : {'class' : 'startam span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.endam, {'attr' : {'class' : 'endam span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.startpm, {'attr' : {'class' : 'startpm span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.endpm, {'attr' : {'class' : 'endpm span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<div id='learner_attendance'>*/
/* 		<legend>Attendance of learners</legend>*/
/* 		<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 			{%for student in students%}*/
/* 				<tr>*/
/* 					<td class='ts_presence_label'>{{student.firstname}} {{student.name}}:</td>*/
/* 					<td class='ts_presence_value'>*/
/* 						<input type='radio' name='student{{student.id}}' value='P' checked> P*/
/* 						<input type='radio' name='student{{student.id}}' value='N-S'> N-S*/
/* 						<input type='radio' name='student{{student.id}}' value='ABS'> ABS				*/
/* 					</td>*/
/* 					<td width="3px">&nbsp;</td>*/
/* 					<td><input type='text' name='delay{{student.id}}' value='0' size="8"> (Delay in minutes)</td>*/
/* 					<td width="30%">&nbsp;</td>*/
/* 				</tr>*/
/* 			{%endfor%}*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>		*/
/* 		</table>		*/
/* 	</div>*/
