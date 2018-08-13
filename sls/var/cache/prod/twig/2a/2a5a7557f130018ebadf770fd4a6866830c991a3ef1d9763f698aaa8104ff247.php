<?php

/* BoAdvisorsBundle:Tickets:selectstatus.html.twig */
class __TwigTemplate_6c6d36e89c6724f2d79bd4adc385f8adf8369063d3c81a2387a3da443c9e1671 extends Twig_Template
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
        $__internal_be6437b2fa28beb232425f2480ddabfe392ac5177b307b670652acf884562696 = $this->env->getExtension("native_profiler");
        $__internal_be6437b2fa28beb232425f2480ddabfe392ac5177b307b670652acf884562696->enter($__internal_be6437b2fa28beb232425f2480ddabfe392ac5177b307b670652acf884562696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:selectstatus.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idstatus' id='idstatus'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectstatus", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if ((array_key_exists("idstatus", $context) && ($context["i"] == (isset($context["idstatus"]) ? $context["idstatus"] : $this->getContext($context, "idstatus"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>
";
        
        $__internal_be6437b2fa28beb232425f2480ddabfe392ac5177b307b670652acf884562696->leave($__internal_be6437b2fa28beb232425f2480ddabfe392ac5177b307b670652acf884562696_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:selectstatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* 				<select name='idstatus' id='idstatus'>*/
/* 					<option value="0" selected="delected">{{'action.selectstatus'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for i in range(1,status|length)%}*/
/* 						<option value="{{i}}" {%if idstatus is defined and  i==idstatus%}selected='selected'{%endif%}>{{status[i]}}</option>*/
/* 					{%endfor%}*/
/* 				</select>*/
/* */
