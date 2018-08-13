<?php

/* BoAdminBundle:Typecontract:editform.html.twig */
class __TwigTemplate_05cc581dc691f26e2a7fa49cfb028f60a66619c03a47edfbcefbc826fc40ad70 extends Twig_Template
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
        $__internal_f9d4c6a3a7f218f5171142f41523097a9c0c5be2b345ffa980608fa3775cd6da = $this->env->getExtension("native_profiler");
        $__internal_f9d4c6a3a7f218f5171142f41523097a9c0c5be2b345ffa980608fa3775cd6da->enter($__internal_f9d4c6a3a7f218f5171142f41523097a9c0c5be2b345ffa980608fa3775cd6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Typecontract:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "designation", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">Details</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "details", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_f9d4c6a3a7f218f5171142f41523097a9c0c5be2b345ffa980608fa3775cd6da->leave($__internal_f9d4c6a3a7f218f5171142f41523097a9c0c5be2b345ffa980608fa3775cd6da_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Typecontract:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.reference) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.designation) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="2" class="sty_label">Details</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(edit_form.details) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
