<?php

/* BoHomeBundle:Default:tab.html.twig */
class __TwigTemplate_cbb429bb66ec17d062ce8c2900dfb1d563159bff82711895109b11491f23f1d9 extends Twig_Template
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
        $__internal_6c52e53152530f43f3655b240be25c07499243c47723d32b3d06d9a6ca640799 = $this->env->getExtension("native_profiler");
        $__internal_6c52e53152530f43f3655b240be25c07499243c47723d32b3d06d9a6ca640799->enter($__internal_6c52e53152530f43f3655b240be25c07499243c47723d32b3d06d9a6ca640799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:tab.html.twig"));

        // line 1
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "\t\t\t<td class='events-value ";
            if ((($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", false, true), "absence", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "absence", array(), "array") == 1))) {
                echo "agenda-week-a";
            } elseif (((($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", false, true), "s_absence", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "s_absence", array(), "array") == 1)) && ($this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "idgroup", array(), "array") == null))) {
                echo "agenda-week-a";
            } elseif (($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                echo "agenda-week-p";
            } elseif ((($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", false, true), "option", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "option", array(), "array") == 1))) {
                echo "agenda-week";
            } elseif ((($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", false, true), "option", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "option", array(), "array") == 2))) {
                echo "agenda-week-s";
            } else {
                echo "agenda-week-p";
            }
            echo "'>
\t\t\t\t<div>
\t\t\t\t";
            // line 4
            if (($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", true, true) && $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), $context["i"], array(), "array", false, true), "label", array(), "array", true, true))) {
                echo $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")), $context["i"], array(), "array"), "label", array(), "array");
            } else {
                echo "&nbsp;";
            }
            // line 5
            echo "\t\t\t\t</div>
\t\t\t\t<br/>
\t\t\t</td>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6c52e53152530f43f3655b240be25c07499243c47723d32b3d06d9a6ca640799->leave($__internal_6c52e53152530f43f3655b240be25c07499243c47723d32b3d06d9a6ca640799_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  45 => 4,  27 => 2,  22 => 1,);
    }
}
/* 		{% for i in range(0,4) %}*/
/* 			<td class='events-value {%if tab[i] is defined and tab[i]['absence'] is defined and tab[i]['absence']==1%}agenda-week-a{%elseif tab[i] is defined and tab[i]['s_absence'] is defined and tab[i]['s_absence']==1 and tab[i]['idgroup']==null%}agenda-week-a{%elseif dates[i]<today %}agenda-week-p{%elseif tab[i] is defined and tab[i]['option'] is defined and tab[i]['option']==1%}agenda-week{%elseif tab[i] is defined and tab[i]['option'] is defined and tab[i]['option']==2%}agenda-week-s{%else%}agenda-week-p{%endif%}'>*/
/* 				<div>*/
/* 				{%if tab[i] is defined and tab[i]['label'] is defined%}{{tab[i]['label']|raw}}{%else%}&nbsp;{%endif%}*/
/* 				</div>*/
/* 				<br/>*/
/* 			</td>*/
/* 		{%endfor%}*/
/* */
