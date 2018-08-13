<?php

/* BoAdminBundle:Coordinator:modalform.html.twig */
class __TwigTemplate_94869dda259c884b89091645411510277d070393d80ac48221bfa1dd7eb2b6ba extends Twig_Template
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
        $__internal_ac5a7bcb31b2aaf9ce966a2fdde729008f3bcc7028e121d43ec3aacd1c95a778 = $this->env->getExtension("native_profiler");
        $__internal_ac5a7bcb31b2aaf9ce966a2fdde729008f3bcc7028e121d43ec3aacd1c95a778->enter($__internal_ac5a7bcb31b2aaf9ce966a2fdde729008f3bcc7028e121d43ec3aacd1c95a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.fullname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "fullname span3")));
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">Phone</th>
\t\t\t<th class=\"sty_label\">Contract type</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget');
        echo "
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_ac5a7bcb31b2aaf9ce966a2fdde729008f3bcc7028e121d43ec3aacd1c95a778->leave($__internal_ac5a7bcb31b2aaf9ce966a2fdde729008f3bcc7028e121d43ec3aacd1c95a778_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.fullname'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.name, {'attr' : {'class' : 'fullname span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.email) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Phone</th>*/
/* 			<th class="sty_label">Contract type</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.phone) }}</td>*/
/* 			<td>{{ form_widget(form.typecontract) }}*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
