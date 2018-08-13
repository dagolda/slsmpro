<?php

/* BoAdminBundle:Message:editform.html.twig */
class __TwigTemplate_3da394aba082a795b8a412f6b2cd0073251c9805ef504d696107bf217d484f7e extends Twig_Template
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
        $__internal_3dc37720844092b3c1780837f06d94514984da3f70043ba64d20cc07df109cc9 = $this->env->getExtension("native_profiler");
        $__internal_3dc37720844092b3c1780837f06d94514984da3f70043ba64d20cc07df109cc9->enter($__internal_3dc37720844092b3c1780837f06d94514984da3f70043ba64d20cc07df109cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Message:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.designation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "designation", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">Description FR</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descfr", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">Description EN</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descen", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t</table>";
        
        $__internal_3dc37720844092b3c1780837f06d94514984da3f70043ba64d20cc07df109cc9->leave($__internal_3dc37720844092b3c1780837f06d94514984da3f70043ba64d20cc07df109cc9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Message:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  42 => 13,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">{{'label.designation'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.designation) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Description FR</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.descfr) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">Description EN</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.descen) }}</td>			*/
/* 		</tr>*/
/* 	</table>*/
