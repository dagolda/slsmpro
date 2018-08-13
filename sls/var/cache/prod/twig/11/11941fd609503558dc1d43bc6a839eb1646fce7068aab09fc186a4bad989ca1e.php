<?php

/* BoAdminBundle:Advisors:editform.html.twig */
class __TwigTemplate_43e434eb8596df11c89211d8b608bc155d06574c3e2be52a17479a9e143221e5 extends Twig_Template
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
        $__internal_b5ef0fae4369e5c2b7faed96a1c6fca5127e9e300430c9a1addc9593c133e3b7 = $this->env->getExtension("native_profiler");
        $__internal_b5ef0fae4369e5c2b7faed96a1c6fca5127e9e300430c9a1addc9593c133e3b7->enter($__internal_b5ef0fae4369e5c2b7faed96a1c6fca5127e9e300430c9a1addc9593c133e3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Advisors:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pa", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        $this->loadTemplate("BoAdminBundle:Advisors:selectadvisor.html.twig", "BoAdminBundle:Advisors:editform.html.twig", 7)->display($context);
        echo "</td>
\t\t\t<td>";
        // line 8
        $this->loadTemplate("BoAdminBundle:Advisors:selectsubtitute.html.twig", "BoAdminBundle:Advisors:editform.html.twig", 8)->display($context);
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.creationdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typecontract", array()), 'widget', array("attr" => array("class" => "typecontract span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "creationdate", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.workfields", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.adminhour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr> 
\t\t\t<tr>\t
\t\t\t\t<td class='advisor_wkfield'>
\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "workfields", array()), 'widget');
        echo "\t\t\t\t
\t\t\t\t</td>
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adminhour", array()), 'widget');
        echo "</td>\t
\t\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_b5ef0fae4369e5c2b7faed96a1c6fca5127e9e300430c9a1addc9593c133e3b7->leave($__internal_b5ef0fae4369e5c2b7faed96a1c6fca5127e9e300430c9a1addc9593c133e3b7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Advisors:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  79 => 26,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.pa'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="40%" class="sty_label">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{% include 'BoAdminBundle:Advisors:selectadvisor.html.twig' %}</td>*/
/* 			<td>{% include 'BoAdminBundle:Advisors:selectsubtitute.html.twig' %}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.creationdate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.typecontract, {'attr' : {'class' : 'typecontract span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.creationdate) }}</td>	*/
/* 		</tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			<tr>*/
/* 				<th class="sty_label">{{'label.workfields'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th class="sty_label">{{'label.adminhour'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr> */
/* 			<tr>	*/
/* 				<td class='advisor_wkfield'>*/
/* 					{{ form_widget(edit_form.workfields) }}				*/
/* 				</td>*/
/* 			<td>{{ form_widget(edit_form.adminhour) }}</td>	*/
/* 			</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
