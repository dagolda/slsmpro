<?php

/* BoHomeBundle:Emppj:newform.html.twig */
class __TwigTemplate_7e2508b5deffcaffcab3f97c916b46dbcfbbf329e6d4551d20b726057eea1326 extends Twig_Template
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
        $__internal_697272abb6ea7c618a3b98892fd751551559c76ef72c9550689f86e6fe8fb52a = $this->env->getExtension("native_profiler");
        $__internal_697272abb6ea7c618a3b98892fd751551559c76ef72c9550689f86e6fe8fb52a->enter($__internal_697272abb6ea7c618a3b98892fd751551559c76ef72c9550689f86e6fe8fb52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Emppj:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "subject span3")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filename", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_697272abb6ea7c618a3b98892fd751551559c76ef72c9550689f86e6fe8fb52a->leave($__internal_697272abb6ea7c618a3b98892fd751551559c76ef72c9550689f86e6fe8fb52a_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Emppj:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="80%" class="sty_label">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name, {'attr' : {'class' : 'subject span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.filename'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr> */
/* 		<tr>*/
/* 			<td>{{ form_widget(form.filename) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
