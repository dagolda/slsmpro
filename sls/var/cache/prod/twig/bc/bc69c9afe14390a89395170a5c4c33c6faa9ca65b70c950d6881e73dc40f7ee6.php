<?php

/* BoAdvisorsBundle:Timesheet:actions.html.twig */
class __TwigTemplate_9933054d8eff706f3b5d0767112da625feea721c106e4f499dd3d45554e50fd4 extends Twig_Template
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
        $__internal_dd092453f0bad9cf3bd25969d5e3c3fd8bf2738cdddf4dfa97d7c75b6e08441d = $this->env->getExtension("native_profiler");
        $__internal_dd092453f0bad9cf3bd25969d5e3c3fd8bf2738cdddf4dfa97d7c75b6e08441d->enter($__internal_dd092453f0bad9cf3bd25969d5e3c3fd8bf2738cdddf4dfa97d7c75b6e08441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Timesheet:actions.html.twig"));

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
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_tsother\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_model\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.addmodel", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("dash_model_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.modellist", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_dd092453f0bad9cf3bd25969d5e3c3fd8bf2738cdddf4dfa97d7c75b6e08441d->leave($__internal_dd092453f0bad9cf3bd25969d5e3c3fd8bf2738cdddf4dfa97d7c75b6e08441d_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Timesheet:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  42 => 13,  36 => 10,  31 => 8,  22 => 1,);
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
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_tsother">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_model">{{'label.addmodel'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_model_index') }}">{{'title.modellist'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
