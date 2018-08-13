<?php

/* BoAdminBundle:Rubric:editform.html.twig */
class __TwigTemplate_c96622c09980be1efee0bb0e400a235dc2a08591bb5078e15f798b50fe62926f extends Twig_Template
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
        $__internal_08afcd85fadb77bbb6f449a7771b6b7cbdacfc64f3df36379b3ee94bf9a514a6 = $this->env->getExtension("native_profiler");
        $__internal_08afcd85fadb77bbb6f449a7771b6b7cbdacfc64f3df36379b3ee94bf9a514a6->enter($__internal_08afcd85fadb77bbb6f449a7771b6b7cbdacfc64f3df36379b3ee94bf9a514a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Rubric:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (english)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nameen", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"50%\" class=\"sty_label\">Name (french)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "namefr", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_08afcd85fadb77bbb6f449a7771b6b7cbdacfc64f3df36379b3ee94bf9a514a6->leave($__internal_08afcd85fadb77bbb6f449a7771b6b7cbdacfc64f3df36379b3ee94bf9a514a6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Rubric:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  29 => 6,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (english)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.nameen) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="50%" class="sty_label">Name (french)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.namefr) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
