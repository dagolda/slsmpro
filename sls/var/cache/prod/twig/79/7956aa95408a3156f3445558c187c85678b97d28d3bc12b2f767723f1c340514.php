<?php

/* BoAdvisorsBundle:Orderform:selectlangage.html.twig */
class __TwigTemplate_6d8f063a74c7616472fcb8350fe280ca7c8c822e4904914d2e21abbb0517a213 extends Twig_Template
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
        $__internal_3ac69cddbd6f0757d5bac88c838b31848a0773ee7072cd8416e7a7e681b2da4f = $this->env->getExtension("native_profiler");
        $__internal_3ac69cddbd6f0757d5bac88c838b31848a0773ee7072cd8416e7a7e681b2da4f->enter($__internal_3ac69cddbd6f0757d5bac88c838b31848a0773ee7072cd8416e7a7e681b2da4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Orderform:selectlangage.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idlangage' id='idlangage'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectlanguage", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["langage"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idlangage", $context) && ($this->getAttribute($context["langage"], "id", array()) == (isset($context["idlangage"]) ? $context["idlangage"] : $this->getContext($context, "idlangage"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["langage"], "name", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_3ac69cddbd6f0757d5bac88c838b31848a0773ee7072cd8416e7a7e681b2da4f->leave($__internal_3ac69cddbd6f0757d5bac88c838b31848a0773ee7072cd8416e7a7e681b2da4f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Orderform:selectlangage.html.twig";
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
/* 				<select name='idlangage' id='idlangage'>*/
/* 					<option value="0" selected="delected">{{'action.selectlanguage'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for langage in languages%}*/
/* 						<option value="{{langage.id}}" {%if idlangage is defined and langage.id ==idlangage%}selected='selected'{%endif%}>{{langage.name}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
