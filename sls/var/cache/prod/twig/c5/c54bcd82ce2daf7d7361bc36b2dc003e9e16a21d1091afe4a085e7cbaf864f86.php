<?php

/* BoHomeBundle:Tsdoc:newform.html.twig */
class __TwigTemplate_2133ec621bd4e8058050c8a0c33ed3ceafe2ed192c92631d6b03455fff2800d9 extends Twig_Template
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
        $__internal_ee7f4d4692f28ec0b704589656e53f4e0af5687f97ed3c4b965dc5ac87f4be1e = $this->env->getExtension("native_profiler");
        $__internal_ee7f4d4692f28ec0b704589656e53f4e0af5687f97ed3c4b965dc5ac87f4be1e->enter($__internal_ee7f4d4692f28ec0b704589656e53f4e0af5687f97ed3c4b965dc5ac87f4be1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Tsdoc:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.year", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.month", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbhour", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filename", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "student", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "</td>\t
\t\t\t<td></td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_ee7f4d4692f28ec0b704589656e53f4e0af5687f97ed3c4b965dc5ac87f4be1e->leave($__internal_ee7f4d4692f28ec0b704589656e53f4e0af5687f97ed3c4b965dc5ac87f4be1e_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Tsdoc:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  92 => 33,  86 => 30,  82 => 29,  74 => 24,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.year'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.month'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.year) }}</td>	*/
/* 			<td>{{ form_widget(form.month) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.numberhour'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.nbhour, {'attr' : {'class' : 'subject span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.filename) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="2" class="sty_label">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.student, {'attr' : {'class' : 'subject span3'}}) }}</td>	*/
/* 			<td></td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
