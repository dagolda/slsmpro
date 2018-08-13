<?php

/* BoAdminBundle:Group:newform.html.twig */
class __TwigTemplate_f82aaf5dbaaffa8448e0281be05a0d253a4d71bb4654837b2c315ce54f2e6031 extends Twig_Template
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
        $__internal_a4f447304b7989e434d3937146b21a281860b02df87330fb64e27f7db8605f2e = $this->env->getExtension("native_profiler");
        $__internal_a4f447304b7989e434d3937146b21a281860b02df87330fb64e27f7db8605f2e->enter($__internal_a4f447304b7989e434d3937146b21a281860b02df87330fb64e27f7db8605f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "targetlevel", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget', array("attr" => array("class" => "startdate span3")));
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget', array("attr" => array("class" => "enddate span3")));
        echo "</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>

\t</table>";
        
        $__internal_a4f447304b7989e434d3937146b21a281860b02df87330fb64e27f7db8605f2e->leave($__internal_a4f447304b7989e434d3937146b21a281860b02df87330fb64e27f7db8605f2e_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name) }}</td>*/
/* 			<td>{{ form_widget(form.targetlevel) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>					*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startdate, {'attr' : {'class' : 'startdate span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.enddate, {'attr' : {'class' : 'enddate span3'}}) }}</td>						*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* */
/* 	</table>*/
