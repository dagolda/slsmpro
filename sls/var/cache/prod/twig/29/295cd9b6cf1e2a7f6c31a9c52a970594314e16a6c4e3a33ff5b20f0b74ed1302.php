<?php

/* BoAdminBundle:Local:editform.html.twig */
class __TwigTemplate_ddc5470cd38082bb2d9b8cdc99f87bf5b7facd8f85687302091baddf7e2ac9f4 extends Twig_Template
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
        $__internal_270362251682aee73427a9a0a104c651d8d7e292981ca719fe72e7a8969f1232 = $this->env->getExtension("native_profiler");
        $__internal_270362251682aee73427a9a0a104c651d8d7e292981ca719fe72e7a8969f1232->enter($__internal_270362251682aee73427a9a0a104c651d8d7e292981ca719fe72e7a8969f1232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Local:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"30%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.reference", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"30%\" class=\"sty_label\">Campus</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reference", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "designation", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "campus", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>\t\t\t
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.dimension", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.capacity", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">Max</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dimension", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "capability", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "max", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contracttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "categoryroom", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typecontract", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "status", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "available", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"3\" class=\"sty_label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.details", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"3\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "details", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_270362251682aee73427a9a0a104c651d8d7e292981ca719fe72e7a8969f1232->leave($__internal_270362251682aee73427a9a0a104c651d8d7e292981ca719fe72e7a8969f1232_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Local:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  120 => 43,  113 => 39,  109 => 38,  103 => 35,  99 => 34,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  71 => 21,  67 => 20,  63 => 19,  56 => 15,  52 => 14,  45 => 10,  41 => 9,  37 => 8,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="30%" class="sty_label">{{'label.reference'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="30%" class="sty_label">Campus</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.reference) }}</td>*/
/* 			<td>{{ form_widget(edit_form.designation) }}</td>*/
/* 			<td>{{ form_widget(edit_form.campus) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>			*/
/* 			<th class="sty_label">{{'label.dimension'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.capacity'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">Max</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.dimension) }}</td>*/
/* 			<td>{{ form_widget(edit_form.capability) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.max) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.contracttype'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.categoryroom) }}</td>*/
/* 			<td>{{ form_widget(edit_form.typecontract) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.available'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.status) }}</td>*/
/* 			<td>{{ form_widget(edit_form.available) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="3" class="sty_label">{{'label.details'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="3">{{ form_widget(edit_form.details) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
