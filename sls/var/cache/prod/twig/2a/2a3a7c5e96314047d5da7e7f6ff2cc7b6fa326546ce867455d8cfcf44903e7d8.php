<?php

/* BoAdminBundle:Diary:modalform.html.twig */
class __TwigTemplate_938c9ba7b3442ba7face7fbdbcdeb6829b448be646819f65dfc35191873e70fb extends Twig_Template
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
        $__internal_df5615241bb507494e8bac2c4f21e65d84a267d87484ac522a5e22163f57db0f = $this->env->getExtension("native_profiler");
        $__internal_df5615241bb507494e8bac2c4f21e65d84a267d87484ac522a5e22163f57db0f->enter($__internal_df5615241bb507494e8bac2c4f21e65d84a267d87484ac522a5e22163f57db0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Diary:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            \t\t<th width=\"80%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.date", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
            \t\t<th class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.employee", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "employee", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.student", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "students", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.group", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.note", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_df5615241bb507494e8bac2c4f21e65d84a267d87484ac522a5e22163f57db0f->leave($__internal_df5615241bb507494e8bac2c4f21e65d84a267d87484ac522a5e22163f57db0f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Diary:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 34,  78 => 31,  71 => 27,  65 => 24,  58 => 20,  52 => 17,  45 => 13,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             		<th width="80%" class="sty_label">{{'label.date'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ddate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th class="sty_label">{{'label.employee'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.employee) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.student'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.students) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.group'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.group) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.note'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.note) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
