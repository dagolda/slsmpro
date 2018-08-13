<?php

/* BoAdminBundle:Absences:employeeform.html.twig */
class __TwigTemplate_bb3afb5bc989a6101ab3713dd7da0f4237ddcb5185ef66f5fa3c82410e1b1cc7 extends Twig_Template
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
        $__internal_f7220e810e08c23886a7b96ebc934431caec4f59ecba8a2362b6d3c3a49ee7c2 = $this->env->getExtension("native_profiler");
        $__internal_f7220e810e08c23886a7b96ebc934431caec4f59ecba8a2362b6d3c3a49ee7c2->enter($__internal_f7220e810e08c23886a7b96ebc934431caec4f59ecba8a2362b6d3c3a49ee7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:employeeform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "employee", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "motif", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "amorpm", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "enddate", array()), 'widget', array("attr" => array("class" => "abend span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "numberday", array()), 'widget', array("attr" => array("class" => "numberday span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.valid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "valid", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th colspan=\"3\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_f7220e810e08c23886a7b96ebc934431caec4f59ecba8a2362b6d3c3a49ee7c2->leave($__internal_f7220e810e08c23886a7b96ebc934431caec4f59ecba8a2362b6d3c3a49ee7c2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:employeeform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  90 => 28,  84 => 25,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="30%" class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="30%" class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>				*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.employee) }}</td>*/
/* 			<td>{{ form_widget(absence_form.motif) }}</td>*/
/* 			<td>{{ form_widget(absence_form.amorpm) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.enddate, {'attr' : {'class' : 'abend span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.numberday, {'attr' : {'class' : 'numberday span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.valid'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.valid) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th colspan="3" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(absence_form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
