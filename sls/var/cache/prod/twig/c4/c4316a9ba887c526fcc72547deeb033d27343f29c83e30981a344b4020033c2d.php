<?php

/* BoAdminBundle:User:editform.html.twig */
class __TwigTemplate_def9ab36a97acfc1df2d78b441c3f440b9d0a7c569b1ee8302452c639addb79c extends Twig_Template
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
        $__internal_fbfdcd6a9e2063cdc9fd90a4672f97403aa026f7fc58c16c1a6d824da6866acf = $this->env->getExtension("native_profiler");
        $__internal_fbfdcd6a9e2063cdc9fd90a4672f97403aa026f7fc58c16c1a6d824da6866acf->enter($__internal_fbfdcd6a9e2063cdc9fd90a4672f97403aa026f7fc58c16c1a6d824da6866acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:User:editform.html.twig"));

        // line 1
        echo "\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t\t<tr>
\t\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sex", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexe", array()), 'widget');
        echo "</td>\t\t\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t</table>
\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t\t<tr>
\t\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</td>\t\t\t
\t\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "birthdate", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address1", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address2", array()), 'widget');
        echo "</td>\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "homenumber", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cellnumber", array()), 'widget');
        echo "</td>\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t</table>\t";
        
        $__internal_fbfdcd6a9e2063cdc9fd90a4672f97403aa026f7fc58c16c1a6d824da6866acf->leave($__internal_fbfdcd6a9e2063cdc9fd90a4672f97403aa026f7fc58c16c1a6d824da6866acf_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:User:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  109 => 38,  103 => 35,  99 => 34,  92 => 30,  88 => 29,  82 => 26,  78 => 25,  71 => 21,  67 => 20,  61 => 17,  57 => 16,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 		<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 			<tr>*/
/* 				<th width="25%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="25%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="25%" class="sty_label">{{'label.sex'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.name) }}</td>*/
/* 				<td>{{ form_widget(edit_form.firstname) }}</td>*/
/* 				<td>{{ form_widget(edit_form.sexe) }}</td>			*/
/* 			</tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		</table>*/
/* 		<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 			<tr>*/
/* 				<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="40%" class="sty_label">{{'label.birthdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.email) }}</td>			*/
/* 				<td>{{ form_widget(edit_form.birthdate) }}</td>					*/
/* 			</tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			<tr>*/
/* 				<th class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 1</th>*/
/* 				<th class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.address1) }}</td>*/
/* 				<td>{{ form_widget(edit_form.address2) }}</td>	*/
/* 			</tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			<tr>*/
/* 				<th class="sty_label">{{'label.homenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th class="sty_label">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.homenumber) }}</td>*/
/* 				<td>{{ form_widget(edit_form.cellnumber) }}</td>	*/
/* 			</tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		</table>	*/
