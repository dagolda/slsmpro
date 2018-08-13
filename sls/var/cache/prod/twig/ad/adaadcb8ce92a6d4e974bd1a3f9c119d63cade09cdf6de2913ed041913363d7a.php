<?php

/* BoAdminBundle:Evaluation:part2form.html.twig */
class __TwigTemplate_1e9957404359117658103e7bfe50af8d39a35958804b583bad97a761bd4904c6 extends Twig_Template
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
        $__internal_e4e0517e06de755389781b65471aecd73d0c5f467402f2d68fafed787086b42c = $this->env->getExtension("native_profiler");
        $__internal_e4e0517e06de755389781b65471aecd73d0c5f467402f2d68fafed787086b42c->enter($__internal_e4e0517e06de755389781b65471aecd73d0c5f467402f2d68fafed787086b42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:part2form.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\t\t\t
\t\t<tr>
            <th>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.readingcomprehension", array(), "BoAdminBundle"), "html", null, true);
        echo " (<span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.scoreon30", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>)</th>
            <th>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.writenexpression", array(), "BoAdminBundle"), "html", null, true);
        echo " (<span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.scoreon30", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>)</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "writencomprehension", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "writenexpression", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rcresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.eeresult", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "rcresult", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "eeresult", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.s", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.orc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "syntaxe", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "oralunderstanding", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.qsp", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pr", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "qualityofdiscourse", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "prononciation", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.gr", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
            <th>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.vb", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "grammar", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "verbs", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.voc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ryacc", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "vocabulary", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "ryacc", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftgroup.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--!></th>
            <th>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourgroup", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourgroup.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "ftgroup", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "hourgroup", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--!></th>
            <th>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourftindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourftindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "ftindividual", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "hourftindividual", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ptstarting", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ptstarting.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--></th>
            <th>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourptindividual", array(), "BoAdminBundle"), "html", null, true);
        echo "<!--br/><span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hourptindividual.detail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span--></th>

\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "ptstarting", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "hourptindividual", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan='2'>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan='2'>";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan='2'>";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["eval_form"]) ? $context["eval_form"] : $this->getContext($context, "eval_form")), "comment", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_e4e0517e06de755389781b65471aecd73d0c5f467402f2d68fafed787086b42c->leave($__internal_e4e0517e06de755389781b65471aecd73d0c5f467402f2d68fafed787086b42c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:part2form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 92,  236 => 89,  229 => 85,  225 => 84,  216 => 80,  210 => 79,  203 => 75,  199 => 74,  190 => 70,  184 => 69,  177 => 65,  173 => 64,  164 => 60,  158 => 59,  151 => 55,  147 => 54,  141 => 51,  137 => 50,  130 => 46,  126 => 45,  120 => 42,  116 => 41,  109 => 37,  105 => 36,  99 => 33,  95 => 32,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  67 => 19,  63 => 18,  56 => 14,  52 => 13,  44 => 8,  40 => 7,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0">			*/
/* 		<tr>*/
/*             <th>{{'label.readingcomprehension'|trans([],'BoAdminBundle')}} (<span class="customer_detail">{{'label.scoreon30'|trans([],'BoAdminBundle')}}</span>)</th>*/
/*             <th>{{'label.writenexpression'|trans([],'BoAdminBundle')}} (<span class="customer_detail">{{'label.scoreon30'|trans([],'BoAdminBundle')}}</span>)</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.writencomprehension) }}</td>*/
/* 			<td>{{ form_widget(eval_form.writenexpression) }}</td>*/
/* 		</tr>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.rcresult'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.eeresult'|trans([],'BoAdminBundle')}}</th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.rcresult) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.eeresult) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.s'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.orc'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.syntaxe) }}</td>*/
/* 			<td>{{ form_widget(eval_form.oralunderstanding) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.qsp'|trans([],'BoAdminBundle')}}</th>		*/
/*             <th>{{'label.pr'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.qualityofdiscourse) }}</td>		*/
/* 			<td>{{ form_widget(eval_form.prononciation) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.gr'|trans([],'BoAdminBundle')}}</th>		*/
/*             <th>{{'label.vb'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.grammar) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.verbs) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.voc'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.ryacc'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.vocabulary) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.ryacc) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ftgroup'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.ftgroup.detail'|trans([],'BoAdminBundle')}}</span--!></th>*/
/*             <th>{{'label.hourgroup'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.hourgroup.detail'|trans([],'BoAdminBundle')}}</span--></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.ftgroup) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.hourgroup) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ftindividual'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.ftindividual.detail'|trans([],'BoAdminBundle')}}</span--!></th>*/
/*             <th>{{'label.hourftindividual'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.hourftindividual.detail'|trans([],'BoAdminBundle')}}</span--></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.ftindividual) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.hourftindividual) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.ptstarting'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.ptstarting.detail'|trans([],'BoAdminBundle')}}</span--></th>*/
/*             <th>{{'label.hourptindividual'|trans([],'BoAdminBundle')}}<!--br/><span class="customer_detail">{{'label.hourptindividual.detail'|trans([],'BoAdminBundle')}}</span--></th>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(eval_form.ptstarting) }}</td>	*/
/* 			<td>{{ form_widget(eval_form.hourptindividual) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan='2'>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan='2'>{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan='2'>{{ form_widget(eval_form.comment) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
