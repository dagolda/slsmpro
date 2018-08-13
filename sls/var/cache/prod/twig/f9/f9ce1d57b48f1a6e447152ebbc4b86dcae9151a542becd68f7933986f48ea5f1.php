<?php

/* BoHomeBundle:Timesheet:attendance.html.twig */
class __TwigTemplate_5c01093e1ed85e40e14961d87eb427ef0f036a6ca51638b2e20050c02dfd6b49 extends Twig_Template
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
        $__internal_98549f2d7c7d337ada8401598b73772386f4ab4e3a08b4b223a227f359f3c1c8 = $this->env->getExtension("native_profiler");
        $__internal_98549f2d7c7d337ada8401598b73772386f4ab4e3a08b4b223a227f359f3c1c8->enter($__internal_98549f2d7c7d337ada8401598b73772386f4ab4e3a08b4b223a227f359f3c1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Timesheet:attendance.html.twig"));

        // line 1
        echo "\t<div class='payroll_attendance'>
\t\t<legend>Attendance of learners</legend>
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 5
            echo "\t\t\t\t";
            if (($this->getAttribute($context["student"], "firstname", array(), "any", true, true) && $this->getAttribute($context["student"], "name", array(), "any", true, true))) {
                // line 6
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class='ts_presence_label'>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "name", array()), "html", null, true);
                echo ":</td>
\t\t\t\t\t\t<td class='ts_presence_value'>
\t\t\t\t\t\t\t<input type='radio' id=\"p\" name='student";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "' value='P' ";
                if ((((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "P") && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "P")) || (($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "P") && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) != 0))) || (($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "P") && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) != 0)))) {
                    echo "checked";
                }
                echo " disabled> P
\t\t\t\t\t\t\t<input type='radio' id=\"ns\" name='student";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "' value='N-S' ";
                if ((((($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "N-S")) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "N-S")) || (($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "N-S")) && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) > 0))) || (($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "N-S")) && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) > 0)))) {
                    echo "checked";
                }
                echo " disabled> N-S
\t\t\t\t\t\t\t<input type='radio' id=\"abs\" name='student";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "' value='ABS' ";
                if ((((($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "ABS")) || (($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) > 0))) || (($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "ABS")) && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) > 0)))) {
                    echo "checked";
                }
                echo " disabled> ABS
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 13
                if ((array_key_exists("tam", $context) && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) != 0))) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<td width=\"3px\">&nbsp;</td>
\t\t\t\t\t\t\t<td><b>AM</b> : ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"am";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"ham";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t\t";
                if ((array_key_exists("tpm", $context) && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) != 0))) {
                    // line 20
                    echo "\t\t\t\t\t\t\t<td width=\"3px\">&nbsp;</td>
\t\t\t\t\t\t\t<td><b>PM</b> : ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"pm";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array"), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"hpm";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, (isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")), "html", null, true);
                    echo "\"/>
\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t<td width=\"3px\">&nbsp;</td>
\t\t\t\t\t\t<td>L:<input type='text' name='delay";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "' value='0' size=\"2\" ";
                if (($this->getAttribute((isset($context["presence"]) ? $context["presence"] : null), $this->getAttribute($context["student"], "id", array()), array(), "array", true, true) && (((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "N-S") || ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) > 0)) || ((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "N-S") || ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "ABS")) && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) > 0))))) {
                    echo "disabled";
                }
                echo "> (in minutes)</td>
\t\t\t\t\t\t<td width=\"3px\">&nbsp;</td>
\t\t\t\t\t\t<td>LE:<input type='text' name='dh";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
                echo "' value='0' size=\"2\" ";
                if ((((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "N-S") || ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "am", array(), "array") == "ABS")) && ((isset($context["tam"]) ? $context["tam"] : $this->getContext($context, "tam")) > 0)) || ((($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "N-S") || ($this->getAttribute($this->getAttribute((isset($context["presence"]) ? $context["presence"] : $this->getContext($context, "presence")), $this->getAttribute($context["student"], "id", array()), array(), "array"), "pm", array(), "array") == "ABS")) && ((isset($context["tpm"]) ? $context["tpm"] : $this->getContext($context, "tpm")) > 0)))) {
                    echo "disabled";
                }
                echo "> (in minutes)</td>
