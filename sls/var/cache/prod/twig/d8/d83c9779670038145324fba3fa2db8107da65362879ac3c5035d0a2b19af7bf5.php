<?php

/* BoAdminBundle:Tadmin:modalform.html.twig */
class __TwigTemplate_7a22f159714c93bf3fb585838f743612a7b5250685c40b0ce5e97240fe6404dc extends Twig_Template
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
        $__internal_56fe731f14918f4798c974e8f650ddf1340356de35a41a068fb29ab32ac132da = $this->env->getExtension("native_profiler");
        $__internal_56fe731f14918f4798c974e8f650ddf1340356de35a41a068fb29ab32ac132da->enter($__internal_56fe731f14918f4798c974e8f650ddf1340356de35a41a068fb29ab32ac132da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tadmin:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th class=\"sty_label\" width=\"50%\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\" width=\"50%\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td width=\"50%\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "startdate", array()), 'widget');
        echo "</td>
\t\t\t<td width=\"50%\">";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "startam", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "endam", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.endam", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "startpm", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "endpm", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\" colspan=\"2\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hour", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "hour", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\" colspan=\"2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.description", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["tadmin_form"]) ? $context["tadmin_form"] : $this->getContext($context, "tadmin_form")), "note", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_56fe731f14918f4798c974e8f650ddf1340356de35a41a068fb29ab32ac132da->leave($__internal_56fe731f14918f4798c974e8f650ddf1340356de35a41a068fb29ab32ac132da_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tadmin:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  102 => 37,  95 => 33,  89 => 30,  82 => 26,  78 => 25,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th class="sty_label" width="50%">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label" width="50%">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td width="50%">{{ form_widget(tadmin_form.startdate) }}</td>*/
/* 			<td width="50%">{{ form_widget(tadmin_form.enddate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(tadmin_form.startam) }}</td>*/
/* 			<td>{{ form_widget(tadmin_form.endam) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.startam'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.endam'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(tadmin_form.startpm) }}</td>*/
/* 			<td>{{ form_widget(tadmin_form.endpm) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label" colspan="2">{{'label.hour'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(tadmin_form.hour) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label" colspan="2">{{'label.description'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(tadmin_form.note) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
