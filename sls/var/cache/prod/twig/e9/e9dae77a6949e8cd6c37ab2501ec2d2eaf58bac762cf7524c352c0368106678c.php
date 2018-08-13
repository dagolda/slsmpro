<?php

/* BoAdminBundle:Color:editform.html.twig */
class __TwigTemplate_887c2657b078b541e6f1c61c64b5606b7968771708e31516a33f9e8694cef3de extends Twig_Template
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
        $__internal_8330eb5389a996243f1437400fa70eeefdf1d3efb1e950a849b4375616fb7ecd = $this->env->getExtension("native_profiler");
        $__internal_8330eb5389a996243f1437400fa70eeefdf1d3efb1e950a849b4375616fb7ecd->enter($__internal_8330eb5389a996243f1437400fa70eeefdf1d3efb1e950a849b4375616fb7ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_8330eb5389a996243f1437400fa70eeefdf1d3efb1e950a849b4375616fb7ecd->leave($__internal_8330eb5389a996243f1437400fa70eeefdf1d3efb1e950a849b4375616fb7ecd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
