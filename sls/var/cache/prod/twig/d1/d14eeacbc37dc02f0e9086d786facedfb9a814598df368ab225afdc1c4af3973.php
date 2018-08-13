<?php

/* BoAdminBundle:Employee:subschedule.html.twig */
class __TwigTemplate_4f0c21a3c51554e94b5daebc168aec4050ece89a83988c84280af37901dfed60 extends Twig_Template
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
        $__internal_f085fc53dceb90780ce1b9e3255f013e4f56e6d3ac653de1bb4e7a8c47aed75a = $this->env->getExtension("native_profiler");
        $__internal_f085fc53dceb90780ce1b9e3255f013e4f56e6d3ac653de1bb4e7a8c47aed75a->enter($__internal_f085fc53dceb90780ce1b9e3255f013e4f56e6d3ac653de1bb4e7a8c47aed75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:subschedule.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td width=\"20%\">&nbsp;</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "enddate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "hour", array()), 'widget');
        echo "</td>\t
\t\t\t<td>&nbsp;</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "startam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "endam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "startpm", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "endpm", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["substitution_form"]) ? $context["substitution_form"] : $this->getContext($context, "substitution_form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_f085fc53dceb90780ce1b9e3255f013e4f56e6d3ac653de1bb4e7a8c47aed75a->leave($__internal_f085fc53dceb90780ce1b9e3255f013e4f56e6d3ac653de1bb4e7a8c47aed75a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:subschedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  49 => 11,  45 => 10,  41 => 9,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="20%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="20%" class="sty_label">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td width="20%">&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(substitution_form.startdate) }}</td>*/
/* 			<td>{{ form_widget(substitution_form.enddate) }}</td>*/
/* 			<td>{{ form_widget(substitution_form.hour) }}</td>	*/
/* 			<td>&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="20%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="20%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="20%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="20%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(substitution_form.startam) }}</td>*/
/* 			<td>{{ form_widget(substitution_form.endam) }}</td>*/
/* 			<td>{{ form_widget(substitution_form.startpm) }}</td>*/
/* 			<td>{{ form_widget(substitution_form.endpm) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="15%" class="sty_label">{{'label.monday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="15%" class="sty_label">{{'label.tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.thursday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="15%" class="sty_label">{{'label.friday'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(substitution_form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(substitution_form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(substitution_form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(substitution_form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(substitution_form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
