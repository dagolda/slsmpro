<?php

/* BoAdminBundle:Students:schedulepm.html.twig */
class __TwigTemplate_120e02dc6b810d0774b396b8c9a482fff1a39cc9465f0e6b6c248fec35ed61a1 extends Twig_Template
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
        $__internal_9d904210dd2dc4df05ea801a71acaccca95100bf0ef8eb0b81653d53e0c6d1d6 = $this->env->getExtension("native_profiler");
        $__internal_9d904210dd2dc4df05ea801a71acaccca95100bf0ef8eb0b81653d53e0c6d1d6->enter($__internal_9d904210dd2dc4df05ea801a71acaccca95100bf0ef8eb0b81653d53e0c6d1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:schedulepm.html.twig"));

        // line 1
        echo "\t\t\t\t";
        $context["i"] = 1;
        // line 2
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["tb_pm"]) ? $context["tb_pm"] : $this->getContext($context, "tb_pm"))) == 0)) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
            echo "
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
(isset($context["tb_pm"]) ? $context["tb_pm"] : $this->getContext($context, "tb_pm"))) == 1)) {
            // line 12
            echo "\t\t\t\t\t";
            $context["tab"] = $this->getAttribute((isset($context["tb_pm"]) ? $context["tb_pm"] : $this->getContext($context, "tb_pm")), 0, array(), "array");
            // line 13
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>\t\t\t\t\t
\t\t\t\t\t\t";
            // line 17
            $this->loadTemplate("BoAdminBundle:Students:tab.html.twig", "BoAdminBundle:Students:schedulepm.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tb_pm"]) ? $context["tb_pm"] : $this->getContext($context, "tb_pm")));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
                } else {
                    echo "&nbsp;";
                }
                // line 24
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 25
                $this->loadTemplate("BoAdminBundle:Students:tab.html.twig", "BoAdminBundle:Students:schedulepm.html.twig", 25)->display($context);
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
        
        $__internal_9d904210dd2dc4df05ea801a71acaccca95100bf0ef8eb0b81653d53e0c6d1d6->leave($__internal_9d904210dd2dc4df05ea801a71acaccca95100bf0ef8eb0b81653d53e0c6d1d6_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:schedulepm.html.twig";
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
/* 				{%if tb_pm|length==0%}						*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{{'label.pm'|trans([],'BoAdminBundle')}}*/
/* 						</td>*/
/* 						{% for i in range(0,4) %}*/
/* 							<td class='events-value'>&nbsp;</td>*/
/* 						{%endfor%}*/
/* 					</tr>*/
/* 				{%elseif tb_pm|length==1%}*/
/* 					{%set tab=tb_pm[0]%}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{{'label.pm'|trans([],'BoAdminBundle')}}*/
/* 						</td>					*/
/* 						{%include "BoAdminBundle:Students:tab.html.twig"%}*/
/* 					</tr>*/
/* 				{%else%}*/
/* 					{% for tab in tb_pm %}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{%if i==1%}{{'label.pm'|trans([],'BoAdminBundle')}}{%else%}&nbsp;{%endif%}*/
/* 						</td>*/
/* 						{%include "BoAdminBundle:Students:tab.html.twig"%}*/
/* 					</tr>*/
/* 					{%set i=i+1%}*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* */
