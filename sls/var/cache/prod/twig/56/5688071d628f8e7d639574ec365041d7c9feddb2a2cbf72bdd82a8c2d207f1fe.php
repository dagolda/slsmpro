<?php

/* BoAdvisorsBundle:Tickets:selecttype.html.twig */
class __TwigTemplate_29a2b0fb1b010b7febc3510940517f5014109a5e48e8865975f8c1ca0ad490a3 extends Twig_Template
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
        $__internal_af189e4790c9941bb1746635c7cbb74513e29cf53468c2841c8550ebd8cadcf9 = $this->env->getExtension("native_profiler");
        $__internal_af189e4790c9941bb1746635c7cbb74513e29cf53468c2841c8550ebd8cadcf9->enter($__internal_af189e4790c9941bb1746635c7cbb74513e29cf53468c2841c8550ebd8cadcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Tickets:selecttype.html.twig"));

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
            if ((array_key_exists("idtype", $context) && ((isset($context["idtype"]) ? $context["idtype"] : $this->getContext($context, "idtype")) == $this->getAttribute($context["type"], "id", array())))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>
";
        
        $__internal_af189e4790c9941bb1746635c7cbb74513e29cf53468c2841c8550ebd8cadcf9->leave($__internal_af189e4790c9941bb1746635c7cbb74513e29cf53468c2841c8550ebd8cadcf9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Tickets:selecttype.html.twig";
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
/* 						<option value="{{type.id}}" {%if idtype is defined and idtype ==type.id%}selected='selected'{%endif%}>{{type.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>*/
/* */
