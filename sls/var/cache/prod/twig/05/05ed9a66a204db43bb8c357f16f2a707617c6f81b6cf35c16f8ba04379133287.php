<?php

/* BoAdminBundle:Client:showactions.html.twig */
class __TwigTemplate_f32b16452bd1b74b49b6a020116ffca40da033952dbfbfef1cb8e265b588c8cb extends Twig_Template
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
        $__internal_c8897acb189ba89bf600b73f479016b1a420dd2d029ae20ad107d0392df35c1c = $this->env->getExtension("native_profiler");
        $__internal_c8897acb189ba89bf600b73f479016b1a420dd2d029ae20ad107d0392df35c1c->enter($__internal_c8897acb189ba89bf600b73f479016b1a420dd2d029ae20ad107d0392df35c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Client:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Customers", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Customers", array(), "array"), "ddelete", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\" id=\"btn_delete\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("client_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "CONTRACTS", array(), "array", false, true), "Coordinators", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "CONTRACTS", array(), "array"), "Coordinators", array(), "array"), "creation", array()) == 1))) {
            // line 14
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_coordinator\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.createmasteraccount", array(), "BoAdminBundle"), "html", null, true);
            echo "</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_c8897acb189ba89bf600b73f479016b1a420dd2d029ae20ad107d0392df35c1c->leave($__internal_c8897acb189ba89bf600b73f479016b1a420dd2d029ae20ad107d0392df35c1c_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Client:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  54 => 15,  51 => 14,  49 => 13,  42 => 11,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Customers'] is defined and app.session.get('rights')['CONTRACTS']['Customers'].ddelete==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal" id="btn_delete">{{'action.delete'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 					<td>*/
/* 						<a href="{{ path('client_index') }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%if app.session.get('rights')['CONTRACTS']['Coordinators'] is defined and app.session.get('rights')['CONTRACTS']['Coordinators'].creation==1%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_coordinator">{{'action.createmasteraccount'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
