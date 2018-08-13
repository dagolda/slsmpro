<?php

/* BoAdminBundle:Cancel:newform.html.twig */
class __TwigTemplate_1fa31b195e2f0f4e6dfece28db887b1c32487839711cf01192fcc28039b3e75d extends Twig_Template
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
        $__internal_6a048cd8b3f2491da160d94934125c5de6a05191203034e422359401c9f156cc = $this->env->getExtension("native_profiler");
        $__internal_6a048cd8b3f2491da160d94934125c5de6a05191203034e422359401c9f156cc->enter($__internal_6a048cd8b3f2491da160d94934125c5de6a05191203034e422359401c9f156cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Cancel:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amorpm", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"3\" class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>\t
\t\t\t<td colspan=\"3\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_6a048cd8b3f2491da160d94934125c5de6a05191203034e422359401c9f156cc->leave($__internal_6a048cd8b3f2491da160d94934125c5de6a05191203034e422359401c9f156cc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Cancel:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startdate) }}</td>	*/
/* 			<td>{{ form_widget(form.enddate) }}</td>	*/
/* 			<td>{{ form_widget(form.amorpm) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="3" class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>	*/
/* 			<td colspan="3">{{ form_widget(form.motif) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
