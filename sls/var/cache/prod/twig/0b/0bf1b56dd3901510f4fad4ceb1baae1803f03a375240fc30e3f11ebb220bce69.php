<?php

/* BoHomeBundle:Default:ntab.html.twig */
class __TwigTemplate_ed9beb2173522b4ab42d51888ce346e758cf0f35fbbe76dd996828debe2d3429 extends Twig_Template
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
        $__internal_3958586e8d87555d11307f86e544a4faebc2183ab9bb571bcd91480d3c24eb42 = $this->env->getExtension("native_profiler");
        $__internal_3958586e8d87555d11307f86e544a4faebc2183ab9bb571bcd91480d3c24eb42->enter($__internal_3958586e8d87555d11307f86e544a4faebc2183ab9bb571bcd91480d3c24eb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:ntab.html.twig"));

        // line 1
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "\t\t\t<td class='events-value ";
            if (($this->getAttribute((isset($context["ndates"]) ? $context["ndates"] : $this->getContext($context, "ndates")), $context["i"], array(), "array") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                echo "agenda-week-p";
            } elseif ((($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", false, true), "absence", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : $this->getContext($context, "ntab")), $context["i"], array(), "array"), "absence", array(), "array") == 1))) {
                echo "agenda-week-a";
            } elseif ((($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", false, true), "s_absence", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : $this->getContext($context, "ntab")), $context["i"], array(), "array"), "s_absence", array(), "array") == 1))) {
                echo "agenda-week-as";
            } elseif ((($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", false, true), "option", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : $this->getContext($context, "ntab")), $context["i"], array(), "array"), "option", array(), "array") == 1))) {
                echo "agenda-week";
            } else {
                echo "agenda-week-s";
            }
            echo "'>
\t\t\t<div>";
            // line 3
            if (($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : null), $context["i"], array(), "array", false, true), "label", array(), "array", true, true))) {
                echo $this->getAttribute($this->getAttribute((isset($context["ntab"]) ? $context["ntab"] : $this->getContext($context, "ntab")), $context["i"], array(), "array"), "label", array(), "array");
            } else {
            }
            echo "</div>
\t\t\t<br/>\t\t\t\t\t
\t\t\t</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_3958586e8d87555d11307f86e544a4faebc2183ab9bb571bcd91480d3c24eb42->leave($__internal_3958586e8d87555d11307f86e544a4faebc2183ab9bb571bcd91480d3c24eb42_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:ntab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  27 => 2,  22 => 1,);
    }
}
/* 		{% for i in range(0,4) %}*/
/* 			<td class='events-value {%if ndates[i]<today %}agenda-week-p{%elseif ntab[i] is defined and ntab[i]['absence'] is defined and ntab[i]['absence']==1%}agenda-week-a{%elseif ntab[i] is defined and ntab[i]['s_absence'] is defined and ntab[i]['s_absence']==1%}agenda-week-as{%elseif ntab[i] is defined and ntab[i]['option'] is defined and ntab[i]['option']==1%}agenda-week{%else%}agenda-week-s{%endif%}'>*/
/* 			<div>{%if ntab[i] is defined and ntab[i]['label'] is defined%}{{ntab[i]['label']|raw}}{%else%}{%endif%}</div>*/
/* 			<br/>					*/
/* 			</td>*/
/* 		{%endfor%}*/
/* */
