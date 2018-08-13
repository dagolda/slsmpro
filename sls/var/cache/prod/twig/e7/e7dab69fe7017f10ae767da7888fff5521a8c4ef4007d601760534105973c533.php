<?php

/* BoAdminBundle:Substitution:editform.html.twig */
class __TwigTemplate_ea668df91086a8752bff60975cd8aca68201485ffe42e4b677274d90f1d2bf1d extends Twig_Template
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
        $__internal_5be636bfa06eff3847426025ae38ae9f6f91c114f9573b444ccbc8dd27f1be12 = $this->env->getExtension("native_profiler");
        $__internal_5be636bfa06eff3847426025ae38ae9f6f91c114f9573b444ccbc8dd27f1be12->enter($__internal_5be636bfa06eff3847426025ae38ae9f6f91c114f9573b444ccbc8dd27f1be12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>\t\t\t\t\t
\t\t\t\t<select name='holders' id='holders' required=\"true\">
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.select", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["holders"]) ? $context["holders"] : $this->getContext($context, "holders")));
        foreach ($context['_seq'] as $context["_key"] => $context["holder"]) {
            // line 11
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["holder"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idholder", $context) && ($this->getAttribute($context["holder"], 0, array(), "array") == (isset($context["idholder"]) ? $context["idholder"] : $this->getContext($context, "idholder"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["holder"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['holder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t\t</select>\t\t
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<select name='teachers' id='teachers' required=\"true\">
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.select", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 19
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idteacher", $context) && ($this->getAttribute($context["teacher"], 0, array(), "array") == (isset($context["idteacher"]) ? $context["idteacher"] : $this->getContext($context, "idteacher"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</select>\t\t\t\t
\t\t\t</td>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t</tr>
\t</table>
\t<div class=\"schedule_content\">
\t\t";
        // line 27
        $this->loadTemplate("BoAdminBundle:Substitution:schedule.html.twig", "BoAdminBundle:Substitution:editform.html.twig", 27)->display($context);
        // line 28
        echo "\t</div>
\t<input type=\"hidden\" name=\"idcontract\" id=\"idcontract\" value=\"";
        // line 29
        if (((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "id", array()), "html", null, true);
        }
        echo "\"/>
\t<input type=\"hidden\" name=\"idgroup\" id=\"idgroup\" value=\"";
        // line 30
        if (((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")) != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        }
        echo "\"/>
\t<input type=\"hidden\" name=\"ddate\" id=\"ddate\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startdate", array()), "Y-m-d"), "html", null, true);
        echo "\"/>
";
        
        $__internal_5be636bfa06eff3847426025ae38ae9f6f91c114f9573b444ccbc8dd27f1be12->leave($__internal_5be636bfa06eff3847426025ae38ae9f6f91c114f9573b444ccbc8dd27f1be12_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  113 => 30,  107 => 29,  104 => 28,  102 => 27,  94 => 21,  79 => 19,  75 => 18,  69 => 17,  63 => 13,  48 => 11,  44 => 10,  38 => 9,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>					*/
/* 				<select name='holders' id='holders' required="true">*/
/* 					<option value="0" selected="delected">{{'action.select'|trans([],'BoAdminBundle')}} {{'label.holder'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for holder in holders%}*/
/* 						<option value="{{holder[0]}}" {%if idholder is defined and holder[0] ==idholder%}selected='selected'{%endif%}>{{holder[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>		*/
/* 			</td>*/
/* 			<td>*/
/* 				<select name='teachers' id='teachers' required="true">*/
/* 					<option value="0" selected="delected">{{'action.select'|trans([],'BoAdminBundle')}} {{'label.substitute'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for teacher in teachers%}*/
/* 						<option value="{{teacher[0]}}" {%if idteacher is defined and teacher[0] ==idteacher%}selected='selected'{%endif%}>{{teacher[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>				*/
/* 			</td>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<div class="schedule_content">*/
/* 		{%include "BoAdminBundle:Substitution:schedule.html.twig"%}*/
/* 	</div>*/
/* 	<input type="hidden" name="idcontract" id="idcontract" value="{%if contract!=null%}{{contract.id}}{%endif%}"/>*/
/* 	<input type="hidden" name="idgroup" id="idgroup" value="{%if group!=null%}{{group.id}}{%endif%}"/>*/
/* 	<input type="hidden" name="ddate" id="ddate" value="{{substitution.startdate|date('Y-m-d')}}"/>*/
/* */
