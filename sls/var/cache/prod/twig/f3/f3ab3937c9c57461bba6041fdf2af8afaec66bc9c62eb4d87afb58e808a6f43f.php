<?php

/* BoAdminBundle:Students:showabsence.html.twig */
class __TwigTemplate_d52b1480f0fa23276d972cf1b962114e25dfb27fbd3d3af13b897a6d937462e9 extends Twig_Template
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
        $__internal_0eb3e47e1209c5fc2aba3f0686e2866696b16d8a05610e1f7da1973d85151fd6 = $this->env->getExtension("native_profiler");
        $__internal_0eb3e47e1209c5fc2aba3f0686e2866696b16d8a05610e1f7da1973d85151fd6->enter($__internal_0eb3e47e1209c5fc2aba3f0686e2866696b16d8a05610e1f7da1973d85151fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:showabsence.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
            <tr>
\t\t\t<th width=\"25%\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t<th width=\"25%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
                \t<th width=\"25%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t<th width=\"25%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
            </tr>
            <tr>
                \t<td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()), "html", null, true);
        echo "</td>
                \t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "motif", array()), "html", null, true);
        echo "</td>
                \t<td>";
        // line 11
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t<td>";
        // line 12
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "enddate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t
\t\t\t\t<th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dayns", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dayabs", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t
\t\t\t\t<th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.noshow", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
            </tr>
            <tr>
                \t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "numberday", array()), "html", null, true);
        echo "</td>  
                \t<td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "dayns", array()), "html", null, true);
        echo "</td>
                \t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "dayabs", array()), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 25
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "noshow", array()) == true)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.yes", array(), "BoAdminBundle"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.no", array(), "BoAdminBundle"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.createdby", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()), "html", null, true);
        echo "</td>
                \t<td>";
        // line 36
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 1)) {
            echo "Submitt";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 3)) {
            echo "Validated";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 3)) {
            echo "rejected";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "createby", array()), "html", null, true);
        echo "</td>
                \t<td>";
        // line 38
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array()), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>\t\t\t\t\t
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>


            <tr>
\t\t\t<th>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t<th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                \t<td>";
        // line 50
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array()), "H:i") != "00:00")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t<td>";
        // line 51
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startam", array()), "H:i") != "00:00")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endam", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t
                \t<td>";
        // line 52
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array()), "H:i") != "00:00")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t<td>";
        // line 53
        if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "startpm", array()), "H:i") != "00:00")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "endpm", array()), "H:i"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>\t\t\t\t\t
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr> 
                \t<th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nsam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t<th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nspm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
            </tr>
            <tr>
                \t<td>";
        // line 61
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "nsam", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                \t<td>";
        // line 62
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "nspm", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t";
        // line 65
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array())) {
            // line 66
            echo "            <tr>
                <th colspan=\"4\">Comment</th>
            </tr>
            <tr>
                <td colspan=\"4\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t";
        }
        // line 74
        echo "    </table>
\t<br/>
";
        
        $__internal_0eb3e47e1209c5fc2aba3f0686e2866696b16d8a05610e1f7da1973d85151fd6->leave($__internal_0eb3e47e1209c5fc2aba3f0686e2866696b16d8a05610e1f7da1973d85151fd6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:showabsence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 74,  244 => 70,  238 => 66,  236 => 65,  226 => 62,  218 => 61,  212 => 58,  208 => 57,  197 => 53,  189 => 52,  181 => 51,  173 => 50,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  144 => 38,  140 => 37,  130 => 36,  126 => 35,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  58 => 12,  52 => 11,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*             <tr>*/
/* 			<th width="25%">{{'label.id'|trans([],'BoAdminBundle')}}</th>  */
/* 			<th width="25%">{{'label.motif'|trans([],'BoAdminBundle')}}</th>  */
/*                 	<th width="25%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*                 	<th width="25%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>			*/
/*             </tr>*/
/*             <tr>*/
/*                 	<td>{{ absence.id }}</td>*/
/*                 	<td>{{ absence.motif }}</td>*/
/*                 	<td>{% if absence.startdate %}{{ absence.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 			<td>{% if absence.enddate %}{{ absence.enddate|date('Y-m-d') }}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.numberday'|trans([],'BoAdminBundle')}}</th>  	*/
/* 				<th>{{'label.dayns'|trans([],'BoAdminBundle')}}</th>  	*/
/* 				<th>{{'label.dayabs'|trans([],'BoAdminBundle')}}</th>  	*/
/* 				<th>{{'label.noshow'|trans([],'BoAdminBundle')}}</th>				*/
/*             </tr>*/
/*             <tr>*/
/*                 	<td>{{ absence.numberday }}</td>  */
/*                 	<td>{{ absence.dayns }}</td>*/
/*                 	<td>{{ absence.dayabs }}</td>*/
/* 			<td>{% if absence.noshow == true%}{{'label.yes'|trans([],'BoAdminBundle')}}{% else %}{{'label.no'|trans([],'BoAdminBundle')}}{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.createdby'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{{ absence.amorpm }}</td>*/
/*                 	<td>{%if absence.status==1 %}Submitt{%elseif absence.status==3%}Validated{%elseif absence.status==3%}rejected{%endif%}</td>*/
/* 				<td>{{ absence.createby }}</td>*/
/*                 	<td>{% if absence.creationdate %}{{ absence.creationdate|date('d-m-Y H:i:s') }}{% endif %}</td>					*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/* */
/* */
/*             <tr>*/
/* 			<th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>  */
/* 			<th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 	<td>{%if absence.startam|date("H:i")!="00:00"%}{{ absence.startam|date("H:i") }}{%else%}---{%endif%}</td>*/
/* 			<td>{%if absence.startam|date("H:i")!="00:00" %}{{ absence.endam|date("H:i") }}{%else%}---{%endif%}</td>	*/
/*                 	<td>{%if absence.startpm|date("H:i")!="00:00" %}{{ absence.startpm|date("H:i") }}{%else%}---{%endif%}</td>*/
/* 			<td>{%if absence.startpm|date("H:i")!="00:00" %}{{ absence.endpm|date("H:i") }}{%else%}---{%endif%}</td>					*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr> */
/*                 	<th>{{'label.nsam'|trans([],'BoAdminBundle')}}</th>*/
/*                 	<th>{{'label.nspm'|trans([],'BoAdminBundle')}}</th>			*/
/*             </tr>*/
/*             <tr>*/
/*                 	<td>{% if absence.nsam %}Yes{%else%}No{% endif %}</td>*/
/*                 	<td>{% if absence.nspm %}Yes{%else%}No{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		{%if absence.comment%}*/
/*             <tr>*/
/*                 <th colspan="4">Comment</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="4">{{ absence.comment }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		{%endif%}*/
/*     </table>*/
/* 	<br/>*/
/* */
