<?php

/* BoAdminBundle:Substitution:tbshow.html.twig */
class __TwigTemplate_76dd8fc622c27f79b58b9ef71928b8fbef0747c9e87ee6f996aecbfc26eabb0d extends Twig_Template
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
        $__internal_a243c59062b8f57677f9ef3b035b08cdd47aa5f4bb9415453d107297d3325747 = $this->env->getExtension("native_profiler");
        $__internal_a243c59062b8f57677f9ef3b035b08cdd47aa5f4bb9415453d107297d3325747->enter($__internal_a243c59062b8f57677f9ef3b035b08cdd47aa5f4bb9415453d107297d3325747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:tbshow.html.twig"));

        // line 1
        echo "\t <table  width=\"100%\">
\t\t<tbody>
\t\t    <tr>
\t\t        <th width=\"20%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"20%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t        <th width=\"20%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th width=\"20%\">Date</th>
\t\t    </tr>
\t\t    <tr>
\t\t        <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "id", array()), "html", null, true);
        echo "</td>
\t\t        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holder"]) ? $context["holder"] : $this->getContext($context, "holder")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holder"]) ? $context["holder"] : $this->getContext($context, "holder")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["substitute"]) ? $context["substitute"] : $this->getContext($context, "substitute")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["substitute"]) ? $context["substitute"] : $this->getContext($context, "substitute")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 13
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t    </tr>
\t\t    <tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t    <tr>
\t\t        <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.stratam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t    </tr>
\t\t    <tr>
\t\t        <td>";
        // line 23
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startam", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t        <td>";
        // line 24
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "endam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "endam", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 25
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "startpm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t\t\t<td>";
        // line 26
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "endpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "endpm", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t    </tr>
\t\t    <tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t    <tr>
\t\t        <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t        <th colspan=\"2\">&nbsp;</th>
\t\t    </tr>
\t\t    <tr>
\t\t        <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "hour", array()), "html", null, true);
        echo "</td>
\t\t        <td>";
        // line 36
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
\t\t\t<th colspan=\"2\">&nbsp;</th>
\t\t    </tr>
\t\t    <tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t\t</tbody>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
            <tr>
                <th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t<th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>               
\t\t<td><input type=\"checkbox\" ";
        // line 51
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "monday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 52
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "tuesday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
\t\t<td><input type=\"checkbox\" ";
        // line 53
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "wednesday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 54
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "thursday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
                <td><input type=\"checkbox\" ";
        // line 55
        if ($this->getAttribute((isset($context["substitution"]) ? $context["substitution"] : $this->getContext($context, "substitution")), "friday", array())) {
            echo "checked";
        }
        echo " disabled=\"disabled\"></td>
            </tr>
\t    <tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_a243c59062b8f57677f9ef3b035b08cdd47aa5f4bb9415453d107297d3325747->leave($__internal_a243c59062b8f57677f9ef3b035b08cdd47aa5f4bb9415453d107297d3325747_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 55,  180 => 54,  174 => 53,  168 => 52,  162 => 51,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  127 => 36,  123 => 35,  116 => 31,  112 => 30,  103 => 26,  97 => 25,  91 => 24,  85 => 23,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  58 => 13,  52 => 12,  46 => 11,  42 => 10,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	 <table  width="100%">*/
/* 		<tbody>*/
/* 		    <tr>*/
/* 		        <th width="20%">{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="20%">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/* 		        <th width="20%">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th width="20%">Date</th>*/
/* 		    </tr>*/
/* 		    <tr>*/
/* 		        <td>{{ substitution.id }}</td>*/
/* 		        <td>{{ holder.firstname }} {{ holder.name }}</td>*/
/* 			<td>{{ substitute.firstname }} {{ substitute.name }}</td>*/
/* 			<td>{% if substitution.startdate %}{{ substitution.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 		    </tr>*/
/* 		    <tr><td colspan="4">&nbsp;</td></tr>*/
/* 		    <tr>*/
/* 		        <th>{{'label.stratam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		    </tr>*/
/* 		    <tr>*/
/* 		        <td>{% if substitution.startam %}{{ substitution.startam|date('H:i:s') }}{% endif %}</td>*/
/* 		        <td>{% if substitution.endam %}{{ substitution.endam|date('H:i:s') }}{% endif %}</td>*/
/* 					<td>{% if substitution.startpm %}{{ substitution.startpm|date('H:i:s') }}{% endif %}</td>*/
/* 					<td>{% if substitution.endpm %}{{ substitution.endpm|date('H:i:s') }}{% endif %}</td>*/
/* 		    </tr>*/
/* 		    <tr><td colspan="4">&nbsp;</td></tr>*/
/* 		    <tr>*/
/* 		        <th>{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/* 					<th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		        <th colspan="2">&nbsp;</th>*/
/* 		    </tr>*/
/* 		    <tr>*/
/* 		        <td>{{ substitution.hour }}</td>*/
/* 		        <td>{% if substitution.creationdate %}{{ substitution.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/* 			<th colspan="2">&nbsp;</th>*/
/* 		    </tr>*/
/* 		    <tr><td colspan="4">&nbsp;</td></tr>			*/
/* 		</tbody>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/*             <tr>*/
/*                 <th>{{'Monday'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'Tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Thursday'|trans([],'BoAdminBundle')}}</th>*/
/* 		<th>{{'Friday'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>               */
/* 		<td><input type="checkbox" {% if substitution.monday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if substitution.tuesday %}checked{% endif %} disabled="disabled"></td>*/
/* 		<td><input type="checkbox" {% if substitution.wednesday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if substitution.thursday %}checked{% endif %} disabled="disabled"></td>*/
/*                 <td><input type="checkbox" {% if substitution.friday %}checked{% endif %} disabled="disabled"></td>*/
/*             </tr>*/
/* 	    <tr><td colspan="5">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
