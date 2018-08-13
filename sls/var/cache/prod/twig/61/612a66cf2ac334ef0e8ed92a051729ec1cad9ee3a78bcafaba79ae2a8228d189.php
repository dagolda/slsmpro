<?php

/* BoAdminBundle:Employee:agendaactions.html.twig */
class __TwigTemplate_63ac8e309ccdd36601a590b7994d1b2bc084de79f10a4ea8da04e39cc6453dd6 extends Twig_Template
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
        $__internal_084c84d25372304f5d900e4e9c1a04985b0efd237c95755979748484a63ff6f0 = $this->env->getExtension("native_profiler");
        $__internal_084c84d25372304f5d900e4e9c1a04985b0efd237c95755979748484a63ff6f0->enter($__internal_084c84d25372304f5d900e4e9c1a04985b0efd237c95755979748484a63ff6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:agendaactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_current\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentweek", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previous", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.next", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t\t</td>\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_084c84d25372304f5d900e4e9c1a04985b0efd237c95755979748484a63ff6f0->leave($__internal_084c84d25372304f5d900e4e9c1a04985b0efd237c95755979748484a63ff6f0_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:agendaactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 19,  52 => 15,  48 => 14,  41 => 10,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('employee_show',{ 'id': employee.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
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
/* 					</td>				*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
