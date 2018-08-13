<?php

/* BoAdminBundle:Holidayslist:editform.html.twig */
class __TwigTemplate_c146d9c8bc73df307137cd69f46d0693f78ca6f343d0cb6c25745029f9f47371 extends Twig_Template
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
        $__internal_6d62958155c9bcc4024cd3707467db252c9b12c2695c1ef36b7094695adb47b6 = $this->env->getExtension("native_profiler");
        $__internal_6d62958155c9bcc4024cd3707467db252c9b12c2695c1ef36b7094695adb47b6->enter($__internal_6d62958155c9bcc4024cd3707467db252c9b12c2695c1ef36b7094695adb47b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Holidayslist:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th width=\"40%\" class=\"sty_label\">Date</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "designation", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.province", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "province", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_6d62958155c9bcc4024cd3707467db252c9b12c2695c1ef36b7094695adb47b6->leave($__internal_6d62958155c9bcc4024cd3707467db252c9b12c2695c1ef36b7094695adb47b6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Holidayslist:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  44 => 12,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th width="40%" class="sty_label">Date</th>*/
/* 			<th width="40%" class="sty_label">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ddate) }}</td>*/
/* 			<td>{{ form_widget(form.designation) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.province'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.province) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
