<?php

/* BoUserBundle:User:editform.html.twig */
class __TwigTemplate_d5003a5d252785bbadac90bb9afeb768d3db36223854d762c8973dacc3f298ed extends Twig_Template
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
        $__internal_5bf0ecb2631d16c44dc3afec4c1f506b92c907ff4a841fb04102d8f1201829e7 = $this->env->getExtension("native_profiler");
        $__internal_5bf0ecb2631d16c44dc3afec4c1f506b92c907ff4a841fb04102d8f1201829e7->enter($__internal_5bf0ecb2631d16c44dc3afec4c1f506b92c907ff4a841fb04102d8f1201829e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:User:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.username", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">Roles</th>
            <th class=\"sty_label\">Add role</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 18
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo ",
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</td>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">Enabled</th>
\t\t\t<th class=\"sty_label\">Locked</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "enabled", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "locked", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_5bf0ecb2631d16c44dc3afec4c1f506b92c907ff4a841fb04102d8f1201829e7->leave($__internal_5bf0ecb2631d16c44dc3afec4c1f506b92c907ff4a841fb04102d8f1201829e7_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:User:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  68 => 21,  65 => 20,  56 => 18,  52 => 17,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.username'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="40%" class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.username) }}</td>*/
/* 			<td>{{ form_widget(edit_form.email) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">Roles</th>*/
/*             <th class="sty_label">Add role</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{%for role in user.roles%}*/
/* 					{{ role }},*/
/* 				{%endfor%}*/
/* 			</td>*/
/* 			<td>{{ form_widget(edit_form.role) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">Enabled</th>*/
/* 			<th class="sty_label">Locked</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.enabled) }}</td>*/
/* 			<td>{{ form_widget(edit_form.locked) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
