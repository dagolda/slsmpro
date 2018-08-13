<?php

/* BoAdminBundle:Students:editabsenceform.html.twig */
class __TwigTemplate_8d8d5e3d4ef1949e1a307bb280807aa9a317b55f27ca3aea4860199c4711d8bc extends Twig_Template
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
        $__internal_179ad79c384efefec404086e9c3b57643f99bdd9458e8c48f095be82cc484df2 = $this->env->getExtension("native_profiler");
        $__internal_179ad79c384efefec404086e9c3b57643f99bdd9458e8c48f095be82cc484df2->enter($__internal_179ad79c384efefec404086e9c3b57643f99bdd9458e8c48f095be82cc484df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:editabsenceform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th class=\"sty_label\">Motif</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "motif", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
           \t \t<th width=\"40%\" class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>
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
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\" class=\"am-data\">
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startam", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "endam", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\" class=\"pm-data\">
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "startpm", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "endpm", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th width=\"40%\" class=\"sty_label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dayns", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacherpresence", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "dayns", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "teacherpresence", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>           \t
            \t\t<th class=\"sty_label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nsam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
            \t\t<th class=\"sty_label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nspm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "nsam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "nspm", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th colspan=\"2\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["absence_form"]) ? $context["absence_form"] : $this->getContext($context, "absence_form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_179ad79c384efefec404086e9c3b57643f99bdd9458e8c48f095be82cc484df2->leave($__internal_179ad79c384efefec404086e9c3b57643f99bdd9458e8c48f095be82cc484df2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:editabsenceform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  161 => 66,  157 => 65,  151 => 62,  147 => 61,  140 => 57,  136 => 56,  130 => 53,  126 => 52,  117 => 46,  113 => 45,  107 => 42,  103 => 41,  94 => 35,  90 => 34,  84 => 31,  80 => 30,  71 => 24,  67 => 23,  61 => 20,  57 => 19,  50 => 15,  46 => 14,  40 => 11,  36 => 10,  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th class="sty_label">Motif</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.motif) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*            	 	<th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>*/
/* 			<td>{{ form_widget(absence_form.enddate, {'attr' : {'class' : 'abend span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.numberday, {'attr' : {'class' : 'numberday span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.amorpm, {'attr' : {'class' : 'amorpm span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row" class="am-data">*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startam) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.endam) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row" class="pm-data">*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.startpm) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.endpm) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th width="40%" class="sty_label">{{'label.dayns'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th width="40%" class="sty_label">{{'label.teacherpresence'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(absence_form.dayns) }}</td>	*/
/* 			<td>{{ form_widget(absence_form.teacherpresence) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>           	*/
/*             		<th class="sty_label">{{'label.nsam'|trans([],'BoAdminBundle')}}</th>	*/
/*             		<th class="sty_label">{{'label.nspm'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(absence_form.nsam) }}</td>*/
/* 			<td>{{ form_widget(absence_form.nspm) }}</td>				*/
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
