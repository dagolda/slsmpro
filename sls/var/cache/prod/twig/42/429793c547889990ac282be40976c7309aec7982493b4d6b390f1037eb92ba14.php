<?php

/* BoAdminBundle:Employee:editform.html.twig */
class __TwigTemplate_aa83a8144ea366ae639fb7a52b7556bb1650a04b81d2716e8dffed70ab96714c extends Twig_Template
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
        $__internal_40a0e8aae7bc207c28356c24e254df68e611da0f5a647bc04b91f4e656ce7150 = $this->env->getExtension("native_profiler");
        $__internal_40a0e8aae7bc207c28356c24e254df68e611da0f5a647bc04b91f4e656ce7150->enter($__internal_40a0e8aae7bc207c28356c24e254df68e611da0f5a647bc04b91f4e656ce7150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:editform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th width=\"25%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sex", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hiringdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            \t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td valign=\"top\">";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langage", array()), 'widget');
        echo "</td>\t\t
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hiringdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget', array("attr" => array("class" => "status span3")));
        echo "
\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("status_new");
        echo "\" title=\"Add a status\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"Add a status\" />\t
\t\t\t</td>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email1", array()), 'widget');
        echo "</td>\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>

\t\t</tr>
\t\t<tr>
\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">Qualification</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryteacher", array()), 'widget');
        echo "
\t\t\t\t<a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("categoryteacher_new");
        echo "\" title=\"Add a category\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"Add a category\" />\t
\t\t\t</td>\t
\t\t\t<td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active", array()), 'widget', array("attr" => array("class" => "active span3")));
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.englishlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frenchlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.profile", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishlevel", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frenchlevel", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'widget', array("attr" => array("class" => "profil span3")));
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.available", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "available", array()), 'widget', array("attr" => array("class" => "available span3")));
        echo "</td>
\t\t\t<td>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "homenumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellnumber", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t<th colspan=\"2\" class=\"sty_label\">Note</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_40a0e8aae7bc207c28356c24e254df68e611da0f5a647bc04b91f4e656ce7150->leave($__internal_40a0e8aae7bc207c28356c24e254df68e611da0f5a647bc04b91f4e656ce7150_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:editform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 96,  236 => 89,  232 => 88,  226 => 85,  222 => 84,  213 => 78,  209 => 77,  205 => 76,  199 => 73,  195 => 72,  191 => 71,  184 => 67,  180 => 66,  176 => 65,  170 => 62,  166 => 61,  162 => 60,  155 => 56,  151 => 55,  144 => 53,  140 => 52,  133 => 48,  128 => 46,  114 => 35,  110 => 34,  103 => 32,  99 => 31,  92 => 27,  88 => 26,  84 => 25,  77 => 21,  73 => 20,  69 => 19,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="25%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th width="25%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.sex'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname) }}</td>*/
/* 			<td>{{ form_widget(form.name) }}</td>*/
/* 			<td>{{ form_widget(form.sexe) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.hiringdate'|trans([],'BoAdminBundle')}}</th>*/
/*             		<th class="sty_label">{{'label.birthdate'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td valign="top">{{ form_widget(form.langage) }}</td>		*/
/* 			<td>{{ form_widget(form.hiringdate) }}</td>*/
/* 			<td>{{ form_widget(form.birthdate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 1</th>	*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 2</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.status, {'attr' : {'class' : 'status span3'}}) }}*/
/* 				<a href="{{ path('status_new') }}" title="Add a status"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="Add a status" />	*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.email) }}</td>*/
/* 			<td>{{ form_widget(form.email1) }}</td>							*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* */
/* 		</tr>*/
/* 		<tr>*/
/* 	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">Qualification</th>	*/
/* 			<th class="sty_label">{{'label.active'|trans([],'BoAdminBundle')}}</th>				*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td valign="top">*/
/* 				{{ form_widget(form.categoryteacher) }}*/
/* 				<a href="{{ path('categoryteacher_new') }}" title="Add a category"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="Add a category" />	*/
/* 			</td>	*/
/* 			<td>{{ form_widget(form.typecontract) }}</td>*/
/* 			<td>{{ form_widget(form.active, {'attr' : {'class' : 'active span3'}}) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.englishlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.frenchlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.profile'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.englishlevel) }}</td>*/
/* 			<td>{{ form_widget(form.frenchlevel) }}</td>*/
/* 			<td>{{ form_widget(form.profil, {'attr' : {'class' : 'profil span3'}}) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.available'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.available, {'attr' : {'class' : 'available span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.homenumber) }}</td>*/
/* 			<td>{{ form_widget(form.cellnumber) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th width="40%" class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.address1) }}</td>*/
/* 			<td>{{ form_widget(form.address2) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             	<th colspan="2" class="sty_label">Note</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.note) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