\t\t\t\t\t\t<td>&nbsp;</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 32
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t
\t\t</table>
\t</div>
";
        
        $__internal_98549f2d7c7d337ada8401598b73772386f4ab4e3a08b4b223a227f359f3c1c8->leave($__internal_98549f2d7c7d337ada8401598b73772386f4ab4e3a08b4b223a227f359f3c1c8_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Timesheet:attendance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  137 => 32,  126 => 28,  117 => 26,  114 => 25,  107 => 23,  101 => 22,  97 => 21,  94 => 20,  91 => 19,  84 => 17,  78 => 16,  74 => 15,  71 => 14,  69 => 13,  60 => 11,  52 => 10,  44 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<div class='payroll_attendance'>*/
/* 		<legend>Attendance of learners</legend>*/
/* 		<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 			{%for student in students%}*/
/* 				{%if student.firstname is defined and student.name is defined%}*/
/* 					<tr>*/
/* 						<td class='ts_presence_label'>{{student.firstname}} {{student.name}}:</td>*/
/* 						<td class='ts_presence_value'>*/
/* 							<input type='radio' id="p" name='student{{student.id}}' value='P' {%if (presence[student.id]['am']=="P" and presence[student.id]['pm']=="P") or (presence[student.id]['am']=="P" and tam!=0) or (presence[student.id]['pm']=="P" and tpm!=0)%}checked{%endif%} disabled> P*/
/* 							<input type='radio' id="ns" name='student{{student.id}}' value='N-S' {%if (presence[student.id] is defined and presence[student.id]['am']=="N-S" and presence[student.id]['pm']=="N-S") or (presence[student.id] is defined and presence[student.id]['am']=="N-S" and tam>0) or (presence[student.id] is defined and presence[student.id]['pm']=="N-S" and tpm>0) %}checked{%endif%} disabled> N-S*/
/* 							<input type='radio' id="abs" name='student{{student.id}}' value='ABS' {%if (presence[student.id] is defined and presence[student.id]['am']=="ABS" and presence[student.id]['pm']=="ABS") or (presence[student.id] is defined and presence[student.id]['am']=="ABS" and tam>0) or (presence[student.id] is defined and presence[student.id]['pm']=="ABS" and tpm>0)%}checked{%endif%} disabled> ABS*/
/* 						</td>*/
/* 						{%if tam is defined and tam!=0%}*/
/* 							<td width="3px">&nbsp;</td>*/
/* 							<td><b>AM</b> : {{presence[student.id]['am']}}</td>*/
/* 							<input type="hidden" name="am{{student.id}}" value="{{presence[student.id]['am']}}"/>*/
/* 							<input type="hidden" name="ham{{student.id}}" value="{{tam}}"/>*/
/* 						{%endif%}*/
/* 						{%if tpm is defined and tpm!=0%}*/
/* 							<td width="3px">&nbsp;</td>*/
/* 							<td><b>PM</b> : {{presence[student.id]['pm']}}</td>*/
/* 							<input type="hidden" name="pm{{student.id}}" value="{{presence[student.id]['pm']}}"/>*/
/* 							<input type="hidden" name="hpm{{student.id}}" value="{{tpm}}"/>*/
/* 						{%endif%}*/
/* 						<td width="3px">&nbsp;</td>*/
/* 						<td>L:<input type='text' name='delay{{student.id}}' value='0' size="2" {%if presence[student.id] is defined and (((presence[student.id]['am']=="N-S" or presence[student.id]['am']=="ABS") and tam>0) or ((presence[student.id]['pm']=="N-S" or presence[student.id]['pm']=="ABS") and tpm>0)) %}disabled{%endif%}> (in minutes)</td>*/
/* 						<td width="3px">&nbsp;</td>*/
/* 						<td>LE:<input type='text' name='dh{{student.id}}' value='0' size="2" {%if (((presence[student.id]['am']=="N-S" or presence[student.id]['am']=="ABS") and tam>0) or ((presence[student.id]['pm']=="N-S" or presence[student.id]['pm']=="ABS") and tpm>0)) %}disabled{%endif%}> (in minutes)</td>*/
/* 						<td>&nbsp;</td>*/
/* 					</tr>*/
/* 				{%endif%}*/
/* 			{%endfor%}*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>		*/
/* 		</table>*/
/* 	</div>*/
/* */
