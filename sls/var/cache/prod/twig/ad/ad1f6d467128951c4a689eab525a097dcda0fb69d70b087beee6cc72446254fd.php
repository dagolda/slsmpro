<?php

/* BoHomeBundle:Agenda:content.html.twig */
class __TwigTemplate_0f556803ee55735a32005ba0eecdeb270c625e0f93c0c80f214e45fac009d7e8 extends Twig_Template
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
        $__internal_8671f1a787ff2c5c7661a6a4b1171ee8263a51835cfdcfc3853b92cdaa3a9885 = $this->env->getExtension("native_profiler");
        $__internal_8671f1a787ff2c5c7661a6a4b1171ee8263a51835cfdcfc3853b92cdaa3a9885->enter($__internal_8671f1a787ff2c5c7661a6a4b1171ee8263a51835cfdcfc3853b92cdaa3a9885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Agenda:content.html.twig"));

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
                    if (($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") <= (isset($context["higham"]) ? $context["higham"] : $this->getContext($context, "higham")))) {
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
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "s_absence", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "s_absence", array(), "array") == 1))) {
                                echo "agenda-week-as";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "option", array(), "array") == 1)) {
                                echo "agenda-week";
                            } else {
                                echo "agenda-week-s";
                            }
                            echo "\" rowspan=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "hour", array(), "array"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"agenda-label\">";
                            // line 43
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "label", array(), "array");
                            echo "</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 45
                            if ((($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") == (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today"))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "absence", array(), "array", true, true))) {
                                // line 46
                                echo "\t\t\t\t\t\t\t\t\t\t<div class='agenda-action'><center>\t
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 47
                                if ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idsubs", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsg", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsg", array(), "array") == 0)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsc", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsc", array(), "array") == 0))) {
                                    // line 48
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_substitution_newts", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idsubs", array(), "array"))), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute(                                // line 50
(isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idcontract", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idcontract", array(), "array") != null)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsc", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsc", array(), "array") == 0))) {
                                    // line 51
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_add", array("idcontract" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idcontract", array(), "array"))), "html", null, true);
                                    echo "\" ";
                                    if ((($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), "endam", array(), "array", true, true) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) > 0)) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) < $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), "endam", array(), "array")))) {
                                        echo " class=\"disabled\"";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute(                                // line 52
(isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idgroup", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idgroup", array(), "array") != null)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsg", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsg", array(), "array") == 0))) {
                                    // line 53
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_group", array("idgroup" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idgroup", array(), "array"))), "html", null, true);
                                    echo "\" ";
                                    if ((($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), "endam", array(), "array", true, true) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) > 0)) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) < $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), "endam", array(), "array")))) {
                                        echo " class=\"disabled\"";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 55
                                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<center></div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 58
                            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute(                        // line 59
(isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") < (isset($context["endam"]) ? $context["endam"] : $this->getContext($context, "endam"))) && ($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") >= (isset($context["startam"]) ? $context["startam"] : $this->getContext($context, "startam"))))) {
                            // line 60
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 61
                            echo "\t\t\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t\t\t";
                        }
                        // line 63
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", true, true)) {
                            // line 65
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "startpm", array(), "array", true, true)) {
                                // line 66
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["startpm"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "startpm", array(), "array");
                                // line 67
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 68
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "endpm", array(), "array", true, true)) {
                                // line 69
                                echo "\t\t\t\t\t\t\t\t\t";
                                $context["endpm"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "endpm", array(), "array");
                                // line 70
                                echo "\t\t\t\t\t\t\t\t";
                            }
                            // line 71
                            echo "\t\t\t\t\t\t\t\t<td class=\"";
                            if (($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") < (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today")))) {
                                echo "agenda-week-p";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "absence", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "absence", array(), "array") == 1))) {
                                echo "agenda-week-a";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "s_absence", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "s_absence", array(), "array") == 1))) {
                                echo "agenda-week-as";
                            } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "option", array(), "array") == 1)) {
                                echo "agenda-week";
                            } else {
                                echo "agenda-week-s";
                            }
                            echo "\" rowspan=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "hour", array(), "array"), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"agenda-label\">";
                            // line 73
                            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "label", array(), "array");
                            echo "</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            // line 75
                            if ((($this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), $context["i"], array(), "array") == (isset($context["today"]) ? $context["today"] : $this->getContext($context, "today"))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "absence", array(), "array", true, true))) {
                                // line 76
                                echo "\t\t\t\t\t\t\t\t\t\t<div class='agenda-action'><center>\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 78
                                if ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idsubs", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsg", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsg", array(), "array") == 0)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsc", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsc", array(), "array") == 0))) {
                                    // line 79
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_substitution_newts", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idsubs", array(), "array"))), "html", null, true);
                                    echo "\" >";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idcontract", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idcontract", array(), "array") != null)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsc", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsc", array(), "array") == 0))) {
                                    // line 80
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_add", array("idcontract" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idcontract", array(), "array"))), "html", null, true);
                                    echo "\" ";
                                    if ((($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), "endpm", array(), "array", true, true) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) > 0)) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) < $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), "endpm", array(), "array")))) {
                                        echo " class=\"disabled\"";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute(                                // line 81
(isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "idgroup", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idgroup", array(), "array") != null)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), $context["tt"], array(), "array", false, true), "etsg", array(), "array", true, true)) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "etsg", array(), "array") == 0))) {
                                    // line 82
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_timesheet_group", array("idgroup" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), $context["tt"], array(), "array"), "idgroup", array(), "array"))), "html", null, true);
                                    echo "\" ";
                                    if ((($this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), $context["i"], array(), "array", false, true), "endpm", array(), "array", true, true) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) > 0)) && ((isset($context["cth"]) ? $context["cth"] : $this->getContext($context, "cth")) < $this->getAttribute($this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), $context["i"], array(), "array"), "endpm", array(), "array")))) {
                                        echo " class=\"disabled\"";
                                    }
                                    echo ">";
                                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.addts", array(), "BoAdminBundle"), "html", null, true);
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 84
                                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<center></div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 87
                            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                        } elseif ((($this->getAttribute(                        // line 89
(isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") < (isset($context["endpm"]) ? $context["endpm"] : $this->getContext($context, "endpm"))) && ($this->getAttribute((isset($context["times"]) ? $context["times"] : $this->getContext($context, "times")), $context["tt"], array(), "array") >= (isset($context["startpm"]) ? $context["startpm"] : $this->getContext($context, "startpm"))))) {
                            // line 90
                            echo "\t\t\t\t\t\t\t";
                        } else {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t\t\t";
                        }
                        // line 92
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t\t";
                } else {
                    // line 95
                    echo "\t\t\t\t\t\t<td class=\"agenda-week1\">&nbsp;</td>
\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "        </tbody>
    </table>
\t<input id=\"idemployee\" type=\"hidden\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()), "html", null, true);
        echo "\" />
\t<input id=\"startdate\" type=\"hidden\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t<input id=\"enddate\" type=\"hidden\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
";
        
        $__internal_8671f1a787ff2c5c7661a6a4b1171ee8263a51835cfdcfc3853b92cdaa3a9885->leave($__internal_8671f1a787ff2c5c7661a6a4b1171ee8263a51835cfdcfc3853b92cdaa3a9885_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Agenda:content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 104,  365 => 103,  361 => 102,  357 => 100,  350 => 98,  344 => 97,  340 => 95,  337 => 94,  333 => 92,  329 => 91,  326 => 90,  324 => 89,  320 => 87,  315 => 84,  303 => 82,  301 => 81,  290 => 80,  283 => 79,  281 => 78,  277 => 76,  275 => 75,  270 => 73,  252 => 71,  249 => 70,  246 => 69,  243 => 68,  240 => 67,  237 => 66,  234 => 65,  231 => 64,  228 => 63,  224 => 61,  221 => 60,  219 => 59,  216 => 58,  211 => 55,  199 => 53,  197 => 52,  186 => 51,  184 => 50,  176 => 48,  174 => 47,  171 => 46,  169 => 45,  164 => 43,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  114 => 31,  108 => 29,  106 => 28,  103 => 27,  100 => 26,  95 => 25,  92 => 24,  89 => 23,  86 => 22,  84 => 21,  79 => 18,  73 => 17,  69 => 15,  63 => 13,  60 => 12,  56 => 11,  32 => 4,  26 => 3,  22 => 1,);
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
/* 						{%if times[tt]<=higham%}*/
/* 							{%if agenda[i][tt] is defined%}*/
/* 								{%if agenda[i][tt]['startam'] is defined%}*/
/* 									{%set startam = agenda[i][tt]['startam']%}*/
/* 								{%endif%}*/
/* 								{%if agenda[i][tt]['endam'] is defined%}*/
/* 									{%set endam = agenda[i][tt]['endam']%}*/
/* 								{%endif%}*/
/* 								<td class="{%if dates[i]<today %}agenda-week-p{%elseif agenda[i][tt]['absence'] is defined and agenda[i][tt]['absence']==1%}agenda-week-a{%elseif agenda[i][tt]['s_absence'] is defined and agenda[i][tt]['s_absence']==1%}agenda-week-as{%elseif agenda[i][tt]['option']==1%}agenda-week{%else%}agenda-week-s{%endif%}" rowspan="{{agenda[i][tt]['hour']}}">*/
/* 									*/
/* 									<div class="agenda-label">{{agenda[i][tt]['label']|raw}}</div>*/
/* 									*/
/* 									{%if dates[i]==today and agenda[i][tt]['absence'] is not defined%}*/
/* 										<div class='agenda-action'><center>	*/
/* 											{%if agenda[i][tt]['idsubs'] is defined and agenda[i][tt]['etsg'] is defined and agenda[i][tt]['etsg']==0 and agenda[i][tt]['etsc'] is defined and agenda[i][tt]['etsc']==0%}*/
/* 												<a href="{{ path('home_substitution_newts', { 'id': agenda[i][tt]['idsubs'] }) }}">{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 										*/
/* 											{%elseif agenda[i][tt]['idcontract'] is defined and agenda[i][tt]['idcontract']!=null and agenda[i][tt]['etsc'] is defined and agenda[i][tt]['etsc']==0%}*/
/* 												<a href="{{ path('home_timesheet_add', { 'idcontract': agenda[i][tt]['idcontract'] }) }}" {%if agenda[i]['endam'] is defined and cth>0 and cth<agenda[i]['endam']%} class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 											{%elseif agenda[i][tt]['idgroup'] is defined and agenda[i][tt]['idgroup']!=null and agenda[i][tt]['etsg'] is defined and agenda[i][tt]['etsg']==0%}*/
/* 												<a href="{{ path('home_timesheet_group', { 'idgroup': agenda[i][tt]['idgroup'] }) }}" {%if agenda[i]['endam'] is defined and cth>0 and cth<agenda[i]['endam']%} class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 											{%endif%}*/
/* 											*/
/* 										<center></div>									*/
/* 									{%endif%}*/
/* 								</td>*/
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
/* 								<td class="{%if dates[i]<today %}agenda-week-p{%elseif agenda[i][tt]['absence'] is defined and agenda[i][tt]['absence']==1%}agenda-week-a{%elseif agenda[i][tt]['s_absence'] is defined and agenda[i][tt]['s_absence']==1%}agenda-week-as{%elseif agenda[i][tt]['option']==1%}agenda-week{%else%}agenda-week-s{%endif%}" rowspan="{{agenda[i][tt]['hour']}}">*/
/* 								*/
/* 									<div class="agenda-label">{{agenda[i][tt]['label']|raw}}</div>*/
/* 									*/
/* 									{%if dates[i]==today and agenda[i][tt]['absence'] is not defined%}*/
/* 										<div class='agenda-action'><center>	*/
/* 										*/
/* 											{%if agenda[i][tt]['idsubs'] is defined and agenda[i][tt]['etsg'] is defined and agenda[i][tt]['etsg']==0 and agenda[i][tt]['etsc'] is defined and agenda[i][tt]['etsc']==0%}*/
/* 												<a href="{{ path('home_substitution_newts', { 'id': agenda[i][tt]['idsubs'] }) }}" >{{'action.addts'|trans([],'BoAdminBundle')}}</a>											{%elseif agenda[i][tt]['idcontract'] is defined and agenda[i][tt]['idcontract']!=null and agenda[i][tt]['etsc'] is defined and agenda[i][tt]['etsc']==0%}*/
/* 												<a href="{{ path('home_timesheet_add', { 'idcontract': agenda[i][tt]['idcontract'] }) }}" {%if agenda[i]['endpm'] is defined and cth>0 and cth<agenda[i]['endpm']%} class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 											{%elseif agenda[i][tt]['idgroup'] is defined and agenda[i][tt]['idgroup']!=null and agenda[i][tt]['etsg'] is defined and agenda[i][tt]['etsg']==0%}*/
/* 												<a href="{{ path('home_timesheet_group', { 'idgroup': agenda[i][tt]['idgroup'] }) }}" {%if agenda[i]['endpm'] is defined and cth>0 and cth<agenda[i]['endpm']%} class="disabled"{%endif%}>{{'action.addts'|trans([],'BoAdminBundle')}}</a>*/
/* 											{%endif%}*/
/* 											*/
/* 										<center></div>										*/
/* 									{%endif%}*/
/* 									*/
/* 								</td>*/
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
