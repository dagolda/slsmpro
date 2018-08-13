<?php

/* BoHomeBundle:Absences:actions.html.twig */
class __TwigTemplate_69028dcc48f59905956f72fb32c304de92e0b0a3a3bcaac8b50e3fb995ac96df extends Twig_Template
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
        $__internal_5782f0eeba38c6f2713b7b2505eda169167f8ab4e74f4fd98a41ffb41da793fc = $this->env->getExtension("native_profiler");
        $__internal_5782f0eeba38c6f2713b7b2505eda169167f8ab4e74f4fd98a41ffb41da793fc->enter($__internal_5782f0eeba38c6f2713b7b2505eda169167f8ab4e74f4fd98a41ffb41da793fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoHomeBundle:Absences:actions.html.twig"));

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
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_absence\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_5782f0eeba38c6f2713b7b2505eda169167f8ab4e74f4fd98a41ffb41da793fc->leave($__internal_5782f0eeba38c6f2713b7b2505eda169167f8ab4e74f4fd98a41ffb41da793fc_prof);

    }

    public function getTemplateName()
    {
        return "BoHomeBundle:Absences:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  31 => 8,  22 => 1,);
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
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_absence">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
