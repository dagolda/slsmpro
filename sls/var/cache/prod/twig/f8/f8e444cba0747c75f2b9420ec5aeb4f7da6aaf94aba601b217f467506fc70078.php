<?php

/* BoAdminBundle:Contracts:trainingform.html.twig */
class __TwigTemplate_5303856741bf7e244a516c6955204e2c98075a3f4f5a3d77d65a303e9d66a75b extends Twig_Template
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
        $__internal_1c918e57a7719b12f74ece8ee079d5d5003939b482701fba750f646fd784fe99 = $this->env->getExtension("native_profiler");
        $__internal_1c918e57a7719b12f74ece8ee079d5d5003939b482701fba750f646fd784fe99->enter($__internal_1c918e57a7719b12f74ece8ee079d5d5003939b482701fba750f646fd784fe99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:trainingform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"15%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"15%\" class=\"sty_label\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t\t
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "startam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "endam", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "startpm", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "endpm", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td colspan=\"2\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "hourperday", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t\t<td colspan=\"2\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["training_form"]) ? $context["training_form"] : $this->getContext($context, "training_form")), "hourperweek", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t</table>";
        
        $__internal_1c918e57a7719b12f74ece8ee079d5d5003939b482701fba750f646fd784fe99->leave($__internal_1c918e57a7719b12f74ece8ee079d5d5003939b482701fba750f646fd784fe99_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:trainingform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  120 => 37,  114 => 34,  110 => 33,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="15%" class="sty_label">{{'label.monday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.thursday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.friday'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(training_form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(training_form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(training_form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(training_form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(training_form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">		*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="20%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(training_form.startam) }}</td>*/
/* 			<td>{{ form_widget(training_form.endam) }}</td>	*/
/* 			<td>{{ form_widget(training_form.startpm) }}</td>*/
/* 			<td>{{ form_widget(training_form.endpm) }}</td>			*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label" colspan="2">{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td colspan="2">{{ form_widget(training_form.hourperday) }}</td>				*/
/* 			<td colspan="2">{{ form_widget(training_form.hourperweek) }}</td>					*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>			*/
/* 	</table>*/
