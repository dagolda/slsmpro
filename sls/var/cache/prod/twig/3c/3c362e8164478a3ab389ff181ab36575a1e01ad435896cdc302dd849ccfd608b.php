<?php

/* BoAdminBundle:Students:scheduleam.html.twig */
class __TwigTemplate_b67bcf22ea3c0effc4cc3fd6923d1e5c9e6864dac5267910d72c2d0272d71e0a extends Twig_Template
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
        $__internal_90b834788e238ff4a00e887e7d22cc30b54d7c4fcac45be542f27711fa7ca15f = $this->env->getExtension("native_profiler");
        $__internal_90b834788e238ff4a00e887e7d22cc30b54d7c4fcac45be542f27711fa7ca15f->enter($__internal_90b834788e238ff4a00e887e7d22cc30b54d7c4fcac45be542f27711fa7ca15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:scheduleam.html.twig"));

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
            $context["tab"] = $this->getAttribute((isset($context["tb_am"]) ? $context["tb_am"] : $this->getContext($context, "tb_am")), 0, array(), "array");
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
            $this->loadTemplate("BoAdminBundle:Students:tab.html.twig", "BoAdminBundle:Students:scheduleam.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t<tr></tr>
\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tb_am"]) ? $context["tb_am"] : $this->getContext($context, "tb_am")));
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
                // line 22
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t\t";
                // line 24
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.am", array(), "BoAdminBundle"), "html", null, true);
                } else {
                    echo "&nbsp;";
                }
                // line 25
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                // line 26
                $this->loadTemplate("BoAdminBundle:Students:tab.html.twig", "BoAdminBundle:Students:scheduleam.html.twig", 26)->display($context);
                // line 27
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                // line 28
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 29
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
            // line 30
            echo "\t\t\t\t";
        }
        
        $__internal_90b834788e238ff4a00e887e7d22cc30b54d7c4fcac45be542f27711fa7ca15f->leave($__internal_90b834788e238ff4a00e887e7d22cc30b54d7c4fcac45be542f27711fa7ca15f_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:scheduleam.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  111 => 29,  109 => 28,  106 => 27,  104 => 26,  101 => 25,  95 => 24,  91 => 22,  74 => 21,  71 => 20,  67 => 18,  65 => 17,  60 => 15,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  41 => 8,  37 => 7,  32 => 5,  25 => 2,  22 => 1,);
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
/* 					{%set tab=tb_am[0]%}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							<span>{{'label.am'|trans([],'BoAdminBundle')}}</span>*/
/* 						</td>					*/
/* 						{%include "BoAdminBundle:Students:tab.html.twig"%}*/
/* 					</tr>*/
/* 				{%else%}*/
/* 					<tr></tr>*/
/* 					{% for tab in tb_am %}*/
/* 						<tr>*/
/* 							<td class="events-amorpm">*/
/* 								{%if i==1%}{{'label.am'|trans([],'BoAdminBundle')}}{%else%}&nbsp;{%endif%}*/
/* 							</td>*/
/* 							{%include "BoAdminBundle:Students:tab.html.twig"%}*/
/* 						</tr>*/
/* 						{%set i=i+1%}*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* */
