<?php

/* BoAdminBundle:Securitycote:modalform.html.twig */
class __TwigTemplate_5cb0a089cab16c86c25b5dbdc871fb7a75b44db60d4348cafdb2f629f1bb2ebc extends Twig_Template
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
        $__internal_6ca18feca06a5c2b2567ef626ca8cee672732d1de8d26f24b9fc86aa4b36c5fc = $this->env->getExtension("native_profiler");
        $__internal_6ca18feca06a5c2b2567ef626ca8cee672732d1de8d26f24b9fc86aa4b36c5fc->enter($__internal_6ca18feca06a5c2b2567ef626ca8cee672732d1de8d26f24b9fc86aa4b36c5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Securitycote:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">Employee</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.filenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filenumber", array()), 'widget');
        echo "</td>
\t\t\t<td>&nbsp;</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.requesteddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.receiveddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requestdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "receivedate", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expireddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expirydate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">Comment</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_6ca18feca06a5c2b2567ef626ca8cee672732d1de8d26f24b9fc86aa4b36c5fc->leave($__internal_6ca18feca06a5c2b2567ef626ca8cee672732d1de8d26f24b9fc86aa4b36c5fc_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Securitycote:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  72 => 25,  66 => 22,  59 => 18,  55 => 17,  49 => 14,  45 => 13,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">Employee</th>*/
/*             <th width="40%" class="sty_label">{{'label.filenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.employee) }}</td>	*/
/* 			<td>{{ form_widget(form.filenumber) }}</td>*/
/* 			<td>&nbsp;</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.requesteddate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.receiveddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.requestdate) }}</td>*/
/* 			<td>{{ form_widget(form.receivedate) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.expireddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.expirydate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="2" class="sty_label">Comment</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
