<?php

/* BoAdminBundle:Employee:modalform.html.twig */
class __TwigTemplate_0cda0718791e7f62c3b9197c8867aafbec81118d55487252e14683decbf65edb extends Twig_Template
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
        $__internal_918b6746bf2828085cde3c3ddfd2f67fe1ce44e213e3d08cbe683138a0049a89 = $this->env->getExtension("native_profiler");
        $__internal_918b6746bf2828085cde3c3ddfd2f67fe1ce44e213e3d08cbe683138a0049a89->enter($__internal_918b6746bf2828085cde3c3ddfd2f67fe1ce44e213e3d08cbe683138a0049a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:modalform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"40%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.name", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.sex", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "</td>\t
\t\t\t<td>
\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
\t\t\t\t<!--button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_status\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.status", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button-->
\t\t\t</td>\t\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryteacher", array()), 'widget');
        echo "
\t\t\t\t<!--button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_category\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.category", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button-->
\t\t\t</td>
\t\t\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th class=\"sty_label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>\t\t
\t\t</tr>
\t\t<tr>\t\t
\t\t\t<td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email1", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
            \t\t<th class=\"sty_label\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hiringdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hiringdate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t
\t\t\t<th class=\"sty_label\">Qualification</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langage", array()), 'widget');
        echo "
\t\t\t\t<!--button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_language\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.language", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button-->
\t\t\t</td>
\t\t\t<td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget');
        echo "</td>\t\t\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.englishlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frenchlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishlevel", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frenchlevel", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "homenumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellnumber", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address1", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th colspan=\"2\" class=\"sty_label\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">Note</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_918b6746bf2828085cde3c3ddfd2f67fe1ce44e213e3d08cbe683138a0049a89->leave($__internal_918b6746bf2828085cde3c3ddfd2f67fe1ce44e213e3d08cbe683138a0049a89_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:modalform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 101,  234 => 94,  228 => 91,  221 => 87,  215 => 84,  208 => 80,  204 => 79,  198 => 76,  194 => 75,  187 => 71,  183 => 70,  177 => 67,  173 => 66,  166 => 62,  159 => 60,  155 => 59,  147 => 54,  140 => 50,  136 => 49,  130 => 46,  126 => 45,  119 => 41,  115 => 40,  109 => 37,  105 => 36,  98 => 32,  91 => 30,  87 => 29,  80 => 25,  76 => 24,  66 => 19,  62 => 18,  57 => 16,  51 => 13,  47 => 12,  40 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="40%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="40%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname) }}</td>*/
/* 			<td>{{ form_widget(form.name) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.sex'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.sexe) }}</td>	*/
/* 			<td>*/
/* 				{{ form_widget(form.status) }}*/
/* 				<!--button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_status"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.status'|trans([],'BoAdminBundle')}}" /></button-->*/
/* 			</td>							*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.active'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td valign="top">*/
/* 				{{ form_widget(form.categoryteacher) }}*/
/* 				<!--button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_category"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.category'|trans([],'BoAdminBundle')}}" /></button-->*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.active) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 1</th>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 2</th>		*/
/* 		</tr>*/
/* 		<tr>		*/
/* 			<td>{{ form_widget(form.email) }}</td>	*/
/* 			<td>{{ form_widget(form.email1) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.birthdate'|trans([],'BoAdminBundle')}}</th>	*/
/*             		<th class="sty_label">{{'label.hiringdate'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.birthdate) }}</td>*/
/* 			<td>{{ form_widget(form.hiringdate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>		*/
/* 			<th class="sty_label">Qualification</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td valign="top">*/
/* 				{{ form_widget(form.langage) }}*/
/* 				<!--button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_language"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.language'|trans([],'BoAdminBundle')}}" /></button-->*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.typecontract) }}</td>						*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.englishlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.frenchlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.englishlevel) }}</td>*/
/* 			<td>{{ form_widget(form.frenchlevel) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.homenumber) }}</td>*/
/* 			<td>{{ form_widget(form.cellnumber) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="2" class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 1</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.address1) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th colspan="2" class="sty_label">{{'label.address'|trans([],'BoAdminBundle')}} 2</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.address2) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th colspan="2" class="sty_label">Note</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.note) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
/* */
