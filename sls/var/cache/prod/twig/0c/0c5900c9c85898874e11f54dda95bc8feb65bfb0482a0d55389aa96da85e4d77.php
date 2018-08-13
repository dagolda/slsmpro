<?php

/* BoAdvisorsBundle:Timesheet:criteria.html.twig */
class __TwigTemplate_138bc004de66cd5f386ae1ced55dd27a53ab6c563d488f18706624b8bcd94131 extends Twig_Template
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
        $__internal_45ac0e5f4190d88adf3d8a2e7e98513a02aba85d9f6820a85e358ef3fc4df3e0 = $this->env->getExtension("native_profiler");
        $__internal_45ac0e5f4190d88adf3d8a2e7e98513a02aba85d9f6820a85e358ef3fc4df3e0->enter($__internal_45ac0e5f4190d88adf3d8a2e7e98513a02aba85d9f6820a85e358ef3fc4df3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:criteria.html.twig"));

        // line 1
        echo "\t<form action=\"";
        echo $this->env->getExtension('routing')->getPath("contracts_xls");
        echo "\" method=\"post\" }} id=\"criteria_form\">
\t\t<table width=\"100%\">
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.year", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "year", array()), 'widget', array("attr" => array("class" => "year span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.month", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "month", array()), 'widget', array("attr" => array("class" => "month span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 11
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:selectstatus.html.twig", "BoAdvisorsBundle:Timesheet:criteria.html.twig", 11)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 14
        $this->loadTemplate("BoAdvisorsBundle:Timesheet:selecttype.html.twig", "BoAdvisorsBundle:Timesheet:criteria.html.twig", 14)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td class=\"sty_value\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>
\t\t\t\t<td class=\"extract_btn\"><button type=\"submit\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/xls.gif"), "html", null, true);
        echo "\" /></button></td>\t
\t\t\t</tr>
\t\t</table>
\t</form>";
        
        $__internal_45ac0e5f4190d88adf3d8a2e7e98513a02aba85d9f6820a85e358ef3fc4df3e0->leave($__internal_45ac0e5f4190d88adf3d8a2e7e98513a02aba85d9f6820a85e358ef3fc4df3e0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:criteria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  78 => 20,  74 => 19,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  51 => 11,  47 => 10,  42 => 8,  38 => 7,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* 	<form action="{{ path('contracts_xls') }}" method="post" }} id="criteria_form">*/
/* 		<table width="100%">*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.year'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{{ form_widget(ccd_form.year, {'attr' : {'class' : 'year span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.month'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{{ form_widget(ccd_form.month, {'attr' : {'class' : 'month span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.status'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdvisorsBundle:Timesheet:selectstatus.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.category'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdvisorsBundle:Timesheet:selecttype.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.from'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{{ form_widget(ccd_form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.to'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td class="sty_value">{{ form_widget(ccd_form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>*/
/* 				<td class="extract_btn"><button type="submit"><img src="{{ asset('images/actions/xls.gif') }}" /></button></td>	*/
/* 			</tr>*/
/* 		</table>*/
/* 	</form>*/
