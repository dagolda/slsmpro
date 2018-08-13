<?php

/* BoAdminBundle:Employee:agenda.html.twig */
class __TwigTemplate_77bf446d45585cc6d9655e3ac881d93d4f7824fe8a960ab116e67febd88262ae extends Twig_Template
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
        $__internal_d615abc6adb3d799cf5c2006717c6a03ce5ad7897c2d0c37e34600d71a093e08 = $this->env->getExtension("native_profiler");
        $__internal_d615abc6adb3d799cf5c2006717c6a03ce5ad7897c2d0c37e34600d71a093e08->enter($__internal_d615abc6adb3d799cf5c2006717c6a03ce5ad7897c2d0c37e34600d71a093e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:agenda.html.twig"));

        // line 1
        echo "    <div class=\"agenda_title\">
\t\t<center>
\t\t\t<span>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.week", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "W"), "html", null, true);
        echo "</span>  >>  
\t\t\t<span>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.from", array(), "BoAdminBundle"), "html", null, true);
        echo " <span>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "F"), array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.to", array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "F"), array(), "BoAdminBundle"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "Y"), "html", null, true);
        echo "</span></span>\t\t
\t\t</center>\t\t
    </div>\t
    <table class=\"agenda_tableau\">
        <thead>
            <tr>
\t\t\t\t<td class=\"without_btl\">&nbsp;</td>
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datekeys"]) ? $context["datekeys"] : $this->getContext($context, "datekeys")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "\t\t\t\t\t";
            if (($context["i"] < 5)) {
                // line 13
                echo "\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formatdates"]) ? $context["formatdates"] : $this->getContext($context, "formatdates")), $context["i"], array(), "array"), "html", null, true);
                echo "</th>
\t\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t\t<td width=\"1%\">&nbsp;</td>
\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </tr>
        </thead>
        <tbody>
