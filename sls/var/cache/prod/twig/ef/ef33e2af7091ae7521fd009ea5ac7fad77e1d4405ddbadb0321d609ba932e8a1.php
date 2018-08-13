<?php

/* BoHomeBundle:Substitution:criteria.html.twig */
class __TwigTemplate_af2d2e8921327fdbe8b1e7450631f35eac09f99a12ba708361935f864c39ff92 extends Twig_Template
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
        $__internal_40b1c47c6cc38af0c06b215937a8bcbad5b39af67c5810d7188a59104f8ad3cd = $this->env->getExtension("native_profiler");
        $__internal_40b1c47c6cc38af0c06b215937a8bcbad5b39af67c5810d7188a59104f8ad3cd->enter($__internal_40b1c47c6cc38af0c06b215937a8bcbad5b39af67c5810d7188a59104f8ad3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Substitution:criteria.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.week", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "week", array()), 'widget', array("attr" => array("class" => "week span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t\t<td width=\"20\">&nbsp;</td>
\t\t\t\t<td class=\"sty_label\" align=\"right\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo ":&nbsp;</td>
\t\t\t\t<td class=\"sty_value\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>
\t\t\t\t<td class=\"extract_btn\"><button type=\"submit\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/xls.gif"), "html", null, true);
        echo "\" /></button></td>\t
\t\t\t</tr>
\t\t</table>
\t</form>";
        
        $__internal_40b1c47c6cc38af0c06b215937a8bcbad5b39af67c5810d7188a59104f8ad3cd->leave($__internal_40b1c47c6cc38af0c06b215937a8bcbad5b39af67c5810d7188a59104f8ad3cd_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Substitution:criteria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  51 => 11,  47 => 10,  42 => 8,  38 => 7,  33 => 5,  29 => 4,  22 => 1,);
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
/* 				<td class="sty_label" align="right">{{'label.week'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{{ form_widget(ccd_form.week, {'attr' : {'class' : 'week span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.startdate'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td>{{ form_widget(ccd_form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 				<td width="20">&nbsp;</td>*/
/* 				<td class="sty_label" align="right">{{'label.enddate'|trans([],'BoAdminBundle')}}:&nbsp;</td>*/
/* 				<td class="sty_value">{{ form_widget(ccd_form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>*/
/* 				<td class="extract_btn"><button type="submit"><img src="{{ asset('images/actions/xls.gif') }}" /></button></td>	*/
/* 			</tr>*/
/* 		</table>*/
/* 	</form>*/
