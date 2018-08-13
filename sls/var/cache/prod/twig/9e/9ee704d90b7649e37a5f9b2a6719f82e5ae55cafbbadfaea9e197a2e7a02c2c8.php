<?php

/* BoAdminBundle:Coordinator:showactions.html.twig */
class __TwigTemplate_406975a28712bece92afb8a3365f4279741e0a17c28c65ce7095d31c7f667314 extends Twig_Template
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
        $__internal_cfb11c577468f4816fa751baec108d5165f5f97ce084c472c7e2fa1e12dfa991 = $this->env->getExtension("native_profiler");
        $__internal_cfb11c577468f4816fa751baec108d5165f5f97ce084c472c7e2fa1e12dfa991->enter($__internal_cfb11c577468f4816fa751baec108d5165f5f97ce084c472c7e2fa1e12dfa991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Coordinator:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"delete-action\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "search"), "method", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "search"), "method")))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("coordinator_back");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("coordinator_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        // line 18
        if ((array_key_exists("user", $context) &&  !$this->getAttribute((isset($context["user"]) ? $context["user"] : null), 0, array(), "array", true, true))) {
            echo "\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("coordinator_user_create", array("id" => $this->getAttribute((isset($context["coordinator"]) ? $context["coordinator"] : $this->getContext($context, "coordinator")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.createuser", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<td>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\tTotal ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.contracts", array(), "BoAdminBundle"), "html", null, true);
        echo " <span class=\"badge\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_length_filter($this->env, (isset($context["contracts"]) ? $context["contracts"] : $this->getContext($context, "contracts"))), 0, "", " "), "html", null, true);
        echo "</span>
\t\t\t\t\t</button>
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_cfb11c577468f4816fa751baec108d5165f5f97ce084c472c7e2fa1e12dfa991->leave($__internal_cfb11c577468f4816fa751baec108d5165f5f97ce084c472c7e2fa1e12dfa991_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Coordinator:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  76 => 23,  68 => 20,  63 => 18,  56 => 16,  53 => 15,  45 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].ddelete==1%}*/
/* 					<td class="delete-action">*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('search') is defined and app.session.get('search') is not null%}	*/
/* 					<td>*/
/* 						<a href="{{ path('coordinator_back') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('coordinator_index') }}">{{'action.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%if user is defined and user[0] is not defined%}	*/
/* 					<td>*/
/* 						<a href="{{ path('coordinator_user_create', { 'id': coordinator.id }) }}">{{'action.createuser'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				<td>*/
/* 					<button type="button" class="btn btn-primary">*/
/* 						Total {{'entity.contracts'|trans([],'BoAdminBundle')}} <span class="badge">{{contracts|length|number_format(0,""," ")}}</span>*/
/* 					</button>*/
/* 				</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
