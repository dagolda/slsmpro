<?php

/* BoUserBundle:Rights:righteditform.html.twig */
class __TwigTemplate_140a5d96e6664e3dbe61f982920604c01395ebff799beae39d4bcba014a67129 extends Twig_Template
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
        $__internal_3259510d1b45d2c117d3a5202655bcf139cd146f8dc5af16c521f3e07e1e14b5 = $this->env->getExtension("native_profiler");
        $__internal_3259510d1b45d2c117d3a5202655bcf139cd146f8dc5af16c521f3e07e1e14b5->enter($__internal_3259510d1b45d2c117d3a5202655bcf139cd146f8dc5af16c521f3e07e1e14b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:Rights:righteditform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"25%\" class=\"sty_label\">First rubric</th>
            <th width=\"25%\" class=\"sty_label\">Second rubric</th>
            <td width=\"25%\">Active</td>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "rubric", array()), "nameen", array()), "html", null, true);
        echo "</td>\t
\t\t\t<td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["right"]) ? $context["right"] : $this->getContext($context, "right")), "subrubric", array()), "nameen", array()), "html", null, true);
        echo "</td>\t
\t\t\t<td>";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "active", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">List</th>
            <th class=\"sty_label\">Creation</th>
            <th class=\"sty_label\">Edit</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "liste", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "creation", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "edit", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t\t<tr>
            <th class=\"sty_label\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">search</th>
            <th class=\"sty_label\">Others</th>\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ddelete", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget');
        echo "</td>\t
\t\t\t<td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "others", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"3\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_3259510d1b45d2c117d3a5202655bcf139cd146f8dc5af16c521f3e07e1e14b5->leave($__internal_3259510d1b45d2c117d3a5202655bcf139cd146f8dc5af16c521f3e07e1e14b5_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:Rights:righteditform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 32,  78 => 31,  74 => 30,  66 => 25,  59 => 21,  55 => 20,  51 => 19,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="25%" class="sty_label">First rubric</th>*/
/*             <th width="25%" class="sty_label">Second rubric</th>*/
/*             <td width="25%">Active</td>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{right.rubric.nameen}}</td>	*/
/* 			<td>{{right.subrubric.nameen}}</td>	*/
/* 			<td>{{ form_widget(form.active) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">List</th>*/
/*             <th class="sty_label">Creation</th>*/
/*             <th class="sty_label">Edit</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.liste) }}</td>	*/
/* 			<td>{{ form_widget(form.creation) }}</td>	*/
/* 			<td>{{ form_widget(form.edit) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th class="sty_label">{{'action.delete'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">search</th>*/
/*             <th class="sty_label">Others</th>		*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.ddelete) }}</td>	*/
/* 			<td>{{ form_widget(form.search) }}</td>	*/
/* 			<td>{{ form_widget(form.others) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="3">&nbsp;</td></tr>*/
/* 	</table>*/
