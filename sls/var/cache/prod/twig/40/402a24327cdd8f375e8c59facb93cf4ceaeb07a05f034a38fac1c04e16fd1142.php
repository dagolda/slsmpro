<?php

/* BoAdminBundle:Evaluation:editfirstform.html.twig */
class __TwigTemplate_9d4159f2b49ef4f1c26a2dfb29956d1434cedb2a7de9d8d442ebbd4c80a1edf6 extends Twig_Template
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
        $__internal_e5035725eea643dff6ce4da3019e6a6af0499e451daf35c2dbdd19c0b439d5ad = $this->env->getExtension("native_profiler");
        $__internal_e5035725eea643dff6ce4da3019e6a6af0499e451daf35c2dbdd19c0b439d5ad->enter($__internal_e5035725eea643dff6ce4da3019e6a6af0499e451daf35c2dbdd19c0b439d5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Evaluation:editfirstform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t\t<tr>
\t\t\t<th width=40%>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaltype", array(), "BoAdminBundle"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.options", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t\t<th width=40%>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaluator", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaltype", array()), 'widget', array("attr" => array("class" => "evaltype span3")));
        echo "/";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "options", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaluator", array()), 'widget', array("attr" => array("class" => "evaluator span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.evaldate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  
\t\t\t<th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.duration", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>  \t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaldate", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "duration", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.start", array(), "BoAdminBundle"), "html", null, true);
        echo "</th> 
\t\t\t<th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.end", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>   \t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evaltime", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "endtime", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.online", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.notification", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "online", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "notification", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t\t<th>";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.ftorpt", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t\t
\t\t\t<td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "languages", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typetime", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.typeoftraining", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.situation", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "typeoftraining", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "situation", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "firstname", array()), 'widget', array("attr" => array("class" => "firstname span3")));
        echo "</td>\t\t\t
\t\t\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "name", array()), 'widget', array("attr" => array("class" => "name span3")));
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.title", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phone", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.studentemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.expenses", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emailstudent", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "expenses", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.targetprofile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "currentprofile", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "targetprofile", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customer", array(), "BoAdminBundle"), "html", null, true);
        echo " (<span class=\"customer_detail\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.customerdetail", array(), "BoAdminBundle"), "html", null, true);
        echo "</span>)</th>
            <th>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "customer", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "contact", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contactphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "emailcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "phonecontact", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingcontact", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingemail", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "billingcontact", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "billingemail", array()), 'widget');
        echo "</td>\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th>";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.billingphone", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.location", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "billingphone", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "evallocation", array()), 'widget', array("attr" => array("class" => "evallocation span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t
\t\t<tr>
\t\t\t<th>";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.campus", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "campus", array()), 'widget', array("attr" => array("class" => "campusclass span3")));
        echo "</td>
