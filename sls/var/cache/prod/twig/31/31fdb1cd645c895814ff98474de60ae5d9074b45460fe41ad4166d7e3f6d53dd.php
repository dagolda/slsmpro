<?php

/* BoAdminBundle:Company:editform.html.twig */
class __TwigTemplate_ff842d25a24d686e0a6d87b9254aedaf004df396be22d1e0969aa70086642d2b extends Twig_Template
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
        $__internal_2cc09b3150f8f48f0698eae1abf6f18ad323a2a46e0a2bff6750f3acafc58559 = $this->env->getExtension("native_profiler");
        $__internal_2cc09b3150f8f48f0698eae1abf6f18ad323a2a46e0a2bff6750f3acafc58559->enter($__internal_2cc09b3150f8f48f0698eae1abf6f18ad323a2a46e0a2bff6750f3acafc58559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Company:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.denomination", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nname", array()), 'widget');
        echo "</td>\t
\t\t</tr> 
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th width=\"80%\" class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.account", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "compte", array()), 'widget', array("attr" => array("class" => "account span3")));
        echo "</td>\t
\t\t</tr> 
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.messageen", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 21
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "messageen", array()), 'widget');
        echo "
\t\t\t</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.messagefr", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "messagefr", array()), 'widget');
        echo "
\t\t\t</td>\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_2cc09b3150f8f48f0698eae1abf6f18ad323a2a46e0a2bff6750f3acafc58559->leave($__internal_2cc09b3150f8f48f0698eae1abf6f18ad323a2a46e0a2bff6750f3acafc58559_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Company:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  71 => 27,  63 => 22,  59 => 21,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="80%" class="sty_label">{{'label.denomination'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.nname) }}</td>	*/
/* 		</tr> */
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="80%" class="sty_label">{{'label.account'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.compte, {'attr' : {'class' : 'account span3'}}) }}</td>	*/
/* 		</tr> */
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.messageen'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ tinymce_init() }}*/
/* 				{{ form_widget(form.messageen) }}*/
/* 			</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.messagefr'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.messagefr) }}*/
/* 			</td>		*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
