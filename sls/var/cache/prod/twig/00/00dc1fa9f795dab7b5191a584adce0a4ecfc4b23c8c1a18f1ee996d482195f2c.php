<?php

/* BoUserBundle:Rights:selectsrubric.html.twig */
class __TwigTemplate_a39f3187ff5146f281008497d90b37546f8272e29b05a4b2940bf579b435a785 extends Twig_Template
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
        $__internal_95c6a163c0a7a41502901e577e803bc9b193368eca35191e1a574e06990f2dbf = $this->env->getExtension("native_profiler");
        $__internal_95c6a163c0a7a41502901e577e803bc9b193368eca35191e1a574e06990f2dbf->enter($__internal_95c6a163c0a7a41502901e577e803bc9b193368eca35191e1a574e06990f2dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoUserBundle:Rights:selectsrubric.html.twig"));

        // line 1
        echo "\t\t\t\t<select name='idsrubric' id='idsrubric'>
\t\t\t\t\t<option value=\"0\" selected=\"delected\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.selectsrubric", array(), "BoAdminBundle"), "html", null, true);
        echo "</option>
\t\t\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["srubrics"]) ? $context["srubrics"] : $this->getContext($context, "srubrics")));
        foreach ($context['_seq'] as $context["_key"] => $context["srubric"]) {
            // line 4
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["srubric"], "id", array()), "html", null, true);
            echo "\" ";
            if ((array_key_exists("idsrubric", $context) && ($this->getAttribute($context["srubric"], "id", array()) == (isset($context["idsrubric"]) ? $context["idsrubric"] : $this->getContext($context, "idsrubric"))))) {
                echo "selected='selected'";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["srubric"], "nameen", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['srubric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t\t\t</select>\t";
        
        $__internal_95c6a163c0a7a41502901e577e803bc9b193368eca35191e1a574e06990f2dbf->leave($__internal_95c6a163c0a7a41502901e577e803bc9b193368eca35191e1a574e06990f2dbf_prof);

    }

    public function getTemplateName()
    {
        return "BoUserBundle:Rights:selectsrubric.html.twig";
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
/* 				<select name='idsrubric' id='idsrubric'>*/
/* 					<option value="0" selected="delected">{{'action.selectsrubric'|trans([],'BoAdminBundle')}}</option>*/
/* 					{%for srubric in srubrics%}*/
/* 						<option value="{{srubric.id}}" {%if idsrubric is defined and srubric.id ==idsrubric%}selected='selected'{%endif%}>{{srubric.nameen}}</option>*/
/* 					{%endfor%}*/
/* 				</select>	*/
