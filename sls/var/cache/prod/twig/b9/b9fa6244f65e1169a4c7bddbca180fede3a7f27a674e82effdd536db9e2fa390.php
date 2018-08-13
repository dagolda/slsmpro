<?php

/* BoAdminBundle:Training:newform.html.twig */
class __TwigTemplate_b5d576a21069b9300f6d791f67b579eee7e6a28ca5df6d34d68414fc95db0f81 extends Twig_Template
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
        $__internal_cf7066a52a3bd839c8817b6a0c8616db0385b1794ab9f21a2522fcc1534b9820 = $this->env->getExtension("native_profiler");
        $__internal_cf7066a52a3bd839c8817b6a0c8616db0385b1794ab9f21a2522fcc1534b9820->enter($__internal_cf7066a52a3bd839c8817b6a0c8616db0385b1794ab9f21a2522fcc1534b9820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Training:newform.html.twig"));

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
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t\t
\t\t<tr>
            <th width=\"20%\" class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"20%\" class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"20%\" class=\"sty_label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endam", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startpm", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpm", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td colspan=\"2\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperday", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t\t<td colspan=\"2\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperweek", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>\t\t\t
\t</table>";
        
        $__internal_cf7066a52a3bd839c8817b6a0c8616db0385b1794ab9f21a2522fcc1534b9820->leave($__internal_cf7066a52a3bd839c8817b6a0c8616db0385b1794ab9f21a2522fcc1534b9820_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Training:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  120 => 37,  114 => 34,  110 => 33,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="15%" class="sty_label">{{'label.monday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.tuesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.wednesday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.thursday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="15%" class="sty_label">{{'label.friday'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td class="sty_label">{{ form_widget(form.monday, {'attr' : {'class' : 'cmonday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(form.tuesday, {'attr' : {'class' : 'ttuesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(form.wednesday, {'attr' : {'class' : 'cwednesday span3'}}) }}</td>*/
/* 			<td class="sty_label">{{ form_widget(form.thursday, {'attr' : {'class' : 'cthursday span3'}}) }}</td>*/
/*             <td class="sty_label">{{ form_widget(form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>				*/
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
/* 			<td>{{ form_widget(form.startam) }}</td>*/
/* 			<td>{{ form_widget(form.endam) }}</td>	*/
/* 			<td>{{ form_widget(form.startpm) }}</td>*/
/* 			<td>{{ form_widget(form.endpm) }}</td>			*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label" colspan="2">{{'label.hourperweek'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td colspan="2">{{ form_widget(form.hourperday) }}</td>				*/
/* 			<td colspan="2">{{ form_widget(form.hourperweek) }}</td>					*/
/* 		</tr>	*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>			*/
/* 	</table>*/
