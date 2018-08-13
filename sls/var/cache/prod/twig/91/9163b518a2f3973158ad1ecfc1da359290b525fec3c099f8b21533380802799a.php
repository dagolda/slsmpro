<?php

/* BoAdminBundle:Agenda:actions.html.twig */
class __TwigTemplate_1821949f45a570a95828ae3dc50127fc04eee121d613d815264f54cb39377450 extends Twig_Template
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
        $__internal_4be864fe8da1eaab8d0d7dc66029bab41d7a24a5cff183acf8c0db363fa11559 = $this->env->getExtension("native_profiler");
        $__internal_4be864fe8da1eaab8d0d7dc66029bab41d7a24a5cff183acf8c0db363fa11559->enter($__internal_4be864fe8da1eaab8d0d7dc66029bab41d7a24a5cff183acf8c0db363fa11559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Agenda:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_current\" title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentweek", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previous", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.next", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t\t</td>\t
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t";
        // line 21
        $this->loadTemplate("BoAdminBundle:Agenda:teacherlist.html.twig", "BoAdminBundle:Agenda:actions.html.twig", 21)->display($context);
        echo "\t\t\t\t\t
\t\t\t\t\t</td>\t\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
\t<input id=\"csd\" type=\"hidden\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t<input id=\"ced\" type=\"hidden\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
";
        
        $__internal_4be864fe8da1eaab8d0d7dc66029bab41d7a24a5cff183acf8c0db363fa11559->leave($__internal_4be864fe8da1eaab8d0d7dc66029bab41d7a24a5cff183acf8c0db363fa11559_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Agenda:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  71 => 27,  62 => 21,  55 => 17,  51 => 16,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="sty-label" align="left">*/
/* 						<button type="submit" id="btn_current" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 							{{'label.currentweek'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<button type="submit" id="btn_previous" title="{{'label.previouspage'|trans([],'BoAdminBundle')}}">*/
/* 							{{'label.previous'|trans([],'BoAdminBundle')}}*/
/* 						</button>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<button type="submit" id="btn_next"  title="{{'label.nextpage'|trans([],'BoAdminBundle')}}">*/
/* 							{{'label.next'|trans([],'BoAdminBundle')}}*/
/* 						</button>					*/
/* 					</td>	*/
/* 					<td class="sty-label" align="left">*/
/* 						{%include "BoAdminBundle:Agenda:teacherlist.html.twig"%}					*/
/* 					</td>						*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* 	<input id="csd" type="hidden" value="{{dates[0]|date("d-m-Y")}}" />*/
/* 	<input id="ced" type="hidden" value="{{dates[5]|date("d-m-Y")}}" />*/
/* */
