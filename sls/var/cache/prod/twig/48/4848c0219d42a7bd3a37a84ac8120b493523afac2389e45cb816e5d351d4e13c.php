<?php

/* BoAdminBundle:Group:editform.html.twig */
class __TwigTemplate_551844b0282f83128265a90e8a84ddaf8d4dd0777a47d6e046c27f1b7673a37b extends Twig_Template
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
        $__internal_69618cec916874369336b6dc537de3e6b04a472a32bd0f016901a783ca9faecf = $this->env->getExtension("native_profiler");
        $__internal_69618cec916874369336b6dc537de3e6b04a472a32bd0f016901a783ca9faecf->enter($__internal_69618cec916874369336b6dc537de3e6b04a472a32bd0f016901a783ca9faecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Group:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "targetlevel", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t</table>
";
        
        $__internal_69618cec916874369336b6dc537de3e6b04a472a32bd0f016901a783ca9faecf->leave($__internal_69618cec916874369336b6dc537de3e6b04a472a32bd0f016901a783ca9faecf_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Group:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.name) }}</td>*/
/* 			<td>{{ form_widget(edit_form.targetlevel) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>					*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.startdate) }}</td>*/
/* 			<td>{{ form_widget(edit_form.enddate) }}</td>						*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 	</table>*/
/* */
