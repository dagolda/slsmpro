<?php

/* BoAdminBundle:Students:schedules.html.twig */
class __TwigTemplate_468eb0ce2aeec27262b8c1dfdaebe1960435731817a6abfcd2f0dc6759a7fd37 extends Twig_Template
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
        $__internal_70d4eaeed85f34d95c51ff1f0924f3f1a07c9c0518223d72adf896db5031e195 = $this->env->getExtension("native_profiler");
        $__internal_70d4eaeed85f34d95c51ff1f0924f3f1a07c9c0518223d72adf896db5031e195->enter($__internal_70d4eaeed85f34d95c51ff1f0924f3f1a07c9c0518223d72adf896db5031e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:schedules.html.twig"));

        // line 1
        echo "\t\t\t<div id=\"load_data\">

\t\t\t    \t<table class=\"events_tableau\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t    <tr>
\t\t\t\t\t\t\t\t<td class=\"without_btl\">&nbsp;</td>
\t\t\t\t\t\t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "\t\t\t\t\t\t\t\t\t<th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array"), "l"), array(), "BoAdminBundle"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array"), "d-m-Y"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t\t\t\t\t\t    </tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 13
        $this->loadTemplate("BoAdminBundle:Students:scheduleam.html.twig", "BoAdminBundle:Students:schedules.html.twig", 13)->display($context);
        // line 14
        echo "\t\t\t\t\t\t";
        $this->loadTemplate("BoAdminBundle:Students:schedulepm.html.twig", "BoAdminBundle:Students:schedules.html.twig", 14)->display($context);
        // line 15
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<input id=\"idstudent\" type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"startdate\" type=\"hidden\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"enddate\" type=\"hidden\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"pstartdate\" type=\"hidden\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pdates"]) ? $context["pdates"] : $this->getContext($context, "pdates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"penddate\" type=\"hidden\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pdates"]) ? $context["pdates"] : $this->getContext($context, "pdates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"nstartdate\" type=\"hidden\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndates"]) ? $context["ndates"] : $this->getContext($context, "ndates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t\t<input id=\"nenddate\" type=\"hidden\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ndates"]) ? $context["ndates"] : $this->getContext($context, "ndates")), 6, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t\t\t</div>
";
        
        $__internal_70d4eaeed85f34d95c51ff1f0924f3f1a07c9c0518223d72adf896db5031e195->leave($__internal_70d4eaeed85f34d95c51ff1f0924f3f1a07c9c0518223d72adf896db5031e195_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:schedules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  55 => 15,  52 => 14,  50 => 13,  45 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* 			<div id="load_data">*/
/* */
/* 			    	<table class="events_tableau">*/
/* 					<thead>*/
/* 						    <tr>*/
/* 								<td class="without_btl">&nbsp;</td>*/
/* 								{% for i in range(0,4) %}*/
/* 									<th>{{dates[i]|date("l")|trans([],'BoAdminBundle')}}<br>{{dates[i]|date("d-m-Y")}}</th>*/
/* 								{%endfor%}*/
/* 						    </tr>*/
/* 					</thead>*/
/* 					<tbody>						*/
/* 						{%include "BoAdminBundle:Students:scheduleam.html.twig"%}*/
/* 						{%include "BoAdminBundle:Students:schedulepm.html.twig"%}*/
/* 					</tbody>*/
/* 				</table>*/
/* 				<input id="idstudent" type="hidden" value="{{student.id}}" />*/
/* 				<input id="startdate" type="hidden" value="{{dates[0]|date("d-m-Y")}}" />*/
/* 				<input id="enddate" type="hidden" value="{{dates[6]|date("d-m-Y")}}" />*/
/* 				<input id="pstartdate" type="hidden" value="{{pdates[0]|date("d-m-Y")}}" />*/
/* 				<input id="penddate" type="hidden" value="{{pdates[6]|date("d-m-Y")}}" />*/
/* 				<input id="nstartdate" type="hidden" value="{{ndates[0]|date("d-m-Y")}}" />*/
/* 				<input id="nenddate" type="hidden" value="{{ndates[6]|date("d-m-Y")}}" />*/
/* 			</div>*/
/* */
