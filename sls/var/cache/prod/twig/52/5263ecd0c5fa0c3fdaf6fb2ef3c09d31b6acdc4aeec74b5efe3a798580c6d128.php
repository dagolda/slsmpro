<?php

/* BoAdminBundle:Otherprices:newform.html.twig */
class __TwigTemplate_e17bd2313dbd07b1932c327b636a26bf68b7e35b2aa710160dbe49c1aadc7d0c extends Twig_Template
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
        $__internal_833b0fbfa04574addf46ba178103d71844018aac41ef8412f9ef1dd176408828 = $this->env->getExtension("native_profiler");
        $__internal_833b0fbfa04574addf46ba178103d71844018aac41ef8412f9ef1dd176408828->enter($__internal_833b0fbfa04574addf46ba178103d71844018aac41ef8412f9ef1dd176408828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Otherprices:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>           
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contracttype", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "language", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ftorpt", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.priceonsite", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.priceoffsite", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceonsite", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priceoffsite", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"3\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.feature", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "feature", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_833b0fbfa04574addf46ba178103d71844018aac41ef8412f9ef1dd176408828->leave($__internal_833b0fbfa04574addf46ba178103d71844018aac41ef8412f9ef1dd176408828_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Otherprices:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  76 => 23,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>           */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.contracttype) }}</td>*/
/* 			<td>{{ form_widget(form.language) }}</td>*/
/* 			<td>{{ form_widget(form.ftorpt) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.priceonsite'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.priceoffsite'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td>{{ form_widget(form.priceonsite) }}</td>	*/
/* 			<td>{{ form_widget(form.priceoffsite) }}</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="3">{{'label.feature'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.feature) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
