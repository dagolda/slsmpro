<?php

/* BoAdminBundle:Evaluation:part1form.html.twig */
class __TwigTemplate_9362c9fbb16cb9cf05b25205817e96876b685d28abae52f641d7bb52866ddd27 extends Twig_Template
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
        $__internal_b5106bd4c1fd50d86af7f50134647b8db9dad9a9b0cd09f061e31491fa232186 = $this->env->getExtension("native_profiler");
        $__internal_b5106bd4c1fd50d86af7f50134647b8db9dad9a9b0cd09f061e31491fa232186->enter($__internal_b5106bd4c1fd50d86af7f50134647b8db9dad9a9b0cd09f061e31491fa232186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:part1form.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t\t<th width=40%>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaltype", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t\t<th width=40%>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.options", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaltype", array()), 'widget', array("attr" => array("class" => "evaltype span3")));
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "options", array()), 'widget', array("attr" => array("class" => "evaluator span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluator", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaluator", array()), 'widget', array("attr" => array("class" => "evaluator span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typeoftraining", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t<th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.duration", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaldate", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "duration", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.start", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.end", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>    \t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evaltime", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endtime", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t\t
\t\t\t<td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typetime", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t\t<th>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.online", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notification", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "online", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notification", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"2\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.situation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "situation", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "firstname span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "name span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expenses", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailstudent", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "expenses", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currentprofile", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "targetprofile", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " (<span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customerdetail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>)</th>
            <th>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "customer", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emailcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phonecontact", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingemail", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "billingphone", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "evallocation", array()), 'widget', array("attr" => array("class" => "evallocation span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t
\t\t<tr>
\t\t\t<th>";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>
\t\t\t<td>";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"2\">";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t\t
\t</table>
\t";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["campuss"]) ? $context["campuss"] : $this->getContext($context, "campuss")));
        foreach ($context['_seq'] as $context["_key"] => $context["campus"]) {
            // line 152
            echo "\t\t<input type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "reference", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "reference", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["campus"], "address", array()), "html", null, true);
            echo "\"/>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['campus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b5106bd4c1fd50d86af7f50134647b8db9dad9a9b0cd09f061e31491fa232186->leave($__internal_b5106bd4c1fd50d86af7f50134647b8db9dad9a9b0cd09f061e31491fa232186_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:part1form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 152,  368 => 151,  361 => 147,  355 => 144,  348 => 140,  344 => 139,  338 => 136,  334 => 135,  327 => 131,  323 => 130,  317 => 127,  313 => 126,  306 => 122,  302 => 121,  296 => 118,  292 => 117,  285 => 113,  281 => 112,  275 => 109,  271 => 108,  264 => 104,  260 => 103,  254 => 100,  248 => 99,  241 => 95,  237 => 94,  231 => 91,  227 => 90,  220 => 86,  216 => 85,  210 => 82,  206 => 81,  199 => 77,  195 => 76,  189 => 73,  185 => 72,  178 => 68,  174 => 67,  168 => 64,  164 => 63,  157 => 59,  151 => 56,  144 => 52,  140 => 51,  134 => 48,  130 => 47,  123 => 43,  119 => 42,  113 => 39,  109 => 38,  102 => 34,  98 => 33,  92 => 30,  88 => 29,  81 => 25,  77 => 24,  71 => 21,  67 => 20,  60 => 16,  56 => 15,  50 => 12,  46 => 11,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0">*/
/* 		<tr>*/
/* 			<th width=40%>{{'label.evaltype'|trans([],'BoAdminBundle')}}</th>		*/
/* 			<th width=40%>{{'label.options'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.evaltype, {'attr' : {'class' : 'evaltype span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.options, {'attr' : {'class' : 'evaluator span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 			<th>{{'label.evaluator'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th>{{'label.typeoftraining'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.evaluator, {'attr' : {'class' : 'evaluator span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.typeoftraining) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.evaldate'|trans([],'BoAdminBundle')}}</th>  */
/* 			<th>{{'label.duration'|trans([],'BoAdminBundle')}}</th>  			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.evaldate) }}</td>	*/
/* 			<td>{{ form_widget(form.duration) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.start'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.end'|trans([],'BoAdminBundle')}}</th>    			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.evaltime) }}</td>	*/
/* 			<td>{{ form_widget(form.endtime) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.language'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>			*/
/* 			<td>{{ form_widget(form.languages) }}</td>*/
/* 			<td>{{ form_widget(form.typetime) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             		<th>{{'label.online'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.notification'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.online) }}</td>*/
/* 			<td>{{ form_widget(form.notification) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="2">{{'label.situation'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.situation) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname, {'attr' : {'class' : 'firstname span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(form.name, {'attr' : {'class' : 'name span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.title) }}</td>*/
/* 			<td>{{ form_widget(form.phone) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.studentemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.expenses'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.emailstudent) }}</td>*/
/* 			<td>{{ form_widget(form.expenses) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.targetprofile'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.currentprofile) }}</td>		*/
/* 			<td>{{ form_widget(form.targetprofile) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.customer'|trans([],'BoAdminBundle')}} (<span class="customer_detail">{{'label.customerdetail'|trans([],'BoAdminBundle')}}</span>)</th>*/
/*             <th>{{'label.contact'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.customer) }}</td>	*/
/* 			<td>{{ form_widget(form.contact) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.contactemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.emailcontact) }}</td>*/
/* 			<td>{{ form_widget(form.phonecontact) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingcontact'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.billingemail'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.billingcontact) }}</td>*/
/* 			<td>{{ form_widget(form.billingemail) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingphone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.location'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.billingphone) }}</td>	*/
/* 			<td>{{ form_widget(form.evallocation, {'attr' : {'class' : 'evallocation span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>	*/
/* 		<tr>*/
/* 			<th>{{'label.campus'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.addresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="2">{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.comment, {'attr' : {'class' : 'campusclass span3'}}) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>			*/
/* 	</table>*/
/* 	{%for campus in campuss%}*/
/* 		<input type="hidden" id="{{campus.reference}}" name="{{campus.reference}}" value="{{campus.address}}"/>*/
/* 	{%endfor%}*/
/* */
