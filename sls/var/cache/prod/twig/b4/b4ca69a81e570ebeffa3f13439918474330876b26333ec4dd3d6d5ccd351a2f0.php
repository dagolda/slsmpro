<?php

/* BoAdminBundle:Tadmin:showactions.html.twig */
class __TwigTemplate_3a8fe9ea24d58f78d42223a694edba4a97442b0fc912600ca875282782caef74 extends Twig_Template
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
        $__internal_e1aba8200f10c63e2b719e22f28cfe90091e283e19e7b1a1152ccc74eeef9a3b = $this->env->getExtension("native_profiler");
        $__internal_e1aba8200f10c63e2b719e22f28cfe90091e283e19e7b1a1152ccc74eeef9a3b->enter($__internal_e1aba8200f10c63e2b719e22f28cfe90091e283e19e7b1a1152ccc74eeef9a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Tadmin:showactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["tadmin"]) ? $context["tadmin"] : $this->getContext($context, "tadmin")), "employee", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t";
        // line 8
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "ddelete", array()) == 1))) {
            // line 9
            echo "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-delete\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.delete", array(), "BoAdminBundle"), "html", null, true);
            echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-info btn-lg modal-create\" data-toggle=\"modal\" data-target=\"#add_spec\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.duplicate", array(), "BoAdminBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t</td>

\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_e1aba8200f10c63e2b719e22f28cfe90091e283e19e7b1a1152ccc74eeef9a3b->leave($__internal_e1aba8200f10c63e2b719e22f28cfe90091e283e19e7b1a1152ccc74eeef9a3b_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Tadmin:showactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  42 => 11,  38 => 9,  36 => 8,  29 => 6,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td>*/
/* 						<a href="{{ path('employee_show',{'id':tadmin.employee.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].ddelete==1%}*/
/* 						<td>*/
/* 							<button type="button" class="btn btn-info btn-lg modal-delete" data-toggle="modal" data-target="#myModal">*/
/* 								{{'action.delete'|trans([],'BoAdminBundle')}}*/
/* 							</button>*/
/* 						</td>*/
/* 					{%endif%}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-info btn-lg modal-create" data-toggle="modal" data-target="#add_spec">{{'action.duplicate'|trans([],'BoAdminBundle')}}</button>*/
/* 					</td>*/
/* */
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
