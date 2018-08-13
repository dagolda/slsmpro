<?php

/* BoAdminBundle:Tadmin:show.html.twig */
class __TwigTemplate_f67b6954f0a322ffaba822de8ff37e0f9be3027e26e0c3a08ade4e37ecd684d5 extends Twig_Template
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
        $__internal_17f81de90b270f7a9e53d6e39294940e647f1fd64c21fe4c1b9f618f63c67aa4 = $this->env->getExtension("native_profiler");
        $__internal_17f81de90b270f7a9e53d6e39294940e647f1fd64c21fe4c1b9f618f63c67aa4->enter($__internal_17f81de90b270f7a9e53d6e39294940e647f1fd64c21fe4c1b9f618f63c67aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tadmin:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
               <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.id", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
               <th>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t   <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t   <th>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "id", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 11
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startdate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
\t\t\t\t<td>";
        // line 12
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "enddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t<td>";
        // line 13
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array()), "name", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
\t\t\t\t
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                
\t\t\t\t<td>";
        // line 25
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startam", array()), "H:i:s"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 26
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "endam", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "endam", array()), "H:i:s"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 27
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "startpm", array()), "H:i:s"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 28
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "endpm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "endpm", array()), "H:i:s"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
            <tr>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th colspan=\"3\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "hour", array()), "html", null, true);
        echo "</td>
                <td colspan=\"3\">";
        // line 37
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "creationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "creationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        // line 40
        if ($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "note", array())) {
            // line 41
            echo "\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"4\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "note", array()), "html", null, true);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t\t";
        }
        // line 49
        echo "        </tbody>
    </table>
";
        
        $__internal_17f81de90b270f7a9e53d6e39294940e647f1fd64c21fe4c1b9f618f63c67aa4->leave($__internal_17f81de90b270f7a9e53d6e39294940e647f1fd64c21fe4c1b9f618f63c67aa4_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tadmin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 49,  166 => 45,  160 => 42,  157 => 41,  155 => 40,  145 => 37,  141 => 36,  135 => 33,  131 => 32,  120 => 28,  112 => 27,  104 => 26,  96 => 25,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  63 => 13,  55 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/*                <th>{{'label.id'|trans([],'BoAdminBundle')}}</th>*/
/*                <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			   <th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			   <th>{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{{ tadmin.id }}</td>*/
/*                 <td>{% if tadmin.startdate %}{{ tadmin.startdate|date('Y-m-d') }}{% endif %}</td>*/
/* 				<td>{% if tadmin.enddate %}{{ tadmin.enddate|date('Y-m-d') }}{% else %}---{% endif %}</td>*/
/* 				<td>{% if tadmin.employee %}{{ tadmin.employee.firstname }} {{ tadmin.employee.name }}{% else %}---{% endif %}</td>*/
/* 				*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 */
/* 				<td>{% if tadmin.startam %}{{ tadmin.startam|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.endam %}{{ tadmin.endam|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.startpm %}{{ tadmin.startpm|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*                 <td>{% if tadmin.endpm %}{{ tadmin.endpm|date('H:i:s') }}{% else %}---{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/*             <tr>*/
/*                 <th>{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th colspan="3">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/* 				<td>{{ tadmin.hour }}</td>*/
/*                 <td colspan="3">{% if tadmin.creationdate %}{{ tadmin.creationdate|date('Y-m-d H:i:s') }}{% else %}---{% endif %}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{%if tadmin.note%}*/
/* 				<tr>*/
/* 					<th colspan="4">{{'label.note'|trans([],'BoAdminBundle')}}</th>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td colspan="4">{{ tadmin.note }}</td>*/
/* 				</tr>*/
/* 				<tr><td colspan="4">&nbsp;</td></tr>*/
/* 			{%endif%}*/
/*         </tbody>*/
/*     </table>*/
/* */
