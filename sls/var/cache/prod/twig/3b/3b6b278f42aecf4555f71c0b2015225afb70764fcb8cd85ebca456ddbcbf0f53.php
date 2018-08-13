<?php

/* BoAdminBundle:Tickets:actions.html.twig */
class __TwigTemplate_517da51f13023932ecfbecf5ab4715501910496f3a0e7f55c239ec6b82fe75ee extends Twig_Template
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
        $__internal_5f608768b64645f595f645f05307c2a1e6dcc8f3ce100bf578135f4786afae7c = $this->env->getExtension("native_profiler");
        $__internal_5f608768b64645f595f645f05307c2a1e6dcc8f3ce100bf578135f4786afae7c->enter($__internal_5f608768b64645f595f645f05307c2a1e6dcc8f3ce100bf578135f4786afae7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tickets:actions.html.twig"));

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
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_ticket\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td-->
\t\t\t\t\t<td class=\"list_link\">
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tickets_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ticketcontacts_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.contacts", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tickettype_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.type", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td-->
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t
";
        
        $__internal_5f608768b64645f595f645f05307c2a1e6dcc8f3ce100bf578135f4786afae7c->leave($__internal_5f608768b64645f595f645f05307c2a1e6dcc8f3ce100bf578135f4786afae7c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tickets:actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  50 => 16,  42 => 13,  36 => 10,  31 => 8,  22 => 1,);
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
/* 					<!--td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_ticket">{{'action.add'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td-->*/
/* 					<td class="list_link">*/
/* 						<a href="{{ path('tickets_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td>*/
/* 						<a href="{{ path('ticketcontacts_index') }}">{{'label.contacts'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<a href="{{ path('tickettype_index') }}">{{'label.type'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td-->*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
/* */
