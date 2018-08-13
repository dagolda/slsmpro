<?php

/* BoAdminBundle:Employee:selectlangage.html.twig */
class __TwigTemplate_1848c6f9e41b8b6da797581e1ad3d2385ded58a4a13ae6afa04aadde27d968ba extends Twig_Template
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
        $__internal_73ae491224a39d9a8d5683fd422124c882418529d4d7ff4107e1f5f2f9d2bf8a = $this->env->getExtension("native_profiler");
        $__internal_73ae491224a39d9a8d5683fd422124c882418529d4d7ff4107e1f5f2f9d2bf8a->enter($__internal_73ae491224a39d9a8d5683fd422124c882418529d4d7ff4107e1f5f2f9d2bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:selectlangage.html.twig"));

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
        
        $__internal_73ae491224a39d9a8d5683fd422124c882418529d4d7ff4107e1f5f2f9d2bf8a->leave($__internal_73ae491224a39d9a8d5683fd422124c882418529d4d7ff4107e1f5f2f9d2bf8a_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:selectlangage.html.twig";
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
