<?php

/* BoAdminBundle:TicketContacts:modalform.html.twig */
class __TwigTemplate_57bdd0feeed595d3e2c73a1663234c6219e2aeeaaa06d6ab6e72ad227d06277d extends Twig_Template
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
        $__internal_82401281e0358c4cf6538e8aa0c2690abf4bcf022b7b778be94fe79264cc9bc9 = $this->env->getExtension("native_profiler");
        $__internal_82401281e0358c4cf6538e8aa0c2690abf4bcf022b7b778be94fe79264cc9bc9->enter($__internal_82401281e0358c4cf6538e8aa0c2690abf4bcf022b7b778be94fe79264cc9bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:TicketContacts:modalform.html.twig"));

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
\t\t<tr>
            <th class=\"sty_label\" colspan=\"2\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectemployee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 16
        $this->loadTemplate("BoAdminBundle:TicketContacts:selectemployee.html.twig", "BoAdminBundle:TicketContacts:modalform.html.twig", 16)->display($context);
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">
\t\t\t\t<input type=\"hidden\" id=\"ids_employee\"  value=\"\"/>
\t\t\t</td>
\t\t</tr>
\t</table>
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        
        $__internal_82401281e0358c4cf6538e8aa0c2690abf4bcf022b7b778be94fe79264cc9bc9->leave($__internal_82401281e0358c4cf6538e8aa0c2690abf4bcf022b7b778be94fe79264cc9bc9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:TicketContacts:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  56 => 16,  50 => 13,  43 => 9,  39 => 8,  33 => 5,  29 => 4,  22 => 1,);
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
/* 		<tr>*/
/*             <th class="sty_label" colspan="2">{{'action.selectemployee'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{% include 'BoAdminBundle:TicketContacts:selectemployee.html.twig' %}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<td colspan="2">*/
/* 				<input type="hidden" id="ids_employee"  value=""/>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	{{ form_rest(form) }}*/
