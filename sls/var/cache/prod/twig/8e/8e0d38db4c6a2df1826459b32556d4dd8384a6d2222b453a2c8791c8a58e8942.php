<?php

/* BoAdminBundle:Contractual:newform.html.twig */
class __TwigTemplate_35aeac9da02110ef482c4808876af3c3acde151accf7260c52f9304b1f85d2ec extends Twig_Template
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
        $__internal_70b6b9862e9f4308433c64339dc003be3278fc099670361a13aeb308fe746600 = $this->env->getExtension("native_profiler");
        $__internal_70b6b9862e9f4308433c64339dc003be3278fc099670361a13aeb308fe746600->enter($__internal_70b6b9862e9f4308433c64339dc003be3278fc099670361a13aeb308fe746600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contractual:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "email", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "phone", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "typecontract", array()), 'widget');
        echo "
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_70b6b9862e9f4308433c64339dc003be3278fc099670361a13aeb308fe746600->leave($__internal_70b6b9862e9f4308433c64339dc003be3278fc099670361a13aeb308fe746600_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contractual:newform.html.twig";
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
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(contractual_form.name) }}</td>*/
/* 			<td>{{ form_widget(contractual_form.email) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(contractual_form.phone) }}</td>*/
/* 			<td>{{ form_widget(contractual_form.typecontract) }}*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
