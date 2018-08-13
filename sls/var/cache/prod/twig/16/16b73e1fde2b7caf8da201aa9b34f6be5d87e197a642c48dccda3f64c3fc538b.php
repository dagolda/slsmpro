<?php

/* BoStudentBundle:Tickets:actions.html.twig */
class __TwigTemplate_2a67765d9be8b68b47c6626877280d28887f5b89957d16fdaf76fa2b2bbea0fd extends Twig_Template
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
        $__internal_c8f3db0b83b77579bf59dc27f74d60d5d2fc7d27659b084e3cd740c72f6fd262 = $this->env->getExtension("native_profiler");
        $__internal_c8f3db0b83b77579bf59dc27f74d60d5d2fc7d27659b084e3cd740c72f6fd262->enter($__internal_c8f3db0b83b77579bf59dc27f74d60d5d2fc7d27659b084e3cd740c72f6fd262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoStudentBundle:Tickets:actions.html.twig"));

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
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_ticket\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_c8f3db0b83b77579bf59dc27f74d60d5d2fc7d27659b084e3cd740c72f6fd262->leave($__internal_c8f3db0b83b77579bf59dc27f74d60d5d2fc7d27659b084e3cd740c72f6fd262_prof);

    }

    public function getTemplateName()
    {
        return "BoStudentBundle:Tickets:actions.html.twig";
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
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_ticket">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
