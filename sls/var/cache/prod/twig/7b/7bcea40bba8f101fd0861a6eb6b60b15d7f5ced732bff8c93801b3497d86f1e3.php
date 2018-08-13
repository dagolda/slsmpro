<?php

/* BoHomeBundle:Default:ticketform.html.twig */
class __TwigTemplate_776de7bcf59f079609dd5dd04242805d29e87934b5fa4440f080e0f63a974d6c extends Twig_Template
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
        $__internal_b788085fa9a7d9976d9e9cb0740ae9af774a83331c32f227b966e9954d4ae70c = $this->env->getExtension("native_profiler");
        $__internal_b788085fa9a7d9976d9e9cb0740ae9af774a83331c32f227b966e9954d4ae70c->enter($__internal_b788085fa9a7d9976d9e9cb0740ae9af774a83331c32f227b966e9954d4ae70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:ticketform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subject", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), "contacts", array()), 'widget', array("attr" => array("class" => "contacts span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filename", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), "filename", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.message", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr> 
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), "comments", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ticketform"]) ? $context["ticketform"] : $this->getContext($context, "ticketform")), "subject", array()), 'widget', array("attr" => array("class" => "subject span3")));
        echo "
";
        
        $__internal_b788085fa9a7d9976d9e9cb0740ae9af774a83331c32f227b966e9954d4ae70c->leave($__internal_b788085fa9a7d9976d9e9cb0740ae9af774a83331c32f227b966e9954d4ae70c_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:ticketform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  58 => 20,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="80%" class="sty_label">{{'label.subject'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(ticketform.contacts, {'attr' : {'class' : 'contacts span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(ticketform.filename) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.message'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(ticketform.comments) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	{{ form_widget(ticketform.subject, {'attr' : {'class' : 'subject span3'}}) }}*/
/* */