\t\t\t<td>";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "addresse", array()), 'widget', array("attr" => array("class" => "addressclass span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t
\t\t<tr>
\t\t\t<th colspan=\"2\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td colspan=\"2\">";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comment", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>\t\t
\t</table>
";
        
        $__internal_e5035725eea643dff6ce4da3019e6a6af0499e451daf35c2dbdd19c0b439d5ad->leave($__internal_e5035725eea643dff6ce4da3019e6a6af0499e451daf35c2dbdd19c0b439d5ad_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Evaluation:editfirstform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 141,  347 => 138,  340 => 134,  336 => 133,  330 => 130,  326 => 129,  319 => 125,  315 => 124,  309 => 121,  305 => 120,  298 => 116,  294 => 115,  288 => 112,  284 => 111,  277 => 107,  273 => 106,  267 => 103,  263 => 102,  256 => 98,  252 => 97,  246 => 94,  240 => 93,  233 => 89,  229 => 88,  223 => 85,  219 => 84,  212 => 80,  208 => 79,  202 => 76,  198 => 75,  191 => 71,  187 => 70,  181 => 67,  177 => 66,  170 => 62,  166 => 61,  160 => 58,  156 => 57,  149 => 53,  145 => 52,  139 => 49,  135 => 48,  128 => 44,  124 => 43,  118 => 40,  114 => 39,  107 => 35,  103 => 34,  97 => 31,  93 => 30,  86 => 26,  82 => 25,  76 => 22,  72 => 21,  65 => 17,  61 => 16,  55 => 13,  51 => 12,  44 => 8,  38 => 7,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0">*/
/* 		<tr>*/
/* 			<th width=40%>{{'label.evaltype'|trans([],'BoAdminBundle')}}/{{'label.options'|trans([],'BoAdminBundle')}}</th>		*/
/* 			<th width=40%>{{'label.evaluator'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.evaltype, {'attr' : {'class' : 'evaltype span3'}}) }}/{{ form_widget(edit_form.options) }}</td>*/
/* 			<td>{{ form_widget(edit_form.evaluator, {'attr' : {'class' : 'evaluator span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.evaldate'|trans([],'BoAdminBundle')}}</th>  */
/* 			<th>{{'label.duration'|trans([],'BoAdminBundle')}}</th>  			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.evaldate) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.duration) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.start'|trans([],'BoAdminBundle')}}</th> */
/* 			<th>{{'label.end'|trans([],'BoAdminBundle')}}</th>   			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.evaltime) }}</td>*/
/* 			<td>{{ form_widget(edit_form.endtime) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.online'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th>{{'label.notification'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.online) }}</td>*/
/* 			<td>{{ form_widget(edit_form.notification) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.language'|trans([],'BoAdminBundle')}}</th>	*/
/* 			<th>{{'label.ftorpt'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>			*/
/* 			<td>{{ form_widget(edit_form.languages) }}</td>*/
/* 			<td>{{ form_widget(edit_form.typetime) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.typeoftraining'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.situation'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.typeoftraining) }}</td>*/
/* 			<td>{{ form_widget(edit_form.situation) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.name'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.firstname, {'attr' : {'class' : 'firstname span3'}}) }}</td>			*/
/* 			<td>{{ form_widget(edit_form.name, {'attr' : {'class' : 'name span3'}}) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.title'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.phone'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.title) }}</td>*/
/* 			<td>{{ form_widget(edit_form.phone) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.studentemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.expenses'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(edit_form.emailstudent) }}</td>*/
/* 			<td>{{ form_widget(edit_form.expenses) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.currentprofile'|trans([],'BoAdminBundle')}}</th>*/
/*             <th>{{'label.targetprofile'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.currentprofile) }}</td>		*/
/* 			<td>{{ form_widget(edit_form.targetprofile) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th>{{'label.customer'|trans([],'BoAdminBundle')}} (<span class="customer_detail">{{'label.customerdetail'|trans([],'BoAdminBundle')}}</span>)</th>*/
/*             <th>{{'label.contact'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.customer) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.contact) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.contactemail'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.contactphone'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.emailcontact) }}</td>*/
/* 			<td>{{ form_widget(edit_form.phonecontact) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingcontact'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.billingemail'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.billingcontact) }}</td>*/
/* 			<td>{{ form_widget(edit_form.billingemail) }}</td>					*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th>{{'label.billingphone'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.location'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.billingphone) }}</td>	*/
/* 			<td>{{ form_widget(edit_form.evallocation, {'attr' : {'class' : 'evallocation span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>	*/
/* 		<tr>*/
/* 			<th>{{'label.campus'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th>{{'label.address'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(edit_form.campus, {'attr' : {'class' : 'campusclass span3'}}) }}</td>*/
/* 			<td>{{ form_widget(edit_form.addresse, {'attr' : {'class' : 'addressclass span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>	*/
/* 		<tr>*/
/* 			<th colspan="2">{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td colspan="2">{{ form_widget(edit_form.comment) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>		*/
/* 	</table>*/
/* */
