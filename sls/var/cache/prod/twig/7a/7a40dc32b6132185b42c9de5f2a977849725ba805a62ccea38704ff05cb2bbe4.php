<?php

/* BoAdvisorsBundle:Orderform:criteria.html.twig */
class __TwigTemplate_06e61378cf771cb4dcb36e258259ba1e15fe05bd8ab2c4ba57059bbc17f728dc extends Twig_Template
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
        $__internal_a43304faa2e6bc42ad95c496400896ef58c29fc105f032ca8dd8e426357b8adc = $this->env->getExtension("native_profiler");
        $__internal_a43304faa2e6bc42ad95c496400896ef58c29fc105f032ca8dd8e426357b8adc->enter($__internal_a43304faa2e6bc42ad95c496400896ef58c29fc105f032ca8dd8e426357b8adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:criteria.html.twig"));

        // line 1
        echo "\t\t<table width=\"100%\">
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 4
        $this->loadTemplate("BoAdvisorsBundle:Orderform:status.html.twig", "BoAdvisorsBundle:Orderform:criteria.html.twig", 4)->display($context);
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<!--td class=\"sty_label\" align=\"right\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 7
        $this->loadTemplate("BoAdvisorsBundle:Orderform:selectlangage.html.twig", "BoAdvisorsBundle:Orderform:criteria.html.twig", 7)->display($context);
        echo "</td--!>
\t\t\t\t<td width=\"80%\">&nbsp;</td>
\t\t\t</tr>
\t\t</table>";
        
        $__internal_a43304faa2e6bc42ad95c496400896ef58c29fc105f032ca8dd8e426357b8adc->leave($__internal_a43304faa2e6bc42ad95c496400896ef58c29fc105f032ca8dd8e426357b8adc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:criteria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 		<table width="100%">*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.status'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdvisorsBundle:Orderform:status.html.twig" %}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<!--td class="sty_label" align="right">{{'label.language'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{% include "BoAdvisorsBundle:Orderform:selectlangage.html.twig" %}</td--!>*/
/* 				<td width="80%">&nbsp;</td>*/
/* 			</tr>*/
/* 		</table>*/
