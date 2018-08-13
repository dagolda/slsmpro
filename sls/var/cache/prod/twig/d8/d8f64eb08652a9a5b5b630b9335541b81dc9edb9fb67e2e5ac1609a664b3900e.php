<?php

/* BoAdminBundle:Status:newform.html.twig */
class __TwigTemplate_8d64a1edf333e86f01765357be957e8e8936a0377f2ee071ad0f8522068f8ee3 extends Twig_Template
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
        $__internal_850f85cf6e7ecb7a0f55e770de92904fba60f6c4468684417be318d3beefd89d = $this->env->getExtension("native_profiler");
        $__internal_850f85cf6e7ecb7a0f55e770de92904fba60f6c4468684417be318d3beefd89d->enter($__internal_850f85cf6e7ecb7a0f55e770de92904fba60f6c4468684417be318d3beefd89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Status:newform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "statusname", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_850f85cf6e7ecb7a0f55e770de92904fba60f6c4468684417be318d3beefd89d->leave($__internal_850f85cf6e7ecb7a0f55e770de92904fba60f6c4468684417be318d3beefd89d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Status:newform.html.twig";
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
/* 			<td>{{ form_widget(form.statusname) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
