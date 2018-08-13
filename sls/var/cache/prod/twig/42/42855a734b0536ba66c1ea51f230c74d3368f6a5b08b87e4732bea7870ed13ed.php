<?php

/* BoAdminBundle:Employee:absenceform.html.twig */
class __TwigTemplate_0f9fe3b921696c772bcb2be60e7508984537df8819c982fe316f55a106fd93cf extends Twig_Template
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
        $__internal_824db4708b002a95211be1b92701b3d0279270768179ad09786262a1566869e9 = $this->env->getExtension("native_profiler");
        $__internal_824db4708b002a95211be1b92701b3d0279270768179ad09786262a1566869e9->enter($__internal_824db4708b002a95211be1b92701b3d0279270768179ad09786262a1566869e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:absenceform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t    \t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "motif", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t    \t<th width=\"40%\" class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t    \t<th width=\"40%\" class=\"sty_label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "enddate", array()), 'widget', array("attr" => array("class" => "abend span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "numberday", array()), 'widget', array("attr" => array("class" => "numberday span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "amorpm", array()), 'widget', array("attr" => array("class" => "amorpm span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t<th colspan=\"2\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_824db4708b002a95211be1b92701b3d0279270768179ad09786262a1566869e9->leave($__internal_824db4708b002a95211be1b92701b3d0279270768179ad09786262a1566869e9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:absenceform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  74 => 24,  70 => 23,  64 => 20,  60 => 19,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 		    	<th class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.motif) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 		    	<th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		    	<th width="40%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.enddate, {'attr' : {'class' : 'abend span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.numberday, {'attr' : {'class' : 'numberday span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.amorpm, {'attr' : {'class' : 'amorpm span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             	<th colspan="2" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(absence_form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
