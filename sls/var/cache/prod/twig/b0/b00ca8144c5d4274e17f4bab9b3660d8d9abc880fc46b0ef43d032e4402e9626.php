<?php

/* BoHomeBundle:Absences:newform.html.twig */
class __TwigTemplate_93ee06db749a54d8172f5a10ce9f35214d4c7c170b11c475b8f3a3f7e7d4a7fc extends Twig_Template
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
        $__internal_a1b95267346a013fc655da9c35d08c0d38e036b3b9783caad307d857a976ffd8 = $this->env->getExtension("native_profiler");
        $__internal_a1b95267346a013fc655da9c35d08c0d38e036b3b9783caad307d857a976ffd8->enter($__internal_a1b95267346a013fc655da9c35d08c0d38e036b3b9783caad307d857a976ffd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:newform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.motif", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "motif", array()), 'widget');
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            <th width=\"40%\" class=\"sty_label\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.startdate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
           \t<th width=\"40%\" class=\"sty_label\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.enddate", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startdate", array()), 'widget', array("attr" => array("class" => "abstart span3")));
        echo "</td>
\t\t\t<td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enddate", array()), 'widget', array("attr" => array("class" => "abend span3")));
        echo "</td>\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.numberday", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
            <th class=\"sty_label\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.amorpm", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>\t\t\t
\t\t</tr>
\t\t<tr>
\t\t\t<td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numberday", array()), 'widget', array("attr" => array("class" => "numberday span3")));
        echo "</td>\t
\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amorpm", array()), 'widget');
        echo "</td>\t\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t\t<tr>
            \t<th colspan=\"2\" class=\"sty_label\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.comment", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td colspan=\"2\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comment", array()), 'widget');
        echo "</td>\t\t\t
\t\t</tr>
\t\t<tr><td colspan=\"2\">&nbsp;</td></tr>
\t</table>";
        
        $__internal_a1b95267346a013fc655da9c35d08c0d38e036b3b9783caad307d857a976ffd8->leave($__internal_a1b95267346a013fc655da9c35d08c0d38e036b3b9783caad307d857a976ffd8_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:newform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  74 => 24,  70 => 23,  64 => 20,  60 => 19,  53 => 15,  49 => 14,  43 => 11,  39 => 10,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.motif'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.motif) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             <th width="40%" class="sty_label">{{'label.startdate'|trans([],'BoAdminBundle')}}</th>*/
/*            	<th width="40%" class="sty_label">{{'label.enddate'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.startdate, {'attr' : {'class' : 'abstart span3'}}) }}</td>*/
/* 			<td>{{ form_widget(form.enddate, {'attr' : {'class' : 'abend span3'}}) }}</td>	*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.numberday'|trans([],'BoAdminBundle')}}</th>*/
/*             <th class="sty_label">{{'label.amorpm'|trans([],'BoAdminBundle')}}</th>			*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>{{ form_widget(form.numberday, {'attr' : {'class' : 'numberday span3'}}) }}</td>	*/
/* 			<td>{{ form_widget(form.amorpm) }}</td>				*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 		<tr>*/
/*             	<th colspan="2" class="sty_label">{{'label.comment'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td colspan="2">{{ form_widget(form.comment) }}</td>			*/
/* 		</tr>*/
/* 		<tr><td colspan="2">&nbsp;</td></tr>*/
/* 	</table>*/
