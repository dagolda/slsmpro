<?php

/* BoAdminBundle:Contracts:closeform.html.twig */
class __TwigTemplate_947dd5d91bb37e2f5b204678e90773b86d231bf7336a58585f1a23cdb17f271a extends Twig_Template
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
        $__internal_d76da3c0742ac2c2d32196c9a3bb8c3da379484584ce409ca808a2cb87e12c13 = $this->env->getExtension("native_profiler");
        $__internal_d76da3c0742ac2c2d32196c9a3bb8c3da379484584ce409ca808a2cb87e12c13->enter($__internal_d76da3c0742ac2c2d32196c9a3bb8c3da379484584ce409ca808a2cb87e12c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:closeform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th class=\"sty_label\">Notes</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["close_form"]) ? $context["close_form"] : $this->getContext($context, "close_form")), "description", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_d76da3c0742ac2c2d32196c9a3bb8c3da379484584ce409ca808a2cb87e12c13->leave($__internal_d76da3c0742ac2c2d32196c9a3bb8c3da379484584ce409ca808a2cb87e12c13_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:closeform.html.twig";
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
/* 			<td>{{ form_widget(close_form.description) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
