<?php

/* BoAdminBundle:TeamContacts:modalform.html.twig */
class __TwigTemplate_eb0abcf93efcc617b0428b37e653a6af8d6e981a64e9eaf5dbe6f110032886a6 extends Twig_Template
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
        $__internal_76881ef53c189725d30df9885a7bcd87813991882e894f0d35fdc8554a8e7cb3 = $this->env->getExtension("native_profiler");
        $__internal_76881ef53c189725d30df9885a7bcd87813991882e894f0d35fdc8554a8e7cb3->enter($__internal_76881ef53c189725d30df9885a7bcd87813991882e894f0d35fdc8554a8e7cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TeamContacts:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "employee", array()), 'widget', array("attr" => array("class" => "employee span3")));
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "title", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "email", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "location", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.extension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.room", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "extension", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tc_form"]) ? $context["tc_form"] : $this->getContext($context, "tc_form")), "room", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_76881ef53c189725d30df9885a7bcd87813991882e894f0d35fdc8554a8e7cb3->leave($__internal_76881ef53c189725d30df9885a7bcd87813991882e894f0d35fdc8554a8e7cb3_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TeamContacts:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  78 => 25,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="40%" class="sty_label">{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(tc_form.employee, {'attr' : {'class' : 'employee span3'}}) }}</td>*/
/* 			<td>{{ form_widget(tc_form.title) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.location'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(tc_form.email) }}</td>*/
/* 			<td>{{ form_widget(tc_form.location) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.extension'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.room'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(tc_form.extension) }}</td>*/
/* 			<td>{{ form_widget(tc_form.room) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
