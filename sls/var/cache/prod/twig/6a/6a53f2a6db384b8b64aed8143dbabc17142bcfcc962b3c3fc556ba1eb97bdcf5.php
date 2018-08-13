<?php

/* BoAdvisorsBundle:Absences:newform.html.twig */
class __TwigTemplate_dc594f5427256568a9d3c7b3c1d7c4be905614ca2aa3467896df0e81900f0a76 extends Twig_Template
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
        $__internal_1deddc4c5a49d85c9d79bf2ae77ee3aefaa425a9c352d58a1dba3604e944f00f = $this->env->getExtension("native_profiler");
        $__internal_1deddc4c5a49d85c9d79bf2ae77ee3aefaa425a9c352d58a1dba3604e944f00f->enter($__internal_1deddc4c5a49d85c9d79bf2ae77ee3aefaa425a9c352d58a1dba3604e944f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">Number day</th>
            <th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberday", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amorpm", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_1deddc4c5a49d85c9d79bf2ae77ee3aefaa425a9c352d58a1dba3604e944f00f->leave($__internal_1deddc4c5a49d85c9d79bf2ae77ee3aefaa425a9c352d58a1dba3604e944f00f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  58 => 17,  54 => 16,  48 => 13,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.motif) }}</td>*/
/* 			<td>{{ form_widget(form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">Number day</th>*/
/*             <th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.numberday) }}</td>	*/
/* 			<td>{{ form_widget(form.amorpm) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="2" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
