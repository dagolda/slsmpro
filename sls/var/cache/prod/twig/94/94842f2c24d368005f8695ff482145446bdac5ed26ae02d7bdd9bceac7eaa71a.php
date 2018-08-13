<?php

/* BoAdminBundle:Rubric:newform.html.twig */
class __TwigTemplate_addd0fa5d5099839ada3bf0b75231e7246d8ff2d6f3d4e9578e8b9389aee99ad extends Twig_Template
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
        $__internal_a22f3d4551d36b104f3f1add080946faf1d4be0359d3a6db63b238277ac6d1c2 = $this->env->getExtension("native_profiler");
        $__internal_a22f3d4551d36b104f3f1add080946faf1d4be0359d3a6db63b238277ac6d1c2->enter($__internal_a22f3d4551d36b104f3f1add080946faf1d4be0359d3a6db63b238277ac6d1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (english)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameen", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (french)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namefr", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_a22f3d4551d36b104f3f1add080946faf1d4be0359d3a6db63b238277ac6d1c2->leave($__internal_a22f3d4551d36b104f3f1add080946faf1d4be0359d3a6db63b238277ac6d1c2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (english)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.nameen) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (french)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.namefr) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
