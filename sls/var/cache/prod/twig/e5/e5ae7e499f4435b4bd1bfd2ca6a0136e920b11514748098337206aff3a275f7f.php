<?php

/* BoAdminBundle:Color:newform.html.twig */
class __TwigTemplate_cf87df7cb9af3d59e4ddeeed82f974b47d84ff8977a254912d8b22d7242c63c8 extends Twig_Template
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
        $__internal_33972f4d083d090ad2c2e5d694877d9f90d41a6430760de61c27fc0d87259eb2 = $this->env->getExtension("native_profiler");
        $__internal_33972f4d083d090ad2c2e5d694877d9f90d41a6430760de61c27fc0d87259eb2->enter($__internal_33972f4d083d090ad2c2e5d694877d9f90d41a6430760de61c27fc0d87259eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Color:newform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_33972f4d083d090ad2c2e5d694877d9f90d41a6430760de61c27fc0d87259eb2->leave($__internal_33972f4d083d090ad2c2e5d694877d9f90d41a6430760de61c27fc0d87259eb2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Color:newform.html.twig";
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
/* 			<td>{{ form_widget(form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
