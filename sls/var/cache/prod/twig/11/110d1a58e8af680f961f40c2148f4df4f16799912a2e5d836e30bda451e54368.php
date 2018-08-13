<?php

/* BoAdminBundle:Contracts:tscform.html.twig */
class __TwigTemplate_b53e7e7e2ee8e23bf6105ba772e6e3e666ee51f0a95983fe22572c51e81f74fb extends Twig_Template
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
        $__internal_1d270f6715dc227a32a170ba399f89b322928217e1084c102c6c0518210ce428 = $this->env->getExtension("native_profiler");
        $__internal_1d270f6715dc227a32a170ba399f89b322928217e1084c102c6c0518210ce428->enter($__internal_1d270f6715dc227a32a170ba399f89b322928217e1084c102c6c0518210ce428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:tscform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"4\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t\t\t
\t\t\t<td colspan=\"4\">\t\t\t\t
\t\t\t\t<select name='idteacher' id='teachers' class=\"idteacher\" required=\"true\">
\t\t\t\t\t<option value=\"0\" selected=\"selected\">Select a teachers</option>
\t\t\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listteachers"]) ? $context["listteachers"] : $this->getContext($context, "listteachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 10
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idteacher", $context) && ($this->getAttribute($context["teacher"], 0, array(), "array") == (isset($context["idteacher"]) ? $context["idteacher"] : $this->getContext($context, "idteacher"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t\t\t</select>\t
\t\t\t</td>\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<td>&nbsp;</td>\t\t\t
\t\t</tr>
\t\t<tr>\t\t\t\t
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "startdate", array()), 'widget', array("attr" => array("class" => "tsc_start span3")));
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "enddate", array()), 'widget', array("attr" => array("class" => "tsc_end span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "hourperday", array()), 'widget', array("attr" => array("class" => "hourperday span3")));
        echo "</td>\t
\t\t\t<td>&nbsp;</td>\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<td colspan=\"4\">
\t\t\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th class=\"sty_label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "startam", array()), 'widget', array("attr" => array("class" => "startam span3")));
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "endam", array()), 'widget', array("attr" => array("class" => "endam span3")));
        echo "</td>\t
\t\t\t\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "startpm", array()), 'widget', array("attr" => array("class" => "startpm span3")));
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "endpm", array()), 'widget', array("attr" => array("class" => "endpm span3")));
        echo "</td>\t\t\t\t
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"15%\" class=\"sty_label\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            \t\t<td class=\"sty_label\">";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsc_form"]) ? $context["tsc_form"] : $this->getContext($context, "tsc_form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_1d270f6715dc227a32a170ba399f89b322928217e1084c102c6c0518210ce428->leave($__internal_1d270f6715dc227a32a170ba399f89b322928217e1084c102c6c0518210ce428_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:tscform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  171 => 61,  167 => 60,  163 => 59,  159 => 58,  153 => 55,  149 => 54,  145 => 53,  141 => 52,  137 => 51,  125 => 42,  121 => 41,  117 => 40,  113 => 39,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  84 => 25,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  61 => 17,  54 => 12,  39 => 10,  35 => 9,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">	*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="4">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>				*/
/* 			<td colspan="4">				*/
/* 				<select name='idteacher' id='teachers' class="idteacher" required="true">*/
/* 					<option value="0" selected="selected">Select a teachers</option>*/
/* 					{%for teacher in listteachers%}*/
/* 						<option value="{{teacher[0]}}" {%if idteacher is defined and teacher[0] ==idteacher%}selected='selected'{%endif%}>{{teacher[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
/* 			</td>		*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<td>&nbsp;</td>			*/
/* 		</tr>*/
/* 		<tr>				*/
/* 			<td>{{ form_widget(tsc_form.startdate, {'attr' : {'class' : 'tsc_start span3'}}) }}</td>*/
/* 			<td>{{ form_widget(tsc_form.enddate, {'attr' : {'class' : 'tsc_end span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(tsc_form.hourperday, {'attr' : {'class' : 'hourperday span3'}}) }}</td>	*/
/* 			<td>&nbsp;</td>				*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<td colspan="4">*/
/* 				<table border="0" cellpadding="0" cellspacing="0" width="100%">		*/
/* 					<tr>*/
/* 						<th class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 						<th class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 					</tr>*/
/* 					<tr>*/
/* 						<td>{{ form_widget(tsc_form.startam, {'attr' : {'class' : 'startam span3'}}) }}</td>*/
/* 						<td>{{ form_widget(tsc_form.endam, {'attr' : {'class' : 'endam span3'}}) }}</td>	*/
/* 						<td>{{ form_widget(tsc_form.startpm, {'attr' : {'class' : 'startpm span3'}}) }}</td>*/
/* 						<td>{{ form_widget(tsc_form.endpm, {'attr' : {'class' : 'endpm span3'}}) }}</td>				*/
/* 					</tr>*/
/* 				</table>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>			*/
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
/* 			<td class="sty_label">{{ form_widget(tsc_form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(tsc_form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(tsc_form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(tsc_form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             		<td class="sty_label">{{ form_widget(tsc_form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
