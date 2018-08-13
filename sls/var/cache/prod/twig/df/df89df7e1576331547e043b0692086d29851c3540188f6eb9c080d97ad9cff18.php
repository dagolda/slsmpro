<?php

/* BoHomeBundle:Default:editform.html.twig */
class __TwigTemplate_4f43c124b1818d2b5520979b3b3da4be02d9c94364ca8148cd00a4fb5fb53c7f extends Twig_Template
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
        $__internal_27ff86caffce22ead3268a8701e26d5dca3f60eeb76f849859c13f56e241c4fe = $this->env->getExtension("native_profiler");
        $__internal_27ff86caffce22ead3268a8701e26d5dca3f60eeb76f849859c13f56e241c4fe->enter($__internal_27ff86caffce22ead3268a8701e26d5dca3f60eeb76f849859c13f56e241c4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:editform.html.twig"));

        // line 1
        echo "\t\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t\t<tr>
\t\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname", array()), 'widget');
        echo "</td>\t\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sex", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "birthdate", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sexe", array()), 'widget');
        echo "</td>\t\t\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</td>\t\t\t
\t\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email1", array()), 'widget');
        echo "</td>\t\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address1", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "address2", array()), 'widget');
        echo "</td>\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<tr>
\t\t\t\t<th class=\"sty_label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.homenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t\t<th class=\"sty_label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "homenumber", array()), 'widget');
        echo "</td>
\t\t\t\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cellnumber", array()), 'widget');
        echo "</td>\t
\t\t\t</tr>
\t\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t</table>\t
";
        
        $__internal_27ff86caffce22ead3268a8701e26d5dca3f60eeb76f849859c13f56e241c4fe->leave($__internal_27ff86caffce22ead3268a8701e26d5dca3f60eeb76f849859c13f56e241c4fe_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  120 => 43,  114 => 40,  110 => 39,  103 => 35,  99 => 34,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  72 => 22,  68 => 21,  61 => 17,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 		<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 			<tr>*/
/* 				<th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th width="40%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.name) }}</td>*/
/* 				<td>{{ form_widget(edit_form.firstname) }}</td>		*/
/* 			</tr>*/
/* 			<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			<tr>*/
/* 				<th class="sty_label">{{'label.birthdate'|trans([],'BoAdminBundle')}}</th>*/
/* 				<th class="sty_label">{{'label.sex'|trans([],'BoAdminBundle')}}</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.birthdate) }}</td>*/
/* 				<td>{{ form_widget(edit_form.sexe) }}</td>			*/
/* 			</tr>*/
/* 			<tr><td colspan="3">&nbsp;</td></tr>*/
/* 			<tr>*/
/* 				<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 1</th>*/
/* 				<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 2</th>*/
/* 			</tr>*/
/* 			<tr>*/
/* 				<td>{{ form_widget(edit_form.email) }}</td>			*/
/* 				<td>{{ form_widget(edit_form.email1) }}</td>		*/
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
/* */
