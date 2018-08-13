<?php

/* BoAdvisorsBundle:Enquiry:editform.html.twig */
class __TwigTemplate_94f6a04c45cc35591a97b89cc96ff4f72100b3e5d61e55f745e32d2f4c876ed4 extends Twig_Template
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
        $__internal_5a5ab13823e4bd1ae9d9372db7e3383cbe9f618b7137d483106d52fcd43da255 = $this->env->getExtension("native_profiler");
        $__internal_5a5ab13823e4bd1ae9d9372db7e3383cbe9f618b7137d483106d52fcd43da255->enter($__internal_5a5ab13823e4bd1ae9d9372db7e3383cbe9f618b7137d483106d52fcd43da255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Enquiry:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.city", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.costumer", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gtso", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "targetlevel", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gtso", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfield", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "field", array()), 'widget', array("attr" => array("class" => "field span3")));
        echo "</td>\t
\t\t\t<td valign=\"top\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ftorpt", array()), 'widget', array("attr" => array("class" => "ftorpt span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlanguage", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.privateorgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gouvemp", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget', array("attr" => array("class" => "language span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "privateorgroup", array()), 'widget', array("attr" => array("class" => "privateorgroup span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gouvemp", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.schedule", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.traininglocation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>

\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "schedule", array()), 'widget', array("attr" => array("class" => "schedule span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hours", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperday", array()), 'widget', array("attr" => array("class" => "hourperday span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperweek", array()), 'widget', array("attr" => array("class" => "hourperweek span3")));
        echo "</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workon", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "workon", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t\t<td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonecontact", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailcontact", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_5a5ab13823e4bd1ae9d9372db7e3383cbe9f618b7137d483106d52fcd43da255->leave($__internal_5a5ab13823e4bd1ae9d9372db7e3383cbe9f618b7137d483106d52fcd43da255_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Enquiry:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 104,  280 => 101,  273 => 97,  269 => 96,  265 => 95,  259 => 92,  255 => 91,  251 => 90,  244 => 86,  240 => 85,  236 => 84,  230 => 81,  226 => 80,  222 => 79,  215 => 75,  211 => 74,  207 => 73,  201 => 70,  197 => 69,  193 => 68,  186 => 64,  182 => 63,  175 => 59,  171 => 58,  164 => 54,  160 => 53,  156 => 52,  150 => 49,  146 => 48,  142 => 47,  135 => 43,  131 => 42,  127 => 41,  121 => 38,  117 => 37,  113 => 36,  106 => 32,  102 => 31,  98 => 30,  92 => 27,  88 => 26,  84 => 25,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname) }}</td>*/
/* 			<td>{{ form_widget(form.name) }}</td>	*/
/* 			<td>{{ form_widget(form.email) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.city'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.costumer'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.address) }}</td>*/
/* 			<td>{{ form_widget(form.city) }}</td>	*/
/* 			<td>{{ form_widget(form.client) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.gtso'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.phone) }}</td>			*/
/* 			<td>{{ form_widget(form.targetlevel) }}</td>	*/
/* 			<td>{{ form_widget(form.gtso) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.workfield'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.typecontract) }}</td>		*/
/* 			<td>{{ form_widget(form.field, {'attr' : {'class' : 'field span3'}}) }}</td>	*/
/* 			<td valign="top">{{ form_widget(form.ftorpt, {'attr' : {'class' : 'ftorpt span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.targetlanguage'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.privateorgroup'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.gouvemp'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.language, {'attr' : {'class' : 'language span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(form.privateorgroup, {'attr' : {'class' : 'privateorgroup span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.gouvemp) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">{{'label.schedule'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.traininglocation'|trans([],'BoAdminBundle')}}</th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.schedule, {'attr' : {'class' : 'schedule span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(form.location) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.hours'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.hours) }}</td>	*/
/* 			<td>{{ form_widget(form.hourperday, {'attr' : {'class' : 'hourperday span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(form.hourperweek, {'attr' : {'class' : 'hourperweek span3'}}) }}</td>						*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.workon'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.workon) }}</td>*/
/* 			<td>{{ form_widget(form.startdate) }}</td>				*/
/* 			<td>{{ form_widget(form.enddate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.contact'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contactemail'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.contact) }}</td>*/
/* 			<td>{{ form_widget(form.phonecontact) }}</td>	*/
/* 			<td>{{ form_widget(form.emailcontact) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="3">{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.comment) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
