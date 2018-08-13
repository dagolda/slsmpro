<?php

/* BoHomeBundle:Default:event-tab.html.twig */
class __TwigTemplate_092ad8a8ee4e2d5884c4fa4830a26d5accbb94c3e99d065caf7fea6c004b1333 extends Twig_Template
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
        $__internal_90f0327c000a7ed8887101264955de2448b42185415b9eb4704fe6f4755c16bb = $this->env->getExtension("native_profiler");
        $__internal_90f0327c000a7ed8887101264955de2448b42185415b9eb4704fe6f4755c16bb->enter($__internal_90f0327c000a7ed8887101264955de2448b42185415b9eb4704fe6f4755c16bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Default:event-tab.html.twig"));

        // line 1
        echo "\t\t\t\t    \t<table class=\"events_tableau\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t\t\t<td class=\"without_btl\">&nbsp;</td>
\t\t\t\t\t\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "\t\t\t\t\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array"), "l"), array(), "BoAdminBundle"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array"), "d-m-Y"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "\t\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 11
        $this->loadTemplate("BoHomeBundle:Default:scheduleam.html.twig", "BoHomeBundle:Default:event-tab.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t\t\t\t\t";
        $this->loadTemplate("BoHomeBundle:Default:schedulepm.html.twig", "BoHomeBundle:Default:event-tab.html.twig", 12)->display($context);
        // line 13
        echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t<input id=\"idemployee\" type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "\" />
\t\t<input id=\"startdate\" type=\"hidden\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t<input id=\"enddate\" type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t<input id=\"pstartdate\" type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pdates"]) ? $context["pdates"] : $this->getContext($context, "pdates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t<input id=\"penddate\" type=\"hidden\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pdates"]) ? $context["pdates"] : $this->getContext($context, "pdates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t<input id=\"nstartdate\" type=\"hidden\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndates"]) ? $context["ndates"] : $this->getContext($context, "ndates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t<input id=\"nenddate\" type=\"hidden\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndates"]) ? $context["ndates"] : $this->getContext($context, "ndates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
";
        
        $__internal_90f0327c000a7ed8887101264955de2448b42185415b9eb4704fe6f4755c16bb->leave($__internal_90f0327c000a7ed8887101264955de2448b42185415b9eb4704fe6f4755c16bb_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Default:event-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 13,  50 => 12,  48 => 11,  43 => 8,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* 				    	<table class="events_tableau">*/
/* 						<thead>*/
/* 							    <tr>*/
/* 									<td class="without_btl">&nbsp;</td>*/
/* 									{% for i in range(0,4) %}*/
/* 										<th>{{dates[i]|date("l")|trans([],'BoAdminBundle')}}<br>{{dates[i]|date("d-m-Y")}}</th>*/
/* 									{%endfor%}*/
/* 							    </tr>*/
/* 						</thead>*/
/* 						<tbody>						*/
/* 							{%include "BoHomeBundle:Default:scheduleam.html.twig"%}*/
/* 							{%include "BoHomeBundle:Default:schedulepm.html.twig"%}*/
/* 						</tbody>*/
/* 					</table>*/
/* 		<input id="idemployee" type="hidden" value="{{employee.id}}" />*/
/* 		<input id="startdate" type="hidden" value="{{dates[0]|date("d-m-Y")}}" />*/
/* 		<input id="enddate" type="hidden" value="{{dates[6]|date("d-m-Y")}}" />*/
/* 		<input id="pstartdate" type="hidden" value="{{pdates[0]|date("d-m-Y")}}" />*/
/* 		<input id="penddate" type="hidden" value="{{pdates[6]|date("d-m-Y")}}" />*/
/* 		<input id="nstartdate" type="hidden" value="{{ndates[0]|date("d-m-Y")}}" />*/
/* 		<input id="nenddate" type="hidden" value="{{ndates[6]|date("d-m-Y")}}" />*/
/* */
