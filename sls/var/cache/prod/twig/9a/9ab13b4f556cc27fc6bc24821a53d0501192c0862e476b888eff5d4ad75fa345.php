<?php

/* BoAdminBundle:Employee:securitycoteactions.html.twig */
class __TwigTemplate_c6a0b19ef977f47ae6a5ba3195eeca2e86fe30f0eb2363d6a1ab7343ac75a325 extends Twig_Template
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
        $__internal_41257c4a7137a6677dd3f3e20bc2c4a574b60d50530bf895a76a6f773e35ea15 = $this->env->getExtension("native_profiler");
        $__internal_41257c4a7137a6677dd3f3e20bc2c4a574b60d50530bf895a76a6f773e35ea15->enter($__internal_41257c4a7137a6677dd3f3e20bc2c4a574b60d50530bf895a76a6f773e35ea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:securitycoteactions.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-create\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create", array(), "BoAdminBundle"), "html", null, true);
        echo "</button></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("employee_show", array("id" => $this->getAttribute((isset($context["employee"]) ? $context["employee"] : $this->getContext($context, "employee")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_41257c4a7137a6677dd3f3e20bc2c4a574b60d50530bf895a76a6f773e35ea15->leave($__internal_41257c4a7137a6677dd3f3e20bc2c4a574b60d50530bf895a76a6f773e35ea15_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:securitycoteactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 					<td><button type="submit" id="btn-create">{{'action.create'|trans([],'BoAdminBundle')}}</button></td>*/
/* 					<td>*/
/* 						<a href="{{ path('employee_show',{'id':employee.id}) }}">{{'action.back'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
