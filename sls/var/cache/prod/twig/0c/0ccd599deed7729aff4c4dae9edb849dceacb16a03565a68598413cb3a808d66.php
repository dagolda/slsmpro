<?php

/* BoAdminBundle:Contractual:editform.html.twig */
class __TwigTemplate_9e273170e11700379039c78be0962ccb3904c24ea66f482ee9b2b76dade113dd extends Twig_Template
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
        $__internal_79110e38acfed26190c064f556f50774684f0933934ca319a6878800d5ddcd6c = $this->env->getExtension("native_profiler");
        $__internal_79110e38acfed26190c064f556f50774684f0933934ca319a6878800d5ddcd6c->enter($__internal_79110e38acfed26190c064f556f50774684f0933934ca319a6878800d5ddcd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contractual:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), "email", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), "phone", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contractual_editform"]) ? $context["contractual_editform"] : $this->getContext($context, "contractual_editform")), "typecontract", array()), 'widget');
        echo "
\t\t\t</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_79110e38acfed26190c064f556f50774684f0933934ca319a6878800d5ddcd6c->leave($__internal_79110e38acfed26190c064f556f50774684f0933934ca319a6878800d5ddcd6c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contractual:editform.html.twig";
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
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(contractual_editform.name) }}</td>*/
/* 			<td>{{ form_widget(contractual_editform.email) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Phone</th>*/
/* 			<th class="sty_label">Contract type</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(contractual_editform.phone) }}</td>*/
/* 			<td>{{ form_widget(contractual_editform.typecontract) }}*/
/* 			</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
