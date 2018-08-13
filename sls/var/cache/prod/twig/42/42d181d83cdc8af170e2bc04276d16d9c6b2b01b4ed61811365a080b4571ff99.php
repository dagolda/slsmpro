<?php

/* BoAdminBundle:Securitycote:editform.html.twig */
class __TwigTemplate_5b4cf6d123c26496d8c4db32146e144aa978ea2f0e187657dfe7f616e153cfd1 extends Twig_Template
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
        $__internal_9e0563c9773a6f09605f4b54b2c34e8ce29d09ec6272016b703ce29499622595 = $this->env->getExtension("native_profiler");
        $__internal_9e0563c9773a6f09605f4b54b2c34e8ce29d09ec6272016b703ce29499622595->enter($__internal_9e0563c9773a6f09605f4b54b2c34e8ce29d09ec6272016b703ce29499622595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<td width=\"30%\">&nbsp;</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "name", array()), "html", null, true);
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
        
        $__internal_9e0563c9773a6f09605f4b54b2c34e8ce29d09ec6272016b703ce29499622595->leave($__internal_9e0563c9773a6f09605f4b54b2c34e8ce29d09ec6272016b703ce29499622595_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  78 => 26,  72 => 23,  66 => 20,  59 => 16,  55 => 15,  51 => 14,  43 => 9,  37 => 8,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="30%" class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="30%" class="sty_label">{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<td width="30%">&nbsp;</td>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{employee.firstname}} {{employee.name}}</td>	*/
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
