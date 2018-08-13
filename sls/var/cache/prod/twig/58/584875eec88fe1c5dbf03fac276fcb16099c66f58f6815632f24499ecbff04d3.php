<?php

/* BoAdminBundle:Contracts:substitutionform.html.twig */
class __TwigTemplate_e6f2d6c23541ae5e816150ddc91dd9c462ce792b775da485993bc13d2fdeaf63 extends Twig_Template
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
        $__internal_23007e312892f63264a73b8ba47b50136b175652ef49787f747c12c80e3835b4 = $this->env->getExtension("native_profiler");
        $__internal_23007e312892f63264a73b8ba47b50136b175652ef49787f747c12c80e3835b4->enter($__internal_23007e312892f63264a73b8ba47b50136b175652ef49787f747c12c80e3835b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:substitutionform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "employee", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "employee", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<select name='teachers' id='teachers' required=\"true\">
\t\t\t\t\t<option value=\"\">Select substitute</option>
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["substitutes"]) ? $context["substitutes"] : $this->getContext($context, "substitutes")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 17
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idteacher", $context) && ($this->getAttribute($context["teacher"], 0, array(), "array") == (isset($context["idteacher"]) ? $context["idteacher"] : $this->getContext($context, "idteacher"))))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</select>\t\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>

\t";
        // line 25
        $this->loadTemplate("BoAdminBundle:Contracts:subschedule.html.twig", "BoAdminBundle:Contracts:substitutionform.html.twig", 25)->display($context);
        // line 26
        echo "
";
        
        $__internal_23007e312892f63264a73b8ba47b50136b175652ef49787f747c12c80e3835b4->leave($__internal_23007e312892f63264a73b8ba47b50136b175652ef49787f747c12c80e3835b4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:substitutionform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  77 => 25,  69 => 19,  54 => 17,  50 => 16,  41 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{agenda.employee.firstname}} {{agenda.employee.name}}</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				<select name='teachers' id='teachers' required="true">*/
/* 					<option value="">Select substitute</option>*/
/* 					{%for teacher in substitutes%}*/
/* 						<option value="{{teacher[0]}}" {%if idteacher is defined and teacher[0]==idteacher%}selected="selected"{%endif%}>{{teacher[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>				*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<br/>*/
/* */
/* 	{%include "BoAdminBundle:Contracts:subschedule.html.twig"%}*/
/* */
/* */
