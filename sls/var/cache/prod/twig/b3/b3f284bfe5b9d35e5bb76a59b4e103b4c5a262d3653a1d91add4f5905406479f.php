<?php

/* BoAdvisorsBundle:Absences:tbshow.html.twig */
class __TwigTemplate_6dfec59b804c3d110d92a2c06c51a9751812845d31cc34d6616883220649ae3c extends Twig_Template
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
        $__internal_17241819452b26f2251441101b82d17f5487450123b75a13ed839548f7036ac5 = $this->env->getExtension("native_profiler");
        $__internal_17241819452b26f2251441101b82d17f5487450123b75a13ed839548f7036ac5->enter($__internal_17241819452b26f2251441101b82d17f5487450123b75a13ed839548f7036ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:tbshow.html.twig"));

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
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array()), "H:m"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 24
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endam", array()), "H:m"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 25
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array()), "H:m"), "html", null, true);
        }
        echo "</td>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endpm", array()), "H:m"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th colspan=\"3\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>\t\t\t\t              
                <td>";
        // line 34
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 1)) {
            echo "Submitt";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 4)) {
            echo "Validated";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 3)) {
            echo "rejected";
        }
        echo "</td>
                <td colspan=\"3\">";
        // line 35
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        // line 38
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array())) {
            // line 39
            echo "            <tr>
                <th colspan=\"4\">Comment</th>
            </tr>
            <tr>
                <td colspan=\"4\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 47
        echo "        </tbody>
    </table>
\t<br/>";
        
        $__internal_17241819452b26f2251441101b82d17f5487450123b75a13ed839548f7036ac5->leave($__internal_17241819452b26f2251441101b82d17f5487450123b75a13ed839548f7036ac5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 47,  149 => 43,  143 => 39,  141 => 38,  133 => 35,  123 => 34,  117 => 31,  113 => 30,  104 => 26,  98 => 25,  92 => 24,  86 => 23,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  61 => 13,  55 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.endam'|trans([],'BoAdminBundle')}}</th> */
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>  				*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{% if absence.startam %}{{ absence.startam|date('H:m') }}{% endif %}</td>*/
/*                 <td>{% if absence.endam %}{{ absence.endam|date('H:m') }}{% endif %}</td>*/
/*                 <td>{% if absence.startpm %}{{ absence.startpm|date('H:m') }}{% endif %}</td>*/
/*                 <td>{% if absence.endpm %}{{ absence.endpm|date('H:m') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th colspan="3">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>				              */
/*                 <td>{%if absence.status==1 %}Submitt{%elseif absence.status==4%}Validated{%elseif absence.status==3%}rejected{%endif%}</td>*/
/*                 <td colspan="3">{% if absence.creationdate %}{{ absence.creationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
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
