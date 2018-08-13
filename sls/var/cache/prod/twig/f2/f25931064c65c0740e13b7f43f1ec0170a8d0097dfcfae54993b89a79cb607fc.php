<?php

/* BoHomeBundle:Absences:tbshow.html.twig */
class __TwigTemplate_6865de168fb438a5d81764db7e582f94ea446196b05a0012b6b84703d8c8d04a extends Twig_Template
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
        $__internal_3b840e483606ead69ff8530c9bc8be8968345608380a1370c1c34f94fb6fb152 = $this->env->getExtension("native_profiler");
        $__internal_3b840e483606ead69ff8530c9bc8be8968345608380a1370c1c34f94fb6fb152->enter($__internal_3b840e483606ead69ff8530c9bc8be8968345608380a1370c1c34f94fb6fb152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:tbshow.html.twig"));

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
\t\t\t\t<th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th colspan=\"3\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "amorpm", array()), "html", null, true);
        echo "</td>\t\t\t
                <td>";
        // line 23
        if (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 1)) {
            echo "Submitt";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 4)) {
            echo "Validated";
        } elseif (($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "status", array()) == 3)) {
            echo "rejected";
        }
        echo "</td>
                <td colspan=\"3\">";
        // line 24
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        // line 27
        if ($this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array())) {
            // line 28
            echo "            <tr>
                <th colspan=\"4\">Comment</th>
            </tr>
            <tr>
                <td colspan=\"4\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "comment", array()), "html", null, true);
            echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 36
        echo "        </tbody>
    </table>
\t<br/>";
        
        $__internal_3b840e483606ead69ff8530c9bc8be8968345608380a1370c1c34f94fb6fb152->leave($__internal_3b840e483606ead69ff8530c9bc8be8968345608380a1370c1c34f94fb6fb152_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:tbshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  112 => 32,  106 => 28,  104 => 27,  96 => 24,  86 => 23,  82 => 22,  76 => 19,  72 => 18,  68 => 17,  61 => 13,  55 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
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
/* 				<th>{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th colspan="3">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{{ absence.amorpm }}</td>			*/
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
