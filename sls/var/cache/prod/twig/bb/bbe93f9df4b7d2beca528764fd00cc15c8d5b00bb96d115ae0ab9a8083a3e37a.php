<?php

/* BoAdminBundle:Contracts:reopen.html.twig */
class __TwigTemplate_ff495c8f1254cf683d10b366ec099b2071efbe755817bdc85256931641514809 extends Twig_Template
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
        $__internal_2c8858037c759d9ebe246b01d3600729c123654bd4e15bec07aade28df55eb5f = $this->env->getExtension("native_profiler");
        $__internal_2c8858037c759d9ebe246b01d3600729c123654bd4e15bec07aade28df55eb5f->enter($__internal_2c8858037c759d9ebe246b01d3600729c123654bd4e15bec07aade28df55eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:reopen.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th class=\"sty_label\">Notes</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reopen_form"]) ? $context["reopen_form"] : $this->getContext($context, "reopen_form")), "description", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_2c8858037c759d9ebe246b01d3600729c123654bd4e15bec07aade28df55eb5f->leave($__internal_2c8858037c759d9ebe246b01d3600729c123654bd4e15bec07aade28df55eb5f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:reopen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th class="sty_label">Notes</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(reopen_form.description) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
