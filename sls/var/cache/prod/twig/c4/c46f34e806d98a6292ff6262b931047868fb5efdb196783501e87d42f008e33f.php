<?php

/* BoAdminBundle:Contracts:tspresence.html.twig */
class __TwigTemplate_a14981d18c2771fdf0443ef8ddd6f78f0bad8327a89a906065f0e1f24203049a extends Twig_Template
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
        $__internal_46784200872e71d1186f33a1abd646cb8dcded57117dd201fc9d86a4bc207edf = $this->env->getExtension("native_profiler");
        $__internal_46784200872e71d1186f33a1abd646cb8dcded57117dd201fc9d86a4bc207edf->enter($__internal_46784200872e71d1186f33a1abd646cb8dcded57117dd201fc9d86a4bc207edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:tspresence.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>\t\t\t
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.month", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.year", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsp_form"]) ? $context["tsp_form"] : $this->getContext($context, "tsp_form")), "month", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tsp_form"]) ? $context["tsp_form"] : $this->getContext($context, "tsp_form")), "year", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_46784200872e71d1186f33a1abd646cb8dcded57117dd201fc9d86a4bc207edf->leave($__internal_46784200872e71d1186f33a1abd646cb8dcded57117dd201fc9d86a4bc207edf_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:tspresence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>			*/
/* 			<th width="40%" class="sty_label">{{'label.month'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.year'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(tsp_form.month) }}</td>*/
/* 			<td>{{ form_widget(tsp_form.year) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
