<?php

/* BoAdvisorsBundle:Tickets:newform.html.twig */
class __TwigTemplate_61b82db7f3b9737c2ed3381fa5ce460c206c7b57c3cb173f3f7bea2342f7b855 extends Twig_Template
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
        $__internal_0abc1ffd4ffe1901046076ed0440bbbea77ca04b39e379e0990817e395105128 = $this->env->getExtension("native_profiler");
        $__internal_0abc1ffd4ffe1901046076ed0440bbbea77ca04b39e379e0990817e395105128->enter($__internal_0abc1ffd4ffe1901046076ed0440bbbea77ca04b39e379e0990817e395105128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.openeddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "openeddate", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.students", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filename", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" class=\"sty_label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_0abc1ffd4ffe1901046076ed0440bbbea77ca04b39e379e0990817e395105128->leave($__internal_0abc1ffd4ffe1901046076ed0440bbbea77ca04b39e379e0990817e395105128_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  74 => 24,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="40%" class="sty_label">{{'label.openeddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.subject, {'attr' : {'class' : 'subject span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.openeddate) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.students'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.employee, {'attr' : {'class' : 'subject span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.students) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.filename) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="2" class="sty_label">{{'label.message'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.comments) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
