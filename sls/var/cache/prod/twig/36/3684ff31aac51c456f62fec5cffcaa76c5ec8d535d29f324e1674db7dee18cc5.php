<?php

/* BoAdminBundle:Employee:languagenewform.html.twig */
class __TwigTemplate_cecf5db50084dcec1dda6b963a80a288a663c284e15e4813d30506cb46fe6d77 extends Twig_Template
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
        $__internal_b5f0d5dae29708d268b2378dbf115c3d1966a7004e79b005d26239bce96a34dd = $this->env->getExtension("native_profiler");
        $__internal_b5f0d5dae29708d268b2378dbf115c3d1966a7004e79b005d26239bce96a34dd->enter($__internal_b5f0d5dae29708d268b2378dbf115c3d1966a7004e79b005d26239bce96a34dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:languagenewform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["language_form"]) ? $context["language_form"] : $this->getContext($context, "language_form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_b5f0d5dae29708d268b2378dbf115c3d1966a7004e79b005d26239bce96a34dd->leave($__internal_b5f0d5dae29708d268b2378dbf115c3d1966a7004e79b005d26239bce96a34dd_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:languagenewform.html.twig";
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
/* 			<td>{{ form_widget(language_form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
