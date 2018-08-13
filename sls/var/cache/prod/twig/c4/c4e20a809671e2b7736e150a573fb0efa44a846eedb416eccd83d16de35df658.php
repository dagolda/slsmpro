<?php

/* BoAdminBundle:Employee:newform.html.twig */
class __TwigTemplate_eb5cc737cc2664ddac30db5178f6d078d9f4fc3a8da373e7c6c3436e1c13d8c2 extends Twig_Template
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
        $__internal_1672a73f876474f35d7f7fc0114dbcb99b04410ecea86b787f9322fbc2c58f49 = $this->env->getExtension("native_profiler");
        $__internal_1672a73f876474f35d7f7fc0114dbcb99b04410ecea86b787f9322fbc2c58f49->enter($__internal_1672a73f876474f35d7f7fc0114dbcb99b04410ecea86b787f9322fbc2c58f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.firstname", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th width=\"25%\" class=\"sty_label\">";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.status", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.category", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_status\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.status", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>\t\t\t
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryteacher", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_category\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.category", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>
\t\t\t<td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.email", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>\t
            <th class=\"sty_label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.englishlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.frenchlevel", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "englishlevel", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "frenchlevel", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email1", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.language", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
            <th class=\"sty_label\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.hiringdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.birthdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td valign=\"top\">
\t\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "langage", array()), 'widget');
        echo "
\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_language\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/actions/add.jpg"), "html", null, true);
        echo "\" border=\"0\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.add.language", array(), "BoAdminBundle"), "html", null, true);
        echo "\" /></button>
\t\t\t</td>
\t\t\t<td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hiringdate", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birthdate", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\" colspan=\"2\">Qualification</th>\t
\t\t\t<th class=\"sty_label\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "typecontract", array()), 'widget');
        echo "</td>\t\t\t\t\t\t
\t\t\t<td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>
\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 1</th>
\t\t\t<th width=\"40%\" class=\"sty_label\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.address", array(), "BoAdminBundle"), "html", null, true);
        echo " 2</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address1", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.phonenumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th class=\"sty_label\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cellnumber", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "homenumber", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cellnumber", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th colspan=\"2\" class=\"sty_label\">Note</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "note", array()), 'widget');
        echo "</td>
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>
";
        
        $__internal_1672a73f876474f35d7f7fc0114dbcb99b04410ecea86b787f9322fbc2c58f49->leave($__internal_1672a73f876474f35d7f7fc0114dbcb99b04410ecea86b787f9322fbc2c58f49_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 88,  221 => 81,  217 => 80,  211 => 77,  207 => 76,  200 => 72,  196 => 71,  190 => 68,  186 => 67,  177 => 61,  173 => 60,  167 => 57,  159 => 52,  155 => 51,  148 => 49,  144 => 48,  137 => 44,  133 => 43,  129 => 42,  122 => 38,  118 => 37,  114 => 36,  108 => 33,  104 => 32,  100 => 31,  93 => 27,  86 => 25,  82 => 24,  74 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th width="25%" class="sty_label">{{'label.firstname'|trans([],'BoAdminBundle')}}</th>*/
/*             <th width="25%" class="sty_label">{{'label.name'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.sex'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.firstname) }}</td>*/
/* 			<td>{{ form_widget(form.name) }}</td>*/
/* 			<td>{{ form_widget(form.sexe) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.status'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.category'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 1</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				{{ form_widget(form.status) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_status"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.status'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>			*/
/* 			<td valign="top">*/
/* 				{{ form_widget(form.categoryteacher) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_category"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.category'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.email) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.email'|trans([],'BoAdminBundle')}} 2</th>	*/
/*             <th class="sty_label">{{'label.englishlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.frenchlevel'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.englishlevel) }}</td>*/
/* 			<td>{{ form_widget(form.frenchlevel) }}</td>*/
/* 			<td>{{ form_widget(form.email1) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.language'|trans([],'BoAdminBundle')}}</th>	*/
/*             <th class="sty_label">{{'label.hiringdate'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.birthdate'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td valign="top">*/
/* 				{{ form_widget(form.langage) }}*/
/* 				<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_language"><img src="{{ asset('images/actions/add.jpg') }}" border="0" alt="{{'title.add.language'|trans([],'BoAdminBundle')}}" /></button>*/
/* 			</td>*/
/* 			<td>{{ form_widget(form.hiringdate) }}</td>*/
/* 			<td>{{ form_widget(form.birthdate) }}</td>*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label" colspan="2">Qualification</th>	*/
/* 			<th class="sty_label">{{'label.active'|trans([],'BoAdminBundle')}}</th>	*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.typecontract) }}</td>						*/
/* 			<td>{{ form_widget(form.active) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
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
/*             <th class="sty_label">{{'label.phonenumber'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th class="sty_label">{{'label.cellnumber'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.homenumber) }}</td>*/
/* 			<td>{{ form_widget(form.cellnumber) }}</td>	*/
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
