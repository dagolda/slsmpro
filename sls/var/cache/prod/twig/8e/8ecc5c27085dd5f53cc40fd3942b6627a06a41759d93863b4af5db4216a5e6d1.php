<?php

/* BoAdminBundle:Students:scheduleactions.html.twig */
class __TwigTemplate_76794f0ade92468fc037f5f77f3b569732940e695bf150ddb4c8dfdd084ef15b extends Twig_Template
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
        $__internal_99c500dc78ad4b5bafc8cee46837fa4f6d553ea01b5c0bd0d797a5af54d5b9ec = $this->env->getExtension("native_profiler");
        $__internal_99c500dc78ad4b5bafc8cee46837fa4f6d553ea01b5c0bd0d797a5af54d5b9ec->enter($__internal_99c500dc78ad4b5bafc8cee46837fa4f6d553ea01b5c0bd0d797a5af54d5b9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Students:scheduleactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_show", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("students_schedule", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.currentweek", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_previous\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previouspage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.previous", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"sty-label\" align=\"left\">
\t\t\t\t\t\t<button type=\"submit\" id=\"btn_next\"  title=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nextpage", array(), "BoAdminBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.next", array(), "BoAdminBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t</button>\t\t\t\t\t
\t\t\t\t\t</td>\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_99c500dc78ad4b5bafc8cee46837fa4f6d553ea01b5c0bd0d797a5af54d5b9ec->leave($__internal_99c500dc78ad4b5bafc8cee46837fa4f6d553ea01b5c0bd0d797a5af54d5b9ec_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Students:scheduleactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  56 => 17,  49 => 13,  45 => 12,  37 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('students_show',{ 'id': student.id }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="sty-label" align="left">*/
/* 						<a href="{{ path('students_schedule',{'id':student.id}) }}">{{'label.currentweek'|trans([],'BoAdminBundle')}}</a>*/
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
/* */
