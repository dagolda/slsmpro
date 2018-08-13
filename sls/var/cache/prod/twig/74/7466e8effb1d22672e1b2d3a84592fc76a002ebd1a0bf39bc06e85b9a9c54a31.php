<?php

/* BoAdminBundle:Profil:editform.html.twig */
class __TwigTemplate_7ad3eff7ca92d2b7687b49c2fe2f5681a0c95af2d5e403dc67e192ed62c54aa5 extends Twig_Template
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
        $__internal_68a9f67479234d9f3b6dfaaebb8e7041f64f7f9a5a99d3dc423f98322e0cc4ca = $this->env->getExtension("native_profiler");
        $__internal_68a9f67479234d9f3b6dfaaebb8e7041f64f7f9a5a99d3dc423f98322e0cc4ca->enter($__internal_68a9f67479234d9f3b6dfaaebb8e7041f64f7f9a5a99d3dc423f98322e0cc4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:editform.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rubric", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t</table>";
        
        $__internal_68a9f67479234d9f3b6dfaaebb8e7041f64f7f9a5a99d3dc423f98322e0cc4ca->leave($__internal_68a9f67479234d9f3b6dfaaebb8e7041f64f7f9a5a99d3dc423f98322e0cc4ca_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.name) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">{{'label.rubric'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.rubric) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 	</table>*/
