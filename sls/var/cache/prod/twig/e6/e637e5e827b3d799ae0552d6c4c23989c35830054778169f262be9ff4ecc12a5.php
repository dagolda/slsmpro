<?php

/* BoAdminBundle:Absences:modalform.html.twig */
class __TwigTemplate_71a3f27dac225f2a232e8260181c349c06226cd88dda941297388858dfc66e93 extends Twig_Template
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
        $__internal_8825f82da56efe69cbf845cf65545ddcbe225f0f446008e4350302c27ddc38b8 = $this->env->getExtension("native_profiler");
        $__internal_8825f82da56efe69cbf845cf65545ddcbe225f0f446008e4350302c27ddc38b8->enter($__internal_8825f82da56efe69cbf845cf65545ddcbe225f0f446008e4350302c27ddc38b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Absences:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "employee", array()), 'widget', array("attr" => array("class" => "employee span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "motif", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "numberday", array()), 'widget', array("attr" => array("class" => "numberday span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "enddate", array()), 'widget', array("attr" => array("class" => "abend span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t    \t<th class=\"sty_label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t    \t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.valid", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "amorpm", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "valid", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th colspan=\"2\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_8825f82da56efe69cbf845cf65545ddcbe225f0f446008e4350302c27ddc38b8->leave($__internal_8825f82da56efe69cbf845cf65545ddcbe225f0f446008e4350302c27ddc38b8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Absences:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 41,  96 => 34,  92 => 33,  86 => 30,  82 => 29,  75 => 25,  71 => 24,  65 => 21,  61 => 20,  54 => 16,  50 => 15,  44 => 12,  40 => 11,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.employee, {'attr' : {'class' : 'employee span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.motif) }}</td>*/
/* 			<td>{{ form_widget(absence_form.numberday, {'attr' : {'class' : 'numberday span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.enddate, {'attr' : {'class' : 'abend span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 		    	<th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>	*/
/* 		    	<th class="sty_label">{{'label.valid'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.amorpm) }}</td>		*/
/* 			<td>{{ form_widget(absence_form.valid) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th colspan="2" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(absence_form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
