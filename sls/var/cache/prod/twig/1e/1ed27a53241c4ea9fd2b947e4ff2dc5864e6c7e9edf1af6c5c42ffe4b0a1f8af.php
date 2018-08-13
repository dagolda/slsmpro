<?php

/* BoAdminBundle:Agenda:editform.html.twig */
class __TwigTemplate_4a158ebca88b31e9aeb4ec2b8254da13c964a0f3cf673f9fa19d67fb67b5a4f7 extends Twig_Template
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
        $__internal_11171661d5ed3bde463be1566c9edf0f60bc2a27ed007711459d42a3f951e5c5 = $this->env->getExtension("native_profiler");
        $__internal_11171661d5ed3bde463be1566c9edf0f60bc2a27ed007711459d42a3f951e5c5->enter($__internal_11171661d5ed3bde463be1566c9edf0f60bc2a27ed007711459d42a3f951e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">\t
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.teacher", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t\t\t
\t\t\t<td colspan=\"2\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "name", array()), "html", null, true);
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>\t
\t\t<tr>
            <th width=\"16%\" class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"16%\" class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"16%\" class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"16%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"16%\" class=\"sty_label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourperday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endam", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startpm", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endpm", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hourperday", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>\t
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>\t\t\t
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.monday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"15%\" class=\"sty_label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.tuesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.wednesday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.thursday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"15%\" class=\"sty_label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.friday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"sty_label\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monday", array()), 'widget', array("attr" => array("class" => "cmonday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tuesday", array()), 'widget', array("attr" => array("class" => "ttuesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wednesday", array()), 'widget', array("attr" => array("class" => "cwednesday span3")));
        echo "</td>
\t\t\t<td class=\"sty_label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thursday", array()), 'widget', array("attr" => array("class" => "cthursday span3")));
        echo "</td>
            <td class=\"sty_label\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "friday", array()), 'widget', array("attr" => array("class" => "cfriday span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t\t";
        // line 45
        if (((isset($context["contract"]) ? $context["contract"] : $this->getContext($context, "contract")) == null)) {
            echo "\t\t\t
\t\t\t<tr>
\t\t\t\t<th colspan=\"5\" class=\"sty_label\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
            echo "</th>\t\t
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" class=\"sty_label\">";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
            echo "</td>
\t\t\t</tr>
\t\t\t<tr><td colspan=\"5\">&nbsp;</td></tr>
\t\t";
        }
        // line 53
        echo "\t
\t</table>
";
        
        $__internal_11171661d5ed3bde463be1566c9edf0f60bc2a27ed007711459d42a3f951e5c5->leave($__internal_11171661d5ed3bde463be1566c9edf0f60bc2a27ed007711459d42a3f951e5c5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  159 => 50,  153 => 47,  148 => 45,  142 => 42,  138 => 41,  134 => 40,  130 => 39,  126 => 38,  120 => 35,  116 => 34,  112 => 33,  108 => 32,  104 => 31,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  50 => 10,  46 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">	*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">{{'label.teacher'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>				*/
/* 			<td colspan="2">{{teacher.firstname}} {{teacher.name}}</td>*/
/* 			<td>{{ form_widget(form.startdate) }}</td>*/
/* 			<td>{{ form_widget(form.enddate) }}</td>			*/
/* 		</tr>	*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>	*/
/* 		<tr>*/
/*             <th width="16%" class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="16%" class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="16%" class="sty_label">{{'label.startpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="16%" class="sty_label">{{'label.endpm'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="16%" class="sty_label">{{'label.hourperday'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startam) }}</td>*/
/* 			<td>{{ form_widget(form.endam) }}</td>	*/
/* 			<td>{{ form_widget(form.startpm) }}</td>*/
/* 			<td>{{ form_widget(form.endpm) }}</td>	*/
/* 			<td>{{ form_widget(form.hourperday) }}</td>				*/
/* 		</tr>	*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>			*/
/* 	</table>*/
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
/*             <td class="sty_label">{{ form_widget(form.friday, {'attr' : {'class' : 'cfriday span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="5">&nbsp;</td></tr>*/
/* 		{%if contract==null%}			*/
/* 			<tr>*/
/* 				<th colspan="5" class="sty_label">{{'label.description'|trans([],'BoAdminBundle')}}</th>		*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td colspan="5" class="sty_label">{{ form_widget(form.description) }}</td>*/
/* 			</tr>*/
/* 			<tr><td colspan="5">&nbsp;</td></tr>*/
/* 		{%endif%}	*/
/* 	</table>*/
/* */
