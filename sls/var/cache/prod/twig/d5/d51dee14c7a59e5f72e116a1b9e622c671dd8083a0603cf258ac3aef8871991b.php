<?php

/* BoAdminBundle:Contracts:groupnewform.html.twig */
class __TwigTemplate_50a32a638e8347c22d92e09599ca8d230643fedf500a52f0066a1c4719c2ffa2 extends Twig_Template
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
        $__internal_84a7c63979283957c883c4b5dcd348d84e960f65b96a1cec756eb6f0ce6e8308 = $this->env->getExtension("native_profiler");
        $__internal_84a7c63979283957c883c4b5dcd348d84e960f65b96a1cec756eb6f0ce6e8308->enter($__internal_84a7c63979283957c883c4b5dcd348d84e960f65b96a1cec756eb6f0ce6e8308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:groupnewform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"27%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"27%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"27%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "targetlevel", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["group_form"]) ? $context["group_form"] : $this->getContext($context, "group_form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan='4'>&nbsp;</td></tr>
\t</table>";
        
        $__internal_84a7c63979283957c883c4b5dcd348d84e960f65b96a1cec756eb6f0ce6e8308->leave($__internal_84a7c63979283957c883c4b5dcd348d84e960f65b96a1cec756eb6f0ce6e8308_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:groupnewform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  48 => 10,  44 => 9,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="27%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(group_form.name) }}</td>*/
/* 			<td>{{ form_widget(group_form.targetlevel) }}</td>	*/
/* 			<td>{{ form_widget(group_form.startdate) }}</td>*/
/* 			<td>{{ form_widget(group_form.enddate) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan='4'>&nbsp;</td></tr>*/
/* 	</table>*/
