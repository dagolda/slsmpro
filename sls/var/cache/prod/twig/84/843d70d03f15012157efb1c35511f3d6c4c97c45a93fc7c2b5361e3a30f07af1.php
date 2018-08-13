<?php

/* BoAdminBundle:Employee:backactions.html.twig */
class __TwigTemplate_1235bd69fadd56b3e1b9cfc9fb87a5781b2bd2697bee76cfc31c16f2c2dd1dd4 extends Twig_Template
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
        $__internal_f2100d36eaf79ee634dd91a5b60fad3d65a6d02a2f4d94c3754c1e278f9731f2 = $this->env->getExtension("native_profiler");
        $__internal_f2100d36eaf79ee634dd91a5b60fad3d65a6d02a2f4d94c3754c1e278f9731f2->enter($__internal_f2100d36eaf79ee634dd91a5b60fad3d65a6d02a2f4d94c3754c1e278f9731f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BoAdminBundle:Employee:backactions.html.twig"));

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
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"inp-search\" ";
            // line 7
            if ((array_key_exists("description", $context) &&  !(null === (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description"))))) {
                echo " value=\"";
                echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t\t</td>
\t\t\t\t\t<td><button type=\"submit\" id=\"btn-search\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.search", array(), "BoAdminBundle"), "html", null, true);
            echo "</button></td>
\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "rights"), "method", false, true), "STAFF", array(), "array", false, true), "Employees", array(), "array", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "rights"), "method"), "STAFF", array(), "array"), "Employees", array(), "array"), "creation", array()) == 1))) {
            // line 12
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a id=\"new_action\" href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("employee_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.add", array(), "BoAdminBundle"), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 15
        echo "\t\t
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("employee_index");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.list", array(), "BoAdminBundle"), "html", null, true);
        echo "</a>
\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t
\t\t</div>
\t</div>\t";
        
        $__internal_f2100d36eaf79ee634dd91a5b60fad3d65a6d02a2f4d94c3754c1e278f9731f2->leave($__internal_f2100d36eaf79ee634dd91a5b60fad3d65a6d02a2f4d94c3754c1e278f9731f2_prof);

    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Employee:backactions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  61 => 15,  53 => 13,  50 => 12,  47 => 11,  42 => 9,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<table>*/
/* 				<tr>*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].search==1%}*/
/* 					<td class="form-group">*/
/* 						<input type="text" class="form-control" id="inp-search" {%if description is defined and description is not null%} value="{{description}}"{%endif%}>*/
/* 					</td>*/
/* 					<td><button type="submit" id="btn-search">{{'action.search'|trans([],'BoAdminBundle')}}</button></td>*/
/* 				{%endif%}*/
/* 				{%if app.session.get('rights')['STAFF']['Employees'] is defined and app.session.get('rights')['STAFF']['Employees'].creation==1%}*/
/* 					<td>*/
/* 						<a id="new_action" href="{{ path('employee_new') }}">{{'action.add'|trans([],'BoAdminBundle')}}</a>*/
/* 					</td>*/
/* 				{%endif%}		*/
/* 				<td>*/
/* 					<a href="{{ path('employee_index') }}">{{'title.list'|trans([],'BoAdminBundle')}}</a>*/
/* 				</td>*/
/* 				</tr>*/
/* 			</table>		*/
/* 		</div>*/
/* 	</div>	*/
