<?php

/* BoAdminBundle:Contracts:cbillingform.html.twig */
class __TwigTemplate_5ce04206cc0fd6a742a2d912b99d890e7cb4517d8d7484f293214980da37d7c9 extends Twig_Template
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
        $__internal_a862eb1cf4b0a6e93108a98c8a72283f44ea7e3db26b009c50d9a1243640f955 = $this->env->getExtension("native_profiler");
        $__internal_a862eb1cf4b0a6e93108a98c8a72283f44ea7e3db26b009c50d9a1243640f955->enter($__internal_a862eb1cf4b0a6e93108a98c8a72283f44ea7e3db26b009c50d9a1243640f955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:cbillingform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"30%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cbilling_form"]) ? $context["cbilling_form"] : $this->getContext($context, "cbilling_form")), "name", array()), 'widget', array("attr" => array("class" => "cb_name span3")));
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cbilling_form"]) ? $context["cbilling_form"] : $this->getContext($context, "cbilling_form")), "email", array()), 'widget', array("attr" => array("class" => "cb_email span3")));
        echo "</td>\t\t
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cbilling_form"]) ? $context["cbilling_form"] : $this->getContext($context, "cbilling_form")), "phone", array()), 'widget', array("attr" => array("class" => "cb_phone span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_a862eb1cf4b0a6e93108a98c8a72283f44ea7e3db26b009c50d9a1243640f955->leave($__internal_a862eb1cf4b0a6e93108a98c8a72283f44ea7e3db26b009c50d9a1243640f955_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:cbillingform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="30%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(cbilling_form.name, {'attr' : {'class' : 'cb_name span3'}}) }}</td>*/
/* 			<td>{{ form_widget(cbilling_form.email, {'attr' : {'class' : 'cb_email span3'}}) }}</td>		*/
/* 			<td>{{ form_widget(cbilling_form.phone, {'attr' : {'class' : 'cb_phone span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
