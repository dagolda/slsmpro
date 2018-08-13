<?php

/* BoHomeBundle:Default:nschedulepm.html.twig */
class __TwigTemplate_39f80150bce1b402fd4994249aaf7ea2105e10994ed88d090eec597885590e52 extends Twig_Template
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
        $__internal_98bfc5702bdc603ab2f7a5ad7ec31b2e671738b90bbc6429bd96eb5a49e5565b = $this->env->getExtension("native_profiler");
        $__internal_98bfc5702bdc603ab2f7a5ad7ec31b2e671738b90bbc6429bd96eb5a49e5565b->enter($__internal_98bfc5702bdc603ab2f7a5ad7ec31b2e671738b90bbc6429bd96eb5a49e5565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:nschedulepm.html.twig"));

        // line 1
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["ntb_pm"]) ? $context["ntb_pm"] : $this->getContext($context, "ntb_pm"))) == 0)) {
            echo "\t\t\t\t\t\t
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                echo "\t\t\t\t\t\t\t<td class='events-value'>&nbsp;</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } elseif ((twig_length_filter($this->env,         // line 10
(isset($context["ntb_pm"]) ? $context["ntb_pm"] : $this->getContext($context, "ntb_pm"))) == 1)) {
            // line 11
            echo "\t\t\t\t\t";
            $context["ntab"] = $this->getAttribute((isset($context["ntb_pm"]) ? $context["ntb_pm"] : $this->getContext($context, "ntb_pm")), 0, array(), "array");
            // line 12
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>\t\t\t\t\t
\t\t\t\t\t\t";
            // line 16
            $this->loadTemplate("BoHomeBundle:Default:ntab.html.twig", "BoHomeBundle:Default:nschedulepm.html.twig", 16)->display($context);
            // line 17
            echo "\t\t\t\t\t</tr>
\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ntb_pm"]) ? $context["ntb_pm"] : $this->getContext($context, "ntb_pm")));
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
                // line 20
                echo "\t\t\t\t\t";
                $context["i"] = 1;
                // line 21
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"events-amorpm\">
\t\t\t\t\t\t\t";
                // line 23
                if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 1)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.pm", array(), "BoAdminBundle"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 29
                $this->loadTemplate("BoHomeBundle:Default:ntab.html.twig", "BoHomeBundle:Default:nschedulepm.html.twig", 29)->display($context);
                // line 30
                echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
                // line 31
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 32
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
            // line 33
            echo "\t\t\t\t";
        }
        
        $__internal_98bfc5702bdc603ab2f7a5ad7ec31b2e671738b90bbc6429bd96eb5a49e5565b->leave($__internal_98bfc5702bdc603ab2f7a5ad7ec31b2e671738b90bbc6429bd96eb5a49e5565b_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:nschedulepm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  115 => 32,  113 => 31,  110 => 30,  108 => 29,  105 => 28,  101 => 26,  95 => 24,  93 => 23,  89 => 21,  86 => 20,  68 => 19,  64 => 17,  62 => 16,  57 => 14,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  38 => 7,  34 => 6,  29 => 4,  22 => 1,);
    }
}
/* 				{%if ntb_pm|length==0%}						*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{{'label.pm'|trans([],'BoAdminBundle')}}*/
/* 						</td>*/
/* 						{% for i in range(0,4) %}*/
/* 							<td class='events-value'>&nbsp;</td>*/
/* 						{%endfor%}*/
/* 					</tr>*/
/* 				{%elseif ntb_pm|length==1%}*/
/* 					{%set ntab=ntb_pm[0]%}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{{'label.pm'|trans([],'BoAdminBundle')}}*/
/* 						</td>					*/
/* 						{%include "BoHomeBundle:Default:ntab.html.twig"%}*/
/* 					</tr>*/
/* 				{%else%}*/
/* 					{% for tab in ntb_pm %}*/
/* 					{%set i=1%}*/
/* 					<tr>*/
/* 						<td class="events-amorpm">*/
/* 							{%if i==1%}*/
/* 								{{'label.pm'|trans([],'BoAdminBundle')}}*/
/* 							{%else%}*/
/* 								&nbsp;*/
/* 							{%endif%}*/
/* 						</td>*/
/* 						{%include "BoHomeBundle:Default:ntab.html.twig"%}*/
/* 					</tr>*/
/* 					{%set i=i+1%}*/
/* 					{%endfor%}*/
/* 				{%endif%}*/
/* */