\t";
        // line 21
        $context["startam"] = null;
        // line 22
        echo "\t";
        $context["startpm"] = null;
        // line 23
        echo "\t";
        $context["endam"] = null;
        // line 24
        echo "\t";
        $context["endpm"] = null;
        // line 25
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ttkeys"]) ? $context["ttkeys"] : $this->getContext($context, "ttkeys")));
        foreach ($context['_seq'] as $context["_key"] => $context["tt"]) {
            // line 26
            echo "\t\t\t";
            $context["att"] = twig_split_filter($this->env, $context["tt"], ":");
            // line 27
            echo "            <tr>
\t\t\t\t";
            // line 28
            if ((($this->getAttribute((isset($context["att"]) ? $context["att"] : $this->getContext($context, "att")), 1, array(), "array") == "00") || ($this->getAttribute((isset($context["att"]) ? $context["att"] : $this->getContext($context, "att")), 1, array(), "array") == "30"))) {
                // line 29
                echo "\t\t\t\t\t<td rowspan=\"2\" class=\"agenda-tt\" width=\"4%\">";
                echo twig_escape_filter($this->env, $context["tt"], "html", null, true);
                echo "</td>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["datekeys"]) ? $context["datekeys"] : $this->getContext($context, "datekeys")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 32
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", true, true)) {
                    // line 33
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") <= 12.3)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", true, true)) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "startam", array(), "array", true, true)) {
                                // line 36
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["startam"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "startam", array(), "array");
                                // line 37
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 38
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "endam", array(), "array", true, true)) {
                                // line 39
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["endam"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "endam", array(), "array");
                                // line 40
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 41
                            echo "\t\t\t\t\t\t\t\t<td class=\"";
                            if (($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                                echo "agenda-week-p";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "absence", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "absence", array(), "array") == 1))) {
                                echo "agenda-week-a";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "option", array(), "array") == 1)) {
                                echo "agenda-week";
                            } else {
                                echo "agenda-week-s";
                            }
                            echo "\" rowspan=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "hour", array(), "array"), "html", null, true);
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "label", array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute(                        // line 42
(isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") < (isset($context["endam"]) ? $context["endam"] : $this->getContext($context, "endam"))) && ($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") >= (isset($context["startam"]) ? $context["startam"] : $this->getContext($context, "startam"))))) {
                            // line 43
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 44
                            echo "\t\t\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t\t\t";
                        }
                        // line 46
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 47
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", true, true)) {
                            // line 48
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "startpm", array(), "array", true, true)) {
                                // line 49
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["startpm"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "startpm", array(), "array");
                                // line 50
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 51
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "endpm", array(), "array", true, true)) {
                                // line 52
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["endpm"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "endpm", array(), "array");
                                // line 53
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 54
                            echo "\t\t\t\t\t\t\t\t<td class=\"";
                            if (($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                                echo "agenda-week-p";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "absence", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "absence", array(), "array") == 1))) {
                                echo "agenda-week-a";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "option", array(), "array") == 1)) {
                                echo "agenda-week";
                            } else {
                                echo "agenda-week-s";
                            }
                            echo "\" rowspan=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "hour", array(), "array"), "html", null, true);
                            echo "\">";
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "label", array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute(                        // line 55
(isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") < (isset($context["endpm"]) ? $context["endpm"] : $this->getContext($context, "endpm"))) && ($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") >= (isset($context["startpm"]) ? $context["startpm"] : $this->getContext($context, "startpm"))))) {
                            // line 56
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 60
                    echo "\t\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t";
                }
                // line 63
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
\t<input id=\"idemployee\" type=\"hidden\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "\" />
\t<input id=\"startdate\" type=\"hidden\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t<input id=\"enddate\" type=\"hidden\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
";
        
        $__internal_d615abc6adb3d799cf5c2006717c6a03ce5ad7897c2d0c37e34600d71a093e08->leave($__internal_d615abc6adb3d799cf5c2006717c6a03ce5ad7897c2d0c37e34600d71a093e08_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 70,  254 => 69,  250 => 68,  246 => 66,  239 => 64,  233 => 63,  229 => 61,  226 => 60,  222 => 58,  218 => 57,  215 => 56,  213 => 55,  196 => 54,  193 => 53,  190 => 52,  187 => 51,  184 => 50,  181 => 49,  178 => 48,  175 => 47,  172 => 46,  168 => 44,  165 => 43,  163 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  114 => 31,  108 => 29,  106 => 28,  103 => 27,  100 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  79 => 18,  73 => 17,  69 => 15,  63 => 13,  60 => 12,  56 => 11,  32 => 4,  26 => 3,  22 => 1,);
    }
}
/*     <div class="agenda_title">*/
/* 		<center>*/
/* 			<span>{{'label.week'|trans([],'BoAdminBundle')}} {{dates[0]|date("W")}}</span>  >>  */
/* 			<span>{{'label.from'|trans([],'BoAdminBundle')}} <span>{{dates[0]|date("d")}} {{dates[0]|date("F")|trans([],'BoAdminBundle')}} {{dates[0]|date("Y")}} {{'label.to'|trans([],'BoAdminBundle')}} {{dates[5]|date("d")}} {{dates[5]|date("F")|trans([],'BoAdminBundle')}} {{dates[5]|date("Y")}}</span></span>		*/
/* 		</center>		*/
/*     </div>	*/
/*     <table class="agenda_tableau">*/
/*         <thead>*/
/*             <tr>*/
/* 				<td class="without_btl">&nbsp;</td>*/
/* 				{% for i in datekeys %}*/
/* 					{%if i<5%}*/
/* 						<th>{{formatdates[i]}}</th>*/
/* 					{%else%}*/
/* 						<td width="1%">&nbsp;</td>*/
/* 					{%endif%}*/
/* 				{%endfor%}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* 	{%set startam=null%}*/
/* 	{%set startpm=null%}*/
/* 	{%set endam=null%}*/
/* 	{%set endpm=null%}*/
/*         {% for tt in ttkeys %}*/
/* 			{%set att = tt|split(":")%}*/
/*             <tr>*/
/* 				{%if att[1]=="00" or att[1]=="30"%}*/
/* 					<td rowspan="2" class="agenda-tt" width="4%">{{tt}}</td>*/
/* 				{%endif%}*/
/* 				{% for i in datekeys %}*/
/* 					{%if agenda[i] is defined%}*/
/* 						{%if times[tt]<=12.30%}*/
/* 							{%if agenda[i][tt] is defined%}*/
/* 								{%if agenda[i][tt]['startam'] is defined%}*/
/* 									{%set startam = agenda[i][tt]['startam']%}*/
/* 								{%endif%}*/
/* 								{%if agenda[i][tt]['endam'] is defined%}*/
/* 									{%set endam = agenda[i][tt]['endam']%}*/
/* 								{%endif%}*/
/* 								<td class="{%if dates[i]<today %}agenda-week-p{%elseif agenda[i][tt]['absence'] is defined and agenda[i][tt]['absence']==1%}agenda-week-a{%elseif agenda[i][tt]['option']==1%}agenda-week{%else%}agenda-week-s{%endif%}" rowspan="{{agenda[i][tt]['hour']}}">{{agenda[i][tt]['label']|raw}}</td>*/
/* 							{%elseif times[tt]<endam and times[tt]>=startam%}*/
/* 							{%else%}*/
/* 								<td class="agenda-week1">&nbsp;</td>*/
/* 							{%endif%}*/
/* 						{%else%}*/
/* 							{%if agenda[i][tt] is defined%}*/
/* 								{%if agenda[i][tt]['startpm'] is defined%}*/
/* 									{%set startpm = agenda[i][tt]['startpm']%}*/
/* 								{%endif%}*/
/* 								{%if agenda[i][tt]['endpm'] is defined%}*/
/* 									{%set endpm = agenda[i][tt]['endpm']%}*/
/* 								{%endif%}*/
/* 								<td class="{%if dates[i]<today %}agenda-week-p{%elseif agenda[i][tt]['absence'] is defined and agenda[i][tt]['absence']==1%}agenda-week-a{%elseif agenda[i][tt]['option']==1%}agenda-week{%else%}agenda-week-s{%endif%}" rowspan="{{agenda[i][tt]['hour']}}">{{agenda[i][tt]['label']|raw}}</td>*/
/* 							{%elseif times[tt]<endpm and times[tt]>=startpm%}*/
/* 							{%else%}*/
/* 								<td class="agenda-week1">&nbsp;</td>*/
/* 							{%endif%}						*/
/* 						{%endif%}*/
/* 					{%else%}*/
/* 						<td class="agenda-week1">&nbsp;</td>*/
/* 					{%endif%}*/
/* 				{%endfor%}*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* 	<input id="idemployee" type="hidden" value="{{employee.id}}" />*/
/* 	<input id="startdate" type="hidden" value="{{dates[0]|date("d-m-Y")}}" />*/
/* 	<input id="enddate" type="hidden" value="{{dates[5]|date("d-m-Y")}}" />*/
/* */
