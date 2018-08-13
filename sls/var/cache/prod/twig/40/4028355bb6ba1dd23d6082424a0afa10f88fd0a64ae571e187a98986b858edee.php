<?php

/* BoAdminBundle:Contracts:studentactions.html.twig */
class __TwigTemplate_0c216e0b236d26853d5228793498f35a086674f894a57ae116f26e3d7249540d extends Twig_Template
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
        $__internal_6cfdd1de118cf4accc04fb8b4c540776acad2f40d26ebd765ae15986bf5ff5b9 = $this->env->getExtension("native_profiler");
        $__internal_6cfdd1de118cf4accc04fb8b4c540776acad2f40d26ebd765ae15986bf5ff5b9->enter($__internal_6cfdd1de118cf4accc04fb8b4c540776acad2f40d26ebd765ae15986bf5ff5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Contracts:studentactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 5
        if ( !(null === (isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")))) {
            // line 6
            echo "\t\t\t\t\t\t<td><button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_student\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t\t<td><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t";
        } else {
            // line 9
            echo "\t\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t\t\t<td><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contracts_show", array("id" => (isset($context["idcontract"]) ? $context["idcontract"] : $this->getContext($context, "idcontract")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
            echo "</a></td>
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_6cfdd1de118cf4accc04fb8b4c540776acad2f40d26ebd765ae15986bf5ff5b9->leave($__internal_6cfdd1de118cf4accc04fb8b4c540776acad2f40d26ebd765ae15986bf5ff5b9_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Contracts:studentactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  47 => 10,  42 => 9,  35 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					{%if students is not null%}*/
/* 						<td><button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_student">{{'action.add'|trans([],'BoAdminBundle')}}</button></td>*/
/* 						<td><a href="{{ path('contracts_show', { 'id': idcontract }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a></td>*/
/* 					{%else%}*/
/* 						<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 						<td><a href="{{ path('contracts_show', { 'id': idcontract }) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a></td>*/
/* 					{%endif%}					*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
