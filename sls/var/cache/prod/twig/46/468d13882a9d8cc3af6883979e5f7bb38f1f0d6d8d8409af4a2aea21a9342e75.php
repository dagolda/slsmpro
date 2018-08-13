<?php

/* BoAdminBundle:Contracts:selecttype.html.twig */
class __TwigTemplate_2a937ff4d8e492d6e05b4cb91e7cff2558c2bdcea3a296cb54e8b6ef4129181f extends Twig_Template
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
        $__internal_de61e04748f8a6937558bb0f12ae6d5afcfcaa9f4bf4200b2c453e9577aeabaa = $this->env->getExtension("native_profiler");
        $__internal_de61e04748f8a6937558bb0f12ae6d5afcfcaa9f4bf4200b2c453e9577aeabaa->enter($__internal_de61e04748f8a6937558bb0f12ae6d5afcfcaa9f4bf4200b2c453e9577aeabaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:selecttype.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idtype' id='idtype'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selecttype", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idtype", $context) && ($this->getAttribute($context["type"], "id", array()) == (isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "reference", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_de61e04748f8a6937558bb0f12ae6d5afcfcaa9f4bf4200b2c453e9577aeabaa->leave($__internal_de61e04748f8a6937558bb0f12ae6d5afcfcaa9f4bf4200b2c453e9577aeabaa_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:selecttype.html.twig";
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
/* 				<select name='idtype' id='idtype'>*/
/* 					<option value="0" selected="delected">{{'action.selecttype'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for type in types%}*/
/* 						<option value="{{type.id}}" {%if idtype is defined and type.id ==idtype%}selected='selected'{%endif%}>{{type.reference}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
