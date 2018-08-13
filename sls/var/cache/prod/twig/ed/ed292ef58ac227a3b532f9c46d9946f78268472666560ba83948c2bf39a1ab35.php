<?php

/* BoAdminBundle:Employee:subsgroupform.html.twig */
class __TwigTemplate_aac4e1512c2058aea5d77ef222193e852d93cc8c9b4e126bc91fa0542e7645df extends Twig_Template
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
        $__internal_e5ae93d2e6cbaa2f449bc24e4ab77aa39680b597d84eb513e7d29c1181a0392f = $this->env->getExtension("native_profiler");
        $__internal_e5ae93d2e6cbaa2f449bc24e4ab77aa39680b597d84eb513e7d29c1181a0392f->enter($__internal_e5ae93d2e6cbaa2f449bc24e4ab77aa39680b597d84eb513e7d29c1181a0392f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:subsgroupform.html.twig"));

        // line 1
        echo "\t<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" id=\"new_row\">
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.holder", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>\t\t\t\t\t
\t\t\t\t<input name=\"holder\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holder"]) ? $context["holder"] : $this->getContext($context, "holder")), 1, array(), "array"), "html", null, true);
        echo "\" disabled=\"disabled\" size=\"50\"/>
\t\t\t\t<input type=\"hidden\" name=\"holders\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["holder"]) ? $context["holder"] : $this->getContext($context, "holder")), 0, array(), "array"), "html", null, true);
        echo "\"/>
\t\t\t</td>
\t\t</tr>
\t\t<tr><td>&nbsp;</td></tr>
\t\t<tr>
\t\t\t<th class=\"sty_label\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.substitute", array(), "BoAdminBundle"), "html", null, true);
        echo "</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td>
\t\t\t\t<select name='teachers' id='teachers' required>
\t\t\t\t\t<option value=\"\">Select substitute</option>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subsgroup"]) ? $context["subsgroup"] : $this->getContext($context, "subsgroup")), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 20
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 0, array(), "array"), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idteacher", $context) && ($this->getAttribute($context["teacher"], 0, array(), "array") == (isset($context["idteacher"]) ? $context["idteacher"] : $this->getContext($context, "idteacher"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], 1, array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</select>\t\t\t\t
\t\t\t</td>
\t\t</tr>
\t</table>
\t<br/>
\t<div>
\t\t";
        // line 28
        $this->loadTemplate("BoAdminBundle:Employee:subschedule.html.twig", "BoAdminBundle:Employee:subsgroupform.html.twig", 28)->display($context);
        // line 29
        echo "\t</div>
\t<input type=\"hidden\" name=\"idgroup\" id=\"idgroup\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        echo "\"/>
";
        
        $__internal_e5ae93d2e6cbaa2f449bc24e4ab77aa39680b597d84eb513e7d29c1181a0392f->leave($__internal_e5ae93d2e6cbaa2f449bc24e4ab77aa39680b597d84eb513e7d29c1181a0392f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:subsgroupform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  83 => 29,  81 => 28,  73 => 22,  58 => 20,  54 => 19,  45 => 13,  37 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }
}
/* 	<table border="0" cellpadding="0" cellspacing="0" id="new_row">*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.holder'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>					*/
/* 				<input name="holder" value="{{holder[1]}}" disabled="disabled" size="50"/>*/
/* 				<input type="hidden" name="holders" value="{{holder[0]}}"/>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr><td>&nbsp;</td></tr>*/
/* 		<tr>*/
/* 			<th class="sty_label">{{'label.substitute'|trans([],'BoAdminBundle')}}</th>*/
/* 		</tr>*/
/* 		<tr>*/
/* 			<td>*/
/* 				<select name='teachers' id='teachers' required>*/
/* 					<option value="">Select substitute</option>*/
/* 					{%for teacher in subsgroup[group.id]%}*/
/* 						<option value="{{teacher[0]}}" {%if idteacher is defined and teacher[0] ==idteacher%}selected='selected'{%endif%}>{{teacher[1]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>				*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
/* 	<br/>*/
/* 	<div>*/
/* 		{%include "BoAdminBundle:Employee:subschedule.html.twig"%}*/
/* 	</div>*/
/* 	<input type="hidden" name="idgroup" id="idgroup" value="{{group.id}}"/>*/
/* */
