<?php

/* BoAdminBundle:Contracts:revisionform.html.twig */
class __TwigTemplate_fee3b3bed02aac36d58632db9f5a8e6bf1aba3a208776fa434f597b107511131 extends Twig_Template
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
        $__internal_451d94abf3467021e78d99a7720ea8a68289809db61ad07e18afad33eb9e67d3 = $this->env->getExtension("native_profiler");
        $__internal_451d94abf3467021e78d99a7720ea8a68289809db61ad07e18afad33eb9e67d3->enter($__internal_451d94abf3467021e78d99a7720ea8a68289809db61ad07e18afad33eb9e67d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:revisionform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amendment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.costbefore", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "amendment", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "reference", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "costbefore", array()), 'widget', array("attr" => array("class" => "costbefore span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hoursbefore", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revisionhours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revisionhours", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hoursbefore", array()), 'widget', array("attr" => array("class" => "hoursbefore span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hour", array()), 'widget', array("attr" => array("class" => "hour span3")));
        echo "</td>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hour1", array()), 'widget', array("attr" => array("class" => "hour1 span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourafter", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourlyrate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hourafter", array()), 'widget', array("attr" => array("class" => "hourafter span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hourlyrate", array()), 'widget', array("attr" => array("class" => "hourlyrate span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "hourlyrate1", array()), 'widget', array("attr" => array("class" => "hourlyrate1 span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revisioncost", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.revisioncost", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.costafter", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "total", array()), 'widget', array("attr" => array("class" => "total span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "total1", array()), 'widget', array("attr" => array("class" => "total1 span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "costafter", array()), 'widget', array("attr" => array("class" => "costafter span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.authorizeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.daterate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "authorizeddate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "ratedate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "ratedate1", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th class=\"sty_label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "enddate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["revision_form"]) ? $context["revision_form"] : $this->getContext($context, "revision_form")), "enddate1", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_451d94abf3467021e78d99a7720ea8a68289809db61ad07e18afad33eb9e67d3->leave($__internal_451d94abf3467021e78d99a7720ea8a68289809db61ad07e18afad33eb9e67d3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:revisionform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 63,  181 => 62,  175 => 59,  171 => 58,  164 => 54,  160 => 53,  156 => 52,  150 => 49,  146 => 48,  142 => 47,  135 => 43,  131 => 42,  127 => 41,  121 => 38,  117 => 37,  113 => 36,  106 => 32,  102 => 31,  98 => 30,  92 => 27,  88 => 26,  84 => 25,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="30%" class="sty_label">{{'label.amendment'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th width="30%" class="sty_label">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.costbefore'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(revision_form.amendment) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.reference) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.costbefore, {'attr' : {'class' : 'costbefore span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.hoursbefore'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.revisionhours'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.revisionhours'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td>{{ form_widget(revision_form.hoursbefore, {'attr' : {'class' : 'hoursbefore span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.hour, {'attr' : {'class' : 'hour span3'}}) }}</td>*/
/* 			<td>{{ form_widget(revision_form.hour1, {'attr' : {'class' : 'hour1 span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.hourafter'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourlyrate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(revision_form.hourafter, {'attr' : {'class' : 'hourafter span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.hourlyrate, {'attr' : {'class' : 'hourlyrate span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.hourlyrate1, {'attr' : {'class' : 'hourlyrate1 span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="30%" class="sty_label">{{'label.revisioncost'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.revisioncost'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.costafter'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(revision_form.total, {'attr' : {'class' : 'total span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.total1, {'attr' : {'class' : 'total1 span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(revision_form.costafter, {'attr' : {'class' : 'costafter span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.authorizeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.daterate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(revision_form.authorizeddate) }}</td>*/
/* 			<td>{{ form_widget(revision_form.ratedate) }}</td>*/
/* 			<td>{{ form_widget(revision_form.ratedate1) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(revision_form.enddate) }}</td>*/
/* 			<td>{{ form_widget(revision_form.enddate1) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
