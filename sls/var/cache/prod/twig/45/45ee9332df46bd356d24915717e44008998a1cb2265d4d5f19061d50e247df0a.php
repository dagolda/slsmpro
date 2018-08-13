<?php

/* BoHomeBundle:Default:nscheduleam.html.twig */
class __TwigTemplate_11e5143c90bf161329e9f58ad31a74833d5588047b00a2c6c0c5a17d071f6d25 extends Twig_Template
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
        $__internal_70b4481009b97ec75781f5df353d84bdeab3ae9c8e6ef9f39e600ba1dc2868c0 = $this->env->getExtension("native_profiler");
        $__internal_70b4481009b97ec75781f5df353d84bdeab3ae9c8e6ef9f39e600ba1dc2868c0->enter($__internal_70b4481009b97ec75781f5df353d84bdeab3ae9c8e6ef9f39e600ba1dc2868c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:nscheduleam.html.twig"));

        // line 1
        echo "\t\t\t\t";
        $context["i"] = 1;
        // line 2
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["tb_am"]) ? $context["tb_am"] : $this->getContext($context, "tb_am"))) == 0)) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t<span>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.am", array(), "BoAdminBundle"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 8
                echo "\t\t\t\t\t\t\t<td class='events-value'>&nbsp;</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env,         // line 11
(isset($context["tb_am"]) ? $context["tb_am"] : $this->getContext($context, "tb_am"))) == 1)) {
            // line 12
            echo "\t\t\t\t\t";
            $context["ntab"] = $this->getAttribute((isset($context["ntb_am"]) ? $context["ntb_am"] : $this->getContext($context, "ntb_am")), 0, array(), "array");
            // line 13
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t<span>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.am", array(), "BoAdminBundle"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</td>\t\t\t\t\t
\t\t\t\t\t\t";
            // line 17
            $this->loadTemplate("BoHomeBundle:Default:ntab.html.twig", "BoHomeBundle:Default:nscheduleam.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ntb_am"]) ? $context["ntb_am"] : $this->getContext($context, "ntb_am")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 21
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
                // line 23
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.am", array(), "BoAdminBundle"), "html", null, true);
                } else {
                    echo "&nbsp;";
                }
                // line 24
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 25
                $this->loadTemplate("BoHomeBundle:Default:ntab.html.twig", "BoHomeBundle:Default:nscheduleam.html.twig", 25)->display($context);
                // line 26
                echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 27
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 28
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t";
        }
        
        $__internal_70b4481009b97ec75781f5df353d84bdeab3ae9c8e6ef9f39e600ba1dc2868c0->leave($__internal_70b4481009b97ec75781f5df353d84bdeab3ae9c8e6ef9f39e600ba1dc2868c0_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:nscheduleam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 29,  109 => 28,  107 => 27,  104 => 26,  102 => 25,  99 => 24,  93 => 23,  89 => 21,  71 => 20,  67 => 18,  65 => 17,  60 => 15,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  41 => 8,  37 => 7,  32 => 5,  25 => 2,  22 => 1,);
    }
}
/* 				{%set i=1%}*/
/* 				{%if tb_am|length==0%}						*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							<span>{{'label.am'|trans([],'BoAdminBundle')}}</span>*/
/* 						</td>*/
/* 						{% for i in range(0,4) %}*/
/* 							<td class='events-value'>&nbsp;</td>*/
/* 						{%endfor%}*/
/* 					</tr>*/
/* 				{%elseif tb_am|length==1%}*/
/* 					{%set ntab=ntb_am[0]%}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							<span>{{'label.am'|trans([],'BoAdminBundle')}}</span>*/
/* 						</td>					*/
/* 						{%include "BoHomeBundle:Default:ntab.html.twig"%}*/
/* 					</tr>*/
/* 				{%else%}*/
/* 					{% for tab in ntb_am %}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{%if i==1%}{{'label.am'|trans([],'BoAdminBundle')}}{%else%}&nbsp;{%endif%}*/
/* 						</td>*/
/* 						{%include "BoHomeBundle:Default:ntab.html.twig"%}*/
/* 					</tr>*/
/* 					{%set i=i+1%}*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* */
