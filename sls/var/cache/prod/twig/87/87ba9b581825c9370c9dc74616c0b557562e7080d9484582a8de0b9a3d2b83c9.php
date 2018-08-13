<?php

/* BoAdminBundle:BillingContact:newform.html.twig */
class __TwigTemplate_31dc845b2fd42ea1fc6fc288e4edaaa12b4043db27df9d95735fc1f70b61ac0d extends Twig_Template
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
        $__internal_3c5065e0e49e33992f9e59f6a485c8982af2ed0e691419fac47ed06aae11f135 = $this->env->getExtension("native_profiler");
        $__internal_3c5065e0e49e33992f9e59f6a485c8982af2ed0e691419fac47ed06aae11f135->enter($__internal_3c5065e0e49e33992f9e59f6a485c8982af2ed0e691419fac47ed06aae11f135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:BillingContact:newform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">Phone</th>
\t\t\t<th class=\"sty_label\">&nbsp;</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
\t\t\t<td>&nbsp;
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_3c5065e0e49e33992f9e59f6a485c8982af2ed0e691419fac47ed06aae11f135->leave($__internal_3c5065e0e49e33992f9e59f6a485c8982af2ed0e691419fac47ed06aae11f135_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:BillingContact:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name) }}</td>*/
/* 			<td>{{ form_widget(form.email) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Phone</th>*/
/* 			<th class="sty_label">&nbsp;</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.phone) }}</td>*/
/* 			<td>&nbsp;*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
