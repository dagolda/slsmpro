<?php

/* BoAdminBundle:Contracts:studentform.html.twig */
class __TwigTemplate_b86d6f59f6baaf674f3b51d955e77a3f9fa90774ca4d465e983922c977e581a3 extends Twig_Template
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
        $__internal_59baf5a15241d25d50d4c45fced84172721ae8c12be3bc662b4e990e0771ea5b = $this->env->getExtension("native_profiler");
        $__internal_59baf5a15241d25d50d4c45fced84172721ae8c12be3bc662b4e990e0771ea5b->enter($__internal_59baf5a15241d25d50d4c45fced84172721ae8c12be3bc662b4e990e0771ea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:studentform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "firstname", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "name", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "email", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "email1", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>\t
\t\t\t<th class=\"sty_label\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "phonenumber", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "phonenumber1", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "startlevel", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "targetlevel", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "startdate", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["student_form"]) ? $context["student_form"] : $this->getContext($context, "student_form")), "enddate", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_59baf5a15241d25d50d4c45fced84172721ae8c12be3bc662b4e990e0771ea5b->leave($__internal_59baf5a15241d25d50d4c45fced84172721ae8c12be3bc662b4e990e0771ea5b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:studentform.html.twig";
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
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(student_form.firstname) }}</td>	*/
/* 			<td>{{ form_widget(student_form.name) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 2</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(student_form.email) }}</td>	*/
/* 			<td>{{ form_widget(student_form.email1) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>	*/
/* 			<th class="sty_label">{{'label.phonenumber'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.phonenumber'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(student_form.phonenumber) }}</td>	*/
/* 			<td>{{ form_widget(student_form.phonenumber1) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.targetlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>	*/
/* 			<td>{{ form_widget(student_form.startlevel) }}</td>				*/
/* 			<td>{{ form_widget(student_form.targetlevel) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(student_form.startdate) }}</td>				*/
/* 			<td>{{ form_widget(student_form.enddate) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
