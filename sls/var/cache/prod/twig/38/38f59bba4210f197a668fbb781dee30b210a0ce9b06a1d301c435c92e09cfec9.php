<?php

/* BoAdminBundle:Contracts:coordinatorform.html.twig */
class __TwigTemplate_4030a35ea28341807ef8125de87e7b5f784cf46906dac9766845e3d9d465fbcc extends Twig_Template
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
        $__internal_0115d118098c7d516e85be389c11274982b4df088b79068011e14e368cd6b4e7 = $this->env->getExtension("native_profiler");
        $__internal_0115d118098c7d516e85be389c11274982b4df088b79068011e14e368cd6b4e7->enter($__internal_0115d118098c7d516e85be389c11274982b4df088b79068011e14e368cd6b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:coordinatorform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"27%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fullname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"27%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"27%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"15%\" class=\"sty_label\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["coordinator_form"]) ? $context["coordinator_form"] : $this->getContext($context, "coordinator_form")), "name", array()), 'widget', array("attr" => array("class" => "co_name span3")));
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["coordinator_form"]) ? $context["coordinator_form"] : $this->getContext($context, "coordinator_form")), "email", array()), 'widget', array("attr" => array("class" => "co_email span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["coordinator_form"]) ? $context["coordinator_form"] : $this->getContext($context, "coordinator_form")), "phone", array()), 'widget', array("attr" => array("class" => "co_phone span3")));
        echo "</td>
\t\t\t<td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["coordinator_form"]) ? $context["coordinator_form"] : $this->getContext($context, "coordinator_form")), "typecontract", array()), 'widget', array("attr" => array("class" => "cotypecontract span3")));
        echo "\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"4\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_0115d118098c7d516e85be389c11274982b4df088b79068011e14e368cd6b4e7->leave($__internal_0115d118098c7d516e85be389c11274982b4df088b79068011e14e368cd6b4e7_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:coordinatorform.html.twig";
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
/*             <th width="27%" class="sty_label">{{'label.fullname'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="27%" class="sty_label">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(coordinator_form.name, {'attr' : {'class' : 'co_name span3'}}) }}</td>*/
/* 			<td>{{ form_widget(coordinator_form.email, {'attr' : {'class' : 'co_email span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(coordinator_form.phone, {'attr' : {'class' : 'co_phone span3'}}) }}</td>*/
/* 			<td>{{ form_widget(coordinator_form.typecontract, {'attr' : {'class' : 'cotypecontract span3'}}) }}			*/
/* 		</tr>*/
/* 		<tr><td colspan="4">&nbsp;</td></tr>*/
/* 	</table>*/
