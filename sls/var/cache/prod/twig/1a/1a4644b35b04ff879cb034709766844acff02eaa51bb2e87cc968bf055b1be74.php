<?php

/* BoAdminBundle:TicketContacts:editform.html.twig */
class __TwigTemplate_5d89c8381b3d2b575dbc9af5f9d6fb01187eeabfc2f60bfe001f0c8bc1d51d1e extends Twig_Template
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
        $__internal_cd365ecd044d5f1a5cbfbe21ac518a3f14f0110c6674d97bbdf4d452f5934ace = $this->env->getExtension("native_profiler");
        $__internal_cd365ecd044d5f1a5cbfbe21ac518a3f14f0110c6674d97bbdf4d452f5934ace->enter($__internal_cd365ecd044d5f1a5cbfbe21ac518a3f14f0110c6674d97bbdf4d452f5934ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TicketContacts:editform.html.twig"));

        // line 1
        echo "\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cc", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t";
        // line 14
        $this->loadTemplate("BoAdminBundle:TicketContacts:employee.html.twig", "BoAdminBundle:TicketContacts:editform.html.twig", 14)->display($context);
        
        $__internal_cd365ecd044d5f1a5cbfbe21ac518a3f14f0110c6674d97bbdf4d452f5934ace->leave($__internal_cd365ecd044d5f1a5cbfbe21ac518a3f14f0110c6674d97bbdf4d452f5934ace_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TicketContacts:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  50 => 13,  43 => 9,  39 => 8,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* 	{{ form_errors(form) }}*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.cc'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name) }}</td>	*/
/* 			<td>{{ form_widget(form.cc) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{{ form_rest(form) }}*/
/* 	{%include "BoAdminBundle:TicketContacts:employee.html.twig"%}*/
