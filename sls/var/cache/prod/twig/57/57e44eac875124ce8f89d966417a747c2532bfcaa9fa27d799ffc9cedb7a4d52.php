<?php

/* BoAdminBundle:Employee:statusnewform.html.twig */
class __TwigTemplate_d2df5e98f47d2cb0d32a13403542ded6afc9f5390d1ccd7cba2aad7b5f671203 extends Twig_Template
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
        $__internal_008cbb03e596cbd47f80c6c6b876850798ceaa64eb676e40c4ac00a069842336 = $this->env->getExtension("native_profiler");
        $__internal_008cbb03e596cbd47f80c6c6b876850798ceaa64eb676e40c4ac00a069842336->enter($__internal_008cbb03e596cbd47f80c6c6b876850798ceaa64eb676e40c4ac00a069842336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:statusnewform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["status_form"]) ? $context["status_form"] : $this->getContext($context, "status_form")), "statusname", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_008cbb03e596cbd47f80c6c6b876850798ceaa64eb676e40c4ac00a069842336->leave($__internal_008cbb03e596cbd47f80c6c6b876850798ceaa64eb676e40c4ac00a069842336_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:statusnewform.html.twig";
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
/* 			<td>{{ form_widget(status_form.statusname) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
