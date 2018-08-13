<?php

/* BoAdminBundle:Students:show.html.twig */
class __TwigTemplate_31b78f4a3cd3f64a44d509f0cefbae4978cdf78d3a8d0cad12e5867fc0390ace extends Twig_Template
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
        $__internal_0abb2afc399e686a32ae1e90704321dcdf097ce3642938f08b51e60475681bf2 = $this->env->getExtension("native_profiler");
        $__internal_0abb2afc399e686a32ae1e90704321dcdf097ce3642938f08b51e60475681bf2->enter($__internal_0abb2afc399e686a32ae1e90704321dcdf097ce3642938f08b51e60475681bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:show.html.twig"));

        // line 1
        echo "    <table width=\"100%\">
        <tbody>
            <tr>
\t\t\t\t<th width=\"25%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"25%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"25%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstname", array()), "html", null, true);
        echo "</td>
\t\t\t\t<td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 20
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phonenumber", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 21
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startlevel", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "targetlevel", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
            <tr>
\t\t\t\t<th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contract", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            </tr>
            <tr>
                <td>";
        // line 31
        if ((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")), "contractnumber", array()), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 32
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "startdate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
                <td>";
        // line 33
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "enddate", array()), "Y-m-d"), "html", null, true);
        } else {
            echo "---";
        }
        echo "</td>
            </tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
        </tbody>
    </table>";
        
        $__internal_0abb2afc399e686a32ae1e90704321dcdf097ce3642938f08b51e60475681bf2->leave($__internal_0abb2afc399e686a32ae1e90704321dcdf097ce3642938f08b51e60475681bf2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  119 => 32,  111 => 31,  105 => 28,  101 => 27,  97 => 26,  86 => 22,  78 => 21,  70 => 20,  64 => 17,  60 => 16,  56 => 15,  49 => 11,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/*     <table width="100%">*/
/*         <tbody>*/
/*             <tr>*/
/* 				<th width="25%">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="25%">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="25%">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{{ student.name }}</td>*/
/* 				<td>{{ student.firstname }}</td>*/
/* 				<td>{{ student.email }}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{%if student.phonenumber %}{{ student.phonenumber }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.startlevel %}{{ student.startlevel }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.targetlevel %}{{ student.targetlevel }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*             <tr>*/
/* 				<th>{{'label.contract'|trans([],'BoAdminBundle')}}</th>*/
/*                 <th>{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th>{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>{%if contract%}{{ contract.contractnumber }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.startdate%}{{ student.startdate|date('Y-m-d') }}{%else%}---{%endif%}</td>*/
/*                 <td>{%if student.enddate%}{{ student.enddate|date('Y-m-d') }}{%else%}---{%endif%}</td>*/
/*             </tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/*         </tbody>*/
/*     </table>*/
