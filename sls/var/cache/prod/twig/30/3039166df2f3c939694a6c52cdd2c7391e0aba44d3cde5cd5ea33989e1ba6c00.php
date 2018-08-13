<?php

/* BoAdminBundle:Contracts:groupform.html.twig */
class __TwigTemplate_925b9ccbb2925962e44653a065255c1041c92fc93a95cb2c47f96ec54d5de3a4 extends Twig_Template
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
        $__internal_67c1a0f0279bae3b84f4595e1e3b70e5432e339804f0ad20c1c889f2eb62fc7d = $this->env->getExtension("native_profiler");
        $__internal_67c1a0f0279bae3b84f4595e1e3b70e5432e339804f0ad20c1c889f2eb62fc7d->enter($__internal_67c1a0f0279bae3b84f4595e1e3b70e5432e339804f0ad20c1c889f2eb62fc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:groupform.html.twig"));

        // line 1
        echo "\t<div id=\"contract_group_errormsg\"></div>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"27%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"27%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"27%\" class=\"sty_label\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "name", array()), 'widget', array("attr" => array("class" => "gro_name span3")));
        echo "</td>
\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "targetlevel", array()), 'widget', array("attr" => array("class" => "gro_targetlevel span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "startdate", array()), 'widget', array("attr" => array("class" => "gro_start span3")));
        echo "</td>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "enddate", array()), 'widget', array("attr" => array("class" => "gro_end span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan='4'>&nbsp;</td></tr>
\t</table>";
        
        $__internal_67c1a0f0279bae3b84f4595e1e3b70e5432e339804f0ad20c1c889f2eb62fc7d->leave($__internal_67c1a0f0279bae3b84f4595e1e3b70e5432e339804f0ad20c1c889f2eb62fc7d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:groupform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  53 => 12,  49 => 11,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* 	<div id="contract_group_errormsg"></div>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="27%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(group_form.name, {'attr' : {'class' : 'gro_name span3'}}) }}</td>*/
/* 			<td>{{ form_widget(group_form.targetlevel, {'attr' : {'class' : 'gro_targetlevel span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(group_form.startdate, {'attr' : {'class' : 'gro_start span3'}}) }}</td>*/
/* 			<td>{{ form_widget(group_form.enddate, {'attr' : {'class' : 'gro_end span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan='4'>&nbsp;</td></tr>*/
/* 	</table>*/
