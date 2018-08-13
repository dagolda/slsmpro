<?php

/* BoAdvisorsBundle:Modelts:form.html.twig */
class __TwigTemplate_97082ac29491bcca908ea623c9189e98db1bf7d74dcb14476f172cb5a18ed615 extends Twig_Template
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
        $__internal_b1ccbb90b7eae8610620bf2b7a409f15330199ad8b02671797b3f9b20af3fe53 = $this->env->getExtension("native_profiler");
        $__internal_b1ccbb90b7eae8610620bf2b7a409f15330199ad8b02671797b3f9b20af3fe53->enter($__internal_b1ccbb90b7eae8610620bf2b7a409f15330199ad8b02671797b3f9b20af3fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Modelts:form.html.twig"));

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
        echo "</th>\t
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.saturday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "saturday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t\t
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "startam", array()), 'widget', array("attr" => array("class" => "startam span3")));
        echo "</td>
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "endam", array()), 'widget', array("attr" => array("class" => "endam span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "startpm", array()), 'widget', array("attr" => array("class" => "startpm span3")));
        echo "</td>
\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "endpm", array()), 'widget', array("attr" => array("class" => "endpm span3")));
        echo "</td>\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\" colspan=\"2\">&nbsp;</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td colspan=\"2\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["model_form"]) ? $context["model_form"] : $this->getContext($context, "model_form")), "hour", array()), 'widget', array("attr" => array("class" => "hour span3")));
        echo "</td>\t\t\t\t
\t\t\t<td colspan=\"2\">&nbsp;</td>\t\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t</table>";
        
        $__internal_b1ccbb90b7eae8610620bf2b7a409f15330199ad8b02671797b3f9b20af3fe53->leave($__internal_b1ccbb90b7eae8610620bf2b7a409f15330199ad8b02671797b3f9b20af3fe53_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Modelts:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  118 => 35,  111 => 31,  107 => 30,  103 => 29,  99 => 28,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="15%" class="sty_label">{{'label.monday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.thursday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.friday'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th width="15%" class="sty_label">{{'label.saturday'|trans([],'BoAdminBundle')}}</th>				*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(model_form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(model_form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(model_form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(model_form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(model_form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(model_form.saturday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>				*/
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
/* 			<td>{{ form_widget(model_form.startam, {'attr' : {'class' : 'startam span3'}}) }}</td>*/
/* 			<td>{{ form_widget(model_form.endam, {'attr' : {'class' : 'endam span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(model_form.startpm, {'attr' : {'class' : 'startpm span3'}}) }}</td>*/
/* 			<td>{{ form_widget(model_form.endpm, {'attr' : {'class' : 'endpm span3'}}) }}</td>			*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label" colspan="2">&nbsp;</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td colspan="2">{{ form_widget(model_form.hour, {'attr' : {'class' : 'hour span3'}}) }}</td>				*/
/* 			<td colspan="2">&nbsp;</td>					*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>			*/
/* 	</table>*/
