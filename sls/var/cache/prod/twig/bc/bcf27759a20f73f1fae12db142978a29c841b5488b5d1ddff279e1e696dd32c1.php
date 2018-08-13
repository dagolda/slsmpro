<?php

/* BoAdminBundle:Typecontract:modalform.html.twig */
class __TwigTemplate_c52943463b09258c37121b5677e39ae03960d944b25c03f58f0518030419df0e extends Twig_Template
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
        $__internal_8385decd64455f6703fd75c0ad152753dd102409bfc6bda27833501dbedd139d = $this->env->getExtension("native_profiler");
        $__internal_8385decd64455f6703fd75c0ad152753dd102409bfc6bda27833501dbedd139d->enter($__internal_8385decd64455f6703fd75c0ad152753dd102409bfc6bda27833501dbedd139d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Typecontract:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reference", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">Details</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "details", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_8385decd64455f6703fd75c0ad152753dd102409bfc6bda27833501dbedd139d->leave($__internal_8385decd64455f6703fd75c0ad152753dd102409bfc6bda27833501dbedd139d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Typecontract:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.reference) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.designation) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Details</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.details) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
