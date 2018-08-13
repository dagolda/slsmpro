<?php

/* BoAdminBundle:Profil:addrightform.html.twig */
class __TwigTemplate_bb334ef38893eaa1d7561f246ec82ac319620d0b71d169c89802a5b2485886a5 extends Twig_Template
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
        $__internal_67a3e790a3c6ba44299ced9f03471cd8faf24cff388aa4730e186101d06d16c0 = $this->env->getExtension("native_profiler");
        $__internal_67a3e790a3c6ba44299ced9f03471cd8faf24cff388aa4730e186101d06d16c0->enter($__internal_67a3e790a3c6ba44299ced9f03471cd8faf24cff388aa4730e186101d06d16c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Profil:addrightform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.rubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.subrubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.active", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "rubric", array()), 'widget', array("attr" => array("class" => "idrubric span3")));
        echo "</td>
\t\t\t<td class=\"select_srubric\">
\t\t\t\t<select name='idsrubric' id='idsrubric'>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectsrubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t</select>\t
\t\t\t</td>\t
\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "active", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan='3'>&nbsp;</td></tr>
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "liste", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "creation", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "edit", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan='3'>&nbsp;</td></tr>
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t\t<th width=\"25%\" class=\"sty_label\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.others", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "ddelete", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "search", array()), 'widget');
        echo "</td>
\t\t\t<td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["right_form"]) ? $context["right_form"] : $this->getContext($context, "right_form")), "others", array()), 'widget');
        echo "</td>\t\t
\t\t</tr>
\t\t<tr><td colspan='3'>&nbsp;</td></tr>
\t\t<input type=\"hidden\" id=\"idprofil\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "id", array()), "html", null, true);
        echo "\"/>
\t</table>";
        
        $__internal_67a3e790a3c6ba44299ced9f03471cd8faf24cff388aa4730e186101d06d16c0->leave($__internal_67a3e790a3c6ba44299ced9f03471cd8faf24cff388aa4730e186101d06d16c0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Profil:addrightform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  110 => 36,  106 => 35,  102 => 34,  96 => 31,  92 => 30,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  67 => 20,  63 => 19,  59 => 18,  52 => 14,  46 => 11,  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">{{'label.rubric'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.subrubric'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.active'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(right_form.rubric, {'attr' : {'class' : 'idrubric span3'}}) }}</td>*/
/* 			<td class="select_srubric">*/
/* 				<select name='idsrubric' id='idsrubric'>*/
/* 					<option value="0" selected="selected">{{'action.selectsrubric'|trans([],'BoAdminBundle')}}</option>*/
/* 				</select>	*/
/* 			</td>	*/
/* 			<td>{{ form_widget(right_form.active) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan='3'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">{{'action.list'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'action.add'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'action.edit'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(right_form.liste) }}</td>*/
/* 			<td>{{ form_widget(right_form.creation) }}</td>*/
/* 			<td>{{ form_widget(right_form.edit) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan='3'>&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">{{'action.delete'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'action.search'|trans([],'BoAdminBundle')}}</th>*/
/* 			<th width="25%" class="sty_label">{{'label.others'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(right_form.ddelete) }}</td>*/
/* 			<td>{{ form_widget(right_form.search) }}</td>*/
/* 			<td>{{ form_widget(right_form.others) }}</td>		*/
/* 		</tr>*/
/* 		<tr><td colspan='3'>&nbsp;</td></tr>*/
/* 		<input type="hidden" id="idprofil" value="{{profil.id}}"/>*/
/* 	</table>*/
