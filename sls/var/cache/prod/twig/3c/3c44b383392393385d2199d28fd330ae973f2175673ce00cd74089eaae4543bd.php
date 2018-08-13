<?php

/* BoAdminBundle:Substitution:extrasearch.html.twig */
class __TwigTemplate_e3b86bc0c0b522ff6a7207c48b35c7b2ee851d95cb7e4c63242013dca0bcf88b extends Twig_Template
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
        $__internal_3e3b0983c8b488ca9db531e1d255d3d8becc242f98c5c033b28c02299b28ebc5 = $this->env->getExtension("native_profiler");
        $__internal_3e3b0983c8b488ca9db531e1d255d3d8becc242f98c5c033b28c02299b28ebc5->enter($__internal_3e3b0983c8b488ca9db531e1d255d3d8becc242f98c5c033b28c02299b28ebc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Substitution:extrasearch.html.twig"));

        // line 1
        echo "\t\t\t<table width=\"100%\">
\t\t\t\t<tr>
\t\t\t\t\t<td>\t\t\t\t\t
\t\t\t\t\t\t<select name='holders' id='holders' required=\"true\">
\t\t\t\t\t\t\t<option value=\"0\" selected=\"delected\">Select holder</option>
\t\t\t\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["holderlist"]) ? $context["holderlist"] : $this->getContext($context, "holderlist")));
        foreach ($context['_seq'] as $context["_key"] => $context["holder"]) {
            // line 7
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["holder"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idholder", $context) && ($this->getAttribute($context["holder"], "id", array()) == (isset($context["idholder"]) ? $context["idholder"] : $this->getContext($context, "idholder"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["holder"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["holder"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['holder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t\t\t\t\t</select>\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select name='substitute' id='substitute' required=\"true\">
\t\t\t\t\t\t\t<option value=\"0\" selected=\"delected\">Select substitute</option>
\t\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subslist"]) ? $context["subslist"] : $this->getContext($context, "subslist")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 15
            echo "\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idteacher", $context) && ($this->getAttribute($context["teacher"], "id", array()) == (isset($context["idteacher"]) ? $context["idteacher"] : $this->getContext($context, "idteacher"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t\t\t</select>\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty_label\">DU&nbsp;</td>
\t\t\t\t\t<td class=\"sty_value\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "startdate", array()), 'widget', array("attr" => array("class" => "start span3")));
        echo "</td>
\t\t\t\t\t<td width=\"25\">&nbsp;</td>
\t\t\t\t\t<td class=\"sty_label\">AU&nbsp;</td>
\t\t\t\t\t<td class=\"sty_value\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ccd_form"]) ? $context["ccd_form"] : $this->getContext($context, "ccd_form")), "enddate", array()), 'widget', array("attr" => array("class" => "endamclass span3")));
        echo "</td>\t
\t\t\t\t</tr>
\t\t\t</table>
";
        
        $__internal_3e3b0983c8b488ca9db531e1d255d3d8becc242f98c5c033b28c02299b28ebc5->leave($__internal_3e3b0983c8b488ca9db531e1d255d3d8becc242f98c5c033b28c02299b28ebc5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Substitution:extrasearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 20,  78 => 17,  61 => 15,  57 => 14,  50 => 9,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* 			<table width="100%">*/
/* 				<tr>*/
/* 					<td>					*/
/* 						<select name='holders' id='holders' required="true">*/
/* 							<option value="0" selected="delected">Select holder</option>*/
/* 							{%for holder in holderlist%}*/
/* 								<option value="{{holder.id}}" {%if idholder is defined and holder.id ==idholder%}selected='selected'{%endif%}>{{holder.firstname}} {{holder.name}}</option>*/
/* 							{%endfor%}*/
/* 						</select>		*/
/* 					</td>*/
/* 					<td>*/
/* 						<select name='substitute' id='substitute' required="true">*/
/* 							<option value="0" selected="delected">Select substitute</option>*/
/* 							{%for teacher in subslist%}*/
/* 								<option value="{{teacher.id}}" {%if idteacher is defined and teacher.id==idteacher%}selected='selected'{%endif%}>{{teacher.firstname}} {{teacher.name}}</option>*/
/* 							{%endfor%}*/
/* 						</select>				*/
/* 					</td>*/
/* 					<td class="sty_label">DU&nbsp;</td>*/
/* 					<td class="sty_value">{{ form_widget(ccd_form.startdate, {'attr' : {'class' : 'start span3'}}) }}</td>*/
/* 					<td width="25">&nbsp;</td>*/
/* 					<td class="sty_label">AU&nbsp;</td>*/
/* 					<td class="sty_value">{{ form_widget(ccd_form.enddate, {'attr' : {'class' : 'endamclass span3'}}) }}</td>	*/
/* 				</tr>*/
/* 			</table>*/
/* */
