<?php

/* BoAdminBundle:Securitycote:newform.html.twig */
class __TwigTemplate_5db2811e8f4e44914d9bc16be6961c399e7c886be1d1c61f287d336106064600 extends Twig_Template
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
        $__internal_6c5efca74c8668312d03dd8bca9d3b8da498687d827365f401d5bfc4af7436a8 = $this->env->getExtension("native_profiler");
        $__internal_6c5efca74c8668312d03dd8bca9d3b8da498687d827365f401d5bfc4af7436a8->enter($__internal_6c5efca74c8668312d03dd8bca9d3b8da498687d827365f401d5bfc4af7436a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"30%\" class=\"sty_label\">Employee</th>
            <th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td width=\"30%\">&nbsp;</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filenumber", array()), 'widget');
        echo "</td>
\t\t\t<td>&nbsp;</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requestdate", array()), 'widget');
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "receivedate", array()), 'widget');
        echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expirydate", array()), 'widget');
        echo "
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"3\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_6c5efca74c8668312d03dd8bca9d3b8da498687d827365f401d5bfc4af7436a8->leave($__internal_6c5efca74c8668312d03dd8bca9d3b8da498687d827365f401d5bfc4af7436a8_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  73 => 26,  67 => 23,  61 => 20,  54 => 16,  50 => 15,  46 => 14,  38 => 9,  34 => 8,  27 => 4,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="30%" class="sty_label">Employee</th>*/
/*             <th width="30%" class="sty_label">{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td width="30%">&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.employee) }}</td>	*/
/* 			<td>{{ form_widget(form.filenumber) }}</td>*/
/* 			<td>&nbsp;</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.requesteddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.expireddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.requestdate) }}*/
/* 			</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.receivedate) }}*/
/* 			</td>*/
/* 			<td>*/
/* 				{{ form_widget(form.expirydate) }}*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="3" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
