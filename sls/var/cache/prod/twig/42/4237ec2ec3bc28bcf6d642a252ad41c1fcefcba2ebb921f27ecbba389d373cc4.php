<?php

/* BoAdminBundle:Employee:activeaction.html.twig */
class __TwigTemplate_3d31d984bc37574438827f73591d3cc335caa318a039d7a5e89a30fba92fbf34 extends Twig_Template
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
        $__internal_7aeedcec664cebebd9a31c9f32a5b26d576d82a69b5914b5345558c6bc988930 = $this->env->getExtension("native_profiler");
        $__internal_7aeedcec664cebebd9a31c9f32a5b26d576d82a69b5914b5345558c6bc988930->enter($__internal_7aeedcec664cebebd9a31c9f32a5b26d576d82a69b5914b5345558c6bc988930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:activeaction.html.twig"));

        // line 1
        echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "search", array()) == 1))) {
            // line 6
            echo "\t\t\t\t\t<td class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "liste", array()) == 1))) {
            echo "\t\t
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("employee_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"total_number\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\tTotal ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity.employee", array(), "BoAdminBundle"), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, "", " "), "html", null, true);
            echo "</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>
";
        
        $__internal_7aeedcec664cebebd9a31c9f32a5b26d576d82a69b5914b5345558c6bc988930->leave($__internal_7aeedcec664cebebd9a31c9f32a5b26d576d82a69b5914b5345558c6bc988930_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:activeaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  55 => 17,  46 => 13,  40 => 11,  35 => 9,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search">*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].liste==1%}		*/
/* 					<td>*/
/* 						<a href="{{ path('employee_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 					<td class="total_number">*/
/* 						<button type="button" class="btn btn-primary">*/
/* 							Total {{'entity.employee'|trans([],'BoAdminBundle')}} <span class="badge">{{total|number_format(0,""," ")}}</span>*/
/* 						</button>*/
/* 					</td>*/
/* 				{%endif%}*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>*/
/* */
