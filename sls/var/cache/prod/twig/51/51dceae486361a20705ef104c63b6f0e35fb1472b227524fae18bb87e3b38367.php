<?php

/* BoHomeBundle:Timesheet:addform.html.twig */
class __TwigTemplate_104e620ffb5cde682a104d3412540967d88b8a1ca9f3bc4f14ac23a18117fc5c extends Twig_Template
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
        $__internal_2812d18c2e89f9747e2c43b0d970f189b53e36d4c6b7363a59de13008d1a944a = $this->env->getExtension("native_profiler");
        $__internal_2812d18c2e89f9747e2c43b0d970f189b53e36d4c6b7363a59de13008d1a944a->enter($__internal_2812d18c2e89f9747e2c43b0d970f189b53e36d4c6b7363a59de13008d1a944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Timesheet:addform.html.twig"));

        // line 1
        echo "\t<!--if individual contract then set student object  -->
\t";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) == 1)) {
            // line 3
            echo "\t\t";
            $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")), 0, array(), "array");
            // line 4
            echo "\t\t";
            if ((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS") && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS"))) {
                // line 5
                echo "\t\t\t<input type=\"hidden\" name=\"hour\" value=\"-\"/>
\t\t\t<input type=\"hidden\" name=\"am\" value=\"1\"/>
\t\t\t<input type=\"hidden\" name=\"pm\" value=\"1\"/>
\t\t";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 8
(isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS") && array_key_exists("tpm", $context))) {
                // line 9
                echo "\t\t\t<input type=\"hidden\" name=\"hour\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")), "html", null, true);
                echo "\"/>
\t\t\t<input type=\"hidden\" name=\"am\" value=\"1\"/>
\t\t";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 11
(isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS") && array_key_exists("tam", $context))) {
                // line 12
                echo "\t\t\t<input type=\"hidden\" name=\"hour\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")), "html", null, true);
                echo "\"/>
