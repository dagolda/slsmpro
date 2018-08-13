<?php

/* BoHomeBundle:Agenda:actions.html.twig */
class __TwigTemplate_bda42a3add7db4cbb9bf15bf0e897d6bd674aea622135cb341abd2657478e70a extends Twig_Template
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
        $__internal_63824146511d82a43f076e7e6e152c464a4d6c903d8bbee1346c2d72bf5e71f8 = $this->env->getExtension("native_profiler");
        $__internal_63824146511d82a43f076e7e6e152c464a4d6c903d8bbee1346c2d72bf5e71f8->enter($__internal_63824146511d82a43f076e7e6e152c464a4d6c903d8bbee1346c2d72bf5e71f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Agenda:actions.html.twig"));

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
\t\t\t\t\t</td>\t\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
\t<input id=\"csd\" type=\"hidden\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 0, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
\t<input id=\"ced\" type=\"hidden\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), 5, array(), "array"), "d-m-Y"), "html", null, true);
        echo "\" />
";
        
        $__internal_63824146511d82a43f076e7e6e152c464a4d6c903d8bbee1346c2d72bf5e71f8->leave($__internal_63824146511d82a43f076e7e6e152c464a4d6c903d8bbee1346c2d72bf5e71f8_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Agenda:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  65 => 24,  55 => 17,  51 => 16,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  22 => 1,);
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
/* 					</td>						*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* 	<input id="csd" type="hidden" value="{{dates[0]|date("d-m-Y")}}" />*/
/* 	<input id="ced" type="hidden" value="{{dates[5]|date("d-m-Y")}}" />*/
/* */
