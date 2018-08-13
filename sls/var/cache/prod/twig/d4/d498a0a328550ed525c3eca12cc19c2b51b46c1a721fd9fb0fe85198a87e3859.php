<?php

/* BoAdvisorsBundle:Timesheet:admintsform.html.twig */
class __TwigTemplate_c107cc30a3b7028c2f281fd729e59bf0fe18d2a0e7f269a5987f53ec6b219a3c extends Twig_Template
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
        $__internal_764d679a399d66355da810e0eaf9f6730e6dd5eb5f8717cd370e04cb1b4547ce = $this->env->getExtension("native_profiler");
        $__internal_764d679a399d66355da810e0eaf9f6730e6dd5eb5f8717cd370e04cb1b4547ce->enter($__internal_764d679a399d66355da810e0eaf9f6730e6dd5eb5f8717cd370e04cb1b4547ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:admintsform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">Date</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberofhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "ddate", array()), 'widget', array("attr" => array("class" => "ddate span3")));
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "typets", array()), 'widget', array("attr" => array("class" => "typeclass span3")));
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "hour", array()), 'widget', array("attr" => array("class" => "hour span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "startam", array()), 'widget', array("attr" => array("class" => "startam span3")));
        echo "</td>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "endam", array()), 'widget', array("attr" => array("class" => "endam span3")));
        echo "</td>
\t\t\t<td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "startpm", array()), 'widget', array("attr" => array("class" => "startpm span3")));
        echo "</td>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["admints_form"]) ? $context["admints_form"] : $this->getContext($context, "admints_form")), "endpm", array()), 'widget', array("attr" => array("class" => "endpm span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_764d679a399d66355da810e0eaf9f6730e6dd5eb5f8717cd370e04cb1b4547ce->leave($__internal_764d679a399d66355da810e0eaf9f6730e6dd5eb5f8717cd370e04cb1b4547ce_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:admintsform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 22,  74 => 21,  70 => 20,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  45 => 10,  41 => 9,  37 => 8,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">Date</th>*/
/* 			<th width="20%" class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.numberofhour'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(admints_form.ddate, {'attr' : {'class' : 'ddate span3'}}) }}</td>*/
/* 			<td>{{ form_widget(admints_form.typets, {'attr' : {'class' : 'typeclass span3'}}) }}</td>*/
/* 			<td>{{ form_widget(admints_form.hour, {'attr' : {'class' : 'hour span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="20%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(admints_form.startam, {'attr' : {'class' : 'startam span3'}}) }}</td>*/
/* 			<td>{{ form_widget(admints_form.endam, {'attr' : {'class' : 'endam span3'}}) }}</td>*/
/* 			<td>{{ form_widget(admints_form.startpm, {'attr' : {'class' : 'startpm span3'}}) }}</td>*/
/* 			<td>{{ form_widget(admints_form.endpm, {'attr' : {'class' : 'endpm span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 	</table>*/