\t\t\t<input type=\"hidden\" name=\"pm\" value=\"1\"/>
\t\t";
            }
            // line 15
            echo "\t";
        }
        // line 16
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">Date</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td width=\"20%\">&nbsp;</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 25
        if (((isset($context["authorization"]) ? $context["authorization"] : $this->getContext($context, "authorization")) == 0)) {
            // line 26
            echo "\t\t\t\t\t<input type=\"text\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["ddate"]) ? $context["ddate"] : $this->getContext($context, "ddate")), "Y-m-d"), "html", null, true);
            echo "\" disabled=\"disabled\"/>
\t\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddate", array()), 'widget', array("attr" => array("class" => "ddate span3")));
            echo "
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t</td>
\t\t\t<td><input type=\"text\" value=\"Teaching\" disabled=\"disabled\"/></td>
\t\t\t<td><input type=\"text\" value=\"";
        // line 32
        if ((array_key_exists("contract", $context) && ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
        } else {
            echo "N/A";
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"20%\" class=\"sty_label\">Group</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberofhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"text\" value=\"";
        // line 41
        if ((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "name", array()), "html", null, true);
        } else {
            echo "N/A";
        }
        echo "\" disabled=\"disabled\"/></td>\t\t\t
\t\t\t<td><input type=\"text\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))), "html", null, true);
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td>
\t\t\t\t<input type=\"text\" value=\"";
        // line 44
        if (((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS"))) {
            echo "0";
        } elseif (((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && array_key_exists("tpm", $context))) {
            echo twig_escape_filter($this->env, (isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")), "html", null, true);
        } elseif (((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS")) && array_key_exists("tam", $context))) {
            echo twig_escape_filter($this->env, (isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")), "html", null, true);
        } elseif ($this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "hour", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "hour", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notfound", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "\" disabled=\"disabled\" ";
        if ((($this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "hour", array()) == "") || ($this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "hour", array()) == null))) {
            echo "class=\"notfound\"";
        }
        echo "/>
\t\t\t</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"text\" value=\"";
        // line 55
        if ((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS"))) {
            echo "00:00";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "startam", array()), "H:i"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td><input type=\"text\" value=\"";
        // line 56
        if ((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "am", array(), "array") == "ABS"))) {
            echo "00:00";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "endam", array()), "H:i"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td><input type=\"text\" value=\"";
        // line 57
        if ((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS"))) {
            echo "00:00";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "startpm", array()), "H:i"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t\t<td><input type=\"text\" value=\"";
        // line 58
        if ((array_key_exists("student", $context) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), array(), "array"), "pm", array(), "array") == "ABS"))) {
            echo "00:00";
        } else {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["timesheet"]) ? $context["timesheet"] : $this->getContext($context, "timesheet")), "endpm", array()), "H:i"), "html", null, true);
        }
        echo "\" disabled=\"disabled\"/></td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"100%\" class=\"sty_label\" colspan=\"4\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"4\">";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t</table>
\t";
        // line 69
        if ((array_key_exists("students", $context) && (twig_length_filter($this->env, (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students"))) > 0))) {
            // line 70
            echo "\t\t<div id='learner_attendance'>
\t\t\t";
            // line 71
            $this->loadTemplate("BoHomeBundle:Timesheet:attendance.html.twig", "BoHomeBundle:Timesheet:addform.html.twig", 71)->display($context);
            echo "\t
\t\t</div>
\t";
        }
        
        $__internal_2812d18c2e89f9747e2c43b0d970f189b53e36d4c6b7363a59de13008d1a944a->leave($__internal_2812d18c2e89f9747e2c43b0d970f189b53e36d4c6b7363a59de13008d1a944a_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Timesheet:addform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 71,  218 => 70,  216 => 69,  209 => 65,  203 => 62,  192 => 58,  184 => 57,  176 => 56,  168 => 55,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  128 => 44,  123 => 42,  115 => 41,  109 => 38,  105 => 37,  93 => 32,  89 => 30,  83 => 28,  77 => 26,  75 => 25,  67 => 20,  63 => 19,  58 => 16,  55 => 15,  48 => 12,  46 => 11,  40 => 9,  38 => 8,  33 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* 	<!--if individual contract then set student object  -->*/
/* 	{%if students|length==1%}*/
/* 		{%set student=students[0]%}*/
/* 		{%if presence[student.id]['am']=='ABS' and presence[student.id]['pm']=='ABS'%}*/
/* 			<input type="hidden" name="hour" value="-"/>*/
/* 			<input type="hidden" name="am" value="1"/>*/
/* 			<input type="hidden" name="pm" value="1"/>*/
/* 		{%elseif presence[student.id]['am']=='ABS' and tpm is defined%}*/
/* 			<input type="hidden" name="hour" value="{{tpm}}"/>*/
/* 			<input type="hidden" name="am" value="1"/>*/
/* 		{%elseif presence[student.id]['pm']=='ABS' and tam is defined%}*/
/* 			<input type="hidden" name="hour" value="{{tam}}"/>*/
/* 			<input type="hidden" name="pm" value="1"/>*/
/* 		{%endif%}*/
/* 	{%endif%}*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">Date</th>*/
/* 			<th width="20%" class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td width="20%">&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{%if authorization==0%}*/
/* 					<input type="text" value="{{ddate|date('Y-m-d')}}" disabled="disabled"/>*/
/* 				{%else%}*/
/* 					{{ form_widget(form.ddate,{'attr':{'class': "ddate span3"}}) }}*/
/* 				{%endif%}*/
/* 			</td>*/
/* 			<td><input type="text" value="Teaching" disabled="disabled"/></td>*/
/* 			<td><input type="text" value="{%if contract is defined and contract!=null%}{{contract.contractnumber}}{%else%}N/A{%endif%}" disabled="disabled"/></td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="20%" class="sty_label">Group</th>*/
/* 			<th width="20%" class="sty_label">{{'label.studentnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.numberofhour'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td><input type="text" value="{%if group%}{{group.name}}{%else%}N/A{%endif%}" disabled="disabled"/></td>			*/
/* 			<td><input type="text" value="{{students|length}}" disabled="disabled"/></td>*/
/* 			<td>*/
/* 				<input type="text" value="{%if student is defined and presence[student.id]['am']=='ABS' and presence[student.id]['pm']=='ABS' %}0{%elseif student is defined and presence[student.id]['am']=='ABS' and tpm is defined%}{{tpm}}{%elseif student is defined and presence[student.id]['pm']=='ABS' and tam is defined%}{{tam}}{%elseif timesheet.hour%}{{timesheet.hour}}{%else%}{{'label.notfound'|trans([],'BoAdminBundle')}}{%endif%}" disabled="disabled" {%if timesheet.hour=="" or timesheet.hour==null%}class="notfound"{%endif%}/>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="20%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td><input type="text" value="{%if student is defined and presence[student.id]['am']=='ABS'%}00:00{%else%}{{timesheet.startam|date("H:i")}}{%endif%}" disabled="disabled"/></td>*/
/* 			<td><input type="text" value="{%if student is defined and presence[student.id]['am']=='ABS'%}00:00{%else%}{{timesheet.endam|date("H:i")}}{%endif%}" disabled="disabled"/></td>*/
/* 			<td><input type="text" value="{%if student is defined and presence[student.id]['pm']=='ABS'%}00:00{%else%}{{timesheet.startpm|date("H:i")}}{%endif%}" disabled="disabled"/></td>*/
/* 			<td><input type="text" value="{%if student is defined and presence[student.id]['pm']=='ABS'%}00:00{%else%}{{timesheet.endpm|date("H:i")}}{%endif%}" disabled="disabled"/></td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="100%" class="sty_label" colspan="4">{{'label.note'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="4">{{form_widget(form.note)}}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{%if students is defined and students|length>0%}*/
/* 		<div id='learner_attendance'>*/
/* 			{%include "BoHomeBundle:Timesheet:attendance.html.twig"%}	*/
/* 		</div>*/
/* 	{%endif%}*/
/* */
