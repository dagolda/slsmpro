<?php

/* BoAdminBundle:Contracts:contractualform.html.twig */
class __TwigTemplate_0da159a40cb3fd130090bd7fdda674ecccdc8e4c0c76aab82d6aa55c4d5497da extends Twig_Template
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
        $__internal_489094753a50336424e7546a2959c3ca15ebb0283665265da82a09089947c9d5 = $this->env->getExtension("native_profiler");
        $__internal_489094753a50336424e7546a2959c3ca15ebb0283665265da82a09089947c9d5->enter($__internal_489094753a50336424e7546a2959c3ca15ebb0283665265da82a09089947c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:contractualform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"27%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "name", array()), 'widget', array("attr" => array("class" => "con_name span3")));
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "email", array()), 'widget', array("attr" => array("class" => "con_email span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "phone", array()), 'widget', array("attr" => array("class" => "con_phone span3")));
        echo "</td>
\t\t\t<td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_form"]) ? $context["contractual_form"] : $this->getContext($context, "contractual_form")), "typecontract", array()), 'widget', array("attr" => array("class" => "cctypecontract span3")));
        echo "\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_489094753a50336424e7546a2959c3ca15ebb0283665265da82a09089947c9d5->leave($__internal_489094753a50336424e7546a2959c3ca15ebb0283665265da82a09089947c9d5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:contractualform.html.twig";
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
/*             <th width="27%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="27%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="27%" class="sty_label">{{'label.phone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="15%" class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(contractual_form.name, {'attr' : {'class' : 'con_name span3'}}) }}</td>*/
/* 			<td>{{ form_widget(contractual_form.email, {'attr' : {'class' : 'con_email span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(contractual_form.phone, {'attr' : {'class' : 'con_phone span3'}}) }}</td>*/
/* 			<td>{{ form_widget(contractual_form.typecontract, {'attr' : {'class' : 'cctypecontract span3'}}) }}			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
