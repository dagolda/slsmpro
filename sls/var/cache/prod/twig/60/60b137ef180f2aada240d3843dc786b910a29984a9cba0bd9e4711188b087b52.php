<?php

/* BoAdminBundle:Absences:show.html.twig */
class __TwigTemplate_6f568a5c59483dc3d33d6652b2ca61a0088795064895bcf85f182b15c5383c8a extends Twig_Template
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
        $__internal_4fe3fcd639b0add8e398c0571d5a5bf22c6cb810e8dcb26bb645bcd95ef44a1d = $this->env->getExtension("native_profiler");
        $__internal_4fe3fcd639b0add8e398c0571d5a5bf22c6cb810e8dcb26bb645bcd95ef44a1d->enter($__internal_4fe3fcd639b0add8e398c0571d5a5bf22c6cb810e8dcb26bb645bcd95ef44a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:show.html.twig"));

        // line 1
        echo "    <table width=\"80%\">
        <tbody>
            <tr>
\t\t\t\t<th width=\"22%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
                <th width=\"22%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th width=\"22%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"22%\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t\t\t\t
            </tr>
            <tr>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "motif", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 11
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 12
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
        echo "</td>  
            </tr>
\t\t\t<!--tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th> 
                <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t\t\t\t
            </tr>
            <tr>
                <td>";
        // line 23
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array()), "H:i"), "html", null, true);
        } else {
            echo "00:00";
        }
        echo "</td>
                <td>";
        // line 24
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endam", array()), "H:i"), "html", null, true);
        } else {
            echo "00:00";
        }
        echo "</td>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array()), "H:i"), "html", null, true);
        } else {
            echo "00:00";
        }
        echo "</td>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endpm", array()), "H:i"), "html", null, true);
        } else {
            echo "00:00";
        }
        echo "</td>
            </tr-->
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th colspan=\"3\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()), "html", null, true);
        echo "</td>\t\t\t
                \t\t<td>";
        // line 37
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 1)) {
            echo "Submitt";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 4)) {
            echo "Validated";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 3)) {
            echo "rejected";
        }
        echo "</td>
               \t\t\t<td>";
        // line 38
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "createby", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "createby", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
               \t\t\t<td>";
        // line 39
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        // line 42
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array())) {
            // line 43
            echo "            <tr>
                <th colspan=\"4\">Comment</th>
            </tr>
            <tr>
                <td colspan=\"4\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 51
        echo "        </tbody>
    </table>
\t<br/>
";
        
        $__internal_4fe3fcd639b0add8e398c0571d5a5bf22c6cb810e8dcb26bb645bcd95ef44a1d->leave($__internal_4fe3fcd639b0add8e398c0571d5a5bf22c6cb810e8dcb26bb645bcd95ef44a1d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 51,  177 => 47,  171 => 43,  169 => 42,  161 => 39,  153 => 38,  143 => 37,  139 => 36,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  110 => 26,  102 => 25,  94 => 24,  86 => 23,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  61 => 13,  55 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="80%">*/
/*         <tbody>*/
/*             <tr>*/
/* 				<th width="22%">{{'label.motif'|trans([],'BoAdminBundle')}}</th>  */
/*                 <th width="22%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th width="22%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="22%">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>  				*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ absence.motif }}</td>*/
/*                 <td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td>{{ absence.numberday }}</td>  */
/*             </tr>*/
/* 			<!--tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.endam'|trans([],'BoAdminBundle')}}</th> */
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>  				*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{% if absence.startam%}{{ absence.startam|date('H:i') }}{%else%}00:00{% endif %}</td>*/
/*                 <td>{% if absence.endam%}{{ absence.endam|date('H:i') }}{%else%}00:00{% endif %}</td>*/
/*                 <td>{% if absence.startpm%}{{ absence.startpm|date('H:i') }}{%else%}00:00{% endif %}</td>*/
/*                 <td>{% if absence.endpm%}{{ absence.endpm|date('H:i') }}{%else%}00:00{% endif %}</td>*/
/*             </tr-->*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th colspan="3">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{{ absence.amorpm }}</td>			*/
/*                 		<td>{%if absence.status==1 %}Submitt{%elseif absence.status==4%}Validated{%elseif absence.status==3%}rejected{%endif%}</td>*/
/*                			<td>{% if absence.createby %}{{ absence.createby }}{% else %}---{% endif %}</td>*/
/*                			<td>{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{%if absence.comment%}*/
/*             <tr>*/
/*                 <th colspan="4">Comment</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="4">{{ absence.comment }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
/* 	<br/>*/
/* */
