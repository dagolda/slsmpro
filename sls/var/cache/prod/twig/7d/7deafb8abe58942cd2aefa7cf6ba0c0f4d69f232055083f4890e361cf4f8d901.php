<?php

/* BoAdminBundle:Robot:actions.html.twig */
class __TwigTemplate_6f221a983f83b5839f9dcae1d01b3c9f48415555541a4c99bc809f283cfd24aa extends Twig_Template
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
        $__internal_f42f398ca2453b2d4c3603f13aa8c47cf0f10577311e67336376e6d5946577a5 = $this->env->getExtension("native_profiler");
        $__internal_f42f398ca2453b2d4c3603f13aa8c47cf0f10577311e67336376e6d5946577a5->enter($__internal_f42f398ca2453b2d4c3603f13aa8c47cf0f10577311e67336376e6d5946577a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Robot:actions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("robot_work");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.launch", array(), "BoAdminBundle"), "html", null, true);
        echo "</a></td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_f42f398ca2453b2d4c3603f13aa8c47cf0f10577311e67336376e6d5946577a5->leave($__internal_f42f398ca2453b2d4c3603f13aa8c47cf0f10577311e67336376e6d5946577a5_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Robot:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  31 => 8,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td><a href="{{ path('robot_work') }}">{{'action.launch'|trans([],'BoAdminBundle')}}</a></td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
