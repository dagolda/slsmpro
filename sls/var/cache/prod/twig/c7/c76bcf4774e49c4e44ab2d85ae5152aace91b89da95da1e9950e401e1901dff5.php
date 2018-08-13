<?php

/* BoAdminBundle:Agenda:advancedsearch.html.twig */
class __TwigTemplate_b0ab17bfb2822c6749fab6cfe053803cc420245694a8dd6ef2558f05d5281baa extends Twig_Template
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
        $__internal_01faddc2a95ef8e1de4bbb96c4b485f44a686f6e5a2a08a92b2eed1168e47368 = $this->env->getExtension("native_profiler");
        $__internal_01faddc2a95ef8e1de4bbb96c4b485f44a686f6e5a2a08a92b2eed1168e47368->enter($__internal_01faddc2a95ef8e1de4bbb96c4b485f44a686f6e5a2a08a92b2eed1168e47368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:advancedsearch.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t<tr>
                \t\t<th width=\"20%\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.agendaid", array(), "BoAdminBundle"), "html", null, true);
        echo " </th>
                \t\t<th width=\"20%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t\t<th width=\"20%\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.groupid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t\t<th width=\"20%\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employeeid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"sty_label\"><input name=\"idagenda\" id=\"idagenda\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"idcontract\" id=\"idcontract\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"idgroup\" id=\"idgroup\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"idemployee\" id=\"idemployee\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t</tr>
\t\t\t<tr><td colspan=4>&nbsp;</td></tr>
\t\t\t<!--tr>
                \t\t<th width=\"20%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentname", array(), "BoAdminBundle"), "html", null, true);
        echo " </th>
                \t\t<th width=\"20%\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.groupname", array(), "BoAdminBundle"), "html", null, true);
        echo " </th>
                \t\t<th width=\"20%\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employeename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
                \t\t<th width=\"20%\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contractnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td class=\"sty_label\"><input name=\"studentname\" id=\"studentname\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"groupname\" id=\"groupname\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"teachername\" id=\"teachername\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t\t<td class=\"sty_label\"><input name=\"contractnumber\" id=\"contractnumber\" type=\"text\" value=\"\" size=\"10\"/></td>
\t\t\t</tr>
\t\t\t<tr><td colspan=4>&nbsp;</td></tr-->
\t\t</table>
";
        
        $__internal_01faddc2a95ef8e1de4bbb96c4b485f44a686f6e5a2a08a92b2eed1168e47368->leave($__internal_01faddc2a95ef8e1de4bbb96c4b485f44a686f6e5a2a08a92b2eed1168e47368_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:advancedsearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  59 => 18,  55 => 17,  51 => 16,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 			<tr>*/
/*                 		<th width="20%">{{'label.agendaid'|trans([],'BoAdminBundle')}} </th>*/
/*                 		<th width="20%">{{'label.contractid'|trans([],'BoAdminBundle')}}</th>*/
/*                 		<th width="20%">{{'label.groupid'|trans([],'BoAdminBundle')}}</th>*/
/*                 		<th width="20%">{{'label.employeeid'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="sty_label"><input name="idagenda" id="idagenda" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="idcontract" id="idcontract" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="idgroup" id="idgroup" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="idemployee" id="idemployee" type="text" value="" size="10"/></td>*/
/* 			</tr>*/
/* 			<tr><td colspan=4>&nbsp;</td></tr>*/
/* 			<!--tr>*/
/*                 		<th width="20%">{{'label.studentname'|trans([],'BoAdminBundle')}} </th>*/
/*                 		<th width="20%">{{'label.groupname'|trans([],'BoAdminBundle')}} </th>*/
/*                 		<th width="20%">{{'label.employeename'|trans([],'BoAdminBundle')}}</th>*/
/*                 		<th width="20%">{{'label.contractnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td class="sty_label"><input name="studentname" id="studentname" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="groupname" id="groupname" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="teachername" id="teachername" type="text" value="" size="10"/></td>*/
/* 				<td class="sty_label"><input name="contractnumber" id="contractnumber" type="text" value="" size="10"/></td>*/
/* 			</tr>*/
/* 			<tr><td colspan=4>&nbsp;</td></tr-->*/
/* 		</table>*/
/* */
