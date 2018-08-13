<?php

/* BoAdvisorsBundle:Absences:showactions.html.twig */
class __TwigTemplate_dbd1e776b8bdbf594325cf5d486b4d70ef7172e05a3c335ce529c733e404f114 extends Twig_Template
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
        $__internal_44a560b6f29e5aaf588e98e3bbc08c668f283ca7f8b85cbb1d6e641734d551c1 = $this->env->getExtension("native_profiler");
        $__internal_44a560b6f29e5aaf588e98e3bbc08c668f283ca7f8b85cbb1d6e641734d551c1->enter($__internal_44a560b6f29e5aaf588e98e3bbc08c668f283ca7f8b85cbb1d6e641734d551c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdvisorsBundle:Absences:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td--!>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("dash_absences_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<!--td>
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dash_absences_edit", array("id" => $this->getAttribute((isset($context["absence"]) ? $context["absence"] : $this->getContext($context, "absence")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
\t\t\t\t\t</td-->
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_44a560b6f29e5aaf588e98e3bbc08c668f283ca7f8b85cbb1d6e641734d551c1->leave($__internal_44a560b6f29e5aaf588e98e3bbc08c668f283ca7f8b85cbb1d6e641734d551c1_prof);

    }

    public function getTemplateName()
    {
        return "BoAdvisorsBundle:Absences:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<!--td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td--!>*/
/* 					<td>*/
/* 						<a href="{{ path('dash_absences_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<!--td>*/
/* 						<a href="{{ path('dash_absences_edit', { 'id': absence.id }) }}">Edit</a>*/
/* 					</td-->*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
