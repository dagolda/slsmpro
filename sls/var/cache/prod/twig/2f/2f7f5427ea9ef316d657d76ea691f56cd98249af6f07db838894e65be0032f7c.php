<?php

/* BoAdminBundle:Rubric:subeditform.html.twig */
class __TwigTemplate_8bff096f1044f3c08fdc95f2c8523ffaf58c373ae9f8e0e749a26aba537a1157 extends Twig_Template
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
        $__internal_e69def55397af1afeb81963102b2bcfb9f0cbb4213e085908486f9d4569dbb65 = $this->env->getExtension("native_profiler");
        $__internal_e69def55397af1afeb81963102b2bcfb9f0cbb4213e085908486f9d4569dbb65->enter($__internal_e69def55397af1afeb81963102b2bcfb9f0cbb4213e085908486f9d4569dbb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:subeditform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (english)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameen", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (french)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "namefr", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Order</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ordre", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_e69def55397af1afeb81963102b2bcfb9f0cbb4213e085908486f9d4569dbb65->leave($__internal_e69def55397af1afeb81963102b2bcfb9f0cbb4213e085908486f9d4569dbb65_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:subeditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  39 => 13,  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (english)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.nameen) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (french)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.namefr) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Order</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.ordre) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
